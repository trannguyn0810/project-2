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
    <span  style=" font-size: 30px; margin-left: 20px; margin-top: 10px"> Danh sách sản phẩm</span>
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
            <th>Lego Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Description</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->price }} $</td>
                <td>{{ $product->quantity }} </td>
                <td style="text-align: center"><img src="{{ asset('img/lego/' . $product->image) }}" alt="{{ $product->product_name }}" width="100"></td>
                <td>{{ $product->description }} </td>
            </tr>
        @endforeach
        </tbody>
    </table>


</div>
</body>
</html>
