<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'customer_name',
        'customer_phone',
        'user_id',
        'delivery_method',
        'pickup_address',
        'notes',
        'status',
        'status', 'rating', 'review', 'rated_at'
    ];

    public function hasRated()
    {
        return !is_null($this->rated_at);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public static function generateOrderNumber()
    {
        return 'ORD-' . date('Ymd') . '-' . str_pad(self::max('id') + 1, 4, '0', STR_PAD_LEFT);
    }
}
