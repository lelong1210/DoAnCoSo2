-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 04:05 PM
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
-- Database: `dacoso2`
--

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
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(10) NOT NULL,
  `tensp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatien` decimal(10,2) NOT NULL,
  `loaisanpham` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motasanpham` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkduongdananh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hangsx` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dunglamslider` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `giatien`, `loaisanpham`, `motasanpham`, `linkduongdananh`, `hangsx`, `dunglamslider`) VALUES
(1, 'Khóa cửa thông minh August Wifi Smart Lock, kết nối Wifi, khoá & mở từ xa', '5850000.00', 'khoacuathongminh', 'Bộ sản phẩm bao gồm Ổ khóa thông minh August Smart Lock thế hệ 3 mới nhất và Hub trung tâm Connect Kết nối Bluetooth với điện thoại, tự động mở khi về và khoá cửa khi rời khỏi nhà. August Connect giúp mở cửa và phân quyền cho người khác từ xa. Phù hợp nhất cho nhà thuê Airbnb. Dễ dàng lắp đặt trên tất cả loại cửa: cửa gỗ, cửa nhôm, cửa sắt… Điều khiển bằng giọng nói với trợ lý Google hoặc Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2020/05/August-Wifi-Smart-Lock.png', 'August', 0),
(2, 'Công tắc cửa cuốn thông minh Tuya, điều khiển từ xa qua điện thoại', '490000.00', 'khoacuathongminh', 'Sử dụng để thay thế công tắc âm tường hiện tại, hoặc lắp thêm song song Biến cửa cuốn thông thường trở nên thông minh, điều khiển đóng, mở từ xa qua điện thoại Tương thích với 99% các loại cửa cuốn ở Việt Nam, không ảnh hưởng tới những tính năng sẵn có Lên lịch tự động đóng mở, chia sẻ phân quyền cho người khác từ xa Ra lệnh bằng giọng nói với trợ lý Google, Amazon Alexa Tương thích với các sản phẩm khác trong hệ sinh thái Tuya Có hướng dẫn lắp đặt chi tiết bằng tiếng Việt đi kèm', 'https://gucongnghe.com/wp-content/uploads/2021/03/Cong-tac-cua-cuon-Tuya-3-new-247x296.jpg', 'Tuya', 0),
(3, 'Điều khiển cửa cuốn thông minh Sonoff – Đóng mở từ xa, ra lệnh giọng nói, lên lịch tự động', '950000.00', 'khoacuathongminh', 'Đóng mở cửa cuốn từ xa thông qua mạng Internet. Hoạt động độc lập không cần hub trung tâm, kết nối trực tiếp với mạng Wifi. Lên lịch hẹn giờ đóng, mở cửa tự động. Chia sẻ quyền quản lý, không giới hạn số lượng. Có lưu lịch sử đóng mở. Lắp đặt dễ dàng trong vòng 30 phút, không cần khoan đục. Tương thích với mọi loại cửa cuốn trên thị trường. Ra lệnh bằng giọng nói với trợ lý Google, Amazon Alexa. Hỗ trợ IFTTT.', 'https://gucongnghe.com/wp-content/uploads/2019/07/Dieu-khien-cua-cuon-Sonoff-247x296.jpg', 'snoff', 0),
(4, 'Khóa cửa thông minh August Smart Lock + Connect, kết nối wifi, khóa & mở từ xa', '3250000.00', 'khoacuathongminh', 'Bộ sản phẩm bao gồm Ổ khóa thông minh August Smart Lock thế hệ 3 mới nhất và Hub trung tâm Connect Kết nối Bluetooth với điện thoại, tự động mở khi về và khoá cửa khi rời khỏi nhà. August Connect giúp mở cửa và phân quyền cho người khác từ xa. Phù hợp nhất cho nhà thuê Airbnb. Dễ dàng lắp đặt trên tất cả loại cửa: cửa gỗ, cửa nhôm, cửa sắt… Điều khiển bằng giọng nói với trợ lý Google hoặc Amazon Alexa.', 'https://gucongnghe.com/wp-content/uploads/2020/06/August-Smart-Lock-va-hub-trung-tam-247x296.jpg', 'August', 0),
(5, 'eufy Smart Lock Touch with Wifi Bridge – Khóa cửa vân tay, chống nước IP65', '5990000.00', 'khoacuathongminh', 'Khóa cửa thông minh eufy Smart Lock Touch – cảm biến vân tay siêu nhạy, mở khóa trong 0.3 giây Tự động khóa khi phát hiện cửa đang đóng Ứng dụng quản lý giao diện Tiếng Việt Đạt chứng nhận BHMA, bền bỉ với tuổi thọ lên tới 70 năm Có 5 cách mở khóa: Nhận diện vây tay, nhập mật mã, mở bằng chìa thông thường, sử dụng app Eufy Security và mở khóa bằng giọng nói Thiết bị có thể hoạt động trong thời tiết khắc nghiệt với chống nước IP65 Tích hợp cảm biến đóng/mở, chốt khóa điện tử kết nối Bluetooth Điều khiển từ xa với Wifi Bridge', 'https://gucongnghe.com/wp-content/uploads/2020/08/eufy-smart-lock-touch-with-bridge-1-247x296.jpg', 'eufy ', 0),
(6, 'Khóa cửa thông minh Wyze Lock, tự động khóa – mở cửa từ xa', '2690000.00', 'khoacuathongminh', 'Khóa cửa thông minh Wyze Lock, kết nối WiFi, Bluetooth và Zigbee Sử dụng 4 viên pin tiểu AA cho thời gian sử dụng 5 – 6 tháng Khóa và mở khóa từ xa qua ứng dụng Wyze Tự động mở khóa khi bạn đến gần. Tự động khóa khi cửa được đóng. Dễ dàng lắp đặt trong vòng 15 phút Chia sẻ quyền sử dụng khóa với người khác từ xa Ra lệnh bằng giọng nói với Amazon Alexa, Google Assistant sẽ sớm được hỗ trợ', 'https://gucongnghe.com/wp-content/uploads/2020/05/khoa-thong-minh-Wyze-Lock-247x296.jpg', 'Wyze Lock', 0),
(7, 'Khóa cửa thông minh August Smart Lock Pro + Connect, kết nối Wifi, khóa & mở từ xa', '4250000.00', 'khoacuathongminh', 'Bộ sản phẩm bao gồm Ổ khóa thông minh August Smart Lock Pro và Hub trung tâm Connect, thế hệ thứ 3 mới nhất. Kết nối Bluetooth với điện thoại, tự động mở khi về và khoá cửa khi rời khỏi nhà. August Connect giúp mở cửa và phân quyền cho người khác từ xa. Phù hợp nhất cho nhà thuê Airbnb. Dễ dàng lắp đặt trên tất cả loại cửa: cửa gỗ, cửa nhôm, cửa sắt… Điều khiển bằng giọng nói với trợ lý Google hoặc Amazon Alexa. Hỗ trợ Samsung SmartThings. Tương thích Apple HomeKit, mở khoá bằng iPhone, Apple Watch.', 'https://gucongnghe.com/wp-content/uploads/2019/02/Khoa-cua-thong-minh-August-Smart-Lock-Pro-Connect-247x296.jpg', 'August', 0),
(8, 'August Smart Keypad', '1790000.00', 'khoacuathongminh', 'Đóng mở cửa an toàn với mã bảo mật Tạo mã riêng biệt cho mỗi lần mở cửa dễ dàng ngay trên ứng dụng điện thoại Cách mở cửa hoàn hảo cho trẻ em hoặc nhà có khách Mã mở khóa cửa riêng cho mỗi người Khóa cửa nhanh chóng chỉ với một lần nhấn Dùng pin AAA, cài đặt và sử dụng dễ dàng.', 'https://gucongnghe.com/wp-content/uploads/2020/05/August-Smart-Keypad-gioi-thieu-247x296.jpg', 'August', 0),
(9, 'ECOVACS DEEBOT DJ35 robot hút bụi lau nhà', '4000000.00', 'mayhutbui', 'Tiếp nối sự thành công của T8 aivi plus hãng vừa cho ra mắt Ecovacs Deebot T9 aivi. Đây là robot đầu tiên trên thế giới được trang bị thêm tính năng lọc không khí và tỏa hương nước hoa. Hãy cùng Novadigital tìm hiểu về siêu phẩm mới ra mắt này nhé.', 'https://grobot.vn/wp-content/uploads/2019/01/dj35c2-300x457.jpg', 'ECOVACS', 0),
(10, 'Ecovacs Deebot DN320 (OZMO 900) Robot hút bụi lau nhà', '4800000.00', 'mayhutbui', 'Giống như các phiên bản trước Ecovacs Deebot T9 aivi sở hữu một thiết kế hình tròn đặt trưng. Với màu đen sang trọng, tinh tế. Chiều cao 9.3cm giúp robot có khả năng vượt chướng ngại vật lên tới 2cm.', 'https://grobot.vn/wp-content/uploads/2019/01/dn320c-300x457.jpg', 'ECOVACS', 0),
(11, 'ECOVACS DEEBOT DN520 Robot hút bụi', '5700000.00', 'mayhutbui', 'Kế thừa công nghệ điều hướng của các dòng T8, T9 aivi có thể nhận biết những vật cản nhỏ 1mm. Độ nhạy bén cao gấp 10 lần so với phiên bản trước nhờ được trang bị hệ thống True Detect 3D thông minh. Trong quá trình làm sạch Robot T9 AIVI có thể phát hiện ra vật cản, mép tường, …  tự động né tránh và thay đổi đường đi nhờ bộ cảm biến SLAM thông minh.', 'https://grobot.vn/wp-content/uploads/2020/09/dn520c-300x457.jpg', 'ECOVACS', 0),
(12, 'Robot hút bụi  Ecovacs Deebot T8', '8790000.00', 'mayhutbui', 'Ecovacs Robotics đã công bố bổ sung mới nhất cho dòng robot là:Ecovacs Deebot Ozmo T8 AIVI. Thiết bị thông minh này là một trình dọn dẹp trước có tính năng chipset AI và mô-đun máy ảnh. Theo Ecovacs, công nghệ này giúp T8 AIVI lập bản đồ nhà nhanh hơn và chính xác hơn các máy hút bụi khác sử dụng công nghệ điều hướng LDS. Ecovacs tuyên bố rằng điều này cho phép chân không phát hiện tốt hơn các chướng ngại vật trên đường đi của nó và giảm nguy cơ bị kẹt 60% so với các mô hình trước đó.', 'https://grobot.vn/wp-content/uploads/2019/01/t8c-1-300x457.jpg', 'ECOVACS', 1),
(13, 'Robot hút bụi Ecovacs DD35 (Ozmo 600)', '4500000.00', 'mayhutbui', 'Nhà là nơi cuối cùng mà mỗi người trong chúng ta trở về sau một ngày làm việc bận rộn. Với những người có quỹ thời gian hạn hẹp, thay vì mất quá nhiều thời gian dọn dẹp thì giờ đây đã có Ecovacs Deebot DD35 lo. Với tích hợp cả 2 chức năng hút và lau đồng thời Ecovacs Deebot DD35 có khả năng đánh bay mọi bụi bẩn trong tíc tắc, mang lại một bầu không khí mới cho ngôi nhà bạn.', 'https://grobot.vn/wp-content/uploads/2019/01/dd35c-300x457.jpg', 'ECOVACS', 0),
(14, 'Robot hút bụi Ecovacs Deebot Dn33 (Ozmo 900)', '6000000.00', 'mayhutbui', 'Hiện nay trên thị trường có rất nhiều sản phẩm robot hút bụi thông minh, một trong số đó không thể không nhắc tới Ecovacs Deebot Dn33  ( tên quốc tế là Ecovacs Deebot 900) đến từ thương hiệu công nghệ toàn cầu Ecovacs Robotics – nằm trong top 3 thương hiệu robot hút bụi lau nhà lớn nhất của thị trường Trung Quốc. Deebot DE55 mới ra mắt vào năm 2018, thiết bị sở hữu công nghệ thông minh của Mỹ và được lắp ráp tại Trung Quốc. ', 'https://grobot.vn/wp-content/uploads/2019/01/dn33c1-300x457.jpg', 'ECOVACS', 0),
(15, 'Robot hút bụi Ecovacs Deebot Dn55', '6500000.00', 'mayhutbui', 'Công việc dọn nhà hàng ngày tiêu tốn không chỉ thời gian mà công sức mệt nhọc của bạn. Với Robot hút bụi lau nhà thì nỗi lo không còn nữa bởi tất cả hoàn toàn tự động. Khả năng thông minh và hiệu quả làm sạch vượt trội đem lại của Robot luôn đuợc đánh giá cao hơn so với phương pháp dọn nhà thủ công. Bạn thảnh thơi mà nhà cửa vẫn sạch sẽ tinh tươm. Với Robot hút bụi lau nhà Ecovacs Deebot DN55 thời gian cho công việc dọn dẹp nhà cửa sẽ được giải phóng. Bạn có nhiều thời gian cho con cái, gia đình cũng như công việc kiếm tiền. Với mức đầu tư không quá lớn nhưng hiệu quả đem lại có thể tiết kiệm không chỉ thời gian mà còn là tiền bạc của bạn.', 'https://grobot.vn/wp-content/uploads/2020/09/dn55c-300x457.jpg', 'ECOVACS', 0),
(16, 'Robot hút bụi Ecovacs Deebot T5 Hero (Ozmo 950)', '7300000.00', 'mayhutbui', 'Nhắc đến robot hút bụi lau nhà không thể không nhắc đến robot hút bụi lau nhà Ecovacs Deebot thuộc sở hữu của Ecovacs Robotics. Thật không quá khi nói robot lau nhà Ecovacs Deebot là tối ưu nhất và hoàn thiện nhất trong tất cả những dòng robot hút bụi lau nhà trên thị trường hiện nay. Và Robot hút bụi lau nhà Ecovacs Deebot T5 HERO (DX96) hội tụ đầy đủ các tính năng ưu việt đó.', 'https://grobot.vn/wp-content/uploads/2019/01/t5c-300x457.jpg', 'ECOVACS', 0),
(23, 'BroadLink RM4 Pro – Trung tâm điều khiển hồng ngoại, vô tuyến thông minh', '660000.00', 'dieuhoathongminh', 'BroadLink RM4 Pro là thiết bị trung tâm điều khiển đa năng mới nhất của BroadLink, sử dụng thay thế cho remote của hàng ngàn thiết bị điện gia dụng trong nhà như TV, điều hòa, quạt, rèm cửa…; hỗ trợ cả sóng hồng ngoại (IR) và vô tuyến (RF).  Điều khiển bẳng giọng nói với trợ lý Google Assisstant, Alexa. Hỗ trợ IFTTT, đặc biệt BroadLink RM4 Pro còn có thể kết hợp cùng cảm biến nhiệt độ BroadLink HTS2 để tạo ngữ cảnh thông minh, tiết kiệm điện năng.', 'https://gucongnghe.com/wp-content/uploads/2020/04/Broadlink-RM4-Pro-247x296.png', 'BroadLink', 0),
(24, 'BroadLink RM4 Mini – Trung tâm điều khiển hồng ngoại mới nhất 2020', '310000.00', 'dieuhoathongminh', 'BroadLink RM4 Mini – Trung tâm điều khiển hồng ngoại nhỏ nhưng có võ. Là phiên bản rút gọn với kích thước nhỏ, RM4 Mini hỗ trợ điều khiển các thiết bị điện gia dụng trong nhà như TV, điều hòa, quạt máy từ xa thông qua điện thoại hoặc lệnh giọng nói cùng trợ lý ảo.  Kết nối Wifi, điều khiển các thiết bị hồng ngoại từ xa thông qua điện thoại Tương thích với hầu hết các thiết bị: máy lạnh, TV, IPTV, quạt, âm thanh, DVD… Hỗ trợ học lệnh từ remote gốc Nhỏ gọn, tiết kiệm chi phí Điều khiển giọng nói với trợ lý Google Assistant, Amazon Alexa Kết hợp với BroadLink HTS2 thêm tính năng cảm biến nhiệt độ, độ ẩm.', 'https://gucongnghe.com/wp-content/uploads/2020/04/broadlink-RM4-mini-247x296.png', 'BroadLink', 0),
(25, 'Trung tâm điều khiển hồng ngoại Tuya S06 Wifi IR Remote Control', '170000.00', 'dieuhoathongminh', 'Thiết bị điều khiển hồng ngoại Tuya S06 điều khiển tất cả các thiết bị sử dụng remote IR như TV, TV box, DVD, điều hòa, quạt… Kết nối trực tiếp Wifi, điều khiển các thiết bị trong nhà từ xa thông qua ứng dụng Smart Life trên điện thoại. Hỗ trợ học lệnh từ remote gốc. Hỗ trợ Google Assistant, Amazon Alexa, IFTTT. Kết hợp với Google Nest Mini ra lệnh điều khiển thiết bị bằng giọng nói.', 'https://gucongnghe.com/wp-content/uploads/2019/08/Thiet-bi-trung-tam-hong-ngoai-Tuya-S06-247x296.jpg', 'Tuya', 0),
(26, 'Sensibo Sky – Điều khiển điều hoà thông minh, phản hồi trạng thái 2 chiều', '2490000.00', 'dieuhoathongminh', 'Điều khiển điều hoà thông minh Sensibo Sky, gen 2 mới nhất Tương thích với các loại điều hòa treo tường, điều hòa âm trần, điều hòa tổng sử dụng remote Phản hồi 2 chiều, biết được trạng thái hiện tại của điều hòa, ngay cả khi dùng điều khiển ngoài Tích hợp cảm biến nhiệt độ, độ ẩm tạo ngữ cảnh tự động hóa Lên lịch bật, tắt theo thời gian hoặc khi bạn rời đi/trước khi trở về nhà Hỗ trợ Google Assistant, Amazon Alexa, Siri shortcuts, IFTTT, Samsung SmartThings Điều khiển trực tiếp trên ứng dụng Google Home hoặc Smartphone từ mọi nơi', 'https://gucongnghe.com/wp-content/uploads/2019/09/Sensibo-Sky-247x296.jpg', 'Sensibo ', 1),
(27, 'Google Nest Thermostat E, điều khiển điều hòa âm trần thông minh', '3990000.00', 'dieuhoathongminh', 'Google Nest Thermostat E, điều khiển điều hòa thông minh, tiết kiệm năng lượng. Điều khiển điều hòa âm trần, điều hòa tổng từ xa thông qua ứng dụng Nest. Tự học thói quen điều chỉnh nhiệt độ từ người dùng. Ngữ cảnh thông minh, bật điều hòa khi bạn trở về, tắt khi ra khỏi nhà. 6 dây kết nối, tương thích tới 85% hệ thống điều hòa 24V. Hỗ trợ điều khiển bằng giọng nói với Google Assistant trên loa Google Home Mini. Tương thích cả Amazon Alexa.', 'https://gucongnghe.com/wp-content/uploads/2019/09/Google-Nest-Thermostat-E-247x296.jpg', 'Google', 0),
(28, 'Sensibo Air – Điều khiển điều hòa thông minh, hỗ trợ Apple HomeKit', '2990000.00', 'dieuhoathongminh', 'Tương thích với các loại điều hòa treo tường, điều hòa âm trần, điều hòa tổng sử dụng remote Phản hồi 2 chiều, cảm biến nhiệt độ và độ ẩm thông minh Điều khiển bật/tắt từ xa, hẹn giờ lên tới 7 ngày Cài đặt dễ dàng, quản lý qua ứng dụng trên thiết bị di động Hỗ trợ Google Assistant, Amazon Alexa, Apple HomeKit, SmartThings, IFTTT, API', 'https://gucongnghe.com/wp-content/uploads/2021/08/Sensibo-Air-2-01-1-247x296.jpg', 'Sensibo', 0),
(29, 'Tado° Smart AC Control V3+, điều khiển điều hòa thông minh, hỗ trợ HomeKit', '2790000.00', 'dieuhoathongminh', 'Điều khiển điều hoà bằng ứng dụng trên điện thoại với đèn led hiển thị trực quan, sang trọng Có thể điều khiển trực tiếp trên thiết bị Tạo ngữ cảnh thông minh, tự động hóa điều hòa với cảm biến nhiệt độ, độ ẩm tích hợp Hỗ trợ Apple HomeKit, Google Assistant, Amazon Alexa Kết nối Wifi 802.11 b/g/n, 2.4 GHz', 'https://gucongnghe.com/wp-content/uploads/2021/06/tado-smart-ac-control-v3-1-247x296.jpg', 'Tado', 0),
(30, 'BroadLink BestCon RM4C Mini, Thiết bị điều khiển hồng ngoại thông minh', '210000.00', 'dieuhoathongminh', 'BroadLink BestCon RM4C mini là thiết bị trung tâm điều khiển hồng ngoại đời mới nhất, thay hàng loạt remote hồng ngoại thông thường; giúp điều khiển các thiết bị nhanh chóng thông qua ứng dụng điện thoại hoặc ra lệnh giọng nói với các trợ lý ảo.  Phiên bản giá rẻ, do BestCon (công ty con của BroadLink) sản xuất Kết nối Wifi, điều khiển các thiết bị hồng ngoại từ xa thông qua điện thoại Tương thích với hầu hết các thiết bị: máy lạnh, TV, IPTV, quạt, âm thanh, DVD… Hỗ trợ học lệnh từ remote gốc Nhỏ gọn, tiết kiệm chi phí Điều khiển giọng nói với trợ lý Google Assistant, Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2020/04/broadlink-bestcon-RM4C-mini-247x296.jpg', 'BroadLink', 0),
(31, 'Đèn LED dây RGB Tuya, dài 5m, 16 triệu màu', '490000.00', 'denthongminh', 'Chiều dài dây 5m, mở rộng được tới 10m Điều khiển đèn từ xa, lên lịch tắt bật, điều chỉnh sáng, tối và thay đổi màu sắc Ứng dụng trong đèn trang trí, đèn hắt trần, sofa, kệ TV.. Tự động điều chỉnh ánh sáng theo nhạc qua ứng dụng hoặc micro tích hợp (trong bộ kèm Remote) Điều khiển giọng nói với Google Assistant, Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2020/09/Led-day-16-trieu-mau-RGB-Tuya-247x296.jpg', 'Tuya', 0),
(32, 'Philips Hue GU10 White and Color Ambiance, đèn downlight âm trần 16 triệu màu', '1590000.00', 'denthongminh', 'Kết hợp với chóa đèn GU10 để dùng làm đèn downlight âm trần, chiếu điểm, spotlight Mặt bóng thiết kế đặc biệt chống chói, chống lóa khi nhìn chéo Ánh sáng 16 triệu màu, có thể thay đổi màu sắc, cường độ chiếu sáng Công suất 5.7W tương đương bóng 50W thường, cường độ ánh sáng 350 lumen, nhiệt độ màu 2,000 – 6,500 Kelvin Điều khiển từ xa, lên lịch tắt/bật. Hỗ trợ điều khiển bằng giọng nói với Amazon Alexa và Google Assistant hoặc Apple HomeKit (khi kết nối với Hue Bridge) Đồng bộ ánh sáng theo nhạc với Spotify Giao thức kết nối Bluetooth và Zigbee Chiếu sáng tự động theo hình ảnh trên TV với Philips Hue Play HDMI Sync Box', 'https://gucongnghe.com/wp-content/uploads/2020/09/Philips-Hue-GU10-Color-1-Pack-247x296.jpg', 'Philips', 0),
(33, 'Thiết bị điều khiển trung tâm Philips Hue Bridge', '1350000.00', 'denthongminh', 'Thiết bị điều khiển trung tâm Philips Hue Bridge. Trái tim của hệ thống Philips Hue, quản lý toàn bộ bóng thông qua ứng dụng Philips Hue từ xa. Tích hợp điều khiển thông qua sóng Zigbee cho tốc đổ xử lý/phản hồi nhanh chóng – ổn định. Điều khiển lên đến 50 bóng đèn thông qua trợ lý ảo Siri, Alexa, Google. Phạm vi hoạt động tối đa 30m.', 'https://gucongnghe.com/wp-content/uploads/2018/12/Philips-Hue-Hub-247x296.jpg', 'Philips', 0),
(34, 'Đèn LED dây 16 triệu màu Philips Hue Lightstrip Plus – Base KIT', '1990000.00', 'denthongminh', 'Đèn LED dây Philips Hue Lightstrip Plus 16 triệu màu, dài 2m, mở rộng tối đa 10m dễ dàng với dây Extension. Phiên bản mới nhất 2020 v4 hỗ trợ thêm kết nối Bluetooth Điều khiển bằng giọng nói (yêu cầu phải có Philips Hue Bridge). Lắp đặt đơn giản dưới gầm quầy bar, gầm tủ, giường, ghế sofa với băng dính 2 mặt đi kèm. Không giới hạn tính năng với 16 triệu màu và các sắc thái ánh sáng khác nhau. Điều khiển không dây từ xa bằng điện thoại thông qua ứng dụng Philips Hue. Đồng bộ ánh sáng theo nhạc với Spotify Tương thích Alexa, Apple HomeKit, hoặc Google Assistant… Chiếu sáng tự động theo hình ảnh trên TV với Philips Hue Play HDMI Sync Box.', 'https://gucongnghe.com/wp-content/uploads/2018/11/Philips-Hue-Lightstrip-Plus-Base-1-247x296.jpg', 'Philips', 0),
(35, 'Đèn thông minh Philips Hue Play Light Bar, 16 triệu màu, hỗ trợ Alexa & Google Assistant', '3690000.00', 'denthongminh', 'Đèn thông minh Philips Hue Play Light Bar 16 triệu màu sắc. Điều khiển bằng giọng nói sử dụng Amazon Alexa, Apple HomeKit, hoặc Google Assistant (cần phải có Philips Hue Hub). Đồng bộ ánh sáng theo nhạc với Spotify Lắp đặt dễ dàng, treo đứng hoặc nằm ngang với giá đỡ và băng dính 2 mặt đi kèm. Trải nghiệm giải trí ánh sáng hoàn hảo khi kết hợp 2 pack đặt phía sau hoặc 2 bên TV. Đồng bộ ánh sáng theo màn hình TV với Philips Hue Play HDMI Sync Box. Sản xuất tại Poland (Ba Lan), chất lượng Châu Âu', 'https://gucongnghe.com/wp-content/uploads/2019/05/Den-Philips-Hue-Play-Bar-2-Pack-247x296.jpg', 'Philips', 0),
(36, 'Bóng đèn màu thông minh Philips Hue White and Color Ambiance', '1350000.00', 'denthongminh', 'Bóng đèn Philips Hue White and Color Ambiance 16 triệu màu, 50.000 sắc thái, kết nối Bluetooth hoặc ZigBee. Công suất 9W, cường độ ánh sáng 800 lumens, nhiệt độ màu 2000K – 6500K Điều khiển bóng đèn từ xa, lên lịch tắt bật, tạo ngữ cảnh, điều chỉnh sáng, tối Thời gian hoạt động 25,000 giờ Điều khiển giọng nói với Alexa, Google Assistant, HomeKit Support Đồng bộ ánh sáng theo nhạc với Spotify Giao thức kết nối ZigBee, SmartThings Chiếu sáng tự động theo hình ảnh trên TV với Philips Hue Play HDMI Sync Box', 'https://gucongnghe.com/wp-content/uploads/2018/10/Den-mau-Philips-Hue-White-and-Color-Ambiance-247x296.jpg', 'Philips', 0),
(37, 'Xiaomi Yeelight Lightstrip 1S – Đèn LED dây thông minh 16 triệu màu, dài 2m', '790000.00', 'denthongminh', 'Được thiết kế linh hoạt, phù hợp với mọi không gian Tương thích Apple HomeKit, Google Assistant, Amazon Alexa, Samsung SmartThings Đồng bộ ánh sáng theo nhịp điệu bài hát Cài đặt dễ dàng, có thể mở rộng độ dài tốt đa 10m với Yeelight Lightstrip Extension Kết nối không dây: Wi-Fi 802.11 b/g/n 2.4GHz', 'https://gucongnghe.com/wp-content/uploads/2020/10/Xiaomi-Yeelight-Lightstrip-2m-1-247x296.png', 'Xiaomi', 0),
(38, 'Xiaomi Yeelight Lightstrips Plus Extension – Đèn LED dây mở rộng, dài 1m', '220000.00', 'denthongminh', 'Sử dụng công nghệ tiên tiến, mang lại không gian đa sắc màu với 16 triệu màu sắc Được thiết kế linh hoạt, phù hợp với mọi vị trí Tương thích với Amazon Alexa, Google Assistant, Apple HomeKit và Samsung SmartThings Đồng bộ ánh sáng theo nhịp điệu bài hát Kết nối không dây: Wi-Fi IEEE 802.11 b/g/n 2.4GHz', 'https://gucongnghe.com/wp-content/uploads/2020/10/Yeelight-Aurora-Lightstrips-Plus-Extension-1-247x296.jpg', 'Xiaomi', 0),
(39, 'Philips Hue Centura, đèn downlight âm trần cao cấp 16 triệu màu', '1990000.00', 'denthongminh', 'Thiết kế dạng Spotlight điều chỉnh được góc chiếu sáng Mặt bóng thiết kế đặc biệt chống chói, chống lóa khi nhìn chéo Sử dụng đèn Philips Hue GU10 White and Color Ambiance công suất 5.7W, cường độ ánh sáng 350 lumens, nhiệt độ màu 2000 – 6500K Đồng bộ ánh sáng theo nhạc với Spotify Điều khiển bóng đèn từ xa, lên lịch tắt bật, tạo ngữ cảnh, điều chỉnh sáng, tối Điều khiển giọng nói với Amazon Alexa, Google Assistant, Apple HomeKit (khi kết nối với Hue Bridge) Đồng bộ ánh sáng với hình ảnh trên TV khi sử dụng Philips Hue Play HDMI Sync Box Giao thức kết nối Bluetooth và Zigbee Sản xuất tại Poland (Ba Lan), chất lượng Châu Âu', 'https://gucongnghe.com/wp-content/uploads/2020/09/Den-downlight-Philips-Hue-Centura-247x296.jpg', 'Philips', 0),
(40, 'Đèn LED âm trần Downlight thông minh Rạng Đông, kết nối Wifi, hỗ trợ Google Home, Amazon Alexa', '330000.00', 'denthongminh', 'Đèn LED âm trần Downlight thông minh Rạng Đông kết nối Wifi, hỗ trợ Tuya Đèn 90/7W có công suất 7W, quang thông 500 lm – 520 lm, nhiệt độ màu 3000K – 6500K, đường kính lỗ khoét trần: 90mm Đèn 110/9W có công suất 9W, quang thông 700 lm – 720 lm, nhiệt độ màu 3000K – 6500K, đường kính lỗ khoét trần: 110mm Điều khiển bóng đèn từ xa, lên lịch tắt bật, điều chỉnh sáng, tối, điều khiển theo kịch bản Chip LED Samsung chất lượng cao, CRI > 80 Điều khiển giọng nói với Google Assistant, Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2019/10/Den-LED-am-tran-Downlight-thong-minh-Rang-Dong-247x296.jpg', 'Rạng Đông', 0),
(41, 'Bóng đèn thông minh Philips Hue White, hỗ trợ Google Home, Alexa', '250000.00', 'denthongminh', 'Bóng đèn Philips Hue White ánh sáng vàng có thể tăng giảm sáng, tối Kết hợp remote dimmer thích hợp làm đèn phòng ngủ Công suất 9.5W, cường độ ánh sáng 800 lumens, nhiệt độ màu 2700K (Warm White) Điều khiển bóng đèn từ xa, lên lịch tắt bật, tạo ngữ cảnh Đồng bộ ánh sáng theo nhạc với Spotify Thời gian hoạt động 25,000 giờ Điều khiển giọng nói với Alexa, Google Assistant, HomeKit Support Giao thức kết nối ZigBee, SmartThings', 'https://gucongnghe.com/wp-content/uploads/2018/07/Bong-den-thong-minh-Philips-Hue-White-1-247x296.jpg', 'Philips', 0),
(42, 'Yeelight LED Color Bulb 1S, hỗ trợ HomeKit, 16 triệu màu', '450000.00', 'denthongminh', 'Màu sắc của đèn có thể thay đổi – 16 triệu màu, nhiệt độ màu trải dài từ 1700K – 6500K Điều khiển từ xa thông qua điện thoại thông minh Tương thích Apple HomeKit, Google Assistant, Amazon Alexa, Samsung SmartThings Phát sáng theo nhạc, điều khiển qua Wifi 2.4 Ghz Đuôi bóng chuẩn E27 phổ biến tại Việt Nam Tiêu thụ điện năng thấp, 800 lumen quang thông chỉ với 8.5W, lên đến 25,000 giờ.', 'https://gucongnghe.com/wp-content/uploads/2020/10/Yeelight-LED-Color-Bulb-1S-247x296.jpg', 'Yeelight', 0),
(43, 'Bộ 3 đèn cảm ứng eufy Lumi Stick-On, dùng pin, chiếu sáng 365 ngày', '390000.00', 'denthongminh', 'Dùng 3 viên pin AAA, chiếu sáng đến 365 ngày Kích thước nhỏ gọn, hoàn toàn không dây. Lắp đặt dễ dàng bằng băng dính 2 mặt hoặc ốc vít có sẵn Tự động bật đèn khi phát hiện có chuyển động trong bóng tối, tắt sau 15s nếu không còn chuyển động Ánh sáng lý tưởng cho những vị trí cần đèn sáng mờ như trong phòng ngủ, tủ quần áo, nhà vệ sinh…', 'https://gucongnghe.com/wp-content/uploads/2020/05/Lumi-Stick-On-Night-Light-247x296.png', 'eufy', 0),
(44, 'Hệ thống đèn màu thông minh Philips Hue Color Starter Kit – 3 Pack', '3850000.00', 'denthongminh', 'Bộ Kit gồm 3 bóng đèn màu thông minh Philips Hue White and Color, 1 công tắc Smart Dimmer Switch và 1 thiết bị điều khiển trung tâm Philips Hue Bridge Ánh sáng 16 triệu màu, 50.000 sắc thái Công suất 10W, cường độ ánh sáng 800 lumens, nhiệt độ màu 2000K – 6500K Điều khiển bóng đèn từ xa, lên lịch tắt bật, tạo ngữ cảnh, điều chỉnh sáng, tối Đồng bộ ánh sáng theo nhạc với Spotify Thời gian hoạt động 25,000 giờ Điều khiển giọng nói với trợ lý Google, Amazon Alexa, Apple HomeKit Chiếu sáng tự động theo hình ảnh trên TV với Philips Hue Play HDMI Sync Box', 'https://gucongnghe.com/wp-content/uploads/2019/11/Philips-Hue-Color-Starter-Kit-3-Pack-247x296.jpg', 'Philips', 0),
(45, 'Bóng đèn thông minh GE C-Life, hỗ trợ Google Home', '240000.00', 'denthongminh', 'Bóng đèn thông minh GE C-Life của General Electric, kết nối Bluetooth Cần có loa thông minh hoặc màn hình thông minh của Google để hoạt động, quản lý trên app Google Home Điều khiển bóng đèn từ xa, lên lịch tắt bật, tạo ngữ cảnh, điều chỉnh sáng, tối Hỗ trợ ra lệnh bằng giọng nói với trợ lý Google Công suất 9.5W, cường độ ánh sáng 760 lumens, nhiệt độ màu 2700K (Soft White) Vòng đời lên tới 13.7 năm', 'https://gucongnghe.com/wp-content/uploads/2019/07/Bong-den-thong-minh-GE-C-Life-247x296.jpg', 'GE', 0),
(46, 'Đèn LED dây 16 triệu màu Philips Hue Lightstrip Plus – Extension', '590000.00', 'denthongminh', 'Dây LED nối dài 1m cho Philips Hue Color Lightstrip Plus, nối dài tối đa 10m. Điều khiển bằng giọng nói (yêu cầu phải có Philips Hue Bridge). Lắp đặt đơn giản dưới gầm quầy bar, gầm tủ, giường, ghế sofa với băng dính 2 mặt đi kèm. Không giới hạn tính năng với 16 triệu màu và các sắc thái ánh sáng khác nhau. Điều khiển không dây từ xa bằng điện thoại thông qua ứng dụng Philips Hue. Tương thích Alexa, Apple HomeKit, hoặc Google Assistant… Chiếu sáng tự động theo hình ảnh trên TV với Philips Hue Play HDMI Sync Box.', 'https://gucongnghe.com/wp-content/uploads/2019/08/Philips-Hue-Lightstrip-Plus-Extension-1-247x296.jpg', 'Philips', 0),
(47, 'Philips Hue Play Gradient Lightstrip, đèn LED dây cao cấp đồng bộ màu theo TV', '7150000.00', 'denthongminh', 'Có thể phát cùng lúc 7 màu sắc khác nhau trên cùng một dải đèn Kích thước đa dạng, phù hợp với TV từ 55 – 85 inches Ánh sáng đa dạng với góc phản chiếu 45º Điều khiển không dây từ xa bằng điện thoại thông qua ứng dụng Philips Hue. Đồng bộ ánh sáng theo nhạc với Spotify Tương thích Alexa, Apple HomeKit, hoặc Google Assistant… Cần có Philips Hue Bridge và Philips Hue Play HDMI Sync Box để tự động điều chỉnh theo hình ảnh trên TV hoặc app Sync Desktop đồng bộ theo máy tính.', 'https://gucongnghe.com/wp-content/uploads/2020/12/Philips-Hue-Play-Gradient-Lightstrip-55-247x296.jpg', 'Philips', 0),
(48, 'Điều khiển không dây Philips Hue Smart Dimmer Switch', '490000.00', 'denthongminh', 'Điều khiển bóng đèn Philips Hue từ xa, bật/tắt hoặc thay đổi cường độ chiếu sáng Có thể gắn lên tường Hoạt động như một chiếc điều khiển từ xa Quản lý từ ứng dụng trên điện thoại với Hue Bridge Dễ dàng cài đặt lên lịch với ứng dụng trên điện thoại Pin hoạt động tới 3 năm Có thể kết nối tới 12 điều khiển với Hue Bridge Giao thức ZigBee Hỗ trợ Alexa, Google Assistant, Samsung SmartThings, Apple HomeKit', 'https://gucongnghe.com/wp-content/uploads/2018/09/Philips-Hue-Smart-Dimmer-Switch-247x296.jpg', 'Philips', 0),
(49, 'Philips Hue GU10 Downlight, giải pháp đèn âm trần thông minh', '490000.00', 'denthongminh', 'Giải pháp đèn âm trần thông minh Philips Hue Downlight, sử dụng đèn GU10 với các loại ánh sáng trắng; ánh sáng trắng vàng thay đổi được; hoặc ánh sáng 16 triệu màu Điều khiển từ xa, lên lịch tắt bật, điều chỉnh sáng, tối, điều khiển theo kịch bản Kích thước lỗ khoét: 70 – 80 mm hoặc 90 mm tùy chóa đèn Đồng bộ ánh sáng theo nhạc với Spotify Thời gian hoạt động lên tới 15,000 giờ, số lần bật tắt 50,000 lần Điều khiển bằng giọng nói sử dụng Amazon Alexa, Apple HomeKit, hoặc Google Assistant (cần phải có Philips Hue Hub). Giao thức kết nối Bluetooth và Zigbee', 'https://gucongnghe.com/wp-content/uploads/2020/09/Den-LED-downlight-Philips-Hue-GU10-247x296.jpg', 'Philips', 0),
(50, 'Đèn LED dây nối dài RGB Tuya, dài 5m, 16 triệu màu', '220000.00', 'denthongminh', 'Đèn LED dây nối dài RGB 16 triệu màu thông minh Tuya  Chiều dài dây 5m, mở rộng cho dây đèn LED RGB Tuya Điều khiển đèn từ xa, lên lịch tắt bật, điều chỉnh sáng, tối và thay đổi màu sắc Ứng dụng trong đèn trang trí, đèn hắt trần, sofa, kệ TV.. Chế độ tự động điều chỉnh đèn theo tiếng nhạc Điều khiển giọng nói với Google Assistant, Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2020/10/Tuya-LED-RGB-Extension-1-247x296.jpg', 'Tuya', 0),
(56, 'Blink, camera dùng Pin AA, HD 720P, Lưu Cloud Amazon miễn phí', '2490000.00', 'camera', 'Wyze Cam Outdoor – Camera an ninh ngoài trời, dùng pin tới 6 tháng mỗi lần sạc** Chống nước chuẩn IP65, nói chuyện 2 chiều Thiết kế nhỏ gọn, hoàn toàn không dây, dễ lắp đặt Video chất lượng Full HD 1080p, hình ảnh sắc nét cả ngày lẫn đêm Theo dõi, quan sát ngôi nhà và nhận thông báo trên điện thoại dù ở bất kỳ đâu Hỗ trợ lưu cả trên cloud miễn phí và lưu cục bộ với thẻ microSD Ghi lại video chuyển động vào thẻ nhớ ngay cả khi không có Internet Tương thích Google Home và Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2019/05/Camera-an-ninh-Blink-247x296.jpg', 'Blink', 0),
(57, 'Blink XT2, camera ngoài trời dùng Pin AA, Full HD 1080P, Lưu Cloud Amazon miễn phí', '1230000.00', 'camera', 'Wyze Cam Outdoor – Camera an ninh ngoài trời, dùng pin tới 6 tháng mỗi lần sạc** Chống nước chuẩn IP65, nói chuyện 2 chiều Thiết kế nhỏ gọn, hoàn toàn không dây, dễ lắp đặt Video chất lượng Full HD 1080p, hình ảnh sắc nét cả ngày lẫn đêm Theo dõi, quan sát ngôi nhà và nhận thông báo trên điện thoại dù ở bất kỳ đâu Hỗ trợ lưu cả trên cloud miễn phí và lưu cục bộ với thẻ microSD Ghi lại video chuyển động vào thẻ nhớ ngay cả khi không có Internet Tương thích Google Home và Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2019/09/Blink-XT2-247x296.jpg', 'Blink', 0),
(58, 'Ring Spotlight Cam, Camera không dây dùng pin, nói chuyện 2 chiều, tích hợp đèn LED, chuông báo động', '1700000.00', 'camera', 'Wyze Cam Outdoor – Camera an ninh ngoài trời, dùng pin tới 6 tháng mỗi lần sạc** Chống nước chuẩn IP65, nói chuyện 2 chiều Thiết kế nhỏ gọn, hoàn toàn không dây, dễ lắp đặt Video chất lượng Full HD 1080p, hình ảnh sắc nét cả ngày lẫn đêm Theo dõi, quan sát ngôi nhà và nhận thông báo trên điện thoại dù ở bất kỳ đâu Hỗ trợ lưu cả trên cloud miễn phí và lưu cục bộ với thẻ microSD Ghi lại video chuyển động vào thẻ nhớ ngay cả khi không có Internet Tương thích Google Home và Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2018/11/Ring-Spotlight-Cam-247x296.jpg', 'Ring Spotlight', 0),
(59, 'Ring Floodlight Cam, Camera ngoài trời tích hợp đèn LED siêu sáng, chuông báo động', '2490000.00', 'camera', 'Wyze Cam Outdoor – Camera an ninh ngoài trời, dùng pin tới 6 tháng mỗi lần sạc** Chống nước chuẩn IP65, nói chuyện 2 chiều Thiết kế nhỏ gọn, hoàn toàn không dây, dễ lắp đặt Video chất lượng Full HD 1080p, hình ảnh sắc nét cả ngày lẫn đêm Theo dõi, quan sát ngôi nhà và nhận thông báo trên điện thoại dù ở bất kỳ đâu Hỗ trợ lưu cả trên cloud miễn phí và lưu cục bộ với thẻ microSD Ghi lại video chuyển động vào thẻ nhớ ngay cả khi không có Internet Tương thích Google Home và Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2020/07/Ring-Floodlight-Camera-247x296.jpg', 'Ring Floodlight', 0),
(60, 'Amazon Cloud Cam, camera thông minh Full HD 1080p, hỗ trợ Alexa, lưu Cloud Amazon miễn phí', '3990000.00', 'camera', 'Wyze Cam Outdoor – Camera an ninh ngoài trời, dùng pin tới 6 tháng mỗi lần sạc** Chống nước chuẩn IP65, nói chuyện 2 chiều Thiết kế nhỏ gọn, hoàn toàn không dây, dễ lắp đặt Video chất lượng Full HD 1080p, hình ảnh sắc nét cả ngày lẫn đêm Theo dõi, quan sát ngôi nhà và nhận thông báo trên điện thoại dù ở bất kỳ đâu Hỗ trợ lưu cả trên cloud miễn phí và lưu cục bộ với thẻ microSD Ghi lại video chuyển động vào thẻ nhớ ngay cả khi không có Internet Tương thích Google Home và Amazon Alexa', 'https://gucongnghe.com/wp-content/uploads/2019/09/Amazon-Cloud-Cam-247x296.jpg', 'Amazon', 0),
(61, 'Camera 2K Eufy Security Camera T84001W1, tích hợp còi báo động\r\n				', '998000.00', 'camera', 'Eufy indoor T8400 2K Tích hợp công nghệ AI tiên tiến AI thông minh có thể nhận diện giữa người và thú cưng, tránh đưa ra các cảnh báo sai, làm phiền công việc của chủ nhà. Bên cạnh đó, nó cũng sẽ tự đánh giá mức độ tiếng ồn phát ra, khi thấy cần thiết nó sẽ thông báo cho bạn ngay.', '//product.hstatic.net/200000295422/product/new_0256_t8400--800x800_1200x_32d40ade32c4435aacf27fe3cdb28dc9_grande.jpg', 'eufy ', 0),
(62, 'Camera 360 Xiaomi Mi Home Security 360 2K  - Phân phối chính hãng\r\n				', '1190000.00', 'camera', 'Camera ezviz C6W xoay 360 độ CS-C6W Với diện mạo khác biệt, camera EZVIZ C6W sẽ giúp bạn bảo vệ ngôi nhà theo phong cách hoàn toàn mới: không chỉ chuyên nghiệp và an toàn mà còn thật Kool. Thanh lịch và linh hoạt, camera Wifi C6W là tất cả sự bảo vệ bạn cần cho một ngôi nhà rộng lớn. Camera ghi lại ở độ phân giải 2K và tự động theo dõi chuyển động ở chế độ thu phóng gấp 4 lần để đảm bảo không có gì thoát khỏi tầm mắt.', '//product.hstatic.net/200000295422/product/new_0266_camera-thong-minh-xiaomi-ptz-phien-ban-2k_425a0143ea1947768bcf3037b4a91186_grande.jpg', 'Xiaomi', 0),
(63, 'Camera ezviz C6W xoay 360 độ\r\n				', '1349000.00', 'camera', 'Camera ezviz C6W xoay 360 độ CS-C6W Với diện mạo khác biệt, camera EZVIZ C6W sẽ giúp bạn bảo vệ ngôi nhà theo phong cách hoàn toàn mới: không chỉ chuyên nghiệp và an toàn mà còn thật Kool. Thanh lịch và linh hoạt, camera Wifi C6W là tất cả sự bảo vệ bạn cần cho một ngôi nhà rộng lớn. Camera ghi lại ở độ phân giải 2K và tự động theo dõi chuyển động ở chế độ thu phóng gấp 4 lần để đảm bảo không có gì thoát khỏi tầm mắt.', '//product.hstatic.net/200000295422/product/new_0317_6411-camera-wife-ezviz-c6w-4mp-quay-quet-360-do-11_16b53885fd444b4cae7ec2cf17c5fe95_grande.jpg', 'ezviz', 0);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hangsx`
--
ALTER TABLE `hangsx`
  ADD PRIMARY KEY (`masx`);

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
-- AUTO_INCREMENT for table `hangsx`
--
ALTER TABLE `hangsx`
  MODIFY `masx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
