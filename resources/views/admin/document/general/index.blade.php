@extends('admin/layouts/default')
@section('pageTitle', 'GENERAL DOCUMENTS')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-file"></i>General Documents</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('index.dashboard') }}">Home</a></li>
                        <li><i class="fa fa-file"></i>General Documents</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <a class="btn btn-primary btn-lg" href="{{ route('document.general.create') }}" title="Add General Document">Add New General Document</a>
                    </div>
                    <section class="panel">
                        <header class="panel-heading">
                            General Documents
                        </header>
                        <table class="table table-advance table-hover">
                            <thead>
                            <tr>
                                <th><i class="fa fa-file-text-o"></i> File Name</th>
                                <th><i class="icon_calendar"></i> Added Date</th>
                                <th><i class="icon_profile"></i> Added By</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="col-sm-6 col-xs-5">SP-500-002 Course Notes GVF500 Ed 2 Intro to Satcom Part 1.pdf</td>
                                <td>09-04-2017</td>
                                <td>Mahmoud</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-4 col-xs-4 text-center" href="assets/Documents/Special/SP-500-002 Course Notes GVF500 Ed 2 Intro to Satcom Part 1.pdf" download><i class="fa fa-download"></i></a>
                                        <a class="btn btn-success col-sm-4 col-xs-4 text-center" href="edit_special_document.html"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger col-sm-4 col-xs-4 text-center" name="close" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </section>
        </section>
        <!--main content end-->
 @stop
 @section('footer_scripts')
            <script>
                $(function () {
                    //all jquery code here
                });
            </script>
@stop
