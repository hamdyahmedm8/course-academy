<?php

namespace App\Http\Controllers\Front;
use App\newsletter;
use App\massage;
use App\Student;
use Illuminate\Support\facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class massageController extends Controller
{
   public function newsletter(request $request){
    $data=$request->validate([
    'email'=>'required|email'
    ]);
    newsletter::create($data);
    return back();
   }
   public function contact(request $request){
      $data=$request->validate([
      'name'=>'required|string|max:191',
      'email'=>'required|email|max:191',
      'subject'=>'nullable|string|max:191',
      'massage'=>'required|string|max:10000',
      ]);
      massage::create($data);
      return back();
     }
     public function enroll(request $request){
      $data=$request->validate([
      'name'=>'nullable|string|max:191',
      'email'=>'required|email|max:191',
      'spec'=>'nullable|string|max:191',
      'course_id'=>'required|string|max:10000',
      ]);
      $old_student=Student::select('id')->where('email',$data['email'])->first();
         if($old_student == null)
         {
            $student= Student::create([
                'name'=>$data['name'],
                'email'=>$data['email'],
                'spec'=>$data['spec'],
             ]);
       
             $student_id=$student->id;
         }
         else{
            $student_id= $old_student->id;
            if($data['name'] !==null){
               $old_student->update(['name'=> $data['name']]);
            }
            if($data['spec'] !==null){
               $old_student->update(['spec'=> $data['spec']]);
            }
         }

      db::table('course_student')->insert([
         'course_id'=>$data['course_id'],
         'student_id'=>$student_id,
         'created_at'=>now(),
         'updated_at'=>now(),

     ]);
      return back();
     }
}
