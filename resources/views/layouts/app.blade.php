<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="" />
    <meta name="keywords" content="kindergarten,La Maisonnette,lamaisonnette,Maisonnette,children,kidsschool,school,baby,childschool,academy,course,education," />
    <meta name="author" content="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Scripts -->
    <script src="{{ asset('public/storage/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/storage/css/app.css') }}" rel="stylesheet">

<!-- Page Title -->
<title>La Maisonnette - {{ ucwords($page['title']) }}</title>

<!-- Favicon and Touch Icons -->
<link href="{{asset('public/storage/images/favicon.png')}}" rel="shortcut icon" type="image/png">
<link href="{{asset('public/storage/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
<link href="{{asset('public/storage/images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('public/storage/images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('public/storage/images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{asset('public/storage/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('public/storage/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('public/storage/css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('public/storage/css/css-plugin-collections.css')}}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{asset('public/storage/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{asset('public/storage/css/style-main.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{asset('public/storage/css/preloader.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{asset('public/storage/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{asset('public/storage/css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="{{asset('public/storage/css/style.css')}}" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{asset('public/storage/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{asset('public/storage/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{asset('public/storage/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{asset('public/storage/css/colors/theme-skin-color-set-1.css')}}" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{asset("public/storage/js/jquery-2.2.4.min.js")}}"></script>
<script src="{{asset("public/storage/js/jquery-ui.min.js")}}"></script>
<script src="{{asset("public/storage/js/bootstrap.min.js")}}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{asset("public/storage/js/jquery-plugin-collection.js")}}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{asset("public/storage/js/revolution-slider/js/jquery.themepunch.tools.min.js")}}"></script>
<script src="{{asset("public/storage/js/revolution-slider/js/jquery.themepunch.revolution.min.js")}}"></script>
</head>
<body>
    <div id="app wrapper" class="clearfix">
        <div id="preloader">
            <div id="spinner">
              <div class="preloader-loading-wrapper">
                      <div class="cssload-loading"><i></i><i></i></div>
                    </div>
                  </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
          </div>
          @include('includes.header')


                    @yield('content')


        @include('includes.footer')
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{asset("public/storage/js/custom.js")}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{asset("public/storage/js/revolution-slider/js/extensions/revolution.extension.actions.min.js")}}"></script>
<script type="text/javascript" src="{{asset("public/storage/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js")}}"></script>
<script type="text/javascript" src="{{asset("public/storage/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js")}}"></script>
<script type="text/javascript" src="{{asset("public/storage/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js")}}"></script>
<script type="text/javascript" src="{{asset("public/storage/js/revolution-slider/js/extensions/revolution.extension.migration.min.js")}}"></script>
<script type="text/javascript" src="{{asset("public/storage/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js")}}"></script>
<script type="text/javascript" src="{{asset("public/storage/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js")}}"></script>
<script type="text/javascript" src="{{asset("public/storage/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js")}}"></script>
<script type="text/javascript" src="{{asset("public/storage/js/revolution-slider/js/extensions/revolution.extension.video.min.js")}}"></script>

</body>

</html>
