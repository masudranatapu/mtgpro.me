<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $casts = [
        'payment_status' => 'boolean'
    ];

    public function order_details()
    {
        return $this->hasMany(OrderDetails::class, 'order_id')->orderBy('id', 'asc')->with('product');
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'order_id', 'id');
    }

    public function hasCoupon(): HasOne
    {
        return $this->hasOne(Coupon::class, 'id', 'coupon_id');
    }
}
