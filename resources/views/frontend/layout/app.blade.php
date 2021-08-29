<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--============== Meta Dat ============== --}}
    <title>@yield('title') &nbsp;|&nbsp;@isset($settings['site_name']){{$settings['site_name']}}@endisset</title>
    <meta name="description" content="@yield('meta_discription')">
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="author" content="SHIVAM ANAN">
    {{--============== Meta Dat ============== --}}
    <link rel="shortcut icon" href="{{asset("vendor/theme/eduwise")}}/images/favicon.ico" type="image/x-icon">
    <!-- Goole Font -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("vendor/theme/eduwise")}}/css/assets/bootstrap.min.css">
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="{{asset("vendor/theme/eduwise")}}/css/assets/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("vendor/theme/eduwise")}}/css/assets/flaticon.css">
    <link rel="stylesheet" href="{{asset("vendor/theme/eduwise")}}/css/assets/magnific-popup.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset("vendor/theme/eduwise")}}/css/assets/owl.carousel.css">
    <link rel="stylesheet" href="{{asset("vendor/theme/eduwise")}}/css/assets/owl.theme.css">
    <link rel="stylesheet" href="{{asset("vendor/theme/eduwise")}}/css/assets/animate.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset("vendor/theme/eduwise")}}/css/assets/slick.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{asset("vendor/theme/eduwise")}}/css/assets/revolution/layers.css">
    <link rel="stylesheet" href="{{asset("vendor/theme/eduwise")}}/css/assets/revolution/navigation.css">
    <link rel="stylesheet" href="{{asset("vendor/theme/eduwise")}}/css/assets/revolution/settings.css">
    <!-- Mean Menu-->
    {{-- <link rel="stylesheet" href="{{asset("vendor/theme/eduwise")}}/css/assets/meanmenu.css"> --}}
    <!-- main style-->
    <link rel="stylesheet" href="{{asset("vendor/theme/eduwise")}}/css/style.css">
    <link rel="stylesheet" href="{{asset("vendor/theme/eduwise")}}/css/responsive.css">
    <link rel="stylesheet" href="{{asset("vendor/theme/eduwise")}}/css/demo.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    {!! NoCaptcha::renderJs() !!}
    {!! csrf_field() !!}
    @yield('header-css')
    <style>
        .head_logo_custom{max-width: 250px;}a.meanmenu-reveal {display: none;}.mean-container .mean-bar {float: left;width: 100%;position: absolute;background: #292929;padding: 4px 0;min-height: 42px;z-index: 999;border-bottom: 1px solid rgba(255, 255, 255, 0.3);}.mean-container .mean-bar::before {background: url('@isset($settings['site_logo']){{$settings['site_logo']}}@endisset') no-repeat center center / cover;height: 25px;width: 130px;content: "";left: 14px;position: absolute;text-transform: uppercase;top: 16px;z-index: 1;}.mean-container a.meanmenu-reveal {width: 22px;height: 22px;padding: 13px 13px 11px 13px;position: absolute;top: 0;right: 0;cursor: pointer;color: #fff;text-decoration: none;font-size: 16px;text-indent: -9999em;line-height: 22px;font-size: 1px;display: block;font-weight: 700;}.mean-container a.meanmenu-reveal span {display: block;background: #fff;height: 3px;margin-top: 3px;}.mean-container .mean-nav {float: left;width: 100%;background: #292929;margin-top: 44px;}.mean-container .mean-nav ul {padding: 0;margin: 0;width: 100%;list-style-type: none;}.mean-container .mean-nav ul li {position: relative;float: left;width: 100%;}.mean-container .mean-nav ul li a {display: block;float: left;width: 90%;padding: 1em 5%;margin: 0;text-align: left;color: #fff;border-top: 1px solid #383838;border-top: 1px solid rgba(255,255,255,0.5);text-decoration: none;}.mean-container .mean-nav ul li li a {width: 80%;padding: 1em 10%;border-top: 1px solid #f1f1f1;border-top: 1px solid rgba(255,255,255,0.25);opacity: 1;filter: alpha(opacity=75);text-shadow: none !important;visibility: visible;text-transform: none;font-size: 16px;}.mean-container .mean-nav ul li.mean-last a {border-bottom: none;margin-bottom: 0;}.mean-container .mean-nav ul li li li a {width: 70%;padding: 1em 15%;}.mean-container .mean-nav ul li li li li a {width: 60%;padding: 1em 20%;}.mean-container .mean-nav ul li li li li li a {width: 50%;padding: 1em 25%;}.mean-container .mean-nav ul li a:hover {background: #252525;background: rgba(255,255,255,0.1);}.mean-container .mean-nav ul li a.mean-expand {margin-top: 1px;width: 100%;height: 24px;padding: 12px !important;text-align: right ;position: absolute;right: 0;top: 0;z-index: 2;font-weight: 700;background: transparent;border: none !important;}.mean-container .mean-push {float: left;width: 100%;padding: 0;margin: 0;clear: both;}.mean-nav .wrapper {width: 100%;padding: 0;margin: 0;}.mean-container .mean-bar, .mean-container .mean-bar * {-webkit-box-sizing: content-box;-moz-box-sizing: content-box;box-sizing: content-box;}.mean-remove {display: none !important;}
    </style>
</head>
<body>
<header class="header_tow">
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="info_wrapper">
                        <div class="contact_info">
        					<ul class="list-unstyled">
                                <li><i class="flaticon-phone-receiver"></i><a class="text-light" href="tel:@isset($settings['site_contact_number']){{$settings['site_contact_number']}}@endisset">@isset($settings['site_contact_number']){{$settings['site_contact_number']}}@endisset</a></li>
                                <li><i class="flaticon-mail-black-envelope-symbol"></i><a class="text-light" href="mailto:@isset($settings['site_email']){{$settings['site_email']}}@endisset">@isset($settings['site_email']){{$settings['site_email']}}@endisset</a></li>
        					</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="edu_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded">
                <a class="navbar-brand" href="{{route('homepage')}}"><img class="head_logo_custom" src="@isset($settings['site_logo']){{$settings['site_logo']}}@endisset" alt="@isset($settings['site_name']){{$settings['site_name']}}@endisset"></a>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu">
                        <li class="nav-item"><a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item"><a href="{{route('aboutpage')}}" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="{{route('coursepage')}}" class="nav-link">Courses</a></li>
                        <li class="nav-item"><a href="{{route('gallery')}}" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Student Zone</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="become-a-teacher.html" class="nav-link">Become A Teacher</a></li>
                                <li class="nav-item"><a href="teacher-profile.html" class="nav-link">Teachers Profile</a></li>
                                <li class="nav-item"><a href="teachers.html" class="nav-link">Teachers Page</a></li>
                                <li class="nav-item"><a href="forgot-password.html" class="nav-link">Forgot Password</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                    </ul>
                </div>
                <div class="mr-auto search_area ">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><i class="search_btn flaticon-magnifier"></i>
                            <div id="search">
                                <button type="button" class="close">×</button>
                                 <form>
                                     <input type="search" value="" placeholder="Search here...."  required/>
                                 </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav><!-- END NAVBAR -->
        </div>
    </div>
<!--================================= content ====================================================-->
@yield('content')
<!--================================= content =================================================== -->
<!-- Footer -->
<footer class="footer_2">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer_single_col footer_intro">
                        <img src="@isset($settings['site_logo']){{$settings['site_logo']}}@endisset" alt="@isset($settings['site_name']){{$settings['site_name']}}@endisset" class="f_logo">
                        <p>@isset($settings['footer_logo_below']){{$settings['footer_logo_below']}}@endisset</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col">
                        <h3>Useful Links</h3>
                        <ul class="location_info quick_inf0">
                            <li><a href="#">Leadereship</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Diversity</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Press</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col information">
                        <h3>information</h3>
                        <ul class="quick_inf0">
                            <li><a href="#">Leadereship</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Diversity</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Press</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer_single_col contact">
                        <h3>Contact Us</h3>
                        <p>Ante amet vitae vulputate odio nulla vel pretium aenean.</p>
                        <div class="contact_info">
                            <span><a class="text-light" href="tel:@isset($settings['site_contact_number']){{$settings['site_contact_number']}}@endisset">@isset($settings['site_contact_number']){{$settings['site_contact_number']}}@endisset</a></span>
                            <span class="email"><a class="text-light" href="mailto:@isset($settings['site_email']){{$settings['site_email']}}@endisset">@isset($settings['site_email']){{$settings['site_email']}}@endisset</a></span>
                        </div>
                        <ul class="social_items d-flex list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
                        </ul>
                    </div>
                </div>
                 <div class="col-12 col-md-12 col-lg-12">
                    <div class="copyright">
                        <p>&copy; Copyright {{date('Y')}} Citet.Org Design by <a href="https://www.google.com/search?q=shivamsancc" target="_blank">Shivam Anand</a></p>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    <div class="shapes_bg">
        <img src="{{asset("vendor/theme/eduwise")}}/images/shapes/testimonial_2_shpe_1.png" alt="" class="shape_3">
        <img src="{{asset("vendor/theme/eduwise")}}/images/shapes/footer_2.png" alt="" class="shape_1">
    </div>
</footer><!-- End Footer -->

<section id="scroll-top" class="scroll-top">
    <h2 class="disabled">Scroll to top</h2>
    <div class="to-top pos-rtive">
        <a href="#"><i class = "flaticon-right-arrow"></i></a>
    </div>
</section>

    <!-- JavaScript -->
    <script src="{{asset("vendor/theme/eduwise")}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/popper.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/bootstrap.min.js"></script>
    <!-- Revolution Slider -->
    <script src="{{asset("vendor/theme/eduwise")}}/js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/assets/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/owl.carousel.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/slick.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/jquery.meanmenu.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/wow.min.js"></script>
    <!-- Counter Script -->
    <script src="{{asset("vendor/theme/eduwise")}}/js/waypoints.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/jquery.counterup.min.js"></script>
    @yield('footer-script')
    <!-- Revolution Extensions -->
    <script src="{{asset("vendor/theme/eduwise")}}/js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/assets/revolution/revolution.js"></script>
    <script src="{{asset("vendor/theme/eduwise")}}/js/custom.js"></script>
</body>
</html>
