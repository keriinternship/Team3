-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 13, 2020 lúc 06:14 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbquanlybenhvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietbenhnhan`
--

CREATE TABLE `chitietbenhnhan` (
  `id_chitietbenhnhan` int(11) NOT NULL,
  `tenbenhnhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaynhapvien` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_phong` int(11) NOT NULL,
  `id_khoa` int(11) NOT NULL,
  `id_hoadon` int(11) NOT NULL,
  `img_benhnhan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietbenhnhan`
--

INSERT INTO `chitietbenhnhan` (`id_chitietbenhnhan`, `tenbenhnhan`, `gioitinh`, `ngaysinh`, `diachi`, `ngaynhapvien`, `id_phong`, `id_khoa`, `id_hoadon`, `img_benhnhan`) VALUES
(1, 'Nguyễn Văn Khải', 'Nam', '27/01/2000', 'Gò vấp', '22/08/2020', 1, 1, 1, 'benhnhan1.jpg'),
(2, 'Trần Quốc Bảo', 'Nam', '22/02/2000', 'Thủ Đức', '24/08/2020', 1, 2, 2, 'benhnhan2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_chitiethoadon` int(11) NOT NULL,
  `id_thuoc` int(11) NOT NULL,
  `id_hoadon` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `sotien` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_chitiethoadon`, `id_thuoc`, `id_hoadon`, `soluong`, `sotien`) VALUES
(1, 1, 1, 20, '700000'),
(2, 1, 1, 12, '7.000.000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietkhoa`
--

CREATE TABLE `chitietkhoa` (
  `id_chitietkhoa` int(11) NOT NULL,
  `id_khoa` int(11) NOT NULL,
  `id_chitietnhanvien` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietkhoa`
--

INSERT INTO `chitietkhoa` (`id_chitietkhoa`, `id_khoa`, `id_chitietnhanvien`, `id_phong`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietnhanvien`
--

CREATE TABLE `chitietnhanvien` (
  `id_chitietnhanvien` int(11) NOT NULL,
  `tennhanvien` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` int(10) NOT NULL,
  `id_chitietkhoa` int(11) NOT NULL,
  `id_loainhanvien` int(11) NOT NULL,
  `img_nhanvien` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietnhanvien`
--

INSERT INTO `chitietnhanvien` (`id_chitietnhanvien`, `tennhanvien`, `gioitinh`, `ngaysinh`, `diachi`, `sodienthoai`, `id_chitietkhoa`, `id_loainhanvien`, `img_nhanvien`) VALUES
(1, 'Trần Nguyễn Nguyên Kỳ', 'Nam', '25/02/2000', 'Bình thạnh', 986437000, 1, 1, 'nhanvien1.jpg'),
(2, 'Lê Thành Đạt', 'Nam', '22/1/1999', 'Thủ Đức', 162345678, 1, 1, 'nhanvien2.jpg'),
(3, 'Trương Huỳnh Quốc Bảo', 'Nam', '31/08/2000', 'Việt Nam', 78213921, 1, 1, 'nhanvien3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `id_chitietbenhnhan` int(11) NOT NULL,
  `id_chitietnhanvien` int(11) NOT NULL,
  `tongtien` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_hoadon`, `id_chitietbenhnhan`, `id_chitietnhanvien`, `tongtien`) VALUES
(1, 1, 1, '2.000.000'),
(2, 2, 2, '7.000.000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `id_khoa` int(11) NOT NULL,
  `tenkhoa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota_khoa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_khoa` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`id_khoa`, `tenkhoa`, `mota_khoa`, `img_khoa`) VALUES
(1, 'Khoa Khám Bệnh Đa Khoa', '', ''),
(2, 'Khoa Điều Trị Ngoại Trú', '', ''),
(3, 'Khoa Ngoại', '', ''),
(4, 'Khoa Nội', '', ''),
(5, 'Khoa Phụ Sản', '', ''),
(6, 'Khoa Nhi', '', ''),
(7, 'Khoa Truyền Nhiễm', '', ''),
(8, 'Khoa Cấp Cứu', '', ''),
(9, 'Khoa Hồi Sức', '', ''),
(10, 'Khoa Y Học Cổ Truyền', '', ''),
(11, 'Khoa Vật Lý Trị Liệu', '', ''),
(12, 'Khoa Ung Bướu', '', ''),
(13, 'Khoa Phẫu Thuật', '', ''),
(14, 'Khoa Chuẩn Đoán Hình Ảnh', '', ''),
(15, 'Khoa Xét Nghiệm', '', ''),
(16, 'Khoa Giải Phẩu', '', ''),
(17, 'Khoa Lọc Máu', '', ''),
(18, 'Khoa Nội Soi', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loainhanvien`
--

CREATE TABLE `loainhanvien` (
  `id_loainhanvien` int(11) NOT NULL,
  `ten_loainhanvien` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loainhanvien`
--

INSERT INTO `loainhanvien` (`id_loainhanvien`, `ten_loainhanvien`) VALUES
(1, 'Bác sĩ'),
(2, 'Y Tá'),
(3, 'Bảo vệ'),
(4, 'Điều dưỡng'),
(5, 'Kỹ thuật viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` int(11) NOT NULL,
  `id_nhanvien` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `id_nhanvien`) VALUES
(1, 'nguyenky_123', 12345678, 1),
(2, 'quocbao_123', 12345678, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `id_phong` int(11) NOT NULL,
  `tenphong` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_chitietnhanvien` int(11) NOT NULL,
  `trangthai` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`id_phong`, `tenphong`, `id_chitietnhanvien`, `trangthai`) VALUES
(1, 'Phòng 1', 1, 'Trống'),
(2, 'Phòng 2', 1, 'Đầy'),
(3, 'Phòng 3', 1, 'Bình Thường'),
(4, 'Phòng 4', 2, 'Còn Trống'),
(5, 'Phòng 5', 3, 'Đầy'),
(6, 'Phòng 6', 1, 'Bình Thường'),
(7, 'Phòng 7', 2, 'Còn Trống'),
(8, 'Phòng 8', 2, 'Còn Trống'),
(9, 'Phòng 9', 3, 'Đầy'),
(10, 'Phòng 10', 3, 'Còn Trống');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(11) NOT NULL,
  `tennhanvien` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` int(10) NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_login` int(11) NOT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhdaidien` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhbia` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `id_thongbao` int(11) NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `khunggio` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_thongbao` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoc`
--

CREATE TABLE `thuoc` (
  `id_thuoc` int(11) NOT NULL,
  `tenthuoc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `xuatxu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_thuoc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuoc`
--

INSERT INTO `thuoc` (`id_thuoc`, `tenthuoc`, `gia`, `soluong`, `xuatxu`, `img_thuoc`) VALUES
(1, 'Thuốc cảm', '20.000', '3000', 'Việt Nam', 'thuoc1.jpg'),
(2, 'Thuốc ho', '30.000', '3320', 'Mỹ', 'thuoc2.jpg'),
(3, 'Thuốc tránh thai', '24000', '1503', 'Mỹ', 'thuoc3.jpg'),
(4, 'Thuốc panadol', '17000', '2000', 'Mỹ', 'thuoc4.jpg'),
(5, 'Thuốc paracetamol', '16400', '1500', 'Nhật Bản', 'thuoc5.jpg'),
(6, 'Thuốc chống viêm phụ khoa', '19500', '2000', 'Canada', 'thuoc6.png'),
(7, 'Thuốc nhỏ mắt', '10000', '2000', 'Mỹ', 'thuoc7.jpg'),
(8, 'Thuốc viêm xoang', '23000', '3200', 'Mỹ', 'thuoc8.jpg'),
(9, 'Thuốc giảm cân', '17000', '500', 'Mỹ', 'thuoc9.jpg'),
(10, 'Thuốc vitamin A', '24000', '3000', 'Mỹ', 'thuoc10.jpg'),
(11, 'Thuốc vitamin B1', '22000', '2000', 'Mỹ', 'thuoc11.png'),
(12, 'Thuốc vitamin C', '22320', '2200', 'Mỹ', 'thuoc12.png'),
(13, 'Thuốc ngủ', '32200', '4330', 'Mỹ', 'thuoc13.jpg'),
(14, 'Thuốc chống đột quỵ', '23200', '2320', 'Trung Quốc', 'thuoc14.jpg'),
(15, 'Thuốc chống dị ứng', '32000', '3200', 'Mỹ', 'thuoc15.jpg'),
(16, 'Thuốc chống ung thư', '1000000', '2000', 'Nhật Bản', 'thuoc16.jpg'),
(17, 'Thuốc kháng sinh', '28000', '4350', 'Việt Nam', 'thuoc17.jpg'),
(18, 'Thuốc chữa yếu sinh lý', '1000000', '2000', 'Canada', 'thuoc18.jpg'),
(19, 'Thuốc tăng chiều cao', '20000', '4320', 'Nhật Bản', 'thuoc19.jpg'),
(20, 'Thuốc đau dạ dày', '26000', '5000', 'Nhật Bản', 'thuoc20.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinnhan`
--

CREATE TABLE `tinnhan` (
  `id_tinnhan` int(11) NOT NULL,
  `noidung` int(11) NOT NULL,
  `img_tinnhan` int(11) NOT NULL,
  `khunggio` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id_tintuc` int(11) NOT NULL,
  `tieude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung_tintuc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_tintuc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vatlieu`
--

CREATE TABLE `vatlieu` (
  `id_vatlieu` int(11) NOT NULL,
  `tenvatlieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_phong` int(11) NOT NULL,
  `img_vatlieu` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vatlieu`
--

INSERT INTO `vatlieu` (`id_vatlieu`, `tenvatlieu`, `id_phong`, `img_vatlieu`) VALUES
(1, 'Máy đo nhiệt', 1, 'vatlieu1.jpg'),
(2, 'Máy đo áp', 2, 'vatlieu2.jpg'),
(3, 'Máy Trợ Tim', 3, 'vatlieu3.png'),
(4, 'Máy đo đường huyết', 4, 'vatlieu4.jpg'),
(5, 'May đo huyết áp', 5, 'vatlieu5.jpg'),
(6, 'Máy đo thân nhiệt', 6, 'vatlieu6.jpg'),
(7, 'Máy đo nhịp tim', 7, 'vatlieu7.jpg'),
(8, 'Máy trợ tim', 8, 'vatlieu8.jpg'),
(9, 'Máy trợ thính', 9, 'vatlieu9.jpg'),
(10, 'Máy hô hấp', 10, 'vatlieu10.jpg'),
(11, 'Máy xông mũi khí', 11, 'vatlieu11.jpg'),
(12, 'Máy trị viêm mũi dị ứng', 12, 'vatlieu12.jpg'),
(13, 'Máy trị thoái vị đĩa đệm', 13, 'vatlieu13.jpg'),
(14, 'Máy vật lý trị liệu', 14, 'vatlieu14.jpg'),
(15, 'Máy siêu âm trị liệu', 15, 'vatlieu15.jpg'),
(16, 'Máy chụp X Quang', 16, 'vatlieu16.jpg'),
(17, 'Giường cho bệnh nhân', 17, 'vatlieu17.jpg'),
(18, 'Xe đẩy bệnh nhân', 18, 'vatlieu18.jpg'),
(19, 'Máy truyền dịch', 19, 'vatlieu19.jpg'),
(20, 'Máy truyền thức ăn', 20, 'vatlieu20.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietbenhnhan`
--
ALTER TABLE `chitietbenhnhan`
  ADD PRIMARY KEY (`id_chitietbenhnhan`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_chitiethoadon`);

--
-- Chỉ mục cho bảng `chitietkhoa`
--
ALTER TABLE `chitietkhoa`
  ADD PRIMARY KEY (`id_chitietkhoa`);

--
-- Chỉ mục cho bảng `chitietnhanvien`
--
ALTER TABLE `chitietnhanvien`
  ADD PRIMARY KEY (`id_chitietnhanvien`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`id_khoa`);

--
-- Chỉ mục cho bảng `loainhanvien`
--
ALTER TABLE `loainhanvien`
  ADD PRIMARY KEY (`id_loainhanvien`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id_phong`);

--
-- Chỉ mục cho bảng `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Chỉ mục cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`id_thongbao`);

--
-- Chỉ mục cho bảng `thuoc`
--
ALTER TABLE `thuoc`
  ADD PRIMARY KEY (`id_thuoc`);

--
-- Chỉ mục cho bảng `tinnhan`
--
ALTER TABLE `tinnhan`
  ADD PRIMARY KEY (`id_tinnhan`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_tintuc`);

--
-- Chỉ mục cho bảng `vatlieu`
--
ALTER TABLE `vatlieu`
  ADD PRIMARY KEY (`id_vatlieu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietbenhnhan`
--
ALTER TABLE `chitietbenhnhan`
  MODIFY `id_chitietbenhnhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_chitiethoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chitietkhoa`
--
ALTER TABLE `chitietkhoa`
  MODIFY `id_chitietkhoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chitietnhanvien`
--
ALTER TABLE `chitietnhanvien`
  MODIFY `id_chitietnhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khoa`
--
ALTER TABLE `khoa`
  MODIFY `id_khoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `loainhanvien`
--
ALTER TABLE `loainhanvien`
  MODIFY `id_loainhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `id_phong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `id_thongbao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thuoc`
--
ALTER TABLE `thuoc`
  MODIFY `id_thuoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tinnhan`
--
ALTER TABLE `tinnhan`
  MODIFY `id_tinnhan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_tintuc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vatlieu`
--
ALTER TABLE `vatlieu`
  MODIFY `id_vatlieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
