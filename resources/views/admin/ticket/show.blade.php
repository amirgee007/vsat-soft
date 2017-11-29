@extends('admin/layouts/default')
@section('pageTitle', 'Reply Ticket')
@section('header_styles')
<style>
    #ticketInfo .infoTable td.headline, #ticketInfo .custom-data td.headline
    {
        background: #ddd;
        color: #222;
        font-weight: 700;
        border-radius: 3px;
    }

    .subject {
        color: #222;
        font-size: 20px;
        margin-bottom: 20px;
        text-transform: uppercase;
        font-weight: 700;
    }
    .mesg {
        background-color: #C3D9FF !important;
    }

    .reply {
        color: #333333;
        background-color: #f5f5f5;
        border-color: #dddddd;
    }
</style>
@stop
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-plus-square"></i>Reply Ticket</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('index.dashboard') }}">Home</a></li>
                        <li><i class="fa fa-plus-square"></i>Reply Ticket</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <h1>TICKET #473450</h1>
                </div>
                <div class="col-md-12 ">
                    <div class="panel">
                        <div class="table-responsive">
                            <table class="table" cellpadding="1" cellspacing="0" border="0" id="ticketInfo">
                                <tr>
                                    <td width="50%">
                                        <table class="infoTable" cellspacing="1" cellpadding="3" width="100%" border="0">
                                            <thead>
                                            <tr>
                                                <td class="headline" colspan="2">
                                                    Basic Ticket Information
                                                </td>
                                            </tr>
                                            </thead>
                                            <tr>
                                                <th width="100">Ticket Status:</th>
                                                <td>Open</td>
                                            </tr>
                                            <tr>
                                                <th>Department:</th>
                                                <td>Support</td>
                                            </tr>
                                            <tr>
                                                <th>Create Date:</th>
                                                <td>11/28/17 5:23 PM</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="50%">
                                        <table class="infoTable" cellspacing="1" cellpadding="3" width="100%" border="0">
                                            <thead>
                                            <tr>
                                                <td class="headline" colspan="2">
                                                    User Information
                                                </td>
                                            </tr>
                                            </thead>
                                            <tr>
                                                <th width="100">Name:</th>
                                                <td>Hadi</td>
                                            </tr>
                                            <tr>
                                                <th width="100">Email:</th>
                                                <td>seersol92@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <th>Phone:</th>
                                                <td>123456788</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <!-- Custom Data -->
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br>
                    <div class="subject">
                        Ticket subject:  test
                    </div>
                    <hr />
                    <div class="panel panel-default">
                        <div class="panel-heading ">
                            <b>Ticket Description</b>
                        </div>
                        <div class="panel-body">
                            hi there :) <br>
                            hi there :)<br>
                            hi there :)<br>
                            hi there :)<br>
                        </div>
                    </div>
                    <div class="subject">
                        Ticket Conversation
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading mesg">
                            <b>hadi</b>
                            <div class="pull-right">
                                posted <time datetime="2017-11-29T10:33:36+00:00" title="Wednesday, November 29, 2017 3:33 PM">11/29/17 3:33 PM</time>            <span style="max-width:500px" class="faded title truncate"></span>
                            </div>
                        </div>
                        <div class="panel-body">hi there :)</div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading reply">
                            <h3 class="panel-title"><b>Post a reply</b></h3>
                        </div>
                        <div class="panel-body">
                            <textarea name="message" id="" cols="30" rows="10" ></textarea>
                        </div>
                    </div>
                    <section class="panel">
                        <header class="panel-heading">
                            Change Ticket Status
                        </header>
                        <label class="col-lg-2 control-label">Mark Ticket As Solved</label>
                        <div class="col-lg-8"><input type="checkbox" value="1">  &nbsp;&nbsp; Yes
                        <br />
                        </div>
                    </section>
                    <hr />
                        <button type="submit" class="btn btn-primary">Send Reply</button>
                    <button type="button" class="btn btn-danger">Go Back</button>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
    <!--main content end-->
@stop
@section('footer_scripts')
    <!-- todo: replace ck cdn -->
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'message' );
        $(function () {
            //all jquery code here
        });
    </script>
@stop
