@extends('admin/layouts/default')

@section('pageTitle', 'Edit Role')

@section('header_styles')
    {{--<link href="{{ asset('assets/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>--}}
@stop

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-pencil-square-o"></i>Edit Role</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="icon_flowchart_alt"></i><a href="{{route('people.roles.index')}}">Role Management</a></li>
                        <li><i class="fa fa-pencil-square-o"></i>Edit Role</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <div class="panel-body bio-graph-info">
                            <h1>Edit Role</h1>
                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{route('people.roles.update')}}" enctype="multipart/form-data">
                                <input type="hidden" name="role_id" value="{{@$role->id}}">
                                @include('admin.people.users.roles.form')
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="button" class="btn btn-danger">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
@stop

@section('footer_scripts')

    <link href="{{asset('assets/select2-4.0.4/select2.min.css') }}" rel="stylesheet"/>
    <script src="{{asset('assets/select2-4.0.4/select2.min.js')}}"></script>

    <script>

        $(function () {

            $('#support_staff').select2({
                placeholder: "Select Permissions",
                width: '100%',
                allowClear: true
            });
        });
    </script>
@stop

