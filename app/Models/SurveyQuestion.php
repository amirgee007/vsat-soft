<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyQuestion extends Model
{
    protected $table = 'survey_questions';
    protected $guarded = [];
    protected $primaryKey = 'question_id';
}
