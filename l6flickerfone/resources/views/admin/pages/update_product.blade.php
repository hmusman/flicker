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
                            <h4 class="page-title mb-1">Update Flicker Product</h4>
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
                                        <div class="row" style="margin-bottom: 30px;">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                 <ul class="nav nav-tabs nav-justified" style="width: 100%;">

                                                    <li class="active mytabs"><a href="#detail" data-toggle="tab">Detail Data</a>
                                                    </li>

                                                    <li class="mytabs "><a href="#brief" data-toggle="tab">
                                                        Brief Data</a>
                                                    </li>

                                                </ul>
                                            </div>
                                           
                                        </div>

                                        <div class="tab-content">
                                            
                                            <div class="tab-pane active" id="detail">

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
                                                        <input type="text" name="main_type" value="{{ $product->main_type }}" class="form-control mt-3" placeholder="Enter Type">

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
                                                       <input type="text" name="usb" value="{{ $product->comms_usb }}" class="form-control" placeholder="Enter USB">
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
                                                    <div class="col-md-5"> 
                                                        <div class="fallback">
                                                            <input name="image1" type="file">
                                                            <input type="hidden" name="oldImage1" value="{{ $product->image }}"> 
                                                            @php $image1 = 'storage/admin/images/product/thumbnail/100_'.$product->image  @endphp
                                                            
                                                            <img src='{{ asset($image1) }}' style="width: 100px; height: 100px;">
                                                            @error('image1')
                                                                <p class="text-danger mt-3">{{ $message }}</p>
                                                            @enderror

                                                            @error('invalidImage1')
                                                                <p class="text-danger mt-3">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                       
                                                    </div>

                                                    <div class="col-md-5 row"> 
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                                        <div class="col-md-10"><input type="text" class="form-control" name="" placeholder="Please Enter Title"></div>
                                                    </div>

                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label"> Image 2</label>
                                                    <div class="col-md-5"> 
                                                        <div class="fallback">
                                                            <input name="image2" type="file">
                                                            <input type="hidden" name="oldImage2" value="{{ $product->dimage }}">
                                                             @php $image2 = 'storage/admin/images/product/thumbnail/100_'.$product->dimage  @endphp
                                                            
                                                            <img src='{{ asset($image2) }}' style="width: 100px; height: 100px;">
                                                            @error('image2')
                                                                <p class="text-danger mt-3">{{ $message }}</p>
                                                            @enderror

                                                            @error('invalidImage2')
                                                                <p class="text-danger mt-3">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5 row"> 
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                                        <div class="col-md-10"><input type="text" class="form-control" name="" placeholder="Please Enter Title"></div>
                                                    </div>

                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label"> Image 3</label>
                                                    <div class="col-md-5"> 
                                                        <div class="fallback">
                                                            <input name="image3" type="file">
                                                            <input type="hidden" name="oldImage3" value="{{ $product->dimage1 }}">
                                                             @php $image3 = 'storage/admin/images/product/thumbnail/100_'.$product->dimage1  @endphp
                                                            <img src='{{ asset($image3) }}' style="width: 100px; height: 100px;">
                                                            @error('image3')
                                                                <p class="text-danger mt-3">{{ $message }}</p>
                                                            @enderror

                                                            @error('invalidImage3')
                                                                <p class="text-danger mt-3">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5 row"> 
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                                        <div class="col-md-10"><input type="text" class="form-control" name="" placeholder="Please Enter Title"></div>
                                                    </div>

                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-md-1 col-form-label">Variotion:</label>
                                                    <div class="col-md-11">
                                                        <div class="row">
                                                            <div class="col-md-2"><label>Color</label></div>
                                                            <div class="col-md-2"><label>Storage</label></div>
                                                            <div class="col-md-2"><label>Price</label></div>
                                                        </div>
                                                       
                                                    
                                                        <div class="color_variation">
                                                            @php $i=-1; $colorName = ""; $j=0;@endphp

                                                            @foreach($product->variation_colors as $color)
                                                                @if($colorName != $color->color)
                                                                    @php $i++; $j++; @endphp
                                                                @endif
                                                               
                                                                <div id="" class="row check<?php echo $i;?> <?php if($colorName != $color->color){ echo "color".$i; } else {echo "childColor".$i; }?>" style="margin-top: 5px;">
                                                                    @if($colorName != $color->color)
                                                                         <div class="col-md-2"><input type="text" class="form-control" value="{{ $color->color }}"  name="variation_color[]"></div>
                                                                    @else 
                                                                        <div class="col-md-2"></div>
                                                                    @endif
                                                                   
                                                                    <div class="col-md-2"><input type="text" class="form-control" value="{{ $color->storage }}" name="variation_storage[<?php echo $i;?>][]"></div>
                                                                    <div class="col-md-2"><input type="text" class="form-control" value="{{ $color->price }}" name="variation_price[<?php echo $i;?>][]">
                                                                    </div>
                                                                    @if($colorName != $color->color)
                                                                         <div class="col-md-1"><button type="button" class="btn-primary btn add_more_storage_price"  onclick="add_more_storage_price(<?php echo $i;?>)">More</button></div>
                                                                    
                                                                    @endif
                                                                   
                                                                    <button type="button" class="myRemove btn btn-danger"  style="border:none; height: 40px;margin-left:12px !important;" onclick="myRemove(this);"> x </button>

                                                                    @if($colorName != $color->color)
                                                                        <input type="hidden" name="old_variation_img[]" value="{{ $color->img }}">
                                                                        <div class="col-md-2"><input class="form-control" type="file" name="variation_image[]" title=" " style="color: transparent;border: none;" /></div>
                                                                        <div class="col-md-2">
                                                                            @if($color->img !='')
                                                                                <img src="{{ asset('storage/admin/images/product/thumbnail/100_'.$color->img) }}"/>
                                                                            @endif
                                                                            
                                                                        </div>

                                                                    @else 
                                                                        <div class="col-md-2"></div>
                                                                    @endif
                                                                     @php $colorName = $color->color @endphp
                                                                </div>

                                                            @endforeach
                                                            
                                                        </div>

                                                       <button type="button" data-id="{{ $j }}" id="color_add_more" class="btn btn-primary" style="margin-top: 10px;border: none;">Add More</button>
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

                                                <!-- <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-4 col-form-label">Minor Dent Deduction</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="number" value="{{ $product->minor_dent_scratch }}" name="minor_dent" placeholder="Enter Minor Dent Deduction" id="example-text-input">
                                                        @error('minor_dent')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-4 col-form-label">Major Dent Deduction</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="number" value="{{ $product->major_dent_scratch }}" name="major_dent" placeholder="Enter Major Dent Deduction" id="example-text-input">
                                                        @error('major_dent')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-4 col-form-label">Original Accessories Available Deduction</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="number" value="{{ $product->original_accessories_available }}" name="original_accessories_available" placeholder="Enter Original Accessories Available Deduction" id="example-text-input">
                                                        @error('original_accessories_avaliable')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-4 col-form-label">Screen Is Cracked Deduction</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="number" value="{{ $product->screen_is_cracked }}" name="screen_is_cracked" placeholder="Enter Screen Is Cracked Deduction" id="example-text-input">
                                                        @error('screen_is_cracked')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-4 col-form-label">Device Box Available Deduction</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="number" value="{{ $product->device_box_available }}" name="device_box_available" placeholder="Enter Device Box Available Deduction" id="example-text-input">
                                                        @error('device_box_available')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-4 col-form-label">Device Battery Status Deduction</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="number" value="{{ $product->device_battery_status }}" name="device_battery_status" placeholder="Enter Device Battery Status Deduction" id="example-text-input">
                                                        @error('device_battery_status')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div> -->

                                            </div><!-- detail -->

                                            <div class="tab-pane fade" id="brief">
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">OS</label>
                                                    <div class="col-md-10">
                                                       <input type="text" name="brief_os" value="{{ $product->os }}" class="form-control"  placeholder="Enter OS">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Processor</label>
                                                    <div class="col-md-10 ">
                                                       <input type="text" name="brief_processor" value="{{ $product->processor }}" class="form-control"  placeholder="Enter Processor">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Memory</label>
                                                    <div class="col-md-10">
                                                       <input type="text" name="brief_memory" value="{{ $product->memory }}" class="form-control" placeholder="Enter Memory">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Storage</label>
                                                    <div class="col-md-10">
                                                       <input type="text" name="brief_storage" class="form-control" value="{{ $product->storage }}" placeholder="Enter Storage">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Camera Resolution</label>
                                                    <div class="col-md-10">
                                                       <input type="text" name="brief_camera" class="form-control" value="{{ $product->camera }}" placeholder="Enter Camera Resolution">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Display Size</label>
                                                    <div class="col-md-10">
                                                       <input type="text" name="brief_size" class="form-control" placeholder="Enter Display Size"  value="{{ $product->size }}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Resolution</label>
                                                    <div class="col-md-10">
                                                       <input type="text" name="brief_resolution" class="form-control" value="{{ $product->resolution }}" placeholder="Enter Resolution">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Connectivity</label>
                                                    <div class="col-md-10 ">
                                                       <input type="text" name="brief_connectivity" class="form-control"  value="{{ $product->connectivity }}" placeholder="Enter Connectivity">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Height</label>
                                                    <div class="col-md-10 ">
                                                       <input type="text" name="brief_height" class="form-control" value="{{ $product->height }}" placeholder="Enter Height">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Width</label>
                                                    <div class="col-md-10 ">
                                                       <input type="text" name="brief_width" value="{{ $product->width }}" class="form-control"  placeholder="Enter Width">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Depth</label>
                                                    <div class="col-md-10 ">
                                                       <input type="text" name="brief_depth" value="{{ $product->depth }}" class="form-control" value="{{ old('brief_depth') }}" placeholder="Enter Depth">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Weight</label>
                                                    <div class="col-md-10 ">
                                                       <input type="text" name="brief_weight" class="form-control"  value="{{ $product->brief_weight }}" placeholder="Enter Weight">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Battery</label>
                                                    <div class="col-md-10 ">
                                                       <input type="text" name="brief_battery" class="form-control" value="{{ $product->battery }}" placeholder="Enter Battery">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Other Detail</label>
                                                    <div class="col-md-10 " style="margin-top: 9px;">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" class="other_detail custom-control-input" id="customYes" name="detail_check" value="1" @if($product->detail_check==1) checked @endif>
                                                            <label class="custom-control-label" for="customYes">Yes</label>
                                                        </div>

                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" class="other_detail custom-control-input" id="customNo" name="detail_check" value="0" @if($product->detail_check==0) checked @endif>
                                                            <label class="custom-control-label" for="customNo">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row " id="other_detail_div">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">Other Detail Content</label>
                                                    <div class="col-md-10">
                                                        <textarea id="textarea" class="form-control" rows="5" name="other_detail" placeholder="Please Type Detail...">{{ $product->other_detail }}</textarea>
                                                        @error('other_detail')
                                                            <p class="text-danger mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div><!-- brief -->

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
       $('#other_detail_div').hide();
        if($('#customYes').is(":checked")) { $('#other_detail_div').show();}
        if($('#customNo').is(":checked")) { $('#other_detail_div').hide();}

       $('.other_detail').change(function(){;
            if($('.other_detail').is(":checked"))
            {
                if($(this).val()==1){$('#other_detail_div').show();}
                if($(this).val()==0){$('#other_detail_div').hide();}
            }
            
       });
         
       

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

        var start = '{{ $j }}';       
        $('#color_add_more').click(function(){
            var html = '<div class="row check'+start+' color'+start+'" style="margin-top: 10px;"><div class="col-md-2"><input type="text" class="form-control" name="variation_color[]"></div><div class="col-md-2"><input type="text" class="form-control" name="variation_storage['+start+'][]"></div><div class="col-md-2"><input type="text" class="form-control" name="variation_price['+start+'][]"></div> <div class="col-md-1"><button type="button" class="add_more_storage_price btn btn-primary" onclick="add_more_storage_price('+start+')">More</button></div> <button type="button" class="myRemove btn btn-danger"   style="border:none; margin-left:10px; height:40px;" onclick="myRemove(this);"> x </button><div class="col-md-3"><input type="file" name="variation_image[]"  title=" " style="color: transparent;border: none;" /></div> </div>';
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
        var html = '<div class="row" style="margin-top: 10px;"><div class="col-md-2"></div><div class="col-md-2"><input type="text" class="form-control" name="variation_storage['+id+'][]"></div><div class="col-md-2"><input type="text" class="form-control" name="variation_price['+id+'][]"></div> <button type="button" class="myRemove btn btn-danger"  style="border:none; margin-left:12px;" onclick="myRemove(this);"> x </button> </div>';
        if($('.check'+id).hasClass('childColor'+id))
        {
            $('.childColor'+id).after(html);
        }
        else
        {
             $('.color'+id).after(html);
        }
       
    }

    function myRemove(elem)
    {
        $(elem).parent('div').remove();
    }
</script>

@endsection