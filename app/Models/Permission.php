<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    protected $table = 'permissions';
    protected $primaryKey= 'id';
    protected $guarded = [];
    protected $dates = ['created_at' , 'updated_at'];
}
