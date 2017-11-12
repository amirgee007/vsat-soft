<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table = 'sites';
    protected $guarded = [];
    protected $primaryKey = 'site_id';
    protected $dates = ['created_at'];

    static function getMaxSiteId(){
        $id = self::max('site_id');
        if(is_null($id))
            $site_id = 'S-01';
        else
            $site_id = 'S-'.($id+1);

        return $site_id;
    }

}
