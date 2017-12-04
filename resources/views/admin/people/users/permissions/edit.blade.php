@extends('admin/layouts/default')

@section('pageTitle', 'Edit Permission')

@section('header_styles')

@stop

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-pencil-square-o"></i>Edit Permissions</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="icon_flowchart_alt"></i><a href="#">Permissions Management</a></li>
                        <li><i class="fa fa-pencil-square-o"></i>Edit Permissions</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <div class="panel-body bio-graph-info">
                            <h1>Edit Permissions</h1>
                            <form method="post" role="form" action="{{route('permissions.update' , $permission->id )}}" class="form-horizontal" accept-charset="UTF-8">
                                <input name="_method" type="hidden" value="PUT">
                                <input type="hidden" name="id" value="{{@$permission->id}}">
                                @include('admin.people.users.permissions.form')
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

