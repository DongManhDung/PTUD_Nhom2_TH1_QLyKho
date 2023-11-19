-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 10:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom2_qlkho`
--

-- --------------------------------------------------------

--
-- Table structure for table `bienbanyeucauboithuong`
--

CREATE TABLE `bienbanyeucauboithuong` (
  `MaBienBan` int(11) NOT NULL,
  `ThongTinSuCo` varchar(255) NOT NULL,
  `DanhSachSanPhamBiAnhHuong` varchar(255) NOT NULL,
  `TongThietHai` float NOT NULL,
  `SoLuongBoiThuong` int(11) NOT NULL,
  `NoiXayRaSuCo` varchar(255) NOT NULL,
  `HinhAnhHoacTaiLieuMinhHoa` varchar(255) NOT NULL,
  `ThoiHanXuLy` date NOT NULL,
  `GhiChu` varchar(255) NOT NULL,
  `MaPhieuNhapKho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietphieunhapnvl`
--

CREATE TABLE `chitietphieunhapnvl` (
  `ID` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `NgaySX` date NOT NULL,
  `MaNVL` int(11) NOT NULL,
  `MaPhieuNhapKho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietphieunhapsanpham`
--

CREATE TABLE `chitietphieunhapsanpham` (
  `ID` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `NgaySX` date NOT NULL,
  `NgayHH` date NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `MaPhieuNhapKho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietphieuxuatnvl`
--

CREATE TABLE `chitietphieuxuatnvl` (
  `ID` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `NgaySX` date NOT NULL,
  `NgayHH` date NOT NULL,
  `MaNVL` int(11) NOT NULL,
  `MaPhieuXuatKho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietphieuxuatsanpham`
--

CREATE TABLE `chitietphieuxuatsanpham` (
  `ID` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `NgaySanXuat` date NOT NULL,
  `NgayHetHan` date NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `MaPhieuXuatKho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hangtrave`
--

CREATE TABLE `hangtrave` (
  `MaHangTraVe` int(11) NOT NULL,
  `TenHangTraVe` varchar(255) NOT NULL,
  `SoLuongHangTraVe` int(11) NOT NULL,
  `NgaySanXuat` date NOT NULL,
  `HanSD` date NOT NULL,
  `MaPhieuHangTraVe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kho`
--

CREATE TABLE `kho` (
  `MaKho` int(11) NOT NULL,
  `TenKho` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `DungLuong` int(11) NOT NULL,
  `MaNhanVien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kho`
--

INSERT INTO `kho` (`MaKho`, `TenKho`, `DiaChi`, `DungLuong`, `MaNhanVien`) VALUES
(1, 'Kho nguyên liệu 1', '258/239, 150 ấp 1, Đông Thạnh, Hóc Môn, Thành phố Hồ Chí Minh, Việt Nam', 500, 2),
(2, 'Kho nguyên liệu 2', '3793+VR9, Suối Nho, Định Quán, Đồng Nai, Việt Nam', 300, 10),
(3, 'Kho nguyên liệu 3', '120 Xa Lộ Hà Nội, Thành Phố, Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', 450, 9),
(4, 'Kho nguyên liệu 4', 'PGQ6+J8F, Lê Minh Xuân, Bình Chánh, Thành phố Hồ Chí Minh, Việt Nam', 300, 1),
(5, 'Kho nguyên liệu 5', 'N 2, Đức Huệ, Long An 850000, Việt Nam', 600, 3),
(6, 'Kho sản phẩm 1', '15A Group, Town, Lý Nhơn, Cần Giờ, Thành phố Hồ Chí Minh, Việt Nam', 200, 5),
(7, 'Kho sản phẩm 2', 'GX82+3WW, Thạnh An, Cần Giờ, Thành phố Hồ Chí Minh, Việt Nam', 400, 4),
(8, 'Kho sản phẩm 3', 'C79Q+83X, Đ. Bờ Kè, Phước Hải, Đất Đỏ, Bà Rịa - Vũng Tàu, Việt Nam', 350, 8),
(9, 'Kho sản phẩm 4', 'PRFV+9RP, Tân Hải, Hàm Tân, Bình Thuận, Việt Nam', 280, 7),
(10, 'Kho sản phẩm 5', '593 ấp tân hợp, Xuân Thành, Xuân Lộc, Đồng Nai, Việt Nam', 330, 6);

-- --------------------------------------------------------

--
-- Table structure for table `nguyenvatlieu`
--

CREATE TABLE `nguyenvatlieu` (
  `MaNVL` int(11) NOT NULL,
  `NgayNhap` date NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `TenNVL` varchar(255) NOT NULL,
  `Gia` float NOT NULL,
  `DonViTinh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvienkho`
--

CREATE TABLE `nhanvienkho` (
  `MaNhanVien` int(11) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `ViTriLamViec` varchar(255) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(10) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhanvienkho`
