@section('title','Admission Verification')
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
                        <h1>Admission Verification</h1>
                        <div class="pages_links">
                            <a href="{{route('homepage')}}" title="">Home</a>
                            <a href="#" title="" class="active">Admission Verification</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header> <!-- End nav -->
<section class="about_us">
    <div class="container-fluid m-0 p-0">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form id="admitcard" name="admitcard" class="row  form-inline"
                    action="{{route('getadmissionsubmit')}}">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" name="regno" class="font-primary form-control"
                                placeholder="ENTER YOUR REGISTRATION NUMBER"
                                style="text-transform:uppercase;width: 100%;">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                    </div><br><br><br><br>
                    <div class="col-12">
                        <input type="submit" name="result" class="btn btn-primary form-control btn-block">
                    </div>
                </form><br>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</section>
@endsection
@section('footer-script')

@endsection
