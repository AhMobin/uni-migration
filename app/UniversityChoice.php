<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniversityChoice extends Model
{
    protected $fillable = [
        'user_id',
        'first_choice',
        'second_choice',
        'third_choice',
    ];
}
