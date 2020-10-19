<?php
include_once "models/admin/admin_product.php";
include_once "libs/functions.php";

class AdminProduct
{
    public function getDanhSach()
    {
        $db = new AdminproductDB;
        $DanhSach = $db->DanhSach();
        include_once 'views/admin/product/admin_product.php';
    }

    public function getThem()
    {
        include_once "views/admin/product/admin_product_add.php";
    }

    public function postThem($request)
    {
        $db = new AdminproductDB();
        try {
            if (isset($request)) {
                if (trim($request['TenSP']) == "")
                    ThongBaoLoi("Tên sản phẩm không được bỏ trống!");
                else if (trim($request['DonGia']) == "")
                    ThongBaoLoi("Đơn giá không được bỏ trống!");
                else {
                    if ($_FILES['HinhAnh']['type'] != 'image/gif' && $_FILES['HinhAnh']['type'] != 'image/png' && $_FILES['HinhAnh']['type'] != 'image/jpeg')
                        echo "Chỉ cho phép hình dạng JPG, GIF, PNG!";
                    elseif ($_FILES['HinhAnh']['size'] > 2 * 1024 * 1024)
                        echo "Chỉ cho tập tin từ 2MB trở xuống!";
                    else {
                        $dir = "public/images/";
                        if (!file_exists($dir))
                            mkdir($dir);
                        $filename = $request['HinhAnh'];
                        $filename_st = $request['HinhAnhTam'];
                        if (move_uploaded_file($filename_st, $dir . $filename)) {
                            $db->Them($request);
                            header("Location: admin.php?action=admin_product");
                        }
                    }
                }
            }
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            include_once "views/layouts/error.php";
            exit();
        }
    }

    public function getSua($id)
    {
        $db = new AdminproductDB();
        $sanPham = $db->ChiTiet($id);
        include_once "views/admin/product/admin_product_edit.php";
    }

    public function postSua($request) 
    {
        $db = new AdminproductDB();
        if (empty($request['HinhAnh'])) {
            if (trim($request['TenSP']) == "")
                ThongBaoLoi("Tên sản phẩm không được bỏ trống!");
            else if (trim($request['DonGia']) == "")
                ThongBaoLoi("Đơn giá không được bỏ trống!");
            else {
                    $db->CapNhatNoFile($request);
                    header("Location: admin.php?action=admin_product");
                }
        } else {
            if ($request['HinhAnhType'] != 'image/gif' && $request['HinhAnhType'] != 'image/png' && $request['HinhAnhType'] != 'image/jpeg')
                ThongBaoLoi("Chỉ cho phép hình dạng JPG, GIF, PNG!");
            elseif ($request['HinhAnhSize'] > 2 * 1024 * 1024)
                ThongBaoLoi("Chỉ cho tập tin từ 2MB trở xuống!");
            else {
                $dir = "public/images/";
                if (!file_exists($dir))
                    mkdir($dir);
                $filename = $request['HinhAnh'];
                $filename_st = $request['HinhAnhTam'];
                if (move_uploaded_file( $filename_st, $dir . $filename)) {
                    $db->CapNhatWithFile($request);
                    header("Location: admin.php?action=admin_product");
                }
            }
        }
    }

    public function getXoa($id)
    {
        $db = new AdminproductDB();
        $db->Xoa($id);
        header("Location: admin.php?action=admin_product");
    }
}
