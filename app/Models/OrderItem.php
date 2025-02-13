<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'service_detail_id',
        'quantity',
        'shoe_images',
    ];

    protected $casts = [
        'shoe_images' => 'array',
    ];

    public function serviceDetail()
    {
        return $this->belongsTo(ServiceDetail::class);
    }
}
