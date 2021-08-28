@section('title',e($onegallery['0']->gallery_name))
@section('meta_discription','meta_discription')
@section('meta_keyword','meta_keyword')
@extends('frontend.layout.app')
@section('header-css')

@endsection
@section('content')
<header class="header_inner courses_page">
    <div class="intro_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="intro_text">
                        <h1>{{$onegallery['0']->gallery_name}} </h1>
                        <div class="pages_links">
                            <a href="{{route('homepage')}}" title="">Home</a>
                            <a href="#" title="Course" class="active">{{$onegallery['0']->gallery_name}}</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<section class="popular_courses" id="popular_courses_page">
    <div class="container">
        {{-- <div class="row"> --}}

            <div class="gallery" id="gallery">
                @foreach ($onegallery as $item)
                <div class="grid-item">
                    <div class="content"><img src="{{$item->gallery_img_name}}" alt=""></div>
                </div>
                @endforeach
            </div>

        {{-- </div> --}}

    </div>
</section>
@endsection
@section('footer-script')
@endsection
