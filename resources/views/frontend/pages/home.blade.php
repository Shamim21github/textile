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

</head>


<body>

    <!--page start-->
    <div class="page">
        
       
        <div id="preloader" class="blobs-wrapper">
            <div class="ttm-bgcolor-skincolor loader-blob"></div>
        </div>

        
        <!--header start-->
        <header id="masthead" class="header ttm-header-style-02 clearfix">
            <div class="widget_header_wrapper ttm-bgcolor-darkgrey clearfix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3">
                            <!-- site-branding -->
                            <div class="site-branding ">
                                <a class="home-link" href="{{ route('home') }}" title="Textile" rel="home">
                                    <img id="logo-img" height="37" width="138" class="img-fluid auto_size logo-img" src="{{ asset('frontend/images/textileLogo1.png') }}" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                        </div>
                        <div class="col-xl-9">
                            <!-- ttm-widget-header -->
                            <div class="ttm-widget_header d-flex flex-row align-items-center justify-content-end">
                                <!-- widget-info -->
                                <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                    <div class="widget_icon ttm-textcolor-skincolor"><i class="flaticon flaticon-email-2"></i></div>
                                    <div class="widget_content">
                                        <p>Send Email</p>
                                        <h3>abctextile@gmail.com</h3>
                                    </div>
                                </div><!-- widget-info end -->
                                <!-- widget-info -->
                                <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                    <div class="widget_icon ttm-textcolor-skincolor"><i class="flaticon flaticon-clock"></i></div>
                                    <div class="widget_content">
                                        <p>Working Hours</p>
                                        <h3>Mon-Sat 09:00 am to 07:00 pm</h3>
                                    </div>
                                </div><!-- widget-info end -->
                                <!-- widget-info -->
                                <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                    <div class="widget_icon ttm-textcolor-skincolor"><i class="flaticon flaticon-phone-call"></i></div>
                                    <div class="widget_content">
                                        <p>Have any Questions?</p>
                                        <h3>+88 01987 654321</h3>
                                    </div>
                                </div><!-- widget-info end -->
                            </div><!-- ttm-widget-header end -->
                        </div>
                    </div>
                </div>
            </div>
            <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white ttm-textcolor-darkgrey">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                    <div class="site-navigation-content d-flex flex-row">
                                        <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                            <span class="menubar-box">
                                                <span class="menubar-inner"></span>
                                            </span>
                                        </div>
                                        <nav class="main-menu menu-mobile" id="menu">
                                            <ul class="menu">
                                                <li class="mega-menu-item active">
                                                    <a href="{{ route('home') }}" class="mega-menu-link">Home</a>
                                                    
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="{{ route('about') }}" class="mega-menu-link">About</a>
                                                    
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="{{ route('service') }}" class="mega-menu-link">Services</a>
                                                    <ul class="mega-submenu">
                                                        <li><a href="{{ route('fabricPrinting') }}">Fabric Printing</a></li>
                                                        <li><a href="{{ route('fabricDyeing') }}">Fabric Dyeing</a></li>
                                                        <li><a href="{{ route('engineering') }}">Engineering</a></li>
                                                        <li><a href="{{ route('manufacture') }}">Manufacture</a></li>
                                                        <li><a href="{{ route('designFabric') }}">We Design Fabric</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="{{ route('product') }}" class="mega-menu-link">Products</a>
                                                </li>
                                                {{-- <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-link">Blog</a>
                                                    <ul class="mega-submenu">
                                                        <li><a href="blog.html">Blog Classic</a></li>
                                                        <li><a href="blog-grid.html">Blog Grid View</a></li>
                                                        <li><a href="blog-single.html">Blog Single View</a></li>
                                                    </ul>
                                                </li> --}}
                                                <li class="mega-menu-item">
                                                    <a href="{{ route('contact') }}">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div class="header_extra d-flex flex-row align-items-center ml-auto">
                                            <a href="{{ route('contact') }}" class="ttm-btn ttm-btn-size-sm ttm-btn-style-fill ttm-btn-shape-square ttm-btn-color-dark">Get Quote</a>
                                            <!-- header_social -->
                                            <div class="header_social">
                                                <div class="social-icons">
                                                    <ul class="social-icons list-inline ttm-textcolor-skincolor">
                                                        <li><a class="tooltip-top" href="https://www.facebook.com/preyantechnosys19" rel="noopener" aria-label="facebook" data-tooltip="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a class="tooltip-top" href="https://twitter.com/PreyanTechnosys" rel="noopener" aria-label="twitter" data-tooltip="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a class="tooltip-top" href="https://www.flickr.com/photos/166353669@N03/" rel="noopener" aria-label="flickr" data-tooltip="Flickr" target="_blank"><i class="fa fa-flickr"></i></a></li>
                                                        <li><a class="tooltip-top" href="https://www.linkedin.com/in/preyan-technosys-pvt-ltd/" rel="noopener" aria-label="linkedin" data-tooltip="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- header_social end-->
                                        </div>
                                    </div>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--header end-->


        <!-- Banner -->
        <div class="banner_slider_wrapper">
            <div class="banner_slider banner_slider_2">
                <div class="slide">
                    <div class="slide_img" style="background-image: url({{ asset('frontend/images/slides/cover2.jpg')}} );"></div>
                    <div class="slide__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slide__content--headings ttm-textcolor-white text-center margin_bottom100 res-991-margin_bottom0">
                                        <span  data-animation="fadeInDown">Where Elegance Meeting Class</span>
                                        <h2  data-animation="fadeInDown" class="border_text">Textile</h2>
                                        <p  data-animation="fadeInDown">Crafting Quality Fabrics with Precision, Weaving Dreams into Every Stitch, Creating Timeless Elegance for Your Lifestyle! </p>
                                        <div class="d-inline-block margin_top40 res-767-margin_top30" data-animation="fadeInUp" data-delay="1.4">
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="{{ route ('contact') }}">DISCUSS A PROJECT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide_img" style="background-image: url({{ asset('frontend/images/slides/cover1.jpg')}} );"></div>
                    <div class="slide__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slide__content--headings ttm-textcolor-white text-center margin_bottom100 res-991-margin_bottom0">
                                        <span  data-animation="fadeInDown" class="border_text">Since 2011</span>
                                        <h2  data-animation="fadeInDown">The Easy Fabric Pickings</h2>
                                        <p  data-animation="fadeInDown">Elevating Style with Luxurious Fabrics and Timeless Craftsmanship.</p>
                                        <div class="d-inline-block margin_top40 res-767-margin_top30" data-animation="fadeInUp" data-delay="1.4">
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="contact-us.html">DISCUSS A PROJECT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner end-->

    
        <!--site-main start-->
        <div class="site-main">

            <!--padding_zero-section-->
            <section class="ttm-row padding_zero-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row mt_140 res-991-margin_top0 mb_15">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content style3">
                                        <div class="ttm-highlight-box"><i class="fa fa-star"></i></div>
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="flaticon flaticon-textiles-1"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>We Design Fabric</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>We classified it on the basis of material, design and by craft.</p>
                                            </div>
                                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="{{ route('designFabric') }}">read more<i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content style3">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="flaticon flaticon-sewing"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>We Manufacture</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>With its rapid growth over the last four decades, since 2011</p>
                                            </div>
                                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="{{ route('manufacture') }}">read more<i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content style3">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="flaticon flaticon-placeholder"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>We Export Globally</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Textile is a leading export textile service providers globally.</p>
                                            </div>
                                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="{{ route('fabricPrinting') }}">read more<i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
            </section>
            <!--padding_zero-section-->


            <section class="ttm-row about-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-8">
                            <div class="ttm_single_image-wrapper">
                                <img class="img-fluid auto_size" width="569" height="655" src="{{ asset('frontend/images/about1.jpg')}}" alt="single-03">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="margin_top40">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3>WHO WE ARE</h3>
                                        <h2 class="title">An Ultimate Textile Brand in <b>Market Since 2011</b></h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>ABC Textile, one of the leading knit composite conglomerates in Bangladesh, experienced its inception in 2001. It is presently an integration of several business units of knitting, dyeing, garments, printing, embroidery and washing.​</p>
                                    </div>
                                </div><!-- section title end -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="ttm-list ttm-bordered-lists ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Trends the Current Market</span></li>
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">The rayon fabrics wholesaler</span></li>
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">The Global fabrics distributor</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="ttm-list ttm-bordered-lists ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Biological tested fabrics</span></li>
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Awarded For Best Exporter</span></li>
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Stable partner global textile</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="margin_top35 res-767-margin_top20">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor margin_right20 margin_top15" href="about-us-2.html">view more</a>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark  margin_top15" href="contact-us.html">contact us</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
            </section>


            {{-- <section class="ttm-row padding_zero-section bg-layer-equal-height clearfix">
                <div class="container">
                    <div class="row no-gutters ttm-bgcolor-skincolor">
                        <div class="col-lg-6">
                            <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-skincolor ttm-bg ttm-left-span res-1199-padding_left15">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-content style4">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-xl">
                                                <i class="flaticon flaticon-yarn-1"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Need Any Textiles Services Help?</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>+123-2600-777, +123-2535-789</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- col-img-img-two -->
                            <div class="ttm-bg ttm-col-bgimage-yes ttm-bgcolor-skincolor col-bg-img-three z-index-2">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content">
                                </div>
                            </div><!-- col-img-bg-img-two end-->
                            <img class="img-fluid ttm-equal-height-image w-100" src="{{ asset('frontend/images/bg-image/col-bgimage-3.png')}}" alt="bg-image">
                        </div>
                    </div><!-- row end -->
                </div>
            </section> --}}



            <!--service-section-->
            <section class="ttm-row service-section ttm-bgcolor-grey position-relative z-index-2 clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title -->
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <h3>INDUSTRIES & PRODUCTION</h3>
                                    <h2 class="title">Let's Experience <b>Exclusive Quality</b></h2>
                                </div>
                            </div><!-- section-title end -->
                        </div>
                    </div>
                    <!-- row end -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="featuredbox-number">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <!--featured-icon-box-->
                                        <div class="featured-icon-box icon-align-top-content style5">
                                            <i class="ttm-num ti-info"></i>
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                    <i class="flaticon flaticon-textile-1"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Fabric Treatment</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>We do execute stabilization including reweaving & stitch repair details.</p>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <!--featured-icon-box-->
                                        <div class="featured-icon-box icon-align-top-content style5">
                                            <i class="ttm-num ti-info"></i>
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                    <i class="flaticon flaticon-silk"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Artistic Direction</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Assist collection strategies, storage, application and pest production management.</p>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <!--featured-icon-box-->
                                        <div class="featured-icon-box icon-align-top-content style5">
                                            <i class="ttm-num ti-info"></i>
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                    <i class="flaticon flaticon-moisture-wicking-fabric"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Satin weaving</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Continuous weft yarn, with as few interruptions of warp as it possible.</p>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <!--featured-icon-box-->
                                        <div class="featured-icon-box icon-align-top-content style5">
                                            <i class="ttm-num ti-info"></i>
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                    <i class="flaticon flaticon-sewing-machine"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Fabric Dyeing</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Transfer dyes from aqueous solution onto the fiber surface & diffusion.</p>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--service-section end -->


            <!--padding_zero-section-->
            <section class="ttm-row padding_zero-section bg-layer-equal-height ttm-bgcolor-darkgrey clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row no-gutters">
                                <div class="col-lg-7">
                                    <div class="padding_top90 padding_right60 padding_bottom70 res-991-padding_right0 res-991-padding_top60 res-991-padding_bottom30">
                                        <!-- section title -->
                                        <div class="section-title">
                                            <div class="title-header">
                                                <h3>WELL DESIGNED</h3>
                                                <h2 class="title">We Provide Clothes <b>More Than Just Stitched Fabric</b></h2>
                                            </div>
                                            <div class="title-desc">
                                                <p>Textile is the largest peer-to-peer comparison initiative in the textile industry. It tracks the apparel material and home textile sector’s progress toward more sustainable materials sourcing, as well as alignment with global effort. Besides the regular production became the largest exporter.</p>
                                            </div>
                                        </div><!-- section title end -->
                                        <div class="ttm-horizontal_sep width-100 margin_top20 margin_bottom20"></div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                <!-- ttm-fid -->
                                                <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon style2">
                                                    <div class="ttm-fid-icon-wrapper">
                                                        <i class="ti ti-cup"></i>
                                                    </div>
                                                    <div class="ttm-fid-contents">
                                                        <h4 class="ttm-fid-inner">
                                                            <span   data-appear-animation="animateDigits" 
                                                                    data-from="0" 
                                                                    data-to="25" 
                                                                    data-interval="5" 
                                                                    data-before="" 
                                                                    data-before-style="sup" 
                                                                    data-after="+" 
                                                                    data-after-style="sub" 
                                                                    class="numinate">25
                                                            </span>
                                                            <span>+</span>
                                                        </h4>
                                                        <h3 class="ttm-fid-title">Win Awards</h3>
                                                    </div>
                                                </div><!-- ttm-fid end -->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                <!-- ttm-fid -->
                                                <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon style2">
                                                    <div class="ttm-fid-icon-wrapper">
                                                        <i class="ti ti-bag"></i>
                                                    </div>
                                                    <div class="ttm-fid-contents">
                                                        <h4 class="ttm-fid-inner">
                                                            <span   data-appear-animation="animateDigits" 
                                                                    data-from="0" 
                                                                    data-to="800" 
                                                                    data-interval="20" 
                                                                    data-before="" 
                                                                    data-before-style="sup" 
                                                                    data-after="+" 
                                                                    data-after-style="sub" 
                                                                    class="numinate">800
                                                            </span>
                                                            <span>+</span>
                                                        </h4>
                                                        <h3 class="ttm-fid-title">Equipment</h3>
                                                    </div>
                                                </div><!-- ttm-fid end -->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                <!-- ttm-fid -->
                                                <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon style2">
                                                    <div class="ttm-fid-icon-wrapper">
                                                        <i class="ti ti-calendar"></i>
                                                    </div>
                                                    <div class="ttm-fid-contents">
                                                        <h4 class="ttm-fid-inner">
                                                            <span   data-appear-animation="animateDigits" 
                                                                    data-from="0" 
                                                                    data-to="12" 
                                                                    data-interval="1" 
                                                                    data-before="" 
                                                                    data-before-style="sup" 
                                                                    data-after="+" 
                                                                    data-after-style="sub" 
                                                                    class="numinate">12
                                                            </span>
                                                            <span>+</span>
                                                        </h4>
                                                        <h3 class="ttm-fid-title">Total Years</h3>
                                                    </div>
                                                </div><!-- ttm-fid end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-white ttm-right-span p-30 margin_top80 res-991-margin_top0">
                                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                        <div class="layer-content">
                                            <!-- col-img-img-four -->
                                            <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-four ttm-right-span">
                                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                                <div class="layer-content"></div>
                                            </div><!-- col-img-bg-img-four end-->
                                            <img class="img-fluid ttm-equal-height-image w-100" src="{{ asset('frontend/images/bg-image/col-bgimage-4.jpg')}}" alt="bg-image">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- row end -->
                        </div>
                    </div>
                </div>
            </section>
            <!--padding_zero-section end-->


            <!--procedure-section-->
            <section class="ttm-row procedure-section ttm-bgcolor-grey clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="padding_top70 res-991-padding_top0"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title -->
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <h3>OUR WORKING PROCESS</h3>
                                    <h2 class="title">Simple Step To Get <b>Textile?</b></h2>
                                </div>
                            </div><!-- section-title end -->
                        </div>
                    </div><!-- row end -->
                    <!-- row -->
                    <div class="row procedure-row position-relative mb_15">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-procedure">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid auto_size" width="198" height="198" src="{{ asset('frontend/images/process-01-198x198.jpg')}}" alt="image">
                                    <div class="process-num"></div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Production of Fabric</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We Produce the best quality of  fabric covered all aspects</p>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-procedure">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid auto_size" width="198" height="198" src="{{ asset('frontend/images/process-02-198x198.jpg')}}" alt="image">
                                    <div class="process-num"></div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Exportation Globally</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We not only export locally but all over the world</p>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-procedure">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid auto_size" width="198" height="198" src="{{ asset('frontend/images/process-03-198x198.jpg')}}" alt="image">
                                    <div class="process-num"></div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Digital Shop Available</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Showcased digitally our all the products for best reach</p>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-procedure">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid auto_size" width="198" height="198" src="{{ asset('frontend/images/process-04-198x198.jpg')}}" alt="image">
                                    <div class="process-num"></div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Great Client Support</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>our front desk is available for clients for 24*7!</p>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox end-->
                        </div>
                    </div><!-- row end -->
                </div>
            </section>
            <!--procedure-section end-->


            <!--padding_zero-section-->
            <section class="ttm-row padding_zero-section col_overlay_section bg-layer-equal-height ttm-bgcolor-skincolor clearfix">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-xl-5">
                            <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-darkgrey ttm-right-span spacing-4">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content">
                                    <!-- section title -->
                                    <div class="section-title">
                                        <div class="title-header">
                                            <h3>EXPLORE RECENT WORKS</h3>
                                            <h2 class="title">We Provide Best <b>Solution For Preparing Your Success</b></h2>
                                        </div>
                                        <div class="title-desc">
                                            <p>With production sites enhanced by tried and tested fabric collection. This means our clients get exactly what they want, very single time from wide range.</p>
                                        </div>
                                    </div><!-- section title end -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-skincolor ttm-right-span spacing-5">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content">
                                    <div class="ml_160 res-1199-margin_left0">
                                        <div class="row ttm-boxes-spacing-10px slick_slider slick-arrows-style3" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":true, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1400,"settings":{"slidesToShow": 4}} , {"breakpoint":1204,"settings":{"slidesToShow": 3}}, {"breakpoint":777,"settings":{"slidesToShow": 2}},                {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                                            <div class="col-lg-3 col-md-6 col-sm-6 ttm-box-col-wrapper">
                                                <div class="featured-imagebox featured-imagebox-portfolio style1">
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay">
                                                        <!-- featured-thumbnail -->
                                                        <div class="featured-thumbnail">
                                                            <img class="img-fluid" src="{{ asset('frontend/images/portfolio/portfolio-01-600x700.jpg')}}" alt="image">
                                                        </div><!-- featured-thumbnail end-->
                                                        <div class="ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image" title="Silk Fabric" data-rel="prettyPhoto" href="{{ asset('frontend/images/portfolio/portfolio-01-1200x800.jpg')}}">
                                                                <i class="fa fa-search"></i>
                                                            </a>
                                                            <a href="silk-fabric.html" class="ttm_link"><i class="fa fa-random"></i></a>
                                                        </div>
                                                    </div><!-- ttm-box-view-overlay end-->
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h3><a href="silk-fabric.html">Silk Fabric</a></h3>
                                                        </div>
                                                    </div>
                                                </div><!-- featured-icon-box end-->
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 ttm-box-col-wrapper">
                                                <div class="featured-imagebox featured-imagebox-portfolio style1">
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay">
                                                        <!-- featured-thumbnail -->
                                                        <div class="featured-thumbnail">
                                                            <img class="img-fluid" src="{{ asset('frontend/images/portfolio/portfolio-02-600x700.jpg')}}" alt="image">
                                                        </div><!-- featured-thumbnail end-->
                                                        <div class="ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image" title="Linen Fabric" data-rel="prettyPhoto" href="{{ asset('frontend/images/portfolio/portfolio-02-1200x800.jpg')}}">
                                                                <i class="fa fa-search"></i>
                                                            </a>
                                                            <a href="linen-fabric.html" class="ttm_link"><i class="fa fa-random"></i></a>
                                                        </div>
                                                    </div><!-- ttm-box-view-overlay end-->
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h3><a href="linen-fabric.html">Linen Fabric</a></h3>
                                                        </div>
                                                    </div>
                                                </div><!-- featured-icon-box end-->
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 ttm-box-col-wrapper">
                                                <div class="featured-imagebox featured-imagebox-portfolio style1">
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay">
                                                        <!-- featured-thumbnail -->
                                                        <div class="featured-thumbnail">
                                                            <img class="img-fluid" src="{{ asset('frontend/images/portfolio/portfolio-03-600x700.jpg')}}" alt="image">
                                                        </div><!-- featured-thumbnail end-->
                                                        <div class="ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image" title="Wool Fabric" data-rel="prettyPhoto" href="{{ asset('frontend/images/portfolio/portfolio-03-1200x800.jpg')}}">
                                                                <i class="fa fa-search"></i>
                                                            </a>
                                                            <a href="wool-fabric.html" class="ttm_link"><i class="fa fa-random"></i></a>
                                                        </div>
                                                    </div><!-- ttm-box-view-overlay end-->
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h3><a href="wool-fabric.html">Wool Fabric</a></h3>
                                                        </div>
                                                    </div>
                                                </div><!-- featured-icon-box end-->
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 ttm-box-col-wrapper">
                                                <div class="featured-imagebox featured-imagebox-portfolio style1">
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay">
                                                        <!-- featured-thumbnail -->
                                                        <div class="featured-thumbnail">
                                                            <img class="img-fluid" src="{{ asset('frontend/images/portfolio/portfolio-04-600x700.jpg')}}" alt="image">
                                                        </div><!-- featured-thumbnail end-->
                                                        <div class="ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image" title="Georgette Fabric" data-rel="prettyPhoto" href="{{ asset('frontend/images/portfolio/portfolio-04-1200x800.jpg')}}">
                                                                <i class="fa fa-search"></i>
                                                            </a>
                                                            <a href="georgette-fabric.html" class="ttm_link"><i class="fa fa-random"></i></a>
                                                        </div>
                                                    </div><!-- ttm-box-view-overlay end-->
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h3><a href="georgette-fabric.html">Georgette Fabric</a></h3>
                                                        </div>
                                                    </div>
                                                </div><!-- featured-icon-box end-->
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 ttm-box-col-wrapper">
                                                <div class="featured-imagebox featured-imagebox-portfolio style1">
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay">
                                                        <!-- featured-thumbnail -->
                                                        <div class="featured-thumbnail">
                                                            <img class="img-fluid" src="{{ asset('frontend/images/portfolio/portfolio-05-600x700.jpg')}}" alt="image">
                                                        </div><!-- featured-thumbnail end-->
                                                        <div class="ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image" title="Leather Material" data-rel="prettyPhoto" href="{{ asset('frontend/images/portfolio/portfolio-05-1200x800.jpg')}}">
                                                                <i class="fa fa-search"></i>
                                                            </a>
                                                            <a href="leather-material.html" class="ttm_link"><i class="fa fa-random"></i></a>
                                                        </div>
                                                    </div><!-- ttm-box-view-overlay end-->
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h3><a href="leather-material.html">Leather Material</a></h3>
                                                        </div>
                                                    </div>
                                                </div><!-- featured-icon-box end-->
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 ttm-box-col-wrapper">
                                                <div class="featured-imagebox featured-imagebox-portfolio style1">
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay">
                                                        <!-- featured-thumbnail -->
                                                        <div class="featured-thumbnail">
                                                            <img class="img-fluid" src="{{ asset('frontend/images/portfolio/portfolio-06-600x700.jpg')}}" alt="image">
                                                        </div><!-- featured-thumbnail end-->
                                                        <div class="ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image" title="Cotton Fabric" data-rel="prettyPhoto" href="{{ asset('frontend/images/portfolio/portfolio-06-1200x800.jpg')}}">
                                                                <i class="fa fa-search"></i>
                                                            </a>
                                                            <a href="cotton-fabric.html" class="ttm_link"><i class="fa fa-random"></i></a>
                                                        </div>
                                                    </div><!-- ttm-box-view-overlay end-->
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h3><a href="cotton-fabric.html">Cotton Fabric</a></h3>
                                                        </div>
                                                    </div>
                                                </div><!-- featured-icon-box end-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
            </section>
            <!--padding_zero-section end-->


            <!--about-section-->
            <section class="ttm-row about-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12">
                            <div class="mr_20 res-991-margin_right0">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3>BENEFIT</h3>
                                        <h2 class="title">Technology Of <b>Textile</b></h2>
                                    </div>
                                </div><!-- section title end -->
                                <div class="featuredbox-number mt_15">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-content style6">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                                <i class="ttm-num ti-info"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content ttm-bgcolor-grey">
                                            <div class="featured-title">
                                                <h3>Take Price Advantages</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>We own professional fabric trade department, which can save much more extra taxes.</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-content style6">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                                <i class="ttm-num ti-info"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content ttm-bgcolor-grey">
                                            <div class="featured-title">
                                                <h3>Latest Machine Advantage</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>We have more than 500 sets of world advanced machines for production process</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-content style6">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                                <i class="ttm-num ti-info"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content ttm-bgcolor-grey">
                                            <div class="featured-title">
                                                <h3>24*7 Service Advantages</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>We provide some additional services, like courier, social and educational!</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-8 col-md-12 mx-auto">                                   
                            <div class="ttm_single_image-wrapper imagestyle-two text-lg-right">
                                 <div class="ttm_single_image_text ttm-textcolor-darkgrey">We Design Fabric</div>
                                <img class="img-fluid auto_size" src="{{ asset('frontend/images/single-img-04.jpg')}}" alt="single_04">
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
            </section>
            <!--about-section end-->

            
            <!--blog-section-->
            <section class="ttm-row blog-section ttm-bgcolor-grey clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section title -->
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <h3>NEWS CORNER</h3>
                                    <h2 class="title">Know Where Textile <b>Leading?</b></h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                    <div class="row slick_slider mb_15" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 3}} , {"breakpoint":900,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                        <div class="col-lg-4">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post style2">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{ asset('frontend/images/blog/blog-01-600x430.jpg')}}" alt="blog-img">
                                </div>
                                <div class="featured-content">
                                    <!-- ttm-box-post-date -->
                                    <div class="ttm-box-post-date">
                                        <i class="fa fa-calendar"></i>
                                        <time class="entry-date published" datetime="2021-03-18T04:16:25+00:00">March 18, 2021</time>
                                    </div><!-- ttm-box-post-date end -->
                                    <div class="post-meta">
                                        <span class="ttm-meta-line comments-link"><i class="fa fa-comments-o"></i>0 Comments</span>
                                        <span class="ttm-meta-line tag"><i class="ti ti-folder"></i>Textile World</span>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="blog-single.html">Can textiles lead the way during the pandemic?</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our po...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline ttm-icon-btn-right" href="blog-single.html">read more<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div><!-- featured-imagebox-post end -->
                        </div>
                        <div class="col-lg-4">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post style2">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{ asset('frontend/images/blog/blog-02-600x430.jpg')}}" alt="blog-img">
                                </div>
                                <div class="featured-content">
                                    <!-- ttm-box-post-date -->
                                    <div class="ttm-box-post-date">
                                        <i class="fa fa-calendar"></i>
                                        <time class="entry-date published" datetime="2021-02-28T04:15:42+00:00">February 28, 2021</time>
                                    </div>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line comments-link"><i class="fa fa-comments-o"></i>0 Comments</span>
                                        <span class="ttm-meta-line tag"><i class="ti ti-folder"></i>Fashion & Retail</span>
                                    </div><!-- post-meta end -->
                                    <div class="featured-title">
                                        <h3><a href="blog-single.html">One stop solution for textiles fabrics</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Purus non enim praesent elementum facilisis. Eget mi proin sed libero enim sed faucib...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline ttm-icon-btn-right" href="blog-single.html">read more<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div><!-- featured-imagebox-post end -->
                        </div>
                        <div class="col-lg-4">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post style2">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{ asset('frontend/images/blog/blog-03-600x430.jpg')}}" alt="blog-img">
                                </div>
                                <div class="featured-content">
                                    <!-- ttm-box-post-date -->
                                    <div class="ttm-box-post-date">
                                        <i class="fa fa-calendar"></i>
                                        <time class="entry-date published" datetime="2021-02-15T04:15:25+00:00">February 15, 2021</time>
                                    </div><!-- ttm-box-post-date end -->
                                    <div class="post-meta">
                                        <span class="ttm-meta-line comments-link"><i class="fa fa-comments-o"></i>0 Comments</span>
                                        <span class="ttm-meta-line tag"><i class="ti ti-folder"></i>Industry Insight</span>
                                    </div><!-- post-meta end -->
                                    <div class="featured-title">
                                        <h3><a href="blog-single.html">Textilegence Magazine & Digital Platform</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Enim nunc faucibus a pellentesque sit amet porttitor eget. Morbi blandit cursus risus...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline ttm-icon-btn-right" href="blog-single.html">read more<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div><!-- featured-imagebox-post end -->
                        </div>
                        <div class="col-lg-4">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post style2">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{ asset('frontend/images/blog/blog-04-600x430.jpg')}}" alt="blog-img">
                                </div>
                                <div class="featured-content">
                                    <!-- ttm-box-post-date -->
                                    <div class="ttm-box-post-date">
                                        <i class="fa fa-calendar"></i>
                                        <time class="entry-date published" datetime="2021-02-11T04:12:56+00:00">February 11, 2021</time>
                                    </div><!-- ttm-box-post-date end -->
                                    <div class="post-meta">
                                        <span class="ttm-meta-line comments-link"><i class="fa fa-comments-o"></i>0 Comments</span>
                                        <span class="ttm-meta-line tag"><i class="ti ti-folder"></i>News & Analysis</span>
                                    </div><!-- post-meta end -->
                                    <div class="featured-title">
                                        <h3><a href="blog-single.html">Contactless Payments Time Has Come</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Viverra accumsan in nisl nisi. Et leo duis ut diam quam nulla porttitor massa. Pellen...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline ttm-icon-btn-right" href="blog-single.html">read more<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div><!-- featured-imagebox-post end -->
                        </div>
                    </div>
                </div>
            </section>
            <!--blog-section end-->


        </div>
        <!--site-main end-->


        <!--footer start-->
        <footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
            <div class="first-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 widget-area">
                            <div class="widget widget_text clearfix">
                                <div class="d-sm-flex align-items-center">
                                    <div class="footer-logo">
                                        <img id="footer-logo-img" class="img-fluid auto_size" height="46" width="170" src="{{ asset('frontend/images/footer-logo.svg')}}" alt="image">
                                    </div>
                                    <div class="textwidget widget-text">
                                        <p>Textile is operating in the textile market, as the manufacture and trader. As years go by the range of produced textiles products has increased.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 widget-area">
                            <div class="widget widget_social clearfix">
                                <div class="social-icons text-lg-right">
                                    <ul class="social-icons list-inline">
                                        <li><a class="tooltip-top" href="https://www.facebook.com/preyantechnosys19" rel="noopener" aria-label="facebook" data-tooltip="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="tooltip-top" href="https://twitter.com/PreyanTechnosys" rel="noopener" aria-label="twitter" data-tooltip="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="tooltip-top" href="https://www.flickr.com/photos/166353669@N03/" rel="noopener" aria-label="flickr" data-tooltip="Flickr" target="_blank"><i class="fa fa-flickr"></i></a></li>
                                        <li><a class="tooltip-top" href="https://www.linkedin.com/in/preyan-technosys-pvt-ltd/" rel="noopener" aria-label="linkedin" data-tooltip="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text margin_right10 clearfix">
                                <h3 class="widget-title">Get Free Estimate</h3>
                                <div class="textwidget widget-text">
                                    <div class="call_detail">
                                        <h3 class="fs-24">123-456-78910</h3>
                                        <div class="padding_top10 padding_bottom10">
                                            <p>Our online scheduling and payment system is safe.</p>
                                        </div>
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white w-100 text-center" href="contact-us.html">Request Online Form</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_nav_menu clearfix">
                               <h3 class="widget-title">Textile Services</h3>
                               <ul id="menu-footer-quick-links" class="menu">
                                    <li><a href="fabric-printing.html">Patch Fabric Works</a></li>
                                    <li><a href="fabric-dyeing.html">Garment Stitching</a></li>
                                    <li><a href="engineering.html">Pattern, Art Making</a></li>
                                    <li><a href="manufacture.html">Stone Work Embroidery</a></li>
                                    <li><a href="we-design-fabric-2.html">Computerised Embroidery</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget-recent-post clearfix">
                               <h3 class="widget-title">Recent Posts</h3>
                                <ul class="widget-post ttm-recent-post-list">
                                    <li>
                                        <a href="blog-single.html"><img class="img-fluid" src="{{ asset('frontend/images/blog/b_thumbb-01.jpg')}}" alt="post-img"></a>
                                        <div class="post-detail">
                                            <a href="blog-single.html">Can textiles lead the way during the pandemic?</a>
                                            <span class="post-date">March 18, 2021</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="blog-single.html"><img class="img-fluid" src="{{ asset('frontend/images/blog/b_thumbb-02.jpg')}}" alt="post-img"></a>
                                        <div class="post-detail">
                                            <a href="blog-single.html">One stop solution for textiles fabrics</a>
                                            <span class="post-date">February 28, 2021</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget-latest-tweets clearfix">
                                <h3 class="widget-title">Contact Us</h3>
                                <ul class="widget_contact_wrapper">
                                    <li><i class="ttm-textcolor-skincolor fa fa-map-marker"></i>4789 Melmorn Street,Zakila Ton Mashintron Town</li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-phone"></i>(+01) 123 456 7890</li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-envelope-o"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 widget-area">
                            <div class="widget newsletter_widget clearfix">
                                <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                                    <div class="mailchimp-inputbox clearfix" id="subscribe-content"> 
                                        <input type="text" name="NAME" id="txtname" placeholder="Your Name *" required="">
                                        <input type="email" name="EMAIL" id="txtemail" placeholder="Your Email *" required="">
                                        <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Subscribe us<i class="fa fa-caret-right" aria-hidden="true"></i></button>
                                    </div>
                                    <div id="subscribe-msg"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <span class="cpy-text">Copyright © 2021 <a href="#" class="ttm-textcolor-skincolor font-weight-500">Textile </a> All rights reserved.</span>
                                <ul class="footer-nav-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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