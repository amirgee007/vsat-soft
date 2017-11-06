<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';
    protected $fillable = [
        'id_number',
        'name',
        'email',
        'street',
        'area',
        'city',
        'state',
        'zip_code',
        'country',
        'po_box',
        'office_tel',
        'fax_no',
        'working_days',
        'working_times',
        'website',
        'branch_logo',
        'status',
        'related_staff'
    ];
}
