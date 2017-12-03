@extends('admin/layouts/default')
@section('pageTitle', 'PROJECT DOCUMENTS')
@section('header_styles')
    <style>
        .custom-select{
            color:white;
            background-color:#005370;
        }
    </style>
@stop
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-file"></i>Project Documents</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('index.dashboard') }}">Home</a></li>
                        <li><i class="fa fa-file"></i>Project Documents</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <!--Project Documents Filter Start-->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="page-header">
                            <a class="btn btn-primary btn-lg" href="{{ route('document.project.create') }}" title="Add New Project">Add New Project</a>
                        </div>
                        <section class="panel panel-default">
                            <header class="panel-heading">

                                <i class="fa fa-filter"></i>
                                <h2>Filter By</h2>
                            </header>
                            <div class="panel-body">
                                <!-- /btn-group -->
                                {{csrf_field()}}
                                <div class="btn-group col-sm-3 col-xs-3">
                                    <select name="region_id" id="region" class="form-control custom-select">
                                        <option selected hidden>Select Region</option>
                                        @foreach($regions as $region)
                                            <option value="{{$region->region_id}}">{{$region->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /btn-group -->
                                <div class="btn-group col-sm-3 col-xs-3">
                                    <select required name="country_id"  class="form-control custom-select" id="country">
                                        <option selected hidden value="">Select Country</option>
                                    </select>
                                </div>
                                <!-- /btn-group -->
                                <div class="btn-group col-sm-3 col-xs-3">
                                    <select required name="city_id"  class="form-control custom-select" id="city">
                                        <option selected hidden value="">Select City</option>
                                    </select>

                                </div>
                                <!-- /btn-group -->
                                <div class="btn-group col-sm-3 col-xs-3">
                                    <select required name="project_id"  class="form-control custom-select" id="project">
                                        <option selected hidden value="">Select Project</option>
                                        @foreach($projects AS $project)
                                            <option value="{{$project->document_id}}">{{$project->project_name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="btn_wrapper">
                                    <!-- /btn-group -->
                                    <div  class="btn-group col-sm-6 col-xs-6 pull-right">
                                        <a id="search_project"  class="btn btn-primary col-sm-10 col-xs-10" href="javascript:void(0);"  title="Search Project Documents">Search</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>

                <!--Project Documents Filter End-->
                <div class="row">
                    <!-- Table start -->
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Project Documents
                            </header>

                            <table class="table table-advance table-hover">
                                <thead>
                                <tr>
                                    <th><i class="fa fa-flag"></i> Country</th>
                                    <th><i class="icon_building"></i> City</th>
                                    <th><i class="fa fa-tasks"></i> Project Name</th>
                                    <th><i class="fa fa-file-text-o"></i> File Name</th>
                                    <th><i class="icon_calendar"></i> Added Date</th>
                                    <th><i class="icon_profile"></i> Added By</th>
                                    <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                                </thead>
                                <tbody id="project-table">
                                @forelse($projects AS $project)
                                    <tr>
                                        <td>{{ $project->country->full_name }}</td>
                                        <td>{{ $project->city->city_name }}</td>
                                        <td>{{ $project->project_name }}</td>
                                        <td class="col-sm-6 col-xs-5">
                                            {{ $project->file_name }}
                                        </td>
                                        <td><a href="#">{{ $project->created_at ? $project->created_at->format('m-d-Y') : 'N/A' }}</a></td>
                                        <td>{{ $project->user->username }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-primary col-sm-4 col-xs-4 text-center"
                                                   href="{{ asset('uploads/documents/'.$project->file_upload_name) }}" download><i class="fa fa-download"></i></a>
                                                <a class="btn btn-success col-sm-4 col-xs-4 text-center" href="{{ route('document.project.edit', ['id' => $project->document_id]) }}"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger col-sm-4 col-xs-4 text-center" onclick="return confirm('Are you sure you want to delete this record?')" href="{{ route('document.project.delete', ['id' => $project->document_id]) }}"><i class="fa fa-close"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="12" style="text-align: center">No,Project Documents Found!</td></tr>
                                @endforelse
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        </section>
    <!--main content end-->
@stop
@section('footer_scripts')
    @include('admin.common.ajax-location-onchange')
@stop
