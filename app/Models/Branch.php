<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{

    protected $table = 'branches';
    protected $primaryKey= 'branch_id';
    protected $guarded = [];
    protected $dates = ['created_at' , 'updated_at'];

    static function getMaxBranchId(){
        $id = self::max('branch_id');
        if(is_null($id))
            $branch_id = 'B-01';
        else
            $branch_id = 'B-'.($id+1);

        return $branch_id;
    }

    public function staffs(){
        return $this->belongsToMany(SupportStaff::class ,'branch_staff' ,'branch_id','staff_id' );
    }

    public function relatedStaff(){

      return $this->staffs->pluck('first_name' ,'support_staff_id')->toArray();

    }


}
