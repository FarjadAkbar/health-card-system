@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Reports</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Card</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
                        <div class="mb-3 mb-xl-0">
                            <div class="btn-group">
                                <a href="{{route('add_cards')}}" class="btn btn-outline-primary btn-lg" title="add card">
                                    <i class="fas fa-user-plus"></i>
                                </a>
                            </div>
                            <div class="btn-group">
                                <a href="{{route('show_cards_draft',1)}}" class="btn btn-success" title="online card">
                                    Online Cards
                                </a>
                            </div>

                            <div class="btn-group dropdown">
                                <button type="button" class="btn text-white"
                                        style="background-color:#761193;">{{date('d-M-Y')}}</button>
                            </div>


                        </div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    <div class="card col-lg-12">
                        <div class="card-header">
                            <form method="post" action="{{route('report.card.search')}}" role="search" >
                                @csrf
                                <div class="row">
                                    
                                    <!-- col-4 -->
                                    <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10">From Date</p>
                                        <input type="date" name="start" class="form-control" value="{{$start ?? ''}}">
                                    </div>

                                    <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10">To Date</p>
                                        <input type="date" name="end" class="form-control" value="{{$end ?? ''}}">
                                    </div>
                                     @if(auth()->user()->hasRole('Admin')){
                                    <div class="col-lg-2 mg-t-20 mg-lg-t-0 mb-4">
                                        <p class="mg-b-10">Customer Name</p>
                                        <select class="form-control select2" name="customer">
                                            <option value="">All</option>
                                            @foreach(\App\Card::select('name')->distinct()->get() as $c)
                                                <option value="{{$c->name}}">
                                                    {{$c->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                
                
                                   
                                    <div class="col-lg-2 mg-t-20 mg-lg-t-0 mb-4">
                                        <p class="mg-b-10">Agent Name</p>
                                        <select class="form-control select2" name="agent">
                                            <option value="">All</option>
                                            @foreach(\App\User::all() as $u)
                                                <option value="{{$u->id}}">
                                                    {{$u->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @endif

                                    <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10">Status Card</p>
                                        <select class="form-control select2" name="status">
                                            <option value="{{$status ?? ''}}">
                                                {{$status ?? ''}}
                                            </option>
                                            <option value="draft">
                                                draft
                                            </option>
                                            <option value="pending">
                                                pending
                                            </option>
                                            <option value="expired">
                                                expired
                                            </option>
                                            <option value="done">
                                                done
                                            </option>
                                            <option value="paid">
                                                paid
                                            </option>
                                            <option value="print">
                                                print
                                            </option>
                                        </select>
                                    </div>
                                    
                                     @if(auth()->user()->hasRole('Admin')){
                                    <div class="col-lg-2 mg-t-20 mg-lg-t-0 mb-4">
                                        <p class="mg-b-10">Package Name</p>
                                        <select class="form-control select2" name="package">
                                                                                        <option value="">All</option>
                                            @foreach($package as $p)
                                                <option value="{{$p->id}}">
                                                    {{$p->name}}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                    @endif

                                    <div class="col-lg-2 mg-t-20 mg-lg-t-0 mb-4">
                                        <p class="mg-b-10">Gender</p>
                                        <select class="form-control select2" name="gender">
                                            <option value=""></option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                    
                                    <div class="col-lg-2 mg-t-20 mg-lg-t-0 mb-4">
                                        <p class="mg-b-10">Location</p>
                                        <select class="form-control select2" name="place">
                                            <option value="">All</option>
                                            @foreach(\App\Card::select('place')->distinct()->get() as $c)
                                                <option value="{{$c->place}}">
                                                    {{$c->place}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    
                                    <div class="col-lg-2 mg-t-20 mg-lg-t-0 mb-4">
                                        <p class="mg-b-10">Country</p>
                                        <select class="form-control select2" name="country">
                                            <option value="">All</option>
                                            @foreach(\App\Card::select('country')->distinct()->get() as $c)
                                                <option value="{{$c->country}}">
                                                    {{$c->country}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-2 mg-t-20 mg-lg-t-0 float-right">
                                        <button type="submit"  class="form-control btn btn-success bg-primary text-white">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

				</div>
                    @if(isset($card))
                    <div class="col-xl-12">
                        <div class="card mg-b-20">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0">All Customers Card</h4>
                                                                                                                                             <input disabled readonly type="text" class="form-control col-2" name="total" value="{{$total}} BD">
                                </div>
                                <p class="tx-12 tx-gray-500 mb-2"></p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="allcarddata" class="table key-buttons text-md-nowrap tr"
                                           style="background-color:#761193;">
                                         <thead>
                            <tr>
                                <th class="border-bottom-0"></th>
                                <th class="border-bottom-0 text-white">Issue date</th>
                                <th class="border-bottom-0 text-white">Expiry</th>
                                <th class="border-bottom-0 text-white">No. of year</th>
                                <th class="border-bottom-0 text-white">Name</th>
                                <th class="border-bottom-0 text-white">CPR</th>
                                <th class="border-bottom-0 text-white">Country</th>
                                <th class="border-bottom-0 text-white">Payment Method</th>
                                <th class="border-bottom-0 text-white">Contact</th>
                                <th class="border-bottom-0 text-white">Status</th>
                                <th class="border-bottom-0 text-white">Mem</th>
                                <th class="border-bottom-0 text-white">Online</th>
                                <th class="border-bottom-0 text-white">Period</th>
                                <th class="border-bottom-0 text-white">Comment</th>
                               <th class="border-bottom-0 text-white">Package</th>
                                <th class="border-bottom-0 text-white">Amount</th>
                                <th class="border-bottom-0 text-white">Total</th>
                                <th class="border-bottom-0 text-white">Balance</th>
                                <th class="border-bottom-0 text-white"></th> 
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($card as $c)
                                <tr>
                                    <td></td>
                                    <td>{{$c->date}}</td>
                                    <td>{{$c->expiry}}</td>
                                    <td>{{$c->period}}</td>
                                    <td><a href="{{route('profile_show',$c->cpr_no)}}">{{$c->name}}</a></td>
                                    <td>{{$c->cpr_no}}</td>
                                    <td>{{$c->country}}</td>
                                    <td>{{$c->payment_method}}</td>
                                    <td>{{$c->mobile}} - {{$c->phone}}</td>
                                   <td>
                                        <select onchange="editStatus(this,{{$c->id}})"
                                                class="form-control select1 mb-1"
                                                name="status_change">
                                            <option selected disabled value="{{$c->status ?? ' '}}">
                                                {{$c->status ?? ' '}}
                                            </option>
                                            <option value="draft">
                                                draft
                                            </option>
                                            <option value="pending">
                                                pending
                                            </option>
                                            <option value="expired">
                                                expired
                                            </option>
                                            <option value="done">
                                                done
                                            </option>
                                            <option value="paid">
                                                paid
                                            </option>
                                            
                                                                <option value="cancelled">
                                                                    cancelled
                                                                </option>
                                            <option value="print">
                                                print
                                            </option>

                                        </select>
                                    </td>

                                    @if($c->cpr_no == $c->father_id)
                                        <td>Father  <i class="fas fa-circle" style="color: dodgerblue"></i></td>
                                    @else
                                        <td>Child  <i class="fas fa-circle" style="color: black"></i></td>
                                    @endif

                                    @if($c->online == 1)
                                        <td>Online  <i class="fas fa-circle" style="color: orangered"></i></td>
                                    @else
                                        <td>Manually  <i class="fas fa-circle" style="color: green"></i></td>
                                    @endif


                                    <td>{{$c->period}}</td>
                                    <td>{{$c->comment}}</td>

                                   
                                    <td>{{isset($c->Package->name) ? $c->Package->name : ''}}</td>
                                    <td>{{isset($c->Package->package_prices) ? $c->Package->package_prices : ''}}</td>
                                    
                                    
                                    <td>{{ $c->total }}</td>
                                    <td>{{ $c->balance }}</td>
                                    
                                    <td>
                                        <a class=" btn btn-sm btn-info" href="{{route('profile_show',$c->cpr_no)}}"
                                           data-effect="effect-scale"
                                           title="edit"><i class="far fa-edit"></i> Edit</a>

                                        <a class="modal-effect btn btn-sm btn-danger"
                                           data-effect="effect-scale"
                                           data-id="{{$c->id}}" data-name="{{$c->name}}"
                                           data-toggle="modal"
                                           href="#modaldem" title="delete"><i class="las la-trash"></i> Delete</a>
                                        @if($c->father_id == null)

                                            <a class="modal-effect btn btn-sm btn-primary"
                                               data-effect="effect-scale"
                                               data-id="{{$c->id}}" data-name="{{$c->name}}"
                                               data-email="{{$c->email}}" data-date="{{$c->date}}"
                                               data-mobile="{{$c->mobile}}" data-phone="{{$c->phone}}"
                                               data-house="{{$c->house}}" data-road="{{$c->road}}"
                                               data-block="{{$c->block}}" data-place="{{$c->place}}"
                                               data-country="{{$c->country}}" data-card_type="{{$c->card_type_id}}"
                                               data-payment_method="{{$c->payment_method}}"
                                               data-contact_method="{{$c->contact_method}}"
                                               data-package_type="{{$c->package_type}}"
                                               data-toggle="modal"
                                               href="#modaldem2" title="add more"><i class="fas fa-users"></i> Add More
                                                People</a>
                                        @else
                                        @endif
                                        <a class="modal-effect btn btn-sm btn-success"
                                           data-effect="effect-scale"
                                           data-id="{{$c->id}}" data-name="{{$c->name}}"
                                           data-toggle="modal"
                                           href="#modaldem1" title="status"><i class="fas fa-sync"></i> Status</a>


                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                    <!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
                </div>
		<!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Data tables -->
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
@endsection
