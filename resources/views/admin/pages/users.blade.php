@extends('admin.layouts.master_layout')
@section('title', 'Users')
@section('extra-links')
<!-- DataTables -->
<link href="{{ asset('Green/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('Green/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('Green/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />     

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
                    <h4 class="page-title mb-1">FlickerFone Users</h4>
                </div>
                <div class="col-md-4">
                    
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
                            @if(Session::has('msg'))
                                <div class="alert alert-success col-md-4">{{ Session::get('msg') }}</div>
                            @endif
							<table id="datatable" class="mt-3 table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Type</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Company</th>
                                        <th>Shop</th>
                                        <th>City</th>
                                        <th>Status</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $count = 0; ?>
                                    @if(count($users) > 0)
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$count += 1}}</td>
                                        <td>{{ $user->role_name }}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->company}}</td>
                                        <td>{{$user->shop}}</td>
                                        <td>{{$user->city}}</td>
                                        <td>
                                            @if($user->status!=0)
                                                <button type="button" class="btn btn-success user_active" data-id="{{ $user->id }}">Active</button>
                                                 <!-- <a href="{{ route('User.Block',$user->id) }}" class="btn btn-success">Active</a> -->
                                            @else
                                                <button type="button" class="btn btn-danger user_block" data-id="{{ $user->id }}">Blocked</button>
                                                 <!-- <a href="{{ route('User.Active',$user->id) }}" class="btn btn-danger">Blocked</a> -->
                                            @endif
                                        </td>
                                        <td>
                                            <table>
                                               <tr>
                                                   <td><a href="{{ route('User.edit',$user->id) }}" style="color: #000000;"><i class="fas fa-edit"></i></a></td>
                                                    @if(Session::get('admintype')=='superadmin')
                                                   <td>
                                                       <form id="{{ $user->id }}" method="post" action="{{ route('User.destroy',$user->id) }}">
                                                            @csrf
                                                            @method('delete')
                                                       </form>
                                                       <button type="button" onclick="user_delete('{{ $user->id }}');" class="user_delete" data-id="{{ $user->id }}" style="border: none;"><i class="fas fa-trash"></i></button>
                                                   </td>
                                                   @endif
                                               </tr>
                                            </table>
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
<script src="{{ asset('Green/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('Green/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{ asset('Green/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('Green/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('Green/assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('Green/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{ asset('Green/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{ asset('Green/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('Green/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('Green/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{ asset('Green/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('Green/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{ asset('Green/assets/js/pages/datatables.init.js')}}"></script>

@endsection
@push('extra-js')
<script>

   
    // view user detail
    $('.view').on('click',function(){
        $username = $(this).attr('data-uname');
        $useremail = $(this).attr('data-email');
        $('.modal-title').html('User Detail');
        $('.user-detail').html('<h4>'+$username+'</h4><br><p>'+$useremail+'</p>')
    });

    $('.active').click(function(){
        var id = $(this).data('id');
        // alert(id);
        $.ajax({
            url:"{{route('User.Active')}}",
            type:"get",
            data:{'id':id},
            success:function(data){
                alert(data);
            },
            error:function(e){
                alert('error');
            }
        })
    });

     $('.blocked').click(function(){
        var id = $(this).data('id');
        $.ajax({
            url:"",
            type:"GET",
            data:{ id:id },
            success:function(data)
            {
                // location.reload();
            }
        });
    });
     
</script>
@endpush