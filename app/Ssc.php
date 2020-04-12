<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ssc extends Model
{
    protected $fillable = [
        'user_id',
        'ssc_roll',
        'ssc_board',
        'ssc_group',
        'ssc_result',
        'ssc_year',
    ];
}
