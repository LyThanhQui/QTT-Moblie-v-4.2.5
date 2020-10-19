<nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow-lg">
	<a class="navbar-brand" href="admin.php">
		<i class="fas fa-users-cog mr-1"></i>
		Admin
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-cog fa-spin mr-1"></i>
					Quản lý chung
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="admin.php?action=admin_category"><i class="fas fa-tools mr-2"></i>Danh mục</a>
				<a class="dropdown-item" href="admin.php?action=admin_product"><i class="fas fa-laptop mr-2"></i>Sản phẩm</a>
				<a class="dropdown-item" href="admin.php?action=admin_repository"><i class="fas fa-archive mr-2"></i>Kho</a>
				<a class="dropdown-item" href="admin.php?action=admin_history"><i class="fas fa-history mr-2"></i>Lịch sử</a>
				<!--<?php 
					include_once "models/admin/admin_category.php";
					$db = new AdminCategoryDB();
					$DanhSach = $db->DanhSach();
					foreach ( $DanhSach as $value)
					{
						if($value['TenDanhMuc']=="Điện thoại")
						echo '<a class="dropdown-item" href="admin_mobile.php"><i class="fas fa-tools mr-2"></i>Điện thoại</a>';
						if($value['TenDanhMuc']=="Laptop")
						echo '<a class="dropdown-item" href="chude_them.php"><i class="fas fa-tools mr-2"></i>Laptop</a>';
						if($value['TenDanhMuc']=="Phụ kiện")
						echo '<a class="dropdown-item" href="chude_them.php"><i class="fas fa-tools mr-2"></i>Phụ kiện</a>';
						if($value['TenDanhMuc']=="Khác")
						echo '<a class="dropdown-item" href="chude_them.php"><i class="fas fa-tools mr-2"></i>Khác</a>';
					}
				?> -->
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-cog fa-spin mr-1"></i>
					Quản lý bán hàng
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#"><i class="fas fa-tools mr-1"></i>Sản phẩm đang giao</a>
					<a class="dropdown-item" href="chude_them.php"><i class="fas fa-tools mr-1"></i>Sản phẩm đang bán trả góp</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#"><i class="fas fa-tools mr-1"></i>Sản phẩm đã bán</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-cog fa-spin mr-1"></i>
					Quản lý tài khoản
				</a>
				<div class="dropdown-menu" aria-labelledby="n;avbarDropdown">
					<a class="dropdown-item" href="items_mobile_add.php"><i class="fas fa-tools mr-1"></i>Người dùng</a>
					<a class="dropdown-item" href="chude_them.php"><i class="fas fa-tools mr-1"></i>admin</a>
				</div>
			</li>
		
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Nhập trên sản phẩm?" aria-label="Search">
			<button class="btn btn-outline-info my-2 my-sm-0" type="submit"><i class="fas fa-search mr-1"></i>Tìm kiếm</button>
		</form>
	</div>
</nav>