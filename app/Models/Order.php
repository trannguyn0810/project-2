<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'product_id', 'price', 'quantity'];

    public function customer()
    {
        return $this->hasOne(Customer::class,'id','customer_id');
    }

    public function product()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }
}
