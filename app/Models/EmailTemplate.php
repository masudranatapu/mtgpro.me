<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EmailTemplate extends Model
{
    use HasFactory;

    protected $table = 'email_templates';

    protected $fillable = [
        'type',
        'subject',
        "slug",
        'body',
        'created_at',
        'updated_at',
    ];

    public function hasTags(): HasMany
    {
        return $this->hasMany(EmailTemplateTag::class, 'email_template_id', 'id');
    }
}
