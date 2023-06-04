@extends('layouts.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back!</h2>
						  <p class="mg-b-0">SAMA BAHRAIN CARD DASHBOARD .</p>
						</div>
					</div>
                    <div class="d-flex my-xl-auto right-content">

                        <div class="pr-1 mb-3 mb-xl-0">
                            <a class="  btn btn-primary-gradient btn-block" href="{{ route('add_cards') }}" title="card register" ><i class="fas fa-user-plus"></i> Card Register</a>
                        </div>



                        <div class="pr-1 mb-3 mb-xl-0">
                            <a class="  btn btn-danger-gradient btn-block" href="{{ route('show',1) }}" title="hospital register" ><i class="fas fa-hospital"></i> Provider Register</a>
                        </div>

                    </div>
                    </div>
				<!-- /breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm" >
					<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
                            <a href="">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
                                    <a href="#">
									<h6 class="mb-3 tx-12 text-white">All Created Providers</h6>
                                    </a>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Hospital::count()}}</h4>
										</div>
									</div>
								</div>
							</div>
                            </a>

						</div>
					</div>

					<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
                                    <a href="{{route('provider_all',0)}}"><h6 class="mb-3 tx-12 text-white">Total Draft Providers</h6></a>

                                </div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Hospital::where('status',0)->count()}}</h4>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-purple-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
                                    <a href="{{route('provider_all',1)}}">
									<h6 class="mb-3 tx-12 text-white">Total Pending Providers</h6>
                                    </a>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Hospital::where('status',1)->count()}}</h4>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                        <div class="card overflow-hidden sales-card bg-warning-gradient">
                            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                                <div class="">
                                    <a href="{{route('provider_all',2)}}">
                                    <h6 class="mb-3 tx-12 text-white">Total Done Providers</h6>
                                    </a>
                                </div>
                                <div class="pb-0 mt-0">
                                    <div class="d-flex">
                                        <div class="">
                                            <h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Hospital::where('status',2)->count()}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                        <div class="card overflow-hidden sales-card bg-purple-gradient">
                            <a href="">
                                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                                    <div class="">
                                        <a href="{{route('provider_all_online',1)}}">

                                        <h6 class="mb-3 tx-12 text-white">Total Online Providers</h6>
                                        </a>
                                    </div>
                                    <div class="pb-0 mt-0">
                                        <div class="d-flex">
                                            <div class="">
                                                <h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Hospital::where('on_off',1)->count()}}</h4>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                        <div class="card overflow-hidden sales-card bg-primary-gradient">
                            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                                <div class="">
                                    <a href="{{route('provider_all_online',0)}}">

                                    <h6 class="mb-3 tx-12 text-white">Total Offline Providers</h6>
                                    </a>
                                </div>
                                <div class="pb-0 mt-0">
                                    <div class="d-flex">
                                        <div class="">
                                            <h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Hospital::where('on_off',2)->count()}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    
				</div>
				<!-- row closed -->

                <!-- row 2 -->
				<div class="row row-sm">

                    <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                        <div class="card overflow-hidden sales-card bg-success-gradient">
                            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                                <div class="">
                                    <a href="{{route('provider_all_expired',date('Y-m-d'))}}">

                                    <h6 class="mb-3 tx-12 text-white">Total Expired Providers</h6>
                                    </a>
                                </div>
                                <div class="pb-0 mt-0">
                                    <div class="d-flex">
                                        <div class="">
                                            <h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Hospital::where('expiry_date','<',date('Y-m-d'))->count()}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                        <div class="card overflow-hidden sales-card bg-danger-gradient">
                            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                                <div class="">
                                    <a href="{{route('provider_all_on',2)}}">

                                        <h6 class="mb-3 tx-12 text-white">Total of Partners Online</h6>
                                    </a>
                                </div>
                                <div class="pb-0 mt-0">
                                    <div class="d-flex">
                                        <div class="">
                                            <h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Hospital::where('online',2)->count()}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
				</div>
				<!-- row closed -->

			</div>
		</div>
		<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>
@endsection
