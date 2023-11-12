-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2023 at 04:28 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landing`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_category`
--

CREATE TABLE `db_category` (
  `id` int(11) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `alias_vn` varchar(255) NOT NULL,
  `ten_vn` varchar(255) NOT NULL,
  `mo_ta_vn` text NOT NULL,
  `noi_dung_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `so_thu_tu` int(11) NOT NULL,
  `title_vn` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `hien_thi` tinyint(1) NOT NULL,
  `tieu_bieu` tinyint(1) NOT NULL DEFAULT '0',
  `menu` tinyint(1) NOT NULL DEFAULT '0',
  `module` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_category`
--

INSERT INTO `db_category` (`id`, `id_loai`, `alias_vn`, `ten_vn`, `mo_ta_vn`, `noi_dung_vn`, `so_thu_tu`, `title_vn`, `keyword`, `des`, `hien_thi`, `tieu_bieu`, `menu`, `module`, `level`) VALUES
(1173, 0, 'do-dung-nha-bep', 'Đồ dùng nhà bếp', '', '', 1, 'Đồ dùng nhà bếp', '', '', 1, 0, 1, 3, 0),
(1174, 1173, 'va-com', 'Vá cơm', '', '', 2, 'Vá cơm', '', '', 1, 0, 1, 3, 1),
(1175, 0, 'bo-tach-tra-de-ly', 'Bộ tách trà - Đế ly', '', '', 6, 'Bộ tách trà - Đế ly', '', '', 1, 0, 1, 3, 0),
(1176, 0, 'vat-dung-tren-ban', 'Vật dụng trên bàn', '', '', 4, 'Vật dụng trên bàn', '', '', 1, 0, 1, 3, 0),
(1177, 0, 'dung-cu-massage', 'Dụng cụ massage', '', '', 8, 'Dụng cụ massage', '', '', 1, 0, 1, 3, 0),
(1178, 1173, 'va-canh', 'Vá Canh', '', '', 6, 'Vá Canh', '', '', 1, 0, 1, 3, 1),
(1179, 1173, 'va-det', 'Vá Dẹt', '', '', 7, 'Vá Dẹt', '', '', 1, 1, 1, 3, 1),
(1180, 0, 'do-gia-dung', 'Đồ gia dụng', '', '', 8, 'Đồ gia dụng', '', '', 1, 0, 1, 3, 0),
(1181, 1173, 'thot', 'Thớt', '', '', 9, 'Thớt', '', '', 1, 1, 1, 3, 1),
(1182, 1173, 'dao', 'Dao', '', '', 10, 'Dao', '', '', 1, 1, 1, 3, 1),
(1183, 1173, 'gao', 'Gáo', '', '', 11, 'Gáo', '', '', 1, 1, 1, 3, 1),
(1184, 1176, 'muong-lon', 'Muống lớn', '', '', 12, 'Muống lớn', '', '', 1, 1, 1, 3, 1),
(1185, 1176, 'muong-nho', 'Muống nhỏ', '', '', 13, 'Muống nhỏ', '', '', 1, 1, 1, 3, 1),
(1186, 1176, 'muong-sup', 'Muống súp', '', '', 14, 'Muống súp', '', '', 1, 1, 1, 3, 1),
(1187, 1176, 'muong-ca', 'Muỗng cà', '', '', 15, 'Muỗng cà', '', '', 1, 1, 1, 3, 1),
(1188, 1175, 'de-ly', 'Đế ly', '', '', 16, 'Đế ly', '', '', 1, 1, 1, 3, 1),
(1189, 1175, 'xuc-tra', 'Xúc trà', '', '', 17, 'Xúc trà', '', '', 1, 1, 1, 3, 1),
(1190, 1175, 'khay-tra', 'Khay trà', '', '', 18, 'Khay trà', '', '', 1, 1, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_danhmuc_hoidap`
--

CREATE TABLE `db_danhmuc_hoidap` (
  `id` int(11) NOT NULL,
  `ten_vn` varchar(255) NOT NULL,
  `alias_vn` varchar(255) NOT NULL,
  `so_thu_tu` int(11) NOT NULL,
  `title_vn` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `hien_thi` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_danhmuc_hoidap`
--

INSERT INTO `db_danhmuc_hoidap` (`id`, `ten_vn`, `alias_vn`, `so_thu_tu`, `title_vn`, `keyword`, `des`, `hien_thi`) VALUES
(1, 'Nhóm câu 1', 'nhom-cau-1', 1, 'Nhóm câu 1', '', '', 1),
(3, 'Nhóm câu 2', 'nhom-cau-2', 2, 'Nhóm câu 2', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_dknhamau`
--

CREATE TABLE `db_dknhamau` (
  `id` int(11) NOT NULL,
  `ten_vn` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `ngay_dang` int(11) NOT NULL,
  `hien_thi` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_dknhamau`
--

INSERT INTO `db_dknhamau` (`id`, `ten_vn`, `so_dien_thoai`, `email`, `dia_chi`, `ngay_dang`, `hien_thi`) VALUES
(1, 'Nguyễn Long', '0982 382 323', 'kythuat01.pnvn@gmail.com', '', 272637, 1),
(2, 'Nguyễn Long', '0928 329 212', 'kythuat01.pnvn@gmail.com', '', 1446870899, 1),
(3, '', '', '', '', 1447053480, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_extra`
--

CREATE TABLE `db_extra` (
  `id` int(11) NOT NULL,
  `stt` int(11) NOT NULL,
  `hide` int(11) NOT NULL,
  `title_vn` text COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `title_us` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_extra`
--

INSERT INTO `db_extra` (`id`, `stt`, `hide`, `title_vn`, `gia`, `type`, `title_us`, `code`, `link`) VALUES
(1, 1, 1, 'Dịch vụ làm bằng đại học chính quy', 0, 0, 'Red', '#776464', 'http://sieuthimaiche.com'),
(5, 0, 1, 'L', 0, 1, '', '', ''),
(7, 1, 1, 'HP Smart Array P440ar/2GB FBWC 12Gb 2-ports Int SAS Controller ', 9000000, 2, '', '', ''),
(8, 2, 1, 'HP Smart Array P440ar/2GB FBWC 12Gb 4-ports', 15000000, 2, '', '', ''),
(11, 5, 1, 'Proliant DL380 Gen9 motherboard, Intel C610 chipset, 24 DIMM slot, 6 PCIe, iLo', 12500000, 3, '', '', ''),
(12, 1, 1, ' Proliant DL380 Gen9 chassis, 2U rackmount, 8*2.5 SFF drives, 1x 500W', 11050000, 4, '', '', ''),
(13, 2, 1, 'Proliant DL380 Gen9 chassis, 2U rackmount, 8*2.5 SFF drives, 2x 500W', 14500000, 4, '', '', ''),
(15, 1, 1, 'HP 300GB 6G SAS 10K SFF SC HDD', 4800000, 5, '', '', ''),
(16, 2, 1, 'HP 300GB 6G SAS 15K SFF SC HDD', 6500000, 5, '', '', ''),
(17, 1, 1, 'Embedded HP 1Gb Ethernet 4-port 331i Adapter ', 7500000, 6, '', '', ''),
(18, 2, 1, 'HP NC365T 4-port 1GbE adapter', 1500000, 6, '', '', ''),
(19, 1, 1, 'Integrated VGA onboard ', 1600000, 7, '', '', ''),
(20, 1, 1, 'External Slim USB DVD-RW', 850000, 8, '', '', ''),
(21, 2, 1, 'External Slim USB Bluray Combo Drive', 1780000, 8, '', '', ''),
(22, 1, 1, 'Không chọn Màn hình ', 0, 9, '', '', ''),
(23, 1, 1, 'Không chọn Bộ lưu điện ', 0, 10, '', '', ''),
(24, 1, 1, 'Không chọn Hệ Điều Hành', 0, 11, '', '', ''),
(28, 3, 1, 'HP 300GB 12G SAS 10K SFF SC HDD ', 4080000, 5, '', '', ''),
(29, 4, 1, 'HP 300GB 12G SAS 15K SFF SC HDD', 6950000, 5, '', '', ''),
(30, 5, 1, 'HP 500GB 6G SATA 7.2K SFF SC HDD ', 5000000, 5, '', '', ''),
(31, 2, 1, 'Dịch vụ làm bằng đại học chính quy', 0, 0, 'White', '#000', '#'),
(32, 3, 1, 'Dịch vụ làm bằng đại học chính quy', 0, 0, 'Yellow', '#f4f71d', '#'),
(33, 2, 1, 'S', 0, 1, '', '', ''),
(34, 3, 1, 'M', 0, 1, '', '', ''),
(35, 4, 1, 'Dịch vụ làm bằng đại học chính quy', 0, 0, '', '', '#');

-- --------------------------------------------------------

--
-- Table structure for table `db_file`
--

CREATE TABLE `db_file` (
  `id` int(11) NOT NULL,
  `ten_vn` varchar(255) NOT NULL,
  `ngay_dang` varchar(255) NOT NULL,
  `id_code` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `hien_thi` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `db_gallery`
--

CREATE TABLE `db_gallery` (
  `id` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `picture` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stt` int(11) NOT NULL,
  `hide` int(11) NOT NULL,
  `title_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title_us` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `body_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `body_us` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `body_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_gallery`
--

INSERT INTO `db_gallery` (`id`, `parent`, `picture`, `stt`, `hide`, `title_vn`, `title_us`, `title_ch`, `link`, `body_vn`, `body_us`, `body_ch`) VALUES
(95, 1155, 'h2440978607851.png', 1, 1, 'Đối tác', '', '', '', '', '', ''),
(96, 1155, 'h1640640018549.png', 2, 1, 'Đối tác', '', '', '', '', '', ''),
(97, 1155, 'h2462294372433.png', 3, 1, 'Đối tác', '', '', '', '', '', ''),
(98, 1155, 'h2980313407350.png', 4, 1, 'Đối tác', '', '', '', '', '', ''),
(99, 1155, 'h1448593365005.png', 5, 1, 'Đối tác', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_hinhanh`
--

CREATE TABLE `db_hinhanh` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_mau` int(11) NOT NULL,
  `hinh_lon` varchar(255) NOT NULL,
  `hinh_nho` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `db_map`
--

CREATE TABLE `db_map` (
  `id` int(11) NOT NULL,
  `map` text NOT NULL,
  `ten_vn` text NOT NULL,
  `ten_us` text NOT NULL,
  `ten_ch` text NOT NULL,
  `mo_ta_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_us` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_vn` text NOT NULL,
  `noi_dung_us` text NOT NULL,
  `noi_dung_ch` text NOT NULL,
  `so_thu_tu` int(11) NOT NULL DEFAULT '1',
  `hien_thi` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_map`
--

INSERT INTO `db_map` (`id`, `map`, `ten_vn`, `ten_us`, `ten_ch`, `mo_ta_vn`, `mo_ta_us`, `mo_ta_ch`, `noi_dung_vn`, `noi_dung_us`, `noi_dung_ch`, `so_thu_tu`, `hien_thi`) VALUES
(17, '10.757722, 106.659059', 'Tên công ty chi nhánh 3', '', '', 'Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3', '', '', '0985 357 584Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3<br />\r\n<br />\r\nTên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3<br />\r\n<br />\r\nTên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3<br />\r\n<br />\r\nTên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3<br />\r\n<br />\r\nTên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3<br />\r\n<br />\r\nTên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3<br />\r\n<br />\r\nTên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3Tên công ty chi nhánh 3', '', '', 1, 1),
(18, '10.754707, 106.657053', 'Tên công ty chi nhánh 2', '', '', 'Tên công ty chi nhánh 2&nbsp;Tên công ty chi nhánh 2&nbsp;Tên công ty chi nhánh 2', '', '', 'Tên công ty chi nhánh 2&nbsp;Tên công ty chi nhánh 2&nbsp;Tên công ty chi nhánh 2<br />\r\n<br />\r\nTên công ty chi nhánh 2&nbsp;Tên công ty chi nhánh 2&nbsp;Tên công ty chi nhánh 2<br />\r\n<br />\r\nTên công ty chi nhánh 2&nbsp;Tên công ty chi nhánh 2&nbsp;Tên công ty chi nhánh 2<br />\r\n<br />\r\n<br />\r\nTên công ty chi nhánh 2&nbsp;Tên công ty chi nhánh 2&nbsp;Tên công ty chi nhánh 2<br />\r\n<br />\r\nTên công ty chi nhánh 2&nbsp;Tên công ty chi nhánh 2&nbsp;Tên công ty chi nhánh 2', '', '', 2, 1),
(19, '10.753210, 106.661151', 'Tên chi nhánh 1', '', '', 'Mô tả ngắn chi nhánh 1 !<br />\r\ndia diem cong ty chinh nhanh 1<br />\r\nso phone cong ty chi nhánh 1', '', '', 'Mô tả ngắn chi nhánh 1 !<br />\r\ndia diem cong ty chinh nhanh 1<br />\r\nso phone cong ty chi nhánh 1Mô tả ngắn chi nhánh 1 !<br />\r\ndia diem cong ty chinh nhanh 1<br />\r\nso phone cong ty chi nhánh 1Mô tả ngắn chi nhánh 1 !<br />\r\ndia diem cong ty chinh nhanh 1<br />\r\nso phone cong ty chi nhánh 1Mô tả ngắn chi nhánh 1 !<br />\r\ndia diem cong ty chinh nhanh 1<br />\r\nso phone cong ty chi nhánh 1Mô tả ngắn chi nhánh 1 !<br />\r\ndia diem cong ty chinh nhanh 1<br />\r\nso phone cong ty chi nhánh 1Mô tả ngắn chi nhánh 1 !<br />\r\ndia diem cong ty chinh nhanh 1<br />\r\nso phone cong ty chi nhánh 1Mô tả ngắn chi nhánh 1 !<br />\r\ndia diem cong ty chinh nhanh 1<br />\r\nso phone cong ty chi nhánh 1Mô tả ngắn chi nhánh 1 !<br />\r\ndia diem cong ty chinh nhanh 1<br />\r\nso phone cong ty chi nhánh 1Mô tả ngắn chi nhánh 1 !<br />\r\ndia diem cong ty chinh nhanh 1<br />\r\nso phone cong ty chi nhánh 1Mô tả ngắn chi nhánh 1 !<br />\r\ndia diem cong ty chinh nhanh 1<br />\r\nso phone cong ty chi nhánh 1', '', '', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_module`
--

CREATE TABLE `db_module` (
  `id` int(11) NOT NULL,
  `stt` int(11) NOT NULL,
  `hide` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_module`
--

INSERT INTO `db_module` (`id`, `stt`, `hide`, `title`) VALUES
(3, 3, 1, 'Sản phẩm');

-- --------------------------------------------------------

--
-- Table structure for table `db_permission_group`
--

CREATE TABLE `db_permission_group` (
  `id` int(11) NOT NULL,
  `page` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hide` tinyint(4) NOT NULL,
  `id_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_permission_group`
--

INSERT INTO `db_permission_group` (`id`, `page`, `title`, `stt`, `hide`, `id_loai`) VALUES
(2, 'bai-viet', 'Bài viết', 2, 1, 17),
(3, 'gallery', 'Hình ảnh', 3, 1, 16),
(4, 'category', 'Danh mục', 1, 1, 17),
(6, 'ho-tro-truc-tuyen', 'Hỗ trợ trực tuyến', 6, 1, 16),
(7, 'video', 'Video', 7, 1, 16),
(8, 'upload-file', 'Upload file', 8, 1, 16),
(9, 'slider-sp', 'Slider', 2, 1, 16),
(10, 'ql-user', 'Quản lý User', 1, 1, 18),
(11, 'ql-thongtin', 'Quản lý thông tin', 11, 1, 16),
(12, 'seo-website', 'Seo website', 2, 1, 0),
(13, 'giaodien', 'Nội dung khác', 13, 1, 16),
(14, 'seo-co-ban', 'Seo cơ bản', 14, 1, 12),
(15, 'seo-nang-cao', 'Seo nâng cao', 15, 1, 12),
(16, 'quan-tri-giao-dien', 'Quản trị giao diện', 1, 1, 0),
(17, 'quan-tri-danh-muc', 'Quản trị Danh mục', 0, 1, 0),
(18, 'cau-hinh-user', 'Cấu hình user', 5, 1, 0),
(19, 'quan-tri-thong-tin', 'Quản trị thông tin', 4, 1, 0),
(20, 'danh-sach-don-hang', 'Danh sách đơn hàng', 18, 1, 19),
(21, 'lien-he', 'Khách hàng Liên hệ', 19, 1, 19),
(22, 'san-pham', 'Sản phẩm', 20, 1, 17),
(23, 'ql-email', 'Danh sách Điện thoại', 21, 1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `db_products`
--

CREATE TABLE `db_products` (
  `id` int(11) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `id_hang` varchar(255) NOT NULL DEFAULT '0',
  `alias_vn` varchar(255) NOT NULL,
  `alias_us` varchar(255) NOT NULL,
  `alias_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ma_sp` varchar(255) NOT NULL,
  `ten_vn` varchar(1000) NOT NULL,
  `ten_us` varchar(255) NOT NULL,
  `ten_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_vn` text NOT NULL,
  `mo_ta_us` text NOT NULL,
  `mo_ta_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `gia` double NOT NULL DEFAULT '0',
  `khuyen_mai` int(11) NOT NULL DEFAULT '0',
  `thong_tin_vn` text NOT NULL,
  `thong_tin_us` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thong_tin_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thong_so_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thong_tai_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thong_chon_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dang` int(11) DEFAULT NULL,
  `tieu_bieu` tinyint(1) DEFAULT NULL,
  `sp_moi` tinyint(1) NOT NULL DEFAULT '0',
  `sp_hot` tinyint(1) NOT NULL,
  `title_vn` varchar(255) DEFAULT NULL,
  `title_us` varchar(255) NOT NULL,
  `title_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `thanh_pho` int(11) NOT NULL DEFAULT '0',
  `quan` int(11) NOT NULL DEFAULT '0',
  `hien_thi` tinyint(1) NOT NULL DEFAULT '1',
  `extra0` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `extra1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `extra2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `extra3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `extra4` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `extra5` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `extra6` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `extra7` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `extra8` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `extra9` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `extra10` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `con_hang` tinyint(4) NOT NULL,
  `so_thu_tu` int(11) NOT NULL,
  `style` int(11) NOT NULL,
  `the_tich` varchar(255) NOT NULL,
  `kich_thuoc` varchar(255) NOT NULL,
  `tong_cao` varchar(255) NOT NULL,
  `dung_luong` varchar(255) NOT NULL,
  `dien_the` varchar(255) NOT NULL,
  `trong_luong` varchar(255) NOT NULL,
  `thoi_gian` varchar(255) NOT NULL,
  `phuong_tien` varchar(255) NOT NULL,
  `khoi_hanh` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_products`
--

INSERT INTO `db_products` (`id`, `id_loai`, `id_hang`, `alias_vn`, `alias_us`, `alias_ch`, `ma_sp`, `ten_vn`, `ten_us`, `ten_ch`, `mo_ta_vn`, `mo_ta_us`, `mo_ta_ch`, `hinh_anh`, `gia`, `khuyen_mai`, `thong_tin_vn`, `thong_tin_us`, `thong_tin_ch`, `thong_so_vn`, `thong_tai_vn`, `thong_chon_vn`, `ngay_dang`, `tieu_bieu`, `sp_moi`, `sp_hot`, `title_vn`, `title_us`, `title_ch`, `keyword`, `des`, `view`, `thanh_pho`, `quan`, `hien_thi`, `extra0`, `extra1`, `extra2`, `extra3`, `extra4`, `extra5`, `extra6`, `extra7`, `extra8`, `extra9`, `extra10`, `con_hang`, `so_thu_tu`, `style`, `the_tich`, `kich_thuoc`, `tong_cao`, `dung_luong`, `dien_the`, `trong_luong`, `thoi_gian`, `phuong_tien`, `khoi_hanh`) VALUES
(218, 1156, '0', 'san-pham-02', '', '', 'YOMS', 'Sản phẩm 02', '', '', '', '', '', 'ghe-2020141965512.jpg', 300000, 0, '', '', '', '', '', '', 1565940525, 0, 0, 1, 'Sản phẩm 02', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(213, 1156, '0', 'san-pham-01-861', '', '', 'LNXF', 'Sản phẩm 01', '', '', '', '', '', 'img_52474529969548.png', 290000, 0, '', '', '', '', '', '', 1565858821, 0, 0, 1, 'Sản phẩm 01', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(214, 1158, '0', 'san-pham-01-801', '', '', 'LNXF', 'Sản phẩm 01', '', '', '', '', '', 'gi1361406851572.jpg', 290000, 0, '', '', '', '', '', '', 1565858821, 0, 0, 1, 'Sản phẩm 01', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(215, 1160, '0', 'san-pham-01-554', '', '', 'LNXF', 'Sản phẩm 01', '', '', '', '', '', 'Cover-3511383729827.jpg', 290000, 0, '', '', '', '', '', '', 1565858821, 0, 0, 1, 'Sản phẩm 01', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(216, 1159, '0', 'san-pham-01', '', '', 'LNXF', 'Sản phẩm 01', '', '', '', '', '', 'tu-quan-ao-go-cong-nghiep-2742075595882.jpg', 290000, 0, '', '', '', '', '', '', 1565858821, 0, 0, 1, 'Sản phẩm 01', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(219, 1156, '0', 'san-pham-03', '', '', '8C1I', 'Sản phẩm 03', '', '', '', '', '', 'ghe-3903780158252.jpg', 0, 0, '', '', '', '', '', '', 1565940583, 0, 0, 1, 'Sản phẩm 03', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(220, 1156, '0', 'san-pham-04', '', '', 'IXN1', 'Sản phẩm 04', '', '', '', '', '', 'g4251005173334.jpg', 0, 0, '', '', '', '', '', '', 1565940678, 0, 0, 1, 'Sản phẩm 04', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(221, 1156, '0', 'san-pham-05', '', '', 'QBIR', 'Sản phẩm 05', '', '', '', '', '', 'g5419403003543.jpg', 500000, 0, '', '', '', '', '', '', 1565940719, 0, 0, 1, 'Sản phẩm 05', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(222, 1156, '0', 'san-pham-06', '', '', 'NIHY', 'Sản phẩm 06', '', '', '', '', '', 'g6870875915415.jpg', 200000, 0, '', '', '', '', '', '', 1565940793, 0, 0, 0, 'Sản phẩm 06', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(223, 1156, '0', 'san-pham-07', '', '', '3M6B', 'Sản phẩm 07', '', '', '', '', '', 'g7045279501407.jpg', 500000, 0, '', '', '', '', '', '', 1565940865, 0, 0, 0, 'Sản phẩm 07', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(224, 1159, '0', 'san-pham-02-429', '', '', 'T4W5', 'Sản phẩm 02', '', '', '', '', '', 't2624815988484.jpg', 1000000, 0, '', '', '', '', '', '', 1565941178, 0, 0, 0, 'Sản phẩm 02', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(225, 1157, '0', 'san-pham-01-563', '', '', 'NWIH', 'Sản phẩm 01', '', '', '', '', '', 'b1889918218717.jpg', 200000, 0, '', '', '', '', '', '', 1565941282, 0, 0, 0, 'Sản phẩm 01', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(226, 1159, '0', 'san-pham-03-935', '', '', '6NA2', 'Sản phẩm 03', '', '', '', '', '', 't3728729472311.jpg', 5000000, 0, '', '', '', '', '', '', 1565941305, 0, 0, 0, 'Sản phẩm 03', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(227, 1159, '0', 'san-pham-04-786', '', '', 'PL5E', 'Sản phẩm 04', '', '', '', '', '', 't4045552788006.jpg', 1500000, 0, '', '', '', '', '', '', 1565941350, 0, 0, 0, 'Sản phẩm 04', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(228, 1159, '0', 'san-pham-05-299', '', '', 'JFLH', 'Sản phẩm 05', '', '', '', '', '', 't5490179461972.jpg', 0, 0, '', '', '', '', '', '', 1565941413, 0, 0, 0, 'Sản phẩm 05', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(229, 1159, '0', 'san-pham-06-52', '', '', 'KK5L', 'Sản phẩm 06', '', '', '', '', '', 't6305050477126.jpg', 2000000, 0, '', '', '', '', '', '', 1565941512, 0, 0, 0, 'Sản phẩm 06', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(230, 1159, '0', 'san-pham-07-385', '', '', 'NHIN', 'Sản phẩm 07', '', '', '', '', '', 't7774748057040.jpg', 3000000, 0, '', '', '', '', '', '', 1565941526, 0, 0, 0, 'Sản phẩm 07', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(231, 1157, '0', 'san-pham-02-470', '', '', 'F4EZ', 'Sản phẩm 02', '', '', '', '', '', 'b2547569348051.png', 1000000, 0, '', '', '', '', '', '', 1565941609, 0, 0, 0, 'Sản phẩm 02', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(232, 1157, '0', 'san-pham-03-38', '', '', 'OR2Y', 'Sản phẩm 03', '', '', '', '', '', 'b3942949636518.jpg', 1000000, 0, '', '', '', '', '', '', 1565941633, 0, 0, 0, 'Sản phẩm 03', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(233, 1157, '0', 'san-pham-04-596', '', '', 'ZDHF', 'Sản phẩm 04', '', '', '', '', '', 'b4838409525722.jpg', 0, 0, '', '', '', '', '', '', 1565941745, 0, 0, 0, '', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(234, 1157, '0', 'san-pham-05-650', '', '', '37IE', 'Sản phẩm 05', '', '', '', '', '', 'b5681040383954.png', 5000000, 0, '', '', '', '', '', '', 1565941760, 0, 0, 0, 'Sản phẩm 05', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(235, 1157, '0', 'san-pham-06-185', '', '', 'M0BM', 'Sản phẩm 06', '', '', '', '', '', 'b6717625785639.jpg', 0, 0, '', '', '', '', '', '', 1565941773, 0, 0, 0, 'Sản phẩm 06', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(236, 1157, '0', 'san-pham-07-490', '', '', '1BBD', 'Sản phẩm 07', '', '', '', '', '', 'b7923375692329.jpg', 0, 0, '', '', '', '', '', '', 1565941816, 0, 0, 0, 'Sản phẩm 07', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(237, 1157, '0', 'san-pham-08', '', '', 'IKPM', 'Sản phẩm 08', '', '', '', '', '', 'b8502355777764.jpg', 0, 0, '', '', '', '', '', '', 1565941828, 0, 0, 0, 'Sản phẩm 08', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(238, 1156, '0', 'san-pham-08-196', '', '', 'GW62', 'Sản phẩm 08', '', '', '', '', '', 'g8731356958424.jpg', 0, 0, '', '', '', '', '', '', 1565941863, 0, 0, 0, 'Sản phẩm 08', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(239, 1159, '0', 'san-pham-08-290', '', '', '3YJ5', 'Sản phẩm 08', '', '', '', '', '', 't8637794211256.jpg', 0, 0, '', '', '', '', '', '', 1565941887, 0, 0, 0, 'Sản phẩm 08', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(240, 1160, '0', 'san-pham-02-138', '', '', 'QGH9', 'Sản phẩm 02', '', '', '', '', '', 'k2264817922952.jpg', 2000000, 0, '', '', '', '', '', '', 1565941993, 0, 0, 0, 'Sản phẩm 02', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(241, 1160, '0', 'san-pham-03-354', '', '', 'BR2G', 'Sản phẩm 03', '', '', '', '', '', 'k3197890970915.jpg', 500000, 0, '', '', '', '', '', '', 1565942008, 0, 0, 0, 'Sản phẩm 03', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(242, 1160, '0', 'san-pham-04-556', '', '', 'K63N', 'Sản phẩm 04', '', '', '', '', '', 'k4008695723639.jpg', 500000, 0, '', '', '', '', '', '', 1565942034, 0, 0, 0, 'Sản phẩm 04', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(243, 1160, '0', 'san-pham-05-52', '', '', 'L3B4', 'Sản phẩm 05', '', '', '', '', '', 'k5481461133081.jpg', 300000, 0, '', '', '', '', '', '', 1565942080, 0, 0, 0, 'Sản phẩm 05', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(244, 1160, '0', 'san-pham-06-716', '', '', 'KY81', 'Sản phẩm 06', '', '', '', '', '', 'k6042803417789.jpg', 0, 0, '', '', '', '', '', '', 1565942122, 0, 0, 0, 'Sản phẩm 06', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(245, 1160, '0', 'san-pham-07-974', '', '', 'O40B', 'Sản phẩm 07', '', '', '', '', '', 'k7167485261607.jpg', 450000, 0, '', '', '', '', '', '', 1565942136, 0, 0, 0, 'Sản phẩm 07', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(246, 1160, '0', 'san-pham-08-373', '', '', 'SSOJ', 'Sản phẩm 08', '', '', '', '', '', 'k8099578388204.jpg', 2000000, 0, '', '', '', '', '', '', 1565942162, 0, 0, 0, 'Sản phẩm 08', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(247, 1158, '0', 'san-pham-02-464', '', '', 'LTFG', 'Sản phẩm 02', '', '', '', '', '', 'gi2957497719237.jpg', 5000000, 0, '', '', '', '', '', '', 1565942302, 0, 0, 0, 'Sản phẩm 02', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(248, 1158, '0', 'san-pham-03-585', '', '', '2HHZ', 'Sản phẩm 03', '', '', '', '', '', 'gi3124858054449.jpg', 4000000, 0, '', '', '', '', '', '', 1565942320, 0, 0, 0, 'Sản phẩm 03', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(249, 1158, '0', 'san-pham-04-911', '', '', '929D', 'Sản phẩm 04', '', '', '', '', '', 'gi4975444057843.jpg', 5000000, 0, '', '', '', '', '', '', 1565942337, 0, 0, 0, 'Sản phẩm 04', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(250, 1158, '0', 'san-pham-05-52', '', '', 'S6OD', 'Sản phẩm 05', '', '', '', '', '', 'gi5648186706969.jpg', 3000000, 0, '', '', '', '', '', '', 1565942443, 0, 0, 0, '', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(251, 1158, '0', 'san-pham-06-94', '', '', 'PVRB', 'Sản phẩm 06', '', '', '', '', '', 'gi6052063997595.jpg', 5000000, 0, '', '', '', '', '', '', 1565942464, 0, 0, 0, 'Sản phẩm 06', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(252, 1158, '0', 'san-pham-07-429', '', '', 'UWIH', 'Sản phẩm 07', '', '', '', '', '', 'gi7298307335024.jpg', 5000000, 0, '', '', '', '', '', '', 1565942477, 0, 0, 0, 'Sản phẩm 07', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(253, 1158, '0', 'san-pham-08-290', '', '', 'HTVN', 'Sản phẩm 08', '', '', '', '', '', 'gi8044684855503.jpg', 0, 0, '', '', '', '', '', '', 1565942485, 0, 0, 0, 'Sản phẩm 08', '', '', '', '', 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_seo`
--

CREATE TABLE `db_seo` (
  `id` int(11) NOT NULL,
  `title_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title_us` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keyword_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keyword_us` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description_us` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `g_a` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_seo`
--

INSERT INTO `db_seo` (`id`, `title_vn`, `title_us`, `keyword_vn`, `keyword_us`, `description_vn`, `description_us`, `g_a`) VALUES
(1, 'Đồ dùng nhà bếp', '', 'Đồ dùng nhà bếp', '', 'Đồ dùng nhà bếp', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_setting`
--

CREATE TABLE `db_setting` (
  `id` int(11) NOT NULL,
  `ten_vn` varchar(255) NOT NULL,
  `ten_us` varchar(255) NOT NULL,
  `ten_jp` varchar(255) NOT NULL,
  `ten_ch` text NOT NULL,
  `noi_dung_vn` longtext NOT NULL,
  `noi_dung_us` longtext NOT NULL,
  `noi_dung_jp` longtext NOT NULL,
  `noi_dung_ch` text NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `title_vn` varchar(255) NOT NULL,
  `title_us` varchar(255) NOT NULL,
  `title_jp` varchar(255) NOT NULL,
  `title_ch` text NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `hien_thi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_setting`
--

INSERT INTO `db_setting` (`id`, `ten_vn`, `ten_us`, `ten_jp`, `ten_ch`, `noi_dung_vn`, `noi_dung_us`, `noi_dung_jp`, `noi_dung_ch`, `hinh_anh`, `title_vn`, `title_us`, `title_jp`, `title_ch`, `keyword`, `des`, `hien_thi`) VALUES
(10, 'Thông tin liên hệ', '', '', '', '<p>Địa chỉ: 123 Nguyễn Xí, F.12, Q. Bình Thạnh</p>\r\n\r\n<p>Hotline: 0915.544.849</p>\r\n\r\n<p>Mail: Tan.noithatkimloai@gmail.com</p>\r\n\r\n<p>Website: noithatkimloai.com.vn</p>\r\n', '', '', '', '', '', '', '', '', '', '', 1),
(28, 'Dịch vụ kế toán', 'GIA HUY CONSTRUCTION TRADING SERVICE CO., LTD', '', '', '<p><span style=\"color:rgb(13, 13, 13); font-family:roboto,arial,sans-serif; font-size:14px\">Thích một người căn bản không thể nào dấu được, tựa như mặt trời mọc mặt trời lặn, thủy triều lên rồi xuống là một chuyện vô cùng tự nhiên, chỉ sợ cho dù bạn một mực muốn che dấu nhưng ánh mắt bạn nhìn người ấy từ lâu đã tố cáo bạn với thiên hạ</span></p>\r\n', '<p>Branch 1: 26/54 Tran Quy Cap, Ward 11, Binh Thanh District, HCM</p>\r\n\r\n<p>Branch 2: 656/65/8 Quang Trung, Ward 11, Go Vap Dist., HCMC</p>\r\n\r\n<p>Tel: 08 3516 2025 - Fax: 08 3516 5059</p>\r\n\r\n<p>Mobile: 0915 89 5878 - 0908 411 533</p>\r\n\r\n<p>Email: phonggiahuy1983@gmail.com</p>\r\n', '', '', '', '', '', '', '', '', '', 1),
(29, 'Đặt hàng thành công', '', '', '', '<p><span style=\"font-size:14px\"><strong><span style=\"color:#FF0000\">Đặt hàng thành công!<br />\r\n<br />\r\nChúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất. Xin cảm ơn!</span></strong></span></p>\r\n', '', '', '', '', '', '', '', '', '', '', 1),
(30, 'Logo', '', '', '', '', '', '', '', 'logo563914054783.png', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_slide_sp`
--

CREATE TABLE `db_slide_sp` (
  `id` int(11) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `href` varchar(255) DEFAULT NULL,
  `title_vn` varchar(255) DEFAULT NULL,
  `mo_ta_vn` varchar(255) NOT NULL,
  `so_thu_tu` int(11) NOT NULL DEFAULT '1',
  `hien_thi` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_slide_sp`
--

INSERT INTO `db_slide_sp` (`id`, `hinh_anh`, `href`, `title_vn`, `mo_ta_vn`, `so_thu_tu`, `hien_thi`) VALUES
(102, '298426779_1696153510760494_9125591191175123194_n569881107211.jpg', '', 'Slider 1', '', 1, 1),
(111, 'banner-empire343016635691.jpg', 'link', 'Gallery', '', 2, 1),
(112, 'GH010102_Moment266026373022.jpg', '', 'SSSSSSSS', '', 3, 0),
(113, 'GH010324_Moment120030796869.jpg', 'sss', 'sss', '', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_tags`
--

CREATE TABLE `db_tags` (
  `id` int(11) NOT NULL,
  `ten_vn` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_tags`
--

INSERT INTO `db_tags` (`id`, `ten_vn`, `alias`) VALUES
(91, 'rau sach', 'rau-sach'),
(90, 'tag3', 'tag3'),
(89, 'tag2', 'tag2'),
(88, 'tag1', 'tag1'),
(92, 'may dong phuc', 'may-dong-phuc'),
(93, 'may ao thun', 'may-ao-thun'),
(94, 'dong phuc cong so', 'dong-phuc-cong-so'),
(95, 'kính', 'kinh'),
(96, 'kính xây dựng', 'kinh-xay-dung');

-- --------------------------------------------------------

--
-- Table structure for table `db_thongtin`
--

CREATE TABLE `db_thongtin` (
  `id` int(11) NOT NULL,
  `company` text NOT NULL,
  `hotline` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `dien_thoai` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `coppy_right` varchar(255) NOT NULL,
  `map` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `footer_text` text,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) NOT NULL,
  `icon_share` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_thongtin`
--

INSERT INTO `db_thongtin` (`id`, `company`, `hotline`, `address`, `hinh_anh`, `twitter`, `facebook`, `google`, `dien_thoai`, `fax`, `email`, `coppy_right`, `map`, `footer_text`, `logo`, `favicon`, `icon_share`, `youtube`, `pinterest`, `instagram`) VALUES
(1, 'CÔNG TY TNHH DỊCH VỤ DU LỊCH HI TOUR <br> <h2>PHÚ QUỐC</h2>', '', 'Tổ 01 khu phố 10, Thị trấn Dương Đông, Huyện Phú Quốc, Tỉnh Kiên Giang', '416506557301_favicon.jpg', '', '', '', '', '', '', 'Copyright © 2023 ToanNangKitChenWare. Thiết Kế Web & Quảng Cáo Google Á Châu Company', '', '<p style=\"text-align:center\"><strong><span style=\"font-size:18px\"><span style=\"background-color:#FF8C00\">CÔNG TY TNHH SẢN XUẤT - THƯƠNG MẠI - DỊCH VỤ TOÀN NĂNG</span></span></strong></p>\r\n\r\n<p style=\"text-align:center\">Địa chỉ: Số 73/3 ấp Dân Thắng, xã Tân Thới Nhì, huyện Hóc Môn, thành phố Hồ Chí Minh</p>\r\n\r\n<p style=\"text-align:center\">Điện thoại: 0918 53 88 77 - Email: huongvo@toannangkitchenware.com</p>\r\n', 'logo.png', '316676454_706685870877890_1216606040278216470_n52107.jpg', '222GH010308_Moment.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `id` int(11) NOT NULL,
  `token` text NOT NULL,
  `user_hash` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass_hash` text NOT NULL,
  `tai_khoan` text NOT NULL,
  `email` text NOT NULL,
  `ho_ten` text NOT NULL,
  `dien_thoai` text NOT NULL,
  `dia_chi` text NOT NULL,
  `hinh_anh` text NOT NULL,
  `ngay_sinh` text NOT NULL,
  `gioi_tinh` int(11) NOT NULL,
  `quyen_han` int(11) NOT NULL,
  `hien_thi` int(11) NOT NULL,
  `ngay_tao` int(11) NOT NULL,
  `is_admin` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`id`, `token`, `user_hash`, `pass_hash`, `tai_khoan`, `email`, `ho_ten`, `dien_thoai`, `dia_chi`, `hinh_anh`, `ngay_sinh`, `gioi_tinh`, `quyen_han`, `hien_thi`, `ngay_tao`, `is_admin`) VALUES
(1, '2c723b91d9c723c3691700c260c2c05cbb1edf5b', 'd033e22ae348aeb5660fc2140aec35850c4da997', '7c222fb2927d828af22f592134e8932480637c0d', 'admin', 'admin@gmail.com', 'Administrator', '', '', '', '', 1, 1, 1, 1473306606, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_user_permission_group`
--

CREATE TABLE `db_user_permission_group` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_permission` int(11) NOT NULL,
  `stt` int(11) NOT NULL,
  `hide` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `db_video`
--

CREATE TABLE `db_video` (
  `id` int(11) NOT NULL,
  `ten_vn` varchar(255) NOT NULL,
  `ten_us` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `hien_thi` tinyint(1) NOT NULL,
  `id_loai` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_video`
--

INSERT INTO `db_video` (`id`, `ten_vn`, `ten_us`, `link`, `hien_thi`, `id_loai`) VALUES
(19, 'Apple', '', 'WVPRkcczXCY', 1, 0),
(20, 'Phòng cháy', 'Phòng cháy', 'FYmDP09vSYQ', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_category`
--
ALTER TABLE `db_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_danhmuc_hoidap`
--
ALTER TABLE `db_danhmuc_hoidap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_dknhamau`
--
ALTER TABLE `db_dknhamau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_extra`
--
ALTER TABLE `db_extra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_file`
--
ALTER TABLE `db_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_gallery`
--
ALTER TABLE `db_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_hinhanh`
--
ALTER TABLE `db_hinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_map`
--
ALTER TABLE `db_map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_module`
--
ALTER TABLE `db_module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_permission_group`
--
ALTER TABLE `db_permission_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_products`
--
ALTER TABLE `db_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_seo`
--
ALTER TABLE `db_seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_setting`
--
ALTER TABLE `db_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_slide_sp`
--
ALTER TABLE `db_slide_sp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_tags`
--
ALTER TABLE `db_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_thongtin`
--
ALTER TABLE `db_thongtin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_user_permission_group`
--
ALTER TABLE `db_user_permission_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_video`
--
ALTER TABLE `db_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_category`
--
ALTER TABLE `db_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1191;

--
-- AUTO_INCREMENT for table `db_danhmuc_hoidap`
--
ALTER TABLE `db_danhmuc_hoidap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_dknhamau`
--
ALTER TABLE `db_dknhamau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_extra`
--
ALTER TABLE `db_extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `db_file`
--
ALTER TABLE `db_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `db_gallery`
--
ALTER TABLE `db_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `db_hinhanh`
--
ALTER TABLE `db_hinhanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `db_map`
--
ALTER TABLE `db_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `db_module`
--
ALTER TABLE `db_module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `db_permission_group`
--
ALTER TABLE `db_permission_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `db_products`
--
ALTER TABLE `db_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `db_seo`
--
ALTER TABLE `db_seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `db_setting`
--
ALTER TABLE `db_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `db_slide_sp`
--
ALTER TABLE `db_slide_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `db_tags`
--
ALTER TABLE `db_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `db_thongtin`
--
ALTER TABLE `db_thongtin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `db_user_permission_group`
--
ALTER TABLE `db_user_permission_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_video`
--
ALTER TABLE `db_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
