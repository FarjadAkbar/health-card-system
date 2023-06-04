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
        <!-- slider start -->
        <div id="carouselExampleIndicators" class="carousel slide mr-1 ml-1" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="border-radius: 30px">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{URL::asset('assets/home/images/slides/slide1.jpg')}}"
                         alt="First slide" style="height: 200px;width: 500px">

                </div>
                @foreach(\App\Attachment::where('hospital_id',null)->get() as $a)
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('slider')}}/{{$a->url_slider}}"
                             alt="First slide" style="height: 200px;width: 500px">

                    </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- slider end -->
        <!-- preloader end -->

        <section>
            <div class="row row-equal-height mt-4 mr-1 ml-1">
                <div class="col-3" >
                  
                </div>

                <div class="col-6" >
                    <!-- featured-iconbox -->
                    <div class="featured-icon-box icon-align-top-content box-shadow style1" style="background-color: purple">

                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{URL::asset('assets/img/index1.png')}}" alt="case_01">
                        </div>
                        <div class="featured-content">
                            <a href="{{route('index-mobile')}}">
                                <div class="featured-title text-center">
                                    <h6 class="text-white" style="font-size: medium">{{trans('main_tran.Health Card')}}</h6>
                                </div>
                            </a>
                        </div>
                    </div><!-- featured-iconbox end-->
                </div>
                
                  <div class="col-3" >
                  
                </div>



            </div>
            <!-- row end -->
        </section>
        <br/>

    </div>
@endsection
@section('js')

@endsection
