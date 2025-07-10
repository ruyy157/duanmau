<?php 
if(is_array($dm)){
    extract($dm);
}
?>
<div class="boxcenter">
  <div class="form-control">
    <H1>CẬP NHẬT LOẠI HÀNG HÓA</H1>
  </div>
  <div class="boxcenter">
    <form action="index.php?act=updatedm" method="post">
      <div class="row mb10">
        Mã loại<br>
        <input type="text" name="maloai" disabled class="form-control">
      </div>
      <div class="row mb10">
        Tên loại<br>
        <input type="text" name="tenloai" class="form-control" value="<?php if (isset($tendanhmuc)&&($tendanhmuc!="")) echo $tendanhmuc ;?>">
      </div>
      <span class="text-danger">
        <?php
      if(isset($thongbao)&&($thongbao!=""))
      
      echo "$thongbao";
      ?>
      </span>
      

      <div class="row mb-5">
        <input type="hidden" name="id_danhmuc" value="<?php if (isset($id_danhmuc) && ($id_danhmuc > 0)) echo $id_danhmuc; ?>">
        <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-primary mt-2 " style="width: 50%; height: 40px;"> 
        <input type="reset" value="Nhập lại" class="btn btn-danger mt-2"  style="width: 50%;  height: 40px;">
        <a href="index.php?act=listdm"><input type="button" value="Danh sách" class="btn btn-success mt-2"></a>
      </div>
     
      </form>
  </div>
</div>
</div>