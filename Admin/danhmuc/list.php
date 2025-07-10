<div class="boxcenter">
    <div class="form-control">
        <h1>Danh sách các loại đồ ăn</h1>
    </div>
    <div class="boxcenter" >
        <div class="form-control">
            <table class="table" >
                <tr>
                    <th></th>
                    <th >Mã loại</th>
                    <th>Tên loại</th>
                   
                    <th>Hành động</th> 
                </tr >
                <?php
                
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id_danhmuc=" . $id_danhmuc;
                    $xoadm = "index.php?act=xoadm&id_danhmuc=" . $id_danhmuc;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id_danhmuc . '</td>
                            <td>' . $tendanhmuc . '</td>
                            <td>
                            <a href="' . $suadm . '"><input type="button" value="Sửa"  class="btn btn-danger"></a>
                            <a href="' . $xoadm . '"><input type="button" value="Xóa" class="btn btn-success"></a>
                            </td>
                           
                        </tr>';
                }
                ?>
            
            </table>
        </div>
        <div class="row mb ">
          
            <a href="index.php?act=adddm">
                <input type="button" value="Nhập thêm" class="btn btn-primary mt-3"></a>
        </div> 
    </div>
</div>