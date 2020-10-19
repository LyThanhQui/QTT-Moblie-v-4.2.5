
<a href="admin.php?action=admin_category_add" class="btn btn-info my-2"><i class="fal fa-plus"></i>Thêm danh mục</a>
<table class="table table-bordered table-hover mb-0">
	<thead>
		<tr>
			<th width="5%">STT</th>
			<th>Tên danh mục</th>
			<th width="5%">Sửa</th>
			<th width="5%">Xóa</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$stt=1;
		foreach ($DanhSach  as $value) {
			echo '<tr>
					<th>' . $stt++ . '</th>
						<td>' . $value['TenDanhMuc'] . '</td> 
						<td class="text-center"><a href="admin.php?action=admin_category_edit&id=' . $value['ID'] . '"><i class="fa fa-edit text-primary"></i></a></td>
						<td class="text-center"><a href="admin.php?action=admin_category_remove&id=' . $value['ID'] . '" onclick="return confirm(\'Bạn có muốn xóa danh mục ' . $value['TenDanhMuc'] . ' không?\')"><i class="fa fa-trash-alt text-danger"></i></a></td>
				</tr>';
		}
		?>
	</tbody>
</table>