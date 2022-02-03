<?php

namespace App\Http\Controllers\Admin;
use App\Cat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index(){
        $data['cats']=Cat::select('id','name')->orderBy('id','desc')->get();
        return view('admin.cats.index')->with($data);
    }
    public function create(){
        return view('admin.cats.create');
    }
    public function store(request $request){
        $data=$request->validate([
            'name'=>'required|string|max:20'
        ]);
            Cat::create($data);
            return redirect(route('admin.cats.index'));
    }
    public function edit($id){

        $data['cat']=Cat::findOrFail($id);
        return view('admin.cats.edit')->with($data);
    }
    public function update(request $request){
        $data=$request->validate([
            'name'=>'required|string|max:20'
        ]);
            Cat::findOrFail($request->id)->update($data);
            return back();
    }
    public function delete($id){
        Cat::findOrFail($id)->delete();
        return back();
    }
}
