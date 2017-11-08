<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
    protected $guarded = [];
    protected $primaryKey= 'id';

    public function country() {
        return $this->hasOne( Country::class , 'country_id' , 'country_id');
    }
}
