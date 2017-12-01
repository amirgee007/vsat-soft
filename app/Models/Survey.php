<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = 'surveys';
    protected $guarded = [];
    protected $primaryKey = 'survey_id';

    public function questions(){
        return $this->hasMany( SurveyQuestion::class , 'survey_id' , 'survey_id');
    }

    public function answers(){
        return $this->hasMany( SurveyQuestion::class , 'survey_id' , 'survey_id')
            ->pluck('correct_answer')->toArray();
    }
}
