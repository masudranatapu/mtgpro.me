<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialIcon extends Model
{
    protected $table = 'social_icon';


    protected $appends = ['icons_url'];

    public function getIconsUrlAttribute()
    {
        return getPhoto($this->icon_image);
    }
}
