<form action="admin?action=admin_repository_add_handle" method="post" enctype="multipart/form-data" class="mt-3">
    <label class="font-weight-bold text-primary">Tên sản phẩm</label>
    <select class="form-control" name="MaSanPham">
        <?php
            include_once "models/admin/admin_product.php";
            $db = new AdminproductDB();
            $data = $db->DanhSach();
            foreach($data as $value)
            {
                echo "<option value=".$value['ID'].">".$value['TenSP']."</option>";
            }
        ?>
    </select>
    <label class="font-weight-bold text-primary">Màu sắc</label>
    <select class="form-control" name="MauSac">
        <option value="Black">Black</option>
        <option value="Gray">Gray</option>
        <option value="Pink">Pink</option>
        <option value="White">White</option>
    </select>
    <div class="form-group">
        <label for="DonGia" class="font-weight-bold text-primary">Số lượng</label>
        <input type="text" class="form-control" id="SoLuong" name="SoLuong" />
    </div>
  
 
    <button type="submit" class="btn btn-primary mt-3">Thêm vào kho</button>
</form>