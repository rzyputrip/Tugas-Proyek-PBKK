<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'product_id', 'quantity', 'unit_price'];

    // Relasi ke Pesanan
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Relasi ke Produk
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
