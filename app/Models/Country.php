<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $guarded = [];
    protected $primaryKey= 'country_id';

    public function cities(){
        return $this->hasMany( City::class , 'country_id' , 'country_id');
    }

    public function scopeIsActive($query)
    {
        return $query->where('is_active', 1);
    }



}
