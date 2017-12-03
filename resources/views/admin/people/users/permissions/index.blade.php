@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Permissions List
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Permissions</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-fw fa-home"></i>
                    Dashboard
                </a>
            </li>
            <li> Permissions</li>
            <li>
                <a href="{{ route('admin.permissions.index') }}">Permissions</a>
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-primary ">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-fw fa-user"></i>
                            Permissions list
                        </h3>

                    </div>
                    <div class="panel-body">
                        <table class="table" id="table">
                            <thead>
                            <tr class="filters">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($permissions as $permission)
                                <tr>
                                    <td>{!! $permission->id !!}</td>
                                    <td>{!! $permission->name !!}</td>
                                    <td>{!! $permission->slug !!}</td>
                                    <td>{!! $permission->description !!}</td>
                                    <td>{!! $permission->created_at->diffForHumans() !!}</td>

                                    <td>


                                        <a href="{{ route('admin.permissions.edit', $permission->id) }}"><i class="fa fa-fw fa-pencil text-warning"></i></a>
                                        <a onclick="deletePermission({{$permission->id}});" href="javascript:void(0)"><i class="fa fa-fw fa-times text-danger"></i></a>
                                        <a href="#"><i class="fa fa-fw fa-eye text-primary"></i></a>


                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}"></script>
    <script type="text/javascript">

        function deletePermission(id) {

            swal({
                    title: "Are you sure to delete?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },

                function(isConfirm){

                    $.ajax({
                        url: 'permissions/' + id,
                        type: "delete",
                        data: { "_token": "{{ csrf_token() }}" , "_method" : "destroy" },

                        success: function(result) {

                            if(result.status){
                                swal("Deleted!", "Your permissions has been deleted.", "success");

                                setTimeout(function(){
                                    location.reload();
                                }, 2000);
                            }

                            else {

                                swal("Not Deleted!", "Error in deleting.", "error");

                            }

                        }
                    });
                })
        }

    </script>

@stop