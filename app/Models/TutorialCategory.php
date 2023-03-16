<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorialCategory extends Model
{
    use HasFactory;

    protected $table = "tutorial_categories";

    protected $fillable = [
        'title',
        'slug',
        'status',
        'created_at',
        'updated_at',
    ];

}
