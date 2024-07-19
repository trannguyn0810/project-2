<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    public function index()
    {
        $products = Product::all();
        $carts = Cart::with('product')->get();

        return view('product.ad', compact('products', 'carts'));
    }
}
