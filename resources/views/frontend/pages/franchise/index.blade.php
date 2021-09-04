@section('title','Franchise')
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
                        <h1>Franchise</h1>
                        <div class="pages_links">
                            <a href="{{route('homepage')}}" title="">Home</a>
                            <a href="#" title="" class="active">Franchise</a>
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
                    <span>Franchise</span>
                    <h2>The most gorgeous online schools are built Eduwise</h2>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 p-0">
                <div class="banner_about">
                    <img src="{{asset("vendor/theme/eduwise")}}/images/banner/franchise.png" alt=""
                        class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row about_content_wrapper">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 p-0">
                <div class="about_banner_down">
                    <img src="{{asset("vendor/theme/eduwise")}}/images/banner/franchise_agrement.png" alt="" class="img-fluid">
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
