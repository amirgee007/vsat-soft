@extends('admin/layouts/default')

@section('pageTitle', 'Regions')

@section('header_styles')
    {{--<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css"/>--}}
@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa  fa-map-o"></i>Regions</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="fa  fa-map-o"></i>Regions</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Regions
                        </header>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">S/N</th>
                                <th style="vertical-align: middle" class="text-center">Region Name</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($regions as $region)
                                <tr>
                                    <td class="text-center">{{$region->region_id}}</td>
                                    <td style="vertical-align: middle" class="text-center">{{$region->name}}</td>
                                    <td class="text-center">
                                        <input type="checkbox" class="status" data-id="{{$region->region_id}}" {{$region->is_active ? 'checked' : ''}}/>
                                    </td>
                                </tr>
                            @endforeach
                            {{--<tr>--}}
                                {{--<td>1</td>--}}
                                {{--<td class="text-left">Africa</td>--}}
                                {{--<td><input type="checkbox" class="" /></td>--}}
                            {{--</tr>--}}
                            </tbody>
                        </table>
                    </section>
                    <div class="pull-right"> {{ $regions->links() }}</div>

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
            $('.status').on('change' , function () {
                status_checkbox = $(this);
                region_id = status_checkbox.attr('data-id');
                ischecked= status_checkbox.is(':checked');
                if (ischecked){
                    ischecked = 1
                }else {
                    ischecked = 0
                }
                var data = {'is_active':ischecked , 'region_id' : region_id};

                console.log(data);
                var action = '{{route('post.region.status')}}';
                $.ajax({
                    url: action,
                    data: data,
                    headers: { 'X-XSRF-TOKEN' : '{{\Illuminate\Support\Facades\Crypt::encrypt(csrf_token())}}' },
                    error: function() {

                    },
                    success: function() {
                        toastr.success("Selected Region has been Changed.", "Info");
                    },
                    type: 'POST'
                });

            });

        });

    </script>
@stop
