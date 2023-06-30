<?php
function insert_danhmuc($tenloai){
    $sql="insert into loai(ten_loai) values('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="delete from loai where ma_loai=".$id;
    pdo_query($sql);
    $sql1 = "UPDATE `san_pham` SET `san_pham`.`ma_loai`= 100 WHERE `san_pham`.`ma_loai` = $id;";
    pdo_query($sql1);
}
function loadall_danhmuc(){
    $sql="select * from loai order by ma_loai desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql="select * from loai where ma_loai=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($ma_loai,$tenloai){
    $sql="update loai set ten_loai='".$tenloai."' where ma_loai=".$ma_loai;
    pdo_execute($sql);
}
?>