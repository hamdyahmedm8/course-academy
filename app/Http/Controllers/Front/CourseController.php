<?php

namespace App\Http\Controllers\Front;
use App\Cat;
use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function cat($id){
        $data['cat']=Cat::findOrFail($id);
        $data['courses']= Course::where('cat_id',$id)->paginate(3);
        return view('front.courses.cat')->with($data);
    }
    public function show($id,$c_id){
        $data['course']=Course::findOrFail($c_id);
        return view('front.courses.show')->with($data);

    }
    public function getCourses(){
        $data['allcourses']=Course::get();
        return view('front.courses.allcourses')->with($data);

    }
    public function search(Request $request){
        $keyword = $request->keyword;
        // $data['category'] = Category::where('id' , $id)->first();
        $courses=Course::with('cat')->where('name' , 'LIKE' , "%$keyword%")->get();

        return response()->json($courses);
    }
}
