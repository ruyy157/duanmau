<?php
 function insert_sanpham($tensp, $mota, $hinhanh, $giasp, $soluong, $id_danhmuc)
 {
     $sql = "insert into sanpham(tensp,mota,hinhanh,giasp,soluong,id_danhmuc) values('$tensp','$mota','$hinhanh','$giasp','$soluong','$id_danhmuc')";
     pdo_execute($sql);
 } function delete_sanpham($id){
    $sql ="delete from sanpham where id=".$id;
    pdo_execute($sql);
 }
 function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,8";
    $listsp = pdo_query($sql);
    return $listsp;
}
 function loadAll_sanpham($kyw = "", $id_danhmuc = 0)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and tendanhmuc like '%" . $kyw . "%'";
    }
    if ($id_danhmuc > 0) {
        $sql .= " and id_danhmuc ='" . $id_danhmuc . "'";
    }
    $sql .= " order by id_danhmuc desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id=" . $id;
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}
function update_sanpham($id, $id_danhmuc, $tensp, $giasp, $soluong, $mota, $hinhanh)
{
    if ($hinhanh != "")
        $sql = "update sanpham set id_danhmuc='" . $id_danhmuc . "',tensp='" . $tensp . "',giasp='" . $giasp . "',soluong='" . $soluong . "',mota='" . $mota . "',hinhanh='" . $hinhanh . "' where id=" . $id;
    else
        $sql = "update sanpham set id_danhmuc='" . $id_danhmuc . "',tensp='" . $tensp . "',giasp='" . $giasp . "',soluong='" . $soluong . "',mota='" . $mota . "' where id=" . $id;
    pdo_execute($sql);
}

?>