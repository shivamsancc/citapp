@extends('Admin.layouts.table')
@section('title','Course Category')
@section('table-content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5>Course Category</h5>
                    </div>
                    <div class="col">
                        <a href="{{route('coursecategory.create')}}" class="btn btn-outline-primary btn-sm float-end"><i
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
                                <th>Category Name</th>
                                <th>Parent Category </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coursecategory as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->category_name}}</td>
                                <td>{{$item->parent_category_name}}</td>
                                <td>
                                    <a href="{{route('coursecategory.edit',$item->id)}}"class="btn btn-outline-warning btn-sm"><i class="fas fa-pen-alt"></i></a>
                                    <a href="{{ route('coursecategory.destroy', $item->id) }}" data-method="delete" class="jquery-postback  btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('extra-js')
<script>
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
    $(document).on('click', 'a.jquery-postback', function(e) {
        e.preventDefault(); // does not go through with the link.
        var $this = $(this);
        $.post({
            type: $this.data('method'),
            url: $this.attr('href')
        }).done(function (data) {
            alert('success');
            location.reload()
            // console.log(data);
        });
    });
    </script>
@endsection
