@extends('admin/layouts/default')
@section('pageTitle', 'Edit Maintenance Log')
@section('content')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-header"><i class="fa fa-plus-square"></i>Edit Maintenance Log</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ route('index.dashboard') }}">Home</a></li>
                    <li><i class="fa fa-gears"></i><a href="{{ route('log.maintenance.index') }}">Maintenance Management</a></li>
                    <li><i class="fa fa-plus-square"></i>Edit Maintenance Log</li>
                </ol>
            </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <div class="panel-body bio-graph-info">
                        <h1>Edit Maintenance Log</h1>
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{route('log.maintenance.update')}}" enctype="multipart/form-data">

                        @include('admin.log.maintenance-log.form')
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
<!--main content end-->
@stop
@section('footer_scripts')

    {{--todo: code repetaed 4 times ust foo select2 later on check these to minimize--}}

    <link href="{{asset('assets/select2-4.0.4/select2.min.css') }}" rel="stylesheet"/>
    <script src="{{asset('assets/select2-4.0.4/select2.min.js')}}"></script>

    <script>

        $('#add_support_staff').select2({
            placeholder: "Select Staff",
            width: '100%',
            allowClear: true
        });

        $('#add_branch').select2({
            placeholder: "Select Related Branches",
            allowClear: true
        });

    </script>
@stop