<?php
require_once "models/database.php";

class AdminproductDB
{
    public function DanhSach()
    {
        $db = DB::KetNoi();
        try {
            $sql = "SELECT  * FROM `tbl_sanpham` WHERE 1";
            $cmd = $db->prepare($sql);
            $cmd->execute();
            return $cmd->fetchAll();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            include_once "views/layouts/error.php";
            exit();
        }
    }

    public function ChiTiet($id)
    {
        $db = DB::KetNoi();
        try {
            $sql = "SELECT  * FROM `tbl_sanpham` WHERE ID =:ID";
            $cmd = $db->prepare($sql);
            $cmd->bindValue(":ID", $id);
            $cmd->execute();
            return $cmd->fetch();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            include_once "views/layouts/error.php";
            exit();
        }
    }

    public function Them($data)
    {
        $db = DB::KetNoi();

        $sql = 'INSERT INTO `tbl_sanpham`( `TenSP`, `MaDM`, `HinhAnh`, `DonGia`, `NhaSanXuat`, `MoTa`) 
                            VALUES(
                                        :TenSP,
                                        :MaDM,
                                        :HinhAnh,
                                        :DonGia,
                                        :NhaSanXuat,
                                        :MoTa)';
        $cmd = $db->prepare($sql);
        $cmd->bindValue(":TenSP", $data['TenSP']);
        $cmd->bindValue(":MaDM", $data['DanhMuc']);
        $cmd->bindValue(":HinhAnh", $data['HinhAnh']);
        $cmd->bindValue(":DonGia", $data['DonGia']);
        $cmd->bindValue(":NhaSanXuat", $data['NhaSanXuat']);
        $cmd->bindValue(":MoTa", $data['MoTa']);
        $cmd->execute();
    }

    public function CapNhatNoFile($data)
    {
        $db = DB::KetNoi();

        $sql = "UPDATE `tbl_sanpham`
                SET 
                         `TenSP`=:TenSanPham,
                        `MaDM`=:MaDanhMuc,
                         `DonGia`=:DonGia,
                         `NhaSanXuat`=:NhaSanXuat
                 WHERE  `ID` =:ID";
        $cmd = $db->prepare($sql);
        $cmd->bindValue(":TenSanPham", $data['TenSP']);
        $cmd->bindValue(":MaDanhMuc", $data['DanhMuc']);
        $cmd->bindValue(":DonGia", $data['DonGia']);
        $cmd->bindValue(":NhaSanXuat", $data['NhaSanXuat']);
        $cmd->bindValue(":ID", $data['ID']);
        $kq = $cmd->execute();
    }

    public function CapNhatWithFile($data)
    {
        $db = DB::KetNoi();

        $sql = "UPDATE `tbl_sanpham`
        SET 
                 `TenSP`=:TenSanPham,
                 `MaDM`=:MaDanhMuc,
                 `HinhAnh`=:HinhAnh,
                 `DonGia`=:DonGia,
                 `NhaSanXuat`=:NhaSanXuat
         WHERE  `ID` =:ID";
        $cmd = $db->prepare($sql);
        $cmd->bindValue(":TenSanPham", $data['TenSP']);
        $cmd->bindValue(":MaDanhMuc", $data['DanhMuc']);
        $cmd->bindValue(":HinhAnh", $data['HinhAnh']);
        $cmd->bindValue(":DonGia", $data['DonGia']);
        $cmd->bindValue(":NhaSanXuat", $data['NhaSanXuat']);
        $cmd->bindValue(":ID", $data['ID']);
        $kq = $cmd->execute();
    }
    public function Xoa($id)
    {
        $db = DB::KetNoi();
        try {
            $sql = "DELETE FROM `tbl_sanpham` WHERE  `ID` =:ID";
            $cmd = $db->prepare($sql);
            $cmd->bindValue(":ID", $id);
            $cmd->execute();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            include_once "views/layouts/error.php";
            exit();
        }
    }
}
