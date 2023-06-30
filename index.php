
<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/cart.php";
include "view/header.php";
include "global.php";
include "model/lienhe.php";
include "model/voucher.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
if ((isset($_GET['act'])) && ($_GET['act']) != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $idpro = $ma_sp;
                $soluong =  so_luong_sp($idpro);
                $list_mau_size = loadall_mau_size($idpro);
                $dsbl = loadall_binhluan($idpro);
                $sp_cung_loai = load_sanpham_cungloai($id, $ma_loai);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'dangky':
            $sql = "SELECT email FROM `khach_hang`;";
            $listemail = pdo_query($sql);
            if (isset($_POST['dangky'])) {
                foreach ($listemail as $value) {
                    if ($_POST['email'] == $value["email"]) {
                        $mess = "⚠️ email đang trùng, mời nhập email khác";
                        $erron_eml = $mess;
                        $listtaikhoan = loadall_taikhoan(0);
                        include "view/taikhoan/dang_ky_view.php";
                    }
                }
                if ($_POST['user'] == null) {
                    $mess = "⚠️ Không để trống user";
                    $erron_ten = $mess;
                    $listtaikhoan = loadall_taikhoan(0);
                    include "view/taikhoan/dang_ky_view.php";
                } else if ($_POST['sdt'] == null) {
                    $mess = "⚠️ Không để trống điện thoại";
                    $erron_sdt = $mess;
                    $listtaikhoan = loadall_taikhoan(0);
                    include "view/taikhoan/dang_ky_view.php";
                } else if ($_FILES['hinh']['name'] == null) {
                    $mess = "⚠️ Mời tải lên ảnh user";
                    $erron_anh = $mess;
                    $listtaikhoan = loadall_taikhoan(0);
                    include "view/taikhoan/dang_ky_view.php";
                } else if ($_POST['email'] == null) {
                    $mess = "⚠️ Không để trống email";
                    $erron_eml = $mess;
                    $listtaikhoan = loadall_taikhoan(0);
                    include "view/taikhoan/dang_ky_view.php";
                } else if ($_POST['pass'] == null) {
                    $mess = "⚠️ Không để trống mật khẩu";
                    $erron_pass = $mess;
                    $listtaikhoan = loadall_taikhoan(0);
                    include "view/taikhoan/dang_ky_view.php";
                } else if ($_POST['dc'] == null) {
                    $mess = "⚠️ Không để trống địa chỉ";
                    $erron_dc = $mess;
                    $listtaikhoan = loadall_taikhoan(0);
                    include "view/taikhoan/dang_ky_view.php";
                } else {
                    $email = $_POST['email'];
                    $ho_ten = $_POST['user'];
                    $mat_khau = $_POST['pass'];
                    $dia_chi = $_POST['dc'];
                    $sdt = $_POST['sdt'];
                    $filename = $_FILES['hinh']['name'];
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], "upload/" . $_FILES['hinh']['name']);
                    $vaitro = 0;
                    insert_khachhang($vaitro, $email, $ho_ten, $mat_khau, $dia_chi, $sdt, $filename);
                    include "view/taikhoan/dang_nhap_view.php";
                }
            }
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                if ($_POST['email'] == null) {
                    $mess = "⚠️ Không để trống email";
                    $erron_email = $mess;
                    $listtaikhoan = loadall_taikhoan(0);
                    include "view/taikhoan/dang_nhap_view.php";
                } else if ($_POST['pass'] == null) {
                    $mess = "⚠️ Không để trống mật khẩu";
                    $erron_pass = $mess;
                    $listtaikhoan = loadall_taikhoan(0);
                    include "view/taikhoan/dang_nhap_view.php";
                } else {
                    $email = $_POST['email'];
                    $mat_khau = $_POST['pass'];
                    $checkuser = checkuser($email, $mat_khau);
                    if (is_array($checkuser)) {
                        $_SESSION['user'] = $checkuser;
                        include "view/home.php";
                    } else {
                        include "view/taikhoan/dang_nhap_view.php";
                    }
                }
            }
            break;
        case 'edit_taikhoan_fun':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'] > 0)) {
                if ($_POST['user'] == null) {
                    $mess = "⚠️ Không để trống user";
                    $erron_ten = $mess;
                    $listtaikhoan = loadall_taikhoan(0);
                    include "view/taikhoan/edit_taikhoan.php";
                } else if ($_FILES['hinh']['name'] == null) {
                    $mess = "⚠️ Mời tải lên ảnh user";
                    $erron_anh = $mess;
                    $listtaikhoan = loadall_taikhoan(0);
                    include "view/taikhoan/edit_taikhoan.php";
                } else if ($_POST['email'] == null) {
                    $mess = "⚠️ Không để trống email";
                    $erron_eml = $mess;
                    $listtaikhoan = loadall_taikhoan(0);
                    include "view/taikhoan/edit_taikhoan.php";
                } else if ($_POST['pass'] == null) {
                    $mess = "⚠️ Không để trống mật khẩu";
                    $erron_pass = $mess;
                    $listtaikhoan = loadall_taikhoan(0);
                    include "view/taikhoan/edit_taikhoan.php";
                } else if ($_POST['sdt'] == null) {
                    $mess = "⚠️ Không để trống điện thoại";
                    $erron_sdt = $mess;
                    $listtaikhoan = loadall_taikhoan(0);
                    include "view/taikhoan/edit_taikhoan.php";
                } else if ($_POST['dc'] == null) {
                    $mess = "⚠️ Không để trống địa chỉ";
                    $erron_dc = $mess;
                    $listtaikhoan = loadall_taikhoan(0);
                    include "view/taikhoan/edit_taikhoan.php";
                } else {
                    $email = $_POST['email'];
                    $ho_ten = $_POST['user'];
                    $dia_chi = $_POST['dc'];
                    $sdt = $_POST['sdt'];
                    $ma_kh = $_POST['id'];
                    $filename = $_FILES['hinh']['name'];
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], "upload/" . $_FILES['hinh']['name']);
                    update_taikhoan($ma_kh, $email, $ho_ten, $dia_chi, $sdt, $filename);
                    $_SESSION['user'] = checkuser($ho_ten, $mat_khau);
                }
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'] > 0)) {
                if ($_POST['email'] == null) {
                    $mess = "⚠️ Không để trống email";
                    $erron_ten = $mess;
                    $listtaikhoan = loadall_taikhoan($vaitro);
                    include "view/taikhoan/quenmk.php";
                } else {
                    $email = $_POST['email'];
                    $checkemail = checkemail($email);
                    if (is_array($checkemail)) {
                        $thongbao = "Mật khẩu của bạn là: " . $checkemail['mat_khau'];
                    } else {
                        $thongbao = "Email này không tồn tại";
                    }
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        case 'addtocart':
            if ($_SESSION["user"] === null) {
                include "view/taikhoan/dang_nhap_view.php";
            } else {
                $id = $_GET["ma_sp"];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $ma_sp = $id;
                $soluong = $_POST['quantity'];
                $mau_size = $_POST['mau_size'];
                $ttien = $soluong * $don_gia;
                $spadd = [$ma_sp, $ten_sp, $hinh, $don_gia, $soluong, $mau_size, $ttien];
                array_push($_SESSION['mycart'], $spadd);
                // echo "<pre>";
                // var_dump($_SESSION['mycart']);die;
                include "view/cart/viewcart.php";
            }
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            include "view/cart/viewcart.php";
            break;
        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
        case 'bill':
            $listvc = loadall_vc('', 3);
            $tongdonhang = tongdonhang();
            include "view/cart/bill.php";
            break;
        case 'billcomfirm':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset($_SESSION['user'])) $ma_kh = $_SESSION['user']['ma_kh'];
                else $ma_kh = 0;
                $name = $_POST['ho_ten'];
                $email = $_POST['email'];
                $address = $_POST['dia_chi'];
                $tel = $_POST['sdt'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date("Y/m/d H:i:s");
                $tongdonhang = $_POST['tong'];
                $tong_giam = $_POST["tong_giam"];

                if ($_POST["giam_gia"] == 0) {
                    $ma_vc = "";
                } else {
                    $giam_gia = $_POST["giam_gia"];
                    $sql5 = "SELECT * FROM `voucher` WHERE muc_giam_gia like $giam_gia;";
                    $vc = pdo_query_one($sql5);
                    $ma_vc = $vc["ma_vc"];
                }

                $ma_hd = insert_hoa_don($ma_kh, $ma_vc, $ngaydathang, $address, $tel, $tong_giam, $tongdonhang, $pttt);
                $_SESSION['cart'] = [];

                $sql = "SELECT ma_hd from `hoa_don` where `ma_kh` = '$ma_kh' and `ngay_dat` = '$ngaydathang'";
                $ma_hd = pdo_query_one($sql);
                $ma_hd = $ma_hd["ma_hd"];
                //hoa_don_chi_tiet: ma_hdct	ma_hd	ma_sp	so_luong	mau	size	tien	
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_hoa_don_chi_tiet($ma_hd, $cart[0], $cart[4], $cart[5], $cart[6]);
                }
            }
            $_SESSION['mycart'] = [];
            $bill = loadone_bill($ma_hd);
            $billct = loadall_cart($ma_hd);
            include "view/cart/billcomfirm.php";
            break;
        case 'mybill':
            $listbill = loadall_bill($_SESSION['user']['ma_kh']);

            include "view/cart/mybill.php";
            break;
        case 'chitietdonhangview':
            $mahd = $_GET['mahd'];
            $sql = "SELECT * FROM `hoa_don_chi_tiet` WHERE ma_hd = $mahd;";
            $hdct = pdo_query($sql);

            $sql2 = "SELECT * FROM `hoa_don` WHERE ma_hd = $mahd;";
            $hoa_don = pdo_query_one($sql2);
            include "view/cart/chitietdonhang.php";
            break;
        case 'thoat':
            session_unset();
            include "view/home.php";
            break;
        case 'dangnhapview':
            include "view/taikhoan/dang_nhap_view.php";
            break;
        case 'dangkyview':
            include "view/taikhoan/dang_ky_view.php";
            break;
        case 'edit_taikhoan':
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'shop':
            include "view/shop.php";
            break;
        case 'about':
            include "view/about.php";
            break;
        case 'addlh':
            if (isset($_POST['themmoi'])) {
                if ($_POST['name'] == null) {
                    $mess = "⚠️ Không để trống tên";
                    $erron_ten = $mess;
                    
                    include "view/contact.php";
                }  else if ($_POST['email'] == null) {
                    $mess = "⚠️ Không để trống email";
                    $erron_eml = $mess;
                    
                    include "view/contact.php";
                } else if ($_POST['title'] == null) {
                    $mess = "⚠️ Không để trống tiêu đề";
                    $erron_td = $mess;
                    
                    include "view/contact.php";
                } else if ($_POST['mess'] == null) {
                    $mess = "⚠️ Không để trống nội dung";
                    $erron_nd = $mess;
                    
                    include "view/contact.php";
                }else{
                $yourname = $_POST['name'];
                $youremail = $_POST['email'];
                $title = $_POST['title'];
                $message = $_POST['mess'];
                insert_lienhe($yourname, $youremail, $title, $message);
                $thongbao = "Thêm thành công";
                $listlienhe = loadall_lienhe();
                include "view/contact.php";
            }}
            
            break;

        case 'contact':
            include "view/contact.php";
            break;
        case 'update_danhanhang':
            $sql = "UPDATE `hoa_don` SET `tinh_trang_don_hang` = 'đã nhận hàng' WHERE `hoa_don`.`ma_hd` = " . $_GET['mahd'] . ";";
            pdo_execute($sql);
            $listbill = loadall_bill($_SESSION['user']['ma_kh']);
            include "view/cart/mybill.php";
            break;
        case 'update_huydonhang':
            $sql = " UPDATE `hoa_don` SET `tinh_trang_don_hang` = 'đã hủy' WHERE `hoa_don`.`ma_hd` = " . $_GET['mahd'] . ";";
            pdo_execute($sql);
            $listbill = loadall_bill($_SESSION['user']['ma_kh']);
            include "view/cart/mybill.php";
            break;
        case 'guibinhluan':
            if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                if ($_POST["noi_dung"] == null) {
                    $id = $_GET['idpro'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $idpro = $ma_sp;
                    $soluong =  so_luong_sp($idpro);
                    $list_mau_size = loadall_mau_size($idpro);
                    $dsbl = loadall_binhluan($idpro);
                    $sp_cung_loai = load_sanpham_cungloai($id, $ma_loai);
                    
                    $mess = "⚠️ Vui lòng nhập nội dung trước khi nhấn nút";
                    $erron_bl = $mess;
                    include "view/sanphamct.php";
                } else {
                    $noi_dung = $_POST['noi_dung'];
                    $idpro = $_POST['idpro'];
                    $iduser = $_SESSION['user']['ma_kh'];
                    $ngay_bl = date("Y/m/d");
                    insert_binhluan($noi_dung, $iduser, $idpro, $ngay_bl);
                    $id = $_GET['idpro'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $idpro = $ma_sp;
                    $soluong =  so_luong_sp($idpro);
                    $list_mau_size = loadall_mau_size($idpro);
                    $dsbl = loadall_binhluan($idpro);
                    $sp_cung_loai = load_sanpham_cungloai($id, $ma_loai);
                    
                    
                    include "view/sanphamct.php";
                }
            }
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
