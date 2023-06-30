    <div class="hero-wrap hero-bread" style="background-image: url('/duan1/view/images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span> <span></span></p>
                    <h1 class="mb-0 bread">Cảm ơn quý khách</h1>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($bill) && (is_array($bill))) {
        extract($bill);
    }   
    ?>
    <div style="margin: 0 35%;">
        <h2>Cảm ơn quý khách đã đặt hàng!</h2>
        <?php echo "<pre>" ?>
        <li>Mã đơn hàng: <?= $bill['ma_hd'] ?></li>
        <li>Ngày đặt hàng: <?= $bill['ngay_dat'] ?></li>
        <li>Giảm giá: <span style="color: red; font-weight: 600;">- <?= $bill['tong_giam'] ?> VNĐ</span></li>
        <li>Tổng đơn hàng: <span style="color: red; font-weight: 600;"><?= $bill['tong_tien'] ?> VNĐ</span></li>
        <li>Phương thức thanh toán: <?= $bill['pttt'] == 0 ? 'Trả tiền khi nhận hàng' : 'Thanh toán online' ?></li>
        <li>Trạng thái đơn hàng: <?= $bill['trang_thai'] == 0 ? 'Đang xác nhận' : 'Đã xác nhận, đang chuẩn bị hàng  ' ?></li>
    </div>
    

    </div>
    </div>