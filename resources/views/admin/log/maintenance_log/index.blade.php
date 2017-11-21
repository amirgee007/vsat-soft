@extends('admin/layouts/default')
@section('pageTitle', 'MAINTENANCE LOG')
@section('content')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-gears"></i> Maintenance Log</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ route('index.dashboard') }}">Home</a></li>
                    <li><i class="fa fa-gears"></i>Maintenance Log</li>
                </ol>
            </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <a class="btn btn-primary btn-lg" href="{{ route('log.maintenance.createMainLog') }}" title="Add Maintenance Log">Add New Maintenance Log</a>
                </div>
                <section class="panel">
                    <header class="panel-heading">
                        Maintenance Log
                    </header>
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th class="text-center"><i class="fa fa-sort-numeric-asc"></i> S/N</th>
                            <th><i class="fa fa-gears"></i> Job Number</th>
                            <th><i class="icon_calendar"></i> Maintenance Date</th>
                            <th><i class="icon_pin"></i> Site Name</th>
                            <th><i class="icon_building"></i> City</th>
                            <th><i class="icon_flowchart_alt"></i> Branch</th>
                            <th><i class="icon_question"></i> Status</th>
                            <th><i class="icon_cogs"></i> Action</th>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td><a href="view_maintenance_log.html">ICS-M-10001</a></td>
                            <td><a href="view_maintenance_log.html">05-3-2017</a></td>
                            <td><a href="view_maintenance_log.html">Naval Base Mina Salman</a></td>
                            <td><a href="view_maintenance_log.html">Manama</a></td>
                            <td><a href="view_maintenance_log.html">ICS UAE</a></td>
                            <td>
                                <div class="btn-group col-sm-10 col-xs-12">
                                    <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">Closed</a>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary col-sm-4 col-xs-4 text-center" href="#" onclick="window.open('print_maintenance_log.html', 'newwindow', 'width=800, height=600');"><i class="fa fa-print"></i></a>
                                    <a class="btn btn-success col-sm-4 col-xs-4" href="{{ route('log.maintenance.editMainLog', ['id' =>1]) }}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger col-sm-4 col-xs-4 text-center" onclick="return confirm('Are you sure you want to delete this record?')" href="{{ route('log.maintenance.deleteMainLog', ['id' =>1]) }}"><i class="fa fa-close"></i></a>
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
    <script>
        $(function () {
            //all jquery code here
        });
    </script>
@stop
