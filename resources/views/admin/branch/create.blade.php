@extends('admin/layouts/default')

@section('pageTitle', 'Create Branch')

@section('header_styles')
    {{--<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css"/>--}}
@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-plus-square"></i>Add New Branch</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="icon_flowchart_alt"></i><a href="branches.html">Branch Management</a></li>
                        <li><i class="fa fa-plus-square"></i>Add New Branch</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <div class="panel-body bio-graph-info">
                            <h1>Add New Branch</h1>
                            <form class="form-horizontal" role="form">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="B-number">Branch ID Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="B-number" disabled value="B-10001">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="B-name">Branch Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="B-name" placeholder="Branch Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Branch Address</label>
                                    <div class="col-sm-10">
                                        <label class="col-sm-2 col-xs-3 control-label">Country</label>
                                        <div class="col-sm-4 col-xs-3">
                                            <select class="form-control m-bot15 country">
                                            </select>
                                        </div>
                                        <label class="col-sm-2 col-xs-3 control-label">City</label>
                                        <div class="col-sm-4 col-xs-3">
                                            <select class="form-control m-bot15 city">
                                            </select>
                                        </div>
                                        <label class="col-sm-2 control-label">Street</label>
                                        <span class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Street">
                                            </span>
                                        <label class="col-sm-2 control-label">Area</label>
                                        <span class="col-sm-4">
                                                <input type="text" class="form-control" placeholder="Area">
                                            </span>

                                        <label class="col-sm-2 control-label">State</label>
                                        <span class="col-sm-4">
                                                <input type="text" class="form-control" placeholder="State">
                                            </span>
                                        <label class="col-sm-2 control-label">Zip Code</label>
                                        <span class="col-sm-4">
                                                <input type="text" class="form-control" placeholder="Zip Code">
                                            </span>

                                        <label class="col-sm-2 control-label">P.O.Box</label>
                                        <span class="col-sm-4">
                                                <input type="text" class="form-control" placeholder="P.O.Box">
                                            </span>
                                        <label class="col-sm-2 control-label">Office Tel</label>
                                        <span class="col-sm-4">
                                                <input type="tel" class="form-control" placeholder="Office Tel">
                                            </span>
                                        <label class="col-sm-2 control-label">Fax No</label>
                                        <span class="col-sm-4">
                                                <input type="tel" class="form-control" placeholder="Fax No">
                                            </span>
                                        <label class="col-sm-2 control-label">Email</label>
                                        <span class="col-sm-4">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </span>
                                        <label class="col-sm-2 control-label">Website</label>
                                        <span class="col-sm-4">
                                                <input type="text" class="form-control" placeholder="Website">
                                            </span>
                                        <label class="col-sm-2 control-label">Working Days</label>
                                        <span class="col-sm-4">
                                                <input type="text" class="form-control" placeholder="Working Days">
                                            </span>
                                        <label class="col-sm-2 control-label">Working Times</label>
                                        <span class="col-sm-4">
                                                <input type="tel" class="form-control" placeholder="Working Times">
                                            </span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Branch Logo</label>
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <img src="img/noimage.gif" alt="" />
                                        <input class="btn btn-default" type="file" name="Select image">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Status</label>
                                    <div class="col-lg-10">
                                        <select class="form-control m-bot15">
                                            <option>Enable</option>
                                            <option>Disable</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <section class="panel">
                                        <header class="panel-heading">
                                            Related Staff
                                            <div class="btn-group pull-right">
                                                <a class="btn btn-default addstaff" href="#"><i class="fa fa-plus-square"></i></a>
                                            </div>
                                        </header>
                                        <div class="panel-body">

                                            <label class="col-lg-2 col-xs-3 control-label">Add Support Staff</label>
                                            <div class="col-lg-8 col-xs-7">
                                                <select class="form-control m-bot15">
                                                    <option>Mahmood</option>
                                                    <option>Mohammad</option>
                                                </select>
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

    {{--<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>--}}

    <script>

        $(function () {

            //all jquery code here
        });

    </script>
@stop
