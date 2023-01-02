<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessField extends Model
{
    protected $guarded = [];



    public function sicon()
    {
        return $this->belongsTo(SocialIcon::class, 'icon_id');
    }

}
