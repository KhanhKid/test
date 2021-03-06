-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 07:58 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhlapr2v_laptop24`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `value` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `seo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `morder` int(2) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `value`, `seo`, `morder`, `status`) VALUES
(1, 'Laptop Acer', 'laptop-acer', 0, 1),
(2, 'Laptop Asus', 'laptop-asus', 0, 1),
(3, 'Laptop HP', 'laptop-hp', 0, 1),
(4, 'Laptop Dell', 'laptop-dell', 0, 1),
(5, 'Laptop IBM - Lenovo', 'laptop-ibm-lenovo', 0, 1),
(7, 'Laptop Sony', 'laptop-sony', 0, 1),
(8, 'Laptop Toshiba', 'laptop-toshiba', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `value` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `morder` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `value`, `morder`, `status`) VALUES
(1, 'Gaming', 0, 1),
(2, 'Văn Phòng', 0, 1),
(4, 'Work Station', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `info_page`
--

CREATE TABLE `info_page` (
  `item` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `info_page`
--

INSERT INTO `info_page` (`item`, `value`) VALUES
('address', 'Quận Tân Bình , Tp. Hồ Chí Minh111'),
('backgroundlogo', '/assets/frontend/image/data/backgroundlogo.png?v=20170630054309'),
('email', 'xxx@gmail.coms'),
('facebook', '<div class="fb-page" data-href="https://www.facebook.com/thehackernews" data-tabs="timeline" data-width="30" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">\r\n                                <blockquote cite="https://www.facebook.com/thehackernews" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thehackernews">The Hacker News</a></blockquote>\r\n                            </div>'),
('info', 'Laptop24 chuyên mua bán laptop nguyên zin ngoại hình đẹp.\r\nCam kết không bán hàng đã qua sửa chữa, hàng lỗi, kém chất lượng\r\nTất cả hàng bán ra đều BẢO HÀNH CHU ĐÁO.\r\nMUA BÁN UY TÍN. GIÁ CẢ CẠNH TRANH.'),
('logo', '/assets/frontend/image/data/logo.png?v=20170630054332'),
('map', '<iframe width="250" height="280" id="gmap_canvas" src="https://maps.google.com/maps?q=Notre%20Dame%20Cathedral%2C%20C%C3%B4ng%20x%C3%A3%20Paris%2C%20Ho%20Chi%20Minh%20City%2C%20Ho%20Chi%20Minh%2C%20Vietnam&t=&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>'),
('phone', '0909371795');

-- --------------------------------------------------------

--
-- Table structure for table `m_admin_user`
--

CREATE TABLE `m_admin_user` (
  `pk` int(11) NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_name` varchar(100) DEFAULT NULL,
  `login_time` datetime NOT NULL,
  `sid` varchar(100) NOT NULL,
  `reg_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `up_datetime` datetime NOT NULL,
  `login_hash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_admin_user`
--

INSERT INTO `m_admin_user` (`pk`, `admin_id`, `admin_pass`, `admin_name`, `login_time`, `sid`, `reg_datetime`, `up_datetime`, `login_hash`) VALUES
(1, 'root1234', 'i7cvGlkMNsMX9IYm045zNB4y7OjJYwQ6O/jjsQSc1KQ=', 'root root', '2017-06-30 02:34:55', '0', '2017-01-01 02:04:01', '2017-02-17 17:42:56', 'd2f458a48db5ff1fe1e038106af7a1c8767dd855'),
(2, 'trinhtrinh', 'nkpBUVlTNgMYkWNiY72XYYMGZ0yDaxtJQXGHPLdZ+Q4=', 'trinh trinh', '2017-03-24 13:48:31', '0', '2017-01-26 03:53:19', '1970-01-01 08:00:00', '7bfca37319b03e9b650194191ef8ab187c7ee68a'),
(6, 'diadora001', 'DxS2PTLMqWTBp1fARx0AGAmQYWJVIAH00l7oPObEYNQ=', 'diadora test', '1970-01-01 08:00:00', '0', '2017-01-26 04:22:55', '1970-01-01 08:00:00', ''),
(8, 'khanhkid', 'i7cvGlkMNsMX9IYm045zNB4y7OjJYwQ6O/jjsQSc1KQ=', 'root root', '2017-05-17 16:33:11', '0', '2017-01-01 02:04:01', '2017-02-06 11:18:36', '4b93fcae21e1bcd9706430f0e1439cbc2415c9a2'),
(10, 'nakanishi', 'qBPmknBwJ/Y2YdxmM7lKdF0ShQngMjZVVOALVeOnyUs=', 'wws中西', '2017-02-20 12:09:05', '0', '2017-02-07 04:45:39', '1970-01-01 09:00:00', '850cf69f5b4eb6335dc406810fdd567dc63e97dc'),
(11, 'sensen', 'E+eQNfw7WKSS1cpoYc0m5gdAJuobjQUTu672wLpi0Wc=', 'sen sen', '2017-03-31 15:24:31', '0', '2017-02-23 09:52:42', '1970-01-01 08:00:00', '8844ae207eebaca5ffe2ea79c6704674ebd0fd49'),
(12, 'newnew', 'O9m02//bs+eMHDT0RKCTIfZENnk3B4ZXUtbQyjvctd0=', 'new user', '1970-01-01 08:00:00', '0', '2017-03-08 01:42:42', '1970-01-01 08:00:00', ''),
(13, 'diadora', '+R7FGDNLCM7Yld6LguiCG+HvlRxjSmF53U8/IS4W8ao=', 'test', '2017-03-18 14:51:19', '0', '2017-03-13 11:15:28', '2017-03-13 20:15:28', 'ae36cf4a9fd06e00da059ee242c35e69bdaa3cd7');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `str_search` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_seo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `brandID` int(3) NOT NULL,
  `cateID` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortdetail` text COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `str_search`, `link_seo`, `price`, `brandID`, `cateID`, `shortdetail`, `detail`, `status`, `timestamp`, `img`, `pdf`) VALUES
(1, 'laptop Dell Alienware M17X R5, i7 haswell 4910QM, 16G, 256G, GTX880M, giá rẻ', 'ram:16g,vga:1g,hdd:512g,ssd:256,manhinh:14,chuanmanhinh:touch,cpu:i5', 'laptop-dell-alienware-m17x-r5-i7-haswell-4910qm-16g-256g-gtx880m-gia-re', 500000, 5, ',2,', '<p>ertyert erty ert</p>\r\n', '<p>sadf A asd</p>\r\n', 1, '0000-00-00 00:00:00', 'product/dell M17r5 (7) (Copy)-228x228.JPG', 'product/CVCheQuocHuu.pdf'),
(2, 'laptop Dell Alienware M18 R3, i7 4700QM, 16G, 256G, GTX770, giá rẻ', '', 'laptop-dell-alienware-m18-r3-i7-4700qm-16g-256g-gtx770-gia-re', 28500000, 4, ',4,2,1,', '<p>saddf afsdf asd</p>\r\n', '<p>a sd fasd fasdf ad</p>\r\n', 0, '0000-00-00 00:00:00', 'product/dell M17r5 (7) (Copy)-228x228.JPG', 'product/CVCheQuocHuu.pdf'),
(3, 'Dell Precision M6800, i7 4810QM, 16G, K3100M, ssd256G, zin100%, rẻ ', '', 'dell-precision-m6800-i7-4810qm-16g-k3100m-ssd256g-zin100-re-', 25900000, 7, ',2,4,', '<p>asdf asdf asdf asdfasdf</p>\r\n', '', 0, '0000-00-00 00:00:00', 'product/dell M4600 (12)_734x979-228x228.jpg', ''),
(4, 'Dell Alienware M17X R5, i7 4720HQ, 16G, 1T, GTX970, Fullbox, giá rẻ', '', 'dell-alienware-m17x-r5-i7-4720hq-16g-1t-gtx970-fullbox-gia-re', 50055252, 4, ',2,', '<p>sad fgasd fasdf asd</p>\r\n', '<p>asdf asd</p>\r\n', 0, '0000-00-00 00:00:00', 'product/dell alienware 14 (2) (Copy)-228x228.JPG', ''),
(5, 'Macbook pro retina 2013, i7 - 2,4G, 16G, ssd 512G, zin100%, giá rẻ ', 'ram:4g,vga:2g,ssd:125,manhinh:14,chuanmanhinh:touch,cpu:i3,', 'macbook-pro-retina-2013-i7---24g-16g-ssd-512g-zin100-gia-re-', 32656665, 4, ',2,', '<p>045645+45+</p>\r\n', '<p>456+456+.456+.456</p>\r\n', 1, '0000-00-00 00:00:00', 'product/dell M4600 (12)_734x979-228x228.jpg', ''),
(6, 'Macbook pro retina 2013, i7 - 2,4G, 16G', '', 'macbook-pro-retina-2013-i7---24g-16g', 2147483647, 0, ',2,', '<p>qwerqwer</p>\r\n', '<p>qwerqwe</p>\r\n', 0, '2017-05-14 19:29:03', 'product/dell M4600 (12)_734x979-228x228.jpg', ''),
(7, 'Macbook pro retina 2013, i7 - 2,4G, 16G', 'ram:16g,vga:1g,hdd:512g,ssd:256,manhinh:17,chuanmanhinh:touch,cpu:i5 4343', 'macbook-pro-retina-2013-i7---24g-16g', 2147483647, 0, ',2,', '<p>qwerqwer</p>\r\n', '<p>qwerqwe</p>\r\n', 1, '2017-05-14 19:29:03', 'product/dell M4600 (12)_734x979-228x228.jpg', ''),
(8, 'ddef v asdfsa asdfass', '', 'ddef-v-asdfsa-asdfass', 33333, 5, ',1,', '<p>asdfadsf</p>\r\n', '<p>asdfasd</p>\r\n', 0, '2017-05-17 09:37:30', 'product/doi-con-heo-dia-chi-chup-hinh-voi-view-sieu-dep-o-vung-tau-ivivu-10.png', 'product/10-DO THANH NGHI(80-90).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `search_option`
--

CREATE TABLE `search_option` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `value` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `search_option`
--

INSERT INTO `search_option` (`id`, `type`, `value`) VALUES
(1, 1, '4'),
(2, 1, '8'),
(3, 2, 'i3'),
(4, 2, 'i5'),
(5, 3, '128'),
(6, 3, '256'),
(7, 3, '512'),
(8, 4, '128'),
(9, 4, '256'),
(10, 4, '512'),
(11, 5, '1'),
(12, 5, '2'),
(13, 6, '14'),
(14, 6, '15'),
(15, 7, 'touch'),
(16, 7, 'hd'),
(17, 6, '17'),
(22, 1, '16');

-- --------------------------------------------------------

--
-- Table structure for table `search_option_type`
--

CREATE TABLE `search_option_type` (
  `id` int(11) NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `search_option_type`
--

INSERT INTO `search_option_type` (`id`, `type`) VALUES
(1, 'Dung Lượng RAM'),
(2, 'CPU'),
(3, 'SSD'),
(4, 'HDD'),
(5, 'VGA'),
(6, 'Screen'),
(7, 'QualityScreen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_page`
--
ALTER TABLE `info_page`
  ADD PRIMARY KEY (`item`);

--
-- Indexes for table `m_admin_user`
--
ALTER TABLE `m_admin_user`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search_option`
--
ALTER TABLE `search_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search_option_type`
--
ALTER TABLE `search_option_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `m_admin_user`
--
ALTER TABLE `m_admin_user`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `search_option`
--
ALTER TABLE `search_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `search_option_type`
--
ALTER TABLE `search_option_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
