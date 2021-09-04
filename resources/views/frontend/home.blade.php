@section('title','homepage')
@section('meta_discription','meta_discription')
@section('meta_keyword','meta_keyword')
@extends('frontend.layout.app')
@section('header-css')
<style>
    .course-img {
        max-width: 400px;
        max-height: 250px;
    }

</style>
@endsection
@section('content')
<div class="rev_slider_wrapper">
    <div id="rev_slider_2" class="rev_slider" style="display:none">
        <ul>
            @foreach ($slider as $item)
            <li data-index="rs-1706" data-transition="fade" data-slotamount="7" data-hideafterloop="0"
                data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1000"
                data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                data-param10="" data-description="">
                <div class="slider-overlay"></div>
                <img src="{{$item->slider_img}}" alt="{{$item->slug}}" class="rev-slidebg"
                    data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                    class="rev-slidebg" data-no-retina>
            </li>
            @endforeach
        </ul>
    </div>
</div>
</header>
<section class="unlimited_possibilities">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Unlimited Possibilities</h2>
                    <p>When you join the large and empowred family of CITET you will find 
                        Unilimited Possibilitites to grow your self and make the mark in the world.
                    </p>
                </div><!-- ends: .section-header -->
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_first">
                    <div class="icon_wrapper">
                        <i class="flaticon-student"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Smart Way of Learning</a></h3>
                        <p>Here at CITET we use smart way to teach the students the requied skills and 
                            we make sure it by doing multiple Practicle Sessions.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_center">
                    <div class="icon_wrapper">
                        <i class="flaticon-university"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Nearby Locations</a></h3>
                        <p>CITET is spread in all over the india to let the students easily find and get 
                            the admission and study in  their native language.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_last">
                    <div class="icon_wrapper">
                        <i class="flaticon-diploma"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Global Certification</a></h3>
                        <p>CITET is Certified by ISO 9001:2008 and registered Under the Indian Trust 
                            Act 1882 which it's makes the Certificaion more valuable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Unlimited Possibilities -->



<section class="learn_shep">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                <div class="title">
                    <h2>Take The First Step To Learn With Us.</h2>
                    <p>At CITET we have multiple and multi directions of courses to learn and grow youself.
                        You can choose form the various of the coures to findout which will make you more 
                        profitable and more Knowledgable. </p>
                    <a href="{{route('coursepage')}}" title="">View Courses</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 ml-auto p-0">
                <div class="shep_banner_wrapper">
                    <div class="step_single_banner">
                        <img src="{{asset("vendor/theme/eduwise")}}/images/features/features_2_1.jpg" alt=""
                            class="img-fluid">
                        <img src="{{asset("vendor/theme/eduwise")}}/images/features/features_2_2.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <div class="step_single_banner">
                        <img src="{{asset("vendor/theme/eduwise")}}/images/features/features_2_3.jpg" alt=""
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Larnign Step -->



<section class="popular_courses" id="popular_courses_2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Our Popular Courses</h2>
                    <p>Here the some of the latest added the course from which
                        you can select.</p>
                </div><!-- ends: .section-header -->
            </div>
            @foreach ($course as $item)
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="{{route('onecoursepage',$item->slug)}}"><img
                                    src="{{$item->course_feat_img}}" alt="{{$item->course_name}}"
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
        </div>
    </div>
    <div class="shape_bg">
        <span class="shape_1"></span>
        <span class="shape_2"></span>
        <span class="shape_3"></span>
    </div>
</section> <!-- ./ End Courses Area section -->
@include('frontend.layout.counter_form')
@if(!$testimonials->isEmpty())
<section class="testimonial_2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="title">
                    <h2>What Our Student Say About Us</h2>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="testimonial_wrapper_4">
                    @foreach ($testimonials as $item)
                    <div class="testimonial_single">
                        <p>" {{Str::limit($item->discription, 238)}} "</p>
                        <div class="reviewer_info">
                            <div class="member-img">
                                <img src="{{$item->img}}" alt="member img" class="img-fluid  wow zoomIn"
                                    data-wow-duration="2s" data-wow-delay=".2s">
                            </div>
                            <h4>{{$item->name}}</h4>
                            <span>{{$item->position}}</span><br>
                            <span><a href="#" class="text-primary">View All</a></span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="shape_wrapper">
        <img src="{{asset("vendor/theme/eduwise")}}/images/shapes/testimonial_2_shpe_2.png" alt="@isset($settings['site_name']){{$settings['site_name']}}@endisset" class="shape_1">
        <img src="{{asset("vendor/theme/eduwise")}}/images/shapes/testimonial_2_shpe_3.png" alt="@isset($settings['site_name']){{$settings['site_name']}}@endisset" class="shape_2">
        <img src="{{asset("vendor/theme/eduwise")}}/images/shapes/testimonial_2_shpe_1.png" alt="@isset($settings['site_name']){{$settings['site_name']}}@endisset" class="shape_3">
    </div>
</section>
@endif
<!-- End Testimonial -->



<section class="latest_news_2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Latest Citet News</h2>
                    <p>Here some latest news form the CITET</p>
                </div><!-- ends: .section-header -->
            </div>

            @foreach ($news as $item)
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item">
                    <div class="item_wrapper" style="    min-width: 383px;
                    min-height: 353px;">
                        <div class="blog-img">
                            <a href="#" title=""><img
                                    src="{{$item->feat_img}}" style="max-height: 421px;max-width:262px;" alt=""
                                    class="img-fluid"></a>
                        </div>
                        <h3><a href="#" title="">How to Become Master In CSS within qa Week.</a></h3>
                    </div>
                    <div class="blog_title">
                        <ul class="post_bloger">
                            <li><i class="fas fa-user"></i>CITET</li>
                            <li><i class="fas fa-comment"></i>0 Comments</li>
                            <li><i class="fas fa-thumbs-up"></i> 0 Like</li>
                        </ul>
                    </div>
                    <a href="#">
                        <div class="twitter_post">
                            <div class="blog_title">
                                <div class="icon_wrapper">
                                    <i class="fab fa-twitter twitt-icon"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus
                                    eget.
                                    Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>
                                <a href="#" title="">https://t.co/djPsTmfgh</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- End Blog -->
@endsection
@section('footer-script')

@endsection
