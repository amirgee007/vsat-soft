<?php

namespace App\Http\Controllers\Admin;

use App\Models\Survey;
use App\Models\SurveyQuestion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SurveyController extends Controller
{

    public function indexSiteSurvey()
    {
        $surveys = Survey::where('type','site')->orderBy('survey_id' ,'desc')->get();
        return view('admin.survey.site' ,compact('surveys'));
    }

    public function indexPerformanceSurvey()
    {
        $surveys = Survey::where('type','performance')->orderBy('survey_id' ,'desc')->get();
        return view('admin.survey.performance' ,compact('surveys'));
    }
    public function create()
    {
        return view('admin.survey.create');
    }
    public function store(Request $request)
    {
        $inputs = $request->all();
        $survey = Survey::create($request->except(['_token' ,'question_name', 'questions_options' ,'correct_answer']));

        if($survey)
            for($i = 0; $i < count($request->question_name) ; $i++)
            {
                $data ['survey_id'] = $survey->survey_id;
                $data ['question_name'] = $inputs['question_name'][$i];
                $data ['option_1'] = $inputs['questions_options'][$i][0];
                $data ['option_2'] = $inputs['questions_options'][$i][1];
                $data ['option_3'] = $inputs['questions_options'][$i][2];
                $data ['option_4'] = $inputs['questions_options'][$i][3];
                $data ['correct_answer'] = $inputs['correct_answer'][$i];
                SurveyQuestion::create($data);
            }

            session()->flash('app_message', 'New survey Has Been Added Successfully!');

        if($survey->type=='site')
            return redirect()->route('survey.site.survey');
        else
            return redirect()->route('survey.performance.survey');

    }

    public function edit($id)
    {
        $survey = Survey::where('survey_id',$id)->first();

        $questions = $survey->questions;
        return view('admin.survey.edit' ,compact('survey'));
    }

    public function update(Request $request)
    {

//        return view('admin.survey.edit' ,compact('survey'));
    }

    public function takeSurvey($id)
    {
        return view('admin.survey.survey-questions' ,compact('id'));
    }

    public function delete($id)
    {
        $is_delete = Survey::where('survey_id',$id)->delete();
        if($is_delete)
            session()->flash('app_message', 'Survey Deleted Successfully!');
        else
            session()->flash('app_warning', 'Survey Not Deleted!');

        return back();
    }
}
