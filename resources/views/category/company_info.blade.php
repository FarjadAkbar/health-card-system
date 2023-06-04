@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet"/>
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
<!---Internal Fancy uploader css-->
<link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet"/>
@endsection
@section('page-header')
<form action="{{route('setting.company_info')}}" method="post">
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
   <div class="my-auto">
      <div class="d-flex">
         <h4 class="content-title mb-0 my-auto">Setting</h4>
         <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Company</span>
      </div>
   </div>
   <div class="d-flex my-xl-auto right-content">
      <div class="btn-group">
         <button type="submit" title="update" class="btn btn-outline-dark "><i class="far fa-edit"></i>
               Save
         </button>
      </div>
   </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
   <div class="col-xl-12">
         @csrf
         <div class="card">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="company_name" class="col-sm-4 control-label">Company Name<label class="text-danger">*</label></label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control" id="company_name" name="company_name" placeholder="" value="{{ $general_info->company_name }}">
                           <span id="company_name_msg" style="display:none" class="text-danger"></span>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="mobile" class="col-sm-4 control-label">Mobile<label class="text-danger">*</label></label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control no_special_char_no_space" id="mobile" name="mobile" placeholder="" value="{{ $general_info->mobile }}">
                           <span id="mobile_msg" style="display:none" class="text-danger"></span>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="email" class="col-sm-4 control-label">Email<label class="text-danger">*</label></label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control" id="email" name="email" placeholder="" value="{{ $general_info->email }}">
                           <span id="email_msg" style="display:none" class="text-danger"></span>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="phone" class="col-sm-4 control-label">Phone<label class="text-danger">*</label></label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control no_special_char_no_space" id="phone" name="phone" placeholder="" value="{{ $general_info->phone }}">
                           <span id="phone_msg" style="display:none" class="text-danger"></span>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="website" class="col-sm-4 control-label">Website<label class="text-danger">*</label></label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control" id="website" name="website" placeholder="" value="{{ $general_info->website }}">
                           <span id="website_msg" style="display:none" class="text-danger"></span>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="address" class="col-sm-4 control-label">Address 1<label class="text-danger">*</label></label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control" id="address_1" name="address_1" placeholder="" value="{{ $general_info->address_1 }}" >
                           <span id="postcode_msg" style="display:none" class="text-danger"></span>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="address" class="col-sm-4 control-label">Address 2<label class="text-danger">*</label></label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control" id="address_2" name="address_2" placeholder="" value="{{ $general_info->address_2 }}">
                           <span id="postcode_msg" style="display:none" class="text-danger"></span>
                        </div>
                     </div>
                     
                     <!-- ########### -->
                  </div>
                  <div class="col-md-6">
                     
                     <div class="form-group">
                        <label for="address" class="col-sm-4 control-label">Timing<label class="text-danger">*</label></label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control" id="timing" name="timing" placeholder="" value="{{ $general_info->timing }}">
                           <span id="postcode_msg" style="display:none" class="text-danger"></span>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="address" class="col-sm-4 control-label">Closing<label class="text-danger">*</label></label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control" id="closing" name="closing" placeholder="" value="{{ $general_info->closing }}">
                           <span id="postcode_msg" style="display:none" class="text-danger"></span>
                        </div>
                     </div>
                     <div class="form-group">
                     <label for="address" class="col-sm-4 control-label">Whatsapp</label></label>
                     <div class="col-sm-12">
                           <input type="url" class="form-control" id="whatsapp" name="whatsapp" placeholder="" value="{{ $general_info->whatsapp }}">
                           <span id="postcode_msg" style="display:none" class="text-danger"></span>
                     </div>
                     </div>
                     <div class="form-group">
                           <label for="address" class="col-sm-4 control-label">Instagram</label>
                           <div class="col-sm-12">
                              <input type="url" class="form-control" id="instagram" name="instagram" placeholder="" value="{{ $general_info->instagram }}">
                              <span id="postcode_msg" style="display:none" class="text-danger"></span>
                           </div>
                     </div>
                     
                     <!-- <div class="form-group">
                           <label for="address" class="col-sm-4 control-label">Facebook</label>
                           <div class="col-sm-12">
                              <input type="url" class="form-control" id="facebook" name="facebook" placeholder="" value="{{ $general_info->facebook }}">
                              <span id="postcode_msg" style="display:none" class="text-danger"></span>
                           </div>
                     </div> -->

                     <div class="form-group">
                           <label for="company_logo" class="col-sm-4 control-label">Company Logo<label class="text-danger">*</label></label>
                           <div class="col-sm-12">
                              <input type="file" id="company_logo" name="company_logo"  accept="image/*">
                              <span id="company_logo_msg" style="display:block;" class="text-danger">Max Width/Height: 200px * 80px &amp; Size: 1024kb </span>
                           </div>
                     </div>
                     <div class="form-group">
                           <div class="col-sm-5 col-md-4 col-lg-3 col-sm-offset-4">
                              <img class="img-responsive" style="border:3px solid #d2d6de;" src="{{URL::asset('company')}}/{{$general_info->logo}}">
                           </div>
                     </div>
                  </div>
               <!-- ########### -->
               </div>
         <!-- </div>
         <div class="card-footer"> -->
         </div>
         </div>
   </div>
</div>
<!--/div-->
</form>
</div>
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
<!--Internal Fileuploads js-->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
<!-- SWEET Alert-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
   integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
   crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
   $('#modaldem').on('show.bs.modal', function (e) {
   
       var id = $(e.relatedTarget).data('id');
       var name = $(e.relatedTarget).data('name');
   
   
       $(e.currentTarget).find('input[id="id_inp"]').val(id);
       $(e.currentTarget).find('input[id="name_inp"]').val(name);
   });
</script>
@if (Session::has('add'))
<script>
   swal("Good Job", "{!! Session::get('add') !!}", {
       button: "Okay",
       position: 'top-end',
       icon: 'success',
       showConfirmButton: false,
       timer: 2500
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
       timer: 2500
   });
</script>
@endif
@if ($errors->any())
<script>
   @foreach ($errors->all() as $error)
   swal("Error", "{!! $error !!}", {
       button: "Okay",
       icon: 'error',
       timer: 2500
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