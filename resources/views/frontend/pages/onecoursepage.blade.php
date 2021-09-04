@section('title',e($onecoursepage->course_name))
@section('meta_discription','meta_discription')
@section('meta_keyword','meta_keyword')
@extends('frontend.layout.app')
@section('header-css')
@endsection
@section('content')
<header class="header_inner blog_page">
    <div class="intro_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="intro_text">
                        <h1>{{$onecoursepage->course_name}}</h1>
                        <div class="pages_links">
                            <a href="{{route('homepage')}}" title="">Home</a>
                            <a href="{{route('coursepage')}}" title="">Course</a>
                            <a href="#" title="{{$onecoursepage->course_name}}"
                                class="active">{{$onecoursepage->course_name}}</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header> <!-- End header -->
<section class="blog_wrapper" id="courses_details_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="courses_details">
                    <div class="single-curses-contert">
                        <h2>{{$onecoursepage->course_name}}</h2>
                        <div class="details-img-bxo">
                            <img src="images/blog/blog3-1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="courses_tab_wrapper">
                        <div class="courses_details_nav_tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="#information" role="tab" data-toggle="tab">Information</a></li>
                                <li class="nav-item"><a class="nav-link" href="#curricularm" role="tab" data-toggle="tab">Curricularm</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">₹&nbsp; {{ $onecoursepage->price }}</a></li>
                            </ul>
                        </div>

                        <!-- Tab panes -->
                        <div class="tab_contents tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                <h3>Courses Description <span>:</span></h3>
                                {!! $onecoursepage->course_discription !!}
                                <h3>Learning Outcomes <span>:</span></h3>
                                {!! $onecoursepage->course_outcome !!}
                                <div class="social_wrapper d-flex">
                                    <span>Share : </span>
                                    <ul class="social-items d-flex list-unstyled">
                                        <li><a
                                                href="https://www.facebook.com/sharer.php?u={{ asset('') }}institute/{{$onecoursepage->slug}}"><i
                                                    class="fab fa-facebook-f fb_icon"></i></a></li>
                                        <li><a
                                                href="https://twitter.com/share?url={{ asset('') }}institute/{{$onecoursepage->slug}}&text={{$onecoursepage->course_name}}&via=NextGyaan.com&hashtags=#NextGyaan"><i
                                                    class="fab fa-twitter tw_icon"></i></a></li>
                                        <li><a
                                                href="whatsapp://send?text={{ asset('') }}institute/{{$onecoursepage->slug}}  {{$onecoursepage->course_name}}"><i
                                                    class="fab fa-linkedin-in link_icon"></i></a></li>
                                        <li><a
                                                href="https://www.kooapp.com/create?title={{$onecoursepage->course_name}}  {{ asset('') }}institute/{{$onecoursepage->slug}} &link={{ asset('') }}institute/{{$onecoursepage->slug}}&language=en&handle=nextgyaan_institute_share&utm_source=nextgyaan_institute_share&utm_campaign=nextgyaan_institute_share"><i
                                                    class="fab fa-instagram in_icon"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="curricularm">
                                <div class="curriculum-text-box">
                                    <div class="curriculum-section">
                                        <div class="panel-group" id="accordion">
                                            {!! $onecoursepage->course_outcome !!}
                                        </div> s
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--End Blog Siderbar Left-->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                <div class="blog-right-items">
                    <div class="courses_features widget_single">
                        <div class="items-title">
                            <h3 class="title">Courses Features</h3>
                        </div>
                        <div class="features_items">
                            <ul class="list-unstyled">
                                <li><a href="#" title=""><i class="flaticon-page"></i> Lessons </a><span>{{$onecoursepage->no_of_lession}} </span></li>
                                {{-- <li><a href="#" title=""><i class="flaticon-eye-open"></i> Viewers</a><span>56</span></li> --}}
                                <li><a href="#" title=""><i class="flaticon-clock-circular-outline"></i>Duration</a><span>{{$onecoursepage->duration}} </span></li>
                                <li><a href="#" title=""><i class="flaticon-padlock"></i> Prequisite</a><span>{{$onecoursepage->prequisite}}</span></li>
                                <li><a href="#" title=""><i class="flaticon-diploma"></i>Certificate</a><span>{{$onecoursepage->certification}} </span></li>
                                <li><a href="#" title=""><i class="flaticon-language"></i> Language</a><span>Eng / Hindi</span></li>
                                {{-- <li><a href="#" title=""><i class="flaticon-thumbs-up-hand-symbol"></i>Skills</a><span>Any</span></li> --}}
                                {{-- <li><a href="#" title=""><i class="flaticon-edit"></i> Assessments</a><span>Yes</span> --}}
                                </li>
                            </ul>
                        </div>
                        <img src="{{asset("vendor/theme/eduwise")}}/images/shapes/testimonial_2_shpe_2.png" alt=""
                            class="courses_feaures_shpe">
                    </div>



                    <div class="recent_post_wrapper popular_courses_post widget_single">
                        <div class="items-title">
                            <h3 class="title">Our Latest News</h3>
                        </div>
                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img
                                        src="{{asset("vendor/theme/eduwise")}}/images/courses/spi-01.jpg" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">How to Become Master In CSS within qa Week.</a>
                                <div class="courses_price">
                                    <div class="price"><span><del>74$</del></span> <span class="new_price">49$</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img
                                        src="{{asset("vendor/theme/eduwise")}}/images/courses/spi-02.jpg" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">Connecting volunteers & nonprofitsz worldwide.</a>
                                <div class="courses_price">
                                    <div class="price"><span><del>60$</del></span> <span class="new_price">38$</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img
                                        src="{{asset("vendor/theme/eduwise")}}/images/courses/spi-03.jpg" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">Research of Learn training process</a>
                                <div class="courses_price">
                                    <div class="price"><span class="new_price">79$</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="get_discount widget_single">
                        <div class="items-title">
                            <p>New Spcial Offers</p>
                            <h3>Get 35% Off</h3>
                            <a href="#" title="">Get Started</a>
                        </div>

                        <img src="{{asset("vendor/theme/eduwise")}}/images/shapes/testimonial_2_shpe_2.png" alt=""
                            class="courses_feaures_shpe">
                    </div>

                    <div class="archives widget_single">
                        <div class="items-title">

                            <h3 class="title">All Categories</h3>

                        </div>
                        <div class="archives-items">
                            <ul class="list-unstyled">
                                @foreach ($coursecategory as $item)
                                <li><a href="#" title="{{$item->category_name}}">{{$item->category_name}}</a></li>
                                @endforeach

                                {{-- <li><a href="#" title="">Busness</a></li>
                                <li><a href="#" title="">IT & Software</a></li>
                                <li><a href="#" title="">Languages</a></li>
                                <li><a href="#" title="">Programming</a></li>
                                <li><a href="#" title="">Technology</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- End Right Sidebar-->

        </div>
    </div>
</section><!-- ./ End  Blog Wrapper-->



<!--Start Courses Area Section-->
<section class="popular_courses" id="related_courses_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="title">
                    <h2>Related Courses</h2>
                </div><!-- ends: .section-header -->
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div id="related_courses" class="owlCarousel">
                    @foreach ($course as $item)
                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="{{route('onecoursepage',$item->slug)}}"><img
                                        src="{{$item->course_feat_img}}" alt="{{$item->course_name}}"
                                        class="img-fluid"></a></div>
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
                    @endforeach

                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->
        </div>

    </div>
</section><!-- ./ End Courses Area section -->
@endsection
@section('footer-script')
@endsection
