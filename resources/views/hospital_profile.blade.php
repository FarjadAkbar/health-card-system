@extends('layouts_master.master')
@section('css')

@endsection
@section('content')

 <!-- slider start -->
        <div id="carouselExampleIndicators" class="carousel slide mr-1 ml-1" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="border-radius: 30px">
                <!-- <div class="carousel-item active">
                    <img class="d-block mx-auto" src="{{URL::asset('Attachments')}}/{{$hospital->id ?? ''}}/{{$hospital->Attachment->url_logo ??'' }}"
                         alt="First slide" style="height: 200px;">

                </div> -->
@foreach(\App\Attachment::where('hospital_id',$hospital->id)->get() as $key => $a)    
@if($a->slider != '')                
<div class="carousel-item {{ $key == 1 ? 'active' : ''}}">
                        <img class="d-block  mx-auto" src="{{URL::asset('Attachments')}}/{{$hospital->id}}/{{$a->url_logo}}"
                             alt="slide" style="height: 200px;">

                    </div>
                    @endif
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




    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row pb-50 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- ttm-pf-single-content-wrapper-innerbox -->
                        <div class="ttm-pf-single-content-wrapper-innerbox ttm-pf-view-left-image">
                            <div class="ttm-pf-detail-box">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="ttm-featured-wrapper ttm-portfolio-featured-wrapper">
                                            <div class="ttm-pf-single-content-area">
                                                <div class="ttm-portfolio-description">

                                                    <!-- row -->
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <h4>About<b> {{$hospital->name}}</b> Discount :</h4>
                                                            <table class="table table-hover  table-striped">
                                                                <thead style="background-color: #761193" class="text-white">
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">SERVICES</th>
                                                                    <th scope="col">DISCOUNT</th>
                                                                    <th scope="col">PRICES</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php $i = 0; ?>
                                                                @if(App::getLocale()== 'en')


                                                                    @foreach($service as $h)
                                                                        <tr>

                                                                            <?php $i++?>
                                                                            <th scope="row">{{$i}}</th>
                                                                            <td>{{$h->name}}</td>
                                                                            <td>{{$h->discount}}</td>
                                                                            <td>{{$h->price}} </td>
                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                    @foreach($service as $h)
                                                                        <tr>

                                                                            <?php $i++?>
                                                                            <th scope="row">{{$i}}</th>
                                                                            <td>{{$h->name_ar}}</td>
                                                                            <td>{{$h->discount}}</td>
                                                                            <td>{{$h->price}} </td>
                                                                        </tr>
                                                                    @endforeach
                                                                @endif

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div><!-- row end-->
                                                    <br/>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="ttm-pf-single-detail-box res-991-mt-30">
                                            <div class="ttm-pf-detailbox">

                                                <ul class="ttm-pf-detailbox-list">
                                                    <li class="ttm-pf-details-date">
                                                        <b>
                                                        <span class="ttm-pf-left-details"><i class="fa fa-medkit"></i><b>Name</b> </span>
                                                        </b>
                                                        <span class="ttm-pf-right-details"style="color: black">{{$hospital->name}}</span>
                                                    </li>
                                                    <li class="ttm-pf-details-date">
                                                        <span class="ttm-pf-left-details"><i class="fa fa-phone"></i><b> Contact 1 </b></span>
                                                        <span class="ttm-pf-right-details"style="color: black">{{$hospital->contact1}}</span>
                                                    </li>
                                                    <li class="ttm-pf-details-date">
                                                        <span class="ttm-pf-left-details"><i class="fa fa-phone"></i><b>Contact 2 </b></span>
                                                        <span class="ttm-pf-right-details" style="color: black">{{$hospital->contact2}}</span>
                                                    </li>
                                                    <li class="ttm-pf-details-date">
                                                        <span class="ttm-pf-left-details"><i class="fa fa-map-marker"></i><b>Place</b> </span>
                                                        <span class="ttm-pf-right-details" style="color: black">{{$hospital->place}}</span>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="ttm-nextprev-bottom-nav">
                                    <nav class="navigation post-navigation">
                                        <div class="nav-links">
                                            <div class="nav-previous"><a href="{{route('hospital.directory')}}" rel="prev"><span class="meta-nav" aria-hidden="true">Previous</span></a></div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div><!-- ttm-pf-single-content-wrapper-innerbox end-->
                    </div>
                </div>
            </div>
        </section>


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
    <script>
        $('#myCarousel').carousel({
            interval: false
        });
        $('#carousel-thumbs').carousel({
            interval: false
        });

        // handles the carousel thumbnails
        // https://stackoverflow.com/questions/25752187/bootstrap-carousel-with-thumbnails-multiple-carousel
        $('[id^=carousel-selector-]').click(function() {
            var id_selector = $(this).attr('id');
            var id = parseInt( id_selector.substr(id_selector.lastIndexOf('-') + 1) );
            $('#myCarousel').carousel(id);
        });
        // Only display 3 items in nav on mobile.
        if ($(window).width() < 575) {
            $('#carousel-thumbs .row div:nth-child(4)').each(function() {
                var rowBoundary = $(this);
                $('<div class="row mx-0">').insertAfter(rowBoundary.parent()).append(rowBoundary.nextAll().addBack());
            });
            $('#carousel-thumbs .carousel-item .row:nth-child(even)').each(function() {
                var boundary = $(this);
                $('<div class="carousel-item">').insertAfter(boundary.parent()).append(boundary.nextAll().addBack());
            });
        }
        // Hide slide arrows if too few items.
        if ($('#carousel-thumbs .carousel-item').length < 2) {
            $('#carousel-thumbs [class^=carousel-control-]').remove();
            $('.machine-carousel-container #carousel-thumbs').css('padding','0 5px');
        }
        // when the carousel slides, auto update
        $('#myCarousel').on('slide.bs.carousel', function(e) {
            var id = parseInt( $(e.relatedTarget).attr('data-slide-number') );
            $('[id^=carousel-selector-]').removeClass('selected');
            $('[id=carousel-selector-'+id+']').addClass('selected');
        });
        // when user swipes, go next or previous
        $('#myCarousel').swipe({
            fallbackToMouseEvents: true,
            swipeLeft: function(e) {
                $('#myCarousel').carousel('next');
            },
            swipeRight: function(e) {
                $('#myCarousel').carousel('prev');
            },
            allowPageScroll: 'vertical',
            preventDefaultEvents: false,
            threshold: 75
        });
        /*
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
          event.preventDefault();
          $(this).ekkoLightbox();
        });
        */

        $('#myCarousel .carousel-item img').on('click', function(e) {
            var src = $(e.target).attr('data-remote');
            if (src) $(this).ekkoLightbox();
        });
    </script>
@endsection

