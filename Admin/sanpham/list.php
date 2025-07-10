<div class="boxcenter">
    <div class="form-control">
        <h1>Danh sách đồ ăn</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw" class="form-control mt-3" style="width: 30%;">
        <select name="id_danhmuc">
            <option value="0" select>Tất cả</option>
            <?php
            foreach ($listdm as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id_danhmuc . '">' . $tendanhmuc . '</option>';
            }
            ?>
            <option value=""></option>
        </select>
        <input type="submit" name="listok" value="Kiểm tra" class="btn btn-secondary">
    </form>

    <div class="boxcenter" >
        <div class="form-control">
            <table class="table" >
                <tr>
                    <th></th>
                    <th >Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Hình ảnh</th>
                    <th>Số lượng</th>
                    <th>Mô tả</th>
                    <th>Hành động</th> 
                </tr >
                <?php
                
                foreach ($listsp as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath = "../uploads/" . $hinhanh;
                    if (is_file($hinhpath)) {
                        $hinhanh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinhanh = "no photo";
                    }
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $tensp . '</td>
                            <td>' . $giasp . '</td>
                            <td>' . $hinhanh . '</td>
                            <td>' . $soluong . '</td>
                            <td>' . $mota . '</td>
                            <td>
                            <a href="' . $suasp . '"><input type="button" value="Sửa"  class="btn btn-danger"></a>
                            <a href="' . $xoasp . '"><input type="button" value="Xóa" class="btn btn-success"></a>
                            </td>
                           
                        </tr>';
                }
                ?>
            
            </table>
        </div>
        <div class="row mb ">
          
            <a href="index.php?act=addsp">
                <input type="button" value="Nhập thêm" class="btn btn-primary mt-3"></a>
        </div> 
    </div>
</div>