<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketComment extends Model
{
    protected $table = 'ticket_comments';
    protected $guarded = [];
    protected $primaryKey= 'comment_id';

    public function user(){
        return $this->hasOne(\App\User::class , 'id' , 'user_id');
    }
}
