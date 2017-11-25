<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstallationLog extends Model
{
    protected $table = 'installation_logs';
    protected $guarded = [];
    protected $primaryKey = 'installation_log_id';

    static function getMaxJobNumber(){

        $id = self::max('installation_log_id');

        if(is_null($id))
            $job_number= 'ICS-I-01';
        else
            $job_number= 'ICS-I-'.($id+1);

        return $job_number;
    }

    public function branches(){
        return $this->belongsToMany(Branch::class ,'branch_installation_log' ,'installation_log_id','branch_id' );
    }


    public function relatedBranches(){
        return $this->branches->pluck('name' ,'branch_id')->toArray();

    }

    public function staffs(){
        return $this->belongsToMany(SupportStaff::class ,'installation_log_staff' ,'installation_log_id','support_staff_id' );
    }


    public function relatedStaffs(){
        return $this->staffs->pluck('name' ,'support_staff_id')->toArray();

    }
}
