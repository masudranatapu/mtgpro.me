<?php

namespace App\Models;

use App\Traits\RepoResponse;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    use RepoResponse;
    protected $table = 'connects';

    protected $appends = ['profile_image_url'];

    public function getProfileImageUrlAttribute()
    {
        return getPhoto($this->profile_image);
    }
}
