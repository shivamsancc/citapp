@section('title','Apply for Admission')
@section('meta_discription','meta_discription')
@section('meta_keyword','meta_keyword')
@extends('frontend.layout.app')
@section('header-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet"
    type="text/css" />
<style>
  .submitbtn {height: 40px;padding: 0 40px;font-size: 14px;font-weight: 500;background: #111b51;text-transform: uppercase;border: none;border-radius: 5px;cursor: pointer;position: relative;z-index: 1;outline: none;color: #ffffff;transition: all 0.3s ease-in-out;font-family: "Rubik", sans-serif;}
</style>
@endsection
@section('content')
<header class="header_inner about_page">
    <div class="intro_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="intro_text">
                        <h1>Apply For Admission</h1>
                        <div class="pages_links">
                            <a href="{{route('homepage')}}" title="">Home</a>
                            <a href="#" title="" class="active">Apply for Admission</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header> <!-- End nav -->
<section class="about_us ">
    <div class="container ">
        <form class="row" action="{{route('online-admission.store')}}" method="POST" role="form" enctype="multipart/form-data">@csrf
            <div class="col-6">
                <div class="form-group">
                    <label for="">Student Name</label>
                    <input type="text" class="form-control" required name="s_name" id="s_name" aria-describedby="helpId"
                        placeholder="Sumit Kumar">
                    <small id="helpId" class="form-text text-muted">Ex:Sumit Kumar</small>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Father's Name </label>
                    <input type="text" class="form-control" required name="f_name" id="f_name" aria-describedby="helpId"
                        placeholder="Vijay Kumar singh">
                    <small id="helpId" class="form-text text-muted">Ex:Vijay Kumar singh</small>
                </div>
            </div>
            <div class="col-9">
                <div class="form-group">
                    <label for="">Father's Name </label>
                    <input type="text" class="form-control" required name="m_name" id="m_name" aria-describedby="helpId"
                        placeholder="Sulkha Devi">
                    <small id="helpId" class="form-text text-muted">Ex:Sulkha Devi</small>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="">Date of Birth</label>
                    <div id="datepicker" class="input-group date">
                        <input class="form-control" type="text" required name="dob" id="dob" readonly />
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                    <small id="helpId" class="form-text text-muted">Ex:30/11/2021</small>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Gender</label>
                    <select required class="form-control" name="gender" id="gender">
                        @foreach ($gender as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Marital Status </label>
                    <select required class="form-control" name="m_status" id="m_status">
                        @foreach ($maritalstatus as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Category </label>
                    <select required class="form-control" name="cat" id="cat">
                        @foreach ($category as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Permanent Add</label>
                    <textarea required class="form-control" name="per_addresh" id="per_addresh" rows="3"></textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Correspondence Add</label>
                    <textarea required class="form-control" name="corres_addresh" id="corres_addresh" rows="3"></textarea>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Address Proof</label>
                    <select required class="form-control" name="addresh_proof_type" id="addresh_proof_type">
                        @foreach ($proof as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Proof No</label>
                    <input required type="text" class="form-control" name="addresh_proff_no" id="addresh_proff_no" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">2588 7855 7955</small>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Nationality</label>
                    <input required type="text" class="form-control" name="nationality" id="nationality" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Indian</small>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Email ID</label>
                    <input required type="email" class="form-control" name="s_email" id="s_email" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Mobile</label>
                    <input required type="text" class="form-control" name="s_mobile" id="s_mobile" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Alternate Mobile No</label>
                    <input  required type="text" class="form-control" name="alter_mobile" id="alter_mobile" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input text-center" name="" id="" value="checkedValue"
                            required>
                        <p class="text-center"> I Agree with the <a href="#">Terms & Conditions</a> of CITET.</p>
                    </label>
                    <button type="submit" class="btn btn-primary submitbtn">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
@section('footer-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script>
    $(function () {
        $("#datepicker").datepicker({
            autoUpdateInput: false,
            autoclose: false,
            format: 'mm/dd/yyyy',
            todayHighlight: false,
            startDate: '-10d'
        }).datepicker();
    });

</script>
@endsection
