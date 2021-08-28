@section('title','Gallery')
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
                        <h1>Gallery </h1>
                        <div class="pages_links">
                            <a href="{{route('homepage')}}" title="">Home</a>
                            <a href="#" title="Course" class="active">Gallery</a>
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
            @foreach ($gallery as $item)
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="{{route('gallerysingle',$item->slug)}}"><img src="{{$item->thumbnail}}" alt="{{$item->gallery_name}}"
                                    class="img-fluid course-img"></a></div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="{{route('gallerysingle',$item->slug)}}">{{$item->gallery_name}}</a></h3>
                        </div>
                        <div class="courses_info">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-calendar-alt"></i>{{$item->created_at->format('d/m/y')}}</li>
                            </ul>
                            <a href="{{route('gallerysingle',$item->slug)}}" class="cart_btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="pagination_blog">
                <ul>
                    <li><a href="#">1</a></li>
                    <li class="current"><a href="#">2</a></li>
                    <li><a href="#" class=""><i class='flaticon-right-arrow'></i></a></li>
                </ul>
            </div>
        </div>

    </div>
</section>
@endsection
@section('footer-script')

@endsection
