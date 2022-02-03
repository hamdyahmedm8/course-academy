@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
<h6>Students / Show Courses</h6>
<div>
<a class="btn btn-info btn-sm" href="{{route('admin.students.addCourse', $student_id)}}">add to course</a>
<a class="btn btn-primary btn-sm" href="{{route('admin.students.index')}}">back</a>

</div>
</div>

<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Status </th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($courses as $course)
        <tr>
        <td>{{$loop->iteration}}</td>
            <td>
             {{$course->name}}
            </td>
            <td>
             {{$course->pivot->status}}
            </td>
            <td>
            @if($course->pivot->status !== 'approve')
      <a class="btn btn-info btn-sm" href="{{route('admin.students.approveCourse', [$student_id , $course->id])}}">approve</a>
            @endif
            @if($course->pivot->status !== 'reject')
      <a class="btn btn-danger btn-sm" href="{{route('admin.students.rejectCourse', [$student_id , $course->id])}}">Reject</a>
            @endif

      </td>
        </tr>
    @endforeach
    </tbody>
  </table>

@endsection