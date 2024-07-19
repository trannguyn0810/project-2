<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro extends Model
{
    use HasFactory;

    public function index()
    {
        $products = Product::all();

        return view('product.pro', compact('products'));
    }
}
