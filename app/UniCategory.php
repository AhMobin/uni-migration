<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniCategory extends Model
{
    protected $fillable = [
        'category_name','category_slug', 'status',
    ];
}
