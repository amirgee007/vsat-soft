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
                            @forelse($docs AS $doc)
                            <tr>
                                <td class="col-sm-6 col-xs-5">
                                    {{ $doc->file_name }}
                                </td>
                                <td><a href="#">{{ $doc->created_at ? $doc->created_at->format('m-d-Y') : 'N/A' }}</a></td>
                                <td>{{ $doc->user->username }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary col-sm-4 col-xs-4 text-center"
                                           href="{{ asset('uploads/documents/'.$doc->file_upload_name) }}" download><i class="fa fa-download"></i></a>
                                        <a class="btn btn-success col-sm-4 col-xs-4 text-center" href="{{ route('document.general.edit', ['id' => $doc->document_id]) }}"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger col-sm-4 col-xs-4 text-center" onclick="return confirm('Are you sure you want to delete this record?')" href="{{ route('document.general.delete', ['id' => $doc->document_id]) }}"><i class="fa fa-close"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr><td colspan="12" style="text-align: center">No, General Documents Found!</td></tr>
                            @endforelse
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
