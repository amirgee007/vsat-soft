<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';
    protected $guarded = [];
    protected $primaryKey= 'document_id';

    public function user(){
        return $this->hasOne(\App\User::class , 'id' , 'added_by');
    }

    public function users()
    {
        return $this->belongsToMany(User::class ,'special_doc_user' ,'document_id','user_id' );
    }

    public function relatedUser()
    {
        return $this->users()->pluck('first_name' ,'id')->toArray();
    }
}
