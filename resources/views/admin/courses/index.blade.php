@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">

<h6>Courses</h6>
<a class="btn btn-primary btn-sm" href="{{route('admin.courses.create')}}">Add New</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Img</th>
      <th scope="col">Name</th>
      <th scope="col">price</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($courses as $course)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>
      <img src="{{asset('uploads/courses/' .$course->img)}}" height="50px" alt="">
      </td>
      <td>{{$course->name}}</td>
      <td>{{$course->price}}</td>
      <td>
      <a class="btn btn-info btn-sm" href="{{route('admin.courses.edit', $course->id)}}">Edit</a>
      <a class="btn btn-danger btn-sm" href="{{route('admin.courses.delete', $course->id)}}">Delete</a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>


@endsection