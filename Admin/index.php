<?php
include "../Models/pdo.php";
include "../Models/danhmuc.php";
include "../Models/sanpham.php";
include "header.php";


if (isset($_GET['act'])) {
   $act = $_GET['act'];
   switch($act){
    case 'adddm' :
      if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
          $tenloai = $_POST['tenloai'];
          insert_danhmuc($tenloai);

          $thongbao="thêm thành công";

      }
     
        include 'danhmuc/add.php';
        break;
   case 'listdm' :
      $listdm=loadAll();
      include 'danhmuc/list.php';
      break;
   case 'xoadm':
      if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)){
         delete_danhmuc($_GET['id_danhmuc']);
  
      }
      $sql ="select * from danhmuc order by id_danhmuc desc";
      $listdm= loadAll();
      include 'danhmuc/list.php';
  
   break;
   case 'suadm':
      if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)){
       $dm=  loadone($_GET['id_danhmuc']);
      }
      include 'danhmuc/update.php';
      break;
   case 'updatedm':
      if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
         $tenloai = $_POST['tenloai'];
         $id_danhmuc=$_POST['id_danhmuc'];
         update_danhmuc($id_danhmuc,$tenloai);

         $thongbao="cập nhật thành công";

     }
     $sql ="select * from danhmuc order by id_danhmuc desc";
           $listdm= loadAll();
      include 'danhmuc/list.php';
      break;

      // Controller sản phẩm
      case 'addsp' :
         if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            $id_danhmuc = $_POST['id_danhmuc'];
            $tensp = $_POST['tensp'];
            $giasp = $_POST['giasp'];
            $soluong = $_POST['soluong'];
            $mota = $_POST['mota'];
            $hinhanh = $_FILES['hinhanh']['name'];
            $target_dir = "../uploads/";
            $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
            if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
                //echo "Sorry, there was an error uploading your file.";
            }
            insert_sanpham($tensp, $mota, $hinhanh, $giasp, $soluong, $id_danhmuc);
            $thongbao = "Thêm sản phẩm thành công";
        }
        $listdm = loadAll();
        include "sanpham/add.php";
        break;
      case 'listsp' :
         if (isset($_POST['listok']) && ($_POST['listok'])) {
            $kyw = $_POST['kyw'];
            $id_danhmuc = $_POST['id_danhmuc'];
        } else {
            $kyw = '';
            $id_danhmuc = 0;
        }
        $listdm = loadAll();
        $listsp = loadAll_sanpham($kyw, $id_danhmuc);
        include "sanpham/list.php";
        break;
      case 'xoasp':
         if(isset($_GET['id'])&&($_GET['id']>0)){
            delete_sanpham($_GET['id']);
     
         }
         $listsp= loadAll_sanpham("",0);
         include 'sanpham/list.php';
     
      break;
      case 'suasp':
         if (isset($_GET['id']) && $_GET['id'] > 0) {
            $sanpham = loadone_sanpham($_GET['id']);
        }
        $listdm = loadAll();
        include "sanpham/update.php";
        break;  
        case 'updatesp':
         if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
             $id = $_POST['id'];
             $id_danhmuc = $_POST['id_danhmuc'];
             $tensp = $_POST['tensp'];
             $giasp = $_POST['giasp'];
             $soluong = $_POST['soluong'];
             $mota = $_POST['mota'];
             $hinhanh = $_FILES['hinhanh']['name'];
             $target_dir = "../uploads/";
             $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
             if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                 //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
             } else {
                 //echo "Sorry, there was an error uploading your file.";
             }
             update_sanpham($id, $id_danhmuc, $tensp, $giasp, $soluong, $mota, $hinhanh);
             $thongbao = "Cập nhật thành công";
         }
         $listdm = loadAll();
         $listsp = loadAll_sanpham();
         include "sanpham/list.php";
         break;
        default :
        include 'home.php';
        break;
   }
} else{
    include 'home.php';
   }
   include 'footer.php';
?>