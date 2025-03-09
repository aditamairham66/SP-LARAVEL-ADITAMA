<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            if (!$order->order_date) {
                $order->order_date = now()->toDateString();
            }
        });

        static::saving(function ($order) {
            if (!$order->order_date) {
                $order->order_date = now()->toDateString();
            }
        });
    }
}
