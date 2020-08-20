<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicon-->
    <link rel="icon" href="{{ asset('public/storage/admin/assets/images/favicon.pn') }}g" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{ asset('public/storage/admin/assets/css/app.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('public/storage/admin/assets/css/style.css') }}" rel="stylesheet" />
    <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('public/storage/admin/assets/css/styles/all-themes.css') }}" rel="stylesheet" />




<!-- Page Title -->
{{-- <title>Admin - {{ ucwords($page['title']) }}</title> --}}
<title>Admin - La Maisonnette</title>

</head>
<body class="dark" style="height: 100%; overflow:">
    <div class="overlay"></div>
    @include('admin.includes.header')




                    @yield('content')




</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->



<script src="{{asset("public/storage/admin/assets/js/app.min.js")}}"></script>
<script src="{{asset("public/storage/admin/assets/js/chart.min.js")}}"></script>
<script src="{{asset("public/storage/admin/assets/js/bundles/apexcharts/apexcharts.min.js")}}"></script>
<!-- Custom Js -->
<script src="{{asset("public/storage/admin/assets/js/admin.js")}}"></script>
<script src="{{asset("public/storage/admin/assets/js/pages/index.js")}}"></script>
<script src="{{asset("public/storage/admin/assets/js/table.min.js")}}"></script>
<script src="{{asset("public/storage/admin/assets/js/bundles/export-tables/dataTables.buttons.min.js")}}"></script>
<script src="{{asset("public/storage/admin/assets/js/bundles/export-tables/buttons.flash.min.js")}}"></script>
<script src="{{asset("public/storage/admin/assets/js/bundles/export-tables/jszip.min.js")}}"></script>
<script src="{{asset("public/storage/admin/assets/js/bundles/export-tables/pdfmake.min.js")}}"></script>
<script src="{{asset("public/storage/admin/assets/js/bundles/export-tables/vfs_fonts.js")}}"></script>
<script src="{{asset("public/storage/admin/assets/js/bundles/export-tables/buttons.html5.min.js")}}"></script>
<script src="{{asset("public/storage/admin/assets/js/bundles/export-tables/buttons.print.min.js")}}"></script>
<script src="{{asset("public/storage/admin/assets/js/pages/tables/jquery-datatable.js")}}"></script>
</body>

</html>
