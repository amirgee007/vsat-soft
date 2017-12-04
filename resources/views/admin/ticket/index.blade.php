@extends('admin/layouts/default')
@section('pageTitle', 'Ticket Management')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="icon_flowchart_alt"></i> Ticket Management</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index.dashboard')}}">Home</a></li>
                        <li><i class="icon_flowchart_alt"></i>Ticket Management</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <a class="btn btn-primary btn-lg" href="{{ route('ticket.create') }}" title="Open A New Ticket">
                            Open New Ticket
                        </a>
                    </div>
                    <section class="panel">
                        <header class="panel-heading">
                            Tickets
                        </header>
                        <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <th class="text-center"><i class="fa fa-sort-numeric-asc"></i> Ticket #</th>
                            <th><i class="fa fa-houzz"></i>Create Date</th>
                            <th><i class="fa fa-flag"></i> Subject</th>
                            <th><i class="icon_calendar"></i>Status</th>
                            <th><i class="icon_cogs"></i> View/Reply</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($tickets AS $ticket)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td><a href="#">{{!is_null($ticket->created_at) ? $ticket->created_at->format('m-d-Y') : 'n/a'}}</a></td>
                                <td><a href="#">{{$ticket->subject}}</a></td>
                                <td>
                                    <div class="btn-group col-sm-10 col-xs-12">
                                        <a class="btn @if($ticket->status == 'open') btn-success @else btn-danger @endif btn-sm col-xs-12 disabled" href="#">{{ ucfirst($ticket->status) }}</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-success col-sm-12 col-xs-12 text-center" href="{{route('ticket.reply' ,$ticket->ticket_id)}}"><i class="fa fa-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="12" style="text-align: center">No, Ticket Found!!</td></tr>
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
