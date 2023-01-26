<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;



    public function order_details()
    {
        return $this->hasMany(OrderDetails::class, 'order_id')->orderBy('id', 'asc');
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'order_id', 'id');
    }








}
