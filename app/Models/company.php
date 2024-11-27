<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{

    protected $table = 'company';
    protected $fillable = [
        'name',
        'vessel',
        'origin',
        'destination',
        'schedule',
        'contact',
        'capacity',
        'fee'
    ];

    
}
