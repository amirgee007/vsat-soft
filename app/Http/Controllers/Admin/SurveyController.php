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
            return redirect()->route('survey.site.index');
        else
            return redirect()->route('survey.performance.index');

    }

    public function edit($id)
    {
        $survey = Survey::where('survey_id',$id)->first();

        $questions = $survey->questions;
        return view('admin.survey.edit' ,compact('survey'));
    }

    public function update(Request $request)
    {
        $survey = Survey::where('survey_id',$request->survey_id)->first();

        $inputs = $request->all();
        $survey->update($request->except(['_token' ,'survey_id','question_name', 'questions_options' ,'correct_answer']));
        $survey->questions()->delete();

        if($survey)
            for($i = 1; $i <=count($request->question_name) ; $i++)
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

        session()->flash('app_message', 'survey Has Been Updated Successfully!');

        if($survey->type=='site')
            return redirect()->route('survey.site.index');
        else
            return redirect()->route('survey.performance.index');

    }

    public function takeSurvey($id)
    {
        $survey = Survey::where('survey_id',$id)->first();
        $questions = $survey->questions;
        return view('admin.survey.survey-questions' ,compact('questions', 'survey'));
    }

    public function submitSurveyResult(Request $request)
    {
         $input = $request->all();
         $answers = $input['answers'];
         reset($answers);
         $surveyId = key($answers);
         $answers = $answers[$surveyId];
         $survey = Survey::where('survey_id', $surveyId)->first();
         $correctAnswers = $survey->answers();
         if ( count($answers) == count($correctAnswers) )
         {
             array_unshift($correctAnswers,"");
             unset($correctAnswers[0]);
             $result = array_diff_assoc($correctAnswers, $answers);
             dd('Number of Wrong Answers:'.count($result));

         }

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
