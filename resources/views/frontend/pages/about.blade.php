@section('title','About Us')
@section('meta_discription','meta_discription')
@section('meta_keyword','meta_keyword')
@extends('frontend.layout.app')
@section('content')
<header class="header_inner about_page">
    <div class="intro_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="intro_text">
                        <h1>About Us</h1>
                        <div class="pages_links">
                            <a href="{{route('homepage')}}" title="">Home</a>
                            <a href="#" title="" class="active">About Us</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header> <!-- End nav -->
<section class="login_signup_option">
    <div class="l-modal is-hidden--off-flow js-modal-shopify">
        <div class="l-modal__shadow js-modal-hide"></div>
        <div class="login_popup login_modal_body">
            <div class="Popup_title d-flex justify-content-between">
                <h2 class="hidden">&nbsp;</h2>
                <!-- Nav tabs -->
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12 login_option_btn">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#login"
                                    role="tab">Login</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panel2"
                                    role="tab">Register</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Login-->
                            <div class="tab-pane fade in show active" id="login" role="tabpanel">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                            <a href="forgot-password.html" title="" class="forget_pass">Forget Password
                                                ?</a>
                                            <button type="submit" class="btn btn-default login_btn">Login</button>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="social_login">
                                                <div class="social_items">
                                                    <button class="google_login google">Login Google</button>
                                                    <button class="google_login facebook">Login Facebook</button>
                                                    <button class="google_login twitter">Login Twitter</button>
                                                    <button class="google_login linkdin">Login Linkdin</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel2" role="tabpanel">
                                <form action="#" class="register">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Name</label>
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                            <button type="submit" class="btn btn-default login_btn">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--/.Panel 2-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- End Login Signup Option -->




<section class="about_us">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                <div class="about_title">
                    <span>About Us</span>
                    <h2>The most gorgeous online schools are built Eduwise</h2>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 p-0">
                <div class="banner_about">
                    <img src="{{asset("vendor/theme/eduwise")}}/images/banner/about_thinking.jpg" alt=""
                        class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row about_content_wrapper">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 p-0">
                <div class="about_banner_down">
                    <img src="{{asset("vendor/theme/eduwise")}}/images/blog/blog_3.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                <div class="about_content">
                    <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam
                        maecenas vel vici quis dictum rutrum nec nisi et.Lorem ipsum dolor sit amet mollis felis dapibus
                        arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi
                        et.Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget.
                        Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>
                    <a href="#" title="">Read More About Us <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<!--========={ Popular Courses }========-->
<section class="unlimited_possibilities" id="about_unlimited_possibilities">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Unlimited Possibilities</h2>
                    <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam
                        maecenas vel vici quis dictum rutrum nec nisi et.</p>
                </div><!-- ends: .section-header -->
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_first">
                    <div class="icon_wrapper">
                        <i class="flaticon-student"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Learn anywhere</a></h3>
                        <p>Lorem ipsum dolor consectetur sed do tempor incididunt ut laboris ut aliquip ex commodo nt ut
                            laboris ut aliquip ex commodo conquat.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_center">
                    <div class="icon_wrapper">
                        <i class="flaticon-university"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Our Mission</a></h3>
                        <p>Lorem ipsum dolor consectetur sed do tempor incididunt ut laboris ut aliquip ex commodo nt ut
                            laboris ut aliquip ex commodo conquat.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_last">
                    <div class="icon_wrapper">
                        <i class="flaticon-diploma"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Diploma Course</a></h3>
                        <p>Lorem ipsum dolor consectetur sed do tempor incididunt ut laboris ut aliquip ex commodo nt ut
                            laboris ut aliquip ex commodo conquat.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_center">
                    <div class="icon_wrapper">
                        <i class="flaticon-atom"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Physical Activity</a></h3>
                        <p>Lorem ipsum dolor consectetur sed do tempor incididunt ut laboris ut aliquip ex commodo nt ut
                            laboris ut aliquip ex commodo conquat.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_last">
                    <div class="icon_wrapper">
                        <i class="flaticon-open-book"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Book Library</a></h3>
                        <p>Lorem ipsum dolor consectetur sed do tempor incididunt ut laboris ut aliquip ex commodo nt ut
                            laboris ut aliquip ex commodo conquat.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_first item_6">
                    <div class="icon_wrapper">
                        <i class="flaticon-care"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Love & Care</a></h3>
                        <p>Lorem ipsum dolor consectetur sed do tempor incididunt ut laboris ut aliquip ex commodo nt ut
                            laboris ut aliquip ex commodo conquat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Popular Courses -->


