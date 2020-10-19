-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2020 at 12:14 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qttmobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baiviet`
--

DROP TABLE IF EXISTS `tbl_baiviet`;
CREATE TABLE IF NOT EXISTS `tbl_baiviet` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MaChuDe` int(11) NOT NULL,
  `MaNguoiDung` int(11) NOT NULL,
  `TieuDe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayDang` date NOT NULL,
  `LuotXem` int(11) NOT NULL,
  `KiemDuyet` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `TieuDe` (`TieuDe`),
  UNIQUE KEY `MaChuDe` (`MaChuDe`,`MaNguoiDung`),
  KEY `MaNguoiDung` (`MaNguoiDung`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chudetin`
--

DROP TABLE IF EXISTS `tbl_chudetin`;
CREATE TABLE IF NOT EXISTS `tbl_chudetin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TenChuDe` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `TenChuDe` (`TenChuDe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_giohang`
--

DROP TABLE IF EXISTS `tbl_giohang`;
CREATE TABLE IF NOT EXISTS `tbl_giohang` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MaNguoiDung` int(11) NOT NULL,
  `HinhAnh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenSP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL,
  `TrangThai` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `MaNguoiDung` (`MaNguoiDung`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khosanpham`
--

DROP TABLE IF EXISTS `tbl_khosanpham`;
CREATE TABLE IF NOT EXISTS `tbl_khosanpham` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MaSanPham` int(11) NOT NULL,
  `MauSac` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `MaSanPham` (`MaSanPham`),
  UNIQUE KEY `MaSanPham_2` (`MaSanPham`),
  KEY `MaSanPham_3` (`MaSanPham`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_khosanpham`
--

INSERT INTO `tbl_khosanpham` (`ID`, `MaSanPham`, `MauSac`, `SoLuong`) VALUES
(1, 10, 'White', 130),
(26, 11, 'Black', 30),
(40, 19, 'Gray', 30),
(42, 18, 'White', 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lichsu`
--

DROP TABLE IF EXISTS `tbl_lichsu`;
CREATE TABLE IF NOT EXISTS `tbl_lichsu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NgayNhap` date NOT NULL,
  `NgayBan` date DEFAULT NULL,
  `NguoiPhuTrach` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoLuong` int(11) NOT NULL,
  `MauSac` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguoidung`
--

DROP TABLE IF EXISTS `tbl_nguoidung`;
CREATE TABLE IF NOT EXISTS `tbl_nguoidung` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `HoVaTen` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenDangNhap` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `QuyenHang` int(11) NOT NULL,
  `Khoa` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `TenDangNhap` (`TenDangNhap`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

DROP TABLE IF EXISTS `tbl_sanpham`;
CREATE TABLE IF NOT EXISTS `tbl_sanpham` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TenSP` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaDM` int(11) NOT NULL,
  `HinhAnh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DonGia` float NOT NULL,
  `NhaSanXuat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `TenSP` (`TenSP`,`MaDM`),
  KEY `MaDM` (`MaDM`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`ID`, `TenSP`, `MaDM`, `HinhAnh`, `DonGia`, `NhaSanXuat`, `MoTa`) VALUES
(10, 'Iphone 8 Plus 128G Black', 1, 'iphone-8-plus-128gb.jpg', 16000000, 'SamSung', NULL),
(11, 'Iphone 11 128G', 1, 'iphone-11-128gb.jpg', 20000000, 'Apple', NULL),
(12, 'Iphone SE 256G', 1, 'iphone-se-256gb.jpg', 15000000, 'Apple', NULL),
(14, 'Sam Sung A70', 1, 'samsung-galaxy-a70.jpg', 15000000, 'SamSung', ''),
(15, 'Iphone-7-129', 1, 'iphone-7-128gb.png', 15000000, 'Apple', ''),
(17, 'Acer Aspire', 13, 'acer-aspire-3.jpg', 15000000, 'HP', ''),
(18, 'Asus Vivobook', 13, 'asus-vivobook-a512fa-i3.jpg', 20000000, 'Dell', ''),
(19, 'HP 348', 13, 'hp-348-g7-i3.jpg', 20000000, 'HP', ''),
(20, 'HP 348 G7', 13, 'hp-348-g7-i5.jpg', 15000000, 'HP', ''),
(21, 'Ipad Mini', 14, 'ipad-mini.jpg', 15000000, 'Apple', ''),
(23, 'tai nghe', 15, 'tai-nghe-bluetooth-roman-q5c.jpg', 200000, 'Apple', '');

-- --------------------------------------------------------

--
-- Table structure for table `tlb_danhmucsappham`
--

DROP TABLE IF EXISTS `tlb_danhmucsappham`;
CREATE TABLE IF NOT EXISTS `tlb_danhmucsappham` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TenDanhMuc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `TenDanhMuc` (`TenDanhMuc`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tlb_danhmucsappham`
--

INSERT INTO `tlb_danhmucsappham` (`ID`, `TenDanhMuc`) VALUES
(1, 'Điện thoại'),
(13, 'Laptop'),
(15, 'Phụ kiện'),
(14, 'Tablet');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD CONSTRAINT `tbl_baiviet_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `tbl_nguoidung` (`ID`),
  ADD CONSTRAINT `tbl_baiviet_ibfk_2` FOREIGN KEY (`MaChuDe`) REFERENCES `tbl_chudetin` (`ID`);

--
-- Constraints for table `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD CONSTRAINT `tbl_giohang_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `tbl_nguoidung` (`ID`);

--
-- Constraints for table `tbl_khosanpham`
--
ALTER TABLE `tbl_khosanpham`
  ADD CONSTRAINT `tbl_khosanpham_ibfk_1` FOREIGN KEY (`MaSanPham`) REFERENCES `tbl_sanpham` (`ID`);

--
-- Constraints for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`MaDM`) REFERENCES `tlb_danhmucsappham` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
