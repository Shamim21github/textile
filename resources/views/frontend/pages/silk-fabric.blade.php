@extends('frontend.layout.app')

@section('content')

<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">Silk Fabric</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ route('home') }}">Home</a>
                        </span>
                        <span>Silk Fabric</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->


<!--site-main start-->
<div class="site-main">
    <section class="ttm-row project-single-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ttm-pf-single-content-wrapper ttm-pf-view-left-image">
                        <div class="ttm-pf-single-content-wrapper-innerbox">
                            <div class="ttm-pf-detail-box">
                                <div class="row">
                                    <div class="col-md-12 col-lg-8">
                                        <!-- ttm_pf_image-wrapper -->
                                        <div class="ttm_pf_image-wrapper">
                                            <img class="img-fluid" src="{{asset('frontend/images/portfolio/portfolio-01-1200x800.jpg')}}" alt="portfolio-img">
                                        </div><!-- ttm_pf_image-wrapper end -->
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="ttm-pf-single-detail-box">
                                            <div class="ttm-pf-single-title ttm-bgcolor-skincolor">
                                                <h3>Project Information</h3>
                                            </div>
                                            <div class="ttm-short-desc">Varius sit amet mattis vulputate enim nulla. Viverra maecenas accumsan facilisis.</div>
                                            <ul class="ttm-pf-detailbox-list">
                                               <li><span>Project: </span><span>Silk Fabric </span></li>
                                               <li><span>Category: </span><span>Silks, Linen</span></li>
                                               <li><span>Clients: </span><span>Alex Sam Martin</span></li>
                                               <li><span>Date: </span><span>March 3, 2021</span></li>
                                               <li><span>Status: </span><span>Completed</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-pf-single-content-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="margin_top40">
                                            <h2>Working Together For Your Better Life</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="ttm_single_image-wrapper text-left padding_top15">
                                            <img class="img-fluid" src="{{ asset ('frontend/images/single-img-10.jpg') }}" alt="single-img-10">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="ttm_single_image-wrapper text-left padding_top15">
                                            <img class="img-fluid" src="{{ asset ('frontend/images/single-img-11.jpg') }}" alt="single-img-11">
                                        </div>
                                    </div>
                                </div>
                                <div class="margin_top40">
                                    <h2>Results Our Client's Report</h2>
                                    <p>Wecusandae debitis facere quidem animi placeat maxime cuuntur at voluptatiWecusandae debitis facere quidem animi placeat maxime cuuntur at voluptatib uod numuam pariatur libero laborum laudantium non. Vitae optio nisi ut aliquip ex ea commodo ornare aenean euismod.Wecusandae debitis facere quidem animi placeat maxime cuuntur at voluptatiWecusandae debitis facere quidem animi pla</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="featuredbox-number">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <!--featured-icon-box-->
                                                    <div class="featured-icon-box icon-align-top-content style8">
                                                        <div class="featured-icon">
                                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-size-lg ttm-icon_element-color-skincolor ttm-icon_element-style-square">
                                                                <i class="flaticon-fabric"></i>
                                                                <span class="fea_num ttm-textcolor-darkgrey ttm-bgcolor-darkgrey">
                                                                    <i class="ttm-num ti-info"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h3>Fabric Treatment</h3>
                                                            </div>
                                                            <div class="featured-desc">
                                                                <p>We do execute stabilization including reweaving & stitch repair.</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-icon-box end-->
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <!--featured-icon-box-->
                                                    <div class="featured-icon-box icon-align-top-content style8">
                                                        <div class="featured-icon">
                                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-size-lg ttm-icon_element-color-skincolor ttm-icon_element-style-square">
                                                                <i class="flaticon-textiles"></i>
                                                                <span class="fea_num ttm-textcolor-darkgrey ttm-bgcolor-darkgrey">
                                                                    <i class="ttm-num ti-info"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h3>Artistic Direction</h3>
                                                            </div>
                                                            <div class="featured-desc">
                                                                <p>Assist collection strategies, storage, application and pest production</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-icon-box end-->
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <!--featured-icon-box-->
                                                    <div class="featured-icon-box icon-align-top-content style8">
                                                        <div class="featured-icon">
                                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-size-lg ttm-icon_element-color-skincolor ttm-icon_element-style-square">
                                                                <i class="flaticon-moisture-wicking-fabric"></i>
                                                                <span class="fea_num ttm-textcolor-darkgrey ttm-bgcolor-darkgrey">
                                                                    <i class="ttm-num ti-info"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h3>Satin Weaving</h3>
                                                            </div>
                                                            <div class="featured-desc">
                                                                <p>Continuous weft yarn, with as few interruptions of warp as it possible.</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-icon-box end-->
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <!--featured-icon-box-->
                                                    <div class="featured-icon-box icon-align-top-content style8">
                                                        <div class="featured-icon">
                                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-size-lg ttm-icon_element-color-skincolor ttm-icon_element-style-square">
                                                                <i class="flaticon-iron"></i>
                                                                <span class="fea_num ttm-textcolor-darkgrey ttm-bgcolor-darkgrey">
                                                                    <i class="ttm-num ti-info"></i>
                                                                </span>
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
                                <div class="ttm-horizontal_sep width-100 margin_top30 margin_bottom30"></div>
                                <div class="d-flex justify-content-between">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark" href="linen-fabric.html">Previous</a>
                                </div>
                            </div>
                            <div class="row ttm-pf-single-related-wrapper margin_top50 mb_15">
                                <div class="col-12">
                                    <h2>Related Projects</h2>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                                        <!-- ttm-box-view-overlay -->
                                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                            <!-- featured-thumbnail -->
                                            <div class="featured-thumbnail">
                                                <a href="#"> <img class="img-fluid" src="images/portfolio/portfolio-06-768x512.jpg" alt="image"></a>
                                            </div><!-- featured-thumbnail end -->
                                            <div class="ttm-media-link">
                                                <a class="ttm_prettyphoto ttm_image" title="Linen Fabric" data-rel="prettyPhoto" href="{{asset ('frontend/images/portfolio/portfolio-06-1200x800.jpg') }}">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <a href="linen-fabric.html" class="ttm_link"><i class="fa fa-random"></i></a>
                                            </div>
                                        </div><!-- ttm-box-view-overlay end-->
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3><a href="{{ route('linenFabric') }}">Linen Fabric</a></h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Varius sit amet mattis vulputate enim nulla. Viverra maecenas accumsan facilisis.</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                                        <!-- ttm-box-view-overlay -->
                                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                            <!-- featured-thumbnail -->
                                            <div class="featured-thumbnail">
                                                <a href="#"> <img class="img-fluid" src="{{ asset ('frontend/images/portfolio/portfolio-04-768x512.jpg') }}" alt="image"></a>
                                            </div><!-- featured-thumbnail end-->
                                            <div class="ttm-media-link">
                                                <a class="ttm_prettyphoto ttm_image" title="Georgette Fabric" data-rel="prettyPhoto" href="{{ asset ('frontend/images/portfolio/portfolio-04-1200x800.jpg') }}">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <a href="{{ route('geographicFabric') }}" class="ttm_link"><i class="fa fa-random"></i></a>
                                            </div>
                                        </div><!-- ttm-box-view-overlay end-->
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3><a href="{{ route('geographicFabric') }}">Georgette Fabric</a></h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Varius sit amet mattis vulputate enim nulla. Viverra maecenas accumsan lacus vel facilisis.</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                                        <!-- ttm-box-view-overlay -->
                                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                            <!-- featured-thumbnail -->
                                            <div class="featured-thumbnail">
                                                <a href="#"> <img class="img-fluid" src="images/portfolio/portfolio-03-768x512.jpg" alt="image"></a>
                                            </div><!-- featured-thumbnail end-->
                                            <div class="ttm-media-link">
                                                <a class="ttm_prettyphoto ttm_image" title="Leather Material" data-rel="prettyPhoto" href="{{ asset('frontend/images/portfolio/portfolio-03-1200x800.jpg')}}">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <a href="{{ route('leatherMaterial') }}" class="ttm_link"><i class="fa fa-random"></i></a>
                                            </div>
                                        </div><!-- ttm-box-view-overlay end-->
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3><a href="{{ route('leatherMaterial') }}">Leather Material</a></h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Augue eget arcu dictum varius duis at consectetur. A diam sollicitudin tempor id eu nisl nunc mi ipsum.</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div><!-- row end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div><!--site-main end-->
    
@endsection