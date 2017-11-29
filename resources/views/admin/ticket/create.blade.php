@extends('admin/layouts/default')
@section('pageTitle', 'Open Ticket')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-user-plus"></i>Add New Ticket</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('index.dashboard') }}">Home</a></li>
                        <li><i class="fa fa-users"></i><a href="{{ route('ticket.index') }}">Ticket Management </a></li>
                        <li><i class="fa fa-user-plus"></i>ADD NEW TICKET</li>
                    </ol>
                </div>
            </div>
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <div class="panel-body bio-graph-info">
                            <h1>Add New Ticket</h1>
                            <form class="form-horizontal" role="form" action="{{ route('index.dashboard') }}" method="post" enctype="multipart/form-data">
                                @include('admin.ticket.form')
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10 col-xs-9">
                                        <button type="submit" class="btn btn-primary">Save</button>
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
    <script>
    </script>
@stop
