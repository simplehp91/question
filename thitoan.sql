-- phpMyAdmin SQL Dump
-- version 3.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2013 at 07:09 PM
-- Server version: 5.5.15
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thitoan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cauhoi`
--

CREATE TABLE IF NOT EXISTS `tbl_cauhoi` (
  `ma_ch` int(10) NOT NULL AUTO_INCREMENT,
  `noidung` text CHARACTER SET utf8 NOT NULL,
  `lc1` varchar(80) CHARACTER SET utf8 NOT NULL,
  `lc2` varchar(80) CHARACTER SET utf8 NOT NULL,
  `lc3` varchar(80) CHARACTER SET utf8 NOT NULL,
  `lc4` varchar(80) CHARACTER SET utf8 NOT NULL,
  `dapan` varchar(80) CHARACTER SET utf8 NOT NULL,
  `made` int(10) NOT NULL,
  `diem` double NOT NULL,
  `traloi` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  PRIMARY KEY (`ma_ch`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_cauhoi`
--

INSERT INTO `tbl_cauhoi` (`ma_ch`, `noidung`, `lc1`, `lc2`, `lc3`, `lc4`, `dapan`, `made`, `diem`, `traloi`, `trangthai`) VALUES
(5, '<p>&nbsp;Cho tập hợp A = {3; 7}. C&aacute;ch viết n&agrave;o sau đ&acirc;y l&agrave; đ&uacute;ng?</p>', ' {3} ∈ A', '3 ⊂ A ', '{7} ⊂ A ', ' A ⊂ {7}', '3 ⊂ A ', 2, 0, '', 1),
(6, '<p>Số n&agrave;o sau đ&acirc;y chia hết cho cả 2 v&agrave; 3?</p>', '32', '42', '52', '62', '62', 2, 0, '', 1),
(7, '<p>Số n&agrave;o sau đ&acirc;y l&agrave; ước chung của 24 v&agrave; 30 ?</p>', '8', '5', '4', '3', '4', 2, 0, '', 1),
(8, '<p>&nbsp;Kết quả sắp xếp c&aacute;c số &minus;2; &minus;3; &minus;101; &minus;99 theo thứ tự tăng dần l&agrave;:</p>', ' −2; −3; −99; −101 ', ' −101; −99; −2; −3 ', ' −101; −99; −3; −2 ', ' −99; −101; −2; −3', ' −2; −3; −99; −101 ', 2, 0, '', 1),
(9, '<p>&nbsp;Kết quả của ph&eacute;p t&iacute;nh ( &minus;13) + (&minus;28) l&agrave;:</p>', '-41', '-31', '15', '41', '-31', 2, 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dethi`
--

CREATE TABLE IF NOT EXISTS `tbl_dethi` (
  `made` int(11) NOT NULL AUTO_INCREMENT,
  `tende` varchar(70) CHARACTER SET utf8 NOT NULL,
  `thongtin` text CHARACTER SET utf8 NOT NULL,
  `socau` int(10) NOT NULL,
  `tacgia` varchar(50) CHARACTER SET utf8 NOT NULL,
  `hinhanh` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `khoithi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timer` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`made`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_dethi`
--

INSERT INTO `tbl_dethi` (`made`, `tende`, `thongtin`, `socau`, `tacgia`, `hinhanh`, `khoithi`, `ngaydang`, `timer`) VALUES
(2, 'Thi học kỳ khối 6', 'Đề thi học kỳ khối 6, gồm 10 câu hỏi và thời gian làm bài 15 phút. học sinh chú ý đọc kỹ câu hỏi để làm bài cho tốt', 10, 'gv hiếu', 'de thi khoi 6.jpg', 'K6', '2013/08/10', '15'),
(3, 'Đề thi học kỳ khối 7', 'Đề thi học kỳ khối , gồm 25 câu hỏi và thời gian làm bài 30 phút. học sinh chú ý đọc kỹ câu hỏi để làm bài cho tốt', 25, 'gv hiếu', 'de thi khoi 7.gif', 'K7', '2013/08/10', '30'),
(4, 'Đề thi học kỳ khối 8', 'Đề thi học kỳ khối 8, gồm 25 câu hỏi và thời gian làm bài 30 phút. học sinh chú ý đọc kỹ câu hỏi để làm bài cho tốt', 25, 'gv hiếu', 'de thi khoi 8.jpg', 'K8', '2013/08/10', '30'),
(5, 'Đề thi học kỳ khối 9', 'Đề thi học kỳ khối 9, gồm 20 câu hỏi và thời gian làm bài 25 phút. học sinh chú ý đọc kỹ câu hỏi để làm bài cho tốt', 20, 'gv hiếu', 'de thi khoi 9.jpg', 'K9', '2013/08/10', '25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hocsinh`
--

CREATE TABLE IF NOT EXISTS `tbl_hocsinh` (
  `idhs` varchar(20) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `ngaysinh` varchar(100) NOT NULL,
  `gioitinh` varchar(100) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `khoi` varchar(50) NOT NULL,
  `lop` varchar(50) NOT NULL,
  PRIMARY KEY (`idhs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_hocsinh`
--

INSERT INTO `tbl_hocsinh` (`idhs`, `hoten`, `pass`, `ngaysinh`, `gioitinh`, `diachi`, `khoi`, `lop`) VALUES
('601', 'Trần Văn Mi', '220466675e31b9d20c051d5e57974150', '1996-2-3', 'Nam', 'Đồng Hới - Quảng Bình', 'K6', '6A'),
('602', 'Lê Thị Hồng Nhung', '220466675e31b9d20c051d5e57974150', '1997-9-12', 'Nữ', 'Ba Đồn - Quảng Bình', 'K6', '6B'),
('701', 'Lê Thị Vi', '220466675e31b9d20c051d5e57974150', '2000-5-25', 'Nữ', 'Hoàn Lão - Bố Trạch - Quảng Bình', 'K7', '7A'),
('702', 'Dương Văn Định', '220466675e31b9d20c051d5e57974150', '1996-8-3', 'Nam', 'Hòa Trạch - Bố Trạch - Quảng Bình', 'K7', '7A'),
('801', 'Hoàng Văn Bách', '220466675e31b9d20c051d5e57974150', '1994-5-22', 'Nam', 'Phong Điền - Thừa Thiên Huế', 'K8', '8A'),
('802', 'Lê Thị Hương', '220466675e31b9d20c051d5e57974150', '1997-9-4', 'Nữ', 'Tiểu Khu 7 - Hoàn Lão - BT- QB', 'K8', '8A'),
('901', 'Hoàng Văn Hiếu', '3b5484e60f897c93d8090fc2d13e34c8', '1996-5-12', 'Nam', 'Tây Trạch - Bố Trạch - Quảng Bình', 'K9', '9A'),
('902', 'Nguyễn Văn Bình', '220466675e31b9d20c051d5e57974150', '1995-3-5', 'Nam', 'Hoàn Trạch - Bố Trạch - Quảng Bình', 'K9', '9B'),
('909', 'Hoàng Minh Hiếu', '220466675e31b9d20c051d5e57974150', '1995-10-15', 'Nam', 'Nam Lý - Đồng Hới - Quảng Bình', 'K9', '9A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khoihoc`
--

CREATE TABLE IF NOT EXISTS `tbl_khoihoc` (
  `makhoi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tenkhoi` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`makhoi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_khoihoc`
--

INSERT INTO `tbl_khoihoc` (`makhoi`, `tenkhoi`) VALUES
('K6', 'Khối 6'),
('K7', 'Khối 7'),
('K8', 'Khối 8'),
('K9', 'Khối 9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kqlambai`
--

CREATE TABLE IF NOT EXISTS `tbl_kqlambai` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idhs` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `made` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `socau` int(10) NOT NULL,
  `caudung` int(10) NOT NULL,
  `ketqua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_kqlambai`
--

INSERT INTO `tbl_kqlambai` (`id`, `idhs`, `made`, `socau`, `caudung`, `ketqua`) VALUES
(2, '601', '8', 4, 2, 'Đạt'),
(3, '602', '8', 4, 3, 'Đạt'),
(4, '701', '9', 3, 1, 'Không đạt !'),
(5, '702', '9', 3, 3, 'Đạt'),
(6, '902', '11', 3, 3, 'Đạt'),
(7, '909', '11', 5, 4, 'Đạt'),
(8, '602', '1', 4, 3, 'Đạt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ktbailam`
--

CREATE TABLE IF NOT EXISTS `tbl_ktbailam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idmade` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `iduser` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_ktbailam`
--

INSERT INTO `tbl_ktbailam` (`id`, `idmade`, `iduser`) VALUES
(1, '2', '601');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tomtat` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chitiet` text COLLATE utf8_unicode_ci,
  `hinhanh` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `linhvuc` int(10) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `ngaydang` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=94 ;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `tieude`, `tomtat`, `chitiet`, `hinhanh`, `linhvuc`, `trangthai`, `ngaydang`) VALUES
(91, 'Lịch thi tập trung hết học kỳ II khối 6, 7, 8 ,9', '<p>Lịch thi tập trung hết học kỳ II khối 6, 7, 8 ,9</p>', '', 'hocsinh.jpg', 2, 1, '2013/06/16'),
(92, 'Kinh nghiệm làm bài thi trắc nghiệm', 'Chia sẻ kinh nghiệm làm bài thi trắc nghiệm', '<p class="Normal">Bộ trưởng GD&amp;ĐT Phạm Vũ Luận cho biết đề thi tốt nghiệp sẽ nằm trong chương tr&igrave;nh THPT, nằm nhiều ở lớp 12. Đề thi sẽ được ra một c&aacute;ch căn bản, kh&ocirc;ng đ&aacute;nh đố học sinh. Với những m&ocirc;n khoa học x&atilde; hội - nh&acirc;n văn sẽ ra đề theo hướng mở v&agrave; kh&ocirc;ng y&ecirc;u cầu học sinh phải học thuộc l&ograve;ng m&aacute;y m&oacute;c. V&igrave; vậy, th&iacute; sinh chỉ cần nắm vững kiến thức cơ bản l&agrave; c&oacute; thể dễ d&agrave;ng vượt qua kỳ thi tốt nghiệp THPT.</p>\r\n<p class="Normal">Ngo&agrave;i b&uacute;t, thước, compa, m&aacute;y t&iacute;nh..., năm nay, Bộ Gi&aacute;o dục cho ph&eacute;p th&iacute; sinh được mang thiết bị ghi &acirc;m, ghi h&igrave;nh c&oacute; chức năng thu, kh&ocirc;ng c&oacute; chức năng ph&aacute;t v&agrave;o ph&ograve;ng thi. Tuy nhi&ecirc;n, c&aacute;c loại thiết bị n&agrave;y phải kh&ocirc;ng c&oacute; loa v&agrave; tai nghe, kh&ocirc;ng c&oacute; m&agrave;n h&igrave;nh hiển thị h&igrave;nh ảnh, kh&ocirc;ng c&oacute; bộ phận chức năng truyền th&ocirc;ng tin như Bluetooth, WiFi...</p>\r\n<table style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://vnexpress.net/Files/Subject/3b/be/4f/ae/DSC_5316.jpg" alt="" width="495" height="329" /></td>\r\n</tr>\r\n<tr>\r\n<td class="Image">Th&iacute; sinh chỉ cần nắm vững kiến thức cơ bản sẽ l&agrave;m tốt đề thi tốt nghiệp. Ảnh: <em>Ho&agrave;ng H&agrave;.</em></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal">Khi v&agrave;o ph&ograve;ng thi, th&iacute; sinh cần c&oacute; mặt tại địa điểm thi đ&uacute;ng ng&agrave;y, giờ quy định v&agrave; mang đầy đủ thẻ dự thi, chứng minh nh&acirc;n d&acirc;n. Th&iacute; sinh đến chậm qu&aacute; 15 ph&uacute;t sau khi c&oacute; hiệu lệnh t&iacute;nh giờ l&agrave;m b&agrave;i sẽ kh&ocirc;ng được dự thi. Buổi thi đầu ti&ecirc;n c&aacute;c em phải c&oacute; mặt tại hội đồng thi l&uacute;c 6h để nghe phổ biến quy chế. C&aacute;c buổi thi sau c&oacute; mặt tại hội đồng thi trước giờ nhận đề thi 30 ph&uacute;t.</p>\r\n<p class="Normal">Khi nhận đề thi, th&iacute; sinh cần bỏ một ch&uacute;t thời gian để kiểm tra lại số trang v&agrave; chất lượng c&aacute;c trang in. Nếu ph&aacute;t hiện thấy đề thiếu trang hoặc r&aacute;ch, hỏng, nho&egrave;, mờ phải b&aacute;o c&aacute;o ngay với gi&aacute;m thị ph&ograve;ng thi, chậm nhất 15 ph&uacute;t sau khi ph&aacute;t đề. Th&iacute; sinh chỉ được l&agrave;m b&agrave;i thi bằng một thứ mực, kh&ocirc;ng tẩy x&oacute;a. Phần thi tự chọn chỉ được l&agrave;m b&agrave;i một trong hai phần, nếu l&agrave;m cả th&igrave; sẽ kh&ocirc;ng được chấm phần n&agrave;y.</p>\r\n<p class="Normal">Ri&ecirc;ng đối với phần thi trắc nghiệm th&igrave; chỉ được t&ocirc; ch&igrave; đen ở &ocirc; trả lời, kh&ocirc;ng d&ugrave;ng b&uacute;t mực, b&uacute;t bi hoặc để lại k&yacute; hiệu hiệu ri&ecirc;ng. L&agrave;m xong b&agrave;i thi trắc nghiệm phải ngồi tại chỗ, kh&ocirc;ng nộp trước khi hết giờ l&agrave;m b&agrave;i.</p>', 'trac nghiem.jpg', 3, 1, '2013/06/16'),
(93, 'Điểm thi tốt nghiệp THPT 2013: Dự báo cao hơn năm trước', 'Lãnh đạo ngành giáo dục của một số địa phương đã bắt đầu dự báo tỷ lệ tốt nghiệp THPT của tỉnh mình. ', '<p class="justifyfull" style="text-align: justify;"><strong> L&atilde;nh đạo ng&agrave;nh gi&aacute;o dục của một số địa phương đ&atilde; bắt đầu dự b&aacute;o <a href="http://www.tinmoi.vn/ty-le-tot-nghiep-thpt-ca-nuoc-tang-30-sau-5-nam-01922834.html" target="_blank">tỷ lệ tốt nghiệp THPT </a>của tỉnh m&igrave;nh.</strong></p>\r\n<p class="justifyfull" style="text-align: justify;"><strong>&nbsp;</strong><strong>Điểm thi m&ocirc;n Văn cao</strong></p>\r\n<p class="justifyfull" style="text-align: justify;">Đ&oacute; l&agrave; nhận x&eacute;t của gi&aacute;m khảo B&ugrave;i Thị Nguyệt Hồng (Hội đồng chấm thi tốt nghiệp THPT Nam Định). Theo b&agrave; Nguyệt Hồng, đề thi Văn chạm đến kiến thức trọng t&acirc;m, kỹ năng cơ bản v&agrave; c&oacute; độ mở, ph&aacute;t huy được suy nghĩ của học sinh, lại c&oacute; t&iacute;nh gi&aacute;o dục v&agrave; hướng thiện.<br />Đ&aacute;p &aacute;n v&agrave; ba-rem điểm dễ chấm, dễ vận dụng trong qu&aacute; tr&igrave;nh chấm thi do hướng dẫn từng c&acirc;u cụ thể. Đặc biệt, b&agrave; Nguyệt Hồng n&oacute;i, c&acirc;u nghị luận x&atilde; hội y&ecirc;u cầu b&agrave;y tỏ suy nghĩ của m&igrave;nh về h&agrave;nh động dũng cảm cứu người của học sinh Nguyễn Văn Nam, đ&atilde; l&agrave;m nảy sinh những b&agrave;i văn tốt, c&oacute; những học sinh đ&atilde; l&agrave;m b&agrave;i vượt qua cả đ&aacute;p &aacute;n của Bộ GD-ĐT, với những suy nghĩ, x&uacute;c cảm mới mẻ.<br />Chất lượng b&agrave;i thi m&ocirc;n Văn năm nay, theo c&ocirc; Nguyệt Hồng, tương đối tốt hơn năm trước: mỗi tập b&agrave;i (36 b&agrave;i thi) c&oacute; 1 đến 3 điểm 9; điểm 6-8 nhiều v&agrave; c&oacute; &iacute;t điểm dưới trung b&igrave;nh.<br />Tại điểm chấm thi của Hội đồng thi tỉnh Thanh H&oacute;a, gi&aacute;m khảo m&ocirc;n Văn, b&agrave; Trần Thị Mai cho biết, kết quả bước đầu (tỉnh n&agrave;y đ&atilde; chấm được khoảng 80% b&agrave;i thi): Số b&agrave;i thi m&ocirc;n Văn đạt điểm dưới trung b&igrave;nh chỉ chiếm 1/4 đến 1/5 tổng số b&agrave;i; b&agrave;i đạt điểm từ 5 trở l&ecirc;n chiếm từ 50 đến 70%; c&oacute; một số b&agrave;i đạt điểm 9; c&aacute; biệt c&oacute; một học sinh chỉ đạt 0,25 được l&agrave;m tr&ograve;n th&agrave;nh 0,5 điểm. B&agrave; Trần Thị Mai cho biết: C&acirc;u hỏi thi viết về tấm gương học sinh Nguyễn Văn Nam được viết t&iacute;ch cực v&agrave; cảm động; c&oacute; th&iacute; sinh viết về Nguyễn Văn Nam với sự k&iacute;nh trọng v&agrave; th&acirc;n thiết như một người anh ruột.</p>\r\n<p style="text-align: center;"><img title="Điểm thi tốt nghiệp THPT: Dự b&aacute;o cao hơn năm trước" src="http://media.tinmoi.vn//2013/06/14/tuyensinhdiemthitotnghiep1.jpg" alt="Điểm thi tốt nghiệp THPT: Dự b&aacute;o cao hơn năm trước" width="500" /></p>\r\n<p style="text-align: center;"><span style="color: #0000ff;">Chấm thi tốt nghiệp THPT ở Nam Định</span></p>\r\n<p class="justifyfull" style="text-align: justify;">Th&iacute; sinh n&agrave;y viết: &ldquo;Em cảm thấy m&igrave;nh chưa thực sự xứng đ&aacute;ng l&agrave; em của anh; trong cuộc sống c&oacute; khi thấy người bị vấp ng&atilde;, bị tai nạn hay hỏng xe, em c&ograve;n thờ ơ.<br />Nay đọc về tấm gương của anh, em rất &acirc;n hận&rdquo;. C&oacute; học sinh nhận thấy cuộc sống của m&igrave;nh phải thay đổi từ việc l&agrave;m nhỏ nhất như gi&uacute;p đỡ ch&iacute;nh những người th&acirc;n trong gia đ&igrave;nh (cha mẹ, c&aacute;c em...). C&oacute; th&iacute; sinh c&ograve;n l&agrave;m thơ về Nguyễn Văn Nam... B&agrave; Trần Thị Mai n&oacute;i: &ldquo;Hướng ra đề mở như v&agrave;i năm trở lại đ&acirc;y, c&oacute; t&aacute;c dụng rất lớn. Những năm tới, Bộ GD-ĐT n&ecirc;n mở theo hướng gi&aacute;o dục kỹ năng sống cho học sinh&rdquo;.</p>\r\n<p class="justifyfull" style="text-align: justify;"><strong>Điểm thi m&ocirc;n To&aacute;n cao v&igrave;... đề dễ</strong></p>\r\n<p class="justifyfull" style="text-align: justify;">C&ocirc; Tống Thị Th&uacute;y (Hội đồng chấm thi Nam Định) mi&ecirc;u tả: đề thi s&aacute;t với học sinh n&ecirc;n đa phần th&iacute; sinh l&agrave;m được b&agrave;i ở mức kh&aacute; giỏi; trong ba ng&agrave;y chấm b&agrave;i, chưa c&oacute; b&agrave;i n&agrave;o dưới điểm trung b&igrave;nh; điểm 9-10 chiếm 70%; điểm 5-6 &iacute;t; phổ điểm lớn nhất l&agrave; 8-9-10. Nh&igrave;n chung, c&ocirc; Th&uacute;y nhận x&eacute;t, điểm cao hơn năm ngo&aacute;i.<br />C&ocirc; Phạm Phương Anh, gi&aacute;o vi&ecirc;n chấm thi m&ocirc;n To&aacute;n ở Nam Định cũng cho biết chấm gần 300 b&agrave;i mới c&oacute; 3 điểm dưới trung b&igrave;nh do đề thi... r&acirc;t cơ bản. Tại điểm chấm thi tỉnh Thanh H&oacute;a, gi&aacute;o vi&ecirc;n Vũ Thị Nga chấm thi m&ocirc;n To&aacute;n cũng khẳng định: C&oacute; tới 50-60% b&agrave;i thi m&ocirc;n To&aacute;n đạt điểm 9-10. Theo c&ocirc; Nga c&oacute; thể t&ugrave;y hội đồng m&agrave; điểm cao, điểm thấp kh&aacute;c nhau, nhưng c&oacute; thể điểm thi sẽ cao hơn năm trước.<br />Tỷ lệ tốt nghiệp c&oacute; thể sẽ cao hơn<br />Dự b&aacute;o về tỷ lệ tốt nghiệp, &ocirc;ng Đỗ Anh X&ocirc;, Ph&oacute; GĐ Sở GD-ĐT Nam Định cho biết: Căn cứ v&agrave;o điểm thi, tỷ lệ tốt nghiệp của Nam Định sẽ c&oacute; thể cao hơn năm trước (tỷ lệ n&agrave;y năm 2012 l&agrave; 99,98%). &Ocirc;ng L&yacute; Đại Hồng, Ph&oacute; GĐ Sở GD-ĐT Vĩnh Long cho biết, tỷ lệ tốt nghiệp của tỉnh n&agrave;y năm 2012 l&agrave; 97% v&agrave; ng&agrave;nh GD-ĐT đang phấn đấu để giữ tỷ lệ đ&oacute;. &Ocirc;ng Nguyễn Ngọc H&agrave; - Trưởng Ph&ograve;ng Khảo th&iacute; của Sở GD-ĐT tỉnh Sơn La th&igrave; dự b&aacute;o: Tỷ lệ tốt nghiệp của Sơn La năm nay c&oacute; thể thấp hơn năm ngo&aacute;i (99,7%) do nhiều yếu tố!</p>\r\n<p><span>M&ocirc;n To&aacute;n điểm rất cao do đề thi dễ qu&aacute;! C&oacute; những học sinh l&agrave;m xong b&agrave;i trong chưa đầy 1 tiếng. Một tỉnh học như Thanh H&oacute;a, nhiều tập b&agrave;i thi điểm thấp nhất l&agrave; 5; số điểm 5 trở l&ecirc;n chiếm 99% (m&ocirc;n To&aacute;n); Văn-70% v&agrave; Địa l&yacute; l&agrave; 84% tr&ecirc;n trung b&igrave;nh. Năm ngo&aacute;i, Thanh H&oacute;a c&oacute; tỷ lệ tốt nghiệp hơn 99,7%, năm nay c&oacute; thể giảm hơn một ch&uacute;t do khu vực th&iacute; sinh gi&aacute;o dục thường xuy&ecirc;n, nhưng khu vực học sinh THPT th&igrave; kh&ocirc;ng giảm!</span></p>\r\n<p class="justifyright" style="text-align: right;"><span>B&agrave; B&ugrave;i Thị B&aacute;u, Trưởng ph&ograve;ng Khảo th&iacute; Sở GD-ĐT tỉnh Thanh H&oacute;a</span></p>', 'tuyensinhdiemthitotnghiep1.jpg', 3, 1, '2013/06/16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhanvien`
--

CREATE TABLE IF NOT EXISTS `tbl_nhanvien` (
  `idnv` int(11) NOT NULL AUTO_INCREMENT,
  `tendn` varchar(100) NOT NULL,
  `tennv` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `ngaythem` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idnv`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_nhanvien`
--

INSERT INTO `tbl_nhanvien` (`idnv`, `tendn`, `tennv`, `email`, `password`, `level`, `ngaythem`) VALUES
(3, 'admin', 'Hoàng Văn Hiếu', 'hvanhieu.qb@gmail.com', '202cb962ac59075b964b07152d234b70', 1, '2013/01/30'),
(12, 'quantri', 'quản trị web', 'hieu@gmail.com', '4297f44b13955235245b2497399d7a93', 2, '13/06/2013'),
(13, 'gvhieu', 'GV Hoàng Văn Hiếu', 'hieu@gmail.com', '220466675e31b9d20c051d5e57974150', 1, '16/06/2013'),
(14, 'sdasadgsa', 'sdgasd', 'h', 'e10adc3949ba59abbe56e057f20f883e', 2, '10/08/2013');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
