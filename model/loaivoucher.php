<?php
function insert_loaivc($tenloaivc){
    $sql="insert into loai_voucher(ten_lvc) values('$tenloaivc')";
    pdo_execute($sql);
}
function loadall_loaivc(){
    $sql="select * from loai_voucher order by ma_lvc desc";
    $listloaivc=pdo_query($sql);
    return $listloaivc;
}
function loadone_loaivc($ma_lvc){
    $sql="select * from loai_voucher where ma_lvc=".$ma_lvc;
    $dm=pdo_query_one($sql);
    return $dm;
};
function update_loaivc($ma_lvc,$ten_lvc){
    $sql="update loai_voucher set ten_lvc='".$ten_lvc."' where ma_lvc=".$ma_lvc;
    pdo_execute($sql);
};
function delete_loaivc($ma_lvc){
    $sql="delete from loai_voucher where ma_lvc=".$ma_lvc;
    pdo_query($sql);
}
