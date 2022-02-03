@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">

<h6>Students / Add new</h6>
<a class="btn btn-primary btn-sm" href="{{route('admin.students.index')}}">Back</a>
</div>

@include('admin.inc.errors')

<form method="post" action="{{route('admin.students.store')}}" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label >Speciality</label>
    <input type="text" class="form-control" name="spec">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection