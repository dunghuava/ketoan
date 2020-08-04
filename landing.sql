-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2020 at 08:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `db_baiviet_hinhanh`
--

CREATE TABLE `db_baiviet_hinhanh` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `id_baiviet` int(11) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_baiviet_hinhanh`
--

INSERT INTO `db_baiviet_hinhanh` (`id`, `title`, `id_baiviet`, `hinh_anh`) VALUES
(1, '', 495, '798323657107_avatar1.png');

-- --------------------------------------------------------

--
-- Table structure for table `db_category`
--

CREATE TABLE `db_category` (
  `id` int(11) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `alias_vn` varchar(255) NOT NULL,
  `alias_us` varchar(255) NOT NULL,
  `alias_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten_vn` varchar(255) NOT NULL,
  `ten_us` varchar(255) NOT NULL,
  `ten_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_vn` text NOT NULL,
  `mo_ta_us` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_us` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `so_thu_tu` int(11) NOT NULL,
  `title_vn` varchar(255) NOT NULL,
  `title_us` varchar(255) NOT NULL,
  `title_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `hien_thi` tinyint(1) NOT NULL,
  `tieu_bieu` tinyint(1) NOT NULL,
  `menu` tinyint(1) NOT NULL,
  `module` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_category`
--

INSERT INTO `db_category` (`id`, `id_loai`, `alias_vn`, `alias_us`, `alias_ch`, `ten_vn`, `ten_us`, `ten_ch`, `mo_ta_vn`, `mo_ta_us`, `mo_ta_ch`, `noi_dung_vn`, `noi_dung_us`, `noi_dung_ch`, `hinh_anh`, `so_thu_tu`, `title_vn`, `title_us`, `title_ch`, `keyword`, `des`, `hien_thi`, `tieu_bieu`, `menu`, `module`, `level`) VALUES
(1173, 0, 'du-an', '', '', 'Dự án', '', '', '', '', '', '', '', '', '', 1, 'Dự án', '', '', '', '', 1, 1, 0, 3, 0),
(1174, 0, 'mua', '', '', 'Mua', '', '', '', '', '', '', '', '', '', 2, 'Mua', '', '', '', '', 1, 1, 0, 3, 0),
(1175, 0, 'cho-thue', '', '', 'Cho thuê', '', '', '', '', '', '', '', '', '', 3, 'Cho thuê', '', '', '', '', 1, 1, 0, 3, 0),
(1176, 0, 'ky-gui-nha', '', '', 'Ký gửi nhà', '', '', '', '', '', '', '', '', '', 4, 'Ký gửi nhà', '', '', '', '', 1, 1, 0, 1, 0),
(1177, 0, 'tin-tuc', '', '', 'Tin tức', '', '', '', '', '', '', '', '', '', 5, 'Tin tức', '', '', '', '', 1, 1, 0, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_chitietdathang`
--

CREATE TABLE `db_chitietdathang` (
  `id` int(11) NOT NULL,
  `id_dh` int(11) NOT NULL,
  `ma_dh` varchar(255) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `khuyen_mai` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `mau` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_chitietdathang`
--

INSERT INTO `db_chitietdathang` (`id`, `id_dh`, `ma_dh`, `id_sp`, `gia`, `khuyen_mai`, `so_luong`, `mau`, `size`) VALUES
(1, 251, 'DHXTHPF', 69, 600000, 450000, 5, 32, 33),
(2, 252, 'DHDDK43', 70, 600000, 450000, 1, 32, 5),
(3, 253, 'DHU5LIY', 71, 600000, 450000, 2, 32, 33),
(4, 254, 'DHZ99R0', 69, 600000, 450000, 1, 0, 0),
(5, 255, 'DHM8SNL', 67, 600000, 0, 1, 0, 0),
(6, 255, 'DHM8SNL', 68, 600000, 0, 3, 0, 0),
(7, 256, 'DHKQQXV', 80, 100000, 0, 1, 0, 0),
(9, 258, 'DHSNSPP', 178, 1099000, 0, 2, 0, 0),
(10, 259, 'DH0C4DP', 178, 1099000, 0, 1, 0, 0),
(11, 260, 'DHAU8CH', 178, 1099000, 0, 1, 0, 0),
(12, 261, 'DHCSV3N', 178, 1099000, 0, 2, 0, 0),
(13, 262, 'DH3MLMP', 205, 1099000, 0, 1, 0, 0),
(14, 263, 'DH4F4D6', 202, 1699000, 0, 1, 0, 0),
(15, 264, 'DHH7Q08', 207, 1289000, 0, 2, 0, 0),
(16, 265, 'DHKRCLB', 207, 1289000, 0, 3, 0, 0),
(17, 266, 'DH6TXB9', 203, 950000, 0, 2, 0, 0),
(18, 267, 'DHHVF9Q', 203, 950000, 0, 2, 0, 0),
(19, 268, 'DHRFXP5', 209, 1389000, 0, 2, 0, 0),
(20, 269, 'DHVP97X', 202, 1750000, 0, 9, 0, 0),
(21, 270, 'DH7HCKL', 202, 1750000, 0, 9, 0, 0),
(22, 271, 'DHKGTWE', 202, 1750000, 0, 2, 0, 0),
(23, 271, 'DHKGTWE', 204, 0, 0, 1, 0, 0),
(24, 272, 'DHBXL1X', 202, 1750000, 0, 3, 0, 0),
(25, 273, 'DH6RD2K', 202, 1750000, 0, 2, 0, 0);

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
-- Table structure for table `db_dathang`
--

CREATE TABLE `db_dathang` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `dien_thoai` varchar(20) NOT NULL,
  `thoi_gian_giao_hang` varchar(255) NOT NULL,
  `ngay_giao_hang` varchar(20) NOT NULL,
  `hinh_thuc_thanh_toan` tinyint(1) NOT NULL,
  `loi_nhan` varchar(1000) NOT NULL,
  `ngay_dat_hang` varchar(20) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `tinh_trang` tinyint(1) NOT NULL,
  `ma_dh` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_dathang`
--

INSERT INTO `db_dathang` (`id`, `ho_ten`, `email`, `dia_chi`, `dien_thoai`, `thoi_gian_giao_hang`, `ngay_giao_hang`, `hinh_thuc_thanh_toan`, `loi_nhan`, `ngay_dat_hang`, `trang_thai`, `tinh_trang`, `ma_dh`) VALUES
(258, 'Hoang Nguyen', 'an12032002@gmail.com', 'F25 Bình Thạnh', '088345882', '', '', 1, '', '1542122285', 1, 0, 'DHSNSPP'),
(259, 'Đỗ Thị Mỹ Linh', 'domylinh1984@gmail.com', '118/79 Bạch Đằng, F24, Q Bình Thạnh', '0902352066', '', '', 1, '', '1542515983', 1, 0, 'DH0C4DP'),
(260, 'Vi Loi', 'viloi99@yahoo.com', '14b/18k duong 30, Thu Duc.', '0903649795', '', '', 1, 'Tour ĐÀ LẠT 3N3D ngay 20T12 4pax. Can tu van book tour. Cám ơn', '1543361320', 1, 0, 'DHAU8CH'),
(261, 'Phạm Thị Minh Nguyệt', 'nguyetpham06@gmail.com', '47 Lý Tự Trọng, P Bến Nghé , Quận 1, TpHCM', '0933210611', '', '', 1, 'Tour Đà Lạt ngày 13/12', '1543645133', 1, 0, 'DHCSV3N'),
(262, 'Nguyễn Thị Bích Sơn', 'nguyenthibichson1003@gmail.com', '55/20 đường số 7, khu phố 9, phường 7, gò vấp, tp.hcm', '0976207668', '', '', 2, '', '1544834641', 1, 0, 'DH3MLMP'),
(263, 'Đỗ Thanh Quyền', 'thanhquyenharmonica@gmail.com', '118/59/13/31/18 bến phú định p16q8', '091 588 5891', '', '1546495041', 1, 'đặt 2 vé đà lạt tối 28; phòng 2 người', '1545829899', 0, 1, 'DH4F4D6'),
(264, 'Lê Nguyễn Minh Quân', 'quanle7292@gmail.com', '334/58/31 nguyễn văn nghi phường 7 gò vấp', '0901352069', '', '', 1, 'Gọi lại số điện thoại 0901352069 tư vấn giúp mình nhé', '1549178299', 1, 0, 'DHH7Q08'),
(265, 'Luong Nữ', 'lulam3181@gmail.com', '241/74 Đường Lãnh Binh Thăng P12 Q11', '0775145606', '', '1550033514', 1, 'Gọi xác nhận giúp chị rồi báo ngày đi giúp chị nhé', '1549442594', 1, 1, 'DHKRCLB'),
(266, 'Ngô thị yết', 'ngoyet8899@gmail.com', '95/3đường thảo điền, phường thảo điền, quận 2', '0357479279', '', '', 1, '', '1553753169', 1, 0, 'DH6TXB9'),
(267, 'SHU JIE HUA', 'tieutieudg@gmail.com', 'NHƠN TRẠCH ĐỒNG NAI', '0366424420', '', '', 1, '', '1554712060', 1, 0, 'DHHVF9Q'),
(268, 'LÊ THỊ NGỌC TRÂN', 'lethingoctran0106@gmail.com', 'Thủ đức', '0942589541', '', '1554977481', 1, '', '1554885701', 1, 2, 'DHRFXP5'),
(269, 'Nguyễn Mai Hương', 'nguyenmaihuogg@gmail.com', '10/4b, ấp 2, xã Xuân Thới Thượng, huyện Hóc Môn.', '0972333249', '', '', 1, '', '1555133983', 1, 0, 'DHVP97X'),
(270, 'NGUYỄN MAI HƯƠNG', 'nguyenmaihuogg@gmail.com', '10/4b, ấp 2, xã xuân thới thượng, huyện hóc môn', '0972333249', '', '', 1, '', '1555224074', 1, 0, 'DH7HCKL'),
(271, 'Nguyễn Thị Hường', 'Thanhhuong.nguyen124@gmail.com', '411/47 Lê đại hành ,p11,qu11 Hcm', '0906618198', '', '', 1, 'Đặt tuor đi tối 26/4', '1555831898', 1, 0, 'DHKGTWE'),
(272, 'Nguyễn thi hường ', 'thanhhuong.nguyen124@glail.con', '411/47 Lê đại hành , p11, q11,hcm', '0906618198', '', '', 1, '', '1555832352', 1, 0, 'DHBXL1X'),
(273, 'Hoàng Thị Phương Mai', 'maihoangthiphuong173@gmail.com', 'Gò Vấp, HCM', '0974178488', '', '', 1, '', '1555841602', 1, 0, 'DH6RD2K');

-- --------------------------------------------------------

--
-- Table structure for table `db_datlich`
--

CREATE TABLE `db_datlich` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `donvi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `chuyenmon` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mucdo` int(11) NOT NULL,
  `vaitro` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `khac` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tuvan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `capthiet` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `day` int(11) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_datlich`
--

INSERT INTO `db_datlich` (`id`, `name`, `donvi`, `chuyenmon`, `email`, `phone`, `mota`, `mucdo`, `vaitro`, `khac`, `tuvan`, `capthiet`, `day`, `view`) VALUES
(1, 'Hoàng Hiển', 'Trường Trung Cấp Công Nghiệp Bình Dương', 'Công nghệ thông tin và kỹ thuật máy tính', 'thantaihoi@zing.vn', '45345435', 'Công dụng, đặc tính, những điểm nổi bật so với những sản phẩm/dịch vụ hiện có trên thị trườngCông dụng, đặc tính, những điểm nổi bật so với những sản phẩm/dịch vụ hiện có trên thị trườngCông dụng, đặc tính, những điểm nổi bật so với những sản phẩm/dịch vụ hiện có trên thị trườngCông dụng, đặc tính, những điểm nổi bật so với những sản phẩm/dịch vụ hiện có trên thị trường', 1, '0', 'test khác lung tung xì ngầu', '(Ví dụ: tư vấn nghiên cứu hoàn thiện sản phẩm/dịch vụ; kiểm nghiệm tính khả thi của ý tưởng; tư vấn xây dựng/hoàn thiện KHKD; tư vấn bảo hộ SHTT; tư vấn pháp lý; tư vấn cách thức triển khai; ...)...)', 'rất cần thiết lun đó nha! dự án trăm triệu đô la đó', 1461295558, 1),
(2, 'Nguyễn Văn A', 'Trường Đại Học Hồng Bàng', 'Nghiên cứu vi sinh vật', 'hnhoanghien@gmail.com', '554534566', 'Công dụng, đặc tính, những điểm nổi bật so với những sản phẩm/dịch vụ hiện có trên thị trườngCông dụng, đặc tính, những điểm nổi bật so với những sản phẩm/dịch vụ hiện có trên thị trườngCông dụng, đặc tính, những điểm nổi bật so với những sản phẩm/dịch vụ hiện có trên thị trường', 2, '5,6,10', '', '(Ví dụ: tư vấn nghiên cứu hoàn thiện sản phẩm/dịch vụ; kiểm nghiệm tính khả thi của ý tưởng; tư vấn xây dựng/hoàn thiện KHKD; tư vấn bảo hộ SHTT; tư vấn pháp lý; tư vấn cách thức triển khai; ...)...)', 'Nếu dự án của bạn đang cần được hỗ trợ gấp hãy thông tin để chúng tôi biết và ưu tiên xếp lịch hẹn sớm', 1461296811, 1);

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
-- Table structure for table `db_email`
--

CREATE TABLE `db_email` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ngay_gui` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `trang_thai` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_email`
--

INSERT INTO `db_email` (`id`, `email`, `ngay_gui`, `ho_ten`, `trang_thai`) VALUES
(18, '09123123123', 1514515357, '', 0),
(19, 'ngohonghanh199817@gmai.com', 1539069759, '', 0),
(20, 'phamhuynhthaotran1997@gmail.com', 1543578778, '', 0),
(21, 'kellyhuang 201588@yahoo.com.vn', 1551506465, '', 0),
(22, 'sanhvo853@gmail.com', 1552198822, '', 0),
(23, 'caongoc1802@gmail.com', 1552715975, '', 0),
(24, 'honghac777@yahoo.com', 1552832976, '', 0),
(25, 'phuong.costcovn@gmail.com', 1552892813, '', 0),
(26, 'truongtunggg879@gmail.com', 1553357514, '', 0),
(27, 'huyensgtt@yahoo.com', 1554101081, '', 0),
(28, 'trungmanh0739@gmaik.com', 1554466774, '', 0),
(29, 'trungmanh@gmail.com', 1554466793, '', 0),
(30, 'buithihang2508@gmail.com', 1555219111, '', 0),
(31, 'suongvo0303@gmail.com', 1555834831, '', 0),
(32, 'phanvanhieu@gmail.com799', 1555839775, '', 0),
(33, 'nhumaidao@gamil.com', 1555847688, '', 0),
(34, 'Nguyenhuynhhongyen@gmail.com', 1555851674, '', 0),
(35, 'nguyenvanminh7hien@gmail.com', 1556517743, '', 0);

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
-- Table structure for table `db_hinhthucthanhtoan`
--

CREATE TABLE `db_hinhthucthanhtoan` (
  `id` int(11) NOT NULL,
  `ten_vn` varchar(255) NOT NULL,
  `noi_dung_vn` text NOT NULL,
  `so_thu_tu` int(11) NOT NULL,
  `hien_thi` tinyint(1) NOT NULL,
  `ten_us` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_hinhthucthanhtoan`
--

INSERT INTO `db_hinhthucthanhtoan` (`id`, `ten_vn`, `noi_dung_vn`, `so_thu_tu`, `hien_thi`, `ten_us`) VALUES
(1, 'Thanh toán khi nhận hàng', '', 1, 1, 'Payment on delivery'),
(2, 'Chuyển khoản', '', 2, 1, 'Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `db_hotro`
--

CREATE TABLE `db_hotro` (
  `id` int(11) NOT NULL,
  `id_loai` varchar(255) NOT NULL,
  `ten_vn` varchar(255) NOT NULL,
  `ten_us` varchar(255) NOT NULL,
  `ten_jp` varchar(255) NOT NULL,
  `ten_ch` varchar(255) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `yahoo` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `sdt` varchar(200) NOT NULL,
  `so_thu_tu` int(11) NOT NULL DEFAULT 1,
  `hien_thi` tinyint(1) NOT NULL,
  `zalo` varchar(255) NOT NULL,
  `mo_ta_vn` text NOT NULL,
  `mo_ta_us` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_hotro`
--

INSERT INTO `db_hotro` (`id`, `id_loai`, `ten_vn`, `ten_us`, `ten_jp`, `ten_ch`, `hinh_anh`, `yahoo`, `skype`, `sdt`, `so_thu_tu`, `hien_thi`, `zalo`, `mo_ta_vn`, `mo_ta_us`) VALUES
(18, '', 'Chăm sóc khách hàng', '', '', '', '', '0912.977.099', 'Mr. Công', '0912.977.099 ( Mr. Công ) - 0937.827.351 ( Ms. Hạnh )', 2, 1, '0933 642 269', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_khachhang`
--

CREATE TABLE `db_khachhang` (
  `id` int(11) NOT NULL,
  `ten_vn` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `ngay_dang` int(11) NOT NULL,
  `hien_thi` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_khachhang`
--

INSERT INTO `db_khachhang` (`id`, `ten_vn`, `mat_khau`, `ho_ten`, `so_dien_thoai`, `email`, `dia_chi`, `ngay_dang`, `hien_thi`) VALUES
(3, 'kythuat01', 'c9ece136c3e846349a5a1312442fb99a', 'ho ten', 'so dt', 'emai', 'dc', 1442303304, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_lienhe`
--

CREATE TABLE `db_lienhe` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `ten_cong_ty` varchar(255) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_hoi` varchar(20) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_lienhe`
--

INSERT INTO `db_lienhe` (`id`, `ho_ten`, `email`, `sdt`, `dia_chi`, `ten_cong_ty`, `tieu_de`, `noi_dung`, `ngay_hoi`, `trang_thai`) VALUES
(44, 'Tony', 'kythuat01.pnvn@gmail.com', '0999999999', '', '', '', '', '11-01-2018 15:09:38', 1),
(45, 'Trần Nguyên', 'tranhoangnguyen198@gmail.com', '0939323039', '50/8/16 Quang Trung', '', '', 'muốn tìm hiểu tour Thái Lan', '25-09-2018 14:30:12', 1),
(46, 'HA HUY', 'tranngoc@abc.vn', '0988417770', 'TP.HCM', '', '', 'alo', '02-10-2018 10:54:29', 1),
(47, '', 'cnylmgzc@gmail.com', '', '', '', '', '<a href=\" https://buyessayy.us/ \">best website to buy essays</a> - essay buy \r\nbuy essays online, <a href=\" https://buyessayy.us/ \">buy an essay online</a> \r\nhttps://buyessayy.us/', '02-07-2019 05:21:52', 0),
(48, 'Nguyễn Công Hậu', '', '0978192307', '', '', '', 'hihi<br> Đặt ngày: 13/08/2019', '1565937942', 0),
(49, 'oke! Công Hậu', '', '0978199999', '', '', '', 'hhihi<br> Đặt ngày: 19/08/2019', '16/08/2019 13:47:13', 0),
(50, 'thư thư', '', '0909090908', '', '', '', 'thư thư<br> Đặt ngày: 30/07/2019', '16/08/2019 15:26:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_lienketwebsite`
--

CREATE TABLE `db_lienketwebsite` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `link` text NOT NULL,
  `so_thu_tu` int(11) NOT NULL,
  `hien_thi` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_lienketwebsite`
--

INSERT INTO `db_lienketwebsite` (`id`, `title`, `link`, `so_thu_tu`, `hien_thi`) VALUES
(77, 'vnexpress', 'http://vnexpress.net', 7, 1),
(76, 'dantri', 'htpp://dantri.com', 6, 1),
(75, 'facebook', 'http://facebook.com', 5, 1),
(74, 'Youtube', 'http://youtube.com', 4, 1),
(78, 'google.com', 'http://google.com.vn', 8, 1);

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
  `so_thu_tu` int(11) NOT NULL DEFAULT 1,
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
(1, 1, 1, 'Hình ảnh'),
(2, 2, 1, 'Bài viết'),
(3, 3, 1, 'Sản phẩm'),
(4, 4, 1, 'Tư vấn'),
(5, 5, 1, 'Liên hệ'),
(6, 6, 1, 'Video'),
(7, 7, 1, 'Giỏ hàng'),
(8, 8, 1, 'Đặt hàng thành công');

-- --------------------------------------------------------

--
-- Table structure for table `db_nhomhotro`
--

CREATE TABLE `db_nhomhotro` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stt` int(11) NOT NULL,
  `hide` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_nhomhotro`
--

INSERT INTO `db_nhomhotro` (`id`, `title`, `stt`, `hide`) VALUES
(1, 'Hỗ trợ kinh doanh', 1, 1),
(2, 'Tư vấn khách hàng', 2, 1);

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
-- Table structure for table `db_quan`
--

CREATE TABLE `db_quan` (
  `id` int(11) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `ten_vn` varchar(255) NOT NULL,
  `so_thu_tu` int(11) NOT NULL,
  `hien_thi` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_quan`
--

INSERT INTO `db_quan` (`id`, `id_loai`, `ten_vn`, `so_thu_tu`, `hien_thi`) VALUES
(1, 1, 'Quận 1', 1, 1),
(2, 1, 'Quận 2', 2, 1),
(3, 1, 'Quận 3', 3, 1),
(4, 4, 'Hoàng Kiếm', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_question`
--

CREATE TABLE `db_question` (
  `id` int(11) NOT NULL,
  `ten` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cau_hoi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tra_loi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay` int(11) NOT NULL,
  `hien_thi` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cau_hoi_us` text NOT NULL,
  `tra_loi_us` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_question`
--

INSERT INTO `db_question` (`id`, `ten`, `cau_hoi`, `tra_loi`, `ngay`, `hien_thi`, `email`, `cau_hoi_us`, `tra_loi_us`) VALUES
(1, 'Tony Tèo', '<p>Làm sao để có thể làm giàu nhanh chóng không cần làm việc</p>\r\n', '<p>Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!<br />\r\n<br />\r\n<br />\r\nBỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!<br />\r\n<br />\r\n<br />\r\nBỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!</p>\r\n', 1459741196, 1, '', '', ''),
(2, 'Tèo si rô', 'Kinh doanh cà phê làm giàu kiểu nào bà con, tiền sao nhiều nhiều vào', 'Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!<br />\r\n<br />\r\n<br />\r\nBỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!<br />\r\n<br />\r\n<br />\r\nBỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!Bỏ tiền nhiều vào, ăn may, tới lúc tự động giàu!', 1459741247, 1, '', '', ''),
(3, 'Tony', 'Oke chua ta!!!', '', 1502864656, 0, 'kythuat01.pnvn@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_duan`
--

CREATE TABLE `db_duan` (
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
  `gia` double NOT NULL DEFAULT 0,
  `khuyen_mai` int(11) NOT NULL DEFAULT 0,
  `thong_tin_vn` text NOT NULL,
  `thong_tin_us` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thong_tin_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thong_so_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thong_tai_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thong_chon_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dang` int(11) DEFAULT NULL,
  `tieu_bieu` tinyint(1) DEFAULT NULL,
  `sp_moi` tinyint(1) NOT NULL DEFAULT 0,
  `sp_hot` tinyint(1) NOT NULL,
  `title_vn` varchar(255) DEFAULT NULL,
  `title_us` varchar(255) NOT NULL,
  `title_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `thanh_pho` int(11) NOT NULL DEFAULT 0,
  `quan` int(11) NOT NULL DEFAULT 0,
  `hien_thi` tinyint(1) NOT NULL DEFAULT 1,
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
-- Dumping data for table `db_duan`
--

INSERT INTO `db_duan` (`id`, `id_loai`, `id_hang`, `alias_vn`, `alias_us`, `alias_ch`, `ma_sp`, `ten_vn`, `ten_us`, `ten_ch`, `mo_ta_vn`, `mo_ta_us`, `mo_ta_ch`, `hinh_anh`, `gia`, `khuyen_mai`, `thong_tin_vn`, `thong_tin_us`, `thong_tin_ch`, `thong_so_vn`, `thong_tai_vn`, `thong_chon_vn`, `ngay_dang`, `tieu_bieu`, `sp_moi`, `sp_hot`, `title_vn`, `title_us`, `title_ch`, `keyword`, `des`, `view`, `thanh_pho`, `quan`, `hien_thi`, `extra0`, `extra1`, `extra2`, `extra3`, `extra4`, `extra5`, `extra6`, `extra7`, `extra8`, `extra9`, `extra10`, `con_hang`, `so_thu_tu`, `style`, `the_tich`, `kich_thuoc`, `tong_cao`, `dung_luong`, `dien_the`, `trong_luong`, `thoi_gian`, `phuong_tien`, `khoi_hanh`) VALUES
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
-- Table structure for table `db_duan_hinhanh`
--

CREATE TABLE `db_duan_hinhanh` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `db_duan_phienban`
--

CREATE TABLE `db_duan_phienban` (
  `id` int(11) NOT NULL,
  `id_duan` int(11) NOT NULL,
  `id_extra` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_duan_phienban`
--

INSERT INTO `db_duan_phienban` (`id`, `id_duan`, `id_extra`, `type`) VALUES
(1, 59, 1, 0),
(2, 59, 31, 0),
(3, 59, 33, 1),
(24, 64, 1, 0),
(25, 64, 31, 0),
(26, 64, 32, 0),
(27, 64, 5, 1),
(28, 64, 33, 1),
(44, 68, 1, 0),
(45, 68, 31, 0),
(46, 68, 32, 0),
(47, 68, 5, 1),
(48, 68, 33, 1),
(64, 71, 1, 0),
(65, 71, 31, 0),
(66, 71, 32, 0),
(67, 71, 5, 1),
(68, 71, 33, 1),
(69, 70, 1, 0),
(70, 70, 31, 0),
(71, 70, 32, 0),
(72, 70, 5, 1),
(73, 70, 33, 1),
(74, 69, 1, 0),
(75, 69, 31, 0),
(76, 69, 32, 0),
(77, 69, 5, 1),
(78, 69, 33, 1),
(79, 67, 1, 0),
(80, 67, 31, 0),
(81, 67, 32, 0),
(82, 67, 5, 1),
(83, 67, 33, 1),
(84, 66, 1, 0),
(85, 66, 31, 0),
(86, 66, 32, 0),
(87, 66, 5, 1),
(88, 66, 33, 1),
(89, 65, 1, 0),
(90, 65, 31, 0),
(91, 65, 32, 0),
(92, 65, 5, 1),
(93, 65, 33, 1),
(109, 63, 1, 0),
(110, 63, 31, 0),
(111, 63, 32, 0),
(112, 63, 5, 1),
(113, 63, 33, 1),
(114, 62, 1, 0),
(115, 62, 31, 0),
(116, 62, 32, 0),
(117, 62, 5, 1),
(118, 62, 33, 1),
(119, 61, 1, 0),
(120, 61, 31, 0),
(121, 61, 32, 0),
(122, 61, 5, 1),
(123, 61, 33, 1),
(124, 60, 1, 0),
(125, 60, 31, 0),
(126, 60, 32, 0),
(127, 60, 5, 1),
(128, 60, 33, 1);

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
(1, 'Dịch vụ kế toán', '', 'Dịch vụ kế toán', '', 'Dịch vụ kế toán', '', '');

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
  `video` varchar(255) NOT NULL,
  `href` varchar(255) DEFAULT NULL,
  `title_vn` varchar(255) DEFAULT NULL,
  `mo_ta_vn` varchar(255) NOT NULL,
  `mo_ta_us` varchar(255) NOT NULL,
  `title_us` varchar(255) NOT NULL,
  `so_thu_tu` int(11) NOT NULL DEFAULT 1,
  `hien_thi` tinyint(1) NOT NULL DEFAULT 1,
  `id_loai` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_slide_sp`
--

INSERT INTO `db_slide_sp` (`id`, `hinh_anh`, `video`, `href`, `title_vn`, `mo_ta_vn`, `mo_ta_us`, `title_us`, `so_thu_tu`, `hien_thi`, `id_loai`) VALUES
(102, 'VinpearlCondotel-2-1024x576835959022980.jpg', '', '', 'Slider 1', '', '', '', 1, 1, 0),
(111, 'banner-empire343016635691.jpg', '', 'link', 'Gallery', '', '', '', 2, 1, 0);

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
-- Table structure for table `db_thanhpho`
--

CREATE TABLE `db_thanhpho` (
  `id` int(11) NOT NULL,
  `ten_vn` varchar(255) NOT NULL,
  `so_thu_tu` int(11) NOT NULL,
  `hien_thi` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_thanhpho`
--

INSERT INTO `db_thanhpho` (`id`, `ten_vn`, `so_thu_tu`, `hien_thi`) VALUES
(1, 'Hồ Chí Minh', 1, 1),
(2, 'Bình Dương', 2, 1),
(3, 'Vũng Tàu', 3, 1),
(4, 'Hà Nội', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_thongke`
--

CREATE TABLE `db_thongke` (
  `id` int(11) NOT NULL,
  `trong_ngay` int(11) NOT NULL,
  `trong_ngay_date` int(11) NOT NULL,
  `trong_tuan` int(11) NOT NULL,
  `trong_tuan_date` int(11) NOT NULL,
  `trong_thang` int(11) NOT NULL,
  `trong_thang_date` int(11) NOT NULL,
  `tong_truy_cap` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_thongke`
--

INSERT INTO `db_thongke` (`id`, `trong_ngay`, `trong_ngay_date`, `trong_tuan`, `trong_tuan_date`, `trong_thang`, `trong_thang_date`, `tong_truy_cap`) VALUES
(1, 2, 25, 38, 4, 38, 1, 16154);

-- --------------------------------------------------------

--
-- Table structure for table `db_thongke_detail`
--

CREATE TABLE `db_thongke_detail` (
  `session_id` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_thongke_detail`
--

INSERT INTO `db_thongke_detail` (`session_id`, `time`) VALUES
('ohj3knt7eu18iqe3ijt9c0fm11', 1516861842);

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
  `id_facebook` varchar(255) NOT NULL,
  `toa_do` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `icon_share` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_thongtin`
--

INSERT INTO `db_thongtin` (`id`, `company`, `hotline`, `address`, `hinh_anh`, `twitter`, `facebook`, `google`, `dien_thoai`, `fax`, `email`, `coppy_right`, `map`, `id_facebook`, `toa_do`, `favicon`, `icon_share`, `youtube`, `pinterest`, `instagram`) VALUES
(1, 'CÔNG TY TNHH DỊCH VỤ DU LỊCH HI TOUR PHÚ QUỐC', ' 0912.977.099', 'Tổ 01 khu phố 10, Thị trấn Dương Đông, Huyện Phú Quốc, Tỉnh Kiên Giang', '416506557301_favicon.jpg', 'https://www.facebook.com/PhuongNamVina/', 'https://www.facebook.com/websitephuongnamvina0915397117/?modal=admin_todo_tour', 'https://plus.google.com/u/0/', '', '', 'hitourpq@gmail.com', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31411.234116472868!2d103.94941792441702!3d10.228942582432708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a78b808b1256c7%3A0x79857f14a7af4364!2zdHQuIETGsMahbmcgxJDDtG5nLCBUcC4gUGjDuiBRdeG7kWMsIHThu4luaCBLacOqbiBHaWFuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1557479861391!5m2!1svi!2s\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '', 'Copyright 2019 @@', 'logo08767455616591686.png', 'logo087674556165.png', 'Youtube', 'Pinterest', 'Instagram');

-- --------------------------------------------------------

--
-- Table structure for table `db_thuvienanh`
--

CREATE TABLE `db_thuvienanh` (
  `id` int(11) NOT NULL,
  `id_loai` tinyint(1) NOT NULL,
  `ten_vn` varchar(255) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `hinh_anh_thumb` varchar(255) NOT NULL,
  `id_video` varchar(255) NOT NULL,
  `so_thu_tu` int(11) NOT NULL,
  `hien_thi` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `db_tintuc`
--

CREATE TABLE `db_tintuc` (
  `id` int(11) NOT NULL,
  `ten_vn` varchar(255) NOT NULL,
  `ten_us` varchar(255) NOT NULL,
  `ten_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias_vn` varchar(255) NOT NULL,
  `alias_us` varchar(255) NOT NULL,
  `alias_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_vn` text NOT NULL,
  `mo_ta_us` text NOT NULL,
  `mo_ta_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_vn` text NOT NULL,
  `noi_dung_us` text NOT NULL,
  `noi_dung_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `ngay_dang` int(11) NOT NULL,
  `noi_bat` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1 la noi bat, mac định là 0',
  `tieu_bieu` tinyint(4) NOT NULL,
  `hien_thi` tinyint(1) NOT NULL COMMENT '0 là ẩn, 1 là hiện',
  `title_vn` varchar(255) NOT NULL,
  `title_us` varchar(255) NOT NULL,
  `title_ch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `tags_hienthi` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `id_loai` int(11) NOT NULL,
  `so_thu_tu` int(11) NOT NULL,
  `hen_gio` int(11) NOT NULL,
  `hen_ngay` varchar(255) NOT NULL,
  `hen_ngay_dang` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_tintuc`
--

INSERT INTO `db_tintuc` (`id`, `ten_vn`, `ten_us`, `ten_ch`, `alias_vn`, `alias_us`, `alias_ch`, `mo_ta_vn`, `mo_ta_us`, `mo_ta_ch`, `noi_dung_vn`, `noi_dung_us`, `noi_dung_ch`, `hinh_anh`, `ngay_dang`, `noi_bat`, `tieu_bieu`, `hien_thi`, `title_vn`, `title_us`, `title_ch`, `keyword`, `tags`, `tags_hienthi`, `des`, `id_loai`, `so_thu_tu`, `hen_gio`, `hen_ngay`, `hen_ngay_dang`) VALUES
(640, 'Dịch vụ đăng ký nhãn hiệu', '', '', 'dich-vu-dang-ky-nhan-hieu', '', '', 'Thích một người căn bản không thể nào dấu được, tựa như mặt trời mọc mặt trời lặn, thủy triều lên rồi xuống là một chuyện vô cùng tự nhiên, chỉ sợ cho dù bạn một mực muốn che dấu nhưng ánh mắt bạn nhìn người ấy từ lâu đã tố cáo bạn với thiên hạ', '', '', '', '', '', 'sps393007385133.png', 1566222444, 1, 0, 1, 'Dịch vụ đăng ký nhãn hiệu', '', '', '', '', '', '', 1172, 0, 0, '2019-08-19', 1566147600),
(641, 'Dịch vụ giấy phép kinh doanh', '', '', 'dich-vu-giay-phep-kinh-doanh', '', '', 'Thích một người căn bản không thể nào dấu được, tựa như mặt trời mọc mặt trời lặn, thủy triều lên rồi xuống là một chuyện vô cùng tự nhiên, chỉ sợ cho dù bạn một mực muốn che dấu nhưng ánh mắt bạn nhìn người ấy từ lâu đã tố cáo bạn với thiên hạ', '', '', '', '', '', 'sps569003260288.png', 1566222472, 1, 0, 1, 'Dịch vụ giấy phép kinh doanh', '', '', '', '', '', '', 1172, 0, 0, '2019-08-19', 1566147600);

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
(1, '2c723b91d9c723c3691700c260c2c05cbb1edf5b', 'd033e22ae348aeb5660fc2140aec35850c4da997', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin', 'admin@gmail.com', 'Administrator', '', '', '', '', 1, 1, 1, 1473306606, 1),
(17, '', '9784066cd7bf4a266761fead0489589943bb81d7', '9784066cd7bf4a266761fead0489589943bb81d7', '', '', '', '', '', '', '', 1, 1, 1, 1473306606, 1);

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
  `id_loai` tinyint(1) NOT NULL DEFAULT 0
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
-- Indexes for table `db_baiviet_hinhanh`
--
ALTER TABLE `db_baiviet_hinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_category`
--
ALTER TABLE `db_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_chitietdathang`
--
ALTER TABLE `db_chitietdathang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_danhmuc_hoidap`
--
ALTER TABLE `db_danhmuc_hoidap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_dathang`
--
ALTER TABLE `db_dathang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_datlich`
--
ALTER TABLE `db_datlich`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_dknhamau`
--
ALTER TABLE `db_dknhamau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_email`
--
ALTER TABLE `db_email`
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
-- Indexes for table `db_hinhthucthanhtoan`
--
ALTER TABLE `db_hinhthucthanhtoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_hotro`
--
ALTER TABLE `db_hotro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_khachhang`
--
ALTER TABLE `db_khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_lienhe`
--
ALTER TABLE `db_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_lienketwebsite`
--
ALTER TABLE `db_lienketwebsite`
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
-- Indexes for table `db_nhomhotro`
--
ALTER TABLE `db_nhomhotro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_permission_group`
--
ALTER TABLE `db_permission_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_quan`
--
ALTER TABLE `db_quan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_question`
--
ALTER TABLE `db_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_duan`
--
ALTER TABLE `db_duan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_duan_hinhanh`
--
ALTER TABLE `db_duan_hinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_duan_phienban`
--
ALTER TABLE `db_duan_phienban`
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
-- Indexes for table `db_thanhpho`
--
ALTER TABLE `db_thanhpho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_thongke`
--
ALTER TABLE `db_thongke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_thongke_detail`
--
ALTER TABLE `db_thongke_detail`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `db_thongtin`
--
ALTER TABLE `db_thongtin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_thuvienanh`
--
ALTER TABLE `db_thuvienanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_tintuc`
--
ALTER TABLE `db_tintuc`
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
-- AUTO_INCREMENT for table `db_baiviet_hinhanh`
--
ALTER TABLE `db_baiviet_hinhanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `db_category`
--
ALTER TABLE `db_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1178;

--
-- AUTO_INCREMENT for table `db_chitietdathang`
--
ALTER TABLE `db_chitietdathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `db_danhmuc_hoidap`
--
ALTER TABLE `db_danhmuc_hoidap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_dathang`
--
ALTER TABLE `db_dathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `db_datlich`
--
ALTER TABLE `db_datlich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `db_dknhamau`
--
ALTER TABLE `db_dknhamau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_email`
--
ALTER TABLE `db_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
-- AUTO_INCREMENT for table `db_hinhthucthanhtoan`
--
ALTER TABLE `db_hinhthucthanhtoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `db_hotro`
--
ALTER TABLE `db_hotro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `db_khachhang`
--
ALTER TABLE `db_khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_lienhe`
--
ALTER TABLE `db_lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `db_lienketwebsite`
--
ALTER TABLE `db_lienketwebsite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

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
-- AUTO_INCREMENT for table `db_nhomhotro`
--
ALTER TABLE `db_nhomhotro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_permission_group`
--
ALTER TABLE `db_permission_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `db_quan`
--
ALTER TABLE `db_quan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `db_question`
--
ALTER TABLE `db_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_duan`
--
ALTER TABLE `db_duan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `db_duan_hinhanh`
--
ALTER TABLE `db_duan_hinhanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=531;

--
-- AUTO_INCREMENT for table `db_duan_phienban`
--
ALTER TABLE `db_duan_phienban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `db_tags`
--
ALTER TABLE `db_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `db_thanhpho`
--
ALTER TABLE `db_thanhpho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `db_thongke`
--
ALTER TABLE `db_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_thongtin`
--
ALTER TABLE `db_thongtin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_thuvienanh`
--
ALTER TABLE `db_thuvienanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `db_tintuc`
--
ALTER TABLE `db_tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=642;

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
