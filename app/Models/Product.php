<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'price', 'sale_price', 'quantity', 'category_id', 'description', 'image'];

    public function images(){
        return $this->hasMany(ProductImage::class,'product_id','id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

}
