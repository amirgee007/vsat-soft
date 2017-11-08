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
                    <h3 class="page-header"><i class="fa fa-flag"></i>Countries</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-flag"></i>Countries</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Countries
                        </header>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th style="vertical-align: middle" class="text-center">S/N</th>
                                <th style="vertical-align: middle">Country Name</th>
                                <th style="vertical-align: middle" class="text-center">Action</th>
                            </tr>
                            </thead>
                           <tbody>
                           @foreach($countries as $country)
                               <tr>

                                   <td class="text-left">{{$country->country_id}}</td>
                                   <td class="text-left">{{$country->full_name}}</td>
                                   <td>
                                       <input type="checkbox" class="" />
                                   </td>
                               </tr>
                           @endforeach
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
