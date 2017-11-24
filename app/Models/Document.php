<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';
    protected $guarded = [];
    protected $primaryKey= 'document_id';

    public function user(){
        return $this->hasOne(\App\User::class , 'id' , 'added_by');
    }
}
