@extends('admin.layouts.master_layout')
@section('title', 'Admins')
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
                    <h4 class="page-title mb-1">Admin User</h4>
                   
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
							<h4 class="header-title">Admin</h4>
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
                                <?php $count = 1; ?>
                                @if(count($admins) > 0)
                                @foreach($admins as $admin)
                                <tr>
                                    <td>{{$count}}</td>
                                    <td>{{$admin->name}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>
                                        <table>
                                            <tr>
                                               <td>
                                                    <a href="" style="color: #000000;" data-toggle="modal" data-target="#modal{{$count}}" data-placement="top" title="" data-original-title="Edit" data-modal="{{$count}}"><i class="fas fa-edit"></i></a>
                                                </td>
                                                {{--@if(Session::get('admintype')=='superadmin')
                                                 <td>
                                                     <form method="post" action="{{ route('Category.destroy',$category->id) }}">
                                                          @csrf
                                                          @method('delete')
                                                         <button type="submit" style="border: none;"><i class="fas fa-trash"></i></button>
                                                     </form>
                                                 </td>
                                                @endif--}}
                                            </tr>
                                        </table>


                                        {{--<div class="btn-group" role="group">
                                        
                                            <a href="" type="button" class="btn btn-outline-secondary btn-sm edit" data-toggle="modal" data-target="#modal{{$count}}" data-placement="top" title="" data-original-title="Edit" data-modal="{{$count}}">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                            @if($admin->type=='admin' && Session::get('admindata')->type=='superadmin')
                                            <a href="" type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="mdi mdi-trash-can"></i>
                                            </a>
                                            @endif
                                        </div>--}}
                                        <!-- show user modal -->
                                        <div class="modal fade bs-example-modal-center" id="modal{{$count}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0">Update User</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="form{{$admin->id}}" action="{{route('admin.updateadmin')}}" method="post" accept-charset="utf-8">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$admin->id}}">
                                                            <div class="form-group">
                                                                <label>User Name</label>
                                                                <input type="text" class="form-control username{{$admin->id}}" name="username" value="{{$admin->name}}" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>User Email</label>
                                                                <input type="text" class="form-control useremail{{$admin->id}}" name="useremail" value="{{$admin->email}}" />
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="button" class="btn btn-success update" name="submit" value="Submit" data-adminID="{{$admin->id}}" style="float: right;">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    </td>
                                </tr>
                                <?php $count += 1; ?>
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
    <div class="modal fade bs-example-modal-center" id="detail" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
<!-- <script>
    // view user detail
    $('.view').on('click',function(){
        $username = $(this).attr('data-uname');
        $useremail = $(this).attr('data-email');
        $('.modal-title').html('User Detail');
        $('.user-detail').html('<h4>'+$username+'</h4><br><p>'+$useremail+'</p>')
    })
     
    $('.update').on('click',function(){
        var id = $(this).attr('data-adminID');
        var username = $('.username'+id).val();
        var useremail = $('.useremail'+id).val();
        // alert('#form'+id);
        if((typeof(username) == 'undefined' || username == '') && (typeof(useremail) == 'undefined' || useremail == ''))
        {
            alertify.error('Name and Email field is required!');
        }
        else if(typeof(username) == 'undefined' || username == '')
        {
            alertify.error('Name field is required!');
        }
        else if(typeof(useremail) == 'undefined' || useremail == '')
        {
            alertify.error('Email field is required!');
        }else{
            $.ajax({
                url: "{{route('admin.updateadmin')}}",
                type: "post",
                data: {"_token": "{{ csrf_token() }}", "id":id, "username": username, "useremail": useremail},
                success: function(responce){
                    // alert('success');
                    $('.bs-example-modal-center').modal('hide');
                    alertify.success('User data updated successfully!');
                    setTimeout(function(){
                        window.location.reload();    
                    }, 2000);
                },
                error:function(responce){
                    // console.log(responce);
                    // alert('error');
                    alertify.success('Something wents wrong, Please try again later!')
                }
            })
        }
    })
</script> -->
@endpush