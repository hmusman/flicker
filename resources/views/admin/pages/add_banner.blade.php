@extends('admin.layouts.master_layout')
@section('title', 'Dashboard')
@section('extra-links')

@endsection
@section('content')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

        <div class="page-content">

            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title mb-1">Add FlickerFone Banner</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end page title end breadcrumb -->

            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                             <form action="{{ route('Banner.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Add New Banner</h4>
                                        @if(Session::has('msg'))
                                            <div class="alert alert-warning col-md-4">{{ Session::get('msg') }}</div>
                                        @endif

                                         <div class="form-group row">
                                            <label for="" class="col-md-2 col-form-label">New_Image</label>
                                            <div class="col-md-3"> 
                                                <div class="fallback">
                                                    <input name="new_image" type="file"  value="{{ old('new_image') }}" required="">
                                                    @error('new_image')
                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                    @enderror

                                                    @error('invalidNew_Image')
                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                                <label for="" class="col-md-2 col-form-label">Buy_Image</label>
                                                <div class="col-md-3"> 
                                                    <div class="fallback">
                                                        <input name="buy_image" type="file" value="{{ old('buy_image') }}" required="">
                                                        @error('buy_image')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror

                                                        @error('invalidBuy_image')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                          </div>
                                          
                                          <div class="form-group row">
                                                <label for="" class="col-md-2 col-form-label">Sell_Image</label>
                                                <div class="col-md-3"> 
                                                    <div class="fallback">
                                                        <input name="sell_image" type="file" value="{{ old('sell_image') }}" required="">
                                                        @error('sell_image')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror

                                                        @error('invalidSell_image')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                          </div>

                                          <div class="form-group row">
                                                <label for="" class="col-md-2 col-form-label">Static_Image1</label>
                                                <div class="col-md-3"> 
                                                    <div class="fallback">
                                                        <input name="static_image1" type="file" value="{{ old('static_image1') }}" required="">
                                                        @error('static_image1')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror

                                                        @error('invalidstatic_image1')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                          </div>

                                          <div class="form-group row">
                                                <label for="" class="col-md-2 col-form-label">Static_Image2</label>
                                                <div class="col-md-3"> 
                                                    <div class="fallback">
                                                        <input name="static_image2" type="file" value="{{ old('static_image2') }}" required="">
                                                        @error('static_image2')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror

                                                        @error('invalidstatic_image2')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                          </div>

                                          <div class="form-group row">
                                                <label for="" class="col-md-2 col-form-label">Static_Image3</label>
                                                <div class="col-md-3"> 
                                                    <div class="fallback">
                                                        <input name="static_image3" type="file" value="{{ old('static_image3') }}" required="">
                                                        @error('static_image3')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror

                                                        @error('invalidstatic_image3')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                          </div> 

                                          <div class="form-group row">
                                                <label for="" class="col-md-2 col-form-label">Carousel_Image</label>
                                                <div class="col-md-3"> 
                                                    <div class="fallback">
                                                        <input name="carousel_image" type="file" value="{{ old('carousel_image') }}" required="">
                                                        @error('carousel_image')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror

                                                        @error('invalidcarousel_image')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                          </div>

                                          <div class="form-group row">
                                                <label for="" class="col-md-2 col-form-label">Calculator Bg_Image</label>
                                                <div class="col-md-3"> 
                                                    <div class="fallback">
                                                        <input name="calculator_image" type="file" value="{{ old('calculator_image') }}" required="">
                                                        @error('calculator_image')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror

                                                        @error('invalidcalculator_image')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                          </div>         

                                        <div class="card">
                                            <div class="card-body row">
        
                                                <div class="text-center mt-4">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                </div>
                                            </div>
                                        </div>



                                        <!-- <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Select</label>
                                            <div class="col-md-10">
                                                <select class="form-control">
                                                    <option>Select</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </div>
                                        </div> -->
                                      
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- end container-fluid -->
            </div> 
            <!-- end page-content-wrapper -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- End Page-content -->
@endsection
@section('extra-scripts')
<!-- apexcharts -->
<script src="{{url('public/Green/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<script src="{{url('public/Green/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script> 

<!-- Jq vector map -->
<script src="{{url('public/Green/assets/libs/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('public/Green/assets/libs/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{url('public/Green/assets/js/pages/dashboard.init.js')}}"></script>
@endsection