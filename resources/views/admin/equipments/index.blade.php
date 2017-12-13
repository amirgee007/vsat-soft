@extends('admin/layouts/default')
@section('pageTitle', 'TOOLS & EQUIPMENT')
@section('header_styles')
<style>
    .transition {
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
    }
</style>
@stop
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-wrench"></i> Tools & Equipment [{{count(@$tools)}}]</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('index.dashboard') }}">Home</a></li>
                        <li><i class="fa fa-wrench"></i>Tools & Equipment</li>
                    </ol>
                </div>
            </div>
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <a class="btn btn-primary btn-lg" href="{{route('equipments.tools.create')}}" title="Add Tools">Add New Tool</a>
                    </div>
                    <section class="panel">
                        <header class="panel-heading">
                            Tools & Equipment
                        </header>
                        <table class="table table-striped table-hover tools">
                            <thead>
                            <tr>
                                <th class="text-center"> S/N</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th class="text-center">Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($tools AS $tool)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $tool->tool_name }}</td>
                                    <td>{{ $tool->tool_type }}</td>
                                    <td>{{ $tool->description }}</td>
                                    <td class="text-center">
                                        <img class="img-zoom" style="width: 250px;height: 250px;"  src="{{asset('uploads/tools_equipments/'.$tool->tool_img)}}"  />
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-primary col-sm-6 col-xs-6 text-center" href="{{ route('equipments.tools.edit', ['id'=>$tool->tool_id]) }}"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger col-sm-6 col-xs-6 text-center"
                                               onclick="return confirm('Are you sure you want to delete this record?')"
                                               href="{{ route('equipments.tools.delete', ['id'=>$tool->tool_id]) }}"><i class="fa fa-close"></i></a>
                                        </div>

                                    </td>
                                </tr>
                                @empty
                                <tr><td colspan="12" style="text-align: center">No, Tools Found!</td></tr>
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
    <script>
        $(function () {
            //all jquery code here
            $('.img-zoom').hover(function() {
                $(".img-zoom").addClass('transition');

            }, function() {
                $(".img-zoom").removeClass('transition');
            });
        });
    </script>
@stop
