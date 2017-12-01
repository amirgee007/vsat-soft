@extends('admin/layouts/default')

@section('pageTitle', 'Dashboard')

@section('header_styles')
    {{--<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css"/>--}}

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
                                        <option>Select Region</option>
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
                            <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Bahrain</td>
                                <td>Naval Base Mina Salman</td>
                                <td class="text-center">1</td>
                                <td class="text-center">10</td>
                                <td>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100" style="width: 96%">
                                            <span>4%</span>
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" style="width: 4%">
                                        </div>
                                    </div>
                                    <span class="sr-only">4%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Iraq</td>
                                <td>TQ near Fallujah</td>
                                <td class="text-center">1</td>
                                <td class="text-center">15</td>
                                <td>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="93" style="width: 93%">
                                            <span>7%</span>
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
                                        </div>
                                    </div>
                                    <span class="sr-only">7%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Iraq</td>
                                <td>Al Qayyarah</td>
                                <td class="text-center">1</td>
                                <td class="text-center">30</td>
                                <td>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            <span>13%</span>
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width: 13%">
                                        </div>
                                    </div>
                                    <span class="sr-only">13%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>Iraq</td>
                                <td>Zawita</td>
                                <td class="text-center">1</td>
                                <td class="text-center">20</td>
                                <td>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width: 91%">
                                            <span>9%</span>
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" style="width: 9%">
                                        </div>
                                    </div>
                                    <span class="sr-only">9%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td>Jordan</td>
                                <td>King Faisal Airbase</td>
                                <td class="text-center">3</td>
                                <td class="text-center">30</td>
                                <td>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            <span>13%</span>
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width: 13%">
                                        </div>
                                    </div>
                                    <span class="sr-only">13%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td>Kuwait</td>
                                <td>Camp Arifjan</td>
                                <td class="text-center">3</td>
                                <td class="text-center">40</td>
                                <td>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%">
                                            <span>17%</span>
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" style="width: 17%">
                                        </div>
                                    </div>
                                    <span class="sr-only">17%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">7</td>
                                <td>Qatar</td>
                                <td>Al Udeid Airbase</td>
                                <td class="text-center">1</td>
                                <td class="text-center">15</td>
                                <td>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                                            <span>7%</span>
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
                                        </div>
                                    </div>
                                    <span class="sr-only">7%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">8</td>
                                <td>United Arab Emirates</td>
                                <td>Al Minhad Airbase near Dubai</td>
                                <td class="text-center">4</td>
                                <td class="text-center">50</td>
                                <td>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            <span>22%</span>
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%">
                                        </div>
                                    </div>
                                    <span class="sr-only">22%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">9</td>
                                <td>United Arab Emirates</td>
                                <td>Zayed Military City near Abu Dhabi</td>
                                <td class="text-center">1</td>
                                <td class="text-center">20</td>
                                <td>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width: 91%">
                                            <span>9%</span>
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" style="width: 9%">
                                        </div>
                                    </div>
                                    <span class="sr-only">9%</span>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">Total</th>
                                <th class="text-center">16</th>
                                <th class="text-center">230</th>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
            <!--/col-->
            <div>
                <div class="col-md-3">
                    <div class="social-box facebook">
                        <i>Sites</i>
                        <ul>
                            <li>
                                <strong>2</strong>
                                <span>Sites</span>
                            </li>
                            <li>
                                <strong>UAE</strong>

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

@stop
