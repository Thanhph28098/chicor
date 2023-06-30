
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chicor Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="/duan1/view/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/duan1/view/css/animate.css">

    <link rel="stylesheet" href="/duan1/view/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/duan1/view/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/duan1/view/css/magnific-popup.css">

    <!-- <link rel="stylesheet" href="/duan1/view/css/aos.css"> -->

    <link rel="stylesheet" href="/duan1/view/css/ionicons.min.css">

    <link rel="stylesheet" href="/duan1/view/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/duan1/view/css/jquery.timepicker.css">

    <link rel="stylesheet" href="/duan1/view/css/flaticon.css">
    <link rel="stylesheet" href="/duan1/view/css/icomoon.css">
    <link rel="stylesheet" href="/duan1/view/css/style.css">
</head>

<body class="goto-here">
    <div class="py-1 bg-black">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text">+ 1235 2355 98</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">team6chicorshop@email.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Chicor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?act=shop">Cửa hàng</a></li>
                    <li class="nav-item"><a href="index.php?act=about" class="nav-link">Giới thiệu</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Bài viết</a></li>
                    <li class="nav-item"><a href="index.php?act=contact" class="nav-link">Liên hệ</a></li>
                    <!-- <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li> -->
                    <?php
                    if (isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                    ?>
                        <li class="nav-item taikhoan"><a class="nav-link">Xin chào, <?= $ho_ten ?></a>
                            <p class="dangxuat">
                                <a class="nav-link" href="index.php?act=edit_taikhoan">Cập nhập tài khoản</a>
                                <a class="nav-link" href="index.php?act=thoat">Đăng xuất</a>
                            </p>
                        </li>
                        <li class="nav-item cta cta-colored mybill">
                            <a class="nav-link"><span class="icon-shopping_cart"></span>[0]</a>
                            <p class="mybillshow">
                                <a href="index.php?act=viewcart" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a>
                                <a href="index.php?act=mybill" class="nav-link">Hóa đơn</a>
                            </p>
                        </li>
                        <?php if ($vai_tro > 0) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="admin/index.php?act=listsp">Đăng nhập Admin</a>
                            </li>
                        <?php } ?>
                    <?php
                    }
                    if (!isset($_SESSION['user'])) {
                    ?>
                        <li class="nav-item"><a href="index.php?act=dangnhapview" class="nav-link add-to-cart"><button style="background-color: #c2a942; border-radius: 10px; color: while; font-weight: 600;">#Đăng
                                    nhập</button></a></li>
                        <li class="nav-item"><a href="index.php?act=dangkyview" class="nav-link add-to-cart"><button style="background-color: #c2a942; border-radius: 10px; color: while; font-weight: 600;">#Đăng
                                    ký</button></a></li>
                    <?php    } ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <style>
        .mybillshow {
            display: none;
        }

        .mybill:hover .mybillshow {
            display: block;
            background-color: #c2a942;
            position: absolute;
            animation: hien-children linear .5s;
        }

        .mybillshow a:hover {
            background-color: red;
            color: white;
        }

        .dangxuat {
            display: none;
        }

        .taikhoan:hover .dangxuat {
            display: block;
            background-color: #c2a942;
            position: absolute;
            animation: hien-children linear .5s;
        }

        .dangxuat a:hover {
            background-color: red;
            color: white;
        }

        @keyframes hien-children {
            to {
                transform: translateY(1%);
            }

            from {
                transform: translateY(0%);
            }
        }
    </style>