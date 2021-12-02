@extends('admin.layout.main')
@section('content')
    @include('admin.includes.dashboard2_content')
@endsection
@section('custom_script')
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/admin-lte/dist/js/pages/dashboard2.js"></script>
    <script src="/admin-lte/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="/admin-lte/plugins/raphael/raphael.min.js"></script>
    <script src="/admin-lte/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="/admin-lte/plugins/jquery-mapael/maps/usa_states.min.js"></script>
@endsection
