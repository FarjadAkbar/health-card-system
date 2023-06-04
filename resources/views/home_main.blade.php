@extends('layouts_master.master')
@section('css')
    <script>
        if (screen.width <= 700) {
            document.location = "home_mobile";
        }
    </script>
@endsection
@section('content')
<!--page start-->
<div class="page">

    <!-- preloader start -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- preloader end -->



    <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery">

        <!-- START REVOLUTION SLIDER 5.4.8 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.4.8.1">
            <ul>

                @foreach($sliders as $key => $slider)
                <li data-index="rs-{{$key}}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/slides/slider-mainbg-002.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <img src="{{URL::asset('slider')}}/{{$slider->url_slider}}" style="width: 500px;height: 2000px;" alt="" title="mainslider-bg002"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                    <div class="tp-caption" id="slide-{{$key}}-layer-11" data-x="['right','right','right','center']" data-hoffset="['50','40','30','334']" data-y="['middle','middle','middle','top']" data-voffset="['-149','-134','-136','48']"
                         data-fontsize="['65','65','50','55']"
                         data-lineheight="['60','60','50','55']"
                         data-fontweight="['400','400','400','400']"
                         data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(0,214,163)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-visibility="['on','on','on','off']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":170,"speed":500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"><i class="fa fa-hospital-o"></i> </div>

                    <div class="tp-caption slide-main-text" id="slide-{{$key}}-layer-3" data-x="['right','right','right','center']" data-hoffset="['120','110','80','0']" data-y="['top','top','top','top']" data-voffset="['191','181','61','65']"
                         data-fontsize="['75','75','60','45']"
                         data-lineheight="['80','80','60','40']"
                         data-fontweight="['600','600','600','600']"
                         data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":230,"speed":600,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">We Make </div>

                    <div class="tp-caption slide-main-text tp-resizeme" id="slide-{{$key}}-layer-4" data-x="['right','right','right','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','top']" data-voffset="['265','254','121','109']"
                         data-fontsize="['75','75','60','45']"
                         data-lineheight="['80','80','60','45']"
                         data-fontweight="['600','600','600','600']"
                         data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":400,"speed":800,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">Quality <strong class="">Healthcare</strong> </div>




                    <a class="tp-caption shape-round tp-resizeme ttm_prettyphoto" style="background-color: #761193" href="##" target="_self" id="slide-{{$key}}-layer-15" data-x="['left','left','left','left']" data-hoffset="['55','45','35','-436']" data-y="['middle','middle','middle','middle']" data-voffset="['215','240','130','107']"
                       data-width="['54','54','54','60']"
                       data-height="['54','54','54','60']"
                       data-fontsize="['20','20','20','20']"
                       data-lineheight="['54','54','54','54']"
                       data-fontweight="['400','400','400','400']"
                       data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                       data-whitespace="nowrap"
                       data-visibility="['on','on','on','off']"
                       data-type="text"
                       data-actions=''
                       data-responsive_offset="on"
                       data-frames='[{"delay":1080,"speed":500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[0,0,0,0]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[0,0,0,0]"><i class="fa fa-play"></i></a>

                    <div class="tp-caption icon-text tp-resizeme" id="slide-{{$key}}-layer-8" data-x="['left','left','left','left']" data-hoffset="['131','118','107','-303']" data-y="['middle','middle','middle','middle']" data-voffset="['203','227','117','96']"
                         data-fontsize="['19','19','18','20']"
                         data-lineheight="['21','21','21','20']"
                         data-fontweight="['400','400','400','400']"
                         data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-visibility="['on','on','on','off']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1180,"speed":500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">{{trans('main_tran.Play Video')}}</div>





                    <a class="tp-caption skin-flat-button tp-resizeme" style="background-color:white;color:  #761193;" href="#" target="_self" id="slide-{{$key}}-layer-6" data-x="['center','center','center','center']" data-hoffset="['449','361','256','0']" data-y="['top','top','top','top']" data-voffset="['432','425','226','235']"
                       data-fontsize="['13','13','13','12']"
                       data-lineheight="['18','18','16','12']"
                       data-fontweight="['600','600','600','600']"
                       data-letterspacing="['1','1','0','0']"
                       data-width="none"
                       data-height="none"
                       data-whitespace="nowrap"
                       data-type="text"
                       data-actions=''
                       data-responsive_offset="on"
                       data-frames='[{"delay":1270,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                       data-textAlign="['inherit','inherit','inherit','inherit']"
                       data-paddingtop="[17,17,17,15]"
                       data-paddingright="[30,30,23,20]"
                       data-paddingbottom="[17,17,17,15]"
                       data-paddingleft="[30,30,23,20]">Coming Soon</a>

                    <a class="tp-caption  tp-resizeme" style="background-color:white;color:  #761193;" href="health-card" target="_self" id="slide-{{$key}}-layer-13" data-x="['center','center','center','center']" data-hoffset="['195','125','36','0']" data-y="['top','top','top','top']" data-voffset="['432','425','225','180']"
                       data-fontsize="['13','13','13','12']"
                       data-lineheight="['16','16','16','12']"
                       data-fontweight="['600','600','600','600']"
                       data-letterspacing="['1','1','0','0']"
                       data-width="none"
                       data-height="none"
                       data-whitespace="nowrap"
                       data-type="text"
                       data-actions=''
                       data-responsive_offset="on"
                       data-frames='[{"delay":1330,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                       data-textAlign="['inherit','inherit','inherit','inherit']"
                       data-paddingtop="[17,17,17,15]"
                       data-paddingright="[30,30,23,20]"
                       data-paddingbottom="[17,17,17,15]"
                       data-paddingleft="[30,30,23,20]">{{trans('main_tran.Health Card')}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->

    <!--site-main start-->
    <div class="site-main">

        <!--row-top-section-->
        <section class="ttm-row row-top-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt_45 res-991-mt-50 ttm-bgcolor-white">
                            <div class="row no-gutters">
                                <div class="col-lg">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box top-icon style4 text-center">
                                        <div class="featured-icon-box-inner">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="fa fa-id-card"></i>                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>{{trans('main_tran.Health Card')}}</h5>
                                                </div>
                                                <div class="ttm-di_links">
                                                    <a href="{{route('health.page')}}" class="di_link">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box top-icon style4 text-center">
                                        <div class="featured-icon-box-inner">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon-eye"></i>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Coming Soon</h5>
                                                </div>

                                                <div class="ttm-di_links">
                                                    <a href="#" class="di_link">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
        </section>
        <!-- row-top-section end -->

        <!--team-section-->
        <section class="ttm-row team-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-10 col-md-10">
                        <!-- section-title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h2 class="title">{{trans('main_tran.Hospital')}}</h2>
                            </div>

                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-2 col-md-2"></div>
                </div><!-- row end -->
                <!-- row -->
                <div class="row">
                    <div class="wrap-team team-slide owl-carousel" data-item="4" data-nav="true" data-dots="false" data-auto="false">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                            <div class="featured-thumbnail text-center">
                                <img class="img-fluid" style="height: 100px;" src="{{URL::asset('assets/home/images/hos1.jpg')}}" alt="image">
                            </div>

                            <div class="featured-content featured-content-team">
                                <!--<div class="featured-title">-->
                                <!--    <h5><a href="#">{{trans('main_tran.Bahrain')}}</a></h5>-->
                                <!--</div>-->
                            </div>
                        </div><!-- featured-imagebox-team end-->

                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                            <div class="featured-thumbnail text-center">
                                <img class="img-fluid" style="height: 100px;" src="{{URL::asset('assets/home/images/hos2.jpg')}}" alt="image">
                            </div>

                            <div class="featured-content featured-content-team">
                                <!--<div class="featured-title">-->
                                <!--    <h5><a href="#">{{trans('main_tran.Bahrain')}}</a></h5>-->
                                <!--</div>-->
                            </div>
                        </div><!-- featured-imagebox-team end-->

                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                            <div class="featured-thumbnail text-center">
                                <img class="img-fluid" style="height: 100px;" src="{{URL::asset('assets/home/images/hos3.jpg')}}" alt="image">
                            </div>

                            <div class="featured-content featured-content-team">
                                <!--<div class="featured-title">-->
                                <!--    <h5><a href="#">{{trans('main_tran.Bahrain')}}</a></h5>-->
                                <!--</div>-->
                            </div>
                        </div><!-- featured-imagebox-team end-->

                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                            <div class="featured-thumbnail text-center">
                                <img class="img-fluid" style="height: 100px;" src="{{URL::asset('assets/home/images/hos1.jpg')}}" alt="image">
                            </div>

                            <div class="featured-content featured-content-team">
                                <!--<div class="featured-title">-->
                                <!--    <h5><a href="#">{{trans('main_tran.Bahrain')}}</a></h5>-->
                                <!--</div>-->
                            </div>
                        </div><!-- featured-imagebox-team end-->

                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--team-section end-->

        <!--cta-section-->

    </div><!--site-main end-->

</div><!-- page end -->
@endsection

<!-- Javascript -->

@section('js')
@endsection

