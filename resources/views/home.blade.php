@extends('layouts.app')
@section('content')
<div class="container-fluid m-0 p-0">
    <div class="row m-0 p-0">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div><b><a href="{{route('dashboard')}}">Back to master Dashboard</a></b>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container-fluid m-0 p-0">
                        <div class="row m-0 p-0">
                            <div class="col-6">
                              <div class="container ca-frontboxsingle rounded">
                                  <h2>Upload Cerificate:</h2>
                                  <div class="panel panel-default">
                                    <div class="panel-body">Please Select a CSV or .xlsx</div><br>
                                    <form method="post" role="form" action="{{route('importcerificate')}}" enctype="multipart/form-data">@csrf
                                      <div class="form-row align-items-center">
                                        <div class="col-auto">
                                          <label class="sr-only" for="inlineFormInput">Name</label>
                                          <input type="file" name="file" class="form-control mb-2" id="inlineFormInput" placeholder="ENTER YOUR SERIAL NUMBER">
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
                                  <h2>Upload Admit Card:</h2>
                                  <div class="panel panel-default">
                                    <div class="panel-body">Please Select a CSV or .xlsx</div><br>
                                    <form method="post" role="form" action="{{route('importadmitcard')}}" enctype="multipart/form-data">@csrf
                                      <div class="form-row align-items-center">
                                        <div class="col-auto">
                                          <label class="sr-only" for="inlineFormInput">Name</label>
                                          <input type="file" name="file" class="form-control mb-2" id="inlineFormInput" placeholder="ENTER YOUR REGISTRATION NUMBER">
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
                                  <h2>Upload Result:</h2>
                                  <div class="panel panel-default">
                                    <div class="panel-body">Please Select a CSV or .xlsx</div><br>
                                    <form method="post" role="form" action="{{route('importaresult')}}" enctype="multipart/form-data">@csrf
                                      <div class="form-row align-items-center">
                                        <div class="col-auto">
                                          <label class="sr-only" for="inlineFormInput">Name</label>
                                          <input type="file" name="file" class="form-control mb-2" id="inlineFormInput" placeholder="ENTER YOUR Roll NUMBER">
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
                                  <h2>Upload Addmission Conformation:</h2>
                                  <div class="panel panel-default">
                                    <div class="panel-body">Please Select a CSV or .xlsx</div><br>
                                    <form method="post" role="form" action="">@csrf
                                      <div class="form-row align-items-center">
                                        <div class="col-auto">
                                          <label class="sr-only" for="inlineFormInput">Name</label>
                                          <input type="file" name="file" class="form-control mb-2" id="inlineFormInput" placeholder="ENTER YOUR REGISTRATION NUMBER">
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


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
