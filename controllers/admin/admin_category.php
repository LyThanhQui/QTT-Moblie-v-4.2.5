<?php

require_once "models/admin/admin_category.php";

class AdminCatergory
{
    public function getDanhSach()
    {

        $db = new AdminCategoryDB();
        $DanhSach = $db->DanhSach();
        include_once 'views/admin/category/admin_category.php';
    }

    public function getThem()
    {
        include_once "views/admin/category/admin_category_add.php";
    }

    public function postThem($request)
    {
        $db =  new AdminCategoryDB();
        $db->Them($request);
        header("Location: admin.php?action=admin_category");

    }

    public function getSua($id)
    {
        $db = new AdminCategoryDB();
        $ChuDe = $db->ChiTiet($id);
        include_once "views/admin/category/admin_category_edit.php";
    }

    public function postSua($request)
    {
        $db = new AdminCategoryDB();
        $db->CapNhat($request);
        header("Location: admin.php?action=admin_category");

    }

    public function getXoa($id)
    {
        $db = new AdminCategoryDB();
        $db->Xoa($id);
        header("Location: admin.php?action=admin_category");
    }

}

?>