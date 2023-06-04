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
                    <!-- featured-icon-box -->
                    <a href="{{route('apply.view')}}">
                        <div class="featured-icon-box top-icon style8 text-center active">
                            <div class="featured-icon-box-inner">
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>{{trans('main_tran.Apply Card')}}</h5>
                                    </div>
                                    <div class="featured-icon">
                                        <div class="ttm-icon-dots"></div>
                                        <div
                                            class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-white  ttm-icon_element-size-lg ttm-icon_element-style-rounded">
                                            <i class="ttm-textcolor-skincolor flaticon-care"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{route('search.card')}}">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box top-icon style8 text-center ">
                            <div class="featured-icon-box-inner">
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>{{trans('main_tran.Search e-Card')}}</h5>
                                    </div>
                                    <div class="featured-icon">
                                        <div class="ttm-icon-dots"></div>
                                        <div
                                            class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-white  ttm-icon_element-size-lg ttm-icon_element-style-rounded">
                                            <i class="ttm-textcolor-skincolor ti ti-credit-card"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{route('hospital.directory')}}">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box top-icon style8 text-center">
                            <div class="featured-icon-box-inner">
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>{{trans('main_tran.Hospital Directory')}}</h5>
                                    </div>
                                    <div class="featured-icon">
                                        <div class="ttm-icon-dots"></div>
                                        <div
                                            class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-white  ttm-icon_element-size-lg ttm-icon_element-style-rounded">
                                            <i class="ttm-textcolor-skincolor flaticon-hospital"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{route('be_partner_apply')}}">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box top-icon style8 text-center">
                            <div class="featured-icon-box-inner">
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>{{trans('main_tran.Be A Partner')}}</h5>
                                    </div>
                                    <div class="featured-icon">
                                        <div class="ttm-icon-dots"></div>
                                        <div
                                            class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-white  ttm-icon_element-size-lg ttm-icon_element-style-rounded">
                                            <i class="ttm-textcolor-skincolor flaticon-charity"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </a>
                </div>
            </div><!-- row end -->
        </section>
        <br/>

    </div>
@endsection
@section('js')

@endsection
