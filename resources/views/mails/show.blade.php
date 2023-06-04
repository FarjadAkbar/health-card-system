@extends('layouts.master')
@section('css')
<!-- Internal Nice-select css  -->
<link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet" />
@section('title')
@stop


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Mails</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ View
            </span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-lg-12 col-md-12">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Error</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        <a class="btn btn-primary btn-sm" href="{{ url('/mails/all') }}">Back</a>
                    </div>
                </div><br>

                <div class="">

                    <div class="row">
                        <div class="parsley-input col-md-12 mg-b-20" id="fnWrapper">
                            <label>Date & Time:</label>
                            <input class="form-control" readonly name="subject" type="text" value="{{$data->datetime}}">
                        </div>

                        <div class="parsley-input col-md-12 mg-b-20" id="fnWrapper">
                            <label>Subject:</label>
                            <input class="form-control" readonly name="subject" type="text" value="{{$data->subject}}">
                        </div>

                        @php
                        $sent_to = "";
                        if($data->sent_to == "all") {
                        $sent_to = "All Customers";
                        }else if($data->sent_to == "specific") {
                        $sent_to = $data->to_email;
                        }else if($data->sent_to == "active") {
                        $sent_to = "Active Customers";
                        }else if($data->sent_to == "pending") {
                        $sent_to = "Pending Customers";
                        }else if($data->sent_to == "draft") {
                        $sent_to = "Draft Customers";
                        }else if($data->sent_to == "paid") {
                        $sent_to = "Paid Customers";
                        }else if($data->sent_to == "done") {
                        $sent_to = "Done Customers";
                        }else if($data->sent_to == "expired") {
                        $sent_to = "Expired Customers";
                        }
                        @endphp

                        <div class="parsley-input col-md-12 mg-b-20" id="fnWrapper">
                            <label>Sent To:</label>
                            <textarea class="form-control" readonly>{{$sent_to}}</textarea>
                        </div>
                        <div class="parsley-input col-md-12 mg-b-20" id="fnWrapper">
                            <label>CC:</label>
                            <textarea class="form-control" readonly>{{$data->cc}}</textarea>
                        </div>

                        @php
                        $card_type = "";
                        if($data->card_type == "group_card") {
                        $card_type = "Group Card";
                        }else if($data->card_type == "health_card") {
                        $card_type = "Health Card";
                        }else if($data->card_type == "plus_card") {
                        $card_type = "Plus Card";
                        }else if($data->card_type == "all_card") {
                        $card_type = "All Card";
                        }
                        @endphp

                        <div class="parsley-input col-md-12 mg-b-20" id="fnWrapper">
                            <label>Card Type:</label>
                            <input class="form-control" readonly name="subject" type="text" value="{{$card_type}}">
                        </div>

                        <div class="parsley-input col-md-12 mg-b-20 mg-md-t-0" id="lnWrapper">
                            <label>Greeting:</label>
                            <input class="form-control" readonly name="greeting" type="text" value="{{$data->greeting}}">
                        </div>

                        <div class="parsley-input col-md-12 mg-b-20 mg-md-t-0" id="lnWrapper">
                            <label>Message:</label>
                            {!!$data->message!!}
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>




</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')

<!-- Internal Nice-select js-->
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

<!--Internal  Parsley.min js -->
<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<!-- Internal Form-validation js -->
<script src="{{URL::asset('assets/js/form-validation.js')}}"></script>
@endsection