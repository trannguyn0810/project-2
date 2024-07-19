<!DOCTYPE html>
<html>
<head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body >
<div>
    <span  style=" font-size: 30px; margin-left: 20px; margin-top: 10px"> Danh sách order</span>
    <span  style="margin-left: 1150px">
         <a href="{{ route('product.ad') }}" style="text-decoration: none; color: black;">
            <i style="font-size: 30px"  class="fas fa-user-cog" ></i></a>
    </span>
</div>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Addess</th>
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
                <td>{{ $cart->id }}</td>
                <td>{{ $cart->customer->name }}</td>
                <td>{{ $cart->customer->email }}</td>
                <td>{{ $cart->customer->address }}</td>
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


</div>
{{ $carts->links() }}
</body>
</html>
