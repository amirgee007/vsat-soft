<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $guarded = [];
    protected $primaryKey = 'city_id';
    protected $appends = ['country_name'];
    public $timestamps=false;


    public function country(){
        return $this->hasOne( Country::class , 'country_id' , 'country_id');
    }

    public function scopeIsActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function getCountryNameAttribute(){

        if (!is_null($this->country)){
            $name = $this->country->full_name;
        }
        else
            $name = 'n/a';

        return $name;
    }


}
