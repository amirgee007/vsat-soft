@extends('admin/layouts/default')

@section('pageTitle', 'All Permissions')

@section('header_styles')

@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-users"></i> Permissions Management</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="fa fa-users"></i>Permissions Management</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <a class="btn btn-primary btn-lg" href="{{route('permissions.create')}}" title="Add permissions">Add New Permission</a>
                    </div>
                    <section class="panel">
                        <header class="panel-heading">
                            Permissions
                        </header>

                        <table class="table table-striped table-advance table-hover">
                            <thead>
                            <tr>
                                <th class="text-center"><i class="fa fa-sort-numeric-asc"></i> S/N</th>
                                <th><i class="icon_profile"></i> Name</th>
                                <th><i class="icon_profile"></i> Display Name</th>
                                <th><i class="icon_calendar"></i> Description</th>
                                <th><i class="icon_calendar"></i> Created Date</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse($permissions as $permission)
                                <tr>
                                    <td class="text-center">{{$permission->id}}</td>
                                    <td>{!! $permission->name !!}</td>
                                    <td>{!! $permission->display_name !!}</td>
                                    <td>{!! $permission->description !!}</td>
                                    <td>{{$permission->created_at->format('m-d-Y')}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-primary col-sm-6 col-xs-6 text-center" href="{{route('permissions.edit' ,$permission->id)}}"><i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Are you sure you want to delete this record?')" href="<?php echo e(route('permissions.destroy', $permission->id)); ?>" class="btn btn-danger col-sm-6 col-xs-6 text-center">
                                                <i class="fa fa-close"></i>
                                            </a>
                                            {{--todo:delete via ajax request DELETE method call for resource--}}
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="12" style="text-align: center">No, Permission Found!</td></tr>
                            @endforelse
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->

@stop

@section('footer_scripts')

    {{--<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>--}}

    <script>

        $(function () {

            //all jquery code here
        });

    </script>
@stop
