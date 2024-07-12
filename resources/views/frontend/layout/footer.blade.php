<footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
    <div class="first-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 widget-area">
                    <div class="widget widget_text clearfix">
                        <div class="d-sm-flex align-items-center">
                            <div class="footer-logo">
                                <img id="footer-logo-img" class="img-fluid auto_size" height="46" width="170" src="{{ asset('frontend/images/textileLogo1.png') }}" alt="image">
                            </div>
                            <div class="textwidget widget-text">
                                {{-- <p>Textile is operating in the textile market, as the manufacture and trader. As years go by the range of produced textiles products has increased.</p> --}}
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
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 widget-area">
                    <div class="widget widget_text margin_right10 clearfix">
                        <h3 class="widget-title">Get Free Estimate</h3>
                        <div class="textwidget widget-text">
                            <div class="call_detail">
                                <h3 class="fs-24">+88 01987 654321</h3>
                                <div class="padding_top10 padding_bottom10">
                                    <p>Our online scheduling and payment system is safe.</p>
                                </div>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white w-100 text-center" href="{{ route ('contact') }}">Request Online Form</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 widget-area">
                    <div class="widget widget_nav_menu clearfix">
                       <h3 class="widget-title">Textile Services</h3>
                       <ul id="menu-footer-quick-links" class="menu">
                        <li><a href="{{ route('fabricPrinting') }}">Fabric Printing</a></li>
                        <li><a href="{{ route('fabricDyeing') }}">Fabric Dyeing</a></li>
                        <li><a href="{{ route('engineering') }}">Engineering</a></li>
                        <li><a href="{{ route('manufacture') }}">Manufacture</a></li>
                        <li><a href="{{ route('designFabric') }}">We Design Fabric</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 widget-area">
                    <div class="widget widget-latest-tweets clearfix">
                        <h3 class="widget-title">Contact Us</h3>
                        <ul class="widget_contact_wrapper">
                            <li><i class="ttm-textcolor-skincolor fa fa-map-marker"></i> House: 53/B, Block-C , Tongi I/A, Tongi. Monnunagar.. P.C. 1710, Tongi, Gazipur.</li>
                            <li><i class="ttm-textcolor-skincolor fa fa-phone"></i>+88 01987 654321</li>
                            <li><i class="ttm-textcolor-skincolor fa fa-envelope-o"></i><a href="#">abctextile@gmail.com</a></li>
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
                        <span class="cpy-text">Copyright © 2024 <a href="#" class="ttm-textcolor-skincolor font-weight-500">@ShamimApon </a> All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>