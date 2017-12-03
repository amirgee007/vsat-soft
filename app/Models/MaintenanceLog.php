<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceLog extends Model
{
    protected $table = 'maintenance_logs';
    protected $guarded = [];
    protected $primaryKey = 'maintenance_log_id';

    static function getMaxJobNumber(){

        $id = self::max('maintenance_log_id');

        if(is_null($id))
            $job_number= 'ICS-M-01';
        else
            $job_number= 'ICS-M-'.($id+1);

        return $job_number;
    }

    public function branches(){
        return $this->belongsToMany(Branch::class ,'branch_maintenance_log' ,'maintenance_log_id','branch_id' );
    }


    public function relatedBranches(){
        return $this->branches->pluck('name' ,'branch_id')->toArray();

    }

    public function staffs(){
        return $this->belongsToMany(SupportStaff::class ,'maintenance_log_staff' ,'maintenance_log_id','support_staff_id' );
    }


    public function relatedStaffs(){
        return $this->staffs->pluck('name' ,'support_staff_id')->toArray();
    }

    public function assets(){
        return $this->belongsToMany(Asset::class ,'asset_maintenance_log' ,'maintenance_log_id','asset_id')->withPivot('quantity');
    }


    public function relatedAssets(){
        return $this->assets()->pluck('name' ,'branch_id')->toArray();
    }
}
