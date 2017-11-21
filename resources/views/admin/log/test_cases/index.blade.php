@extends('admin/layouts/default')
@section('pageTitle', 'TEST CASES')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-flask"></i>Test Cases</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-flask"></i>Test Cases</li>
                    </ol>
                </div>
            </div>
            <!--Test Cases Filter Start-->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <section class="panel panel-default">
                        <header class="panel-heading">
                            <i class="fa fa-filter"></i>
                            <h2>Filter By</h2>
                        </header>
                        <div class="panel-body">
                            <!-- /btn-group -->
                            <div class="btn-group col-sm-3 col-xs-3">
                                <a class="btn btn-primary col-sm-10 col-xs-9" title="Regions">Regions</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul id="option1" class="dropdown-menu scrollable-menu" role="menu">
                                    <li><a href="#" title="World">World</a></li>
                                    <li><a href="#" title="MiddleEast">Middle East</a></li>
                                    <li><a href="#" title="Europe">Europe</a></li>
                                    <li><a href="#" title="Australia">Australia</a></li>
                                    <li><a href="#" title="NorthAmerica">North America</a></li>
                                    <li><a href="#" title="SouthAmerica">South America</a></li>
                                    <li><a href="#" title="NorthAfrica">North Africa</a></li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            <div class="btn-group col-sm-3 col-xs-3">
                                <a class="btn btn-danger col-sm-10 col-xs-9" title="Countries">Countries</a>
                                <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul id="option2" class="dropdown-menu scrollable-menu" role="menu">
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            <div class="btn-group col-sm-3 col-xs-3">
                                <a class="btn btn-success col-sm-10 col-xs-9" title="Cities">Cities</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul id="option3" class="dropdown-menu scrollable-menu" role="menu">
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            <div class="btn-group col-sm-3 col-xs-3">
                                <a class="btn btn-success col-sm-10 col-xs-9" title="Cities">Sites</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul id="option4" class="dropdown-menu scrollable-menu" role="menu">
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">
                            <ol class="breadcrumb h3">
                            </ol>
                        </div>
                        <div class="panel-body">
                            <div class="btn_wrapper">
                                <!-- /btn-group -->
                                <div id="searchbtn" class="btn-group col-sm-6 col-xs-6 go-left">
                                    <a class="btn btn-primary col-sm-8 col-xs-8" title="Search Test Cases">Search</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul  class="dropdown-menu scrollable-menu" role="menu">
                                        <li><a href="#" title="Submitted">Submitted</a></li>
                                        <li><a href="#" title="Saved">Saved</a></li>
                                        <li><a href="#" title="Pending">Pending</a></li>
                                    </ul>
                                </div>
                                <!-- /btn-group -->
                                <div id="newbtn" class="btn-group col-sm-6 col-xs-6 go-left unactive">
                                    <a href="add_test.html" class="btn btn-primary col-sm-10 col-xs-10" title="New Test Case">New</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!--Test Cases Filter End-->
            <div class="row">
                <!-- Table start -->
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Test Cases
                        </header>
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                            <tr>
                                <th><i class="fa fa-flag"></i> Country</th>
                                <th><i class="icon_building"></i> City</th>
                                <th><i class="icon_pin"></i> Site Name</th>
                                <th><i class="icon_flowchart_alt"></i> VSAT Name</th>
                                <th><i class="icon_calendar"></i> Created Date</th>
                                <th><i class="icon_profile"></i> Tester</th>
                                <th><i class="icon_question"></i> Status</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr id="Dubai-1">
                                <td><a href="view_test.html">UAE</a></td>
                                <td><a href="view_test.html">Dubai</a></td>
                                <td><a href="view_test.html">AL MINHAD</a></td>
                                <td><a href="view_test.html">UAE-LH-N-001</a></td>
                                <td><a href="view_test.html">09-04-2017</a></td>
                                <td><a href="view_test.html">Majdi</a></td>
                                <td>
                                    <div class="btn-group col-sm-8 col-xs-12">
                                        <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">Submitted</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-6 col-xs-6 text-center" href="edit_test.html"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger col-sm-6 col-xs-6 text-center" name="close" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr id="Dubai-2"  class="">
                                <td>UAE</td>
                                <td>Dubai</td>
                                <td>AL MINHAD</td>
                                <td>UAE-LW-N-001</td>
                                <td>09-04-2017</td>
                                <td>Majdi</td>
                                <td>
                                    <div class="btn-group col-sm-8 col-xs-12">
                                        <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">Submitted</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-6 col-xs-6 text-center" href="#"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger col-sm-6 col-xs-6 text-center" name="close" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr id="Dubai-3"  class="">
                                <td>UAE</td>
                                <td>Dubai</td>
                                <td>AL MINHAD</td>
                                <td>UAE-LW-N-002</td>
                                <td>09-04-2017</td>
                                <td>Majdi</td>
                                <td>
                                    <div class="btn-group col-sm-8 col-xs-12">
                                        <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">Submitted</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-6 col-xs-6 text-center" href="#"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger col-sm-6 col-xs-6 text-center" name="close" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr id="Dubai-4"  class="">
                                <td>UAE</td>
                                <td>Dubai</td>
                                <td>AL MINHAD</td>
                                <td>UAE-LW-N-003</td>
                                <td>10-04-2017</td>
                                <td>Majdi</td>
                                <td>
                                    <div class="btn-group col-sm-8 col-xs-12">
                                        <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">Submitted</a>
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
        </section>
        <!--main content end-->
@stop
@section('footer_scripts')
    <script>
        $(function () {
        });
    </script>
@stop