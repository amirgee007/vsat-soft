<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $appends = ['name'];
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 'email', 'password','first_name' ,'last_name','cell_num' ,'phone_num' ,'country' ,'date_of_birth' ,'profession','profile_pic'
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
     return $this->user_name;

    }
}
