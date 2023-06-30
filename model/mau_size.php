<?php
function insert_mausize($idsp,$mau_size1,$soluong1,$mau_size2,$soluong2,$mau_size3,$soluong3,$mau_size4,$soluong4){
    $sql="insert into mau_size(idsp,mau_size,so_luong) values('$idsp','$mau_size1','$soluong1'),('$idsp','$mau_size2','$soluong2'),('$idsp','$mau_size3','$soluong3'),('$idsp','$mau_size4','$soluong4');";
    pdo_execute($sql);
}

?>
