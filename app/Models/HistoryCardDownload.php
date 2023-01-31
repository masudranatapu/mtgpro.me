<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class HistoryCardDownload extends Model
{
    use HasFactory;
    public function hasCard(): HasOne
    {
        return $this->hasOne(BusinessCard::class, 'id', 'card_id');
    }
}
