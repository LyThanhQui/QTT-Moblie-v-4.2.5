<a href="admin.php?action=admin_product_add" class="btn btn-info my-2"><i class="fal fa-plus"></i> Thêm sản phẩm</a>
<table class="table table-bordered table-hover mb-0">
    <thead>
        <tr>
            <th width="5%">STT</th>
            <th>Tên sản phẩm</th>
            <th width="20%">Hình ảnh</th>
            <th width="15%">Đơn giá</th>
            <th width="15%">Danh mục</th>
            <th width="15%">Nhà sản xuất</th>
            <th width="5%">Sửa</th>
            <th width="5%">Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt = 1;
        foreach ($DanhSach as $value) {
            // if($value['NhaSanXuat']=="Apple")
            $danhMuc =  $value['MaDM'];
            if($danhMuc==1)
                 $danhMuc = "Điện thoại";
            else if ($danhMuc==13)
                 $danhMuc = "Laptop";
            else if ($danhMuc==14)
                 $danhMuc = "Tablet";  
            else
                 $danhMuc = "Phụ kiện";

            echo '<tr>
                    <th>' . $stt++ . '</th>
                        <td>' . $value['TenSP'] . '</td> 
                        <td>  <img src="public/images/' . $value['HinhAnh'] . '" width="50" height="60"></td>
                        <td>' . number_format($value['DonGia']) . ' đ</td>
                        <td>' .  $danhMuc . '</td> 
                        <td>' . $value['NhaSanXuat'] . '</td> 
                        <td class="text-center"><a href="admin.php?action=admin_product_edit&id=' . $value['ID'] . '"><i class="fa fa-edit text-primary"></i></a></td>
                        <td class="text-center"><a href="admin.php?action=admin_product_remove&id=' . $value['ID'] . '" onclick="return confirm(\'Bạn có muốn xóa sản phẩm ' . $value['TenSP'] . ' không?\')"><i class="fa fa-trash-alt text-danger"></i></a></td>
                </tr>';
        }
        ?>
    </tbody>
</table>