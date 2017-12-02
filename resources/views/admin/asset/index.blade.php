@extends('admin/layouts/default')
@section('pageTitle', 'Assets Management')

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-users"></i> Assets Management</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="fa fa-users"></i>Assets Management</li>
                    </ol>
                </div>
            </div>
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <a class="btn btn-primary btn-lg" href="{{ route('asset.create') }}" title="Add Asset">Add New Asset</a>
                    </div>
                    <section class="panel">
                        <header class="panel-heading">
                            Assets
                        </header>
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                            <tr>
                                <th class="text-center"><i class="fa fa-sort-numeric-asc"></i> S/N</th>
                                <th><i class="fa fa-houzz"></i> Serial No#</th>
                                <th><i class="fa fa-houzz"></i> Asset Name</th>
                                <th><i class="icon_calendar"></i> Purchase Date</th>
                                <th><i class="icon_question"></i> Cost Price</th>
                                <th><i class="icon_calendar"></i> Created Date</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($assets as $asset)
                                <tr>
                                    <td class="text-center"> {{ $loop->iteration }} </td>
                                    <td><a href="#">{{ $asset->serial_number }}</a></td>
                                    <td><a href="#">{{ $asset->asset_name }}</a></td>
                                    <td><a href="#">{{ $asset->purchase_date }}</a></td>
                                    <td><a href="#">{{ $asset->cost_price }}$</a></td>
                                    <td><a href="#">{{ $asset->created_at ? $asset->created_at->format('m-d-Y') : 'n/a' }}</a></td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-primary col-sm-6 col-xs-6 text-center" href="{{route('asset.edit',$asset->asset_id)}}">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            {{--todo: sweet alert for all the confirmation boxes--}}

                                            <a onclick="return confirm('Are you sure you want to delete this record?')" href="<?php echo e(route('asset.delete', $asset->asset_id)); ?>" class="btn btn-danger col-sm-6 col-xs-6 text-center">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="12" style="text-align: center">No, Asset Found!</td></tr>
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