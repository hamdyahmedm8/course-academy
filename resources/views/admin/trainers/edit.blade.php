@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">

<h6>Trainer /id /{{$trainer->name}}</h6>
<a class="btn btn-primary btn-sm" href="{{route('admin.trainers.index')}}">Back</a>

</div>
@include('admin.inc.errors')

<form method="post" action="{{route('admin.trainers.update')}}" enctype="multipart/form-data">

@csrf
<input type="hidden" name="id" value="{{$trainer->id}}">
<div class="form-group">
    <label >Name</label>
    <input type="text" name="name" class="form-control" value="{{$trainer->name}}">
  </div>
  <div class="form-group">
    <label >Phone</label>
    <input type="text" class="form-control" name="phone" value="{{$trainer->phone}}">
  </div>
  <div class="form-group">
    <label >Speciality</label>
    <input type="text" class="form-control" name="spec" value="{{$trainer->spec}}">
  </div>

  <img src="{{asset('uploads/trainers/'.$trainer->img)}}" height="100px" class="mb-3">
  <div class="form-group">
    <input type="file" class="form-control-file" name="img">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection