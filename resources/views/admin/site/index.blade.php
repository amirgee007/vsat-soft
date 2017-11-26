@extends('admin/layouts/default')

@section('pageTitle', 'All Sites')

@section('header_styles')
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
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
                            @forelse($sites as $site)
                                <tr>
                                <td class="text-center">{{$site->site_id}}</td>
                                <td><a href="#">{{$site->name}}</a></td>
                                <td><a href="#">{{!is_null($site->created_at) ? $site->created_at->format('m-d-Y') : 'n/a'}}</a></td>
                                <td><a href="#">{{$site->country}}</a></td>
                                <td><a href="#">{{$site->city}}</a></td>
                                <td><a href="#">{{$site->latitude}} , {{$site->longitude}}</a></td>
                                <td>
                                    <div class="btn-group col-sm-10 col-xs-12">
                                        <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">Active</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-4 col-xs-4 text-center" href="#" onclick="window.open('print_site.html', 'newwindow', 'width=800, height=600');"><i class="fa fa-print"></i></a>
                                        <a class="btn btn-success col-sm-4 col-xs-4 text-center" href="{{route('site.edit' ,$site->site_id)}}"><i class="fa fa-edit"></i></a>


                                        {{--todo: sweet alert for all the confirmation boxes--}}

                                        <a onclick="return confirm('Are you sure you want to delete this record?')" href="<?php echo e(route('site.delete', $site->site_id)); ?>" class="btn btn-danger col-sm-4 col-xs-4 text-center">
                                            <i class="fa fa-close"></i>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr><td colspan="12" style="text-align: center">N/A</td></tr>
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
