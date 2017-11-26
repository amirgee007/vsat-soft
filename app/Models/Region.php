<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regions';
    protected $guarded = [];
    protected $primaryKey= 'region_id';

    public function countries(){
        return $this->hasMany( Country::class , 'region_id' , 'region_id');
    }


    public function cities()
    {
        return $this->hasManyThrough(
            City::class,
            Country::class,
            'region_id', // Foreign key on users table...
            'city_id', // Foreign key on posts table...
            'region_id', // Local key on countries table...
            'country_id' // Local key on users table...
        );
    }



}
