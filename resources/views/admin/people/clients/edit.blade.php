@extends('admin/layouts/default')

@section('pageTitle', 'Edit Client')

@section('header_styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="{{ asset('assets/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>

@stop

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-user-plus"></i>Update Client</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('index.dashboard') }}">Home</a></li>
                        <li><i class="fa fa-users"></i><a href="{{ route('people.clients.index') }}">Client Management</a></li>
                        <li><i class="fa fa-user-plus"></i>Update Client</li>
                    </ol>
                </div>
            </div>
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <div class="panel-body bio-graph-info">
                            <h1>Update Client</h1>
                            <form class="form-horizontal" role="form" method="post" action="{{route('people.clients.updateClient')}}" enctype="multipart/form-data">
                                @include('admin.people.clients.form')
                                <div class="form-group">
                                    <input type="hidden" name="client_no" value="{{$client->client_id}}">
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

    <script type="text/javascript" src="{{ asset('assets/dropify/dist/js/dropify.min.js') }}"></script>
    <link href="{{ asset('assets/select2-4.0.4/select2.min.css') }}" rel="stylesheet"/>
    <script src="{{ asset('assets/select2-4.0.4/select2.min.js') }}"></script>


    <script>

        $(function () {
            $('#related_user').select2({
                placeholder: "Select Users",
                width: '100%',
                allowClear: true
            });

            $('.dropify').dropify();

        });
    </script>
@stop
