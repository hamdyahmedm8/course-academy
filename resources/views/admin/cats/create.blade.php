@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">

<h6>Categories / Add new</h6>
<a class="btn btn-primary btn-sm" href="{{route('admin.cats.index')}}">Back</a>
</div>

@include('admin.inc.errors')

<form method="post" action="{{route('admin.cats.store')}}">
@csrf
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection