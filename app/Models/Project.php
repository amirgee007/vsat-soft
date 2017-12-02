<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table = 'project_documents';
    protected $primaryKey= 'document_id';
    protected $guarded = [];
    protected $dates = ['created_at' , 'updated_at'];

    public function user(){
        return $this->hasOne(\App\User::class , 'id' , 'added_by');
    }
    public function city(){
        return $this->hasOne(\App\Models\City::class , 'city_id' , 'city_id');
    }
    public function country(){
        return $this->hasOne(\App\Models\Country::class , 'country_id' , 'country_id');
    }
}
