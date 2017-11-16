@extends('admin/layouts/default')

@section('pageTitle', 'Countries')

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
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
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
                        <table class="table table-striped table-hover" id="countriesTable">
                            <thead>
                            <tr>
                                <th class="text-center">S/N</th>
                                <th class="text-center">Country Name</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                           <tbody>
                           @foreach($countries as $country)
                               <tr>
                                   <td class="text-center">{{$country->country_id}}</td>
                                   <td class="text-center">{{$country->full_name}}</td>
                                   <td class="text-center">
                                       <input type="checkbox" class="status" data-id="{{$country->country_id}}" {{$country->is_active ? 'checked' : ''}}/>
                                   </td>
                               </tr>
                           @endforeach
                           </tbody>
                        </table>
                    </section>
                    <div class="pull-right"> {{ $countries->links() }}</div>
                </div>
            </div>

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->

@stop

@section('footer_scripts')
<script type="text/javascript"
        src="{{ asset('js/jquery.dataTables.min.js') }}">
</script>
    <script>
        $(function () {
            $('.status').on('change' , function () {
                status_checkbox = $(this);
                country_id = status_checkbox.attr('data-id');
                ischecked= status_checkbox.is(':checked');
                if (ischecked){
                    ischecked = 1
                }else {
                    ischecked = 0
                }
                var data = {'is_active':ischecked , 'country_id' : country_id};

                console.log(data);
                var action = '{{route('post.country.status')}}';
                $.ajax({
                    url: action,
                    data: data,
                    headers: { 'X-XSRF-TOKEN' : '{{\Illuminate\Support\Facades\Crypt::encrypt(csrf_token())}}' },
                    error: function() {

                    },
                    success: function() {
                        toastr.success("Selected Country has been Changed.", "Info");

                    },
                    type: 'POST'
                });

            });

        });

    </script>
@stop
