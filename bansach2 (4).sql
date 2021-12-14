-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 05:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bansach2`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `authorid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `authorname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authordescription` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`authorid`, `authorname`, `authordescription`) VALUES
(000001, 'Chika Umino', 'Umino Chica là Chica Umino'),
(000002, 'Yoshitoki Oima', 'Yoshitoki Ōima (大今 良時, Ōima Yoshitoki, born March 15, 1989) is a Japanese manga artist and writer, best known for her manga series A Silent Voice.'),
(000003, 'Nguyễn Nhật Ánh', 'Ông được biết đến qua nhiều tác phẩm văn học về đề tài tuổi mới lớn, các tác phẩm của ông rất được độc giả ưa chuộng và nhiều tác phẩm đã được chuyển thể thành phim'),
(000004, 'Nguyễn Ánh', 'Nguyễn Ánh là một nhà văn thu hút được hầu hết sự chú ý của giới trẻ Việt Nam'),
(000005, 'Tố Hữu', 'Tố Hữu là nhà văn lỗi lạc thời cách mạng Việt Nam'),
(000006, 'Bộ Giáo dục', 'Bộ Giáo dục và Đào tạo là cơ quan của Chính phủ nước Cộng hòa xã hội chủ nghĩa Việt Nam, thực hiện chức năng quản lý nhà nước đối với giáo dục mầm non, giáo dục phổ thông, trung cấp sư phạm, cao đẳng sư phạm, giáo dục đại học và các cơ sở giáo dục khác '),
(000007, 'Hồ Chí Minh', 'Sau nhiều năm hoạt động trong nước và ngoài nước, Hồ Chí Minh đã dùng rất nhiều bí danh và tên gọi khác nhau để đánh lạc hướng kẻ thù. Tuy nhiên, danh xưng Hồ Chí Minh được chọn là tên gọi chính thức của ông và được nhiều người chấp nhận nhất'),
(000008, 'Dale Carnegie', 'à một nhà văn và nhà thuyết trình Mỹ và là người phát triển các lớp tự giáo dục, nghệ thuật bán hàng, huấn luyện đoàn thể, nói trước công chúng và các kỹ năng giao tiếp giữa mọi người'),
(000009, 'Vũ Trọng Phụng', 'là một nhà văn, nhà báo nổi tiếng của Việt Nam vào đầu thế kỷ 20'),
(000010, 'Gotouge Koyoharu', 'mangaka nổi lên với bộ truyện thanh gươm diệt quỷ'),
(000015, 'Shinkai Makoto', 'Shinkai Makoto (新海誠 Tân Hải Thành?), tên khai sinh là Nītsu Makoto (新津誠 Tân Tân Thành?), còn được biết đến với biệt danh phù thủy của những nỗi buồn, là một nhà làm phim, tiểu thuyết gia, đạo diễn'),
(000016, 'Reki Kawahara', 'Tác giả nổi tiếng với thế giới ảo');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `bookname` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bookimageurl` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bookdescription` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bookpages` int(11) DEFAULT 0,
  `bookweight` float DEFAULT 0,
  `releasedate` date DEFAULT NULL,
  `viewcount` mediumint(9) DEFAULT 0,
  `purchasedcount` mediumint(9) DEFAULT 0,
  `authorid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `categoryid` int(2) UNSIGNED ZEROFILL NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `price` decimal(10,0) UNSIGNED DEFAULT 0,
  `timestamp` datetime DEFAULT NULL,
  `publisher` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bookbinding` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Bìa cứng, Bìa rời, Bìa mềm',
  `booktype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `bookname`, `bookimageurl`, `bookdescription`, `bookpages`, `bookweight`, `releasedate`, `viewcount`, `purchasedcount`, `authorid`, `categoryid`, `quantity`, `price`, `timestamp`, `publisher`, `bookbinding`, `booktype`) VALUES
