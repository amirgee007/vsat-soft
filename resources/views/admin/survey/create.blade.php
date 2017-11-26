@extends('admin/layouts/default')
@section('pageTitle', 'Create Survey')
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
                            <form class="form-horizontal" role="form" action="http://vsat-soft.dev/documents/special/add" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="h0LTNxMVzwhRfb84AbWfOCXbLJ9SNYN08bgok16t">
                                <div class="panel panel-primary form-group">
                                    <section class="panel">
                                        <div class="panel-content" style="clear: both;">
                                            <div class="form-group">
                                                <label class="col-sm-2 col-xs-3 control-label">Survey Name</label>
                                                <div class="col-sm-10 col-xs-9">
                                                    <input type="text" name="survey_name" value="" class="form-control" placeholder="Survey Name">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 col-xs-3 control-label">Survey Type</label>
                                                <div class="col-sm-10 col-xs-9">
                                                    <select class="form-control" name="survey_type">
                                                        <option selected hidden>Select Survey</option>
                                                        <option value="p">Performance Survey</option>
                                                        <option value="s">Site Survey</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 col-xs-3 control-label">Survey Description</label>
                                                <div class="col-sm-10 col-xs-9">
                                                    <textarea name="survey_des" class="form-control" id="" cols="20" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="form-group">
                                    <section class="panel">
                                        <header class="panel-heading">
                                            Add Questions/Answers To This Survey
                                        </header>
                                        <div class="panel-body">
                                            <label class="col-lg-2 col-xs-3 control-label">Question 1</label>
                                            <div class="col-sm-10 col-xs-9">

                                            </div>
                                        </div>
                                    </section>
                                </div>
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
@section('footer_scripts')
    <script>
        $(function () {
            //all jquery code here
        });
    </script>
@stop
