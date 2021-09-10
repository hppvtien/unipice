-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 02:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `status`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'adsmo', 'tlead01@gmail.com', NULL, '$2y$10$rayJ/U4/vyAJn0dhPnehH..GNtioVtH7he0BKJHWsCkMGAqMY229S', '0986420994', 1, NULL, NULL, NULL, NULL),
(2, 'Đại Nguyển', 'dainguyen@gmail.com', NULL, '$2y$10$rayJ/U4/vyAJn0dhPnehH..GNtioVtH7he0BKJHWsCkMGAqMY229S', '0766592222', 0, NULL, NULL, '2020-11-04 12:53:51', '2020-11-04 12:53:51'),
(3, 'Được', 'duocnv@gmail.com', NULL, '$2y$10$rayJ/U4/vyAJn0dhPnehH..GNtioVtH7he0BKJHWsCkMGAqMY229S', '0988111222', 1, NULL, NULL, '2020-12-27 02:21:36', '2020-12-27 02:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `bank_info`
--

CREATE TABLE `bank_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `hotline` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `account` varchar(30) DEFAULT NULL,
  `master` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_info`
--

INSERT INTO `bank_info` (`id`, `name`, `address`, `hotline`, `email`, `account`, `master`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ngân hàng Vib', 'Ha noi', '9699825873', 'ntdat7714@gmail.com', '3333333333333333', 'Tien van pham', 1, NULL, '2021-08-24'),
(2, 'Vib', 'Hair Phongf', '123654789', 'ntdat7714@gmail.com', '1122336665547', 'Tien van pham', 0, '2021-08-24', '2021-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `method_invoice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_course` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`method_course`)),
  `method_pay` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_total` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_customer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_paid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_buy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `method_customer_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_no_vat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat_total` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `configuration` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`configuration`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `method_invoice`, `method_course`, `method_pay`, `paid_total`, `method_email`, `method_customer`, `method_address`, `method_paid`, `group_buy`, `created_at`, `updated_at`, `method_customer_code`, `method_company`, `total_no_vat`, `vat_total`, `configuration`) VALUES
(17, '#002395', '{\"5eaf20ac9ef4cb174b6c0fb853a6ce4d\":{\"rowId\":\"5eaf20ac9ef4cb174b6c0fb853a6ce4d\",\"id\":\"29\",\"name\":\"Negotiation Skills\",\"qty\":1,\"price\":4000000,\"weight\":1,\"options\":{\"images\":\"\\/images\\/default.png\",\"sale\":0},\"discount\":0,\"tax\":840000,\"subtotal\":4000000},\"f764ef34e56bde5dfd6db905886f617c\":{\"rowId\":\"f764ef34e56bde5dfd6db905886f617c\",\"id\":\"27\",\"name\":\"Leadership Communication\",\"qty\":1,\"price\":5000000,\"weight\":1,\"options\":{\"images\":\"\\/images\\/default.png\",\"sale\":0},\"discount\":0,\"tax\":1050000,\"subtotal\":5000000}}', '1', NULL, 'hppvtien@gmail.com', 'Tien Van Pham', 'Hà Nội, Hải Phòng', '9.000.000đ', '1', '2021-06-02 03:28:28', NULL, 'Code2343423423', 'Nam giới', '8.181.818đ', '818.182đ', '{\"id\":1,\"logo\":\"logo-1621497786.png\",\"name\":\"Tien Van Pham\",\"address\":\"Ha noi\",\"tax_id\":34343434,\"email\":\"tlead01@gmail.com\",\"hotline\":\"03561054882\",\"hotline_rp\":545454545,\"footer_bottom\":\"B\\u1ea3n quy\\u1ec1n \\u00a9 2021 UNIMIND. \\u0110\\u00e3 \\u0111\\u0103ng k\\u00fd b\\u1ea3n quy\\u1ec1n.\",\"facebook\":\"11111111\",\"youtube\":\"22222222222222\",\"twitter\":\"22222222222222\",\"instagram\":\"22222222222222\",\"created_at\":\"2020-11-21T16:11:08.000000Z\",\"updated_at\":\"2021-05-25T03:37:20.000000Z\"}'),
(18, '#002355', '{\"5eaf20ac9ef4cb174b6c0fb853a6ce4d\":{\"rowId\":\"5eaf20ac9ef4cb174b6c0fb853a6ce4d\",\"id\":\"29\",\"name\":\"Negotiation Skills\",\"qty\":1,\"price\":4000000,\"weight\":1,\"options\":{\"images\":\"\\/images\\/default.png\",\"sale\":0},\"discount\":0,\"tax\":840000,\"subtotal\":4000000},\"f764ef34e56bde5dfd6db905886f617c\":{\"rowId\":\"f764ef34e56bde5dfd6db905886f617c\",\"id\":\"27\",\"name\":\"Leadership Communication\",\"qty\":1,\"price\":5000000,\"weight\":1,\"options\":{\"images\":\"\\/images\\/default.png\",\"sale\":0},\"discount\":0,\"tax\":1050000,\"subtotal\":5000000}}', '1', NULL, 'hppvtien@gmail.com', 'Tien Van Pham', 'Hà Nội, Hải Phòng', '9.000.000đ', '1', '2021-06-02 03:28:28', NULL, 'Code2343423423', 'Nam giới', '8.181.818đ', '818.182đ', '{\"id\":1,\"logo\":\"logo-1621497786.png\",\"name\":\"Tien Van Pham\",\"address\":\"Ha noi\",\"tax_id\":34343434,\"email\":\"tlead01@gmail.com\",\"hotline\":\"03561054882\",\"hotline_rp\":545454545,\"footer_bottom\":\"B\\u1ea3n quy\\u1ec1n \\u00a9 2021 UNIMIND. \\u0110\\u00e3 \\u0111\\u0103ng k\\u00fd b\\u1ea3n quy\\u1ec1n.\",\"facebook\":\"11111111\",\"youtube\":\"22222222222222\",\"twitter\":\"22222222222222\",\"instagram\":\"22222222222222\",\"created_at\":\"2020-11-21T16:11:08.000000Z\",\"updated_at\":\"2021-05-25T03:37:20.000000Z\"}'),
(19, '#001128', '{\"5853bf5f6eb9accc6a28c49b46e0e9d0\":{\"rowId\":\"5853bf5f6eb9accc6a28c49b46e0e9d0\",\"id\":\"28\",\"name\":\"Building Organizational Cultures\",\"qty\":1,\"price\":6000000,\"weight\":1,\"options\":{\"images\":\"\\/images\\/default.png\",\"sale\":0},\"discount\":0,\"tax\":1260000,\"subtotal\":6000000}}', '1', NULL, 'hppvtien@gmail.com', 'Tien Van Pham', 'Hà Nội, Hải Phòng', '6.000.000đ', '1', '2021-06-02 18:56:04', NULL, 'Code2343423423', 'Nam giới', '5.454.546đ', '545.455đ', '{\"id\":1,\"logo\":\"logo-1621497786.png\",\"name\":\"Tien Van Pham\",\"address\":\"Ha noi\",\"tax_id\":34343434,\"email\":\"tlead01@gmail.com\",\"hotline\":\"03561054882\",\"hotline_rp\":545454545,\"footer_bottom\":\"B\\u1ea3n quy\\u1ec1n \\u00a9 2021 UNIMIND. \\u0110\\u00e3 \\u0111\\u0103ng k\\u00fd b\\u1ea3n quy\\u1ec1n.\",\"facebook\":\"11111111\",\"youtube\":\"22222222222222\",\"twitter\":\"22222222222222\",\"instagram\":\"22222222222222\",\"created_at\":\"2020-11-21T16:11:08.000000Z\",\"updated_at\":\"2021-05-25T03:37:20.000000Z\"}'),
(20, '#005195', '{\"91c40419b6e1f5ddd01e1673454d1021\":{\"rowId\":\"91c40419b6e1f5ddd01e1673454d1021\",\"id\":\"5\",\"name\":\"Digital Marketing Leadership\",\"qty\":1,\"price\":4000000,\"weight\":1,\"options\":{\"images\":\"\\/images\\/default.png\",\"sale\":0},\"discount\":0,\"tax\":840000,\"subtotal\":4000000},\"21ca5a93e6ba7724da26c3e484a29bf9\":{\"rowId\":\"21ca5a93e6ba7724da26c3e484a29bf9\",\"id\":\"4\",\"name\":\"Marketing Analytics and Insights\",\"qty\":1,\"price\":3000000,\"weight\":1,\"options\":{\"images\":\"\\/images\\/default.png\",\"sale\":0},\"discount\":0,\"tax\":630000,\"subtotal\":3000000}}', '1', NULL, 'hppvtien@gmail.com', 'Tien Van Pham', 'Hà Nội, Hải Phòng', '7.000.000đ', '1', '2021-06-02 22:06:18', NULL, 'Code2343423423', 'Nam giới', '6.363.636đ', '636.364đ', '{\"id\":1,\"logo\":\"logo-1621497786.png\",\"name\":\"Tien Van Pham\",\"address\":\"Ha noi\",\"tax_id\":34343434,\"email\":\"tlead01@gmail.com\",\"hotline\":\"03561054882\",\"hotline_rp\":545454545,\"footer_bottom\":\"B\\u1ea3n quy\\u1ec1n \\u00a9 2021 UNIMIND. \\u0110\\u00e3 \\u0111\\u0103ng k\\u00fd b\\u1ea3n quy\\u1ec1n.\",\"facebook\":\"11111111\",\"youtube\":\"22222222222222\",\"twitter\":\"22222222222222\",\"instagram\":\"22222222222222\",\"created_at\":\"2020-11-21T16:11:08.000000Z\",\"updated_at\":\"2021-05-25T03:37:20.000000Z\"}'),
(21, '#004239', '{\"c0c5b4b285d20095eeb31ab83a96c3db\":{\"rowId\":\"c0c5b4b285d20095eeb31ab83a96c3db\",\"id\":\"30\",\"name\":\"Strategic Sales Management\",\"qty\":1,\"price\":4000000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/hinh-anh-dep-1-1621498375.jpg\",\"sale\":10},\"discount\":0,\"tax\":840000,\"subtotal\":4000000}}', '1', NULL, 'hppvtien@gmail.com', 'Tien Van Pham', 'Hà Nội, Hải Phòng', '4.000.000đ', '0', '2021-06-03 01:35:40', NULL, NULL, NULL, '4.000.000đ', '0', '{\"id\":1,\"logo\":\"logo-1621497786.png\",\"name\":\"Unimind\",\"address\":\"T\\u1ea7ng 8, T\\u00f2a nh\\u00e0 HD Tower \\u2013 22 Ph\\u1ed1 M\\u1edbi \\u2013 Th\\u1ee7y S\\u01a1n \\u2013 Th\\u1ee7y Nguy\\u00ean \\u2013 H\\u1ea3i Ph\\u00f2ng\",\"tax_id\":34343434,\"email\":\"tlead01@gmail.com\",\"hotline\":\"03561054882\",\"hotline_rp\":545454545,\"footer_bottom\":\"B\\u1ea3n quy\\u1ec1n \\u00a9 2021 UNIMIND. \\u0110\\u00e3 \\u0111\\u0103ng k\\u00fd b\\u1ea3n quy\\u1ec1n.\",\"facebook\":\"11111111\",\"youtube\":\"22222222222222\",\"twitter\":\"22222222222222\",\"instagram\":\"22222222222222\",\"created_at\":\"2020-11-21T16:11:08.000000Z\",\"updated_at\":\"2021-06-03T07:42:45.000000Z\"}');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_sort` tinyint(4) NOT NULL DEFAULT 0,
  `c_status` tinyint(4) NOT NULL DEFAULT 1,
  `c_hot` tinyint(4) NOT NULL DEFAULT 0,
  `c_position_3` tinyint(4) NOT NULL DEFAULT 0,
  `c_position_2` tinyint(4) NOT NULL DEFAULT 0,
  `c_position_1` tinyint(4) NOT NULL DEFAULT 0,
  `c_parent_id` int(11) NOT NULL DEFAULT 0,
  `c_child_all` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_parent_all` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_slug`, `c_icon`, `c_sort`, `c_status`, `c_hot`, `c_position_3`, `c_position_2`, `c_position_1`, `c_parent_id`, `c_child_all`, `c_parent_all`, `c_title_seo`, `c_avatar`, `c_keyword_seo`, `c_description_seo`, `created_at`, `updated_at`) VALUES
(1, 'Digital Marketing', 'digital-marketing', 'fa fa-bandcamp', 1, 1, 1, 0, 0, 1, 0, NULL, NULL, 'Digital Marketing', 'hinh-anh-dep-1-1621494667.jpg', NULL, 'Digital Marketing', '2021-05-05 03:38:12', '2021-05-20 00:11:11'),
(2, 'Seo', 'seo', 'fa fa-bandcamp', 2, 1, 1, 0, 0, 1, 0, NULL, NULL, 'Seo', 'brvn2-1621494864.jpg', NULL, 'Seo', '2021-05-05 03:39:58', '2021-05-20 00:14:28'),
(3, 'Google Ads', 'google-ads', 'fa fa-bandcamp', 3, 1, 1, 0, 0, 1, 0, NULL, NULL, 'Google Ads', NULL, NULL, 'Google Ads', '2021-05-05 03:40:23', '2021-05-12 19:28:29'),
(4, 'Facebook Ads', 'facebook-ads', 'fa fa-bandcamp', 0, 1, 0, 0, 0, 0, 0, NULL, NULL, 'Facebook Ads', NULL, NULL, 'Facebook Ads', '2021-05-05 03:40:36', '2021-05-05 03:40:47'),
(5, 'Marketing Online', 'marketing-online', 'fa fa-bandcamp', 4, 1, 1, 0, 0, 1, 0, NULL, NULL, 'Marketing Online', 'hinh-anh-dep-4-1621494302.jpg', NULL, 'Marketing Online', '2021-05-05 03:41:29', '2021-05-20 00:05:05'),
(6, 'UX and Website Design', 'ux-and-website-design', 'fa fa-bandcamp', 0, 1, 0, 0, 0, 0, 0, NULL, NULL, 'UX and Website Design', NULL, NULL, 'UX and Website Design', '2021-05-05 03:41:45', NULL),
(7, 'Branding', 'branding', 'fa fa-bandcamp', 0, 1, 1, 0, 0, 1, 0, NULL, NULL, 'Branding', NULL, NULL, 'Branding', '2021-05-05 03:41:56', '2021-05-05 19:08:01'),
(8, 'Business Leadership', 'business-leadership', 'fa fa-bandcamp', 0, 1, 1, 0, 0, 1, 0, NULL, NULL, 'Business Leadership', NULL, NULL, 'Business Leadership', '2021-05-05 03:42:06', '2021-05-05 19:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_id` int(15) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline_rp` int(15) NOT NULL,
  `footer_bottom` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `logo`, `name`, `address`, `tax_id`, `email`, `hotline`, `hotline_rp`, `footer_bottom`, `facebook`, `youtube`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'logo-unimall-1628565605.png', 'Unispice', 'Tầng 8, Tòa nhà HD Tower – 22 Phố Mới – Thủy Sơn – Thủy Nguyên – Hải Phòng', 34343434, 'tlead01@gmail.com', '0356105899', 356105899, 'Bản quyền © 2021 UNIMIND. Đã đăng ký bản quyền.', '#', '#', '#', '#', '2020-11-21 09:11:08', '2021-08-09 20:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content_pages`
--

CREATE TABLE `content_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desscription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `name_but` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_but` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_pages`
--

INSERT INTO `content_pages` (`id`, `page_id`, `name`, `desscription`, `content`, `thumbnail`, `order`, `name_but`, `url_but`, `created_at`, `updated_at`) VALUES
(3, 1, 'Giới thiệu về unimail', 'Các dòng sản phẩm gia vị xốt tẩm ướp, gia vị hoàn chỉnh, bột nêm của UNISPICE được nghiên cứu dựa trên những công thức nấu ăn', NULL, 'anh-nen-gioi-thieu-1629083818.jpg', 0, 'Xem thêm', '/gioi-thieu', NULL, '2021-08-18 03:17:36'),
(4, 1, 'Giới thiệu chi tiết', NULL, '<p>UNISPICE l&agrave; một trong những thương hiệu của C&ocirc;ng ty TNHH UNIKERY, chuy&ecirc;n nghi&ecirc;n cứu &amp; ph&aacute;t triển sản phẩm gia vị thực phẩm. Ch&uacute;ng t&ocirc;i mang đến sản phẩm gia vị v&agrave; thực phẩm độc đ&aacute;o, chất lượng cao được sản xuất tr&ecirc;n d&acirc;y chuyền c&ocirc;ng nghệ hiện đại c&ugrave;ng hệ thống quản l&yacute; chất lượng đạt ti&ecirc;u chuẩn quốc tế ISO 9001:2015, FSSC, Sedex, v&agrave; Halal. UNISPICE kh&ocirc;ng chỉ l&agrave; sự lựa chọn tuyệt vời cho những m&oacute;n ăn ngon hấp dẫn, m&agrave; c&ograve;n mang đến trải nghiệm, kh&aacute;m ph&aacute; văn h&oacute;a ẩm thực đa dạng, phong ph&uacute; v&agrave; tiện lợi cho cuộc sống hiện đại.</p>\r\n\r\n<p>Với sứ mệnh kế thừa v&agrave; ph&aacute;t triển tinh hoa ẩm thực Việt đồng thời nghi&ecirc;n cứu tinh t&uacute;y ẩm thực thế giới,&nbsp;thổi hồn hương vị Việt đến 5 ch&acirc;u; UNISPICE lu&ocirc;n nỗ lực kh&ocirc;ng ngừng nghỉ để kh&ocirc;ng những đưa ra thị trường những sản phẩm hương vị truyền thống, m&agrave; c&ograve;n thỏa m&atilde;n nhu cầu xu hướng ẩm thực to&agrave;n cầu phong ph&uacute; c&ugrave;ng khẩu vị ng&agrave;y c&agrave;ng cao của kh&aacute;ch h&agrave;ng. C&aacute;c sản phẩm gia vị tự nhi&ecirc;n, gia vị ho&agrave;n chỉnh, bột n&ecirc;m, gia vị &amp; xốt ướp nướng BBQ được l&agrave;m từ nguy&ecirc;n liệu chất lượng được lựa chọn nghi&ecirc;m ngặt từ kh&acirc;u đầu v&agrave;o đến chế biến, ho&agrave;n thiện đ&oacute;ng g&oacute;i.</p>', 'anh-gioi-thieu-chi-tiet-1629084576.jpg', 1, NULL, NULL, NULL, '2021-08-15 21:17:31'),
(5, 3, 'NHỮNG TIÊU CHÍ ĐỂ THAM GIA SPICE CLUB', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n\r\n<ul>\r\n	<li>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>\r\n	<li>Duis aute irure dolor in reprehenderit in voluptate velit.</li>\r\n	<li>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'nhung-tieu-chi-tham-gia-spice-club-1629081858.jpg', 0, NULL, NULL, NULL, '2021-08-15 19:47:36'),
(6, 3, 'Khi Tham Gia Spice Club', NULL, NULL, 'nhung-tieu-chi-tham-gia-spice-club-1629082133.jpg', 1, NULL, NULL, NULL, '2021-08-16 00:20:35'),
(7, 3, 'Modi sit est', NULL, '<h3>ARCHITECTO UT APERIAM AUTEM ID</h3>\r\n\r\n<p>Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>\r\n\r\n<p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>', 'nhung-tieu-chi-tham-gia-spice-club-1629082187.jpg', 2, NULL, NULL, NULL, '2021-08-16 00:23:42'),
(8, 3, 'Unde praesentium sed', NULL, '<h3>ET BLANDITIIS NEMO VERITATIS EXCEPTURI</h3>\r\n\r\n<p>Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>\r\n\r\n<p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>', 'nhung-tieu-chi-tham-gia-spice-club-1629082233.jpg', 3, NULL, NULL, NULL, '2021-08-16 00:24:17'),
(9, 3, 'Pariatur explicabo vel', NULL, '<h3>IMPEDIT FACILIS OCCAECATI ODIO NEQUE APERIAM SIT</h3>\r\n\r\n<p>Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>\r\n\r\n<p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>', 'spice-club-1629098767.jpg', 4, NULL, NULL, NULL, NULL),
(10, 3, 'Nostrum qui quasi', NULL, '<h3>FUGA DOLORES INVENTORE LABORIOSAM UT EST ACCUSAMUS LABORIOSAM DOLORE</h3>\r\n\r\n<p>Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>\r\n\r\n<p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>', 'spice-club-1629099227.jpg', 5, NULL, NULL, NULL, NULL),
(11, 3, 'Iusto ut expedita auts', NULL, '<h3>FUGA DOLORES INVENTORE LABORIOSAM UT EST ACCUSAMUS LABORIOSAM DOLORE</h3>\r\n\r\n<p>Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>\r\n\r\n<p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>', 'spice-club-1629099227.jpg', 6, NULL, NULL, NULL, '2021-08-16 00:49:02'),
(12, 3, '1. JOIN', NULL, '<p>Simply fill out your membership information. Your $10 membership fee will be added to your first order. Being a part of this special group gives you 10% savings on everything you buy, plus exclusive access to associate member-only promotions, exciting contests and great natural lifestyle content.</p>', 'spice-club-1629100374.jpg', 7, 'Trở thành một thành viên', '/dang-ky-spice-club', NULL, '2021-08-18 03:06:20'),
(13, 3, '2. SAVE', NULL, '<p>Once you sign up, you&rsquo;ll receive a 10% discount on all your purchases from all of Frontier Co-op sites. You&rsquo;ll save on Frontier brands (Frontier Co-op, Simply Organic and Aura Cacia) and over 10,000 other top-brand natural-lifestyle products. Your discount automatically comes off the price of each item - you simply log in and shop as usual.</p>', 'spice-club-1629100427.jpg', 8, 'Trở thành một thành viên mới', '/dang-ky-spice-club', NULL, '2021-08-18 03:06:54'),
(14, 4, 'Gia vị hoàn chỉnh', 'Baking soda baths are a great way to detox. Check out the benefits of baking soda baths and how to do one at home!', NULL, 'gia-vi-hoan-chinh-1629283129.jpg', 0, 'Xem chi tiết', '/san-pham/gia-vi-hoan-chinh.html', NULL, NULL),
(15, 4, 'Gia vị tự nhiên', 'Baking soda baths are a great way to detox. Check out the benefits of baking soda baths and how to do one at home!', NULL, 'gia-vi-hoan-chinh-1629283464.jpg', 1, 'Xem gia vị tự nhiên', '/san-pham/gia-vi-tu-nhien.html', NULL, '2021-08-18 03:46:14'),
(16, 4, 'BAKING SODA BATHS: BENEFITS AND SIDE EFFECTS', NULL, NULL, 'khuyen-mai-1629283561.jpg', 2, 'Xem thêm khuyến mại', '/khuyen-mai', NULL, '2021-08-18 03:46:21'),
(17, 4, 'BAKING SODA BATHS ARE A GREAT WAY TO DETOX. CHECK OUT THE BENEFITS OF BAKING SODA BATHS AND HOW TO DO ONE AT HOME!', NULL, NULL, 'gia-vi-hoan-chinh-1629283621.jpg', 3, NULL, NULL, NULL, '2021-08-18 03:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_user_id` int(11) NOT NULL DEFAULT 0,
  `f_id` int(11) NOT NULL DEFAULT 0,
  `f_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 course',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `f_user_id`, `f_id`, `f_type`, `created_at`, `updated_at`) VALUES
(1, 34, 30, 1, '2021-05-26 23:10:06', NULL),
(3, 34, 29, 1, '2021-05-26 23:10:22', NULL),
(76, 1, 1, 1, '2021-08-22 20:40:35', NULL),
(77, 1, 2, 1, '2021-08-24 04:07:14', NULL),
(80, 41, 2, 1, '2021-08-24 19:50:44', NULL),
(81, 1, 10, 1, '2021-08-28 02:39:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `level_store`
--

CREATE TABLE `level_store` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level_store`
--

INSERT INTO `level_store` (`id`, `name`) VALUES
(1, 'Silver'),
(2, 'Gold'),
(3, 'Diamond'),
(4, 'Platinum');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_21_100518_create_tags_table', 1),
(5, '2020_10_24_035554_create_categories_table', 1),
(6, '2020_10_24_151226_create_teacher_table', 1),
(7, '2020_10_24_165810_create_course_table', 1),
(8, '2020_10_25_163003_create_seo_education_table', 2),
(9, '2020_10_28_105518_create_slides_table', 2),
(10, '2020_10_29_160626_alter_column_position_in_table_courses', 3),
(11, '2020_10_29_170915_create_courses_tags_table', 3),
(12, '2020_10_29_182230_alter_column_position_in_table_categories', 3),
(13, '2020_10_30_135047_alter_column_position_in_table_tags', 4),
(14, '2020_10_30_152022_create_admins_table', 4),
(15, '2020_10_30_155255_create_permission_tables', 4),
(16, '2020_10_31_015637_create_courses_contents_table', 4),
(17, '2020_11_02_134614_create_transactions_table', 5),
(18, '2020_11_02_134619_create_orders_table', 5),
(19, '2020_11_03_172005_create_favourites_table', 6),
(20, '2020_11_04_070600_alter_column_in_table_users', 6),
(21, '2020_11_07_034829_create_course_videos_table', 6),
(22, '2020_11_07_072610_create_menus_table', 7),
(23, '2020_11_07_072617_create_keywords_table', 7),
(24, '2020_11_07_072623_create_articles_table', 7),
(25, '2020_11_07_072636_create_articles_keywords_table', 7),
(26, '2020_11_10_172038_create_seos_blog_table', 8),
(27, '2020_11_12_123736_alter_column_o_user_id_in_table_orders', 8),
(28, '2020_11_17_164037_create_teachers_tags_table', 9),
(29, '2020_11_17_174546_create_keyword_search_table', 9),
(30, '2020_11_18_083721_alter_column_m_position_in_table_article', 10),
(31, '2020_11_21_004619_create_votes_table', 10),
(32, '2020_11_21_152822_create_configuration_table', 10),
(33, '2020_12_28_071247_alter_column_social_in_table_user', 11),
(34, '2021_02_01_082202_create_answers_table', 12),
(35, '2021_02_01_082226_create_questions_table', 12),
(36, '2021_02_01_083439_create_corrects_answers_table', 12),
(37, '2021_02_02_055023_create_course_results_table', 12),
(38, '2021_02_02_074415_create_course_results_dashboard_table', 12),
(42, '2021_05_05_110055_free_book_table', 13),
(43, '2021_05_05_110534_jobs_table', 13),
(44, '2021_05_05_111344_contact_table', 13),
(45, '2021_05_11_032039_create_course_faq_table', 13),
(46, '2021_05_11_094020_create_faq_table', 13),
(47, '2021_05_13_093356_create_pages_table', 14),
(48, '2021_05_19_041213_create_contact_jobs_table', 15),
(49, '2021_05_19_041448_create_contact_jobs_table', 16),
(50, '2021_05_24_093158_create_bill_table', 17),
(51, '2021_05_25_043958_create_user_activations_table', 18),
(52, '2021_05_25_072957_alter_users_table', 19),
(53, '2021_05_25_073142_alter_users_table', 20),
(54, '2021_05_25_083319_alter_users_table', 21),
(55, '2021_05_26_032948_alter_bill_table', 22),
(56, '2021_05_28_022956_create_answer_to_teacher_table', 23),
(57, '2021_05_28_023534_create_questions_from_teacher_table', 23),
(58, '2021_05_28_092826_create_questions_from_teacher_table', 24),
(59, '2021_05_31_021928_alter_asw_parent_answer_to_teacher', 25),
(60, '2021_06_29_025547_create_uni_lotproduct_table', 26),
(61, '2021_06_29_025633_create_uni_supplier_table', 26),
(62, '2021_06_29_025657_create_product_lotproduct_table', 26),
(63, '2021_06_29_025716_create_uni_product_table', 26),
(64, '2021_06_29_025837_create_product_category_table', 26),
(65, '2021_06_29_025852_create_uni_trade_table', 26),
(66, '2021_06_29_025911_create_uni_size_table', 26),
(67, '2021_06_29_025921_create_uni_admin_table', 26),
(68, '2021_06_29_025930_create_uni_user_table', 26),
(69, '2021_06_29_025939_create_uni_color_table', 26),
(70, '2021_06_29_030005_create_product_size_table', 26),
(71, '2021_06_29_030014_create_product_color_table', 26),
(72, '2021_06_29_030036_create_uni_tag_table', 26),
(73, '2021_06_29_030046_create_product_tag_table', 26),
(74, '2021_06_29_030105_create_uni_transaction_table', 26),
(75, '2021_06_29_030116_create_uni_order_table', 26),
(76, '2021_06_29_030132_create_uni_post_table', 26),
(77, '2021_06_29_030144_create_uni_post_category_table', 26),
(78, '2021_06_29_030202_create_post_category_table', 26),
(79, '2021_06_29_030215_create_uni_contact_table', 26),
(80, '2021_06_29_030236_create_uni_favourite_table', 26),
(81, '2021_06_29_030456_create_uni_product_category_table', 26),
(82, '2021_06_29_030609_create_uni_store_table', 26),
(83, '2021_06_29_030626_create_uni_flash_sale_table', 27),
(84, '2021_06_29_030014_create_product_trade_table', 28),
(85, '2021_07_08_042837_create_post_tag_table', 29),
(86, '2021_07_08_043003_create_post_tag_table', 30);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\System\\Admin', 1),
(2, 'App\\Models\\System\\Admin', 2),
(2, 'App\\Models\\System\\Admin', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(2) NOT NULL DEFAULT 0,
  `p_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_desscription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_title_seo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_desscription_seo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `p_name`, `discount`, `p_slug`, `p_desscription`, `p_title_seo`, `p_desscription_seo`, `p_content`, `p_style`, `p_banner`, `created_at`, `updated_at`) VALUES
(1, 'Giới thiệu', 0, 'gioi-thieu-ve-adsmo', 'Giới thiệu về chúng tôi', 'Chúng tôi là adsmo Chúng tôi cung cấp các dịch vụ Chúng tôi cung cấp', 'Giới thiệu về chúng tôi Giới thiệu về chúng tôi Giới thiệu về chúng tôi Giới thiệu về chúng tôi Giới thiệu về chúng tôi', '<h2>CH&Uacute;NG T&Ocirc;I L&Agrave; AI?​</h2>\r\n\r\n<p><strong>ADSMO</strong>&nbsp;l&agrave; một thương hiệu của&nbsp;<strong>C&ocirc;ng ty TNHH UNIKERY</strong>, chuy&ecirc;n cung cấp giải ph&aacute;p&nbsp;<strong>Digital Marketing</strong>, tư vấn<strong>&nbsp;x&acirc;y dựng v&agrave; ph&aacute;t triển thương hiệu</strong>&nbsp;to&agrave;n diện. Ch&uacute;ng t&ocirc;i ứng dụng c&ocirc;ng nghệ th&ocirc;ng tin, kỹ thuật số trong hoạt động truyền th&ocirc;ng, marketing gi&uacute;p doanh nghiệp x&acirc;y dựng thương hiệu bền vững.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>&nbsp;</h2>', 'about-us', 'anh-banner-trang-bb-1628828639.jpg', '2021-05-14 20:47:10', '2021-08-27 00:42:09'),
(3, 'Spice Club', 10, 'spice-club', 'Spice Club Spice Club Spice Club Spice Club Spice Club Spice Club Spice Club', 'Spice Club Spice Club Spice Club Spice Club Spice Club', 'Spice Club Spice Club Spice Club Spice Club Spice Club Spice Club Spice Club Spice Club Spice Club Spice Club Spice Club', '<p>Once you sign up, you&rsquo;ll receive a 10% discount on all your purchases from all of Frontier Co-op sites. You&rsquo;ll save on Frontier brands (Frontier Co-op, Simply Organic and Aura Cacia) and over 10,000 other top-brand natural-lifestyle products. Your discount automatically comes off the price of each item - you simply log in and shop as usual.</p>', 'spice-club', 'anh-nen-gioi-thieu-1629281488.jpg', '2021-08-15 19:36:28', '2021-08-27 00:42:19'),
(4, 'Home', 0, 'home', 'home home home home home home home home home home home home home home home home home', 'Home Home Home Home Home Home Home Home Home Home Home', 'home home home home home home home home home home home home home home home home home Home Home Home Home', NULL, 'home', 'home-1629282358.jpg', '2021-08-18 03:25:08', '2021-08-18 03:26:00'),
(5, 'Chính sách bảo mật', 0, 'chinh-sach-bao-mat', 'Chính sách bảo Mật Chính sách bảo Mật Chính sách bảo Mật Chính sách bảo Mật Chính sách bảo Mật Chính sách bảo Mật Chính sách bảo Mật', 'Chính sách bảo mật Chính sách bảo mật Chính sách bảo mật', 'Chính sách bảo Mật Chính sách bảo Mật Chính sách bảo Mật Chính sách bảo Mật Chính sách bảo Mật Chính sách bảo Mật Chính sách bảo Mật', '<h2>1. Mục đ&iacute;ch v&agrave; phạm vi thu thập</h2>\r\n\r\n<p>Việc thu thập dữ liệu chủ yếu tr&ecirc;n S&agrave;n giao dịch TMĐT&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>&nbsp;bao gồm: email, điện thoại, t&ecirc;n đăng nhập, mật khẩu đăng nhập, địa chỉ kh&aacute;ch h&agrave;ng (th&agrave;nh vi&ecirc;n). Đ&acirc;y l&agrave; c&aacute;c th&ocirc;ng tin m&agrave;&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>&nbsp;cần th&agrave;nh vi&ecirc;n cung cấp bắt buộc khi đăng k&yacute; sử dụng dịch vụ v&agrave; để&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>&nbsp;li&ecirc;n hệ x&aacute;c nhận khi kh&aacute;ch h&agrave;ng đăng k&yacute; sử dụng dịch vụ tr&ecirc;n website nhằm đảm bảo quyền lợi cho cho người ti&ecirc;u d&ugrave;ng.</p>\r\n\r\n<p>C&aacute;c th&agrave;nh vi&ecirc;n sẽ tự chịu tr&aacute;ch nhiệm về bảo mật v&agrave; lưu giữ mọi hoạt động sử dụng dịch vụ dưới t&ecirc;n đăng k&yacute;, mật khẩu v&agrave; lọ thư điện tử của m&igrave;nh. Ngo&agrave;i ra, th&agrave;nh vi&ecirc;n c&oacute; tr&aacute;ch nhiệm th&ocirc;ng b&aacute;o kịp thời cho S&agrave;n giao dịch TMĐT&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>&nbsp;về những h&agrave;nh vi sử dụng tr&aacute;i ph&eacute;p, lạm dụng, vi phạm bảo mật, lưu giữ t&ecirc;n đăng k&yacute; v&agrave; mật khẩu của b&ecirc;n thứ ba để c&oacute; biện ph&aacute;p giải quyết ph&ugrave; hợp.</p>\r\n\r\n<h2>2. Phạm vi sử dụng th&ocirc;ng tin</h2>\r\n\r\n<p>S&agrave;n giao dịch TMĐT&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>&nbsp;sử dụng th&ocirc;ng tin th&agrave;nh vi&ecirc;n cung cấp để:</p>\r\n\r\n<p>Cung cấp c&aacute;c dịch vụ đến Th&agrave;nh&nbsp;vi&ecirc;n;</p>\r\n\r\n<p>Gửi c&aacute;c th&ocirc;ng b&aacute;o về c&aacute;c hoạt động trao đổi th&ocirc;ng tin giữa th&agrave;nh vi&ecirc;n v&agrave; S&agrave;n giao dịch TMĐT&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>;</p>\r\n\r\n<p>Ngăn ngừa c&aacute;c hoạt động ph&aacute;&nbsp;hủy&nbsp;t&agrave;i khoản người d&ugrave;ng của th&agrave;nh vi&ecirc;n hoặc c&aacute;c hoạt động giả mạo Th&agrave;nh&nbsp;vi&ecirc;n;</p>\r\n\r\n<p>Li&ecirc;n lạc v&agrave; giải quyết với th&agrave;nh vi&ecirc;n trong những trường hợp đặc&nbsp;biệt.</p>\r\n\r\n<p>Kh&ocirc;ng sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n của th&agrave;nh vi&ecirc;n ngo&agrave;i mục đ&iacute;ch x&aacute;c nhận v&agrave; li&ecirc;n hệ c&oacute; li&ecirc;n quan đến giao dịch tại&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>.</p>\r\n\r\n<p>Trong trường hợp c&oacute; y&ecirc;u cầu của ph&aacute;p luật: S&agrave;n giao dịch TMĐT&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>&nbsp;c&oacute; tr&aacute;ch nhiệm hợp t&aacute;c cung cấp th&ocirc;ng tin c&aacute; nh&acirc;n th&agrave;nh vi&ecirc;n khi c&oacute; y&ecirc;u cầu từ cơ quan tư ph&aacute;p bao gồm: Viện kiểm s&aacute;t, t&ograve;a &aacute;n, cơ quan c&ocirc;ng an điều tra li&ecirc;n quan đến h&agrave;nh vi vi phạm ph&aacute;p luật n&agrave;o đ&oacute; của kh&aacute;ch h&agrave;ng. Ngo&agrave;i ra, kh&ocirc;ng ai c&oacute; quyền x&acirc;m phạm v&agrave;o th&ocirc;ng tin c&aacute; nh&acirc;n của th&agrave;nh&nbsp;vi&ecirc;n.</p>\r\n\r\n<h2>3. Thời gian lưu trữ th&ocirc;ng tin</h2>\r\n\r\n<p>Dữ liệu c&aacute; nh&acirc;n của Th&agrave;nh vi&ecirc;n sẽ được lưu trữ cho đến khi c&oacute; y&ecirc;u cầu hủy bỏ hoặc tự th&agrave;nh vi&ecirc;n đăng nhập v&agrave; thực hiện hủy bỏ. C&ograve;n lại trong mọi trường hợp, th&ocirc;ng tin c&aacute; nh&acirc;n th&agrave;nh vi&ecirc;n sẽ được bảo mật tr&ecirc;n m&aacute;y chủ của&nbsp;<a href=\"https://adsmo.vn/\">Adsmo</a>.</p>\r\n\r\n<h2>4. Địa chỉ của đơn vị thu thập v&agrave; quản l&yacute; th&ocirc;ng tin c&aacute; nh&acirc;n</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>C&ocirc;ng ty TNHH Unikery</p>\r\n	</li>\r\n	<li>\r\n	<p>Địa chỉ:&nbsp;Số 22 Phố Mới,&nbsp;x&atilde; Thủy Sơn, huyện Thủy Nguy&ecirc;n, th&agrave;nh phố Hải Ph&ograve;ng</p>\r\n	</li>\r\n	<li>\r\n	<p>Email:&nbsp;info@adsmo.vn</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>5. Phương tiện v&agrave; c&ocirc;ng cụ để người d&ugrave;ng tiếp cận v&agrave; chỉnh sửa dữ liệu c&aacute; nh&acirc;n của m&igrave;nh</h2>\r\n\r\n<p>Th&agrave;nh vi&ecirc;n c&oacute; quyền tự kiểm tra, cập nhật, điều chỉnh hoặc hủy bỏ th&ocirc;ng tin c&aacute; nh&acirc;n của m&igrave;nh bằng c&aacute;ch đăng nhập v&agrave;o t&agrave;i khoản v&agrave; chỉnh sửa th&ocirc;ng tin c&aacute; nh&acirc;n hoặc y&ecirc;u cầu&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>&nbsp;thực hiện việc n&agrave;y.</p>\r\n\r\n<p>Th&agrave;nh vi&ecirc;n c&oacute; quyền gửi khiếu nại về việc lộ th&ocirc;ng tin c&aacute;c nh&acirc;n cho b&ecirc;n thứ 3 đến Ban quản trị của S&agrave;n giao dịch thương mại điện tử&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>. Khi tiếp nhận những phản hồi n&agrave;y,&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>&nbsp;sẽ x&aacute;c nhận lại th&ocirc;ng tin, phải c&oacute; tr&aacute;ch nhiệm trả lời l&yacute; do v&agrave; hướng dẫn th&agrave;nh vi&ecirc;n kh&ocirc;i phục v&agrave; bảo mật lại th&ocirc;ng tin.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Email:&nbsp;info@adsmo.vn</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>6. Cam kết bảo mật th&ocirc;ng tin c&aacute; nh&acirc;n kh&aacute;ch h&agrave;ng</h2>\r\n\r\n<p>Th&ocirc;ng tin c&aacute; nh&acirc;n của th&agrave;nh vi&ecirc;n tr&ecirc;n&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>&nbsp;được&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>&nbsp;cam kết bảo mật tuyệt đối theo ch&iacute;nh s&aacute;ch bảo vệ th&ocirc;ng tin c&aacute; nh&acirc;n của&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>. Việc thu thập v&agrave; sử dụng th&ocirc;ng tin của mỗi th&agrave;nh vi&ecirc;n chỉ được thực hiện khi c&oacute; sự đồng &yacute; của kh&aacute;ch h&agrave;ng đ&oacute; trừ những trường hợp ph&aacute;p luật c&oacute; quy định kh&aacute;c.</p>\r\n\r\n<p>Kh&ocirc;ng sử dụng, kh&ocirc;ng chuyển giao, cung cấp hay tiết lộ cho b&ecirc;n thứ 3 n&agrave;o về th&ocirc;ng tin c&aacute; nh&acirc;n của th&agrave;nh vi&ecirc;n khi kh&ocirc;ng c&oacute; sự cho ph&eacute;p đồng &yacute; từ th&agrave;nh vi&ecirc;n.</p>\r\n\r\n<p>Trong trường hợp m&aacute;y chủ lưu trữ th&ocirc;ng tin bị hacker tấn c&ocirc;ng dẫn đến mất m&aacute;t dữ liệu c&aacute; nh&acirc;n th&agrave;nh vi&ecirc;n,&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>&nbsp;sẽ c&oacute; tr&aacute;ch nhiệm th&ocirc;ng b&aacute;o vụ việc cho cơ quan chức năng điều tra xử l&yacute; kịp thời v&agrave; th&ocirc;ng b&aacute;o cho th&agrave;nh vi&ecirc;n được biết.</p>\r\n\r\n<p>Bảo mật tuyệt đối mọi th&ocirc;ng tin giao dịch trực tuyến của Th&agrave;nh vi&ecirc;n bao gồm th&ocirc;ng tin h&oacute;a đơn kế to&aacute;n chứng từ số h&oacute;a tại khu vực dữ liệu trung t&acirc;m an to&agrave;n cấp 1 của&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>.</p>\r\n\r\n<p>Ban quản l&yacute;&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>&nbsp;y&ecirc;u cầu c&aacute;c c&aacute; nh&acirc;n khi đăng k&yacute;/mua h&agrave;ng l&agrave; th&agrave;nh vi&ecirc;n, phải cung cấp đầy đủ th&ocirc;ng tin c&aacute; nh&acirc;n c&oacute; li&ecirc;n quan như: Họ v&agrave; t&ecirc;n, địa chỉ li&ecirc;n lạc, email, số chứng minh nh&acirc;n d&acirc;n, điện thoại, số t&agrave;i khoản, số thẻ thanh to&aacute;n&hellip;, v&agrave; chịu tr&aacute;ch nhiệm về t&iacute;nh ph&aacute;p l&yacute; của những th&ocirc;ng tin tr&ecirc;n. Ban quản l&yacute;&nbsp;<a href=\"https://adsmo.vn/\">Adsmo.vn</a>&nbsp;kh&ocirc;ng chịu tr&aacute;ch nhiệm cũng như kh&ocirc;ng giải quyết mọi khiếu nại c&oacute; li&ecirc;n quan đến quyền lợi của Th&agrave;nh vi&ecirc;n đ&oacute; nếu x&eacute;t thấy tất cả th&ocirc;ng tin c&aacute; nh&acirc;n của th&agrave;nh vi&ecirc;n đ&oacute; cung cấp khi đăng k&yacute; ban đầu l&agrave; kh&ocirc;ng ch&iacute;nh x&aacute;c.</p>', 'chinh-sach-bao-mat', 'gia-vi-hoan-chinh-1629457220.jpg', '2021-08-20 04:00:03', '2021-08-20 04:00:22'),
(6, 'Tất cả sản phẩm', 0, 'tat-ca-san-pham.html', 'Tất cả sản phẩm', 'Tất cả sản phẩm', 'Tất cả sản phẩm', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', 'tat-ca-san-pham', 'gia-vi-hoan-chinh-1629457220.jpg', '2021-08-20 04:00:03', '2021-08-20 04:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resetts`
--

CREATE TABLE `password_resetts` (
  `user_id` int(11) NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resetts`
--

INSERT INTO `password_resetts` (`user_id`, `email`, `token`, `reset_code`, `created_at`) VALUES
(41, NULL, '', 'QqYWaWXbug1UmJioMZL7qNYeHSePiN6cHNhiTbOb', '2021-08-31 17:00:00'),
(1, NULL, NULL, 'gZJ9iEAP4gIcgk047tLLwIVTULlaqKLlxmFgWUmh', '2021-09-01 02:27:57'),
(41, NULL, NULL, 'POd1glTbmR4CUKF4PaGmU8lwaTSyoCdoV3jteorL', '2021-09-01 02:28:06');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_permission` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `description`, `group_permission`, `created_at`, `updated_at`) VALUES
(1, 'uni_product_index', 'admins', 'Quản lý sản phẩm', 2, '2020-10-30 21:23:49', '2021-08-13 01:02:54'),
(2, 'uni_product_create', 'admins', 'Thêm sản phẩm', 2, '2020-10-30 21:24:00', '2021-08-13 01:03:33'),
(3, 'uni_product_edit', 'admins', 'Cập nhật sản phẩm', 2, '2020-10-30 21:24:12', '2021-08-13 01:03:59'),
(4, 'uni_product_delete', 'admins', 'Xoá sản phẩm', 2, '2020-10-30 21:24:22', '2021-08-13 01:04:23'),
(5, 'uni_category_index', 'admins', 'Quản lý danh mục sản phẩm', 3, '2020-10-30 21:24:33', '2021-08-13 01:06:05'),
(6, 'uni_category_create', 'admins', 'Thêm mới danh mục sản phẩm', 3, '2020-10-30 21:24:45', '2021-08-13 01:06:27'),
(7, 'uni_category_edit', 'admins', 'Cập nhật danh mục sản phẩm', 3, '2020-10-30 21:24:58', '2021-08-13 01:06:48'),
(8, 'uni_category_delete', 'admins', 'Xoá danh mục sản phẩm', 3, '2020-10-30 21:25:08', '2021-08-13 01:07:10'),
(9, 'uni_color_index', 'admins', 'Quản lý màu sắc', 4, '2020-10-30 21:25:23', '2021-08-13 01:10:23'),
(10, 'uni_color_create', 'admins', 'Thêm mới màu sắc', 4, '2020-10-30 21:25:34', '2021-08-13 01:10:49'),
(11, 'uni_color_edit', 'admins', 'Cập nhật màu sắc', 4, '2020-10-30 21:25:51', '2021-08-13 01:11:11'),
(12, 'uni_color_delete', 'admins', 'Xoá màu sắc', 4, '2020-10-30 21:26:04', '2021-08-13 01:11:39'),
(13, 'uni_trade_index', 'admins', 'Quản lý thương hiệu', 5, '2020-10-30 21:26:17', '2021-08-13 01:42:17'),
(14, 'uni_trade_create', 'admins', 'Thêm mới thương hiệu', 5, '2020-10-30 21:26:28', '2021-08-13 01:42:34'),
(15, 'uni_trade_edit', 'admins', 'Cập nhật thương hiệu', 5, '2020-10-30 21:26:58', '2021-08-13 01:42:48'),
(16, 'uni_trade_delete', 'admins', 'Xoá thương hiệu', 5, '2020-10-30 21:27:08', '2021-08-13 01:43:02'),
(18, 'uni_size_index', 'admins', 'Quản lý size', 6, '2020-10-30 21:28:34', '2021-08-13 01:30:15'),
(19, 'uni_size_create', 'admins', 'Thêm mới size', 6, '2020-10-30 21:28:48', '2021-08-13 01:30:52'),
(20, 'uni_size_edit', 'admins', 'Cập nhật size', 6, '2020-10-30 21:28:59', '2021-08-13 01:31:15'),
(21, 'uni_size_delete', 'admins', 'Xoá size', 6, '2020-10-30 21:29:09', '2021-08-13 01:31:48'),
(22, 'uni_supplier_index', 'admins', 'Quản lý nhà cung cấp', 7, '2020-10-30 21:29:29', '2021-08-13 01:45:58'),
(23, 'uni_supplier_create', 'admins', 'Thêm mới nhà cung cấp', 7, '2020-10-30 21:29:43', '2021-08-13 01:46:27'),
(24, 'uni_supplier_edit', 'admins', 'Cập nhật nhà cung cấp', 7, '2020-10-30 21:29:55', '2021-08-13 01:46:54'),
(25, 'uni_supplier_delete', 'admins', 'Xoá nhà cung cấp', 7, '2020-10-30 21:30:06', '2021-08-13 01:47:22'),
(27, 'full', 'admins', 'full', 1, '2021-04-04 22:44:56', '2021-04-04 22:47:45'),
(28, 'uni_lotproduct_index', 'admins', 'Quản lý lo sản phẩm', 9, '2021-08-13 01:52:44', '2021-08-13 01:52:44'),
(29, 'uni_lotproduct_create', 'admins', 'Thêm mới lô sản phẩm', 9, '2021-08-13 01:53:25', '2021-08-13 01:53:25'),
(30, 'uni_lotproduct_edit', 'admins', 'Cập nhật lô sản phẩm', 9, '2021-08-13 01:53:51', '2021-08-13 01:53:51'),
(31, 'uni_lotproduct_delete', 'admins', 'Xóa lô sản phẩm', 9, '2021-08-13 01:54:12', '2021-08-13 01:54:12'),
(32, 'uni_tag_index', 'admins', 'Quản lý Tag', 10, '2021-08-13 01:55:22', '2021-08-13 01:55:22'),
(33, 'uni_tag_create', 'admins', 'Thêm mới Tag', 10, '2021-08-13 01:55:44', '2021-08-13 01:55:44'),
(34, 'uni_tag_edit', 'admins', 'Cập nhật Tag', 10, '2021-08-13 01:56:13', '2021-08-13 01:56:13'),
(35, 'uni_tag_delete', 'admins', 'Xóa Tag', 10, '2021-08-13 01:56:31', '2021-08-13 01:56:31'),
(36, 'uni_store_index', 'admins', 'Quản lý tài khoản đại lý', 11, '2021-08-13 01:59:25', '2021-08-13 01:59:25'),
(37, 'uni_store_create', 'admins', 'Thêm mới tài khoản đại lý', 11, '2021-08-13 02:00:06', '2021-08-13 02:00:06'),
(38, 'uni_store_edit', 'admins', 'Cập nhật tài khoản đại lý', 11, '2021-08-13 02:00:50', '2021-08-13 02:00:50'),
(39, 'uni_store_delete', 'admins', 'Xóa tài khoản đại lý', 11, '2021-08-13 02:01:28', '2021-08-13 02:01:28'),
(40, 'uni_flashsale_index', 'admins', 'Quản lý conbo đại lý', 12, '2021-08-13 02:06:29', '2021-08-13 02:06:29'),
(41, 'uni_flashsale_create', 'admins', 'Thêm mới combo đại lý', 12, '2021-08-13 02:07:02', '2021-08-13 02:07:02'),
(42, 'uni_flashsale_edit', 'admins', 'Cập nhật combo đại lý', 12, '2021-08-13 02:07:30', '2021-08-13 02:07:30'),
(43, 'uni_flashsale_delete', 'admins', 'Xóa combo đại lý', 12, '2021-08-13 02:07:52', '2021-08-13 02:07:52'),
(44, 'post_category_index', 'admins', 'Quản lý danh mục tin tức', 13, '2021-08-13 02:13:16', '2021-08-13 02:13:16'),
(45, 'post_category_create', 'admins', 'Thêm mới danh mục tin tức', 13, '2021-08-13 02:13:53', '2021-08-13 02:13:53'),
(46, 'post_category_edit', 'admins', 'Cập nhật danh mục tin tức', 13, '2021-08-13 02:14:33', '2021-08-13 02:14:33'),
(47, 'post_category_delete', 'admins', 'Xóa danh mục tin tức', 13, '2021-08-13 02:14:57', '2021-08-13 02:14:57'),
(48, 'post_index', 'admins', 'Quản lý tin tức', 14, '2021-08-13 02:15:26', '2021-08-13 02:15:26'),
(49, 'post_create', 'admins', 'Thêm mới tin tức', 14, '2021-08-13 02:15:57', '2021-08-13 02:15:57'),
(50, 'post_edit', 'admins', 'Cập nhật tin tức', 14, '2021-08-13 02:16:20', '2021-08-13 02:16:20'),
(51, 'post_delete', 'admins', 'Xóa tin tức', 14, '2021-08-13 02:16:48', '2021-08-13 02:16:48'),
(52, 'slide_index', 'admins', 'Quản lý slide', 15, '2021-08-13 02:18:08', '2021-08-13 02:18:08'),
(53, 'slide_create', 'admins', 'Thêm mới slide', 15, '2021-08-13 02:18:37', '2021-08-13 02:18:37'),
(54, 'slide_edit', 'admins', 'Sửa slide', 15, '2021-08-13 02:18:56', '2021-08-13 02:18:56'),
(55, 'slide_delete', 'admins', 'Xóa slide', 15, '2021-08-13 02:19:15', '2021-08-13 02:19:15'),
(56, 'page_index', 'admins', 'Quản lý trang', 16, '2021-08-13 02:58:51', '2021-08-13 02:58:51'),
(57, 'page_create', 'admins', 'Thêm mới trang', 16, '2021-08-13 02:59:28', '2021-08-13 02:59:28'),
(58, 'page_edit', 'admins', 'Cập nhật trang', 16, '2021-08-13 03:00:21', '2021-08-13 03:00:21'),
(59, 'page_delete', 'admins', 'Xóa trang', 16, '2021-08-13 03:00:42', '2021-08-13 03:00:42'),
(60, 'uni_order_index', 'admins', 'Quản lý đơn hàng', 17, '2021-08-13 03:02:33', '2021-08-13 03:02:33'),
(61, 'uni_order_edit', 'admins', 'Cập nhật đơn hàng', 17, '2021-08-13 03:04:46', '2021-08-13 03:04:46'),
(62, 'uni_order_delete', 'admins', 'Xóa đơn hàng', 17, '2021-08-13 03:05:32', '2021-08-13 03:05:32'),
(63, 'voucher_index', 'admins', 'Quản lý voucher', 19, '2021-08-13 03:09:52', '2021-08-13 03:09:52'),
(64, 'voucher_create', 'admins', 'Thêm mới voucher', 19, '2021-08-13 03:10:21', '2021-08-13 03:10:21'),
(65, 'voucher_edit', 'admins', 'Cập nhật voucher', 19, '2021-08-13 03:10:42', '2021-08-13 03:10:42'),
(66, 'voucher_delete', 'admins', 'Xóa voucher', 19, '2021-08-13 03:11:52', '2021-08-13 03:11:52'),
(67, 'uni_comment_index', 'admins', 'Quản lý đánh giá bình luận', 20, '2021-08-13 03:16:07', '2021-08-13 03:16:07'),
(68, 'uni_comment_edit', 'admins', 'Cập nhật đánh giá và bình luận', 20, '2021-08-13 03:17:47', '2021-08-13 03:17:47'),
(69, 'uni_comment_delete', 'admins', 'Xóa đánh giá và bình luận', 20, '2021-08-13 03:18:29', '2021-08-13 03:18:29'),
(70, 'uni_contact_index', 'admins', 'Quản lý liên hệ', 21, '2021-08-13 03:22:02', '2021-08-13 03:22:02'),
(71, 'uni_contact_edit', 'admins', 'Cập nhật liên hệ', 21, '2021-08-13 03:22:27', '2021-08-13 03:22:27'),
(72, 'uni_contact_delete', 'admins', 'Xóa liên hệ', 21, '2021-08-13 03:22:48', '2021-08-13 03:22:48'),
(73, 'user_index', 'admins', 'Quản lý user', 22, '2021-08-13 03:23:50', '2021-08-13 03:23:50'),
(74, 'user_edit', 'admins', 'Cập nhật user', 22, '2021-08-13 03:24:15', '2021-08-13 03:24:15'),
(75, 'user_delete', 'admins', 'Xóa user', 22, '2021-08-13 03:24:34', '2021-08-13 03:24:34'),
(76, 'permission_index', 'admins', 'Quản lý permission', 23, '2021-08-13 03:27:18', '2021-08-13 03:27:18'),
(77, 'permission_create', 'admins', 'Thêm mới permission', 23, '2021-08-13 03:27:40', '2021-08-13 03:27:40'),
(78, 'permission_edit', 'admins', 'Cập nhật permission', 23, '2021-08-13 03:27:59', '2021-08-13 03:27:59'),
(79, 'permission_delete', 'admins', 'Xóa permission', 23, '2021-08-13 03:28:18', '2021-08-13 03:28:18'),
(80, 'role_index', 'admins', 'Quản lý role', 24, '2021-08-13 03:28:36', '2021-08-13 03:28:36'),
(81, 'role_create', 'admins', 'Thêm mới role', 24, '2021-08-13 03:28:56', '2021-08-13 03:28:56'),
(82, 'role_edit', 'admins', 'Cập nhật role', 24, '2021-08-13 03:29:12', '2021-08-13 03:29:12'),
(83, 'role_delete', 'admins', 'Xóa role', 24, '2021-08-13 03:29:35', '2021-08-13 03:29:35'),
(84, 'account_index', 'admins', 'Quản lý account', 25, '2021-08-13 03:30:04', '2021-08-13 03:30:04'),
(85, 'account_create', 'admins', 'Thêm mới account', 25, '2021-08-13 03:30:21', '2021-08-13 03:30:21'),
(86, 'account_edit', 'admins', 'Cập nhật account', 25, '2021-08-13 03:30:40', '2021-08-13 03:30:40'),
(87, 'account_delete', 'admins', 'Xóa account', 25, '2021-08-13 03:30:55', '2021-08-13 03:30:55'),
(88, 'dashboard', 'admins', 'Tổng quan', 1, '2021-08-13 03:33:54', '2021-08-13 03:33:54'),
(89, 'setting_index', 'admins', 'Web setting', 1, '2021-08-13 03:38:57', '2021-08-13 03:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_category_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `tag_id`, `post_id`, `created_at`, `updated_at`) VALUES
(53, 6, 26, NULL, NULL),
(54, 7, 26, NULL, NULL),
(57, 6, 24, NULL, NULL),
(58, 7, 24, NULL, NULL),
(59, 7, 23, NULL, NULL),
(60, 8, 23, NULL, NULL),
(61, 7, 22, NULL, NULL),
(62, 6, 21, NULL, NULL),
(63, 7, 21, NULL, NULL),
(64, 7, 20, NULL, NULL),
(65, 8, 20, NULL, NULL),
(66, 6, 19, NULL, NULL),
(67, 7, 19, NULL, NULL),
(68, 7, 18, NULL, NULL),
(69, 8, 18, NULL, NULL),
(70, 6, 17, NULL, NULL),
(71, 7, 17, NULL, NULL),
(72, 6, 16, NULL, NULL),
(74, 7, 15, NULL, NULL),
(75, 7, 14, NULL, NULL),
(76, 8, 14, NULL, NULL),
(77, 6, 13, NULL, NULL),
(78, 7, 12, NULL, NULL),
(79, 6, 11, NULL, NULL),
(80, 7, 10, NULL, NULL),
(81, 7, 9, NULL, NULL),
(82, 8, 8, NULL, NULL),
(83, 7, 7, NULL, NULL),
(84, 7, 6, NULL, NULL),
(85, 7, 5, NULL, NULL),
(86, 7, 4, NULL, NULL),
(87, 7, 3, NULL, NULL),
(88, 8, 2, NULL, NULL),
(89, 7, 1, NULL, NULL),
(90, 7, 27, NULL, NULL),
(93, 6, 25, NULL, NULL),
(94, 7, 25, NULL, NULL),
(96, 7, 28, NULL, NULL),
(97, 6, 29, NULL, NULL),
(98, 7, 30, NULL, NULL),
(100, 7, 32, NULL, NULL),
(101, 7, 31, NULL, NULL),
(102, 7, 33, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category_id`, `product_id`, `created_at`, `updated_at`) VALUES
(87, 1, 2, NULL, NULL),
(88, 4, 3, NULL, NULL),
(89, 3, 4, NULL, NULL),
(90, 2, 5, NULL, NULL),
(91, 3, 6, NULL, NULL),
(92, 6, 7, NULL, NULL),
(93, 5, 8, NULL, NULL),
(94, 2, 9, NULL, NULL),
(95, 3, 9, NULL, NULL),
(96, 4, 9, NULL, NULL),
(97, 5, 9, NULL, NULL),
(98, 6, 9, NULL, NULL),
(99, 1, 10, NULL, NULL),
(100, 1, 11, NULL, NULL),
(101, 2, 12, NULL, NULL),
(102, 7, 12, NULL, NULL),
(103, 8, 13, NULL, NULL),
(104, 1, 14, NULL, NULL),
(112, 1, 15, NULL, NULL),
(113, 14, 15, NULL, NULL),
(114, 15, 15, NULL, NULL),
(115, 25, 16, NULL, NULL),
(116, 24, 16, NULL, NULL),
(121, 1, 18, NULL, NULL),
(122, 6, 18, NULL, NULL),
(125, 13, 19, NULL, NULL),
(126, 6, 19, NULL, NULL),
(127, 5, 19, NULL, NULL),
(128, 1, 19, NULL, NULL),
(129, 6, 20, NULL, NULL),
(130, 1, 20, NULL, NULL),
(131, 6, 21, NULL, NULL),
(132, 1, 21, NULL, NULL),
(133, 6, 22, NULL, NULL),
(134, 1, 22, NULL, NULL),
(137, 1, 17, NULL, NULL),
(138, 6, 17, NULL, NULL),
(151, 25, 24, NULL, NULL),
(152, 26, 25, NULL, NULL),
(153, 26, 26, NULL, NULL),
(154, 26, 27, NULL, NULL),
(155, 26, 28, NULL, NULL),
(180, 1, 23, NULL, NULL),
(181, 6, 23, NULL, NULL),
(266, 26, 29, NULL, NULL),
(269, 1, 30, NULL, NULL),
(270, 2, 31, NULL, NULL),
(271, 2, 32, NULL, NULL),
(274, 1, 1, NULL, NULL),
(276, 2, 34, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`id`, `color_id`, `product_id`, `product_image`, `created_at`, `updated_at`) VALUES
(72, 1, 2, NULL, NULL, NULL),
(73, 1, 3, NULL, NULL, NULL),
(74, 1, 4, NULL, NULL, NULL),
(75, 1, 5, NULL, NULL, NULL),
(76, 1, 6, NULL, NULL, NULL),
(77, 1, 7, NULL, NULL, NULL),
(78, 1, 8, NULL, NULL, NULL),
(79, 1, 9, NULL, NULL, NULL),
(80, 1, 10, NULL, NULL, NULL),
(81, 1, 11, NULL, NULL, NULL),
(82, 1, 12, NULL, NULL, NULL),
(83, 1, 13, NULL, NULL, NULL),
(84, 1, 14, NULL, NULL, NULL),
(88, 1, 15, NULL, NULL, NULL),
(89, 3, 16, NULL, NULL, NULL),
(92, 4, 18, NULL, NULL, NULL),
(94, 3, 19, NULL, NULL, NULL),
(95, 4, 20, NULL, NULL, NULL),
(96, 4, 21, NULL, NULL, NULL),
(97, 3, 22, NULL, NULL, NULL),
(98, 2, 23, NULL, NULL, NULL),
(99, 3, 17, NULL, NULL, NULL),
(101, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_lotproduct`
--

CREATE TABLE `product_lotproduct` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_size` int(2) NOT NULL,
  `lotproduct_id` int(11) DEFAULT NULL,
  `inventory` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_lotproduct`
--

INSERT INTO `product_lotproduct` (`id`, `product_id`, `product_size`, `lotproduct_id`, `inventory`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1000, '2021-07-31 00:04:23', NULL),
(2, 2, 1, 2, 1000, '2021-07-31 00:36:42', NULL),
(3, 1, 1, 1, 2000, '2021-07-31 00:51:03', NULL),
(4, 1, 1, 1, 1000, '2021-08-12 04:41:32', NULL),
(5, 1, 1, 1, 1000, '2021-08-12 04:43:23', NULL),
(6, 3, 1, 3, 1000, '2021-08-19 02:48:28', NULL),
(7, 1, 3, 1, 2000, '2021-08-31 08:39:50', NULL),
(8, 1, 3, 7, 600, '2021-08-31 08:40:36', NULL),
(9, 1, 3, 1, 100, '2021-08-31 09:02:39', NULL),
(10, 1, 3, 8, 1000, '2021-08-31 09:54:04', NULL),
(11, 1, 2, 7, 10, '2021-08-31 10:19:04', NULL),
(12, 1, 3, 7, 10, '2021-08-31 10:31:11', NULL),
(13, 1, 1, 8, 200, '2021-08-31 10:31:55', NULL),
(14, 1, 3, 1, 10, '2021-08-31 11:02:27', NULL),
(15, 23, 2, 10, 1000, '2021-09-01 06:41:23', NULL),
(16, 23, 2, 10, 100, '2021-09-01 06:45:15', NULL),
(17, 1, 2, 7, 10, '2021-09-01 07:15:07', NULL),
(18, 1, 3, 1, 90, '2021-09-06 08:45:11', NULL),
(19, 1, 3, 1, 10, '2021-09-06 08:45:42', NULL),
(20, 1, 3, 1, 100, '2021-09-06 10:55:44', NULL),
(21, 1, 3, 1, 22, '2021-09-06 10:59:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL DEFAULT 0,
  `price` int(20) NOT NULL DEFAULT 0,
  `price_sale` int(20) NOT NULL DEFAULT 0,
  `price_sale_store` int(20) NOT NULL DEFAULT 0,
  `qty_in_box` int(11) DEFAULT NULL,
  `min_box` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `size_id`, `product_id`, `qty`, `price`, `price_sale`, `price_sale_store`, `qty_in_box`, `min_box`, `created_at`, `updated_at`) VALUES
(74, 1, 2, 1, 333, 222, 111, 11, 22, NULL, NULL),
(75, 1, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(76, 1, 6, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(77, 1, 7, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(78, 1, 8, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(79, 1, 9, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(80, 1, 10, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(81, 1, 11, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(82, 1, 12, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(83, 1, 13, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(84, 2, 14, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(88, 1, 15, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(89, 3, 16, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(92, 3, 18, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(94, 2, 19, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(95, 3, 20, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(96, 2, 21, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(97, 1, 22, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(184, 1, 23, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(185, 2, 23, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(192, 1, 1, 0, 700000, 650000, 600000, 100, 9, NULL, '2021-09-06 09:04:16'),
(193, 2, 1, 0, 750000, 700000, 650000, 10, 22, NULL, '2021-09-06 09:04:16'),
(194, 3, 1, 122, 800000, 750000, 700000, 14, 20, NULL, '2021-09-06 10:59:39'),
(195, 4, 1, 0, 650000, 600000, 550000, 14, 14, NULL, '2021-09-06 09:04:16'),
(207, 1, 29, 0, 700000, 600000, 500000, NULL, NULL, NULL, '2021-09-01 10:00:01'),
(210, 4, 30, 0, 700000, 600000, 500000, NULL, NULL, NULL, '2021-09-06 03:12:17'),
(211, 3, 30, 0, 750000, 650000, 550000, NULL, NULL, NULL, '2021-09-06 03:12:17'),
(212, 2, 30, 0, 800000, 700000, 600000, NULL, NULL, NULL, '2021-09-06 03:12:17'),
(213, 3, 31, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(214, 2, 31, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(215, 4, 32, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(218, 4, 34, 0, 80000, 75000, 50000, 50, 5, NULL, '2021-09-06 09:12:26'),
(219, 3, 34, 0, 75000, 70000, 60000, 60, 6, NULL, '2021-09-06 09:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`id`, `tag_id`, `product_id`, `created_at`, `updated_at`) VALUES
(129, 1, 2, NULL, NULL),
(130, 2, 2, NULL, NULL),
(131, 4, 3, NULL, NULL),
(132, 5, 3, NULL, NULL),
(133, 1, 4, NULL, NULL),
(134, 2, 4, NULL, NULL),
(135, 2, 5, NULL, NULL),
(136, 3, 5, NULL, NULL),
(137, 1, 6, NULL, NULL),
(138, 4, 6, NULL, NULL),
(139, 3, 7, NULL, NULL),
(140, 4, 7, NULL, NULL),
(141, 2, 8, NULL, NULL),
(142, 3, 8, NULL, NULL),
(143, 1, 9, NULL, NULL),
(144, 2, 10, NULL, NULL),
(145, 4, 11, NULL, NULL),
(146, 1, 12, NULL, NULL),
(147, 1, 13, NULL, NULL),
(148, 1, 14, NULL, NULL),
(152, 2, 15, NULL, NULL),
(153, 1, 16, NULL, NULL),
(154, 2, 16, NULL, NULL),
(159, 2, 18, NULL, NULL),
(160, 3, 18, NULL, NULL),
(163, 2, 19, NULL, NULL),
(164, 3, 19, NULL, NULL),
(165, 2, 20, NULL, NULL),
(166, 3, 20, NULL, NULL),
(167, 2, 21, NULL, NULL),
(168, 3, 21, NULL, NULL),
(169, 1, 22, NULL, NULL),
(170, 2, 22, NULL, NULL),
(173, 2, 17, NULL, NULL),
(174, 3, 17, NULL, NULL),
(219, 2, 24, NULL, NULL),
(220, 1, 25, NULL, NULL),
(221, 1, 26, NULL, NULL),
(222, 1, 27, NULL, NULL),
(223, 1, 28, NULL, NULL),
(249, 2, 23, NULL, NULL),
(250, 3, 23, NULL, NULL),
(338, 1, 29, NULL, NULL),
(342, 2, 30, NULL, NULL),
(343, 2, 31, NULL, NULL),
(344, 4, 32, NULL, NULL),
(348, 1, 1, NULL, NULL),
(349, 2, 1, NULL, NULL),
(351, 2, 34, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_trade`
--

CREATE TABLE `product_trade` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trade_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_trade`
--

INSERT INTO `product_trade` (`id`, `trade_id`, `product_id`, `created_at`, `updated_at`) VALUES
(72, 1, 2, NULL, NULL),
(73, 1, 3, NULL, NULL),
(74, 1, 4, NULL, NULL),
(75, 1, 5, NULL, NULL),
(76, 1, 6, NULL, NULL),
(77, 1, 7, NULL, NULL),
(78, 1, 8, NULL, NULL),
(79, 3, 9, NULL, NULL),
(80, 3, 10, NULL, NULL),
(81, 1, 11, NULL, NULL),
(82, 2, 12, NULL, NULL),
(83, 2, 13, NULL, NULL),
(84, 1, 14, NULL, NULL),
(88, 1, 15, NULL, NULL),
(89, 3, 16, NULL, NULL),
(92, 3, 18, NULL, NULL),
(94, 2, 19, NULL, NULL),
(95, 3, 20, NULL, NULL),
(96, 3, 21, NULL, NULL),
(97, 3, 22, NULL, NULL),
(99, 3, 17, NULL, NULL),
(124, 1, 23, NULL, NULL),
(145, 3, 29, NULL, NULL),
(148, 3, 30, NULL, NULL),
(149, 3, 31, NULL, NULL),
(150, 3, 32, NULL, NULL),
(152, 3, 1, NULL, NULL),
(154, 3, 34, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rel_level_store`
--

CREATE TABLE `rel_level_store` (
  `id` int(11) NOT NULL,
  `flash_id` int(11) NOT NULL,
  `level_store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rel_level_store`
--

INSERT INTO `rel_level_store` (`id`, `flash_id`, `level_store_id`) VALUES
(11, 4, 0),
(12, 4, 1),
(13, 4, 2),
(14, 4, 3),
(15, 6, 0),
(16, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Supper Admin', 'Full nhóm quyền', 'admins', '2020-10-30 21:31:13', '2020-10-30 21:31:13'),
(2, 'Bán hàng', 'admin bán hàng', 'admins', '2021-04-12 01:48:35', '2021-04-12 01:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(5, 2),
(9, 2),
(13, 2),
(27, 1),
(88, 2);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_desscription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `s_target` tinyint(4) NOT NULL DEFAULT 1,
  `s_sort` tinyint(4) NOT NULL DEFAULT 1,
  `s_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `s_name`, `s_desscription`, `s_link`, `s_banner`, `s_type`, `s_target`, `s_sort`, `s_status`, `created_at`, `updated_at`) VALUES
(1, 'Gia vị truyền thống', '<p>Tomorrow&#39;s <span>Leader</span></p>', 'https://www.adsmo.vn', 'frontier-prime-cuts-1440x660-1627696550.jpg', '1', 1, 1, 1, '2020-10-29 12:37:35', '2021-07-30 18:55:53'),
(2, 'Gia vị tự nhiên', '<p>T&ocirc;i đ&atilde; ra trường được khoảng hai năm, Unimind đ&atilde; thay đổi c&aacute;ch nh&igrave;n của t&ocirc;i về sự nghiệp của t&ocirc;i. Tham gia c&aacute;c kh&oacute;a học nền tảng trong tiếp thị đ&atilde; gi&uacute;p t&ocirc;i khởi động sự nghiệp của m&igrave;nh.</p>', 'https://www.adsmo', 'sunscreen-insect-banner-1440x660-1627696569.jpg', '1', 1, 2, 1, '2020-10-29 12:38:03', '2021-07-30 18:56:12'),
(3, 'Gia vị nước ngoài', '<p>T&ocirc;i đ&atilde; ra trường được khoảng hai năm, Unimind đ&atilde; thay đổi c&aacute;ch nh&igrave;n của t&ocirc;i về sự nghiệp của t&ocirc;i. Tham gia c&aacute;c kh&oacute;a học nền tảng trong tiếp thị đ&atilde; gi&uacute;p t&ocirc;i khởi động sự nghiệp của m&igrave;nh.</p>', 'https://www.adsmo.vn', 'lunette-backtoschool-1440x660px-1627696602.jpg', '1', 1, 2, 1, '2020-10-29 12:38:18', '2021-07-30 18:56:44'),
(4, 'Gia vị Top', 'Baking soda baths are a great way to detox. Check out the benefits of baking soda baths and how to do one at home!', 'https://adsmo.vn/', 'plantboss-290-720x550-1627696790.jpg', '2', 1, 2, 1, '2021-05-12 01:24:56', '2021-07-30 18:59:55'),
(5, 'NEW! PLANT BOSS', 'Baking soda baths are a great way to detox. Check out the benefits of baking soda baths and how to do one at home!', '#', 'caffine-free-workout-blog-homepage-1627696841.jpg', '3', 1, 0, 1, '2021-07-13 21:34:15', '2021-07-30 19:00:44'),
(6, 'BAKING SODA BATHS: BENEFITS AND SIDE EFFECTS', 'Baking soda baths are a great way to detox. Check out the benefits of baking soda baths and how to do one at home!', '#', 'cbd-homepage-desktop-1627696883.jpg', '4', 1, 0, 1, '2021-07-13 21:34:54', '2021-07-30 19:01:25'),
(7, 'BAKING SODA BATHS: BENEFITS AND SIDE EFFECTS', 'Baking soda baths are a great way to detox. Check out the benefits of baking soda baths and how to do one at home!', '#', 'cm-hero-1627696924.png', '5', 1, 0, 1, '2021-07-13 21:34:54', '2021-07-30 19:02:06'),
(8, 'Banner Post', 'Banner PostBanner PostBanner PostBanner PostBanner Post', '#', 'frontier-prime-cuts-1440x660-1627696550.jpg', '7', 1, 0, 1, '2021-07-16 00:10:50', '2021-07-16 00:11:11'),
(9, 'Banner Post Cate', 'Banner Post Cate Banner Post Cate Banner Post Cate Banner Post Cate', '#', 'sunscreen-insect-banner-1440x660-1627696569.jpg', '6', 1, 0, 1, '2021-07-16 00:14:09', '2021-07-16 00:14:19'),
(10, 'Banner Post Cate', 'Banner Post Cate Banner Post Cate Banner Post Cate Banner Post Cate', '#', 'sunscreen-insect-banner-1440x660-1627696569.jpg', '11', 1, 0, 1, '2021-07-16 00:14:09', '2021-07-16 00:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_sort` tinyint(4) NOT NULL DEFAULT 0,
  `t_status` tinyint(4) NOT NULL DEFAULT 1,
  `t_hot` tinyint(4) NOT NULL DEFAULT 0,
  `t_position_3` tinyint(4) NOT NULL DEFAULT 0,
  `t_position_2` tinyint(4) NOT NULL DEFAULT 0,
  `t_position_1` tinyint(4) NOT NULL DEFAULT 0,
  `t_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `t_name`, `t_slug`, `t_sort`, `t_status`, `t_hot`, `t_position_3`, `t_position_2`, `t_position_1`, `t_title_seo`, `t_avatar`, `t_keyword_seo`, `t_description_seo`, `created_at`, `updated_at`) VALUES
(1, 'Digital Marketing', 'digital-marketing', 0, 1, 1, 0, 0, 1, 'Digital Marketing', NULL, NULL, 'Digital Marketing', '2021-05-05 03:48:23', '2021-05-05 03:48:36'),
(2, 'Seo', 'seo', 0, 1, 1, 0, 0, 1, 'Seo', NULL, NULL, 'Seo', '2021-05-05 03:48:55', NULL),
(3, 'Google Ads', 'google-ads', 0, 1, 1, 0, 0, 1, 'Google Ads', NULL, NULL, 'Google Ads', '2021-05-05 03:49:22', NULL),
(4, 'Facebook Ads', 'facebook-ads', 0, 1, 1, 0, 0, 1, 'Facebook Ads', NULL, NULL, 'Facebook Ads', '2021-05-05 03:49:37', NULL),
(5, 'Marketing Online', 'marketing-online', 0, 1, 1, 0, 0, 1, 'Marketing Online', NULL, NULL, 'Marketing Online', '2021-05-05 03:49:50', NULL),
(6, 'Website Design', 'website-design', 0, 1, 1, 0, 0, 1, 'Website Design', NULL, NULL, 'Website Design', '2021-05-05 03:50:09', NULL),
(7, 'Branding', 'branding', 0, 1, 1, 0, 0, 1, 'Branding', NULL, NULL, 'Branding', '2021-05-05 03:50:19', NULL),
(8, 'Business Leadership', 'business-leadership', 0, 1, 1, 0, 0, 1, 'Business Leadership', NULL, NULL, 'Business Leadership', '2021-05-05 03:50:35', NULL),
(9, 'Quảng cáo Google', 'quang-cao-google', 0, 1, 0, 0, 1, 0, 'Quảng cáo Google', NULL, NULL, 'Quảng cáo Google', '2021-05-05 03:51:04', NULL),
(10, 'Quảng cáo Facebook', 'quang-cao-facebook', 0, 1, 0, 0, 1, 0, 'Quảng cáo Facebook Chuyên nghiệp', 'logo-1621499323.png', NULL, 'Quảng cáo Facebook Chuyên nghiệp tại adsmo', '2021-05-05 03:51:21', '2021-05-20 01:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `uni_admin`
--

CREATE TABLE `uni_admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uni_color`
--

CREATE TABLE `uni_color` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_color` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_more` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `order` int(11) DEFAULT NULL,
  `thumnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_color`
--

INSERT INTO `uni_color` (`id`, `name`, `slug`, `code_color`, `desscription`, `meta_desscription`, `meta_title`, `meta_keyword`, `content`, `content_more`, `status`, `order`, `thumnail`, `banner`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Xanh lá', 'xanh-la', '#0d9a00', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 01', 'Xanh lá', 'Xanh lá', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, 1, 0, NULL, NULL, NULL, NULL, '2021-07-13 03:20:16', '2021-07-13 03:20:54'),
(2, 'Đỏ cam', 'do-cam', '#cd2701', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02', 'Đỏ cam', 'Đỏ cam', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, 1, 0, NULL, NULL, NULL, NULL, '2021-07-13 03:23:10', NULL),
(3, 'Màu nâu đen', 'mau-nau-den', '#111222', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 03', 'Màu nâu đen', 'Màu nâu đen', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, 1, 0, NULL, NULL, NULL, NULL, '2021-07-13 03:24:56', NULL),
(4, 'Trắng', 'trang', '#ffffff', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Trắng Sốt Chấm là chất lỏng sánh, có độ đặc nhấtr sdf', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', NULL, 1, 0, NULL, NULL, NULL, NULL, '2021-08-10 03:46:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uni_comment`
--

CREATE TABLE `uni_comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `type_comment` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ' ',
  `type` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noi_dung_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noi_dung_question` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noi_dung_answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 0,
  `star` int(1) NOT NULL DEFAULT 5,
  `title_rv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_comment`
--

INSERT INTO `uni_comment` (`id`, `user_id`, `product_id`, `type_comment`, `type`, `noi_dung_comment`, `noi_dung_question`, `noi_dung_answer`, `title`, `name`, `phone`, `email`, `status`, `star`, `title_rv`, `created_at`, `updated_at`) VALUES
(18, 41, 11, 'product', 'question', '', 'Sản phẩm này dùng như nào shop ơi', NULL, 'Full Set Nhạc Hoa Hay Nhất  DJ Tài Muzik  LK Nhạc Hoa', 'Phạm văn Tiến', '0969938804', 'ntdat7714@gmail.com', 0, 5, NULL, '2021-08-04 07:29:23', NULL),
(19, 41, 11, 'product', 'review', 'Sản phẩm này đã giúp tôi trở thành một đầu bếp trong một thời gian ngắn', 'qưedqaweqwqweqwe', NULL, 'Full Set Nhạc Hoa Hay Nhất  DJ Tài Muzik  LK Nhạc Hoa', 'Phạm văn Tiến', '0969938804', 'ntdat7714@gmail.com', 0, 5, NULL, '2021-08-04 07:30:06', NULL),
(20, 41, 11, 'product', 'question', '', 'ádasdasdasdasdasda', NULL, 'Full Set Nhạc Hoa Hay Nhất  DJ Tài Muzik  LK Nhạc Hoa', 'Phạm văn Tiến', '0969938801', 'hppvtienaaa@gmail.com', 0, 5, NULL, '2021-08-04 07:47:51', NULL),
(21, 41, 11, 'product', 'review', 'Hay đấy', '', NULL, NULL, NULL, NULL, NULL, 1, 5, NULL, '2021-08-04 07:48:44', '2021-08-04 08:41:37'),
(22, 0, 1, 'product', 'question', '', 'ádasdasdasdasda', 'sadasdasdasdasd', 'Sản phẩm', 'Áo Phông 2019 Phong Cách Mới', '09137237332', 'hppvtienaaa@gmail.com', 1, 5, NULL, '2021-08-04 07:49:32', '2021-08-04 08:42:04'),
(25, 0, 11, 'product', 'review', 'Liên hệ với tôi', '', NULL, 'tôi muốn mua sản phẩm', 'Dai nguyen', '0979467612', 'nguyen@gmail.com', 1, 5, NULL, '2021-08-19 00:51:01', '2021-08-19 00:52:03'),
(26, 0, 11, 'product', 'question', '', 'Sảm phẩm này có ớt không?', 'Sản phẩm này không có ớt', NULL, 'Nguyen Đại', '0979467612', 'dainguyen@gmail.com', 1, 5, NULL, '2021-08-19 00:51:51', '2021-08-19 00:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `uni_contact`
--

CREATE TABLE `uni_contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_newsletter` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_contact`
--

INSERT INTO `uni_contact` (`id`, `user_id`, `name`, `message`, `is_newsletter`, `status`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(19, 0, 'Yêu cầu Newsletters', 'Yêu cầu Newsletters', 1, 0, 'abcasdasd@gmail.com', 0, '2021-09-04 04:35:44', NULL),
(20, 0, 'Yêu cầu Newsletters', 'Yêu cầu Newsletters', 1, 0, 'abcasdasdsasdasdasdasdasdasdsd@gmail.com', 0, '2021-09-04 04:36:08', NULL),
(21, 0, 'Yêu cầu Newsletters', 'Yêu cầu Newsletters', 1, 0, 'aeecaeeeesdasd@gmail.com', 0, '2021-09-04 08:35:18', NULL),
(22, 0, 'Yêu cầu Newsletters', 'Yêu cầu Newsletters', 1, 0, 'asdasdasdsad@gmail.com', 0, '2021-09-04 08:35:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uni_favourite`
--

CREATE TABLE `uni_favourite` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uni_flash_sale`
--

CREATE TABLE `uni_flash_sale` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_flash` tinyint(101) DEFAULT NULL,
  `price` int(20) DEFAULT 0,
  `price_nosale` int(20) NOT NULL DEFAULT 0,
  `sale_off` date DEFAULT NULL,
  `info_sale` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_flash_sale`
--

INSERT INTO `uni_flash_sale` (`id`, `name`, `slug`, `desscription`, `meta_desscription`, `meta_title`, `meta_keyword`, `content`, `qty`, `status`, `is_flash`, `price`, `price_nosale`, `sale_off`, `info_sale`, `thumbnail`, `created_at`, `updated_at`) VALUES
(4, 'Gói combo tháng 8 cho Tất cả các đại lý', 'goi-combo-thang-8-cho-tat-ca-cac-dai-ly', 'Gói combo tháng 8 cho Tất cả các đại lý Gói combo tháng 8 cho Tất cả các đại lý Gói combo tháng 8 cho Tất cả các đại lý', 'Gói combo tháng 8 cho Tất cả các đại lý Gói combo tháng 8 cho Tất cả các đại lý Gói combo tháng 8 cho Tất cả các đại lý', 'Gói combo tháng 8 cho Tất cả các đại lý Gói combo tháng 8 cho', NULL, '<p>G&oacute;i combo th&aacute;ng 8 cho Tất cả c&aacute;c đại l&yacute;&nbsp;G&oacute;i combo th&aacute;ng 8 cho Tất cả c&aacute;c đại l&yacute;&nbsp;G&oacute;i combo th&aacute;ng 8 cho Tất cả c&aacute;c đại l&yacute;&nbsp;G&oacute;i combo th&aacute;ng 8 cho Tất cả c&aacute;c đại l&yacute;&nbsp;G&oacute;i combo th&aacute;ng 8 cho Tất cả c&aacute;c đại l&yacute;&nbsp;G&oacute;i combo th&aacute;ng 8 cho Tất cả c&aacute;c đại l&yacute;&nbsp;G&oacute;i combo th&aacute;ng 8 cho Tất cả c&aacute;c đại l&yacute;&nbsp;G&oacute;i combo th&aacute;ng 8 cho Tất cả c&aacute;c đại l&yacute;</p>', 20, 1, 1, 31000000, 0, '2021-09-30', '[{\"id\":\"3\",\"qty_sale\":\"10\",\"price_sale\":\"500000\",\"price_subtotal\":\"5000000\"},{\"id\":\"2\",\"qty_sale\":\"20\",\"price_sale\":\"600000\",\"price_subtotal\":\"12000000\"},{\"id\":\"1\",\"qty_sale\":\"20\",\"price_sale\":\"700000\",\"price_subtotal\":\"14000000\"}]', 'bot-me-lo-120g-04-1627698552.png', '2021-08-20 04:33:40', NULL),
(5, 'Gói combo cho tất cả người dùng', 'goi-combo-cho-tat-ca-nguoi-dung', 'Gói combo cho tất cả người dùng Gói combo cho tất cả người dùng Gói combo cho tất cả người dùng Gói combo cho tất cả người dùng', 'Gói combo cho tất cả người dùng Gói combo cho tất cả người dùng Gói combo cho tất cả người dùng Gói combo cho tất cả người dùng', 'Gói combo cho tất cả người dùng Gói combo cho tất cả người dùng', NULL, '<p>G&oacute;i combo cho tất cả người d&ugrave;ng&nbsp;G&oacute;i combo cho tất cả người d&ugrave;ng</p>', 30, 1, 0, 13100000, 14400000, '2021-09-30', '[{\"id\":\"2\",\"qty_sale\":\"8\",\"price_sale\":\"700000\",\"price_subtotal\":\"5600000\"},{\"id\":\"1\",\"qty_sale\":\"10\",\"price_sale\":\"750000\",\"price_subtotal\":\"7500000\"}]', 'bot-me-lo-120g-04-1627698552.png', '2021-08-20 04:37:50', '2021-08-21 04:44:11'),
(6, 'Gói combo cho vàng và bạc', 'goi-combo-cho-vang-va-bac', 'Gói combo cho vàng và bạc  Gói combo cho vàng và bạc  Gói combo cho vàng và bạc  Gói combo cho vàng và bạc  Gói combo cho vàng và bạc', 'Gói combo cho vàng và bạc  Gói combo cho vàng và bạc  Gói combo cho vàng và bạc  Gói combo cho vàng và bạc  Gói combo cho vàng và bạc', 'Gói combo cho vàng và bạc  Gói combo cho vàng và bạc', NULL, '<p>G&oacute;i combo cho v&agrave;ng v&agrave; bạc&nbsp;&nbsp;G&oacute;i combo cho v&agrave;ng v&agrave; bạc&nbsp;&nbsp;G&oacute;i combo cho v&agrave;ng v&agrave; bạc&nbsp;</p>', 20, 1, 1, 18000000, 0, '2021-09-30', '[{\"id\":\"3\",\"qty_sale\":\"10\",\"price_sale\":\"500000\",\"price_subtotal\":\"5000000\"},{\"id\":\"2\",\"qty_sale\":\"10\",\"price_sale\":\"700000\",\"price_subtotal\":\"7000000\"},{\"id\":\"1\",\"qty_sale\":\"10\",\"price_sale\":\"600000\",\"price_subtotal\":\"6000000\"}]', 'khuyen-mai-1629459722.jpg', '2021-08-20 04:42:10', NULL),
(7, 'Combo tháng 12', 'combo-thang-12', 'Combo tháng 12Combo tháng 12Combo tháng 12Combo tháng 12Combo tháng 12Combo tháng 12Combo tháng 12', 'Combo tháng 12Combo tháng 12Combo tháng 12Combo tháng 12Combo tháng 12Combo tháng 12Combo tháng 12Combo tháng 12', 'Combo tháng 12Combo tháng 12Combo tháng 12Combo tháng 12', NULL, '<p>Combo th&aacute;ng 12Combo th&aacute;ng 12Combo th&aacute;ng 12Combo th&aacute;ng 12Combo th&aacute;ng 12Combo th&aacute;ng 12Combo th&aacute;ng 12Combo th&aacute;ng 12Combo th&aacute;ng 12Combo th&aacute;ng 12Combo th&aacute;ng 12Combo th&aacute;ng 12Combo th&aacute;ng 12</p>', 10, 1, 0, 13000000, 0, '2021-09-01', '[{\"id\":\"2\",\"qty_sale\":\"12\",\"price_sale\":\"500000\",\"price_subtotal\":\"6000000\"},{\"id\":\"1\",\"qty_sale\":\"10\",\"price_sale\":\"700000\",\"price_subtotal\":\"7000000\"}]', NULL, '2021-08-21 01:04:05', NULL),
(8, 'Com bo thangs 10', 'com-bo-thangs-10', 'Com bo thangs 10 Com bo thangs 10 Com bo thangs 10 Com bo thangs 10 Com bo thangs 10 Com bo thangs 10', 'Com bo thangs 10 Com bo thangs 10 Com bo thangs 10 Com bo thangs 10 Com bo thangs 10 Com bo thangs 10 Com bo thangs 10', 'Com bo thangs 10 Com bo thangs 10 Com bo thangs 10', NULL, '<p>Com bo thangs 10&nbsp;Com bo thangs 10&nbsp;Com bo thangs 10&nbsp;Com bo thangs 10&nbsp;Com bo thangs 10&nbsp;Com bo thangs 10&nbsp;Com bo thangs 10&nbsp;Com bo thangs 10&nbsp;Com bo thangs 10&nbsp;Com bo thangs 10&nbsp;Com bo thangs 10&nbsp;Com bo thangs 10&nbsp;Com bo thangs 10&nbsp;</p>', 10, 1, 0, 7000000, 8000000, '2021-08-26', '[{\"id\":\"1\",\"qty_sale\":\"10\",\"price_sale\":\"700000\",\"price_subtotal\":\"7000000\"}]', NULL, '2021-08-21 01:06:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uni_lotproduct`
--

CREATE TABLE `uni_lotproduct` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lot_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `total_qty` int(10) DEFAULT NULL,
  `export_qty` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`export_qty`)),
  `qty_box` int(11) DEFAULT NULL,
  `size_box` int(11) NOT NULL,
  `price_lotproduct` int(20) DEFAULT NULL,
  `size` int(11) NOT NULL,
  `barcode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku_lotproduct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_lotproduct`
--

INSERT INTO `uni_lotproduct` (`id`, `lot_name`, `supplier_id`, `product_id`, `qty`, `total_qty`, `export_qty`, `qty_box`, `size_box`, `price_lotproduct`, `size`, `barcode`, `sku_lotproduct`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, 'Lô sản phẩm 01 - 180g', 2, 1, 478, 8000, '[\"1000\",\"2000\",\"1000\",\"1000\",\"2000\",\"100\",\"100\",\"10\",\"90\",\"90\",\"10\",\"100\",\"22\"]', 100, 80, 500000, 3, '1122334455', '11223344', '2022-07-31', '2021-07-13 03:38:55', '2021-09-06 10:59:39'),
(2, 'Lô sản phẩm 02', 2, 2, 6000, 7000, '[\"1000\"]', 100, 70, 500000, 2, '1021201201', '12345698', '2022-08-22', '2021-07-13 03:40:37', '2021-07-31 00:36:42'),
(3, 'Lô sản phẩm 03', 2, 3, 7000, 8000, '[\"1000\"]', 100, 80, 500000, 3, '1122554466', '1144558875', '2022-08-18', '2021-07-13 03:41:21', '2021-08-19 02:48:28'),
(4, 'Lô sản phẩm 04', 2, 4, 8000, 8000, NULL, 100, 80, 500000, 3, '1234567890', '1234569870', '2022-12-28', '2021-07-13 03:42:14', NULL),
(5, 'Lô sản phẩm 05', 2, 5, 10000, 10000, NULL, 100, 100, 500000, 3, '1122336655', '145236987', '2022-10-22', '2021-07-13 03:43:17', NULL),
(7, 'Lô sản phẩm 01 150g', 2, 1, 160, 800, '[\"600\",\"10\",\"10\",\"10\",\"10\"]', 10, 80, 450000, 2, '123456789012', '123456789012', '2022-02-22', '2021-08-30 10:13:51', '2021-09-01 07:15:07'),
(8, 'Lô sản phẩm 01 120g', 2, 1, 0, 1200, '[\"1000\",\"200\"]', 15, 80, 400000, 1, '123456789012', '123456789012', '2022-02-22', '2021-08-30 10:16:29', '2021-08-31 10:31:55'),
(9, 'Lô sản phẩm 01 lần 2 - 180g', 2, 1, 3000, 8000, '[\"2000\",\"1000\",\"1000\",\"1000\"]', 100, 80, 500000, 3, '123456789012', '123456789012', '2022-02-22', '2021-08-30 10:47:50', '2021-08-31 09:00:00'),
(10, 'Loo san pham hoa hoi', 2, 23, 7700, 8800, '[\"1000\",\"100\"]', 100, 88, 600000, 2, '1234567893214', '123456789321', '2023-02-22', '2021-08-31 09:38:02', '2021-09-01 06:45:15'),
(11, 'Lô sản phẩm 01', 2, 1, 8000, 8000, NULL, 100, 80, 700000, 3, '1234567893214', '123456789331', '2023-02-25', '2021-08-31 09:39:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uni_order`
--

CREATE TABLE `uni_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `customer_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_invoice` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vouchers` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `type_pay` int(4) DEFAULT NULL,
  `pay_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_node` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taxcode` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `combo_id` int(11) DEFAULT 0,
  `cart_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_sale` int(11) DEFAULT NULL,
  `total_money` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_vat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_no_vat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_ship` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_discount` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_vouchers` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_ship` tinyint(1) DEFAULT NULL,
  `order_poin` float NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_order`
--

INSERT INTO `uni_order` (`id`, `user_id`, `customer_name`, `code_invoice`, `vouchers`, `email`, `address`, `phone`, `type_pay`, `pay_code`, `pay_node`, `taxcode`, `status`, `combo_id`, `cart_info`, `product_sale`, `total_money`, `total_vat`, `total_no_vat`, `total_ship`, `total_discount`, `total_vouchers`, `order_code`, `ship_info`, `method_ship`, `order_poin`, `created_at`, `updated_at`) VALUES
(2, 34, 'Nhà cung cấp 01', '#009830', NULL, 'ntda33t7714@gmail.com', 'Ha noi, Hai Phong', 969938802, 4, NULL, NULL, '12233455667', 2, 0, '{\"636eef69b8655ed86c19e40517696dd6\":{\"rowId\":\"636eef69b8655ed86c19e40517696dd6\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 01\",\"qty\":1,\"price\":1,\"weight\":1,\"options\":{\"images\":\"1-0898361181138-frontier-ccop-prime-cuts-salt-and-pepper-18113-front-1626835969.jpg\"},\"discount\":0,\"tax\":0.1,\"subtotal\":1},\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55.5,\"subtotal\":555}}', NULL, '612', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-27 07:07:20', NULL),
(3, 34, 'Nhà cung cấp 01', '#009830', NULL, 'ntdat7714@gmail.com', 'Ha noi, Hai Phong', 969938802, 4, NULL, NULL, '12233455667', 2, 0, '{\"636eef69b8655ed86c19e40517696dd6\":{\"rowId\":\"636eef69b8655ed86c19e40517696dd6\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 01\",\"qty\":1,\"price\":1,\"weight\":1,\"options\":{\"images\":\"1-0898361181138-frontier-ccop-prime-cuts-salt-and-pepper-18113-front-1626835969.jpg\"},\"discount\":0,\"tax\":0.1,\"subtotal\":1},\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55.5,\"subtotal\":555}}', NULL, '612', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-26 07:07:20', NULL),
(4, 34, 'Tien Van Pham', '#009779', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 4, NULL, NULL, '12233455667', 2, 0, '{\"636eef69b8655ed86c19e40517696dd6\":{\"rowId\":\"636eef69b8655ed86c19e40517696dd6\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 01\",\"qty\":1,\"price\":1,\"weight\":1,\"options\":{\"images\":\"1-0898361181138-frontier-ccop-prime-cuts-salt-and-pepper-18113-front-1626835969.jpg\"},\"discount\":0,\"tax\":0.1,\"subtotal\":1},\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55.5,\"subtotal\":555}}', NULL, '612', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-26 03:48:02', NULL),
(5, 34, 'Tien Van Pham', '#003615', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 4, '20210726104833', NULL, '12233455667', 2, 0, '{\"636eef69b8655ed86c19e40517696dd6\":{\"rowId\":\"636eef69b8655ed86c19e40517696dd6\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 01\",\"qty\":1,\"price\":1,\"weight\":1,\"options\":{\"images\":\"1-0898361181138-frontier-ccop-prime-cuts-salt-and-pepper-18113-front-1626835969.jpg\"},\"discount\":0,\"tax\":0.1,\"subtotal\":1},\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55.5,\"subtotal\":555}}', NULL, '612', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-26 03:48:28', '2021-07-26 03:48:33'),
(6, 34, 'Tien Van Pham', '#009912', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '12233455667', 2, 0, '{\"636eef69b8655ed86c19e40517696dd6\":{\"rowId\":\"636eef69b8655ed86c19e40517696dd6\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 01\",\"qty\":1,\"price\":1,\"weight\":1,\"options\":{\"images\":\"1-0898361181138-frontier-ccop-prime-cuts-salt-and-pepper-18113-front-1626835969.jpg\"},\"discount\":0,\"tax\":0.1,\"subtotal\":1},\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55.5,\"subtotal\":555}}', NULL, '612', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-26 03:49:52', NULL),
(7, 34, 'Tien Van Pham', '#001490', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '12233455667', 2, 0, '{\"636eef69b8655ed86c19e40517696dd6\":{\"rowId\":\"636eef69b8655ed86c19e40517696dd6\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 01\",\"qty\":1,\"price\":1,\"weight\":1,\"options\":{\"images\":\"1-0898361181138-frontier-ccop-prime-cuts-salt-and-pepper-18113-front-1626835969.jpg\"},\"discount\":0,\"tax\":0.1,\"subtotal\":1},\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55.5,\"subtotal\":555}}', NULL, '612', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-26 03:55:26', NULL),
(8, 34, 'Tien Van Pham', '#001249', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '12233455667', 2, 0, '{\"636eef69b8655ed86c19e40517696dd6\":{\"rowId\":\"636eef69b8655ed86c19e40517696dd6\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 01\",\"qty\":1,\"price\":1,\"weight\":1,\"options\":{\"images\":\"1-0898361181138-frontier-ccop-prime-cuts-salt-and-pepper-18113-front-1626835969.jpg\"},\"discount\":0,\"tax\":0.1,\"subtotal\":1},\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55.5,\"subtotal\":555}}', NULL, '612', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-26 03:55:44', NULL),
(9, 34, 'Tien Van Pham', '#005431', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '1234567897', 2, 0, '{\"636eef69b8655ed86c19e40517696dd6\":{\"rowId\":\"636eef69b8655ed86c19e40517696dd6\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 01\",\"qty\":1,\"price\":1,\"weight\":1,\"options\":{\"images\":\"1-0898361181138-frontier-ccop-prime-cuts-salt-and-pepper-18113-front-1626835969.jpg\"},\"discount\":0,\"tax\":0.1,\"subtotal\":1},\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55.5,\"subtotal\":555}}', NULL, '612', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-26 03:56:30', NULL),
(10, 34, 'Tien Van Pham', '#004763', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '12233455667', 2, 0, '{\"636eef69b8655ed86c19e40517696dd6\":{\"rowId\":\"636eef69b8655ed86c19e40517696dd6\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 01\",\"qty\":1,\"price\":1,\"weight\":1,\"options\":{\"images\":\"1-0898361181138-frontier-ccop-prime-cuts-salt-and-pepper-18113-front-1626835969.jpg\"},\"discount\":0,\"tax\":0.1,\"subtotal\":1},\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55.5,\"subtotal\":555}}', NULL, '612', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-26 03:59:11', NULL),
(11, 34, 'Tien Van Pham', '#002532', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, '20210727022605', NULL, '12233455667', 2, 0, '{\"636eef69b8655ed86c19e40517696dd6\":{\"rowId\":\"636eef69b8655ed86c19e40517696dd6\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 01\",\"qty\":1,\"price\":1,\"weight\":1,\"options\":{\"images\":\"1-0898361181138-frontier-ccop-prime-cuts-salt-and-pepper-18113-front-1626835969.jpg\"},\"discount\":0,\"tax\":0.1,\"subtotal\":1},\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55.5,\"subtotal\":555}}', NULL, '612', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-26 19:20:02', '2021-07-26 19:26:05'),
(12, 34, 'Nhà cung cấp 01', '#003675', NULL, 'ntdat7714@gmail.com', 'Ha noi, Hai Phong', 969938802, 3, NULL, NULL, '1234567897', 2, 0, '{\"636eef69b8655ed86c19e40517696dd6\":{\"rowId\":\"636eef69b8655ed86c19e40517696dd6\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 01\",\"qty\":1,\"price\":1,\"weight\":1,\"options\":{\"images\":\"1-0898361181138-frontier-ccop-prime-cuts-salt-and-pepper-18113-front-1626835969.jpg\"},\"discount\":0,\"tax\":0.1,\"subtotal\":1},\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55.5,\"subtotal\":555}}', NULL, '612', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-26 19:26:49', '2021-07-26 21:16:14'),
(14, 34, 'Nhà cung cấp 02', '#006062', NULL, 'wdfdsfd14@gmail.com', 'Ha noi, Hai Phong', 969938808, 3, NULL, NULL, '1234567890', 2, 0, '{\"636eef69b8655ed86c19e40517696dd6\":{\"rowId\":\"636eef69b8655ed86c19e40517696dd6\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"6\",\"price\":1,\"weight\":1,\"options\":{\"images\":\"1-0898361181138-frontier-ccop-prime-cuts-salt-and-pepper-18113-front-1626835969.jpg\"},\"discount\":0,\"tax\":0.1,\"subtotal\":6},\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"6\",\"price\":555,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55.5,\"subtotal\":3330}}', NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-26 20:20:17', '2021-07-26 21:14:30'),
(15, 34, 'Nhà cung cấp 02', '#003276', NULL, 'hppvtienaaa@gmail.com', 'Ha noi, Hai Phong', 969938804, 3, NULL, NULL, '12233455667', 2, 0, '{\"636eef69b8655ed86c19e40517696dd6\":{\"rowId\":\"636eef69b8655ed86c19e40517696dd6\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 01\",\"qty\":1,\"price\":1,\"weight\":1,\"options\":{\"images\":\"1-0898361181138-frontier-ccop-prime-cuts-salt-and-pepper-18113-front-1626835969.jpg\"},\"discount\":0,\"tax\":0.1,\"subtotal\":1}}', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-26 23:42:06', NULL),
(16, 34, 'Tien Van Pham', '#002004', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '1234567897', 2, 0, '{\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555000,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55500,\"subtotal\":555000}}', NULL, '611', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-26 23:44:38', NULL),
(17, 34, 'Tien Van Pham', '#004052', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '12233455667', 2, 0, '{\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555000,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55500,\"subtotal\":555000}}', NULL, '611', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-26 23:47:01', NULL),
(18, 34, 'Tien Van Pham', '#008920', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '12233455667', 2, 0, '{\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555000,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55500,\"subtotal\":555000}}', NULL, '610.500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-26 23:54:26', NULL),
(19, 34, 'Nhà cung cấp 01', '#004371', NULL, 'ntdat7714@gmail.com', 'Ha noi, Hai Phong', 969938802, 3, NULL, NULL, '12233455667', 2, 0, '{\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555000,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55500,\"subtotal\":555000}}', NULL, '610.500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-26 23:57:46', NULL),
(20, 34, 'Tien Van Pham', '#001221', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '12233455667', 2, 0, '{\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555000,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55500,\"subtotal\":555000}}', NULL, '610.500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-27 00:30:33', NULL),
(21, 34, 'Tien Van Pham', '#007740', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '12233455667', 2, 0, '{\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555000,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55500,\"subtotal\":555000}}', NULL, '610.500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-27 00:31:15', NULL),
(22, 34, 'Nhà cung cấp 02', '#006132', NULL, 'wdfdsfd14@gmail.com', 'Ha noi, Hai Phong', 969938808, 3, NULL, NULL, '1234567890', 2, 0, '{\"d425c83412d4497f160858b0a85d7f52\":{\"rowId\":\"d425c83412d4497f160858b0a85d7f52\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":1,\"price\":555000,\"weight\":1,\"options\":{\"images\":\"1-0898361188169-frontier-ccop-prime-cuts-savory-pepper-18816-front-1626836096.jpg\"},\"discount\":0,\"tax\":55500,\"subtotal\":555000}}', NULL, '610.500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-27 00:33:05', NULL),
(23, 41, 'dainguyen', '#004636', NULL, 'xaynhatrongoihaiphong@gmail.com', 'thủy sơn thủy nguyên hải phòng', 979467612, 3, NULL, NULL, '58858585', 2, 0, '{\"2eb65ca95f321408c3993c1a788af6b6\":{\"rowId\":\"2eb65ca95f321408c3993c1a788af6b6\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":5,\"options\":{\"images\":\"bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '277.200.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-31 00:33:50', NULL),
(24, 43, 'Dan Vu', '#002898', NULL, NULL, '22 Phố mới, Thủy Sơn, Thủy Nguyên', 356105388, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":\"12\",\"price\":800000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":80000,\"subtotal\":9600000},\"1c61191d0e0d3637d4396571bf01e9c9\":{\"rowId\":\"1c61191d0e0d3637d4396571bf01e9c9\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"10\",\"price\":800000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":80000,\"subtotal\":8000000}}', NULL, '19.360.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-31 06:27:44', NULL),
(25, 43, NULL, '#007357', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":\"12\",\"price\":800000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":80000,\"subtotal\":9600000},\"1c61191d0e0d3637d4396571bf01e9c9\":{\"rowId\":\"1c61191d0e0d3637d4396571bf01e9c9\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"10\",\"price\":800000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":80000,\"subtotal\":8000000}}', NULL, '19.360.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-31 06:28:55', NULL),
(26, 43, 'Dan Vu', '#003944', NULL, NULL, '22 Phố mới, Thủy Sơn, Thủy Nguyên', 356105388, 3, NULL, NULL, NULL, 2, 0, '{\"1c61191d0e0d3637d4396571bf01e9c9\":{\"rowId\":\"1c61191d0e0d3637d4396571bf01e9c9\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"5\",\"price\":800000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":80000,\"subtotal\":4000000}}', NULL, '4.400.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-02 06:26:07', NULL),
(27, 1, 'Tien Van Pham', '#007341', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":1,\"price\":800000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":80000,\"subtotal\":800000}}', NULL, '880.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-02 06:31:29', NULL),
(28, 1, 'Tien Van Pham', '#004929', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, '20210802140856', NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":1,\"price\":800000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":80000,\"subtotal\":800000}}', NULL, '880.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-02 07:08:47', '2021-08-02 07:08:56'),
(29, 1, 'Tien Van Pham', '#005754', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":1,\"price\":800000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":80000,\"subtotal\":800000}}', NULL, '880.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-02 07:18:53', NULL),
(30, 44, 'Dan Vu', '#004952', NULL, NULL, '22 Phố mới, Thủy Sơn, Thủy Nguyên', 356105388, 3, NULL, NULL, NULL, 2, 0, '{\"1c61191d0e0d3637d4396571bf01e9c9\":{\"rowId\":\"1c61191d0e0d3637d4396571bf01e9c9\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"5\",\"price\":800000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":80000,\"subtotal\":4000000},\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":1,\"price\":800000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":80000,\"subtotal\":800000}}', NULL, '5.280.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-02 07:37:34', NULL),
(31, 41, 'Tien Van Pham', '#008322', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '12233455667', 2, 0, '{\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"3\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":151200000}}', NULL, '166.320.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-02 19:29:49', NULL),
(32, 41, 'Tien', '#009516', NULL, 'ntdat7714@gmail.com', '30', 969938801, 3, '20210803023044', NULL, '1234567897', 2, 0, '{\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"3\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":151200000}}', NULL, '166.320.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-02 19:30:38', '2021-08-02 19:30:44'),
(33, 41, 'dainguyen', '#007434', NULL, 'nguyenxuandai217@gmail.com', 'ngu phuc kien thuy', 45345345, 3, NULL, NULL, '102939184', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":\"5\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '277.200.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-02 19:36:29', NULL),
(34, 41, 'nguyen dai', '#008233', NULL, 'nguyenxuandai217@gmail.com', '3455 sdfs sdf sdfs', 345345345, 3, NULL, NULL, '1234345', 2, 0, '{\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"3\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":151200000}}', NULL, '166.320.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-02 19:46:27', NULL),
(35, 41, NULL, '#006461', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000},\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":3,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":151200000}}', NULL, '443.520.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-03 08:35:33', NULL),
(36, 41, 'Trung tâm thương mại một thành viên.', '#002948', NULL, NULL, 'Hải Phòng', 969987456, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000},\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":3,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":151200000}}', NULL, '443.520.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-03 17:59:32', NULL),
(37, 41, 'Tien Van Pham', '#009875', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000},\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":3,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":151200000}}', NULL, '443.520.000', '40.320.000', '403.200.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-04 00:22:23', NULL),
(38, 41, 'Nhà cung cấp 02', '#004058', NULL, 'hppvtienaaa@gmail.com', 'Ha noi, Hai Phong', 969938804, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000},\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":3,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":151200000}}', NULL, '443.520.000', '40.320.000', '403.200.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-04 00:47:08', NULL),
(39, 41, 'Tien Van Pham', '#005563', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000},\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"5\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '554.400.000', '50.400.000', '504.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-04 02:31:02', NULL),
(40, 41, 'Tien Van Pham', '#003895', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000},\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"5\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '554.400.000', '50.400.000', '504.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-04 02:31:52', NULL),
(41, 41, 'Trung tâm thương mại một thành viên.', '#007091', NULL, NULL, 'Hải Phòng', 969987456, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000},\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"5\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '554.400.000', '50.400.000', '504.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-04 02:32:42', NULL),
(42, 41, 'Trung tâm thương mại một thành viên.', '#002246', NULL, NULL, 'Hải Phòng', 969987456, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000},\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"5\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '554.400.000', '50.400.000', '504.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-04 02:34:09', NULL),
(43, 41, 'Trung tâm thương mại một thành viên.', '#006203', NULL, NULL, 'Hải Phòng', 969987456, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000},\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"5\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '554.400.000', '50.400.000', '504.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-04 02:35:21', NULL),
(44, 41, 'Trung tâm thương mại một thành viên.', '#006203', NULL, NULL, 'Hải Phòng', 969987456, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000},\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"5\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '554.400.000', '50.400.000', '504.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-04 02:35:30', NULL),
(45, 41, 'Tien Van Pham', '#001723', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000},\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"5\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '554.400.000', '50.400.000', '504.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-04 02:36:09', NULL),
(46, 41, 'Trung tâm thương mại một thành viên.', '#005204', NULL, NULL, 'Hải Phòng', 969987456, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000},\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"5\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '554.400.000', '50.400.000', '504.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-04 02:36:32', NULL),
(47, 41, 'Nhà cung cấp 02', '#005519', NULL, 'hppvtienaaa@gmail.com', 'Ha noi, Hai Phong', 969938804, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000},\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"5\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '554.400.000', '50.400.000', '504.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-04 02:38:32', NULL),
(48, 41, 'Nhà cung cấp 02', '#008231', NULL, 'hppvtienaaa@gmail.com', 'Ha noi, Hai Phong', 969938804, 3, NULL, NULL, '1234567866', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000},\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"5\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '554.400.000', '50.400.000', '504.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-04 02:38:43', NULL),
(49, 41, 'Trung tâm thương mại một thành viên.', '#005015', NULL, NULL, 'Hải Phòng', 969987456, 3, NULL, NULL, '1234567333', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000},\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"5\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '554.400.000', '50.400.000', '504.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-04 02:39:31', NULL),
(50, 41, 'Trung tâm thương mại một thành viên.', '#004250', NULL, NULL, 'Hải Phòng', 969987456, 3, '20210804094401', NULL, '1234567890', 2, 0, '{\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"BS\\u1ea3n ph\\u1ea9m 02\",\"qty\":3,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":151200000}}', NULL, '166.320.000', '15.120.000', '151.200.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-04 02:43:52', '2021-08-04 02:44:01'),
(51, 1, NULL, '#004336', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":1,\"price\":800000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":80000,\"subtotal\":800000}}', NULL, '880.000', '80.000', '800.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-05 02:24:11', NULL),
(53, 1, NULL, '#005807', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"AS\\u1ea3n ph\\u1ea9m 011\",\"qty\":1,\"price\":800000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":80000,\"subtotal\":800000}}', NULL, '880.000', '80.000', '800.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-05 02:51:23', NULL),
(54, 41, 'Tien Van Pham', '#001393', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '277.200.000', '25.200.000', '252.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-06 00:54:40', NULL),
(55, 41, 'Tien Van Pham', '#001393', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '277.200.000', '25.200.000', '252.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-06 00:54:45', NULL),
(56, 41, 'Trung tâm thương mại một thành viên.', '#006568', NULL, NULL, 'Hải Phòng', 969987456, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '277.200.000', '25.200.000', '252.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-06 00:54:50', NULL),
(57, 41, 'Nhà cung cấp 01', '#006584', NULL, 'ntdat7714@gmail.com', 'Ha noi, Hai Phong', 969938802, 3, NULL, NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '277.200.000', '25.200.000', '252.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-06 00:55:17', NULL),
(58, 41, 'Tien Van Pham', '#004734', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, '20210806102257', NULL, '1234567890', 2, 0, '{\"fa279facf261f3e954db0f9c8c94a7fb\":{\"rowId\":\"fa279facf261f3e954db0f9c8c94a7fb\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":5,\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":252000000}}', NULL, '277.200.000', '25.200.000', '252.000.000', '100000', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-06 03:13:49', '2021-08-06 03:22:57'),
(59, 42, NULL, '#008055', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 2, 0, '{\"1c61191d0e0d3637d4396571bf01e9c9\":{\"rowId\":\"1c61191d0e0d3637d4396571bf01e9c9\",\"id\":\"2\",\"name\":\"S\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"1\",\"price\":800000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":80000,\"subtotal\":800000}}', NULL, '880.000', '80.000', '800.000', '0', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-15 21:00:27', NULL),
(60, 42, NULL, '#003428', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 2, 0, '{\"1c61191d0e0d3637d4396571bf01e9c9\":{\"rowId\":\"1c61191d0e0d3637d4396571bf01e9c9\",\"id\":\"2\",\"name\":\"S\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"1\",\"price\":800000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":80000,\"subtotal\":800000}}', NULL, '880000', '80000', '800000', '35000', NULL, NULL, NULL, '{\r\n                    \"payment_type_id\": 2,\r\n                    \"note\": \"Tintest 123\",\r\n                    \"required_note\": \"KHONGCHOXEMHANG\",\r\n                    \"return_phone\": \"0969938801\",\r\n                    \"return_address\": \"Thủy Sơn, Thủy Nguyên, Hải Phòng, Việt Nam\",\r\n                    \"return_district_id\": 1726,\r\n                    \"return_ward_code\": \"30935\",\r\n                    \"client_order_code\": \"\",\r\n                    \"to_name\": \"\",\r\n                    \"to_phone\": \"\",\r\n                    \"to_address\": \"\",\r\n                    \"to_ward_code\": \"30818\",\r\n                    \"to_district_id\": 3203,\r\n                    \"cod_amount\": 0,\r\n                    \"content\": \"Theo New York Times\",\r\n                    \"weight\": 200,\r\n                    \"length\": 1,\r\n                    \"width\": 8,\r\n                    \"height\": 12,\r\n                    \"pick_station_id\": 1444,\r\n                    \"deliver_station_id\": null,\r\n                    \"insurance_value\": 1000000,\r\n                    \"service_id\": 53320,\r\n                    \"service_type_id\":2,\r\n                    \"order_value\":0,\r\n                    \"coupon\":null,\r\n                    \"pick_shift\":[2],\r\n                    \"items\": [{\"name\":\"S\\u1ea3n ph\\u1ea9m 02\",\"code\":\"2\",\"quantity\":1,\"price\":800000,\"length\":12,\"width\":12,\"height\":12,\"category\":{\"level1\":\"Gia v\\u1ecb\"}}]\r\n                    }', 1, 0, '2021-08-17 19:18:54', '2021-08-17 19:18:55'),
(61, 41, 'Trung tâm thương mại một thành viên.', '#001022', NULL, 'xaynhatrongoihaiphong@gmail.com', 'Hải Phòng', 969987456, 3, '20210819023331', NULL, '1234567890', 2, 0, '{\"60f8c4537852a828c5399d05fb04229d\":{\"rowId\":\"60f8c4537852a828c5399d05fb04229d\",\"id\":\"2\",\"name\":\"S\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"7\",\"price\":50400000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"store\"},\"discount\":0,\"tax\":5040000,\"subtotal\":352800000}}', NULL, '388080000', '35280000', '352800000', '0', NULL, NULL, NULL, NULL, NULL, 0, '2021-08-18 19:29:25', '2021-08-18 19:33:31'),
(62, 1, 'adsmo', '#002005', NULL, 'pvtien@gmail.com', NULL, NULL, 3, NULL, NULL, NULL, 2, 5, '{\"444fb473ba37dc9c108a4f21bad27c07\":{\"rowId\":\"444fb473ba37dc9c108a4f21bad27c07\",\"id\":\"5\",\"name\":\"G\\u00f3i combo cho t\\u1ea5t c\\u1ea3 ng\\u01b0\\u1eddi d\\u00f9ng\",\"qty\":1,\"price\":13100000,\"weight\":1,\"options\":{\"images\":\"khuyen-mai-1629459457.jpg\",\"sale\":\"combo\"},\"discount\":0,\"tax\":1310000,\"subtotal\":13100000}}', NULL, '14410000', '1310000', '13100000', '0', NULL, NULL, NULL, '{\r\n                    \"payment_type_id\": 2,\r\n                    \"note\": \"Tintest 123\",\r\n                    \"required_note\": \"KHONGCHOXEMHANG\",\r\n                    \"return_phone\": \"0969938801\",\r\n                    \"return_address\": \"Thủy Sơn, Thủy Nguyên, Hải Phòng, Việt Nam\",\r\n                    \"return_district_id\": 1726,\r\n                    \"return_ward_code\": \"30935\",\r\n                    \"client_order_code\": \"\",\r\n                    \"to_name\": \"adsmo\",\r\n                    \"to_phone\": \"\",\r\n                    \"to_address\": \"\",\r\n                    \"to_ward_code\": \"\",\r\n                    \"to_district_id\": 0,\r\n                    \"cod_amount\": 0,\r\n                    \"content\": \"Theo New York Times\",\r\n                    \"weight\": 200,\r\n                    \"length\": 1,\r\n                    \"width\": 8,\r\n                    \"height\": 12,\r\n                    \"pick_station_id\": 1444,\r\n                    \"deliver_station_id\": null,\r\n                    \"insurance_value\": 1000000,\r\n                    \"service_id\": 53320,\r\n                    \"service_type_id\":2,\r\n                    \"order_value\":0,\r\n                    \"coupon\":null,\r\n                    \"pick_shift\":[2],\r\n                    \"items\": [{\"name\":\"G\\u00f3i combo cho t\\u1ea5t c\\u1ea3 ng\\u01b0\\u1eddi d\\u00f9ng\",\"code\":\"5\",\"quantity\":1,\"price\":13100000,\"length\":12,\"width\":12,\"height\":12,\"category\":{\"level1\":\"Gia v\\u1ecb\"}}]\r\n                    }', 1, 0, '2021-08-21 05:07:53', '2021-08-21 05:07:53'),
(63, 1, 'adsmo', '#008349', NULL, 'pvtien@gmail.com', NULL, NULL, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, '{\r\n                    \"payment_type_id\": 2,\r\n                    \"note\": \"Tintest 123\",\r\n                    \"required_note\": \"KHONGCHOXEMHANG\",\r\n                    \"return_phone\": \"0969938801\",\r\n                    \"return_address\": \"Thủy Sơn, Thủy Nguyên, Hải Phòng, Việt Nam\",\r\n                    \"return_district_id\": 1726,\r\n                    \"return_ward_code\": \"30935\",\r\n                    \"client_order_code\": \"\",\r\n                    \"to_name\": \"adsmo\",\r\n                    \"to_phone\": \"\",\r\n                    \"to_address\": \"\",\r\n                    \"to_ward_code\": \"\",\r\n                    \"to_district_id\": 0,\r\n                    \"cod_amount\": 0,\r\n                    \"content\": \"Theo New York Times\",\r\n                    \"weight\": 200,\r\n                    \"length\": 1,\r\n                    \"width\": 8,\r\n                    \"height\": 12,\r\n                    \"pick_station_id\": 1444,\r\n                    \"deliver_station_id\": null,\r\n                    \"insurance_value\": 1000000,\r\n                    \"service_id\": 53320,\r\n                    \"service_type_id\":2,\r\n                    \"order_value\":0,\r\n                    \"coupon\":null,\r\n                    \"pick_shift\":[2],\r\n                    \"items\": [{\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"code\":\"1\",\"quantity\":1,\"price\":900000,\"length\":12,\"width\":12,\"height\":12,\"category\":{\"level1\":\"Gia v\\u1ecb\"}}]\r\n                    }', 1, 0, '2021-08-21 05:10:43', '2021-08-21 05:10:43');
INSERT INTO `uni_order` (`id`, `user_id`, `customer_name`, `code_invoice`, `vouchers`, `email`, `address`, `phone`, `type_pay`, `pay_code`, `pay_node`, `taxcode`, `status`, `combo_id`, `cart_info`, `product_sale`, `total_money`, `total_vat`, `total_no_vat`, `total_ship`, `total_discount`, `total_vouchers`, `order_code`, `ship_info`, `method_ship`, `order_poin`, `created_at`, `updated_at`) VALUES
(64, 1, 'adsmo', '#008513', NULL, 'pvtien@gmail.com', NULL, NULL, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, '{\r\n                    \"payment_type_id\": 2,\r\n                    \"note\": \"Tintest 123\",\r\n                    \"required_note\": \"KHONGCHOXEMHANG\",\r\n                    \"return_phone\": \"0969938801\",\r\n                    \"return_address\": \"Thủy Sơn, Thủy Nguyên, Hải Phòng, Việt Nam\",\r\n                    \"return_district_id\": 1726,\r\n                    \"return_ward_code\": \"30935\",\r\n                    \"client_order_code\": \"\",\r\n                    \"to_name\": \"adsmo\",\r\n                    \"to_phone\": \"\",\r\n                    \"to_address\": \"\",\r\n                    \"to_ward_code\": \"\",\r\n                    \"to_district_id\": 0,\r\n                    \"cod_amount\": 0,\r\n                    \"content\": \"Theo New York Times\",\r\n                    \"weight\": 200,\r\n                    \"length\": 1,\r\n                    \"width\": 8,\r\n                    \"height\": 12,\r\n                    \"pick_station_id\": 1444,\r\n                    \"deliver_station_id\": null,\r\n                    \"insurance_value\": 1000000,\r\n                    \"service_id\": 53320,\r\n                    \"service_type_id\":2,\r\n                    \"order_value\":0,\r\n                    \"coupon\":null,\r\n                    \"pick_shift\":[2],\r\n                    \"items\": [{\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"code\":\"1\",\"quantity\":1,\"price\":900000,\"length\":12,\"width\":12,\"height\":12,\"category\":{\"level1\":\"Gia v\\u1ecb\"}}]\r\n                    }', 1, 0, '2021-08-21 05:13:42', '2021-08-21 05:13:42'),
(65, 1, 'Tien Van Pham', '#002478', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, NULL, 2, 0, '{\"1c61191d0e0d3637d4396571bf01e9c9\":{\"rowId\":\"1c61191d0e0d3637d4396571bf01e9c9\",\"id\":\"2\",\"name\":\"S\\u1ea3n ph\\u1ea9m 02\",\"qty\":\"1\",\"price\":700000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":70000,\"subtotal\":700000}}', NULL, '770000', '70000', '700000', '35000', NULL, NULL, NULL, '{\r\n                    \"payment_type_id\": 2,\r\n                    \"note\": \"Tintest 123\",\r\n                    \"required_note\": \"KHONGCHOXEMHANG\",\r\n                    \"return_phone\": \"0969938801\",\r\n                    \"return_address\": \"Thủy Sơn, Thủy Nguyên, Hải Phòng, Việt Nam\",\r\n                    \"return_district_id\": 1726,\r\n                    \"return_ward_code\": \"30935\",\r\n                    \"client_order_code\": \"\",\r\n                    \"to_name\": \"Tien Van Pham\",\r\n                    \"to_phone\": \"0969938801\",\r\n                    \"to_address\": \"Ha noi\",\r\n                    \"to_ward_code\": \"03074\",\r\n                    \"to_district_id\": 1820,\r\n                    \"cod_amount\": 0,\r\n                    \"content\": \"Theo New York Times\",\r\n                    \"weight\": 200,\r\n                    \"length\": 1,\r\n                    \"width\": 8,\r\n                    \"height\": 12,\r\n                    \"pick_station_id\": 1444,\r\n                    \"deliver_station_id\": null,\r\n                    \"insurance_value\": 1000000,\r\n                    \"service_id\": 53320,\r\n                    \"service_type_id\":2,\r\n                    \"order_value\":0,\r\n                    \"coupon\":null,\r\n                    \"pick_shift\":[2],\r\n                    \"items\": [{\"name\":\"S\\u1ea3n ph\\u1ea9m 02\",\"code\":\"2\",\"quantity\":1,\"price\":700000,\"length\":12,\"width\":12,\"height\":12,\"category\":{\"level1\":\"Gia v\\u1ecb\"}}]\r\n                    }', 1, 0, '2021-08-21 05:19:00', '2021-08-21 05:19:00'),
(66, 1, 'Tien Van Pham', '#009309', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '35000', NULL, NULL, NULL, '{\r\n                    \"payment_type_id\": 2,\r\n                    \"note\": \"Tintest 123\",\r\n                    \"required_note\": \"KHONGCHOXEMHANG\",\r\n                    \"return_phone\": \"0969938801\",\r\n                    \"return_address\": \"Thủy Sơn, Thủy Nguyên, Hải Phòng, Việt Nam\",\r\n                    \"return_district_id\": 1726,\r\n                    \"return_ward_code\": \"30935\",\r\n                    \"client_order_code\": \"\",\r\n                    \"to_name\": \"Tien Van Pham\",\r\n                    \"to_phone\": \"0969938801\",\r\n                    \"to_address\": \"Ha noi\",\r\n                    \"to_ward_code\": \"30409\",\r\n                    \"to_district_id\": 1590,\r\n                    \"cod_amount\": 0,\r\n                    \"content\": \"Theo New York Times\",\r\n                    \"weight\": 200,\r\n                    \"length\": 1,\r\n                    \"width\": 8,\r\n                    \"height\": 12,\r\n                    \"pick_station_id\": 1444,\r\n                    \"deliver_station_id\": null,\r\n                    \"insurance_value\": 1000000,\r\n                    \"service_id\": 53320,\r\n                    \"service_type_id\":2,\r\n                    \"order_value\":0,\r\n                    \"coupon\":null,\r\n                    \"pick_shift\":[2],\r\n                    \"items\": [{\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"code\":\"1\",\"quantity\":1,\"price\":900000,\"length\":12,\"width\":12,\"height\":12,\"category\":{\"level1\":\"Gia v\\u1ecb\"}}]\r\n                    }', 1, 0, '2021-08-22 19:53:15', '2021-08-22 19:53:15'),
(67, 1, 'Dat Nguyen', '#005636', NULL, 'ntdat7714@gmail.com', '75 Cau Giay st.', 969938801, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '35000', NULL, NULL, 'GA9LD4C8', '{\r\n                    \"payment_type_id\": 2,\r\n                    \"note\": \"Tintest 123\",\r\n                    \"required_note\": \"KHONGCHOXEMHANG\",\r\n                    \"return_phone\": \"0969938801\",\r\n                    \"return_address\": \"Thủy Sơn, Thủy Nguyên, Hải Phòng, Việt Nam\",\r\n                    \"return_district_id\": 1726,\r\n                    \"return_ward_code\": \"30935\",\r\n                    \"client_order_code\": \"\",\r\n                    \"to_name\": \"Dat Nguyen\",\r\n                    \"to_phone\": \"0969938801\",\r\n                    \"to_address\": \"75 Cau Giay st.\",\r\n                    \"to_ward_code\": \"31120\",\r\n                    \"to_district_id\": 1821,\r\n                    \"cod_amount\": 0,\r\n                    \"content\": \"Theo New York Times\",\r\n                    \"weight\": 200,\r\n                    \"length\": 1,\r\n                    \"width\": 8,\r\n                    \"height\": 12,\r\n                    \"pick_station_id\": 1444,\r\n                    \"deliver_station_id\": null,\r\n                    \"insurance_value\": 1000000,\r\n                    \"service_id\": 53320,\r\n                    \"service_type_id\":2,\r\n                    \"order_value\":0,\r\n                    \"coupon\":null,\r\n                    \"pick_shift\":[2],\r\n                    \"items\": [{\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"code\":\"1\",\"quantity\":1,\"price\":900000,\"length\":12,\"width\":12,\"height\":12,\"category\":{\"level1\":\"Gia v\\u1ecb\"}}]\r\n                    }', 1, 0, '2021-08-22 20:05:10', '2021-08-22 20:29:31'),
(68, 1, 'Nhà cung cấp 02', '#009782', NULL, 'hppvtienaaa@gmail.com', 'Ha noi, Hai Phong', 969938804, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-22 21:17:36', NULL),
(69, 1, 'Dat Nguyen', '#007722', NULL, 'ntdat7714@gmail.com', '75 Cau Giay st.', 969938801, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-22 21:18:29', NULL),
(70, 1, 'Dat Nguyen', '#009512', NULL, 'ntdat7714@gmail.com', '75 Cau Giay st.', 969938801, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-22 23:47:52', NULL),
(71, 1, 'Tien Van Pham', '#007938', NULL, 'pvtien@gmail.com', 'Ha noi, Hai Phong', 969938801, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 00:04:58', NULL),
(72, 1, 'Nhà cung cấp 01', '#005854', NULL, 'ntdat7714@gmail.com', 'Ha noi, Hai Phong', 969938802, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 00:12:24', NULL),
(73, 1, 'Tien Pham', '#008365', NULL, 'pvtien@gmail.com', 'Ha noi, Hai Phong', 969938801, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 00:16:58', NULL),
(74, 1, 'Nhà cung cấp 01', '#007418', NULL, 'ntdat7714@gmail.com', 'Ha noi, Hai Phong', 969938802, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 01:40:05', NULL),
(75, 1, 'Dat Nguyen', '#009677', NULL, 'ntdat7714@gmail.com', '75 Cau Giay st.', 969938801, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 01:40:31', NULL),
(76, 1, 'Dat Nguyen', '#005798', NULL, 'ntdat7714@gmail.com', '75 Cau Giay st.', 969938801, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 01:47:39', NULL),
(77, 1, 'Nhà cung cấp 02', '#003601', NULL, 'hppvtienaaa@gmail.com', 'Ha noi, Hai Phong', 969938804, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 01:57:03', NULL),
(78, 1, 'Tien Van Pham', '#009053', NULL, 'pvtien@gmail.com', 'Ha noi, Hai Phong', 969938801, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 01:57:25', NULL),
(79, 1, 'Nhà cung cấp 01', '#005661', NULL, 'ntdat7714@gmail.com', 'Ha noi, Hai Phong', 969938802, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 01:57:46', NULL),
(80, 1, 'Dat Nguyen', '#005359', NULL, 'ntdat7714@gmail.com', '75 Cau Giay st.', NULL, 3, '20210823095151', 'Thanh toán qua MoMo', NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 02:41:39', '2021-08-23 02:51:51'),
(81, 1, 'Tien Van Pham', '#005587', NULL, 'ntdat7714@gmail.com', 'Ha noi', NULL, 3, '20210823095359', 'Thanh toán qua MoMo', NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 02:53:39', '2021-08-23 02:54:00'),
(82, 1, 'Tien Van Pham', '#003158', NULL, 'ntdat7714@gmail.com', 'Ha noi', 969938801, 3, '20210823095507', NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 02:55:02', '2021-08-23 02:55:07'),
(83, 1, 'Tien Van Pham', '#008888', NULL, 'pvtien@gmail.com', 'Ha noi, Hai Phong', NULL, 3, '20210823100613', 'Thanh toán qua MoMo', NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 02:57:58', '2021-08-23 03:06:14'),
(84, 1, 'Tien Van Pham', '#006069', NULL, 'pvtien@gmail.com', 'Ha noi, Hai Phong', 969938801, 3, '20210823101118', NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 03:10:50', '2021-08-23 03:11:18'),
(85, 1, 'Tien Van Pham', '#007113', NULL, 'pvtien@gmail.com', 'Ha noi, Hai Phong', 969938801, 3, '20210823104130', NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 03:18:44', '2021-08-23 03:41:30'),
(86, 1, 'Tien Pham', '#001412', NULL, 'pvtien@gmail.com', 'Ha noi, Hai Phong', 969938801, 3, '20210823112356', NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 04:21:54', '2021-08-23 04:23:56'),
(87, 1, 'Nhà cung cấp 02', '#007364', NULL, 'wdfdsfd14@gmail.com', 'Ha noi, Hai Phong', 969938808, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 18:58:26', NULL),
(88, 1, 'Dat Nguyen', '#007600', NULL, 'ntdat7714@gmail.com', '75 Cau Giay st.', 969938801, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 19:41:36', NULL),
(89, 1, 'Tien Van Pham', '#004044', NULL, 'pvtien@gmail.com', 'Ha noi, Hai Phong', NULL, 3, '20210824042938', 'Thanh toán qua MoMo', NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-23 19:42:46', '2021-08-23 21:29:38'),
(90, 1, 'Tien Van Pham', '#007204', NULL, 'pvtien@gmail.com', 'Ha noi, Hai Phong', 969938801, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-24 00:46:36', NULL),
(91, 1, 'Nhà cung cấp 01', '#005328', NULL, 'ntdat7714@gmail.com', 'Ha noi, Hai Phong', 969938802, 3, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '990000', '90000', '900000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-24 01:24:13', NULL),
(92, 1, 'Tien Van Pham', '#003951', NULL, 'hppvtien@gmail.com', 'Ha noi, Hai Phong', NULL, 3, NULL, NULL, NULL, 2, 0, '{\"3df73ae865b7803fa9c94967e59eb7bd\":{\"rowId\":\"3df73ae865b7803fa9c94967e59eb7bd\",\"id\":\"5\",\"name\":\"G\\u00f3i combo cho t\\u1ea5t c\\u1ea3 ng\\u01b0\\u1eddi d\\u00f9ng\",\"qty\":1,\"price\":13100000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-me-lo-120g-04-1627698552.png\",\"sale\":\"combo\"},\"discount\":0,\"tax\":1310000,\"subtotal\":13100000},\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '15400000', '1400000', '14000000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-24 03:39:54', '2021-08-24 03:45:16'),
(93, 1, 'Nhà cung cấp 01', '#004933', NULL, 'ntdat7714@gmail.com', 'Ha noi, Hai Phong', 969938802, 1, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"3\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":2700000}}', NULL, '2970000', '270000', '2700000', '0', NULL, NULL, NULL, NULL, 4, 0, '2021-08-27 03:42:07', NULL),
(94, 1, 'Tien Van Pham', '#002784', NULL, 'pvtien@gmail.com', 'Ha noi, Hai Phong', 969938801, 1, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"3\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":2700000}}', NULL, '2673000', '270000', '2700000', '0', '297000', NULL, NULL, NULL, 4, 0, '2021-08-27 03:56:17', NULL),
(95, 1, 'Tien Van Pham', '#001302', NULL, 'pvtien@gmail.com', 'Ha noi, Hai Phong', NULL, 1, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '891000', '90000', '900000', '0', '99000', NULL, NULL, NULL, 4, 0, '2021-08-27 19:36:14', '2021-08-27 20:18:13'),
(96, 1, 'Nhà cung cấp 02', '#007631', NULL, 'wdfdsfd14@gmail.com', 'Ha noi, Hai Phong', NULL, 1, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '891000', '90000', '900000', '0', '99000', NULL, NULL, NULL, 4, 0, '2021-08-27 20:24:03', '2021-08-27 20:24:07'),
(97, 1, 'Nhà cung cấp 02', '#009045', NULL, 'hppvtienaaa@gmail.com', 'Ha noi, Hai Phong', NULL, 1, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '891000', '90000', '900000', '0', '99000', NULL, NULL, NULL, 4, 0, '2021-08-27 20:29:43', '2021-08-27 20:29:45'),
(98, 1, 'Tien Pham', '#005939', NULL, 'pvtien@gmail.com', 'Ha noi, Hai Phong', NULL, 1, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '891000', '90000', '900000', '0', '99000', NULL, NULL, NULL, 4, 0, '2021-08-27 20:33:43', '2021-08-27 20:33:48'),
(99, 1, 'Tien Van Pham', '#004272', NULL, 'pvtien@gmail.com', 'Ha noi, Hai Phong', NULL, 1, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '891000', '90000', '900000', '0', '99000', NULL, NULL, NULL, 4, 0, '2021-08-27 20:36:23', '2021-08-27 20:36:30'),
(100, 1, 'Tien Van Pham', '#003317', NULL, 'ntdat7714@gmail.com', 'Ha noi, Hai Phong', NULL, 1, NULL, NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '891000', '90000', '900000', '0', '99000', NULL, NULL, NULL, 4, 0, '2021-08-27 20:43:06', '2021-08-27 20:43:09'),
(101, 1, 'Tien Van Pham', '#005510', NULL, 'pvtien@gmail.com', 'Ha noi, Hai Phong', NULL, 3, '20210828070211', 'Thanh toán qua MoMo', NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '891000', '90000', '900000', '0', '99000', NULL, NULL, NULL, 4, 0, '2021-08-28 00:00:01', '2021-08-28 00:02:11'),
(102, 1, 'Tien Van Pham', '#007722', NULL, 'ntdat7714@gmail.com', 'Ha noi', NULL, 3, '20210828070556', 'Thanh toán qua MoMo', NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '891000', '90000', '900000', '0', '99000', NULL, NULL, NULL, 4, 0, '2021-08-28 00:03:17', '2021-08-28 00:05:56'),
(103, 1, 'Dat Nguyen', '#001951', NULL, 'ntdat7714@gmail.com', '75 Cau Giay st.', 969938801, 4, '20210828070910', NULL, NULL, 2, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":900000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":90000,\"subtotal\":900000}}', NULL, '891000', '90000', '900000', '0', '99000', NULL, NULL, NULL, 4, 0, '2021-08-28 00:09:03', '2021-08-28 00:09:10'),
(104, 1, 'Tien Pham', '#005687', NULL, 'pvtien@gmail.com', 'Ha noi, Hai Phong', 969938801, NULL, NULL, NULL, NULL, 0, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":600000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":60000,\"subtotal\":600000}}', NULL, '660000', '60000', '600000', '35000', '0', NULL, NULL, '{\r\n                    \"payment_type_id\": 2,\r\n                    \"note\": \"Tintest 123\",\r\n                    \"required_note\": \"KHONGCHOXEMHANG\",\r\n                    \"return_phone\": \"0969938801\",\r\n                    \"return_address\": \"Thủy Sơn, Thủy Nguyên, Hải Phòng, Việt Nam\",\r\n                    \"return_district_id\": 1726,\r\n                    \"return_ward_code\": \"30935\",\r\n                    \"client_order_code\": \"\",\r\n                    \"to_name\": \"Tien Pham\",\r\n                    \"to_phone\": \"0969938801\",\r\n                    \"to_address\": \"Ha noi, Hai Phong\",\r\n                    \"to_ward_code\": \"30927\",\r\n                    \"to_district_id\": 1726,\r\n                    \"cod_amount\": 0,\r\n                    \"content\": \"Theo New York Times\",\r\n                    \"weight\": 200,\r\n                    \"length\": 1,\r\n                    \"width\": 8,\r\n                    \"height\": 12,\r\n                    \"pick_station_id\": 1444,\r\n                    \"deliver_station_id\": null,\r\n                    \"insurance_value\": 1000000,\r\n                    \"service_id\": 53320,\r\n                    \"service_type_id\":2,\r\n                    \"order_value\":0,\r\n                    \"coupon\":null,\r\n                    \"pick_shift\":[2],\r\n                    \"items\": [{\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"code\":\"1\",\"quantity\":1,\"price\":600000,\"length\":12,\"width\":12,\"height\":12,\"category\":{\"level1\":\"Gia v\\u1ecb\"}}]\r\n                    }', 1, 0, '2021-09-04 03:51:56', '2021-09-04 03:51:56'),
(105, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"4\",\"price\":750000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":75000,\"subtotal\":3000000}}', NULL, '3300000', '300000', '3000000', '0', '0', NULL, NULL, NULL, NULL, 0, '2021-09-04 04:27:02', NULL),
(106, 1, 'Dat Nguyen', '#003362', 'IHQqY4k3Fw', 'ntdat7714@gmail.com', '75 Cau Giay st.', 969938801, NULL, NULL, NULL, NULL, 0, 0, '{\"e34fde9c8e82f8f58e5ac79bb0936f82\":{\"rowId\":\"e34fde9c8e82f8f58e5ac79bb0936f82\",\"id\":\"1\",\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"qty\":\"1\",\"price\":750000,\"weight\":1,\"options\":{\"images\":\"\\/storage\\/uploads\\/bot-nhuc-dau-khau-lo-120g-03-1627698578.png\",\"sale\":\"user\"},\"discount\":0,\"tax\":75000,\"subtotal\":750000}}', NULL, '777500', '67500', '675000', '35000', NULL, '75000', NULL, '{\r\n                    \"payment_type_id\": 2,\r\n                    \"note\": \"Tintest 123\",\r\n                    \"required_note\": \"KHONGCHOXEMHANG\",\r\n                    \"return_phone\": \"0969938801\",\r\n                    \"return_address\": \"Thủy Sơn, Thủy Nguyên, Hải Phòng, Việt Nam\",\r\n                    \"return_district_id\": 1726,\r\n                    \"return_ward_code\": \"30935\",\r\n                    \"client_order_code\": \"\",\r\n                    \"to_name\": \"Dat Nguyen\",\r\n                    \"to_phone\": \"0969938801\",\r\n                    \"to_address\": \"75 Cau Giay st.\",\r\n                    \"to_ward_code\": \"31504\",\r\n                    \"to_district_id\": 1706,\r\n                    \"cod_amount\": 0,\r\n                    \"content\": \"Theo New York Times\",\r\n                    \"weight\": 200,\r\n                    \"length\": 1,\r\n                    \"width\": 8,\r\n                    \"height\": 12,\r\n                    \"pick_station_id\": 1444,\r\n                    \"deliver_station_id\": null,\r\n                    \"insurance_value\": 1000000,\r\n                    \"service_id\": 53320,\r\n                    \"service_type_id\":2,\r\n                    \"order_value\":0,\r\n                    \"coupon\":null,\r\n                    \"pick_shift\":[2],\r\n                    \"items\": [{\"name\":\"S\\u1ea3n ph\\u1ea9m 01\",\"code\":\"1\",\"quantity\":1,\"price\":750000,\"length\":12,\"width\":12,\"height\":12,\"category\":{\"level1\":\"Gia v\\u1ecb\"}}]\r\n                    }', 1, 0, '2021-09-04 10:42:19', '2021-09-04 10:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `uni_order_nap`
--

CREATE TABLE `uni_order_nap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pay_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `type_pay` int(4) DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `price_nap` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_year` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_order_nap`
--

INSERT INTO `uni_order_nap` (`id`, `user_id`, `pay_code`, `name`, `email`, `address`, `phone`, `type_pay`, `status`, `price_nap`, `end_year`, `created_at`, `updated_at`) VALUES
(16, 46, NULL, 'dainguyen', 'tlead01@gmail.com', NULL, 979467612, 1, 4, '500000', '2019-08-23', '2021-08-19 21:27:47', '2021-08-27 21:13:06'),
(17, 42, NULL, 'dainguyen', 'tlead01@gmail.com', NULL, 979467612, 4, 4, '500000', '2021-08-23', '2021-08-19 21:39:44', '2021-08-27 21:13:06'),
(18, 41, NULL, 'dainguyen', 'tlead01@gmail.com', NULL, 979467612, 4, 4, '500000', '2021-08-23', '2021-08-19 21:47:08', '2021-08-27 21:13:06'),
(19, 1, NULL, 'adsmo', 'pvtien@gmail.com', NULL, NULL, 1, 4, '500000', '2021-08-23', '2021-08-24 01:05:25', '2021-08-27 21:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `uni_post`
--

CREATE TABLE `uni_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `order` int(11) DEFAULT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(5) DEFAULT NULL,
  `updated_by` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_post`
--

INSERT INTO `uni_post` (`id`, `name`, `slug`, `category_id`, `desscription`, `meta_desscription`, `meta_title`, `content`, `status`, `order`, `thumbnail`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie Night15', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie-night15', 1, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie', '<h2>Birthday Cake Popcorn</h2>\r\n\r\n<p>No special occasion is required to make this colorful and fun popcorn recipe. Kids of all ages will love this combination of white chocolate, cake batter, and all-natural sprinkles. But unlike a birthday cake, this snack can be enjoyed anywhere, anytime, and the whole-grain goodness of popcorn gives it a satisfying crunch.</p>\r\n\r\n<h3><strong>Birthday Cake Popcorn Ingredients</strong></h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>3 Tbsp&nbsp;Butter</p>\r\n\r\n<p>1/2 cup&nbsp;white chocolate chips or melting wafers</p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Vanilla Extract</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Bob&rsquo;s Red Mill Gluten-Free Vanilla Yellow Cake Mix</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Color Kitchen Rainbow Sprinkles</a></p>\r\n\r\n<p>Want to know how to make our Birthday Cake Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"birthday cake popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Birthday%20Cake%20Popcorn-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Chili Lime Popcorn</h2>\r\n\r\n<p>Add some zip to snack time with this easy popcorn recipe featuring a simple mixture of chili powder and lime juice. Might we suggest this whole grain, yet sugar-free snack idea for when you wish it were 5 o&rsquo;clock somewhere!</p>\r\n\r\n<h3>Chili Lime Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2&nbsp;cup popcorn kernels</p>\r\n\r\n<p>2 Tbsp lime juice</p>\r\n\r\n<p>1&nbsp;<a href=\"#\">Tbsp Simply Organic Chili Powder Seasoning Blend</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Coarse Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Chili Lime Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Chili Lime Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Chili%20Lime%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nCoconut Curry Popcorn</h2>\r\n\r\n<p>The warm, savory flavor of curry is complemented by the subtle sweetness of coconut in this quick and easy popcorn recipe. The seasoning is a simple mixture of curry powder, coconut oil, coconut flakes, salt and sugar.</p>\r\n\r\n<h3>Coconut Curry Popcorn Ingredients</h3>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>5 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1 Tbsp&nbsp;<a href=\"#\">Frontier Co-op Organic Curry Powder</a>&nbsp;</p>\r\n\r\n<p>1/4 cup&nbsp;<a href=\"#\">coconut flakes</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>1/4 tsp cane sugar</p>\r\n\r\n<p>Want to know how to make our Coconut Curry Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Coconut Curry Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Coconut-Curry-Popcorn-Recipe-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Honey Chipotle Popcorn</h2>\r\n\r\n<p>The sweet and spicy blend of honey and chipotle makes a surprisingly delicious popcorn topping that starts sweet and ends with a warm, smoky bite.</p>\r\n\r\n<h3>Honey Chipotle Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/3 cup&nbsp;<a href=\"#\">organic raw honey</a>&nbsp;</p>\r\n\r\n<p>1/4 tsp ground&nbsp;<a href=\"#\">Frontier Co-op Chipotle Powder</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Honey Chipotle Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Honey Chipotle Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Popcorn-Honey-Chipotle-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Maple Cinnamon Popcorn</h2>\r\n\r\n<p>This healthy, delicious and aromatic recipe is perfect for cooler weather, as it brings a cozy feeling with its warm, sweet flavor of maple syrup, vanilla and cinnamon. It&rsquo;s a great snack to enjoy at home for movie nights or with a good book. With the simplicity of this recipe, the quality of your ingredients will really make the difference.</p>\r\n\r\n<h3>Maple Cinnamon Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">maple syrup</a>&nbsp;</p>\r\n\r\n<p>1 tsp&nbsp;<a href=\"#\">Simply Organic Ground Cinnamon</a></p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Pure Vanilla Extract</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>Want to know how to make our Maple Cinnamon Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Maple Cinnamon Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Maple-Cinnamon-Simply-Organic-Recipe-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nPeanut Butter Cup Popcorn</h2>\r\n\r\n<p>The classic combination of chocolate and peanut butter makes a fabulous candy, but it&rsquo;s even better when popcorn is added to the mix. Perfect for parties or snacking with the family, this popcorn recipe makes a fun and unexpected treat that everyone will enjoy.</p>\r\n\r\n<p>Peanut Butter Cup Popcorn Ingredients</p>\r\n\r\n<p>4 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;creamy peanut butter</p>\r\n\r\n<p>1/2 cup chocolate chips (<a href=\"#\">semi-sweet</a>&nbsp;or bittersweet)</p>\r\n\r\n<p>Want to know how to make our Peanut Butter Cup Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Peanut Butter Cup Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Peanut%20Butter%20Cup%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><strong>Skip The Recipes With Frontier&rsquo;s Premade Salt-Free Popcorn Seasonings</strong></h2>\r\n\r\n<p>With the right ingredients and a little creativity, there&rsquo;s no limit on the healthy combinations you can use to top your popcorn. If you don&rsquo;t want to go the DIY route, you can find delicious, healthy salt-free popcorn seasonings in our online market. Choose from cheesy flavors like&nbsp;<a href=\"#\">Cheddar</a>&nbsp;or&nbsp;<a href=\"#\">Cheddar and Spice</a>&nbsp;or satisfy your cravings with our salt-free&nbsp;<a href=\"#\">Sour Cream &amp; Onion Popcorn Seasoning</a>.</p>\r\n\r\n<p>Remember for your next movie night, ditch the butter and salt and enjoy your popcorn topped with one of our heart-healthy toppings and seasonings.</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:32:09'),
(2, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie Night14', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie-night14', 1, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie', '<h2>Birthday Cake Popcorn</h2>\r\n\r\n<p>No special occasion is required to make this colorful and fun popcorn recipe. Kids of all ages will love this combination of white chocolate, cake batter, and all-natural sprinkles. But unlike a birthday cake, this snack can be enjoyed anywhere, anytime, and the whole-grain goodness of popcorn gives it a satisfying crunch.</p>\r\n\r\n<h3><strong>Birthday Cake Popcorn Ingredients</strong></h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>3 Tbsp&nbsp;Butter</p>\r\n\r\n<p>1/2 cup&nbsp;white chocolate chips or melting wafers</p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Vanilla Extract</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Bob&rsquo;s Red Mill Gluten-Free Vanilla Yellow Cake Mix</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Color Kitchen Rainbow Sprinkles</a></p>\r\n\r\n<p>Want to know how to make our Birthday Cake Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"birthday cake popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Birthday%20Cake%20Popcorn-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Chili Lime Popcorn</h2>\r\n\r\n<p>Add some zip to snack time with this easy popcorn recipe featuring a simple mixture of chili powder and lime juice. Might we suggest this whole grain, yet sugar-free snack idea for when you wish it were 5 o&rsquo;clock somewhere!</p>\r\n\r\n<h3>Chili Lime Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2&nbsp;cup popcorn kernels</p>\r\n\r\n<p>2 Tbsp lime juice</p>\r\n\r\n<p>1&nbsp;<a href=\"#\">Tbsp Simply Organic Chili Powder Seasoning Blend</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Coarse Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Chili Lime Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Chili Lime Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Chili%20Lime%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nCoconut Curry Popcorn</h2>\r\n\r\n<p>The warm, savory flavor of curry is complemented by the subtle sweetness of coconut in this quick and easy popcorn recipe. The seasoning is a simple mixture of curry powder, coconut oil, coconut flakes, salt and sugar.</p>\r\n\r\n<h3>Coconut Curry Popcorn Ingredients</h3>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>5 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1 Tbsp&nbsp;<a href=\"#\">Frontier Co-op Organic Curry Powder</a>&nbsp;</p>\r\n\r\n<p>1/4 cup&nbsp;<a href=\"#\">coconut flakes</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>1/4 tsp cane sugar</p>\r\n\r\n<p>Want to know how to make our Coconut Curry Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Coconut Curry Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Coconut-Curry-Popcorn-Recipe-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Honey Chipotle Popcorn</h2>\r\n\r\n<p>The sweet and spicy blend of honey and chipotle makes a surprisingly delicious popcorn topping that starts sweet and ends with a warm, smoky bite.</p>\r\n\r\n<h3>Honey Chipotle Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/3 cup&nbsp;<a href=\"#\">organic raw honey</a>&nbsp;</p>\r\n\r\n<p>1/4 tsp ground&nbsp;<a href=\"#\">Frontier Co-op Chipotle Powder</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Honey Chipotle Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Honey Chipotle Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Popcorn-Honey-Chipotle-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Maple Cinnamon Popcorn</h2>\r\n\r\n<p>This healthy, delicious and aromatic recipe is perfect for cooler weather, as it brings a cozy feeling with its warm, sweet flavor of maple syrup, vanilla and cinnamon. It&rsquo;s a great snack to enjoy at home for movie nights or with a good book. With the simplicity of this recipe, the quality of your ingredients will really make the difference.</p>\r\n\r\n<h3>Maple Cinnamon Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">maple syrup</a>&nbsp;</p>\r\n\r\n<p>1 tsp&nbsp;<a href=\"#\">Simply Organic Ground Cinnamon</a></p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Pure Vanilla Extract</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>Want to know how to make our Maple Cinnamon Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Maple Cinnamon Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Maple-Cinnamon-Simply-Organic-Recipe-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nPeanut Butter Cup Popcorn</h2>\r\n\r\n<p>The classic combination of chocolate and peanut butter makes a fabulous candy, but it&rsquo;s even better when popcorn is added to the mix. Perfect for parties or snacking with the family, this popcorn recipe makes a fun and unexpected treat that everyone will enjoy.</p>\r\n\r\n<p>Peanut Butter Cup Popcorn Ingredients</p>\r\n\r\n<p>4 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;creamy peanut butter</p>\r\n\r\n<p>1/2 cup chocolate chips (<a href=\"#\">semi-sweet</a>&nbsp;or bittersweet)</p>\r\n\r\n<p>Want to know how to make our Peanut Butter Cup Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Peanut Butter Cup Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Peanut%20Butter%20Cup%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><strong>Skip The Recipes With Frontier&rsquo;s Premade Salt-Free Popcorn Seasonings</strong></h2>\r\n\r\n<p>With the right ingredients and a little creativity, there&rsquo;s no limit on the healthy combinations you can use to top your popcorn. If you don&rsquo;t want to go the DIY route, you can find delicious, healthy salt-free popcorn seasonings in our online market. Choose from cheesy flavors like&nbsp;<a href=\"#\">Cheddar</a>&nbsp;or&nbsp;<a href=\"#\">Cheddar and Spice</a>&nbsp;or satisfy your cravings with our salt-free&nbsp;<a href=\"#\">Sour Cream &amp; Onion Popcorn Seasoning</a>.</p>\r\n\r\n<p>Remember for your next movie night, ditch the butter and salt and enjoy your popcorn topped with one of our heart-healthy toppings and seasonings.</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:31:51'),
(3, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie Night13', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie-night13', 1, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie', '<h2>Birthday Cake Popcorn</h2>\r\n\r\n<p>No special occasion is required to make this colorful and fun popcorn recipe. Kids of all ages will love this combination of white chocolate, cake batter, and all-natural sprinkles. But unlike a birthday cake, this snack can be enjoyed anywhere, anytime, and the whole-grain goodness of popcorn gives it a satisfying crunch.</p>\r\n\r\n<h3><strong>Birthday Cake Popcorn Ingredients</strong></h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>3 Tbsp&nbsp;Butter</p>\r\n\r\n<p>1/2 cup&nbsp;white chocolate chips or melting wafers</p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Vanilla Extract</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Bob&rsquo;s Red Mill Gluten-Free Vanilla Yellow Cake Mix</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Color Kitchen Rainbow Sprinkles</a></p>\r\n\r\n<p>Want to know how to make our Birthday Cake Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"birthday cake popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Birthday%20Cake%20Popcorn-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Chili Lime Popcorn</h2>\r\n\r\n<p>Add some zip to snack time with this easy popcorn recipe featuring a simple mixture of chili powder and lime juice. Might we suggest this whole grain, yet sugar-free snack idea for when you wish it were 5 o&rsquo;clock somewhere!</p>\r\n\r\n<h3>Chili Lime Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2&nbsp;cup popcorn kernels</p>\r\n\r\n<p>2 Tbsp lime juice</p>\r\n\r\n<p>1&nbsp;<a href=\"#\">Tbsp Simply Organic Chili Powder Seasoning Blend</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Coarse Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Chili Lime Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Chili Lime Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Chili%20Lime%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nCoconut Curry Popcorn</h2>\r\n\r\n<p>The warm, savory flavor of curry is complemented by the subtle sweetness of coconut in this quick and easy popcorn recipe. The seasoning is a simple mixture of curry powder, coconut oil, coconut flakes, salt and sugar.</p>\r\n\r\n<h3>Coconut Curry Popcorn Ingredients</h3>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>5 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1 Tbsp&nbsp;<a href=\"#\">Frontier Co-op Organic Curry Powder</a>&nbsp;</p>\r\n\r\n<p>1/4 cup&nbsp;<a href=\"#\">coconut flakes</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>1/4 tsp cane sugar</p>\r\n\r\n<p>Want to know how to make our Coconut Curry Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Coconut Curry Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Coconut-Curry-Popcorn-Recipe-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Honey Chipotle Popcorn</h2>\r\n\r\n<p>The sweet and spicy blend of honey and chipotle makes a surprisingly delicious popcorn topping that starts sweet and ends with a warm, smoky bite.</p>\r\n\r\n<h3>Honey Chipotle Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/3 cup&nbsp;<a href=\"#\">organic raw honey</a>&nbsp;</p>\r\n\r\n<p>1/4 tsp ground&nbsp;<a href=\"#\">Frontier Co-op Chipotle Powder</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Honey Chipotle Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Honey Chipotle Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Popcorn-Honey-Chipotle-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Maple Cinnamon Popcorn</h2>\r\n\r\n<p>This healthy, delicious and aromatic recipe is perfect for cooler weather, as it brings a cozy feeling with its warm, sweet flavor of maple syrup, vanilla and cinnamon. It&rsquo;s a great snack to enjoy at home for movie nights or with a good book. With the simplicity of this recipe, the quality of your ingredients will really make the difference.</p>\r\n\r\n<h3>Maple Cinnamon Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">maple syrup</a>&nbsp;</p>\r\n\r\n<p>1 tsp&nbsp;<a href=\"#\">Simply Organic Ground Cinnamon</a></p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Pure Vanilla Extract</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>Want to know how to make our Maple Cinnamon Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Maple Cinnamon Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Maple-Cinnamon-Simply-Organic-Recipe-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nPeanut Butter Cup Popcorn</h2>\r\n\r\n<p>The classic combination of chocolate and peanut butter makes a fabulous candy, but it&rsquo;s even better when popcorn is added to the mix. Perfect for parties or snacking with the family, this popcorn recipe makes a fun and unexpected treat that everyone will enjoy.</p>\r\n\r\n<p>Peanut Butter Cup Popcorn Ingredients</p>\r\n\r\n<p>4 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;creamy peanut butter</p>\r\n\r\n<p>1/2 cup chocolate chips (<a href=\"#\">semi-sweet</a>&nbsp;or bittersweet)</p>\r\n\r\n<p>Want to know how to make our Peanut Butter Cup Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Peanut Butter Cup Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Peanut%20Butter%20Cup%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><strong>Skip The Recipes With Frontier&rsquo;s Premade Salt-Free Popcorn Seasonings</strong></h2>\r\n\r\n<p>With the right ingredients and a little creativity, there&rsquo;s no limit on the healthy combinations you can use to top your popcorn. If you don&rsquo;t want to go the DIY route, you can find delicious, healthy salt-free popcorn seasonings in our online market. Choose from cheesy flavors like&nbsp;<a href=\"#\">Cheddar</a>&nbsp;or&nbsp;<a href=\"#\">Cheddar and Spice</a>&nbsp;or satisfy your cravings with our salt-free&nbsp;<a href=\"#\">Sour Cream &amp; Onion Popcorn Seasoning</a>.</p>\r\n\r\n<p>Remember for your next movie night, ditch the butter and salt and enjoy your popcorn topped with one of our heart-healthy toppings and seasonings.</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:31:30'),
(4, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie12', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie12', 1, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next', '<h2>Birthday Cake Popcorn</h2>\r\n\r\n<p>No special occasion is required to make this colorful and fun popcorn recipe. Kids of all ages will love this combination of white chocolate, cake batter, and all-natural sprinkles. But unlike a birthday cake, this snack can be enjoyed anywhere, anytime, and the whole-grain goodness of popcorn gives it a satisfying crunch.</p>\r\n\r\n<h3><strong>Birthday Cake Popcorn Ingredients</strong></h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>3 Tbsp&nbsp;Butter</p>\r\n\r\n<p>1/2 cup&nbsp;white chocolate chips or melting wafers</p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Vanilla Extract</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Bob&rsquo;s Red Mill Gluten-Free Vanilla Yellow Cake Mix</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Color Kitchen Rainbow Sprinkles</a></p>\r\n\r\n<p>Want to know how to make our Birthday Cake Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"birthday cake popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Birthday%20Cake%20Popcorn-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Chili Lime Popcorn</h2>\r\n\r\n<p>Add some zip to snack time with this easy popcorn recipe featuring a simple mixture of chili powder and lime juice. Might we suggest this whole grain, yet sugar-free snack idea for when you wish it were 5 o&rsquo;clock somewhere!</p>\r\n\r\n<h3>Chili Lime Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2&nbsp;cup popcorn kernels</p>\r\n\r\n<p>2 Tbsp lime juice</p>\r\n\r\n<p>1&nbsp;<a href=\"#\">Tbsp Simply Organic Chili Powder Seasoning Blend</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Coarse Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Chili Lime Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Chili Lime Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Chili%20Lime%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nCoconut Curry Popcorn</h2>\r\n\r\n<p>The warm, savory flavor of curry is complemented by the subtle sweetness of coconut in this quick and easy popcorn recipe. The seasoning is a simple mixture of curry powder, coconut oil, coconut flakes, salt and sugar.</p>\r\n\r\n<h3>Coconut Curry Popcorn Ingredients</h3>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>5 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1 Tbsp&nbsp;<a href=\"#\">Frontier Co-op Organic Curry Powder</a>&nbsp;</p>\r\n\r\n<p>1/4 cup&nbsp;<a href=\"#\">coconut flakes</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>1/4 tsp cane sugar</p>\r\n\r\n<p>Want to know how to make our Coconut Curry Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Coconut Curry Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Coconut-Curry-Popcorn-Recipe-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Honey Chipotle Popcorn</h2>\r\n\r\n<p>The sweet and spicy blend of honey and chipotle makes a surprisingly delicious popcorn topping that starts sweet and ends with a warm, smoky bite.</p>\r\n\r\n<h3>Honey Chipotle Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/3 cup&nbsp;<a href=\"#\">organic raw honey</a>&nbsp;</p>\r\n\r\n<p>1/4 tsp ground&nbsp;<a href=\"#\">Frontier Co-op Chipotle Powder</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Honey Chipotle Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Honey Chipotle Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Popcorn-Honey-Chipotle-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Maple Cinnamon Popcorn</h2>\r\n\r\n<p>This healthy, delicious and aromatic recipe is perfect for cooler weather, as it brings a cozy feeling with its warm, sweet flavor of maple syrup, vanilla and cinnamon. It&rsquo;s a great snack to enjoy at home for movie nights or with a good book. With the simplicity of this recipe, the quality of your ingredients will really make the difference.</p>\r\n\r\n<h3>Maple Cinnamon Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">maple syrup</a>&nbsp;</p>\r\n\r\n<p>1 tsp&nbsp;<a href=\"#\">Simply Organic Ground Cinnamon</a></p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Pure Vanilla Extract</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>Want to know how to make our Maple Cinnamon Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Maple Cinnamon Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Maple-Cinnamon-Simply-Organic-Recipe-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nPeanut Butter Cup Popcorn</h2>\r\n\r\n<p>The classic combination of chocolate and peanut butter makes a fabulous candy, but it&rsquo;s even better when popcorn is added to the mix. Perfect for parties or snacking with the family, this popcorn recipe makes a fun and unexpected treat that everyone will enjoy.</p>\r\n\r\n<p>Peanut Butter Cup Popcorn Ingredients</p>\r\n\r\n<p>4 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;creamy peanut butter</p>\r\n\r\n<p>1/2 cup chocolate chips (<a href=\"#\">semi-sweet</a>&nbsp;or bittersweet)</p>\r\n\r\n<p>Want to know how to make our Peanut Butter Cup Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Peanut Butter Cup Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Peanut%20Butter%20Cup%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><strong>Skip The Recipes With Frontier&rsquo;s Premade Salt-Free Popcorn Seasonings</strong></h2>\r\n\r\n<p>With the right ingredients and a little creativity, there&rsquo;s no limit on the healthy combinations you can use to top your popcorn. If you don&rsquo;t want to go the DIY route, you can find delicious, healthy salt-free popcorn seasonings in our online market. Choose from cheesy flavors like&nbsp;<a href=\"#\">Cheddar</a>&nbsp;or&nbsp;<a href=\"#\">Cheddar and Spice</a>&nbsp;or satisfy your cravings with our salt-free&nbsp;<a href=\"#\">Sour Cream &amp; Onion Popcorn Seasoning</a>.</p>\r\n\r\n<p>Remember for your next movie night, ditch the butter and salt and enjoy your popcorn topped with one of our heart-healthy toppings and seasonings.</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:31:10'),
(5, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie11', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie11', 1, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your', '<h2>Birthday Cake Popcorn</h2>\r\n\r\n<p>No special occasion is required to make this colorful and fun popcorn recipe. Kids of all ages will love this combination of white chocolate, cake batter, and all-natural sprinkles. But unlike a birthday cake, this snack can be enjoyed anywhere, anytime, and the whole-grain goodness of popcorn gives it a satisfying crunch.</p>\r\n\r\n<h3><strong>Birthday Cake Popcorn Ingredients</strong></h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>3 Tbsp&nbsp;Butter</p>\r\n\r\n<p>1/2 cup&nbsp;white chocolate chips or melting wafers</p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Vanilla Extract</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Bob&rsquo;s Red Mill Gluten-Free Vanilla Yellow Cake Mix</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Color Kitchen Rainbow Sprinkles</a></p>\r\n\r\n<p>Want to know how to make our Birthday Cake Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"birthday cake popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Birthday%20Cake%20Popcorn-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Chili Lime Popcorn</h2>\r\n\r\n<p>Add some zip to snack time with this easy popcorn recipe featuring a simple mixture of chili powder and lime juice. Might we suggest this whole grain, yet sugar-free snack idea for when you wish it were 5 o&rsquo;clock somewhere!</p>\r\n\r\n<h3>Chili Lime Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2&nbsp;cup popcorn kernels</p>\r\n\r\n<p>2 Tbsp lime juice</p>\r\n\r\n<p>1&nbsp;<a href=\"#\">Tbsp Simply Organic Chili Powder Seasoning Blend</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Coarse Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Chili Lime Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Chili Lime Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Chili%20Lime%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nCoconut Curry Popcorn</h2>\r\n\r\n<p>The warm, savory flavor of curry is complemented by the subtle sweetness of coconut in this quick and easy popcorn recipe. The seasoning is a simple mixture of curry powder, coconut oil, coconut flakes, salt and sugar.</p>\r\n\r\n<h3>Coconut Curry Popcorn Ingredients</h3>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>5 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1 Tbsp&nbsp;<a href=\"#\">Frontier Co-op Organic Curry Powder</a>&nbsp;</p>\r\n\r\n<p>1/4 cup&nbsp;<a href=\"#\">coconut flakes</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>1/4 tsp cane sugar</p>\r\n\r\n<p>Want to know how to make our Coconut Curry Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Coconut Curry Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Coconut-Curry-Popcorn-Recipe-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Honey Chipotle Popcorn</h2>\r\n\r\n<p>The sweet and spicy blend of honey and chipotle makes a surprisingly delicious popcorn topping that starts sweet and ends with a warm, smoky bite.</p>\r\n\r\n<h3>Honey Chipotle Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/3 cup&nbsp;<a href=\"#\">organic raw honey</a>&nbsp;</p>\r\n\r\n<p>1/4 tsp ground&nbsp;<a href=\"#\">Frontier Co-op Chipotle Powder</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Honey Chipotle Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Honey Chipotle Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Popcorn-Honey-Chipotle-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Maple Cinnamon Popcorn</h2>\r\n\r\n<p>This healthy, delicious and aromatic recipe is perfect for cooler weather, as it brings a cozy feeling with its warm, sweet flavor of maple syrup, vanilla and cinnamon. It&rsquo;s a great snack to enjoy at home for movie nights or with a good book. With the simplicity of this recipe, the quality of your ingredients will really make the difference.</p>\r\n\r\n<h3>Maple Cinnamon Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">maple syrup</a>&nbsp;</p>\r\n\r\n<p>1 tsp&nbsp;<a href=\"#\">Simply Organic Ground Cinnamon</a></p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Pure Vanilla Extract</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>Want to know how to make our Maple Cinnamon Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Maple Cinnamon Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Maple-Cinnamon-Simply-Organic-Recipe-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nPeanut Butter Cup Popcorn</h2>\r\n\r\n<p>The classic combination of chocolate and peanut butter makes a fabulous candy, but it&rsquo;s even better when popcorn is added to the mix. Perfect for parties or snacking with the family, this popcorn recipe makes a fun and unexpected treat that everyone will enjoy.</p>\r\n\r\n<p>Peanut Butter Cup Popcorn Ingredients</p>\r\n\r\n<p>4 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;creamy peanut butter</p>\r\n\r\n<p>1/2 cup chocolate chips (<a href=\"#\">semi-sweet</a>&nbsp;or bittersweet)</p>\r\n\r\n<p>Want to know how to make our Peanut Butter Cup Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Peanut Butter Cup Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Peanut%20Butter%20Cup%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><strong>Skip The Recipes With Frontier&rsquo;s Premade Salt-Free Popcorn Seasonings</strong></h2>\r\n\r\n<p>With the right ingredients and a little creativity, there&rsquo;s no limit on the healthy combinations you can use to top your popcorn. If you don&rsquo;t want to go the DIY route, you can find delicious, healthy salt-free popcorn seasonings in our online market. Choose from cheesy flavors like&nbsp;<a href=\"#\">Cheddar</a>&nbsp;or&nbsp;<a href=\"#\">Cheddar and Spice</a>&nbsp;or satisfy your cravings with our salt-free&nbsp;<a href=\"#\">Sour Cream &amp; Onion Popcorn Seasoning</a>.</p>\r\n\r\n<p>Remember for your next movie night, ditch the butter and salt and enjoy your popcorn topped with one of our heart-healthy toppings and seasonings.</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:29:44'),
(6, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie10', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie10', 1, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your', '<p>&ldquo;Si&ecirc;u b&atilde;o&rdquo; Covid &ndash; 19 b&ugrave;ng nổ tr&ecirc;n to&agrave;n cầu g&acirc;y ra nhiều thiệt hại nghi&ecirc;m trọng cả về người v&agrave; của. Với những biến chủng mới, tốc độ l&acirc;y lan của virus SARS-CoV-2 ng&agrave;y c&agrave;ng mạnh hơn, nhanh hơn. B&ecirc;n cạnh việc gi&atilde;n c&aacute;ch x&atilde; hội, tu&acirc;n thủ khuyến c&aacute;o 5K, bản th&acirc;n ch&uacute;ng ta cũng cần c&oacute; &yacute; thức bổ sung c&aacute;c loại thực phẩm cung cấp đủ dưỡng chất cho cơ thể. 5 loại gia vị&nbsp; m&agrave;&nbsp;<strong>UniSpice</strong>&nbsp;chia sẻ dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn tăng cường miễn dịch, sức đề kh&aacute;ng tự nhi&ecirc;n, an to&agrave;n.</p>\r\n\r\n<h2><strong>1. Gừng</strong></h2>\r\n\r\n<p><strong>Gừng</strong>&nbsp;l&agrave; một trong những gia vị mang lại nhiều lợi &iacute;ch cho sức khỏe nhất. Từ xa xưa, gừng đ&atilde; được sử dụng như một vị thuốc thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng chữa buồn n&ocirc;n, l&agrave;m sạch răng miệng, giải độc tố, thanh lọc cơ thể. Đặc t&iacute;nh oxy h&oacute;a mạnh c&oacute; trong gừng cũng gi&uacute;p bảo vệ cơ thể, tăng cường khả năng chống lại c&aacute;c vi khuẩn c&oacute; hại.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>D&ugrave;ng gừng tươi hoặc bột gừng để tẩm ướp thực phẩm, n&ecirc;m nếm c&aacute;c m&oacute;n x&agrave;o, rang, kho, chi&ecirc;n. D&ugrave;ng&nbsp;<strong>bột gừng</strong>&nbsp;nguy&ecirc;n chất pha tr&agrave; gừng uống mỗi ng&agrave;y cũng l&agrave; c&aacute;ch gi&uacute;p bảo vệ sức khỏe khỏi bệnh tật hiệu quả.&nbsp;</p>\r\n\r\n<h2><strong>2. Quế</strong></h2>\r\n\r\n<p><img alt=\"bot-que-co-tac-dung-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-que-co-tac-dung-gi.jpg\" style=\"height:683px; width:1024px\" /></p>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/que/\"><strong>Quế</strong></a>&nbsp;l&agrave; loại gia vị đ&oacute;ng vai tr&ograve; quan trọng trong vấn đề bảo vệ sức khỏe to&agrave;n diện. Với y học tự nhi&ecirc;n, quế được sử dụng trong b&agrave;i thuốc trị c&aacute;c bệnh li&ecirc;n quan đến tim mạch. Sử dụng quế thường xuy&ecirc;n cũng ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh trao đổi chất của cơ thể, điều chỉnh lượng đường trong m&aacute;u ổn định. Nhiều nghi&ecirc;n cứu cũng chỉ ra rằng, quế c&oacute; chứa hợp chất chống vi&ecirc;m, tăng cường hệ miễn dịch, sức đề kh&aacute;ng.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Pha&nbsp;<strong>bột quế</strong>&nbsp;c&ugrave;ng c&aacute;c thức uống ấm. Hoặc bạn c&oacute; thể rắc bột quế l&ecirc;n c&aacute;c loại hoa quả, sữa chua, ngũ cốc, b&aacute;nh m&igrave;,&hellip;</p>\r\n\r\n<h2><strong>3. Ớt</strong></h2>\r\n\r\n<p>Với h&agrave;m lượng hợp chất capsaicin cao, ớt l&agrave; gia vị gi&uacute;p bạn giữ ấm cơ thể tự nhi&ecirc;n. D&ugrave;ng ớt với liều lượng hợp l&yacute; cũng g&oacute;p phần giảm nguy cơ tử vong do đột quỵ hoặc đau tim. Loại gia vị cay n&oacute;ng n&agrave;y cũng chứa nhiều vitamin v&agrave; kho&aacute;ng chất, ch&iacute;nh v&igrave; vậy, ớt cũng được sử dụng phổ biến trong y học tự nhi&ecirc;n để bổ sung chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Th&ecirc;m một ch&uacute;t ớt/&nbsp;<strong>bột ớt</strong>&nbsp;khi tẩm ướp thực phẩm, chế biến m&oacute;n ăn hay l&agrave;m nước chấm cũng g&oacute;p phần n&acirc;ng cao sức đề kh&aacute;ng cho cơ thể.</p>\r\n\r\n<h2><strong>4. Nghệ</strong></h2>\r\n\r\n<p><strong><img alt=\"bot-nghe-tri-benh-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-nghe-tri-benh-gi.jpg\" style=\"height:683px; width:1024px\" /></strong></p>\r\n\r\n<p><strong>Bột nghệ</strong>&nbsp;thường c&oacute; m&agrave;u v&agrave;ng cam thường được sử dụng để l&agrave;m m&oacute;n ăn bắt mắt hơn. C&ocirc;ng dụng khổng lồ của nghệ trong y học th&igrave; kh&ocirc;ng c&ograve;n g&igrave; để b&agrave;n c&atilde;i. N&oacute; chứa nhiều hợp chất curcumin, nghệ được sử dụng nhiều để chống vi&ecirc;m tự nhi&ecirc;n, giảm nguy cơ mắc c&aacute;c bệnh về tim mạnh, chống nhiễm tr&ugrave;ng, k&iacute;ch th&iacute;ch cơ thể sản sinh ra chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Sử dụng bột nghệ trong c&aacute;c m&oacute;n x&agrave;o, c&agrave; ri, kho, s&uacute;p. Uống bột nghệ đều đặn mỗi ng&agrave;y vừa tốt cho sức khỏe vừa c&oacute; t&aacute;c dụng l&agrave;m đẹp hữu hiệu.</p>\r\n\r\n<h2><strong>5. Tỏi</strong></h2>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/toi/\"><strong>Tỏi</strong></a>&nbsp;l&agrave; loại gia vị thuốc gi&agrave;u vitamin C, vitamin B6 v&agrave; hợp chất mangan. D&ugrave;ng tỏi thường xuy&ecirc;n sẽ gi&uacute;p cơ thể tăng cường hệ miễn dịch. Tỏi cũng được mệnh danh l&agrave; &ldquo;thuốc kh&aacute;ng sinh&rdquo; tự nhi&ecirc;n, ức chế sự sinh trưởng của c&aacute;c loại vi khuẩn, nấm. Trong th&agrave;nh phần của tỏi c&oacute; đến 90% hợp chất lưu huỳnh c&oacute; t&aacute;c dụng t&iacute;ch cực trong việc hỗ trợ trao đổi chất sắt, chống oxy h&oacute;a v&agrave; giảm cholesterol.&nbsp;</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Tỏi c&oacute; thể ăn sống, pha nước chấm, gia vị cho m&oacute;n ăn, ng&acirc;m giấm hoặc rượu tỏi. Sử dụng tỏi h&agrave;ng ng&agrave;y gi&uacute;p chăm s&oacute;c sức khỏe, chống bệnh tật tự nhi&ecirc;n, an to&agrave;n.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 5 loại gia vị v&ocirc; c&ugrave;ng quen thuộc với ch&uacute;ng ta nhưng kh&ocirc;ng phải ai cũng biết c&ocirc;ng dụng của ch&uacute;ng với sức khỏe. Để ph&ograve;ng chống Covid&nbsp; &ndash; 19, c&aacute;c bạn đừng qu&ecirc;n bổ sung c&aacute;c loại&nbsp;<strong>gia vị</strong>&nbsp;tự nhi&ecirc;n n&agrave;y v&agrave;o chế độ ăn uống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Đọc th&ecirc;m:&nbsp;Tăng cường sức đề kh&aacute;ng giữa m&ugrave;a dịch Covid &ndash; 19</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:29:22');
INSERT INTO `uni_post` (`id`, `name`, `slug`, `category_id`, `desscription`, `meta_desscription`, `meta_title`, `content`, `status`, `order`, `thumbnail`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(7, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie9', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie9', 1, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie9', '<h2>Birthday Cake Popcorn</h2>\r\n\r\n<p>No special occasion is required to make this colorful and fun popcorn recipe. Kids of all ages will love this combination of white chocolate, cake batter, and all-natural sprinkles. But unlike a birthday cake, this snack can be enjoyed anywhere, anytime, and the whole-grain goodness of popcorn gives it a satisfying crunch.</p>\r\n\r\n<h3><strong>Birthday Cake Popcorn Ingredients</strong></h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>3 Tbsp&nbsp;Butter</p>\r\n\r\n<p>1/2 cup&nbsp;white chocolate chips or melting wafers</p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Vanilla Extract</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Bob&rsquo;s Red Mill Gluten-Free Vanilla Yellow Cake Mix</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Color Kitchen Rainbow Sprinkles</a></p>\r\n\r\n<p>Want to know how to make our Birthday Cake Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"birthday cake popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Birthday%20Cake%20Popcorn-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Chili Lime Popcorn</h2>\r\n\r\n<p>Add some zip to snack time with this easy popcorn recipe featuring a simple mixture of chili powder and lime juice. Might we suggest this whole grain, yet sugar-free snack idea for when you wish it were 5 o&rsquo;clock somewhere!</p>\r\n\r\n<h3>Chili Lime Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2&nbsp;cup popcorn kernels</p>\r\n\r\n<p>2 Tbsp lime juice</p>\r\n\r\n<p>1&nbsp;<a href=\"#\">Tbsp Simply Organic Chili Powder Seasoning Blend</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Coarse Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Chili Lime Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Chili Lime Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Chili%20Lime%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nCoconut Curry Popcorn</h2>\r\n\r\n<p>The warm, savory flavor of curry is complemented by the subtle sweetness of coconut in this quick and easy popcorn recipe. The seasoning is a simple mixture of curry powder, coconut oil, coconut flakes, salt and sugar.</p>\r\n\r\n<h3>Coconut Curry Popcorn Ingredients</h3>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>5 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1 Tbsp&nbsp;<a href=\"#\">Frontier Co-op Organic Curry Powder</a>&nbsp;</p>\r\n\r\n<p>1/4 cup&nbsp;<a href=\"#\">coconut flakes</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>1/4 tsp cane sugar</p>\r\n\r\n<p>Want to know how to make our Coconut Curry Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Coconut Curry Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Coconut-Curry-Popcorn-Recipe-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Honey Chipotle Popcorn</h2>\r\n\r\n<p>The sweet and spicy blend of honey and chipotle makes a surprisingly delicious popcorn topping that starts sweet and ends with a warm, smoky bite.</p>\r\n\r\n<h3>Honey Chipotle Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/3 cup&nbsp;<a href=\"#\">organic raw honey</a>&nbsp;</p>\r\n\r\n<p>1/4 tsp ground&nbsp;<a href=\"#\">Frontier Co-op Chipotle Powder</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Honey Chipotle Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Honey Chipotle Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Popcorn-Honey-Chipotle-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Maple Cinnamon Popcorn</h2>\r\n\r\n<p>This healthy, delicious and aromatic recipe is perfect for cooler weather, as it brings a cozy feeling with its warm, sweet flavor of maple syrup, vanilla and cinnamon. It&rsquo;s a great snack to enjoy at home for movie nights or with a good book. With the simplicity of this recipe, the quality of your ingredients will really make the difference.</p>\r\n\r\n<h3>Maple Cinnamon Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">maple syrup</a>&nbsp;</p>\r\n\r\n<p>1 tsp&nbsp;<a href=\"#\">Simply Organic Ground Cinnamon</a></p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Pure Vanilla Extract</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>Want to know how to make our Maple Cinnamon Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Maple Cinnamon Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Maple-Cinnamon-Simply-Organic-Recipe-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nPeanut Butter Cup Popcorn</h2>\r\n\r\n<p>The classic combination of chocolate and peanut butter makes a fabulous candy, but it&rsquo;s even better when popcorn is added to the mix. Perfect for parties or snacking with the family, this popcorn recipe makes a fun and unexpected treat that everyone will enjoy.</p>\r\n\r\n<p>Peanut Butter Cup Popcorn Ingredients</p>\r\n\r\n<p>4 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;creamy peanut butter</p>\r\n\r\n<p>1/2 cup chocolate chips (<a href=\"#\">semi-sweet</a>&nbsp;or bittersweet)</p>\r\n\r\n<p>Want to know how to make our Peanut Butter Cup Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Peanut Butter Cup Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Peanut%20Butter%20Cup%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><strong>Skip The Recipes With Frontier&rsquo;s Premade Salt-Free Popcorn Seasonings</strong></h2>\r\n\r\n<p>With the right ingredients and a little creativity, there&rsquo;s no limit on the healthy combinations you can use to top your popcorn. If you don&rsquo;t want to go the DIY route, you can find delicious, healthy salt-free popcorn seasonings in our online market. Choose from cheesy flavors like&nbsp;<a href=\"#\">Cheddar</a>&nbsp;or&nbsp;<a href=\"#\">Cheddar and Spice</a>&nbsp;or satisfy your cravings with our salt-free&nbsp;<a href=\"#\">Sour Cream &amp; Onion Popcorn Seasoning</a>.</p>\r\n\r\n<p>Remember for your next movie night, ditch the butter and salt and enjoy your popcorn topped with one of our heart-healthy toppings and seasonings.</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:29:11'),
(8, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie8', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie8', 2, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next', '<p>&ldquo;Si&ecirc;u b&atilde;o&rdquo; Covid &ndash; 19 b&ugrave;ng nổ tr&ecirc;n to&agrave;n cầu g&acirc;y ra nhiều thiệt hại nghi&ecirc;m trọng cả về người v&agrave; của. Với những biến chủng mới, tốc độ l&acirc;y lan của virus SARS-CoV-2 ng&agrave;y c&agrave;ng mạnh hơn, nhanh hơn. B&ecirc;n cạnh việc gi&atilde;n c&aacute;ch x&atilde; hội, tu&acirc;n thủ khuyến c&aacute;o 5K, bản th&acirc;n ch&uacute;ng ta cũng cần c&oacute; &yacute; thức bổ sung c&aacute;c loại thực phẩm cung cấp đủ dưỡng chất cho cơ thể. 5 loại gia vị&nbsp; m&agrave;&nbsp;<strong>UniSpice</strong>&nbsp;chia sẻ dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn tăng cường miễn dịch, sức đề kh&aacute;ng tự nhi&ecirc;n, an to&agrave;n.</p>\r\n\r\n<h2><strong>1. Gừng</strong></h2>\r\n\r\n<p><strong>Gừng</strong>&nbsp;l&agrave; một trong những gia vị mang lại nhiều lợi &iacute;ch cho sức khỏe nhất. Từ xa xưa, gừng đ&atilde; được sử dụng như một vị thuốc thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng chữa buồn n&ocirc;n, l&agrave;m sạch răng miệng, giải độc tố, thanh lọc cơ thể. Đặc t&iacute;nh oxy h&oacute;a mạnh c&oacute; trong gừng cũng gi&uacute;p bảo vệ cơ thể, tăng cường khả năng chống lại c&aacute;c vi khuẩn c&oacute; hại.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>D&ugrave;ng gừng tươi hoặc bột gừng để tẩm ướp thực phẩm, n&ecirc;m nếm c&aacute;c m&oacute;n x&agrave;o, rang, kho, chi&ecirc;n. D&ugrave;ng&nbsp;<strong>bột gừng</strong>&nbsp;nguy&ecirc;n chất pha tr&agrave; gừng uống mỗi ng&agrave;y cũng l&agrave; c&aacute;ch gi&uacute;p bảo vệ sức khỏe khỏi bệnh tật hiệu quả.&nbsp;</p>\r\n\r\n<h2><strong>2. Quế</strong></h2>\r\n\r\n<p><img alt=\"bot-que-co-tac-dung-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-que-co-tac-dung-gi.jpg\" style=\"height:683px; width:1024px\" /></p>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/que/\"><strong>Quế</strong></a>&nbsp;l&agrave; loại gia vị đ&oacute;ng vai tr&ograve; quan trọng trong vấn đề bảo vệ sức khỏe to&agrave;n diện. Với y học tự nhi&ecirc;n, quế được sử dụng trong b&agrave;i thuốc trị c&aacute;c bệnh li&ecirc;n quan đến tim mạch. Sử dụng quế thường xuy&ecirc;n cũng ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh trao đổi chất của cơ thể, điều chỉnh lượng đường trong m&aacute;u ổn định. Nhiều nghi&ecirc;n cứu cũng chỉ ra rằng, quế c&oacute; chứa hợp chất chống vi&ecirc;m, tăng cường hệ miễn dịch, sức đề kh&aacute;ng.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Pha&nbsp;<strong>bột quế</strong>&nbsp;c&ugrave;ng c&aacute;c thức uống ấm. Hoặc bạn c&oacute; thể rắc bột quế l&ecirc;n c&aacute;c loại hoa quả, sữa chua, ngũ cốc, b&aacute;nh m&igrave;,&hellip;</p>\r\n\r\n<h2><strong>3. Ớt</strong></h2>\r\n\r\n<p>Với h&agrave;m lượng hợp chất capsaicin cao, ớt l&agrave; gia vị gi&uacute;p bạn giữ ấm cơ thể tự nhi&ecirc;n. D&ugrave;ng ớt với liều lượng hợp l&yacute; cũng g&oacute;p phần giảm nguy cơ tử vong do đột quỵ hoặc đau tim. Loại gia vị cay n&oacute;ng n&agrave;y cũng chứa nhiều vitamin v&agrave; kho&aacute;ng chất, ch&iacute;nh v&igrave; vậy, ớt cũng được sử dụng phổ biến trong y học tự nhi&ecirc;n để bổ sung chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Th&ecirc;m một ch&uacute;t ớt/&nbsp;<strong>bột ớt</strong>&nbsp;khi tẩm ướp thực phẩm, chế biến m&oacute;n ăn hay l&agrave;m nước chấm cũng g&oacute;p phần n&acirc;ng cao sức đề kh&aacute;ng cho cơ thể.</p>\r\n\r\n<h2><strong>4. Nghệ</strong></h2>\r\n\r\n<p><strong><img alt=\"bot-nghe-tri-benh-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-nghe-tri-benh-gi.jpg\" style=\"height:683px; width:1024px\" /></strong></p>\r\n\r\n<p><strong>Bột nghệ</strong>&nbsp;thường c&oacute; m&agrave;u v&agrave;ng cam thường được sử dụng để l&agrave;m m&oacute;n ăn bắt mắt hơn. C&ocirc;ng dụng khổng lồ của nghệ trong y học th&igrave; kh&ocirc;ng c&ograve;n g&igrave; để b&agrave;n c&atilde;i. N&oacute; chứa nhiều hợp chất curcumin, nghệ được sử dụng nhiều để chống vi&ecirc;m tự nhi&ecirc;n, giảm nguy cơ mắc c&aacute;c bệnh về tim mạnh, chống nhiễm tr&ugrave;ng, k&iacute;ch th&iacute;ch cơ thể sản sinh ra chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Sử dụng bột nghệ trong c&aacute;c m&oacute;n x&agrave;o, c&agrave; ri, kho, s&uacute;p. Uống bột nghệ đều đặn mỗi ng&agrave;y vừa tốt cho sức khỏe vừa c&oacute; t&aacute;c dụng l&agrave;m đẹp hữu hiệu.</p>\r\n\r\n<h2><strong>5. Tỏi</strong></h2>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/toi/\"><strong>Tỏi</strong></a>&nbsp;l&agrave; loại gia vị thuốc gi&agrave;u vitamin C, vitamin B6 v&agrave; hợp chất mangan. D&ugrave;ng tỏi thường xuy&ecirc;n sẽ gi&uacute;p cơ thể tăng cường hệ miễn dịch. Tỏi cũng được mệnh danh l&agrave; &ldquo;thuốc kh&aacute;ng sinh&rdquo; tự nhi&ecirc;n, ức chế sự sinh trưởng của c&aacute;c loại vi khuẩn, nấm. Trong th&agrave;nh phần của tỏi c&oacute; đến 90% hợp chất lưu huỳnh c&oacute; t&aacute;c dụng t&iacute;ch cực trong việc hỗ trợ trao đổi chất sắt, chống oxy h&oacute;a v&agrave; giảm cholesterol.&nbsp;</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Tỏi c&oacute; thể ăn sống, pha nước chấm, gia vị cho m&oacute;n ăn, ng&acirc;m giấm hoặc rượu tỏi. Sử dụng tỏi h&agrave;ng ng&agrave;y gi&uacute;p chăm s&oacute;c sức khỏe, chống bệnh tật tự nhi&ecirc;n, an to&agrave;n.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 5 loại gia vị v&ocirc; c&ugrave;ng quen thuộc với ch&uacute;ng ta nhưng kh&ocirc;ng phải ai cũng biết c&ocirc;ng dụng của ch&uacute;ng với sức khỏe. Để ph&ograve;ng chống Covid&nbsp; &ndash; 19, c&aacute;c bạn đừng qu&ecirc;n bổ sung c&aacute;c loại&nbsp;<strong>gia vị</strong>&nbsp;tự nhi&ecirc;n n&agrave;y v&agrave;o chế độ ăn uống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Đọc th&ecirc;m:&nbsp;Tăng cường sức đề kh&aacute;ng giữa m&ugrave;a dịch Covid &ndash; 19</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:28:52'),
(9, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie7', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie7', 2, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie7', '<h2>Birthday Cake Popcorn</h2>\r\n\r\n<p>No special occasion is required to make this colorful and fun popcorn recipe. Kids of all ages will love this combination of white chocolate, cake batter, and all-natural sprinkles. But unlike a birthday cake, this snack can be enjoyed anywhere, anytime, and the whole-grain goodness of popcorn gives it a satisfying crunch.</p>\r\n\r\n<h3><strong>Birthday Cake Popcorn Ingredients</strong></h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>3 Tbsp&nbsp;Butter</p>\r\n\r\n<p>1/2 cup&nbsp;white chocolate chips or melting wafers</p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Vanilla Extract</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Bob&rsquo;s Red Mill Gluten-Free Vanilla Yellow Cake Mix</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Color Kitchen Rainbow Sprinkles</a></p>\r\n\r\n<p>Want to know how to make our Birthday Cake Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"birthday cake popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Birthday%20Cake%20Popcorn-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Chili Lime Popcorn</h2>\r\n\r\n<p>Add some zip to snack time with this easy popcorn recipe featuring a simple mixture of chili powder and lime juice. Might we suggest this whole grain, yet sugar-free snack idea for when you wish it were 5 o&rsquo;clock somewhere!</p>\r\n\r\n<h3>Chili Lime Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2&nbsp;cup popcorn kernels</p>\r\n\r\n<p>2 Tbsp lime juice</p>\r\n\r\n<p>1&nbsp;<a href=\"#\">Tbsp Simply Organic Chili Powder Seasoning Blend</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Coarse Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Chili Lime Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Chili Lime Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Chili%20Lime%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nCoconut Curry Popcorn</h2>\r\n\r\n<p>The warm, savory flavor of curry is complemented by the subtle sweetness of coconut in this quick and easy popcorn recipe. The seasoning is a simple mixture of curry powder, coconut oil, coconut flakes, salt and sugar.</p>\r\n\r\n<h3>Coconut Curry Popcorn Ingredients</h3>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>5 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1 Tbsp&nbsp;<a href=\"#\">Frontier Co-op Organic Curry Powder</a>&nbsp;</p>\r\n\r\n<p>1/4 cup&nbsp;<a href=\"#\">coconut flakes</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>1/4 tsp cane sugar</p>\r\n\r\n<p>Want to know how to make our Coconut Curry Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Coconut Curry Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Coconut-Curry-Popcorn-Recipe-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Honey Chipotle Popcorn</h2>\r\n\r\n<p>The sweet and spicy blend of honey and chipotle makes a surprisingly delicious popcorn topping that starts sweet and ends with a warm, smoky bite.</p>\r\n\r\n<h3>Honey Chipotle Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/3 cup&nbsp;<a href=\"#\">organic raw honey</a>&nbsp;</p>\r\n\r\n<p>1/4 tsp ground&nbsp;<a href=\"#\">Frontier Co-op Chipotle Powder</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Honey Chipotle Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Honey Chipotle Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Popcorn-Honey-Chipotle-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Maple Cinnamon Popcorn</h2>\r\n\r\n<p>This healthy, delicious and aromatic recipe is perfect for cooler weather, as it brings a cozy feeling with its warm, sweet flavor of maple syrup, vanilla and cinnamon. It&rsquo;s a great snack to enjoy at home for movie nights or with a good book. With the simplicity of this recipe, the quality of your ingredients will really make the difference.</p>\r\n\r\n<h3>Maple Cinnamon Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">maple syrup</a>&nbsp;</p>\r\n\r\n<p>1 tsp&nbsp;<a href=\"#\">Simply Organic Ground Cinnamon</a></p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Pure Vanilla Extract</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>Want to know how to make our Maple Cinnamon Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Maple Cinnamon Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Maple-Cinnamon-Simply-Organic-Recipe-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nPeanut Butter Cup Popcorn</h2>\r\n\r\n<p>The classic combination of chocolate and peanut butter makes a fabulous candy, but it&rsquo;s even better when popcorn is added to the mix. Perfect for parties or snacking with the family, this popcorn recipe makes a fun and unexpected treat that everyone will enjoy.</p>\r\n\r\n<p>Peanut Butter Cup Popcorn Ingredients</p>\r\n\r\n<p>4 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;creamy peanut butter</p>\r\n\r\n<p>1/2 cup chocolate chips (<a href=\"#\">semi-sweet</a>&nbsp;or bittersweet)</p>\r\n\r\n<p>Want to know how to make our Peanut Butter Cup Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Peanut Butter Cup Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Peanut%20Butter%20Cup%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><strong>Skip The Recipes With Frontier&rsquo;s Premade Salt-Free Popcorn Seasonings</strong></h2>\r\n\r\n<p>With the right ingredients and a little creativity, there&rsquo;s no limit on the healthy combinations you can use to top your popcorn. If you don&rsquo;t want to go the DIY route, you can find delicious, healthy salt-free popcorn seasonings in our online market. Choose from cheesy flavors like&nbsp;<a href=\"#\">Cheddar</a>&nbsp;or&nbsp;<a href=\"#\">Cheddar and Spice</a>&nbsp;or satisfy your cravings with our salt-free&nbsp;<a href=\"#\">Sour Cream &amp; Onion Popcorn Seasoning</a>.</p>\r\n\r\n<p>Remember for your next movie night, ditch the butter and salt and enjoy your popcorn topped with one of our heart-healthy toppings and seasonings.</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:28:46'),
(10, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie6', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie6', 2, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next', '<p>&ldquo;Si&ecirc;u b&atilde;o&rdquo; Covid &ndash; 19 b&ugrave;ng nổ tr&ecirc;n to&agrave;n cầu g&acirc;y ra nhiều thiệt hại nghi&ecirc;m trọng cả về người v&agrave; của. Với những biến chủng mới, tốc độ l&acirc;y lan của virus SARS-CoV-2 ng&agrave;y c&agrave;ng mạnh hơn, nhanh hơn. B&ecirc;n cạnh việc gi&atilde;n c&aacute;ch x&atilde; hội, tu&acirc;n thủ khuyến c&aacute;o 5K, bản th&acirc;n ch&uacute;ng ta cũng cần c&oacute; &yacute; thức bổ sung c&aacute;c loại thực phẩm cung cấp đủ dưỡng chất cho cơ thể. 5 loại gia vị&nbsp; m&agrave;&nbsp;<strong>UniSpice</strong>&nbsp;chia sẻ dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn tăng cường miễn dịch, sức đề kh&aacute;ng tự nhi&ecirc;n, an to&agrave;n.</p>\r\n\r\n<h2><strong>1. Gừng</strong></h2>\r\n\r\n<p><strong>Gừng</strong>&nbsp;l&agrave; một trong những gia vị mang lại nhiều lợi &iacute;ch cho sức khỏe nhất. Từ xa xưa, gừng đ&atilde; được sử dụng như một vị thuốc thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng chữa buồn n&ocirc;n, l&agrave;m sạch răng miệng, giải độc tố, thanh lọc cơ thể. Đặc t&iacute;nh oxy h&oacute;a mạnh c&oacute; trong gừng cũng gi&uacute;p bảo vệ cơ thể, tăng cường khả năng chống lại c&aacute;c vi khuẩn c&oacute; hại.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>D&ugrave;ng gừng tươi hoặc bột gừng để tẩm ướp thực phẩm, n&ecirc;m nếm c&aacute;c m&oacute;n x&agrave;o, rang, kho, chi&ecirc;n. D&ugrave;ng&nbsp;<strong>bột gừng</strong>&nbsp;nguy&ecirc;n chất pha tr&agrave; gừng uống mỗi ng&agrave;y cũng l&agrave; c&aacute;ch gi&uacute;p bảo vệ sức khỏe khỏi bệnh tật hiệu quả.&nbsp;</p>\r\n\r\n<h2><strong>2. Quế</strong></h2>\r\n\r\n<p><img alt=\"bot-que-co-tac-dung-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-que-co-tac-dung-gi.jpg\" style=\"height:683px; width:1024px\" /></p>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/que/\"><strong>Quế</strong></a>&nbsp;l&agrave; loại gia vị đ&oacute;ng vai tr&ograve; quan trọng trong vấn đề bảo vệ sức khỏe to&agrave;n diện. Với y học tự nhi&ecirc;n, quế được sử dụng trong b&agrave;i thuốc trị c&aacute;c bệnh li&ecirc;n quan đến tim mạch. Sử dụng quế thường xuy&ecirc;n cũng ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh trao đổi chất của cơ thể, điều chỉnh lượng đường trong m&aacute;u ổn định. Nhiều nghi&ecirc;n cứu cũng chỉ ra rằng, quế c&oacute; chứa hợp chất chống vi&ecirc;m, tăng cường hệ miễn dịch, sức đề kh&aacute;ng.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Pha&nbsp;<strong>bột quế</strong>&nbsp;c&ugrave;ng c&aacute;c thức uống ấm. Hoặc bạn c&oacute; thể rắc bột quế l&ecirc;n c&aacute;c loại hoa quả, sữa chua, ngũ cốc, b&aacute;nh m&igrave;,&hellip;</p>\r\n\r\n<h2><strong>3. Ớt</strong></h2>\r\n\r\n<p>Với h&agrave;m lượng hợp chất capsaicin cao, ớt l&agrave; gia vị gi&uacute;p bạn giữ ấm cơ thể tự nhi&ecirc;n. D&ugrave;ng ớt với liều lượng hợp l&yacute; cũng g&oacute;p phần giảm nguy cơ tử vong do đột quỵ hoặc đau tim. Loại gia vị cay n&oacute;ng n&agrave;y cũng chứa nhiều vitamin v&agrave; kho&aacute;ng chất, ch&iacute;nh v&igrave; vậy, ớt cũng được sử dụng phổ biến trong y học tự nhi&ecirc;n để bổ sung chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Th&ecirc;m một ch&uacute;t ớt/&nbsp;<strong>bột ớt</strong>&nbsp;khi tẩm ướp thực phẩm, chế biến m&oacute;n ăn hay l&agrave;m nước chấm cũng g&oacute;p phần n&acirc;ng cao sức đề kh&aacute;ng cho cơ thể.</p>\r\n\r\n<h2><strong>4. Nghệ</strong></h2>\r\n\r\n<p><strong><img alt=\"bot-nghe-tri-benh-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-nghe-tri-benh-gi.jpg\" style=\"height:683px; width:1024px\" /></strong></p>\r\n\r\n<p><strong>Bột nghệ</strong>&nbsp;thường c&oacute; m&agrave;u v&agrave;ng cam thường được sử dụng để l&agrave;m m&oacute;n ăn bắt mắt hơn. C&ocirc;ng dụng khổng lồ của nghệ trong y học th&igrave; kh&ocirc;ng c&ograve;n g&igrave; để b&agrave;n c&atilde;i. N&oacute; chứa nhiều hợp chất curcumin, nghệ được sử dụng nhiều để chống vi&ecirc;m tự nhi&ecirc;n, giảm nguy cơ mắc c&aacute;c bệnh về tim mạnh, chống nhiễm tr&ugrave;ng, k&iacute;ch th&iacute;ch cơ thể sản sinh ra chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Sử dụng bột nghệ trong c&aacute;c m&oacute;n x&agrave;o, c&agrave; ri, kho, s&uacute;p. Uống bột nghệ đều đặn mỗi ng&agrave;y vừa tốt cho sức khỏe vừa c&oacute; t&aacute;c dụng l&agrave;m đẹp hữu hiệu.</p>\r\n\r\n<h2><strong>5. Tỏi</strong></h2>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/toi/\"><strong>Tỏi</strong></a>&nbsp;l&agrave; loại gia vị thuốc gi&agrave;u vitamin C, vitamin B6 v&agrave; hợp chất mangan. D&ugrave;ng tỏi thường xuy&ecirc;n sẽ gi&uacute;p cơ thể tăng cường hệ miễn dịch. Tỏi cũng được mệnh danh l&agrave; &ldquo;thuốc kh&aacute;ng sinh&rdquo; tự nhi&ecirc;n, ức chế sự sinh trưởng của c&aacute;c loại vi khuẩn, nấm. Trong th&agrave;nh phần của tỏi c&oacute; đến 90% hợp chất lưu huỳnh c&oacute; t&aacute;c dụng t&iacute;ch cực trong việc hỗ trợ trao đổi chất sắt, chống oxy h&oacute;a v&agrave; giảm cholesterol.&nbsp;</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Tỏi c&oacute; thể ăn sống, pha nước chấm, gia vị cho m&oacute;n ăn, ng&acirc;m giấm hoặc rượu tỏi. Sử dụng tỏi h&agrave;ng ng&agrave;y gi&uacute;p chăm s&oacute;c sức khỏe, chống bệnh tật tự nhi&ecirc;n, an to&agrave;n.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 5 loại gia vị v&ocirc; c&ugrave;ng quen thuộc với ch&uacute;ng ta nhưng kh&ocirc;ng phải ai cũng biết c&ocirc;ng dụng của ch&uacute;ng với sức khỏe. Để ph&ograve;ng chống Covid&nbsp; &ndash; 19, c&aacute;c bạn đừng qu&ecirc;n bổ sung c&aacute;c loại&nbsp;<strong>gia vị</strong>&nbsp;tự nhi&ecirc;n n&agrave;y v&agrave;o chế độ ăn uống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Đọc th&ecirc;m:&nbsp;Tăng cường sức đề kh&aacute;ng giữa m&ugrave;a dịch Covid &ndash; 19</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:28:28'),
(11, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie5', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie5', 3, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack,', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next', '<p>&ldquo;Si&ecirc;u b&atilde;o&rdquo; Covid &ndash; 19 b&ugrave;ng nổ tr&ecirc;n to&agrave;n cầu g&acirc;y ra nhiều thiệt hại nghi&ecirc;m trọng cả về người v&agrave; của. Với những biến chủng mới, tốc độ l&acirc;y lan của virus SARS-CoV-2 ng&agrave;y c&agrave;ng mạnh hơn, nhanh hơn. B&ecirc;n cạnh việc gi&atilde;n c&aacute;ch x&atilde; hội, tu&acirc;n thủ khuyến c&aacute;o 5K, bản th&acirc;n ch&uacute;ng ta cũng cần c&oacute; &yacute; thức bổ sung c&aacute;c loại thực phẩm cung cấp đủ dưỡng chất cho cơ thể. 5 loại gia vị&nbsp; m&agrave;&nbsp;<strong>UniSpice</strong>&nbsp;chia sẻ dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn tăng cường miễn dịch, sức đề kh&aacute;ng tự nhi&ecirc;n, an to&agrave;n.</p>\r\n\r\n<h2><strong>1. Gừng</strong></h2>\r\n\r\n<p><strong>Gừng</strong>&nbsp;l&agrave; một trong những gia vị mang lại nhiều lợi &iacute;ch cho sức khỏe nhất. Từ xa xưa, gừng đ&atilde; được sử dụng như một vị thuốc thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng chữa buồn n&ocirc;n, l&agrave;m sạch răng miệng, giải độc tố, thanh lọc cơ thể. Đặc t&iacute;nh oxy h&oacute;a mạnh c&oacute; trong gừng cũng gi&uacute;p bảo vệ cơ thể, tăng cường khả năng chống lại c&aacute;c vi khuẩn c&oacute; hại.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>D&ugrave;ng gừng tươi hoặc bột gừng để tẩm ướp thực phẩm, n&ecirc;m nếm c&aacute;c m&oacute;n x&agrave;o, rang, kho, chi&ecirc;n. D&ugrave;ng&nbsp;<strong>bột gừng</strong>&nbsp;nguy&ecirc;n chất pha tr&agrave; gừng uống mỗi ng&agrave;y cũng l&agrave; c&aacute;ch gi&uacute;p bảo vệ sức khỏe khỏi bệnh tật hiệu quả.&nbsp;</p>\r\n\r\n<h2><strong>2. Quế</strong></h2>\r\n\r\n<p><img alt=\"bot-que-co-tac-dung-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-que-co-tac-dung-gi.jpg\" style=\"height:683px; width:1024px\" /></p>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/que/\"><strong>Quế</strong></a>&nbsp;l&agrave; loại gia vị đ&oacute;ng vai tr&ograve; quan trọng trong vấn đề bảo vệ sức khỏe to&agrave;n diện. Với y học tự nhi&ecirc;n, quế được sử dụng trong b&agrave;i thuốc trị c&aacute;c bệnh li&ecirc;n quan đến tim mạch. Sử dụng quế thường xuy&ecirc;n cũng ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh trao đổi chất của cơ thể, điều chỉnh lượng đường trong m&aacute;u ổn định. Nhiều nghi&ecirc;n cứu cũng chỉ ra rằng, quế c&oacute; chứa hợp chất chống vi&ecirc;m, tăng cường hệ miễn dịch, sức đề kh&aacute;ng.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Pha&nbsp;<strong>bột quế</strong>&nbsp;c&ugrave;ng c&aacute;c thức uống ấm. Hoặc bạn c&oacute; thể rắc bột quế l&ecirc;n c&aacute;c loại hoa quả, sữa chua, ngũ cốc, b&aacute;nh m&igrave;,&hellip;</p>\r\n\r\n<h2><strong>3. Ớt</strong></h2>\r\n\r\n<p>Với h&agrave;m lượng hợp chất capsaicin cao, ớt l&agrave; gia vị gi&uacute;p bạn giữ ấm cơ thể tự nhi&ecirc;n. D&ugrave;ng ớt với liều lượng hợp l&yacute; cũng g&oacute;p phần giảm nguy cơ tử vong do đột quỵ hoặc đau tim. Loại gia vị cay n&oacute;ng n&agrave;y cũng chứa nhiều vitamin v&agrave; kho&aacute;ng chất, ch&iacute;nh v&igrave; vậy, ớt cũng được sử dụng phổ biến trong y học tự nhi&ecirc;n để bổ sung chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Th&ecirc;m một ch&uacute;t ớt/&nbsp;<strong>bột ớt</strong>&nbsp;khi tẩm ướp thực phẩm, chế biến m&oacute;n ăn hay l&agrave;m nước chấm cũng g&oacute;p phần n&acirc;ng cao sức đề kh&aacute;ng cho cơ thể.</p>\r\n\r\n<h2><strong>4. Nghệ</strong></h2>\r\n\r\n<p><strong><img alt=\"bot-nghe-tri-benh-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-nghe-tri-benh-gi.jpg\" style=\"height:683px; width:1024px\" /></strong></p>\r\n\r\n<p><strong>Bột nghệ</strong>&nbsp;thường c&oacute; m&agrave;u v&agrave;ng cam thường được sử dụng để l&agrave;m m&oacute;n ăn bắt mắt hơn. C&ocirc;ng dụng khổng lồ của nghệ trong y học th&igrave; kh&ocirc;ng c&ograve;n g&igrave; để b&agrave;n c&atilde;i. N&oacute; chứa nhiều hợp chất curcumin, nghệ được sử dụng nhiều để chống vi&ecirc;m tự nhi&ecirc;n, giảm nguy cơ mắc c&aacute;c bệnh về tim mạnh, chống nhiễm tr&ugrave;ng, k&iacute;ch th&iacute;ch cơ thể sản sinh ra chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Sử dụng bột nghệ trong c&aacute;c m&oacute;n x&agrave;o, c&agrave; ri, kho, s&uacute;p. Uống bột nghệ đều đặn mỗi ng&agrave;y vừa tốt cho sức khỏe vừa c&oacute; t&aacute;c dụng l&agrave;m đẹp hữu hiệu.</p>\r\n\r\n<h2><strong>5. Tỏi</strong></h2>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/toi/\"><strong>Tỏi</strong></a>&nbsp;l&agrave; loại gia vị thuốc gi&agrave;u vitamin C, vitamin B6 v&agrave; hợp chất mangan. D&ugrave;ng tỏi thường xuy&ecirc;n sẽ gi&uacute;p cơ thể tăng cường hệ miễn dịch. Tỏi cũng được mệnh danh l&agrave; &ldquo;thuốc kh&aacute;ng sinh&rdquo; tự nhi&ecirc;n, ức chế sự sinh trưởng của c&aacute;c loại vi khuẩn, nấm. Trong th&agrave;nh phần của tỏi c&oacute; đến 90% hợp chất lưu huỳnh c&oacute; t&aacute;c dụng t&iacute;ch cực trong việc hỗ trợ trao đổi chất sắt, chống oxy h&oacute;a v&agrave; giảm cholesterol.&nbsp;</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Tỏi c&oacute; thể ăn sống, pha nước chấm, gia vị cho m&oacute;n ăn, ng&acirc;m giấm hoặc rượu tỏi. Sử dụng tỏi h&agrave;ng ng&agrave;y gi&uacute;p chăm s&oacute;c sức khỏe, chống bệnh tật tự nhi&ecirc;n, an to&agrave;n.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 5 loại gia vị v&ocirc; c&ugrave;ng quen thuộc với ch&uacute;ng ta nhưng kh&ocirc;ng phải ai cũng biết c&ocirc;ng dụng của ch&uacute;ng với sức khỏe. Để ph&ograve;ng chống Covid&nbsp; &ndash; 19, c&aacute;c bạn đừng qu&ecirc;n bổ sung c&aacute;c loại&nbsp;<strong>gia vị</strong>&nbsp;tự nhi&ecirc;n n&agrave;y v&agrave;o chế độ ăn uống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Đọc th&ecirc;m:&nbsp;Tăng cường sức đề kh&aacute;ng giữa m&ugrave;a dịch Covid &ndash; 19</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:28:22'),
(12, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie4', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie4', 3, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and top', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie4', '<p>&ldquo;Si&ecirc;u b&atilde;o&rdquo; Covid &ndash; 19 b&ugrave;ng nổ tr&ecirc;n to&agrave;n cầu g&acirc;y ra nhiều thiệt hại nghi&ecirc;m trọng cả về người v&agrave; của. Với những biến chủng mới, tốc độ l&acirc;y lan của virus SARS-CoV-2 ng&agrave;y c&agrave;ng mạnh hơn, nhanh hơn. B&ecirc;n cạnh việc gi&atilde;n c&aacute;ch x&atilde; hội, tu&acirc;n thủ khuyến c&aacute;o 5K, bản th&acirc;n ch&uacute;ng ta cũng cần c&oacute; &yacute; thức bổ sung c&aacute;c loại thực phẩm cung cấp đủ dưỡng chất cho cơ thể. 5 loại gia vị&nbsp; m&agrave;&nbsp;<strong>UniSpice</strong>&nbsp;chia sẻ dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn tăng cường miễn dịch, sức đề kh&aacute;ng tự nhi&ecirc;n, an to&agrave;n.</p>\r\n\r\n<h2><strong>1. Gừng</strong></h2>\r\n\r\n<p><strong>Gừng</strong>&nbsp;l&agrave; một trong những gia vị mang lại nhiều lợi &iacute;ch cho sức khỏe nhất. Từ xa xưa, gừng đ&atilde; được sử dụng như một vị thuốc thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng chữa buồn n&ocirc;n, l&agrave;m sạch răng miệng, giải độc tố, thanh lọc cơ thể. Đặc t&iacute;nh oxy h&oacute;a mạnh c&oacute; trong gừng cũng gi&uacute;p bảo vệ cơ thể, tăng cường khả năng chống lại c&aacute;c vi khuẩn c&oacute; hại.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>D&ugrave;ng gừng tươi hoặc bột gừng để tẩm ướp thực phẩm, n&ecirc;m nếm c&aacute;c m&oacute;n x&agrave;o, rang, kho, chi&ecirc;n. D&ugrave;ng&nbsp;<strong>bột gừng</strong>&nbsp;nguy&ecirc;n chất pha tr&agrave; gừng uống mỗi ng&agrave;y cũng l&agrave; c&aacute;ch gi&uacute;p bảo vệ sức khỏe khỏi bệnh tật hiệu quả.&nbsp;</p>\r\n\r\n<h2><strong>2. Quế</strong></h2>\r\n\r\n<p><img alt=\"bot-que-co-tac-dung-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-que-co-tac-dung-gi.jpg\" style=\"height:683px; width:1024px\" /></p>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/que/\"><strong>Quế</strong></a>&nbsp;l&agrave; loại gia vị đ&oacute;ng vai tr&ograve; quan trọng trong vấn đề bảo vệ sức khỏe to&agrave;n diện. Với y học tự nhi&ecirc;n, quế được sử dụng trong b&agrave;i thuốc trị c&aacute;c bệnh li&ecirc;n quan đến tim mạch. Sử dụng quế thường xuy&ecirc;n cũng ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh trao đổi chất của cơ thể, điều chỉnh lượng đường trong m&aacute;u ổn định. Nhiều nghi&ecirc;n cứu cũng chỉ ra rằng, quế c&oacute; chứa hợp chất chống vi&ecirc;m, tăng cường hệ miễn dịch, sức đề kh&aacute;ng.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Pha&nbsp;<strong>bột quế</strong>&nbsp;c&ugrave;ng c&aacute;c thức uống ấm. Hoặc bạn c&oacute; thể rắc bột quế l&ecirc;n c&aacute;c loại hoa quả, sữa chua, ngũ cốc, b&aacute;nh m&igrave;,&hellip;</p>\r\n\r\n<h2><strong>3. Ớt</strong></h2>\r\n\r\n<p>Với h&agrave;m lượng hợp chất capsaicin cao, ớt l&agrave; gia vị gi&uacute;p bạn giữ ấm cơ thể tự nhi&ecirc;n. D&ugrave;ng ớt với liều lượng hợp l&yacute; cũng g&oacute;p phần giảm nguy cơ tử vong do đột quỵ hoặc đau tim. Loại gia vị cay n&oacute;ng n&agrave;y cũng chứa nhiều vitamin v&agrave; kho&aacute;ng chất, ch&iacute;nh v&igrave; vậy, ớt cũng được sử dụng phổ biến trong y học tự nhi&ecirc;n để bổ sung chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Th&ecirc;m một ch&uacute;t ớt/&nbsp;<strong>bột ớt</strong>&nbsp;khi tẩm ướp thực phẩm, chế biến m&oacute;n ăn hay l&agrave;m nước chấm cũng g&oacute;p phần n&acirc;ng cao sức đề kh&aacute;ng cho cơ thể.</p>\r\n\r\n<h2><strong>4. Nghệ</strong></h2>\r\n\r\n<p><strong><img alt=\"bot-nghe-tri-benh-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-nghe-tri-benh-gi.jpg\" style=\"height:683px; width:1024px\" /></strong></p>\r\n\r\n<p><strong>Bột nghệ</strong>&nbsp;thường c&oacute; m&agrave;u v&agrave;ng cam thường được sử dụng để l&agrave;m m&oacute;n ăn bắt mắt hơn. C&ocirc;ng dụng khổng lồ của nghệ trong y học th&igrave; kh&ocirc;ng c&ograve;n g&igrave; để b&agrave;n c&atilde;i. N&oacute; chứa nhiều hợp chất curcumin, nghệ được sử dụng nhiều để chống vi&ecirc;m tự nhi&ecirc;n, giảm nguy cơ mắc c&aacute;c bệnh về tim mạnh, chống nhiễm tr&ugrave;ng, k&iacute;ch th&iacute;ch cơ thể sản sinh ra chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Sử dụng bột nghệ trong c&aacute;c m&oacute;n x&agrave;o, c&agrave; ri, kho, s&uacute;p. Uống bột nghệ đều đặn mỗi ng&agrave;y vừa tốt cho sức khỏe vừa c&oacute; t&aacute;c dụng l&agrave;m đẹp hữu hiệu.</p>\r\n\r\n<h2><strong>5. Tỏi</strong></h2>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/toi/\"><strong>Tỏi</strong></a>&nbsp;l&agrave; loại gia vị thuốc gi&agrave;u vitamin C, vitamin B6 v&agrave; hợp chất mangan. D&ugrave;ng tỏi thường xuy&ecirc;n sẽ gi&uacute;p cơ thể tăng cường hệ miễn dịch. Tỏi cũng được mệnh danh l&agrave; &ldquo;thuốc kh&aacute;ng sinh&rdquo; tự nhi&ecirc;n, ức chế sự sinh trưởng của c&aacute;c loại vi khuẩn, nấm. Trong th&agrave;nh phần của tỏi c&oacute; đến 90% hợp chất lưu huỳnh c&oacute; t&aacute;c dụng t&iacute;ch cực trong việc hỗ trợ trao đổi chất sắt, chống oxy h&oacute;a v&agrave; giảm cholesterol.&nbsp;</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Tỏi c&oacute; thể ăn sống, pha nước chấm, gia vị cho m&oacute;n ăn, ng&acirc;m giấm hoặc rượu tỏi. Sử dụng tỏi h&agrave;ng ng&agrave;y gi&uacute;p chăm s&oacute;c sức khỏe, chống bệnh tật tự nhi&ecirc;n, an to&agrave;n.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 5 loại gia vị v&ocirc; c&ugrave;ng quen thuộc với ch&uacute;ng ta nhưng kh&ocirc;ng phải ai cũng biết c&ocirc;ng dụng của ch&uacute;ng với sức khỏe. Để ph&ograve;ng chống Covid&nbsp; &ndash; 19, c&aacute;c bạn đừng qu&ecirc;n bổ sung c&aacute;c loại&nbsp;<strong>gia vị</strong>&nbsp;tự nhi&ecirc;n n&agrave;y v&agrave;o chế độ ăn uống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Đọc th&ecirc;m:&nbsp;Tăng cường sức đề kh&aacute;ng giữa m&ugrave;a dịch Covid &ndash; 19</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:28:16'),
(13, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie3', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie3', 3, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next', '<p>&ldquo;Si&ecirc;u b&atilde;o&rdquo; Covid &ndash; 19 b&ugrave;ng nổ tr&ecirc;n to&agrave;n cầu g&acirc;y ra nhiều thiệt hại nghi&ecirc;m trọng cả về người v&agrave; của. Với những biến chủng mới, tốc độ l&acirc;y lan của virus SARS-CoV-2 ng&agrave;y c&agrave;ng mạnh hơn, nhanh hơn. B&ecirc;n cạnh việc gi&atilde;n c&aacute;ch x&atilde; hội, tu&acirc;n thủ khuyến c&aacute;o 5K, bản th&acirc;n ch&uacute;ng ta cũng cần c&oacute; &yacute; thức bổ sung c&aacute;c loại thực phẩm cung cấp đủ dưỡng chất cho cơ thể. 5 loại gia vị&nbsp; m&agrave;&nbsp;<strong>UniSpice</strong>&nbsp;chia sẻ dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn tăng cường miễn dịch, sức đề kh&aacute;ng tự nhi&ecirc;n, an to&agrave;n.</p>\r\n\r\n<h2><strong>1. Gừng</strong></h2>\r\n\r\n<p><strong>Gừng</strong>&nbsp;l&agrave; một trong những gia vị mang lại nhiều lợi &iacute;ch cho sức khỏe nhất. Từ xa xưa, gừng đ&atilde; được sử dụng như một vị thuốc thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng chữa buồn n&ocirc;n, l&agrave;m sạch răng miệng, giải độc tố, thanh lọc cơ thể. Đặc t&iacute;nh oxy h&oacute;a mạnh c&oacute; trong gừng cũng gi&uacute;p bảo vệ cơ thể, tăng cường khả năng chống lại c&aacute;c vi khuẩn c&oacute; hại.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>D&ugrave;ng gừng tươi hoặc bột gừng để tẩm ướp thực phẩm, n&ecirc;m nếm c&aacute;c m&oacute;n x&agrave;o, rang, kho, chi&ecirc;n. D&ugrave;ng&nbsp;<strong>bột gừng</strong>&nbsp;nguy&ecirc;n chất pha tr&agrave; gừng uống mỗi ng&agrave;y cũng l&agrave; c&aacute;ch gi&uacute;p bảo vệ sức khỏe khỏi bệnh tật hiệu quả.&nbsp;</p>\r\n\r\n<h2><strong>2. Quế</strong></h2>\r\n\r\n<p><img alt=\"bot-que-co-tac-dung-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-que-co-tac-dung-gi.jpg\" style=\"height:683px; width:1024px\" /></p>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/que/\"><strong>Quế</strong></a>&nbsp;l&agrave; loại gia vị đ&oacute;ng vai tr&ograve; quan trọng trong vấn đề bảo vệ sức khỏe to&agrave;n diện. Với y học tự nhi&ecirc;n, quế được sử dụng trong b&agrave;i thuốc trị c&aacute;c bệnh li&ecirc;n quan đến tim mạch. Sử dụng quế thường xuy&ecirc;n cũng ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh trao đổi chất của cơ thể, điều chỉnh lượng đường trong m&aacute;u ổn định. Nhiều nghi&ecirc;n cứu cũng chỉ ra rằng, quế c&oacute; chứa hợp chất chống vi&ecirc;m, tăng cường hệ miễn dịch, sức đề kh&aacute;ng.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Pha&nbsp;<strong>bột quế</strong>&nbsp;c&ugrave;ng c&aacute;c thức uống ấm. Hoặc bạn c&oacute; thể rắc bột quế l&ecirc;n c&aacute;c loại hoa quả, sữa chua, ngũ cốc, b&aacute;nh m&igrave;,&hellip;</p>\r\n\r\n<h2><strong>3. Ớt</strong></h2>\r\n\r\n<p>Với h&agrave;m lượng hợp chất capsaicin cao, ớt l&agrave; gia vị gi&uacute;p bạn giữ ấm cơ thể tự nhi&ecirc;n. D&ugrave;ng ớt với liều lượng hợp l&yacute; cũng g&oacute;p phần giảm nguy cơ tử vong do đột quỵ hoặc đau tim. Loại gia vị cay n&oacute;ng n&agrave;y cũng chứa nhiều vitamin v&agrave; kho&aacute;ng chất, ch&iacute;nh v&igrave; vậy, ớt cũng được sử dụng phổ biến trong y học tự nhi&ecirc;n để bổ sung chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Th&ecirc;m một ch&uacute;t ớt/&nbsp;<strong>bột ớt</strong>&nbsp;khi tẩm ướp thực phẩm, chế biến m&oacute;n ăn hay l&agrave;m nước chấm cũng g&oacute;p phần n&acirc;ng cao sức đề kh&aacute;ng cho cơ thể.</p>\r\n\r\n<h2><strong>4. Nghệ</strong></h2>\r\n\r\n<p><strong><img alt=\"bot-nghe-tri-benh-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-nghe-tri-benh-gi.jpg\" style=\"height:683px; width:1024px\" /></strong></p>\r\n\r\n<p><strong>Bột nghệ</strong>&nbsp;thường c&oacute; m&agrave;u v&agrave;ng cam thường được sử dụng để l&agrave;m m&oacute;n ăn bắt mắt hơn. C&ocirc;ng dụng khổng lồ của nghệ trong y học th&igrave; kh&ocirc;ng c&ograve;n g&igrave; để b&agrave;n c&atilde;i. N&oacute; chứa nhiều hợp chất curcumin, nghệ được sử dụng nhiều để chống vi&ecirc;m tự nhi&ecirc;n, giảm nguy cơ mắc c&aacute;c bệnh về tim mạnh, chống nhiễm tr&ugrave;ng, k&iacute;ch th&iacute;ch cơ thể sản sinh ra chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Sử dụng bột nghệ trong c&aacute;c m&oacute;n x&agrave;o, c&agrave; ri, kho, s&uacute;p. Uống bột nghệ đều đặn mỗi ng&agrave;y vừa tốt cho sức khỏe vừa c&oacute; t&aacute;c dụng l&agrave;m đẹp hữu hiệu.</p>\r\n\r\n<h2><strong>5. Tỏi</strong></h2>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/toi/\"><strong>Tỏi</strong></a>&nbsp;l&agrave; loại gia vị thuốc gi&agrave;u vitamin C, vitamin B6 v&agrave; hợp chất mangan. D&ugrave;ng tỏi thường xuy&ecirc;n sẽ gi&uacute;p cơ thể tăng cường hệ miễn dịch. Tỏi cũng được mệnh danh l&agrave; &ldquo;thuốc kh&aacute;ng sinh&rdquo; tự nhi&ecirc;n, ức chế sự sinh trưởng của c&aacute;c loại vi khuẩn, nấm. Trong th&agrave;nh phần của tỏi c&oacute; đến 90% hợp chất lưu huỳnh c&oacute; t&aacute;c dụng t&iacute;ch cực trong việc hỗ trợ trao đổi chất sắt, chống oxy h&oacute;a v&agrave; giảm cholesterol.&nbsp;</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Tỏi c&oacute; thể ăn sống, pha nước chấm, gia vị cho m&oacute;n ăn, ng&acirc;m giấm hoặc rượu tỏi. Sử dụng tỏi h&agrave;ng ng&agrave;y gi&uacute;p chăm s&oacute;c sức khỏe, chống bệnh tật tự nhi&ecirc;n, an to&agrave;n.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 5 loại gia vị v&ocirc; c&ugrave;ng quen thuộc với ch&uacute;ng ta nhưng kh&ocirc;ng phải ai cũng biết c&ocirc;ng dụng của ch&uacute;ng với sức khỏe. Để ph&ograve;ng chống Covid&nbsp; &ndash; 19, c&aacute;c bạn đừng qu&ecirc;n bổ sung c&aacute;c loại&nbsp;<strong>gia vị</strong>&nbsp;tự nhi&ecirc;n n&agrave;y v&agrave;o chế độ ăn uống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Đọc th&ecirc;m:&nbsp;Tăng cường sức đề kh&aacute;ng giữa m&ugrave;a dịch Covid &ndash; 19</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:28:10');
INSERT INTO `uni_post` (`id`, `name`, `slug`, `category_id`, `desscription`, `meta_desscription`, `meta_title`, `content`, `status`, `order`, `thumbnail`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(14, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie2', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie2', 4, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your', '<p>&ldquo;Si&ecirc;u b&atilde;o&rdquo; Covid &ndash; 19 b&ugrave;ng nổ tr&ecirc;n to&agrave;n cầu g&acirc;y ra nhiều thiệt hại nghi&ecirc;m trọng cả về người v&agrave; của. Với những biến chủng mới, tốc độ l&acirc;y lan của virus SARS-CoV-2 ng&agrave;y c&agrave;ng mạnh hơn, nhanh hơn. B&ecirc;n cạnh việc gi&atilde;n c&aacute;ch x&atilde; hội, tu&acirc;n thủ khuyến c&aacute;o 5K, bản th&acirc;n ch&uacute;ng ta cũng cần c&oacute; &yacute; thức bổ sung c&aacute;c loại thực phẩm cung cấp đủ dưỡng chất cho cơ thể. 5 loại gia vị&nbsp; m&agrave;&nbsp;<strong>UniSpice</strong>&nbsp;chia sẻ dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn tăng cường miễn dịch, sức đề kh&aacute;ng tự nhi&ecirc;n, an to&agrave;n.</p>\r\n\r\n<h2><strong>1. Gừng</strong></h2>\r\n\r\n<p><strong>Gừng</strong>&nbsp;l&agrave; một trong những gia vị mang lại nhiều lợi &iacute;ch cho sức khỏe nhất. Từ xa xưa, gừng đ&atilde; được sử dụng như một vị thuốc thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng chữa buồn n&ocirc;n, l&agrave;m sạch răng miệng, giải độc tố, thanh lọc cơ thể. Đặc t&iacute;nh oxy h&oacute;a mạnh c&oacute; trong gừng cũng gi&uacute;p bảo vệ cơ thể, tăng cường khả năng chống lại c&aacute;c vi khuẩn c&oacute; hại.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>D&ugrave;ng gừng tươi hoặc bột gừng để tẩm ướp thực phẩm, n&ecirc;m nếm c&aacute;c m&oacute;n x&agrave;o, rang, kho, chi&ecirc;n. D&ugrave;ng&nbsp;<strong>bột gừng</strong>&nbsp;nguy&ecirc;n chất pha tr&agrave; gừng uống mỗi ng&agrave;y cũng l&agrave; c&aacute;ch gi&uacute;p bảo vệ sức khỏe khỏi bệnh tật hiệu quả.&nbsp;</p>\r\n\r\n<h2><strong>2. Quế</strong></h2>\r\n\r\n<p><img alt=\"bot-que-co-tac-dung-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-que-co-tac-dung-gi.jpg\" style=\"height:683px; width:1024px\" /></p>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/que/\"><strong>Quế</strong></a>&nbsp;l&agrave; loại gia vị đ&oacute;ng vai tr&ograve; quan trọng trong vấn đề bảo vệ sức khỏe to&agrave;n diện. Với y học tự nhi&ecirc;n, quế được sử dụng trong b&agrave;i thuốc trị c&aacute;c bệnh li&ecirc;n quan đến tim mạch. Sử dụng quế thường xuy&ecirc;n cũng ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh trao đổi chất của cơ thể, điều chỉnh lượng đường trong m&aacute;u ổn định. Nhiều nghi&ecirc;n cứu cũng chỉ ra rằng, quế c&oacute; chứa hợp chất chống vi&ecirc;m, tăng cường hệ miễn dịch, sức đề kh&aacute;ng.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Pha&nbsp;<strong>bột quế</strong>&nbsp;c&ugrave;ng c&aacute;c thức uống ấm. Hoặc bạn c&oacute; thể rắc bột quế l&ecirc;n c&aacute;c loại hoa quả, sữa chua, ngũ cốc, b&aacute;nh m&igrave;,&hellip;</p>\r\n\r\n<h2><strong>3. Ớt</strong></h2>\r\n\r\n<p>Với h&agrave;m lượng hợp chất capsaicin cao, ớt l&agrave; gia vị gi&uacute;p bạn giữ ấm cơ thể tự nhi&ecirc;n. D&ugrave;ng ớt với liều lượng hợp l&yacute; cũng g&oacute;p phần giảm nguy cơ tử vong do đột quỵ hoặc đau tim. Loại gia vị cay n&oacute;ng n&agrave;y cũng chứa nhiều vitamin v&agrave; kho&aacute;ng chất, ch&iacute;nh v&igrave; vậy, ớt cũng được sử dụng phổ biến trong y học tự nhi&ecirc;n để bổ sung chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Th&ecirc;m một ch&uacute;t ớt/&nbsp;<strong>bột ớt</strong>&nbsp;khi tẩm ướp thực phẩm, chế biến m&oacute;n ăn hay l&agrave;m nước chấm cũng g&oacute;p phần n&acirc;ng cao sức đề kh&aacute;ng cho cơ thể.</p>\r\n\r\n<h2><strong>4. Nghệ</strong></h2>\r\n\r\n<p><strong><img alt=\"bot-nghe-tri-benh-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-nghe-tri-benh-gi.jpg\" style=\"height:683px; width:1024px\" /></strong></p>\r\n\r\n<p><strong>Bột nghệ</strong>&nbsp;thường c&oacute; m&agrave;u v&agrave;ng cam thường được sử dụng để l&agrave;m m&oacute;n ăn bắt mắt hơn. C&ocirc;ng dụng khổng lồ của nghệ trong y học th&igrave; kh&ocirc;ng c&ograve;n g&igrave; để b&agrave;n c&atilde;i. N&oacute; chứa nhiều hợp chất curcumin, nghệ được sử dụng nhiều để chống vi&ecirc;m tự nhi&ecirc;n, giảm nguy cơ mắc c&aacute;c bệnh về tim mạnh, chống nhiễm tr&ugrave;ng, k&iacute;ch th&iacute;ch cơ thể sản sinh ra chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Sử dụng bột nghệ trong c&aacute;c m&oacute;n x&agrave;o, c&agrave; ri, kho, s&uacute;p. Uống bột nghệ đều đặn mỗi ng&agrave;y vừa tốt cho sức khỏe vừa c&oacute; t&aacute;c dụng l&agrave;m đẹp hữu hiệu.</p>\r\n\r\n<h2><strong>5. Tỏi</strong></h2>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/toi/\"><strong>Tỏi</strong></a>&nbsp;l&agrave; loại gia vị thuốc gi&agrave;u vitamin C, vitamin B6 v&agrave; hợp chất mangan. D&ugrave;ng tỏi thường xuy&ecirc;n sẽ gi&uacute;p cơ thể tăng cường hệ miễn dịch. Tỏi cũng được mệnh danh l&agrave; &ldquo;thuốc kh&aacute;ng sinh&rdquo; tự nhi&ecirc;n, ức chế sự sinh trưởng của c&aacute;c loại vi khuẩn, nấm. Trong th&agrave;nh phần của tỏi c&oacute; đến 90% hợp chất lưu huỳnh c&oacute; t&aacute;c dụng t&iacute;ch cực trong việc hỗ trợ trao đổi chất sắt, chống oxy h&oacute;a v&agrave; giảm cholesterol.&nbsp;</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Tỏi c&oacute; thể ăn sống, pha nước chấm, gia vị cho m&oacute;n ăn, ng&acirc;m giấm hoặc rượu tỏi. Sử dụng tỏi h&agrave;ng ng&agrave;y gi&uacute;p chăm s&oacute;c sức khỏe, chống bệnh tật tự nhi&ecirc;n, an to&agrave;n.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 5 loại gia vị v&ocirc; c&ugrave;ng quen thuộc với ch&uacute;ng ta nhưng kh&ocirc;ng phải ai cũng biết c&ocirc;ng dụng của ch&uacute;ng với sức khỏe. Để ph&ograve;ng chống Covid&nbsp; &ndash; 19, c&aacute;c bạn đừng qu&ecirc;n bổ sung c&aacute;c loại&nbsp;<strong>gia vị</strong>&nbsp;tự nhi&ecirc;n n&agrave;y v&agrave;o chế độ ăn uống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Đọc th&ecirc;m:&nbsp;Tăng cường sức đề kh&aacute;ng giữa m&ugrave;a dịch Covid &ndash; 19</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:28:05'),
(15, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie1', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie1', 5, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack,', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your', '<h2>Birthday Cake Popcorn</h2>\r\n\r\n<p>No special occasion is required to make this colorful and fun popcorn recipe. Kids of all ages will love this combination of white chocolate, cake batter, and all-natural sprinkles. But unlike a birthday cake, this snack can be enjoyed anywhere, anytime, and the whole-grain goodness of popcorn gives it a satisfying crunch.</p>\r\n\r\n<h3><strong>Birthday Cake Popcorn Ingredients</strong></h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>3 Tbsp&nbsp;Butter</p>\r\n\r\n<p>1/2 cup&nbsp;white chocolate chips or melting wafers</p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Vanilla Extract</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Bob&rsquo;s Red Mill Gluten-Free Vanilla Yellow Cake Mix</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Color Kitchen Rainbow Sprinkles</a></p>\r\n\r\n<p>Want to know how to make our Birthday Cake Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"birthday cake popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Birthday%20Cake%20Popcorn-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Chili Lime Popcorn</h2>\r\n\r\n<p>Add some zip to snack time with this easy popcorn recipe featuring a simple mixture of chili powder and lime juice. Might we suggest this whole grain, yet sugar-free snack idea for when you wish it were 5 o&rsquo;clock somewhere!</p>\r\n\r\n<h3>Chili Lime Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2&nbsp;cup popcorn kernels</p>\r\n\r\n<p>2 Tbsp lime juice</p>\r\n\r\n<p>1&nbsp;<a href=\"#\">Tbsp Simply Organic Chili Powder Seasoning Blend</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Coarse Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Chili Lime Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Chili Lime Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Chili%20Lime%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nCoconut Curry Popcorn</h2>\r\n\r\n<p>The warm, savory flavor of curry is complemented by the subtle sweetness of coconut in this quick and easy popcorn recipe. The seasoning is a simple mixture of curry powder, coconut oil, coconut flakes, salt and sugar.</p>\r\n\r\n<h3>Coconut Curry Popcorn Ingredients</h3>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>5 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1 Tbsp&nbsp;<a href=\"#\">Frontier Co-op Organic Curry Powder</a>&nbsp;</p>\r\n\r\n<p>1/4 cup&nbsp;<a href=\"#\">coconut flakes</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>1/4 tsp cane sugar</p>\r\n\r\n<p>Want to know how to make our Coconut Curry Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Coconut Curry Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Coconut-Curry-Popcorn-Recipe-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Honey Chipotle Popcorn</h2>\r\n\r\n<p>The sweet and spicy blend of honey and chipotle makes a surprisingly delicious popcorn topping that starts sweet and ends with a warm, smoky bite.</p>\r\n\r\n<h3>Honey Chipotle Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/3 cup&nbsp;<a href=\"#\">organic raw honey</a>&nbsp;</p>\r\n\r\n<p>1/4 tsp ground&nbsp;<a href=\"#\">Frontier Co-op Chipotle Powder</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Honey Chipotle Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Honey Chipotle Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Popcorn-Honey-Chipotle-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Maple Cinnamon Popcorn</h2>\r\n\r\n<p>This healthy, delicious and aromatic recipe is perfect for cooler weather, as it brings a cozy feeling with its warm, sweet flavor of maple syrup, vanilla and cinnamon. It&rsquo;s a great snack to enjoy at home for movie nights or with a good book. With the simplicity of this recipe, the quality of your ingredients will really make the difference.</p>\r\n\r\n<h3>Maple Cinnamon Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">maple syrup</a>&nbsp;</p>\r\n\r\n<p>1 tsp&nbsp;<a href=\"#\">Simply Organic Ground Cinnamon</a></p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Pure Vanilla Extract</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>Want to know how to make our Maple Cinnamon Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Maple Cinnamon Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Maple-Cinnamon-Simply-Organic-Recipe-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nPeanut Butter Cup Popcorn</h2>\r\n\r\n<p>The classic combination of chocolate and peanut butter makes a fabulous candy, but it&rsquo;s even better when popcorn is added to the mix. Perfect for parties or snacking with the family, this popcorn recipe makes a fun and unexpected treat that everyone will enjoy.</p>\r\n\r\n<p>Peanut Butter Cup Popcorn Ingredients</p>\r\n\r\n<p>4 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;creamy peanut butter</p>\r\n\r\n<p>1/2 cup chocolate chips (<a href=\"#\">semi-sweet</a>&nbsp;or bittersweet)</p>\r\n\r\n<p>Want to know how to make our Peanut Butter Cup Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Peanut Butter Cup Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Peanut%20Butter%20Cup%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><strong>Skip The Recipes With Frontier&rsquo;s Premade Salt-Free Popcorn Seasonings</strong></h2>\r\n\r\n<p>With the right ingredients and a little creativity, there&rsquo;s no limit on the healthy combinations you can use to top your popcorn. If you don&rsquo;t want to go the DIY route, you can find delicious, healthy salt-free popcorn seasonings in our online market. Choose from cheesy flavors like&nbsp;<a href=\"#\">Cheddar</a>&nbsp;or&nbsp;<a href=\"#\">Cheddar and Spice</a>&nbsp;or satisfy your cravings with our salt-free&nbsp;<a href=\"#\">Sour Cream &amp; Onion Popcorn Seasoning</a>.</p>\r\n\r\n<p>Remember for your next movie night, ditch the butter and salt and enjoy your popcorn topped with one of our heart-healthy toppings and seasonings.</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:27:59'),
(16, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie Night9', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie-night9', 5, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next', '<h2>Birthday Cake Popcorn</h2>\r\n\r\n<p>No special occasion is required to make this colorful and fun popcorn recipe. Kids of all ages will love this combination of white chocolate, cake batter, and all-natural sprinkles. But unlike a birthday cake, this snack can be enjoyed anywhere, anytime, and the whole-grain goodness of popcorn gives it a satisfying crunch.</p>\r\n\r\n<h3><strong>Birthday Cake Popcorn Ingredients</strong></h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>3 Tbsp&nbsp;Butter</p>\r\n\r\n<p>1/2 cup&nbsp;white chocolate chips or melting wafers</p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Vanilla Extract</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Bob&rsquo;s Red Mill Gluten-Free Vanilla Yellow Cake Mix</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Color Kitchen Rainbow Sprinkles</a></p>\r\n\r\n<p>Want to know how to make our Birthday Cake Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"birthday cake popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Birthday%20Cake%20Popcorn-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Chili Lime Popcorn</h2>\r\n\r\n<p>Add some zip to snack time with this easy popcorn recipe featuring a simple mixture of chili powder and lime juice. Might we suggest this whole grain, yet sugar-free snack idea for when you wish it were 5 o&rsquo;clock somewhere!</p>\r\n\r\n<h3>Chili Lime Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2&nbsp;cup popcorn kernels</p>\r\n\r\n<p>2 Tbsp lime juice</p>\r\n\r\n<p>1&nbsp;<a href=\"#\">Tbsp Simply Organic Chili Powder Seasoning Blend</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Coarse Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Chili Lime Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Chili Lime Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Chili%20Lime%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nCoconut Curry Popcorn</h2>\r\n\r\n<p>The warm, savory flavor of curry is complemented by the subtle sweetness of coconut in this quick and easy popcorn recipe. The seasoning is a simple mixture of curry powder, coconut oil, coconut flakes, salt and sugar.</p>\r\n\r\n<h3>Coconut Curry Popcorn Ingredients</h3>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>5 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1 Tbsp&nbsp;<a href=\"#\">Frontier Co-op Organic Curry Powder</a>&nbsp;</p>\r\n\r\n<p>1/4 cup&nbsp;<a href=\"#\">coconut flakes</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>1/4 tsp cane sugar</p>\r\n\r\n<p>Want to know how to make our Coconut Curry Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Coconut Curry Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Coconut-Curry-Popcorn-Recipe-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Honey Chipotle Popcorn</h2>\r\n\r\n<p>The sweet and spicy blend of honey and chipotle makes a surprisingly delicious popcorn topping that starts sweet and ends with a warm, smoky bite.</p>\r\n\r\n<h3>Honey Chipotle Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/3 cup&nbsp;<a href=\"#\">organic raw honey</a>&nbsp;</p>\r\n\r\n<p>1/4 tsp ground&nbsp;<a href=\"#\">Frontier Co-op Chipotle Powder</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Honey Chipotle Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Honey Chipotle Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Popcorn-Honey-Chipotle-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Maple Cinnamon Popcorn</h2>\r\n\r\n<p>This healthy, delicious and aromatic recipe is perfect for cooler weather, as it brings a cozy feeling with its warm, sweet flavor of maple syrup, vanilla and cinnamon. It&rsquo;s a great snack to enjoy at home for movie nights or with a good book. With the simplicity of this recipe, the quality of your ingredients will really make the difference.</p>\r\n\r\n<h3>Maple Cinnamon Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">maple syrup</a>&nbsp;</p>\r\n\r\n<p>1 tsp&nbsp;<a href=\"#\">Simply Organic Ground Cinnamon</a></p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Pure Vanilla Extract</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>Want to know how to make our Maple Cinnamon Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Maple Cinnamon Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Maple-Cinnamon-Simply-Organic-Recipe-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nPeanut Butter Cup Popcorn</h2>\r\n\r\n<p>The classic combination of chocolate and peanut butter makes a fabulous candy, but it&rsquo;s even better when popcorn is added to the mix. Perfect for parties or snacking with the family, this popcorn recipe makes a fun and unexpected treat that everyone will enjoy.</p>\r\n\r\n<p>Peanut Butter Cup Popcorn Ingredients</p>\r\n\r\n<p>4 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;creamy peanut butter</p>\r\n\r\n<p>1/2 cup chocolate chips (<a href=\"#\">semi-sweet</a>&nbsp;or bittersweet)</p>\r\n\r\n<p>Want to know how to make our Peanut Butter Cup Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Peanut Butter Cup Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Peanut%20Butter%20Cup%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><strong>Skip The Recipes With Frontier&rsquo;s Premade Salt-Free Popcorn Seasonings</strong></h2>\r\n\r\n<p>With the right ingredients and a little creativity, there&rsquo;s no limit on the healthy combinations you can use to top your popcorn. If you don&rsquo;t want to go the DIY route, you can find delicious, healthy salt-free popcorn seasonings in our online market. Choose from cheesy flavors like&nbsp;<a href=\"#\">Cheddar</a>&nbsp;or&nbsp;<a href=\"#\">Cheddar and Spice</a>&nbsp;or satisfy your cravings with our salt-free&nbsp;<a href=\"#\">Sour Cream &amp; Onion Popcorn Seasoning</a>.</p>\r\n\r\n<p>Remember for your next movie night, ditch the butter and salt and enjoy your popcorn topped with one of our heart-healthy toppings and seasonings.</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:27:17'),
(17, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie Night8', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie-night8', 6, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie', '<p>&ldquo;Si&ecirc;u b&atilde;o&rdquo; Covid &ndash; 19 b&ugrave;ng nổ tr&ecirc;n to&agrave;n cầu g&acirc;y ra nhiều thiệt hại nghi&ecirc;m trọng cả về người v&agrave; của. Với những biến chủng mới, tốc độ l&acirc;y lan của virus SARS-CoV-2 ng&agrave;y c&agrave;ng mạnh hơn, nhanh hơn. B&ecirc;n cạnh việc gi&atilde;n c&aacute;ch x&atilde; hội, tu&acirc;n thủ khuyến c&aacute;o 5K, bản th&acirc;n ch&uacute;ng ta cũng cần c&oacute; &yacute; thức bổ sung c&aacute;c loại thực phẩm cung cấp đủ dưỡng chất cho cơ thể. 5 loại gia vị&nbsp; m&agrave;&nbsp;<strong>UniSpice</strong>&nbsp;chia sẻ dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn tăng cường miễn dịch, sức đề kh&aacute;ng tự nhi&ecirc;n, an to&agrave;n.</p>\r\n\r\n<h2><strong>1. Gừng</strong></h2>\r\n\r\n<p><strong>Gừng</strong>&nbsp;l&agrave; một trong những gia vị mang lại nhiều lợi &iacute;ch cho sức khỏe nhất. Từ xa xưa, gừng đ&atilde; được sử dụng như một vị thuốc thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng chữa buồn n&ocirc;n, l&agrave;m sạch răng miệng, giải độc tố, thanh lọc cơ thể. Đặc t&iacute;nh oxy h&oacute;a mạnh c&oacute; trong gừng cũng gi&uacute;p bảo vệ cơ thể, tăng cường khả năng chống lại c&aacute;c vi khuẩn c&oacute; hại.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>D&ugrave;ng gừng tươi hoặc bột gừng để tẩm ướp thực phẩm, n&ecirc;m nếm c&aacute;c m&oacute;n x&agrave;o, rang, kho, chi&ecirc;n. D&ugrave;ng&nbsp;<strong>bột gừng</strong>&nbsp;nguy&ecirc;n chất pha tr&agrave; gừng uống mỗi ng&agrave;y cũng l&agrave; c&aacute;ch gi&uacute;p bảo vệ sức khỏe khỏi bệnh tật hiệu quả.&nbsp;</p>\r\n\r\n<h2><strong>2. Quế</strong></h2>\r\n\r\n<p><img alt=\"bot-que-co-tac-dung-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-que-co-tac-dung-gi.jpg\" style=\"height:683px; width:1024px\" /></p>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/que/\"><strong>Quế</strong></a>&nbsp;l&agrave; loại gia vị đ&oacute;ng vai tr&ograve; quan trọng trong vấn đề bảo vệ sức khỏe to&agrave;n diện. Với y học tự nhi&ecirc;n, quế được sử dụng trong b&agrave;i thuốc trị c&aacute;c bệnh li&ecirc;n quan đến tim mạch. Sử dụng quế thường xuy&ecirc;n cũng ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh trao đổi chất của cơ thể, điều chỉnh lượng đường trong m&aacute;u ổn định. Nhiều nghi&ecirc;n cứu cũng chỉ ra rằng, quế c&oacute; chứa hợp chất chống vi&ecirc;m, tăng cường hệ miễn dịch, sức đề kh&aacute;ng.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Pha&nbsp;<strong>bột quế</strong>&nbsp;c&ugrave;ng c&aacute;c thức uống ấm. Hoặc bạn c&oacute; thể rắc bột quế l&ecirc;n c&aacute;c loại hoa quả, sữa chua, ngũ cốc, b&aacute;nh m&igrave;,&hellip;</p>\r\n\r\n<h2><strong>3. Ớt</strong></h2>\r\n\r\n<p>Với h&agrave;m lượng hợp chất capsaicin cao, ớt l&agrave; gia vị gi&uacute;p bạn giữ ấm cơ thể tự nhi&ecirc;n. D&ugrave;ng ớt với liều lượng hợp l&yacute; cũng g&oacute;p phần giảm nguy cơ tử vong do đột quỵ hoặc đau tim. Loại gia vị cay n&oacute;ng n&agrave;y cũng chứa nhiều vitamin v&agrave; kho&aacute;ng chất, ch&iacute;nh v&igrave; vậy, ớt cũng được sử dụng phổ biến trong y học tự nhi&ecirc;n để bổ sung chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Th&ecirc;m một ch&uacute;t ớt/&nbsp;<strong>bột ớt</strong>&nbsp;khi tẩm ướp thực phẩm, chế biến m&oacute;n ăn hay l&agrave;m nước chấm cũng g&oacute;p phần n&acirc;ng cao sức đề kh&aacute;ng cho cơ thể.</p>\r\n\r\n<h2><strong>4. Nghệ</strong></h2>\r\n\r\n<p><strong><img alt=\"bot-nghe-tri-benh-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-nghe-tri-benh-gi.jpg\" style=\"height:683px; width:1024px\" /></strong></p>\r\n\r\n<p><strong>Bột nghệ</strong>&nbsp;thường c&oacute; m&agrave;u v&agrave;ng cam thường được sử dụng để l&agrave;m m&oacute;n ăn bắt mắt hơn. C&ocirc;ng dụng khổng lồ của nghệ trong y học th&igrave; kh&ocirc;ng c&ograve;n g&igrave; để b&agrave;n c&atilde;i. N&oacute; chứa nhiều hợp chất curcumin, nghệ được sử dụng nhiều để chống vi&ecirc;m tự nhi&ecirc;n, giảm nguy cơ mắc c&aacute;c bệnh về tim mạnh, chống nhiễm tr&ugrave;ng, k&iacute;ch th&iacute;ch cơ thể sản sinh ra chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Sử dụng bột nghệ trong c&aacute;c m&oacute;n x&agrave;o, c&agrave; ri, kho, s&uacute;p. Uống bột nghệ đều đặn mỗi ng&agrave;y vừa tốt cho sức khỏe vừa c&oacute; t&aacute;c dụng l&agrave;m đẹp hữu hiệu.</p>\r\n\r\n<h2><strong>5. Tỏi</strong></h2>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/toi/\"><strong>Tỏi</strong></a>&nbsp;l&agrave; loại gia vị thuốc gi&agrave;u vitamin C, vitamin B6 v&agrave; hợp chất mangan. D&ugrave;ng tỏi thường xuy&ecirc;n sẽ gi&uacute;p cơ thể tăng cường hệ miễn dịch. Tỏi cũng được mệnh danh l&agrave; &ldquo;thuốc kh&aacute;ng sinh&rdquo; tự nhi&ecirc;n, ức chế sự sinh trưởng của c&aacute;c loại vi khuẩn, nấm. Trong th&agrave;nh phần của tỏi c&oacute; đến 90% hợp chất lưu huỳnh c&oacute; t&aacute;c dụng t&iacute;ch cực trong việc hỗ trợ trao đổi chất sắt, chống oxy h&oacute;a v&agrave; giảm cholesterol.&nbsp;</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Tỏi c&oacute; thể ăn sống, pha nước chấm, gia vị cho m&oacute;n ăn, ng&acirc;m giấm hoặc rượu tỏi. Sử dụng tỏi h&agrave;ng ng&agrave;y gi&uacute;p chăm s&oacute;c sức khỏe, chống bệnh tật tự nhi&ecirc;n, an to&agrave;n.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 5 loại gia vị v&ocirc; c&ugrave;ng quen thuộc với ch&uacute;ng ta nhưng kh&ocirc;ng phải ai cũng biết c&ocirc;ng dụng của ch&uacute;ng với sức khỏe. Để ph&ograve;ng chống Covid&nbsp; &ndash; 19, c&aacute;c bạn đừng qu&ecirc;n bổ sung c&aacute;c loại&nbsp;<strong>gia vị</strong>&nbsp;tự nhi&ecirc;n n&agrave;y v&agrave;o chế độ ăn uống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Đọc th&ecirc;m:&nbsp;Tăng cường sức đề kh&aacute;ng giữa m&ugrave;a dịch Covid &ndash; 19</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:26:47'),
(18, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie Night7', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie-night7', 6, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie', '<p>&ldquo;Si&ecirc;u b&atilde;o&rdquo; Covid &ndash; 19 b&ugrave;ng nổ tr&ecirc;n to&agrave;n cầu g&acirc;y ra nhiều thiệt hại nghi&ecirc;m trọng cả về người v&agrave; của. Với những biến chủng mới, tốc độ l&acirc;y lan của virus SARS-CoV-2 ng&agrave;y c&agrave;ng mạnh hơn, nhanh hơn. B&ecirc;n cạnh việc gi&atilde;n c&aacute;ch x&atilde; hội, tu&acirc;n thủ khuyến c&aacute;o 5K, bản th&acirc;n ch&uacute;ng ta cũng cần c&oacute; &yacute; thức bổ sung c&aacute;c loại thực phẩm cung cấp đủ dưỡng chất cho cơ thể. 5 loại gia vị&nbsp; m&agrave;&nbsp;<strong>UniSpice</strong>&nbsp;chia sẻ dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn tăng cường miễn dịch, sức đề kh&aacute;ng tự nhi&ecirc;n, an to&agrave;n.</p>\r\n\r\n<h2><strong>1. Gừng</strong></h2>\r\n\r\n<p><strong>Gừng</strong>&nbsp;l&agrave; một trong những gia vị mang lại nhiều lợi &iacute;ch cho sức khỏe nhất. Từ xa xưa, gừng đ&atilde; được sử dụng như một vị thuốc thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng chữa buồn n&ocirc;n, l&agrave;m sạch răng miệng, giải độc tố, thanh lọc cơ thể. Đặc t&iacute;nh oxy h&oacute;a mạnh c&oacute; trong gừng cũng gi&uacute;p bảo vệ cơ thể, tăng cường khả năng chống lại c&aacute;c vi khuẩn c&oacute; hại.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>D&ugrave;ng gừng tươi hoặc bột gừng để tẩm ướp thực phẩm, n&ecirc;m nếm c&aacute;c m&oacute;n x&agrave;o, rang, kho, chi&ecirc;n. D&ugrave;ng&nbsp;<strong>bột gừng</strong>&nbsp;nguy&ecirc;n chất pha tr&agrave; gừng uống mỗi ng&agrave;y cũng l&agrave; c&aacute;ch gi&uacute;p bảo vệ sức khỏe khỏi bệnh tật hiệu quả.&nbsp;</p>\r\n\r\n<h2><strong>2. Quế</strong></h2>\r\n\r\n<p><img alt=\"bot-que-co-tac-dung-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-que-co-tac-dung-gi.jpg\" style=\"height:683px; width:1024px\" /></p>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/que/\"><strong>Quế</strong></a>&nbsp;l&agrave; loại gia vị đ&oacute;ng vai tr&ograve; quan trọng trong vấn đề bảo vệ sức khỏe to&agrave;n diện. Với y học tự nhi&ecirc;n, quế được sử dụng trong b&agrave;i thuốc trị c&aacute;c bệnh li&ecirc;n quan đến tim mạch. Sử dụng quế thường xuy&ecirc;n cũng ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh trao đổi chất của cơ thể, điều chỉnh lượng đường trong m&aacute;u ổn định. Nhiều nghi&ecirc;n cứu cũng chỉ ra rằng, quế c&oacute; chứa hợp chất chống vi&ecirc;m, tăng cường hệ miễn dịch, sức đề kh&aacute;ng.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Pha&nbsp;<strong>bột quế</strong>&nbsp;c&ugrave;ng c&aacute;c thức uống ấm. Hoặc bạn c&oacute; thể rắc bột quế l&ecirc;n c&aacute;c loại hoa quả, sữa chua, ngũ cốc, b&aacute;nh m&igrave;,&hellip;</p>\r\n\r\n<h2><strong>3. Ớt</strong></h2>\r\n\r\n<p>Với h&agrave;m lượng hợp chất capsaicin cao, ớt l&agrave; gia vị gi&uacute;p bạn giữ ấm cơ thể tự nhi&ecirc;n. D&ugrave;ng ớt với liều lượng hợp l&yacute; cũng g&oacute;p phần giảm nguy cơ tử vong do đột quỵ hoặc đau tim. Loại gia vị cay n&oacute;ng n&agrave;y cũng chứa nhiều vitamin v&agrave; kho&aacute;ng chất, ch&iacute;nh v&igrave; vậy, ớt cũng được sử dụng phổ biến trong y học tự nhi&ecirc;n để bổ sung chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Th&ecirc;m một ch&uacute;t ớt/&nbsp;<strong>bột ớt</strong>&nbsp;khi tẩm ướp thực phẩm, chế biến m&oacute;n ăn hay l&agrave;m nước chấm cũng g&oacute;p phần n&acirc;ng cao sức đề kh&aacute;ng cho cơ thể.</p>\r\n\r\n<h2><strong>4. Nghệ</strong></h2>\r\n\r\n<p><strong><img alt=\"bot-nghe-tri-benh-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-nghe-tri-benh-gi.jpg\" style=\"height:683px; width:1024px\" /></strong></p>\r\n\r\n<p><strong>Bột nghệ</strong>&nbsp;thường c&oacute; m&agrave;u v&agrave;ng cam thường được sử dụng để l&agrave;m m&oacute;n ăn bắt mắt hơn. C&ocirc;ng dụng khổng lồ của nghệ trong y học th&igrave; kh&ocirc;ng c&ograve;n g&igrave; để b&agrave;n c&atilde;i. N&oacute; chứa nhiều hợp chất curcumin, nghệ được sử dụng nhiều để chống vi&ecirc;m tự nhi&ecirc;n, giảm nguy cơ mắc c&aacute;c bệnh về tim mạnh, chống nhiễm tr&ugrave;ng, k&iacute;ch th&iacute;ch cơ thể sản sinh ra chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Sử dụng bột nghệ trong c&aacute;c m&oacute;n x&agrave;o, c&agrave; ri, kho, s&uacute;p. Uống bột nghệ đều đặn mỗi ng&agrave;y vừa tốt cho sức khỏe vừa c&oacute; t&aacute;c dụng l&agrave;m đẹp hữu hiệu.</p>\r\n\r\n<h2><strong>5. Tỏi</strong></h2>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/toi/\"><strong>Tỏi</strong></a>&nbsp;l&agrave; loại gia vị thuốc gi&agrave;u vitamin C, vitamin B6 v&agrave; hợp chất mangan. D&ugrave;ng tỏi thường xuy&ecirc;n sẽ gi&uacute;p cơ thể tăng cường hệ miễn dịch. Tỏi cũng được mệnh danh l&agrave; &ldquo;thuốc kh&aacute;ng sinh&rdquo; tự nhi&ecirc;n, ức chế sự sinh trưởng của c&aacute;c loại vi khuẩn, nấm. Trong th&agrave;nh phần của tỏi c&oacute; đến 90% hợp chất lưu huỳnh c&oacute; t&aacute;c dụng t&iacute;ch cực trong việc hỗ trợ trao đổi chất sắt, chống oxy h&oacute;a v&agrave; giảm cholesterol.&nbsp;</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Tỏi c&oacute; thể ăn sống, pha nước chấm, gia vị cho m&oacute;n ăn, ng&acirc;m giấm hoặc rượu tỏi. Sử dụng tỏi h&agrave;ng ng&agrave;y gi&uacute;p chăm s&oacute;c sức khỏe, chống bệnh tật tự nhi&ecirc;n, an to&agrave;n.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 5 loại gia vị v&ocirc; c&ugrave;ng quen thuộc với ch&uacute;ng ta nhưng kh&ocirc;ng phải ai cũng biết c&ocirc;ng dụng của ch&uacute;ng với sức khỏe. Để ph&ograve;ng chống Covid&nbsp; &ndash; 19, c&aacute;c bạn đừng qu&ecirc;n bổ sung c&aacute;c loại&nbsp;<strong>gia vị</strong>&nbsp;tự nhi&ecirc;n n&agrave;y v&agrave;o chế độ ăn uống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Đọc th&ecirc;m:&nbsp;Tăng cường sức đề kh&aacute;ng giữa m&ugrave;a dịch Covid &ndash; 19</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:26:41'),
(19, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie Night6', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie-night6', 7, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie', '<p>&ldquo;Si&ecirc;u b&atilde;o&rdquo; Covid &ndash; 19 b&ugrave;ng nổ tr&ecirc;n to&agrave;n cầu g&acirc;y ra nhiều thiệt hại nghi&ecirc;m trọng cả về người v&agrave; của. Với những biến chủng mới, tốc độ l&acirc;y lan của virus SARS-CoV-2 ng&agrave;y c&agrave;ng mạnh hơn, nhanh hơn. B&ecirc;n cạnh việc gi&atilde;n c&aacute;ch x&atilde; hội, tu&acirc;n thủ khuyến c&aacute;o 5K, bản th&acirc;n ch&uacute;ng ta cũng cần c&oacute; &yacute; thức bổ sung c&aacute;c loại thực phẩm cung cấp đủ dưỡng chất cho cơ thể. 5 loại gia vị&nbsp; m&agrave;&nbsp;<strong>UniSpice</strong>&nbsp;chia sẻ dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn tăng cường miễn dịch, sức đề kh&aacute;ng tự nhi&ecirc;n, an to&agrave;n.</p>\r\n\r\n<h2><strong>1. Gừng</strong></h2>\r\n\r\n<p><strong>Gừng</strong>&nbsp;l&agrave; một trong những gia vị mang lại nhiều lợi &iacute;ch cho sức khỏe nhất. Từ xa xưa, gừng đ&atilde; được sử dụng như một vị thuốc thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng chữa buồn n&ocirc;n, l&agrave;m sạch răng miệng, giải độc tố, thanh lọc cơ thể. Đặc t&iacute;nh oxy h&oacute;a mạnh c&oacute; trong gừng cũng gi&uacute;p bảo vệ cơ thể, tăng cường khả năng chống lại c&aacute;c vi khuẩn c&oacute; hại.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>D&ugrave;ng gừng tươi hoặc bột gừng để tẩm ướp thực phẩm, n&ecirc;m nếm c&aacute;c m&oacute;n x&agrave;o, rang, kho, chi&ecirc;n. D&ugrave;ng&nbsp;<strong>bột gừng</strong>&nbsp;nguy&ecirc;n chất pha tr&agrave; gừng uống mỗi ng&agrave;y cũng l&agrave; c&aacute;ch gi&uacute;p bảo vệ sức khỏe khỏi bệnh tật hiệu quả.&nbsp;</p>\r\n\r\n<h2><strong>2. Quế</strong></h2>\r\n\r\n<p><img alt=\"bot-que-co-tac-dung-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-que-co-tac-dung-gi.jpg\" style=\"height:683px; width:1024px\" /></p>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/que/\"><strong>Quế</strong></a>&nbsp;l&agrave; loại gia vị đ&oacute;ng vai tr&ograve; quan trọng trong vấn đề bảo vệ sức khỏe to&agrave;n diện. Với y học tự nhi&ecirc;n, quế được sử dụng trong b&agrave;i thuốc trị c&aacute;c bệnh li&ecirc;n quan đến tim mạch. Sử dụng quế thường xuy&ecirc;n cũng ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh trao đổi chất của cơ thể, điều chỉnh lượng đường trong m&aacute;u ổn định. Nhiều nghi&ecirc;n cứu cũng chỉ ra rằng, quế c&oacute; chứa hợp chất chống vi&ecirc;m, tăng cường hệ miễn dịch, sức đề kh&aacute;ng.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Pha&nbsp;<strong>bột quế</strong>&nbsp;c&ugrave;ng c&aacute;c thức uống ấm. Hoặc bạn c&oacute; thể rắc bột quế l&ecirc;n c&aacute;c loại hoa quả, sữa chua, ngũ cốc, b&aacute;nh m&igrave;,&hellip;</p>\r\n\r\n<h2><strong>3. Ớt</strong></h2>\r\n\r\n<p>Với h&agrave;m lượng hợp chất capsaicin cao, ớt l&agrave; gia vị gi&uacute;p bạn giữ ấm cơ thể tự nhi&ecirc;n. D&ugrave;ng ớt với liều lượng hợp l&yacute; cũng g&oacute;p phần giảm nguy cơ tử vong do đột quỵ hoặc đau tim. Loại gia vị cay n&oacute;ng n&agrave;y cũng chứa nhiều vitamin v&agrave; kho&aacute;ng chất, ch&iacute;nh v&igrave; vậy, ớt cũng được sử dụng phổ biến trong y học tự nhi&ecirc;n để bổ sung chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Th&ecirc;m một ch&uacute;t ớt/&nbsp;<strong>bột ớt</strong>&nbsp;khi tẩm ướp thực phẩm, chế biến m&oacute;n ăn hay l&agrave;m nước chấm cũng g&oacute;p phần n&acirc;ng cao sức đề kh&aacute;ng cho cơ thể.</p>\r\n\r\n<h2><strong>4. Nghệ</strong></h2>\r\n\r\n<p><strong><img alt=\"bot-nghe-tri-benh-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-nghe-tri-benh-gi.jpg\" style=\"height:683px; width:1024px\" /></strong></p>\r\n\r\n<p><strong>Bột nghệ</strong>&nbsp;thường c&oacute; m&agrave;u v&agrave;ng cam thường được sử dụng để l&agrave;m m&oacute;n ăn bắt mắt hơn. C&ocirc;ng dụng khổng lồ của nghệ trong y học th&igrave; kh&ocirc;ng c&ograve;n g&igrave; để b&agrave;n c&atilde;i. N&oacute; chứa nhiều hợp chất curcumin, nghệ được sử dụng nhiều để chống vi&ecirc;m tự nhi&ecirc;n, giảm nguy cơ mắc c&aacute;c bệnh về tim mạnh, chống nhiễm tr&ugrave;ng, k&iacute;ch th&iacute;ch cơ thể sản sinh ra chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Sử dụng bột nghệ trong c&aacute;c m&oacute;n x&agrave;o, c&agrave; ri, kho, s&uacute;p. Uống bột nghệ đều đặn mỗi ng&agrave;y vừa tốt cho sức khỏe vừa c&oacute; t&aacute;c dụng l&agrave;m đẹp hữu hiệu.</p>\r\n\r\n<h2><strong>5. Tỏi</strong></h2>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/toi/\"><strong>Tỏi</strong></a>&nbsp;l&agrave; loại gia vị thuốc gi&agrave;u vitamin C, vitamin B6 v&agrave; hợp chất mangan. D&ugrave;ng tỏi thường xuy&ecirc;n sẽ gi&uacute;p cơ thể tăng cường hệ miễn dịch. Tỏi cũng được mệnh danh l&agrave; &ldquo;thuốc kh&aacute;ng sinh&rdquo; tự nhi&ecirc;n, ức chế sự sinh trưởng của c&aacute;c loại vi khuẩn, nấm. Trong th&agrave;nh phần của tỏi c&oacute; đến 90% hợp chất lưu huỳnh c&oacute; t&aacute;c dụng t&iacute;ch cực trong việc hỗ trợ trao đổi chất sắt, chống oxy h&oacute;a v&agrave; giảm cholesterol.&nbsp;</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Tỏi c&oacute; thể ăn sống, pha nước chấm, gia vị cho m&oacute;n ăn, ng&acirc;m giấm hoặc rượu tỏi. Sử dụng tỏi h&agrave;ng ng&agrave;y gi&uacute;p chăm s&oacute;c sức khỏe, chống bệnh tật tự nhi&ecirc;n, an to&agrave;n.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 5 loại gia vị v&ocirc; c&ugrave;ng quen thuộc với ch&uacute;ng ta nhưng kh&ocirc;ng phải ai cũng biết c&ocirc;ng dụng của ch&uacute;ng với sức khỏe. Để ph&ograve;ng chống Covid&nbsp; &ndash; 19, c&aacute;c bạn đừng qu&ecirc;n bổ sung c&aacute;c loại&nbsp;<strong>gia vị</strong>&nbsp;tự nhi&ecirc;n n&agrave;y v&agrave;o chế độ ăn uống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Đọc th&ecirc;m:&nbsp;Tăng cường sức đề kh&aacute;ng giữa m&ugrave;a dịch Covid &ndash; 19</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:26:36'),
(20, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie Night5', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie-night5', 7, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie', '<p>&ldquo;Si&ecirc;u b&atilde;o&rdquo; Covid &ndash; 19 b&ugrave;ng nổ tr&ecirc;n to&agrave;n cầu g&acirc;y ra nhiều thiệt hại nghi&ecirc;m trọng cả về người v&agrave; của. Với những biến chủng mới, tốc độ l&acirc;y lan của virus SARS-CoV-2 ng&agrave;y c&agrave;ng mạnh hơn, nhanh hơn. B&ecirc;n cạnh việc gi&atilde;n c&aacute;ch x&atilde; hội, tu&acirc;n thủ khuyến c&aacute;o 5K, bản th&acirc;n ch&uacute;ng ta cũng cần c&oacute; &yacute; thức bổ sung c&aacute;c loại thực phẩm cung cấp đủ dưỡng chất cho cơ thể. 5 loại gia vị&nbsp; m&agrave;&nbsp;<strong>UniSpice</strong>&nbsp;chia sẻ dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn tăng cường miễn dịch, sức đề kh&aacute;ng tự nhi&ecirc;n, an to&agrave;n.</p>\r\n\r\n<h2><strong>1. Gừng</strong></h2>\r\n\r\n<p><strong>Gừng</strong>&nbsp;l&agrave; một trong những gia vị mang lại nhiều lợi &iacute;ch cho sức khỏe nhất. Từ xa xưa, gừng đ&atilde; được sử dụng như một vị thuốc thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng chữa buồn n&ocirc;n, l&agrave;m sạch răng miệng, giải độc tố, thanh lọc cơ thể. Đặc t&iacute;nh oxy h&oacute;a mạnh c&oacute; trong gừng cũng gi&uacute;p bảo vệ cơ thể, tăng cường khả năng chống lại c&aacute;c vi khuẩn c&oacute; hại.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>D&ugrave;ng gừng tươi hoặc bột gừng để tẩm ướp thực phẩm, n&ecirc;m nếm c&aacute;c m&oacute;n x&agrave;o, rang, kho, chi&ecirc;n. D&ugrave;ng&nbsp;<strong>bột gừng</strong>&nbsp;nguy&ecirc;n chất pha tr&agrave; gừng uống mỗi ng&agrave;y cũng l&agrave; c&aacute;ch gi&uacute;p bảo vệ sức khỏe khỏi bệnh tật hiệu quả.&nbsp;</p>\r\n\r\n<h2><strong>2. Quế</strong></h2>\r\n\r\n<p><img alt=\"bot-que-co-tac-dung-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-que-co-tac-dung-gi.jpg\" style=\"height:683px; width:1024px\" /></p>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/que/\"><strong>Quế</strong></a>&nbsp;l&agrave; loại gia vị đ&oacute;ng vai tr&ograve; quan trọng trong vấn đề bảo vệ sức khỏe to&agrave;n diện. Với y học tự nhi&ecirc;n, quế được sử dụng trong b&agrave;i thuốc trị c&aacute;c bệnh li&ecirc;n quan đến tim mạch. Sử dụng quế thường xuy&ecirc;n cũng ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh trao đổi chất của cơ thể, điều chỉnh lượng đường trong m&aacute;u ổn định. Nhiều nghi&ecirc;n cứu cũng chỉ ra rằng, quế c&oacute; chứa hợp chất chống vi&ecirc;m, tăng cường hệ miễn dịch, sức đề kh&aacute;ng.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Pha&nbsp;<strong>bột quế</strong>&nbsp;c&ugrave;ng c&aacute;c thức uống ấm. Hoặc bạn c&oacute; thể rắc bột quế l&ecirc;n c&aacute;c loại hoa quả, sữa chua, ngũ cốc, b&aacute;nh m&igrave;,&hellip;</p>\r\n\r\n<h2><strong>3. Ớt</strong></h2>\r\n\r\n<p>Với h&agrave;m lượng hợp chất capsaicin cao, ớt l&agrave; gia vị gi&uacute;p bạn giữ ấm cơ thể tự nhi&ecirc;n. D&ugrave;ng ớt với liều lượng hợp l&yacute; cũng g&oacute;p phần giảm nguy cơ tử vong do đột quỵ hoặc đau tim. Loại gia vị cay n&oacute;ng n&agrave;y cũng chứa nhiều vitamin v&agrave; kho&aacute;ng chất, ch&iacute;nh v&igrave; vậy, ớt cũng được sử dụng phổ biến trong y học tự nhi&ecirc;n để bổ sung chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Th&ecirc;m một ch&uacute;t ớt/&nbsp;<strong>bột ớt</strong>&nbsp;khi tẩm ướp thực phẩm, chế biến m&oacute;n ăn hay l&agrave;m nước chấm cũng g&oacute;p phần n&acirc;ng cao sức đề kh&aacute;ng cho cơ thể.</p>\r\n\r\n<h2><strong>4. Nghệ</strong></h2>\r\n\r\n<p><strong><img alt=\"bot-nghe-tri-benh-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-nghe-tri-benh-gi.jpg\" style=\"height:683px; width:1024px\" /></strong></p>\r\n\r\n<p><strong>Bột nghệ</strong>&nbsp;thường c&oacute; m&agrave;u v&agrave;ng cam thường được sử dụng để l&agrave;m m&oacute;n ăn bắt mắt hơn. C&ocirc;ng dụng khổng lồ của nghệ trong y học th&igrave; kh&ocirc;ng c&ograve;n g&igrave; để b&agrave;n c&atilde;i. N&oacute; chứa nhiều hợp chất curcumin, nghệ được sử dụng nhiều để chống vi&ecirc;m tự nhi&ecirc;n, giảm nguy cơ mắc c&aacute;c bệnh về tim mạnh, chống nhiễm tr&ugrave;ng, k&iacute;ch th&iacute;ch cơ thể sản sinh ra chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Sử dụng bột nghệ trong c&aacute;c m&oacute;n x&agrave;o, c&agrave; ri, kho, s&uacute;p. Uống bột nghệ đều đặn mỗi ng&agrave;y vừa tốt cho sức khỏe vừa c&oacute; t&aacute;c dụng l&agrave;m đẹp hữu hiệu.</p>\r\n\r\n<h2><strong>5. Tỏi</strong></h2>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/toi/\"><strong>Tỏi</strong></a>&nbsp;l&agrave; loại gia vị thuốc gi&agrave;u vitamin C, vitamin B6 v&agrave; hợp chất mangan. D&ugrave;ng tỏi thường xuy&ecirc;n sẽ gi&uacute;p cơ thể tăng cường hệ miễn dịch. Tỏi cũng được mệnh danh l&agrave; &ldquo;thuốc kh&aacute;ng sinh&rdquo; tự nhi&ecirc;n, ức chế sự sinh trưởng của c&aacute;c loại vi khuẩn, nấm. Trong th&agrave;nh phần của tỏi c&oacute; đến 90% hợp chất lưu huỳnh c&oacute; t&aacute;c dụng t&iacute;ch cực trong việc hỗ trợ trao đổi chất sắt, chống oxy h&oacute;a v&agrave; giảm cholesterol.&nbsp;</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Tỏi c&oacute; thể ăn sống, pha nước chấm, gia vị cho m&oacute;n ăn, ng&acirc;m giấm hoặc rượu tỏi. Sử dụng tỏi h&agrave;ng ng&agrave;y gi&uacute;p chăm s&oacute;c sức khỏe, chống bệnh tật tự nhi&ecirc;n, an to&agrave;n.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 5 loại gia vị v&ocirc; c&ugrave;ng quen thuộc với ch&uacute;ng ta nhưng kh&ocirc;ng phải ai cũng biết c&ocirc;ng dụng của ch&uacute;ng với sức khỏe. Để ph&ograve;ng chống Covid&nbsp; &ndash; 19, c&aacute;c bạn đừng qu&ecirc;n bổ sung c&aacute;c loại&nbsp;<strong>gia vị</strong>&nbsp;tự nhi&ecirc;n n&agrave;y v&agrave;o chế độ ăn uống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Đọc th&ecirc;m:&nbsp;Tăng cường sức đề kh&aacute;ng giữa m&ugrave;a dịch Covid &ndash; 19</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:26:30');
INSERT INTO `uni_post` (`id`, `name`, `slug`, `category_id`, `desscription`, `meta_desscription`, `meta_title`, `content`, `status`, `order`, `thumbnail`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(21, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie Night4', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie-night4', 7, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and topping', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Mo', '<p>&ldquo;Si&ecirc;u b&atilde;o&rdquo; Covid &ndash; 19 b&ugrave;ng nổ tr&ecirc;n to&agrave;n cầu g&acirc;y ra nhiều thiệt hại nghi&ecirc;m trọng cả về người v&agrave; của. Với những biến chủng mới, tốc độ l&acirc;y lan của virus SARS-CoV-2 ng&agrave;y c&agrave;ng mạnh hơn, nhanh hơn. B&ecirc;n cạnh việc gi&atilde;n c&aacute;ch x&atilde; hội, tu&acirc;n thủ khuyến c&aacute;o 5K, bản th&acirc;n ch&uacute;ng ta cũng cần c&oacute; &yacute; thức bổ sung c&aacute;c loại thực phẩm cung cấp đủ dưỡng chất cho cơ thể. 5 loại gia vị&nbsp; m&agrave;&nbsp;<strong>UniSpice</strong>&nbsp;chia sẻ dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn tăng cường miễn dịch, sức đề kh&aacute;ng tự nhi&ecirc;n, an to&agrave;n.</p>\r\n\r\n<h2><strong>1. Gừng</strong></h2>\r\n\r\n<p><strong>Gừng</strong>&nbsp;l&agrave; một trong những gia vị mang lại nhiều lợi &iacute;ch cho sức khỏe nhất. Từ xa xưa, gừng đ&atilde; được sử dụng như một vị thuốc thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng chữa buồn n&ocirc;n, l&agrave;m sạch răng miệng, giải độc tố, thanh lọc cơ thể. Đặc t&iacute;nh oxy h&oacute;a mạnh c&oacute; trong gừng cũng gi&uacute;p bảo vệ cơ thể, tăng cường khả năng chống lại c&aacute;c vi khuẩn c&oacute; hại.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>D&ugrave;ng gừng tươi hoặc bột gừng để tẩm ướp thực phẩm, n&ecirc;m nếm c&aacute;c m&oacute;n x&agrave;o, rang, kho, chi&ecirc;n. D&ugrave;ng&nbsp;<strong>bột gừng</strong>&nbsp;nguy&ecirc;n chất pha tr&agrave; gừng uống mỗi ng&agrave;y cũng l&agrave; c&aacute;ch gi&uacute;p bảo vệ sức khỏe khỏi bệnh tật hiệu quả.&nbsp;</p>\r\n\r\n<h2><strong>2. Quế</strong></h2>\r\n\r\n<p><img alt=\"bot-que-co-tac-dung-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-que-co-tac-dung-gi.jpg\" style=\"height:683px; width:1024px\" /></p>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/que/\"><strong>Quế</strong></a>&nbsp;l&agrave; loại gia vị đ&oacute;ng vai tr&ograve; quan trọng trong vấn đề bảo vệ sức khỏe to&agrave;n diện. Với y học tự nhi&ecirc;n, quế được sử dụng trong b&agrave;i thuốc trị c&aacute;c bệnh li&ecirc;n quan đến tim mạch. Sử dụng quế thường xuy&ecirc;n cũng ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh trao đổi chất của cơ thể, điều chỉnh lượng đường trong m&aacute;u ổn định. Nhiều nghi&ecirc;n cứu cũng chỉ ra rằng, quế c&oacute; chứa hợp chất chống vi&ecirc;m, tăng cường hệ miễn dịch, sức đề kh&aacute;ng.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Pha&nbsp;<strong>bột quế</strong>&nbsp;c&ugrave;ng c&aacute;c thức uống ấm. Hoặc bạn c&oacute; thể rắc bột quế l&ecirc;n c&aacute;c loại hoa quả, sữa chua, ngũ cốc, b&aacute;nh m&igrave;,&hellip;</p>\r\n\r\n<h2><strong>3. Ớt</strong></h2>\r\n\r\n<p>Với h&agrave;m lượng hợp chất capsaicin cao, ớt l&agrave; gia vị gi&uacute;p bạn giữ ấm cơ thể tự nhi&ecirc;n. D&ugrave;ng ớt với liều lượng hợp l&yacute; cũng g&oacute;p phần giảm nguy cơ tử vong do đột quỵ hoặc đau tim. Loại gia vị cay n&oacute;ng n&agrave;y cũng chứa nhiều vitamin v&agrave; kho&aacute;ng chất, ch&iacute;nh v&igrave; vậy, ớt cũng được sử dụng phổ biến trong y học tự nhi&ecirc;n để bổ sung chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Th&ecirc;m một ch&uacute;t ớt/&nbsp;<strong>bột ớt</strong>&nbsp;khi tẩm ướp thực phẩm, chế biến m&oacute;n ăn hay l&agrave;m nước chấm cũng g&oacute;p phần n&acirc;ng cao sức đề kh&aacute;ng cho cơ thể.</p>\r\n\r\n<h2><strong>4. Nghệ</strong></h2>\r\n\r\n<p><strong><img alt=\"bot-nghe-tri-benh-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-nghe-tri-benh-gi.jpg\" style=\"height:683px; width:1024px\" /></strong></p>\r\n\r\n<p><strong>Bột nghệ</strong>&nbsp;thường c&oacute; m&agrave;u v&agrave;ng cam thường được sử dụng để l&agrave;m m&oacute;n ăn bắt mắt hơn. C&ocirc;ng dụng khổng lồ của nghệ trong y học th&igrave; kh&ocirc;ng c&ograve;n g&igrave; để b&agrave;n c&atilde;i. N&oacute; chứa nhiều hợp chất curcumin, nghệ được sử dụng nhiều để chống vi&ecirc;m tự nhi&ecirc;n, giảm nguy cơ mắc c&aacute;c bệnh về tim mạnh, chống nhiễm tr&ugrave;ng, k&iacute;ch th&iacute;ch cơ thể sản sinh ra chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Sử dụng bột nghệ trong c&aacute;c m&oacute;n x&agrave;o, c&agrave; ri, kho, s&uacute;p. Uống bột nghệ đều đặn mỗi ng&agrave;y vừa tốt cho sức khỏe vừa c&oacute; t&aacute;c dụng l&agrave;m đẹp hữu hiệu.</p>\r\n\r\n<h2><strong>5. Tỏi</strong></h2>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/toi/\"><strong>Tỏi</strong></a>&nbsp;l&agrave; loại gia vị thuốc gi&agrave;u vitamin C, vitamin B6 v&agrave; hợp chất mangan. D&ugrave;ng tỏi thường xuy&ecirc;n sẽ gi&uacute;p cơ thể tăng cường hệ miễn dịch. Tỏi cũng được mệnh danh l&agrave; &ldquo;thuốc kh&aacute;ng sinh&rdquo; tự nhi&ecirc;n, ức chế sự sinh trưởng của c&aacute;c loại vi khuẩn, nấm. Trong th&agrave;nh phần của tỏi c&oacute; đến 90% hợp chất lưu huỳnh c&oacute; t&aacute;c dụng t&iacute;ch cực trong việc hỗ trợ trao đổi chất sắt, chống oxy h&oacute;a v&agrave; giảm cholesterol.&nbsp;</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Tỏi c&oacute; thể ăn sống, pha nước chấm, gia vị cho m&oacute;n ăn, ng&acirc;m giấm hoặc rượu tỏi. Sử dụng tỏi h&agrave;ng ng&agrave;y gi&uacute;p chăm s&oacute;c sức khỏe, chống bệnh tật tự nhi&ecirc;n, an to&agrave;n.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 5 loại gia vị v&ocirc; c&ugrave;ng quen thuộc với ch&uacute;ng ta nhưng kh&ocirc;ng phải ai cũng biết c&ocirc;ng dụng của ch&uacute;ng với sức khỏe. Để ph&ograve;ng chống Covid&nbsp; &ndash; 19, c&aacute;c bạn đừng qu&ecirc;n bổ sung c&aacute;c loại&nbsp;<strong>gia vị</strong>&nbsp;tự nhi&ecirc;n n&agrave;y v&agrave;o chế độ ăn uống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Đọc th&ecirc;m:&nbsp;Tăng cường sức đề kh&aacute;ng giữa m&ugrave;a dịch Covid &ndash; 19</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:26:21'),
(22, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie Night3', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie-night3', 1, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack,', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your', '<h2>Birthday Cake Popcorn</h2>\r\n\r\n<p>No special occasion is required to make this colorful and fun popcorn recipe. Kids of all ages will love this combination of white chocolate, cake batter, and all-natural sprinkles. But unlike a birthday cake, this snack can be enjoyed anywhere, anytime, and the whole-grain goodness of popcorn gives it a satisfying crunch.</p>\r\n\r\n<h3><strong>Birthday Cake Popcorn Ingredients</strong></h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>3 Tbsp&nbsp;Butter</p>\r\n\r\n<p>1/2 cup&nbsp;white chocolate chips or melting wafers</p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Vanilla Extract</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Bob&rsquo;s Red Mill Gluten-Free Vanilla Yellow Cake Mix</a></p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">Color Kitchen Rainbow Sprinkles</a></p>\r\n\r\n<p>Want to know how to make our Birthday Cake Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"birthday cake popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Birthday%20Cake%20Popcorn-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Chili Lime Popcorn</h2>\r\n\r\n<p>Add some zip to snack time with this easy popcorn recipe featuring a simple mixture of chili powder and lime juice. Might we suggest this whole grain, yet sugar-free snack idea for when you wish it were 5 o&rsquo;clock somewhere!</p>\r\n\r\n<h3>Chili Lime Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2&nbsp;cup popcorn kernels</p>\r\n\r\n<p>2 Tbsp lime juice</p>\r\n\r\n<p>1&nbsp;<a href=\"#\">Tbsp Simply Organic Chili Powder Seasoning Blend</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Coarse Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Chili Lime Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Chili Lime Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Chili%20Lime%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nCoconut Curry Popcorn</h2>\r\n\r\n<p>The warm, savory flavor of curry is complemented by the subtle sweetness of coconut in this quick and easy popcorn recipe. The seasoning is a simple mixture of curry powder, coconut oil, coconut flakes, salt and sugar.</p>\r\n\r\n<h3>Coconut Curry Popcorn Ingredients</h3>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>5 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1 Tbsp&nbsp;<a href=\"#\">Frontier Co-op Organic Curry Powder</a>&nbsp;</p>\r\n\r\n<p>1/4 cup&nbsp;<a href=\"#\">coconut flakes</a></p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>1/4 tsp cane sugar</p>\r\n\r\n<p>Want to know how to make our Coconut Curry Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Coconut Curry Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Coconut-Curry-Popcorn-Recipe-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Honey Chipotle Popcorn</h2>\r\n\r\n<p>The sweet and spicy blend of honey and chipotle makes a surprisingly delicious popcorn topping that starts sweet and ends with a warm, smoky bite.</p>\r\n\r\n<h3>Honey Chipotle Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut oil</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/3 cup&nbsp;<a href=\"#\">organic raw honey</a>&nbsp;</p>\r\n\r\n<p>1/4 tsp ground&nbsp;<a href=\"#\">Frontier Co-op Chipotle Powder</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>1/4 tsp&nbsp;<a href=\"#\">Frontier Co-op Sea Salt</a></p>\r\n\r\n<p>Want to know how to make our Honey Chipotle Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Honey Chipotle Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Popcorn-Honey-Chipotle-600x300.jpg\" /><br />\r\n&nbsp;</p>\r\n\r\n<h2>Maple Cinnamon Popcorn</h2>\r\n\r\n<p>This healthy, delicious and aromatic recipe is perfect for cooler weather, as it brings a cozy feeling with its warm, sweet flavor of maple syrup, vanilla and cinnamon. It&rsquo;s a great snack to enjoy at home for movie nights or with a good book. With the simplicity of this recipe, the quality of your ingredients will really make the difference.</p>\r\n\r\n<h3>Maple Cinnamon Popcorn Ingredients</h3>\r\n\r\n<p>2 Tbsp&nbsp;<a href=\"#\">coconut</a>&nbsp;or vegetable oil</p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;<a href=\"#\">maple syrup</a>&nbsp;</p>\r\n\r\n<p>1 tsp&nbsp;<a href=\"#\">Simply Organic Ground Cinnamon</a></p>\r\n\r\n<p>1/2 tsp&nbsp;<a href=\"#\">Simply Organic Pure Vanilla Extract</a></p>\r\n\r\n<p>1 Tbsp Butter</p>\r\n\r\n<p>Want to know how to make our Maple Cinnamon Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Maple Cinnamon Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Maple-Cinnamon-Simply-Organic-Recipe-600x300.jpg\" /></p>\r\n\r\n<h2><br />\r\nPeanut Butter Cup Popcorn</h2>\r\n\r\n<p>The classic combination of chocolate and peanut butter makes a fabulous candy, but it&rsquo;s even better when popcorn is added to the mix. Perfect for parties or snacking with the family, this popcorn recipe makes a fun and unexpected treat that everyone will enjoy.</p>\r\n\r\n<p>Peanut Butter Cup Popcorn Ingredients</p>\r\n\r\n<p>4 Tbsp&nbsp;<a href=\"#\">coconut oil</a></p>\r\n\r\n<p>1/2 cup popcorn kernels</p>\r\n\r\n<p>1/2 cup&nbsp;creamy peanut butter</p>\r\n\r\n<p>1/2 cup chocolate chips (<a href=\"#\">semi-sweet</a>&nbsp;or bittersweet)</p>\r\n\r\n<p>Want to know how to make our Peanut Butter Cup Popcorn recipe?&nbsp;<a href=\"#\">Click here</a>.</p>\r\n\r\n<p><img alt=\"Peanut Butter Cup Popcorn\" src=\"https://www.coopmarket.com/sites/default/files/inline-images/Peanut%20Butter%20Cup%20Popcorn-600x300.jpg\" /></p>\r\n\r\n<h2><strong>Skip The Recipes With Frontier&rsquo;s Premade Salt-Free Popcorn Seasonings</strong></h2>\r\n\r\n<p>With the right ingredients and a little creativity, there&rsquo;s no limit on the healthy combinations you can use to top your popcorn. If you don&rsquo;t want to go the DIY route, you can find delicious, healthy salt-free popcorn seasonings in our online market. Choose from cheesy flavors like&nbsp;<a href=\"#\">Cheddar</a>&nbsp;or&nbsp;<a href=\"#\">Cheddar and Spice</a>&nbsp;or satisfy your cravings with our salt-free&nbsp;<a href=\"#\">Sour Cream &amp; Onion Popcorn Seasoning</a>.</p>\r\n\r\n<p>Remember for your next movie night, ditch the butter and salt and enjoy your popcorn topped with one of our heart-healthy toppings and seasonings.</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:26:12'),
(23, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie Night1', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie-night1', 1, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack,', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie', '<p>&ldquo;Si&ecirc;u b&atilde;o&rdquo; Covid &ndash; 19 b&ugrave;ng nổ tr&ecirc;n to&agrave;n cầu g&acirc;y ra nhiều thiệt hại nghi&ecirc;m trọng cả về người v&agrave; của. Với những biến chủng mới, tốc độ l&acirc;y lan của virus SARS-CoV-2 ng&agrave;y c&agrave;ng mạnh hơn, nhanh hơn. B&ecirc;n cạnh việc gi&atilde;n c&aacute;ch x&atilde; hội, tu&acirc;n thủ khuyến c&aacute;o 5K, bản th&acirc;n ch&uacute;ng ta cũng cần c&oacute; &yacute; thức bổ sung c&aacute;c loại thực phẩm cung cấp đủ dưỡng chất cho cơ thể. 5 loại gia vị&nbsp; m&agrave;&nbsp;<strong>UniSpice</strong>&nbsp;chia sẻ dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn tăng cường miễn dịch, sức đề kh&aacute;ng tự nhi&ecirc;n, an to&agrave;n.</p>\r\n\r\n<h2><strong>1. Gừng</strong></h2>\r\n\r\n<p><strong>Gừng</strong>&nbsp;l&agrave; một trong những gia vị mang lại nhiều lợi &iacute;ch cho sức khỏe nhất. Từ xa xưa, gừng đ&atilde; được sử dụng như một vị thuốc thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng chữa buồn n&ocirc;n, l&agrave;m sạch răng miệng, giải độc tố, thanh lọc cơ thể. Đặc t&iacute;nh oxy h&oacute;a mạnh c&oacute; trong gừng cũng gi&uacute;p bảo vệ cơ thể, tăng cường khả năng chống lại c&aacute;c vi khuẩn c&oacute; hại.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>D&ugrave;ng gừng tươi hoặc bột gừng để tẩm ướp thực phẩm, n&ecirc;m nếm c&aacute;c m&oacute;n x&agrave;o, rang, kho, chi&ecirc;n. D&ugrave;ng&nbsp;<strong>bột gừng</strong>&nbsp;nguy&ecirc;n chất pha tr&agrave; gừng uống mỗi ng&agrave;y cũng l&agrave; c&aacute;ch gi&uacute;p bảo vệ sức khỏe khỏi bệnh tật hiệu quả.&nbsp;</p>\r\n\r\n<h2><strong>2. Quế</strong></h2>\r\n\r\n<p><img alt=\"bot-que-co-tac-dung-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-que-co-tac-dung-gi.jpg\" style=\"height:683px; width:1024px\" /></p>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/que/\"><strong>Quế</strong></a>&nbsp;l&agrave; loại gia vị đ&oacute;ng vai tr&ograve; quan trọng trong vấn đề bảo vệ sức khỏe to&agrave;n diện. Với y học tự nhi&ecirc;n, quế được sử dụng trong b&agrave;i thuốc trị c&aacute;c bệnh li&ecirc;n quan đến tim mạch. Sử dụng quế thường xuy&ecirc;n cũng ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh trao đổi chất của cơ thể, điều chỉnh lượng đường trong m&aacute;u ổn định. Nhiều nghi&ecirc;n cứu cũng chỉ ra rằng, quế c&oacute; chứa hợp chất chống vi&ecirc;m, tăng cường hệ miễn dịch, sức đề kh&aacute;ng.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Pha&nbsp;<strong>bột quế</strong>&nbsp;c&ugrave;ng c&aacute;c thức uống ấm. Hoặc bạn c&oacute; thể rắc bột quế l&ecirc;n c&aacute;c loại hoa quả, sữa chua, ngũ cốc, b&aacute;nh m&igrave;,&hellip;</p>\r\n\r\n<h2><strong>3. Ớt</strong></h2>\r\n\r\n<p>Với h&agrave;m lượng hợp chất capsaicin cao, ớt l&agrave; gia vị gi&uacute;p bạn giữ ấm cơ thể tự nhi&ecirc;n. D&ugrave;ng ớt với liều lượng hợp l&yacute; cũng g&oacute;p phần giảm nguy cơ tử vong do đột quỵ hoặc đau tim. Loại gia vị cay n&oacute;ng n&agrave;y cũng chứa nhiều vitamin v&agrave; kho&aacute;ng chất, ch&iacute;nh v&igrave; vậy, ớt cũng được sử dụng phổ biến trong y học tự nhi&ecirc;n để bổ sung chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Th&ecirc;m một ch&uacute;t ớt/&nbsp;<strong>bột ớt</strong>&nbsp;khi tẩm ướp thực phẩm, chế biến m&oacute;n ăn hay l&agrave;m nước chấm cũng g&oacute;p phần n&acirc;ng cao sức đề kh&aacute;ng cho cơ thể.</p>\r\n\r\n<h2><strong>4. Nghệ</strong></h2>\r\n\r\n<p><strong><img alt=\"bot-nghe-tri-benh-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-nghe-tri-benh-gi.jpg\" style=\"height:683px; width:1024px\" /></strong></p>\r\n\r\n<p><strong>Bột nghệ</strong>&nbsp;thường c&oacute; m&agrave;u v&agrave;ng cam thường được sử dụng để l&agrave;m m&oacute;n ăn bắt mắt hơn. C&ocirc;ng dụng khổng lồ của nghệ trong y học th&igrave; kh&ocirc;ng c&ograve;n g&igrave; để b&agrave;n c&atilde;i. N&oacute; chứa nhiều hợp chất curcumin, nghệ được sử dụng nhiều để chống vi&ecirc;m tự nhi&ecirc;n, giảm nguy cơ mắc c&aacute;c bệnh về tim mạnh, chống nhiễm tr&ugrave;ng, k&iacute;ch th&iacute;ch cơ thể sản sinh ra chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Sử dụng bột nghệ trong c&aacute;c m&oacute;n x&agrave;o, c&agrave; ri, kho, s&uacute;p. Uống bột nghệ đều đặn mỗi ng&agrave;y vừa tốt cho sức khỏe vừa c&oacute; t&aacute;c dụng l&agrave;m đẹp hữu hiệu.</p>\r\n\r\n<h2><strong>5. Tỏi</strong></h2>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/toi/\"><strong>Tỏi</strong></a>&nbsp;l&agrave; loại gia vị thuốc gi&agrave;u vitamin C, vitamin B6 v&agrave; hợp chất mangan. D&ugrave;ng tỏi thường xuy&ecirc;n sẽ gi&uacute;p cơ thể tăng cường hệ miễn dịch. Tỏi cũng được mệnh danh l&agrave; &ldquo;thuốc kh&aacute;ng sinh&rdquo; tự nhi&ecirc;n, ức chế sự sinh trưởng của c&aacute;c loại vi khuẩn, nấm. Trong th&agrave;nh phần của tỏi c&oacute; đến 90% hợp chất lưu huỳnh c&oacute; t&aacute;c dụng t&iacute;ch cực trong việc hỗ trợ trao đổi chất sắt, chống oxy h&oacute;a v&agrave; giảm cholesterol.&nbsp;</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Tỏi c&oacute; thể ăn sống, pha nước chấm, gia vị cho m&oacute;n ăn, ng&acirc;m giấm hoặc rượu tỏi. Sử dụng tỏi h&agrave;ng ng&agrave;y gi&uacute;p chăm s&oacute;c sức khỏe, chống bệnh tật tự nhi&ecirc;n, an to&agrave;n.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 5 loại gia vị v&ocirc; c&ugrave;ng quen thuộc với ch&uacute;ng ta nhưng kh&ocirc;ng phải ai cũng biết c&ocirc;ng dụng của ch&uacute;ng với sức khỏe. Để ph&ograve;ng chống Covid&nbsp; &ndash; 19, c&aacute;c bạn đừng qu&ecirc;n bổ sung c&aacute;c loại&nbsp;<strong>gia vị</strong>&nbsp;tự nhi&ecirc;n n&agrave;y v&agrave;o chế độ ăn uống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Đọc th&ecirc;m:&nbsp;Tăng cường sức đề kh&aacute;ng giữa m&ugrave;a dịch Covid &ndash; 19</p>', 1, NULL, NULL, NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:25:38'),
(24, '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next Movie Night2', '6-healthy-popcorn-seasonings-toppings-perfect-for-your-next-movie-night2', 1, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seasonings and toppings are loaded with butter and salt. Plain popcorn can taste bland, so what can you do instead?', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seas', '6 Healthy Popcorn Seasonings & Toppings Perfect For Your Next M', '<p>&ldquo;Si&ecirc;u b&atilde;o&rdquo; Covid &ndash; 19 b&ugrave;ng nổ tr&ecirc;n to&agrave;n cầu g&acirc;y ra nhiều thiệt hại nghi&ecirc;m trọng cả về người v&agrave; của. Với những biến chủng mới, tốc độ l&acirc;y lan của virus SARS-CoV-2 ng&agrave;y c&agrave;ng mạnh hơn, nhanh hơn. B&ecirc;n cạnh việc gi&atilde;n c&aacute;ch x&atilde; hội, tu&acirc;n thủ khuyến c&aacute;o 5K, bản th&acirc;n ch&uacute;ng ta cũng cần c&oacute; &yacute; thức bổ sung c&aacute;c loại thực phẩm cung cấp đủ dưỡng chất cho cơ thể. 5 loại gia vị&nbsp; m&agrave;&nbsp;<strong>UniSpice</strong>&nbsp;chia sẻ dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn tăng cường miễn dịch, sức đề kh&aacute;ng tự nhi&ecirc;n, an to&agrave;n.</p>\r\n\r\n<h2><strong>1. Gừng</strong></h2>\r\n\r\n<p><strong>Gừng</strong>&nbsp;l&agrave; một trong những gia vị mang lại nhiều lợi &iacute;ch cho sức khỏe nhất. Từ xa xưa, gừng đ&atilde; được sử dụng như một vị thuốc thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng chữa buồn n&ocirc;n, l&agrave;m sạch răng miệng, giải độc tố, thanh lọc cơ thể. Đặc t&iacute;nh oxy h&oacute;a mạnh c&oacute; trong gừng cũng gi&uacute;p bảo vệ cơ thể, tăng cường khả năng chống lại c&aacute;c vi khuẩn c&oacute; hại.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>D&ugrave;ng gừng tươi hoặc bột gừng để tẩm ướp thực phẩm, n&ecirc;m nếm c&aacute;c m&oacute;n x&agrave;o, rang, kho, chi&ecirc;n. D&ugrave;ng&nbsp;<strong>bột gừng</strong>&nbsp;nguy&ecirc;n chất pha tr&agrave; gừng uống mỗi ng&agrave;y cũng l&agrave; c&aacute;ch gi&uacute;p bảo vệ sức khỏe khỏi bệnh tật hiệu quả.&nbsp;</p>\r\n\r\n<h2><strong>2. Quế</strong></h2>\r\n\r\n<p><img alt=\"bot-que-co-tac-dung-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-que-co-tac-dung-gi.jpg\" style=\"height:683px; width:1024px\" /></p>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/que/\"><strong>Quế</strong></a>&nbsp;l&agrave; loại gia vị đ&oacute;ng vai tr&ograve; quan trọng trong vấn đề bảo vệ sức khỏe to&agrave;n diện. Với y học tự nhi&ecirc;n, quế được sử dụng trong b&agrave;i thuốc trị c&aacute;c bệnh li&ecirc;n quan đến tim mạch. Sử dụng quế thường xuy&ecirc;n cũng ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh trao đổi chất của cơ thể, điều chỉnh lượng đường trong m&aacute;u ổn định. Nhiều nghi&ecirc;n cứu cũng chỉ ra rằng, quế c&oacute; chứa hợp chất chống vi&ecirc;m, tăng cường hệ miễn dịch, sức đề kh&aacute;ng.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Pha&nbsp;<strong>bột quế</strong>&nbsp;c&ugrave;ng c&aacute;c thức uống ấm. Hoặc bạn c&oacute; thể rắc bột quế l&ecirc;n c&aacute;c loại hoa quả, sữa chua, ngũ cốc, b&aacute;nh m&igrave;,&hellip;</p>\r\n\r\n<h2><strong>3. Ớt</strong></h2>\r\n\r\n<p>Với h&agrave;m lượng hợp chất capsaicin cao, ớt l&agrave; gia vị gi&uacute;p bạn giữ ấm cơ thể tự nhi&ecirc;n. D&ugrave;ng ớt với liều lượng hợp l&yacute; cũng g&oacute;p phần giảm nguy cơ tử vong do đột quỵ hoặc đau tim. Loại gia vị cay n&oacute;ng n&agrave;y cũng chứa nhiều vitamin v&agrave; kho&aacute;ng chất, ch&iacute;nh v&igrave; vậy, ớt cũng được sử dụng phổ biến trong y học tự nhi&ecirc;n để bổ sung chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Th&ecirc;m một ch&uacute;t ớt/&nbsp;<strong>bột ớt</strong>&nbsp;khi tẩm ướp thực phẩm, chế biến m&oacute;n ăn hay l&agrave;m nước chấm cũng g&oacute;p phần n&acirc;ng cao sức đề kh&aacute;ng cho cơ thể.</p>\r\n\r\n<h2><strong>4. Nghệ</strong></h2>\r\n\r\n<p><strong><img alt=\"bot-nghe-tri-benh-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-nghe-tri-benh-gi.jpg\" style=\"height:683px; width:1024px\" /></strong></p>\r\n\r\n<p><strong>Bột nghệ</strong>&nbsp;thường c&oacute; m&agrave;u v&agrave;ng cam thường được sử dụng để l&agrave;m m&oacute;n ăn bắt mắt hơn. C&ocirc;ng dụng khổng lồ của nghệ trong y học th&igrave; kh&ocirc;ng c&ograve;n g&igrave; để b&agrave;n c&atilde;i. N&oacute; chứa nhiều hợp chất curcumin, nghệ được sử dụng nhiều để chống vi&ecirc;m tự nhi&ecirc;n, giảm nguy cơ mắc c&aacute;c bệnh về tim mạnh, chống nhiễm tr&ugrave;ng, k&iacute;ch th&iacute;ch cơ thể sản sinh ra chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Sử dụng bột nghệ trong c&aacute;c m&oacute;n x&agrave;o, c&agrave; ri, kho, s&uacute;p. Uống bột nghệ đều đặn mỗi ng&agrave;y vừa tốt cho sức khỏe vừa c&oacute; t&aacute;c dụng l&agrave;m đẹp hữu hiệu.</p>\r\n\r\n<h2><strong>5. Tỏi</strong></h2>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/toi/\"><strong>Tỏi</strong></a>&nbsp;l&agrave; loại gia vị thuốc gi&agrave;u vitamin C, vitamin B6 v&agrave; hợp chất mangan. D&ugrave;ng tỏi thường xuy&ecirc;n sẽ gi&uacute;p cơ thể tăng cường hệ miễn dịch. Tỏi cũng được mệnh danh l&agrave; &ldquo;thuốc kh&aacute;ng sinh&rdquo; tự nhi&ecirc;n, ức chế sự sinh trưởng của c&aacute;c loại vi khuẩn, nấm. Trong th&agrave;nh phần của tỏi c&oacute; đến 90% hợp chất lưu huỳnh c&oacute; t&aacute;c dụng t&iacute;ch cực trong việc hỗ trợ trao đổi chất sắt, chống oxy h&oacute;a v&agrave; giảm cholesterol.&nbsp;</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Tỏi c&oacute; thể ăn sống, pha nước chấm, gia vị cho m&oacute;n ăn, ng&acirc;m giấm hoặc rượu tỏi. Sử dụng tỏi h&agrave;ng ng&agrave;y gi&uacute;p chăm s&oacute;c sức khỏe, chống bệnh tật tự nhi&ecirc;n, an to&agrave;n.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 5 loại gia vị v&ocirc; c&ugrave;ng quen thuộc với ch&uacute;ng ta nhưng kh&ocirc;ng phải ai cũng biết c&ocirc;ng dụng của ch&uacute;ng với sức khỏe. Để ph&ograve;ng chống Covid&nbsp; &ndash; 19, c&aacute;c bạn đừng qu&ecirc;n bổ sung c&aacute;c loại&nbsp;<strong>gia vị</strong>&nbsp;tự nhi&ecirc;n n&agrave;y v&agrave;o chế độ ăn uống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Đọc th&ecirc;m:&nbsp;Tăng cường sức đề kh&aacute;ng giữa m&ugrave;a dịch Covid &ndash; 19</p>', 1, NULL, 'anh-blog-1628754919.jpg', NULL, NULL, '2021-07-15 20:26:49', '2021-08-19 01:25:30'),
(25, 'Popcorn Seasonings & Toppings Perfect For Your Next M', 'popcorn-seasonings-toppings-perfect-for-your-next-m', 2, 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seas', 'Nothing says movie night like a bowl of fresh-popped popcorn. While popcorn can make a light, healthy snack, most popcorn seas', 'Popcorn Seasonings & Toppings Perfect For Your Next M', '<p>&ldquo;Si&ecirc;u b&atilde;o&rdquo; Covid &ndash; 19 b&ugrave;ng nổ tr&ecirc;n to&agrave;n cầu g&acirc;y ra nhiều thiệt hại nghi&ecirc;m trọng cả về người v&agrave; của. Với những biến chủng mới, tốc độ l&acirc;y lan của virus SARS-CoV-2 ng&agrave;y c&agrave;ng mạnh hơn, nhanh hơn. B&ecirc;n cạnh việc gi&atilde;n c&aacute;ch x&atilde; hội, tu&acirc;n thủ khuyến c&aacute;o 5K, bản th&acirc;n ch&uacute;ng ta cũng cần c&oacute; &yacute; thức bổ sung c&aacute;c loại thực phẩm cung cấp đủ dưỡng chất cho cơ thể. 5 loại gia vị&nbsp; m&agrave;&nbsp;<strong>UniSpice</strong>&nbsp;chia sẻ dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn tăng cường miễn dịch, sức đề kh&aacute;ng tự nhi&ecirc;n, an to&agrave;n.</p>\r\n\r\n<h2><strong>1. Gừng</strong></h2>\r\n\r\n<p><strong>Gừng</strong>&nbsp;l&agrave; một trong những gia vị mang lại nhiều lợi &iacute;ch cho sức khỏe nhất. Từ xa xưa, gừng đ&atilde; được sử dụng như một vị thuốc thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng chữa buồn n&ocirc;n, l&agrave;m sạch răng miệng, giải độc tố, thanh lọc cơ thể. Đặc t&iacute;nh oxy h&oacute;a mạnh c&oacute; trong gừng cũng gi&uacute;p bảo vệ cơ thể, tăng cường khả năng chống lại c&aacute;c vi khuẩn c&oacute; hại.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>D&ugrave;ng gừng tươi hoặc bột gừng để tẩm ướp thực phẩm, n&ecirc;m nếm c&aacute;c m&oacute;n x&agrave;o, rang, kho, chi&ecirc;n. D&ugrave;ng&nbsp;<strong>bột gừng</strong>&nbsp;nguy&ecirc;n chất pha tr&agrave; gừng uống mỗi ng&agrave;y cũng l&agrave; c&aacute;ch gi&uacute;p bảo vệ sức khỏe khỏi bệnh tật hiệu quả.&nbsp;</p>\r\n\r\n<h2><strong>2. Quế</strong></h2>\r\n\r\n<p><img alt=\"bot-que-co-tac-dung-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-que-co-tac-dung-gi.jpg\" style=\"height:683px; width:1024px\" /></p>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/que/\"><strong>Quế</strong></a>&nbsp;l&agrave; loại gia vị đ&oacute;ng vai tr&ograve; quan trọng trong vấn đề bảo vệ sức khỏe to&agrave;n diện. Với y học tự nhi&ecirc;n, quế được sử dụng trong b&agrave;i thuốc trị c&aacute;c bệnh li&ecirc;n quan đến tim mạch. Sử dụng quế thường xuy&ecirc;n cũng ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh trao đổi chất của cơ thể, điều chỉnh lượng đường trong m&aacute;u ổn định. Nhiều nghi&ecirc;n cứu cũng chỉ ra rằng, quế c&oacute; chứa hợp chất chống vi&ecirc;m, tăng cường hệ miễn dịch, sức đề kh&aacute;ng.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Pha&nbsp;<strong>bột quế</strong>&nbsp;c&ugrave;ng c&aacute;c thức uống ấm. Hoặc bạn c&oacute; thể rắc bột quế l&ecirc;n c&aacute;c loại hoa quả, sữa chua, ngũ cốc, b&aacute;nh m&igrave;,&hellip;</p>\r\n\r\n<h2><strong>3. Ớt</strong></h2>\r\n\r\n<p>Với h&agrave;m lượng hợp chất capsaicin cao, ớt l&agrave; gia vị gi&uacute;p bạn giữ ấm cơ thể tự nhi&ecirc;n. D&ugrave;ng ớt với liều lượng hợp l&yacute; cũng g&oacute;p phần giảm nguy cơ tử vong do đột quỵ hoặc đau tim. Loại gia vị cay n&oacute;ng n&agrave;y cũng chứa nhiều vitamin v&agrave; kho&aacute;ng chất, ch&iacute;nh v&igrave; vậy, ớt cũng được sử dụng phổ biến trong y học tự nhi&ecirc;n để bổ sung chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Th&ecirc;m một ch&uacute;t ớt/&nbsp;<strong>bột ớt</strong>&nbsp;khi tẩm ướp thực phẩm, chế biến m&oacute;n ăn hay l&agrave;m nước chấm cũng g&oacute;p phần n&acirc;ng cao sức đề kh&aacute;ng cho cơ thể.</p>\r\n\r\n<h2><strong>4. Nghệ</strong></h2>\r\n\r\n<p><strong><img alt=\"bot-nghe-tri-benh-gi\" src=\"https://unispice.vn/wp-content/uploads/2021/05/bot-nghe-tri-benh-gi.jpg\" style=\"height:683px; width:1024px\" /></strong></p>\r\n\r\n<p><strong>Bột nghệ</strong>&nbsp;thường c&oacute; m&agrave;u v&agrave;ng cam thường được sử dụng để l&agrave;m m&oacute;n ăn bắt mắt hơn. C&ocirc;ng dụng khổng lồ của nghệ trong y học th&igrave; kh&ocirc;ng c&ograve;n g&igrave; để b&agrave;n c&atilde;i. N&oacute; chứa nhiều hợp chất curcumin, nghệ được sử dụng nhiều để chống vi&ecirc;m tự nhi&ecirc;n, giảm nguy cơ mắc c&aacute;c bệnh về tim mạnh, chống nhiễm tr&ugrave;ng, k&iacute;ch th&iacute;ch cơ thể sản sinh ra chất chống oxy h&oacute;a.</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Sử dụng bột nghệ trong c&aacute;c m&oacute;n x&agrave;o, c&agrave; ri, kho, s&uacute;p. Uống bột nghệ đều đặn mỗi ng&agrave;y vừa tốt cho sức khỏe vừa c&oacute; t&aacute;c dụng l&agrave;m đẹp hữu hiệu.</p>\r\n\r\n<h2><strong>5. Tỏi</strong></h2>\r\n\r\n<p><a href=\"https://unispice.vn/kham-pha/toi/\"><strong>Tỏi</strong></a>&nbsp;l&agrave; loại gia vị thuốc gi&agrave;u vitamin C, vitamin B6 v&agrave; hợp chất mangan. D&ugrave;ng tỏi thường xuy&ecirc;n sẽ gi&uacute;p cơ thể tăng cường hệ miễn dịch. Tỏi cũng được mệnh danh l&agrave; &ldquo;thuốc kh&aacute;ng sinh&rdquo; tự nhi&ecirc;n, ức chế sự sinh trưởng của c&aacute;c loại vi khuẩn, nấm. Trong th&agrave;nh phần của tỏi c&oacute; đến 90% hợp chất lưu huỳnh c&oacute; t&aacute;c dụng t&iacute;ch cực trong việc hỗ trợ trao đổi chất sắt, chống oxy h&oacute;a v&agrave; giảm cholesterol.&nbsp;</p>\r\n\r\n<p><strong>Sử dụng:&nbsp;</strong>Tỏi c&oacute; thể ăn sống, pha nước chấm, gia vị cho m&oacute;n ăn, ng&acirc;m giấm hoặc rượu tỏi. Sử dụng tỏi h&agrave;ng ng&agrave;y gi&uacute;p chăm s&oacute;c sức khỏe, chống bệnh tật tự nhi&ecirc;n, an to&agrave;n.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; 5 loại gia vị v&ocirc; c&ugrave;ng quen thuộc với ch&uacute;ng ta nhưng kh&ocirc;ng phải ai cũng biết c&ocirc;ng dụng của ch&uacute;ng với sức khỏe. Để ph&ograve;ng chống Covid&nbsp; &ndash; 19, c&aacute;c bạn đừng qu&ecirc;n bổ sung c&aacute;c loại&nbsp;<strong>gia vị</strong>&nbsp;tự nhi&ecirc;n n&agrave;y v&agrave;o chế độ ăn uống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Đọc th&ecirc;m:&nbsp;Tăng cường sức đề kh&aacute;ng giữa m&ugrave;a dịch Covid &ndash; 19</p>', 1, NULL, 'anh-blog-1-1628763277.jpg', NULL, NULL, '2021-08-12 03:14:40', '2021-08-19 01:40:05'),
(26, 'Chính sách giao hàng', 'chinh-sach-giao-hang', 9, 'Chính sách giao hàng Chính sách giao hàng Chính sách giao hàng Chính sách giao hàng Chính sách giao hàng', 'Chính sách giao hàng Chính sách giao hàng Chính sách giao hàng Chính sách giao hàng Chính sách giao hàng', 'Chính sách giao hàng Chính sách giao hàng Chính sách giao hàng', '<p>Ch&iacute;nh s&aacute;ch giao h&agrave;ng&nbsp;Ch&iacute;nh s&aacute;ch giao h&agrave;ng Ch&iacute;nh s&aacute;ch giao h&agrave;ng&nbsp;Ch&iacute;nh s&aacute;ch giao h&agrave;ng&nbsp;Ch&iacute;nh s&aacute;ch giao h&agrave;ng&nbsp;Ch&iacute;nh s&aacute;ch giao h&agrave;ng</p>', 0, NULL, 'khuyen-mai-1629361512.jpg', NULL, NULL, '2021-08-19 01:25:16', NULL),
(27, 'Chính sách đổi trả', 'chinh-sach-doi-tra', 9, 'Chính sách đổi trả Chính sách đổi trả Chính sách đổi trả Chính sách đổi trả Chính sách đổi trả Chính sách đổi trả', 'Chính sách đổi trả Chính sách đổi trả Chính sách đổi trả Chính sách đổi trả Chính sách đổi trả Chính sách đổi trả', 'Chính sách đổi trả Chính sách đổi trả Chính sách đổi trả', '<p>Ch&iacute;nh s&aacute;ch đổi trả&nbsp;Ch&iacute;nh s&aacute;ch đổi trả&nbsp;Ch&iacute;nh s&aacute;ch đổi trảCh&iacute;nh s&aacute;ch đổi trảCh&iacute;nh s&aacute;ch đổi trảCh&iacute;nh s&aacute;ch đổi trả</p>', 0, NULL, NULL, NULL, NULL, '2021-08-19 01:35:31', NULL),
(28, 'Hướng dẫn mua hàng', 'huong-dan-mua-hang', 9, 'Hướng dẫn mua hàng Hướng dẫn mua hàng Hướng dẫn mua hàng Hướng dẫn mua hàng Hướng dẫn mua hàng', 'Hướng dẫn mua hàng Hướng dẫn mua hàng Hướng dẫn mua hàng Hướng dẫn mua hàng Hướng dẫn mua hàng Hướng dẫn mua hàng', 'Hướng dẫn mua hàng Hướng dẫn mua hàng Hướng dẫn mua hàng', '<p>Hướng dẫn mua h&agrave;ng&nbsp;Hướng dẫn mua h&agrave;ng&nbsp;Hướng dẫn mua h&agrave;ng&nbsp;Hướng dẫn mua h&agrave;ng&nbsp;Hướng dẫn mua h&agrave;ng&nbsp;Hướng dẫn mua h&agrave;ng&nbsp;Hướng dẫn mua h&agrave;ng&nbsp;Hướng dẫn mua h&agrave;ng</p>', 0, NULL, NULL, NULL, NULL, '2021-08-19 01:41:19', '2021-08-19 01:44:17'),
(29, 'Quy chế hoạt động', 'quy-che-hoat-dong', 9, 'Quy chế hoạt động Quy chế hoạt động Quy chế hoạt động Quy chế hoạt động Quy chế hoạt động Quy chế hoạt động', 'Quy chế hoạt động Quy chế hoạt động Quy chế hoạt động Quy chế hoạt động Quy chế hoạt động Quy chế hoạt động', 'Quy chế hoạt động Quy chế hoạt động Quy chế hoạt động', '<p>Quy chế hoạt động&nbsp;Quy chế hoạt động&nbsp;Quy chế hoạt động&nbsp;Quy chế hoạt động v&nbsp;Quy chế hoạt động&nbsp;Quy chế hoạt động&nbsp;Quy chế hoạt động&nbsp;Quy chế hoạt động</p>', 0, NULL, NULL, NULL, NULL, '2021-08-19 01:48:54', NULL),
(30, 'Chính sách bảo mật thanh toán', 'chinh-sach-bao-mat-thanh-toan', 9, 'Chính sách bảo mật thanh toán Chính sách bảo mật thanh toán Chính sách bảo mật thanh toán Chính sách bảo mật thanh toán', 'Chính sách bảo mật thanh toán Chính sách bảo mật thanh toán Chính sách bảo mật thanh toán Chính sách bảo mật thanh toán', 'Chính sách bảo mật thanh toán Chính sách bảo mật thanh toán', '<p>Ch&iacute;nh s&aacute;ch bảo mật thanh to&aacute;n&nbsp;Ch&iacute;nh s&aacute;ch bảo mật thanh to&aacute;n&nbsp;Ch&iacute;nh s&aacute;ch bảo mật thanh to&aacute;n&nbsp;Ch&iacute;nh s&aacute;ch bảo mật thanh to&aacute;n&nbsp;Ch&iacute;nh s&aacute;ch bảo mật thanh to&aacute;n&nbsp;Ch&iacute;nh s&aacute;ch bảo mật thanh to&aacute;n</p>', 0, NULL, NULL, NULL, NULL, '2021-08-19 01:49:53', NULL),
(31, 'Chính sách bảo mật thông tin cá nhân', 'chinh-sach-bao-mat-thong-tin-ca-nhan', 9, 'Chính sách bảo mật thông tin cá nhân Chính sách bảo mật thông tin cá nhân Chính sách bảo mật thông tin cá nhân', 'Chính sách bảo mật thông tin cá nhân Chính sách bảo mật thông tin cá nhân Chính sách bảo mật thông tin cá nhân', 'Chính sách bảo mật thông tin cá nhân Chính sách bảo mật thông tin', '<p>Ch&iacute;nh s&aacute;ch bảo mật th&ocirc;ng tin c&aacute; nh&acirc;n&nbsp;Ch&iacute;nh s&aacute;ch bảo mật th&ocirc;ng tin c&aacute; nh&acirc;n&nbsp;Ch&iacute;nh s&aacute;ch bảo mật th&ocirc;ng tin c&aacute; nh&acirc;n&nbsp;Ch&iacute;nh s&aacute;ch bảo mật th&ocirc;ng tin c&aacute; nh&acirc;n&nbsp;Ch&iacute;nh s&aacute;ch bảo mật th&ocirc;ng tin c&aacute; nh&acirc;n</p>', 0, NULL, NULL, NULL, NULL, '2021-08-19 01:53:31', '2021-08-19 01:54:55'),
(32, 'Chính sách giải quyết khiếu nại', 'chinh-sach-giai-quyet-khieu-nai', 9, 'Chính sách giải quyết khiếu nại Chính sách giải quyết khiếu nại Chính sách giải quyết khiếu nại Chính sách giải quyết khiếu nại', 'Chính sách giải quyết khiếu nại Chính sách giải quyết khiếu nại Chính sách giải quyết khiếu nại Chính sách giải quyết khiếu nại', 'Chính sách giải quyết khiếu nại Chính sách giải quyết khiếu nại', '<p>Ch&iacute;nh s&aacute;ch giải quyết khiếu nại&nbsp;Ch&iacute;nh s&aacute;ch giải quyết khiếu nại&nbsp;Ch&iacute;nh s&aacute;ch giải quyết khiếu nại&nbsp;Ch&iacute;nh s&aacute;ch giải quyết khiếu nại&nbsp;</p>', 0, NULL, NULL, NULL, NULL, '2021-08-19 01:54:49', NULL),
(33, 'Điều khoản sử dụng', 'dieu-khoan-su-dung', 9, 'Điều khoản sử dụng Điều khoản sử dụng Điều khoản sử dụng Điều khoản sử dụng Điều khoản sử dụng Điều khoản sử dụng', 'Điều khoản sử dụng Điều khoản sử dụng Điều khoản sử dụng Điều khoản sử dụng Điều khoản sử dụng Điều khoản sử dụng', 'Điều khoản sử dụng Điều khoản sử dụng Điều khoản sử dụng', '<p>Điều khoản sử dụng&nbsp;Điều khoản sử dụng&nbsp;Điều khoản sử dụng&nbsp;Điều khoản sử dụng</p>', 0, NULL, NULL, NULL, NULL, '2021-08-19 02:01:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uni_post_category`
--

CREATE TABLE `uni_post_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_more` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `order` int(11) DEFAULT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` timestamp NULL DEFAULT NULL,
  `updated_by` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_post_category`
--

INSERT INTO `uni_post_category` (`id`, `name`, `slug`, `banner`, `desscription`, `meta_desscription`, `meta_title`, `meta_keyword`, `content`, `content_more`, `status`, `parent_id`, `order`, `thumbnail`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Gia vị hoàn chỉnh', 'gia-vi-hoan-chinh', 'caffine-free-workout-blog-homepage-1626403390.jpg', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu.', 'Gia vị hoàn chỉnh', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, 1, 0, 0, 'icon-baby-and-kids-1626403385.jpg', NULL, NULL, '2021-07-15 19:43:10', NULL),
(2, 'Khuyến mãi', 'khuyen-mai', 'caffine-free-workout-blog-homepage-1626403390.jpg', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu.', 'Khuyến mãi', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, 1, 0, 0, 'icon-baby-and-kids-1626403385.jpg', NULL, NULL, '2021-07-15 19:43:10', '2021-07-15 20:16:05'),
(3, 'Gia vị quà tặng', 'gia-vi-qua-tang', 'caffine-free-workout-blog-homepage-1626403390.jpg', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu.', 'Gia vị quà tặng', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, 1, 0, 0, 'icon-baby-and-kids-1626403385.jpg', NULL, NULL, '2021-07-15 19:43:10', '2021-07-15 20:15:54'),
(4, 'Gia vị tự nhiên', 'gia-vi-tu-nhien', 'caffine-free-workout-blog-homepage-1626403390.jpg', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu.', 'Gia vị tự nhiên', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, 1, 0, 0, 'icon-baby-and-kids-1626403385.jpg', NULL, NULL, '2021-07-15 19:43:10', '2021-07-15 20:15:44'),
(5, 'Sản phẩm mới', 'san-pham-moi', 'caffine-free-workout-blog-homepage-1626403390.jpg', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu.', 'Sản phẩm mới', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, 1, 0, 0, 'icon-baby-and-kids-1626403385.jpg', NULL, NULL, '2021-07-15 19:43:10', '2021-07-15 20:15:32'),
(6, 'Gia vị tẩm ướp & bột BBQ', 'gia-vi-tam-uop-bot-bbq', 'caffine-free-workout-blog-homepage-1626403390.jpg', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu.', 'Gia vị tẩm ướp & bột BBQ', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, 1, 0, 0, 'icon-baby-and-kids-1626403385.jpg', NULL, NULL, '2021-07-15 19:43:10', '2021-07-15 20:15:21'),
(7, 'Gia vị + muối', 'gia-vi-muoi', 'caffine-free-workout-blog-homepage-1626403390.jpg', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu.', 'Gia vị + muối  được tạo nên từ nhiều loại gia vị, dùng để', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, 1, 0, 0, 'categoty-blog-1628762838.jpg', NULL, '2021-08-12 03:07:25', '2021-07-15 19:43:10', '2021-08-12 03:07:25'),
(9, 'Thỏa thuận sử dụng', 'thoa-thuan-su-dung', 'gia-vi-hoan-chinh-1629452136.jpg', 'Thỏa thuận sử dụng Thỏa thuận sử dụng Thỏa thuận sử dụng Thỏa thuận sử dụng Thỏa thuận sử dụng Thỏa thuận sử dụng Thỏa thuận sử dụng', 'Thỏa thuận sử dụng Thỏa thuận sử dụng Thỏa thuận sử dụng Thỏa thuận sử dụng Thỏa thuận sử dụng Thỏa thuận sử dụng Thỏa thuận sử dụng', 'Thỏa thuận sử dụng Thỏa thuận sử dụng Thỏa thuận sử dụng', NULL, 'Thỏa thuận sử dụng Thỏa thuận sử dụng Thỏa thuận sử dụng', NULL, 1, 0, 0, 'gia-vi-hoan-chinh-1629452746.jpg', '2021-08-19 01:22:38', '2021-08-20 02:45:48', '2021-08-19 01:22:38', '2021-08-20 02:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `uni_product`
--

CREATE TABLE `uni_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_hot` tinyint(4) NOT NULL DEFAULT 0,
  `is_feauture` tinyint(4) NOT NULL DEFAULT 0,
  `order` int(11) DEFAULT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box_thumnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `album` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_product`
--

INSERT INTO `uni_product` (`id`, `name`, `slug`, `desscription`, `meta_desscription`, `meta_title`, `meta_keyword`, `content`, `qty`, `status`, `is_hot`, `is_feauture`, `order`, `thumbnail`, `box_thumnail`, `album`, `created_at`, `updated_at`) VALUES
(1, 'Sản phẩm 01', 'san-pham-01', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 01.', 'A Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 01.', 'ASản phẩm 011 ASản phẩm 011 ASản phẩm 011 ASản phẩm 011', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<table id=\"product-attribute-specs-table\">\r\n	<caption>More Information</caption>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Ingredients</th>\r\n			<td>Spices, Salt, Garlic, Paprika, Onion, Honey powder (Sugar, honey), Natural flavor, Contains 2% or less of Annatto seed.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Recommended Applications</th>\r\n			<td>Adobo Seasoning is a perfect addition to any dish, vegetables, casseroles, soups, or even added to meats before cooking.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Basic Preparation</th>\r\n			<td>Ready to use as is, no preparation is necessary.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Product Style</th>\r\n			<td>Powder</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Cuisine</th>\r\n			<td>Filipino, Latin American, Mexican, South American, Spanish</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Shelf Life</th>\r\n			<td>2 years</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Handling / Storage</th>\r\n			<td>To be stored in a dry, cool place.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Country of Origin</th>\r\n			<td>United States</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Dietary Preferences</th>\r\n			<td>All Natural, Gluten-Free, Kosher Parve, Non-GMO</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Allergen Information</th>\r\n			<td>None Specified</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 122, 1, 0, 0, 0, 'bot-nhuc-dau-khau-lo-120g-03-1627698578.png', NULL, '[\"bot-me-lo-120g-04-1627698581.png\",\"bot-nghe-lo-90g-1627698581.png\"]', '2021-07-13 23:47:08', '2021-09-06 10:59:39'),
(2, 'Sản phẩm 02', 'san-pham-02', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sản phẩm 02 mới nhât hiện có trên thị trường tiêu dùng', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<table id=\"product-attribute-specs-table\">\r\n	<caption>More Information</caption>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Ingredients</th>\r\n			<td>Spices, Salt, Garlic, Paprika, Onion, Honey powder (Sugar, honey), Natural flavor, Contains 2% or less of Annatto seed.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Recommended Applications</th>\r\n			<td>Adobo Seasoning is a perfect addition to any dish, vegetables, casseroles, soups, or even added to meats before cooking.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Basic Preparation</th>\r\n			<td>Ready to use as is, no preparation is necessary.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Product Style</th>\r\n			<td>Powder</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Cuisine</th>\r\n			<td>Filipino, Latin American, Mexican, South American, Spanish</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Shelf Life</th>\r\n			<td>2 years</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Handling / Storage</th>\r\n			<td>To be stored in a dry, cool place.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Country of Origin</th>\r\n			<td>United States</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Dietary Preferences</th>\r\n			<td>All Natural, Gluten-Free, Kosher Parve, Non-GMO</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Allergen Information</th>\r\n			<td>None Specified</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 1000, 1, 0, 0, 0, 'bot-me-lo-120g-04-1627698552.png', NULL, '[\"bot-nhuc-dau-khau-lo-120g-03-1627698556.png\",\"bot-nghe-lo-90g-1627698556.png\"]', '2021-07-13 23:45:06', '2021-08-10 19:49:12'),
(3, 'Sản phẩm 03', 'san-pham-03', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sản phẩm 03 mới nhất thị trường tiêu dùng hiện nay', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<table id=\"product-attribute-specs-table\">\r\n	<caption>More Information</caption>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Ingredients</th>\r\n			<td>Spices, Salt, Garlic, Paprika, Onion, Honey powder (Sugar, honey), Natural flavor, Contains 2% or less of Annatto seed.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Recommended Applications</th>\r\n			<td>Adobo Seasoning is a perfect addition to any dish, vegetables, casseroles, soups, or even added to meats before cooking.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Basic Preparation</th>\r\n			<td>Ready to use as is, no preparation is necessary.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Product Style</th>\r\n			<td>Powder</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Cuisine</th>\r\n			<td>Filipino, Latin American, Mexican, South American, Spanish</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Shelf Life</th>\r\n			<td>2 years</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Handling / Storage</th>\r\n			<td>To be stored in a dry, cool place.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Country of Origin</th>\r\n			<td>United States</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Dietary Preferences</th>\r\n			<td>All Natural, Gluten-Free, Kosher Parve, Non-GMO</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Allergen Information</th>\r\n			<td>None Specified</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 1000, 1, 0, 0, 0, 'bot-nghe-lo-90g-1627698524.png', NULL, '[\"bot-nhuc-dau-khau-lo-120g-03-1627698527.png\",\"bot-me-lo-120g-04-1627698527.png\"]', '2021-07-13 03:29:28', '2021-08-19 02:48:28'),
(4, 'Sản phẩm 04', 'san-pham-04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sản phẩm 04 mới nhất thị trường tiêu dùng hiện nay', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<table id=\"product-attribute-specs-table\">\r\n	<caption>More Information</caption>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Ingredients</th>\r\n			<td>Spices, Salt, Garlic, Paprika, Onion, Honey powder (Sugar, honey), Natural flavor, Contains 2% or less of Annatto seed.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Recommended Applications</th>\r\n			<td>Adobo Seasoning is a perfect addition to any dish, vegetables, casseroles, soups, or even added to meats before cooking.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Basic Preparation</th>\r\n			<td>Ready to use as is, no preparation is necessary.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Product Style</th>\r\n			<td>Powder</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Cuisine</th>\r\n			<td>Filipino, Latin American, Mexican, South American, Spanish</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Shelf Life</th>\r\n			<td>2 years</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Handling / Storage</th>\r\n			<td>To be stored in a dry, cool place.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Country of Origin</th>\r\n			<td>United States</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Dietary Preferences</th>\r\n			<td>All Natural, Gluten-Free, Kosher Parve, Non-GMO</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Allergen Information</th>\r\n			<td>None Specified</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 0, 1, 0, 0, 0, 'bot-nghe-lo-cccccc-1627708706.png', NULL, '[\"bot-me-lo-120g-04-1627708366.png\",\"bot-nghe-lo-90g-1627708366.png\"]', '2021-07-13 03:29:28', '2021-08-10 19:50:43'),
(5, 'Sản phẩm 05', 'san-pham-05', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sản phẩm 05 mới nhất thị trường tiêu dùng hiện nay nha', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<table id=\"product-attribute-specs-table\">\r\n	<caption>More Information</caption>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Ingredients</th>\r\n			<td>Spices, Salt, Garlic, Paprika, Onion, Honey powder (Sugar, honey), Natural flavor, Contains 2% or less of Annatto seed.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Recommended Applications</th>\r\n			<td>Adobo Seasoning is a perfect addition to any dish, vegetables, casseroles, soups, or even added to meats before cooking.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Basic Preparation</th>\r\n			<td>Ready to use as is, no preparation is necessary.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Product Style</th>\r\n			<td>Powder</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Cuisine</th>\r\n			<td>Filipino, Latin American, Mexican, South American, Spanish</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Shelf Life</th>\r\n			<td>2 years</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Handling / Storage</th>\r\n			<td>To be stored in a dry, cool place.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Country of Origin</th>\r\n			<td>United States</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Dietary Preferences</th>\r\n			<td>All Natural, Gluten-Free, Kosher Parve, Non-GMO</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Allergen Information</th>\r\n			<td>None Specified</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 0, 1, 0, 0, 0, 'bot-nhuc-dau-khau-lo-120g-03-1627698484.png', NULL, '[\"bot-me-lo-120g-04-1627698488.png\",\"bot-nghe-lo-90g-1627698488.png\"]', '2021-07-13 03:29:28', '2021-08-10 19:51:24'),
(6, 'Sản phẩm 06', 'san-pham-06', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sản phẩm 06 Mới nhất thị trường tiêu dùng hiện nay nha', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<table id=\"product-attribute-specs-table\">\r\n	<caption>More Information</caption>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Ingredients</th>\r\n			<td>Spices, Salt, Garlic, Paprika, Onion, Honey powder (Sugar, honey), Natural flavor, Contains 2% or less of Annatto seed.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Recommended Applications</th>\r\n			<td>Adobo Seasoning is a perfect addition to any dish, vegetables, casseroles, soups, or even added to meats before cooking.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Basic Preparation</th>\r\n			<td>Ready to use as is, no preparation is necessary.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Product Style</th>\r\n			<td>Powder</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Cuisine</th>\r\n			<td>Filipino, Latin American, Mexican, South American, Spanish</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Shelf Life</th>\r\n			<td>2 years</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Handling / Storage</th>\r\n			<td>To be stored in a dry, cool place.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Country of Origin</th>\r\n			<td>United States</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Dietary Preferences</th>\r\n			<td>All Natural, Gluten-Free, Kosher Parve, Non-GMO</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Allergen Information</th>\r\n			<td>None Specified</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 0, 1, 0, 0, 0, 'bot-nghe-lo-90g-1627698439.png', NULL, '[\"bot-nhuc-dau-khau-lo-120g-03-1627698444.png\",\"bot-me-lo-120g-04-1627698444.png\"]', '2021-07-13 03:29:28', '2021-08-10 19:51:56'),
(7, 'Sản phẩm 07', 'san-pham-07', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sản phẩm 07 mới nhất thị trường tiêu dùng hiện nay nha', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<table id=\"product-attribute-specs-table\">\r\n	<caption>More Information</caption>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Ingredients</th>\r\n			<td>Spices, Salt, Garlic, Paprika, Onion, Honey powder (Sugar, honey), Natural flavor, Contains 2% or less of Annatto seed.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Recommended Applications</th>\r\n			<td>Adobo Seasoning is a perfect addition to any dish, vegetables, casseroles, soups, or even added to meats before cooking.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Basic Preparation</th>\r\n			<td>Ready to use as is, no preparation is necessary.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Product Style</th>\r\n			<td>Powder</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Cuisine</th>\r\n			<td>Filipino, Latin American, Mexican, South American, Spanish</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Shelf Life</th>\r\n			<td>2 years</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Handling / Storage</th>\r\n			<td>To be stored in a dry, cool place.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Country of Origin</th>\r\n			<td>United States</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Dietary Preferences</th>\r\n			<td>All Natural, Gluten-Free, Kosher Parve, Non-GMO</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Allergen Information</th>\r\n			<td>None Specified</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 0, 1, 0, 0, 0, 'bot-me-lo-120g-04-1627698386.png', NULL, '[\"bot-nhuc-dau-khau-lo-120g-03-1627698391.png\",\"bot-nghe-lo-90g-1627698391.png\"]', '2021-07-13 03:29:28', '2021-08-10 19:52:27'),
(8, 'Sản phẩm 08', 'san-pham-08', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sản phẩm 08 mới nhất thị trường tiêu dùng hiện nay nha', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<table id=\"product-attribute-specs-table\">\r\n	<caption>More Information</caption>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Ingredients</th>\r\n			<td>Spices, Salt, Garlic, Paprika, Onion, Honey powder (Sugar, honey), Natural flavor, Contains 2% or less of Annatto seed.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Recommended Applications</th>\r\n			<td>Adobo Seasoning is a perfect addition to any dish, vegetables, casseroles, soups, or even added to meats before cooking.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Basic Preparation</th>\r\n			<td>Ready to use as is, no preparation is necessary.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Product Style</th>\r\n			<td>Powder</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Cuisine</th>\r\n			<td>Filipino, Latin American, Mexican, South American, Spanish</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Shelf Life</th>\r\n			<td>2 years</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Handling / Storage</th>\r\n			<td>To be stored in a dry, cool place.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Country of Origin</th>\r\n			<td>United States</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Dietary Preferences</th>\r\n			<td>All Natural, Gluten-Free, Kosher Parve, Non-GMO</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Allergen Information</th>\r\n			<td>None Specified</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 0, 1, 0, 0, 0, 'bot-nhuc-dau-khau-lo-120g-03-1627698329.png', NULL, '[\"bot-me-lo-120g-04-1627698316.png\",\"bot-nghe-lo-90g-1627698316.png\"]', '2021-07-13 03:29:28', '2021-08-10 19:53:16'),
(9, 'Sản phẩm 09', 'san-pham-09', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sản phẩm 09 mới nhất thị trường tiêu dùng hiện nay nha', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<table id=\"product-attribute-specs-table\">\r\n	<caption>More Information</caption>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Ingredients</th>\r\n			<td>Spices, Salt, Garlic, Paprika, Onion, Honey powder (Sugar, honey), Natural flavor, Contains 2% or less of Annatto seed.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Recommended Applications</th>\r\n			<td>Adobo Seasoning is a perfect addition to any dish, vegetables, casseroles, soups, or even added to meats before cooking.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Basic Preparation</th>\r\n			<td>Ready to use as is, no preparation is necessary.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Product Style</th>\r\n			<td>Powder</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Cuisine</th>\r\n			<td>Filipino, Latin American, Mexican, South American, Spanish</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Shelf Life</th>\r\n			<td>2 years</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Handling / Storage</th>\r\n			<td>To be stored in a dry, cool place.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Country of Origin</th>\r\n			<td>United States</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Dietary Preferences</th>\r\n			<td>All Natural, Gluten-Free, Kosher Parve, Non-GMO</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Allergen Information</th>\r\n			<td>None Specified</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 0, 1, 0, 0, 0, 'bot-nhuc-dau-khau-lo-120g-03-1627698205.png', NULL, '[\"bot-me-lo-120g-04-1627698208.png\",\"bot-nghe-lo-90g-1627698208.png\"]', '2021-07-13 23:50:03', '2021-08-10 19:53:53'),
(10, 'Sản phẩm 10', 'san-pham-10', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sản phẩm 10 mới nhất thị trường tiêu dùng hiện nay nha', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<table id=\"product-attribute-specs-table\">\r\n	<caption>More Information</caption>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Ingredients</th>\r\n			<td>Spices, Salt, Garlic, Paprika, Onion, Honey powder (Sugar, honey), Natural flavor, Contains 2% or less of Annatto seed.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Recommended Applications</th>\r\n			<td>Adobo Seasoning is a perfect addition to any dish, vegetables, casseroles, soups, or even added to meats before cooking.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Basic Preparation</th>\r\n			<td>Ready to use as is, no preparation is necessary.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Product Style</th>\r\n			<td>Powder</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Cuisine</th>\r\n			<td>Filipino, Latin American, Mexican, South American, Spanish</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Shelf Life</th>\r\n			<td>2 years</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Handling / Storage</th>\r\n			<td>To be stored in a dry, cool place.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Country of Origin</th>\r\n			<td>United States</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Dietary Preferences</th>\r\n			<td>All Natural, Gluten-Free, Kosher Parve, Non-GMO</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Allergen Information</th>\r\n			<td>None Specified</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 0, 1, 0, 0, 0, 'bot-nghe-lo-90g-1627698174.png', NULL, '[\"bot-nhuc-dau-khau-lo-120g-03-1627698177.png\",\"bot-me-lo-120g-04-1627698177.png\"]', '2021-07-13 23:49:46', '2021-08-10 19:54:20'),
(11, 'Sản phẩm 11', 'san-pham-11', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 01.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 01.', 'Sản phẩm 11 mới nhất thị trường tiêu dùng hiện nay nha', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<table id=\"product-attribute-specs-table\">\r\n	<caption>More Information</caption>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Ingredients</th>\r\n			<td>Spices, Salt, Garlic, Paprika, Onion, Honey powder (Sugar, honey), Natural flavor, Contains 2% or less of Annatto seed.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Recommended Applications</th>\r\n			<td>Adobo Seasoning is a perfect addition to any dish, vegetables, casseroles, soups, or even added to meats before cooking.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Basic Preparation</th>\r\n			<td>Ready to use as is, no preparation is necessary.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Product Style</th>\r\n			<td>Powder</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Cuisine</th>\r\n			<td>Filipino, Latin American, Mexican, South American, Spanish</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Shelf Life</th>\r\n			<td>2 years</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Handling / Storage</th>\r\n			<td>To be stored in a dry, cool place.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Country of Origin</th>\r\n			<td>United States</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Dietary Preferences</th>\r\n			<td>All Natural, Gluten-Free, Kosher Parve, Non-GMO</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Allergen Information</th>\r\n			<td>None Specified</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 0, 1, 1, 1, 0, 'bot-me-lo-120g-04-1627698121.png', NULL, '[\"bot-nhuc-dau-khau-lo-120g-03-1627698141.png\",\"bot-nghe-lo-90g-1627698141.png\"]', '2021-07-13 23:49:37', '2021-08-10 19:54:44'),
(12, 'Sản phẩm 12', 'san-pham-12', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 01.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 01.', 'Sản phẩm 12 mới nhất thị trường tiêu dùng hiện nay nha', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<table id=\"product-attribute-specs-table\">\r\n	<caption>More Information</caption>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Ingredients</th>\r\n			<td>Spices, Salt, Garlic, Paprika, Onion, Honey powder (Sugar, honey), Natural flavor, Contains 2% or less of Annatto seed.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Recommended Applications</th>\r\n			<td>Adobo Seasoning is a perfect addition to any dish, vegetables, casseroles, soups, or even added to meats before cooking.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Basic Preparation</th>\r\n			<td>Ready to use as is, no preparation is necessary.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Product Style</th>\r\n			<td>Powder</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Cuisine</th>\r\n			<td>Filipino, Latin American, Mexican, South American, Spanish</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Shelf Life</th>\r\n			<td>2 years</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Handling / Storage</th>\r\n			<td>To be stored in a dry, cool place.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Country of Origin</th>\r\n			<td>United States</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Dietary Preferences</th>\r\n			<td>All Natural, Gluten-Free, Kosher Parve, Non-GMO</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Allergen Information</th>\r\n			<td>None Specified</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 0, 1, 1, 1, 0, 'bot-nhuc-dau-khau-lo-120g-03-1627698044.png', NULL, '[\"bot-me-lo-120g-04-1627698048.png\",\"bot-nghe-lo-90g-1627698048.png\"]', '2021-07-13 23:49:26', '2021-08-10 19:55:10'),
(13, 'Sản phẩm 13', 'san-pham-13', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sản phẩm 13 mới nhất thị trường tiêu dùng hiện nay nha', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<table id=\"product-attribute-specs-table\">\r\n	<caption>More Information</caption>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Ingredients</th>\r\n			<td>Spices, Salt, Garlic, Paprika, Onion, Honey powder (Sugar, honey), Natural flavor, Contains 2% or less of Annatto seed.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Recommended Applications</th>\r\n			<td>Adobo Seasoning is a perfect addition to any dish, vegetables, casseroles, soups, or even added to meats before cooking.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Basic Preparation</th>\r\n			<td>Ready to use as is, no preparation is necessary.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Product Style</th>\r\n			<td>Powder</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Cuisine</th>\r\n			<td>Filipino, Latin American, Mexican, South American, Spanish</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Shelf Life</th>\r\n			<td>2 years</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Handling / Storage</th>\r\n			<td>To be stored in a dry, cool place.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Country of Origin</th>\r\n			<td>United States</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Dietary Preferences</th>\r\n			<td>All Natural, Gluten-Free, Kosher Parve, Non-GMO</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Allergen Information</th>\r\n			<td>None Specified</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 0, 1, 1, 1, 0, 'bot-me-lo-120g-04-1627697950.png', NULL, '[\"bot-nhuc-dau-khau-lo-120g-03-1627697958.png\",\"bot-nghe-lo-90g-1627697958.png\"]', '2021-07-13 23:49:14', '2021-08-10 19:55:42'),
(14, 'Sản phẩm 14', 'san-pham-14', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sản phẩm 14 mới nhất thị trường tiêu dùng hiện nay nha', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<table id=\"product-attribute-specs-table\">\r\n	<caption>More Information</caption>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Ingredients</th>\r\n			<td>Spices, Salt, Garlic, Paprika, Onion, Honey powder (Sugar, honey), Natural flavor, Contains 2% or less of Annatto seed.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Recommended Applications</th>\r\n			<td>Adobo Seasoning is a perfect addition to any dish, vegetables, casseroles, soups, or even added to meats before cooking.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Basic Preparation</th>\r\n			<td>Ready to use as is, no preparation is necessary.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Product Style</th>\r\n			<td>Powder</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Cuisine</th>\r\n			<td>Filipino, Latin American, Mexican, South American, Spanish</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Shelf Life</th>\r\n			<td>2 years</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Handling / Storage</th>\r\n			<td>To be stored in a dry, cool place.</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Country of Origin</th>\r\n			<td>United States</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Dietary Preferences</th>\r\n			<td>All Natural, Gluten-Free, Kosher Parve, Non-GMO</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Allergen Information</th>\r\n			<td>None Specified</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 0, 1, 1, 1, 0, 'bot-nhuc-dau-khau-lo-120g-03-1627697663.png', NULL, '[\"bot-me-lo-120g-04-1627697668.png\",\"bot-nghe-lo-90g-1627697668.png\"]', '2021-07-13 23:49:03', '2021-08-10 19:56:18'),
(15, 'Sản phẩm 15', 'san-pham-15', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02.', 'Sản phẩm 15 mới nhất thị trường tiêu dùng hiện nay nha', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<p>&nbsp;</p>', 0, 1, 1, 0, 0, 'bot-nghe-lo-90g-1627697166.png', NULL, '[\"bot-nhuc-dau-khau-lo-120g-03-1627697227.png\",\"bot-me-lo-120g-04-1627697227.png\"]', '2021-07-13 23:48:52', '2021-08-13 21:13:17'),
(16, 'Gia vị tẩm ướp BBQ Hàn Quốc', 'gia-vi-tam-uop-bbq-han-quoc', 'Sản phẩm bột gia vị tẩm ướp BBQ Hàn Quốc của UniSpice có hương vị đậm đà, dậy mùi thơm ngon, là sự lựa chọn hoàn hảo cho các bữa ăn, các bữa tiệc BBQ.', 'Sản phẩm bột gia vị tẩm ướp BBQ Hàn Quốc của UniSpice có hương vị đậm đà, dậy mùi thơm ngon, là sự lựa chọn hoàn hảo cho các bữa ăn, các bữa tiệc BBQ.', 'Gia vị tẩm ướp BBQ Hàn Quốc Gia vị tẩm ướp BBQ Hàn Quốc', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<p>&nbsp;</p>', 0, 1, 1, 1, 0, 'bot-nghe-lo-cccccc-1629345500.png', NULL, '[\"bot-nhuc-dau-khau-lo-120g-03-1629345943.png\",\"bot-me-lo-120g-04-1629345943.png\"]', '2021-08-18 21:05:43', NULL),
(17, 'Gia vị tẩm ướp BBQ hải sản', 'gia-vi-tam-uop-bbq-hai-san', 'Bột gia vị tẩm ướp BBQ hải sản của UniSpice được nhiều khách sạn, nhà hàng, người nội trợ lựa chọn để tạo nên những món nướng thơm ngon và hấp dẫn.', 'Bột gia vị tẩm ướp BBQ hải sản của UniSpice được nhiều khách sạn, nhà hàng, người nội trợ lựa chọn để tạo nên những món nướng thơm ngon và hấp dẫn.', 'Gia vị tẩm ướp BBQ hải sản Gia vị tẩm ướp BBQ hải sản', NULL, '<p style=\"text-align:justify\">Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p style=\"text-align:justify\">We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p style=\"text-align:justify\"><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', 0, 1, 1, 1, 0, 'bot-nhuc-dau-khau-lo-120g-03-1629346593.png', NULL, '[\"bot-nhuc-dau-khau-lo-120g-03-1629346596.png\",\"bot-me-lo-120g-04-1629346596.png\"]', '2021-08-18 21:16:36', '2021-08-19 03:29:53'),
(18, 'Bột cà ri', 'bot-ca-ri', 'Bột cà ri của UniSpice sử dụng trong chế biến thực phẩm giúp tạo màu sắc hấp dẫn và hương vị đặc biệt cho món ăn, kích thích vị giác người dùng.', 'Bột cà ri của UniSpice sử dụng trong chế biến thực phẩm giúp tạo màu sắc hấp dẫn và hương vị đặc biệt cho món ăn, kích thích vị giác người dùng.', 'Bột cà ri Bột cà ri Bột cà ri Bột cà ri Bột cà ri Bột cà ri', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<p>&nbsp;</p>', 0, 1, 1, 1, 0, 'bot-nghe-lo-cccccc-1629347314.png', NULL, '[\"bot-nhuc-dau-khau-lo-120g-03-1629347332.png\",\"bot-me-lo-120g-04-1629347332.png\"]', '2021-08-18 21:27:56', '2021-08-18 21:28:52'),
(19, 'Bột gừng', 'bot-gung', 'Bột gừng UniSpice được người đầu bếp kết hợp cùng các các nguyên liệu khác để tạo nên những món ăn có hương vị thơm ngon, mang đậm văn hóa ẩm thực Việt.', 'Bột gừng UniSpice được người đầu bếp kết hợp cùng các các nguyên liệu khác để tạo nên những món ăn có hương vị thơm ngon, mang đậm văn hóa ẩm', 'Bột gừng Bột gừng Bột gừng Bột gừng Bột gừng Bột gừng', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<p>&nbsp;</p>', 0, 1, 1, 1, 0, 'bot-nghe-lo-cccccc-1629347983.png', NULL, '[\"bot-me-lo-120g-04-1629347986.png\",\"bot-nghe-lo-cccccc-1629347986.png\"]', '2021-08-18 21:39:46', NULL),
(20, 'Bột riềng', 'bot-rieng', 'Bột riềng từ UniSpice được sản xuất theo mô hình khép kín “Farm to Food” đem đến cho người dùng sản phẩm gia vị sạch với chất lượng đạt chuẩn.', 'Bột riềng từ UniSpice được sản xuất theo mô hình khép kín “Farm to Food” đem đến cho người dùng sản phẩm gia vị sạch với chất lượng đạt chuẩn', 'Bột riềng Bột riềng Bột riềng Bột riềng Bột riềng Bột riềng', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<p>&nbsp;</p>', 0, 1, 1, 1, 0, 'bot-nghe-lo-cccccc-1629355144.png', NULL, '[\"bot-me-lo-120g-04-1629355170.png\",\"bot-nghe-lo-cccccc-1629355170.png\"]', '2021-08-18 23:39:30', NULL),
(21, 'Bột thảo quả', 'bot-thao-qua', 'Bột thảo quả từ UniSpice được sản xuất trên dây chuyền công nghệ hiện đại mang đến cho người dùng cảm nhận chân thật nhất về gia vị Việt.', 'Bột thảo quả từ UniSpice được sản xuất trên dây chuyền công nghệ hiện đại mang đến cho người dùng cảm nhận chân thật nhất về gia vị Việt.', 'Bột thảo quả Bột thảo quả Bột thảo quả Bột thảo quả', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<p>&nbsp;</p>', 0, 1, 1, 1, 0, 'bot-nhuc-dau-khau-lo-120g-03-1629355646.png', NULL, '[\"bot-me-lo-120g-04-1629355648.png\",\"bot-nghe-lo-cccccc-1629355648.png\"]', '2021-08-18 23:47:28', NULL);
INSERT INTO `uni_product` (`id`, `name`, `slug`, `desscription`, `meta_desscription`, `meta_title`, `meta_keyword`, `content`, `qty`, `status`, `is_hot`, `is_feauture`, `order`, `thumbnail`, `box_thumnail`, `album`, `created_at`, `updated_at`) VALUES
(22, 'Bột tiêu đen', 'bot-tieu-den', 'Bột tiêu đen của UniSpice có vị cay và hương thơm riêng biệt. Đây chắc chắn là gia vị không thể thiếu trong gian bếp của bạn', 'Bột tiêu đen của UniSpice có vị cay và hương thơm riêng biệt. Đây chắc chắn là gia vị không thể thiếu trong gian bếp của bạn', 'Bột tiêu đen Bột tiêu đen Bột tiêu đen Bột tiêu đen', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<p>&nbsp;</p>', 0, 1, 1, 1, 0, 'bot-nhuc-dau-khau-lo-120g-03-1629356166.png', NULL, '[\"bot-me-lo-120g-04-1629356169.png\"]', '2021-08-18 23:56:09', NULL),
(23, 'Hoa hồi', 'hoa-hoi', 'Sản phẩm hoa hồi sấy khô từ UniSpice có hương vị ngọt ngào, mùi hương tựa như cam thảo, là gia vị hoàn hảo cho nhiều món ăn.', 'Sản phẩm hoa hồi sấy khô từ UniSpice có hương vị ngọt ngào, mùi hương tựa như cam thảo, là gia vị hoàn hảo cho nhiều món ăn.', 'Hoa hồi Hoa hồi Hoa hồi Hoa hồi Hoa hồi Hoa hồi Hoa hồi Hoa hồi', NULL, '<p>Adobo comes in many forms from many countries. It can be a powder, a sauce, or a marinade. And each kind of adobo differs depending on whether it&rsquo;s from Spain, Brazil, Portugal, Mexico or any other number of countries. Adobo spice powder, however, is generally a salt and cumin-based blend mixed with garlic, oregano, and other herbs and spices (the mixture depends on the person blending).</p>\r\n\r\n<p>We use this Adobo spice powder as a go-to when we&rsquo;re not sure what we want. We sprinkle this adobo spice mix on corn on the cob, mix it into taco meat, add it to an everyday meatloaf, or rub it onto chicken thighs to be braised in cream and roasted poblano chiles.</p>\r\n\r\n<p><a href=\"https://www.spicejungle.com/adobo-seasoning#additional\" id=\"tab-label-additional-title\" tabindex=\"-1\"><strong>More Information</strong></a></p>\r\n\r\n<p>&nbsp;</p>', 1100, 1, 1, 1, 0, 'bot-nhuc-dau-khau-lo-120g-03-1629356379.png', NULL, '[\"bot-nghe-lo-cccccc-1629356382.png\"]', '2021-08-18 23:59:42', '2021-09-01 07:13:43'),
(30, 'Bột ớt tứ xuyên', 'bot-ot-tu-xuyen', 'Bột ớt tứ xuyên cay txeBột ớt tứ xuyên cay txeBột ớt tứ xuyên cay txeBột ớt tứ xuyên cay txe', 'Bột ớt tứ xuyên cay txeBột ớt tứ xuyên cay txeBột ớt tứ xuyên cay txeBột ớt tứ xuyên cay txe', 'Bột ớt tứ xuyên', NULL, '<p>Bột ớt tứ xuy&ecirc;n cay txeBột ớt tứ xuy&ecirc;n cay txeBột ớt tứ xuy&ecirc;n cay txeBột ớt tứ xuy&ecirc;n cay txeBột ớt tứ xuy&ecirc;n cay txeBột ớt tứ xuy&ecirc;n cay txeBột ớt tứ xuy&ecirc;n cay txe</p>', 0, 1, 1, 1, 0, 'bot-nhuc-dau-khau-lo-120g-03-1629356379.png', NULL, '[\"bot-nghe-lo-cccccc-1629356382.png\"]', '2021-09-06 03:06:00', '2021-09-06 03:12:17'),
(31, 'Bot ot quang nam', 'bot-ot-quang-nam', 'Bot ot quang namBot ot quang namBot ot quang namBot ot quang namBot ot quang nam', 'Bot ot quang namBot ot quang namBot ot quang namBot ot quang namBot ot quang nam', 'Bot ot quang nam', NULL, '<p>Bot ot quang namBot ot quang namBot ot quang namBot ot quang namBot ot quang namBot ot quang namBot ot quang namBot ot quang namBot ot quang namBot ot quang namBot ot quang namBot ot quang namBot ot quang namBot ot quang namBot ot quang namBot ot quang namBot ot quang nam</p>', 0, 1, 1, 1, 0, 'bot-nhuc-dau-khau-lo-120g-03-1629356379.png', NULL, '[\"bot-nghe-lo-cccccc-1629356382.png\"]', '2021-09-06 05:11:52', NULL),
(32, 'Bot ot trung hoa', 'bot-ot-trung-hoa', 'Bot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoa', 'Bot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoa', 'Bot ot trung hoa', NULL, '<p>Bot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoaBot ot trung hoa</p>', 0, 1, 1, 1, 0, 'bot-nhuc-dau-khau-lo-120g-03-1629356379.png', NULL, '[\"bot-nghe-lo-cccccc-1629356382.png\"]', '2021-09-06 06:57:16', NULL),
(34, 'Bột ớt tứ xuyên biên cương', 'bot-ot-tu-xuyen-bien-cuong', 'Bột ớt tứ xuyên biên cươngBột ớt tứ xuyên biên cươngBột ớt tứ xuyên biên cươngBột ớt tứ xuyên biên cươngBột ớt tứ xuyên biên cương', 'Bột ớt tứ xuyên biên cươngBột ớt tứ xuyên biên cươngBột ớt tứ xuyên biên cươngBột ớt tứ xuyên biên cươngBột ớt tứ xuyên biên cương', 'Bột ớt tứ xuyên biên cương', NULL, '<p>Bột ớt tứ xuy&ecirc;n bi&ecirc;n cươngBột ớt tứ xuy&ecirc;n bi&ecirc;n cươngBột ớt tứ xuy&ecirc;n bi&ecirc;n cươngBột ớt tứ xuy&ecirc;n bi&ecirc;n cươngBột ớt tứ xuy&ecirc;n bi&ecirc;n cươngBột ớt tứ xuy&ecirc;n bi&ecirc;n cươngBột ớt tứ xuy&ecirc;n bi&ecirc;n cươngBột ớt tứ xuy&ecirc;n bi&ecirc;n cươngBột ớt tứ xuy&ecirc;n bi&ecirc;n cươngBột ớt tứ xuy&ecirc;n bi&ecirc;n cươngBột ớt tứ xuy&ecirc;n bi&ecirc;n cươngBột ớt tứ xuy&ecirc;n bi&ecirc;n cương</p>', 0, 1, 1, 1, 0, 'bot-nhuc-dau-khau-lo-120g-03-1629356379.png', NULL, '[\"bot-nghe-lo-cccccc-1629356382.png\"]', '2021-09-06 09:06:41', '2021-09-06 09:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `uni_product_category`
--

CREATE TABLE `uni_product_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `order` int(11) DEFAULT NULL,
  `icon_thumb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` timestamp NULL DEFAULT NULL,
  `updated_by` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_product_category`
--

INSERT INTO `uni_product_category` (`id`, `name`, `slug`, `desscription`, `meta_desscription`, `meta_title`, `meta_keyword`, `content`, `parent_id`, `status`, `order`, `icon_thumb`, `thumbnail`, `banner`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Gia vị hoàn chỉnh', 'gia-vi-hoan-chinh', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu.', 'Gia vị hoàn chỉnh', 'Gia vị hoàn chỉnh', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', 0, 1, 2, 'gia-vi-hoan-chinh-1627642574.png', 'icon-bath-and-body-1627701283.jpg', 'kits-header-1440x380-1627698842.jpg', NULL, NULL, '2021-07-13 03:10:20', '2021-07-30 20:14:43'),
(2, 'Trà', 'tra', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu 02.', 'Trà', 'Trà', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', 0, 1, 5, 'tea-1627644059.png', 'icon-bath-and-body-1627701332.jpg', 'kits-header-1440x380-1627698878.jpg', NULL, NULL, '2021-07-13 03:10:57', '2021-07-30 20:15:32'),
(3, 'Nông sản khô', 'nong-san-kho', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 03d', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 03dd', 'Nông sản khô Nông sản khô Nông sản khô Nông sản khô', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị, d&ugrave;ng để chấm hoặc ướp nấu, tăng cường m&ugrave;i vị cho m&oacute;n ăn.Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị, d&ugrave;ng để chấm hoặc ướp nấu, tăng cường m&ugrave;i vị cho m&oacute;n ăn.Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị, d&ugrave;ng để chấm hoặc ướp nấu, tăng cường m&ugrave;i vị cho m&oacute;n ăn.</p>', 0, 1, 4, 'muoi-1627644047.png', 'icon-grocery-1627701321.jpg', 'kits-header-1440x380-1627698863.jpg', NULL, NULL, '2021-07-13 03:11:26', '2021-08-09 20:37:05'),
(4, 'Gia vị Bột & Xốt BBQ', 'gia-vi-bot-xot-bbq', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 0d s', 'Gia vị Bột & Xốt BBQ  Gia vị Bột & Xốt BBQ  Gia vị Bột & Xốt BBQ', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị, d&ugrave;ng để chấm hoặc ướp nấu, tăng cường m&ugrave;i vị cho m&oacute;n ăn.Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị, d&ugrave;ng để chấm hoặc ướp nấu, tăng cường m&ugrave;i vị cho m&oacute;n ăn.Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị, d&ugrave;ng để chấm hoặc ướp nấu, tăng cường m&ugrave;i vị cho m&oacute;n ăn.</p>', 0, 1, 3, 'bbq-1627644022.png', 'icon-grocery-1627701309.jpg', 'kits-header-1440x380-1627698853.jpg', NULL, NULL, '2021-07-13 03:12:05', '2021-08-09 20:34:07'),
(5, 'Sản phẩm mới', 'san-pham-moi', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị.', 'Sản phẩm mới', 'Sản phẩm mới', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', 0, 1, 6, 'san-pham-moi-1-1627644137.png', 'icon-bath-and-body-1627701347.jpg', 'kits-header-1440x380-1627698888.jpg', NULL, NULL, '2021-07-13 03:12:31', '2021-07-30 20:15:47'),
(6, 'Gia vị tự nhiên', 'gia-vi-tu-nhien', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 06.', 'Gia vị tự nhiên', 'Gia vị tự nhiên', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', 0, 1, 1, 'gia-vi-tu-nhien-1627641704.png', 'icon-grocery-1627700848.jpg', 'kits-header-1440x380-1627698829.jpg', NULL, NULL, '2021-07-13 03:13:10', '2021-07-30 20:07:28'),
(7, 'Gia vị quà tặng', 'gia-vi-qua-tang', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu 02.', 'Gia vị quà tặng', 'Gia vị quà tặng', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu 02.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu 02.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu 02.', 0, 1, 7, 'qua-tang-1627644256.png', 'icon-grocery-1627701358.jpg', 'kits-header-1440x380-1627698900.jpg', NULL, NULL, '2021-07-14 20:01:33', '2021-07-30 20:15:58'),
(8, 'Khuyến mãi', 'khuyen-mai', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu 02.', 'Khuyến mãi', 'Khuyến mãi', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu 02.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu 02.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu 02.', 0, 0, 8, 'khuyen-mai-1627644111.png', 'icon-bath-and-body-1627701369.jpg', NULL, NULL, NULL, '2021-07-14 20:02:08', '2021-07-30 20:16:09'),
(9, 'Bột gia vị', 'bot-gia-vi', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04s', 'Bột gia vị Bột gia vị Bột gia vị Bột gia vị Bột gia vịBột gia vị', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04&nbsp;Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 6, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-10 06:56:19', NULL),
(10, 'Gia vị dạng lát, miếng', 'gia-vi-dang-lat-mieng', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04d', 'Gia vị dạng lát, miếng Gia vị dạng lát, miếng Gia vị dạng lát, miếng', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 6, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:10:57', NULL),
(11, 'Gia vị dạng Hạt, Quả, Thân', 'gia-vi-dang-hat-qua-than', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Gia vị dạng Hạt, Quả, Thân Quả, Thân Quả, Thân Quả, Thân', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 6, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:19:17', '2021-08-19 04:42:35'),
(12, 'Gia vị dạng Lá, Nhụy, Hoa', 'gia-vi-dang-la-nhuy-hoa', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Gia vị dạng Lá, Nhụy, Hoa Gia vị dạng Lá, Nhụy, Hoa', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 6, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:20:35', NULL),
(13, 'Gia vị làm bánh', 'gia-vi-lam-banh', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Gia vị làm bánh Gia vị làm bánh Gia vị làm bánh Gia vị làm bánh', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 6, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:21:59', NULL),
(14, 'Bột nêm & Bột canh', 'bot-nem-bot-canh', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Bột nêm & Bột canh Bột nêm & Bột canh Bột nêm & Bột canh', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:23:29', NULL),
(15, 'Bột gia vị món kho', 'bot-gia-vi-mon-kho', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Bột gia vị món kho dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:24:55', '2021-08-11 23:57:30'),
(16, 'Bột gia vị món lẩu', 'bot-gia-vi-mon-lau', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Bột gia vị món lẩu Bột gia vị món lẩu Bột gia vị món lẩu', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:25:37', '2021-08-09 21:25:48'),
(17, 'Bột gia vị tẩm ướp', 'bot-gia-vi-tam-uop', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Bột gia vị tẩm ướp Bột gia vị tẩm ướp Bột gia vị tẩm ướp', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:27:01', NULL),
(18, 'Bột gia vị bò', 'bot-gia-vi-bo', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Bột gia vị bò Bột gia vị bò Bột gia vị bò Bột gia vị bò', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:28:03', NULL),
(19, 'Bột gia vị heo', 'bot-gia-vi-heo', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Bột gia vị heo Sốt Chấm là chất lỏng sánh, có độ đ', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:35:50', NULL),
(20, 'Bột gia vị gà', 'bot-gia-vi-ga', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Bột gia vị gà Bột gia vị gà Bột gia vị gà Bột gia vị gà', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:36:32', NULL),
(21, 'Bột gia vị hải sản', 'bot-gia-vi-hai-san', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Bột gia vị hải sản Bột gia vị hải sản Bột gia vị hải sản', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:37:09', NULL),
(22, 'Bột gia vị tẩm ướp BBQ', 'bot-gia-vi-tam-uop-bbq', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Bột gia vị tẩm ướp BBQ Bột gia vị tẩm ướp BBQ Bột gia vị tẩm ướp BBQ', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 4, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:38:11', NULL),
(23, 'Xốt gia vị BBQ', 'xot-gia-vi-bbq', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Xốt gia vị BBQ Xốt gia vị BBQ Xốt gia vị BBQ Xốt gia vị BBQ', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 4, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:40:27', NULL),
(24, 'Rau xấy khô', 'rau-xay-kho', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Rau xấy khô Rau xấy khô Rau xấy khô Rau xấy khô Rau xấy khô', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 3, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:41:35', NULL),
(25, 'Bột rau dinh dưỡng', 'bot-rau-dinh-duong', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Bột rau dinh dưỡng Bột rau dinh dưỡng Bột rau dinh dưỡng', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 3, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:42:11', NULL),
(26, 'Hạt khô', 'hat-kho', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 04', 'Hạt khô Hạt khô Hạt khô Hạt khô Hạt khô Hạt khô Hạt khô Hạt khô', NULL, '<p>Sốt Chấm l&agrave; chất lỏng s&aacute;nh, c&oacute; độ đặc nhất định,c&oacute; m&ugrave;i thơm dịu nhẹ, được tạo n&ecirc;n từ nhiều loại gia vị 04</p>', 3, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-08-09 21:42:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uni_size`
--

CREATE TABLE `uni_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_size` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_more` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `order` int(11) DEFAULT NULL,
  `thumnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_size`
--

INSERT INTO `uni_size` (`id`, `name`, `type_size`, `slug`, `desscription`, `meta_desscription`, `meta_title`, `meta_keyword`, `content`, `content_more`, `status`, `order`, `thumnail`, `banner`, `created_at`, `updated_at`) VALUES
(1, '120g', 'lọ', 'hop-loai-1', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 01', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 01', 'lọ loại 1 lọ loại 1 lọ loại 1 lọ loại 1 lọ loại 1', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, 1, 0, NULL, 'site-2-1628591074.jpg', '2021-07-13 03:17:48', '2021-08-10 03:24:37'),
(2, '150g', 'lọ', 'hop-loai-2', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02', 'lọ loại 2', 'lọ loại 2', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, 1, 1, NULL, NULL, '2021-07-13 03:18:12', NULL),
(3, '180g', 'lọ', 'hop-loai-03', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 03', 'lọ loại 03', 'lọ loại 03', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, 1, 2, NULL, NULL, '2021-07-13 03:18:50', NULL),
(4, '210g', 'Túi', '90-g', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '2021-09-01 04:25:54', '2021-09-06 10:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `uni_spiceclub`
--

CREATE TABLE `uni_spiceclub` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `discount` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uni_store`
--

CREATE TABLE `uni_store` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `store_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_province` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_album` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_phone` int(11) DEFAULT NULL,
  `store_status` tinyint(4) DEFAULT NULL,
  `store_taxcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_thumbnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_lat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_lng` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_store` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'Silver',
  `poin_store` float NOT NULL DEFAULT 0,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_store`
--

INSERT INTO `uni_store` (`id`, `user_id`, `store_name`, `store_area`, `store_address`, `store_province`, `store_album`, `store_phone`, `store_status`, `store_taxcode`, `store_thumbnail`, `store_lat`, `store_lng`, `type_store`, `poin_store`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 41, 'Trung tâm thương mại một thành viên.', '225', 'Hải Phòng', 'Hải Phòng', NULL, 969987456, 1, '1234567890', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1863.497878131935!2d106.67366258086716!3d20.912490401295454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7bc09597336d%3A0xdae1bff6961982e5!2sVinMart%2B!5e0!3m2!1svi!2s!4v1626491941173!5m2!1svi!2s\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe><iframe src=\"https://www.google.com/maps/embed?{{ $item->link_d }}\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '33', 'Platinum', 150000, '2021-08-26', '2021-08-01 20:33:24', '2021-08-27 21:13:06'),
(2, 12, 'Cửa hàng Karaoke Lê Hoàng', '225', 'Hải Phòng', 'Hải Phòng', '[\"brvn-1626497092.jpg\",\"brvn1-1626497092.jpg\",\"brvn2-1626497092.jpg\",\"brvn3-1626497092.jpg\"]', 969987456, 0, '1234567890', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.995050807279!2d106.67184713227033!3d20.91251878325027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7b56ef50505b%3A0x6fa864deca4d79b0!2zS2FyYW9rZSBMw6ogSG_DoG5n!5e0!3m2!1svi!2s!4v1626510349616!5m2!1svi!2s\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '33', 'Gold', 36000, '2021-08-24', '2021-07-16 23:56:40', '2021-08-24 20:59:27'),
(3, 3, 'Cửa hàng tiện lợi 0003', '225', 'Hải Phòng', 'Quảng Ninh', '[\"brvn-1626497092.jpg\",\"brvn1-1626497092.jpg\",\"brvn2-1626497092.jpg\",\"brvn3-1626497092.jpg\"]', 969987456, 0, '1234567890', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1863.497878131935!2d106.67366258086716!3d20.912490401295454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7bc09597336d%3A0xdae1bff6961982e5!2sVinMart%2B!5e0!3m2!1svi!2s!4v1626491941173!5m2!1svi!2s\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\r\n<iframe src=\"https://www.google.com/maps/embed?{{ $item->link_d }}\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '33', 'Silver', 29000, '2021-08-24', '2021-07-16 23:56:40', '2021-08-24 20:59:27'),
(4, 4, 'Cửa hàng tiện lợi 0004', '225', 'Hải Phòng', 'Hải Phòng', '[\"brvn-1626497092.jpg\",\"brvn1-1626497092.jpg\",\"brvn2-1626497092.jpg\",\"brvn3-1626497092.jpg\"]', 969987456, 0, '1234567890', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.995050807279!2d106.67184713227033!3d20.91251878325027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7b56ef50505b%3A0x6fa864deca4d79b0!2zS2FyYW9rZSBMw6ogSG_DoG5n!5e0!3m2!1svi!2s!4v1626510349616!5m2!1svi!2s\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '33', 'Gold', 74000, '2021-08-24', '2021-07-16 23:56:40', '2021-08-24 20:59:27'),
(5, 5, 'Cửa hàng tiện lợi 0005', '225', 'Hải Phòng', 'Quảng Ninh', '[\"brvn-1626497092.jpg\",\"brvn1-1626497092.jpg\",\"brvn2-1626497092.jpg\",\"brvn3-1626497092.jpg\"]', 969987456, 0, '1234567890', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1863.497878131935!2d106.67366258086716!3d20.912490401295454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7bc09597336d%3A0xdae1bff6961982e5!2sVinMart%2B!5e0!3m2!1svi!2s!4v1626491941173!5m2!1svi!2s\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\r\n<iframe src=\"https://www.google.com/maps/embed?{{ $item->link_d }}\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '33', 'Diamond', 75000, '2021-08-24', '2021-07-16 23:56:40', '2021-08-24 20:59:27'),
(6, 6, 'Cửa hàng tiện lợi 0006', '225', 'Hải Phòng', 'Quảng Ninh', '[\"brvn-1626497092.jpg\",\"brvn1-1626497092.jpg\",\"brvn2-1626497092.jpg\",\"brvn3-1626497092.jpg\"]', 969987456, 0, '1234567890', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.995050807279!2d106.67184713227033!3d20.91251878325027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7b56ef50505b%3A0x6fa864deca4d79b0!2zS2FyYW9rZSBMw6ogSG_DoG5n!5e0!3m2!1svi!2s!4v1626510349616!5m2!1svi!2s\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '33', 'Diamond', 80000, '2021-08-24', '2021-07-16 23:56:40', '2021-08-24 20:59:27'),
(7, 7, 'Cửa hàng tiện lợi 0007', '225', 'Hải Phòng', 'Hà Nội', '[\"brvn-1626497092.jpg\",\"brvn1-1626497092.jpg\",\"brvn2-1626497092.jpg\",\"brvn3-1626497092.jpg\"]', 969987456, 0, '1234567890', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1863.497878131935!2d106.67366258086716!3d20.912490401295454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7bc09597336d%3A0xdae1bff6961982e5!2sVinMart%2B!5e0!3m2!1svi!2s!4v1626491941173!5m2!1svi!2s\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\r\n<iframe src=\"https://www.google.com/maps/embed?{{ $item->link_d }}\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '33', 'Diamond', 81236, '2021-08-24', '2021-07-16 23:56:40', '2021-08-24 20:59:27'),
(8, 8, 'Cửa hàng tiện lợi 0008', '225', 'Hải Phòng', 'Hà Nội', '[\"brvn-1626497092.jpg\",\"brvn1-1626497092.jpg\",\"brvn2-1626497092.jpg\",\"brvn3-1626497092.jpg\"]', 969987456, 1, '1234567890', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.995050807279!2d106.67184713227033!3d20.91251878325027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7b56ef50505b%3A0x6fa864deca4d79b0!2zS2FyYW9rZSBMw6ogSG_DoG5n!5e0!3m2!1svi!2s!4v1626510349616!5m2!1svi!2s\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '33', 'Gold', 48232, '2021-08-24', '2021-07-31 21:52:10', '2021-08-24 20:59:27'),
(11, 1, 'Cửa hàng Sông MeKong', '1000', '22 Phố Hàng Đậu, Quận Hoàn Kiếm, Hà NỘi', 'Hải Phòng', '[\"bgtexture2-1629543825.jpg\",\"e51f2f1bc78b30d5699a-1629543825.jpg\"]', 966385234, 0, '1236547890', NULL, NULL, NULL, 'Silver', 0, '2021-08-24', '2021-08-21 04:04:28', '2021-08-24 20:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `uni_supplier`
--

CREATE TABLE `uni_supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `tax_code` int(12) DEFAULT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_supplier`
--

INSERT INTO `uni_supplier` (`id`, `name`, `email`, `address`, `phone`, `status`, `tax_code`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'Nhà cung cấp 01', 'ntdat7714@gmail.com', 'Ha noi, Hai Phong', 969938802, 1, 1122334455, NULL, '2021-07-13 03:25:35', '2021-08-10 06:46:44'),
(2, 'Nhà cung cấp 02', 'hppvtienaaa@gmail.com', 'Ha noi, Hai Phong', 969938804, 1, 1122334455, NULL, '2021-07-13 03:27:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uni_tag`
--

CREATE TABLE `uni_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `created_by` timestamp NULL DEFAULT NULL,
  `updated_by` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_tag`
--

INSERT INTO `uni_tag` (`id`, `name`, `slug`, `desscription`, `meta_desscription`, `meta_title`, `meta_keyword`, `type`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'tags-01', 'tags-01', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vịv', 'tags-01 định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị', NULL, 0, NULL, NULL, '2021-07-13 03:27:29', '2021-08-11 04:17:00'),
(2, 'tags-02', 'tags-02', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', 'tags-02 có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị', NULL, 0, NULL, NULL, '2021-07-13 03:27:39', '2021-08-11 04:32:01'),
(3, 'tags-03', 'tags-03', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', 'tags-03 được tạo nên từ nhiều loại gia vị dịu nhẹ mùi thơm', NULL, 0, NULL, NULL, '2021-07-13 03:27:49', '2021-08-11 04:31:47'),
(4, 'tags-04', 'tags-04', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', 'tags-04 nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều', NULL, 0, NULL, NULL, '2021-07-13 03:27:57', '2021-08-11 04:31:10'),
(5, 'tags-05', 'tags-05', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', 'tags-05 nh,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', NULL, 0, NULL, NULL, '2021-07-13 03:28:06', '2021-08-11 04:29:47'),
(6, 'Tag blog', 'tag-blog', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', 'Tag blog có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', NULL, 1, NULL, NULL, '2021-08-11 21:28:50', '2021-08-11 21:29:23'),
(7, 'Tab blog 01', 'tab-blog-01', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', 'Tab blog 01có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', NULL, 1, NULL, NULL, '2021-08-11 21:34:06', NULL),
(8, 'Tag blog 02', 'tag-blog-02', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', 'Tag blog 02  có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị,', NULL, 1, NULL, NULL, '2021-08-11 21:34:44', NULL),
(9, 'Tag blog 03', 'tag-blog-03', 'Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03', 'Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03', 'Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03 Tag blog 03', NULL, 1, NULL, NULL, '2021-08-19 02:17:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uni_trade`
--

CREATE TABLE `uni_trade` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_more` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `order` int(11) DEFAULT NULL,
  `thumnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` timestamp NULL DEFAULT NULL,
  `updated_by` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_trade`
--

INSERT INTO `uni_trade` (`id`, `name`, `slug`, `desscription`, `meta_desscription`, `meta_title`, `meta_keyword`, `content`, `content_more`, `qty`, `status`, `order`, `thumnail`, `banner`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Thương hiệu 01', 'thuong-hieu-01', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 01', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 01', 'Thương hiệu 01 Thương hiệu 01 Thương hiệu 01 Thương hiệu 01', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, NULL, 1, 0, NULL, 'thuong-hieu-02-1628588510.jpg', NULL, NULL, '2021-07-13 03:15:41', '2021-08-10 02:42:23'),
(2, 'Thương hiệu 02', 'thuong-hieu-02', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02d', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 02d', 'Thương hiệu 02 Thương hiệu 02 Thương hiệu 02 Thương hiệu 02', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, '2021-07-13 03:16:06', '2021-08-10 02:30:28'),
(3, 'Thương hiệu 03', 'thuong-hieu-03', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 03', 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị 03 s', 'Thương hiệu 03 Thương hiệu 03 Thương hiệu 03 Thương hiệu 03', NULL, 'Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.Sốt Chấm là chất lỏng sánh, có độ đặc nhất định,có mùi thơm dịu nhẹ, được tạo nên từ nhiều loại gia vị, dùng để chấm hoặc ướp nấu, tăng cường mùi vị cho món ăn.', NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, '2021-07-13 03:17:03', '2021-08-10 02:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `uni_transaction`
--

CREATE TABLE `uni_transaction` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `method_pay` int(11) DEFAULT NULL,
  `address` int(11) DEFAULT NULL,
  `type_pay` int(11) DEFAULT NULL,
  `node_pay` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_pay` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_process` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` timestamp NULL DEFAULT NULL,
  `updated_by` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uni_user`
--

CREATE TABLE `uni_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `total_course` int(11) NOT NULL DEFAULT 0,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar_social` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_verication` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `job`, `phone`, `avatar`, `address`, `status`, `total_course`, `provider`, `avatar_social`, `provider_id`, `code_verication`, `type`) VALUES
(1, 'adsmo', 'pvtien@gmail.com', '2020-12-27 02:02:47', '$2y$10$rayJ/U4/vyAJn0dhPnehH..GNtioVtH7he0BKJHWsCkMGAqMY229S', 'NELgYWgPqKwF1KD8Pwcu6sP5xS2r1Dwzub4QuOw3vXvmq8XqruO9YPGL1Wl9', NULL, '2021-05-03 04:00:39', NULL, NULL, NULL, NULL, 1, 0, 'register', '', '106738833952998328415', 'dasdasdasdasdasdasdasd', NULL),
(41, 'dainguyen', 'hppvtien@gmail.com', '2021-07-30 20:25:37', '$2y$10$rayJ/U4/vyAJn0dhPnehH..GNtioVtH7he0BKJHWsCkMGAqMY229S', 'NELgYWgPqKwF1KD8Pwcu6sP5xS2r1Dwzub4QuOw3vXvmq8XqruO9YPGL1Wl9', '2021-07-30 20:23:04', '2021-07-30 20:25:37', NULL, '0979467612', NULL, NULL, 1, 0, 'register', '', '0', 'oApwbJjFoClsLNXdpRzFn2PzgvQtQJM34zOo8BJ8', 1),
(42, 'daidai', 'nguyenxuandai217@gmail.com', '2021-07-30 22:24:57', '$2y$10$kRnDMFgMeSmgLvUiCnCbmutTB0fJPgcAaMecIFjfM0ofC4BcJ0hNm', NULL, '2021-07-30 22:24:37', '2021-08-16 21:57:22', NULL, '0979467613', NULL, NULL, 1, 0, 'register', '', '0', 'vRe5ivU7b2ALGRYNmL2tDhthncdc0A8wUvcS8iYW', NULL),
(43, 'Dan Vu', 'dk.dichvu01@gmail.com', '2021-07-31 04:29:13', '$2y$10$L8tJ6tnvhkWosBVNOY8F2u5xeTJRhI3lhcRNDuRvBnvmfabJ2E2Vq', NULL, '2021-07-31 04:28:49', '2021-07-31 04:29:13', NULL, '0356105388', NULL, NULL, 1, 0, 'register', '', '0', 'KMBRNObikRJ3KDCYSwNV2zcB7Wzg1ngauJ6EVORS', NULL),
(44, 'Dan vu', 'quantri.ct01@gmail.com', '2021-08-02 07:34:29', '$2y$10$4nldCkNdHGWhC1OHJaDye.JX6fFAMNE.RLt/Strd3S/efdCyrIvnq', NULL, '2021-08-02 07:34:11', '2021-08-02 07:34:29', NULL, '0356105388', NULL, NULL, 1, 0, 'register', '', '0', 'RqvGEfaHNRrH7MUryvKNSB6w6i50yRR03PpKYuML', 1),
(46, 'dainguyen', 'tlead01@gmail.com', '2021-08-16 20:36:53', '$2y$10$fbLouqm9jHo90j5GcOLte.g7DloFOUQxmd9OXeGv56kMJ8Q1T4MJW', NULL, '2021-08-16 20:36:21', '2021-08-16 20:36:53', NULL, '0979467612', NULL, NULL, 1, 0, 'register', '', '0', 'ntliA1FKTPipRI5orImtot4JJ1acNegafskf0pzp', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_activations`
--

CREATE TABLE `user_activations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_voucher`
--

CREATE TABLE `user_voucher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `voucher_id` bigint(20) UNSIGNED NOT NULL,
  `redeemed_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `v_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_user_id` int(11) NOT NULL DEFAULT 0,
  `v_id` int(11) NOT NULL DEFAULT 0 COMMENT ' ID khoá học, ID combo khoá học',
  `v_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT ' 1 la khoa hoc',
  `v_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_number` tinyint(4) NOT NULL DEFAULT 0,
  `v_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `v_name`, `v_user_id`, `v_id`, `v_type`, `v_content`, `v_number`, `v_status`, `created_at`, `updated_at`) VALUES
(2, '', 1, 50, 1, 'Khoá học thật hay và rất bổ ích. Hi vọng các bạn sẽ cảm nhận được nó như mình. Ngoài ra các bạn muốn mua đồ án này thì liên hệ với mình nhé.', 5, 1, '2020-12-27 01:49:18', NULL),
(3, '', 1, 50, 1, 'Khoá học thật hay và rất bổ ích. Hi vọng các bạn sẽ cảm nhận được nó như mình. Ngoài ra các bạn muốn mua đồ án này thì liên hệ với mình nhé.', 5, 1, '2020-12-27 02:49:40', NULL),
(5, '', 1, 61, 1, 'Khóa học này rất hay', 4, 1, '2021-05-11 21:15:26', NULL),
(6, '', 1, 61, 1, 'Khóa học này rất hay', 3, 1, '2021-05-11 21:16:10', NULL),
(7, '', 1, 30, 1, 'Khóa học rất hay', 3, 1, '2021-05-11 21:32:28', NULL),
(8, '', 1, 50, 1, 'Khoá học thật hay và rất bổ ích. Hi vọng các bạn sẽ cảm nhận được nó như mình. Ngoài ra các bạn muốn mua đồ án này thì liên hệ với mình nhé.', 5, 1, '2020-12-27 02:49:40', NULL),
(9, '', 1, 50, 1, 'Đúng là 1 khoá học tuyệt vời. Mình lại đang cần gặp ngay ô bạn giới thiệu', 5, 1, '2020-11-21 09:06:42', '2021-05-05 19:00:01'),
(10, 'ádfasdf', 999, 20, 1, 'ádfasdf', 0, 1, '2021-05-13 04:39:29', NULL),
(11, 'Ngonnnnnnnnnnnnnnnnnnnnnn', 34, 19, 1, 'Bài học rất bổ ích cho chúng tồi', 5, 1, '2021-05-27 01:06:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_percent` int(11) DEFAULT NULL,
  `model_qty` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expires_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `code`, `model_percent`, `model_qty`, `description`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, '1c462PIOoY', 10, 5, 'Khóa học bvcccc', '2021-06-30', '2021-06-08 23:51:49', '2021-06-11 03:40:25'),
(2, 'IHQqY4k3Fw', 10, 55, 'ádasdasdasdsadsa', '2022-06-15', '2021-06-09 00:13:19', '2021-06-12 00:17:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bank_info`
--
ALTER TABLE `bank_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_c_slug_unique` (`c_slug`),
  ADD KEY `categories_c_parent_id_index` (`c_parent_id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_pages`
--
ALTER TABLE `content_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_store`
--
ALTER TABLE `level_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_lotproduct`
--
ALTER TABLE `product_lotproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_trade`
--
ALTER TABLE `product_trade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rel_level_store`
--
ALTER TABLE `rel_level_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_t_slug_unique` (`t_slug`);

--
-- Indexes for table `uni_admin`
--
ALTER TABLE `uni_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_color`
--
ALTER TABLE `uni_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_comment`
--
ALTER TABLE `uni_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_contact`
--
ALTER TABLE `uni_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_favourite`
--
ALTER TABLE `uni_favourite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_flash_sale`
--
ALTER TABLE `uni_flash_sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_lotproduct`
--
ALTER TABLE `uni_lotproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_order`
--
ALTER TABLE `uni_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_order_nap`
--
ALTER TABLE `uni_order_nap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_post`
--
ALTER TABLE `uni_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_post_category`
--
ALTER TABLE `uni_post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_product`
--
ALTER TABLE `uni_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_product_category`
--
ALTER TABLE `uni_product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_size`
--
ALTER TABLE `uni_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_spiceclub`
--
ALTER TABLE `uni_spiceclub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_store`
--
ALTER TABLE `uni_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_supplier`
--
ALTER TABLE `uni_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_tag`
--
ALTER TABLE `uni_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_trade`
--
ALTER TABLE `uni_trade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_transaction`
--
ALTER TABLE `uni_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_user`
--
ALTER TABLE `uni_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_activation_code_index` (`code_verication`);

--
-- Indexes for table `user_activations`
--
ALTER TABLE `user_activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_voucher`
--
ALTER TABLE `user_voucher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_voucher_user_id_foreign` (`user_id`),
  ADD KEY `user_voucher_voucher_id_foreign` (`voucher_id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vouchers_code_unique` (`code`),
  ADD KEY `vouchers_model_type_model_id_index` (`model_percent`,`model_qty`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bank_info`
--
ALTER TABLE `bank_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `content_pages`
--
ALTER TABLE `content_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `level_store`
--
ALTER TABLE `level_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT for table `product_color`
--
ALTER TABLE `product_color`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `product_lotproduct`
--
ALTER TABLE `product_lotproduct`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=352;

--
-- AUTO_INCREMENT for table `product_trade`
--
ALTER TABLE `product_trade`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `rel_level_store`
--
ALTER TABLE `rel_level_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `uni_admin`
--
ALTER TABLE `uni_admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_color`
--
ALTER TABLE `uni_color`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uni_comment`
--
ALTER TABLE `uni_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `uni_contact`
--
ALTER TABLE `uni_contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `uni_favourite`
--
ALTER TABLE `uni_favourite`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_flash_sale`
--
ALTER TABLE `uni_flash_sale`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `uni_lotproduct`
--
ALTER TABLE `uni_lotproduct`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `uni_order`
--
ALTER TABLE `uni_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `uni_order_nap`
--
ALTER TABLE `uni_order_nap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `uni_post`
--
ALTER TABLE `uni_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `uni_post_category`
--
ALTER TABLE `uni_post_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `uni_product`
--
ALTER TABLE `uni_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `uni_product_category`
--
ALTER TABLE `uni_product_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `uni_size`
--
ALTER TABLE `uni_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uni_spiceclub`
--
ALTER TABLE `uni_spiceclub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_store`
--
ALTER TABLE `uni_store`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `uni_supplier`
--
ALTER TABLE `uni_supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_tag`
--
ALTER TABLE `uni_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `uni_trade`
--
ALTER TABLE `uni_trade`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uni_transaction`
--
ALTER TABLE `uni_transaction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_user`
--
ALTER TABLE `uni_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user_activations`
--
ALTER TABLE `user_activations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_voucher`
--
ALTER TABLE `user_voucher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_voucher`
--
ALTER TABLE `user_voucher`
  ADD CONSTRAINT `user_voucher_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_voucher_voucher_id_foreign` FOREIGN KEY (`voucher_id`) REFERENCES `vouchers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
