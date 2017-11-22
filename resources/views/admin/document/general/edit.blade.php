@extends('admin/layouts/default')
@section('pageTitle', 'EDIT GENERAL DOCUMENT')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-plus-square"></i>Edit General Document</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('index.dashboard') }}">Home</a></li>
                        <li><i class="fa fa-file"></i><a href="{{ route('document.general.index') }}">General Documents</a></li>
                        <li><i class="fa fa-plus-square"></i>Edit General Document</li>
                    </ol>
                </div>
            </div>
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <div class="panel-body bio-graph-info">
                            <h1>Edit General Document</h1>
                            <form class="form-horizontal" role="form">
                                <div class="panel panel-primary form-group">
                                    @include('admin.document.general.form')
                                </div>
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
    <script>
        $(function () {
            //all jquery code here
        });
    </script>
@stop
