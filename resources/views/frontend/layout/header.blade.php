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
                                            {{-- <ul class="mega-submenu">
                                                <li><a href="project-style-01.html">Project One</a></li>
                                                <li><a href="project-style-02.html">Project Two</a></li>
                                                <li><a href="linen-fabric.html">Project Single</a></li>
                                            </ul> --}}
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
                                    <a href="contact-us.html" class="ttm-btn ttm-btn-size-sm ttm-btn-style-fill ttm-btn-shape-square ttm-btn-color-dark">Get Quote</a>
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
</header>