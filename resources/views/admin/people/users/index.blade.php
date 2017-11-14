@extends('admin/layouts/default')

@section('pageTitle', 'All Users')

@section('header_styles')
    {{--<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css"/>--}}
@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-users"></i> User Management</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="fa fa-users"></i>User Management</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <a class="btn btn-primary btn-lg" href="{{route('people.users.createUser')}}" title="Add User">Add New User</a>
                    </div>
                    <section class="panel">
                        <header class="panel-heading">
                            Users
                        </header>

                        <table class="table table-striped table-advance table-hover">
                            <thead>
                            <tr>
                                <th class="text-center"><i class="fa fa-sort-numeric-asc"></i> S/N</th>
                                <th><i class="icon_profile"></i> Full Name</th>
                                <th><i class="icon_calendar"></i> Created Date</th>
                                <th><i class="icon_mail_alt"></i> Email</th>
                                <th><i class="icon_mobile"></i> Cell</th>
                                <th><i class="icon_question"></i> Status</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                            <tr>
                                <td class="text-center">{{$user->id}}</td>
                                <td>{{$user->first_name.' '.$user->last_name}}</td>
                                <td>{{$user->created_at->format('m-d-Y')}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone_num}}</td>
                                <td>
                                    <div class="btn-group col-sm-8 col-xs-12">
                                        <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">{{$user->is_active ? 'Active' : 'DeActive'}}</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-6 col-xs-6 text-center" href="{{route('people.user.edit' ,$user->id)}}"><i class="fa fa-edit"></i></a>
                                        <a onclick="return confirm('Are you sure you want to delete this record?')" href="<?php echo e(route('people.user.delete', $user->id)); ?>" class="btn btn-danger col-sm-6 col-xs-6 text-center">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr><td colspan="12" style="text-align: center">No, User Found!</td></tr>
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
