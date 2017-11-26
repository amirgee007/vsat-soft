@extends('admin/layouts/default')
@section('pageTitle', 'Performance Survey')
@section('content')
    <!--main content start-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-users"></i>Survey  Management</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="http://vsat-soft.dev/dashboard">Home</a></li>
                        <li><i class="fa fa-users"></i>Performance Survey</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Survey
                        </header>

                        <table class="table table-striped table-advance table-hover">
                            <thead>
                            <tr>
                                <th class="text-center"><i class="fa fa-sort-numeric-asc"></i> S/N</th>
                                <th><i class="fa fa-houzz"></i>Survey Name</th>
                                <th><i class="icon_calendar"></i>Survey Questions</th>
                                <th><i class="fa fa-flag"></i>Survey Result</th>
                                <th><i class="fa fa-flag"></i>Created At</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr><td colspan="12" style="text-align: center">No,Survey Found!</td></tr>
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
