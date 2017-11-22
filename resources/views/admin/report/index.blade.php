@extends('admin/layouts/default')
@section('pageTitle', 'REPORTS')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="icon_piechart"></i>Chart</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="icon_piechart"></i>Chart</li>
                    </ol>
                </div>
            </div>
            <!--Charts Filter-->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <section class="panel panel-default">
                        <header class="panel-heading">
                            <i class="fa fa-filter"></i>
                            <h2>Filter By</h2>
                        </header>
                        <div class="panel-body">
                            <div class="panel-content" style="width: 50%; margin: 0 auto;">
                                <!-- /btn-group -->
                                <div class="btn-group col-sm-12 col-xs-12">
                                    <a class="btn btn-primary col-sm-10 col-xs-9" title="Regions">Reports</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul id="option1" class="dropdown-menu scrollable-menu" role="menu">
                                        <li><a href="#" title="AssetsValue">Assets Value</a></li>
                                        <li><a href="#" title="TAT">TAT</a></li>
                                        <li><a href="#" title="FailureRate">Failure Rate </a></li>
                                        <li><a href="#" title="FailureCost">Failure Cost</a></li>
                                        <li><a href="#" title="RepairVs.Replace">Repair vs. Replace</a></li>
                                        <li><a href="#" title="FailureVs.Others">Failure vs. Others</a></li>
                                    </ul>
                                </div>
                                <!-- /btn-group -->
                            </div>
                            <div class="btn-group col-sm-3 col-xs-3">
                                <a class="btn btn-primary col-sm-10 col-xs-9" title="Regions">Regions</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul id="option2" class="dropdown-menu scrollable-menu" role="menu">
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
                                <ul id="option3" class="dropdown-menu scrollable-menu" role="menu">
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            <div class="btn-group col-sm-3 col-xs-3">
                                <a class="btn btn-success col-sm-10 col-xs-9" title="Cities">Cities</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul id="option4" class="dropdown-menu scrollable-menu" role="menu">
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            <!-- /btn-group -->
                            <div class="btn-group col-sm-3 col-xs-3">
                                <a class="btn btn-success col-sm-10 col-xs-9" title="Cities">Sites</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul id="option5" class="dropdown-menu scrollable-menu" role="menu">
                                </ul>
                            </div>
                            <!-- /btn-group -->
                        </div>
                        <div>
                            <ol class="breadcrumb">
                            </ol>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <!-- chart morris start -->
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <h3>Charts</h3>
                        </header>
                        <div class="panel-body">
                            <div class="tab-pane" id="chartjs">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- chart morris start -->
        </section>
@stop
@section('footer_scripts')
    <script>
        $(function () {
            //all jquery code here
        });
    </script>
@stop
