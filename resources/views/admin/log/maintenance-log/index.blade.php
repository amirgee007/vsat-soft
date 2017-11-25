@extends('admin/layouts/default')
@section('pageTitle', 'Maintenance Log')
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
                    <a class="btn btn-primary btn-lg" href="{{ route('log.maintenance.create') }}" title="Add Maintenance Log">Add New Maintenance Log</a>
                </div>
                <section class="panel">
                    <header class="panel-heading">
                        Maintenance Log
                    </header>
                    <table class="table table-striped table-advance table-hover">
                        <thead>
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
                        </thead>
                        <tbody>
                        @forelse($maintenance_logs as $maintenance_log)
                            <tr>
                            <td class="text-center">{{$maintenance_log->maintenance_log_id}}</td>
                            <td><a href="#">{{$maintenance_log->job_number}}</a></td>
                            <td><a href="#">{{$maintenance_log->repair_start_date}}</a></td>
                                {{--todo: which date--}}
                            <td><a href="#">{{$maintenance_log->site_id}}</a></td>
                            <td><a href="#">{{$maintenance_log->city_id}}</a></td>
                            <td><a href="#">Branches multiple</a></td>
                            <td>
                                <div class="btn-group col-sm-10 col-xs-12">
                                    <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">Closed</a>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-success col-sm-4 col-xs-4" href="{{ route('log.maintenance.edit', $maintenance_log->maintenance_log_id) }}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger col-sm-4 col-xs-4 text-center" onclick="return confirm('Are you sure you want to delete this record?')" href="{{ route('log.maintenance.delete', $maintenance_log->maintenance_log_id) }}"><i class="fa fa-close"></i></a>
                                    <a class="btn btn-primary col-sm-4 col-xs-4 text-center" href="#" onclick="window.open('print_installation_log.html', 'newwindow', 'width=800, height=600');"><i class="fa fa-print"></i></a>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <tr><td colspan="12" style="text-align: center">No, Maintenance Log Found!</td></tr>
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
    <script>
        $(function () {
            //all jquery code here
        });
    </script>
@stop
