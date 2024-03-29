@extends('admin.layouts.table')
@section('title','Tesimonials')
@section('table-content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5>Tesimonials</h5>
                    </div>
                    <div class="col">
                        <a href="{{route('testimonial.create')}}" class="btn btn-outline-primary btn-sm float-end"><i
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
                                <th>Position</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>@php $n = 1 @endphp
                            @foreach ($testimonial as $item)
                            <tr>
                                <td>{{$n++}}</td>
                                <td>{{$item->name}}<br>
                                    <small class="text-muted"> {{$item->created_at->format('d/m/yy')}}</small>
                                </td>
                                <td>{{$item->position}}</td>
                                <td>
                                    <a href="{{route('testimonial.edit',$item->id)}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen-alt"></i></a>
                                    <a href="{{ route('testimonial.destroy', $item->id) }}" data-method="delete" class="jquery-postback  btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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
    $(document).on('click', 'a.jquery-postback', function (e) {
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
