@extends('layouts.master')
@section('css')
<!-- Internal Nice-select css  -->
<link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>
<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
   <div class="my-auto">
      <div class="d-flex">
         <h4 class="content-title mb-0 my-auto">Template</h4>
         <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Add Template
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
                  <a class="btn btn-primary btn-sm" href="{{ route('templates.index') }}">Back</a>
               </div>
            </div>
            <br>
            <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
               action="{{route('templates.store')}}" method="post">
               @csrf
               <div class="">
                  <div class="row mg-b-20">
                     <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                        <label>Title: <span class="tx-danger">*</span></label>
                        <input class="form-control form-control-sm mg-b-20"
                           data-parsley-class-handler="#lnWrapper" name="title" required="" value="{{ old('title') }}"
                           type="text">
                     </div>
                     <div class="col-lg-6">
                        <label class="form-label">Card Status</label>
                        <select name="status" id="select-beast"
                           class="form-control  nice-select  custom-select"  value="{{ old('status') }}">
                           <option value="promotional">Promotional</option>
                           @foreach($card as $c)
                              <option value="{{ $c->status }}">{{ ucfirst($c->status) }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
               </div>
               <div class="row mg-b-20">
                  <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                     <label>Subject: <span class="tx-danger">*</span></label>
                     <p>
                        <small><i>{card_customer_name}, {card_type}</i></small>
                     </p>
                     <input class="form-control form-control-sm mg-b-20"
                        data-parsley-class-handler="#lnWrapper"  value="{{ old('subject') }}"
                        name="subject" required="" type="text">
                  </div>
               </div>
               <div class="row mg-b-20">
                  <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                     <label>Greeting: <span class="tx-danger">*</span></label>
                     <input class="form-control form-control-sm mg-b-20"
                        data-parsley-class-handler="#lnWrapper"  value="{{ old('description') }}"
                        name="description" required="" type="text">
                  </div>
               </div>
               <div class="row row-sm mg-b-20">
                  <div class="parsley-input col-md-12">
                     <label>Body: <span class="tx-danger">*</span></label>
                     <p>
                        <small><i>{company}, {card_customer_name}, {card_customer_email}, {card_cpr}, {card_cr}, {card_period}, {card_type}, {issue_date}, {last_renewal_date}, {expiry_date}, {company_email}, {company_phone}</i></small>
                     </p>
                     <div id="editor"></div>
                     <ul class="parsley-errors-list filled" id="message_error" style="display:none;">
                        <li class="parsley-required">This value is required.</li>
                     </ul>
                  </div>
                  <input type="hidden" id="message" name="message" />
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button class="btn btn-main-primary pd-x-20" type="submit" onclick="formSubmitted()">Add</button>
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
   
   
   
   function formSubmitted(e) {
       let content = $('.toastui-editor-contents').html();
       $('input[name=message]').attr('value', content);
       console.log(content);
       if (content == null || content == "") {
           $('#message_error').css("display", "block");
           return;
       } else {
           $('#message_error').css("display", "none");
           $('#selectForm2').submit();
       }
   }
   
   
</script>
@endsection