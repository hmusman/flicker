
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
                            <h4 class="page-title mb-1">Update FlickerFone Page</h4>
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
                   
                      
                      
                      
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title">Add Update Page</h4>
                                    @if(Session::has('msg'))
                                        <div class="alert alert-warning col-md-4">{{ Session::get('msg') }}</div>
                                    @endif
                                    
                                    <form action="{{ route('Page.update',$page->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="{{ $page->name }}" name="name" placeholder="Enter Name" id="example-text-input">
                                                @error('name')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body row">
                                                <div class="text-center mt-4">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
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
<!-- ckeditor -->
<script src="{{asset('Green/assets/libs/ckeditor4/ckeditor.js')}}"></script>

<!-- Jq vector map -->
<script src="{{url('public/Green/assets/libs/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('public/Green/assets/libs/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{url('public/Green/assets/js/pages/dashboard.init.js')}}"></script>
<script type="text/javascript">
    CKEDITOR.replace('content');
</script>
@endsection