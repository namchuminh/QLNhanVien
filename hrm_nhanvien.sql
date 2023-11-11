-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 07:44 PM
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
(3, 'Chức vụ mới', 'Chức vụ mới', 10000000);

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
(1, 1.4, 1.2, 100000, 2),
(4, 1.4, 1.2, 500000, 4);

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
  `MaTDHV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `HoTen`, `GioiTinh`, `NgaySinh`, `DanToc`, `QueQuan`, `SoDienThoai`, `TinhTrang`, `NgayBatDauLam`, `Email`, `Avatar`, `MaCV`, `MaPB`, `MaTDHV`) VALUES
(2, 'Chu Minh Nam', 1, '2023-11-03', 'Kinh', 'Hà Nội', '0999888888', 1, '2023-11-07', 'chuminhnamma@gmail.com', 'http://localhost/QLNhanVien/uploads/avatar.jpg', 1, 1, 1),
(4, 'Nguyễn Văn An', 0, '2023-11-07', 'Kinh', 'Hà Nội', '0999888999', 1, '2023-11-14', 'nguyenvana@gmail.com', 'http://localhost/QLNhanVien/uploads/goi-dau-va-tua-lung-cao-su-non-o-to-mau-26-231.jpg', 3, 4, 1);

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
(4, 'Phòng Hành Chính1222', 'Tầng 2, Tòa ABC, Quận XYZ1', '0999999999', 'a@ctu.edu.vn', 'hanhchinhcty.vn1', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TaiKhoan` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `HoTen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`TaiKhoan`, `MatKhau`, `HoTen`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Nguyễn Văn A');

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
(1, 2, 11, 2023, 500000, 300000, 100000, 12020000),
(5, 4, 11, 2023, 0, 500000, 200000, 14900000);

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
(1, 'Cử Nhân', 'Tài Chính Ngân Hàng', 2023, 'Đại học Bình Dương');

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
  MODIFY `MaCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `luong`
--
ALTER TABLE `luong`
  MODIFY `MaLuong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phongban`
--
ALTER TABLE `phongban`
  MODIFY `MaPB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `traluong`
--
ALTER TABLE `traluong`
  MODIFY `MaTraLuong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trinhdohocvan`
--
ALTER TABLE `trinhdohocvan`
  MODIFY `MaTDHV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
