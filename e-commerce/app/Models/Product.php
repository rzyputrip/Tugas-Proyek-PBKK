<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['admin_id', 'category_id', 'name', 'slug', 'description', 'price', 'stock'];

    // Relasi ke Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    // Relasi ke Kategori Produk
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
