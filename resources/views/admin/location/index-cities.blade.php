@extends('admin/layouts/default')

@section('pageTitle', 'Cities')

@section('header_styles')
    {{--<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css"/>--}}
@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="icon_building"></i>Cities</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="icon_building"></i>Cities</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">

                        <header class="panel-heading">
                            Cities
                        </header>
                        <span class="counter pull-right"></span>
                        <table class="table table-striped table-hover results">
                            <thead>
                            <tr>
                                <th class="text-center">S/N</th>
                                <th class="text-center">Country Name</th>
                                <th class="text-center">City Name</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach((object)$cities as $city)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-center">{{$city->country_name}}</td>
                                <td class="text-center">{{$city->city_name}}</td>
                                <td class="text-center">
                                    <input type="checkbox" class="status" data-id="{{$city->city_id}}" {{$city->is_active ? 'checked' : ''}}/>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>
                    <div class="pull-right"> {{ $cities->links() }}</div>
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

            $('.status').on('change' , function () {
                status_checkbox = $(this);
                city_id = status_checkbox.attr('data-id');
                ischecked= status_checkbox.is(':checked');
                if (ischecked){
                    ischecked = 1
                }else {
                    ischecked = 0
                }
                var data = {'is_active':ischecked , 'city_id' : city_id};

                console.log(data);
                var action = '{{route('post.city.status')}}';
                $.ajax({
                    url: action,
                    data: data,
                    headers: { 'X-XSRF-TOKEN' : '{{\Illuminate\Support\Facades\Crypt::encrypt(csrf_token())}}' },
                    error: function() {

                    },
                    success: function() {
                        toastr.success("City has been updated.", "Info");
                    },
                    type: 'POST'
                });

            });


            //knob
            $(".knob").knob();
    });

    </script>
@stop
