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
                            <h4 class="page-title mb-1">Add FlickerFone Product calculator</h4>
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

                                    <h4 class="header-title">Add New Product</h4>
                                    @if(Session::has('warningMsg'))
                                        <div class="alert alert-warning col-md-4">{{ Session::get('warningMsg') }}</div>
                                    @endif
                                    
                                    <form action="{{ route('PriceCalculatorProduct.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <style type="text/css">
                                             .nav-tabs li
                                            {
                                                width: 49%;
                                                background: #2fa97c;
                                                padding-top: 10px;
                                                padding-bottom: 10px;
                                                text-align: center;
                                                margin-right: 1%;
                                                border-radius: 19px 19px;
                                            }
                                            .nav-tabs li a{ color: #fff; }
                                            .nav-tabs .active{ background: #2a0430; }
                                        </style>
                                        
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">Category</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" name="category" required>
                                                            <option value="" >Select Category</option>
                                                            @foreach($categories as $category)
                                                                 <option <?php if(old('category')==$category->id){ echo "selected=''"; } ?>  value="{{ $category->id }}">{{ ucfirst($category->title) }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('category')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">Brand</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" name="brand" required>
                                                            <option value="">Select Brand</option>
                                                            @foreach($brands as $brand)
                                                                 <option <?php if(old('brand')==$brand->id){ echo "selected=''"; } ?>  value="{{ $brand->id }}">{{ ucfirst($brand->name) }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('brand')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                               <!--  <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">Code</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" value="{{ old('code') }}" name="code" placeholder="Enter Code" id="example-text-input">
                                                        @error('code')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div> -->

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" value="{{ old('name') }}" name="name" placeholder="Enter Name" id="example-text-input" required="">
                                                        @error('name')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label"> Image 1</label>
                                                    <div class="col-md-3"> 
                                                        <div class="fallback">
                                                            <input name="image1" type="file" required="">
                                                            @error('image1')
                                                                <p class="text-danger mt-3" >{{ $message }}</p>
                                                            @enderror

                                                            @error('invalidImage1')
                                                                <p class="text-danger mt-3">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                        
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Variation</label>
                                                    <div class="col-md-10">
                                                        <div class="row">
                                                            <div class="col-md-3"><label>Color</label></div>
                                                            <div class="col-md-3"><label>Storage</label></div>
                                                            <div class="col-md-3"><label>Price</label></div>
                                                        </div>
                                                       
                                                    
                                                        <div class="color_variation">
                                                            <div class="row color0">
                                                                <div class="col-md-3"><input type="text" class="form-control"  name="variation_color[]" required=""></div>
                                                                <div class="col-md-3"><input type="text" class="form-control" name="variation_storage[0][]" required=""></div>
                                                                <div class="col-md-3"><input type="text" class="form-control" name="variation_price[0][]" required=""></div>
                                                                <div class="col-md-1"><button type="button" class="btn-primary btn add_more_storage_price"  onclick="add_more_storage_price(0)">More</button></div>
                                                            </div>
                                                        </div>

                                                       <button type="button" id="color_add_more" class="btn btn-primary" style="margin-top: 10px;border: none;">Add More</button>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-4 col-form-label">Minor Dent Deduction</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="number" value="{{ old('minor_dent') }}" name="minor_dent" placeholder="Enter Minor Dent Deduction" id="example-text-input" required="">
                                                        @error('minor_dent')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-4 col-form-label">Major Dent Deduction</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="number" value="{{ old('major_dent') }}" name="major_dent" placeholder="Enter Major Dent Deduction" id="example-text-input" required="">
                                                        @error('major_dent')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-4 col-form-label">Original Accessories Available Deduction</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="number" value="{{ old('original_accessories_avaliable') }}" name="original_accessories_available" placeholder="Enter Original Accessories Available Deduction" id="example-text-input" required="">
                                                        @error('original_accessories_avaliable')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-4 col-form-label">Screen Is Cracked Deduction</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="number" value="{{ old('screen_is_cracked') }}" name="screen_is_cracked" placeholder="Enter Screen Is Cracked Deduction" id="example-text-input" required="">
                                                        @error('screen_is_cracked')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-4 col-form-label">Device Box Available Deduction</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="number" value="{{ old('device_box_available') }}" name="device_box_available" placeholder="Enter Device Box Available Deduction" id="example-text-input" required="">
                                                        @error('device_box_available')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-4 col-form-label">Device Battery Status Deduction</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="number" value="{{ old('device_battery_status') }}" name="device_battery_status" placeholder="Enter Device Battery Status Deduction" id="example-text-input" required="">
                                                        @error('device_battery_status')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                        
                                        <div class="card">
                                            <div class="card-body row">
                                                <div class="text-center mt-4">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light" id="submit">Save</button>
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
<<!-- script src="{{url('public/Green/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<script src="{{url('public/Green/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>  -->

<!-- Jq vector map -->
<!-- <script src="{{url('public/Green/assets/libs/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('public/Green/assets/libs/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{url('public/Green/assets/js/pages/dashboard.init.js')}}"></script> -->
<script type="text/javascript">
    $(document).ready(function(){
       // $('.launched').hide();
       // $('.body').hide();
       // $('.display').hide();
       // $('.platform').hide();
       // $('.memory').hide();
       // $('.main_camera').hide();
       // $('.selfie_camera').hide();
       // $('.sound').hide();
       // $('.comms').hide();
       // $('.feature').hide();
       // $('.battery').hide();
       $('#launched').click(function(){
            if($('.launched').is(":hidden")){$('.launched').show();}else{$('.launched').hide();}
       });

       $('#body').click(function(){
            if($('.body').is(":hidden")){$('.body').show();}else{$('.body').hide();}
       });

       $('#display').click(function(){
            if($('.display').is(":hidden")){$('.display').show();}else{$('.display').hide();}
       });

       $('#platform').click(function(){
            if($('.platform').is(":hidden")){$('.platform').show();}else{$('.platform').hide();}
       });

       $('#memory').click(function(){
            if($('.memory').is(":hidden")){$('.memory').show();}else{$('.memory').hide();}
       });

       $('#main_camera').click(function(){
            if($('.main_camera').is(":hidden")){$('.main_camera').show();}else{$('.main_camera').hide();}
       });

       $('#selfie_camera').click(function(){
            if($('.selfie_camera').is(":hidden")){$('.selfie_camera').show();}else{$('.selfie_camera').hide();}
       });

       $('#sound').click(function(){
            if($('.sound').is(":hidden")){$('.sound').show();}else{$('.sound').hide();}
       });

       $('#comms').click(function(){
            if($('.comms').is(":hidden")){$('.comms').show();}else{$('.comms').hide();}
       });

       $('#feature').click(function(){
            if($('.feature').is(":hidden")){$('.feature').show();}else{$('.feature').hide();}
       });

       $('#battery').click(function(){
            if($('.battery').is(":hidden")){$('.battery').show();}else{$('.battery').hide();}
       });

        var start = 1;       
        $('#color_add_more').click(function(){
            var html = '<div class="row color'+start+'" style="margin-top: 10px;"><div class="col-md-3"><input type="text" class="form-control" name="variation_color[]"></div><div class="col-md-3"><input type="text" class="form-control" name="variation_storage['+start+'][]"></div><div class="col-md-3"><input type="text" class="form-control" name="variation_price['+start+'][]"></div> <div class="col-md-1"><button type="button" class="add_more_storage_price btn btn-primary" onclick="add_more_storage_price('+start+')" >More</button></div> <button type="button" class="myRemove btn btn-danger"  style="border:none; margin-left:10px;" onclick="myRemove(this);"> x </button> </div>';
            $('.color_variation').append(html);
            start++;
       });

       //  $('.add_more_storage_price').click(function(){
       //      var id = $(this).data('id');
       //      var html = '<div class="row" style="margin-top: 10px;"><div class="col-md-3"></div><div class="col-md-3"><input type="text" class="form-control" name="variation_storage['+id+'][]"></div><div class="col-md-3"><input type="text" class="form-control" name="variation_price['+id+'][]"></div> <button type="button" class="myRemove btn btn-danger"  style="border:none;" onclick="myRemove(this);"> x </button> </div>';
       //      $('.color_variation').append(html);
       // });

       $('#storage_add_more').click(function(){
            var html = '<div class="row" style="margin-top: 10px;"><div class="col-md-3"><input type="text" class="form-control" name="storage_variation[]"></div><div class="col-md-3"><input type="text" class="form-control" name="storage_variation_price[]"></div> <button type="button" class="myRemove btn btn-danger"  style="border:none;"> x </button> </div>';
            $('.storage_variation').append(html);
       });

    });

    function add_more_storage_price(id)
    {
        var html = '<div class="row" style="margin-top: 10px;"><div class="col-md-3"></div><div class="col-md-3"><input type="text" class="form-control" name="variation_storage['+id+'][]"></div><div class="col-md-3"><input type="text" class="form-control" name="variation_price['+id+'][]"></div> <button type="button" class="myRemove btn btn-danger"  style="border:none; margin-left:10px;" onclick="myRemove(this);"> x </button> </div>';
        $('.color'+id).after(html);
    }

    function myRemove(elem)
    {
        $(elem).parent('div').remove();
        start--;
    }
</script>
<script>
   
    $('#submit').onclick(function()){

            alert('slect value........');
        
    }
</script>
@endsection