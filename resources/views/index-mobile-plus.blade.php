@extends('layouts_master.master')
@section('css')
    <script>
        if (screen.width >= 700) {
            document.location = "/home";
        }
    </script>
    <style>
        .gdchat-fixed-bottom-right {
            position: fixed;
            bottom: 0px;
            right: 0px;
            z-index: 108000;
            margin: 0.6em;

        }
    </style>
@endsection
@section('content')
    <div class="gdchat-fixed-bottom-right " style="height: 60px;width: 60px;border-radius:30px ; background-color: green">
    <a class="tooltip-top btn-lg" id="btn-back-to-top" target="_blank" href="https://wa.link/j43ido" data-tooltip="whatsapp">

        <i
            style="color: white;padding-top: 7px" class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
    </a>
    </div>
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->
        <section>
            <div class="row">
                <div class="col-6">
                    <!--featured-imagebox-->
                    <div class="featured-imagebox ttm-box-view-top-image featured-imagebox-case" style="border: goldenrod 1px solid;border-radius: 30px;">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{URL::asset('assets/img/card.png')}}" alt="case_01">
                        </div>
                        <div class="featured-content">
                            <a href="{{route('apply.view.plus')}}">
                                <div class="featured-title text-center">
                                    <h5>{{trans('main_tran.Apply Card')}}
                                    </h5>
                                </div>
                            </a>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-6">
                    <!--featured-imagebox-->
                    <div class="featured-imagebox ttm-box-view-top-image featured-imagebox-case" style="border: goldenrod 1px solid;border-radius: 30px;">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{URL::asset('assets/img/search.png')}}" alt="case_02">
                        </div>
                        <div class="featured-content">
                            <a href="{{route('search.card')}}">
                                <div class="featured-title text-center">
                                    <h5>{{trans('main_tran.Search e-Card')}}</h5>
                                </div>
                            </a>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>

                <div class="col-6">
                    <!--featured-imagebox-->
                    <div class="featured-imagebox ttm-box-view-top-image featured-imagebox-case" style="border: goldenrod 1px solid;border-radius: 30px;">
                        <div class="featured-thumbnail">
                            <img class="img-fluid"  src="{{URL::asset('assets/img/hospital.png')}}" alt="case_02">
                        </div>
                        <div class="featured-content">
                            <a href="{{route('hospital.directory.plus')}}">
                                <div class="featured-title text-center">
                                    <h5>{{trans('main_tran.Partners')}}</h5>
                                </div>
                            </a>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>

                <div class="col-6">
                    <!--featured-imagebox-->
                    <div class="featured-imagebox ttm-box-view-top-image featured-imagebox-case" style="border: goldenrod 1px solid;border-radius: 30px;">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{URL::asset('assets/img/partner.png')}}" alt="case_02">
                        </div>
                        <div class="featured-content">
                            <a href="#">
                                <div class="featured-title text-center">
                                    <h5>{{trans('main_tran.Be A Partner')}}</h5>
                                </div>
                            </a>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>


            </div><!-- row end -->
        </section>
        
         <!--introduction-section-->
        <section class="ttm-row introduction-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="pt-50 res-991-pt-0">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>{{trans('main_tran.About Us')}}</h5>
                                    <h2 class="title">{{trans('main_tran.Setting')}}</h2>
                                </div>
                            </div><!-- section title end -->
                            <div class="mb-30 clearfix">
                                <p>{{trans('main_tran.aboutinfo')}}</p>
                            </div>
                            <h5>{{trans('main_tran.Features')}}</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Immediate')}}</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Unlimited')}}</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Covered')}}</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Resanable')}}</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Covered2')}}</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Network')}}</span></li>
                                    </ul>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mt-25 res-991-mt-0 res-991-mb-40">
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mr-15 mt-15" href="{{route('services.home')}}">VIEW MORE</a>
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor mt-15" href="{{route('contact-us')}}">CONTACT US!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper text-right">
                            <img class="img-fluid" src="{{URL::asset('assets/home/images/index1.png')}}" alt="">
                        </div>
                        <div class="about-overlay-shape">
                            <div class="row">
                                <div class="col-lg-2 col-sm-3"></div>
                                <div class="col-lg-10 col-sm-6">

                                <div class="col-sm-3"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--introduction-section end-->

        
        <br/>

    </div>
@endsection
@section('js')

@endsection