<!--========={ Register Area }========-->
<section class="register_area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                <div class="row">
                    <div class="form-full-box">
                        <div class="form_title">
                            <h2>Become A Membar</h2>
                            <p>Get Instant access to <span>5000+ </span>Video courses </p>
                        </div>
                        <form>
                            <div class="register-form">
                                <div class="row">
                                    <div class="col-12 col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label><i class="fas fa-user"></i></label>
                                            <input class="form-control" name="name" placeholder="Write Your Name"
                                                required="" type="text">
                                        </div>
                                    </div>

                                    <div class="col-12 col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label><i class="flaticon-email"></i></label>
                                            <input class="form-control" name="email" placeholder="Write Your E-mail"
                                                required="" type="email">
                                        </div>
                                    </div>
                                    <div class="col-12 col-xs-12 col-md-12">
                                        <div class="form-group massage_text">
                                            <label><i class="flaticon-copywriting"></i></label>
                                            <textarea class="form-control" placeholder="Write Something Here"
                                                required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xs-12 col-md-12">
                                        {!! app('captcha')->display() !!}
                                    </div>
                                    <div class="col-12 col-xs-12 col-md-12 register-btn-box">
                                        <button class="register-btn" type="submit">Send Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 form-content">
                <h2>All study opportunities<br>in one single place</h2>
                <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus<br> eget.felis
                    dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel<br> vici quis dictum rutrum nec
                    nisi et.</p>
                <div class="count_student">
                    <div class="single_count">
                        <span class="counter">54000</span>
                        <span class="department_name">Students</span>
                    </div>
                    <div class="single_count">
                        <span class="counter">1650</span>
                        <span class="department_name">Scholarships</span>
                    </div>
                    <div class="single_count">
                        <span class="counter">150</span>
                        <span class="department_name">Courses</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- ./ End Register Area section -->
<section class="out_count_student">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Everything Is Eduwise</h2>
                    <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam
                        maecenas vel vici quis dictum rutrum nec nisi et.</p>
                </div><!-- ends: .section-header -->
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="counter_wrapper">
                    <div class="counter_single_wrapper">
                        <div class="section count_single">
                            <div class="project-count"><span class="counter">1200 </span><span
                                    class="count_icon">+</span></div>
                            <span>Active students</span>
                        </div>
                    </div>

                    <div class="counter_single_wrapper">
                        <div class="section count_single">
                            <div class="project-count"><span class="counter">1300 </span><span
                                    class="count_icon">+</span></div>
                            <span>Online Courses</span>
                        </div>
                    </div>

                    <div class="counter_single_wrapper">
                        <div class="section count_single">
                            <div class="project-count"><span class="counter">1050 </span><span
                                    class="count_icon">+</span></div>
                            <span>Satisfaction</span>
                        </div>
                    </div>

                    <div class="counter_single_wrapper">
                        <div class="section count_single">
                            <div class="project-count"><span class="counter">1500 </span><span
                                    class="count_icon">+</span></div>
                            <span>Fraduates</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg_shapes">

    </div>
</section><!-- End Testimonial -->



<section class="faq_about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Frequently asked Questions</h2>
                    <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam
                        maecenas vel vici quis dictum rutrum nec nisi et.</p>
                </div><!-- ends: .section-header -->
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="faq_wrapper">
                    <div class="single_faq">
                        <h3><span>1</span>What is the refund policy?</h3>
                        <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget
                            maecLorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget
                            maecenas.</p>
                    </div>
                    <div class="single_faq">
                        <h3><span>2</span>What is the refund policy?</h3>
                        <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pedsum dolor sit amet
                            mollis felis dapibus arcu donec viverra. Pede phasellus eget maecenas.</p>
                    </div>
                    <div class="single_faq">
                        <h3><span>3</span>What is the refund policy?</h3>
                        <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phaselsit amet
                            mollis felis dapibus arcu donec viverra. Pede phasellus eget maecenas.</p>
                    </div>
                    <div class="single_faq">
                        <h3><span>4</span>What is the refund policy?</h3>
                        <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phaseamet mollis
                            felis dapibus arcu donec viverra. Pede phasellus eget maecenas.</p>
                    </div>
                    <div class="single_faq">
                        <h3><span>5</span>What is the refund policy?</h3>
                        <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus egelis
                            felis dapibus arcu donec viverra. Pede phasellus eget maecenas.</p>
                    </div>
                    <div class="single_faq">
                        <h3><span>6</span>What is the refund policy?</h3>
                        <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget sit
                            amet mollis felis dapibus arcu donec viverra. Pede phasellus eget maecenas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('footer-script')

@endsection
