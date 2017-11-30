@extends('admin/layouts/default')
@section('pageTitle', ' Take Survey')
@section('header_styles')
    <style>
        .table-question td:first-child {
            width: 151px;
        }
        .table-question th {
            background: #3c8dbc;
            color: #fff;
        }
    </style>
@stop
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header"><i class="fa fa-user-plus"></i>Do you know Laravel Blade?</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('index.dashboard') }}">Home</a></li>
                        <li><i class="fa fa-users"></i><a href="{{ route('index.dashboard') }}">Survey Management</a></li>
                        <li><i class="fa fa-user-plus"></i>Do you know Laravel Blade?</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                        <form method="POST" action="" accept-charset="UTF-8">
                            <div class="box box-primary">
                                <section class="panel">
                                <div class="panel-body">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Answer these questions. There's no time limit.</h3>
                                </div>
                                <div class="box-body">
                                    <table class="table table-bordered table-responsive table-question">
                                        <thead>
                                        <th class="text-left"><strong>Question #1</strong></th>
                                        <th class="text-left"><strong>Look at the code snippet. Which of these four flags does not
                                                exist?</strong>
                                        </th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Code snippet</td>
                                            <td>
                                                <pre>php artisan make:model Project --migration --controller --resource --seed</pre>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Options</td>
                                            <td class="text-left">
                                                <div class="icheck">
                                                    <div>
                                                        <label>
                                                            <input type="radio" name="answers[78]" value="311">
                                                            --controller
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" name="answers[78]" value="312">
                                                            --resource
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" name="answers[78]" value="310">
                                                            --migration
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" name="answers[78]" value="309">
                                                            --seed
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <input name="questions[1]" type="hidden" value="78">
                                    </table>
                                    <p></p>
                                    <table class="table table-bordered table-responsive table-question">
                                        <thead>
                                        <th class="text-left"><strong>Question #2</strong></th>
                                        <th class="text-left"><strong>What command will show you all available routes in Laravel?</strong>
                                        </th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-left">Options</td>
                                            <td class="text-left">
                                                <div class="icheck">
                                                    <div>
                                                        <label>
                                                            <input type="radio" name="answers[80]" value="318">
                                                            artisan route:all
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" name="answers[80]" value="319">
                                                            artisan route:get
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" name="answers[80]" value="317">
                                                            artisan route:list
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" name="answers[80]" value="320">
                                                            artisan routes
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <input name="questions[2]" type="hidden" value="80">
                                    </table>
                                </div>
                                </div>
                                </section>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit Answers</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </section>
    </section>
@stop