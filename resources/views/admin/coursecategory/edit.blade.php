@section('title','Create Course Category')
@extends('admin.layouts.app')
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
            <form action="{{route('coursecategory.update',$singlecoursecategory->id)}}" method="POST">@csrf @method('PUT') 
                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" class="form-control" required name="category_name" id="category_name"
                        aria-describedby="helpId" value="{{$singlecoursecategory->category_name}}">
                    <small id="helpId" class="form-text text-muted">Enter Category Name</small>
                </div>
                <div class="form-group">
                    <label for="">Parent Category </label>
                    <select class="form-control" name="parent_category_id" id="parent_category_id">
                        <option selected value=""> Select </option>
                        @foreach ($coursecategory as $item)
                            <option <?=$item->id == $singlecoursecategory->parent_category_id ? ' selected="selected"' : '';?> value="{{$item->id}}">{{$item->category_name}}</option>
                        @endforeach
                    </select>
                    <small id="helpId" class="form-text text-muted">Select Parent Category</small>
                </div>
                <div class="form-group">
                    <label for="">Category Disctiption</label>
                    <textarea class="form-control" name="category_discription" id="category_discription"rows="3">{{$item->category_discription}}</textarea>
                    <small id="helpId" class="form-text text-muted">Enter Category Name</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
