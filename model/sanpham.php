<?php
function insert_sanpham($tensp,$giasp,$ngaynhap,$hinh,$mota,$iddm){
    $sql="insert into san_pham(ten_sp,don_gia,ngay_nhap,hinh,mo_ta,ma_loai) values('$tensp','$giasp','$ngaynhap','$hinh','$mota','$iddm')";
    pdo_execute($sql);

}
function delete_sanpham($id){
    $sql="delete from san_pham where ma_sp=".$id;
    pdo_query($sql);
    $sql0="delete from mau_size where idsp=".$id;
    pdo_query($sql0);
    $sql1="delete from binh_luan where idpro=".$id;
    pdo_query($sql1);
}
function loadall_sanpham_home(){
    $sql="select * from san_pham where 1 order by ma_sp desc limit 0,8";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_mau_size($idpro){
    $sql="SELECT * FROM `mau_size` WHERE `idsp` = $idpro;";
    $list_mau_size=pdo_query($sql);
    return $list_mau_size;
}
function so_luong_sp($id_pro){
    $sql="SELECT Sum(so_luong) as 'so_luong_tong' FROM `mau_size` WHERE idsp = $id_pro;";
    $soluong=pdo_query($sql);
    return $soluong;
}
function loadall_sanpham_top10(){
    $sql="select * from san_pham where 1 order by so_luot_xem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw,$iddm){
    $sql="select * from san_pham where 1";
    if($kyw!=""){
        $sql.=" and ten_sp like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and ma_loai = '".$iddm."'";
    }
    $sql.=" order by ma_sp desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from loai where ma_loai=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $ten_loai;
    }else{
        return "";
    }
}
function loadone_sanpham($id){
    $sql="select * from san_pham where ma_sp=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id,$ma_loai){
    $sql="select * from san_pham where ma_loai='".$ma_loai."' AND ma_sp <> ".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id,$iddm,$tensp,$giasp,$ngaynhap,$mota,$filename){
    if($filename!="")
        $sql="update san_pham set ma_loai='".$iddm."',ten_sp='".$tensp."',don_gia='".$giasp."',ngay_nhap='".$ngaynhap."',mo_ta='".$mota."',hinh='".$filename."' where ma_sp=".$id;
    else
        $sql="update san_pham set ma_loai='".$iddm."',ten_sp='".$tensp."',don_gia='".$giasp."',ngay_nhap='".$ngaynhap."',mo_ta='".$mota."' where ma_sp=".$id;
    pdo_execute($sql);
}
