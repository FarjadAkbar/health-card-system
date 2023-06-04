@extends('layouts_master.master')
@section('css')
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
                <a href="{{route('hospital.directory')}}">

                    <button class="btn" href="{{route('hospital.directory')}}" style="background-color:#0000FF; color: white;border-radius: 20px; width:150px;">{{trans('main_tran.Medical Directory')}}</button>
                </a>
            </div>
        </div><!-- /.row -->
    </div>


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
                                <div class="ttm-service-description text-{{trans('main_tran.text-align')}}">
                                        <h4>{{trans('main_tran.Please Fill in All Fields')}}</h4>

                                    </div>
                                </div>
                                <form class="form-group text-{{trans('main_tran.text-align')}}"  method="post" action="{{route('apply.add')}}" enctype="multipart/form-data">
                                    <div class="row1" style="background-image: url({{URL::asset('assets/home/images/sama-card.png')}})">
                                        <div class="row" style="background-color: whitesmoke;opacity: 0.9;">
                                            @csrf

                                            <input class="form-control text-{{trans('main_tran.text-align')}}" type="hidden" name="agent"
                                                   value="{{$id ?? 1}}"
                                                   style="border:solid 2px #761193;border-radius: 20px; ">
                                            <div class="col-lg-6 mb-4">
                                                <label class="label tx-bold text-dark">{{trans('main_tran.Name')}}</label>
                                                <input class="form-control text-{{trans('main_tran.text-align')}}" type="text" name="name[]" placeholder="{{trans('main_tran.Name')}}" style="border:solid 2px #761193;border-radius: 20px; " required>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label class="label tx-bold text-dark">{{trans('main_tran.CPR No.')}}</label>
                                                <input class="form-control text-{{trans('main_tran.text-align')}}" type="number" name="cpr[]" placeholder="{{trans('main_tran.CPR No.')}}" style="border:solid 2px #761193;border-radius: 20px; " required>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <label class="label tx-bold text-dark">{{trans('main_tran.Email')}}</label>
                                                <input style="border:solid 2px #761193;border-radius: 20px; " class="form-control text-{{trans('main_tran.text-align')}}" type="email" name="email[]" placeholder="{{trans('main_tran.Email')}}">
                                            </div>

                                            <div class="col-4 mb-4">
                                                <label class="label tx-bold text-dark">{{trans('main_tran.Mobile No.')}}</label>
                                                <input style="border:solid 2px #761193;border-radius: 20px; " class="form-control text-{{trans('main_tran.text-align')}}" type="text" name="mobile" placeholder="{{trans('main_tran.Mobile No.')}}" required>
                                            </div>
                                            <div class="col-4 mb-4">
                                                <label class="label tx-bold text-dark">{{trans('main_tran.Phone No.')}}</label>
                                                <input style="border:solid 2px #761193;border-radius: 20px; " class="form-control text-{{trans('main_tran.text-align')}}" type="text" name="phone[]" placeholder="{{trans('main_tran.Phone No.')}}" >
                                            </div>

                                            <div class="col-4 mb-4">
                                                <label class="label tx-bold text-dark">{{trans('main_tran.Gender')}}</label>
                                                 <select style="border:solid 2px #761193;border-radius: 20px; " class="form-control text-{{trans('main_tran.text-align')}}" name="gender[]" >
                                        <option label="{{trans('main_tran.select one')}}"></option>
                                        <option value="male">{{trans('main_tran.Male')}}</option>
                                        <option value="female">{{trans('main_tran.Female')}}</option>
                                    </select>
                                            </div>




                                            <div class="col-3 mb-4">
                                                <label class="label tx-bold text-dark">{{trans('main_tran.House')}}</label>
                                                <input style="border:solid 2px #761193;border-radius: 20px; " class="form-control text-{{trans('main_tran.text-align')}}" type="text" name="house" placeholder="{{trans('main_tran.House')}}" >
                                            </div>
                                            <div class="col-3 col-3 mb-4">
                                                <label class="label tx-bold text-dark">{{trans('main_tran.Road')}}</label>
                                                <input style="border:solid 2px #761193;border-radius: 20px; " class="form-control text-{{trans('main_tran.text-align')}}" type="text" name="road" placeholder="{{trans('main_tran.Road')}}" >
                                            </div>
                                            <div class="col-3 mb-4">
                                                <label class="label tx-bold text-dark">{{trans('main_tran.Block')}}</label>
                                                <input style="border:solid 2px #761193;border-radius: 20px; " class="form-control text-{{trans('main_tran.text-align')}}" type="text" name="block" placeholder="{{trans('main_tran.Block')}}" >
                                            </div>
                                            <div class="col-3 mb-4">
                                                <label class="label tx-bold text-dark">{{trans('main_tran.Place')}}</label>
                                                <input style="border:solid 2px #761193;border-radius: 20px; " class="form-control text-{{trans('main_tran.text-align')}}" type="text" name="place" placeholder="{{trans('main_tran.Place')}}" >
                                            </div>

                                            <div class="col-lg-6 mb-4">
                                                <label class="label tx-bold text-dark">{{trans('main_tran.Card Package')}}</label>
                                                <select style="border:solid 2px #761193;border-radius: 20px; " class="form-control text-{{trans('main_tran.text-align')}}" name="package" required>
                                        <option label="{{trans('main_tran.select one')}}"></option>
                                        @foreach($package as $p)
                                        <option value="{{$p->id ?? ''}}">{{$p->name ?? ''}}</option>
                                        @endforeach

                                    </select>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label class="label tx-bold text-dark">{{trans('main_tran.Type Of Payment')}}</label>
                                                <select style="border:solid 2px #761193;border-radius: 20px; " class="form-control text-{{trans('main_tran.text-align')}}" name="type">
                                        <option label="{{trans('main_tran.select one')}}"></option>
                                        <option value="benefit">{{trans('main_tran.Benefit')}}</option>
                                        <option value="cash">{{trans('main_tran.Cash On Delivery')}}</option>
                                    </select>
                                            </div>
                                            <!--<div class="col-lg-6 mb-4">-->
                                            <!--    <label class="label tx-bold text-dark">Image Id :</label>-->
                                            <!--    <input style="border:solid 2px #761193;border-radius: 20px; " class="form-control text-{{trans('main_tran.text-align')}}" type="file" name="img" >-->
                                            <!--</div>-->

                                            <div class="col-lg-12 mb-5" id="survey_options">
                                                <label class="label tx-bold text-dark">{{trans('main_tran.Note')}}</label>
                                                <textarea style="border:solid 2px #761193;border-radius: 20px; " class="form-control text-{{trans('main_tran.text-align')}}" row="3" col="30" name="note"></textarea>
                                            </div>

                                            <div class="col-6 mb-4">
                                                <button class="btn btn-primary col-lg-12" type="submit"><b style="color: black">{{trans('main_tran.Apply')}}</b></button>
                                            </div>

                                            <div class="col-6 ">
                                                <a class="btn btn-success col-lg-12" id="add_more_fields"><b style="color: black">{{trans('main_tran.Add more member')}}</b></a>
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
                                <li><a href="{{route('hospital.directory')}}">{{trans('main_tran.Medical Directory')}}</a></li>
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
    <script>
        var survey_options = document.getElementById('survey_options');
        var add_more_fields = document.getElementById('add_more_fields');
        add_more_fields.onclick = function () {
            var newField7 = document.createElement('h4');
            newField7.setAttribute('class', 'col-sm-12 mt-5');
            newField7.setAttribute('style', 'color : #761193');
            newField7.innerHTML = "{{trans('main_tran.Add People')}}";

            var newField = document.createElement('input');
            var newField4 = document.createElement('label');
            
            newField4.setAttribute('class', 'label  mt-5');
            newField4.innerHTML = "{{trans('main_tran.Name')}}";
            newField.setAttribute('type', 'text');
            newField.setAttribute('name', 'name[]');
            newField.setAttribute('required','');
            newField.setAttribute('class', 'form-control text-{{trans('main_tran.text-align')}} col-lg-12 mb-4 mt-5 ');
            newField.setAttribute('placeholder', "{{trans('main_tran.Name')}}");

            var newField2 = document.createElement('input');
            var newField5 = document.createElement('label');
            newField5.setAttribute('class', 'label mt-5');
            newField5.innerHTML = "{{trans('main_tran.CPR No.')}}";
            newField2.setAttribute('type', 'number');
            newField2.setAttribute('name', 'cpr[]');
            newField2.setAttribute('required', '');
            newField2.setAttribute('class', 'form-control text-{{trans('main_tran.text-align')}} col-lg-12 mb-4 mt-5 ');
            newField2.setAttribute('placeholder', '{{trans('main_tran.CPR No.')}}');

            var newField3 = document.createElement('input');
            var newField6 = document.createElement('label');
            newField6.setAttribute('class', 'label mt-5');
            newField6.innerHTML = "{{trans('main_tran.Email')}}";
            newField3.setAttribute('type', 'email');
            newField3.setAttribute('name', 'email[]');
            newField3.setAttribute('class', 'form-control text-{{trans('main_tran.text-align')}} col-lg-12 mb-4 mt-5 ');
            newField3.setAttribute('placeholder', '{{trans('main_tran.Email')}}');

            var newField11 = document.createElement('input');
            var newField12 = document.createElement('label');
            newField12.setAttribute('class', 'label mt-5');
            newField12.innerHTML = "{{trans('main_tran.Phone No.')}}";
            newField11.setAttribute('type', 'number');
            newField11.setAttribute('name', 'phone[]');
            newField11.setAttribute('class', 'form-control text-{{trans('main_tran.text-align')}} col-lg-12 mb-4 mt-5 ');
            newField11.setAttribute('placeholder', '{{trans('main_tran.Phone No.')}}');


            var array = ["{{trans('main_tran.Male')}}", "{{trans('main_tran.Female')}}"];

         //Create and append select list
            var selectList = document.createElement('select');
            selectList.setAttribute('name','gender[]');
            selectList.setAttribute('class','form-control text-{{trans('main_tran.text-align')}} col-lg-12 mb-4 mt-5')
            var newField112 = document.createElement('label');
            newField112.setAttribute('class', 'label mt-5');
            newField112.setAttribute('required', '');
            newField112.innerHTML = "{{trans('main_tran.Gender')}}";


        //Create and append the options
            for (var i = 0; i < array.length; i++) {
                var option = document.createElement("option");
                option.value = array[i];
                option.text = array[i];
                selectList.appendChild(option);
            }


            survey_options.appendChild(newField7);
            survey_options.appendChild(newField4);
            survey_options.appendChild(newField);
            survey_options.appendChild(newField5);
            survey_options.appendChild(newField2);
            survey_options.appendChild(newField6);
            survey_options.appendChild(newField3);
            survey_options.appendChild(newField12);
            survey_options.appendChild(newField11);
            survey_options.appendChild(newField112);
            survey_options.appendChild(selectList);



        }

    </script>

    @if (Session::has('add'))
        <script>
            swal("Good Job", "{!! Session::get('add') !!}", {
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

