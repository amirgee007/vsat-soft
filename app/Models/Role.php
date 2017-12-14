<?php

namespace App\Models;


use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $table = 'roles';
    protected $primaryKey= 'id';
    protected $guarded = [];
    protected $dates = ['created_at' , 'updated_at'];


    public function permissions()
    {
        return $this->belongsToMany(Permission::class , 'permission_role' ,'role_id','permission_id');
    }

    public function relatedPermissions(){
        return $this->permissions->pluck('id' ,'name')->toArray();
    }
}
