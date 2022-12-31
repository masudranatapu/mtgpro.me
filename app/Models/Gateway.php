<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gateway extends Model
{
    protected $fillable = [
        'payment_gateway_name',
        'display_name',
        'status',

    ];

}
