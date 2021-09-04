@section('title',e($onegallery['0']->gallery_name))
@section('meta_discription','meta_discription')
@section('meta_keyword','meta_keyword')
@extends('frontend.layout.app')
@section('header-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css"
    integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
   .gallery {display: grid;grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));grid-gap: 15px;padding: 15px;max-width: 950px;margin: 0 auto;}.gallery .gallery-item {width: 100%;height: 400px;position: relative;}.gallery-item img {width: 100%;height: 400px;-o-object-fit: cover;object-fit: cover;}
</style>
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
        <div class="gallery" id="gallery">
            @foreach ($onegallery as $item)
            <div class="gallery-item">
                <a href="{{$item->gallery_img_name}}" data-lightbox="image-1" data-title="{{$onegallery['0']->gallery_name}} ">
                    <img src="{{$item->gallery_img_name}}" alt="{{$onegallery['0']->gallery_img_name}} " />
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
@section('footer-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"
    integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })

</script>
@endsection
