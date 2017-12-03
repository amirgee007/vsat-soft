@extends('admin/layouts/default')

@section('pageTitle', 'Edit Staff')

@section('header_styles')
    {{--<link href="{{ asset('assets/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>--}}
@stop

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-pencil-square-o"></i>Edit Role</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="icon_flowchart_alt"></i><a href="{{route('people.roles.index')}}">Role Management</a></li>
                        <li><i class="fa fa-pencil-square-o"></i>Edit Role</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <div class="panel-body bio-graph-info">
                            <h1>Edit Role</h1>
                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{route('post.branch.update')}}" enctype="multipart/form-data">
                                <input type="hidden" name="role_id" value="{{@$role->id}}">
                                {{--@include('admin.Role.form')--}}
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

@stop

