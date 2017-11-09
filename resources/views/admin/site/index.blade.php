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
                    <h3 class="page-header"><i class="icon_pin"></i> Site Management</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="icon_pin"></i>Site Management</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <a class="btn btn-primary btn-lg" href="{{route('site.create')}}" title="Add Site">Add New Site</a>
                    </div>
                    <section class="panel">
                        <header class="panel-heading">
                            Sites
                        </header>

                        <table class="table table-striped table-advance table-hover">
                            <thead>
                            <tr>
                                <th class="text-center"><i class="fa fa-sort-numeric-asc"></i> S/N</th>
                                <th><i class="icon_pin"></i> Site Name</th>
                                <th><i class="icon_calendar"></i> Created Date</th>
                                <th><i class="fa fa-flag"></i> Country</th>
                                <th><i class="icon_building"></i> City</th>
                                <th><i class="fa fa-location-arrow"></i> Coordinates</th>
                                <th><i class="icon_question"></i> Status</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td><a href="view_site.html">Al Minhad Airbase</a></td>
                                <td><a href="view_site.html">15-10-2015</a></td>
                                <td><a href="view_site.html">UAE</a></td>
                                <td><a href="view_site.html">Dubai</a></td>
                                <td><a href="view_site.html">25.0209969N , 55.3752208E</a></td>
                                <td>
                                    <div class="btn-group col-sm-10 col-xs-12">
                                        <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">Active</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-4 col-xs-4 text-center" href="#" onclick="window.open('print_site.html', 'newwindow', 'width=800, height=600');"><i class="fa fa-print"></i></a>
                                        <a class="btn btn-success col-sm-4 col-xs-4 text-center" href="edit_site.html"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger col-sm-4 col-xs-4 text-center" name="close" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Zayed Military</td>
                                <td>25-10-2015</td>
                                <td>UAE</td>
                                <td>Abu Dhabi</td>
                                <td>24.5188081N , 54.7596234E</td>
                                <td>
                                    <div class="btn-group col-sm-10 col-xs-12">
                                        <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">Active</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-4 col-xs-4 text-center" href="#"><i class="fa fa-print"></i></a>
                                        <a class="btn btn-success col-sm-4 col-xs-4 text-center" href="#"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger col-sm-4 col-xs-4 text-center" name="close" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>King Faisal Airbase</td>
                                <td>20-12-2016</td>
                                <td>Jordan</td>
                                <td>Amman</td>
                                <td>30.33861N , 36.13667E</td>
                                <td>
                                    <div class="btn-group col-sm-10 col-xs-12">
                                        <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">Active</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-4 col-xs-4 text-center" href="#"><i class="fa fa-print"></i></a>
                                        <a class="btn btn-success col-sm-4 col-xs-4 text-center" href="#"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger col-sm-4 col-xs-4 text-center" name="close" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>Camp Arifjan</td>
                                <td>22-03-2017</td>
                                <td>Kuwait</td>
                                <td>Kuwait</td>
                                <td>28.9306478N , 48.1792223E</td>
                                <td>
                                    <div class="btn-group col-sm-10 col-xs-12">
                                        <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">Active</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-4 col-xs-4 text-center" href="#"><i class="fa fa-print"></i></a>
                                        <a class="btn btn-success col-sm-4 col-xs-4 text-center" href="#"><i class="fa fa-edit"></i></a>
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
