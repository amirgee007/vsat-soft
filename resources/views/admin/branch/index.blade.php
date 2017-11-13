@extends('admin/layouts/default')

@section('pageTitle', 'All Branches')

@section('header_styles')
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/datatables/css/dataTables.bootstrap.css') }}" />--}}
{{--    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />--}}
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

                    <section class="panel">
                        <header class="panel-heading">
                            Branches
                        </header>

                        <table class="table table-striped table-advance table-hover">
                            <thead>
                            <tr>
                                <th class="text-center"><i class="fa fa-sort-numeric-asc"></i> S/N</th>
                                <th><i class="icon_flowchart_alt"></i> Branch Name</th>
                                <th><i class="icon_building"></i> City</th>
                                <th><i class="icon_mail_alt"></i> Email</th>
                                <th><i class="icon_phone "></i> Office Tel.</th>
                                <th><i class="icon_calendar"></i> Created Date</th>
                                <th><i class="icon_question"></i> Status</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($branches as $branch)
                            <tr>
                                <td class="text-center"> {{ $loop->iteration }} </td>
                                <td><a href="#">{{ $branch->name }}</a></td>
                                <td><a href="#">{{ $branch->city }}</a></td>
                                <td><a href="#">{{ $branch->email }}</a></td>
                                <td><a href="#">{{ $branch->office_tel }}</a></td>
                                <td><a href="#">{{ $branch->created_at ? $branch->created_at->format('m-d-Y') : 'n/a' }}</a></td>
                                <td>
                                    <div class="btn-group col-sm-10 col-xs-12">
                                        <a class="btn btn-info btn-sm col-xs-12 disabled" href="#">
                                         {{$branch->status == 'enable' ? 'Active' : 'Deactive'}}
                                        </a>
                                    </div>
                                </td>
                                <td>

                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-6 col-xs-6 text-center" href="{{route('get.branch.edit',$branch['branch_id'])}}">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                    {{--todo: sweet alert for all the confirmation boxes--}}

                                        <a onclick="return confirm('Are you sure you want to delete this record?')" href="<?php echo e(route('branch.delete', $branch->branch_id)); ?>" class="btn btn-danger col-sm-6 col-xs-6 text-center">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr><td colspan="12" style="text-align: center">No, Branch Found!</td></tr>
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

    {{--<script type="text/javascript" src="{{ asset('assets/datatables/js/jquery.dataTables.js') }}" ></script>--}}
    {{--<script type="text/javascript" src="{{ asset('assets/datatables/js/dataTables.bootstrap.js') }}" ></script>--}}

    <script>

        $(function () {

            {{--$('#table').DataTable({--}}
                {{--processing: true,--}}
                {{--serverSide: true,--}}
                {{--iDisplayLength: 100,--}}
                {{--"order": [[ 0, "asc" ]],--}}
                {{--ajax: '{!! route('data.cities.dt') !!}',--}}
                {{--columns: [--}}
                    {{--{ data: 'city_id', name: 'city_id' },--}}
                    {{--{ data: 'country_name', name: 'country_name' },--}}
                    {{--{ data: 'city_name', name: 'city_name' },--}}
                    {{--{ data: 'actions', name: 'actions', orderable: false, searchable: false }--}}
                {{--]--}}
            {{--});--}}


            //all jquery code here
        });

    </script>
@stop
