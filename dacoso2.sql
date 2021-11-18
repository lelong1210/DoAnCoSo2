-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2021 at 05:12 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DaCoSo2`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `masp` int(11) NOT NULL,
  `magiohang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietgiohang`
--

INSERT INTO `chitietgiohang` (`masp`, `magiohang`, `soluong`) VALUES
(2, 'khachhang-gh', 2);

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `soluong` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `mahoadon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`soluong`, `masp`, `mahoadon`) VALUES
(1, 6, 124),
(1, 2, 125),
(1, 5, 126),
(1, 8, 126),
(1, 3, 127),
(1, 2, 128),
(1, 4, 128),
(1, 26, 129),
(1, 25, 130),
(1, 2, 131),
(1, 61, 132),
(1, 23, 133),
(1, 25, 134),
(1, 1, 135),
(1, 8, 136);

-- --------------------------------------------------------

--
-- Table structure for table `chitiettinnhan`
--

CREATE TABLE `chitiettinnhan` (
  `machitiettinnhan` int(11) NOT NULL,
  `matinnhan` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigiannhan` datetime NOT NULL,
  `nguoinhan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitiettinnhan`
--

INSERT INTO `chitiettinnhan` (`machitiettinnhan`, `matinnhan`, `noidung`, `thoigiannhan`, `nguoinhan`) VALUES
(210, 'lequanglong12102k2@gmail.com-tn', 'chao ad', '2021-11-15 09:20:35', 'lequanglong12102k2@gmail.com'),
(211, 'lequanglong12102k2@gmail.com-tn', 'kaka', '2021-11-15 09:20:47', 'lql'),
(212, 'lequanglong12102k2@gmail.com-tn', 'hehe', '2021-11-15 09:20:54', 'lequanglong12102k2@gmail.com'),
(213, 'lelong12102k2@gmail.com-tn', '123123', '2021-11-15 09:21:24', 'lelong12102k2@gmail.com'),
(214, 'lelong12102k2@gmail.com-tn', '456456', '2021-11-15 09:21:33', 'lql'),
(215, 'lequanglong12102k2@gmail.com-tn', 'hehe', '2021-11-16 10:29:10', 'lql');

-- --------------------------------------------------------

--
-- Table structure for table `congviec`
--

CREATE TABLE `congviec` (
  `macv` int(11) NOT NULL,
  `tendangnhap` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `makhachhang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mahoadon` int(11) NOT NULL,
  `diadiemcongviec` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdtKh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigiannhancongviec` datetime DEFAULT NULL,
  `thoigianxongcongviec` datetime DEFAULT NULL,
  `tiendo` int(2) DEFAULT NULL,
  `danhgiacuakhachhang` int(2) DEFAULT NULL,
  `danhancv` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `congviec`
--

INSERT INTO `congviec` (`macv`, `tendangnhap`, `makhachhang`, `mahoadon`, `diadiemcongviec`, `sdtKh`, `thoigiannhancongviec`, `thoigianxongcongviec`, `tiendo`, `danhgiacuakhachhang`, `danhancv`) VALUES
(75, 'nhanvien', 'khachhang', 124, ' Tỉnh Ninh Bình - Huyện Nho Quan - Xã Xích Thổ ', '0123456789', '2021-04-08 11:22:46', '2021-04-09 11:38:00', 1, 5, 1),
(76, 'nhanvien', 'lequanglong12102k2@gmail.com', 125, ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '2021-09-08 14:29:44', '2021-09-08 18:29:57', 1, 5, 1),
(77, 'nhanvien', 'lelong12102k2@gmail.com', 126, ' Tỉnh Bắc Ninh - Huyện Quế Võ - Xã Mộ Đạo ', '09123557', '2021-11-17 21:51:53', '2021-11-17 21:54:32', 1, 5, 1),
(78, 'nhanvien', 'lequanglong12102k2@gmail.com', 127, ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '2021-09-14 22:19:00', '2021-09-15 22:19:06', 1, 5, 1),
(79, 'nhanvien1', 'lequanglong12102k2@gmail.com', 128, ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '2021-11-17 22:20:03', '2021-11-17 22:20:09', 1, 5, 1),
(80, 'nhanvien', 'lequanglong12102k2@gmail.com', 129, ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '2021-11-17 22:33:36', '2021-11-17 22:33:47', 1, 5, 1),
(81, 'nhanvien', 'lequanglong12102k2@gmail.com', 130, ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '2021-11-17 22:33:37', '2021-11-17 22:33:48', 1, 1, 1),
(82, 'nhanvien', 'lequanglong12102k2@gmail.com', 131, ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '2021-11-17 23:47:42', '2021-11-17 23:47:49', 1, 2, 1),
(83, 'nhanvien', 'lequanglong12102k2@gmail.com', 132, ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '2021-11-17 23:47:45', '2021-11-17 23:47:52', 1, 3, 1),
(84, 'nhanvien', 'lequanglong12102k2@gmail.com', 133, ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '2021-11-17 23:47:44', '2021-11-17 23:47:53', 1, 4, 1),
(85, 'nhanvien', 'lequanglong12102k2@gmail.com', 134, ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '2021-11-17 23:47:46', '2021-11-17 23:47:55', 1, 5, 1),
(86, NULL, 'lequanglong12102k2@gmail.com', 135, ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', NULL, NULL, 0, NULL, 0),
(87, 'nhanvien', 'lequanglong12102k2@gmail.com', 136, ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '2021-11-18 09:37:25', '2021-11-18 09:37:30', 1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `diachigiaohang`
--

CREATE TABLE `diachigiaohang` (
  `madiachigiaohang` int(11) NOT NULL,
  `tendangnhap` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdtGh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentinh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenhuyen` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenxa` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachichitiet` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diachigiaohang`
--

INSERT INTO `diachigiaohang` (`madiachigiaohang`, `tendangnhap`, `sdtGh`, `tentinh`, `tenhuyen`, `tenxa`, `diachichitiet`) VALUES
(24, 'khachhang', '0123456789', 'Tỉnh Ninh Bình', 'Huyện Nho Quan', 'Xã Xích Thổ', 'Sen Bang 123'),
(25, 'khachhang', '0832090990', 'Tỉnh Quảng Bình', 'Huyện Lệ Thủy', 'Xã Sen Thủy', 'sen thủy'),
(26, 'lequanglong12102k2@gmail.com', '0932183222', 'Tỉnh Lạng Sơn', 'Huyện Lộc Bình', 'Xã Tĩnh Bắc', 'Sen Thủy'),
(27, 'lqlong.20it1@vku.udn.vn', '0932319212', 'Tỉnh Vĩnh Phúc', 'Huyện Tam Đảo', 'Xã Đạo Trù', 'senthuy'),
(28, 'lelong12102k2@gmail.com', '09123557', 'Tỉnh Bắc Ninh', 'Huyện Quế Võ', 'Xã Mộ Đạo', 'sen thuy');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `magiohang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tendangnhap` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`magiohang`, `tendangnhap`) VALUES
('khachhang-gh', 'khachhang'),
('lelong12102k2@gmail.com-gh', 'lelong12102k2@gmail.com'),
('lequanglong12102k2@gmail.com-gh', 'lequanglong12102k2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hangsx`
--

CREATE TABLE `hangsx` (
  `masx` int(11) NOT NULL,
  `tenhang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hangsx`
--

INSERT INTO `hangsx` (`masx`, `tenhang`) VALUES
(1, 'Amazon'),
(2, 'August'),
(3, 'Blink'),
(4, 'BroadLink'),
(5, 'ECOVACS'),
(6, 'eufy '),
(7, 'ezviz'),
(8, 'GE'),
(9, 'Google'),
(10, 'Philips'),
(11, 'Rạng Đông'),
(12, 'Ring Floodlight'),
(13, 'Sensibo '),
(14, 'snoff'),
(15, 'Tado'),
(16, 'Tuya'),
(17, 'Wyze Lock'),
(18, 'Xiaomi'),
(19, 'Yeelight');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahoadon` int(11) NOT NULL,
  `tendangnhap` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaymua` date NOT NULL,
  `diachigiaohang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoaigh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phiship` decimal(10,2) NOT NULL,
  `hinhthucthanhtoan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahoadon`, `tendangnhap`, `ngaymua`, `diachigiaohang`, `sodienthoaigh`, `phiship`, `hinhthucthanhtoan`) VALUES
(124, 'khachhang', '2021-11-17', ' Tỉnh Ninh Bình - Huyện Nho Quan - Xã Xích Thổ ', '0123456789', '94000.00', 0),
(125, 'lequanglong12102k2@gmail.com', '2021-11-17', ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '92000.00', 0),
(126, 'lelong12102k2@gmail.com', '2021-11-17', ' Tỉnh Bắc Ninh - Huyện Quế Võ - Xã Mộ Đạo ', '09123557', '84000.00', 1),
(127, 'lequanglong12102k2@gmail.com', '2021-11-17', ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '92000.00', 1),
(128, 'lequanglong12102k2@gmail.com', '2021-11-17', ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '92000.00', 1),
(129, 'lequanglong12102k2@gmail.com', '2021-11-17', ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '92000.00', 1),
(130, 'lequanglong12102k2@gmail.com', '2021-11-17', ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '92000.00', 1),
(131, 'lequanglong12102k2@gmail.com', '2021-11-17', ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '92000.00', 1),
(132, 'lequanglong12102k2@gmail.com', '2021-11-17', ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '92000.00', 1),
(133, 'lequanglong12102k2@gmail.com', '2021-11-17', ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '92000.00', 1),
(134, 'lequanglong12102k2@gmail.com', '2021-11-17', ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '92000.00', 1),
(135, 'lequanglong12102k2@gmail.com', '2021-11-17', ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '92000.00', 1),
(136, 'lequanglong12102k2@gmail.com', '2021-11-18', ' Tỉnh Lạng Sơn - Huyện Lộc Bình - Xã Tĩnh Bắc ', '0932183222', '92000.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `luong`
--

CREATE TABLE `luong` (
  `soluong` decimal(10,2) NOT NULL,
  `maluong` int(11) NOT NULL,
  `macv` int(11) NOT NULL,
  `ngaynhanluong` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `luong`
--

INSERT INTO `luong` (`soluong`, `maluong`, `macv`, `ngaynhanluong`) VALUES
('250000.00', 15, 76, '2021-11-17 22:30:47'),
('200000.00', 16, 75, '2021-11-17 22:30:47'),
('250000.00', 17, 77, '2021-11-17 22:30:47'),
('250000.00', 18, 78, '2021-11-17 22:30:47'),
('250000.00', 19, 79, '2021-11-17 22:30:47'),
('200000.00', 20, 80, '2021-11-17 22:34:00'),
('250000.00', 21, 81, '2021-11-17 22:34:21'),
('210000.00', 22, 82, '2021-11-17 23:48:57'),
('210000.00', 23, 83, '2021-11-17 23:48:59'),
('250000.00', 24, 84, '2021-11-17 23:49:02'),
('250000.00', 25, 85, '2021-11-17 23:49:04'),
('250000.00', 26, 87, '2021-11-18 09:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `tendangnhap` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tennguoidung` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodienthoai` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaythamgia` date NOT NULL,
  `quyen` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`tendangnhap`, `tennguoidung`, `diachi`, `sodienthoai`, `email`, `matkhau`, `ngaythamgia`, `quyen`) VALUES
('abaftdon’t', NULL, NULL, NULL, 'roma61@hotmail.com', '5280e11f2452aac5aa85177aaf4b3b98', '2021-11-06', 0),
('admin', 'Admin Con Mèo', NULL, '2121', 'admin@gmeil.com', '6f575fbe74c6d5f367a8aa4b398cc7da', '2021-11-14', 1),
('arcanaabounding', 'LE QUANG LONG TK', 'QUANG BINH', '0904349823', 'marisol39@hotmail.com', '4297f44b13955235245b2497399d7a93', '2021-11-06', 0),
('arousedrecruit', NULL, NULL, NULL, 'salma87@hotmail.com', 'a794275722896cac20ecdd29928a3b9d', '2021-11-06', 0),
('banneravailable', NULL, NULL, NULL, 'marjolaine42@hotmail.com', '9c80d885bcf55293e8b999ea404ff2b2', '2021-11-06', 0),
('befittinggeorgian', 'THANH HẰNG', 'ĐÀ NẴNG', '0923923921', 'ena.brekke8@gmail.com', '4297f44b13955235245b2497399d7a93', '2021-11-06', 0),
('blaringchest', NULL, NULL, NULL, 'bo.larson@hotmail.com', 'c4c11f39e198267cf66289ca58f75036', '2021-11-06', 0),
('blockbid', NULL, NULL, NULL, 'gwen.kertzmann@gmail.com', '25b722aa084517be6573456e457ac357', '2021-11-06', 0),
('bondmenorah', NULL, NULL, NULL, 'margarita.gusikowski@gmail.com', '2bd3542420443bd39802a6c4745feb24', '2021-11-06', 0),
('bonemealplural', NULL, NULL, NULL, 'pattie87@yahoo.com', '2f66aee216e67831066eadc473bbd340', '2021-11-06', 0),
('capableliving', NULL, NULL, NULL, 'bo.cummerata@yahoo.com', '3faf05d2051cbbafaec8dd0c5250e608', '2021-11-06', 0),
('couragepointed', NULL, NULL, NULL, 'mabel24@gmail.com', '09a18a90422c9793ea2418933a1b7f5e', '2021-11-06', 0),
('dewickiranian', NULL, NULL, NULL, 'germaine_armstrong50@gmail.com', '3ef5b980b37c5751308e429ee12168bd', '2021-11-06', 0),
('dextrousdim', NULL, NULL, NULL, 'johan_reichel24@yahoo.com', '2dd27385059cf459b6269320b72d48ce', '2021-11-06', 0),
('discussionjoin', NULL, NULL, NULL, 'armani95@gmail.com', '6757db1a0a0b69ac17e9900bb18bc995', '2021-11-06', 0),
('dopeychilis', NULL, NULL, NULL, 'pierce.fay46@hotmail.com', '9e7398fa314dfbb8bcb20490fbbbe46d', '2021-11-06', 0),
('dreadfulroar', NULL, NULL, NULL, 'saul_lubowitz99@hotmail.com', '2cab535130190f28ce5e9d380de2c30f', '2021-11-06', 0),
('drunkardscreeching', NULL, NULL, NULL, 'natasha12@yahoo.com', 'f56d3fe603775b4acf03b2a87437bfe1', '2021-11-06', 0),
('economicstriumph', NULL, NULL, NULL, 'donato.mayer86@yahoo.com', '98217d30b464ab095ac6c230fa1b06a1', '2021-11-06', 0),
('explorepay', NULL, NULL, NULL, 'keenan_collier@gmail.com', '14d4bea6b33c7bb80bb42c161633c85e', '2021-11-06', 0),
('eyeballsresonant', NULL, NULL, NULL, 'deshawn.rippin23@hotmail.com', 'c98de65a904777d4ef892593bb34d8eb', '2021-11-06', 0),
('forestperiod', NULL, NULL, NULL, 'alfonzo_price81@hotmail.com', '5d1003da0a7625e110b82bbb7db82148', '2021-11-06', 0),
('fussytarget', NULL, NULL, NULL, 'eddie79@yahoo.com', '64fdd9f13e021d1f5a07e9162933624e', '2021-11-06', 0),
('grandwhiteness', NULL, NULL, NULL, 'ward9@yahoo.com', '4d72bac0c7c007c23772ed8c907132a5', '2021-11-06', 0),
('greatguard', NULL, NULL, NULL, 'carolina.schultz60@gmail.com', '1b2a93af085b2ea6cf6a437f55ef510b', '2021-11-06', 0),
('guardsmangently', NULL, NULL, NULL, 'brennan63@yahoo.com', '4ec2dee1dccd30e9715451a74c11c47f', '2021-11-06', 0),
('habitcocktail', NULL, NULL, NULL, 'serena_leffler@gmail.com', '9a126c56bf636e1e2c43b475c1f3586b', '2021-11-06', 0),
('heardoptimistic', NULL, NULL, NULL, 'waldo95@hotmail.com', '8a2ed788e464bd2fb38c5ea80878c3d0', '2021-11-06', 0),
('heoyeuhac@gmail.com', ' PHẠM THỊ NGỌC', '', '', 'heoyeuhac@gmail.com', '', '2021-11-13', 0),
('holygarden', NULL, NULL, NULL, 'dan_balistreri@hotmail.com', '06339ba785761735001aee34a9e3f2fc', '2021-11-06', 0),
('hugappraiser', NULL, NULL, NULL, 'alexane.jacobs38@hotmail.com', '2c47cc6b02052a1dd12391ae394d63ef', '2021-11-06', 0),
('hypothesispattern', NULL, NULL, NULL, 'jeramie_huel@yahoo.com', '8ac0fabdcfded318b2aa04ab49ccc4fb', '2021-11-06', 0),
('kentishdamage', NULL, NULL, NULL, 'daphne_schimmel@yahoo.com', '755b7b8c0a072a8a2eea55377de7e396', '2021-11-06', 0),
('khachhang', 'LÊ THỊ HẰNG', 'SEN THỦY', '0903439812', 'lql@gmail.com', '4297f44b13955235245b2497399d7a93', '2021-11-07', 0),
('lelong12102k2@gmail.com', 'LE QUANG LONG', '', '', 'lelong12102k2@gmail.com', '', '2021-11-13', 0),
('lequanglong12102k2@gmail.com', 'LONG LE', '', '', 'lequanglong12102k2@gmail.com', '', '2021-11-13', 0),
('longtermplayoffs', 'PHẠM THỊ HẰNG', 'QUANG BINH', '0904349823', 'buck.kerluke@gmail.com', '8c09ef24b73d69f5ef32f64cd6868f33', '2021-11-06', 0),
('lql', 'Admin Con Chó :>', 'sen thuy quang binh', '09942134', 'test123@gmail.com', '6f575fbe74c6d5f367a8aa4b398cc7da', '2021-11-06', 1),
('lqlong.20it1@vku.udn.vn', 'LE QUANG LONG IT', '', '', 'lqlong.20it1@vku.udn.vn', '', '2021-11-13', 0),
('modedue', NULL, NULL, NULL, 'eileen.stehr@hotmail.com', '6232a249c838d1d2e33e50edc51557eb', '2021-11-06', 0),
('motorwayscold', NULL, NULL, NULL, 'mariah77@gmail.com', 'cddf86a9055a2e2168733a07ef284cb6', '2021-11-06', 0),
('nhanvien', 'nhân viên con vịt', 'SEN -  THỦY', '0921212', 'lql@gmail.com', '6f575fbe74c6d5f367a8aa4b398cc7da', '2021-11-08', 2),
('nhanvien1', NULL, NULL, NULL, 'nhanvien@gmail.com', '6f575fbe74c6d5f367a8aa4b398cc7da', '2021-11-09', 2),
('nhanvien2', NULL, NULL, NULL, 'nhanvien2@gmail.com', '6f575fbe74c6d5f367a8aa4b398cc7da', '2021-11-16', 2),
('obeysamoan', NULL, NULL, NULL, 'billy.labadie51@hotmail.com', '0169ad0e211c01528d9384235bc255a3', '2021-11-06', 0),
('procedureraise', NULL, NULL, NULL, 'brennan.heathcote@yahoo.com', 'cb936b342fcf543799254520b9d13515', '2021-11-06', 0),
('repelreprimand', NULL, NULL, NULL, 'leola_crooks93@hotmail.com', '76b30526c3489faf93241895c44a45c7', '2021-11-06', 0),
('seedslaboratory', NULL, NULL, NULL, 'chloe.abernathy38@hotmail.com', 'daaa77b0b6ce16e7f954184dd1e2efb4', '2021-11-06', 0),
('servantguideline', NULL, NULL, NULL, 'ludie43@hotmail.com', '09a52241d85074f867c5623d1c8b1de7', '2021-11-06', 0),
('skiingstake', NULL, NULL, NULL, 'kimberly30@yahoo.com', '018f73cacecce78c4fddbddc14c9b266', '2021-11-06', 0),
('skitonto', NULL, NULL, NULL, 'estel.stracke@gmail.com', '531f7c8dd1df31fdc64e4a32422b3510', '2021-11-06', 0),
('skiverheavenly', NULL, NULL, NULL, 'daphne_hamill94@yahoo.com', 'f778987ad999b81ff931362301662119', '2021-11-06', 0),
('sniffpentathlon', NULL, NULL, NULL, 'josh_hartmann40@yahoo.com', '5b0cbf4ca9d22505836df5c19d2bfe02', '2021-11-06', 0),
('spoonbillhaircut', NULL, NULL, NULL, 'sarai_stanton35@yahoo.com', '32cce78caa6d507eace80d7feb4bb361', '2021-11-06', 0),
('stipulaterowdy', NULL, NULL, NULL, 'marisol.breitenberg@yahoo.com', '2bc6b16f72e6279084c9a28917e84cec', '2021-11-06', 0),
('surfingincreasing', NULL, NULL, NULL, 'marco_goyette@gmail.com', '15bb356fd669aa642294e65c7ab9bead', '2021-11-06', 0),
('troupewinged', NULL, NULL, NULL, 'katarina_kiehn@yahoo.com', '936dee9afed931d02f4e39dcbe10b0c9', '2021-11-06', 0),
('worrymost', NULL, NULL, NULL, 'kris_sanford89@yahoo.com', '62d532152864c3331a2da336056a7310', '2021-11-06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phanhoidanhgia`
--

CREATE TABLE `phanhoidanhgia` (
  `maphanhoi` int(11) NOT NULL,
  `manhanxet` int(11) NOT NULL,
  `tenphanhoi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidungphanhoi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayphanhoi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatien` decimal(12,2) NOT NULL,
  `loaisanpham` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motasanpham` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkduongdananh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hangsx` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dunglamslider` int(2) NOT NULL,
  `soluongsp` int(30) NOT NULL,
  `ngaynhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `giatien`, `loaisanpham`, `motasanpham`, `linkduongdananh`, `hangsx`, `dunglamslider`, `soluongsp`, `ngaynhap`) VALUES
(1, 'Khóa cửa thông minh August Wifi Smart Lock, kết nối Wifi, khoá & mở từ xa 123', '5850000.00', 'khoacuathongminh', 'Bộ sản phẩm bao gồm Ổ khóa thông minh August Smart Lock thế hệ 3 mới nhất và Hub trung tâm Connect Kết nối Bluetooth với điện thoại, tự động mở khi về và khoá cửa khi rời khỏi nhà. August Connect giúp mở cửa và phân quyền cho người khác từ xa. Phù hợp nhất cho nhà thuê Airbnb. Dễ dàng lắp đặt trên tất cả loại cửa: cửa gỗ, cửa nhôm, cửa sắt… Điều khiển bằng giọng nói với trợ lý Google hoặc Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2020/05/August-Wifi-Smart-Lock.png', 'August', 1, 99, '2021-11-16'),
(2, 'Công tắc cửa cuốn thông minh Tuya, điều khiển từ xa qua điện thoại', '490000.00', 'khoacuathongminh', 'Sử dụng để thay thế công tắc âm tường hiện tại, hoặc lắp thêm song song Biến cửa cuốn thông thường trở nên thông minh, điều khiển đóng, mở từ xa qua điện thoại Tương thích với 99% các loại cửa cuốn ở Việt Nam, không ảnh hưởng tới những tính năng sẵn có Lên lịch tự động đóng mở, chia sẻ phân quyền cho người khác từ xa Ra lệnh bằng giọng nói với trợ lý Google, Amazon Alexa Tương thích với các sản phẩm khác trong hệ sinh thái Tuya Có hướng dẫn lắp đặt chi tiết bằng tiếng Việt đi kèm', 'https://gucongnghe.com/wp-content/uploads/2021/03/Cong-tac-cua-cuon-Tuya-3-new-247x296.jpg', 'Tuya', 0, 71, '2021-10-01'),
(3, 'Điều khiển cửa cuốn thông minh Sonoff – Đóng mở từ xa, ra lệnh giọng nói, lên lịch tự động', '950000.00', 'khoacuathongminh', 'Đóng mở cửa cuốn từ xa thông qua mạng Internet. Hoạt động độc lập không cần hub trung tâm, kết nối trực tiếp với mạng Wifi. Lên lịch hẹn giờ đóng, mở cửa tự động. Chia sẻ quyền quản lý, không giới hạn số lượng. Có lưu lịch sử đóng mở. Lắp đặt dễ dàng trong vòng 30 phút, không cần khoan đục. Tương thích với mọi loại cửa cuốn trên thị trường. Ra lệnh bằng giọng nói với trợ lý Google, Amazon Alexa. Hỗ trợ IFTTT.', 'https://gucongnghe.com/wp-content/uploads/2019/07/Dieu-khien-cua-cuon-Sonoff-247x296.jpg', 'snoff', 0, 100, '2021-10-01'),
(4, 'Khóa cửa thông minh August Smart Lock + Connect, kết nối wifi, khóa & mở từ xa a a a', '3250000.00', 'khoacuathongminh', 'Bộ sản phẩm bao gồm Ổ khóa thông minh August Smart Lock thế hệ 3 mới nhất và Hub trung tâm Connect Kết nối Bluetooth với điện thoại, tự động mở khi về và khoá cửa khi rời khỏi nhà. August Connect giúp mở cửa và phân quyền cho người khác từ xa. Phù hợp nhất cho nhà thuê Airbnb. Dễ dàng lắp đặt trên tất cả loại cửa: cửa gỗ, cửa nhôm, cửa sắt… Điều khiển bằng giọng nói với trợ lý Google hoặc Amazon Alexa.', 'https://gucongnghe.com/wp-content/uploads/2020/06/August-Smart-Lock-va-hub-trung-tam-247x296.jpg', 'August', 0, 99, '2021-11-14'),
(5, 'eufy Smart Lock Touch with Wifi Bridge – Khóa cửa vân tay, chống nước IP65', '5990000.00', 'khoacuathongminh', 'Khóa cửa thông minh eufy Smart Lock Touch – cảm biến vân tay siêu nhạy, mở khóa trong 0.3 giây Tự động khóa khi phát hiện cửa đang đóng Ứng dụng quản lý giao diện Tiếng Việt Đạt chứng nhận BHMA, bền bỉ với tuổi thọ lên tới 70 năm Có 5 cách mở khóa: Nhận diện vây tay, nhập mật mã, mở bằng chìa thông thường, sử dụng app Eufy Security và mở khóa bằng giọng nói Thiết bị có thể hoạt động trong thời tiết khắc nghiệt với chống nước IP65 Tích hợp cảm biến đóng/mở, chốt khóa điện tử kết nối Bluetooth Điều khiển từ xa với Wifi Bridge', 'https://gucongnghe.com/wp-content/uploads/2020/08/eufy-smart-lock-touch-with-bridge-1-247x296.jpg', 'eufy ', 0, 99, '2021-10-01'),
(6, 'Khóa cửa thông minh Wyze Lock, tự động khóa – mở cửa từ xa', '2690000.00', 'khoacuathongminh', 'Khóa cửa thông minh Wyze Lock, kết nối WiFi, Bluetooth và Zigbee Sử dụng 4 viên pin tiểu AA cho thời gian sử dụng 5 – 6 tháng Khóa và mở khóa từ xa qua ứng dụng Wyze Tự động mở khóa khi bạn đến gần. Tự động khóa khi cửa được đóng. Dễ dàng lắp đặt trong vòng 15 phút Chia sẻ quyền sử dụng khóa với người khác từ xa Ra lệnh bằng giọng nói với Amazon Alexa, Google Assistant sẽ sớm được hỗ trợ', 'https://gucongnghe.com/wp-content/uploads/2020/05/khoa-thong-minh-Wyze-Lock-247x296.jpg', 'Wyze Lock', 0, 98, '2021-10-01'),
(7, 'Khóa cửa thông minh August Smart Lock Pro + Connect, kết nối Wifi, khóa & mở từ xa', '4250000.00', 'khoacuathongminh', 'Bộ sản phẩm bao gồm Ổ khóa thông minh August Smart Lock Pro và Hub trung tâm Connect, thế hệ thứ 3 mới nhất. Kết nối Bluetooth với điện thoại, tự động mở khi về và khoá cửa khi rời khỏi nhà. August Connect giúp mở cửa và phân quyền cho người khác từ xa. Phù hợp nhất cho nhà thuê Airbnb. Dễ dàng lắp đặt trên tất cả loại cửa: cửa gỗ, cửa nhôm, cửa sắt… Điều khiển bằng giọng nói với trợ lý Google hoặc Amazon Alexa. Hỗ trợ Samsung SmartThings. Tương thích Apple HomeKit, mở khoá bằng iPhone, Apple Watch.', 'https://gucongnghe.com/wp-content/uploads/2019/02/Khoa-cua-thong-minh-August-Smart-Lock-Pro-Connect-247x296.jpg', 'August', 0, 99, '2021-10-01'),
(8, 'August Smart Keypad', '1790000.00', 'khoacuathongminh', 'Đóng mở cửa an toàn với mã bảo mật Tạo mã riêng biệt cho mỗi lần mở cửa dễ dàng ngay trên ứng dụng điện thoại Cách mở cửa hoàn hảo cho trẻ em hoặc nhà có khách Mã mở khóa cửa riêng cho mỗi người Khóa cửa nhanh chóng chỉ với một lần nhấn Dùng pin AAA, cài đặt và sử dụng dễ dàng.', 'https://gucongnghe.com/wp-content/uploads/2020/05/August-Smart-Keypad-gioi-thieu-247x296.jpg', 'August', 0, 98, '2021-10-01'),
(9, 'ECOVACS DEEBOT DJ35 robot hút bụi lau nhà', '4000000.00', 'mayhutbui', 'Tiếp nối sự thành công của T8 aivi plus hãng vừa cho ra mắt Ecovacs Deebot T9 aivi. Đây là robot đầu tiên trên thế giới được trang bị thêm tính năng lọc không khí và tỏa hương nước hoa. Hãy cùng Novadigital tìm hiểu về siêu phẩm mới ra mắt này nhé.', 'https://grobot.vn/wp-content/uploads/2019/01/dj35c2-300x457.jpg', 'ECOVACS', 0, 99, '2021-10-01'),
(10, 'Ecovacs Deebot DN320 (OZMO 900) Robot hút bụi lau nhà', '4800000.00', 'mayhutbui', 'Giống như các phiên bản trước Ecovacs Deebot T9 aivi sở hữu một thiết kế hình tròn đặt trưng. Với màu đen sang trọng, tinh tế. Chiều cao 9.3cm giúp robot có khả năng vượt chướng ngại vật lên tới 2cm.', 'https://grobot.vn/wp-content/uploads/2019/01/dn320c-300x457.jpg', 'ECOVACS', 0, 99, '2021-10-01'),
(11, 'ECOVACS DEEBOT DN520 Robot hút bụi', '5700000.00', 'mayhutbui', 'Kế thừa công nghệ điều hướng của các dòng T8, T9 aivi có thể nhận biết những vật cản nhỏ 1mm. Độ nhạy bén cao gấp 10 lần so với phiên bản trước nhờ được trang bị hệ thống True Detect 3D thông minh. Trong quá trình làm sạch Robot T9 AIVI có thể phát hiện ra vật cản, mép tường, …  tự động né tránh và thay đổi đường đi nhờ bộ cảm biến SLAM thông minh.', 'https://grobot.vn/wp-content/uploads/2020/09/dn520c-300x457.jpg', 'ECOVACS', 0, 100, '2021-10-01'),
(12, 'Robot hút bụi  Ecovacs Deebot T8', '8790000.00', 'mayhutbui', 'Ecovacs Robotics đã công bố bổ sung mới nhất cho dòng robot là:Ecovacs Deebot Ozmo T8 AIVI. Thiết bị thông minh này là một trình dọn dẹp trước có tính năng chipset AI và mô-đun máy ảnh. Theo Ecovacs, công nghệ này giúp T8 AIVI lập bản đồ nhà nhanh hơn và chính xác hơn các máy hút bụi khác sử dụng công nghệ điều hướng LDS. Ecovacs tuyên bố rằng điều này cho phép chân không phát hiện tốt hơn các chướng ngại vật trên đường đi của nó và giảm nguy cơ bị kẹt 60% so với các mô hình trước đó.', 'https://grobot.vn/wp-content/uploads/2019/01/t8c-1-300x457.jpg', 'ECOVACS', 1, 94, '2021-10-01'),
(13, 'Robot hút bụi Ecovacs DD35 (Ozmo 600)', '4500000.00', 'mayhutbui', 'Nhà là nơi cuối cùng mà mỗi người trong chúng ta trở về sau một ngày làm việc bận rộn. Với những người có quỹ thời gian hạn hẹp, thay vì mất quá nhiều thời gian dọn dẹp thì giờ đây đã có Ecovacs Deebot DD35 lo. Với tích hợp cả 2 chức năng hút và lau đồng thời Ecovacs Deebot DD35 có khả năng đánh bay mọi bụi bẩn trong tíc tắc, mang lại một bầu không khí mới cho ngôi nhà bạn.', 'https://grobot.vn/wp-content/uploads/2019/01/dd35c-300x457.jpg', 'ECOVACS', 0, 99, '2021-10-01'),
(14, 'Robot hút bụi Ecovacs Deebot Dn33 (Ozmo 900)', '6000000.00', 'mayhutbui', 'Hiện nay trên thị trường có rất nhiều sản phẩm robot hút bụi thông minh, một trong số đó không thể không nhắc tới Ecovacs Deebot Dn33  ( tên quốc tế là Ecovacs Deebot 900) đến từ thương hiệu công nghệ toàn cầu Ecovacs Robotics – nằm trong top 3 thương hiệu robot hút bụi lau nhà lớn nhất của thị trường Trung Quốc. Deebot DE55 mới ra mắt vào năm 2018, thiết bị sở hữu công nghệ thông minh của Mỹ và được lắp ráp tại Trung Quốc. ', 'https://grobot.vn/wp-content/uploads/2019/01/dn33c1-300x457.jpg', 'ECOVACS', 0, 99, '2021-10-01'),
(15, 'Robot hút bụi Ecovacs Deebot Dn55', '6500000.00', 'mayhutbui', 'Công việc dọn nhà hàng ngày tiêu tốn không chỉ thời gian mà công sức mệt nhọc của bạn. Với Robot hút bụi lau nhà thì nỗi lo không còn nữa bởi tất cả hoàn toàn tự động. Khả năng thông minh và hiệu quả làm sạch vượt trội đem lại của Robot luôn đuợc đánh giá cao hơn so với phương pháp dọn nhà thủ công. Bạn thảnh thơi mà nhà cửa vẫn sạch sẽ tinh tươm. Với Robot hút bụi lau nhà Ecovacs Deebot DN55 thời gian cho công việc dọn dẹp nhà cửa sẽ được giải phóng. Bạn có nhiều thời gian cho con cái, gia đình cũng như công việc kiếm tiền. Với mức đầu tư không quá lớn nhưng hiệu quả đem lại có thể tiết kiệm không chỉ thời gian mà còn là tiền bạc của bạn.', 'https://grobot.vn/wp-content/uploads/2020/09/dn55c-300x457.jpg', 'ECOVACS', 0, 99, '2021-10-01'),
(16, 'Robot hút bụi Ecovacs Deebot T5 Hero (Ozmo 950)', '7300000.00', 'mayhutbui', 'Nhắc đến robot hút bụi lau nhà không thể không nhắc đến robot hút bụi lau nhà Ecovacs Deebot thuộc sở hữu của Ecovacs Robotics. Thật không quá khi nói robot lau nhà Ecovacs Deebot là tối ưu nhất và hoàn thiện nhất trong tất cả những dòng robot hút bụi lau nhà trên thị trường hiện nay. Và Robot hút bụi lau nhà Ecovacs Deebot T5 HERO (DX96) hội tụ đầy đủ các tính năng ưu việt đó.', 'https://grobot.vn/wp-content/uploads/2019/01/t5c-300x457.jpg', 'ECOVACS', 0, 99, '2021-10-01'),
(23, 'BroadLink RM4 Pro – Trung tâm điều khiển hồng ngoại, vô tuyến thông minh', '660000.00', 'dieuhoathongminh', 'BroadLink RM4 Pro là thiết bị trung tâm điều khiển đa năng mới nhất của BroadLink, sử dụng thay thế cho remote của hàng ngàn thiết bị điện gia dụng trong nhà như TV, điều hòa, quạt, rèm cửa…; hỗ trợ cả sóng hồng ngoại (IR) và vô tuyến (RF).  Điều khiển bẳng giọng nói với trợ lý Google Assisstant, Alexa. Hỗ trợ IFTTT, đặc biệt BroadLink RM4 Pro còn có thể kết hợp cùng cảm biến nhiệt độ BroadLink HTS2 để tạo ngữ cảnh thông minh, tiết kiệm điện năng.', 'https://gucongnghe.com/wp-content/uploads/2020/04/Broadlink-RM4-Pro-247x296.png', 'BroadLink', 0, 100, '2021-10-01'),
(24, 'BroadLink RM4 Mini – Trung tâm điều khiển hồng ngoại mới nhất 2020', '310000.00', 'dieuhoathongminh', 'BroadLink RM4 Mini – Trung tâm điều khiển hồng ngoại nhỏ nhưng có võ. Là phiên bản rút gọn với kích thước nhỏ, RM4 Mini hỗ trợ điều khiển các thiết bị điện gia dụng trong nhà như TV, điều hòa, quạt máy từ xa thông qua điện thoại hoặc lệnh giọng nói cùng trợ lý ảo.  Kết nối Wifi, điều khiển các thiết bị hồng ngoại từ xa thông qua điện thoại Tương thích với hầu hết các thiết bị: máy lạnh, TV, IPTV, quạt, âm thanh, DVD… Hỗ trợ học lệnh từ remote gốc Nhỏ gọn, tiết kiệm chi phí Điều khiển giọng nói với trợ lý Google Assistant, Amazon Alexa Kết hợp với BroadLink HTS2 thêm tính năng cảm biến nhiệt độ, độ ẩm.', 'https://gucongnghe.com/wp-content/uploads/2020/04/broadlink-RM4-mini-247x296.png', 'BroadLink', 0, 99, '2021-10-01'),
(25, 'Trung tâm điều khiển hồng ngoại Tuya S06 Wifi IR Remote Control', '170000.00', 'dieuhoathongminh', 'Thiết bị điều khiển hồng ngoại Tuya S06 điều khiển tất cả các thiết bị sử dụng remote IR như TV, TV box, DVD, điều hòa, quạt… Kết nối trực tiếp Wifi, điều khiển các thiết bị trong nhà từ xa thông qua ứng dụng Smart Life trên điện thoại. Hỗ trợ học lệnh từ remote gốc. Hỗ trợ Google Assistant, Amazon Alexa, IFTTT. Kết hợp với Google Nest Mini ra lệnh điều khiển thiết bị bằng giọng nói.', 'https://gucongnghe.com/wp-content/uploads/2019/08/Thiet-bi-trung-tam-hong-ngoai-Tuya-S06-247x296.jpg', 'Tuya', 0, 99, '2021-10-01'),
(26, 'Sensibo Sky – Điều khiển điều hoà thông minh, phản hồi trạng thái 2 chiều', '2490000.00', 'dieuhoathongminh', 'Điều khiển điều hoà thông minh Sensibo Sky, gen 2 mới nhất Tương thích với các loại điều hòa treo tường, điều hòa âm trần, điều hòa tổng sử dụng remote Phản hồi 2 chiều, biết được trạng thái hiện tại của điều hòa, ngay cả khi dùng điều khiển ngoài Tích hợp cảm biến nhiệt độ, độ ẩm tạo ngữ cảnh tự động hóa Lên lịch bật, tắt theo thời gian hoặc khi bạn rời đi/trước khi trở về nhà Hỗ trợ Google Assistant, Amazon Alexa, Siri shortcuts, IFTTT, Samsung SmartThings Điều khiển trực tiếp trên ứng dụng Google Home hoặc Smartphone từ mọi nơi', 'https://gucongnghe.com/wp-content/uploads/2019/09/Sensibo-Sky-247x296.jpg', 'Sensibo ', 1, 99, '2021-10-01'),
(27, 'Google Nest Thermostat E, điều khiển điều hòa âm trần thông minh', '3990000.00', 'dieuhoathongminh', 'Google Nest Thermostat E, điều khiển điều hòa thông minh, tiết kiệm năng lượng. Điều khiển điều hòa âm trần, điều hòa tổng từ xa thông qua ứng dụng Nest. Tự học thói quen điều chỉnh nhiệt độ từ người dùng. Ngữ cảnh thông minh, bật điều hòa khi bạn trở về, tắt khi ra khỏi nhà. 6 dây kết nối, tương thích tới 85% hệ thống điều hòa 24V. Hỗ trợ điều khiển bằng giọng nói với Google Assistant trên loa Google Home Mini. Tương thích cả Amazon Alexa.', 'https://gucongnghe.com/wp-content/uploads/2019/09/Google-Nest-Thermostat-E-247x296.jpg', 'Google', 0, 99, '2021-10-01'),
(28, 'Sensibo Air – Điều khiển điều hòa thông minh, hỗ trợ Apple HomeKit', '2990000.00', 'dieuhoathongminh', 'Tương thích với các loại điều hòa treo tường, điều hòa âm trần, điều hòa tổng sử dụng remote Phản hồi 2 chiều, cảm biến nhiệt độ và độ ẩm thông minh Điều khiển bật/tắt từ xa, hẹn giờ lên tới 7 ngày Cài đặt dễ dàng, quản lý qua ứng dụng trên thiết bị di động Hỗ trợ Google Assistant, Amazon Alexa, Apple HomeKit, SmartThings, IFTTT, API', 'https://gucongnghe.com/wp-content/uploads/2021/08/Sensibo-Air-2-01-1-247x296.jpg', 'Sensibo', 0, 99, '2021-10-01'),
(29, 'Tado° Smart AC Control V3+, điều khiển điều hòa thông minh, hỗ trợ HomeKit', '2790000.00', 'dieuhoathongminh', 'Điều khiển điều hoà bằng ứng dụng trên điện thoại với đèn led hiển thị trực quan, sang trọng Có thể điều khiển trực tiếp trên thiết bị Tạo ngữ cảnh thông minh, tự động hóa điều hòa với cảm biến nhiệt độ, độ ẩm tích hợp Hỗ trợ Apple HomeKit, Google Assistant, Amazon Alexa Kết nối Wifi 802.11 b/g/n, 2.4 GHz', 'https://gucongnghe.com/wp-content/uploads/2021/06/tado-smart-ac-control-v3-1-247x296.jpg', 'Tado', 0, 99, '2021-10-01'),
(30, 'BroadLink BestCon RM4C Mini, Thiết bị điều khiển hồng ngoại thông minh', '210000.00', 'dieuhoathongminh', 'BroadLink BestCon RM4C mini là thiết bị trung tâm điều khiển hồng ngoại đời mới nhất, thay hàng loạt remote hồng ngoại thông thường; giúp điều khiển các thiết bị nhanh chóng thông qua ứng dụng điện thoại hoặc ra lệnh giọng nói với các trợ lý ảo.  Phiên bản giá rẻ, do BestCon (công ty con của BroadLink) sản xuất Kết nối Wifi, điều khiển các thiết bị hồng ngoại từ xa thông qua điện thoại Tương thích với hầu hết các thiết bị: máy lạnh, TV, IPTV, quạt, âm thanh, DVD… Hỗ trợ học lệnh từ remote gốc Nhỏ gọn, tiết kiệm chi phí Điều khiển giọng nói với trợ lý Google Assistant, Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2020/04/broadlink-bestcon-RM4C-mini-247x296.jpg', 'BroadLink', 0, 97, '2021-10-01'),
(31, 'Đèn LED dây RGB Tuya, dài 5m, 16 triệu màu', '490000.00', 'denthongminh', 'Chiều dài dây 5m, mở rộng được tới 10m Điều khiển đèn từ xa, lên lịch tắt bật, điều chỉnh sáng, tối và thay đổi màu sắc Ứng dụng trong đèn trang trí, đèn hắt trần, sofa, kệ TV.. Tự động điều chỉnh ánh sáng theo nhạc qua ứng dụng hoặc micro tích hợp (trong bộ kèm Remote) Điều khiển giọng nói với Google Assistant, Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2020/09/Led-day-16-trieu-mau-RGB-Tuya-247x296.jpg', 'Tuya', 0, 99, '2021-10-01'),
(32, 'Philips Hue GU10 White and Color Ambiance, đèn downlight âm trần 16 triệu màu', '1590000.00', 'denthongminh', 'Kết hợp với chóa đèn GU10 để dùng làm đèn downlight âm trần, chiếu điểm, spotlight Mặt bóng thiết kế đặc biệt chống chói, chống lóa khi nhìn chéo Ánh sáng 16 triệu màu, có thể thay đổi màu sắc, cường độ chiếu sáng Công suất 5.7W tương đương bóng 50W thường, cường độ ánh sáng 350 lumen, nhiệt độ màu 2,000 – 6,500 Kelvin Điều khiển từ xa, lên lịch tắt/bật. Hỗ trợ điều khiển bằng giọng nói với Amazon Alexa và Google Assistant hoặc Apple HomeKit (khi kết nối với Hue Bridge) Đồng bộ ánh sáng theo nhạc với Spotify Giao thức kết nối Bluetooth và Zigbee Chiếu sáng tự động theo hình ảnh trên TV với Philips Hue Play HDMI Sync Box', 'https://gucongnghe.com/wp-content/uploads/2020/09/Philips-Hue-GU10-Color-1-Pack-247x296.jpg', 'Philips', 0, 99, '2021-10-01'),
(33, 'Thiết bị điều khiển trung tâm Philips Hue Bridge', '1350000.00', 'denthongminh', 'Thiết bị điều khiển trung tâm Philips Hue Bridge. Trái tim của hệ thống Philips Hue, quản lý toàn bộ bóng thông qua ứng dụng Philips Hue từ xa. Tích hợp điều khiển thông qua sóng Zigbee cho tốc đổ xử lý/phản hồi nhanh chóng – ổn định. Điều khiển lên đến 50 bóng đèn thông qua trợ lý ảo Siri, Alexa, Google. Phạm vi hoạt động tối đa 30m.', 'https://gucongnghe.com/wp-content/uploads/2018/12/Philips-Hue-Hub-247x296.jpg', 'Philips', 0, 99, '2021-10-01'),
(34, 'Đèn LED dây 16 triệu màu Philips Hue Lightstrip Plus – Base KIT', '1990000.00', 'denthongminh', 'Đèn LED dây Philips Hue Lightstrip Plus 16 triệu màu, dài 2m, mở rộng tối đa 10m dễ dàng với dây Extension. Phiên bản mới nhất 2020 v4 hỗ trợ thêm kết nối Bluetooth Điều khiển bằng giọng nói (yêu cầu phải có Philips Hue Bridge). Lắp đặt đơn giản dưới gầm quầy bar, gầm tủ, giường, ghế sofa với băng dính 2 mặt đi kèm. Không giới hạn tính năng với 16 triệu màu và các sắc thái ánh sáng khác nhau. Điều khiển không dây từ xa bằng điện thoại thông qua ứng dụng Philips Hue. Đồng bộ ánh sáng theo nhạc với Spotify Tương thích Alexa, Apple HomeKit, hoặc Google Assistant… Chiếu sáng tự động theo hình ảnh trên TV với Philips Hue Play HDMI Sync Box.', 'https://gucongnghe.com/wp-content/uploads/2018/11/Philips-Hue-Lightstrip-Plus-Base-1-247x296.jpg', 'Philips', 0, 99, '2021-10-01'),
(35, 'Đèn thông minh Philips Hue Play Light Bar, 16 triệu màu, hỗ trợ Alexa & Google Assistant', '3690000.00', 'denthongminh', 'Đèn thông minh Philips Hue Play Light Bar 16 triệu màu sắc. Điều khiển bằng giọng nói sử dụng Amazon Alexa, Apple HomeKit, hoặc Google Assistant (cần phải có Philips Hue Hub). Đồng bộ ánh sáng theo nhạc với Spotify Lắp đặt dễ dàng, treo đứng hoặc nằm ngang với giá đỡ và băng dính 2 mặt đi kèm. Trải nghiệm giải trí ánh sáng hoàn hảo khi kết hợp 2 pack đặt phía sau hoặc 2 bên TV. Đồng bộ ánh sáng theo màn hình TV với Philips Hue Play HDMI Sync Box. Sản xuất tại Poland (Ba Lan), chất lượng Châu Âu', 'https://gucongnghe.com/wp-content/uploads/2019/05/Den-Philips-Hue-Play-Bar-2-Pack-247x296.jpg', 'Philips', 0, 99, '2021-10-01'),
(36, 'Bóng đèn màu thông minh Philips Hue White and Color Ambiance', '1350000.00', 'denthongminh', 'Bóng đèn Philips Hue White and Color Ambiance 16 triệu màu, 50.000 sắc thái, kết nối Bluetooth hoặc ZigBee. Công suất 9W, cường độ ánh sáng 800 lumens, nhiệt độ màu 2000K – 6500K Điều khiển bóng đèn từ xa, lên lịch tắt bật, tạo ngữ cảnh, điều chỉnh sáng, tối Thời gian hoạt động 25,000 giờ Điều khiển giọng nói với Alexa, Google Assistant, HomeKit Support Đồng bộ ánh sáng theo nhạc với Spotify Giao thức kết nối ZigBee, SmartThings Chiếu sáng tự động theo hình ảnh trên TV với Philips Hue Play HDMI Sync Box', 'https://gucongnghe.com/wp-content/uploads/2018/10/Den-mau-Philips-Hue-White-and-Color-Ambiance-247x296.jpg', 'Philips', 0, 99, '2021-10-01'),
(37, 'Xiaomi Yeelight Lightstrip 1S – Đèn LED dây thông minh 16 triệu màu, dài 2m', '790000.00', 'denthongminh', 'Được thiết kế linh hoạt, phù hợp với mọi không gian Tương thích Apple HomeKit, Google Assistant, Amazon Alexa, Samsung SmartThings Đồng bộ ánh sáng theo nhịp điệu bài hát Cài đặt dễ dàng, có thể mở rộng độ dài tốt đa 10m với Yeelight Lightstrip Extension Kết nối không dây: Wi-Fi 802.11 b/g/n 2.4GHz', 'https://gucongnghe.com/wp-content/uploads/2020/10/Xiaomi-Yeelight-Lightstrip-2m-1-247x296.png', 'Xiaomi', 0, 99, '2021-10-01'),
(38, 'Xiaomi Yeelight Lightstrips Plus Extension – Đèn LED dây mở rộng, dài 1m', '220000.00', 'denthongminh', 'Sử dụng công nghệ tiên tiến, mang lại không gian đa sắc màu với 16 triệu màu sắc Được thiết kế linh hoạt, phù hợp với mọi vị trí Tương thích với Amazon Alexa, Google Assistant, Apple HomeKit và Samsung SmartThings Đồng bộ ánh sáng theo nhịp điệu bài hát Kết nối không dây: Wi-Fi IEEE 802.11 b/g/n 2.4GHz', 'https://gucongnghe.com/wp-content/uploads/2020/10/Yeelight-Aurora-Lightstrips-Plus-Extension-1-247x296.jpg', 'Xiaomi', 0, 99, '2021-10-01'),
(39, 'Philips Hue Centura, đèn downlight âm trần cao cấp 16 triệu màu', '1990000.00', 'denthongminh', 'Thiết kế dạng Spotlight điều chỉnh được góc chiếu sáng Mặt bóng thiết kế đặc biệt chống chói, chống lóa khi nhìn chéo Sử dụng đèn Philips Hue GU10 White and Color Ambiance công suất 5.7W, cường độ ánh sáng 350 lumens, nhiệt độ màu 2000 – 6500K Đồng bộ ánh sáng theo nhạc với Spotify Điều khiển bóng đèn từ xa, lên lịch tắt bật, tạo ngữ cảnh, điều chỉnh sáng, tối Điều khiển giọng nói với Amazon Alexa, Google Assistant, Apple HomeKit (khi kết nối với Hue Bridge) Đồng bộ ánh sáng với hình ảnh trên TV khi sử dụng Philips Hue Play HDMI Sync Box Giao thức kết nối Bluetooth và Zigbee Sản xuất tại Poland (Ba Lan), chất lượng Châu Âu', 'https://gucongnghe.com/wp-content/uploads/2020/09/Den-downlight-Philips-Hue-Centura-247x296.jpg', 'Philips', 0, 99, '2021-10-01'),
(40, 'Đèn LED âm trần Downlight thông minh Rạng Đông, kết nối Wifi, hỗ trợ Google Home, Amazon Alexa', '330000.00', 'denthongminh', 'Đèn LED âm trần Downlight thông minh Rạng Đông kết nối Wifi, hỗ trợ Tuya Đèn 90/7W có công suất 7W, quang thông 500 lm – 520 lm, nhiệt độ màu 3000K – 6500K, đường kính lỗ khoét trần: 90mm Đèn 110/9W có công suất 9W, quang thông 700 lm – 720 lm, nhiệt độ màu 3000K – 6500K, đường kính lỗ khoét trần: 110mm Điều khiển bóng đèn từ xa, lên lịch tắt bật, điều chỉnh sáng, tối, điều khiển theo kịch bản Chip LED Samsung chất lượng cao, CRI > 80 Điều khiển giọng nói với Google Assistant, Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2019/10/Den-LED-am-tran-Downlight-thong-minh-Rang-Dong-247x296.jpg', 'Rạng Đông', 0, 99, '2021-10-01'),
(41, 'Bóng đèn thông minh Philips Hue White, hỗ trợ Google Home, Alexa', '250000.00', 'denthongminh', 'Bóng đèn Philips Hue White ánh sáng vàng có thể tăng giảm sáng, tối Kết hợp remote dimmer thích hợp làm đèn phòng ngủ Công suất 9.5W, cường độ ánh sáng 800 lumens, nhiệt độ màu 2700K (Warm White) Điều khiển bóng đèn từ xa, lên lịch tắt bật, tạo ngữ cảnh Đồng bộ ánh sáng theo nhạc với Spotify Thời gian hoạt động 25,000 giờ Điều khiển giọng nói với Alexa, Google Assistant, HomeKit Support Giao thức kết nối ZigBee, SmartThings', 'https://gucongnghe.com/wp-content/uploads/2018/07/Bong-den-thong-minh-Philips-Hue-White-1-247x296.jpg', 'Philips', 0, 99, '2021-10-01'),
(42, 'Yeelight LED Color Bulb 1S, hỗ trợ HomeKit, 16 triệu màu', '450000.00', 'denthongminh', 'Màu sắc của đèn có thể thay đổi – 16 triệu màu, nhiệt độ màu trải dài từ 1700K – 6500K Điều khiển từ xa thông qua điện thoại thông minh Tương thích Apple HomeKit, Google Assistant, Amazon Alexa, Samsung SmartThings Phát sáng theo nhạc, điều khiển qua Wifi 2.4 Ghz Đuôi bóng chuẩn E27 phổ biến tại Việt Nam Tiêu thụ điện năng thấp, 800 lumen quang thông chỉ với 8.5W, lên đến 25,000 giờ.', 'https://gucongnghe.com/wp-content/uploads/2020/10/Yeelight-LED-Color-Bulb-1S-247x296.jpg', 'Yeelight', 0, 99, '2021-10-01'),
(43, 'Bộ 3 đèn cảm ứng eufy Lumi Stick-On, dùng pin, chiếu sáng 365 ngày', '390000.00', 'denthongminh', 'Dùng 3 viên pin AAA, chiếu sáng đến 365 ngày Kích thước nhỏ gọn, hoàn toàn không dây. Lắp đặt dễ dàng bằng băng dính 2 mặt hoặc ốc vít có sẵn Tự động bật đèn khi phát hiện có chuyển động trong bóng tối, tắt sau 15s nếu không còn chuyển động Ánh sáng lý tưởng cho những vị trí cần đèn sáng mờ như trong phòng ngủ, tủ quần áo, nhà vệ sinh…', 'https://gucongnghe.com/wp-content/uploads/2020/05/Lumi-Stick-On-Night-Light-247x296.png', 'eufy', 0, 99, '2021-10-01'),
(44, 'Hệ thống đèn màu thông minh Philips Hue Color Starter Kit – 3 Pack', '3850000.00', 'denthongminh', 'Bộ Kit gồm 3 bóng đèn màu thông minh Philips Hue White and Color, 1 công tắc Smart Dimmer Switch và 1 thiết bị điều khiển trung tâm Philips Hue Bridge Ánh sáng 16 triệu màu, 50.000 sắc thái Công suất 10W, cường độ ánh sáng 800 lumens, nhiệt độ màu 2000K – 6500K Điều khiển bóng đèn từ xa, lên lịch tắt bật, tạo ngữ cảnh, điều chỉnh sáng, tối Đồng bộ ánh sáng theo nhạc với Spotify Thời gian hoạt động 25,000 giờ Điều khiển giọng nói với trợ lý Google, Amazon Alexa, Apple HomeKit Chiếu sáng tự động theo hình ảnh trên TV với Philips Hue Play HDMI Sync Box', 'https://gucongnghe.com/wp-content/uploads/2019/11/Philips-Hue-Color-Starter-Kit-3-Pack-247x296.jpg', 'Philips', 0, 99, '2021-10-01'),
(45, 'Bóng đèn thông minh GE C-Life, hỗ trợ Google Home', '240000.00', 'denthongminh', 'Bóng đèn thông minh GE C-Life của General Electric, kết nối Bluetooth Cần có loa thông minh hoặc màn hình thông minh của Google để hoạt động, quản lý trên app Google Home Điều khiển bóng đèn từ xa, lên lịch tắt bật, tạo ngữ cảnh, điều chỉnh sáng, tối Hỗ trợ ra lệnh bằng giọng nói với trợ lý Google Công suất 9.5W, cường độ ánh sáng 760 lumens, nhiệt độ màu 2700K (Soft White) Vòng đời lên tới 13.7 năm', 'https://gucongnghe.com/wp-content/uploads/2019/07/Bong-den-thong-minh-GE-C-Life-247x296.jpg', 'GE', 0, 99, '2021-10-01'),
(46, 'Đèn LED dây 16 triệu màu Philips Hue Lightstrip Plus – Extension', '590000.00', 'denthongminh', 'Dây LED nối dài 1m cho Philips Hue Color Lightstrip Plus, nối dài tối đa 10m. Điều khiển bằng giọng nói (yêu cầu phải có Philips Hue Bridge). Lắp đặt đơn giản dưới gầm quầy bar, gầm tủ, giường, ghế sofa với băng dính 2 mặt đi kèm. Không giới hạn tính năng với 16 triệu màu và các sắc thái ánh sáng khác nhau. Điều khiển không dây từ xa bằng điện thoại thông qua ứng dụng Philips Hue. Tương thích Alexa, Apple HomeKit, hoặc Google Assistant… Chiếu sáng tự động theo hình ảnh trên TV với Philips Hue Play HDMI Sync Box.', 'https://gucongnghe.com/wp-content/uploads/2019/08/Philips-Hue-Lightstrip-Plus-Extension-1-247x296.jpg', 'Philips', 0, 99, '2021-10-01'),
(47, 'Philips Hue Play Gradient Lightstrip, đèn LED dây cao cấp đồng bộ màu theo TV', '7150000.00', 'denthongminh', 'Có thể phát cùng lúc 7 màu sắc khác nhau trên cùng một dải đèn Kích thước đa dạng, phù hợp với TV từ 55 – 85 inches Ánh sáng đa dạng với góc phản chiếu 45º Điều khiển không dây từ xa bằng điện thoại thông qua ứng dụng Philips Hue. Đồng bộ ánh sáng theo nhạc với Spotify Tương thích Alexa, Apple HomeKit, hoặc Google Assistant… Cần có Philips Hue Bridge và Philips Hue Play HDMI Sync Box để tự động điều chỉnh theo hình ảnh trên TV hoặc app Sync Desktop đồng bộ theo máy tính.', 'https://gucongnghe.com/wp-content/uploads/2020/12/Philips-Hue-Play-Gradient-Lightstrip-55-247x296.jpg', 'Philips', 0, 99, '2021-10-01'),
(48, 'Điều khiển không dây Philips Hue Smart Dimmer Switch', '490000.00', 'denthongminh', 'Điều khiển bóng đèn Philips Hue từ xa, bật/tắt hoặc thay đổi cường độ chiếu sáng Có thể gắn lên tường Hoạt động như một chiếc điều khiển từ xa Quản lý từ ứng dụng trên điện thoại với Hue Bridge Dễ dàng cài đặt lên lịch với ứng dụng trên điện thoại Pin hoạt động tới 3 năm Có thể kết nối tới 12 điều khiển với Hue Bridge Giao thức ZigBee Hỗ trợ Alexa, Google Assistant, Samsung SmartThings, Apple HomeKit', 'https://gucongnghe.com/wp-content/uploads/2018/09/Philips-Hue-Smart-Dimmer-Switch-247x296.jpg', 'Philips', 0, 99, '2021-10-01'),
(49, 'Philips Hue GU10 Downlight, giải pháp đèn âm trần thông minh', '490000.00', 'denthongminh', 'Giải pháp đèn âm trần thông minh Philips Hue Downlight, sử dụng đèn GU10 với các loại ánh sáng trắng; ánh sáng trắng vàng thay đổi được; hoặc ánh sáng 16 triệu màu Điều khiển từ xa, lên lịch tắt bật, điều chỉnh sáng, tối, điều khiển theo kịch bản Kích thước lỗ khoét: 70 – 80 mm hoặc 90 mm tùy chóa đèn Đồng bộ ánh sáng theo nhạc với Spotify Thời gian hoạt động lên tới 15,000 giờ, số lần bật tắt 50,000 lần Điều khiển bằng giọng nói sử dụng Amazon Alexa, Apple HomeKit, hoặc Google Assistant (cần phải có Philips Hue Hub). Giao thức kết nối Bluetooth và Zigbee', 'https://gucongnghe.com/wp-content/uploads/2020/09/Den-LED-downlight-Philips-Hue-GU10-247x296.jpg', 'Philips', 0, 99, '2021-10-01'),
(50, 'Đèn LED dây nối dài RGB Tuya, dài 5m, 16 triệu màu', '220000.00', 'denthongminh', 'Đèn LED dây nối dài RGB 16 triệu màu thông minh Tuya  Chiều dài dây 5m, mở rộng cho dây đèn LED RGB Tuya Điều khiển đèn từ xa, lên lịch tắt bật, điều chỉnh sáng, tối và thay đổi màu sắc Ứng dụng trong đèn trang trí, đèn hắt trần, sofa, kệ TV.. Chế độ tự động điều chỉnh đèn theo tiếng nhạc Điều khiển giọng nói với Google Assistant, Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2020/10/Tuya-LED-RGB-Extension-1-247x296.jpg', 'Tuya', 0, 99, '2021-10-01'),
(56, 'Blink, camera dùng Pin AA, HD 720P, Lưu Cloud Amazon miễn phí', '2490000.00', 'camera', 'Wyze Cam Outdoor – Camera an ninh ngoài trời, dùng pin tới 6 tháng mỗi lần sạc** Chống nước chuẩn IP65, nói chuyện 2 chiều Thiết kế nhỏ gọn, hoàn toàn không dây, dễ lắp đặt Video chất lượng Full HD 1080p, hình ảnh sắc nét cả ngày lẫn đêm Theo dõi, quan sát ngôi nhà và nhận thông báo trên điện thoại dù ở bất kỳ đâu Hỗ trợ lưu cả trên cloud miễn phí và lưu cục bộ với thẻ microSD Ghi lại video chuyển động vào thẻ nhớ ngay cả khi không có Internet Tương thích Google Home và Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2019/05/Camera-an-ninh-Blink-247x296.jpg', 'Blink', 0, 99, '2021-10-01'),
(57, 'Blink XT2, camera ngoài trời dùng Pin AA, Full HD 1080P, Lưu Cloud Amazon miễn phí', '1230000.00', 'camera', 'Wyze Cam Outdoor – Camera an ninh ngoài trời, dùng pin tới 6 tháng mỗi lần sạc** Chống nước chuẩn IP65, nói chuyện 2 chiều Thiết kế nhỏ gọn, hoàn toàn không dây, dễ lắp đặt Video chất lượng Full HD 1080p, hình ảnh sắc nét cả ngày lẫn đêm Theo dõi, quan sát ngôi nhà và nhận thông báo trên điện thoại dù ở bất kỳ đâu Hỗ trợ lưu cả trên cloud miễn phí và lưu cục bộ với thẻ microSD Ghi lại video chuyển động vào thẻ nhớ ngay cả khi không có Internet Tương thích Google Home và Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2019/09/Blink-XT2-247x296.jpg', 'Blink', 0, 99, '2021-10-01'),
(58, 'Ring Spotlight Cam, Camera không dây dùng pin, nói chuyện 2 chiều, tích hợp đèn LED, chuông báo động', '1700000.00', 'camera', 'Wyze Cam Outdoor – Camera an ninh ngoài trời, dùng pin tới 6 tháng mỗi lần sạc** Chống nước chuẩn IP65, nói chuyện 2 chiều Thiết kế nhỏ gọn, hoàn toàn không dây, dễ lắp đặt Video chất lượng Full HD 1080p, hình ảnh sắc nét cả ngày lẫn đêm Theo dõi, quan sát ngôi nhà và nhận thông báo trên điện thoại dù ở bất kỳ đâu Hỗ trợ lưu cả trên cloud miễn phí và lưu cục bộ với thẻ microSD Ghi lại video chuyển động vào thẻ nhớ ngay cả khi không có Internet Tương thích Google Home và Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2018/11/Ring-Spotlight-Cam-247x296.jpg', 'Ring Spotlight', 0, 99, '2021-10-01'),
(59, 'Ring Floodlight Cam, Camera ngoài trời tích hợp đèn LED siêu sáng, chuông báo động', '2490000.00', 'camera', 'Wyze Cam Outdoor – Camera an ninh ngoài trời, dùng pin tới 6 tháng mỗi lần sạc** Chống nước chuẩn IP65, nói chuyện 2 chiều Thiết kế nhỏ gọn, hoàn toàn không dây, dễ lắp đặt Video chất lượng Full HD 1080p, hình ảnh sắc nét cả ngày lẫn đêm Theo dõi, quan sát ngôi nhà và nhận thông báo trên điện thoại dù ở bất kỳ đâu Hỗ trợ lưu cả trên cloud miễn phí và lưu cục bộ với thẻ microSD Ghi lại video chuyển động vào thẻ nhớ ngay cả khi không có Internet Tương thích Google Home và Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2020/07/Ring-Floodlight-Camera-247x296.jpg', 'Ring Floodlight', 0, 99, '2021-10-01'),
(60, 'Amazon Cloud Cam, camera thông minh Full HD 1080p, hỗ trợ Alexa, lưu Cloud Amazon miễn phí', '3990000.00', 'camera', 'Wyze Cam Outdoor – Camera an ninh ngoài trời, dùng pin tới 6 tháng mỗi lần sạc** Chống nước chuẩn IP65, nói chuyện 2 chiều Thiết kế nhỏ gọn, hoàn toàn không dây, dễ lắp đặt Video chất lượng Full HD 1080p, hình ảnh sắc nét cả ngày lẫn đêm Theo dõi, quan sát ngôi nhà và nhận thông báo trên điện thoại dù ở bất kỳ đâu Hỗ trợ lưu cả trên cloud miễn phí và lưu cục bộ với thẻ microSD Ghi lại video chuyển động vào thẻ nhớ ngay cả khi không có Internet Tương thích Google Home và Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2019/09/Amazon-Cloud-Cam-247x296.jpg', 'Amazon', 0, 99, '2021-10-01'),
(61, 'Camera 2K Eufy Security Camera T84001W1, tích hợp còi báo động\r\n				', '998000.00', 'camera', 'Eufy indoor T8400 2K Tích hợp công nghệ AI tiên tiến AI thông minh có thể nhận diện giữa người và thú cưng, tránh đưa ra các cảnh báo sai, làm phiền công việc của chủ nhà. Bên cạnh đó, nó cũng sẽ tự đánh giá mức độ tiếng ồn phát ra, khi thấy cần thiết nó sẽ thông báo cho bạn ngay.', 'https://product.hstatic.net/200000295422/product/new_0256_t8400--800x800_1200x_32d40ade32c4435aacf27fe3cdb28dc9_grande.jpg', 'eufy ', 0, 99, '2021-10-01'),
(62, 'Camera 360 Xiaomi Mi Home Security 360 2K  - Phân phối chính hãng\r\n				', '1190000.00', 'camera', 'Camera ezviz C6W xoay 360 độ CS-C6W Với diện mạo khác biệt, camera EZVIZ C6W sẽ giúp bạn bảo vệ ngôi nhà theo phong cách hoàn toàn mới: không chỉ chuyên nghiệp và an toàn mà còn thật Kool. Thanh lịch và linh hoạt, camera Wifi C6W là tất cả sự bảo vệ bạn cần cho một ngôi nhà rộng lớn. Camera ghi lại ở độ phân giải 2K và tự động theo dõi chuyển động ở chế độ thu phóng gấp 4 lần để đảm bảo không có gì thoát khỏi tầm mắt.', 'https://product.hstatic.net/200000295422/product/new_0266_camera-thong-minh-xiaomi-ptz-phien-ban-2k_425a0143ea1947768bcf3037b4a91186_grande.jpg', 'Xiaomi', 0, 99, '2021-10-01'),
(63, 'Camera ezviz C6W xoay 360 độ\r\n				', '1349000.00', 'camera', 'Camera ezviz C6W xoay 360 độ CS-C6W Với diện mạo khác biệt, camera EZVIZ C6W sẽ giúp bạn bảo vệ ngôi nhà theo phong cách hoàn toàn mới: không chỉ chuyên nghiệp và an toàn mà còn thật Kool. Thanh lịch và linh hoạt, camera Wifi C6W là tất cả sự bảo vệ bạn cần cho một ngôi nhà rộng lớn. Camera ghi lại ở độ phân giải 2K và tự động theo dõi chuyển động ở chế độ thu phóng gấp 4 lần để đảm bảo không có gì thoát khỏi tầm mắt.', 'https://product.hstatic.net/200000295422/product/new_0317_6411-camera-wife-ezviz-c6w-4mp-quay-quet-360-do-11_16b53885fd444b4cae7ec2cf17c5fe95_grande.jpg', 'ezviz', 0, 99, '2021-10-01'),
(64, 'Máy Báo Thời Tiết', '10000000.00', 'mayhutbui', 'đây là sản phẩm very good good good', 'http://localhost/www/uploads/123.jpeg', 'xaomil', 0, 99, '2021-10-29'),
(65, 'camera 3x', '93021231.00', 'camera', 'có thể quay liên tục 30 năm mà k bị hỏng', 'http://localhost/www/uploads/camera.jpg', 'xaomii', 1, 8912, '2021-10-29'),
(66, 'camera x 300', '1231231.00', 'camera', 'thật không thể tinh được :))))', 'http://localhost/www/uploads/456.jpeg', 'xaomi', 0, 456, '2021-10-29'),
(67, 'điều hòa hơi nước', '8882221.00', 'dieuhoathongminh', 'rất perfect', 'http://localhost/www/uploads/789.jpg', 'Amazon', 0, 986, '2021-10-29'),
(68, 'điều hòa hơi nước siêu phẩm nhat', '8882221.00', 'dieuhoathongminh', 'rất perfect nha nha nha', '/www/uploads/11121.jpeg', 'Amazon', 0, 986, '2021-11-02'),
(71, 'Hút Bụi Siêu Cấp', '20121212.00', 'mayhutbui', 'very cheap very good', '/www/uploads/hutbui123.jpg', 'amazon', 0, 981, '2021-11-12'),
(77, 'điều hòa thông minh', '9999999999.00', 'dieuhoathongminh', 'rất đẹp , bền và đắt ', '/www/uploads/999888.jpg', 'vnx', 0, 32312313, '2021-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `thongtinnhanxetsanpham`
--

CREATE TABLE `thongtinnhanxetsanpham` (
  `manhanxet` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `tendangnhap` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sosao` int(2) NOT NULL,
  `ngaydanggia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thongtinnhanxetsanpham`
--

INSERT INTO `thongtinnhanxetsanpham` (`manhanxet`, `masp`, `tendangnhap`, `noidung`, `sosao`, `ngaydanggia`) VALUES
(25, 8, 'lelong12102k2@gmail.com', 'kaka', 4, '2021-11-18'),
(26, 8, 'lequanglong12102k2@gmail.com', 'rất oke', 5, '2021-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `thumucsanpham`
--

CREATE TABLE `thumucsanpham` (
  `mathumuc` int(11) NOT NULL,
  `tenthumuc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenthumuccodau` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thumucsanpham`
--

INSERT INTO `thumucsanpham` (`mathumuc`, `tenthumuc`, `tenthumuccodau`) VALUES
(1, 'khoacuathongminh', 'Khóa Cửa Thông Minh'),
(2, 'mayhutbui', 'máy hút bụi'),
(3, 'dieuhoathongminh', 'điều hòa thông minh'),
(4, 'denthongminh', 'đèn thông minh'),
(5, 'camera', 'camera');

-- --------------------------------------------------------

--
-- Table structure for table `tinnhan`
--

CREATE TABLE `tinnhan` (
  `matinnhan` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tendangnhap` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigiannhancuoicung` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinnhan`
--

INSERT INTO `tinnhan` (`matinnhan`, `tendangnhap`, `thoigiannhancuoicung`) VALUES
('lelong12102k2@gmail.com-tn', 'lelong12102k2@gmail.com', '2021-11-15 09:21:33'),
('lequanglong12102k2@gmail.com-tn', 'lequanglong12102k2@gmail.com', '2021-11-16 10:29:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD KEY `magiohang` (`magiohang`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `mahoadon` (`mahoadon`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `chitiettinnhan`
--
ALTER TABLE `chitiettinnhan`
  ADD PRIMARY KEY (`machitiettinnhan`),
  ADD KEY `matinnhan` (`matinnhan`);

--
-- Indexes for table `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`macv`),
  ADD KEY `tendangnhap` (`tendangnhap`),
  ADD KEY `mahoadon` (`mahoadon`);

--
-- Indexes for table `diachigiaohang`
--
ALTER TABLE `diachigiaohang`
  ADD PRIMARY KEY (`madiachigiaohang`),
  ADD KEY `diachigiaohang_ibfk_1` (`tendangnhap`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`magiohang`),
  ADD KEY `tendangnhap` (`tendangnhap`);

--
-- Indexes for table `hangsx`
--
ALTER TABLE `hangsx`
  ADD PRIMARY KEY (`masx`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahoadon`),
  ADD KEY `tendangnhap` (`tendangnhap`);

--
-- Indexes for table `luong`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`maluong`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`tendangnhap`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `thongtinnhanxetsanpham`
--
ALTER TABLE `thongtinnhanxetsanpham`
  ADD PRIMARY KEY (`manhanxet`),
  ADD KEY `tendangnhap` (`tendangnhap`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `thumucsanpham`
--
ALTER TABLE `thumucsanpham`
  ADD PRIMARY KEY (`mathumuc`);

--
-- Indexes for table `tinnhan`
--
ALTER TABLE `tinnhan`
  ADD PRIMARY KEY (`matinnhan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiettinnhan`
--
ALTER TABLE `chitiettinnhan`
  MODIFY `machitiettinnhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `congviec`
--
ALTER TABLE `congviec`
  MODIFY `macv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `diachigiaohang`
--
ALTER TABLE `diachigiaohang`
  MODIFY `madiachigiaohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `hangsx`
--
ALTER TABLE `hangsx`
  MODIFY `masx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `luong`
--
ALTER TABLE `luong`
  MODIFY `maluong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `thongtinnhanxetsanpham`
--
ALTER TABLE `thongtinnhanxetsanpham`
  MODIFY `manhanxet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `thumucsanpham`
--
ALTER TABLE `thumucsanpham`
  MODIFY `mathumuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
