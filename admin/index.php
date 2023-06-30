<?php
session_start();
if ($_SESSION == null ) {
    header('location: ../index.php?act=dangnhapview');
}
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/mau_size.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";
include "../model/thongke.php";
include "../model/voucher.php";
include "../model/loaivoucher.php";
include "../model/lienhe.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'adddm':
            if (isset($_POST['themmoi'])) {
                if ($_POST['ten_loai'] == null) {
                    $mess = "⚠️ Không để trống tên loại";
                    $erron_ten=$mess;
                    $listdanhmuc = loadall_danhmuc();  
                    include "danhmuc/list.php";
                }else{
                $tenloai = $_POST['ten_loai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
            }
        }
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                delete_danhmuc($_GET['ma_loai']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
            case 'suadm':
                if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                    $dm = loadone_danhmuc($_GET['ma_loai']);
                }
                include "danhmuc/update.php";
                break;
                case 'updatedm':
                    if (isset($_POST['capnhat'])) {
                        $tenloai = $_POST['ten_loai'];
                        $ma_loai = $_POST['ma_loai'];
                        update_danhmuc($ma_loai, $tenloai);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;
            /*sản phẩm*/
            case 'addsp':
                $listdanhmuc = loadall_danhmuc();   
                include "sanpham/add.php";
                break;
        case 'addsp_new':
                if (isset($_POST['themmoi'])) {

                    if ($_POST['tensp'] == null) {
                    $mess = "⚠️ Không để trống tên sản phẩm";
                    $erron_ten=$mess;
                    $listdanhmuc = loadall_danhmuc();  
                    include "sanpham/add.php";
                }
                    else if ($_FILES['hinh']['name'] == null) {
                    $mess = "⚠️ Mời tải lên ảnh sản phẩm";
                    $erron_anh=$mess;
                    $listdanhmuc = loadall_danhmuc();  
                    include "sanpham/add.php";
                }
                    else if ($_POST['don_gia'] == null) {
                    $mess = "⚠️ Không để trống giá sản phẩm";
                    $erron_gia=$mess;
                    $listdanhmuc = loadall_danhmuc();  
                    include "sanpham/add.php";
                }
                else if ($_POST['don_gia'] <= 0 ) {
                    $mess = "⚠️ Giá sản phẩm không để âm";
                    $erron_gia=$mess;
                    $listdanhmuc = loadall_danhmuc();  
                    include "sanpham/add.php";
                }
                    else if ($_POST['ngay_nhap'] == null) {
                    $mess = "⚠️ Mời chọn ngày nhập";
                    $erron_ngay=$mess;
                    $listdanhmuc = loadall_danhmuc();  
                    include "sanpham/add.php";
                }
                    else if ($_POST['mo_ta'] == null) {
                    $mess = "⚠️ Không để trống mô tả sản phẩm";
                    $erron_mota=$mess;
                    $listdanhmuc = loadall_danhmuc();  
                    include "sanpham/add.php";
                }
                    else if ($_POST["mausize1"] == null || $_POST["sl1"] == null) {
                    $mess = "⚠️ Mời thêm màu size sản phẩm";
                    $erron_mz1=$mess;
                    $listdanhmuc = loadall_danhmuc();  
                    include "sanpham/add.php";
                }
                    else if ($_POST["mausize2"] == null || $_POST["sl2"] == null) {
                    $mess = "⚠️ Mời thêm màu size sản phẩm";
                    $erron_mz2=$mess;
                    $listdanhmuc = loadall_danhmuc();  
                    include "sanpham/add.php";
                }
                else {
                    
                    $iddm = $_POST['ma_loai'];
                    $tensp = $_POST['tensp'];
                    $ngaynhap = $_POST['ngay_nhap'];
                    $giasp = $_POST['don_gia'];
                    $mota = $_POST['mo_ta'];
                    $filename = $_FILES['hinh']['name'];

                    $mau_size1 = $_POST["mausize1"];
                    $soluong1 = $_POST["sl1"];

                    $mau_size2 = $_POST["mausize2"];
                    $soluong2 = $_POST["sl2"];

                    $mau_size3 = $_POST["mausize3"];
                    $soluong3 = $_POST["sl3"];

                    $mau_size4 = $_POST["mausize4"];
                    $soluong4 = $_POST["sl4"];

                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    insert_sanpham($tensp, $giasp,$ngaynhap, $filename, $mota, $iddm);
                    $sql = "SELECT Max(ma_sp) as 'masp' FROM `san_pham` " ;
                    $idsp = pdo_query_one($sql);
                    insert_mausize($idsp['masp'],$mau_size1,$soluong1,$mau_size2,$soluong2,$mau_size3,$soluong3,$mau_size4,$soluong4);
                    $thongbao = "Thêm thành công";

                    $kyw = '';
                    $iddm = 0;
                    $listsanpham = loadall_sanpham($kyw, $iddm);
                    include "sanpham/list.php";
                }
                
            }
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['ma_loai'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['ma_sp']) && ($_GET['ma_sp'] > 0)) {
                delete_sanpham($_GET['ma_sp']);
                
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
            case 'suasp':
                if (isset($_GET['ma_sp']) && ($_GET['ma_sp'] > 0)) {
                    $sanpham = loadone_sanpham($_GET['ma_sp']);
                }
                $mau_size = loadall_mau_size($_GET['ma_sp']);
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $iddm = $_POST['ma_loai'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $ngaynhap = $_POST["ngay_nhap"];
                    $filename = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    update_sanpham($id, $iddm, $tensp, $giasp,$ngaynhap, $mota, $filename);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;
        case 'addadmin':
            include "taikhoan/addadmin.php";
            break;
        case 'addadmin_fun':
            $sql = "SELECT email FROM `khach_hang`;";
            $listemail = pdo_query($sql);

            if (isset($_POST['themmoi'])){
                foreach ($listemail as $value) {
                    if ($_POST['email'] == $value["email"]) {
                        $mess = "⚠️ email đang trùng, mời nhập email khác";
                        $erron_eml = $mess;
                        $listtaikhoan = loadall_taikhoan(0);
                        include "taikhoan/addadmin.php";
                    }
                }
                if ($_POST['user'] == null) {
                $mess = "⚠️ Không để trống tên user";
                $erron_ten=$mess;
                include "taikhoan/addadmin.php";
            }
                else if ($_FILES['hinh']['name'] == null) {
                $mess = "⚠️ Mời tải lên ảnh user";
                $erron_anh=$mess;
                include "taikhoan/addadmin.php";
            }
                else if ($_POST['email'] == null) {
                $mess = "⚠️ Không để trống email";
                $erron_eml=$mess;
                include "taikhoan/addadmin.php";
            }
                else if ($_POST['pass'] == null) {
                $mess = "⚠️ Không để trống mật khẩu";
                $erron_pass=$mess;
                include "taikhoan/addadmin.php";
            }
                else if ($_POST['dc'] == null) {
                $mess = "⚠️ Không để trống địa chỉ";
                $erron_dc=$mess;
                include "taikhoan/addadmin.php";
            }
                else if ($_POST['sdt'] == null) {
                $mess = "⚠️ Không để trống số điện thoại";
                $erron_sdt=$mess;
                include "taikhoan/addadmin.php";
            }else{
                $email = $_POST['email'];
                $ho_ten = $_POST['user'];
                $mat_khau = $_POST['pass'];
                $dia_chi = $_POST['dc'];
                $sdt = $_POST['sdt'];
                $filename = $_FILES['hinh']['name'];
                move_uploaded_file($_FILES["hinh"]["tmp_name"], "../upload/" . $_FILES['hinh']['name']);
                $vaitro = 1;
                insert_khachhang($vaitro,$email, $ho_ten, $mat_khau, $dia_chi, $sdt, $filename);
                $listtaikhoanadmin = loadall_taikhoan(1);
                $list_kh = loadall_taikhoan($vaitro = 0);
                include "taikhoan/list.php";
        }
    }
            break;
        case 'dskh':
            $listtaikhoanadmin = loadall_taikhoan(1);
            $list_kh = loadall_taikhoan($vaitro = 0);
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            if (isset($_GET['ma_kh']) && ($_GET['ma_kh'] > 0)) {
                delete_taikhoan($_GET['ma_kh']);
            }
            $listtaikhoanadmin = loadall_taikhoan(1);
            $list_kh = loadall_taikhoan(0);
            include "taikhoan/list.php";
            break;
        case 'dsbl':
            $listsp = loadall_sanpham("", 0);
            include "binhluan/list.php";
            break;
        case 'chitietbl':
            $idpro = $_GET['masp'];
            $listbinhluan = loadall_binhluan($idpro);
            $listsp = loadall_sanpham("", 0);
            include "binhluan/chitietbinhluan.php";
            break;
        case 'xoabl':
            if (isset($_GET['ma_bl']) && ($_GET['ma_bl'] > 0)) {
                delete_binhluan($_GET['ma_bl']);
            }
            $listbinhluan = loadall_binhluan("", 0);
            $listsp = loadall_sanpham("", 0);

            include "binhluan/list.php";
            break;
        case 'listbill':
            if (isset($_POST['kyw']) && ($_POST['kyw']) != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listbill = loadall_bill($kyw, 0);
            include "bill/listbill.php";
            break;
        case 'addlvc':
            if (isset($_POST['themmoi'])) {
                if ($_POST['ten_lvc'] == null) {
                    $mess = "⚠️ Không để trống tên loại voucher";
                    $erron_ten=$mess;
                    $listloaivc = loadall_loaivc();
                    include "loaivoucher/list.php";
                }else{
                $tenlvc = $_POST['ten_lvc'];
                insert_loaivc($tenlvc);
                $thongbao = "Thêm thành công";
                $listloaivc = loadall_loaivc();
                include "loaivoucher/list.php";
            }
        }
            break;
        case 'lvc':
            $listloaivc = loadall_loaivc();
            include "loaivoucher/list.php";
            break;
            case 'sualvc':
                if (isset($_GET['ma_lvc']) && ($_GET['ma_lvc'] > 0)) {
                    $dm = loadone_loaivc($_GET['ma_lvc']);
                }
                include "loaivoucher/update.php";
                break;
            case 'updatelvc':
                if (isset($_POST['capnhat'])) {
                    $ten_lvc = $_POST['ten_lvc'];
                    $ma_lvc = $_POST['ma_lvc'];
                    update_loaivc($ma_lvc, $ten_lvc);
                    $thongbao = "Cập nhật thành công";
                }
                $listloaivc = loadall_loaivc();
                include "loaivoucher/list.php";
                break;
        case 'xoalvc':
            if (isset($_GET['ma_lvc']) && ($_GET['ma_lvc'] > 0)) {
                delete_loaivc($_GET['ma_lvc']);
            }
            $listloaivc = loadall_loaivc();
            include "loaivoucher/list.php";
            break;
            case 'addvc':
                $listloaivc = loadall_loaivc();   
                include "voucher/addvoucher.php";
        case 'addvc_new':
            if (isset($_POST['themmoi'])) {
                if ($_POST['ten_vc'] == null) {
                    $mess = "⚠️ Không để trống tên voucher";
                    $erron_ten=$mess;
                    $listloaivc = loadall_loaivc();
                    include "voucher/addvoucher.php";
                }
                    else if ($_POST['muc_giam_gia'] == null) {
                    $mess = "⚠️ Không để trống dữ liệu";
                    $erron_gia=$mess;
                    $listloaivc = loadall_loaivc();
                    include "voucher/addvoucher.php";
                }
                else if ($_POST['muc_giam_gia'] < 0 ) {
                    $mess = "⚠️ Mức giảm giá phải lớn hơn 0 !";
                    $erron_gia=$mess;
                    $listloaivc = loadall_loaivc();
                    include "voucher/addvoucher.php";
                }
                    else if ($_POST['hsd'] == null) {
                    $mess = "⚠️ Mời chọn hsd";
                    $erron_hsd=$mess;
                    $listloaivc = loadall_loaivc();
                    include "voucher/addvoucher.php";
                }else {
                    $idlvc = $_POST['ma_lvc'];
                    $ten_vc = $_POST['ten_vc'];
                    $muc_giam_gia = $_POST['muc_giam_gia'];
                    $hsd = $_POST['hsd'];
                    insert_vc($ten_vc, $muc_giam_gia, $hsd, $idlvc);
                    $thongbao = "Thêm thành công";
                    $kyw = '';
                    $idlvc = 0;
                    $listvc = loadall_vc($kyw, $idlvc);
                    include "voucher/listvoucher.php";
                }
            }
            break;
        case 'listvc':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $idlvc = $_POST['ma_lvc'];
            } else {
                $kyw = '';
                $idlvc = 0;
            }
            $listloaivc = loadall_loaivc();
            $listvc = loadall_vc($kyw, $idlvc);
            include "voucher/listvoucher.php";
            break;
        case 'xoavc':
            if (isset($_GET['ma_vc']) && ($_GET['ma_vc'] > 0)) {
                delete_vc($_GET['ma_vc']);
            }

            $listvc = loadall_vc("", 0);
            include "voucher/listvoucher.php";
            break;
            case 'suavc':
                if (isset($_GET['ma_vc']) && ($_GET['ma_vc'] > 0)) {
                    $vc = loadone_vc($_GET['ma_vc']);
                }
              
                $listloaivc = loadall_loaivc();
                include "voucher/updatevoucher.php";
                break;
            case 'updatevc':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $ma_vc = $_POST['ma_vc'];
                    $id_lvc = $_POST['ma_lvc'];
                    $ten_vc = $_POST['ten_vc'];
                    $muc_giam_gia = $_POST['muc_giam_gia'];
                  
                    update_vc($ma_vc, $id_lvc, $ten_vc, $muc_giam_gia);
                    $thongbao = "Cập nhật thành công";
                }
                $listloaivc = loadall_loaivc();
                $listvc = loadall_vc("", 0);
                include "voucher/listvoucher.php";
                break;
        case 'thongke':
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;
        case 'listbill':
            if (isset($_POST['kyw']) && ($_POST['kyw']) != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listbill = loadall_bill($kyw, 0);
            include "bill/listbill.php";
            break;
        case 'bieudo':
            $listthongke = loadall_thongke();
            $tongtien= thongke_doanhthu();
            include "thongke/bieudo.php";
            break;
        case 'list':
            $listthongke = loadall_thongke();
            $tongtien= thongke_doanhthu();
            include "thongke/bieudo.php";
            break;
        case 'voucher':
            include "voucher/listvoucher.php";
            break;
        case 'addvc':
            include "voucher/addvoucher.php";
            break;
        case 'lienhe':
            $listlienhe = loadall_lienhe();
            include "lienhe/listlienhe.php";
            break;
        case 'xoalh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_lienhe($_GET['id']);
            }
            $listlienhe = loadall_lienhe();
            include "lienhe/listlienhe.php";
            break;
        case 'xacnhantrangthai':
            $sql = "UPDATE `hoa_don` SET `trang_thai` = 'Đã xác nhận' WHERE `hoa_don`.`ma_hd` = ". $_GET['mahd'] .";";
            pdo_execute($sql);
            if (isset($_POST['kyw']) && ($_POST['kyw']) != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listbill = loadall_bill($kyw, 0);
            include "bill/listbill.php";
            break;
        case 'chitiethoadon':
            $mahd=$_GET['mahd'];
            $sql = "SELECT * FROM `hoa_don_chi_tiet` WHERE ma_hd = $mahd;";
            $hdct = pdo_query($sql); 

            $sql2 = "SELECT * FROM `hoa_don` WHERE ma_hd = $mahd;";
            $hoa_don = pdo_query_one($sql2);
            include "bill/chitiethoadon.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
