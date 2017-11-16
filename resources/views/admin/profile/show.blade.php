@extends('admin/layouts/default')

@section('pageTitle', 'My Profile')

@section('header_styles')

{{--    <link href="{{ asset('assets/dropify/dist/css/demo.css') }}" rel="stylesheet" type="text/css"/>--}}
    <link href="{{ asset('assets/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>
@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-vcard"></i> Profile</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
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
                                <h4>{{$user->first_name}}</h4>
                                <div class="follow-ava">
                                    <img height="34px" width="34px" src="{{asset('uploads/users/'.$user->profile_pic)}}" alt="">
                                </div>
                                <h6>{{$user->user_name}}</h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <table class="row">
                                    <tr>
                                        <td><i class="fa fa-mortar-board"><span> Profession</span></i></td>
                                        <td>: {{$user->profession}}</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon_mail"></i><span> Email</span></td>
                                        <td>: {{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon_mobile"></i><span>  Cell</span></td>
                                        <td>: {{$user->cell_num}}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="icon_clock"></i><span> Local Time</span>
                                        </td>
                                        <td>: {{\Carbon\Carbon::now()->toDayDateTimeString()}}</td>
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
                                <li class="active">
                                    <a data-toggle="tab" href="#edit-profile" >
                                        <i class="icon-envelope"></i>
                                        Edit Profile
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content">

                                <!-- profile -->
                                <div id="profile" class="tab-pane ">
                                    <section class="panel">
                                        <div class="panel-body bio-graph-info">
                                            <h1>Profile</h1>
                                            <div class="row">
                                                <div class="bio-row">
                                                    <p><span>First Name </span>: {{$user->first_name}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Last Name </span>: {{$user->last_name}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Birthday</span>: {{$user->date_of_birth}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Country </span>: {{$user->country}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Profession </span>: {{$user->profession}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Email </span>:{{$user->email}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Cell </span>: {{$user->cell_num}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Phone </span>:  {{$user->phone_num}}</p>
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
                                <div id="edit-profile" class="tab-pane active">
                                    <section class="panel">
                                        <div class="panel-body bio-graph-info">
                                            <h1> Edit Profile</h1>
                                            <form action="{{route('user.profile-update')}}" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <input type="hidden" name="user_id" value="{{$user->id}}">

                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">First Name</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control" id="f-name" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Last Name</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" name="last_name" value="{{$user->last_name}}" class="form-control" id="l-name" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Country</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" name="country" value="{{$user->country}}" class="form-control" id="c-name" placeholder="Country">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Birthday</label>
                                                    <div class="col-lg-6">
                                                        <input type="date" name="date_of_birth" value="{{\Carbon\Carbon::parse($user->date_of_birth)->format('Y-m-d')}}" class="form-control" id="b-day" placeholder="Birthday">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Profession</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" name="profession" value="{{$user->profession}}" class="form-control" id="occupation" placeholder="Profession">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Email</label>
                                                    <div class="col-lg-6">
                                                        <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Cell</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="cell_num" value="{{$user->cell_num}}" class="form-control" id="cell" placeholder="Cell">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Phone</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="phone_num" value="{{$user->phone_num}}" class="form-control" id="phone" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-6 control-label">Profile Image</label>
                                                    <div class="col-lg-offset-2 col-lg-6">
                                                        <input id="input-file-now" type="file" @if(@$user->profile_pic) data-default-file="{{asset('uploads/users/'.$user->profile_pic)}}" @endif name="profile_pic" class="dropify"/>
                                                        <br />
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
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
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

    <script type="text/javascript" src="{{ asset('assets/dropify/dist/js/dropify.min.js') }}"></script>

    <script>

        $(function () {

            $('.dropify').dropify();
        });

    </script>
@stop
