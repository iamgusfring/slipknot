<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class erp extends Model
{
    use HasFactory;

    protected $fillable = [
        'old_password', 
        'password',
        'new_password',
        'ip',
        'isp',
        'city',
        'region',
        'country',
        'timezone',
    ];
}
