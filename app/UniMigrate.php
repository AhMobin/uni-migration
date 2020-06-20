<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniMigrate extends Model
{
    protected $fillable = [
        'result_id',
        'st_roll',
        'migration_uni',
        'current_uni_id',
        'status',
    ];
}
