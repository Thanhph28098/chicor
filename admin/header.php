<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>Chicor - Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" />
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon.png"> -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon.png">
    <link rel="stylesheet" href="./assets/libs/chartist/dist/chartist.min.css">
    <!-- <link href="./assets/libs/chartist/dist/chartist.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="./dist/css/style.min.css">
    <!-- <link href="./dist/css/style.min.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<style>
    .sidebar-item {
        overflow: hidden;
    }

    .sidebar-children {
        display: none;
        position: relative;
    }

    .sidebar-item:hover .sidebar-children {
        display: block;
        animation: hien-children linear .5s;
    }

    @keyframes hien-children {
        to {
            transform: translateY(5%);
        }

        from {
            transform: translateY(4%);
        }
    }
</style>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <div class="navbar-brand">
                        <a href="../index.php" class="logo" class="dark-logo">
                            <h2 style="color: white; font-size: 150%;">Chicor Admin</h2>
                        </a>
                    </div>

                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 me-1"></i>
                                    <div class="ms-1 d-none d-sm-block">
                                        <span>Search</span>
                                    </div>
                                </div>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?act=listsp" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Sản Phẩm</span>
                            </a>
                            <p class="sidebar-children">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?act=addsp" aria-expanded="false">
                                    <i></i>
                                    <span class="hide-menu">Thêm Sản Phẩm</span>
                                </a>
                            </p>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?act=listdm" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Loại Sản Phẩm</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?act=dsbl" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Bình Luận</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?act=dskh" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Tài khoản</span>
                            </a>
                            <p class="sidebar-children">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?act=addadmin" aria-expanded="false">
                                    <i></i>
                                    <span class="hide-menu">Thêm tài khoản admin</span>
                                </a>
                            </p>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?act=lienhe" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Liên Hệ</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?act=listvc" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Voucher</span>
                            </a>
                         
                            <p class="sidebar-children">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?act=addvc" aria-expanded="false">
                                    <i></i>
                                    <span class="hide-menu">Thêm Voucher</span>
                                </a>
                            </p>
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?act=lvc" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Loại Voucher</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?act=listbill" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Hóa Đơn</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?act=thongke" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Thống Kê</span>
                            </a>
                            <!-- <p class="sidebar-children">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?act=bieudo" aria-expanded="false">
                                    <i></i>
                                    <span class="hide-menu">Sản Phẩm</span>
                                </a>
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?act=bieudo" aria-expanded="false">
                                    <i></i>
                                    <span class="hide-menu">Doanh Thu</span>
                                </a>
                            </p> -->
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>