(000004, 'Ba Ngày Hạnh Phúc', 'img/products/bank.jpg', '', 127, 300, '2019-04-12', 354, 112, 000006, 01, 0, '83000', '2021-11-30 10:54:37', '', '', 1),
(000009, 'Gửi Em Người Bất Tử 02', 'img/products/bank.jpg', 'Một \"thực thể\" bất tử được gửi đến trái đất, có thể bắt chước hình dạng của mọi sinh vật đã chết. Thế rồi, trong khi lần mò tìm hiểu mọi thứ xung quanh mình, \"nó\" tìm thấy một cậu bé... Điều gì sẽ xảy đến với \"nó\", \"nó\" sẽ đối mặt với những trải nghiệm gì, khi mà cuộc đời của \"nó\" kéo dài vĩnh viễn.', 186, 200, '2019-01-03', 242, 642, 000002, 01, 213, '19000', '2020-07-11 10:31:55', NULL, NULL, 1),
(000011, 'Sword Art Online 002', 'img/products/bank.jpg', 'Kirito, nhân vật chính, là người đầu tiên trong số game thủ SAO biết chấp nhận chân tướng ấy. Và ở hiện trường của trò chơi - một thành nổi khổng lồ mang tên Aincrad, cậu ta dần dà hiển lộ được tài năng trong vai trò game thủ solo. Kirito vốn định duy trì tình trạng chiến đấu đơn độc đầy mạo hiểm đó cho đến khi đạt mục tiêu là vươn tới tầng cao nhất để phá đảo game, nhưng sau lời mời giàu sức thuyết phục của nữ kiếm sĩ Asuna, cậu quyết định sát cánh cùng cô. Cuộc gặp gỡ ấy đã tạo nên bước ngoặt có thể gọi là định mệnh đối với Kirito…', 568, 350, '2015-01-03', 622, 146, 000016, 07, 273, '100000', '2020-07-11 10:32:55', NULL, NULL, 1),
(000012, 'Sword Art Online 003', 'img/products/bank.jpg', 'Kirito, nhân vật chính, là người đầu tiên trong số game thủ SAO biết chấp nhận chân tướng ấy. Và ở hiện trường của trò chơi - một thành nổi khổng lồ mang tên Aincrad, cậu ta dần dà hiển lộ được tài năng trong vai trò game thủ solo. Kirito vốn định duy trì tình trạng chiến đấu đơn độc đầy mạo hiểm đó cho đến khi đạt mục tiêu là vươn tới tầng cao nhất để phá đảo game, nhưng sau lời mời giàu sức thuyết phục của nữ kiếm sĩ Asuna, cậu quyết định sát cánh cùng cô. Cuộc gặp gỡ ấy đã tạo nên bước ngoặt có thể gọi là định mệnh đối với Kirito…', 498, 230, '2016-02-03', 252, 516, 000016, 07, 613, '90000', '2020-07-11 10:33:55', NULL, NULL, 1),
(000013, 'Sword Art Online 004', 'img/products/bank.jpg', 'Kirito, nhân vật chính, là người đầu tiên trong số game thủ SAO biết chấp nhận chân tướng ấy. Và ở hiện trường của trò chơi - một thành nổi khổng lồ mang tên Aincrad, cậu ta dần dà hiển lộ được tài năng trong vai trò game thủ solo. Kirito vốn định duy trì tình trạng chiến đấu đơn độc đầy mạo hiểm đó cho đến khi đạt mục tiêu là vươn tới tầng cao nhất để phá đảo game, nhưng sau lời mời giàu sức thuyết phục của nữ kiếm sĩ Asuna, cậu quyết định sát cánh cùng cô. Cuộc gặp gỡ ấy đã tạo nên bước ngoặt có thể gọi là định mệnh đối với Kirito…', 538, 300, '2017-03-04', 924, 265, 000016, 07, 713, '100000', '2020-07-11 10:41:55', NULL, NULL, 1),
(000014, 'Sword Art Online 005', 'img/products/bank.jpg', 'Kirito, nhân vật chính, là người đầu tiên trong số game thủ SAO biết chấp nhận chân tướng ấy. Và ở hiện trường của trò chơi - một thành nổi khổng lồ mang tên Aincrad, cậu ta dần dà hiển lộ được tài năng trong vai trò game thủ solo. Kirito vốn định duy trì tình trạng chiến đấu đơn độc đầy mạo hiểm đó cho đến khi đạt mục tiêu là vươn tới tầng cao nhất để phá đảo game, nhưng sau lời mời giàu sức thuyết phục của nữ kiếm sĩ Asuna, cậu quyết định sát cánh cùng cô. Cuộc gặp gỡ ấy đã tạo nên bước ngoặt có thể gọi là định mệnh đối với Kirito…', 738, 600, '2018-04-05', 2212, 512, 000016, 07, 253, '120000', '2021-11-30 10:46:05', '', '', 1),
(000015, 'Sword Art Online 006', 'img/products/bank.jpg', 'Kirito, nhân vật chính, là người đầu tiên trong số game thủ SAO biết chấp nhận chân tướng ấy. Và ở hiện trường của trò chơi - một thành nổi khổng lồ mang tên Aincrad, cậu ta dần dà hiển lộ được tài năng trong vai trò game thủ solo. Kirito vốn định duy trì tình trạng chiến đấu đơn độc đầy mạo hiểm đó cho đến khi đạt mục tiêu là vươn tới tầng cao nhất để phá đảo game, nhưng sau lời mời giàu sức thuyết phục của nữ kiếm sĩ Asuna, cậu quyết định sát cánh cùng cô. Cuộc gặp gỡ ấy đã tạo nên bước ngoặt có thể gọi là định mệnh đối với Kirito…', 868, 800, '2019-05-06', 2275, 214, 000016, 07, 513, '150000', '2020-07-11 10:52:55', NULL, NULL, 1),
(000016, 'Mắt Biếc', 'img/products/combo-an-xanh-song-lanh.jpg', 'Mắt biếc là tiểu thuyết của nhà văn Nguyễn Nhật Ánh trong loạt truyện viết về tình yêu thanh thiếu niên của tác giả này cùng với Thằng quỷ nhỏ, Cô gái đến từ hôm qua', 124, 200, '2017-05-12', 463, 413, 000001, 01, 32, '20000', '2021-11-30 10:55:05', '', '', 1),
(000017, 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh', 'img/products/bank.jpg', 'Là một trong những quyển sách Việt Nam bán chạy nhất năm 2010, Tôi thấy hoa vàng trên cỏ xanh đã được tái bản ngay trong ngày phát hành đầu tiên, với tổng số bản in lên đến hơn 20.000 bản', 378, 200, '2010-09-12', 321, 123, 000003, 01, 334, '1000001', '2021-11-22 17:55:23', '', '', 1),
(000018, 'Cho tôi xin một vé đi tuổi thơ', 'img/products/bank.jpg', 'Là truyện dài của nhà văn Nguyễn Nhật Ánh. Tác phẩm là một trong những sáng tác thành công nhất của ông và nhận được Giải thưởng Văn học ASEAN của năm 2010.', 218, 200, '2008-02-01', 321, 123, 000003, 01, 334, '100000', '2020-07-11 10:52:55', NULL, NULL, 2),
(000019, 'Tôi Là Bêtô', 'img/products/bank.jpg', 'Với Tôi là Bêtô, đây là lần đầu tiên ông viết một tác phẩm qua lời kể của một chú cún. Trong thiên truyện này, thế giới được nhìn một cách trong trẻo nhưng lồng trong đó không thiếu những ý tứ thâm trầm, khiến người đọc phải ngẫm nghĩ.', 158, 200, '2007-04-04', 321, 123, 000003, 05, 222, '100000', '2020-07-11 10:52:55', NULL, NULL, 2),
(000020, 'Con chó nhỏ mang giỏ hoa hồng', 'img/products/bank.jpg', 'Những con chó trong truyện này được đặt tên theo các nhân vật trong tác phẩm Chuyện xứ Lang Biang của tôi, trừ con Pig', 213, 200, '2016-05-15', 321, 123, 000003, 05, 120, '100000', '2020-07-11 10:52:55', NULL, NULL, 2),
(000021, 'Nhật Ký Trong Tù', 'img/products/bank.jpg', 'Nhật ký trong tù không chỉ ghi những cảnh sinh hoạt trong tù, mà còn có ý nghĩa tố cáo chế độ nhà tù khắc nghiệt của chính quyền Tưởng Giới Thạch.', 64, 150, '1943-10-09', 124, 40, 000007, 08, 80, '100000', '2020-07-11 10:52:55', NULL, NULL, 2),
(000022, 'Bản án chế độ thực dân Pháp', 'img/products/bank.jpg', 'Bản án chế độ thực dân Pháp (tiếng Pháp: Le Procès de la colonisation française) là một tác phẩm chính luận do Nguyễn Ái Quốc viết bằng tiếng Pháp và được xuất bản năm 1925–1926 trên một tờ báo của Quốc tế Cộng sản có tên Imprékor', 64, 150, '1912-04-15', 124, 40, 000007, 06, 80, '100000', '2020-07-11 10:52:55', NULL, NULL, 2),
(000023, 'Số Đỏ', 'img/products/bank.jpg', 'Nhân vật chính của Số đỏ là Xuân - biệt danh là Xuân Tóc đỏ, từ chỗ là một kẻ bị coi là hạ lưu, bỗng nhảy lên tầng lớp danh giá của xã hội nhờ trào lưu Âu hóa của giới tiểu tư sản Hà Nội khi đó', 235, 400, '1936-10-03', 1223, 349, 000009, 01, 2000, '159000', '2020-07-11 10:52:55', NULL, NULL, 2),
(000024, 'Làm Đĩ', 'img/products/bank.jpg', 'Làm đĩ được viết dưới dạng tự truyện của nhân vật chính tên Huyền. Sinh ra trong một gia đình có cha làm việc cho Tây nhưng lại cực kỳ hủ bại, từ nhỏ Huyền đã luôn bị người lớn lảng tránh và nạt nộ khi cô bé thắc mắc về những vấn đề giới tính.', 244, 350, '1936-05-22', 142, 39, 000009, 01, 107, '39000', '2020-07-11 10:52:55', NULL, NULL, 2),
(000025, 'Đường Mây Trong Cõi Mộng', 'img/products/duong-may-trong-coi-mong.jpg', 'Từ ấy gồm 71 bài thơ tập hợp trong 3 phần tương ứng với ba giai đoạn lịch sử: Máu lửa (27 bài), Xiềng xích (30 bài) và Giải phóng (14 bài), ghi lại một thời kỳ lịch sử cách mạng của nhân dân Việt Nam, thông qua chặng đường hoạt động 10 năm của người thanh niên cộng sản Tố Hữu', 175, 220, '1959-06-15', 122, 22, 000005, 08, 72, '42000', '2021-11-30 10:25:55', '', '', 3),
(000026, 'Muôn Kiếp Nhân Sinh', 'img/products/muon-kiep-nhan-sinh.jpg', 'Tác phẩm được đánh giá là cuốn sách đầu tiên và hay nhất trong thể loại này, có ảnh hưởng thay đổi cuộc đời đối với hàng triệu người trên thế giới.', 322, 400, '1936-10-12', 2021, 348, 000008, 07, 1500, '79000', '2021-11-30 10:25:17', '', '', 3),
(000027, 'Đường Mây Trên Đất Hoa', 'img/products/duong-may-tren-dat-hoa.jpg', 'Quyển sách này là một cẩm nang về cách làm việc và vui sống không bị lo âu.', 306, 400, '1948-03-08', 1898, 421, 000008, 07, 400, '79000', '2021-11-30 10:24:44', '', '', 3),
(000031, 'Ngoại Giao Của Chính Quyền Sài Gòn', 'img/products/ngoai-giao-cua-chinh-quyen-sai-gon.jpg', 'Vào thời Taisho, có một cậu bé bán than với tấm lòng nhân hậu tên Tanjiro. Những ngày yên bình đã chẳng còn khi Quỷ đến tàn sát cả gia đình cậu, chỉ duy nhất người em gái Nezuko còn sống sót nhưng lại bị biến thành Quỷ.', 188, 200, '2020-01-01', 1881, 420, 000010, 09, 349, '39000', '2021-11-30 10:23:56', '', '', 3),
(000044, 'Từng  bước chân nở hoa : Khi câu kình bước tớ', 'img/products/tung-buoc-chan-no-hoa.jpg', '', 398, 700, '2012-12-19', 200, 100, 000001, 20, 200, '100000', '2021-11-30 10:30:07', '', '', 4),
(000045, 'Cám  ơn vì đã được thương', 'img/products/cam-on-vi-da-duoc-thuong.jpg', '', 398, 700, '2021-12-15', 200, 100, 000001, 20, 2923, '769000', '2021-11-30 10:31:13', '', '', 4),
(000046, 'Hào quan của vua Gia Long trong mắt Michel Ga', 'img/products/vua-gia-long.jpg', '', 398, 187, '2017-08-07', 111, 123, 000006, 20, 200, '100000', '2021-11-30 10:44:31', '', '', 4),
(000047, 'Suối nguồn và cái tối hiện trong từng cá thể', 'img/products/suoi-nguon-va-cai-toi-trong-tung-ca-the.jpg', '', 398, 187, '2020-12-02', 2001, 100, 000001, 20, 12, '125000', '2021-11-30 10:42:58', '', '', 4),
(000048, 'Đại dịch trên  những con đường tơ lụa', 'img/products/dai-dich-tren-con-duong-to-lua.jpg', '', 3981, 700, '2021-12-21', 200, 100, 000005, 20, 2001, '100000', '2021-11-30 10:41:07', '', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryid` int(2) UNSIGNED ZEROFILL NOT NULL,
  `categoryname` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryid`, `categoryname`) VALUES
(01, 'Sách Kinh Tế - Kĩ Năng'),
(05, 'Sách Văn Học Việt Nam'),
(06, 'Sách Thiếu Nhi'),
(07, 'Sách Giáo Dục - Gia Đình'),
(08, 'Sách Lịch Sử'),
(09, 'Sách Văn Hóa - Nghệ Thuật'),
(10, 'Sách Khoa Học - Triết Học'),
(11, 'Sách Tâm Linh - Tôn Giáo'),
(13, 'Sách Y Học - Thực Dưỡng'),
(19, 'Sách Giáo Khoa'),
(20, 'Sách hay nên đọc');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `userid` int(6) UNSIGNED ZEROFILL DEFAULT NULL,
  `orderstatus` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalmoney` double NOT NULL DEFAULT 0,
  `receivername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `userid`, `orderstatus`, `timestamp`, `address`, `totalmoney`, `receivername`, `phone`) VALUES
