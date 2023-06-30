<div class="hero-wrap hero-bread" style="background-image: url('/duan1/view/images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span> <span>Hóa đơn</span></p>
                    <h1 class="mb-0 bread">Lịch sử mua hàng</h1>
                </div>
            </div>
        </div>
    </div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <?php
                    global $img_path;

                    echo '<thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Tên</th>
                                <th>Số lượng</th>
                                <th>Loại</th>
                                <th>Tiền</th>
                            </tr>
                        </thead>
                        <tbody>';
                    foreach ($hdct as $value) {
                        $sql1 = "select * from san_pham where ma_sp = " . $value['ma_sp'];
                        $sanpham = pdo_query_one($sql1);

                        $hinh = $img_path . $sanpham['hinh'];

                        echo '<tr class="text-center">
                                <td class="product-remove"></td>

                                <td class="image-prod">
                                    <img src="' . $hinh . '" alt="hinh" class="img">
                                </td>

                                <td class="product-name">
                                    <h3>' . $sanpham['ten_sp'] . '</h3>
                                </td>

                                <td class="quantity">' . $value['so_luong'] . '</td>

                                <td class="quantity">' . $value['mau_size'] . '</td>


                                <td class="quantity" style="color: red">' . $value['tien'] . ' VNĐ</td>
                            </tr>
                            ';}
                        ?>
                    </table>
                    <div style="text-align: right;">Tổng: <h5 style="color: red"><?= $hoa_don['tong_tien']?> VNĐ</h5>
                </div>
            </div>
        </div>

    </div>
</section>