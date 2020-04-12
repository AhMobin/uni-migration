<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hsc extends Model
{
    protected $fillable = [
        'user_id',
        'hsc_roll',
        'hsc_registration',
        'hsc_board',
        'hsc_group',
        'hsc_result',
        'hsc_year',
    ];
}
