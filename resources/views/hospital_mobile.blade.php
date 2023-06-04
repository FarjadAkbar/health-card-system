@extends('layouts_master.master')
@section('css')
    <script>
        if (screen.width >= 700) {
            document.location = "directory";
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

    <!-- page-title -->
        <div class="container" style="">
            <div class="row mt-3">
                <div class="col-6 mb-3">
                    <a href="{{route('search.card')}}">
                        <button class="btn mr-2" style="background-color:purple ; color: white;border-radius: 20px;width:150px; ">{{trans('main_tran.Search e-Card')}}</button>
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{route('apply.view')}}">

                        <button class="btn" href="{{route('hospital.directory')}}" style="background-color:#0000FF; color: white;border-radius: 20px; width:150px;">{{trans('main_tran.Apply Card')}}</button>
                    </a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->

    <!--site-main start-->
    <div class="site-main">

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-left ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">

                    <div class="col-lg-8 content-area" style="background-color: whitesmoke">
                        <!-- ttm-service-single-content-are -->
                        <div class="ttm-service-single-content-area">
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="ttm-service-description">
                                        <h4>Searching By Name or Location </h4>
                                        <form class="form-group" method="post" action="{{route('hospital.directory.search.mobile')}}" autocomplete="off">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-10 col-8">
                                                    <input type="text" style="border:solid 2px #761193;border-radius: 20px; height: 40px " class="form-control typeahead" name="search" placeholder="Search"  value="{{$hospital ?? ''}}" id="hospital">
                                                </div>
                                                <div class="col-lg-2 col-4">
                                                    <button type="submit" class="form-control btn text-white"  placeholder="Search" style="border-radius: 20px;background-color:#761193 "><i class="fa fa-search"></i> Search</button>
                                                </div>
                                            </div>
                                        </form>
                                        @if(!isset($hospital_search))
                                            @foreach($hospital2 as $h)
                                                <div class="ttm-box-col-wrapper col-lg-12 col-md-6 col-sm-12">
                                                    <!-- featured-imagebox-post -->
                                                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow row">
                                                        <div class="col-lg-5 col-3 ttm-featured-img-left">
                                                            <div class="ttm-post-featured-outer">
                                                                <div class="ttm-post-thumbnail featured-thumbnail">
                                                                    <a href="{{route('hospital.directory.profile',$h->id)}}">
                                                                        <img class="img-fluid" src="{{URL::asset('Attachments')}}/{{$h->id ?? ''}}/{{$h->Attachment->url_logo ?? ''}}" alt="logo-hospital" style="width:300px; height:170px">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-9 featured-content featured-content-post">
                                                            @if(App::getLocale()== 'en')
                                                                <div class="post-title featured-title text-dark tx-bold">
                                                                    <b>  <h4 class=""><a href="{{route('hospital.directory.profile',$h->id)}}">{{$h->name}}</a></h4></b>
                                                                </div>
                                                            @else
                                                                <div class="post-title featured-title text-dark tx-bold">
                                                                    <a href="{{route('hospital.directory.profile',$h->id)}}">
                                                                        <b> <h4 class=""><a href="{{route('hospital.directory.profile',$h->id)}}">{{$h->name_ar}}</a></h4></b>
                                                                    </a>
                                                                </div>
                                                            @endif

                                                            <div class="post-meta">
                                                                @if(App::getLocale()== 'en')

                                                                    <span class="ttm-meta-line comments-link text-dark tx-bold"><b style="font-size: 13px"><i class="fa fa-location-arrow fa-lg"></i>  {{$h->place}}</b></span>
                                                                @else
                                                                    <span class="ttm-meta-line comments-link text-dark tx-bold"><b style="font-size: 13px"><i class="fa fa-location-arrow fa-lg"></i>{{$h->place_ar}}</b></span>
                                                                @endif
                                                                <a href="tel:{{$h->contact1}}">
                                                                <span class="ttm-meta-line comments-link text-dark tx-bold"><b style="font-size: 13px"><i class="fa fa-phone fa-lg"></i>  {{$h->contact1}}</b></span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div><!-- featured-imagebox-post end-->
                                                </div>
                                            @endforeach

                                            <div class="col-lg-5 float-right justify-content-lg-end">
                                            </div>
                                            <div class="col-lg-5 float-right justify-content-lg-end">
                                            </div>
                                            <div class="col-lg-2 float-right justify-content-lg-end">
                                                {{$hospital2->links()}}

                                            </div>
                                        @else
                                            @foreach($hospital_search as $h)

                                                    <div class="ttm-box-col-wrapper col-lg-12 col-md-6 col-sm-12">
                                                        <!-- featured-imagebox-post -->
                                                        <div class="featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow row">
                                                            <div class="col-lg-5 col-3 ttm-featured-img-left">
                                                                <div class="ttm-post-featured-outer">
                                                                    <div class="ttm-post-thumbnail featured-thumbnail">
                                                                        <a href="{{route('hospital.directory.profile',$h->id)}}">
                                                                            <img class="img-fluid" src="{{URL::asset('Attachments')}}/{{$h->id ?? ''}}/{{$h->Attachment->url_logo ?? ''}}" alt="logo-hospital" style="width:300px; height:170px">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7 col-9 featured-content featured-content-post">
                                                                @if(App::getLocale()== 'en')
                                                                    <div class="post-title featured-title text-dark tx-bold">
                                                                        <b>  <h4 class=""><a href="{{route('hospital.directory.profile',$h->id)}}">{{$h->name}}</a></h4></b>
                                                                    </div>
                                                                @else
                                                                    <div class="post-title featured-title text-dark tx-bold">
                                                                        <a href="{{route('hospital.directory.profile',$h->id)}}">
                                                                            <b> <h4 class=""><a href="{{route('hospital.directory.profile',$h->id)}}">{{$h->name_ar}}</a></h4></b>
                                                                        </a>
                                                                    </div>
                                                                @endif

                                                                <div class="post-meta">
                                                                    @if(App::getLocale()== 'en')

                                                                        <span class="ttm-meta-line comments-link text-dark tx-bold"><b style="font-size: 13px"><i class="fa fa-location-arrow fa-lg"></i>  {{$h->place}}</b></span>
                                                                    @else
                                                                        <span class="ttm-meta-line comments-link text-dark tx-bold"><b style="font-size: 13px"><i class="fa fa-location-arrow fa-lg"></i>{{$h->place_ar}}</b></span>
                                                                    @endif
                                                                   <a href="tel:{{$h->contact1}}">
                                                                <span class="ttm-meta-line comments-link text-dark tx-bold"><b style="font-size: 13px"><i class="fa fa-phone fa-lg"></i>  {{$h->contact1}}</b></span>
                                                                </a>
                                                                </div>

                                                            </div>
                                                        </div><!-- featured-imagebox-post end-->
                                                    </div>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- ttm-service-single-content-are end -->
                    </div>
                    <div class="col-lg-4 widget-area sidebar-left ml-15 ">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-nav-menu">
                            <ul class="widget-menu box-shadow">
                                <li ><a
                                        href="{{route('apply.view')}}">{{trans('main_tran.Apply Card')}}</a></li>
                                <li class="active"><a href="{{route('hospital.directory')}}">{{trans('main_tran.Medical Directory')}}</a></li>
                                <li><a href="{{route('search.card')}}">{{trans('main_tran.Search e-Card')}}</a></li>

                            </ul>
                        </aside>


                        <aside class="widget tagcloud-widget">
                            <h3 class="ml-1">Tags</h3>
                            <div class="tagcloud">
                                @foreach(\App\Category::all() as $c)
                                <a href="{{route('hospital.category.show',$c->id)}}" class="tag-cloud-link">{{$c->category}}</a>
                                @endforeach

                            </div>
                        </aside>
                    </div>

                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->


    </div><!--site-main end-->


@endsection

<!-- Javascript -->

@section('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" ></script>
    <script>

        var path = "{{ url('typeahead_autocomplete/action') }}";

        $('#hospital').typeahead({

            source: function(query, process){

                return $.get(path, {query:query}, function(data){

                    return process(data);

                });

            }

        });

    </script>
@endsection

