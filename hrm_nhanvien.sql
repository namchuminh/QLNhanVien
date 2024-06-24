-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 05:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm_nhanvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `MaCV` int(11) NOT NULL,
  `TenCV` varchar(50) NOT NULL,
  `MoTa` text DEFAULT NULL,
  `LuongCoBan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`MaCV`, `TenCV`, `MoTa`, `LuongCoBan`) VALUES
(1, 'Nhân Viên', 'Người làm thuê cho công ty, có chức vụ khi mới tham gia là nhân viên.', 8000000),
(3, 'Quản lý', 'Quản lý một phòng ban', 15000000),
(4, 'Giám Đốc', 'Người chịu trách nhiệm toàn bộ công ty', 25000000);

-- --------------------------------------------------------

--
-- Table structure for table `luong`
--

CREATE TABLE `luong` (
  `MaLuong` int(11) NOT NULL,
  `HeSoLuong` float NOT NULL,
  `HeSoPhuCap` float NOT NULL,
  `ThuongPhuCap` int(11) DEFAULT NULL,
  `MaNV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `luong`
--

INSERT INTO `luong` (`MaLuong`, `HeSoLuong`, `HeSoPhuCap`, `ThuongPhuCap`, `MaNV`) VALUES
(5, 1.4, 1, 500000, 5),
(6, 1.2, 1, 500000, 6),
(7, 1.2, 1, 500000, 7);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(11) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `GioiTinh` int(11) DEFAULT NULL,
  `NgaySinh` date NOT NULL,
  `DanToc` varchar(50) DEFAULT NULL,
  `QueQuan` varchar(255) DEFAULT NULL,
  `SoDienThoai` varchar(20) DEFAULT NULL,
  `TinhTrang` int(11) DEFAULT 1,
  `NgayBatDauLam` date DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Avatar` varchar(255) DEFAULT NULL,
  `MaCV` int(11) DEFAULT NULL,
  `MaPB` int(11) DEFAULT NULL,
  `MaTDHV` int(11) DEFAULT NULL,
  `PhanQuyen` int(11) NOT NULL DEFAULT 1,
  `TaiKhoan` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `HoTen`, `GioiTinh`, `NgaySinh`, `DanToc`, `QueQuan`, `SoDienThoai`, `TinhTrang`, `NgayBatDauLam`, `Email`, `Avatar`, `MaCV`, `MaPB`, `MaTDHV`, `PhanQuyen`, `TaiKhoan`, `MatKhau`) VALUES
(5, 'Nguyễn Văn Bình', 1, '1998-02-11', 'Kinh', 'Hà Nội', '0379962045', 1, '2024-01-11', 'nguyenvanb@gmail.com', 'http://localhost/QLNhanVien/uploads/mat-buon-1.jpg', 1, 1, 1, 2, 'nguyenvanbinh', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'Pham Hoan', 1, '2001-05-06', 'Kinh', 'Cầu Giấy, Hà Nội', '0888999888', 1, '2024-04-22', 'phamhoan@gmail.com', 'http://localhost/QLNhanVien/uploads/download.png', 1, 1, 4, 1, 'phamhoan', '21232f297a57a5a743894a0e4a801fc3'),
(7, 'Nguyễn Văn An', 1, '2024-05-28', 'Kinh', 'Cầu Giấy, Hà Nội', '0379962045', 1, '2024-06-24', 'letrunghieu@gmail.com', 'http://localhost/QLNhanVien/uploads/avatar.jpg', 1, 1, 1, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `MaPB` int(11) NOT NULL,
  `TenPhongBan` varchar(50) NOT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `SoDienThoai` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Website` varchar(100) DEFAULT NULL,
  `MoTa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`MaPB`, `TenPhongBan`, `DiaChi`, `SoDienThoai`, `Email`, `Website`, `MoTa`) VALUES
(1, 'Phòng Hành Chính', 'Tầng 2, Tòa ABC, Quận XYZ1', '0999888999', 'a4@ctu.edu.vn', 'hanhchinhcty.vn', 'Phòng tiếp nhận hành chính công ty'),
(4, 'Phòng IT', 'Tầng 2, Tòa ABC, Quận XYZ1', '0999999999', 'a@ctu.edu.vn', 'phongit.com', 'abcvc');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TaiKhoan` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `PhanQuyen` int(11) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`TaiKhoan`, `MatKhau`, `HoTen`, `PhanQuyen`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Nguyễn Văn A', 3);

