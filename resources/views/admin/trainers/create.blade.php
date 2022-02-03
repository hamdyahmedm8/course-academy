@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">

<h6>Trainers / Add new</h6>
<a class="btn btn-primary btn-sm" href="{{route('admin.trainers.index')}}">Back</a>
</div>

@include('admin.inc.errors')

<form method="post" action="{{route('admin.trainers.store')}}" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label >Phone</label>
    <input type="text" class="form-control" name="phone">
  </div>
  <div class="form-group">
    <label >Speciality</label>
    <input type="text" class="form-control" name="spec">
  </div>
  <div class="form-group">
    <label >Image</label>
    <input type="file" class="form-control-file" name="img">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection