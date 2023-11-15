<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    
    protected $fillable = ['admin_id', 'order_date', 'status'];

    // Relasi ke Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    // Relasi ke Detail Pesanan
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
