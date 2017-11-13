@extends('admin/layouts/default')

@section('pageTitle', 'Create Branch')

@section('header_styles')
    {{--<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css"/>--}}
@stop

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-pencil-square-o"></i>Edit Branch</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="icon_flowchart_alt"></i><a href="{{route('branch.index')}}">Branch Management</a></li>
                        <li><i class="fa fa-pencil-square-o"></i>Edit Branch</li>
                    </ol>
                </div>
            </div>
           <!-- <img src="img/noimage.gif" alt=""/>-->
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <div class="panel-body bio-graph-info">
                            <h1>Edit Branch</h1>
                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{route('post.branch.update')}}" enctype="multipart/form-data">
                                @include('admin.branch.form')
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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeU39v4go-9ToGgad0c4ZXHDj-k2XO6tc&libraries=places"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
    {{--<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>--}}
    <!--todo: remove CDNs-->

    @include('admin.layouts.partials.autocompleteAddres')

    <script>
        // global app configuration object
        $(function () {
            $('#support_staff').select2({
                placeholder: "Select Support Staff",
                width: '100%',
                allowClear: true
            });
            //all jquery code here
        });
    </script>
@stop

