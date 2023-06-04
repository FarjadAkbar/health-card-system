@extends('layouts.master')
@section('css')
<!-- Internal Nice-select css  -->
<link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Mails</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Add Mail
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
                </div>
                <br>
                <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2" action="{{url('/mails/new/save')}}" method="post">
                    @csrf

                    <div class="row row-sm mg-b-20">
                        <div class="parsley-input col-md-12" id="fnWrapper">
                            <label>Template: <span class="tx-danger">*</span></label>
                            <select name="template" id="select-template"
                                class="form-control  nice-select  custom-select">
                                <option value="0">Custom</option>
                                @foreach($templates as $template)
                                    <option value="{{ $template->id }}">{{ $template->mail_title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row row-sm mg-b-20 template">
                        <div class="parsley-input col-md-12" id="fnWrapper">
                            <label>Subject: <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm" data-parsley-class-handler="#lnWrapper" name="subject" type="text">
                        </div>
                    </div>

                    
                    <input type="hidden" name="cc_all_mails" id="cc_all_mails">

                    <div class="row row-sm mg-b-20">
                        <div class="col-lg-12">
                            <label class="form-label">Card Type</label>
                            <select name="card_type" id="select-beast" onchange="check_sent_to()" class="form-control  nice-select  custom-select">
                                <option value="group_card">Group Card</option>
                                <option value="health_card">Health Card</option>
                                <option value="plus_card">Plus Card</option>
                                <option value="all_card">All Card</option>
                            </select>
                        </div>
                    </div>
                    <div class="row row-sm mg-b-20">
                        <div class="col-lg-12">
                            <label class="form-label">Sent To</label>
                            <select name="sent_to" id="select-beast" onchange="check_sent_to()" class="form-control  nice-select  custom-select">
                                <option value="all">All Customers</option>
                                <option value="specific">Specific Customers</option>
                                <option value="active">Active Customers</option>
                                <option value="pending">Pending Customers</option>
                                <option value="draft">Draft Customers</option>
                                <option value="paid">Paid Customers</option>
                                <option value="done">Done Customers</option>
                                <option value="expired">Expired Customers</option>
                            </select>
                        </div>
                    </div>

                    <div class="row row-sm mg-b-20">
                        <div class="parsley-input col-md-12" id="fnWrapper">
                            <label>CC:</label>
                            <textarea name="cc" id="cc" rows="3" placeholder="Enter Email on a new line or use a comma" class="form-control" onkeyup="keydown()"></textarea>
                        </div>
                    </div>
                    
                    <div class="row row-sm mg-b-20" id="specific_customer_whole_box" style="display: none;">
                        <div class="parsley-input col-md-12" id="fnWrapper">
                            <label class="form-label">Select Customers</label>
                        </div>
                        <div class="parsley-input col-md-12" id="specific_customers_checkbox" style="max-height: 300px;overflow-y: scroll;overflow-x: hidden;">
                            <div class="row">
                                <div class="col-12">

                                    Loadng...
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-sm mg-b-20 template">
                        <div class="parsley-input col-md-12" id="fnWrapper">
                            <label>Greeting: <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper" name="greeting" type="text">
                        </div>
                    </div>

                    <div class="row row-sm mg-b-20 template">
                        <div class="col-lg-12">
                            <div id="editor"></div>
                            <ul class="parsley-errors-list filled" id="message_error" style="display:none;">
                                <li class="parsley-required">This value is required.</li>
                            </ul>
                        </div>
                    </div>


                    <input type="hidden" id="message" name="message" />

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button class="btn btn-main-primary pd-x-20" type="button" onclick="formSubmitted()">Send</button>
                    </div>
                </form>
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

<script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>
<script>

    $("#select-template").change(function(){
        if($(this).val() == 0){
            $(".template").show();
        } else{
            $(".template").hide();
        }
    })
    const editor = new toastui.Editor({
        el: document.querySelector('#editor'),
        previewStyle: 'vertical',
        height: '300px',
        initialValue: '',
        name: 'post_content',
        toolbarItems: [
            ['heading', 'bold', 'italic', 'strike'],
            ['hr', 'quote'],
            ['ul', 'ol', 'task', 'indent', 'outdent'],
            ['table', 'link'],
            ['code', 'codeblock'],

        ]
    });

    function keydown() {
        var lines = $('#cc').val().split('\n');
        var texts = [];
        for (var i = 0; i < lines.length; i++) {
            if (/\S/.test(lines[i])) {
                texts.push($.trim(lines[i]));
            }
        }
        $('#cc_all_mails').val(texts);
        console.log($('#cc_all_mails').val());
    }

    function formSubmitted(e) {
        if($("#select-template").val() == 0){
            let content = $('.toastui-editor-contents').html();
            $('input[name=message]').attr('value', content);
            if (content == null || content == "") {
                $('#message_error').css("display", "block");
                return;
            } else {
                $('#message_error').css("display", "none");
                $('#selectForm2').submit();
            }
        } else{
            $('#selectForm2').submit();
        }
    }

    function check_sent_to() {
        let value = $('select[name="sent_to"]').val();
        if (value == "specific") {
            $('#specific_customer_whole_box').css("display", "block");
            $('#specific_customers_checkbox').html(`<div class="row"><div class="col-12">Loadng...</div></div>`);

            let card_type = $('select[name="card_type"').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                url: "{{url('/card_type/customers')}}" + "/" + card_type,
                data: {
                    "card_type": card_type
                },
                success: function(response) {
                    console.log(response);
                    if (response.status == "success") {
                        reference = '<div class="row">';
                        $.each(response.emails, function(index, email) {
                            reference += `<div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="selected_specific_emails[]" required value="${email}" id="${index}">
                                    <label class="form-check-label" for="${index}">
                                    ${email}
                                    </label>
                                </div>
                            </div>`;
                        });
                        reference += '</div>';
                        $('#specific_customers_checkbox').html(reference);
                    }
                }
            });
        } else {
            $('#specific_customer_whole_box').css("display", "none");
            $('#specific_customers_checkbox').html(`<div class="row"><div class="col-12">Loadng...</div></div>`);
        }
    }
</script>
@endsection