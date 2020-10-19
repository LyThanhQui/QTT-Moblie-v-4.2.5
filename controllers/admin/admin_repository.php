<?php
include_once "models/admin/admin_repository.php";

class AdminRepository
{
    public function getDanhSach()
    {
        $db = new AdminRepositoryDB();
        $DanhSach = $db->DanhSach();
        include_once "views/admin/repository/admin_repository.php";
    }

    public function getThem()
    {
        include_once "views/admin/repository/admin_repository_add.php";
    }

    public function postThem($request)
    {
        $MaSanPhamMoi = $request['MaSanPham'];
        $db = new AdminRepositoryDB();
        $DanhSach = $db->DanhSachSanPham();
        foreach ($DanhSach as $value) {
            $MaSanPhamDaCo = $value['MaSanPham'];
            if ($MaSanPhamMoi == $MaSanPhamDaCo) {
                $request['SoLuong'] = $request['SoLuong'] + $value['SoLuong'];
                $DanhSach = $db->ThemSanPhamDaCo($request);
            }
            if ($MaSanPhamMoi != $MaSanPhamDaCo) {
                $DanhSach = $db->ThemSanPhamMoi($request);
            }


            header("Location: admin.php?action=admin_repository");
        }
    }

    public function getSua($id, $TenSP)
    {
        $db = new AdminRepositoryDB();
        $Kho = $db->ChiTiet($id);
        include "views/admin/repository/admin_repository_edit.php";
    }

    public function postSua($request)
    {
        $db = new AdminRepositoryDB();
        $db->CapNhat($request);
        header("Location: admin.php?action=admin_repository");
    }

    public function getXoa($id)
    {
        $db = new AdminRepositoryDB();
        $db->Xoa($id);
        header("Location: admin.php?action=admin_repository");
    }
}
