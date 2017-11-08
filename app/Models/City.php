<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $guarded = [];
    protected $primaryKey = 'city_id';
    protected $appends = ['country_name'];

    public function state() {
        return $this->hasOne( State::class , 'state_id' , 'state_id');
    }

    public function getCountryNameAttribute(){

        if (!is_null($this->state->country)){
            $name = $this->state->country->full_name;
        }
        else
            $name = 'n/a';

        return $name;
    }


}
