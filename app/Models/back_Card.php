<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function about()
    {
        return $this->belongsTo(About::class);
    }
    public function socialmedia()
    {
        return $this->belongsTo(SocialMedia::class);
    }
    public function testimonial()
    {
        return $this->belongsTo(Testimonial::class);
    }
    public function videosec()
    {
        return $this->belongsTo(VideoSec::class);
    }
    
}
