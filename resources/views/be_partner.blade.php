@extends('layouts_master.master')
@section('css')
@endsection
@section('content')

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{trans('main_tran.Be A Partner')}}</h1>
                        </div><!-- /.page-title-captions -->

                    </div>
                </div><!-- /.col-md-12 -->
            </div>
            <div class="row mt-3">
                <div class="col-lg-2 mb-3">
                    <a href="{{route('search.card')}}">
                        <button class="btn mr-2"
                                style="background-color: white; color: purple;border-radius: 20px; width:150px;">{{trans('main_tran.Search e-Card')}}</button>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="{{route('hospital.directory')}}">

                        <button class="btn" href="{{route('hospital.directory')}}"
                                style="background-color: white; color: purple;border-radius: 20px;">{{trans('main_tran.Medical Directory')}}</button>
                    </a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-left  break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 content-area " style="">
                        <!-- ttm-service-single-content-are -->
                        <div class="ttm-service-single-content-area">
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="ttm-service-description">
                                        <h4>Please Fill in All Fields</h4>

                                    </div>
                                </div>
                                <form class="form-group" method="post" action="{{route('be_partner_add')}}"
                                      enctype="multipart/form-data">
                                    <div class="row1"
                                         style="background-image: url({{URL::asset('assets/home/images/sama-card.png')}})">
                                        <div class="row" style="background-color: whitesmoke;opacity: 0.9;">
                                            @csrf

                                            <div class="col-lg-6 mb-4">
                                                <label class="label tx-bold text-dark">Provider Name :</label>
                                                <input class="form-control" type="text" name="name" placeholder="Name"
                                                       style="border:solid 2px #761193;border-radius: 20px; " required>
                                            </div>
                                            
                                              <div class="col-lg-6 mb-4">
                                                <label class="label tx-bold text-dark">Person Authorized Name:</label>
                                                <input style="border:solid 2px #761193;border-radius: 20px; "
                                                       class="form-control" type="text" name="authorized"
                                                       placeholder="Person Authorized Name">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label class="label tx-bold text-dark">Type of Provider :</label>
                                                <select style="border:solid 2px #761193;border-radius: 20px; "
                                                        class="form-control" name="provider_id">
                                                    <option label="select one"></option>
                                                    @foreach(\App\Provider::all() as $p)
                                                        <option value="{{$p->id}}">{{$p->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="col-12 mb-4">
                                                <label class="label tx-bold text-dark">Mobile No. :</label>
                                                <input style="border:solid 2px #761193;border-radius: 20px; "
                                                       class="form-control" type="text" name="contact"
                                                       placeholder="contact">
                                            </div>
                                         
                                            <div class="col-6 mb-4">
                                                <label class="label tx-bold text-dark">Email :</label>
                                                <input style="border:solid 2px #761193;border-radius: 20px; "
                                                       class="form-control" type="email" name="email"
                                                       placeholder="Email">
                                            </div>

                                            <div class="col-6 mb-4">
                                                <label class="label tx-bold text-dark">specialist :</label>
                                                <input style="border:solid 2px #761193;border-radius: 20px; "
                                                       class="form-control" type="text" name="specialist"
                                                       placeholder="Specialist">
                                            </div>



                                            <div class="col-lg-12 mb-10" id="survey_options">
                                                <label class="label tx-bold text-dark">Note :</label>
                                                <textarea style="border:solid 2px #761193;border-radius: 20px; "
                                                          class="form-control" row="3" col="30" name="comment"></textarea>
                                            </div>

                                            <div class="col-lg-4 mb-4">
                                                <button class="btn btn-primary col-lg-12" type="submit">Apply
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- ttm-service-single-content-are end -->
                    </div>
                    <div class="col-lg-3 widget-area sidebar-right ttm-bgcolor mt-lg-5 ml-lg-3">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-nav-menu">
                            <ul class="widget-menu box-shadow">
                                <li class="active"><a
                                        href="{{route('apply.view')}}">{{trans('main_tran.Apply Card')}}</a></li>
                                <li>
                                    <a href="{{route('hospital.directory')}}">{{trans('main_tran.Medical Directory')}}</a>
                                </li>
                                <li><a href="{{route('search.card')}}">{{trans('main_tran.Search e-Card')}}</a></li>

                            </ul>
                        </aside>
                    </div>

                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->


    </div><!--site-main end-->
    </div>



@endsection

<!-- Javascript -->

@section('js')
    <!-- SWEET Alert-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (Session::has('add'))
        <script>
            swal("شكرا لك", "{!! Session::get('add') !!}", {
                button: "Okay",
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 5000
            });
        </script>

    @endif

    @if (Session::has('delete'))
        <script>
            swal("Good Job", "{!! Session::get('delete') !!}", {
                button: "Okay",
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 5000
            });
        </script>

    @endif

    @if (Session::has('edit'))
        <script>
            swal("Good Job", "{!! Session::get('edit') !!}", {
                button: "Okay",
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 5000
            });
        </script>

    @endif

    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
            swal("Error", "{!! $error !!}", {
                button: "Okay",
                icon: 'error',
                timer: 5000
            })
            @endforeach
        </script>

    @endif
    <script>
        $(function () {
            $('.selectpicker').selectpicker();
        });
    </script>
@endsection

