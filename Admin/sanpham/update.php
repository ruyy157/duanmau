<?php
if (is_array($sanpham)) {
  extract($sanpham);
}
$hinhpath = "../uploads/" . $hinhanh;
if (is_file($hinhpath)) {
  $hinhanh = "<img src='" . $hinhpath . "' height='80'>";
} else {
  $hinhanh = "no photo";
}
?>
<div class="boxcenter">
  <div class="form-control">
    <H1> Cập nhật sản phẩm</H1>
  </div>
  <div class="boxcenter">
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
      <div class="row mb10">
        Danh mục<br>
        <SELect name="id_danhmuc">
          <?php
          foreach ($listdm as $danhmuc) {
            if ($id_danhmuc == $danhmuc['id_danhmuc']) $s = "selected";
            else $s = "";
            echo '<option value="' . $danhmuc['id_danhmuc'] . '"' . $s . '>' . $danhmuc['tendanhmuc'] . '</option>';
          }
          ?>
        </SELect>
      </div>
      <div class="row mb10">
        Tên sản phẩm<br>
        <input type="text" name="tensp" value="<?= $tensp ?>" class="form-control">
      </div>
      <div class="row mb10">
        Giá<br>
        <input type="text" name="giasp" value="<?= $giasp ?>" class="form-control">
      </div>
      <div class="row mb10">
        Hình<br>
        <input type="file" name="hinhanh" id="">
        <div style="height: 200px; width: 200px;">
             <?= $hinhanh ?>
        </div>
       
      </div>
      <div class="row mb10">
        Số lượng <br>
        <input type="number" name="soluong" id="" value="<?= $soluong ?>" class="form-control">
      </div>
      <div class="row mb10">
        Mô tả<br>
        <textarea name="mota" cols="30" rows="10" class="form-control"><?= $mota ?></textarea>
      </div>
      <div class="row mb10">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-primary mt-2 " style="width: 50%; height: 40px;"> 
        <input type="reset" value="Nhập lại" class="btn btn-danger mt-2"  style="width: 50%;  height: 40px;">
        <a href="index.php?act=listsp"><input type="button" value="Danh sách" class="btn btn-success mt-2"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
      ?>
    </form>
  </div>
</div>
</div>