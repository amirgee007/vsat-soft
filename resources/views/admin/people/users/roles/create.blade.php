@extends('admin/layouts/default')

@section('pageTitle', 'Create Role')

@section('header_styles')
@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-plus-square"></i>Add New Role</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="icon_flowchart_alt"></i><a href="#">Role Management</a></li>
                        <li><i class="fa fa-plus-square"></i>Add New Role</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <div class="panel-body bio-graph-info">
                            <h1>Add New Role</h1>
                            <form class="form-horizontal" role="form" action="{{ route('people.roles.store') }}" method="post" enctype="multipart/form-data">
                                @include('admin.people.users.roles.form')
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
    <!--main content end-->

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
