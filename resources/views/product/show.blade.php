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

    <link rel="stylesheet" href="css/css/all.css">
    <link rel="stylesheet" href="css/trang_chu.css">
    <link rel="stylesheet" href="css/show.css">
    @yield('css')

</head>

<body>
<div class="header-top" style="height: 40px; background-color: #7297F5">
    <div class="nav" style="font-size: 16px; width: 100%; margin-left: 19px;font-family: Cambria; color: red"><b>LEGO</b></div>
    <div style="width: 100%"></div>

    <div class="nav-divided" style="margin-left: 270px;font-family: Cambria">
        <span style="color:black; font-size: 16px" href="mailto:lego@gmail.com">
            <i style="font-size: 16px"  class="fa fa-envelope"></i>
            <span>lego@gmail.com </span>  </span>
        <i style="border-left: 1px solid;height: 550px; color:black"></i>
        <i style="margin-left: 10px;  font-size: 15px"  class="fa-solid fa-phone" ></i>
        <span style="color:black; font-size: 15px" href="tel:0966331980">
        <span> 0966331980 </span> </span>
        <i style="color:black; font-size: 17px;margin-left: 10px" class="fa-brands fa-facebook" ></i>
        <i style="color:black; font-size: 17px;margin-left: 7px" class="fa-brands fa-instagram"></i>
        <i style="color:black; font-size: 17px;margin-left: 7px" class="fa-brands fa-twitter" ></i>
        <i style="color:black; font-size: 17px;margin-left: 7px" class="fa-regular fa-envelope"></i>
    </div>
</div>
<div class="header-top">
    <div class="nav-item">
        <i class="fa fa-house-chimney"></i>
        <a href="{{ route('home') }}" style="text-decoration: none; color: black;">Home</a>
    </div>
    <div class="nav-item">
        <i class="fas fa-user-cog"></i>
        <a href="{{ route('home') }}" style="text-decoration: none; color: black;">Admin</a>
    </div>
    <div class="nav-item">
        <i class="fas fa-user-check"></i>
        <a href="{{ route('register') }}" style="text-decoration: none; color: black;">Register</a>
    </div>
    <div class="nav-item">
        <i class="fas fa-user-alt"></i>
        <a href="{{ route('login') }}" style="text-decoration: none; color: black;">Sign in</a>
    </div>
    <div class="nav-item">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
        <a href="#" style="text-decoration: none; color: black;">Sign out</a>
    </div>
    <div class="nav-item cart-button" style=" background-color: red">
        <i class="fas fa-cart-plus" style="color: black;"></i>
        <a href="{{ route('home') }}" style="text-decoration: none; color: black;">Cart</a>
    </div>
</div>

<div class="container product-container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/lego/' . $product->image) }}" class="product-image" alt="{{ $product->product_name }}">
        </div>
        <div class="col-md-6 product-details">
            <h2>{{ $product->product_name }}</h2>
            <p class="font-weight-bold" style="font-size: 20px">Giá: {{ number_format($product->price, 0, ',', '.') }} $</p>
            <p style="font-size: 20px">Chất liệu: nhựa ABS cao cấp tuyệt đối an toàn</p>
            <p style="font-size: 20px">Số lượng: {{ $product->quantity }}</p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <h4>Mô tả sản phẩm</h4>
            <p>{{ $product->description }}</p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <h4>Sản phẩm liên quan</h4>
            <div class="related-products">
                @foreach($relatedProducts as $relatedProduct)
                    <div class="related-product-item">
                        <img src="{{ asset('img/lego/' . $relatedProduct->image) }}" alt="{{ $relatedProduct->product_name }}">
                        <p style="font-size: 20px"><b>{{ $relatedProduct->product_name }}</b></p>
                        <p style="font-size: 20px">{{ number_format($relatedProduct->price, 0, ',', '.') }} $</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<div style="background-color: #7297F5">
    <div class="row">
        <div class="col-md-2" style="margin-left: 40px; margin-top: 20px">
            <h5><b>LEGO</b></h5>
            <ul style="list-style-type: none; padding-left: 0; font-size: 18px">
                <li><a style="color: black;">Lego Super Hero</a></li>
                <li><a style="color: black;">Lego Minecraft</a></li>
                <li><a  style="color: black;">Lego Disney</a></li>
                <li><a  style="color: black;">Lego Technic</a></li>
            </ul>
        </div>

        <div class="col-md-3" style="margin-top: 20px; margin-left: 30px">
            <h5><b>Liên hệ trực tiếp</b></h5>
            <div class="contact-info" style="font-size: 18px;">
                <p><i class="fa fa-envelope" style="font-size: 16px"></i> Email: <a href="mailto:lego@gmail.com" style="color: black; text-decoration: none">lego@gmail.com</a></p>
                <p><i class="fa-solid fa-phone" style="font-size: 15px"></i> Hotline: <a href="tel:0966331980" style="color: black; text-decoration: none">0966331980</a></p>
            </div>
            <div>
                <a  style="color: black; margin-right: 16px;font-size: 16px"><i class="fa-brands fa-facebook" ></i></a>
                <a style="color: black; margin-right: 16px;font-size: 16px"><i class="fa-brands fa-instagram"></i></a>
                <a  style="color: black;margin-right: 16px;font-size: 16px"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>

        <div class="col-md-3" style="margin-top: 20px">
            <h5><b>Hỗ trợ khách hàng</b></h5>
            <ul style="list-style-type: none; padding-left: 0; font-size: 18px;">
                <li><a style="color: black;">Chính sách bảo mật</a></li>
                <li><a  style="color: black;">Chính sách đổi trả</a></li>
                <li><a style="color: black;">Chính sách thanh toán</a></li>
            </ul>
        </div>

        <div class="col-md-3" style="margin-top: 20px">
            <img src="img/lego.png" style="width: 80%; height: auto; margin-left: 100px" alt="LEGO">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 text-center" style="font-size: 18px;">
            <p>Thế giới trò chơi Lego chính hãng có mặt trên tất cả các cửa hàng. Những mặt hàng mới nhất &copy; 2024.</p>
        </div>
    </div>
</div>
</body>
</html>

