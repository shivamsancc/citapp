@extends('Admin.layouts.table')
@section('title','Course')
@section('table-content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5>Course</h5>
                    </div>
                    <div class="col">
                        <a href="{{route('master_create')}}" class="btn btn-outline-primary btn-sm float-end"><i
                                class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive dt-responsive">
                    <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Value</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($mastersetting as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->label}}</td>
                                <td>{{$item->value}}</td>
                                <td>
                                    <a href="{{route('master_edit',$item->id)}}"
                                        class="btn btn-outline-warning btn-sm"><i class="fas fa-pen-alt"></i></a>
                                    <a href="{{route('master_destroy',$item->id)}}"
                                        class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
