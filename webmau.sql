-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2018 at 05:22 AM
-- Server version: 5.6.37
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `id` int(11) NOT NULL,
  `tm` int(11) NOT NULL,
  `ip` varchar(16) NOT NULL DEFAULT '0.0.0.0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_about`
--

CREATE TABLE IF NOT EXISTS `table_about` (
  `id` int(10) unsigned NOT NULL,
  `ten` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `noidung` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL DEFAULT '0',
  `ngaysua` int(11) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `tenen` varchar(225) NOT NULL,
  `motaen` text NOT NULL,
  `noidungen` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_anhnen`
--

CREATE TABLE IF NOT EXISTS `table_anhnen` (
  `id` int(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `color_pro` varchar(225) NOT NULL,
  `position_x` varchar(225) NOT NULL,
  `position_y` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `fix` tinyint(1) NOT NULL DEFAULT '0',
  `bgsize` varchar(225) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `trangthai` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_background`
--

CREATE TABLE IF NOT EXISTS `table_background` (
  `id` int(10) unsigned NOT NULL,
  `ten` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `noidung` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL DEFAULT '0',
  `ngaysua` int(11) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `motaen` text NOT NULL,
  `noidungen` text NOT NULL,
  `photoen` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_chitietdonhang`
--

CREATE TABLE IF NOT EXISTS `table_chitietdonhang` (
  `id` int(10) unsigned NOT NULL,
  `ten` varchar(225) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `size` varchar(30) NOT NULL,
  `tonggia` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) unsigned NOT NULL DEFAULT '0',
  `ngaysua` int(10) unsigned NOT NULL DEFAULT '0',
  `madonhang` varchar(50) NOT NULL,
  `masp` varchar(200) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `giakm` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `mausac` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_com`
--

CREATE TABLE IF NOT EXISTS `table_com` (
  `id` int(10) unsigned NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) unsigned NOT NULL DEFAULT '0',
  `ngaysua` int(10) unsigned NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `com` varchar(100) NOT NULL,
  `act` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_company`
--

CREATE TABLE IF NOT EXISTS `table_company` (
  `id` int(10) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `dienthoai` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `yahoo` varchar(100) NOT NULL,
  `skype` varchar(100) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `toado` varchar(50) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `fanpage` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `tiwtter` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `website` varchar(50) NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `diachien` varchar(500) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `faviconthumb` varchar(255) NOT NULL,
  `codethem` text NOT NULL,
  `sitemap` varchar(20) NOT NULL,
  `soluong_sp` int(11) NOT NULL,
  `soluong_spk` int(11) NOT NULL,
  `soluong_tin` int(11) NOT NULL,
  `soluong_tink` int(11) NOT NULL,
  `lang_default` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `description` varchar(300) NOT NULL,
  `analytics` text NOT NULL,
  `webmaster` text NOT NULL,
  `keygoogle` varchar(255) NOT NULL,
  `site_key` text NOT NULL,
  `secret_key` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_com_quyen`
--

CREATE TABLE IF NOT EXISTS `table_com_quyen` (
  `id` int(10) unsigned NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) unsigned NOT NULL DEFAULT '0',
  `ngaysua` int(10) unsigned NOT NULL DEFAULT '0',
  `com` varchar(100) NOT NULL,
  `act` varchar(400) NOT NULL,
  `type` varchar(100) NOT NULL,
  `id_quyen` int(11) NOT NULL,
  `act_cap` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_danhgiasao`
--

CREATE TABLE IF NOT EXISTS `table_danhgiasao` (
  `id` int(10) unsigned NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `link` varchar(400) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `time` int(11) NOT NULL,
  `giatri` int(11) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_donhang`
--

CREATE TABLE IF NOT EXISTS `table_donhang` (
  `id` int(11) NOT NULL,
  `madonhang` varchar(20) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `httt` varchar(150) NOT NULL,
  `tonggia` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ghichu` text NOT NULL,
  `ngaytao` varchar(30) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `thanhpho` int(11) NOT NULL,
  `quan` int(11) NOT NULL,
  `htgh` int(11) NOT NULL DEFAULT '1',
  `nguongoc` varchar(255) NOT NULL,
  `ngaycapnhat` int(11) NOT NULL,
  `ngaydi` varchar(30) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `ngayin` varchar(300) NOT NULL,
  `export` tinyint(4) NOT NULL,
  `gioin` varchar(20) NOT NULL,
  `phivanchuyen` int(11) NOT NULL,
  `phithem` int(11) NOT NULL,
  `thuve` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `phuong` int(11) NOT NULL,
  `phigiam` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_giasearch`
--

CREATE TABLE IF NOT EXISTS `table_giasearch` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giatu` int(11) NOT NULL,
  `giaden` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_group`
--

CREATE TABLE IF NOT EXISTS `table_group` (
  `id` int(10) unsigned NOT NULL,
  `title_vi` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `keywords_vi` varchar(1024) NOT NULL,
  `keywords_en` varchar(1024) NOT NULL,
  `description_vi` varchar(1024) NOT NULL,
  `description_en` varchar(1024) NOT NULL,
  `ten_jp` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota_vi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung_vi` text NOT NULL,
  `noidung_en` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL DEFAULT '0',
  `ngaysua` int(11) NOT NULL DEFAULT '0',
  `title_jp` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description_jp` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota_jp` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung_jp` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keywords_jp` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten_vi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `luotxem` int(11) NOT NULL,
  `h1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `h2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `h3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noibat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_hinhanh`
--

CREATE TABLE IF NOT EXISTS `table_hinhanh` (
  `id` int(10) unsigned NOT NULL,
  `photo` varchar(225) NOT NULL,
  `ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `thumb` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `id_hinhanh` int(11) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `motaen` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_hinhthucgiaohang`
--

CREATE TABLE IF NOT EXISTS `table_hinhthucgiaohang` (
  `id` int(10) unsigned NOT NULL,
  `id_item` int(11) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `noidung` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) unsigned NOT NULL DEFAULT '0',
  `ngaysua` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_httt`
--

CREATE TABLE IF NOT EXISTS `table_httt` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_letruot`
--

CREATE TABLE IF NOT EXISTS `table_letruot` (
  `id` int(10) unsigned NOT NULL,
  `photo` varchar(225) NOT NULL,
  `ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `letruot` varchar(50) NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `motaen` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_lkweb`
--

CREATE TABLE IF NOT EXISTS `table_lkweb` (
  `id` int(10) unsigned NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) unsigned NOT NULL DEFAULT '0',
  `ngaysua` int(10) unsigned NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL,
  `tenen` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_news`
--

CREATE TABLE IF NOT EXISTS `table_news` (
  `id` int(10) unsigned NOT NULL,
  `id_item` int(11) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `noidung` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) unsigned NOT NULL DEFAULT '0',
  `ngaysua` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `description` varchar(200) NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `motaen` text NOT NULL,
  `noidungen` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `id_danhmuc` int(10) NOT NULL,
  `id_list` int(10) NOT NULL,
  `id_cat` int(10) NOT NULL,
  `tag` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_newsletter`
--

CREATE TABLE IF NOT EXISTS `table_newsletter` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `stt` int(10) NOT NULL,
  `hienthi` int(10) NOT NULL,
  `ngaytao` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_news_cat`
--

CREATE TABLE IF NOT EXISTS `table_news_cat` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `noidung` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `description` varchar(200) NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `noidungen` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `motaen` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_news_danhmuc`
--

CREATE TABLE IF NOT EXISTS `table_news_danhmuc` (
  `id` int(11) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `description` varchar(200) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `noidung` text NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `noidungen` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `motaen` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_news_item`
--

CREATE TABLE IF NOT EXISTS `table_news_item` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `description` varchar(200) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `motaen` text NOT NULL,
  `noidungen` text NOT NULL,
  `mota` text NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_news_list`
--

CREATE TABLE IF NOT EXISTS `table_news_list` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `noidung` text NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `noidungen` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `motaen` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_online`
--

CREATE TABLE IF NOT EXISTS `table_online` (
  `id` int(10) unsigned NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `time` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_permission`
--

CREATE TABLE IF NOT EXISTS `table_permission` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_exec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `edit_exec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delete_exec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `com` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `man_exec` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_exec` int(11) NOT NULL,
  `act_exec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `com_act` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_phanquyen`
--

CREATE TABLE IF NOT EXISTS `table_phanquyen` (
  `id` int(10) unsigned NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) unsigned NOT NULL DEFAULT '0',
  `ngaysua` int(10) unsigned NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL,
  `tenen` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_place_city`
--

CREATE TABLE IF NOT EXISTS `table_place_city` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `phivanchuyen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_place_dist`
--

CREATE TABLE IF NOT EXISTS `table_place_dist` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `phivanchuyen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_place_street`
--

CREATE TABLE IF NOT EXISTS `table_place_street` (
  `id` int(10) unsigned NOT NULL,
  `id_city` int(11) NOT NULL,
  `id_dist` int(10) NOT NULL,
  `ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `stt` int(2) NOT NULL,
  `hienthi` int(2) NOT NULL,
  `ngaysua` int(10) NOT NULL,
  `ngaytao` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_place_ward`
--

CREATE TABLE IF NOT EXISTS `table_place_ward` (
  `id` int(10) unsigned NOT NULL,
  `id_city` int(11) NOT NULL,
  `id_dist` int(10) NOT NULL,
  `ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `stt` int(2) NOT NULL,
  `hienthi` int(2) NOT NULL,
  `ngaysua` int(10) NOT NULL,
  `ngaytao` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_product`
--

CREATE TABLE IF NOT EXISTS `table_product` (
  `id` int(10) unsigned NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_item` int(10) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_hang` int(10) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `masp` varchar(100) NOT NULL,
  `gia` int(100) NOT NULL,
  `giakm` int(100) NOT NULL,
  `noidung` text NOT NULL,
  `luotxem` int(11) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `spmoi` int(11) NOT NULL,
  `spbanchay` tinyint(4) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `description` varchar(200) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tieubieu` tinyint(4) NOT NULL,
  `nhasanxuat` varchar(200) NOT NULL,
  `id_nhasanxuat` int(11) NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `motaen` text NOT NULL,
  `noidungen` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` varchar(200) NOT NULL,
  `mausac` varchar(200) NOT NULL,
  `tag` text NOT NULL,
  `ngay` varchar(255) NOT NULL,
  `chitiet` text NOT NULL,
  `chitieten` text NOT NULL,
  `luuy` text NOT NULL,
  `luuyen` text NOT NULL,
  `lienhe` text NOT NULL,
  `lienheen` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_cat`
--

CREATE TABLE IF NOT EXISTS `table_product_cat` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_hang` int(11) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `noidung` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `description` varchar(200) NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `noidungen` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `motaen` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_color`
--

CREATE TABLE IF NOT EXISTS `table_product_color` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bg_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `noibat` int(11) NOT NULL,
  `tenen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_color_condition`
--

CREATE TABLE IF NOT EXISTS `table_product_color_condition` (
  `id` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_danhmuc`
--

CREATE TABLE IF NOT EXISTS `table_product_danhmuc` (
  `id` int(11) NOT NULL,
  `id_hang` int(11) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `description` varchar(200) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `noidung` text NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `noidungen` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `motaen` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_hang`
--

CREATE TABLE IF NOT EXISTS `table_product_hang` (
  `id` int(11) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `description` varchar(200) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `noidung` text NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `noidungen` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `motaen` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_item`
--

CREATE TABLE IF NOT EXISTS `table_product_item` (
  `id` int(10) unsigned NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(10) NOT NULL,
  `ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `photo` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `thumb` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `stt` int(2) NOT NULL,
  `hienthi` int(2) NOT NULL,
  `ngaysua` int(10) NOT NULL,
  `ngaytao` int(10) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_hang` int(11) NOT NULL,
  `tenen` varchar(255) CHARACTER SET utf8 NOT NULL,
  `noidung` text CHARACTER SET utf8 NOT NULL,
  `noidungen` text CHARACTER SET utf8 NOT NULL,
  `type` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `mota` text COLLATE latin1_general_ci NOT NULL,
  `motaen` text COLLATE latin1_general_ci NOT NULL,
  `noibat` int(11) NOT NULL,
  `keywords` text COLLATE latin1_general_ci NOT NULL,
  `title` text COLLATE latin1_general_ci NOT NULL,
  `description` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_list`
--

CREATE TABLE IF NOT EXISTS `table_product_list` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_hang` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `noidung` text NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `noidungen` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `motaen` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_size`
--

CREATE TABLE IF NOT EXISTS `table_product_size` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `tenen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_size_condition`
--

CREATE TABLE IF NOT EXISTS `table_product_size_condition` (
  `id` int(11) NOT NULL,
  `id_size` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_protag`
--

CREATE TABLE IF NOT EXISTS `table_protag` (
  `id` int(10) unsigned NOT NULL,
  `id_pro` int(10) NOT NULL,
  `id_tag` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_slider`
--

CREATE TABLE IF NOT EXISTS `table_slider` (
  `id` int(10) unsigned NOT NULL,
  `photo` varchar(225) NOT NULL,
  `ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `thumb` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `id_slider` int(11) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `motaen` text NOT NULL,
  `vitri` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_tags`
--

CREATE TABLE IF NOT EXISTS `table_tags` (
  `id` int(10) unsigned NOT NULL,
  `ten` varchar(225) CHARACTER SET utf8 NOT NULL,
  `type` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT 'product',
  `id_danhmuc` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_tinhtrang`
--

CREATE TABLE IF NOT EXISTS `table_tinhtrang` (
  `id` int(11) NOT NULL,
  `trangthai` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE IF NOT EXISTS `table_user` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `dienthoai` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `diachi` varchar(225) NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  `nick_yahoo` varchar(225) NOT NULL,
  `nick_skype` varchar(225) NOT NULL,
  `congty` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `role` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `com` varchar(225) NOT NULL DEFAULT 'user',
  `quyen` varchar(255) NOT NULL,
  `ngaysinh` int(11) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `nhom` int(11) NOT NULL,
  `id_facebook` varchar(100) NOT NULL,
  `id_google` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_video`
--

CREATE TABLE IF NOT EXISTS `table_video` (
  `id` int(10) unsigned NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) unsigned NOT NULL DEFAULT '0',
  `ngaysua` int(10) unsigned NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL,
  `tenen` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_vnexpress`
--

CREATE TABLE IF NOT EXISTS `table_vnexpress` (
  `id` int(10) unsigned NOT NULL,
  `id_item` int(11) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `noidung` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) unsigned NOT NULL DEFAULT '0',
  `ngaysua` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `description` varchar(200) NOT NULL,
  `tenen` varchar(255) NOT NULL,
  `motaen` text NOT NULL,
  `noidungen` text NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_yahoo`
--

CREATE TABLE IF NOT EXISTS `table_yahoo` (
  `id` int(10) unsigned NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) unsigned NOT NULL DEFAULT '0',
  `ngaysua` int(10) unsigned NOT NULL DEFAULT '0',
  `yahoo` varchar(50) NOT NULL,
  `skype` varchar(50) NOT NULL,
  `dienthoai` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tenen` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_about`
--
ALTER TABLE `table_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_anhnen`
--
ALTER TABLE `table_anhnen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_background`
--
ALTER TABLE `table_background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_chitietdonhang`
--
ALTER TABLE `table_chitietdonhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_com`
--
ALTER TABLE `table_com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_company`
--
ALTER TABLE `table_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_com_quyen`
--
ALTER TABLE `table_com_quyen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_danhgiasao`
--
ALTER TABLE `table_danhgiasao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_donhang`
--
ALTER TABLE `table_donhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_giasearch`
--
ALTER TABLE `table_giasearch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_group`
--
ALTER TABLE `table_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_hinhanh`
--
ALTER TABLE `table_hinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_hinhthucgiaohang`
--
ALTER TABLE `table_hinhthucgiaohang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_httt`
--
ALTER TABLE `table_httt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_letruot`
--
ALTER TABLE `table_letruot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_lkweb`
--
ALTER TABLE `table_lkweb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_news`
--
ALTER TABLE `table_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_newsletter`
--
ALTER TABLE `table_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_news_cat`
--
ALTER TABLE `table_news_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_news_danhmuc`
--
ALTER TABLE `table_news_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_news_item`
--
ALTER TABLE `table_news_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_news_list`
--
ALTER TABLE `table_news_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_online`
--
ALTER TABLE `table_online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_permission`
--
ALTER TABLE `table_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_phanquyen`
--
ALTER TABLE `table_phanquyen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_place_city`
--
ALTER TABLE `table_place_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_place_dist`
--
ALTER TABLE `table_place_dist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_place_street`
--
ALTER TABLE `table_place_street`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_place_ward`
--
ALTER TABLE `table_place_ward`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product`
--
ALTER TABLE `table_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_cat`
--
ALTER TABLE `table_product_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_color`
--
ALTER TABLE `table_product_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_color_condition`
--
ALTER TABLE `table_product_color_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_danhmuc`
--
ALTER TABLE `table_product_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_hang`
--
ALTER TABLE `table_product_hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_item`
--
ALTER TABLE `table_product_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_list`
--
ALTER TABLE `table_product_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_size`
--
ALTER TABLE `table_product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_size_condition`
--
ALTER TABLE `table_product_size_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_protag`
--
ALTER TABLE `table_protag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_slider`
--
ALTER TABLE `table_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_tags`
--
ALTER TABLE `table_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_tinhtrang`
--
ALTER TABLE `table_tinhtrang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_video`
--
ALTER TABLE `table_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_vnexpress`
--
ALTER TABLE `table_vnexpress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_yahoo`
--
ALTER TABLE `table_yahoo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_about`
--
ALTER TABLE `table_about`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_anhnen`
--
ALTER TABLE `table_anhnen`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_background`
--
ALTER TABLE `table_background`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_chitietdonhang`
--
ALTER TABLE `table_chitietdonhang`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_com`
--
ALTER TABLE `table_com`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_company`
--
ALTER TABLE `table_company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_com_quyen`
--
ALTER TABLE `table_com_quyen`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_danhgiasao`
--
ALTER TABLE `table_danhgiasao`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_donhang`
--
ALTER TABLE `table_donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_giasearch`
--
ALTER TABLE `table_giasearch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_group`
--
ALTER TABLE `table_group`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_hinhanh`
--
ALTER TABLE `table_hinhanh`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_hinhthucgiaohang`
--
ALTER TABLE `table_hinhthucgiaohang`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_httt`
--
ALTER TABLE `table_httt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_letruot`
--
ALTER TABLE `table_letruot`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_lkweb`
--
ALTER TABLE `table_lkweb`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_news`
--
ALTER TABLE `table_news`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_newsletter`
--
ALTER TABLE `table_newsletter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_news_cat`
--
ALTER TABLE `table_news_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_news_danhmuc`
--
ALTER TABLE `table_news_danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_news_item`
--
ALTER TABLE `table_news_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_news_list`
--
ALTER TABLE `table_news_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_online`
--
ALTER TABLE `table_online`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_permission`
--
ALTER TABLE `table_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_phanquyen`
--
ALTER TABLE `table_phanquyen`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_place_city`
--
ALTER TABLE `table_place_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_place_dist`
--
ALTER TABLE `table_place_dist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_place_street`
--
ALTER TABLE `table_place_street`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_place_ward`
--
ALTER TABLE `table_place_ward`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_product`
--
ALTER TABLE `table_product`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_product_cat`
--
ALTER TABLE `table_product_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_product_color`
--
ALTER TABLE `table_product_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_product_color_condition`
--
ALTER TABLE `table_product_color_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_product_danhmuc`
--
ALTER TABLE `table_product_danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_product_hang`
--
ALTER TABLE `table_product_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_product_item`
--
ALTER TABLE `table_product_item`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_product_list`
--
ALTER TABLE `table_product_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_product_size`
--
ALTER TABLE `table_product_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_product_size_condition`
--
ALTER TABLE `table_product_size_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_protag`
--
ALTER TABLE `table_protag`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_slider`
--
ALTER TABLE `table_slider`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_tags`
--
ALTER TABLE `table_tags`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_tinhtrang`
--
ALTER TABLE `table_tinhtrang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_video`
--
ALTER TABLE `table_video`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_vnexpress`
--
ALTER TABLE `table_vnexpress`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_yahoo`
--
ALTER TABLE `table_yahoo`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
