<form action="admin?action=admin_product_edit_handle" method="post" enctype="multipart/form-data" class="mt-3">
    <input type="hidden" id="ID" name="ID"  value="<?php echo $sanPham['ID']; ?>" />
    <div class="form-group">
        <label for="TenSP" class="font-weight-bold text-primary">Tên sản phẩm</label>
        <input type="text" class="form-control" id="TenSP" name="TenSP" value="<?php echo $sanPham['TenSP']; ?>" />
    </div>
    <label class="font-weight-bold text-primary">Danh mục</label>
    <select class="form-control" name="DanhMuc">
        <option value='1'>Điện thoại</option>;
        <option value= '13'>Laptop</option>;
        <option value='14'>Tablet</option>;
        <option value='15'>Phụ kiện</option>;
    </select>
    <div class="form-group">
        <label for="HinhAnh" class="font-weight-bold text-primary">Hình ảnh</label>
        <input type="file" class="form-control-file" id="HinhAnh" name="HinhAnh" />
    </div>
    <div class="form-group">
        <label for="DonGia" class="font-weight-bold text-primary">Đơn giá</label>
        <input type="text" class="form-control" id="DonGia" name="DonGia" value="<?php echo $sanPham['DonGia']; ?>" />
    </div>
    <label class="font-weight-bold text-primary">Nhà sản xuất</label>
    <select class="form-control" name="NhaSanXuat">
        <option value='SamSung'>SamSung</option>;
        <option value= 'Apple'>Apple</option>;
        <option value='Dell'>Dell</option>;
        <option value='HP'>HP</option>; 
    </select>
    <div class="form-group">
        <label for="DonGia" class="font-weight-bold text-primary">Mô tả</label>
        <input type="text" class="form-control" id="MoTa" name="MoTa" value="<?php echo $sanPham['MoTa']; ?>"/>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Sửa sản phẩm</button>
</form>