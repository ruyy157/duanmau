<?php 
    include 'global.php';
    include './Models/pdo.php';
    include './Models/sanpham.php';
    include './Models/danhmuc.php';
    include './Views/header.php';
 
    $spnew=loadall_sanpham_home();
    $dsdm=loadAll();
   if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act) {
        case 'trangsp':
            include './Views/trangsp.php';
            break;
        case 'lienhe':
                include './Views/lienhe.php';
                break;
        case 'chitietsanpham':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id=$_GET['id'];
                $onesp = loadone_sanpham($_GET['id']);
                     include "./Views/chitietsanpham.php";
            }
            else {
                include "./Views/home.php";
            }
            // $spcungloai = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
       
            break;  
                
        default:
            include './Views/home.php';
            break;
    }
   
   } else{
        include './Views/home.php';
    }
    include './Views/footer.php';
    ?>