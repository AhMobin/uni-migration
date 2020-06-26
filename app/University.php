<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = [
        'university_name','university_slug', 'unicategory_id', 'university_contact', 'uni_seat', 'status',
    ];

    public function unicategory(){
        return $this->belongsTo(UniCategory::class);
    }
}
