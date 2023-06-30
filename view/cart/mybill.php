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

    <div class="cart-list">
        <table border=1 class="table">
            <thead class="thead-primary">
                <tr class="text-center">
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt</th>
                    <th>Số lượng sản phẩm</th>
                    <th>Tổng giá trị đơn hàng</th>
                    <th>Trạng thái</th>
                    <th>Tình trạng đơn hàng</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($listbill)) {
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $countsp = loadall_cart_count($bill['ma_hd']);
                        $ttdh = $bill["tinh_trang_don_hang"];
                        
                        $da_nhan_hang = "<a href=''><button name='danhanhang' class='btn btn-primary py-3 px-4' style='background: green;'>Đã nhận hàng</button></a>"; 
                        $chua_nhan_hang = "<a href=''><button  class='btn btn-primary py-3 px-4' style='background: blue;'>Chưa nhận hàng</button></a><form action="."index.php?act=update_danhanhang&mahd=".$bill['ma_hd']. " method='post'><button type='submit' id='danhanhang'>Đã nhận hàng</button></form>"; 
                        $da_huy = "<a href=''><button  class='btn btn-primary py-3 px-4' style='background: red;'>Đã hủy</button></a>"; 
                        ?>
                        <tr>
                            <td><?= $bill['ma_hd'] ?></td>
                            <td><?= $bill['ngay_dat'] ?></td>
                            <td><?= $countsp ?></td>
                            <td style="color: red;"><?= $bill['tong_tien'] ?>VNĐ</td>
                            <td><?= $bill["trang_thai"] ?></td>
                            <td><?php if($ttdh == "chưa nhận hàng"){echo $chua_nhan_hang;} if($ttdh == "đã nhận hàng"){echo $da_nhan_hang;}if($ttdh == "đã hủy"){echo $da_huy;} ?></td>
                            <td><div class="bill">
                            <a href="index.php?act=chitietdonhangview&mahd=<?= $bill['ma_hd'] ?>"><input type="submit" value="Chi tiết đơn hàng" name="chitietdathang" class="btn btn-primary py-3 px-4" style="background: green;"></a>
                            <?php if ($bill["tinh_trang_don_hang"] == "đã hủy" || $bill["tinh_trang_don_hang"] == "đã nhận hàng") {
                                # code...
                            }
                            else{
                               echo " <a href="."index.php?act=update_huydonhang&mahd=".$bill['ma_hd']. "><input type='submit' value='HỦY ĐẶT HÀNG' name='huydathang' class='btn btn-primary py-3 px-4' style='background: red;'></a> ";
                            }?>
                        </div>
                        </td>
                        </tr>
                    
                <?php }}?>
            </tbody>
        </table>
    </div>
    <script>
        const status = document.querySelector("#status");
        // status.onclick = function (x){
        //     x.preventDefault()//k để web reset luôn
        //     status.style.background = "green";
        // }
    </script>
    <style>#danhanhang:hover{background-color: green;}</style>

