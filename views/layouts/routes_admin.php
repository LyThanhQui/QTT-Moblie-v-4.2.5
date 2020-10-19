<?php
if (isset($_GET['action'])) {

	switch ($_GET['action']) {
			//admin_category
		case "admin_category":
			include_once "controllers/admin/admin_category.php";
			$ctr = new AdminCatergory();
			$ctr->getDanhSach();
			break;
		case "admin_category_add";
			include_once "controllers/admin/admin_category.php";
			$ctr = new AdminCatergory();
			$ctr->getThem();
			break;
		case "admin_category_add_handle":
			include_once "controllers/admin/admin_category.php";
			$ctr = new AdminCatergory();
			$request =  array('TenDanhMuc' => $_POST['TenDanhMuc']);
			$ctr->postThem($request);
			break;
		case "admin_category_edit";
			include_once "controllers/admin/admin_category.php";
			$ctr = new AdminCatergory();
			$id  = $_GET['id'];
			$ctr->getSua($id);
			break;
		case "admin_category_edit_handle":
			include_once "controllers/admin/admin_category.php";
			$ctr = new AdminCatergory();
			$request = array(
				'ID' => $_POST['ID'],
				'TenDanhMuc' => $_POST['TenDanhMuc']
			);
			$ctr->postSua($request);
			break;
		case "admin_category_remove";
			include_once "controllers/admin/admin_category.php";
			$ctr = new AdminCatergory();
			$id  = $_GET['id'];
			$ctr->getXoa($id);
			break;

			//admin_product	
		case "admin_product":
			include_once "controllers/admin/admin_product.php";
			$ctr = new Adminproduct();
			$ctr->getDanhSach();
			break;
		case "admin_product_add":
			include_once "controllers/admin/admin_product.php";
			$ctr = new Adminproduct();
			$ctr->getThem();
			break;
		case "admin_product_add_handle":
			include_once "controllers/admin/admin_product.php";
			$ctr = new Adminproduct();
			$request = array(
				'TenSP' => $_POST['TenSP'],
				'DanhMuc' => $_POST['DanhMuc'],
				'HinhAnh' => $_FILES['HinhAnh']['name'],
				'HinhAnhTam' => $_FILES['HinhAnh']['tmp_name'],
				'DonGia' => $_POST['DonGia'],
				'NhaSanXuat' => $_POST['NhaSanXuat'],
				'MoTa' => $_POST['MoTa'],
			);
			$ctr->postThem($request);
			break;
		case "admin_product_edit":
			include_once "controllers/admin/admin_product.php";
			$ctr = new Adminproduct();
			$id = $_GET['id'];
			$ctr->getSua($id);
			break;
		case "admin_product_edit_handle":
			include_once "controllers/admin/admin_product.php";
			$ctr = new Adminproduct();
			$request = array(
				'ID' => $_POST['ID'],
				'TenSP' => $_POST['TenSP'],
				'DanhMuc' => $_POST['DanhMuc'],
				'HinhAnh' => $_FILES['HinhAnh']['name'],
				'HinhAnhTam' => $_FILES['HinhAnh']['tmp_name'],
				'HinhAnhSize' => $_FILES['HinhAnh']['size'],
				'HinhAnhType' => $_FILES['HinhAnh']['type'],
				'DonGia' => $_POST['DonGia'],
				'NhaSanXuat' => $_POST['NhaSanXuat'],
				'MoTa' => $_POST['MoTa'],
			);
			$ctr->postSua($request);
			break;
		case "admin_product_remove";
			include_once "controllers/admin/admin_product.php";
			$ctr = new Adminproduct();
			$id  = $_GET['id'];
			$ctr->getXoa($id);
			break;

			//admin_repository

		case "admin_repository":
			include_once "controllers/admin/admin_repository.php";
			$ctr = new AdminRepository();
			$ctr->getDanhSach();
			break;

		case "admin_repository_add":
			include_once "controllers/admin/admin_repository.php";
			$ctr = new AdminRepository();
			$ctr->getThem();
			break;
		case "admin_repository_add_handle":
			include_once "controllers/admin/admin_repository.php";
			$ctr = new AdminRepository();
			$request = array(
				'MaSanPham' => $_POST['MaSanPham'],
				'MauSac' => $_POST['MauSac'],
				'SoLuong' => $_POST['SoLuong']
			);
			$ctr->postThem($request);
			break;
		case "admin_repository_edit":
			include_once "controllers/admin/admin_repository.php";
			$ctr = new AdminRepository();
			$id = $_GET['id'];
			$TenSP = $_GET['TenSP'];
			$ctr->getSua($id, $TenSP);
			break;
		case "admin_repository_edit_handle":
			include_once "controllers/admin/admin_repository.php";
			$ctr = new AdminRepository();
			$request = array(
				'ID' => $_POST['ID'],
				'MauSac' => $_POST['MauSacMoi'],
				'SoLuong' => $_POST['SoLuong']
			);
			$ctr->postSua($request);
			break;
		case "admin_repository_remove":
			include_once "controllers/admin/admin_repository.php";
			$ctr = new AdminRepository();
			$id = $_GET['id'];
			$ctr->getXoa($id);
			break;
		default:
			include_once "admin.php";
			break;
	}
} else
	include_once "admin.php";
