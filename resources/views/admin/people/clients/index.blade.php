@extends('admin/layouts/default')

@section('pageTitle', 'sample page')

@section('header_styles')
    {{--<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css"/>--}}
@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-users"></i> Client Management</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="fa fa-users"></i>Client Management</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <a class="btn btn-primary btn-lg" href="{{ route('people.clients.createClients') }}" title="Add Client">Add New Client</a>
                    </div>
                    <section class="panel">
                        <header class="panel-heading">
                            Clients
                        </header>

                        <table class="table table-striped table-advance table-hover">
                            <thead>
                            <tr>
                                <th class="text-center"><i class="fa fa-sort-numeric-asc"></i> S/N</th>
                                <th><i class="fa fa-houzz"></i> Organization Name</th>
                                <th><i class="icon_calendar"></i> Created Date</th>
                                <th><i class="fa fa-flag"></i> Country</th>
                                <th><i class="icon_building"></i> City</th>
                                <th><i class="icon_question"></i> Status</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($data['clients'] as $client)
                                <tr>
                                    <td class="text-center"> {{ $loop->iteration }} </td>
                                    <td><a href="#">{{ $client->org_name }}</a></td>
                                    <td><a href="#">{{ $client->created_at ? $client->created_at->format('m-d-Y') : 'n/a' }}</a></td>
                                    <td><a href="#">{{ $client->country }}</a></td>
                                    <td><a href="#">{{ $client->city }}</a></td>
                                    <td>
                                        <div class="btn-group col-sm-10 col-xs-12">
                                            <a class="btn btn-info btn-sm col-xs-12 disabled" href="#">
                                                {{$client->confirm_by_status == 'Enable' ? 'Active' : 'De-active'}}
                                            </a>
                                        </div>
                                    </td>
                                    <td>

                                        <div class="btn-group">
                                            <a class="btn btn-primary col-sm-6 col-xs-6 text-center" href="{{route('people.clients.editClients',$client->client_id)}}">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            {{--todo: sweet alert for all the confirmation boxes--}}

                                            <a onclick="return confirm('Are you sure you want to delete this record?')" href="<?php echo e(route('people.clients.delete', $client->client_id)); ?>" class="btn btn-danger col-sm-6 col-xs-6 text-center">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="12" style="text-align: center">No, Client Found!</td></tr>
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

    {{--<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>--}}

    <script>

        $(function () {

            //all jquery code here
        });

    </script>
@stop
