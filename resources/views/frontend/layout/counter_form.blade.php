<section class="register_area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                <div class="row">
                    <div class="form-full-box">
                        <div class="form_title">
                            <h2>Send Your Query</h2>
                            <p>Get Instant access to <span>1000+ </span>courses </p>
                        </div>
                        <form method="POST" action="{{route('postcontactform')}}" enctype="multipart/form-data" role="form">@csrf
                            <div class="register-form">
                                <div class="row">
                                    <div class="col-12 col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label><i class="fas fa-user"></i></label>
                                            <input class="form-control" name="name" value="{{ old('name') }}" placeholder="Write Your Name"
                                                required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label><i class="fas fa-phone"></i></label>
                                            <input class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Write Your Phone number"
                                                required="required" type="phone">
                                        </div>
                                    </div>
                                    <div class="col-12 col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label><i class="flaticon-email"></i></label>
                                            <input class="form-control" name="email" value="{{ old('email') }}" placeholder="Write Your E-mail"
                                                required="required" type="email">
                                        </div>
                                    </div>
                                    <div class="col-12 col-xs-12 col-md-12">
                                        <div class="form-group massage_text">
                                            <label><i class="flaticon-copywriting"></i></label>
                                            <textarea class="form-control" name="query" placeholder="Write Something Here"
                                                required="required">{{ old('query') }}</textarea>
                                        </div>
                                    </div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <script>
                                            window.alert('Capcha is Empty');
                                        </script>
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                    @endif
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
            <div class="col-12 col-sm-12 col-md-6 col-lg-7 form-content">
                <h2>All study opportunities<br> in one single place</h2>
                <p>Cit Educational Trust Is Leading The Way of Computer Education Since 2008. From One<br>City Branch to 
                    Multi City And Multi Course & Multi Categories Study Centers All Over The INDIA.<br>
                    Here Is Our Glorius Numbers Which Matters
                </p>
                <div class="count_student">
                    <div class="single_count">
                        <span class="counter">54000</span>
                        <span class="department_name">Students Learned</span>
                    </div>
                    <div class="single_count">
                        <span class="counter">16500</span>
                        <span class="department_name">Job Placed</span>
                    </div>
                    <div class="single_count">
                        <span class="counter">{{$total_years}}</span>
                        <span class="department_name">Years</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- ./ End Register Area section -->