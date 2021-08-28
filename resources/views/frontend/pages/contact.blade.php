@section('title','Contact Page')
@section('meta_discription','meta_discription')
@section('meta_keyword','meta_keyword')
@extends('frontend.layout.app')
@section('header-css')
@endsection
@section('content')
<header class="header_inner contact_page">
    <div class="intro_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="intro_text">
                        <h1>Contact Page</h1>
                        <div class="pages_links">
                            <a href="{{route('homepage')}}" title="{{route('homepage')}}">Home</a>
                            <a href="#" title="Contact Details" class="active">Contact Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="contact_info_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="contact_info">
                    <h3 class="title">Contact Details</h3>
                    <p>If You Are Have Any Questions About Our Oraginazation Then We Are Just Some Click Away Fill The
                        Form And Hit On Submit Or You Can Easily Walkin Your Neariest CITET Study Center .</p>
                    <div class="event_location_info">
                        <ul class="list-unstyled">
                            <li>
                                <h4 class="info_title">Address : </h4>
                                <ul class="list-unstyled">
                                    <li>Trishul Chowk Road, Between Panchwati And Bamphar Chowk, Gautam</li>
                                    <li>Nagar Road, Gangajal, Rajwanshi Nagar, Saharsa, Bihar 852201</li>
                                </ul>
                            </li>
                            <li>
                                <h4 class="info_title">Phone Numbers :</h4>
                                <ul class="list-unstyled">
                                    <li><a href="tel:+91 92342 70353" class="text-muted">+91 92342 70353</a></li>
                                </ul>
                            </li>
                            <li>
                                <h4 class="info_title">Our E-mails :</h4>
                                <ul class="list-unstyled">
                                    <li><a href="mailto:citeducationaltrust@gmail.com"
                                            class="text-muted">citeducationaltrust@gmail.com</a></li>
                                </ul>
                            </li>
                            <li>
                                <h4 class="info_title">Regd. Office :</h4>
                                <ul class="list-unstyled">
                                    <li><a class="text-muted">Manik Sarkar, Bhagalpur, Bihar
                                        </a></li>
                                    <li><a href="tel:9204171584" class="text-muted">+91 9204171584</a></li>
                                </ul>
                            </li>
                        </ul>
                        <img src="{{asset("vendor/theme/eduwise")}}/images/banner/map_shape.png" alt=""
                            class="contact__info_shpae">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="contact_form_wrapper">
                    <h3 class="title">Get In Touch</h3>
                    <div class="leave_comment">
                        <div class="contact_form">
                            <form method="POST" action="{{route('postcontactform')}}" enctype="multipart/form-data" role="form">@csrf
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 form-group">
                                        <input class="form-control" name="name" value="{{ old('name') }}"
                                            placeholder="Write Your Name" required="required" type="text">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 form-group">
                                        <input class="form-control" name="email" value="{{ old('email') }}"
                                            placeholder="Write Your E-mail" required="required" type="email">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 form-group">
                                        <input class="form-control" name="phone" value="{{ old('phone') }}"
                                            placeholder="Write Your Phone number" required="required" type="phone">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 form-group">
                                        <textarea class="form-control" name="query" placeholder="Write Something Here"
                                            required="required">{{ old('query') }}</textarea>
                                    </div>
                                    @if ($errors->has('g-recaptcha-response'))
                                    <script>
                                        window.alert('Capcha is Empty');

                                    </script>
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                    @endif
                                    <div class="col-12 col-sm-12 col-md-12 form-group">
                                        {!! app('captcha')->display() !!}
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 submit-btn">
                                        <button type="submit" class="text-center">Send Massage</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- Contact Info Wrappper-->
<section class="contact_map">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mr-auto p-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28715.78398095139!2d86.598143!3d25.886817!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xce8ef057503bcb9d!2sC.I.T%20Computer%20Centre%2C%20Saharsa%2C%20Bihar!5e0!3m2!1sen!2sin!4v1629636326554!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section> <!-- Ends: Google Map Area -->
@endsection
@section('footer-script')

@endsection
