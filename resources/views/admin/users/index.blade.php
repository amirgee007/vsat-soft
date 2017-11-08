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
                        <a class="btn btn-primary btn-lg" href="add_user.html" title="Add User">Add New User</a>
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
                            <tr>
                                <td class="text-center">1</td>
                                <td>Jenifer Smith</td>
                                <td>25-10-2015</td>
                                <td>jenifer@mailname.com</td>
                                <td>(+971) (50) 456 6789</td>
                                <td>
                                    <div class="btn-group col-sm-8 col-xs-12">
                                        <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">Active</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-6 col-xs-6 text-center" href="edit_user.html"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger col-sm-6 col-xs-6 text-center" name="close" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Ialy Mondala</td>
                                <td>01-05-2017</td>
                                <td>ialy@ics-technologies-mea.com</td>
                                <td>(+971) (55) 526 1789</td>
                                <td>
                                    <div class="btn-group col-sm-8 col-xs-12">
                                        <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">Active</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-6 col-xs-6 text-center" href="#"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger col-sm-6 col-xs-6 text-center" name="close" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Alaa Amatouri</td>
                                <td>03-01-2017</td>
                                <td>alaa@ics-technologies-mea.com</td>
                                <td>(+971) (50) 666 1119</td>
                                <td>
                                    <div class="btn-group col-sm-8 col-xs-12">
                                        <a class="btn btn-danger btn-sm col-xs-12 disabled" href="#">Disabled</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-6 col-xs-6 text-center" href="#"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger col-sm-6 col-xs-6 text-center" name="close" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                </td>
                            </tr>


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
