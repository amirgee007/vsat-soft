@extends('admin/layouts/default')

@section('pageTitle', 'sample page')

@section('header_styles')
    {{--<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css"/>--}}
@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-users"></i> Client Management</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-users"></i>Client Management</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <a class="btn btn-primary btn-lg" href="add_client.html" title="Add Client">Add New Client</a>
                    </div>
                    <section class="panel">
                        <header class="panel-heading">
                            Clients
                        </header>

                        <table class="table table-striped table-advance table-hover">
                            <thead>
                            <tr>
                                <th class="text-center"><i class="fa fa-sort-numeric-asc"></i> S/N</th>
                                <th><i class="fa fa-houzz"></i> Organization Name</th>
                                <th><i class="icon_calendar"></i> Created Date</th>
                                <th><i class="fa fa-flag"></i> Country</th>
                                <th><i class="icon_building"></i> City</th>
                                <th><i class="icon_question"></i> Status</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td><a href="view_client.html">Trace Systems</a></td>
                                <td><a href="view_client.html">25-01-2017</a></td>
                                <td><a href="view_client.html">United States of America</a></td>
                                <td><a href="view_client.html">Vienna</a></td>
                                <td>
                                    <div class="btn-group col-sm-8 col-xs-12">
                                        <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">Active</a></div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-4 col-xs-4 text-center" href="#" onclick="window.open('print_client.html', 'newwindow', 'width=800, height=600');"><i class="fa fa-print"></i></a>
                                        <a class="btn btn-success col-sm-4 col-xs-4 text-center" href="edit_client.html"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger col-sm-4 col-xs-4 text-center" name="close" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Al Udeid Airbase</td>
                                <td>01-02-2017</td>
                                <td>Qatar</td>
                                <td>Doha </td>
                                <td>
                                    <div class="btn-group col-sm-8 col-xs-12">
                                        <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">Active</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-4 col-xs-4" href="#"><i class="fa fa-print"></i></a>
                                        <a class="btn btn-success col-sm-4 col-xs-4" href="#"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger col-sm-4 col-xs-4 text-center" name="close" href="#"><i class="fa fa-close"></i></a>
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
