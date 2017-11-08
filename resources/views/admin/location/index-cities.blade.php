@extends('admin/layouts/default')

@section('pageTitle', 'Active Cities')

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
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="icon_building"></i>Cities</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <div class="form-group">
                            <input type="text" class="search form-control" placeholder="What you looking for?">
                        </div>
                    </div>
                    <section class="panel">

                        <header class="panel-heading">
                            Cities
                        </header>
                        <span class="counter pull-right"></span>
                        <table class="table table-striped table-hover results">
                            <thead>
                            <tr>
                                <th style="vertical-align: middle" class="text-center">S/N</th>
                                <th style="vertical-align: middle">Country Name</th>
                                <th style="vertical-align: middle">City Name</th>
                                <th style="vertical-align: middle" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cities as $city)
                            <tr>
                                <td>{{$city->city_id}}</td>
                                <td class="text-left">{{$city->country_name}}</td>
                                <td class="text-left">{{$city->city_name}}</td>
                                <td><input type="checkbox" class="status" data-id="{{$city->city_id}}" {{$city->is_active ? 'checked' : ''}}/> </td>
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

    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.nicescroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/jquery-knob/js/jquery.knob.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>

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
                        toastr.success("Active status changed successfully.", "City Status");
                    },
                    type: 'POST'
                });

            });


            //knob
            $(".knob").knob();

            $(document).ready(function() {
                $(".search").keyup(function () {
                    var searchTerm = $(".search").val();
                    var listItem = $('.results tbody').children('tr');
                    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

                    $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
                        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
                    }
                    });

                    $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
                        $(this).attr('visible','false');
                    });

                    $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
                        $(this).attr('visible','true');
                    });

                    var jobCount = $('.results tbody tr[visible="true"]').length;
                    $('.counter').text(jobCount + ' item');

                    if(jobCount == '0') {$('.no-result').show();}
                    else {$('.no-result').hide();}
                });
            });

    });

    </script>
@stop
