<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>

<span style="margin-left: 20px; margin-top: 40px; font-size: 30px">Cart <i class="fas fa-cart-plus" style="color: black;"></i></span>
<span style="margin-left: 1350px; font-size: 30px; color: black"><a href="{{ route('home') }}"><i class="fa fa-house-chimney"></i></a></span>

<div class="container mt-5" style="background-color: white">
    <table class="table">
        <thead style="background-color: #7297F5">
        <tr>
            <th>Product Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($carts as $cart)
            <tr>
                <td>{{ $cart->product->product_name }}</td>
                <td><img src="{{ asset('img/lego/' . $cart->product->image) }}" alt="{{ $cart->product->product_name }}" width="100"></td>
                <td>{{ number_format($cart->price, 0, ',', '.') }} VND</td>
                <td>{{ $cart->quantity }}</td>
                <td>
                    <form action="{{ route('cart.remove', $cart->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div style="text-align: center">
    <button class="btn " style="background-color: #F4B9B9">Thanh toán</button>

    </div>
</div>
</body>
</html>
