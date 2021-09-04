@section('title','Create Course')
@extends('admin.layouts.app')
@section('extra-css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection
@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h5>Create Course</h5>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('course.store')}}" enctype="multipart/form-data" method="post">@csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="course_name">Course Name</label>
                            <input type="text" class="form-control" required name="course_name" id="course_name"
                                aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Enter the Course name ex:DCA</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Course Featured Image</label>
                            <input type="file" class="form-control" required name="course_feat_img" id="course_feat_img" placeholder=""
                                aria-describedby="fileHelpId">
                            <small id="fileHelpId" class="form-text text-muted">Select the Featured Image ex:bca</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="course_discription">Course Discription</label>
                            <textarea class="form-control summernote" name="course_discription" id="course_discription"
                                rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="student_learn">What Will Student Learn</label>
                            <textarea class="form-control summernote" name="student_learn" id="student_learn" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="course_outcome">Course Outcome</label>
                            <textarea class="form-control summernote" name="course_outcome" id="course_outcome"
                                rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="no_of_lession">No of Lessions</label>
                            <input type="text" class="form-control" required name="no_of_lession" id="no_of_lession"
                                aria-describedby="helpId">
                            <small id="helpId" class="form-text text-muted">Enter the Number of Lession for ex:10</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="duration">Course Duration</label>
                            <input type="text" class="form-control" required name="duration" id="duration"
                                aria-describedby="helpId" >
                            <small id="helpId" class="form-text text-muted">Enter the Number of Months Course Will take for ex: 3 Months</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                          <label for="prequisite">Prequisite</label>
                          <select class="form-control" required name="prequisite" id="prequisite">
                            <option value="" selected>SELECT</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                          <label for="certification">Certification</label>
                          <select class="form-control" required name="certification" id="certification">
                            <option value="" selected>SELECT</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="categories">Course Category</label>
                            <select class="form-control" name="categories[]" id="categories" required multiple="multiple">
                                @foreach ($coursecategory as $item)
                                    <option value="{{$item->id}}">{{$item->category_name}}</option>
                                @endforeach
                            </select>
                            <small id="helpId" class="form-text text-muted">Select Parent Category</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Price</label>
                          <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="1200 ₹">
                          <small id="helpId" class="form-text text-muted">Enter The Price in INR</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="course_curricularm">Course Curricularm</label>
                            <textarea class="form-control summernote" name="course_curricularm" id="course_curricularm"
                                rows="3"></textarea>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
<script>
      $(document).ready(function () {
        $('#categories').select2();});
    CKEDITOR.replace('course_discription', {extraPlugins: 'editorplaceholder',editorplaceholder: 'Start typing here...',removeButtons: 'PasteFromWord'});
    CKEDITOR.replace('student_learn', {extraPlugins: 'editorplaceholder',editorplaceholder: 'Start typing here...',removeButtons: 'PasteFromWord'});
    CKEDITOR.replace('course_outcome', {extraPlugins: 'editorplaceholder',editorplaceholder: 'Start typing here...',removeButtons: 'PasteFromWord'});
    CKEDITOR.replace('course_curricularm', {extraPlugins: 'editorplaceholder',editorplaceholder: 'Start typing here...',removeButtons: 'PasteFromWord'});
  </script>
@endsection
