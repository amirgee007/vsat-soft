@extends('admin/layouts/default')

@section('pageTitle', 'My Profile')

@section('header_styles')
    {{--<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css"/>--}}
@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-vcard"></i> Profile</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-vcard"></i>Profile</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                        <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                                <h4>Jenifer Smith</h4>
                                <div class="follow-ava">
                                    <img src="img/profile-widget-avatar.jpg" alt="">
                                </div>
                                <h6>Administrator</h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <table class="row">
                                    <tr>
                                        <td><i class="fa fa-mortar-board"><span> Profession</span></i></td>
                                        <td>: Designer</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon_mail"></i><span> Email</span></td>
                                        <td>: jenifer@mailname.com</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon_mobile"></i><span>  Cell</span></td>
                                        <td>: (+971) (50) 456 6789</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="icon_clock"></i><span> Local Time</span>
                                        </td>
                                        <td>
                                            <marquee behavior="scroll" loop="-1" scrollamount="5" width="90%">
                                                <i>
                                                    <strong>
                                                        <span id="time"></span>
                                                    </strong>
                                                </i>
                                            </marquee>
                                        </td>
                                    </tr>
                                </table>
                                <br />
                                <br />
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading tab-bg-info">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a data-toggle="tab" href="#profile">
                                        <i class="icon-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#edit-profile">
                                        <i class="icon-envelope"></i>
                                        Edit Profile
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content">

                                <!-- profile -->
                                <div id="profile" class="tab-pane active">
                                    <section class="panel">
                                        <div class="panel-body bio-graph-info">
                                            <h1>Profile</h1>
                                            <div class="row">
                                                <div class="bio-row">
                                                    <p><span>First Name </span>: Jenifer </p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Last Name </span>: Smith</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Birthday</span>: 27 August 1987</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Country </span>: United Arab Emirates</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Profession </span>: Designer</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Email </span>:jenifer@mailname.com</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Cell </span>: (+971) (50) 456 6789</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Phone </span>:  (+971) (4) 554 412</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section>
                                        <div class="row">
                                        </div>
                                    </section>
                                </div>
                                <!-- edit-profile -->
                                <div id="edit-profile" class="tab-pane">
                                    <section class="panel">
                                        <div class="panel-body bio-graph-info">
                                            <h1> Edit Profile</h1>
                                            <form class="form-horizontal" role="form">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">First Name</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="f-name" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Last Name</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="l-name" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Country</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="c-name" placeholder="Country">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Birthday</label>
                                                    <div class="col-lg-6">
                                                        <input type="date" class="form-control" id="b-day" placeholder="Birthday">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Profession</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="occupation" placeholder="Profession">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Email</label>
                                                    <div class="col-lg-6">
                                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Cell</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" id="cell" placeholder="Cell">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Phone</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" id="phone" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Profile Image</label>
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <img  src="img/noimage.gif" alt=""/>
                                                        <input class="btn btn-default" type="file" name="Select image">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                        <button type="button" class="btn btn-danger">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
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
