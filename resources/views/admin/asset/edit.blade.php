@extends('admin/layouts/default')
@section('pageTitle', 'Edit Asset')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-plus-square"></i>Edit Asset</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="icon_pin"></i><a href="{{route('asset.index')}}">Assets Management</a></li>
                        <li><i class="fa fa-plus-square"></i>Edit Asset</li>
                    </ol>
                </div>
            </div>
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <div class="panel-body bio-graph-info">
                            <h1>Edit Asset</h1>
                            <form class="form-horizontal" role="form" action="{{ route('post.site.create') }}" method="post" enctype="multipart/form-data">
                                @include('admin.asset.form')
                                <div class="clearfix"></div>
                                <div class="form-group" style="margin-top: 50px !important;">
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
@stop