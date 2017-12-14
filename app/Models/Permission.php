<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    protected $table = 'permissions';
    protected $primaryKey= 'id';
    protected $guarded = [];
    protected $dates = ['created_at' , 'updated_at'];


    public static function permissionsByRouteGroups() {

        $permissions = [
            'location'=>'location',
            'my-profile'=>'my-profile',
            'people'=>'people',
            'branch'=>'branch',
            'site'=>'site',
            'ticket'=>'ticket',
            'asset'=>'asset',
            'equipments'=>'equipments',
            'log'=>'log',
            'documents'=>'documents',
            'survey'=>'survey',
            'reports'=>'reports',
            'settings'=>'settings',
            ];

        return $permissions;
    }

}
