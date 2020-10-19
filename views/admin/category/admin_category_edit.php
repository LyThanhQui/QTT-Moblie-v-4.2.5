<form action="admin.php?action=admin_category_edit_handle" method="post" class="mt-3">
	<input type="hidden" id="ID" name="ID" value="<?php echo $ChuDe['ID']; ?>" />
	<label class="font-weight-bold text-primary">Danh mục</label>
	<input type="text" class="form-control" id="TenDanhMuc" name="TenDanhMuc" value="<?php echo $ChuDe['TenDanhMuc']; ?>" />
	<button type="submit" class="btn btn-primary my-2">Cập nhật</button>
</form>

	