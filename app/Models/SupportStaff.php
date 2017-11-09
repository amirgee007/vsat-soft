<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportStaff extends Model
{
    protected $table = 'support_staffs';
    protected $primaryKey= 'support_staff_id';
    protected $guarded = [];

    public function branches(){
        return $this->belongsToMany(Branch::class ,'branch_staff' ,'staff_id','branch_id');

    }
}
