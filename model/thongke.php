<?php
function loadall_thongke(){
    $sql="select loai.ma_loai as maloai, loai.ten_loai as tenloai, count(san_pham.ma_sp) as countsp, min(san_pham.don_gia) as minprice, max(san_pham.don_gia) as maxprice, avg(san_pham.don_gia) as avgprice";
    $sql.=" from san_pham left join loai on loai.ma_loai=san_pham.ma_loai";
    $sql.=" group by loai.ma_loai order by loai.ma_loai desc";
    
    $listtk=pdo_query($sql);
    return $listtk;
}
function thongke_doanhthu(){
    $sql="select sum(tong_tien) as 'tong_tien' from hoa_don where month(ngay_dat)=month(CURRENT_DATE()) and year(ngay_dat)=year(CURRENT_DATE())";
    $tongtien=pdo_query($sql);
    return $tongtien;
}
?>