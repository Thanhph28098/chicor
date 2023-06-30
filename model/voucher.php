<?php
function  insert_vc($ten_vc, $muc_giam_gia, $hsd, $idlvc){
    $sql="insert into voucher(ten_vc,muc_giam_gia,hsd,ma_lvc) values('$ten_vc','$muc_giam_gia','$hsd','$idlvc')";
    pdo_execute($sql);
}
function loadall_vc($kyw,$idlvc){
    $sql="select * from voucher where 1";
    if($kyw!=""){
        $sql.=" and ten_vc like '%".$kyw."%'";
    }
    if($idlvc>0){
        $sql.=" and ma_lvc = '".$idlvc."'";
    }
    $sql.=" order by ma_lvc desc";
    $listvc=pdo_query($sql);
    return $listvc;
}

function loadone_vc($ma_vc){
    $sql="select * from voucher where ma_vc=".$ma_vc;
    $sp=pdo_query_one($sql);
    return $sp;
}

function update_vc($ma_vc,$id_lvc,$ten_vc,$muc_giam_gia){
    
        $sql="update voucher set ma_lvc='".$id_lvc."',ten_vc='".$ten_vc."',muc_giam_gia='".$muc_giam_gia."' where ma_vc=".$ma_vc;
    pdo_execute($sql);
}

function delete_vc($id){
    $sql="delete from voucher where ma_vc=".$id;
   
    pdo_query($sql);
    

}
?>
