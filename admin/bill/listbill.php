<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Danh Sách Hóa Đơn</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <form action="index.php?act=listbill" method="post">
            <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
            <!--tìm kiếm -->
            <input type="submit" name="listok" value="Go">
        </form>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Danh sách</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">KHÁCH HÀNG</th>
                                <th scope="col">SỐ LƯỢNG</th>
                                <th scope="col">TỔNG TIỀN</th>
                                <th scope="col">NGÀY ĐẶT HÀNG</th>
                                <th scope="col">TRẠNG THÁI</th>
                                <th scope="col">TÌNH TRẠNG</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listbill as $bill) {
                                extract($bill);

                                $sql = "select * from khach_hang where ma_kh = " . $bill["ma_kh"];
                                $kh = pdo_query($sql);

                                $khach_hang = '<li>' . $kh[0]["ho_ten"] . '</li> <br> <li>' . $kh[0]["email"] . '</li> <br> <li>' . $bill["dia_chi"] . '</li> <br> <li>' . $bill["sdt"] . '</li>';
                                $countsp = loadall_cart_count($bill["ma_hd"]); 
                                $btn_xn = "<a href="."index.php?act=xacnhantrangthai&mahd=". $bill['ma_hd'] ." class='btn btn-success text-white'>Xác nhận trạng thái</a>"
                            ?>
                                <tr>
                                    <th scope="row"><?= $bill['ma_hd'] ?></th>
                                    <td><?= $khach_hang ?></td>
                                    <td><?= $countsp ?></td>
                                    <td style="color: red;"><?= $bill['tong_tien'] ?> VNĐ</td>
                                    <td><?= $bill['ngay_dat'] ?></td>
                                    <td><?= $bill["trang_thai"] ?></td>
                                    <td><?= $bill["tinh_trang_don_hang"] ?></td>
                                    <td><?= ($bill["trang_thai"] != "Đã xác nhận") ? $btn_xn : "" ?> <br> <br>
                                    <a   href="index.php?act=chitiethoadon&mahd=<?= $bill['ma_hd'] ?>"><button class='btn btn-success text-white' style="background-color: #00008b;">Chi tiết hóa đơn</button></a> 
                                    </td>
                                </tr>
                           <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>