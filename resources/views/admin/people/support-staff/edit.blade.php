@extends('admin/layouts/default')

@section('pageTitle', 'Create ')


@section('header_styles')
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="{{ asset('assets/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>
@stop

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-user-plus"></i>UPDATE SUPPORT STAFF</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('index.dashboard') }}">Home</a></li>
                        <li><i class="fa fa-users"></i><a href="{{ route('people.supportStaff.index') }}">Support Staff Management </a></li>
                        <li><i class="fa fa-user-plus"></i>UPDATE SUPPORT STAFF</li>
                    </ol>
                </div>
            </div>
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <div class="panel-body bio-graph-info">
                            <h1>Update Staff</h1>
                            <form class="form-horizontal" role="form" action="{{ route('people.supportStaff.updateStaff') }}" method="post" enctype="multipart/form-data">
                                @include('admin.people.support-staff.form')
                                <input type="hidden" name="staff_no" value="{{$staff->support_staff_id}}">
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10 col-xs-9">
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
    <link href="{{ asset('assets/select2-4.0.4/select2.min.css') }}" rel="stylesheet"/>
    <script src="{{ asset('assets/select2-4.0.4/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/dropify/dist/js/dropify.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeU39v4go-9ToGgad0c4ZXHDj-k2XO6tc&libraries=places"></script>

    @include('admin.layouts.partials.autocompleteAddres2')

    <script>

        $(function () {

            $('#related_user').select2({
                placeholder: "Select Related Users",
                width: '100%',
                allowClear: true
            });

            $('.dropify').dropify();

        });

    </script>
@stop

