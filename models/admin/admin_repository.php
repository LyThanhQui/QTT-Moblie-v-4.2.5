<?php
include_once "models/database.php";

class AdminRepositoryDB
{
    public function DanhSach()
    {
        $db = DB::KetNoi();
        $sql = "SELECT tbl_khosanpham.ID, tbl_khosanpham.MaSanPham ,tbl_sanpham.TenSP, MauSac, SoLuong
                    FROM `tbl_khosanpham`INNER JOIN `tbl_sanpham`
                    ON tbl_khosanpham.MaSanPham = tbl_sanpham.ID";
        $cmd = $db->prepare($sql);
        $cmd->execute();
        return $cmd->fetchAll();
    }

    public function DanhSachSanPham()
    {
        $db = DB::KetNoi();
        $sql = "SELECT * FROM `tbl_khosanpham`";
        $cmd = $db->prepare($sql);
        $cmd->execute();
        return $cmd->fetchAll();
    }

    public function ThemSanPhamDaCo($data)
    {
        $db = DB::KetNoi();
        $sql = "UPDATE `tbl_khosanpham` SET `MauSac`=:MauSac,`SoLuong`=:SoLuong WHERE `MaSanPham`=:MaSanPham";
        $cmd = $db->prepare($sql);
        $cmd->bindValue(":MaSanPham", $data['MaSanPham']);
        $cmd->bindValue(":MauSac", $data['MauSac']);
        $cmd->bindValue(":SoLuong", $data['SoLuong']);
        $cmd->execute();
    }
    public function ThemSanPhamMoi($data)
    {
        $db = DB::KetNoi();
        $sql = "INSERT INTO `tbl_khosanpham`(`MaSanPham`,`MauSac`, `SoLuong`)
                    VALUES (
                            :MaSanPham,
                            :MauSac,
                            :SoLuong)";
        $cmd = $db->prepare($sql);
        $cmd->bindValue(":MaSanPham", $data['MaSanPham']);
        $cmd->bindValue(":MauSac", $data['MauSac']);
        $cmd->bindValue(":SoLuong", $data['SoLuong']);
        $cmd->execute();
    }

    public function ChiTiet($id)
    {
        $db = DB::KetNoi();
            $sql = "SELECT  * FROM `tbl_khosanpham` WHERE ID =:ID";
            $cmd = $db->prepare($sql);
            $cmd->bindValue(":ID", $id);
            $cmd->execute();
            return $cmd->fetch();
    }

    public function CapNhat($data)
    {
        $db = DB::KetNoi();
        $sql = "UPDATE `tbl_khosanpham` SET `MauSac`=:MauSac,`SoLuong`=:SoLuong  WHERE `ID` =:ID";
        $cmd = $db->prepare($sql);
        $cmd->bindValue(":MauSac",$data['MauSac']);
        $cmd->bindValue(":SoLuong",$data['SoLuong']);
        $cmd->bindValue(":ID",$data['ID']);
        $cmd->execute();    

    }
    //cho xoa san pham ma phai ghi vao lich su

    public function Xoa($id)
    {
        $db = DB::KetNoi();
        $sql = "DELETE FROM `tbl_khosanpham` WHERE `ID` =:ID";
        $cmd = $db->prepare($sql);
        $cmd->bindValue(":ID",$id);
        $cmd->execute();
    }
}
