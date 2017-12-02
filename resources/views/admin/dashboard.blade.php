@extends('admin/layouts/default')

@section('pageTitle', 'Dashboard')
@section('header_styles')
    <style>
        .custom-select{
            color:white;
            background-color:#005370;
        }
    </style>
@stop

@section('content')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i>Dashboard</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                    <li><i class="fa fa-laptop"></i>Dashboard</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box blue-bg">
                    <i class="fa fa-wifi"></i>
                    <div class="count">{{count(@$sites)}}</div>
                    <div class="title">Sites</div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box green-bg">
                    <i class="fa fa-crosshairs"></i>
                    <div class="count">{{count(@$countries)}}</div>
                    <div class="title">Countries</div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box dark-bg">
                    <i class="fa fa-tags"></i>
                    <div class="count">230</div>
                    <div class="title">Reported Issues</div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box brown-bg">
                    <i class="fa fa-dollar"></i>
                    <div class="count">850K</div>
                    <div class="title">Stock Value</div>
                </div>
                <!--/.info-box-->

            </div>
            <!--/.col-->

        </div>
        <!--/.row-->
        <div id="mapfilter">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-filter"></i>
                            <h2>Filter By</h2>
                        </div>
                        <div class="panel-content">
                            <div class="btn-group" style="width: 33%; float: left">
                                <div style="width: 80%; float: left;">
                                    <select name="region_id" id="region" class="form-control custom-select">
                                        <option >Select Region</option>
                                        @foreach($regions as $region)
                                            <option value="{{$region->region_id}}">{{$region->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="btn-group" style="width: 33%; float: left">
                                <div style="width: 80%; float: left;">
                                    <select name="country_id" id="country" class="form-control custom-select">
                                        <option>Select Country</option>
                                    </select>
                                </div>
                            </div>
                            <div class="btn-group" style="width: 33%; float: left;">
                                <div style="width: 80%; float: left;">
                                    <select name="city_id" id="city" class="form-control custom-select">
                                        <option>Select City</option>
                                    </select>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
                            <div class="panel-actions">
                                <!-- <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>-->
                                <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                                <!--<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>-->
                            </div>
                        </div>
                        <div class="panel-body-map divhide">
                            <div id="map" style="height: 380px;"></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Today status end -->


        <div class="row">

            <div class="col-lg-9 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2><i class="fa fa-flag-o red"></i><strong>Registered Sites</strong></h2>

                    </div>
                    <div class="table-responsive">
                        <table class="table bootstrap-datatable countries">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Country</th>
                                <th>Site Name</th>
                                <th>VSAT Stations</th>
                                <th>Reported Issues</th>
                                <th>Site Status</th>
                            </tr>
                            </thead>
                            <tbody id="sites-table">

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
            <!--/col-->
            <div>
                <div class="col-md-3">
                    <div class="social-box facebook">
                        <i>Total Sites</i>
                        <ul>
                            <li style="text-align: center">
                                <strong id="total-sties">0</strong>
                            </li>
                            <li>
                                <strong>Sites</strong>
                            </li>
                        </ul>
                    </div>
                    <!--/social-box-->
                </div>
                <div class="col-md-3">

                    <div class="social-box google-plus">
                        <i>Reported Issues</i>
                        <ul>
                            <li>
                                <strong>10</strong>
                                <span>Issues</span>
                            </li>
                            <li>
                                <strong>UAE</strong>
                            </li>

                        </ul>
                    </div>
                    <!--/social-box-->

                </div>
                <!--/col-->
                <div class="col-md-3">

                    <div class="social-box twitter">
                        <i>Stock value</i>
                        <ul>
                            <li>
                                <strong>50K</strong>
                                <span>$</span>
                            </li>
                            <li>
                                <strong>UAE</strong>
                            </li>

                        </ul>
                    </div>
                    <!--/social-box-->

                </div>

                <!--/col-->
            </div>


        </div>

        <!-- statics end -->

        <!-- project team & activity start -->

        <br>
        <br>
        </div>
    </section>
    <div class="text-right">
        <div class="credits">
            <img src="{{asset('img/ics technologies new.png')}}" alt="Powered By ICS Technologies" />
        </div>
    </div>
</section>
<!--main content end-->
@stop
@section('footer_scripts')
    @include('admin.layouts.partials.ajax-regions-based')
    @include('admin.layouts.partials.ajax-country-based')
    @include('admin.layouts.partials.ajax-city-based-sites')
@stop
