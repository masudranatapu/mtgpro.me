<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;

    protected $table = "tutorials";

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'short_description',
        'content',
        'file_type',
        'banner_image',
        'video',
        'youtube_video_link',
        'author',
        'publish_date',
        'tags',
        'status',
        'created_at',
        'updated_at',
    ];

    public function TutorialCategory()
    {
        return $this->belongsTo(TutorialCategory::class, 'category_id', 'id');
    }

}
