<?php
require_once "models/database.php";

class AdminCategoryDB
{
    public function DanhSach()
    {
        $db = DB::KetNoi();
        try {
            $sql = "SELECT  * FROM `tlb_danhmucsappham` WHERE 1";
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
        try
        {
            $sql = "SELECT  * FROM `tlb_danhmucsappham` WHERE ID =:ID";
            $cmd = $db->prepare($sql);
            $cmd->bindValue(":ID", $id);
            $cmd->execute();
            return $cmd->fetch();
        } catch (PDOException $e) 
        {
            $error_message = $e->getMessage();
            include_once "views/layouts/error.php";
            exit();
        }
    }

    public function Them($data)
    {
        $db = DB::KetNoi();
        try 
        {
            $sql = "INSERT INTO `tlb_danhmucsappham`( `TenDanhMuc`) VALUES (:TenDanhMuc)";
            $cmd = $db->prepare($sql);
            $cmd->bindValue(":TenDanhMuc", $data['TenDanhMuc']);
            $cmd->execute();
        } catch (PDOException $e) 
        {
            $error_message = $e->getMessage();
            include_once "views/layouts/error.php";
            exit();
        }
    }

    public function Xoa($id)
    {
        $db = DB::KetNoi();
        try 
        {
        $sql = "DELETE FROM `tlb_danhmucsappham` WHERE  `ID` =:ID";
		$cmd = $db->prepare($sql);
		$cmd->bindValue(":ID", $id);
		$cmd->execute();
        } catch (PDOException $e) 
        {
            $error_message = $e->getMessage();
            include_once "views/layouts/error.php";
            exit();
        }
    }

    public function CapNhat($data)
    {
        $db = DB::KetNoi();
        try
        {
            $sql = "UPDATE `tlb_danhmucsappham` SET `TenDanhMuc`=:TenDM WHERE `ID`=:ID";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(":ID", $data['ID']);
			$cmd->bindValue(":TenDM", $data['TenDanhMuc']);
			$cmd->execute();
        } catch (PDOException $e)
        {
            $error_message = $e->getMessage();
            include_once "views/layouts/error.php";
            exit();
        }
    }
}
