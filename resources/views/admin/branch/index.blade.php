@extends('admin/layouts/default')

@section('pageTitle', 'All Branches')

@section('header_styles')
    {{--<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css"/>--}}
@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="icon_flowchart_alt"></i> Branch Management [{{@count($branches)}}]</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="icon_flowchart_alt"></i>Branch Management</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <a class="btn btn-primary btn-lg" href="{{route('branch.create')}}" title="Add Branch">Add New Branch</a>
                    </div>
                    @if(session()->has('new_branch'))
                        <div class="alert alert-info">
                            {{ session()->get('new_branch') }}
                        </div>
                    @elseif(session()->has('find'))
                        <div class="alert alert-danger">
                            {{ session()->get('find') }}
                        </div>
                    @endif

                    <section class="panel">
                        <header class="panel-heading">
                            Branches
                        </header>
                        @if (count($branches) > 0)
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                            <tr>
                                <th class="text-center"><i class="fa fa-sort-numeric-asc"></i> S/N</th>
                                <th><i class="icon_flowchart_alt"></i> Branch Name</th>
                                <th><i class="icon_calendar"></i> Created Date</th>
                                <th><i class="icon_building"></i> City</th>
                                <th><i class="icon_mail_alt"></i> Email</th>
                                <th><i class="icon_phone "></i> Office Tel.</th>
                                <th><i class="icon_question"></i> Status</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($branches AS $branch)
                            <tr>
                                <td class="text-center"> {{ $loop->iteration }} </td>
                                <td><a href="view_branch.html">{{ $branch['name'] }}</a></td>
                                <td><a href="view_branch.html">{{ date("F jS, Y", strtotime($branch['created_at'])) }}</a></td>
                                <td><a href="view_branch.html">{{ $branch['city'] }}</a></td>
                                <td><a href="view_branch.html">{{ $branch['email'] }}</a></td>
                                <td><a href="view_branch.html">{{ $branch['office_tel'] }}</a></td>
                                <td>
                                    <div class="btn-group col-sm-10 col-xs-12">
                                        <a class="btn btn-success btn-sm col-xs-12 disabled" href="#">
                                        @if( $branch['status'] == 'Enable')
                                            Active
                                        @else
                                            Deactive
                                        @endif
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-6 col-xs-6 text-center" href="{{route('branch.edit', ['id' => $branch['branch_id']])}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger col-sm-6 col-xs-6 text-center"
                                           href="{{route('branch.delete', ['id' => $branch['branch_id']])}}">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                            <div class="alert alert-info">
                                <b>No, Branches Found.</b>
                            </div>
                        @endif
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
