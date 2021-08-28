@section('title','Contact Query Deatails')
@extends('Admin.layouts.app')
@section('extra-css')
@endsection
@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h5>Contact Query Deatails</h5>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4"><label for="name" class="fw-bold">Name:&nbsp;</label>{{$query_details->name}}</div>
                <div class="col-4"><label for="email" class="fw-bold">Email:&nbsp;</label>{{$query_details->email}}</div>
                <div class="col-4"><label for="phone" class="fw-bold">Phone:&nbsp;</label>{{$query_details->phone}}</div><br>
                <hr>
                <div class="col-12">
                    <label for="query" class="fw-bold">Query</label><br><br>
                    <p>{{$query_details->query}}</p>
                </div>
                <div class="col-12">
                    <div class="float-end">
                        {{-- <a href="{{ route('contact_query.destroy', $query_details->id) }}"data-method="delete" class="jquery-postback btn btn-danger"><i class="far fa-trash-alt"></i>&nbsp;Delete</a> --}}
                        <a href="{{ route('contact_query.destroy', $query_details->id) }}" data-method="delete" class="jquery-postback  btn btn-danger"><i class="far fa-trash-alt"></i>&nbsp;Delete</a>
                        <a href="tel:{{$query_details->phone}}" class="btn btn-outline-primary"><i class="fas fa-phone-alt"></i>&nbsp;Call</a>
                        <a href="mailto:{{$query_details->email}}" class="btn btn-outline-primary"><i class="far fa-envelope-open"></i>&nbsp;Email</a>
                    </div>
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
            window.location.href = '{{ route('contact_query.index') }}';
            console.log(data);
        });
    });

</script>
@endsection
