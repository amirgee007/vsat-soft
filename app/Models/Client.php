<?php

namespace App\Models;

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
}
