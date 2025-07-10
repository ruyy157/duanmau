<div class="boxcenter">
  <div class="form-control">
    <H1> Thêm mới đồ ăn</H1>
  </div>
  <div class="boxcenter">
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
    <div class="row mb10">
        Tên danh mục
                    <select name="id_danhmuc" id="danhmuc" class="w-full px-3 border rounded-[4px] h-[40px]" class="form-control" >
                        <option value="">--Chọn--</option>
                        <?php foreach ($listdm as $danhmuc) {?>
                            <option class="" value="<?php echo $danhmuc['id_danhmuc']?>"><?php echo $danhmuc['tendanhmuc']?></option>
                        <?php }
                        ?>
                       
                    </select>
      </div>
    
    <div class="row mb10">
        Tên đồ ăn<br>
        <input type="text" name="tensp" class="form-control">
      </div>
      <div class="row mb10">
        Giá<br>
        <input type="text" name="giasp" class="form-control">
      </div>
      <div class="row mb10">
        Hình<br>
        <input type="file" name="hinhanh" id=""class="form-control">
      </div>
      <div class="row mb10">
        Số lượng <br>
        <input type="number" name="soluong" id=""class="form-control">
      </div>
      <div class="row mb10">
        Mô tả<br>
        <textarea name="mota" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <span class="text-success">
        <?php
      if(isset($thongbao)&&($thongbao!=""))
      
      echo "$thongbao";
      ?>
      </span>
      

      <div class="row mb-5">
        <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-primary mt-2 " style="width: 50%; height: 40px;"> 
        <input type="reset" value="Nhập lại" class="btn btn-danger mt-2"  style="width: 50%;  height: 40px;">
        <a href="index.php?act=listsp"><input type="button" value="Danh sách" class="btn btn-success mt-2"></a>
      </div>
     
      </form>
  </div>
</div>
</div>