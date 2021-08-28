@section('title','Create Course Category')
@extends('admin.layouts.app')
@section('extra-css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
            <form action="{{route('coursecategory.store')}}" method="post">@csrf
                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" class="form-control" required name="category_name" id="category_name"
                        aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Enter Category Name</small>
                </div>
                <div class="form-group">
                    <label for="">Parent Category </label>
                    <select class="form-control" name="parent_category_id" id="parent_category_id">
                        <option selected value=""> Select </option>
                        @foreach ($coursecategory as $item)
                            <option value="{{$item->id}}">{{$item->category_name}}</option>
                        @endforeach
                    </select>
                    <small id="helpId" class="form-text text-muted">Select Parent Category</small>
                </div>
                <div class="form-group">
                  <label for="">Possible Job</label>
                  <select class="form-control" name="possible_job[]" id="possible_job" multiple="multiple">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="">Category Disctiption</label>
                    <textarea class="form-control" name="category_discription" id="category_discription"
                        rows="3"></textarea>
                    <small id="helpId" class="form-text text-muted">Enter Category Name</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('extra-js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
             $('#possible_job').select2();
        });
    </script>
@endsection