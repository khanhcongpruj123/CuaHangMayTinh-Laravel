<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <title>Cửa hàng máy tính</title>

    <!-- Bootstrap core CSS -->
    <link href="{{('/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{('/css/shop-homepage.css')}}" rel="stylesheet">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="/order">Đơn hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Trạng thái đơn hàng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                function remove($item)
                {
                    $index = array_search($item->id, $list_order);
                    unset($list_laptop[$index]);
                    header("refresh: 3;");
                }
                ?>
                @foreach($list_order as $item)
                <?php
                $thumbnail = "images/{$item->thumbnail_large}";
                ?>
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <div class="row">
                            <img src="{{ $thumbnail }}" style="width: 100px;" />
                            <a>{{ $item->name }}</a>
                        </div>
                    </td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->address }}</td>
                    <td>Đang vận chuyển</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</body>
</html>
