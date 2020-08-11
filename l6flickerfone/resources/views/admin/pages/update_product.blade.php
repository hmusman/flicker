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
                            <h4 class="page-title mb-1">Update FlickerFone Product</h4>
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

                                    <h4 class="header-title">Update Product</h4>
                                    <form action="{{ route('Product.update',$product->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Category</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="category">
                                                    <option selected="" disabled="">Select Category</option>
                                                    @foreach($categories as $category)
                                                         <option <?php if($product->category_id==$category->id){ echo "selected=''"; } ?>  value="{{ $category->id }}">{{ ucfirst($category->title) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Brand</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="brand">
                                                    <option selected="" disabled="">Select Brand</option>
                                                    @foreach($brands as $brand)
                                                         <option <?php if($product->brand_id==$brand->id){ echo "selected=''"; } ?>  value="{{ $brand->id }}">{{ ucfirst($brand->name) }}</option>
                                                    @endforeach
                                                </select>
                                                @error('brand')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Code</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="{{ $product->code }}" name="code" placeholder="Enter Code" id="example-text-input">
                                                @error('code')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="{{ str_replace(' ','_',$product->name) }}" name="name" placeholder="Enter Name" id="example-text-input">
                                                @error('name')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Color</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="{{ $product->color }}" name="color" placeholder="Enter Color" id="example-text-input">
                                                @error('color')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Price</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number" value="{{ $product->price }}" name="price" placeholder="Enter Price" id="example-text-input">
                                                @error('price')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Quantity</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number" value="{{ $product->quantity }}" name="quantity" placeholder="Enter Quantity" id="example-text-input">
                                                @error('quantity')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Detail</label>
                                            <div class="col-md-10">
                                                <textarea id="textarea" class="form-control" rows="5" name="description" placeholder="Please Type Detail...">{{ $product->description }}</textarea>
                                                @error('description')
                                                    <p class="text-danger mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label id="launched" class="col-md-2 col-form-label" style="cursor: pointer">Launched</label>
                                            <div class="col-md-10 launched">
                                               <label>Announced</label>
                                               <input type="date" name="announced" value="{{ $product->launch_announced }}" class="form-control">

                                               <label class="mt-2">Status</label>
                                               <input type="text" name="status" class="form-control" value="{{ $product->launch_status }}" placeholder="Enter Status">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label id="body" class="col-md-2 col-form-label" style="cursor: pointer">Body</label>
                                            <div class="col-md-10 body">
                                               <label>Dimensions</label>
                                               <input type="text" name="dimension" value="{{ $product->body_dimensions }}" class="form-control" placeholder="5.44 x 2.64 x 0.27">

                                               <label class="mt-2">Weight</label>
                                               <input type="text" name="weight" value="{{ $product->body_weight }}" class="form-control" placeholder="Enter Weight In Gram">

                                               <label class="mt-2">Build</label>
                                               <input type="text" name="build" value="{{ $product->body_build }}" class="form-control" placeholder="Enter Build Type">

                                               <label class="mt-2">SIM</label>
                                               <input type="text" name="sim" value="{{ $product->body_sim }}" class="form-control" placeholder="Enter Sim Size">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label id="display" class="col-md-2 col-form-label" style="cursor: pointer">Display</label>
                                            <div class="col-md-10 display">
                                               <label>Type</label>
                                               <input type="text" name="type" value="{{ $product->display_type }}" class="form-control" placeholder="Enter Display Type">

                                               <label class="mt-2">Size</label>
                                               <input type="text" name="size" value="{{ $product->display_size }}" class="form-control" placeholder="Enter Display Size">

                                               <label class="mt-2">Resolution</label>
                                               <input type="text" name="resolution" value="{{ $product->display_resolution }}" class="form-control" placeholder="Enter Display Resolution">
                                               <label class="mt-2">Protection</label>
                                               <input type="text" name="protection" value="{{$product->display_protection }}" class="form-control" placeholder="Enter Display Protection">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label id="platform" class="col-md-2 col-form-label" style="cursor: pointer">Platform</label>
                                            <div class="col-md-10 platform">
                                               <label>OS</label>
                                               <input type="text" name="os" value="{{ $product->platform_os }}" class="form-control" placeholder="Enter OS">

                                               <label class="mt-2">Chipset</label>
                                               <input type="text" name="chipset" value="{{ $product->platform_chipset }}" class="form-control" placeholder="Enter Chipset">

                                               <label  class="mt-2">CPU</label>
                                               <input type="text" name="cpu" value="{{$product->platform_cpu }}" class="form-control" placeholder="Enter CPU">

                                               <label class="mt-2">GPU</label>
                                               <input type="text" name="gpu" value="{{ $product->platform_gpu }}" class="form-control" placeholder="Enter GPU">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label id="memory" class="col-md-2 col-form-label" style="cursor: pointer">Memory</label>
                                            <div class="col-md-10 memory">
                                                <label>Card Slot</label>
                                                 &nbsp; &nbsp;No &nbsp;<input type="radio" name="card_slot" <?php if($product->memory_card_slot=='no'){ echo "checked"; }?>  value="no">
                                                 &nbsp;Yes&nbsp;<input type="radio" name="card_slot" <?php if($product->memory_card_slot=='yes'){ echo "checked"; }?> value="yes">
                                                <br>
                                               <label class="mt-2">Ram</label>
                                               <input type="text" name="ram" value="{{ $product->memory_ram }}" class="form-control" placeholder="Enter Ram">

                                               <label class="mt-2">Storage</label>
                                               <input type="text" name="storage" value="{{ $product->memory_storage }}" class="form-control" placeholder="Enter Storage">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label id="main_camera" class="col-md-2 col-form-label" style="cursor: pointer">Main Camera</label>
                                            <div class="col-md-10 main_camera">

                                                <label>Type</label>
                                                <select name="main_type" class="form-control">
                                                    <option disabled="" selected="" > Select Type </option>
                                                    <option <?php if($product->main_type=='single'){ echo "selected=''"; }?> value="single">Single</option>
                                                    <option <?php if($product->main_type=='dual'){ echo "selected=''"; }?> value="dual">Dual</option>
                                                    <option <?php if($product->main_type=='triple'){ echo "selected=''"; }?> value="triple">Triple</option>
                                                </select>
                                                <input type="text" name="main_type_value" value="{{ $product->main_type_value }}" class="form-control mt-3" placeholder="Enter Type Value">

                                               <label class="mt-2">Features</label>
                                               <input type="text" name="main_feature" value="{{ $product->main_feature }}" class="form-control" placeholder="Enter Feature">

                                               <label class="mt-2">Video</label>
                                               <input type="text" name="main_video" value="{{ $product->main_video }}" class="form-control" placeholder="Enter Video">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label id="selfie_camera" class="col-md-2 col-form-label" style="cursor: pointer">Selfie Camer</label>
                                            <div class="col-md-10 selfie_camera">
                                               <label>Single</label>
                                               <input type="text" name="selfie_single" value="{{ $product->selfie_single }}" class="form-control" placeholder="Enter Single">

                                               <label class="mt-2">Features</label>
                                               <input type="text" name="selfie_feature" value="{{ $product->selfie_feature }}" class="form-control" placeholder="Enter Feature">

                                               <label class="mt-2">Video</label>
                                               <input type="text" name="selfie_video" value="{{ $product->selfie_video }}" class="form-control" placeholder="Enter Video">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label id="sound" class="col-md-2 col-form-label" style="cursor: pointer">Sound</label>
                                            <div class="col-md-10 sound">
                                               <label>Loudspeaker</label>
                                               &nbsp;&nbsp;No&nbsp;<input type="radio" <?php if($product->sound_loudspeaker=='no'){ echo "checked"; }?> name="loudspeaker" value="no">
                                                &nbsp;Yes&nbsp;<input type="radio" name="loudspeaker" <?php if($product->sound_loudspeaker=='yes'){ echo "checked"; }?> value="yes">
                                                <br>
                                               <label class="mt-2">3.5 mm Jack</label>
                                                &nbsp; &nbsp;No &nbsp;<input type="radio" name="jack" <?php if($product->sound_jack=='no'){ echo "checked"; }?> value="no">
                                                 &nbsp;Yes&nbsp;<input type="radio" name="jack" <?php if($product->sound_jack=='yes'){ echo "checked"; }?> value="yes">
                                                <br>
                                               <labe class="mt-2" class="mt-2"l>Mic</label>
                                               <input type="text" name="mic" value="{{ $product->sound_mic }}" class="form-control" placeholder="Enter MIC">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label id="comms" class="col-md-2 col-form-label" style="cursor: pointer">Comms</label>
                                            <div class="col-md-10 comms">
                                               <label>WLAN</label>
                                               <input type="text" name="wlan" value="{{ $product->comms_wlan }}" class="form-control" placeholder="Enter WLAN">

                                               <label class="mt-2">Bluetooth</label>
                                               <input type="text" name="bluetooth" value="{{ $product->comms_bluetooth }}" class="form-control" placeholder="Enter Bluetooth">

                                                <label class="mt-2">GPS</label>
                                               <input type="text" name="gps" value="{{ $product->comms_gps }}" class="form-control" placeholder="Enter GPS">

                                               <label class="mt-2">NFC</label>
                                               <input type="text" name="nfc" value="{{ $product->comms_nfc }}" class="form-control" placeholder="Enter NFC">

                                               <label class="mt-2">Radio</label>
                                               &nbsp; &nbsp;No &nbsp;<input type="radio" name="radio" <?php if($product->comms_radio=='no'){ echo "checked"; }?> value="no">
                                                 &nbsp;Yes&nbsp;<input type="radio" name="radio" value="yes" <?php if($product->comms_radio=='yes'){ echo "checked"; }?>>
                                                 <br>
                                               <label>USB</label>
                                               <input type="text" name="usb" value="{{ old('usb') }}" class="form-control" placeholder="Enter USB">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label id="feature" class="col-md-2 col-form-label" style="cursor: pointer">Feature</label>
                                            <div class="col-md-10 feature">
                                               <label>Sensor</label>
                                               <input type="text" name="sensor" value="{{ $product->feature_sensor }}" class="form-control" placeholder="Enter Sensor">

                                             
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label id="battery" class="col-md-2 col-form-label" style="cursor: pointer">Battery</label>
                                            <div class="col-md-10 battery">
                                               <label>Type</label>
                                               <input type="text" name="battery_type" value="{{ $product->battery_status }}" class="form-control" placeholder="Enter Type">

                                               <label class="mt-2">Talk Time</label>
                                               <input type="text" name="talk_time" value="{{ $product->battery_talk_time }}" class="form-control" placeholder="Enter Talk Time ">

                                               <label class="mt-2">Music</label>
                                               <input type="text" name="music" value="{{ $product->battery_music }}" class="form-control" placeholder="Enter Music Time">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label"> Image 1</label>
                                            <div class="col-md-10"> 
                                                <div class="fallback">
                                                    <input name="image1" type="file">
                                                    <input type="hidden" name="oldImage1" value="{{ $product->image }}">
                                                    @php $image1 = 'storage/'.$product->image  @endphp
                                                    <img src='{{ asset($image1) }}' style="width: 100px; height: 100px;">
                                                    @error('image1')
                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                    @enderror

                                                    @error('invalidImage1')
                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                               
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label"> Image 2</label>
                                            <div class="col-md-10"> 
                                                <div class="fallback">
                                                    <input name="image2" type="file">
                                                    <input type="hidden" name="oldImage2" value="{{ $product->dimage }}">
                                                    @php $image2 = 'storage/'.$product->dimage  @endphp
                                                    <img src='{{ asset($image2) }}' style="width: 100px; height: 100px;">
                                                    @error('image2')
                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                    @enderror

                                                    @error('invalidImage2')
                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label"> Image 3</label>
                                            <div class="col-md-10"> 
                                                <div class="fallback">
                                                    <input name="image3" type="file">
                                                    <input type="hidden" name="oldImage3" value="{{ $product->dimage1 }}">
                                                    @php $image3 = 'storage/'.$product->dimage1  @endphp
                                                    <img src='{{ asset($image3) }}' style="width: 100px; height: 100px;">
                                                    @error('image3')
                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                    @enderror

                                                    @error('invalidImage3')
                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Video</label>
                                            <div class="col-md-10"> 
                                                <div class="fallback">
                                                    <input name="video" type="file">
                                                    @error('image3')
                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                    @enderror

                                                    @error('invalidImage3')
                                                        <p class="text-danger mt-3">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label id="feature" class="col-md-2 col-form-label" style="cursor: pointer">Video Link</label>
                                            <div class="col-md-10 feature">
                                               <label>Video</label>
                                               <input type="text" name="video_link" value="{{ $product->video_link }}" class="form-control" placeholder="Enter Video Link">
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

<!-- Jq vector map -->
<script src="{{url('public/Green/assets/libs/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('public/Green/assets/libs/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{url('public/Green/assets/js/pages/dashboard.init.js')}}"></script>
@endsection