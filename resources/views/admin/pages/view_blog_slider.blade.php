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
                            <h4 class="page-title mb-1">FlickerFone IndexBuyNewSell Section</h4>
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

                                    <h4 class="header-title">IndexBuyNewSell Section</h4>
                                    @if(Session::has('msg'))
                                        <div class="alert alert-success col-md-4">{{ Session::get('msg') }}</div>
                                    @endif
                                    <div class="row" style="margin-bottom: 15px;">
                                          <div class="col-md-8"></div>
                                          <div class="col-md-2">
                                               <button type="button" style="width: 100%; float: right;" class="btn-primary btn active_btn">Active</button>
                                          </div>
                                         
                                          <div class="col-md-2">
                                              <button type="button" style="width: 100%; float: right;" class="btn-primary btn inactive_btn">Inactive</button>
                                          </div>
                                        </div>
                                    <table class="table table-striped">
                                       <thead>
                                           <tr>
                                              <th></th>
                                               <th>#</th>
                                               <th>Image</th>
                                               <th>Detail</th>
                                               <th>Status</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       <form class="changeStatus" method="post" action="">
                                          @csrf
                                          <tbody>
                                            @php $i=1 @endphp
                                            @if($data->count() > 0)
                                                 @foreach($data as $row)
                                                    @php $img = 'storage/'.$row->img @endphp
                                                    <tr>
                                                      <td>
                                                        <div class="custom-control custom-checkbox" data-id="{{ $row->id }}">
                                                                    <input type="checkbox" class="custom-control-input changeStatusBox" id="customCheck{{ $row->id }}" name="checkboxes[]" value="{{ $row->id }}">
                                                                    <label class="custom-control-label" for="customCheck{{ $row->id }}"></label>
                                                                </div>
                                                      </td>
                                                       <td>{{ $i }}</td>
                                                       <td><img src="{{ asset($img) }}" style="width: 100px; height: 100px;"></td>
                                                       <td><p>{{ $row->detail }}</p></td>
                                                       <td>{{ $row->status==1 ? 'Active':'Inactive' }}</td>
                                                       <td>
                                                           <a href="{{ route('BlogSlider.edit',$row->id) }}" style="color: #000000;"><i class="fas fa-edit"></i></a>
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
                                       </form>
                                       
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
<script type="text/javascript">
        $(document).ready(function(){

            $('.active_btn').click(function(){
                if($('.changeStatusBox:checkbox').is(":checked"))
                {
                    $('.changeStatus').attr('action',"{{ route('BlogActive') }}");
                    $('.changeStatus').submit();
                }
            });

            $('.inactive_btn').click(function(){
                if($('.changeStatusBox:checkbox').is(":checked"))
                {
                    $('.changeStatus').attr('action',"{{ route('BlogInActive') }}");
                    $('.changeStatus').submit();
                }
            });


        });
    </script>
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js')}}"></script> 

<!-- Jq vector map -->
<script src="{{ asset('assets/libs/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('assets/libs/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{ asset('assets/js/pages/dashboard.init.js')}}"></script>

@endsection