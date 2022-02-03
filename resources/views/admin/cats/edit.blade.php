@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">

<h6>Categories /id /{{$cat->name}}</h6>
<a class="btn btn-primary btn-sm" href="{{route('admin.cats.index')}}">Back</a>

</div>
@include('admin.inc.errors')

<form method="post" action="{{route('admin.cats.update')}}">

@csrf
<input type="hidden" name="id" value="{{$cat->id}}">
<div class="form-group">
    <label >Name</label>
    <input type="text" name="name" class="form-control" value="{{$cat->name}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection