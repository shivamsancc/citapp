@section('title','Create Job')
@extends('admin.layouts.app')
@section('extra-css')
@endsection
@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h5>Create Job</h5>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('job.store')}}" method="post" role="form" enctype="multipart/form-data">@csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                          <label for="">Job Name</label>
                          <input type="text" class="form-control" name="job_name" id="gallery_job" aria-describedby="helpId" placeholder="">
                          <small id="helpId" class="form-text text-muted">Enter The Name of job ex:teacher's day</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                          <label for="">About Job</label>
                          <textarea class="form-control" name="about_job" id="about_job" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="col-md-12 gallery" >
	  		
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('extra-js')
@endsection