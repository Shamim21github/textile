
@extends('Frontend.layout.app')

@section('content')
        
        <!-- page-title -->
        <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="ttm-page-title-row-inner">
                            <div class="page-title-heading">
                                <h2 class="title">About Us</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{route('home')}}">Home</a>
                                </span>
                                <span>About Us </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <br> <br>
        <!-- page-title end -->

        
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
                            <p>Indian weavers of designer of furnishing fabrics is a textile manufacturer founded in 2011 and renowned for new and stylish interpretations of natural & organic fabrics.  All of our fabrics are designed and woven at our own weaving mill.</p>
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
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor margin_right20 margin_top15" href="#">view more</a>
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark  margin_top15" href="{{ route('contact') }}">contact us</a>
                    </div>
                </div>
            </div>
        </div><!-- row end -->  <br> <br>

</section>

@endsection