@extends('Admin.layouts.table')
@section('title','Contact Queries')
@section('table-content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5>Contact Queries</h5>
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
                                <th>Phone</th>
                                <th>email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>@php $n = 1 @endphp
                            @foreach ($query as $item)
                            <tr>
                                <td>{{$n++}}</td>
                                <td>{{$item->name}}<br>
                                    <small class="text-muted"> {{$item->created_at->format('d/m/yy')}}</small>
                                </td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->email}}</td>
                                <td>
                                    <a href="{{ route('contact_query.show', $item->id) }}"class="btn btn-outline-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('contact_query.destroy', $item->id) }}" data-method="delete" class="jquery-postback  btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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