--

INSERT INTO `nhanvienkho` (`MaNhanVien`, `HoTen`, `ViTriLamViec`, `NgaySinh`, `GioiTinh`, `DiaChi`, `SDT`, `Email`) VALUES
(1, 'Đỗ Đăng Thành Luân', 'Hà Nội', '1990-09-03', 'Nam', '30 Phan Thúc Duyện, Phường 4, Tân Bình, Thành phố Hồ Chí Minh, Việt Nam', '0969343211', 'luandothanh@gmail.com'),
(2, 'Hoàng Thành Nghĩa', 'Quảng Ngãi', '2001-09-02', 'Nam', '60 Ngô Quyền, phường 3, quận 9, TP.HCM', '0877657101', 'nghiaBB@gmail.com'),
(3, 'Nguyễn Thị Cẩm Tú', 'Tây Ninh', '1998-08-01', 'Nữ', '9HH9+F87, Unnamed Road, Minh Long, Chơn Thành, Bình Phước, Việt Nam', '0342868551', 'tunguyencam2323@gmail.com'),
(4, 'Nguyễn Hoàng Hải Đăng', 'Bình Dương', '1997-01-02', 'Nam', 'Chà Là, Dương Minh Châu, Tây Ninh, Việt Nam', '0327856454', 'dang12302@gmai.com'),
(5, 'Nguyễn Đức Thịnh', 'Bình Phước', '2003-08-02', 'Nam', 'ĐT751, Chơn Thành, Bình Phước, Việt Nam', '0327989602', 'duckthinh93@gmail.com'),
(6, 'Đỗ Trường Sơn', 'Bình Dương', '1988-02-01', 'Nam', 'QL20, KP. Trần Cao Vân, TT, Thống Nhất, Đồng Nai, Việt Nam', '0329665831', 'sondo@gmail.com'),
(7, 'Trần Thị Hải Đăng', 'Quảng Nam', '1990-02-03', 'Nữ', '2J7C+V93, ĐT720, Tanh Linh, Tánh Linh, Bình Thuận, Việt Nam', '0326583433', 'haidangtran@gmail.com'),
(8, 'Nguyễn Thanh Sang', 'Bắc Kạn', '1995-10-03', 'Nam', '49 Đường Trần Hưng Đạo, Tân Thành, Tân Phú, Thành phố Hồ Chí Minh 700000, Việt Nam', '0327812533', 'sang202211@gmail.com'),
(9, 'Nguyễn Trọng Tú', 'TP.HCM', '1999-12-25', 'Nam', 'F757+M58, Tân Lập 1, Tân Phước, Tiền Giang, Việt Nam', '0969445312', 'tutrong11nuyen@gmail.com'),
(10, 'Phạm Thị Trúc Linh', 'Tuyên Quang', '1991-10-03', 'Nữ', 'Lê Minh Xuân, Bình Chánh, Thành phố Hồ Chí Minh, Việt Nam', '0772455190', 'truclinhkute@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvienkiemke`
--

CREATE TABLE `nhanvienkiemke` (
  `MaNVKK` int(11) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `SDT` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phieudonhangtrave`
--

CREATE TABLE `phieudonhangtrave` (
  `MaPhieuHangTraVe` int(11) NOT NULL,
  `SanPhamCanHoanTra` varchar(255) NOT NULL,
  `SoLuongDonHang` int(11) NOT NULL,
  `NgayTraVe` date NOT NULL,
  `LiDoTraVe` varchar(255) NOT NULL,
  `MaNhanVien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phieukiemke`
--

CREATE TABLE `phieukiemke` (
  `NgayKiemKe` date NOT NULL,
  `NguoiKiemKe` varchar(255) NOT NULL,
  `MaPhieuKiemKe` int(11) NOT NULL,
  `DanhSachNVL` varchar(255) NOT NULL,
  `SoLuongTonHeThong` int(11) NOT NULL,
  `SoLuongThuc` int(11) NOT NULL,
  `GhiChu` varchar(255) NOT NULL,
  `MaNVKK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phieunhapkho`
--

CREATE TABLE `phieunhapkho` (
  `MaPhieuNhapKho` int(11) NOT NULL,
  `NgayLap` date NOT NULL,
  `MaKho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phieuxuatkho`
--

CREATE TABLE `phieuxuatkho` (
  `MaPhieuXuatKho` int(11) NOT NULL,
  `NgayLap` date NOT NULL,
  `MaKho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `NgayXuatKho` date NOT NULL,
  `TenSanPham` varchar(255) NOT NULL,
  `Gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `LoaiTaiKhoan` varchar(255) NOT NULL,
  `MaNVKK` int(11) NOT NULL,
  `MaNhanVien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`Username`, `Password`, `LoaiTaiKhoan`, `MaNVKK`, `MaNhanVien`) VALUES
('admin', 'admin123', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bienbanyeucauboithuong`
--
ALTER TABLE `bienbanyeucauboithuong`
  ADD PRIMARY KEY (`MaBienBan`);

--
-- Indexes for table `chitietphieunhapnvl`
--
ALTER TABLE `chitietphieunhapnvl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `chitietphieunhapsanpham`
--
ALTER TABLE `chitietphieunhapsanpham`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `chitietphieuxuatnvl`
--
ALTER TABLE `chitietphieuxuatnvl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `chitietphieuxuatsanpham`
--
ALTER TABLE `chitietphieuxuatsanpham`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hangtrave`
--
ALTER TABLE `hangtrave`
  ADD PRIMARY KEY (`MaHangTraVe`);

--
-- Indexes for table `kho`
--
ALTER TABLE `kho`
  ADD PRIMARY KEY (`MaKho`);

--
-- Indexes for table `nguyenvatlieu`
--
ALTER TABLE `nguyenvatlieu`
  ADD PRIMARY KEY (`MaNVL`);

--
-- Indexes for table `nhanvienkho`
--
ALTER TABLE `nhanvienkho`
  ADD PRIMARY KEY (`MaNhanVien`);

--
-- Indexes for table `nhanvienkiemke`
--
ALTER TABLE `nhanvienkiemke`
  ADD PRIMARY KEY (`MaNVKK`);

--
-- Indexes for table `phieudonhangtrave`
--
ALTER TABLE `phieudonhangtrave`
  ADD PRIMARY KEY (`MaPhieuHangTraVe`);

--
-- Indexes for table `phieukiemke`
--
ALTER TABLE `phieukiemke`
  ADD PRIMARY KEY (`MaPhieuKiemKe`);

--
-- Indexes for table `phieunhapkho`
--
ALTER TABLE `phieunhapkho`
  ADD PRIMARY KEY (`MaPhieuNhapKho`);

--
-- Indexes for table `phieuxuatkho`
--
ALTER TABLE `phieuxuatkho`
  ADD PRIMARY KEY (`MaPhieuXuatKho`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bienbanyeucauboithuong`
--
ALTER TABLE `bienbanyeucauboithuong`
  MODIFY `MaBienBan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietphieunhapnvl`
--
ALTER TABLE `chitietphieunhapnvl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietphieunhapsanpham`
--
ALTER TABLE `chitietphieunhapsanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietphieuxuatnvl`
--
ALTER TABLE `chitietphieuxuatnvl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietphieuxuatsanpham`
--
ALTER TABLE `chitietphieuxuatsanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hangtrave`
--
ALTER TABLE `hangtrave`
  MODIFY `MaHangTraVe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kho`
--
ALTER TABLE `kho`
  MODIFY `MaKho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nguyenvatlieu`
--
ALTER TABLE `nguyenvatlieu`
  MODIFY `MaNVL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhanvienkho`
--
ALTER TABLE `nhanvienkho`
  MODIFY `MaNhanVien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nhanvienkiemke`
--
ALTER TABLE `nhanvienkiemke`
  MODIFY `MaNVKK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phieudonhangtrave`
--
ALTER TABLE `phieudonhangtrave`
  MODIFY `MaPhieuHangTraVe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phieukiemke`
--
ALTER TABLE `phieukiemke`
  MODIFY `MaPhieuKiemKe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phieunhapkho`
--
ALTER TABLE `phieunhapkho`
  MODIFY `MaPhieuNhapKho` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phieuxuatkho`
--
ALTER TABLE `phieuxuatkho`
  MODIFY `MaPhieuXuatKho` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
