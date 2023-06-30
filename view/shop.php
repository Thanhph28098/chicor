<div class="hero-wrap hero-bread" style="background-image: url('/duan1/view/images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span> <span>Cửa hàng</span></p>
                <h1 class="mb-0 bread">Cửa hàng</h1>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_GET['trang'])) {
    $page = $_GET['trang'];
} else {
    $page = 1;
}
if ($page == '' || $page == 1) {
    $start = 0;
} else {
    $start = ($page) * 8 - 8;
}
$sql = "select * from san_pham where 1 order by ma_sp desc limit $start,8";
$spnew  = pdo_query($sql);

$sql1 = "SELECT min(don_gia) as 'gia_min' FROM `san_pham`;";
$gia_min = pdo_query_one($sql1);


if (!empty($_POST["fillter"])) {
    $search = $_POST["fillter"];
    $query = "select * from san_pham where ma_loai=$search";
    $spnew = pdo_query($query);
} else if (!empty($_POST["price"])) {
    $search = $_POST["price"];
    if ($search <= $gia_min["gia_min"]) {
        echo "<div style=' text-align: center;'><h3 style='color: #c2a942;'>Không có sản phẩm dưới giá ". $search ." VNĐ</h3></div>";
    } else {
        $query = "select * from san_pham where don_gia <= $search";
        $spnew = pdo_query($query);
    }
} else if (!empty($_POST["search"])) {
    $search = $_POST["search"];
    $query = "select * from san_pham where ten_sp like n'%$search%'";
    $spnew = pdo_query($query);
}
//  else {
//     $query = "select * from san_pham";
//     $spnew = pdo_query($query);
// }

?>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <!-- productS -->
            <div class="col-md-8 col-lg-10 order-md-last">
                <div class="row">
                    <?php
                    $i = 0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=" . $ma_sp;
                        $ha = $img_path . $hinh;
                        //<!-- 1 item -->
                        echo '<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex" >
	                <div class="product d-flex flex-column">
	                    <a href="' . $linksp . '" class="img-prod"><img class="img-fluid" src="' . $ha . '" alt="Colorlib Template">
	                        <div class="overlay"></div>
	                    </a>
	                    <div class="text py-3 pb-4 px-3">
	                        <div class="d-flex">
	                            <div class="cat">
	                                <span>Lifestyle</span>
	                            </div>
	                            <div class="rating">
	                                <p class="text-right mb-0">
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                </p>
	                            </div>
	                        </div>
	                        <h3><a href="' . $linksp . '" style="word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box; text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2;">' . $ten_sp . '</a></h3>
	                        <div class="pricing" >
	                            <p class="price"><span style="color: red;">' . $don_gia . ' VNĐ</span></p>
	                        </div>
	                        <p class="bottom-area d-flex px-3">
	                            <a href="' . $linksp . '" class="add-to-cart text-center py-2 mr-1"><span>Thêm giỏ hàng<i class="ion-ios-add ml-1"></i>
                                </span></a>
	                            <a href="' . $linksp . '" class="buy-now text-center py-2">Mua ngay<span><i class="ion-ios-cart ml-1"></i></span></a>
	                        </p>
	                    </div>
	                </div> 
	            </div>';
                        $i += 1;
                    }
                    ?>
                </div>

                <?php
                $mysqli = new mysqli("localhost", "root", "", "chicor");
                // Check connection
                if ($mysqli->connect_errno) {
                    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                    exit();
                }
                $sql_trang = mysqli_query($mysqli, "select * from san_pham");
                $row_count = mysqli_num_rows($sql_trang); //đếm số sp 
                $trang = ceil($row_count / 9); //làm tròn lên
                ?>

                <!-- phân trang -->
                <div class="row mt-5">
                    <div class="col text-center">
                        <h6>Trang hiện tại: <a><?php echo $page ?></a></h6>
                        <div class="block-27">
                            <ul>
                                <?php
                                for ($i = 1; $i <= $trang; $i++) {
                                ?>
                                    <li><a href="index.php?act=shop&trang=<?php echo $i ?>"><?php echo $i ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- box right -->
            <div class="col-md-4 col-lg-2">
                <div class="sidebar">
                    <div class="sidebar-box-2">
                        <h2 class="heading">Loại</h2>
                        <div class="fancy-collapse-panel">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <form action="index.php?act=shop" method="post">
                                    <select name="fillter" class="search" style=" width:100px;">
                                        <option value="">chọn loại</option>
                                        <?php
                                        foreach ($dsdm as $danhmuc) {
                                            extract($danhmuc);
                                            echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <button type="submit" style="background-color: #c2a942; border-radius: 10px; color: while; font-weight: 600;">Tìm kiếm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end category -->

                    
                    <!-- start PRICE RANGE -->
                    <div class="sidebar-box-2">
                        <h2 class="heading">Tìm kiếm </h2>
                        <form method="post" class="colorlib-form-2" action="index.php?act=shop">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>

                                            <input type="text" name="search" id="people" class="form-control" type="text">

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" style="background-color: #c2a942; border-radius: 10px; color: while; font-weight: 600;">Tìm kiếm</button>
                        </form>
                    </div>
                    <div class="sidebar-box-2">
                        <h2 class="heading">Tìm kiếm theo giá </h2>
                        <form method="post" class="colorlib-form-2" action="index.php?act=shop">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>

                                            <input type="number" name="price" id="people" class="form-control" type="text">

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" style="background-color: #c2a942; border-radius: 10px; color: while; font-weight: 600;">Tìm kiếm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>