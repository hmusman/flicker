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
                            <h4 class="page-title mb-1">Update FlickerFone Banner</h4>
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
                            <form action="{{ route('Banner.update',$banners->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Update Banner</h4>
                                      
                                        <div class="form-group row">
                                                    <label for="" class="col-md-2 col-form-label"> Buy_Image</label>
                                                    <div class="col-md-5"> 
                                                        <div class="fallback">
                                                            <input name="buy_image" type="file">
                                                            <input type="hidden" name="oldbuy_Image" value="{{ $banners->buy_image }}"> 
                                                            @php $buy_image = 'storage/admin/images/banner/100_'.$banners->buy_image  @endphp
                                                            
                                                            <img src='{{ asset($buy_image) }}' style="width: 100px; height: 100px;">
                                                            @error('buy_image')
                                                                <p class="text-danger mt-3">{{ $message }}</p>
                                                            @enderror

                                                            @error('invalidbuy_image')
                                                                <p class="text-danger mt-3">{{ $message }}</p>
                                                            @enderror
                                                        </div>   
                                                   </div>
                                        </div>

                                        <div class="form-group row">
                                                    <label for="" class="col-md-2 col-form-label">New_Image</label>
                                                    <div class="col-md-5"> 
                                                        <div class="fallback">
                                                            <input name="new_image" type="file">
                                                            <input type="hidden" name="oldnew_Image" value="{{ $banners->new_image }}">
                                                            @php $new_image = 'storage/admin/images/banner/100_'.$banners->new_image  @endphp
                                                            @if($banners->new_image !='')
                                                                <img src='{{ asset($new_image) }}' style="width: 100px; height: 100px;">
                                                            @endif
                                                            @error('new_image')
                                                                <p class="text-danger mt-3">{{ $message }}</p>
                                                            @enderror

                                                            @error('invalidnew_image')
                                                                <p class="text-danger mt-3">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="form-group row">
                                                    <label for="" class="col-md-2 col-form-label">Sell_image</label>
                                                    <div class="col-md-5"> 
                                                        <div class="fallback">
                                                            <input name="sell_image" type="file">
                                                            <input type="hidden" name="oldsell_Image" value="{{ $banners->sell_image }}">
                                                            @php $sell_image = 'storage/admin/images/banner/100_'.$banners->sell_image  @endphp
                                                            @if($banners->sell_image !='')
                                                                <img src='{{ asset($sell_image) }}' style="width: 100px; height: 100px;">
                                                            @endif
                                                            @error('sell_Image')
                                                                <p class="text-danger mt-3">{{ $message }}</p>
                                                            @enderror

                                                            @error('invalidsell_Image')
                                                                <p class="text-danger mt-3">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="form-group row">
                                                    <label for="" class="col-md-2 col-form-label">Static_Image1</label>
                                                    <div class="col-md-5"> 
                                                        <div class="fallback">
                                                            <input name="static_image1" type="file">
                                                            <input type="hidden" name="oldstatic_image1" value="{{ $banners->static_image1 }}">
                                                            @php $static_image1 = 'storage/admin/images/banner/100_'.$banners->static_image1  @endphp
                                                            @if($banners->static_image1 !='')
                                                                <img src='{{ asset($static_image1) }}' style="width: 100px; height: 100px;">
                                                            @endif
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
                                                    <div class="col-md-5"> 
                                                        <div class="fallback">
                                                            <input name="static_image2" type="file">
                                                            <input type="hidden" name="oldstatic_image2" value="{{ $banners->static_image2 }}">
                                                            @php $static_image2 = 'storage/admin/images/banner/100_'.$banners->static_image2  @endphp
                                                            @if($banners->static_image2 !='')
                                                                <img src='{{ asset($static_image2) }}' style="width: 100px; height: 100px;">
                                                            @endif
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
                                                    <div class="col-md-5"> 
                                                        <div class="fallback">
                                                            <input name="static_image3" type="file">
                                                            <input type="hidden" name="oldstatic_image3" value="{{ $banners->static_image3 }}">
                                                            @php $static_image3 = 'storage/admin/images/banner/100_'.$banners->static_image3  @endphp
                                                            @if($banners->static_image3 !='')
                                                                <img src='{{ asset($static_image3) }}' style="width: 100px; height: 100px;">
                                                            @endif
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
                                                    <div class="col-md-5"> 
                                                        <div class="fallback">
                                                            <input name="carousel_image" type="file">
                                                            <input type="hidden" name="oldcarousel_image" value="{{ $banners->carousel_image }}">
                                                            @php $carousel_image = 'storage/admin/images/banner/100_'.$banners->carousel_image  @endphp
                                                            @if($banners->carousel_image !='')
                                                                <img src='{{ asset($carousel_image) }}' style="width: 100px; height: 100px;">
                                                            @endif
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
                                                    <div class="col-md-5"> 
                                                        <div class="fallback">
                                                            <input name="calculator_image" type="file">
                                                            <input type="hidden" name="oldcalculator_image" value="{{ $banners->calculator_image }}">
                                                            @php $calculator_image = 'storage/admin/images/banner/100_'.$banners->calculator_image  @endphp
                                                            @if($banners->calculator_image !='')
                                                                <img src='{{ asset($calculator_image) }}' style="width: 100px; height: 100px;">
                                                            @endif
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
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
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