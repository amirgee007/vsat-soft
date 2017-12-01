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
                    <h3 class="page-header"><i class="fa fa-user-plus"></i>{{@$survey->name}}</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('index.dashboard') }}">Home</a></li>
                        <li><i class="fa fa-users"></i><a href="{{ route('index.dashboard') }}">Survey Management</a></li>
                        <li><i class="fa fa-user-plus"></i>{{@$survey->name}}</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                        <form method="POST" action="{{ route('survey.submit.survey') }}" accept-charset="UTF-8">
                            {{ csrf_field() }}
                            <div class="box box-primary">
                                <section class="panel">
                                <div class="panel-body">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Answer these questions. There's no time limit.</h3>
                                </div>
                                <div class="box-body">
                                    @foreach($questions as $question)
                                    <table class="table table-bordered table-responsive table-question">
                                        <thead>
                                        <th class="text-left"><strong>Question #{{$loop->iteration}}</strong></th>
                                        <th class="text-left"><strong>{{$question->question_name}} ?</strong>
                                        </th>
                                        </thead>
                                        <tbody>
                                        <!--<tr>
                                            <td>Explanation</td>
                                            <td>
                                                <pre>Check options Here</pre>
                                            </td>
                                        </tr>-->
                                        <tr>
                                            <td class="text-left">Options</td>
                                            <td class="text-left">
                                                <div class="icheck">
                                                    <div>
                                                        <label>
                                                            <input type="radio" required name="answers[{{@$survey->survey_id}}][{{$loop->iteration}}]" value="1">
                                                            {{$question->option_1}}
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" required name="answers[{{@$survey->survey_id}}][{{$loop->iteration}}]" value="2">
                                                            {{$question->option_2}}
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" required name="answers[{{@$survey->survey_id}}][{{$loop->iteration}}]" value="3">
                                                            {{$question->option_3}}
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label>
                                                            <input type="radio" required name="answers[{{@$survey->survey_id}}][{{$loop->iteration}}]" value="4">
                                                            {{$question->option_4}}
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    @endforeach
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