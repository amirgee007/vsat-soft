<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $guarded = [];
    protected $primaryKey= 'client_id';

    public static function getMaxClientId()
    {
        $nextClient = self::max('client_id');
        return 'C-'.($nextClient+1);
    }

    public function users()
    {
        return $this->belongsToMany(User::class ,'client_user' ,'client_id','user_id' );
    }

    public function relatedUser()
    {
        return $this->users()->pluck('first_name' ,'id')->toArray();
    }

    public function country(){
        return $this->belongsTo(Country::class ,'country_id' ,'country_id' );
    }

    public function city(){
        return $this->belongsTo(City::class ,'city_id' ,'city_id' );
    }


}
