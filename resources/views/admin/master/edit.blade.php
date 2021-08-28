@section('title','Create Master Setting')
@extends('Admin.layouts.app')
@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            Setting Edits
        </div>
        <div class="card-body">
            <form action="{{route('master_update',$settingsingel['id'])}}" enctype="multipart/form-data" method="POST">@csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="key">{{$settingsingel['label']}}:</label>
                            <input type="{{$settingsingel['field_type']}}" name="value" id="value" class="form-control" value="{{$settingsingel['value']}}" aria-describedby="helpId">
                            <input type="hidden" name="field_type" id="field_type" value="{{$settingsingel['field_type']}}">
                            <small id="helpId" class="text-muted">Enter Setting Name ex:{{$settingsingel['label']}}</small>
                            @if($settingsingel['field_type'] == 'file')
                                <br> <a target="_blank" href="{{$settingsingel['value']}}"class="btn btn-outline-primary">View File</a>
                            @else          
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</div>

</div>
@endsection
