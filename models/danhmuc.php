<?php
 function insert_danhmuc($tenloai){
    $sql= "insert into danhmuc(tendanhmuc) values ('$tenloai') ";
          pdo_execute($sql);
 }
 function delete_danhmuc($id_danhmuc){
    $sql ="delete from danhmuc where id_danhmuc=".$id_danhmuc;
    pdo_execute($sql);
 }
 function loadAll(){
    $sql = "select * from danhmuc order by tendanhmuc";
      $listdm = pdo_query($sql);
      return $listdm;
 }
 function loadone($id_danhmuc){
    $sql ="select * from danhmuc where id_danhmuc=".$id_danhmuc;
    $dm= pdo_query_one($sql);
      return $dm;
 }
 function update_danhmuc($id_danhmuc,$tenloai){
    $sql= "update danhmuc set tendanhmuc='".$tenloai."' where id_danhmuc= ".$id_danhmuc;
    pdo_execute($sql);
 }

?>