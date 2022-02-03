@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">

<h6>Student /id / add course</h6>
<a class="btn btn-primary btn-sm" href="{{route('admin.students.index')}}">Back</a>

</div>
@include('admin.inc.errors')

<form method="post" action="{{route('admin.students.storeCourse', $student_id)}}" >

@csrf
<input type="hidden" name="id" value="{{$student_id}}">
<div class="form-group">
<select class="form-control" name="course_id">
          @foreach($courses as $course)
          <option value="{{$course->id}}">{{$course->name}}</option>
          @endforeach
        </select>
  </div>
  


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection