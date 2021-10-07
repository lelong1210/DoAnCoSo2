-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2021 at 12:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

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
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(10) NOT NULL,
  `tensp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatien` decimal(10,2) NOT NULL,
  `loaisanpham` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motasanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkduongdananh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hangsx` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `giatien`, `loaisanpham`, `motasanpham`, `linkduongdananh`, `hangsx`) VALUES
(1, 'Khóa cửa thông minh August Wifi Smart Lock, kết nối Wifi, khoá & mở từ xa', '5850000.00', 'khoacuathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/05/August-Wifi-Smart-Lock.png', ' August'),
(2, 'Công tắc cửa cuốn thông minh Tuya, điều khiển từ xa qua điện thoại', '490000.00', 'khoacuathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2021/03/Cong-tac-cua-cuon-Tuya-3-new-247x296.jpg', 'Tuya'),
(3, 'Điều khiển cửa cuốn thông minh Sonoff – Đóng mở từ xa, ra lệnh giọng nói, lên lịch tự động', '950000.00', 'khoacuathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2019/07/Dieu-khien-cua-cuon-Sonoff-247x296.jpg', 'snoff'),
(4, 'Khóa cửa thông minh August Smart Lock + Connect, kết nối wifi, khóa & mở từ xa', '3250000.00', 'khoacuathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/06/August-Smart-Lock-va-hub-trung-tam-247x296.jpg', 'August'),
(5, 'eufy Smart Lock Touch with Wifi Bridge – Khóa cửa vân tay, chống nước IP65', '5990000.00', 'khoacuathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/08/eufy-smart-lock-touch-with-bridge-1-247x296.jpg', 'eufy '),
(6, 'Khóa cửa thông minh Wyze Lock, tự động khóa – mở cửa từ xa', '2690000.00', 'khoacuathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/05/khoa-thong-minh-Wyze-Lock-247x296.jpg', 'Wyze Lock'),
(7, 'Khóa cửa thông minh August Smart Lock Pro + Connect, kết nối Wifi, khóa & mở từ xa', '4250000.00', 'khoacuathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2019/02/Khoa-cua-thong-minh-August-Smart-Lock-Pro-Connect-247x296.jpg', 'August'),
(8, 'August Smart Keypad', '1790000.00', 'khoacuathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/05/August-Smart-Keypad-gioi-thieu-247x296.jpg', 'August'),
(9, 'ECOVACS DEEBOT DJ35 robot hút bụi lau nhà', '4000000.00', 'mayhutbui', '', 'https://grobot.vn/wp-content/uploads/2019/01/dj35c2-300x457.jpg', 'ECOVACS'),
(10, 'Ecovacs Deebot DN320 (OZMO 900) Robot hút bụi lau nhà', '4800000.00', 'mayhutbui', '', 'https://grobot.vn/wp-content/uploads/2019/01/dn320c-300x457.jpg', 'ECOVACS'),
(11, 'ECOVACS DEEBOT DN520 Robot hút bụi', '5700000.00', 'mayhutbui', '', 'https://grobot.vn/wp-content/uploads/2020/09/dn520c-300x457.jpg', 'ECOVACS'),
(12, 'Robot hút bụi  Ecovacs Deebot T8', '8790000.00', 'mayhutbui', '', 'https://grobot.vn/wp-content/uploads/2019/01/t8c-1-300x457.jpg', 'ECOVACS'),
(13, 'Robot hút bụi Ecovacs DD35 (Ozmo 600)', '4500000.00', 'mayhutbui', '', 'https://grobot.vn/wp-content/uploads/2019/01/dd35c-300x457.jpg', 'ECOVACS'),
(14, 'Robot hút bụi Ecovacs Deebot Dn33 (Ozmo 900)', '6000000.00', 'mayhutbui', '', 'https://grobot.vn/wp-content/uploads/2019/01/dn33c1-300x457.jpg', 'ECOVACS'),
(15, 'Robot hút bụi Ecovacs Deebot Dn55', '6500000.00', 'mayhutbui', '', 'https://grobot.vn/wp-content/uploads/2020/09/dn55c-300x457.jpg', 'ECOVACS'),
(16, 'Robot hút bụi Ecovacs Deebot T5 Hero (Ozmo 950)', '7300000.00', 'mayhutbui', '', 'https://grobot.vn/wp-content/uploads/2019/01/t5c-300x457.jpg', 'ECOVACS'),
(23, 'BroadLink RM4 Pro – Trung tâm điều khiển hồng ngoại, vô tuyến thông minh', '660000.00', 'dieuhoathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/04/Broadlink-RM4-Pro-247x296.png', 'BroadLink'),
(24, 'BroadLink RM4 Mini – Trung tâm điều khiển hồng ngoại mới nhất 2020', '310000.00', 'dieuhoathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/04/broadlink-RM4-mini-247x296.png', 'BroadLink'),
(25, 'Trung tâm điều khiển hồng ngoại Tuya S06 Wifi IR Remote Control', '170000.00', 'dieuhoathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2019/08/Thiet-bi-trung-tam-hong-ngoai-Tuya-S06-247x296.jpg', 'Tuya'),
(26, 'Sensibo Sky – Điều khiển điều hoà thông minh, phản hồi trạng thái 2 chiều', '2490000.00', 'dieuhoathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2019/09/Sensibo-Sky-247x296.jpg', 'Sensibo Sky'),
(27, 'Google Nest Thermostat E, điều khiển điều hòa âm trần thông minh', '3990000.00', 'dieuhoathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2019/09/Google-Nest-Thermostat-E-247x296.jpg', 'Google'),
(28, 'Sensibo Air – Điều khiển điều hòa thông minh, hỗ trợ Apple HomeKit', '2990000.00', 'dieuhoathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2021/08/Sensibo-Air-2-01-1-247x296.jpg', 'Sensibo'),
(29, 'Tado° Smart AC Control V3+, điều khiển điều hòa thông minh, hỗ trợ HomeKit', '2790000.00', 'dieuhoathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2021/06/tado-smart-ac-control-v3-1-247x296.jpg', 'Tado'),
(30, 'BroadLink BestCon RM4C Mini, Thiết bị điều khiển hồng ngoại thông minh', '210000.00', 'dieuhoathongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/04/broadlink-bestcon-RM4C-mini-247x296.jpg', 'BroadLink'),
(31, 'Đèn LED dây RGB Tuya, dài 5m, 16 triệu màu', '490000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/09/Led-day-16-trieu-mau-RGB-Tuya-247x296.jpg', 'Tuya'),
(32, 'Philips Hue GU10 White and Color Ambiance, đèn downlight âm trần 16 triệu màu', '1590000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/09/Philips-Hue-GU10-Color-1-Pack-247x296.jpg', 'Philips'),
(33, 'Thiết bị điều khiển trung tâm Philips Hue Bridge', '1350000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2018/12/Philips-Hue-Hub-247x296.jpg', 'Philips'),
(34, 'Đèn LED dây 16 triệu màu Philips Hue Lightstrip Plus – Base KIT', '1990000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2018/11/Philips-Hue-Lightstrip-Plus-Base-1-247x296.jpg', 'Philips'),
(35, 'Đèn thông minh Philips Hue Play Light Bar, 16 triệu màu, hỗ trợ Alexa & Google Assistant', '3690000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2019/05/Den-Philips-Hue-Play-Bar-2-Pack-247x296.jpg', 'Philips'),
(36, 'Bóng đèn màu thông minh Philips Hue White and Color Ambiance', '1350000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2018/10/Den-mau-Philips-Hue-White-and-Color-Ambiance-247x296.jpg', 'Philips'),
(37, 'Xiaomi Yeelight Lightstrip 1S – Đèn LED dây thông minh 16 triệu màu, dài 2m', '790000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/10/Xiaomi-Yeelight-Lightstrip-2m-1-247x296.png', 'Xiaomi'),
(38, 'Xiaomi Yeelight Lightstrips Plus Extension – Đèn LED dây mở rộng, dài 1m', '220000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/10/Yeelight-Aurora-Lightstrips-Plus-Extension-1-247x296.jpg', 'Xiaomi'),
(39, 'Philips Hue Centura, đèn downlight âm trần cao cấp 16 triệu màu', '1990000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/09/Den-downlight-Philips-Hue-Centura-247x296.jpg', 'Philips'),
(40, 'Đèn LED âm trần Downlight thông minh Rạng Đông, kết nối Wifi, hỗ trợ Google Home, Amazon Alexa', '330000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2019/10/Den-LED-am-tran-Downlight-thong-minh-Rang-Dong-247x296.jpg', 'Rạng Đông'),
(41, 'Bóng đèn thông minh Philips Hue White, hỗ trợ Google Home, Alexa', '250000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2018/07/Bong-den-thong-minh-Philips-Hue-White-1-247x296.jpg', 'Philips'),
(42, 'Yeelight LED Color Bulb 1S, hỗ trợ HomeKit, 16 triệu màu', '450000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/10/Yeelight-LED-Color-Bulb-1S-247x296.jpg', 'Yeelight'),
(43, 'Bộ 3 đèn cảm ứng eufy Lumi Stick-On, dùng pin, chiếu sáng 365 ngày', '390000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/05/Lumi-Stick-On-Night-Light-247x296.png', 'eufy Lumi'),
(44, 'Hệ thống đèn màu thông minh Philips Hue Color Starter Kit – 3 Pack', '3850000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2019/11/Philips-Hue-Color-Starter-Kit-3-Pack-247x296.jpg', 'Philips'),
(45, 'Bóng đèn thông minh GE C-Life, hỗ trợ Google Home', '240000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2019/07/Bong-den-thong-minh-GE-C-Life-247x296.jpg', 'GE'),
(46, 'Đèn LED dây 16 triệu màu Philips Hue Lightstrip Plus – Extension', '590000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2019/08/Philips-Hue-Lightstrip-Plus-Extension-1-247x296.jpg', 'Philips'),
(47, 'Philips Hue Play Gradient Lightstrip, đèn LED dây cao cấp đồng bộ màu theo TV', '7150000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/12/Philips-Hue-Play-Gradient-Lightstrip-55-247x296.jpg', 'Philips'),
(48, 'Điều khiển không dây Philips Hue Smart Dimmer Switch', '490000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2018/09/Philips-Hue-Smart-Dimmer-Switch-247x296.jpg', 'Philips'),
(49, 'Philips Hue GU10 Downlight, giải pháp đèn âm trần thông minh', '490000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/09/Den-LED-downlight-Philips-Hue-GU10-247x296.jpg', 'Philips'),
(50, 'Đèn LED dây nối dài RGB Tuya, dài 5m, 16 triệu màu', '220000.00', 'denthongminh', '', 'https://gucongnghe.com/wp-content/uploads/2020/10/Tuya-LED-RGB-Extension-1-247x296.jpg', 'Tuya'),
(56, 'Blink, camera dùng Pin AA, HD 720P, Lưu Cloud Amazon miễn phí', '2490000.00', 'camera', '', 'https://gucongnghe.com/wp-content/uploads/2019/05/Camera-an-ninh-Blink-247x296.jpg', 'Blink'),
(57, 'Blink XT2, camera ngoài trời dùng Pin AA, Full HD 1080P, Lưu Cloud Amazon miễn phí', '1230000.00', 'camera', '', 'https://gucongnghe.com/wp-content/uploads/2019/09/Blink-XT2-247x296.jpg', 'Blink'),
(58, 'Ring Spotlight Cam, Camera không dây dùng pin, nói chuyện 2 chiều, tích hợp đèn LED, chuông báo động', '1700000.00', 'camera', '', 'https://gucongnghe.com/wp-content/uploads/2018/11/Ring-Spotlight-Cam-247x296.jpg', 'Ring Spotlight'),
(59, 'Ring Floodlight Cam, Camera ngoài trời tích hợp đèn LED siêu sáng, chuông báo động', '2490000.00', 'camera', '', 'https://gucongnghe.com/wp-content/uploads/2020/07/Ring-Floodlight-Camera-247x296.jpg', 'Ring Floodlight'),
(60, 'Amazon Cloud Cam, camera thông minh Full HD 1080p, hỗ trợ Alexa, lưu Cloud Amazon miễn phí', '3990000.00', 'camera', '', 'https://gucongnghe.com/wp-content/uploads/2019/09/Amazon-Cloud-Cam-247x296.jpg', 'Amazon'),
(61, 'Camera 2K Eufy Security Camera T84001W1, tích hợp còi báo động\r\n				', '998000.00', 'camera', '', '//product.hstatic.net/200000295422/product/new_0256_t8400--800x800_1200x_32d40ade32c4435aacf27fe3cdb28dc9_grande.jpg', 'Eufy'),
(62, 'Camera 360 Xiaomi Mi Home Security 360 2K  - Phân phối chính hãng\r\n				', '1190000.00', 'camera', '', '//product.hstatic.net/200000295422/product/new_0266_camera-thong-minh-xiaomi-ptz-phien-ban-2k_425a0143ea1947768bcf3037b4a91186_grande.jpg', 'Xiaomi'),
(63, 'Camera ezviz C6W xoay 360 độ\r\n				', '1349000.00', 'camera', '', '//product.hstatic.net/200000295422/product/new_0317_6411-camera-wife-ezviz-c6w-4mp-quay-quet-360-do-11_16b53885fd444b4cae7ec2cf17c5fe95_grande.jpg', 'ezviz');

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
(5, 'camera', 'camere');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `thumucsanpham`
--
ALTER TABLE `thumucsanpham`
  ADD PRIMARY KEY (`mathumuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `thumucsanpham`
--
ALTER TABLE `thumucsanpham`
  MODIFY `mathumuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
