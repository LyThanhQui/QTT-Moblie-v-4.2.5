<form action="admin?action=admin_repository_edit_handle" method="post" enctype="multipart/form-data" class="mt-3">
<input type="hidden" id="ID" name="ID" value="<?php echo $Kho['ID']; ?>" />
    <label class="font-weight-bold text-primary">Tên sản phẩm</label>
    <select class="form-control" name="MaSanPham">
        <option value="<?php echo $TenSP ?>"><?php echo $TenSP ?></option>;
    </select>
    <label class="font-weight-bold text-primary">Màu sắc hiện tại</label>
    <select class="form-control" name="MauSacHienTai">
        <option value="<?php echo $Kho['MauSac']; ?>"><?php echo $Kho['MauSac']; ?></option>;
    </select>
    <label class="font-weight-bold text-primary">Màu sắc mới</label>
    <select class="form-control" name="MauSacMoi">
        <option value="Black">Black</option>
        <option value="Gray">Gray</option>
        <option value="Pink">Pink</option>
        <option value="White">White</option>
    </select>
    <div class="form-group">
        <label for="DonGia" class="font-weight-bold text-primary">Số lượng</label>
        <input type="text" class="form-control" id="SoLuong" name="SoLuong" value="<?php echo $Kho['SoLuong']; ?>" />
    </div>
    <button type="submit" class="btn btn-primary mt-3">Lưu vào kho</button>
</form>