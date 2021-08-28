@section('title','Create Master Setting')
@extends('admin.layouts.app')
@section('content')
<div class="row">
    <form action="{{route('master_store')}}" method="POST">@csrf
     <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="key">Setting Name</label>
                <input type="text" name="key" required id="key" class="form-control" placeholder="Site Name" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Enter Setting Name ex:Site Name</small>
            </div>
           </div>
          <div class="col-6">
            <div class="form-group">
                <label for="label">Label</label>
                <input type="text" name="label" required  id="label" class="form-control" placeholder="Site Name" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Enter Setting Lable ex:Site Name</small>
              </div>
          </div>
          <div class="col-6">
            <div class="form-group">
                <label for="">Field Type</label>
                <select class="form-control" required name="field_type" id="field_type">
                  <option selected value=""> Select </option>
                   @foreach ($field_type as $hoby)
                       <option value="{{$hoby}}">{{$hoby}}</option>
                   @endforeach
                </select>
              </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
     </div>
    </form>
</div>
@endsection
