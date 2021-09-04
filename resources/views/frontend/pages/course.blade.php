@section('title','Course')
@section('meta_discription','meta_discription')
@section('meta_keyword','meta_keyword')
@extends('frontend.layout.app')
@section('header-css')
<style>
.course-img {max-width: 400px;max-height: 250px;}
</style>
@endsection
@section('content')
<header class="header_inner courses_page">
    <div class="intro_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="intro_text">
                        <h1>Courese </h1>
                        <div class="pages_links">
                            <a href="{{route('homepage')}}" title="">Home</a>
                            <a href="#" title="Course" class="active">Course</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<section class="popular_courses" id="popular_courses_page">
    <div class="container">
        <div class="row">
            @foreach ($course as $item)
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="{{route('onecoursepage',$item->slug)}}"><img src="{{$item->course_feat_img}}" alt="{{$item->course_name}}"
                                    class="img-fluid course-img"></a></div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="{{route('onecoursepage',$item->slug)}}">{{$item->course_name}}</a></h3>
                        </div>
                        <div class="courses_info">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-calendar-alt"></i>{{$item->duration}}&nbsp;Months</li>
                                <li><i class="fas fa-book"></i>{{$item->no_of_lession}} &nbsp; Lessions</li>
                            </ul>
                            <a href="{{route('onecoursepage',$item->slug)}}" class="cart_btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
             {{-- {{ $course->links('vendor.pagination.custom') }} --}}
        </div>

    </div>
</section>
@endsection
@section('footer-script')

@endsection
