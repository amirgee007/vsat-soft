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
                            Performance Survey
                        </header>
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                            <tr>
                                <th class="text-center"><i class="fa fa-sort-numeric-asc"></i> S/N</th>
                                <th><i class="fa fa-houzz"></i>Survey Name</th>
                                <th><i class="fa fa-houzz"></i>Description</th>
                                <th><i class="icon_calendar"></i>Total Questions</th>
                                <th><i class="fa fa-flag"></i>Survey Result</th>
                                <th><i class="fa fa-flag"></i>Created At</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($surveys as $survey)

                                <tr>
                                    <td class="text-center"> {{ $loop->iteration }} </td>
                                    <td><a href="#">{{ $survey->name }}</a></td>
                                    <td><a href="#">{{ $survey->description }}</a></td>
                                    <td><a href="#">{{$survey->questions->count()}}</a></td>
                                    <td><a href="#">Result</a></td>
                                    <td><a href="#">{{ $survey->created_at ? $survey->created_at->format('m-d-Y') : 'n/a' }}</a></td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-primary col-sm-4 col-xs-4 text-center" href="{{route('survey.take',$survey->survey_id)}}">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a class="btn btn-primary col-sm-4 col-xs-4 text-center" href="{{route('get.survey.edit',$survey->survey_id)}}">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a onclick="return confirm('Are you sure you want to delete this record?')" href="<?php echo e(route('get.survey.delete', $survey->survey_id)); ?>" class="btn btn-danger col-sm-4 col-xs-4 text-center">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="12" style="text-align: center">No, Survey Found!</td></tr>
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
