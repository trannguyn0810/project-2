<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Sử dụng Auth::id() để lấy customer_id hiện tại
        $carts = Cart::orderBy('id', 'DESC')->paginate(20);
        return view('product.cart', compact('carts'));
    }

    public function remove($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->route('product.cart')->with('success', 'Product removed from cart');
    }

    public function store(Request $request)
    {
        $request->validate([
            'price ' => 'required|numeric|unique:books',
            'quantity' => 'required|numeric',
            'customer_id' => 'required|exists:customers,id',
            'product_id' => 'required|exists:products,id'

        ]);

        $carts = $request->only(' price, quantity, customer_id, product_id,');
    }
}
