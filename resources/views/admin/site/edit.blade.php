@extends('admin/layouts/default')

@section('pageTitle', 'Edit Site')

@section('header_styles')
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>

        .imges{
            height: 150px;
            width: 200px;
        }
    </style>
@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-plus-square"></i>Edit Site</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="icon_pin"></i><a href="{{route('site.index')}}">Site Management</a></li>
                        <li><i class="fa fa-plus-square"></i>Edit Site</li>
                    </ol>
                </div>
            </div>
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <div class="panel-body bio-graph-info">
                            <h1>Edit Site</h1>
                            <form id="edit-site-form" class="form-horizontal" role="form" action="{{ route('post.site.update') }}" method="post" enctype="multipart/form-data">
                                @include('admin/site/form')
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeU39v4go-9ToGgad0c4ZXHDj-k2XO6tc&libraries=places"></script>

    <link src="{{ asset('assets/select2-4.0.4/select2.min.css') }}" rel="stylesheet"/>
    <script src="{{ asset('assets/select2-4.0.4/select2.min.js') }}"></script>
    <script>
        $(function () {
            $('#add_branch').select2({
                placeholder: "Select Related Branches",
                allowClear: true
            });

            $(".image-type").removeAttr("required");

        });

    </script>
@stop
