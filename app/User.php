<?php

namespace App;

use App\Models\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{

    use EntrustUserTrait;
    protected $appends = ['name'];
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','first_name' ,'last_name','cell_num' ,'phone_num' ,'country' ,'date_of_birth' ,'profession','profile_pic'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['created_at'];


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }


    public function getNameAttribute()
    {
     return $this->username;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class , 'role_user' ,'user_id','role_id');
    }

    public function relatedRoles(){
        return $this->roles->pluck('id' ,'name')->toArray();
    }

}

