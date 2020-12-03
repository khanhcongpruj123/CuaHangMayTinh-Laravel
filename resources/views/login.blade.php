<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cửa hàng máy tính</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link href="{{('/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{('/fontawesome/css/all.css')}}">

    <link rel="stylesheet" type="text/css" href="{{('/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{('/css/animate.css')}}">

    <link rel="stylesheet" type="text/css" href="{{('/css/hamburgers.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{('/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('/css/main.css')}}">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">iShop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Trang chủ
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cart">Giỏ hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/order">Đơn hàng</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/login">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form class="login100-form validate-form" action="/login" method="POST">
                    @csrf
                    <span class="login100-form-title p-b-33">
                        Đăng nhập
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="username" placeholder="Tên đăng nhập">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Mật khẩu">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    <div class="container-login100-form-btn m-t-20">
                        <button class="login100-form-btn" type="submit">
                            Đăng nhập
                        </button>
                    </div>
                    <div class="text-center p-t-45 p-b-4">
                        <span class="txt1">
                            Quên
                        </span>
                        <a href="#" class="txt2 hov1">
                            Tên đăng nhập / Mật khẩu?
                        </a>
                    </div>
                    <div class="text-center">
                        <span class="txt1">
                             Tạo tài khoản?
                        </span>
                        <a href="#" class="txt2 hov1">
                            Đăng kí
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{('/js/jquery-3.5.1.min.js')}}"></script>
</body>

</html>
