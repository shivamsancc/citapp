<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="https://www.nextgyaan.com/src/images/logo/nextgyaan_logo_150_blue.png?v=2">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?v=2" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css?v=2" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js?v=2" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <link href="{{ asset('css/app.css?v') }}" rel="stylesheet">
        <link href="{{ asset('css/Custom.css?v=2') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js?v=2') }}" defer></script>
        @include('layouts.notification')
    </head>
    <body>
      <div class="container-fluid border border-light">
        <img src="https://citet.org/vfm/apps/layout/images/logo.png"class="img-fluid mx-auto d-block" alt="">
      </div>
      <div class="container-fluid m-0 p-0">
          <div class="row m-0 p-0">
              <div class="col-6">
                <div class="container ca-frontboxsingle rounded">
                    <h2>Get Cerificate:</h2>
                    <div class="panel panel-default">
                      <div class="panel-body">Please enter your Serial Number(eg. 5245644) to View & Download your Certificate.</div><br>
                      <form method="get" role="form" action="{{route('getcerificate')}}">
                        <div class="form-row align-items-center">
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput">Name</label>
                            <input type="text" name="sl_no" class="form-control mb-2" id="sl_no" placeholder="ENTER YOUR SERIAL NUMBER">
                          </div>
                          <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
              </div>
              <div class="col-6">
                <div class="container ca-frontboxsingle rounded">
                    <h2>Get Admit Card:</h2>
                    <div class="panel panel-default">
                      <div class="panel-body">Please enter your Reg No. (eg.2014/CIT/BR/SHC/CITET/152) to View & Download your Admit Card.</div>
                    <form method="get" role="form" action="{{route('getadmintcard')}}">
                        <div class="form-row align-items-center">
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput">Name</label>
                            <input type="text" name="regno" class="form-control mb-2" id="regno" placeholder="ENTER YOUR REGISTRATION NUMBER">
                          </div>
                          <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
              </div>
          </div>
          <div class="row m-0 p-0" style=" margin-top:50px !important;">
              <div class="col-6">
                <div class="container ca-frontboxsingle rounded">
                    <h2>Get Result:</h2>
                    <div class="panel panel-default">
                      <div class="panel-body">Please enter your Roll Number(eg. 10209) to View & Download your Result.</div>
                    <form method="get" role="form" action="{{route('getresult')}}">
                        <div class="form-row align-items-center">
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput">Name</label>
                            <input type="text" name="roll" class="form-control mb-2" id="roll" placeholder="ENTER YOUR Roll NUMBER">
                          </div>
                          <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
              </div>
              <div class="col-6">
                <div class="container ca-frontboxsingle rounded">
                    <h2>Get Addmmission Conformation:</h2>
                    <div class="panel panel-default">
                      <div class="panel-body">Please enter your Reg No. (eg.2014/CIT/BR/SHC/CITET/152) to View & Download your Admit Card.</div>
                      <form method="get" role="form" action="{{route('getadmission')}}">
                        <div class="form-row align-items-center">
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput">Name</label>
                            <input type="text" name="regno" class="form-control mb-2" id="regno" placeholder="ENTER YOUR REGISTRATION NUMBER">
                          </div>
                          <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
              </div>
          </div>
      </div>
        <footer class="border border-light" style="margin-top:20px !important;"><center><a href="#" target="_blank"><p class="heart">Made with&nbsp;<i class="fa fa-heart fa-2x fa-beat text-danger"></i>&nbsp;In India </p></a></center></footer>
        <!-- Js included  -->


    </body>
</html>
