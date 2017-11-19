<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class SupportStaff extends Model
{
    protected $table = 'support_staffs';
    protected $primaryKey= 'support_staff_id';
    protected $guarded = [];

    public function branches()
    {
        return $this->belongsToMany(Branch::class ,'branch_staff' ,'staff_id','branch_id');
    }
    public static function getMaxStaffId()
    {
        $nextStaff = self::max('support_staff_id');
        return 'S-'.($nextStaff+1);
    }

    public function users()
    {
        return $this->belongsToMany(User::class ,'support_staff_user' ,'support_id','user_id' );
    }

    public function relatedUser()
    {
        return $this->users()->pluck('first_name' ,'id')->toArray();
    }
}
