@extends('admin/layouts/default')
@section('pageTitle', 'Create Survey')
<style>
    .survey-answer-free{
        display: none !important;
    }
</style>
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-plus-square"></i>Add Survey</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('index.dashboard') }}">Home</a></li>
                        <li><i class="fa fa-plus-square"></i>Add New Survey</li>
                    </ol>
                </div>
            </div>
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <div class="panel-body bio-graph-info">
                            <h1>Add New Survey</h1>
                            <form class="form-horizontal" role="form" action="{{ route('survey.store') }}" method="post" >
                                @include('admin.survey.form')
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-danger">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
    <!--main content end-->
@stop
