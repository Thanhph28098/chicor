<?php
function  insert_lienhe($yourname,$youremail,$title,$message){
    $sql="insert into lienhe(yourname,youremail,title,message) values('$yourname','$youremail','$title','$message')";
    pdo_execute($sql);
}
function delete_lienhe($id){
    $sql="delete from lienhe where id=".$id;
    pdo_query($sql);
}
function loadall_lienhe(){
    $sql="select * from lienhe order by id desc";
    $listlienhe=pdo_query($sql);
    return $listlienhe;
}
function loadone_lienhe($id){
    $sql="select * from lienhe where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}

?>
