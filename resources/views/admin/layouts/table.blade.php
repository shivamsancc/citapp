@extends('admin.layouts.app')
@section('extra-css')
    <link rel="stylesheet" href="{{asset("vendor/theme/admin")}}/assets/css/plugins/dataTables.bootstrap4.min.css">
@endsection
    @section('content')
        @yield('table-content')
    @endsection
@section('extra-js')
    <script src="{{asset("vendor/theme/admin")}}/assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="{{asset("vendor/theme/admin")}}/assets/js/plugins/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset("vendor/theme/admin")}}/assets/js/pages/data-basic-custom.js"></script>
@endsection
