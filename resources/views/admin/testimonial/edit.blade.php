@section('title','Create Tesimonials')
@extends('admin.layouts.app')
@section('extra-css')
@endsection
@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h5>Create Tesimonials</h5>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('testimonial.store',$testimonial->id)}}" method="post" role="form" enctype="multipart/form-data">@csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                                value="{{$testimonial->name}}">
                            <small id="helpId" class="form-text text-muted">Enter The Name of Person</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Discription</label>
                            <textarea class="form-control" name="discription" id="discription"
                                rows="3">{{$testimonial->discription}}</textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Position</label>
                            <input type="text" class="form-control" name="position" id="position"
                                aria-describedby="helpId" value="{{$testimonial->discription}}">
                            <small id="helpId" class="form-text text-muted">IAS/Software Engineer/TCS</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" accept="image/*" name="img" id="img"
                                value="{{$testimonial->img}}" aria-describedby="fileHelpId">
                            <small id="helpId" class="form-text text-muted">Photo Of the Poster</small>
                            @if(!empty($testimonial->img))
                            <br> <a target="_blank" href="{{$testimonial->img}}" class="btn btn-outline-primary">View
                                File</a>
                            @else
                            @endif
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
