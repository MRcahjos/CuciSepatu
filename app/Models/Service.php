<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = ['name', 'description', 'icon'];

    public function details()
    {
        return $this->hasMany(ServiceDetail::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
