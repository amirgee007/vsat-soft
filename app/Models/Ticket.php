<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $guarded = [];
    protected $primaryKey= 'ticket_id';

    public function user(){
        return $this->hasOne(\App\User::class , 'id' , 'added_by');
    }

    public function site(){
        return $this->hasOne(Site::class, 'site_id' , 'site_id')->select('name');
    }

}
