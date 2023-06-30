<?php
function insert_khachhang($vaitro,$email, $ho_ten, $mat_khau, $dia_chi, $sdt, $filename)
{
    $sql = "INSERT INTO `khach_hang` (`ma_kh`, `vai_tro`, `kich_hoat`, `hinh`, `email`, `ho_ten`, `mat_khau`, `dia_chi`, `sdt`) 
    VALUES (NULL,'$vaitro', '1', '$filename', '$email', '$ho_ten', '$mat_khau', '$dia_chi','$sdt');";
    pdo_execute($sql);
}
function checkuser($email, $mat_khau)
{
    $sql = "select * from khach_hang where email='" . $email . "' AND mat_khau='" . $mat_khau . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "select * from khach_hang where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($ma_kh, $email, $ho_ten, $dia_chi, $sdt, $filename)
{
    if ($filename != "")
        $sql = "update khach_hang set `email`='" . $email . "',`ho_ten`='" . $ho_ten . "',`dia_chi`='" . $dia_chi . "',`sdt`='" . $sdt . "',`hinh`='" . $filename . "' where `ma_kh`='" . $ma_kh . "';";
    else
        $sql = "update khach_hang set `email`='" . $email . "',`ho_ten`='" . $ho_ten . "',`dia_chi`='" . $dia_chi . "',`sdt`='" . $sdt . "' where `ma_kh`='" . $ma_kh . "';";
    pdo_execute($sql);
}
function loadall_taikhoan($vaitro)
{
    $sql = "select * from khach_hang where vai_tro = ".$vaitro." order by ma_kh ASC";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function delete_taikhoan($ma_kh)
{
    $sql = "DELETE FROM khach_hang WHERE `khach_hang`.`ma_kh` = '$ma_kh'";
    pdo_query($sql);
}
