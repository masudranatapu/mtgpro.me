<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Card;

class HistoryCardBrowsing extends Model
{
    use HasFactory;
    protected $table = 'history_card_browsing';

    public function hasCard(): HasOne
    {
        return $this->hasOne(BusinessCard::class, 'id', 'card_id');
    }
}
