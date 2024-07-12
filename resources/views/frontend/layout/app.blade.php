<!DOCTYPE html>
<html lang="en">
    
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Textile - Textile Industry HTML template,Textile - Textile Industry WordPress Theme + RTL, unlimited colors available, ui/ux, ui/ux design, best html template, html template, html, woocommerce, shopify, prestashop, eCommerce, react js, react template, JavaScript, best CSS theme,css3, elementor theme, latest premium themes 2023, latest premium templates 2023, Preyan Technosys Pvt.Ltd, cymol themes, themetech mount, Web 3.0, multi-theme, website theme and template, woocommerce, bootstrap template, web templates, responsive theme, business,     boutiques, catalogue, clothing brand, fabric factory, textile manufacturing, textile business, textile company, textile import & export, textile industry, textile website " />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Textile Template </title>

<link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/flaticon.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/themify-icons.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/prettyPhoto.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/shortcodes.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/megamenu.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}"/>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>


<body>

    <!--page start-->
    <div class="page">
        
       
        <div id="preloader" class="blobs-wrapper">
            <div class="ttm-bgcolor-skincolor loader-blob"></div>
        </div>

        
        <!--header start-->
            @include('frontend.layout.header')
        <!--header end-->


        <div class="container">
            @yield('content')
        </div>


        <!--footer start-->
            @include('frontend.layout.footer')
        <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('frontend/js/jquery.easing.js') }}"></script> 
    <script src="{{ asset('frontend/js/jquery-waypoints.js') }}"></script>    
    <script src="{{ asset('frontend/js/jquery-validate.js') }}"></script> 
    <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/numinate.min.js') }}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-isotope.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <!-- Javascript end-->

</body>


</html>