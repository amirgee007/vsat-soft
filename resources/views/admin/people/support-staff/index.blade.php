@extends('admin/layouts/default')

@section('pageTitle', 'Support Staff')

@section('header_styles')
    {{--<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css"/>--}}
@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-users"></i>SUPPORT STAFF MANAGEMENT [{{count($supportStaff)}}]</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="fa fa-users"></i>SUPPORT STAFF MANAGEMENT</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <a class="btn btn-primary btn-lg"
                           href="{{ route('people.supportStaff.createStaff') }}" title="Add Client">
                            Add New Staff
                        </a>
                    </div>
                </div>
                <section class="panel">
                    <header class="panel-heading">
                        Support Staff
                    </header>

                    <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <th class="text-center"><i class="fa fa-sort-numeric-asc"></i> S/N</th>
                            <th><i class="icon_profile"></i> Employee Name</th>
                            <th><i class="icon_calendar"></i> Created Date</th>
                            <th><i class="icon_mobile"></i> Cell</th>
                            <th><i class="icon_question"></i> Status</th>
                            <th><i class="icon_cogs"></i> Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($supportStaff as $staff)
                            <tr>
                                <td class="text-center"> {{ $loop->iteration }} </td>
                                <td><a href="#">{{ $staff->first_name }}</a></td>
                                <td><a href="#">{{ $staff->created_at ? $staff->created_at->format('m-d-Y') : 'N/A' }}</a></td>
                                <td><a href="#">{{ $staff->cell_number }}</a></td>
                                <td>
                                    <div class="btn-group col-sm-10 col-xs-12">
                                        <a class="btn btn-info btn-sm col-xs-12 disabled" href="#">
                                            {{$staff->status == '1' ? 'Active' : 'De-active'}}
                                        </a>
                                    </div>
                                </td>
                                <td>

                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-6 col-xs-6 text-center" href="{{route('people.supportStaff.editStaff',$staff->support_staff_id)}}">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        {{--todo: sweet alert for all the confirmation boxes--}}

                                        <a onclick="return confirm('Are you sure you want to delete this record?')" href="<?php echo e(route('people.supportStaff.delete', $staff->support_staff_id)); ?>" class="btn btn-danger col-sm-6 col-xs-6 text-center">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="12" style="text-align: center">No, Support Staff Found!</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </section>

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
