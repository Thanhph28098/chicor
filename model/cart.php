<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;

    echo '<thead class="thead-primary">
            <tr class="text-center">
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Loại</th>
                <th>Tiền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if ($del == 1) {
            $xoasp_td = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa" style="background: red; color: white;"></a>';
        } else {
            $xoasp_td = '';
        }
        echo '<tr class="text-center">
                <td class="product-remove"></td>

                <td class="image-prod">
                    <img src="' . $hinh . '" alt="hinh" class="img">
                </td>

                <td class="product-name">
                    <h3>' . $cart[1] . '</h3>
                </td>

                <td class="price" style="color: red">' . $cart[3] . ' VNĐ</td>

                <td class="quantity">' . $cart[4] . '</td>

                <td class="quantity">' . $cart[5] . '</td>

                <td class="quantity" style="color: red">' . $ttien . ' VNĐ</td>

                <td class="quantity">' . $xoasp_td . '</td>
            </tr>
            ';
        $i += 1;
    }
    echo '<tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td><input type="text" name="tong" value="' . $tong . ' VNĐ" readonly style="border: 1px solid white;" style="color: red"></td>
        </tr>
    </tbody>';
}


function bill_chi_tiet($billct)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    echo '<thead class="thead-primary">
            <tr>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Màu</th>
            <th>Size</th>
            <th>Thành tiền</th>
        </tr>
        </thead>
        <tbody>';
    foreach ($billct as $cart) {
        $sql = "select * from san_pham where ma_sp = " . $cart['ma_sp'];
        $san_pham = pdo_query_one($sql);

        $hinh = $img_path . $san_pham['hinh'];
        $tong += $cart['tien'];
        echo '
                    <tr>
                    <td><img src="' . $hinh . '" alt="" height="100px"></td>
                    <td>' . $san_pham['ten_sp'] . '</td>
                    <td>' . $san_pham['don_gia'] . '</td>
                    <td>' . $cart['so_luong'] . '</td>
                    <td>' . $cart['mau'] . '</td>
                    <td>' . $cart['tien'] . '</td>
                </tr>';
        $i += 1;
    }
    echo '<tr>
        <td colspan="4">Tổng đơn hàng</td>
        <td>' . $tong . '</td>
    </tr>
    </tbody>';
}
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function insert_hoa_don_chi_tiet($ma_hd, $idpro, $soluong, $mau_size, $thanhtien)
{
    $sql = "INSERT INTO `hoa_don_chi_tiet` (`ma_hdct`, `ma_hd`, `ma_sp`, `so_luong`, `mau_size`, `tien`) VALUES (NULL, '$ma_hd', '$idpro', '$soluong', '$mau_size', '$thanhtien');";
    return pdo_execute($sql);
}
function insert_hoa_don($ma_kh, $ma_vc, $ngaydathang, $address, $tel,$tong_giam, $tongdonhang, $pttt)
{
    $sql = "INSERT INTO `hoa_don` (`ma_hd`,`ma_kh`, `ma_vc`, `ngay_dat`, `dia_chi`,`sdt`,`tong_giam`, `tong_tien`, `pttt` ,`trang_thai`, `tinh_trang_don_hang`) VALUES 
    (NULL,'$ma_kh', '$ma_vc', '$ngaydathang', '$address', '$tel','$tong_giam', '$tongdonhang', '$pttt','đang xác nhận','chưa nhận hàng');";
    return pdo_execute($sql);
}
function loadone_bill($ma_hd)
{
    $sql = "select * from hoa_don where ma_hd=" . $ma_hd;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($ma_hd)
{
    $sql = "select * from hoa_don_chi_tiet where ma_hd=" . $ma_hd;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($ma_hd)
{
    $sql = "select * from hoa_don_chi_tiet where ma_hd=" . $ma_hd;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($ma_kh)
{
    if ($ma_kh != null) {
        $sql = "select * from hoa_don where ma_kh  =  $ma_kh order by ma_hd desc ";
    } else {
        $sql = "select * from hoa_don where 1 order by ma_hd desc";
    }

    $listbill = pdo_query($sql);
    return $listbill;
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Hoàn tất";
            break;
        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}
