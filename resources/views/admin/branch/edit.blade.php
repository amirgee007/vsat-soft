@extends('admin/layouts/default')

@section('pageTitle', 'Edit Staff')

@section('header_styles')
    <link href="{{ asset('assets/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>
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


    <script type="text/javascript" src="{{ asset('assets/dropify/dist/js/dropify.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeU39v4go-9ToGgad0c4ZXHDj-k2XO6tc&libraries=places"></script>

    <link href="{{ asset('assets/select2-4.0.4/select2.min.css') }}" rel="stylesheet"/>
    <script src="{{ asset('assets/select2-4.0.4/select2.min.js') }}"></script>
    <!--todo: remove CDNs-->


    @include('admin.layouts.partials.autocompleteAddres')

    <script>

        $(function () {
            $('#support_staff').select2({
                placeholder: "Select Support Staff",
                width: '100%',
                allowClear: true
            });

            $('.dropify').dropify();

        });
    </script>
@stop

