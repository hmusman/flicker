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
                            <h4 class="page-title mb-1">FlickerFone Accessory</h4>
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

                                    <h4 class="header-title">Accessories</h4>
                                    @if(Session::has('msg'))
                                        <div class="alert alert-success col-md-4">{{ Session::get('msg') }}</div>
                                    @endif

                                    <table id="datatable" class="table table-striped table-responsive">
                                       <thead>
                                           <tr>
                                               <th>#</th>
                                               <th>Category</th>
                                               <th>Brand</th>
                                               <th>Image</th>
                                               <th>Name</th>
                                               <th>Price</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                            @php $i=1 @endphp
                                            @if($accessories->count() > 0)
                                                 @foreach($accessories as $row)
                                                    @php $img = 'storage/admin/images/accessory/thumbnail/100_'.$row->img @endphp
                                                    <tr>
                                                       <td>{{ $i }}</td>
                                                       <td>{{ ucwords($row->category->title) }}</td>
                                                       <td>{{ ucwords($row->brand->name) }}</td>
                                                       <td><img src="{{ asset($img) }}" style="width: 100px; height: 100px;"></td>
                                                       <td>{{ ucfirst($row->name) }}</td>
                                                       <td><p>{{ $row->price }}</p></td>
                                                       <td>
                                                           <table>
                                                               <tr>
                                                                   <td><a href="{{ route('Accessory.edit',$row->id) }}" style="color: #000000;"><i class="fas fa-edit"></i></a></td>
                                                                   <td>
                                                                       <form method="post" action="{{ route('Accessory.destroy',$row->id) }}">
                                                                            @csrf
                                                                            @method('delete')
                                                                           <button type="submit" style="border: none;"><i class="fas fa-trash"></i></button>
                                                                       </form>
                                                                   </td>
                                                               </tr>
                                                            </table>
                                                       </td>
                                                    </tr>
                                                     @php $i++ @endphp
                                                @endforeach
                                            @else
                                                <tr>
                                                   <td colspan="3" class="text-center">No Data Available</td>
                                                   
                                                </tr>
                                            @endif
                                           
                                           
                                        </tbody>
                                    </table>
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