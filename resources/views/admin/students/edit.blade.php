@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">

<h6>Student /id /{{$student->name}}</h6>
<a class="btn btn-primary btn-sm" href="{{route('admin.students.index')}}">Back</a>

</div>
@include('admin.inc.errors')

<form method="post" action="{{route('admin.students.update')}}" enctype="multipart/form-data">

@csrf
<input type="hidden" name="id" value="{{$student->id}}">
<div class="form-group">
    <label >Name</label>
    <input type="text" name="name" class="form-control" value="{{$student->name}}">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="text" class="form-control" name="email" value="{{$student->email}}">
  </div>
  <div class="form-group">
    <label >Speciality</label>
    <input type="text" class="form-control" name="spec" value="{{$student->spec}}">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection