@extends('admin/layouts/default')

@section('pageTitle', 'Add New User')

@section('header_styles')
    <link href="{{ asset('assets/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>
@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-user-plus"></i>Add New User</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="fa fa-users"></i><a href="{{route('people.users.index')}}">User Management</a></li>
                        <li><i class="fa fa-user-plus"></i>Add New User</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body bio-graph-info">
                            <h1>Add New User</h1>
                            <form class="form-horizontal" role="form" action="{{ route('people.users.store') }}" method="post" enctype="multipart/form-data">
                                @include('admin.people.users.form')
                            </form>
                        </div>
                    </section>
                </div>

            </div>
        </section>

        <!-- page end-->
    </section>
    <!--main content end-->

@stop

@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/dropify/dist/js/dropify.min.js') }}"></script>
    <link href="{{asset('assets/select2-4.0.4/select2.min.css') }}" rel="stylesheet"/>
    <script src="{{asset('assets/select2-4.0.4/select2.min.js')}}"></script>
    <script>

        $('#role').select2({
            placeholder: "Select Role",
            width: '100%',
            allowClear: true
        });

    </script>


    <script>

        $(function () {

            $('.dropify').dropify();
        });

    </script>


    <script>

        $(function () {
            //knob
            $(".knob").knob();

            $(document).ready(function myfunction() {
                $('.ihide').click(function (e) { e.preventDefault() });
                $('.rihide').click(function (e) { e.preventDefault() });
                $('.hidetoggle').click(function (e) { e.preventDefault() });

                $('.ihide').on('mousedown', function () {

                    $('.inhide').prop('type', 'text');

                });

                $('.ihide').on('mouseup', function () {

                    $('.inhide').prop('type', 'password');
                });

                $('.rihide').on('mousedown', function () {

                    $('.rinhide').prop('type', 'text');

                });

                $('.rihide').on('mouseup', function () {

                    $('.rinhide').prop('type', 'password');
                });


                $('.hidetoggle').on('click', function () {
                    $(this).closest('.panel-primary').find('.divhide').slideToggle(600);
                    $(this).find('.btnhide').toggleClass('fa fa-chevron-down fa fa-chevron-up');
                });

            });
        });

    </script>
@stop
