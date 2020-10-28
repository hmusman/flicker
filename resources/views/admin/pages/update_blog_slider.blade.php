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
                            <h4 class="page-title mb-1">Update FlickerFone BlogSlider</h4>
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
                            <form action="{{ route('BlogSlider.update',$data->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Update BlogSlider<h4>
                                   

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Detail</label>
                                            <div class="col-md-10">
                                                <textarea id="textarea" class="form-control" rows="5" name="detail" placeholder="Please Type Detail...">{{ $data->detail }}</textarea>
                                                @error('detail')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Image</label>
                                            <div class="col-md-5"> 
                                                <div class="fallback">
                                                    <input name="img" type="file">
                                                    <input type="hidden" name="oldImg" value="{{ $data->img }}">
                                                    @php $image3 = 'storage/'.$data->img  @endphp
                                                    <img src='{{ asset($image3) }}' style="width: 100px; height: 100px;">
                                                    @error('img')
                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                    @enderror

                                                    @error('invalidImg')
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