(000013, 000009, '2', '2021-11-24 22:45:50', '144', 90000, 'viet ', '0768570252'),
(000014, 000009, '1', '2021-11-24 22:47:29', '144', 90000, 'viet ', '0768570252'),
(000015, 000009, '1', '2021-11-24 22:48:33', '144', 90000, 'viet ', '0768570252'),
(000016, 000009, '2', '2021-11-25 21:50:33', '144', 400000, 'viet ', '0768570252'),
(000017, 000009, '', '2021-11-25 22:49:11', '144', 419000, 'viet ', '0768570252'),
(000018, 000009, '', '2021-11-26 09:08:39', '144', 0, 'viet ', '0768570252'),
(000019, 000009, '1', '2021-11-26 09:09:40', '144', 90000, 'viet ', '0768570252'),
(000020, 000009, '1', '2021-11-26 09:12:40', '144', 38000, 'viet ', '0768570252');

-- --------------------------------------------------------

--
-- Table structure for table `ordersdetails`
--

CREATE TABLE `ordersdetails` (
  `qtyordered` int(11) NOT NULL,
  `amount` double NOT NULL,
  `orderid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `bookid` int(6) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `ordersdetails`
--

INSERT INTO `ordersdetails` (`qtyordered`, `amount`, `orderid`, `bookid`) VALUES
(1, 90000, 000013, 000012),
(1, 90000, 000014, 000012),
(1, 90000, 000015, 000012),
(4, 100000, 000016, 000013),
(4, 100000, 000017, 000013),
(1, 19000, 000017, 000009),
(1, 90000, 000019, 000012),
(2, 19000, 000020, 000009),
(1, 100000, 000021, 000011);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isadmin` int(4) NOT NULL DEFAULT 0,
  `isdisable` int(4) NOT NULL DEFAULT 0,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `male` int(4) NOT NULL DEFAULT 1,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`, `username`, `isadmin`, `isdisable`, `fullname`, `phone`, `email`, `male`, `address`, `dob`) VALUES
(000001, '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 0, '', '0779418922', 'hoangvietnguyen2602@gmail.com', 0, 'thôn Vinh Vệ', '0000-00-00'),
(000002, '21232f297a57a5a743894a0e4a801fc3', 'hoaisan', 0, 0, 'Ho Hoai San', '0123456789', 'hahaha@gmail.com', 1, '34 Nguyễn Chí Thanh 8', '0000-00-00'),
(000009, 'a4e614247683e150b2b9812a8fa33a71', 'viet', 1, 0, 'Nguyễn Hoàng Việt', '0768570252', 'hoangvietnguyen2602@gmail.com', 1, '144', '0000-00-00'),
(000019, 'e10adc3949ba59abbe56e057f20f883e', 'admin123', 0, 0, 'Nguyễn Hoàng Việt1', '07685702523', 'hoangvietnguyen123@gmail.com', 1, '', '0000-00-00'),
(000020, 'e10adc3949ba59abbe56e057f20f883e', 'admin12345', 0, 0, 'Nguyễn Hoàng Việt123', '0768570252', 'hoangvietnguyen2@gmail.com', 1, '', '0000-00-00'),
(000021, 'e10adc3949ba59abbe56e057f20f883e', 'vietz234', 0, 0, 'vietz', '07685702522', 'hoangvietnguyenz@gmail.com', 1, '', '0000-00-00'),
(000022, 'e10adc3949ba59abbe56e057f20f883e', 'viet2345', 0, 0, 'Nguyễn Hoàng Việt', '0768570252', 'hoangvietnguyen26022@gmail.com', 1, '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`authorid`) USING BTREE;

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`) USING BTREE,
  ADD KEY `fkIdx_37` (`authorid`) USING BTREE,
  ADD KEY `fkIdx_40` (`categoryid`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryid`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`) USING BTREE,
  ADD KEY `fkIdx_58` (`userid`) USING BTREE;

--
-- Indexes for table `ordersdetails`
--
ALTER TABLE `ordersdetails`
  ADD KEY `fkIdx_87` (`orderid`) USING BTREE,
  ADD KEY `fkIdx_90` (`bookid`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `authorid` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryid` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `FK_37` FOREIGN KEY (`authorid`) REFERENCES `authors` (`authorid`),
  ADD CONSTRAINT `FK_40` FOREIGN KEY (`categoryid`) REFERENCES `categories` (`categoryid`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `tk_usersid` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `ordersdetails`
--
ALTER TABLE `ordersdetails`
  ADD CONSTRAINT `FK_90` FOREIGN KEY (`bookid`) REFERENCES `books` (`bookid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
