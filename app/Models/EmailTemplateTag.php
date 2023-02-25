<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTemplateTag extends Model
{
    use HasFactory;

    public function hasEmailTEmplate()
    {
        return $this->belongsTo(EmailTemplate::class, 'email_template_id', 'id');
    }
}
