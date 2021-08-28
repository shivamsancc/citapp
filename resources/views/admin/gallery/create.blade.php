@section('title','Create Course Category')
@extends('admin.layouts.app')
@section('extra-css')
@endsection
@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h5>Create Course Category</h5>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('gallery.store')}}" method="post" role="form" enctype="multipart/form-data">@csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                          <label for="">Gallery Name</label>
                          <input type="text" class="form-control" name="gallery_name" id="gallery_name" aria-describedby="helpId" placeholder="">
                          <small id="helpId" class="form-text text-muted">Enter The Name of Gallery ex:teacher's day</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                          <label for="">About Gallery</label>
                          <textarea class="form-control" name="about_gallery" id="about_gallery" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="col-md-12 gallery" >
	  		
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                          <label for=""></label>
                          <input type="file" class="form-control" name="gallery_imgs[]" accept="image/*" multiple id="gallery_imgs" aria-describedby="fileHelpId">
                          <small id="fileHelpId" class="form-text text-muted">Select Files</small>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type='text/javascript'>
    $(function() {
    var imagesPreview = function(input, placeToInsertImagePreview) {
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $($.parseHTML('<img class="img-fluid">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    };

    $('#gallery_imgs').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
</script>
@endsection