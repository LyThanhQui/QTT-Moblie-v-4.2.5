<a href="admin.php?action=admin_repository_add" class="btn btn-info my-2"><i class="fal fa-plus"></i> Nhập sản phẩm vào kho</a>
<table class="table table-bordered table-hover mb-0">
    <thead>
        <tr>
            <th width="5%">STT</th>
            <th>Tên sản phẩm</th>
            <th width="20%">Màu sắc</th>
            <th width="15%">Số lượng</th>
            <th width="5%">Sửa</th>
            <th width="5%">Xoá</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt = 1;
        foreach ($DanhSach as $value) {
            echo '<tr>
                    <th>' . $stt++ . '</th>
                        <td>' . $value['TenSP'] . '</td> 
                        <td>' . $value['MauSac'] . '</td> 
                        <td>' . $value['SoLuong'] . '</td> 
                        <td class="text-center"><a href="admin.php?action=admin_repository_edit&id=' . $value['ID'] . '&TenSP='.$value['TenSP'].'"><i class="fa fa-edit text-primary"></i></a></td>
                        <td class="text-center"><a href="admin.php?action=admin_repository_remove&id=' . $value['ID'] . '" onclick="return confirm(\'Bạn có muốn xóa sản phẩm ' . $value['TenSP'] . 'khỏi kho không?\')"><i class="fa fa-trash-alt text-danger"></i></a></td>
                </tr>';
        }
        ?>
    </tbody>
</table>