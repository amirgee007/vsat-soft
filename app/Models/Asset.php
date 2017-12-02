<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{

    protected $table = 'assets';
    protected $primaryKey= 'asset_id';
    protected $guarded = [];
    protected $dates = ['created_at' , 'updated_at'];

    public function sites(){
        return $this->belongsToMany(Site::class ,'asset_site' ,'asset_id','site_id')->withPivot('quantity');
    }

}
