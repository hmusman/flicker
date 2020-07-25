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
                                            <label for="example-text-input" class="col-md-2 col-form-label">Category</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="brand">
                                                    <option selected="" disabled="">Select Brand</option>
                                                    @foreach($brands as $brand)
                                                         <option <?php if(old('brand')==$brand->id){ echo "selected=''"; } ?>  value="{{ $brand->id }}">{{ ucfirst($brand->name) }}</option>
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