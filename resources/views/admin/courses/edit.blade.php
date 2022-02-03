@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">

<h6>Course /id /{{$course->name}}</h6>
<a class="btn btn-primary btn-sm" href="{{route('admin.courses.index')}}">Back</a>

</div>
@include('admin.inc.errors')

<form method="post" action="{{route('admin.courses.update')}}" enctype="multipart/form-data">
@csrf
   <input type="hidden" name="id" value="{{$course->id}}">
          <div class="form-group">
            <label >Name</label>
            <input type="text" class="form-control" name="name" value="{{$course->name}}">
          </div>

        <div class="form-group">
        <label >Category name</label>
          <select class="form-control" name="cat_id">
          @foreach($cats as $cat)
          <option value="{{$cat->id}}" @if($course->cat_id == $cat->id)selected @endif >{{$cat->name}}</option>
          @endforeach
        </select>
        </div>

        <div class="form-group">
        <label >Trainer name</label>
        <select class="form-control" name="trainer_id">
        @foreach($trainers as $trainer)
          <option value="{{$trainer->id}}" @if($course->trainer_id == $trainer->id)selected @endif>{{$trainer->name}}</option>
          @endforeach
        </select>
        </div>

          <div class="form-group">
            <label >Small Desc</label>
            <input type="text" class="form-control" name="small_desc" value="{{$course->small_desc}}">
          </div>
          <div class="form-group">
            <label >Desc</label>
            <textarea class="form-control" id="" cols="30" rows="10" name="desc">{{$course->desc}}</textarea>
          </div>
          <div class="form-group">
            <label >Price</label>
            <input type="text" class="form-control" name="price" value="{{$course->price}}">
          </div>
          <div class="form-group">
            <label >Image</label>
            <input type="file" class="form-control-file" name="img">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection