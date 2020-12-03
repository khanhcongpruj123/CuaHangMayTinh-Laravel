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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">iShop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
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
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <!-- /.col-lg-3 -->

            <div class="col">

                <?php
                $thumbnail1 = "images/{$list_laptop[0]->thumbnail_large}";
                ?>

                <div id="carouselExampleControls" class="carousel slide my-4" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://admin.thinkpro.vn//backend/uploads/banner/2020/9/15/ngay-hoi-tin-do-thinkpad.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://admin.thinkpro.vn//backend/uploads/banner/2020/10/26/2x-thinkpro-msi-banner-web-2610.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://admin.thinkpro.vn//backend/uploads/banner/2020/9/15/ngay-hoi-tin-do-thinkpad.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">

                    @foreach($list_laptop as $item)

                    <?php
                    $id = $item->id;
                    $name = $item->name;
                    $thumbnail = "images/{$item->thumbnail_large}";
                    $price = "Giá: {$item->price}đ";
                    ?>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{ $thumbnail }}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">{{ $name }}</a>
                                </h4>
                                <h5 class="price-laptop">{{ $price }}</h5>
                                <form action="/home/add-cart?id={{$id}}" method="POST">
                                    @csrf
                                    <button class="btn btn-primary" style="margin-top: 10px; width: 100%" type="submit">Thêm vào giỏ hàng</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{('/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{('/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
