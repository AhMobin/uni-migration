<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $fillable = [
        'user_id',
        'uni_choice_id',
        'payment_id',
        'status'
    ];
}
