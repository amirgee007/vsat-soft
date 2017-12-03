@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Add Permission
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

@stop


{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add Permission</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-fw fa-home"></i>
                    Dashboard
                </a>
            </li>
            <li>Permission</li>
            <li>
                <a href="#">Add Permission</a>
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-fw fa-plus"></i>
                            Add Permission
                        </h3>

                    </div>
                    <div class="panel-body">
                        <!--main content-->
                        <div class="position-center">
                            @if($errors->hasbag())
                                @foreach ($errors->all() as $error)
                                    <div class="text-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                            <div>

                                <h3 class="text-primary">Permission Information</h3>
                            </div>


                            <form method="post" role="form" action="{{route('admin.permissions.store' )}}" class="form-horizontal" accept-charset="UTF-8">
                                {{--<input name="_method" type="hidden" value="PUT">--}}

                                {!! Form::token() !!}


                                <div class="cd-block">
                                    <div class="cd-content">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="name">Name</label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-user-md text-primary"></i>
                                                                </span>
                                                    <input type="text" placeholder="Name" name="name" id="name" class="form-control" value="" required="" />
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="slug">Slug</label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-user-md text-primary"></i>
                                                                </span>
                                                    <input type="text" placeholder="slug" name="slug" id="slug" class="form-control" value="" required="" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="slug">Description</label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-user-md text-primary"></i>
                                                                </span>
                                                    <input type="text" placeholder="Description" name="description" id="description" class="form-control" value="" required="" />
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <input type="submit" class="btn btn-primary" name="save" value="Save" />
                                                <a href="{{ URL::previous() }}" class="btn btn-default" role="button">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--row end-->
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript">

        (function () {


        })();

    </script>



@stop