-- --------------------------------------------------------

--
-- Table structure for table `traluong`
--

CREATE TABLE `traluong` (
  `MaTraLuong` int(11) NOT NULL,
  `MaNV` int(11) DEFAULT NULL,
  `Thang` int(11) DEFAULT NULL,
  `Nam` int(11) DEFAULT NULL,
  `PhuCapKhac` int(11) DEFAULT NULL,
  `Thuong` int(11) DEFAULT NULL,
  `Phat` int(11) NOT NULL,
  `TongLuong` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `traluong`
--

INSERT INTO `traluong` (`MaTraLuong`, `MaNV`, `Thang`, `Nam`, `PhuCapKhac`, `Thuong`, `Phat`, `TongLuong`) VALUES
(7, 5, 1, 2024, 0, 100000, 0, 11800000),
(8, 6, 4, 2024, 0, 0, 0, 10100000),
(9, 7, 6, 2024, 0, 500000, 100000, 10500000);

-- --------------------------------------------------------

--
-- Table structure for table `trinhdohocvan`
--

CREATE TABLE `trinhdohocvan` (
  `MaTDHV` int(11) NOT NULL,
  `BacTrinhDo` varchar(50) NOT NULL,
  `ChuyenNganh` varchar(100) DEFAULT NULL,
  `NamTotNghiep` int(11) DEFAULT NULL,
  `NoiDaoTao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trinhdohocvan`
--

INSERT INTO `trinhdohocvan` (`MaTDHV`, `BacTrinhDo`, `ChuyenNganh`, `NamTotNghiep`, `NoiDaoTao`) VALUES
(1, 'Cử Nhân', 'Tài Chính Ngân Hàng', 2023, 'Đại học Bình Dương'),
(3, 'Kỹ Sư', 'Công nghệ thông tin', 2010, 'Đại học Bách Khoa - Hà Nội'),
(4, 'Kỹ sư', 'Công Nghệ Thông Tin', 2024, 'Đại học Giao Thông Vận Tải');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`MaCV`);

--
-- Indexes for table `luong`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`MaLuong`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `MaCV` (`MaCV`,`MaPB`,`MaTDHV`),
  ADD KEY `MaPB` (`MaPB`),
  ADD KEY `MaTDHV` (`MaTDHV`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MaPB`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`TaiKhoan`);

--
-- Indexes for table `traluong`
--
ALTER TABLE `traluong`
  ADD PRIMARY KEY (`MaTraLuong`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `trinhdohocvan`
--
ALTER TABLE `trinhdohocvan`
  ADD PRIMARY KEY (`MaTDHV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `MaCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `luong`
--
ALTER TABLE `luong`
  MODIFY `MaLuong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `phongban`
--
ALTER TABLE `phongban`
  MODIFY `MaPB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `traluong`
--
ALTER TABLE `traluong`
  MODIFY `MaTraLuong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trinhdohocvan`
--
ALTER TABLE `trinhdohocvan`
  MODIFY `MaTDHV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `luong`
--
ALTER TABLE `luong`
  ADD CONSTRAINT `luong_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MaCV`) REFERENCES `chucvu` (`MaCV`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `nhanvien_ibfk_2` FOREIGN KEY (`MaPB`) REFERENCES `phongban` (`MaPB`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `nhanvien_ibfk_3` FOREIGN KEY (`MaTDHV`) REFERENCES `trinhdohocvan` (`MaTDHV`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `traluong`
--
ALTER TABLE `traluong`
  ADD CONSTRAINT `traluong_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
