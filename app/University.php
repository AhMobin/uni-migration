<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = [
        'university_name','university_slug', 'unicategory_id', 'university_contact', 'status',
    ];
}
