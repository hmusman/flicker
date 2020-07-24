@extends('admin.layouts.master_layout')
@section('title', 'Users')
@section('extra-links')
<!-- DataTables -->
<link href="{{url('public/Green/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('public/Green/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{url('public/Green/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />     

@endsection
@push('extra-css')
@endpush
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
                    <h4 class="page-title mb-1">Starter page</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">Starter</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <div class="float-right d-none d-md-block">
                        <div class="dropdown">
                            <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-settings-outline mr-1"></i> Settings
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
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
							<h4 class="header-title">All Users</h4>
							<table id="datatable" class="mt-3 table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>So#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count = 0; ?>
                                @if(count($users) > 0)
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$count += 1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" type="button" class="btn btn-outline-secondary btn-sm view" data-placement="top" title="View" data-original-title="View"  data-toggle="modal" data-target=".bs-example-modal-center" data-uname="{{$user->name}}" data-email="{{$user->email}}">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                            <a href="#" type="button" class="btn btn-outline-secondary btn-sm edit" data-placement="top" title="" data-original-title="Edit">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                            <a href="#" type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="mdi mdi-trash-can"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr><td colspan="4" align="center">No Record Found</td></tr>
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
    <!-- show user modal -->
    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body user-detail">
                    
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<!-- End Page-content -->


@endsection
@section('extra-scripts')
 <!-- Required datatable js -->
<script src="{{url('public/Green/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('public/Green/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{url('public/Green/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('public/Green/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('public/Green/assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{url('public/Green/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{url('public/Green/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{url('public/Green/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('public/Green/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('public/Green/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{url('public/Green/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('public/Green/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{url('public/Green/assets/js/pages/datatables.init.js')}}"></script>

@endsection
@push('extra-js')
<script>
    // view user detail
    $('.view').on('click',function(){
        $username = $(this).attr('data-uname');
        $useremail = $(this).attr('data-email');
        $('.modal-title').html('User Detail');
        $('.user-detail').html('<h4>'+$username+'</h4><br><p>'+$useremail+'</p>')
    })
     
</script>
@endpush