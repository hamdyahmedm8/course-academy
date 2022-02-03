@extends('front.layout')

@section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Courses</h2>
                        <p>Home<span>/</span>Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular courses</p>
                        <h2>Special Courses</h2>


                        <div class="input-group my-5">
                            <input type="text" id="keyword" class="form-control" placeholder='Enter course name'
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter course name'">
                        </div>

                    </div>
                </div>
            </div>
            <div id="allcourses" class="row">

                @foreach($allcourses as $course)

                    <div class="col-sm-6 col-lg-4 mb-5">
                        <div class="single_special_cource">
                        <img src="{{asset('/uploads/courses/'.$course->img)}}" class="special_img" alt="">
                            <div class="special_cource_text">
                                <a href="{{route('front.cat', $course->cat->id)}}" class="btn_4">{{$course->cat->name}}</a>
                                <h4>{{$course->price}}</h4>
                                <a href="{{route('front.show', [$course->cat->id,$course->id])}}"><h3>{{$course->name}}</h3></a>
                                <!-- <a href="{{url('/cat/'.$course->cat_id.'/course/'.$course->id)}}"><h3>{{$course->name}}</h3></a> -->
                                
                                <p>{{$course->desc}}</p>
                            </div>

                        </div>
                    </div>

                @endforeach  
 

            </div>
        </div>
    </section>
    <!--::blog_part end::-->

@endsection


@section('javeScript')

<!-- <script src="{{asset('front')}}/js/jquery-1.12.1.min.js"></script> -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script>

$('#keyword').keyup(function(){
    let keyword = $(this).val()
    $('#allcourses').empty()


$.ajax({
        type: "GET",
        url: "{{ url('/courses/search') }}" + "?keyword=" + keyword,
        contentType: false,
        processData: false,
        success: function (data)
        {
            $('#allcourses').empty()

            for (course of data)
            {
                $('#allcourses').append(`
                
                    <div class="col-sm-6 col-lg-4 mb-5">
                        <div class="single_special_cource">
                        <img src="{{asset('/uploads/courses/${course.img}') }}" class="special_img" alt="">
                            <div class="special_cource_text">
                                <a href="{{url('/cat/')}}/${course.cat_id}" class="btn_4">${course.cat.name}</a>
                                <h4>${course.price}</h4>
                                <a href="{{url('/cat/')}}/${course.cat_id}/course/${course.id}"><h3>${course.name}</h3></a>
                                <p>${course.desc}</p>
                            </div>

                        </div>
                    </div>
                
                `)
            }
        }
    })
})


</script>

@endsection




