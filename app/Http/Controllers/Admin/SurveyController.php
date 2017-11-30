<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SurveyController extends Controller
{
    public function index()
    {
    }

    public function site()
    {
        return view('admin.survey.site');
    }

    public function performance()
    {
        return view('admin.survey.performance');
    }
    public function create()
    {
        return view('admin.survey.create');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }

    public function takeSurvey()
    {
        return view('admin.survey.survey_questions');
    }
}
