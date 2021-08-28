@section('title','Add Slider')
@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            Add Slider
        </div>
        <div class="card-body">
            <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">@csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="mini_text">Mini Text</label>
                            <input type="text" name="mini_text" required id="mini_text" class="form-control"
                                placeholder="Site Name" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Enter Mini Text</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="text_one">Text One</label>
                            <input type="text" name="text_one" required id="text_one" class="form-control"
                                placeholder="Somthing long" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Enter Text one</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="text_two">Text Two</label>
                            <input type="text" class="form-control"required name="text_two" id="text_two"
                                aria-describedby="helpId" placeholder="Somthing long">
                            <small id="helpId" class="form-text text-muted">Enter Text Two</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="slider_img">Slider Image</label>
                            <input type="file" class="form-control" required name="slider_img" id="slider_img" placeholder=""
                                aria-describedby="fileHelpId">
                            <small id="fileHelpId" class="form-text text-muted">Select images Only</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        </form>
    </div>
</div>
@endsection
