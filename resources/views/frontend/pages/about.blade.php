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
<section class="about_us">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                <div class="about_title">
                    <span>About Us</span>
                    <h2>The most amazing Computer Institute Ever Exised.</h2>
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
                    <p>COMPUTER INSTITUTE OF TECHNOLOGY & EDUCATIONAL TRUST is the best institute for Technical
                        education, especially in Information Technology. The main aim of the establishment of this
                        institution is to spread computer education to all over India. Our Organization has been
                        Registered Under Indian Trust act 1882 by Govt. of Bihar and decided to provide the Computer
                        Education in nominal charge for every person of our lower and middle class of society. C.I.T
                        EDUCATIONAL TRUST is an ISO 9001:2015 Certified Organization by Joint Accreditation Conformity
                        Board for certificate Bodies(ACBCB). The Organization has a mission and prime goal of providing
                        quality It education to Students and also what an IT Profession need by creating differently
                        skilled which is needed by It Professionals in the country. The Organization Provides education
                        & Certification in Computer Software/ Hardware, Computer Accounting, Computer Networking &
                        Mobile Technology.</p>
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
                            the admission and study in their native language.</p>
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

            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_center">
                    <div class="icon_wrapper">
                        <i class="flaticon-atom"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Practicle Activity</a></h3>
                        <p>We belive the Practicle knowledge grow more then the treditional knowledge 
                            thats why we focus more on Practicle knowlege more then Theory.</p>
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
                        <p>We provide the required books and notes to the students to  practicle and remember the 
                            Skills whenever they requred to call it or to share .</p>
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
                        <p>We love and care our students and their amazing trought process which makes their life better
                            and put a big smile on our Face.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Popular Courses -->

@include('frontend.layout.counter_form')
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
