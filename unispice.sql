-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 12:59 PM
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
-- Database: `unispice`
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
(1, 'adsmo', 'hppvtien@gmail.com', NULL, '$2y$10$rayJ/U4/vyAJn0dhPnehH..GNtioVtH7he0BKJHWsCkMGAqMY229S', '0986420994', 1, NULL, NULL, NULL, NULL),
(2, 'văn nhiệm', 'nguyennadadahiemmc2k@gmail.com', NULL, '$2y$10$bWpjLt6T8y7pnBqutWSG3eSkItFK6AAOlFQXnzMShCUUmvpd3/XKG', '0766592222', 0, NULL, NULL, '2020-11-04 12:53:51', '2020-11-04 12:53:51'),
(3, 'Dược NV', 'duocnv@gmail.com', NULL, '$2y$10$rayJ/U4/vyAJn0dhPnehH..GNtioVtH7he0BKJHWsCkMGAqMY229S', '0988111222', 1, NULL, NULL, '2020-12-27 02:21:36', '2020-12-27 02:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a_name` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_question_id` int(11) NOT NULL DEFAULT 0,
  `a_correct` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `a_name`, `a_question_id`, `a_correct`, `created_at`, `updated_at`) VALUES
(1, '0 con', 1, 0, '2021-04-28 23:52:45', '2021-04-28 23:53:29'),
(2, '1 con', 1, 0, '2021-04-28 23:53:29', NULL),
(3, '2 con', 1, 0, '2021-04-28 23:53:29', NULL),
(4, '3 con', 1, 0, '2021-04-28 23:53:29', NULL),
(5, '1', 2, 0, '2021-04-28 23:55:01', NULL),
(6, '2', 2, 0, '2021-04-28 23:55:01', NULL),
(7, '3', 2, 0, '2021-04-28 23:55:01', NULL),
(8, '4', 2, 0, '2021-04-28 23:55:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `answer_to_teacher`
--

CREATE TABLE `answer_to_teacher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asw_teacher` int(11) DEFAULT NULL,
  `asw_content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asw_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asw_id_course` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asw_id_user` int(11) DEFAULT NULL,
  `asw_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `asw_parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answer_to_teacher`
--

INSERT INTO `answer_to_teacher` (`id`, `asw_teacher`, `asw_content`, `asw_image`, `asw_id_course`, `asw_id_user`, `asw_status`, `created_at`, `updated_at`, `asw_parent`) VALUES
(1, 4, 'cau hoi 1', NULL, '29', 34, 1, '2021-05-31 01:43:17', '2021-05-31 02:10:49', NULL),
(2, 4, 'cau hoi 1.1', NULL, '29', 34, 1, '2021-05-31 01:44:15', '2021-05-31 02:11:09', NULL),
(3, 4, 'cau hoi 2.1', NULL, '29', 34, 1, '2021-05-31 01:49:50', '2021-05-31 02:06:30', 1),
(4, 4, 'cau hoi 5.1', NULL, '29', 34, 1, '2021-05-31 01:52:27', '2021-05-31 01:53:57', 2),
(5, 4, 'cau hoi 3.1', NULL, '29', 34, 1, '2021-05-31 02:11:54', '2021-05-31 02:12:14', 1),
(6, 4, 'cau hoi 4.1', NULL, '29', 34, 1, '2021-05-31 02:11:54', '2021-05-31 02:12:14', 2),
(8, 4, 'ádasdasdasdasdsad', NULL, '29', 34, 1, '2021-06-01 01:44:40', NULL, 2),
(9, 4, 'cau 22222', NULL, '29', 34, 1, '2021-06-01 01:51:11', NULL, 1),
(10, 4, 'Giao vien check 22222222', NULL, '29', 34, 0, '2021-06-01 03:13:48', NULL, 1),
(11, 4, 'Chung tooii dang can biet', NULL, '29', 34, 0, '2021-06-01 03:42:32', NULL, NULL),
(12, 4, 'lâu thê', NULL, '29', 34, 0, '2021-06-01 03:43:37', NULL, 11),
(13, 4, 'qua lâu luôn', NULL, '29', 34, 0, '2021-06-01 03:43:53', NULL, 11),
(14, 4, 'lâu vcl', NULL, '29', 34, 0, '2021-06-01 03:48:26', NULL, 1),
(15, 4, 'cau hoi thu 4', NULL, '29', 34, 0, '2021-06-01 03:50:27', NULL, NULL),
(16, 3, 'cho hoi ve ffffff', NULL, '30', 34, 0, '2021-06-01 19:59:41', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_hot` tinyint(4) NOT NULL DEFAULT 0,
  `a_status` tinyint(4) NOT NULL DEFAULT 1,
  `a_menu_id` int(11) NOT NULL DEFAULT 0,
  `a_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_auth_id` int(11) NOT NULL DEFAULT 0,
  `a_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `a_name`, `a_slug`, `a_description`, `a_hot`, `a_status`, `a_menu_id`, `a_content`, `a_auth_id`, `a_title_seo`, `a_avatar`, `a_keyword_seo`, `a_description_seo`, `created_at`, `updated_at`) VALUES
(1, 'Những điều cần biết khi bắt đầu học SEO', 'nhung-dieu-can-biet-khi-bat-dau-hoc-seo', 'Học SEO có đơn giản không? Những điều cần biết khi học SEO', 0, 1, 3, 'Học SEO có đơn giản không? Những điều cần biết khi học SEO', 0, 'Những điều cần biết khi bắt đầu học SEO', NULL, NULL, 'Những điều cần biết khi bắt đầu học SEO', '2021-05-05 20:12:40', '2021-05-05 20:12:40'),
(2, 'Kiến thức thiết kế cơ bản', 'kien-thuc-thiet-ke-co-ban', 'Kiến thức thiết kế cơ bản', 0, 1, 6, '<p style=\"text-align:center\">Kiến thức thiết kế cơ bản</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/uploads/images/icon-kcc-1.jpg\" style=\"height:270px; width:366px\" /></p>', 0, 'Kiến thức thiết kế cơ bản', NULL, NULL, 'Kiến thức thiết kế cơ bản', '2021-05-06 03:25:00', NULL),
(3, 'Chạy quảng cáo như nào cho hiệu quả', 'chay-quang-cao-nhu-nao-cho-hieu-qua', 'Chạy quảng cáo như nào cho hiệu quả', 0, 1, 7, '<p>Chạy quảng c&aacute;o như n&agrave;o cho hiệu quả</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/uploads/images/banner-05.png\" style=\"height:136px; width:205px\" /></p>', 0, 'Chạy quảng cáo như nào cho hiệu quả', NULL, NULL, 'Chạy quảng cáo như nào cho hiệu quả', '2021-05-06 03:27:27', NULL),
(4, 'Thiết kế thương hiệu có cần thiết không thế', 'thiet-ke-thuong-hieu-co-can-thiet-khong-the', 'Thiết kế thương hiệu có cần thiết sadsda', 0, 1, 5, '<p>Thiết kế thương hiệu c&oacute; cần thiết</p>', 0, 'Thiết kế thương hiệu có cần thiết không thế', NULL, NULL, 'Thiết kế thương hiệu có cần thiết không thế', '2021-05-06 03:31:57', NULL),
(5, 'Kiến thức Merdia', 'kien-thuc-merdia', 'Kiến thức Merdia', 0, 1, 3, '<p>Kiến thức Merdia</p>', 0, 'Kiến thức Merdia', NULL, NULL, 'Kiến thức Merdia', '2021-07-07 20:44:55', '2021-07-07 20:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `articles_keywords`
--

CREATE TABLE `articles_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ak_article_id` int(11) NOT NULL DEFAULT 0,
  `ak_keyword_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles_keywords`
--

INSERT INTO `articles_keywords` (`id`, `ak_article_id`, `ak_keyword_id`) VALUES
(5, 1, 1),
(6, 1, 2),
(7, 2, 1),
(8, 2, 2),
(9, 3, 1),
(10, 3, 2),
(11, 4, 1),
(14, 5, 1),
(15, 5, 2);

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
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'logo-1621497786.png', 'Unimind', 'Tầng 8, Tòa nhà HD Tower – 22 Phố Mới – Thủy Sơn – Thủy Nguyên – Hải Phòng', 34343434, 'tlead01@gmail.com', '03561054882', 545454545, 'Bản quyền © 2021 UNIMIND. Đã đăng ký bản quyền.', '11111111', '22222222222222', '22222222222222', '22222222222222', '2020-11-21 09:11:08', '2021-06-03 00:42:45');

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
-- Table structure for table `contact_jobs`
--

CREATE TABLE `contact_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `j_fullname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_job_id` int(11) DEFAULT NULL,
  `j_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_file_cv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `j_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_jobs`
--

INSERT INTO `contact_jobs` (`id`, `j_fullname`, `j_job_id`, `j_email`, `j_phone`, `j_address`, `j_file_cv`, `j_status`, `created_at`, `updated_at`) VALUES
(1, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'ádasdasdasdasdasd', NULL, 0, '2021-05-19 01:56:39', NULL),
(2, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'qưeqweqweqweqweqweqwe', 'marketing-50-1621415128.pdf', 0, '2021-05-19 02:05:28', NULL),
(3, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'qưeqweqweqweqwe', 'marketing-50-2-1621415249.pdf', 0, '2021-05-19 02:07:29', NULL),
(4, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'qưeqweqweqweqwe', 'marketing-50-2-1621415323.pdf', 0, '2021-05-19 02:08:43', NULL),
(5, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'qưeqweqweqweqwe', 'marketing-50-1-1621415339.pdf', 0, '2021-05-19 02:08:59', NULL),
(6, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'qưeqweqweqweqwe', 'marketing-50-1-1621415396.pdf', 0, '2021-05-19 02:09:56', NULL),
(7, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'qưeqweqweqweqwe', 'marketing-50-1-1621415436.pdf', 0, '2021-05-19 02:10:36', NULL),
(8, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'ádasdasdasdasd', 'marketing-50-1-1621415494.pdf', 0, '2021-05-19 02:11:34', NULL),
(9, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'ádasdasdasdasd', 'marketing-50-1-1621415510.pdf', 0, '2021-05-19 02:11:50', NULL),
(10, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'ádasdasdasdasd', 'marketing-50-1-1621415541.pdf', 0, '2021-05-19 02:12:21', NULL),
(11, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'asdasdasdsad', 'marketing-50-1-1621415730.pdf', 0, '2021-05-19 02:15:30', NULL),
(12, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'ádasdasdasdasd', 'marketing-50-3-1621415826.pdf', 0, '2021-05-19 02:17:06', NULL),
(13, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'ádasdasdasdasd', 'marketing-50-3-1621415865.pdf', 0, '2021-05-19 02:17:45', NULL),
(14, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'ádasdasdasdasd', 'marketing-50-3-1621415958.pdf', 0, '2021-05-19 02:19:18', NULL),
(15, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'qweqweqweqweqweqw', 'marketing-50-2-1621415992.pdf', 0, '2021-05-19 02:19:52', NULL),
(16, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'qweqweqweqweqweqw', 'marketing-50-2-1621416059.pdf', 0, '2021-05-19 02:20:59', NULL),
(17, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'ádasdasdasd', '0', 0, '2021-05-19 02:21:13', NULL),
(18, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'ádasdasdasd', '0', 0, '2021-05-19 02:21:42', NULL),
(21, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'ádasdasd@dfdf.ccc', 'marketing-50-2-1621416200.pdf', 0, '2021-05-19 02:23:20', NULL),
(22, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'asdasdasdasdasdasdasd', 'marketing-50-3-1621416225.pdf', 0, '2021-05-19 02:23:45', NULL),
(23, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'asdasdasdasdsa', 'marketing-50-1-1621416277.pdf', 0, '2021-05-19 02:24:37', NULL),
(24, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'asdasdasdasdsa', 'marketing-50-1-1621416332.pdf', 0, '2021-05-19 02:25:32', NULL),
(25, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'asdasdasdasdsa', 'marketing-50-1-1621416360.pdf', 0, '2021-05-19 02:26:00', NULL),
(26, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'asdasdasdasdsa', 'marketing-50-1-1621416367.pdf', 0, '2021-05-19 02:26:07', NULL),
(27, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'ưeqeqweqweqwe', 'marketing-50-3-1621416392.pdf', 0, '2021-05-19 02:26:32', NULL),
(28, 'Tien', 3, 'ntdat7714@gmail.com', '0969938801', 'hải phòng', '0', 0, '2021-05-19 02:26:54', NULL),
(29, 'Tien', 3, 'ntdat7714@gmail.com', '0969938801', 'hải phòng', '0', 0, '2021-05-19 02:28:21', NULL),
(30, 'Tien', 3, 'ntdat7714@gmail.com', '0969938801', 'hải phòng', '0', 0, '2021-05-19 02:29:37', NULL),
(31, 'Tien', 3, 'ntdat7714@gmail.com', '0969938801', 'hải phòng', '0', 0, '2021-05-19 02:29:41', NULL),
(32, 'Tien', 3, 'ntdat7714@gmail.com', '0969938801', 'hải phòng', '0', 1, '2021-05-19 02:31:49', '2021-05-19 23:36:45'),
(33, 'Tien', 3, 'ntdat7714@gmail.com', '0969938801', 'hải phòng', '0', 1, '2021-05-19 02:32:06', '2021-05-19 23:36:43'),
(34, 'Tien', 3, 'ntdat7714@gmail.com', '0969938801', 'hải phòng', '0', 1, '2021-05-19 02:37:22', '2021-05-19 23:36:44'),
(35, 'Tien', 3, 'ntdat7714@gmail.com', '0969938801', 'hải phòng', '0', 1, '2021-05-19 02:43:25', '2021-05-19 23:36:42'),
(36, 'Tien Van Phêrerer', 3, 'ntdat7714@gmail.com', '0969938801', 'ádasdasdasd', 'marketing-50-1-1621417428.pdf', 1, '2021-05-19 02:43:48', '2021-05-19 23:36:42'),
(37, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'qăeqweqweqweqwe', 'marketing-50-4-1621418057.pdf', 0, '2021-05-19 02:54:17', '2021-05-19 23:36:47'),
(38, 'Tien Van Pham', 3, 'ntdat7714@gmail.com', '0969938801', 'ádasdasdasdsad', 'marketing-50-1621418086.pdf', 1, '2021-05-19 02:54:46', '2021-05-19 23:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `corrects_answers`
--

CREATE TABLE `corrects_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ca_course_id` int(11) NOT NULL DEFAULT 0,
  `ca_answer_id` int(11) NOT NULL DEFAULT 0,
  `ca_question_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corrects_answers`
--

INSERT INTO `corrects_answers` (`id`, `ca_course_id`, `ca_answer_id`, `ca_question_id`, `created_at`, `updated_at`) VALUES
(1, 61, 1, 1, '2021-04-28 23:53:59', NULL),
(2, 61, 6, 2, '2021-04-28 23:55:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_total_time` tinyint(4) NOT NULL DEFAULT 0,
  `c_status` tinyint(4) NOT NULL DEFAULT 1,
  `c_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_hot` tinyint(4) NOT NULL DEFAULT 0,
  `c_position_3` tinyint(4) NOT NULL DEFAULT 0,
  `c_position_2` tinyint(4) NOT NULL DEFAULT 0,
  `c_position_1` tinyint(4) NOT NULL DEFAULT 0,
  `c_sale` tinyint(4) NOT NULL DEFAULT 0,
  `c_level` tinyint(4) NOT NULL DEFAULT 0,
  `c_price` int(11) NOT NULL DEFAULT 0,
  `c_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_teacher_id` int(11) NOT NULL DEFAULT 0,
  `c_category_id` int(11) NOT NULL DEFAULT 0,
  `c_total_evaluate` int(11) NOT NULL DEFAULT 0,
  `c_total_star` int(11) NOT NULL DEFAULT 0,
  `c_total_pay` int(11) NOT NULL DEFAULT 0,
  `c_video_demo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `c_name`, `c_slug`, `c_total_time`, `c_status`, `c_avatar`, `c_hot`, `c_position_3`, `c_position_2`, `c_position_1`, `c_sale`, `c_level`, `c_price`, `c_title_seo`, `c_keyword_seo`, `c_description_seo`, `c_teacher_id`, `c_category_id`, `c_total_evaluate`, `c_total_star`, `c_total_pay`, `c_video_demo`, `c_about`, `c_content`, `created_at`, `updated_at`) VALUES
(1, 'Digital Marketing Strategy', 'digital-marketing-strategy', 3, 1, NULL, 0, 0, 0, 0, 10, 1, 2000000, 'Digital Marketing Strategy', NULL, 'Digital Marketing Strategy', 4, 1, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:52:05', '2021-05-12 20:11:37'),
(2, 'Digital Marketing Strategy & Campaigns', 'digital-marketing-strategy-campaigns', 2, 1, NULL, 0, 0, 0, 0, 0, 1, 1200000, 'Digital Marketing Strategy & Campaigns', NULL, 'Digital Marketing Strategy & Campaigns', 4, 1, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:52:39', NULL),
(3, 'Digital Communication Marketing', 'digital-communication-marketing', 0, 1, NULL, 0, 0, 0, 0, 0, 1, 3000000, 'Digital Communication Marketing', NULL, 'Digital Communication Marketing', 4, 1, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:53:10', NULL),
(4, 'Marketing Analytics and Insights', 'marketing-analytics-and-insights', 2, 1, NULL, 0, 0, 0, 0, 0, 1, 3000000, 'Marketing Analytics and Insights', NULL, 'Marketing Analytics and Insights', 4, 1, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:54:00', NULL),
(5, 'Digital Marketing Leadership', 'digital-marketing-leadership', 3, 1, NULL, 0, 0, 0, 0, 0, 1, 4000000, 'Digital Marketing Leadership', NULL, 'Digital Marketing Leadership', 4, 1, 0, 0, 2, NULL, NULL, NULL, '2021-05-05 03:54:25', NULL),
(6, 'Seo', 'seo', 4, 1, NULL, 0, 0, 0, 0, 0, 1, 1200000, 'Seo', NULL, 'Seo', 4, 2, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:55:08', NULL),
(7, 'SEO Standard', 'seo-standard', 3, 1, NULL, 0, 0, 0, 0, 0, 1, 5000000, 'SEO Standard', NULL, 'SEO Standard', 4, 2, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:55:37', NULL),
(8, 'SEO Advanced', 'seo-advanced', 0, 1, NULL, 0, 0, 0, 0, 0, 1, 5000000, 'SEO Advanced', NULL, 'SEO Advanced', 4, 2, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:55:56', NULL),
(9, 'SEO Manager', 'seo-manager', 0, 1, NULL, 0, 0, 0, 0, 0, 1, 4000000, 'SEO Manager', NULL, 'SEO Manager', 4, 2, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:56:17', NULL),
(10, 'Google Ads', 'google-ads', 0, 1, NULL, 0, 0, 0, 0, 0, 1, 3000000, 'Google Ads', NULL, 'Google Ads', 4, 3, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:56:49', NULL),
(11, 'Essential Google Ads', 'essential-google-ads', 0, 1, NULL, 0, 0, 0, 0, 0, 1, 3000000, 'Essential Google Ads', NULL, 'Essential Google Ads', 4, 3, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:57:17', NULL),
(12, 'Advanced Google Ads', 'advanced-google-ads', 0, 1, NULL, 0, 0, 0, 0, 0, 1, 3000000, 'Advanced Google Ads', NULL, 'Advanced Google Ads', 4, 3, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:57:43', NULL),
(13, 'Facebook Ads', 'facebook-ads', 0, 1, NULL, 0, 0, 0, 0, 0, 1, 3000000, 'Facebook Ads', NULL, 'Facebook Ads', 4, 4, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:58:06', NULL),
(14, 'Essential Facebook Ads', 'essential-facebook-ads', 0, 1, NULL, 0, 0, 0, 0, 0, 1, 4000000, 'Essential Facebook Ads', NULL, 'Essential Facebook Ads', 4, 4, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:58:33', NULL),
(15, 'Advanced Facebook Ads', 'advanced-facebook-ads', 0, 1, NULL, 0, 0, 0, 0, 0, 1, 3000000, 'Advanced Facebook Ads', NULL, 'Advanced Facebook Ads', 4, 4, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:59:09', NULL),
(16, 'Marketing Online', 'marketing-online', 0, 1, NULL, 0, 0, 0, 0, 0, 1, 3000000, 'Marketing Online', NULL, 'Marketing Online', 4, 5, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:59:30', NULL),
(17, 'Social Media Marketing', 'social-media-marketing', 0, 1, NULL, 0, 0, 0, 0, 0, 1, 4000000, 'Social Media Marketing', NULL, 'Social Media Marketing', 4, 5, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 03:59:53', NULL),
(18, 'Content Marketing', 'content-marketing', 0, 1, NULL, 0, 0, 0, 0, 0, 1, 5000000, 'Content Marketing', NULL, 'Content Marketing', 4, 5, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 04:00:09', NULL),
(19, 'Viral Marketing', 'viral-marketing', 0, 1, NULL, 0, 0, 0, 0, 0, 1, 3000000, 'Viral Marketing', NULL, 'Viral Marketing', 4, 5, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 04:00:30', NULL),
(20, 'UX and Website Design', 'ux-and-website-design', 0, 1, NULL, 0, 0, 0, 0, 0, 1, 5000000, 'UX and Website Design', NULL, 'UX and Website Design', 4, 6, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 04:01:07', NULL),
(21, 'Branding', 'branding', 0, 1, NULL, 0, 0, 0, 1, 0, 1, 4000000, 'Branding', NULL, 'Branding', 4, 7, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 04:01:26', '2021-05-12 20:13:12'),
(22, 'Brand & Content Marketing', 'brand-content-marketing', 0, 1, NULL, 0, 0, 0, 0, 0, 1, 4000000, 'Brand & Content Marketing', NULL, 'Brand & Content Marketing', 4, 7, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 04:01:46', NULL),
(23, 'Strategic Branding Identity', 'strategic-branding-identity', 0, 1, NULL, 0, 0, 0, 1, 0, 1, 6000000, 'Strategic Branding Identity', NULL, 'Strategic Branding Identity', 4, 7, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 04:02:11', '2021-05-12 20:13:04'),
(24, 'Brand Experience', 'brand-experience', 0, 1, NULL, 0, 0, 0, 1, 0, 1, 6000000, 'Brand Experience', NULL, 'Brand Experience', 4, 7, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 04:02:28', '2021-05-12 20:12:56'),
(25, 'Business Leadership', 'business-leadership', 0, 1, NULL, 0, 0, 0, 1, 0, 1, 6000000, 'Business Leadership', NULL, 'Business Leadership', 4, 8, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 04:02:47', '2021-05-12 20:12:49'),
(26, 'Leadership Principles', 'leadership-principles', 0, 1, NULL, 0, 0, 0, 1, 0, 1, 3000000, 'Leadership Principles', NULL, 'Leadership Principles', 4, 8, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 04:03:04', '2021-05-12 20:12:41'),
(27, 'Leadership Communication', 'leadership-communication', 0, 1, NULL, 0, 0, 0, 1, 0, 1, 5000000, 'Leadership Communication', NULL, 'Leadership Communication', 4, 8, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 04:03:21', '2021-05-12 20:12:35'),
(28, 'Building Organizational Cultures', 'building-organizational-cultures', 0, 1, NULL, 0, 0, 0, 1, 0, 1, 6000000, 'Building Organizational Cultures', NULL, 'Building Organizational Cultures', 3, 8, 0, 0, 0, NULL, NULL, NULL, '2021-05-05 04:03:39', '2021-05-12 20:33:07'),
(29, 'Negotiation Skills', 'negotiation-skills', 0, 1, NULL, 0, 0, 0, 1, 0, 1, 4000000, 'Negotiation Skills', NULL, 'Negotiation Skills', 4, 8, 0, 0, 1, NULL, NULL, NULL, '2021-05-05 04:03:58', '2021-05-12 20:12:24'),
(30, 'Strategic Sales Management', 'strategic-sales-management', 0, 1, 'hinh-anh-dep-1-1621498375.jpg', 0, 0, 0, 1, 10, 1, 4000000, 'Strategic Sales Management', NULL, 'Strategic Sales Management', 3, 8, 1, 3, 2, NULL, NULL, NULL, '2021-05-05 04:04:15', '2021-05-20 01:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `courses_contents`
--

CREATE TABLE `courses_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cc_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_total_video` tinyint(4) NOT NULL DEFAULT 0,
  `cc_total_question` tinyint(4) NOT NULL DEFAULT 0,
  `cc_sort` tinyint(4) NOT NULL DEFAULT 0,
  `cc_course_id` int(11) NOT NULL DEFAULT 0,
  `cc_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_faq` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses_contents`
--

INSERT INTO `courses_contents` (`id`, `cc_name`, `cc_total_video`, `cc_total_question`, `cc_sort`, `cc_course_id`, `cc_content`, `cc_faq`, `created_at`, `updated_at`) VALUES
(1, 'cơ bản', 1, 2, 0, 29, 'cơ bản', 'cơ bản', '2021-05-06 19:49:29', NULL),
(2, 'Video nâng cao', 3, 3, 0, 29, 'Video nâng cao', 'Video nâng cao', '2021-05-10 03:40:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses_tags`
--

CREATE TABLE `courses_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ct_course_id` int(11) NOT NULL,
  `ct_tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses_tags`
--

INSERT INTO `courses_tags` (`id`, `ct_course_id`, `ct_tag_id`) VALUES
(56, 1, 1),
(57, 1, 5),
(3, 2, 1),
(4, 2, 5),
(5, 3, 1),
(6, 3, 5),
(7, 4, 1),
(8, 4, 5),
(9, 5, 1),
(10, 5, 5),
(11, 6, 2),
(12, 7, 2),
(13, 8, 2),
(14, 9, 2),
(15, 10, 3),
(16, 10, 9),
(17, 11, 3),
(18, 11, 9),
(19, 12, 3),
(20, 12, 9),
(21, 13, 4),
(22, 13, 10),
(23, 14, 4),
(24, 14, 10),
(25, 15, 4),
(26, 15, 10),
(27, 16, 5),
(28, 17, 5),
(29, 18, 5),
(30, 19, 5),
(31, 20, 6),
(65, 21, 7),
(33, 22, 7),
(64, 23, 7),
(63, 24, 7),
(62, 25, 8),
(61, 26, 8),
(60, 27, 8),
(67, 28, 8),
(58, 29, 8),
(69, 30, 8);

-- --------------------------------------------------------

--
-- Table structure for table `courses_videos`
--

CREATE TABLE `courses_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cv_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv_link` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv_course_content_id` int(11) NOT NULL DEFAULT 0,
  `cv_course_id` int(11) NOT NULL DEFAULT 0,
  `cv_status` tinyint(4) NOT NULL DEFAULT 0,
  `cv_sort` tinyint(4) NOT NULL DEFAULT 0,
  `cv_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses_videos`
--

INSERT INTO `courses_videos` (`id`, `cv_name`, `cv_path`, `cv_link`, `cv_course_content_id`, `cv_course_id`, `cv_status`, `cv_sort`, `cv_content`, `created_at`, `updated_at`) VALUES
(1, 'Video 1', 'video-1622112800.mp4', 'cfRYzg70p2U', 1, 30, 0, 0, NULL, '2021-05-06 19:50:18', '2021-05-27 03:53:20'),
(2, 'video 2', 'video-1622113876.mp4', 'WIsNuWHSadQ', 1, 29, 0, 0, NULL, '2021-05-09 21:16:50', '2021-05-27 04:11:16'),
(3, 'Video nâng cao 1', '2021-05-10__video-nang-cao-1.mp4', 'g5JKNIKcOXg', 2, 29, 0, 0, NULL, '2021-05-10 03:41:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_faq`
--

CREATE TABLE `course_faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_faq`
--

INSERT INTO `course_faq` (`id`, `title`, `content`, `course_id`, `created_at`, `updated_at`) VALUES
(12, 'Tôi có thể mua khóa học này nhiều lần không?', 'Không bạn không thể mua khóa học này nhiều lần được', 30, '2021-05-11 20:46:06', '2021-05-11 20:46:06'),
(13, 'Khóa học này tồn tại bao lâu?', 'Khóa học này tồn tại vĩnh viễn', 30, '2021-05-11 20:46:44', '2021-05-11 20:46:44'),
(14, 'Tôi có được phép bán khóa học này không?', 'không bạn không được phép bán khóa học này', 30, '2021-05-11 20:59:30', '2021-05-11 20:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `course_results`
--

CREATE TABLE `course_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cr_question_id` int(11) NOT NULL DEFAULT 0,
  `cr_user_id` int(11) NOT NULL DEFAULT 0,
  `cr_course_id` int(11) NOT NULL DEFAULT 0,
  `cr_answer_id` int(11) NOT NULL DEFAULT 0,
  `cr_result_dashboard` int(11) NOT NULL DEFAULT 0,
  `cr_flag_result` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'đáp án này đúng hay sai',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_results_dashboard`
--

CREATE TABLE `course_results_dashboard` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `crd_total_answer` int(11) NOT NULL DEFAULT 0,
  `crd_total_correct_answer` int(11) NOT NULL DEFAULT 0,
  `crd_total_correct_wrong` int(11) NOT NULL DEFAULT 0,
  `crd_total_correct_empty` int(11) NOT NULL DEFAULT 0,
  `crd_user_id` int(11) NOT NULL DEFAULT 0,
  `crd_course_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, 34, 29, 1, '2021-05-26 23:10:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `free_book`
--

CREATE TABLE `free_book` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_avatar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_fb` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_down` int(11) NOT NULL,
  `desscription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_hot` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `free_book`
--

INSERT INTO `free_book` (`id`, `name`, `f_avatar`, `file_fb`, `count_down`, `desscription`, `is_hot`, `created_at`, `updated_at`) VALUES
(2, 'Giải tích 2', 'brvn3-1621494762.jpg', 'marketing-50-1-1621492981.pdf', 122, 'Giải tích 2 Giải tích 2 Giải tích 2 Giải tích 2 Giải tích 2 Giải tích 2 Giải tích 2 Giải tích 2 Giải tích 2 Giải tích 2', 1, '2021-05-19 21:23:42', '2021-05-20 00:12:46'),
(3, 'gia tich 2', 'brvn3-1622183723.jpg', 'marketing-50-4-1622183728.pdf', 12, 'gia tich 2gia tich 2gia tich 2gia tich 2gia tich 2gia tich 2gia tich 2', 0, '2021-05-27 23:35:28', NULL),
(4, 'file_fbfile_fbfile_fbfile_fbfile_fb', 'hinh-anh-dep-2-1622183991.jpg', 'marketing-50-2-1622188873.pdf', 12, 'file_fbfile_fbfile_fbfile_fbfile_fbfile_fbfile_fbfile_fbfile_fbfile_fbfile_fbfile_fbfile_fbfile_fbfile_fbfile_fbfile_fb', 0, '2021-05-28 01:01:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desscription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_hot` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `slug`, `desscription`, `content`, `phone`, `email`, `address`, `status`, `is_hot`, `user_id`, `end_date`, `created_at`, `updated_at`) VALUES
(2, 'Tuyển nhân viên SEO WEB', 'tuyen-nhan-vien-seo-web', 'Mục đích của công việc Nhân viên Seo Web chịu trách nhiệm xây dựng chiến lược, kế hoạch và trực tiếp điều hành triển khai toàn bộ hoạt động', '<h2>Y&Ecirc;U CẦU C&Ocirc;NG VIỆC</h2>\r\n\r\n<ul>\r\n	<li>Giới t&iacute;nh: Nam/Nữ</li>\r\n	<li>Độ tuổi: Từ 20 tuổi trở l&ecirc;n</li>\r\n	<li>Bằng cấp: Kh&ocirc;ng y&ecirc;u cầu</li>\r\n	<li>Kinh nghiệm: Tối thiểu đ&atilde; c&oacute; 2 năm kinh nghiệm tham gia c&aacute;c dự &aacute;n SEO, hoặc l&agrave;m việc ở vị tr&iacute; SEO.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Kiến thức chuy&ecirc;n m&ocirc;n:</li>\r\n</ul>\r\n\r\n<p>+ C&oacute; kinh nghiệm hiểu biết s&acirc;u về SEO v&agrave; marketing online&nbsp;+ Biết tổng hợp nhiều phương ph&aacute;p marketing nhằm tăng thứ hạng website tr&ecirc;n c&ocirc;ng cụ t&igrave;m kiếm.&nbsp;+ Khắc phục c&aacute;c lỗi bảo mật tr&ecirc;n website, chỉnh sửa &ndash; thay đổi v&agrave; tối ưu h&oacute;a website phục vụ cho c&ocirc;ng việc SEO&nbsp;+ C&oacute; kinh nghiệm thiết kế web, am hiểu về code PHP&amp;MySQL</p>\r\n\r\n<ul>\r\n	<li>Kỹ năng:</li>\r\n</ul>\r\n\r\n<p>+ Kỹ năng lập kế hoạch&nbsp;+ Kỹ năng quản l&yacute; c&ocirc;ng việc c&aacute; nh&acirc;n, quản l&yacute; thời gian&nbsp;+ Kỹ năng quản l&yacute; nh&oacute;m, phối hợp với c&aacute;c th&agrave;nh vi&ecirc;n trong nh&oacute;m v&agrave; ph&ograve;ng ban kh&aacute;c.&nbsp;+ Kỹ năng giao tiếp</p>\r\n\r\n<ul>\r\n	<li>Th&aacute;i độ/T&iacute;nh c&aacute;ch h&ograve;a đồng: Y&ecirc;u th&iacute;ch v&agrave; nghi&ecirc;m t&uacute;c với c&ocirc;ng việc</li>\r\n	<li>Kỷ luật:</li>\r\n</ul>\r\n\r\n<p>+ Th&aacute;i độ t&iacute;ch cực, chủ động trong c&ocirc;ng việc&nbsp;+ L&agrave;m việc cam kết, chủ động, đ&uacute;ng tiến độ, lu&ocirc;n c&oacute; &yacute; thức th&uacute;c đẩy bản th&acirc;n tiến bộ, chịu kh&oacute; học hỏi v&agrave; &aacute;p dụng v&agrave;o c&ocirc;ng việc</p>\r\n\r\n<ul>\r\n	<li>Lương: Thỏa thuận</li>\r\n	<li>Thưởng:</li>\r\n</ul>\r\n\r\n<p>+ Đ&aacute;nh gi&aacute; xếp hạng tăng lương định kỳ&nbsp;+ Thưởng hiệu quả hoạt động chung của c&ocirc;ng ty</p>\r\n\r\n<ul>\r\n	<li>Đ&agrave;o tạo:</li>\r\n</ul>\r\n\r\n<p>+ Hỗ trợ tham gia c&aacute;c kh&oacute;a học chuy&ecirc;n ng&agrave;nh</p>\r\n\r\n<ul>\r\n	<li>Phụ cấp, c&aacute;c quyền lợi kh&aacute;c:</li>\r\n</ul>\r\n\r\n<p>+ Đ&oacute;ng BHXH đầy đủ.&nbsp;+ Du lịch c&ugrave;ng c&ocirc;ng ty&nbsp;&nbsp;+ Nghỉ Chủ nhật&nbsp;+ Thưởng c&aacute;c dịp lễ tết</p>\r\n\r\n<h2>TH&Ocirc;NG TIN LI&Ecirc;N HỆ</h2>\r\n\r\n<p>Địa chỉ: Số 22 Phố Mới, Thủy Sơn, Thủy Nguy&ecirc;n, Hải Ph&ograve;ng&nbsp;&nbsp;Số điện thoại: 0225.625.8809&nbsp;&nbsp;Email: tuyendung@adsmo.vn</p>', 345345345, 'xaynhatrongoihaiphong@gmail.com', 'thủy sơn thủy nguyên hải phòng', 1, 1, 0, '2021-05-30', '2021-05-15 00:09:53', '2021-05-15 00:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `k_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `k_sort` tinyint(4) NOT NULL DEFAULT 0,
  `k_status` tinyint(4) NOT NULL DEFAULT 1,
  `k_hot` tinyint(4) NOT NULL DEFAULT 0,
  `k_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `k_name`, `k_slug`, `k_sort`, `k_status`, `k_hot`, `k_title_seo`, `k_avatar`, `k_keyword_seo`, `k_description_seo`, `created_at`, `updated_at`) VALUES
(1, 'Tin hot', 'tin-hot', 0, 1, 0, 'Tin hot', NULL, NULL, 'Ban hang', '2021-04-22 18:29:15', '2021-05-05 19:46:57'),
(2, 'Tin mới trong ngày', 'tin-moi-trong-ngay', 0, 1, 0, 'Tin mới trong ngày', NULL, NULL, 'Tin mới trong ngày', '2021-05-05 19:47:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keywords_search`
--

CREATE TABLE `keywords_search` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ks_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ks_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ks_count` tinyint(4) NOT NULL DEFAULT 0,
  `ks_total_count_search` int(11) NOT NULL DEFAULT 0,
  `ks_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keywords_search`
--

INSERT INTO `keywords_search` (`id`, `ks_name`, `ks_slug`, `ks_count`, `ks_total_count_search`, `ks_status`, `created_at`, `updated_at`) VALUES
(1, 'khoá học lập trình', 'khoa-hoc-lap-trinh', 7, 0, 0, '2020-11-17 11:04:11', NULL),
(2, '121', '121', 0, 0, 0, '2020-12-15 19:25:59', NULL),
(3, '342342424', '342342424', 0, 1, 0, '2020-12-23 07:19:34', '2020-12-23 07:19:35'),
(4, 'ĐỒNG HỒ EPOS', 'dong-ho-epos', 3, 1, 0, '2020-12-25 20:01:37', '2020-12-25 20:01:45'),
(5, 'k', 'k', 1, 0, 0, '2020-12-26 11:48:06', NULL),
(6, 'Đón đầu xu thế – Xây dựng cỗ máy bán hàng trên Tiktok', 'don-dau-xu-the-xay-dung-co-may-ban-hang-tren-tiktok', 18, 5, 0, '2020-12-26 13:30:17', '2020-12-27 18:14:35'),
(7, 'ád', 'ad', 1, 0, 0, '2020-12-27 02:46:10', NULL),
(8, 'a', 'a', 1, 0, 0, '2020-12-27 02:46:12', NULL),
(9, 'fa', 'fa', 1, 0, 0, '2020-12-27 02:46:17', NULL),
(10, 'Facebook Chuyên Sâu Lever 2', 'facebook-chuyen-sau-lever-2', 6, 0, 0, '2020-12-27 02:46:22', NULL),
(11, 'Quảng Cáo Instagram', 'quang-cao-instagram', 5, 0, 0, '2020-12-27 05:18:57', NULL),
(12, 'Quảng cáo Facebook', 'quang-cao-facebook', 5, 0, 0, '2020-12-27 16:06:46', NULL),
(13, '\"sádas', 'sadas', 2, 0, 0, '2020-12-28 01:41:00', NULL),
(14, NULL, '', 0, 6, 0, '2020-12-28 02:59:06', '2021-05-14 21:44:26'),
(15, 'Quảng Cáo Facebook Bài Bản', 'quang-cao-facebook-bai-ban', 9, 0, 0, '2020-12-28 02:59:13', NULL),
(16, 'Khóa học Photosho', 'khoa-hoc-photosho', 5, 0, 0, '2021-01-04 07:05:39', NULL),
(17, 'Khóa Học Nâng Cao Kỹ Năng Mềm', 'khoa-hoc-nang-cao-ky-nang-mem', 12, 0, 0, '2021-02-25 10:01:00', NULL),
(18, 'thuyet trinh', 'thuyet-trinh', 2, 0, 0, '2021-04-28 19:15:01', NULL),
(19, 'Kỹ năng thuyết trình và nói trước công chúng', 'ky-nang-thuyet-trinh-va-noi-truoc-cong-chung', 16, 0, 0, '2021-04-28 19:16:03', NULL),
(20, 'Quảng cáo', 'quang-cao', 4, 0, 0, '2021-05-02 21:05:40', NULL),
(21, 'marketing', 'marketing', 1, 1, 0, '2021-05-14 21:39:54', '2021-05-15 01:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_sort` tinyint(4) NOT NULL DEFAULT 0,
  `m_status` tinyint(4) NOT NULL DEFAULT 1,
  `m_hot` tinyint(4) NOT NULL DEFAULT 0,
  `m_position` tinyint(4) NOT NULL DEFAULT 0,
  `m_parent_id` int(11) NOT NULL DEFAULT 0,
  `m_child_all` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_parent_all` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `m_name`, `m_slug`, `m_icon`, `m_sort`, `m_status`, `m_hot`, `m_position`, `m_parent_id`, `m_child_all`, `m_parent_all`, `m_title_seo`, `m_avatar`, `m_keyword_seo`, `m_description_seo`, `created_at`, `updated_at`) VALUES
(1, 'Góc kiến thức', 'bai-viet', 'fa fa-bandcamp', 0, 1, 0, 0, 0, NULL, NULL, 'Góc kiến thức', NULL, NULL, 'Tin 1', '2020-12-20 08:51:41', '2021-05-05 19:45:45'),
(2, 'Kiến thức Digital Marketing', 'kien-thuc-digital-marketing', 'fa fa-bandcamp', 0, 1, 0, 0, 1, NULL, NULL, 'Kiến thức Digital Marketing', NULL, NULL, 'Kiến thức Digital Marketing', '2021-05-05 19:48:29', NULL),
(4, 'Kiến thức Content Marketing', 'kien-thuc-content-marketing', 'blogmenu', 0, 1, 0, 0, 1, NULL, NULL, 'Kiến thức Content Marketing', NULL, NULL, 'Kiến thức Content Marketing', '2021-05-05 19:49:34', NULL),
(5, 'Kiến thức Branding', 'kien-thuc-branding', 'fa fa-bandcamp', 0, 1, 0, 0, 1, NULL, NULL, 'Kiến thức Branding', NULL, NULL, 'Kiến thức Branding', '2021-05-05 19:50:35', NULL),
(6, 'Kiến thức Website Design', 'kien-thuc-website-design', 'fa fa-bandcamp', 0, 1, 0, 0, 1, NULL, NULL, 'Kiến thức Website Design', NULL, NULL, 'Kiến thức Website Design', '2021-05-05 19:51:55', NULL),
(7, 'Kiến thức về quảng cáo số', 'kien-thuc-ve-quang-cao-so', 'fa fa-bandcamp', 0, 1, 0, 0, 1, NULL, NULL, 'Kiến thức về quảng cáo số', NULL, NULL, 'Kiến thức về quảng cáo số', '2021-05-05 20:03:31', NULL),
(8, 'Kiến thức Leadership', 'kien-thuc-leadership', 'fa fa-bandcamp', 0, 1, 0, 0, 1, NULL, NULL, 'Kiến thức Leadership', NULL, NULL, 'Kiến thức Leadership', '2021-05-05 20:03:49', NULL);

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `o_transaction_id` int(11) NOT NULL DEFAULT 0,
  `o_action_id` int(11) NOT NULL DEFAULT 0 COMMENT 'ID khoa hoc hoac combo hoac cai gi day',
  `o_user_id` int(11) NOT NULL DEFAULT 0,
  `o_sale` tinyint(4) NOT NULL DEFAULT 0,
  `o_price` int(11) NOT NULL DEFAULT 0,
  `o_status` tinyint(4) NOT NULL DEFAULT 1,
  `o_admin_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `o_transaction_id`, `o_action_id`, `o_user_id`, `o_sale`, `o_price`, `o_status`, `o_admin_id`, `created_at`, `updated_at`) VALUES
(1, 1, 30, 1, 0, 4000000, 3, 0, NULL, NULL),
(3, 3, 30, 1, 0, 4000000, 1, 0, NULL, NULL),
(4, 3, 29, 1, 0, 4000000, 1, 0, NULL, NULL),
(5, 4, 29, 1, 0, 4000000, 1, 0, NULL, NULL),
(6, 4, 1, 1, 0, 2000000, 1, 0, NULL, NULL),
(7, 4, 9, 1, 0, 4000000, 1, 0, NULL, NULL),
(8, 5, 9, 1, 0, 4000000, 1, 0, NULL, NULL),
(9, 6, 29, 1, 0, 4000000, 1, 0, NULL, NULL),
(10, 7, 30, 1, 0, 4000000, 1, 0, NULL, NULL),
(11, 8, 28, 1, 0, 6000000, 1, 0, NULL, NULL),
(12, 9, 28, 1, 0, 6000000, 1, 0, NULL, NULL),
(13, 10, 29, 1, 0, 4000000, 1, 0, NULL, NULL),
(14, 11, 27, 1, 0, 5000000, 1, 0, NULL, NULL),
(15, 12, 28, 1, 0, 6000000, 1, 0, NULL, NULL),
(16, 13, 28, 1, 0, 6000000, 1, 0, NULL, NULL),
(17, 14, 28, 1, 0, 6000000, 1, 0, NULL, NULL),
(18, 15, 30, 1, 0, 4000000, 1, 0, NULL, NULL),
(19, 16, 30, 1, 0, 4000000, 1, 0, NULL, NULL),
(20, 17, 29, 1, 0, 4000000, 1, 0, NULL, NULL),
(21, 18, 28, 1, 0, 6000000, 1, 0, NULL, NULL),
(22, 19, 30, 1, 0, 4000000, 1, 0, NULL, NULL),
(23, 20, 28, 1, 0, 6000000, 1, 0, NULL, NULL),
(24, 21, 29, 1, 0, 4000000, 1, 0, NULL, NULL),
(25, 22, 30, 1, 0, 4000000, 1, 0, NULL, NULL),
(26, 23, 30, 1, 0, 4000000, 1, 0, NULL, NULL),
(27, 24, 27, 1, 0, 5000000, 1, 0, NULL, NULL),
(28, 30, 28, 1, 0, 6000000, 1, 0, NULL, NULL),
(29, 33, 27, 1, 0, 5000000, 1, 0, NULL, NULL),
(30, 34, 29, 1, 0, 4000000, 1, 0, NULL, NULL),
(31, 35, 27, 1, 0, 5000000, 1, 0, NULL, NULL),
(32, 36, 28, 1, 0, 6000000, 1, 0, NULL, NULL),
(33, 37, 28, 1, 0, 6000000, 1, 0, NULL, NULL),
(34, 38, 30, 1, 0, 4000000, 1, 0, NULL, NULL),
(35, 39, 30, 1, 0, 4000000, 1, 0, NULL, NULL),
(36, 40, 29, 1, 0, 4000000, 1, 0, NULL, NULL),
(37, 41, 29, 1, 0, 4000000, 1, 0, NULL, NULL),
(38, 42, 29, 1, 0, 4000000, 1, 0, NULL, NULL),
(39, 95, 30, 34, 0, 4000000, 1, 0, NULL, NULL),
(40, 96, 30, 34, 0, 4000000, 1, 0, NULL, NULL),
(41, 97, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(42, 98, 30, 34, 0, 4000000, 1, 0, NULL, NULL),
(43, 99, 30, 34, 0, 4000000, 1, 0, NULL, NULL),
(44, 100, 30, 34, 0, 4000000, 1, 0, NULL, NULL),
(45, 101, 30, 34, 0, 4000000, 1, 0, NULL, NULL),
(46, 102, 30, 34, 0, 4000000, 1, 0, NULL, NULL),
(47, 103, 5, 34, 0, 4000000, 3, 0, NULL, NULL),
(48, 104, 19, 34, 0, 3000000, 1, 0, NULL, NULL),
(49, 105, 19, 34, 0, 3000000, 1, 0, NULL, NULL),
(50, 106, 19, 34, 0, 3000000, 1, 0, NULL, NULL),
(51, 107, 30, 34, 0, 4000000, 1, 0, NULL, NULL),
(52, 108, 28, 34, 0, 6000000, 1, 0, NULL, NULL),
(53, 109, 28, 34, 0, 6000000, 1, 0, NULL, NULL),
(54, 110, 28, 34, 0, 6000000, 1, 0, NULL, NULL),
(55, 111, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(56, 111, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(57, 112, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(58, 112, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(59, 113, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(60, 113, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(61, 114, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(62, 114, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(63, 115, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(64, 115, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(65, 116, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(66, 116, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(67, 117, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(68, 117, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(69, 118, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(70, 118, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(71, 119, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(72, 119, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(73, 120, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(74, 120, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(75, 121, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(76, 121, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(77, 122, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(78, 122, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(79, 123, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(80, 123, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(81, 124, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(82, 124, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(83, 125, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(84, 125, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(85, 126, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(86, 126, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(87, 127, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(88, 127, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(89, 128, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(90, 128, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(91, 129, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(92, 129, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(93, 130, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(94, 130, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(95, 131, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(96, 131, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(97, 132, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(98, 132, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(99, 133, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(100, 133, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(101, 134, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(102, 134, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(103, 135, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(104, 135, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(105, 136, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(106, 136, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(107, 137, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(108, 137, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(109, 138, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(110, 138, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(111, 139, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(112, 139, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(113, 140, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(114, 140, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(115, 141, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(116, 141, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(117, 142, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(118, 142, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(119, 143, 29, 34, 0, 4000000, 1, 0, NULL, NULL),
(120, 143, 27, 34, 0, 5000000, 1, 0, NULL, NULL),
(121, 144, 28, 34, 0, 6000000, 1, 0, NULL, NULL),
(122, 145, 5, 34, 0, 4000000, 1, 0, NULL, NULL),
(123, 145, 4, 34, 0, 3000000, 1, 0, NULL, NULL),
(124, 146, 5, 34, 0, 4000000, 1, 0, NULL, NULL),
(125, 146, 4, 34, 0, 3000000, 1, 0, NULL, NULL),
(126, 147, 5, 34, 0, 4000000, 1, 0, NULL, NULL),
(127, 147, 4, 34, 0, 3000000, 1, 0, NULL, NULL),
(128, 148, 5, 34, 0, 4000000, 1, 0, NULL, NULL),
(129, 148, 4, 34, 0, 3000000, 1, 0, NULL, NULL),
(130, 149, 5, 34, 0, 4000000, 1, 0, NULL, NULL),
(131, 149, 4, 34, 0, 3000000, 1, 0, NULL, NULL),
(132, 150, 30, 34, 0, 4000000, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `pages` (`id`, `p_name`, `p_slug`, `p_desscription`, `p_title_seo`, `p_desscription_seo`, `p_content`, `p_style`, `p_banner`, `created_at`, `updated_at`) VALUES
(1, 'Giới thiệu', 'gioi-thieu-ve-adsmo', 'Giới thiệu về chúng tồi', 'Chúng tôi là adsmo', 'Chúng tôi cung cấp các dịch vụ', '<h2>CH&Uacute;NG T&Ocirc;I L&Agrave; AI?​</h2>\r\n\r\n<p><strong>ADSMO</strong>&nbsp;l&agrave; một thương hiệu của&nbsp;<strong>C&ocirc;ng ty TNHH UNIKERY</strong>, chuy&ecirc;n cung cấp giải ph&aacute;p&nbsp;<strong>Digital Marketing</strong>, tư vấn<strong>&nbsp;x&acirc;y dựng v&agrave; ph&aacute;t triển thương hiệu</strong>&nbsp;to&agrave;n diện. Ch&uacute;ng t&ocirc;i ứng dụng c&ocirc;ng nghệ th&ocirc;ng tin, kỹ thuật số trong hoạt động truyền th&ocirc;ng, marketing gi&uacute;p doanh nghiệp x&acirc;y dựng thương hiệu bền vững.</p>\r\n\r\n<p>L&agrave;n s&oacute;ng c&aacute;ch mạng c&ocirc;ng nghiệp 4.0 đ&atilde; t&aacute;c động mạnh mẽ đến đời sống, kinh tế &ndash; x&atilde; hội của to&agrave;n cầu, trong đ&oacute; c&oacute; Việt Nam. Kỷ nguy&ecirc;n mới đ&atilde; bắt đầu với số h&oacute;a, mobile, mạng x&atilde; hội tạo n&ecirc;n mạng lưới dữ liệu kết nối to&agrave;n cầu. C&aacute;c hoạt động marketing của doanh nghiệp giờ đ&acirc;y kh&ocirc;ng đơn thuần vận h&agrave;nh theo phương thức truyền thống m&agrave; c&ograve;n chịu t&aacute;c động mạnh mẽ bởi tổ hợp đa k&ecirc;nh truyền th&ocirc;ng kh&aacute;c nhau từ online đến offline. Cuộc c&aacute;ch mạng đ&atilde; đặt ra nhiều th&aacute;ch thức với c&aacute;c doanh nghiệp Việt Nam trong khai th&aacute;c, ứng dụng th&agrave;nh tựu khoa học &amp; c&ocirc;ng nghệ phục vụ hoạt động Marketing. Doanh nghiệp muốn tồn tại v&agrave; ph&aacute;t triển trong thời đại số h&oacute;a cần phải ứng dụng linh hoạt c&ocirc;ng nghệ, x&acirc;y dựng chiến lược kinh doanh, hoạt động marketing to&agrave;n diện. Ch&iacute;nh v&igrave; vậy,&nbsp;<strong>ADSMO&nbsp;</strong>lu&ocirc;n mong muốn g&oacute;p một phần nhỏ trong hoạt động th&uacute;c đẩy ứng dụng khoa học, đổi mới tư duy s&aacute;ng tạo, h&igrave;nh th&agrave;nh hệ sinh th&aacute;i c&ocirc;ng nghệ, đồng h&agrave;nh c&ugrave;ng doanh nghiệp vươn tầm thương hiệu đến to&agrave;n cầu.</p>\r\n\r\n<p><img alt=\"\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/gioi-thieu-thanh-vien-cong-ty-adsmo.jpg\" style=\"height:451px; width:1201px\" /></p>\r\n\r\n<p><strong>ADSMO</strong>&nbsp;được th&agrave;nh lập bởi c&aacute;c nh&agrave; quản trị doanh nghiệp, marketer, chiến lược gia ph&aacute;t triển thương hiệu c&ugrave;ng đội ngũ lập tr&igrave;nh vi&ecirc;n, kỹ thuật vi&ecirc;n đam m&ecirc;, s&aacute;ng tạo. C&ocirc;ng ty ứng dụng c&ocirc;ng nghệ, digital l&agrave;m cầu nối gắn kết sản phẩm của doanh nghiệp đến kh&aacute;ch h&agrave;ng, cộng đồng x&atilde; hội.&nbsp;</p>\r\n\r\n<p>Thương hiệu&nbsp;<strong>ADSMO</strong>&nbsp;được tạo n&ecirc;n bởi c&aacute;c tổ hợp&nbsp;<strong>ADVERTISING</strong>&nbsp;&ndash;&nbsp;<strong>SEARCH</strong>&nbsp;&ndash;&nbsp;<strong>MARKETING</strong>&nbsp;&ndash;&nbsp;<strong>OPTIMIZING</strong>. Ch&uacute;ng t&ocirc;i ph&aacute;t triển v&agrave; x&acirc;y dựng giải ph&aacute;p marketing tối ưu gi&uacute;p gia tăng gi&aacute; trị thương hiệu dựa tr&ecirc;n gi&aacute; trị cốt l&otilde;i của sản phẩm, dịch vụ m&agrave; doanh nghiệp cung cấp.<strong>&nbsp;ADSMO</strong>&nbsp;kh&ocirc;ng ngừng cập nhật thuật to&aacute;n, tối ưu, đổi mới c&ocirc;ng nghệ, tiếp cận kiến thức Marketing mới của nh&acirc;n loại để lan tỏa đến x&atilde; hội, kết nối cộng đồng dựa tr&ecirc;n nền tảng c&ocirc;ng nghệ kỹ thuật số.&nbsp;<strong>ADSMO&nbsp;</strong>kh&ocirc;ng muốn bất cứ doanh nghiệp n&agrave;o phải chậm bước trong h&agrave;nh tr&igrave;nh chạm tay đến c&ocirc;ng nghệ marketing ti&ecirc;n tiến. Với nguồn lực vững mạnh, đội ngũ nh&acirc;n vi&ecirc;n trẻ năng động, s&aacute;ng tạo, sẵn s&agrave;ng ph&aacute; bỏ r&agrave;o cản, ch&uacute;ng t&ocirc;i kh&ocirc;ng chỉ tư vấn, cung cấp giải ph&aacute;p Marketing tối ưu m&agrave; c&ograve;n đem đến trải nghiệm tuyệt vời kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<h2>BAN ĐIỀU H&Agrave;NH</h2>\r\n\r\n<p><img alt=\"Daniel Vu\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/vu-manh-dieu.png\" /></p>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">Daniel Vu</a></h3>\r\n\r\n<h5>COO, Business &amp; Brand Dev. Consultant</h5>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">Daniel Vu</a></h3>\r\n\r\n<h5>COO, Business &amp; Brand Dev. Consultant</h5>\r\n\r\n<p><img alt=\"Tuấn Anh\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/bui-tuan-anh.png\" /></p>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">Tuấn Anh</a></h3>\r\n\r\n<h5>Head of SEO &amp; PPC Dep.</h5>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">Tuấn Anh</a></h3>\r\n\r\n<h5>Head of SEO &amp; PPC Dep.</h5>\r\n\r\n<p><img alt=\"Bùi Hường\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/nguyen-thi-huong.png\" /></p>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">B&ugrave;i Hường</a></h3>\r\n\r\n<h5>Head of Acct.&amp; Finance</h5>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">B&ugrave;i Hường</a></h3>\r\n\r\n<h5>Head of Acct.&amp; Finance</h5>\r\n\r\n<p><img alt=\"Thu Thảo\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/nguyen-thu-thao.png\" /></p>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">Thu Thảo</a></h3>\r\n\r\n<h5>Head of Digital Marketing</h5>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">Thu Thảo</a></h3>\r\n\r\n<h5>Head of Digital Marketing</h5>\r\n\r\n<p><img alt=\" Nhật Ninh\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/nhu-nhat-ninh.png\" /></p>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">Nhật Ninh</a></h3>\r\n\r\n<h5>Head PR &amp; Media Communication</h5>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">Nhật Ninh</a></h3>\r\n\r\n<h5>Head PR &amp; Media Communication</h5>\r\n\r\n<p><img alt=\"Đại Nguyễn\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/dai-nguyen.png\" /></p>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">Đại Nguyễn</a></h3>\r\n\r\n<h5>Head of Technology Dev.</h5>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">Đại Nguyễn</a></h3>\r\n\r\n<h5>Head of Technology Dev.</h5>\r\n\r\n<p><img alt=\"Vân Anh\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/nguyen-van-anh.png\" /></p>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">V&acirc;n Anh</a></h3>\r\n\r\n<h5>Lead of Copywriting</h5>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">V&acirc;n Anh</a></h3>\r\n\r\n<h5>Lead of Copywriting</h5>\r\n\r\n<p><img alt=\"Bích Ngọc\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/bich-ngoc.png\" /></p>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">B&iacute;ch Ngọc</a></h3>\r\n\r\n<h5>Lead of Creative Content</h5>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">B&iacute;ch Ngọc</a></h3>\r\n\r\n<h5>Lead of Creative Content</h5>\r\n\r\n<p><img alt=\"Minh Thùy\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/minh-thuy.png\" /></p>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">Minh Th&ugrave;y</a></h3>\r\n\r\n<h5>Lead of Graphic Design</h5>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">Minh Th&ugrave;y</a></h3>\r\n\r\n<h5>Lead of Graphic Design</h5>\r\n\r\n<p><img alt=\"Ngọc Yến\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/ngoc-yen.png\" /></p>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">Ngọc Yến</a></h3>\r\n\r\n<h5>Lead of Frontend Dev.</h5>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<h3><a href=\"https://adsmo.vn/ve-chung-toi/#\">Ngọc Yến</a></h3>\r\n\r\n<h5>Lead of Frontend Dev.</h5>\r\n\r\n<p><img alt=\"\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/logo-adsmo.png\" style=\"height:265px; width:615px\" /></p>\r\n\r\n<h2>TẦM NH&Igrave;N</h2>\r\n\r\n<p>Trở th&agrave;nh đối t&aacute;c h&agrave;ng đầu tại khu vực trong sự ph&aacute;t triển kinh doanh của kh&aacute;ch h&agrave;ng th&ocirc;ng qua giải ph&aacute;p&nbsp;<strong>Digital Marketing</strong>&nbsp;to&agrave;n diện v&agrave;&nbsp;<strong>Chiến Lược Thương Hiệu</strong>&nbsp;t&ugrave;y chỉnh, được x&acirc;y dựng tr&ecirc;n nền tảng c&ocirc;ng nghệ số g&oacute;p phần th&uacute;c đẩy x&atilde; hội ph&aacute;t triển bền vững.</p>\r\n\r\n<h2>SỨ MỆNH</h2>\r\n\r\n<h3>Đối với kh&aacute;ch h&agrave;ng</h3>\r\n\r\n<p>Kiến tạo hệ sinh th&aacute;i sản phẩm, dịch vụ c&ocirc;ng nghệ chất lượng cao, tối ưu chi ph&iacute; v&agrave; hiệu quả hỗ trợ kh&aacute;ch h&agrave;ng ph&aacute;t triển thương hiệu bền vững, gia tăng gi&aacute; trị doanh nghiệp trong tương lai l&acirc;u d&agrave;i.</p>\r\n\r\n<h3>Đối với cổ đ&ocirc;ng</h3>\r\n\r\n<p>L&agrave; doanh nghiệp uy t&iacute;n, đạo đức, minh bạch, cam kết ph&aacute;t triển theo đ&uacute;ng chiến lược với sứ mệnh v&agrave; tầm nh&igrave;n của c&ocirc;ng ty, đ&aacute;p ứng kỳ vọng của cổ đ&ocirc;ng hợp t&aacute;c.</p>\r\n\r\n<h3>Đối với c&aacute;n bộ nh&acirc;n vi&ecirc;n</h3>\r\n\r\n<p>X&acirc;y dựng m&ocirc;i trường l&agrave;m việc năng động, s&aacute;ng tạo, chuy&ecirc;n nghiệp v&agrave; c&ocirc;ng bằng gi&uacute;p nh&acirc;n vi&ecirc;n ph&aacute;t triển sự nghiệp bản th&acirc;n, ph&aacute;t huy khả năng s&aacute;ng tạo, sự nhạy b&eacute;n trong c&ocirc;ng việc.</p>\r\n\r\n<h3>Đối với x&atilde; hội</h3>\r\n\r\n<p>L&agrave; đơn vị c&oacute; tr&aacute;ch nhiệm x&atilde; hội cao, gắn liền lợi &iacute;ch doanh nghiệp v&agrave; lợi &iacute;ch của x&atilde; hội, g&oacute;p phần mang tri thức marketing mới đến gần với cộng đồng x&atilde; hội.</p>\r\n\r\n<h2>TRIẾT L&Yacute; KINH DOANH CỦA ADSMO</h2>\r\n\r\n<p><img alt=\"\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/triet-ly-kinh-doanh-adsmo.png\" style=\"height:501px; width:500px\" /></p>\r\n\r\n<ul>\r\n	<li>Ch&uacute;ng t&ocirc;i tối ưu h&oacute;a giải ph&aacute;p ph&aacute;t triển doanh nghiệp, tiết kiệm nguồn lực v&agrave; tối đa h&oacute;a hiệu quả.</li>\r\n	<li>Ch&uacute;ng t&ocirc;i h&agrave;i h&ograve;a, c&acirc;n bằng lợi &iacute;ch giữa c&aacute;c b&ecirc;n. X&acirc;y dựng mối quan hệ dựa tr&ecirc;n sự đồng thuận, thống nhất giữa kh&aacute;ch h&agrave;ng v&agrave; doanh nghiệp.</li>\r\n	<li>Ch&uacute;ng t&ocirc;i c&oacute; tr&aacute;ch nhiệm, đạo đức trong c&ocirc;ng việc. Ch&uacute;ng t&ocirc;i cung cấp c&aacute;c giải ph&aacute;p an to&agrave;n, minh bạch, r&otilde; r&agrave;ng ph&ugrave; hợp với từng kh&aacute;ch h&agrave;ng, đối t&aacute;c.</li>\r\n	<li>Ch&uacute;ng t&ocirc;i ph&aacute; vỡ r&agrave;o cản, định kiến trong c&ocirc;ng việc, hướng tới &yacute; tưởng s&aacute;ng tạo, đột ph&aacute;, nhạy b&eacute;n nắm bắt c&aacute;c xu hướng ph&aacute;t triển mới.</li>\r\n	<li>Ch&uacute;ng t&ocirc;i n&oacute;i kh&ocirc;ng với ti&ecirc;u cực, gian lận, hợp t&aacute;c v&agrave; l&agrave;m việc tr&ecirc;n tinh thần thượng t&ocirc;n ph&aacute;p luật.</li>\r\n	<li>Ch&uacute;ng t&ocirc;i x&acirc;y dựng niềm tin, lấy chữ T&Iacute;N l&agrave;m gốc, kh&ocirc;ng lừa dối kh&aacute;ch h&agrave;ng, kh&ocirc;ng lừa dối đồng nghiệp, kh&ocirc;ng lừa dối x&atilde; hội.</li>\r\n</ul>\r\n\r\n<h2>GI&Aacute; TRỊ CỐT L&Otilde;I</h2>\r\n\r\n<h2>Tại Adsmo ch&uacute;ng t&ocirc;i l&agrave;m việc theo</h2>\r\n\r\n<p><img alt=\"\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/gia-tri-cot-loi-adsmo.png\" style=\"height:565px; width:1219px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/nhay-ben.png\" style=\"height:300px; width:390px\" /></p>\r\n\r\n<h2>Acumen<br />\r\nNhạy b&eacute;n</h2>\r\n\r\n<p><img alt=\"\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/nhay-ben-adsmo.jpg\" style=\"height:300px; width:910px\" /></p>\r\n\r\n<p>C&ocirc;ng ty lu&ocirc;n thay đổi, cập nhật th&ocirc;ng tin mới để tạo sự kh&aacute;c biệt, kết hợp giữa kinh nghiệm, kiến thức, quan điểm, nhận thức, kh&ocirc;ng ngừng n&acirc;ng cao kỹ năng, chuy&ecirc;n m&ocirc;n để đưa ra những định hướng, quyết định đ&uacute;ng đắn trong hoạt động marketing, đẩy nhanh hiệu suất c&ocirc;ng việc cho ch&iacute;nh c&ocirc;ng ty v&agrave; kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/sieng-nang-adsmo.jpg\" style=\"height:300px; width:910px\" /></p>\r\n\r\n<p>Si&ecirc;ng năng l&agrave; phẩm chất, đức t&iacute;nh của đội ngũ nh&acirc;n vi&ecirc;n ADSMO. Bởi ch&uacute;ng t&ocirc;i hiểu tr&ecirc;n con đường th&agrave;nh c&ocirc;ng kh&ocirc;ng c&oacute; bước ch&acirc;n của người lười biếng, th&agrave;nh c&ocirc;ng chỉ đến với người thực sự cố gắng, ki&ecirc;n tr&igrave;, nỗ lực trong c&ocirc;ng việc, d&aacute;m vượt qua mọi kh&oacute; khăn, thử th&aacute;ch, ch&ocirc;ng gai để đến với vinh quang.</p>\r\n\r\n<p><img alt=\"\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/sieng-nang.png\" style=\"height:301px; width:391px\" /></p>\r\n\r\n<h2>Diligence<br />\r\nSi&ecirc;ng năng</h2>\r\n\r\n<p><img alt=\"\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/suc-manh-tong-hop.png\" style=\"height:300px; width:389px\" /></p>\r\n\r\n<h2>Synergy<br />\r\nSức mạnh tổng hợp</h2>\r\n\r\n<p><img alt=\"\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/suc-manh-tong-hop-adsmo.jpg\" style=\"height:301px; width:910px\" /></p>\r\n\r\n<p>Sức mạnh tổng hợp x&acirc;y dựng dựa tr&ecirc;n sự gắn kết của to&agrave;n thể đội ngũ nh&acirc;n vi&ecirc;n ADSMO. Th&agrave;nh c&ocirc;ng của ch&uacute;ng t&ocirc;i kh&ocirc;ng đến từ một th&agrave;nh vi&ecirc;n, cũng kh&ocirc;ng đến từ nh&oacute;m người m&agrave; đến từ sự đo&agrave;n kết của tất cả nh&acirc;n vi&ecirc;n c&ocirc;ng ty, đồng l&ograve;ng hướng về mục ti&ecirc;u chung. ADSMO hiểu &ldquo;Muốn đi nhanh th&igrave; đi một m&igrave;nh, muốn đi xa th&igrave; đi c&ugrave;ng nhau&rdquo; lu&ocirc;n đ&uacute;ng trong tất cả c&aacute;c lĩnh vực, đặc biệt trong hoạt động kinh doanh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://adsmo.vn/wp-content/uploads/2021/03/dao-duc-kinh-doanh-adsmo.jpg\" style=\"height:300px; width:910px\" /></p>\r\n\r\n<p>ADSMO kh&ocirc;ng hoạt động dựa tr&ecirc;n lợi &iacute;ch của doanh nghiệp m&agrave; dựa tr&ecirc;n tối đa h&oacute;a lợi &iacute;ch hợp t&aacute;c giữa c&aacute;c b&ecirc;n. C&ocirc;ng ty c&acirc;n bằng lợi &iacute;ch giữa doanh nghiệp với kh&aacute;ch h&agrave;ng, đối t&aacute;c; doanh nghiệp với nh&acirc;n vi&ecirc;n; doanh nghiệp đối với cộng đồng x&atilde; hội.</p>\r\n\r\n<p><img alt=\"\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/dao-duc.png\" style=\"height:300px; width:390px\" /></p>\r\n\r\n<h2>Morality<br />\r\nĐạo đức</h2>\r\n\r\n<p><img alt=\"\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/toi-uu.png\" style=\"height:300px; width:390px\" /></p>\r\n\r\n<h2>Optimality<br />\r\nTối ưu</h2>\r\n\r\n<p><img alt=\"\" src=\"https://adsmo.vn/wp-content/uploads/2021/02/toi-uu-adsmo.jpg\" style=\"height:300px; width:910px\" /></p>\r\n\r\n<p>ADSMO chủ động v&agrave; l&agrave;m chủ c&ocirc;ng nghệ nhằm tối ưu h&oacute;a c&aacute;c giải ph&aacute;p Marketing cung cấp cho doanh nghiệp. Tối ưu về nh&acirc;n lực, tối ưu về chi ph&iacute;, tối ưu về thời gian, tối ưu c&aacute;c quy tr&igrave;nh trong hoạt động kinh doanh gi&uacute;p doanh nghiệp, kh&aacute;ch h&agrave;ng, đối t&aacute;c đạt được hiệu quả, gi&aacute; trị c&ocirc;ng việc cao nhất.</p>', 'about-us', 'hinh-anh-dep-1-1621499079.jpg', '2021-05-14 20:47:10', '2021-05-20 01:24:42'),
(2, 'Inhouse', 'inhouse', 'inhouse', 'Inhouse', 'Chúng tôi sẽ đến từng nhà để hướng dẫn các bạn.', '<p>Tư vấn, thiết lập mục ti&ecirc;u đ&agrave;o tạo chung, ph&ugrave; hợp với nhu cầu v&agrave; đặc th&ugrave; doanh nghiệp<br />\r\n<br />\r\nPh&acirc;n t&iacute;ch đặc điểm, c&aacute;c nguồn lực của doanh nghiệp dựa tr&ecirc;n nhu cầu để thiết lập những b&agrave;i giảng hiệu quả v&agrave; kinh tế nhất d&agrave;nh cho doanh nghiệp<br />\r\n<br />\r\nThiết kế b&agrave;i giảng khoa học v&agrave; tối ưu, ph&ugrave; hợp với đặc th&ugrave; nh&oacute;m đ&agrave;o tạo, kết hợp giữa gi&aacute;o dục truyền thống v&agrave; c&ocirc;ng nghệ hiện đại để học vi&ecirc;n c&oacute; thể tiếp thu b&agrave;i giảng một c&aacute;ch nhanh ch&oacute;ng v&agrave; dễ hiểu nhất<br />\r\n<br />\r\nTriển khai chương tr&igrave;nh đ&agrave;o tạo, kh&ocirc;ng ngừng tiếp thu phản hồi của học vi&ecirc;n để kh&oacute;a học diễn ra th&agrave;nh c&ocirc;ng nhất<br />\r\n<br />\r\nĐ&aacute;nh gi&aacute; sau đ&agrave;o tạo, gi&uacute;p doanh nghiệp c&oacute; th&ecirc;m cơ sở để ph&aacute;t huy tối đa điểm mạnh cũng như giảm thiểu những điểm yếu của học vi&ecirc;n</p>', 'in-house', 'brvn-1621324936.jpg', '2021-05-14 21:18:49', '2021-05-18 01:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'tag_index', 'admins', 'Quản lý từ khoá', 2, '2020-10-30 21:23:49', '2020-10-30 21:23:49'),
(2, 'tag_create', 'admins', 'Thêm từ khoá', 2, '2020-10-30 21:24:00', '2020-10-30 21:24:00'),
(3, 'tag_edit', 'admins', 'Cập nhật từ khoá', 2, '2020-10-30 21:24:12', '2020-10-30 21:24:12'),
(4, 'tag_delete', 'admins', 'Xoá từ khoá', 2, '2020-10-30 21:24:22', '2020-10-30 21:24:22'),
(5, 'category_index', 'admins', 'Quản lý danh mục', 3, '2020-10-30 21:24:33', '2020-10-30 21:24:33'),
(6, 'category_create', 'admins', 'Thêm mới danh mục', 3, '2020-10-30 21:24:45', '2020-10-30 21:24:45'),
(7, 'category_edit', 'admins', 'Cập nhật danh mục', 3, '2020-10-30 21:24:58', '2020-10-30 21:24:58'),
(8, 'category_delete', 'admins', 'Xoá danh mục', 3, '2020-10-30 21:25:08', '2020-10-30 21:25:08'),
(9, 'teacher_index', 'admins', 'Quản lý giáo viên', 4, '2020-10-30 21:25:23', '2020-10-30 21:25:23'),
(10, 'teacher_create', 'admins', 'Thêm mới giáo viên', 4, '2020-10-30 21:25:34', '2020-10-30 21:25:34'),
(11, 'teacher_edit', 'admins', 'Cập nhật giáo viên', 4, '2020-10-30 21:25:51', '2020-10-30 21:25:51'),
(12, 'teacher_delete', 'admins', 'Xoá giáo viên', 4, '2020-10-30 21:26:04', '2020-10-30 21:26:04'),
(13, 'course_index', 'admins', 'Quản lý khoá học', 5, '2020-10-30 21:26:17', '2020-10-30 21:26:17'),
(14, 'course_create', 'admins', 'Thêm mới khoá học', 5, '2020-10-30 21:26:28', '2020-10-30 21:26:28'),
(15, 'course_edit', 'admins', 'Cập nhật khoá học', 5, '2020-10-30 21:26:58', '2020-10-30 21:26:58'),
(16, 'course_delete', 'admins', 'Xoá khoá học', 5, '2020-10-30 21:27:08', '2020-10-30 21:27:08'),
(17, 'course_content_add', 'admins', 'Thêm mới content khoá học', 5, '2020-10-30 21:27:29', '2020-10-30 21:27:29'),
(18, 'slide_index', 'admins', 'Quản lý slide', 9, '2020-10-30 21:28:34', '2020-10-30 21:28:34'),
(19, 'slide_create', 'admins', 'Thêm mới slide', 9, '2020-10-30 21:28:48', '2020-10-30 21:28:48'),
(20, 'slide_edit', 'admins', 'Cập nhật slide', 9, '2020-10-30 21:28:59', '2020-10-30 21:28:59'),
(21, 'slide_delete', 'admins', 'Xoá slide', 9, '2020-10-30 21:29:09', '2020-10-30 21:29:09'),
(22, 'user_index', 'admins', 'Quản lý thành viên', 10, '2020-10-30 21:29:29', '2020-10-30 21:29:29'),
(23, 'user_create', 'admins', 'Thêm mới thành viên', 10, '2020-10-30 21:29:43', '2020-10-30 21:29:43'),
(24, 'user_edit', 'admins', 'Cập nhật thành viên', 10, '2020-10-30 21:29:55', '2020-10-30 21:29:55'),
(25, 'user_delete', 'admins', 'Xoá thành viên', 10, '2020-10-30 21:30:06', '2020-10-30 21:30:06'),
(27, 'full', 'admins', 'full', 1, '2021-04-04 22:44:56', '2021-04-04 22:47:45');

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
(5, 1, 1, NULL, NULL),
(6, 1, 2, NULL, NULL);

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
(2, 1, 1, NULL, NULL),
(10, 1, 3, NULL, NULL),
(18, 1, 10, NULL, NULL),
(27, 1, 6, NULL, NULL),
(28, 1, 9, NULL, NULL);

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
(6, 1, 3, NULL, NULL, NULL),
(7, 1, 4, NULL, NULL, NULL),
(8, 1, 5, NULL, NULL, NULL),
(10, 1, 7, NULL, NULL, NULL),
(11, 1, 8, NULL, NULL, NULL),
(13, 1, 10, NULL, NULL, NULL),
(20, 1, 6, NULL, NULL, NULL),
(21, 1, 9, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_lotproduct`
--

CREATE TABLE `product_lotproduct` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `lotproduct_id` int(11) DEFAULT NULL,
  `inventory` int(11) DEFAULT NULL,
  `price_lotproduct` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_lotproduct`
--

INSERT INTO `product_lotproduct` (`id`, `product_id`, `lotproduct_id`, `inventory`, `price_lotproduct`, `created_at`, `updated_at`) VALUES
(4, 9, 1, 100, 500, '2021-07-06 21:10:47', NULL),
(5, 9, 1, 100, 500, '2021-07-06 21:13:24', NULL),
(6, 9, 2, 500, 500, '2021-07-06 21:14:45', NULL),
(7, 9, 1, 500, 500, '2021-07-06 21:48:11', NULL),
(8, 9, 2, 500, 500, '2021-07-07 02:39:05', NULL),
(9, 6, 6, 2500, 550, '2021-07-10 02:47:21', NULL),
(10, 4, 4, 2000, 550, '2021-07-10 02:49:42', NULL),
(11, 3, 5, 800, 600, '2021-07-10 02:53:36', NULL),
(12, 3, 5, 200, 600, '2021-07-10 02:55:19', NULL),
(13, 3, 5, 200, 600, '2021-07-10 02:55:35', NULL),
(14, 3, 5, 200, 600, '2021-07-10 02:58:24', NULL),
(15, 3, 5, 200, 600, '2021-07-10 02:59:15', NULL),
(16, 3, 5, 200, 500, '2021-07-10 03:01:56', NULL),
(17, 3, 5, 200, 600, '2021-07-10 03:37:38', NULL),
(18, 3, 5, 100, 600, '2021-07-10 03:41:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `size_id`, `product_id`, `created_at`, `updated_at`) VALUES
(6, 1, 3, NULL, NULL),
(7, 1, 4, NULL, NULL),
(8, 1, 5, NULL, NULL),
(10, 1, 7, NULL, NULL),
(11, 1, 8, NULL, NULL),
(13, 1, 10, NULL, NULL),
(20, 1, 6, NULL, NULL),
(21, 1, 9, NULL, NULL);

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
(6, 1, 3, NULL, NULL),
(7, 1, 4, NULL, NULL),
(8, 1, 5, NULL, NULL),
(10, 1, 7, NULL, NULL),
(11, 1, 8, NULL, NULL),
(13, 1, 10, NULL, NULL),
(21, 1, 6, NULL, NULL),
(22, 1, 9, NULL, NULL);

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
(5, 1, 3, NULL, NULL),
(6, 1, 4, NULL, NULL),
(7, 1, 5, NULL, NULL),
(9, 1, 7, NULL, NULL),
(10, 1, 8, NULL, NULL),
(12, 1, 10, NULL, NULL),
(19, 1, 6, NULL, NULL),
(20, 1, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `q_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên câu hỏi',
  `q_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q_total_answers` tinyint(4) NOT NULL DEFAULT 0,
  `q_course_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `q_name`, `q_slug`, `q_total_answers`, `q_course_id`, `created_at`, `updated_at`) VALUES
(1, 'Một con lợn + một con chó bằng mấy  con', 'mot-con-lon-mot-con-cho-bang-may-con', 0, 61, '2021-04-28 23:52:45', '2021-04-28 23:52:45'),
(2, '1 + 1 bằng mấy?', '1-1-bang-may', 0, 61, '2021-04-28 23:55:01', '2021-04-28 23:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `questions_from_teacher`
--

CREATE TABLE `questions_from_teacher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qs_answerID` int(11) DEFAULT NULL,
  `qs_content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions_from_teacher`
--

INSERT INTO `questions_from_teacher` (`id`, `qs_answerID`, `qs_content`, `created_at`, `updated_at`) VALUES
(1, 1, 'tra loi 1', '2021-05-31 01:43:53', '2021-05-31 02:10:49'),
(2, 2, 'tra loi 1.1', '2021-05-31 01:53:57', NULL),
(3, 3, 'tra loi 2.1', '2021-05-31 02:03:27', '2021-05-31 02:11:09'),
(4, 4, 'tra loi 3.1', '2021-05-31 02:06:30', NULL),
(5, 5, 'tra loi 4.1', '2021-05-31 02:12:14', NULL),
(6, 6, 'tra loi 5.1', '2021-05-31 02:12:14', NULL),
(8, 9, 'tra loi 52.1', '2021-05-31 02:12:14', NULL);

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
(1, 1),
(3, 2),
(5, 1),
(7, 2),
(9, 1),
(11, 2),
(13, 1),
(15, 2),
(17, 1),
(18, 1),
(20, 2),
(22, 1),
(23, 1),
(24, 1),
(24, 2),
(25, 1),
(27, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seo_blog`
--

CREATE TABLE `seo_blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sb_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sb_md5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sb_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 keyword, 2 menu, 3 article',
  `sb_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_blog`
--

INSERT INTO `seo_blog` (`id`, `sb_slug`, `sb_md5`, `sb_type`, `sb_id`, `created_at`, `updated_at`) VALUES
(1, 'tin-hot-k', '2730180250b752b53bda1294cfa5d2b8', 1, 1, '2021-05-05 19:46:57', '2021-05-05 19:46:57'),
(2, 'gia-vi-nau-001-m', 'a99f38f6b4b23d7b64b4f78a50c0a22f', 2, 1, '2021-07-04 21:15:38', '2021-07-04 21:15:38'),
(4, 'tin-moi-trong-ngay-k', '4711daa7b71e972e7a0f08906e757915', 1, 2, '2021-05-05 19:47:36', NULL),
(5, 'kien-thuc-digital-marketing-m', '0a11d0d67bd85e1d3f61a3e3cc9f3b47', 2, 2, '2021-05-05 19:48:29', NULL),
(7, 'kien-thuc-content-marketing-m', 'ce63762cf9ce98e6347fa89d348775b9', 2, 4, '2021-05-05 19:49:34', NULL),
(8, 'kien-thuc-branding-m', '0084d98dc10e81a3aa9a5000bbcb04eb', 2, 5, '2021-05-05 19:50:35', NULL),
(9, 'kien-thuc-website-design-m', '80050ca69b7bd79c0e48299b241cd049', 2, 6, '2021-05-05 19:51:55', NULL),
(10, 'kien-thuc-ve-quang-cao-so-m', '80d806a502ea6d8e7c32c0a19554d6d2', 2, 7, '2021-05-05 20:03:31', NULL),
(11, 'kien-thuc-leadership-m', '2175528512494e914601099c5618c8a0', 2, 8, '2021-05-05 20:03:49', NULL),
(12, 'nhung-dieu-can-biet-khi-bat-dau-hoc-seo-a', '3d20a95dd570903ec08a30684ec72069', 3, 1, '2021-05-05 20:12:40', '2021-05-05 20:12:40'),
(13, 'kien-thuc-thiet-ke-co-ban-a', '284547209cb69d3deeaee510818c8ccb', 3, 2, '2021-05-06 03:25:00', NULL),
(14, 'chay-quang-cao-nhu-nao-cho-hieu-qua-a', 'de689a7315d98e00fd414b03654da653', 3, 3, '2021-05-06 03:27:27', NULL),
(15, 'thiet-ke-thuong-hieu-co-can-thiet-khong-the-a', '0dc21fa1218e14e388524192bc313c65', 3, 4, '2021-05-06 03:31:57', NULL),
(16, 'kien-thuc-merdia-a', 'ea2c9b0be930362c295eabc320d0a4b5', 3, 5, '2021-05-07 19:37:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_education`
--

CREATE TABLE `seo_education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `se_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `se_md5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `se_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 tag, 2 category, 3 course',
  `se_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_education`
--

INSERT INTO `seo_education` (`id`, `se_slug`, `se_md5`, `se_type`, `se_id`, `created_at`, `updated_at`) VALUES
(1, 'digital-marketing-c', '250c554762b7685e87fa97feae1c6ec8', 1, 1, '2021-05-05 03:38:50', '2021-05-05 03:38:50'),
(2, 'seo-c', '30195a2dc03b84b6cda599175e008048', 1, 2, '2021-05-05 03:39:58', NULL),
(3, 'google-ads-c', '84340bd411a2ce2927dd0e33a076c49f', 1, 3, '2021-05-05 03:40:23', NULL),
(4, 'facebook-ads-c', 'b1d087002ecadfeb5369d5faef3f06f1', 1, 4, '2021-05-05 03:40:36', NULL),
(5, 'marketing-online-c', '62185678eaae06dce52ef4415e536465', 1, 5, '2021-05-05 03:41:29', NULL),
(6, 'ux-and-website-design-c', '5009e886f572d997b96fea6c0cd6e023', 1, 6, '2021-05-05 03:41:45', NULL),
(7, 'branding-c', '2df7076275a32d03ebfd9f181cfd6f61', 1, 7, '2021-05-05 03:41:56', NULL),
(8, 'business-leadership-c', '4fc957440838ccaffaf163595aff87a7', 1, 8, '2021-05-05 03:42:06', NULL),
(9, 'digital-marketing-t', '9cdf4a1e2359ffa3e3b90e5a061d4c15', 2, 1, '2021-05-05 03:48:23', NULL),
(10, 'seo-t', 'f0eb2546b0fd7c9ed102f952c06c4fa5', 2, 2, '2021-05-05 03:48:55', NULL),
(11, 'google-ads-t', '295e28602eeaddf498d527aae2a0c824', 2, 3, '2021-05-05 03:49:22', NULL),
(12, 'facebook-ads-t', '35c3c80bae63a5772f7cd463f7b14499', 2, 4, '2021-05-05 03:49:37', NULL),
(13, 'marketing-online-t', '431d5bda16c77aa701bf1419a15cd9f5', 2, 5, '2021-05-05 03:49:50', NULL),
(14, 'website-design-t', 'a99274867583a860487498d649f8ecb1', 2, 6, '2021-05-05 03:50:09', NULL),
(15, 'branding-t', '9dd6605d32cd5531f4229defcbb59c3c', 2, 7, '2021-05-05 03:50:19', NULL),
(16, 'business-leadership-t', 'abb12e89449eb0d2a3771f6fcd141cda', 2, 8, '2021-05-05 03:50:35', NULL),
(17, 'quang-cao-google-t', 'a4e0e826b6a05ed2f920f780fb93d7a3', 2, 9, '2021-05-05 03:51:04', NULL),
(18, 'quang-cao-facebook-t', '1d88f4abca18ff45756845c66c437b0c', 2, 10, '2021-05-05 03:51:21', NULL),
(19, 'digital-marketing-strategy-cr', '2481d12accb9becfa50655dcf9232832', 3, 1, '2021-05-05 03:52:05', NULL),
(20, 'digital-marketing-strategy-campaigns-cr', 'bcf227cfcab70e0bca50c86e22b1a246', 3, 2, '2021-05-05 03:52:39', NULL),
(21, 'digital-communication-marketing-cr', 'a5a5b3c514ba3b1ea0eeea6b8606121e', 3, 3, '2021-05-05 03:53:10', NULL),
(22, 'marketing-analytics-and-insights-cr', '48e10a485a36cbfe880d64219ee02d0e', 3, 4, '2021-05-05 03:54:00', NULL),
(23, 'digital-marketing-leadership-cr', '7f115e8e41a61d55098d6f4a39af554c', 3, 5, '2021-05-05 03:54:25', NULL),
(24, 'seo-cr', 'fb6a12a934aa4a94b2a12b5e3a2b6fff', 3, 6, '2021-05-05 03:55:08', NULL),
(25, 'seo-standard-cr', '09ef623884a41ee7ba0a9827354f0ac3', 3, 7, '2021-05-05 03:55:37', NULL),
(26, 'seo-advanced-cr', '2209eb528a26c2e8d9c25117b4f6e7fd', 3, 8, '2021-05-05 03:55:56', NULL),
(27, 'seo-manager-cr', '037ca8fffbd5254f50c26661539af714', 3, 9, '2021-05-05 03:56:17', NULL),
(28, 'google-ads-cr', 'a6debce1cd72380b1baee476290715d8', 3, 10, '2021-05-05 03:56:49', NULL),
(29, 'essential-google-ads-cr', '9e049cab6e23aebb58de0d92170470a9', 3, 11, '2021-05-05 03:57:17', NULL),
(30, 'advanced-google-ads-cr', '3ee7806ecca6fe9f580458e944369560', 3, 12, '2021-05-05 03:57:43', NULL),
(31, 'facebook-ads-cr', '6b313f11ffad0dda98d0fc9defafacfd', 3, 13, '2021-05-05 03:58:06', NULL),
(32, 'essential-facebook-ads-cr', 'a08507e807df6bba0cec5f8c5cf1e64b', 3, 14, '2021-05-05 03:58:33', NULL),
(33, 'advanced-facebook-ads-cr', '1c80235f33444efdaf3bb13ee78fa5d6', 3, 15, '2021-05-05 03:59:09', NULL),
(34, 'marketing-online-cr', '10047eaace356f9bd87c694dfb1d8cb7', 3, 16, '2021-05-05 03:59:30', NULL),
(35, 'social-media-marketing-cr', '4cb0c5afd690ea33f3f26ec2187dc8a5', 3, 17, '2021-05-05 03:59:53', NULL),
(36, 'content-marketing-cr', '70ca971bcdb126656fe7817d6bf18690', 3, 18, '2021-05-05 04:00:09', NULL),
(37, 'viral-marketing-cr', '0d918349a3d1301f01a86db9583d178e', 3, 19, '2021-05-05 04:00:30', NULL),
(38, 'ux-and-website-design-cr', '82a56da6486e1f36dbf47e4fa1875439', 3, 20, '2021-05-05 04:01:07', NULL),
(39, 'branding-cr', '157ff494f780e867165db1df664c9a5a', 3, 21, '2021-05-05 04:01:26', NULL),
(40, 'brand-content-marketing-cr', 'e1ab99d9f7a7e197ac389b7e49c590bb', 3, 22, '2021-05-05 04:01:46', NULL),
(41, 'strategic-branding-identity-cr', '5fb08e4a82620120f68be5920404c3db', 3, 23, '2021-05-05 04:02:11', NULL),
(42, 'brand-experience-cr', 'f5db46745dc62c1345e689f3791328ca', 3, 24, '2021-05-05 04:02:28', NULL),
(43, 'business-leadership-cr', '2a4c9fd91fb2fc7a05906522bdb0616b', 3, 25, '2021-05-05 04:02:47', NULL),
(44, 'leadership-principles-cr', '4ff0d0d57349ac79cab30fa94584a794', 3, 26, '2021-05-05 04:03:04', NULL),
(45, 'leadership-communication-cr', 'fcd1c85c2f0e700ef9720199a1443c7c', 3, 27, '2021-05-05 04:03:21', NULL),
(46, 'building-organizational-cultures-cr', '43981964daef3ff4214e4e1b44b042d7', 3, 28, '2021-05-05 04:03:39', NULL),
(47, 'negotiation-skills-cr', '55b43f60a7afda6bb52a8067b2d37118', 3, 29, '2021-05-05 04:03:58', NULL),
(48, 'strategic-sales-management-cr', 'b40e81c21daa08842dadf96105d3fbce', 3, 30, '2021-05-05 04:04:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_desscription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_target` tinyint(4) NOT NULL DEFAULT 1,
  `s_sort` tinyint(4) NOT NULL DEFAULT 1,
  `s_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `s_name`, `s_desscription`, `s_link`, `s_banner`, `s_target`, `s_sort`, `s_status`, `created_at`, `updated_at`) VALUES
(1, 'Training', '<p>Tomorrow&#39;s <span>Leader</span></p>', 'https://www.adsmo.vn', 'hinh-anh-dep-1-1621498093.jpg', 1, 1, 1, '2020-10-29 12:37:35', '2021-05-21 02:04:48'),
(2, 'Tên Nghề nghiệp', '<p>T&ocirc;i đ&atilde; ra trường được khoảng hai năm, Unimind đ&atilde; thay đổi c&aacute;ch nh&igrave;n của t&ocirc;i về sự nghiệp của t&ocirc;i. Tham gia c&aacute;c kh&oacute;a học nền tảng trong tiếp thị đ&atilde; gi&uacute;p t&ocirc;i khởi động sự nghiệp của m&igrave;nh.</p>', 'https://www.adsmo', 'hinh-anh-dep-1-1621498093.jpg', 1, 2, 1, '2020-10-29 12:38:03', '2021-05-13 21:49:05'),
(3, 'Tên nghề nghiệp 01', '<p>T&ocirc;i đ&atilde; ra trường được khoảng hai năm, Unimind đ&atilde; thay đổi c&aacute;ch nh&igrave;n của t&ocirc;i về sự nghiệp của t&ocirc;i. Tham gia c&aacute;c kh&oacute;a học nền tảng trong tiếp thị đ&atilde; gi&uacute;p t&ocirc;i khởi động sự nghiệp của m&igrave;nh.</p>', 'https://www.adsmo.vn', 'hinh-anh-dep-1-1621498093.jpg', 1, 2, 1, '2020-10-29 12:38:18', '2021-05-13 21:48:58'),
(4, 'Tên nghề nghiệp 02', '<p>T&ocirc;i đ&atilde; ra trường được khoảng hai năm, Unimind đ&atilde; thay đổi c&aacute;ch nh&igrave;n của t&ocirc;i về sự nghiệp của t&ocirc;i. Tham gia c&aacute;c kh&oacute;a học nền tảng trong tiếp thị đ&atilde; gi&uacute;p t&ocirc;i khởi động sự nghiệp của m&igrave;nh.</p>', 'https://adsmo.vn/', 'hinh-anh-dep-1-1621498093.jpg', 1, 2, 1, '2021-05-12 01:24:56', '2021-05-20 01:08:27');

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
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_count_course` tinyint(4) NOT NULL DEFAULT 0,
  `t_question` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `t_name`, `email`, `password`, `t_slug`, `t_avatar`, `t_job`, `t_phone`, `t_email`, `t_description`, `t_content`, `t_count_course`, `t_question`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Thu Thảo', NULL, NULL, 'nguyen-thu-thao', NULL, 'Chuyên viên Marketing', '0979324123', 'phamthuthao@gmail.com', NULL, '<p>Chuy&ecirc;n vi&ecirc;n Marketing Online</p>', 0, 0, '2021-05-04 21:57:46', '2021-05-13 20:28:33'),
(2, 'Teacher Tien', 'hppvtien@gmail.com', '$2y$10$TSAZhOcoEvyfb/GG1T5ya.24MguuRjpgO2pT0nbHndgbeXCEIxgFG', 'pham-van-tien', NULL, 'Giảng viên Web Developer', '0978912354', 'phamvantien@gmail.com', NULL, '<p>Giảng vi&ecirc;n Web Developer</p>', 0, 0, '2021-05-04 21:58:53', NULL),
(3, 'Lê Minh Thùy', NULL, NULL, 'le-minh-thuy', NULL, 'Giảng viên Design', '0989345423', 'leminhthuy@gmail.com', NULL, '<p>Giảng vi&ecirc;n Design</p>', 0, 0, '2021-05-04 22:00:07', NULL),
(4, 'Bùi Tuấn Anh', 'pvtien@gmail.com', '$2y$10$TSAZhOcoEvyfb/GG1T5ya.24MguuRjpgO2pT0nbHndgbeXCEIxgFG', 'bui-tuan-anh', NULL, 'Giảng viên Digital Marketing', '0958934523', 'buituananh@gmail.com', NULL, '<p style=\"text-align:center\">Giảng vi&ecirc;n Digital Marketing</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>', 0, 0, '2021-05-04 22:01:33', '2021-05-06 02:33:07'),
(5, 'Vũ Mạnh Điều', NULL, NULL, 'vu-manh-dieu', 'hinh-anh-dep-1-1621499630.jpg', 'Marketing Online', '0356105388', 'adtlead@gmail.com', NULL, '<p>Marketing Online</p>', 0, 0, '2021-05-13 20:23:01', '2021-05-20 01:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_tags`
--

CREATE TABLE `teachers_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tt_teacher_id` int(11) NOT NULL DEFAULT 0,
  `tt_tag_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers_tags`
--

INSERT INTO `teachers_tags` (`id`, `tt_teacher_id`, `tt_tag_id`, `created_at`, `updated_at`) VALUES
(3, 2, 6, NULL, NULL),
(4, 3, 6, NULL, NULL),
(14, 4, 1, NULL, NULL),
(15, 4, 2, NULL, NULL),
(16, 4, 3, NULL, NULL),
(17, 4, 4, NULL, NULL),
(18, 4, 5, NULL, NULL),
(19, 4, 7, NULL, NULL),
(20, 4, 8, NULL, NULL),
(21, 4, 9, NULL, NULL),
(23, 1, 1, NULL, NULL),
(24, 1, 5, NULL, NULL),
(26, 5, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_user_id` int(11) NOT NULL DEFAULT 0,
  `t_admin_id` int(11) NOT NULL DEFAULT 0,
  `t_total_money` int(11) NOT NULL DEFAULT 0,
  `t_code` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_type_pay` tinyint(4) NOT NULL DEFAULT 1,
  `t_status` tinyint(4) NOT NULL DEFAULT 1,
  `t_time_process` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `t_user_id`, `t_admin_id`, `t_total_money`, `t_code`, `t_note`, `t_phone`, `t_type_pay`, `t_status`, `t_time_process`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 4000000, NULL, NULL, NULL, 1, 4, NULL, '2021-05-11 21:31:03', '2021-05-20 02:45:42'),
(4, 1, 0, 10000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 04:05:37', NULL),
(5, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 04:06:50', NULL),
(6, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 04:25:51', NULL),
(7, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 18:56:45', NULL),
(8, 1, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:03:13', NULL),
(9, 1, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:04:41', NULL),
(10, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:05:44', NULL),
(11, 1, 0, 5000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:20:44', NULL),
(12, 1, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:21:41', NULL),
(13, 1, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:22:26', NULL),
(14, 1, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:23:54', NULL),
(15, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:24:36', NULL),
(16, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:27:46', NULL),
(17, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:28:11', NULL),
(18, 1, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:31:07', NULL),
(19, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:33:23', NULL),
(20, 1, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:36:07', NULL),
(21, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:38:25', NULL),
(22, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:40:23', NULL),
(23, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:41:36', NULL),
(24, 1, 0, 5000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:43:16', NULL),
(25, 1, 0, 0, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:43:18', NULL),
(26, 1, 0, 0, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:43:20', NULL),
(27, 1, 0, 0, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:43:21', NULL),
(28, 1, 0, 0, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:43:23', NULL),
(29, 1, 0, 0, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:43:24', NULL),
(30, 1, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:44:09', NULL),
(31, 1, 0, 0, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:44:17', NULL),
(32, 1, 0, 0, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:44:19', NULL),
(33, 1, 0, 5000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:46:55', NULL),
(34, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:47:50', NULL),
(35, 1, 0, 5000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:48:38', NULL),
(36, 1, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:52:26', NULL),
(37, 1, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:53:33', NULL),
(38, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:55:56', NULL),
(39, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:57:00', NULL),
(40, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 20:58:18', NULL),
(41, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:02:23', NULL),
(42, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:11:59', NULL),
(43, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:14:03', NULL),
(44, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:14:36', NULL),
(45, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:16:06', NULL),
(46, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:16:29', NULL),
(47, 1, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:19:44', NULL),
(48, 1, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:20:13', NULL),
(49, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:26:04', NULL),
(50, 1, 0, 5000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:29:50', NULL),
(51, 1, 0, 5000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:31:11', NULL),
(52, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:31:58', NULL),
(53, 1, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:36:05', NULL),
(54, 1, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:42:02', NULL),
(55, 1, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:43:34', NULL),
(56, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:49:25', NULL),
(57, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:50:07', NULL),
(58, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 21:50:42', NULL),
(59, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 23:40:18', NULL),
(60, 1, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 23:49:27', NULL),
(61, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 23:53:48', NULL),
(62, 1, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-20 23:54:37', NULL),
(63, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-21 00:01:42', NULL),
(64, 1, 0, 4000000, NULL, NULL, NULL, 1, 3, NULL, '2021-05-21 00:03:12', '2021-05-21 00:21:34'),
(65, 1, 0, 3000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-21 21:24:06', NULL),
(66, 1, 0, 0, NULL, NULL, NULL, 1, 1, NULL, '2021-05-21 21:26:11', NULL),
(67, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-21 21:29:27', NULL),
(68, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-22 02:28:35', NULL),
(69, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-23 19:23:49', NULL),
(70, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-23 20:16:19', NULL),
(71, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-23 20:16:44', NULL),
(72, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-23 20:19:27', NULL),
(73, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-23 21:02:24', NULL),
(74, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-23 21:10:12', NULL),
(75, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-23 21:12:41', NULL),
(76, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-23 21:27:11', NULL),
(77, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-23 21:29:12', NULL),
(78, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-23 21:30:45', NULL),
(79, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-23 23:31:34', NULL),
(80, 1, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-24 19:01:19', NULL),
(81, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-25 04:16:25', NULL),
(82, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-25 04:19:35', NULL),
(83, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-25 18:59:28', NULL),
(84, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-25 19:14:56', NULL),
(85, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-25 21:31:02', NULL),
(86, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-25 22:59:31', NULL),
(87, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 20:54:13', NULL),
(88, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 20:54:24', NULL),
(89, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 20:54:53', NULL),
(90, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 20:55:19', NULL),
(91, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 20:56:45', NULL),
(92, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 20:59:08', NULL),
(93, 34, 0, 5000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 21:01:12', NULL),
(94, 34, 0, 5000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 21:41:42', NULL),
(95, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 23:00:27', NULL),
(96, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 23:01:06', NULL),
(97, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 23:01:37', NULL),
(98, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 23:02:52', NULL),
(99, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 23:04:39', NULL),
(100, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 23:05:43', NULL),
(101, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 23:07:49', NULL),
(102, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-26 23:08:49', NULL),
(103, 34, 0, 4000000, NULL, NULL, NULL, 1, 3, NULL, '2021-05-26 23:41:11', '2021-05-27 01:04:45'),
(104, 34, 0, 3000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-31 20:10:33', NULL),
(105, 34, 0, 3000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-31 20:31:42', NULL),
(106, 34, 0, 3000000, NULL, NULL, NULL, 1, 1, NULL, '2021-05-31 20:36:53', NULL),
(107, 34, 0, 4000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-01 01:28:12', NULL),
(108, 34, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-01 21:27:45', NULL),
(109, 34, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-01 21:28:09', NULL),
(110, 34, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-01 23:39:02', NULL),
(111, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 00:07:36', NULL),
(112, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 01:24:36', NULL),
(113, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 02:51:14', NULL),
(114, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 02:55:32', NULL),
(115, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 02:56:37', NULL),
(116, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 02:57:09', NULL),
(117, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 02:59:32', NULL),
(118, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:01:03', NULL),
(119, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:01:45', NULL),
(120, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:03:26', NULL),
(121, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:04:04', NULL),
(122, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:04:37', NULL),
(123, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:04:41', NULL),
(124, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:05:09', NULL),
(125, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:05:14', NULL),
(126, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:07:50', NULL),
(127, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:08:37', NULL),
(128, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:08:40', NULL),
(129, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:09:32', NULL),
(130, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:12:18', NULL),
(131, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:13:01', NULL),
(132, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:13:09', NULL),
(133, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:14:30', NULL),
(134, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:16:15', NULL),
(135, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:18:16', NULL),
(136, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:18:29', NULL),
(137, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:18:50', NULL),
(138, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:20:01', NULL),
(139, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:22:41', NULL),
(140, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:25:02', NULL),
(141, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:26:12', NULL),
(142, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:27:14', NULL),
(143, 34, 0, 9000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 03:28:28', NULL),
(144, 34, 0, 6000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 18:56:04', NULL),
(145, 34, 0, 7000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 20:35:08', NULL),
(146, 34, 0, 7000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 20:35:32', NULL),
(147, 34, 0, 7000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 20:35:59', NULL),
(148, 34, 0, 7000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 20:36:31', NULL),
(149, 34, 0, 7000000, NULL, NULL, NULL, 1, 1, NULL, '2021-06-02 22:06:18', NULL),
(150, 34, 0, 4000000, NULL, NULL, NULL, 1, 4, NULL, '2021-06-03 01:35:40', '2021-07-05 21:58:27');

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
(1, 'Màu đổ', 'mau-do', '#ff7750', 'ent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idpaparent_idparent_idparent_idparent_idrent_idparent_id', 'Màu đổ', 'Màu đổ', NULL, 'parent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_idparent_id', NULL, 1, 0, NULL, NULL, NULL, NULL, '2021-07-03 00:01:15', '2021-07-03 00:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `uni_contact`
--

CREATE TABLE `uni_contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `price` int(11) DEFAULT NULL,
  `sale_off` int(11) DEFAULT NULL,
  `info_sale` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` timestamp NULL DEFAULT NULL,
  `updated_by` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_flash_sale`
--

INSERT INTO `uni_flash_sale` (`id`, `name`, `slug`, `desscription`, `meta_desscription`, `meta_title`, `meta_keyword`, `content`, `qty`, `status`, `price`, `sale_off`, `info_sale`, `thumbnail`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Combo 20-12-2021', 'combo-20-12-2021', 'Màu sắc đóng vai trò quan trong thiết kế web và thiết kế đồ họa trên máy tính.', 'Màu sắc đóng vai trò quan trong thiết kế web và thiết kế đồ họa trên máy tính.', 'Combo 20-12-2021', NULL, '<p>M&agrave;u sắc đ&oacute;ng vai tr&ograve; quan trong thiết kế web v&agrave; thiết kế đồ họa tr&ecirc;n m&aacute;y t&iacute;nh. V&igrave; vậy ta cần phải biết ch&iacute;nh x&aacute;c m&atilde; m&agrave;u của từng m&agrave;u sắc để tạo ra thiết kế đ&uacute;ng chuẩn. Hi vọng&nbsp;m&atilde; m&agrave;u dưới đ&acirc;y sẽ gi&uacute;p &iacute;ch cho bạn trong qu&aacute; tr&igrave;nh l&agrave;m việc v&agrave; học tập.</p>', 12, 0, NULL, NULL, '[{\"\'id\'\":\"9\",\"\'qty_sale\'\":\"12\",\"\'price_sale\'\":\"22\"},{\"\'id\'\":\"6\",\"\'qty_sale\'\":\"13\",\"\'price_sale\'\":\"33\"}]', NULL, NULL, NULL, '2021-07-10 01:56:41', NULL),
(2, 'Com bo chu nhat', 'com-bo-chu-nhat', 'Màu sắc đóng vai trò quan trong thiết kế web và thiết kế đồ họa trên máy tính.', 'Màu sắc đóng vai trò quan trong thiết kế web và thiết kế đồ họa trên máy tính.', 'Com bo chu nhat', NULL, '<p>M&agrave;u sắc đ&oacute;ng vai tr&ograve; quan trong thiết kế web v&agrave; thiết kế đồ họa tr&ecirc;n m&aacute;y t&iacute;nh. V&igrave; vậy ta cần phải biết ch&iacute;nh x&aacute;c m&atilde; m&agrave;u của từng m&agrave;u sắc để tạo ra thiết kế đ&uacute;ng chuẩn. Hi vọng&nbsp;<a href=\"https://bietmaytinh.com/category/bang-tong-hop/\" rel=\"noopener noreferrer\" target=\"_blank\">bảng tổng hợp</a>&nbsp;m&atilde; m&agrave;u dưới đ&acirc;y sẽ gi&uacute;p &iacute;ch cho bạn trong qu&aacute; tr&igrave;nh l&agrave;m việc v&agrave; học tập.</p>', 12, 0, NULL, NULL, '[{\"\'id\'\":\"9\",\"\'qty_sale\'\":\"23\",\"\'price_sale\'\":\"44\"},{\"\'id\'\":\"6\",\"\'qty_sale\'\":\"44\",\"\'price_sale\'\":\"55\"},{\"\'id\'\":\"5\",\"\'qty_sale\'\":\"44\",\"\'price_sale\'\":\"55\"}]', NULL, NULL, NULL, '2021-07-10 02:10:27', NULL);

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
  `qty_box` int(11) DEFAULT NULL,
  `size_box` int(11) NOT NULL,
  `price_lotproduct` int(20) DEFAULT NULL,
  `size` int(11) NOT NULL,
  `barcode` int(20) NOT NULL,
  `sku_lotproduct` int(20) NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_lotproduct`
--

INSERT INTO `uni_lotproduct` (`id`, `lot_name`, `supplier_id`, `product_id`, `qty`, `qty_box`, `size_box`, `price_lotproduct`, `size`, `barcode`, `sku_lotproduct`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, 'Lô bột chua', 1, 5, 2000, 20, 100, 600, 2, 12321234, 99998888, '2022-12-31', '2021-07-04 20:42:10', '2021-07-10 02:43:58'),
(2, 'Lô bọt ngọt', 1, 6, 2500, 25, 100, 200000000, 2, 12321234, 99998888, '2022-12-31', '2021-07-04 20:42:10', '2021-07-10 02:44:29'),
(3, 'Lô bột chiên', 1, 9, 900, 10, 90, 200000000, 1, 11223344, 22334455, '2025-01-01', '2021-07-06 21:38:10', NULL),
(4, 'Lô bột ớt', 1, 4, 2000, 100, 20, 550, 2, 1211221122, 33223322, '2022-11-10', '2021-07-10 02:42:58', '2021-07-10 02:49:42'),
(5, 'Lô bột gừng', 1, 3, 1900, 100, 20, 600, 2, 11221122, 23221122, '2022-02-11', '2021-07-10 02:43:40', '2021-07-10 03:41:00'),
(6, 'Lô bọt ngọt 2', 1, 6, 2500, 25, 100, 550, 2, 1245698, 2256365, '2022-11-22', '2021-07-10 02:46:36', '2021-07-10 02:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `uni_order`
--

CREATE TABLE `uni_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_sale` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL,
  `created_by` timestamp NULL DEFAULT NULL,
  `updated_by` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_by` timestamp NULL DEFAULT NULL,
  `updated_by` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_post`
--

INSERT INTO `uni_post` (`id`, `name`, `slug`, `category_id`, `desscription`, `meta_desscription`, `meta_title`, `content`, `status`, `order`, `thumbnail`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'It is Very Easy to Customize and it uses in your website apllication.12312312', 'it-is-very-easy-to-customize-and-it-uses-in-your-website-apllication12312312', 2, 'It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.', 'It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.', 'It is Very Easy to Customize and it uses in your website apllication.12312312', '<p>It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.</p>', 1, 1, 'brvn2-1625720056.jpg', NULL, NULL, '2021-07-07 21:56:01', '2021-07-08 00:10:51'),
(2, 'It is Very Easy to Customize and it uses in your website apllication.1111', 'it-is-very-easy-to-customize-and-it-uses-in-your-website-apllication1111', 1, 'It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.', 'It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.', 'It is Very Easy to Customize and it uses in your website apllication.1111', '<p>It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.</p>', 0, 1, 'brvn2-1625720056.jpg', NULL, NULL, '2021-07-07 21:56:09', '2021-07-08 00:47:30');

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
(1, 'Bột ớt cay cấp 4', 'bot-ot-cay-cap-4', 'brvn3-1625712074.jpg', 'Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4', 'Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4', 'Bột ớt cay cấp 4', NULL, 'Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4 Bột ớt cay cấp 4', NULL, 1, 0, 0, 'monkey-1625711763.jpg<link rel=\'stylesheet\' type=\'text/css\' property=\'stylesheet\' href=\'//127.0.0.1:8000/_debugbar/assets/stylesheets?v=1625212637&theme=auto\'><script type=\'text/javascript\' src=\'//127.0.0.1:8000/_debugbar/assets/javascript?v=1625212637\'></script><script type=\"text/javascript\">jQuery.noConflict(true);</script>\r\n<script> Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement(\'style\'), rxEsc = /([.*+?^${}()|\\[\\]\\/\\\\])/g, idRx = /\\bsf-dump-\\d+-ref[012]\\w+\\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf(\'MAC\') ? \'Cmd\' : \'Ctrl\', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; refStyle.innerHTML = \'.phpdebugbar pre.sf-dump .sf-dump-compact, .sf-dump-str-collapse .sf-dump-str-collapse, .sf-dump-str-expand .sf-dump-str-expand { display: none; }\'; (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); refStyle = doc.createElement(\'style\'); (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent(\'on\' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if (/\\bsf-dump-compact\\b/.test(oldClass)) { arrow = \'▼\'; newClass = \'sf-dump-expanded\'; } else if (/\\bsf-dump-expanded\\b/.test(oldClass)) { arrow = \'▶\'; newClass = \'sf-dump-compact\'; } else { return false; } if (doc.createEvent && s.dispatchEvent) { var event = doc.createEvent(\'Event\'); event.initEvent(\'sf-dump-expanded\' === newClass ? \'sfbeforedumpexpand\' : \'sfbeforedumpcollapse\', true, false); s.dispatchEvent(event); } a.lastChild.innerHTML = arrow; s.className = s.className.replace(/\\bsf-dump-(compact|expanded)\\b/, newClass); if (recursive) { try { a = s.querySelectorAll(\'.\'+oldClass); for (s = 0; s < a.length; ++s) { if (-1 == a[s].className.indexOf(newClass)) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; function collapse(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\\bsf-dump-expanded\\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function expand(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\\bsf-dump-compact\\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function collapseAll(root) { var a = root.querySelector(\'a.sf-dump-toggle\'); if (a) { collapse(a, true); expand(a); return true; } return false; } function reveal(node) { var previous, parents = []; while ((node = node.parentNode || {}) && (previous = node.previousSibling) && \'A\' === previous.tagName) { parents.push(previous); } if (0 !== parents.length) { parents.forEach(function (parent) { expand(parent); }); return true; } return false; } function highlight(root, activeNode, nodes) { resetHighlightedNodes(root); Array.from(nodes||[]).forEach(function (node) { if (!/\\bsf-dump-highlight\\b/.test(node.className)) { node.className = node.className + \' sf-dump-highlight\'; } }); if (!/\\bsf-dump-highlight-active\\b/.test(activeNode.className)) { activeNode.className = activeNode.className + \' sf-dump-highlight-active\'; } } function resetHighlightedNodes(root) { Array.from(root.querySelectorAll(\'.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private\')).forEach(function (strNode) { strNode.className = strNode.className.replace(/\\bsf-dump-highlight\\b/, \'\'); strNode.className = strNode.className.replace(/\\bsf-dump-highlight-active\\b/, \'\'); }); } return function (root, x) { root = doc.getElementById(root); var indentRx = new RegExp(\'^(\'+(root.getAttribute(\'data-indent-pad\') || \' \').replace(rxEsc, \'\\\\$1\')+\')+\', \'m\'), options = {\"maxDepth\":1,\"maxStringLength\":160,\"fileLinkFormat\":false}, elt = root.getElementsByTagName(\'A\'), len = elt.length, i = 0, s, h, t = []; while (i < len) t.push(elt[i++]); for (i in x) { options[i] = x[i]; } function a(e, f) { addEventListener(root, e, function (e, n) { if (\'A\' == e.target.tagName) { f(e.target, e); } else if (\'A\' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } else { n = /\\bsf-dump-ellipsis\\b/.test(e.target.className) ? e.target.parentNode : e.target; if ((n = n.nextElementSibling) && \'A\' == n.tagName) { if (!/\\bsf-dump-toggle\\b/.test(n.className)) { n = n.nextElementSibling || n; } f(n, e, true); } } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } function xpathString(str) { var parts = str.match(/[^\'\"]+|[\'\"]/g).map(function (part) { if (\"\'\" == part) { return \'\"\\\'\"\'; } if (\'\"\' == part) { return \"\'\\\"\'\"; } return \"\'\" + part + \"\'\"; }); return \"concat(\" + parts.join(\",\") + \", \'\')\"; } function xpathHasClass(className) { return \"contains(concat(\' \', normalize-space(@class), \' \'), \' \" + className +\" \')\"; } addEventListener(root, \'mouseover\', function (e) { if (\'\' != refStyle.innerHTML) { refStyle.innerHTML = \'\'; } }); a(\'mouseover\', function (a, e, c) { if (c) { e.target.style.cursor = \"pointer\"; } else if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = \'.phpdebugbar pre.sf-dump .\'+a[0]+\'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}\'; } catch (e) { } } }); a(\'click\', function (a, e, c) { if (/\\bsf-dump-toggle\\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute(\'href\').substr(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp(\'^\'+f[0].replace(rxEsc, \'\\\\$1\'), \'mg\'), t[0]); } if (/\\bsf-dump-compact\\b/.test(r.className)) { toggle(s, isCtrlKey(e)); } } if (c) { } else if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } else if (/\\bsf-dump-str-toggle\\b/.test(a.className)) { e.preventDefault(); e = a.parentNode.parentNode; e.className = e.className.replace(/\\bsf-dump-str-(expand|collapse)\\b/, a.parentNode.className); } }); elt = root.getElementsByTagName(\'SAMP\'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; if (\'SAMP\' == elt.tagName) { a = elt.previousSibling || {}; if (\'A\' != a.tagName) { a = doc.createElement(\'A\'); a.className = \'sf-dump-ref\'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += \' \'; } a.title = (a.title ? a.title+\'\\n[\' : \'[\')+keyHint+\'+click] Expand all children\'; a.innerHTML += elt.className == \'sf-dump-compact\' ? \'<span>▶</span>\' : \'<span>▼</span>\'; a.className += \' sf-dump-toggle\'; x = 1; if (\'sf-dump\' != elt.parentNode.className) { x += elt.parentNode.getAttribute(\'data-depth\')/1; } } else if (/\\bsf-dump-ref\\b/.test(elt.className) && (a = elt.getAttribute(\'href\'))) { a = a.substr(1); elt.className += \' \'+a; if (/[\\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { s = a.nextSibling; elt.appendChild(a); s.parentNode.insertBefore(a, s); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += \' <span>▶</span>\'; } else { elt.innerHTML = \'<span>▶</span>\'; elt.className = \'sf-dump-ref\'; } elt.className += \' sf-dump-toggle\'; } catch (e) { if (\'&\' == elt.innerHTML.charAt(0)) { elt.innerHTML = \'…\'; elt.className = \'sf-dump-ref\'; } } } } } if (doc.evaluate && Array.from && root.children.length > 1) { root.setAttribute(\'tabindex\', 0); SearchState = function () { this.nodes = []; this.idx = 0; }; SearchState.prototype = { next: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0; return this.current(); }, previous: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1); return this.current(); }, isEmpty: function () { return 0 === this.count(); }, current: function () { if (this.isEmpty()) { return null; } return this.nodes[this.idx]; }, reset: function () { this.nodes = []; this.idx = 0; }, count: function () { return this.nodes.length; }, }; function showCurrent(state) { var currentNode = state.current(), currentRect, searchRect; if (currentNode) { reveal(currentNode); highlight(root, currentNode, state.nodes); if (\'scrollIntoView\' in currentNode) { currentNode.scrollIntoView(true); currentRect = currentNode.getBoundingClientRect(); searchRect = search.getBoundingClientRect(); if (currentRect.top < (searchRect.top + searchRect.height)) { window.scrollBy(0, -(searchRect.top + searchRect.height + 5)); } } } counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + \' of \' + state.count(); } var search = doc.createElement(\'div\'); search.className = \'sf-dump-search-wrapper sf-dump-search-hidden\'; search.innerHTML = \' <input type=\"text\" class=\"sf-dump-search-input\"> <span class=\"sf-dump-search-count\">0 of 0<\\/span> <button type=\"button\" class=\"sf-dump-search-input-previous\" tabindex=\"-1\"> <svg viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z\"\\/><\\/svg> <\\/button> <button type=\"button\" class=\"sf-dump-search-input-next\" tabindex=\"-1\"> <svg viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z\"\\/><\\/svg> <\\/button> \'; root.insertBefore(search, root.firstChild); var state = new SearchState(); var searchInput = search.querySelector(\'.sf-dump-search-input\'); var counter = search.querySelector(\'.sf-dump-search-count\'); var searchInputTimer = 0; var previousSearchQuery = \'\'; addEventListener(searchInput, \'keyup\', function (e) { var searchQuery = e.target.value; /* Don\'t perform anything if the pressed key didn\'t change the query */ if (searchQuery === previousSearchQuery) { return; } previousSearchQuery = searchQuery; clearTimeout(searchInputTimer); searchInputTimer = setTimeout(function () { state.reset(); collapseAll(root); resetHighlightedNodes(root); if (\'\' === searchQuery) { counter.textContent = \'0 of 0\'; return; } var classMatches = [ \"sf-dump-str\", \"sf-dump-key\", \"sf-dump-public\", \"sf-dump-protected\", \"sf-dump-private\", ].map(xpathHasClass).join(\' or \'); var xpathResult = doc.evaluate(\'.//span[\' + classMatches + \'][contains(translate(child::text(), \' + xpathString(searchQuery.toUpperCase()) + \', \' + xpathString(searchQuery.toLowerCase()) + \'), \' + xpathString(searchQuery.toLowerCase()) + \')]\', root, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null); while (node = xpathResult.iterateNext()) state.nodes.push(node); showCurrent(state); }, 400); }); Array.from(search.querySelectorAll(\'.sf-dump-search-input-next, .sf-dump-search-input-previous\')).forEach(function (btn) { addEventListener(btn, \'click\', function (e) { e.preventDefault(); -1 !== e.target.className.indexOf(\'next\') ? state.next() : state.previous(); searchInput.focus(); collapseAll(root); showCurrent(state); }) }); addEventListener(root, \'keydown\', function (e) { var isSearchActive = !/\\bsf-dump-search-hidden\\b/.test(search.className); if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e.keyCode)) { /* F3 or CMD/CTRL + F */ if (70 === e.keyCode && document.activeElement === searchInput) { /* * If CMD/CTRL + F is hit while having focus on search input, * the user probably meant to trigger browser search instead. * Let the browser execute its behavior: */ return; } e.preventDefault(); search.className = search.className.replace(/\\bsf-dump-search-hidden\\b/, \'\'); searchInput.focus(); } else if (isSearchActive) { if (27 === e.keyCode) { /* ESC key */ search.className += \' sf-dump-search-hidden\'; e.preventDefault(); resetHighlightedNodes(root); searchInput.value = \'\'; } else if ( (isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e.keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) { e.preventDefault(); e.shiftKey ? state.previous() : state.next(); collapseAll(root); showCurrent(state); } } }); } if (0 >= options.maxStringLength) { return; } try { elt = root.querySelectorAll(\'.sf-dump-str\'); len = elt.length; i = 0; t = []; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; s = elt.innerText || elt.textContent; x = s.length - options.maxStringLength; if (0 < x) { h = elt.innerHTML; elt[elt.innerText ? \'innerText\' : \'textContent\'] = s.substring(0, options.maxStringLength); elt.className += \' sf-dump-str-collapse\'; elt.innerHTML = \'<span class=sf-dump-str-collapse>\'+h+\'<a class=\"sf-dump-ref sf-dump-str-toggle\" title=\"Collapse\"> ◀</a></span>\'+ \'<span class=sf-dump-str-expand>\'+elt.innerHTML+\'<a class=\"sf-dump-ref sf-dump-str-toggle\" title=\"\'+x+\' remaining characters\"> ▶</a></span>\'; } } } catch (e) { } }; })(document); </script><style> .phpdebugbar pre.sf-dump { display: block; white-space: pre; padding: 5px; overflow: initial !important; } .phpdebugbar pre.sf-dump:after { content: \"\"; visibility: hidden; display: block; height: 0; clear: both; } .phpdebugbar pre.sf-dump span { display: inline; } .phpdebugbar pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; color: inherit; } .phpdebugbar pre.sf-dump img { max-width: 50em; max-height: 50em; margin: .5em 0 0 0; padding: 0; background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #D3D3D3; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis { display: inline-block; overflow: visible; text-overflow: ellipsis; max-width: 5em; white-space: nowrap; overflow: hidden; vertical-align: top; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis { max-width: none; } .phpdebugbar pre.sf-dump code { display:inline; padding:0; background:none; } .sf-dump-public.sf-dump-highlight, .sf-dump-protected.sf-dump-highlight, .sf-dump-private.sf-dump-highlight, .sf-dump-str.sf-dump-highlight, .sf-dump-key.sf-dump-highlight { background: rgba(111, 172, 204, 0.3); border: 1px solid #7DA0B1; border-radius: 3px; } .sf-dump-public.sf-dump-highlight-active, .sf-dump-protected.sf-dump-highlight-active, .sf-dump-private.sf-dump-highlight-active, .sf-dump-str.sf-dump-highlight-active, .sf-dump-key.sf-dump-highlight-active { background: rgba(253, 175, 0, 0.4); border: 1px solid #ffa500; border-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-hidden { display: none !important; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper { font-size: 0; white-space: nowrap; margin-bottom: 5px; display: flex; position: -webkit-sticky; position: sticky; top: 5px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > * { vertical-align: top; box-sizing: border-box; height: 21px; font-weight: normal; border-radius: 0; background: #FFF; color: #757575; border: 1px solid #BBB; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > input.sf-dump-search-input { padding: 3px; height: 21px; font-size: 12px; border-right: none; border-top-left-radius: 3px; border-bottom-left-radius: 3px; color: #000; min-width: 15px; width: 100%; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous { background: #F2F2F2; outline: none; border-left: none; font-size: 0; line-height: 0; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next { border-top-right-radius: 3px; border-bottom-right-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next > svg, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous > svg { pointer-events: none; width: 12px; height: 12px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-count { display: inline-block; padding: 0 5px; margin: 0; border-left: none; line-height: 21px; font-size: 12px; }.phpdebugbar pre.sf-dump, .phpdebugbar pre.sf-dump .sf-dump-default{word-wrap: break-word; white-space: pre-wrap; word-break: normal}.phpdebugbar pre.sf-dump .sf-dump-num{font-weight:bold; color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-const{font-weight:bold}.phpdebugbar pre.sf-dump .sf-dump-str{font-weight:bold; color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-note{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ref{color:#7B7B7B}.phpdebugbar pre.sf-dump .sf-dump-public{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-protected{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-private{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-meta{color:#B729D9}.phpdebugbar pre.sf-dump .sf-dump-key{color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-index{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ellipsis{color:#A0A000}.phpdebugbar pre.sf-dump .sf-dump-ns{user-select:none;}.phpdebugbar pre.sf-dump .sf-dump-ellipsis-note{color:#1299DA}</style>\r\n<script type=\"text/javascript\">\r\nvar phpdebugbar = new PhpDebugBar.DebugBar();\r\nphpdebugbar.addIndicator(\"php_version\", new PhpDebugBar.DebugBar.Indicator({\"icon\":\"code\",\"tooltip\":\"PHP Version\"}), \"right\");\r\nphpdebugbar.addTab(\"messages\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"list-alt\",\"title\":\"Messages\", \"widget\": new PhpDebugBar.Widgets.MessagesWidget()}));\r\nphpdebugbar.addIndicator(\"time\", new PhpDebugBar.DebugBar.Indicator({\"icon\":\"clock-o\",\"tooltip\":\"Request Duration\"}), \"right\");\r\nphpdebugbar.addTab(\"timeline\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"tasks\",\"title\":\"Timeline\", \"widget\": new PhpDebugBar.Widgets.TimelineWidget()}));\r\nphpdebugbar.addIndicator(\"memory\", new PhpDebugBar.DebugBar.Indicator({\"icon\":\"cogs\",\"tooltip\":\"Memory Usage\"}), \"right\");\r\nphpdebugbar.addTab(\"exceptions\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"bug\",\"title\":\"Exceptions\", \"widget\": new PhpDebugBar.Widgets.ExceptionsWidget()}));\r\nphpdebugbar.addTab(\"views\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"leaf\",\"title\":\"Views\", \"widget\": new PhpDebugBar.Widgets.TemplatesWidget()}));\r\nphpdebugbar.addTab(\"route\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"share\",\"title\":\"Route\", \"widget\": new PhpDebugBar.Widgets.VariableListWidget()}));\r\nphpdebugbar.addIndicator(\"currentroute\", new PhpDebugBar.DebugBar.Indicator({\"icon\":\"share\",\"tooltip\":\"Route\"}), \"right\");\r\nphpdebugbar.addTab(\"queries\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"database\",\"title\":\"Queries\", \"widget\": new PhpDebugBar.Widgets.LaravelSQLQueriesWidget()}));\r\nphpdebugbar.addTab(\"models\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"cubes\",\"title\":\"Models\", \"widget\": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));\r\nphpdebugbar.addTab(\"emails\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"inbox\",\"title\":\"Mails\", \"widget\": new PhpDebugBar.Widgets.MailsWidget()}));\r\nphpdebugbar.addTab(\"gate\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"list-alt\",\"title\":\"Gate\", \"widget\": new PhpDebugBar.Widgets.MessagesWidget()}));\r\nphpdebugbar.addTab(\"session\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"archive\",\"title\":\"Session\", \"widget\": new PhpDebugBar.Widgets.VariableListWidget()}));\r\nphpdebugbar.addTab(\"request\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"tags\",\"title\":\"Request\", \"widget\": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));\r\nphpdebugbar.setDataMap({\r\n\"php_version\": [\"php.version\", ],\r\n\"messages\": [\"messages.messages\", []],\r\n\"messages:badge\": [\"messages.count\", null],\r\n\"time\": [\"time.duration_str\", \'0ms\'],\r\n\"timeline\": [\"time\", {}],\r\n\"memory\": [\"memory.peak_usage_str\", \'0B\'],\r\n\"exceptions\": [\"exceptions.exceptions\", []],\r\n\"exceptions:badge\": [\"exceptions.count\", null],\r\n\"views\": [\"views\", []],\r\n\"views:badge\": [\"views.nb_templates\", 0],\r\n\"route\": [\"route\", {}],\r\n\"currentroute\": [\"route.uri\", ],\r\n\"queries\": [\"queries\", []],\r\n\"queries:badge\": [\"queries.nb_statements\", 0],\r\n\"models\": [\"models.data\", {}],\r\n\"models:badge\": [\"models.count\", 0],\r\n\"emails\": [\"swiftmailer_mails.mails\", []],\r\n\"emails:badge\": [\"swiftmailer_mails.count\", null],\r\n\"gate\": [\"gate.messages\", []],\r\n\"gate:badge\": [\"gate.count\", null],\r\n\"session\": [\"session\", {}],\r\n\"request\": [\"request\", {}]\r\n});\r\nphpdebugbar.restoreState();\r\nphpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar, undefined, true);\r\nphpdebugbar.ajaxHandler.bindToFetch();\r\nphpdebugbar.ajaxHandler.bindToXHR();\r\nphpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({\"url\":\"http:\\/\\/127.0.0.1:8000\\/_debugbar\\/open\"}));\r\nphpdebugbar.addDataSet({\"__meta\":{\"id\":\"Xb82773c8e827f6ddae9559ebc1dc085e\",\"datetime\":\"2021-07-08 02:36:03\",\"utime\":1625711763.375154,\"method\":\"POST\",\"uri\":\"\\/admin\\/ajax\\/upload\\/image\",\"ip\":\"127.0.0.1\"},\"php\":{\"version\":\"7.4.16\",\"interface\":\"cli-server\"},\"messages\":{\"count\":0,\"messages\":[]},\"time\":{\"start\":1625711763.172065,\"end\":1625711763.375174,\"duration\":0.2031090259552002,\"duration_str\":\"203ms\",\"measures\":[{\"label\":\"Booting\",\"start\":1625711763.172065,\"relative_start\":0,\"end\":1625711763.335018,\"relative_end\":1625711763.335018,\"duration\":0.16295289993286133,\"duration_str\":\"163ms\",\"params\":[],\"collector\":null},{\"label\":\"Application\",\"start\":1625711763.337102,\"relative_start\":0.16503691673278809,\"end\":1625711763.375177,\"relative_end\":2.86102294921875e-6,\"duration\":0.03807497024536133,\"duration_str\":\"38.07ms\",\"params\":[],\"collector\":null}]},\"memory\":{\"peak_usage\":21384320,\"peak_usage_str\":\"20MB\"},\"exceptions\":{\"count\":0,\"exceptions\":[]},\"views\":{\"nb_templates\":0,\"templates\":[]},\"route\":{\"uri\":\"POST admin\\/ajax\\/upload\\/image\",\"middleware\":\"web, checkLoginAdmin\",\"controller\":\"Modules\\\\Admin\\\\Http\\\\Controllers\\\\Ajax\\\\AdminAjaxUploadImageController@processUpload\",\"namespace\":\"Modules\\\\Admin\\\\Http\\\\Controllers\\\\Ajax\",\"prefix\":\"admin\\/ajax\",\"where\":[],\"as\":\"post_ajax_admin.uploads\",\"file\":\"\\\\Modules\\\\Admin\\\\Http\\\\Controllers\\\\Ajax\\\\AdminAjaxUploadImageController.php:14-40\"},\"queries\":{\"nb_statements\":1,\"nb_failed_statements\":0,\"accumulated_duration\":0.00035999999999999997,\"accumulated_duration_str\":\"360\\u03bcs\",\"statements\":[{\"sql\":\"select * from `admins` where `id` = 1 limit 1\",\"type\":\"query\",\"params\":[],\"bindings\":[\"1\"],\"hints\":null,\"show_copy\":false,\"backtrace\":[{\"index\":15,\"namespace\":null,\"name\":\"\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Auth\\\\EloquentUserProvider.php\",\"line\":52},{\"index\":16,\"namespace\":null,\"name\":\"\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Auth\\\\SessionGuard.php\",\"line\":141},{\"index\":17,\"namespace\":null,\"name\":\"\\\\app\\\\Helpers\\\\guest.php\",\"line\":7},{\"index\":19,\"namespace\":null,\"name\":\"\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Pipeline\\\\Pipeline.php\",\"line\":167},{\"index\":20,\"namespace\":null,\"name\":\"\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Routing\\\\Middleware\\\\SubstituteBindings.php\",\"line\":50}],\"duration\":0.00035999999999999997,\"duration_str\":\"360\\u03bcs\",\"stmt_id\":\"\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Auth\\\\EloquentUserProvider.php:52\",\"connection\":\"unispice\",\"start_percent\":0,\"width_percent\":100}]},\"models\":{\"data\":{\"App\\\\Models\\\\System\\\\Admin\":1},\"count\":1},\"swiftmailer_mails\":{\"count\":0,\"mails\":[]},\"gate\":{\"count\":0,\"messages\":[]},\"session\":{\"_token\":\"tn3YzCIWQpUBEVUrL08HcgNDLlNCQtcjnctxkH9m\",\"_previous\":\"array:1 [\\n  \\\"url\\\" => \\\"http:\\/\\/127.0.0.1:8000\\/admin\\/blog-post\\/post_category\\/create\\\"\\n]\",\"_flash\":\"array:2 [\\n  \\\"old\\\" => []\\n  \\\"new\\\" => []\\n]\",\"login_admins_59ba36addc2b2f9401580f014c7f58ea4e30989d\":\"1\",\"PHPDEBUGBAR_STACK_DATA\":\"[]\"},\"request\":{\"path_info\":\"\\/admin\\/ajax\\/upload\\/image\",\"status_code\":\"<pre class=sf-dump id=sf-dump-297288865 data-indent-pad=\\\"  \\\"><span class=sf-dump-num>200<\\/span>\\n<\\/pre><script>Sfdump(\\\"sf-dump-297288865\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"status_text\":\"OK\",\"format\":\"html\",\"content_type\":\"text\\/html; charset=UTF-8\",\"request_query\":\"<pre class=sf-dump id=sf-dump-2011288516 data-indent-pad=\\\"  \\\">[]\\n<\\/pre><script>Sfdump(\\\"sf-dump-2011288516\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"request_request\":\"<pre class=sf-dump id=sf-dump-1499754353 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:1<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>avatar<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"14 characters\\\">{&quot;color&quot;:null}<\\/span>\\\"\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-1499754353\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"request_headers\":\"<pre class=sf-dump id=sf-dump-127946776 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:17<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>host<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"14 characters\\\">127.0.0.1:8000<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>connection<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"10 characters\\\">keep-alive<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>content-length<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"6 characters\\\">475655<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>sec-ch-ua<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"64 characters\\\">&quot; Not;A Brand&quot;;v=&quot;99&quot;, &quot;Google Chrome&quot;;v=&quot;91&quot;, &quot;Chromium&quot;;v=&quot;91&quot;<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>x-csrf-token<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"40 characters\\\">tn3YzCIWQpUBEVUrL08HcgNDLlNCQtcjnctxkH9m<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>sec-ch-ua-mobile<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"2 characters\\\">?0<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>user-agent<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"115 characters\\\">Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.124 Safari\\/537.36<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>content-type<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"68 characters\\\">multipart\\/form-data; boundary=----WebKitFormBoundaryL0bBfXfhQUr4eaqo<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>accept<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"3 characters\\\">*\\/*<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>origin<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"21 characters\\\">http:\\/\\/127.0.0.1:8000<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>sec-fetch-site<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"11 characters\\\">same-origin<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>sec-fetch-mode<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"4 characters\\\">cors<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>sec-fetch-dest<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"5 characters\\\">empty<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>referer<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"58 characters\\\">http:\\/\\/127.0.0.1:8000\\/admin\\/blog-post\\/post_category\\/create<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>accept-encoding<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"17 characters\\\">gzip, deflate, br<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>accept-language<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"23 characters\\\">en-US,en;q=0.9,vi;q=0.8<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>cookie<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"689 characters\\\">XSRF-TOKEN=eyJpdiI6IkI3UFd6MldsZ3RaZWF0RWJZRFl0b2c9PSIsInZhbHVlIjoiQ2pNb0svVXU4d3hUSmIrTXBnU0c4OC9RVHNMTEd1TnRjN2wveGRjQTBRcWM3RUh4Q2tldk9DeDc0TTZmT29EYVk0dzlYQUxudTluUU9ad0NaeUducEVQd2FZVnpya1h5ektLWmN5TnkxOVI3aDd6LzVlaXQ1TFplSlBQVzJCUXgiLCJtYWMiOiI4MzM3ODZmMmQ1N2Q3MjJiNDczODQ0ZjFkNzgwNmY5ZDVjNTI2NjQxM2M2OTE3ZmUyMzE3ZmU0ZTc4YWJkNDE4In0%3D; unimind_session=eyJpdiI6Ik1IQUpLOW41aXc1K0l3UllPSVA1UVE9PSIsInZhbHVlIjoicDlLUTh4V2F2d2xBdlFXbXpjVlNSQ2YrRlVlVzBFckFMWmVuV3hPNEM4amZqL0kyTnk3ZWdOVlFPOWw1eEp0alRmQXRxbVVSeTNHQWxMUzhKcWhZQVJnK2tDeHM0UjZkRE1kZks0UTU4cWppWi9HN0U5RHJIY3lKY0pTSEZjVHkiLCJtYWMiOiI0ZjkzN2RlOThlOTY1ZTRkYWIxZTA2YzA1MmZlYmZiZWRiODg2OWNiY2E5MjYxYjZlODllZTM1NjBlZmYxMWFlIn0%3D<\\/span>\\\"\\n  <\\/samp>]\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-127946776\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"request_server\":\"<pre class=sf-dump id=sf-dump-105037353 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:34<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>DOCUMENT_ROOT<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"30 characters\\\">C:\\\\xampp\\\\htdocs\\\\unipice\\\\public<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>REMOTE_ADDR<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"9 characters\\\">127.0.0.1<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>REMOTE_PORT<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"5 characters\\\">50442<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SERVER_SOFTWARE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"29 characters\\\">PHP 7.4.16 Development Server<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SERVER_PROTOCOL<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"8 characters\\\">HTTP\\/1.1<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SERVER_NAME<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"9 characters\\\">127.0.0.1<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SERVER_PORT<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"4 characters\\\">8000<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>REQUEST_URI<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"24 characters\\\">\\/admin\\/ajax\\/upload\\/image<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>REQUEST_METHOD<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"4 characters\\\">POST<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SCRIPT_NAME<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"10 characters\\\">\\/index.php<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SCRIPT_FILENAME<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"40 characters\\\">C:\\\\xampp\\\\htdocs\\\\unipice\\\\public\\\\index.php<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>PATH_INFO<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"24 characters\\\">\\/admin\\/ajax\\/upload\\/image<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>PHP_SELF<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"34 characters\\\">\\/index.php\\/admin\\/ajax\\/upload\\/image<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_HOST<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"14 characters\\\">127.0.0.1:8000<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_CONNECTION<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"10 characters\\\">keep-alive<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>CONTENT_LENGTH<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"6 characters\\\">475655<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_CONTENT_LENGTH<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"6 characters\\\">475655<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_SEC_CH_UA<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"64 characters\\\">&quot; Not;A Brand&quot;;v=&quot;99&quot;, &quot;Google Chrome&quot;;v=&quot;91&quot;, &quot;Chromium&quot;;v=&quot;91&quot;<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_X_CSRF_TOKEN<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"6 characters\\\">******<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_SEC_CH_UA_MOBILE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"2 characters\\\">?0<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_USER_AGENT<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"115 characters\\\">Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.124 Safari\\/537.36<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>CONTENT_TYPE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"68 characters\\\">multipart\\/form-data; boundary=----WebKitFormBoundaryL0bBfXfhQUr4eaqo<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_CONTENT_TYPE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"68 characters\\\">multipart\\/form-data; boundary=----WebKitFormBoundaryL0bBfXfhQUr4eaqo<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_ACCEPT<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"3 characters\\\">*\\/*<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_ORIGIN<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"21 characters\\\">http:\\/\\/127.0.0.1:8000<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_SEC_FETCH_SITE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"11 characters\\\">same-origin<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_SEC_FETCH_MODE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"4 characters\\\">cors<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_SEC_FETCH_DEST<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"5 characters\\\">empty<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_REFERER<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"58 characters\\\">http:\\/\\/127.0.0.1:8000\\/admin\\/blog-post\\/post_category\\/create<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_ACCEPT_ENCODING<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"17 characters\\\">gzip, deflate, br<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_ACCEPT_LANGUAGE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"23 characters\\\">en-US,en;q=0.9,vi;q=0.8<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_COOKIE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"689 characters\\\">XSRF-TOKEN=eyJpdiI6IkI3UFd6MldsZ3RaZWF0RWJZRFl0b2c9PSIsInZhbHVlIjoiQ2pNb0svVXU4d3hUSmIrTXBnU0c4OC9RVHNMTEd1TnRjN2wveGRjQTBRcWM3RUh4Q2tldk9DeDc0TTZmT29EYVk0dzlYQUxudTluUU9ad0NaeUducEVQd2FZVnpya1h5ektLWmN5TnkxOVI3aDd6LzVlaXQ1TFplSlBQVzJCUXgiLCJtYWMiOiI4MzM3ODZmMmQ1N2Q3MjJiNDczODQ0ZjFkNzgwNmY5ZDVjNTI2NjQxM2M2OTE3ZmUyMzE3ZmU0ZTc4YWJkNDE4In0%3D; unimind_session=eyJpdiI6Ik1IQUpLOW41aXc1K0l3UllPSVA1UVE9PSIsInZhbHVlIjoicDlLUTh4V2F2d2xBdlFXbXpjVlNSQ2YrRlVlVzBFckFMWmVuV3hPNEM4amZqL0kyTnk3ZWdOVlFPOWw1eEp0alRmQXRxbVVSeTNHQWxMUzhKcWhZQVJnK2tDeHM0UjZkRE1kZks0UTU4cWppWi9HN0U5RHJIY3lKY0pTSEZjVHkiLCJtYWMiOiI0ZjkzN2RlOThlOTY1ZTRkYWIxZTA2YzA1MmZlYmZiZWRiODg2OWNiY2E5MjYxYjZlODllZTM1NjBlZmYxMWFlIn0%3D<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>REQUEST_TIME_FLOAT<\\/span>\\\" => <span class=sf-dump-num>1625711763.1721<\\/span>\\n  \\\"<span class=sf-dump-key>REQUEST_TIME<\\/span>\\\" => <span class=sf-dump-num>1625711763<\\/span>\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-105037353\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"request_cookies\":\"<pre class=sf-dump id=sf-dump-550443753 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:2<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>XSRF-TOKEN<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"40 characters\\\">tn3YzCIWQpUBEVUrL08HcgNDLlNCQtcjnctxkH9m<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>unimind_session<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"40 characters\\\">PK8BG2JeeHWAauP97JvverZELIbEI3DvDmS3giyB<\\/span>\\\"\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-550443753\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"response_headers\":\"<pre class=sf-dump id=sf-dump-1273869325 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:5<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>content-type<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"24 characters\\\">text\\/html; charset=UTF-8<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>cache-control<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"17 characters\\\">no-cache, private<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>date<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"29 characters\\\">Thu, 08 Jul 2021 02:36:03 GMT<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>set-cookie<\\/span>\\\" => <span class=sf-dump-note>array:2<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"416 characters\\\">XSRF-TOKEN=eyJpdiI6IkJ6VVhrWUZ0V2QzUGdIa2VmZXladXc9PSIsInZhbHVlIjoiUU5MTlMxTE1IZmgxY1cxMkI0d0V4Qko3SWc2OUt0QXNxSlRQd1BaOHk2OG9MQ3YvdDNRZmtCc1NYWGc5L2xVYnlabkxlWUlZRnNqSzk5WFBqekIwMEVKbHF4S0ZNSkhreTFXb3I3SW1HVFV2dm9pRlY1dTRjcnZKdlZZSnVUbHMiLCJtYWMiOiJmZjM4OTgyYzM1YTc4NjU2MTExMDQ1MjdhNGY4MjUzOGM4YWU3NGVmZjg0NzYwMTkyNTAwODNjMDcxYTMzM2U2In0%3D; expires=Thu, 08-Jul-2021 04:36:03 GMT; Max-Age=7200; path=\\/; samesite=lax<\\/span>\\\"\\n    <span class=sf-dump-index>1<\\/span> => \\\"<span class=sf-dump-str title=\\\"431 characters\\\">unimind_session=eyJpdiI6IjY4Ulg1R2YzMHhrZGVlcHV0bEpiOGc9PSIsInZhbHVlIjoiSzYxOXJoWjVXYzJsaDlCTThROEREbm1wRTNxT0RGdEZzWmZJNTR1TEtHK1Zucml0SFNoNUdFczZLWUY3cURIT2MyeHZMaWtCaDBBaitWNEo2VThvWVZHMUZMS3luU2NlUy9VaVVXcmdjcis2YlRZYTh5Y2tQMkxkY21oczFqVGQiLCJtYWMiOiJhMjFhODI2MzYyYmM1MzI3NTZiOTk4ODFkZTk3ZmRlZjEyMWIzZWU4ZDYyZWJhZmI5MDhmMGNiM2Q5OTcwYTc4In0%3D; expires=Thu, 08-Jul-2021 04:36:03 GMT; Max-Age=7200; path=\\/; httponly; samesite=lax<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>Set-Cookie<\\/span>\\\" => <span class=sf-dump-note>array:2<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"388 characters\\\">XSRF-TOKEN=eyJpdiI6IkJ6VVhrWUZ0V2QzUGdIa2VmZXladXc9PSIsInZhbHVlIjoiUU5MTlMxTE1IZmgxY1cxMkI0d0V4Qko3SWc2OUt0QXNxSlRQd1BaOHk2OG9MQ3YvdDNRZmtCc1NYWGc5L2xVYnlabkxlWUlZRnNqSzk5WFBqekIwMEVKbHF4S0ZNSkhreTFXb3I3SW1HVFV2dm9pRlY1dTRjcnZKdlZZSnVUbHMiLCJtYWMiOiJmZjM4OTgyYzM1YTc4NjU2MTExMDQ1MjdhNGY4MjUzOGM4YWU3NGVmZjg0NzYwMTkyNTAwODNjMDcxYTMzM2U2In0%3D; expires=Thu, 08-Jul-2021 04:36:03 GMT; path=\\/<\\/span>\\\"\\n    <span class=sf-dump-index>1<\\/span> => \\\"<span class=sf-dump-str title=\\\"403 characters\\\">unimind_session=eyJpdiI6IjY4Ulg1R2YzMHhrZGVlcHV0bEpiOGc9PSIsInZhbHVlIjoiSzYxOXJoWjVXYzJsaDlCTThROEREbm1wRTNxT0RGdEZzWmZJNTR1TEtHK1Zucml0SFNoNUdFczZLWUY3cURIT2MyeHZMaWtCaDBBaitWNEo2VThvWVZHMUZMS3luU2NlUy9VaVVXcmdjcis2YlRZYTh5Y2tQMkxkY21oczFqVGQiLCJtYWMiOiJhMjFhODI2MzYyYmM1MzI3NTZiOTk4ODFkZTk3ZmRlZjEyMWIzZWU4ZDYyZWJhZmI5MDhmMGNiM2Q5OTcwYTc4In0%3D; expires=Thu, 08-Jul-2021 04:36:03 GMT; path=\\/; httponly<\\/span>\\\"\\n  <\\/samp>]\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-1273869325\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"session_attributes\":\"<pre class=sf-dump id=sf-dump-22284954 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:5<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>_token<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"40 characters\\\">tn3YzCIWQpUBEVUrL08HcgNDLlNCQtcjnctxkH9m<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>_previous<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    \\\"<span class=sf-dump-key>url<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"58 characters\\\">http:\\/\\/127.0.0.1:8000\\/admin\\/blog-post\\/post_category\\/create<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>_flash<\\/span>\\\" => <span class=sf-dump-note>array:2<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    \\\"<span class=sf-dump-key>old<\\/span>\\\" => []\\n    \\\"<span class=sf-dump-key>new<\\/span>\\\" => []\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>login_admins_59ba36addc2b2f9401580f014c7f58ea4e30989d<\\/span>\\\" => <span class=sf-dump-num>1<\\/span>\\n  \\\"<span class=sf-dump-key>PHPDEBUGBAR_STACK_DATA<\\/span>\\\" => []\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-22284954\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\"}}, \"Xb82773c8e827f6ddae9559ebc1dc085e\");\r\n\r\n</script>', NULL, NULL, '2021-07-07 19:41:14', NULL),
(2, 'Bột nghệ', 'bot-nghe', 'brvn2-1625714313.jpg', 'Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ', 'Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ', 'Bột nghệ', NULL, 'Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ Bột nghệ', NULL, 1, 0, 0, 'monkey-1625714308.jpg', NULL, NULL, '2021-07-07 20:18:33', NULL),
(3, 'Bột nghệ 00222', 'bot-nghe-00222', 'brvn-1625714442.jpg', 'Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002', 'Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002', 'Bột nghệ 00222', NULL, 'Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002 Bột nghệ 002', NULL, 1, 2, 0, 'monkey-1625714437.jpg', NULL, NULL, '2021-07-07 20:20:42', '2021-07-07 20:30:39');

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
  `lotproduct_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT 0,
  `price` bigint(20) DEFAULT NULL,
  `price_sale` bigint(20) DEFAULT NULL,
  `price_sale_store` bigint(20) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_hot` tinyint(4) NOT NULL DEFAULT 0,
  `is_feauture` tinyint(4) NOT NULL DEFAULT 0,
  `order` int(11) DEFAULT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box_thumnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `album` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` timestamp NULL DEFAULT NULL,
  `updated_by` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_product`
--

INSERT INTO `uni_product` (`id`, `name`, `slug`, `desscription`, `meta_desscription`, `meta_title`, `meta_keyword`, `content`, `lotproduct_id`, `qty`, `price`, `price_sale`, `price_sale_store`, `status`, `is_hot`, `is_feauture`, `order`, `thumbnail`, `box_thumnail`, `album`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'Bột gừng', 'bot-gung', 'In addition to conditional statements, Blade provides simple directives for working with PHP\'s loop structures. Again, each of these directives functions identically to their PHP counterparts:', 'In addition to conditional statements, Blade provides simple directives for working with PHP\'s loop structures. Again, each of these directives functions identically to their PHP counterparts:', 'Bột gừng', NULL, 'In addition to conditional statements, Blade provides simple directives for working with PHP\'s loop structures. Again, each of these directives functions identically to their PHP counterparts:In addition to conditional statements, Blade provides simple directives for working with PHP\'s loop structures. Again, each of these directives functions identically to their PHP counterparts:', NULL, 1600, 600, 700, 650, 1, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '2021-07-05 19:17:03', '2021-07-10 03:41:00'),
(4, 'Bột ớt', 'bot-ot', 'If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.', 'If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.', 'Bột ớt', NULL, 'If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.', 4, 0, 550, 600, 650, 0, 0, 0, 0, 'brvn3-1625538446.jpg<link rel=\'stylesheet\' type=\'text/css\' property=\'stylesheet\' href=\'//127.0.0.1:8000/_debugbar/assets/stylesheets?v=1625212637&theme=auto\'><script type=\'text/javascript\' src=\'//127.0.0.1:8000/_debugbar/assets/javascript?v=1625212637\'></script><script type=\"text/javascript\">jQuery.noConflict(true);</script>\r\n<script> Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement(\'style\'), rxEsc = /([.*+?^${}()|\\[\\]\\/\\\\])/g, idRx = /\\bsf-dump-\\d+-ref[012]\\w+\\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf(\'MAC\') ? \'Cmd\' : \'Ctrl\', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; refStyle.innerHTML = \'.phpdebugbar pre.sf-dump .sf-dump-compact, .sf-dump-str-collapse .sf-dump-str-collapse, .sf-dump-str-expand .sf-dump-str-expand { display: none; }\'; (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); refStyle = doc.createElement(\'style\'); (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent(\'on\' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if (/\\bsf-dump-compact\\b/.test(oldClass)) { arrow = \'▼\'; newClass = \'sf-dump-expanded\'; } else if (/\\bsf-dump-expanded\\b/.test(oldClass)) { arrow = \'▶\'; newClass = \'sf-dump-compact\'; } else { return false; } if (doc.createEvent && s.dispatchEvent) { var event = doc.createEvent(\'Event\'); event.initEvent(\'sf-dump-expanded\' === newClass ? \'sfbeforedumpexpand\' : \'sfbeforedumpcollapse\', true, false); s.dispatchEvent(event); } a.lastChild.innerHTML = arrow; s.className = s.className.replace(/\\bsf-dump-(compact|expanded)\\b/, newClass); if (recursive) { try { a = s.querySelectorAll(\'.\'+oldClass); for (s = 0; s < a.length; ++s) { if (-1 == a[s].className.indexOf(newClass)) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; function collapse(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\\bsf-dump-expanded\\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function expand(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\\bsf-dump-compact\\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function collapseAll(root) { var a = root.querySelector(\'a.sf-dump-toggle\'); if (a) { collapse(a, true); expand(a); return true; } return false; } function reveal(node) { var previous, parents = []; while ((node = node.parentNode || {}) && (previous = node.previousSibling) && \'A\' === previous.tagName) { parents.push(previous); } if (0 !== parents.length) { parents.forEach(function (parent) { expand(parent); }); return true; } return false; } function highlight(root, activeNode, nodes) { resetHighlightedNodes(root); Array.from(nodes||[]).forEach(function (node) { if (!/\\bsf-dump-highlight\\b/.test(node.className)) { node.className = node.className + \' sf-dump-highlight\'; } }); if (!/\\bsf-dump-highlight-active\\b/.test(activeNode.className)) { activeNode.className = activeNode.className + \' sf-dump-highlight-active\'; } } function resetHighlightedNodes(root) { Array.from(root.querySelectorAll(\'.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private\')).forEach(function (strNode) { strNode.className = strNode.className.replace(/\\bsf-dump-highlight\\b/, \'\'); strNode.className = strNode.className.replace(/\\bsf-dump-highlight-active\\b/, \'\'); }); } return function (root, x) { root = doc.getElementById(root); var indentRx = new RegExp(\'^(\'+(root.getAttribute(\'data-indent-pad\') || \' \').replace(rxEsc, \'\\\\$1\')+\')+\', \'m\'), options = {\"maxDepth\":1,\"maxStringLength\":160,\"fileLinkFormat\":false}, elt = root.getElementsByTagName(\'A\'), len = elt.length, i = 0, s, h, t = []; while (i < len) t.push(elt[i++]); for (i in x) { options[i] = x[i]; } function a(e, f) { addEventListener(root, e, function (e, n) { if (\'A\' == e.target.tagName) { f(e.target, e); } else if (\'A\' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } else { n = /\\bsf-dump-ellipsis\\b/.test(e.target.className) ? e.target.parentNode : e.target; if ((n = n.nextElementSibling) && \'A\' == n.tagName) { if (!/\\bsf-dump-toggle\\b/.test(n.className)) { n = n.nextElementSibling || n; } f(n, e, true); } } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } function xpathString(str) { var parts = str.match(/[^\'\"]+|[\'\"]/g).map(function (part) { if (\"\'\" == part) { return \'\"\\\'\"\'; } if (\'\"\' == part) { return \"\'\\\"\'\"; } return \"\'\" + part + \"\'\"; }); return \"concat(\" + parts.join(\",\") + \", \'\')\"; } function xpathHasClass(className) { return \"contains(concat(\' \', normalize-space(@class), \' \'), \' \" + className +\" \')\"; } addEventListener(root, \'mouseover\', function (e) { if (\'\' != refStyle.innerHTML) { refStyle.innerHTML = \'\'; } }); a(\'mouseover\', function (a, e, c) { if (c) { e.target.style.cursor = \"pointer\"; } else if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = \'.phpdebugbar pre.sf-dump .\'+a[0]+\'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}\'; } catch (e) { } } }); a(\'click\', function (a, e, c) { if (/\\bsf-dump-toggle\\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute(\'href\').substr(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp(\'^\'+f[0].replace(rxEsc, \'\\\\$1\'), \'mg\'), t[0]); } if (/\\bsf-dump-compact\\b/.test(r.className)) { toggle(s, isCtrlKey(e)); } } if (c) { } else if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } else if (/\\bsf-dump-str-toggle\\b/.test(a.className)) { e.preventDefault(); e = a.parentNode.parentNode; e.className = e.className.replace(/\\bsf-dump-str-(expand|collapse)\\b/, a.parentNode.className); } }); elt = root.getElementsByTagName(\'SAMP\'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; if (\'SAMP\' == elt.tagName) { a = elt.previousSibling || {}; if (\'A\' != a.tagName) { a = doc.createElement(\'A\'); a.className = \'sf-dump-ref\'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += \' \'; } a.title = (a.title ? a.title+\'\\n[\' : \'[\')+keyHint+\'+click] Expand all children\'; a.innerHTML += elt.className == \'sf-dump-compact\' ? \'<span>▶</span>\' : \'<span>▼</span>\'; a.className += \' sf-dump-toggle\'; x = 1; if (\'sf-dump\' != elt.parentNode.className) { x += elt.parentNode.getAttribute(\'data-depth\')/1; } } else if (/\\bsf-dump-ref\\b/.test(elt.className) && (a = elt.getAttribute(\'href\'))) { a = a.substr(1); elt.className += \' \'+a; if (/[\\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { s = a.nextSibling; elt.appendChild(a); s.parentNode.insertBefore(a, s); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += \' <span>▶</span>\'; } else { elt.innerHTML = \'<span>▶</span>\'; elt.className = \'sf-dump-ref\'; } elt.className += \' sf-dump-toggle\'; } catch (e) { if (\'&\' == elt.innerHTML.charAt(0)) { elt.innerHTML = \'…\'; elt.className = \'sf-dump-ref\'; } } } } } if (doc.evaluate && Array.from && root.children.length > 1) { root.setAttribute(\'tabindex\', 0); SearchState = function () { this.nodes = []; this.idx = 0; }; SearchState.prototype = { next: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0; return this.current(); }, previous: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1); return this.current(); }, isEmpty: function () { return 0 === this.count(); }, current: function () { if (this.isEmpty()) { return null; } return this.nodes[this.idx]; }, reset: function () { this.nodes = []; this.idx = 0; }, count: function () { return this.nodes.length; }, }; function showCurrent(state) { var currentNode = state.current(), currentRect, searchRect; if (currentNode) { reveal(currentNode); highlight(root, currentNode, state.nodes); if (\'scrollIntoView\' in currentNode) { currentNode.scrollIntoView(true); currentRect = currentNode.getBoundingClientRect(); searchRect = search.getBoundingClientRect(); if (currentRect.top < (searchRect.top + searchRect.height)) { window.scrollBy(0, -(searchRect.top + searchRect.height + 5)); } } } counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + \' of \' + state.count(); } var search = doc.createElement(\'div\'); search.className = \'sf-dump-search-wrapper sf-dump-search-hidden\'; search.innerHTML = \' <input type=\"text\" class=\"sf-dump-search-input\"> <span class=\"sf-dump-search-count\">0 of 0<\\/span> <button type=\"button\" class=\"sf-dump-search-input-previous\" tabindex=\"-1\"> <svg viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z\"\\/><\\/svg> <\\/button> <button type=\"button\" class=\"sf-dump-search-input-next\" tabindex=\"-1\"> <svg viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z\"\\/><\\/svg> <\\/button> \'; root.insertBefore(search, root.firstChild); var state = new SearchState(); var searchInput = search.querySelector(\'.sf-dump-search-input\'); var counter = search.querySelector(\'.sf-dump-search-count\'); var searchInputTimer = 0; var previousSearchQuery = \'\'; addEventListener(searchInput, \'keyup\', function (e) { var searchQuery = e.target.value; /* Don\'t perform anything if the pressed key didn\'t change the query */ if (searchQuery === previousSearchQuery) { return; } previousSearchQuery = searchQuery; clearTimeout(searchInputTimer); searchInputTimer = setTimeout(function () { state.reset(); collapseAll(root); resetHighlightedNodes(root); if (\'\' === searchQuery) { counter.textContent = \'0 of 0\'; return; } var classMatches = [ \"sf-dump-str\", \"sf-dump-key\", \"sf-dump-public\", \"sf-dump-protected\", \"sf-dump-private\", ].map(xpathHasClass).join(\' or \'); var xpathResult = doc.evaluate(\'.//span[\' + classMatches + \'][contains(translate(child::text(), \' + xpathString(searchQuery.toUpperCase()) + \', \' + xpathString(searchQuery.toLowerCase()) + \'), \' + xpathString(searchQuery.toLowerCase()) + \')]\', root, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null); while (node = xpathResult.iterateNext()) state.nodes.push(node); showCurrent(state); }, 400); }); Array.from(search.querySelectorAll(\'.sf-dump-search-input-next, .sf-dump-search-input-previous\')).forEach(function (btn) { addEventListener(btn, \'click\', function (e) { e.preventDefault(); -1 !== e.target.className.indexOf(\'next\') ? state.next() : state.previous(); searchInput.focus(); collapseAll(root); showCurrent(state); }) }); addEventListener(root, \'keydown\', function (e) { var isSearchActive = !/\\bsf-dump-search-hidden\\b/.test(search.className); if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e.keyCode)) { /* F3 or CMD/CTRL + F */ if (70 === e.keyCode && document.activeElement === searchInput) { /* * If CMD/CTRL + F is hit while having focus on search input, * the user probably meant to trigger browser search instead. * Let the browser execute its behavior: */ return; } e.preventDefault(); search.className = search.className.replace(/\\bsf-dump-search-hidden\\b/, \'\'); searchInput.focus(); } else if (isSearchActive) { if (27 === e.keyCode) { /* ESC key */ search.className += \' sf-dump-search-hidden\'; e.preventDefault(); resetHighlightedNodes(root); searchInput.value = \'\'; } else if ( (isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e.keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) { e.preventDefault(); e.shiftKey ? state.previous() : state.next(); collapseAll(root); showCurrent(state); } } }); } if (0 >= options.maxStringLength) { return; } try { elt = root.querySelectorAll(\'.sf-dump-str\'); len = elt.length; i = 0; t = []; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; s = elt.innerText || elt.textContent; x = s.length - options.maxStringLength; if (0 < x) { h = elt.innerHTML; elt[elt.innerText ? \'innerText\' : \'textContent\'] = s.substring(0, options.maxStringLength); elt.className += \' sf-dump-str-collapse\'; elt.innerHTML = \'<span class=sf-dump-str-collapse>\'+h+\'<a class=\"sf-dump-ref sf-dump-str-toggle\" title=\"Collapse\"> ◀</a></span>\'+ \'<span class=sf-dump-str-expand>\'+elt.innerHTML+\'<a class=\"sf-dump-ref sf-dump-str-toggle\" title=\"\'+x+\' remaining characters\"> ▶</a></span>\'; } } } catch (e) { } }; })(document); </script><style> .phpdebugbar pre.sf-dump { display: block; white-space: pre; padding: 5px; overflow: initial !important; } .phpdebugbar pre.sf-dump:after { content: \"\"; visibility: hidden; display: block; height: 0; clear: both; } .phpdebugbar pre.sf-dump span { display: inline; } .phpdebugbar pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; color: inherit; } .phpdebugbar pre.sf-dump img { max-width: 50em; max-height: 50em; margin: .5em 0 0 0; padding: 0; background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #D3D3D3; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis { display: inline-block; overflow: visible; text-overflow: ellipsis; max-width: 5em; white-space: nowrap; overflow: hidden; vertical-align: top; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis { max-width: none; } .phpdebugbar pre.sf-dump code { display:inline; padding:0; background:none; } .sf-dump-public.sf-dump-highlight, .sf-dump-protected.sf-dump-highlight, .sf-dump-private.sf-dump-highlight, .sf-dump-str.sf-dump-highlight, .sf-dump-key.sf-dump-highlight { background: rgba(111, 172, 204, 0.3); border: 1px solid #7DA0B1; border-radius: 3px; } .sf-dump-public.sf-dump-highlight-active, .sf-dump-protected.sf-dump-highlight-active, .sf-dump-private.sf-dump-highlight-active, .sf-dump-str.sf-dump-highlight-active, .sf-dump-key.sf-dump-highlight-active { background: rgba(253, 175, 0, 0.4); border: 1px solid #ffa500; border-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-hidden { display: none !important; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper { font-size: 0; white-space: nowrap; margin-bottom: 5px; display: flex; position: -webkit-sticky; position: sticky; top: 5px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > * { vertical-align: top; box-sizing: border-box; height: 21px; font-weight: normal; border-radius: 0; background: #FFF; color: #757575; border: 1px solid #BBB; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > input.sf-dump-search-input { padding: 3px; height: 21px; font-size: 12px; border-right: none; border-top-left-radius: 3px; border-bottom-left-radius: 3px; color: #000; min-width: 15px; width: 100%; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous { background: #F2F2F2; outline: none; border-left: none; font-size: 0; line-height: 0; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next { border-top-right-radius: 3px; border-bottom-right-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next > svg, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous > svg { pointer-events: none; width: 12px; height: 12px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-count { display: inline-block; padding: 0 5px; margin: 0; border-left: none; line-height: 21px; font-size: 12px; }.phpdebugbar pre.sf-dump, .phpdebugbar pre.sf-dump .sf-dump-default{word-wrap: break-word; white-space: pre-wrap; word-break: normal}.phpdebugbar pre.sf-dump .sf-dump-num{font-weight:bold; color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-const{font-weight:bold}.phpdebugbar pre.sf-dump .sf-dump-str{font-weight:bold; color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-note{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ref{color:#7B7B7B}.phpdebugbar pre.sf-dump .sf-dump-public{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-protected{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-private{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-meta{color:#B729D9}.phpdebugbar pre.sf-dump .sf-dump-key{color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-index{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ellipsis{color:#A0A000}.phpdebugbar pre.sf-dump .sf-dump-ns{user-select:none;}.phpdebugbar pre.sf-dump .sf-dump-ellipsis-note{color:#1299DA}</style>\r\n<script type=\"text/javascript\">\r\nvar phpdebugbar = new PhpDebugBar.DebugBar();\r\nphpdebugbar.addIndicator(\"php_version\", new PhpDebugBar.DebugBar.Indicator({\"icon\":\"code\",\"tooltip\":\"PHP Version\"}), \"right\");\r\nphpdebugbar.addTab(\"messages\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"list-alt\",\"title\":\"Messages\", \"widget\": new PhpDebugBar.Widgets.MessagesWidget()}));\r\nphpdebugbar.addIndicator(\"time\", new PhpDebugBar.DebugBar.Indicator({\"icon\":\"clock-o\",\"tooltip\":\"Request Duration\"}), \"right\");\r\nphpdebugbar.addTab(\"timeline\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"tasks\",\"title\":\"Timeline\", \"widget\": new PhpDebugBar.Widgets.TimelineWidget()}));\r\nphpdebugbar.addIndicator(\"memory\", new PhpDebugBar.DebugBar.Indicator({\"icon\":\"cogs\",\"tooltip\":\"Memory Usage\"}), \"right\");\r\nphpdebugbar.addTab(\"exceptions\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"bug\",\"title\":\"Exceptions\", \"widget\": new PhpDebugBar.Widgets.ExceptionsWidget()}));\r\nphpdebugbar.addTab(\"views\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"leaf\",\"title\":\"Views\", \"widget\": new PhpDebugBar.Widgets.TemplatesWidget()}));\r\nphpdebugbar.addTab(\"route\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"share\",\"title\":\"Route\", \"widget\": new PhpDebugBar.Widgets.VariableListWidget()}));\r\nphpdebugbar.addIndicator(\"currentroute\", new PhpDebugBar.DebugBar.Indicator({\"icon\":\"share\",\"tooltip\":\"Route\"}), \"right\");\r\nphpdebugbar.addTab(\"queries\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"database\",\"title\":\"Queries\", \"widget\": new PhpDebugBar.Widgets.LaravelSQLQueriesWidget()}));\r\nphpdebugbar.addTab(\"models\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"cubes\",\"title\":\"Models\", \"widget\": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));\r\nphpdebugbar.addTab(\"emails\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"inbox\",\"title\":\"Mails\", \"widget\": new PhpDebugBar.Widgets.MailsWidget()}));\r\nphpdebugbar.addTab(\"gate\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"list-alt\",\"title\":\"Gate\", \"widget\": new PhpDebugBar.Widgets.MessagesWidget()}));\r\nphpdebugbar.addTab(\"session\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"archive\",\"title\":\"Session\", \"widget\": new PhpDebugBar.Widgets.VariableListWidget()}));\r\nphpdebugbar.addTab(\"request\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"tags\",\"title\":\"Request\", \"widget\": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));\r\nphpdebugbar.setDataMap({\r\n\"php_version\": [\"php.version\", ],\r\n\"messages\": [\"messages.messages\", []],\r\n\"messages:badge\": [\"messages.count\", null],\r\n\"time\": [\"time.duration_str\", \'0ms\'],\r\n\"timeline\": [\"time\", {}],\r\n\"memory\": [\"memory.peak_usage_str\", \'0B\'],\r\n\"exceptions\": [\"exceptions.exceptions\", []],\r\n\"exceptions:badge\": [\"exceptions.count\", null],\r\n\"views\": [\"views\", []],\r\n\"views:badge\": [\"views.nb_templates\", 0],\r\n\"route\": [\"route\", {}],\r\n\"currentroute\": [\"route.uri\", ],\r\n\"queries\": [\"queries\", []],\r\n\"queries:badge\": [\"queries.nb_statements\", 0],\r\n\"models\": [\"models.data\", {}],\r\n\"models:badge\": [\"models.count\", 0],\r\n\"emails\": [\"swiftmailer_mails.mails\", []],\r\n\"emails:badge\": [\"swiftmailer_mails.count\", null],\r\n\"gate\": [\"gate.messages\", []],\r\n\"gate:badge\": [\"gate.count\", null],\r\n\"session\": [\"session\", {}],\r\n\"request\": [\"request\", {}]\r\n});\r\nphpdebugbar.restoreState();\r\nphpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar, undefined, true);\r\nphpdebugbar.ajaxHandler.bindToFetch();\r\nphpdebugbar.ajaxHandler.bindToXHR();\r\nphpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({\"url\":\"http:\\/\\/127.0.0.1:8000\\/_debugbar\\/open\"}));\r\nphpdebugbar.addDataSet({\"__meta\":{\"id\":\"Xfb3a7983f492eb451d3c5ce873d82629\",\"datetime\":\"2021-07-06 02:27:26\",\"utime\":1625538446.918831,\"method\":\"POST\",\"uri\":\"\\/admin\\/ajax\\/upload\\/image\",\"ip\":\"127.0.0.1\"},\"php\":{\"version\":\"7.4.16\",\"interface\":\"cli-server\"},\"messages\":{\"count\":0,\"messages\":[]},\"time\":{\"start\":1625538446.730654,\"end\":1625538446.918856,\"duration\":0.188201904296875,\"duration_str\":\"188ms\",\"measures\":[{\"label\":\"Booting\",\"start\":1625538446.730654,\"relative_start\":0,\"end\":1625538446.87246,\"relative_end\":1625538446.87246,\"duration\":0.14180588722229004,\"duration_str\":\"142ms\",\"params\":[],\"collector\":null},{\"label\":\"Application\",\"start\":1625538446.874518,\"relative_start\":0.14386391639709473,\"end\":1625538446.91886,\"relative_end\":4.0531158447265625e-6,\"duration\":0.044342041015625,\"duration_str\":\"44.34ms\",\"params\":[],\"collector\":null}]},\"memory\":{\"peak_usage\":21772920,\"peak_usage_str\":\"21MB\"},\"exceptions\":{\"count\":0,\"exceptions\":[]},\"views\":{\"nb_templates\":0,\"templates\":[]},\"route\":{\"uri\":\"POST admin\\/ajax\\/upload\\/image\",\"middleware\":\"web, checkLoginAdmin\",\"controller\":\"Modules\\\\Admin\\\\Http\\\\Controllers\\\\Ajax\\\\AdminAjaxUploadImageController@processUpload\",\"namespace\":\"Modules\\\\Admin\\\\Http\\\\Controllers\\\\Ajax\",\"prefix\":\"admin\\/ajax\",\"where\":[],\"as\":\"post_ajax_admin.uploads\",\"file\":\"\\\\Modules\\\\Admin\\\\Http\\\\Controllers\\\\Ajax\\\\AdminAjaxUploadImageController.php:14-40\"},\"queries\":{\"nb_statements\":1,\"nb_failed_statements\":0,\"accumulated_duration\":0.00035,\"accumulated_duration_str\":\"350\\u03bcs\",\"statements\":[{\"sql\":\"select * from `admins` where `id` = 1 limit 1\",\"type\":\"query\",\"params\":[],\"bindings\":[\"1\"],\"hints\":null,\"show_copy\":false,\"backtrace\":[{\"index\":15,\"namespace\":null,\"name\":\"\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Auth\\\\EloquentUserProvider.php\",\"line\":52},{\"index\":16,\"namespace\":null,\"name\":\"\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Auth\\\\SessionGuard.php\",\"line\":141},{\"index\":17,\"namespace\":null,\"name\":\"\\\\app\\\\Helpers\\\\guest.php\",\"line\":7},{\"index\":19,\"namespace\":null,\"name\":\"\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Pipeline\\\\Pipeline.php\",\"line\":167},{\"index\":20,\"namespace\":null,\"name\":\"\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Routing\\\\Middleware\\\\SubstituteBindings.php\",\"line\":50}],\"duration\":0.00035,\"duration_str\":\"350\\u03bcs\",\"stmt_id\":\"\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Auth\\\\EloquentUserProvider.php:52\",\"connection\":\"unispice\",\"start_percent\":0,\"width_percent\":100}]},\"models\":{\"data\":{\"App\\\\Models\\\\System\\\\Admin\":1},\"count\":1},\"swiftmailer_mails\":{\"count\":0,\"mails\":[]},\"gate\":{\"count\":0,\"messages\":[]},\"session\":{\"_token\":\"FkH0xvvu8CUJYvRT8sowgyhVVihFDzU7YP6m99wu\",\"_previous\":\"array:1 [\\n  \\\"url\\\" => \\\"http:\\/\\/127.0.0.1:8000\\/admin\\/uni_product\\/create\\\"\\n]\",\"_flash\":\"array:2 [\\n  \\\"old\\\" => []\\n  \\\"new\\\" => []\\n]\",\"login_admins_59ba36addc2b2f9401580f014c7f58ea4e30989d\":\"1\",\"PHPDEBUGBAR_STACK_DATA\":\"[]\"},\"request\":{\"path_info\":\"\\/admin\\/ajax\\/upload\\/image\",\"status_code\":\"<pre class=sf-dump id=sf-dump-158655910 data-indent-pad=\\\"  \\\"><span class=sf-dump-num>200<\\/span>\\n<\\/pre><script>Sfdump(\\\"sf-dump-158655910\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"status_text\":\"OK\",\"format\":\"html\",\"content_type\":\"text\\/html; charset=UTF-8\",\"request_query\":\"<pre class=sf-dump id=sf-dump-425286830 data-indent-pad=\\\"  \\\">[]\\n<\\/pre><script>Sfdump(\\\"sf-dump-425286830\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"request_request\":\"<pre class=sf-dump id=sf-dump-27924597 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:1<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>avatar<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"14 characters\\\">{&quot;color&quot;:null}<\\/span>\\\"\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-27924597\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"request_headers\":\"<pre class=sf-dump id=sf-dump-1781913079 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:17<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>host<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"14 characters\\\">127.0.0.1:8000<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>connection<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"10 characters\\\">keep-alive<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>content-length<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"6 characters\\\">118654<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>sec-ch-ua<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"64 characters\\\">&quot; Not;A Brand&quot;;v=&quot;99&quot;, &quot;Google Chrome&quot;;v=&quot;91&quot;, &quot;Chromium&quot;;v=&quot;91&quot;<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>x-csrf-token<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"40 characters\\\">FkH0xvvu8CUJYvRT8sowgyhVVihFDzU7YP6m99wu<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>sec-ch-ua-mobile<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"2 characters\\\">?0<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>user-agent<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"115 characters\\\">Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.124 Safari\\/537.36<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>content-type<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"68 characters\\\">multipart\\/form-data; boundary=----WebKitFormBoundaryzmQelg2oUW60YbdT<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>accept<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"3 characters\\\">*\\/*<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>origin<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"21 characters\\\">http:\\/\\/127.0.0.1:8000<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>sec-fetch-site<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"11 characters\\\">same-origin<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>sec-fetch-mode<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"4 characters\\\">cors<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>sec-fetch-dest<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"5 characters\\\">empty<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>referer<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"46 characters\\\">http:\\/\\/127.0.0.1:8000\\/admin\\/uni_product\\/create<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>accept-encoding<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"17 characters\\\">gzip, deflate, br<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>accept-language<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"23 characters\\\">en-US,en;q=0.9,vi;q=0.8<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>cookie<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"689 characters\\\">XSRF-TOKEN=eyJpdiI6Ik8vWE1SbWpQTkFReE1RaEUzdkVWMHc9PSIsInZhbHVlIjoiUUo3OWRnMWJBOFAxL1V4T1NPNUJabzhyQnZ4N1M0cENTV2FZdzgyR1lqL1Bhczl2U3QxSWtmU0MrdUthS0o5dHRlTU1kRk1kREZwRmI2ekJlWUpQSUlIN0JwblJCNjBQR2dHMS9zOHBUQ1FwbkZYaDhJV0pxZC96SzRVNWRXVkUiLCJtYWMiOiI3YzNlOGU3ZTk4NDBkZjE5NzNjMDM2OTA5ZjViNjE3M2ZkNmFiNWY0NmQzODI4MDhkOWQ3ZGE4OTg2ODgyNTc3In0%3D; unimind_session=eyJpdiI6IldtMVJqam1lUGh3Tm1ieDRuU0RSS0E9PSIsInZhbHVlIjoicmhBQi81RHF5QjI3OWdwMUQ0NXlhaU54TEc1QkhYTWhkMXBVamRLd0ltRHM4aEtkR0h1bVF3ck0yQWcvbnZMVmxWMC9taEwydUZtaGh4TTFHVjRqVzBnL1VrQ00zTkRPeXQyVWhISjlPTE5aTElUOUZ3ckhJYWQzWnBMY3VTU3UiLCJtYWMiOiJmMDNmZWQwZDkwODVmOGRjYjg5YjdjZWIwNDM2MjYxYWFmMWMxOWI1MjJmMzYzMjhhZDMyYmQ1OGY2NmM3OGU5In0%3D<\\/span>\\\"\\n  <\\/samp>]\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-1781913079\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"request_server\":\"<pre class=sf-dump id=sf-dump-1286513510 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:34<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>DOCUMENT_ROOT<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"30 characters\\\">C:\\\\xampp\\\\htdocs\\\\unipice\\\\public<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>REMOTE_ADDR<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"9 characters\\\">127.0.0.1<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>REMOTE_PORT<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"5 characters\\\">60468<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SERVER_SOFTWARE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"29 characters\\\">PHP 7.4.16 Development Server<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SERVER_PROTOCOL<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"8 characters\\\">HTTP\\/1.1<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SERVER_NAME<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"9 characters\\\">127.0.0.1<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SERVER_PORT<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"4 characters\\\">8000<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>REQUEST_URI<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"24 characters\\\">\\/admin\\/ajax\\/upload\\/image<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>REQUEST_METHOD<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"4 characters\\\">POST<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SCRIPT_NAME<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"10 characters\\\">\\/index.php<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SCRIPT_FILENAME<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"40 characters\\\">C:\\\\xampp\\\\htdocs\\\\unipice\\\\public\\\\index.php<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>PATH_INFO<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"24 characters\\\">\\/admin\\/ajax\\/upload\\/image<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>PHP_SELF<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"34 characters\\\">\\/index.php\\/admin\\/ajax\\/upload\\/image<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_HOST<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"14 characters\\\">127.0.0.1:8000<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_CONNECTION<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"10 characters\\\">keep-alive<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>CONTENT_LENGTH<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"6 characters\\\">118654<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_CONTENT_LENGTH<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"6 characters\\\">118654<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_SEC_CH_UA<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"64 characters\\\">&quot; Not;A Brand&quot;;v=&quot;99&quot;, &quot;Google Chrome&quot;;v=&quot;91&quot;, &quot;Chromium&quot;;v=&quot;91&quot;<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_X_CSRF_TOKEN<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"6 characters\\\">******<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_SEC_CH_UA_MOBILE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"2 characters\\\">?0<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_USER_AGENT<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"115 characters\\\">Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.124 Safari\\/537.36<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>CONTENT_TYPE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"68 characters\\\">multipart\\/form-data; boundary=----WebKitFormBoundaryzmQelg2oUW60YbdT<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_CONTENT_TYPE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"68 characters\\\">multipart\\/form-data; boundary=----WebKitFormBoundaryzmQelg2oUW60YbdT<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_ACCEPT<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"3 characters\\\">*\\/*<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_ORIGIN<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"21 characters\\\">http:\\/\\/127.0.0.1:8000<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_SEC_FETCH_SITE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"11 characters\\\">same-origin<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_SEC_FETCH_MODE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"4 characters\\\">cors<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_SEC_FETCH_DEST<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"5 characters\\\">empty<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_REFERER<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"46 characters\\\">http:\\/\\/127.0.0.1:8000\\/admin\\/uni_product\\/create<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_ACCEPT_ENCODING<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"17 characters\\\">gzip, deflate, br<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_ACCEPT_LANGUAGE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"23 characters\\\">en-US,en;q=0.9,vi;q=0.8<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_COOKIE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"689 characters\\\">XSRF-TOKEN=eyJpdiI6Ik8vWE1SbWpQTkFReE1RaEUzdkVWMHc9PSIsInZhbHVlIjoiUUo3OWRnMWJBOFAxL1V4T1NPNUJabzhyQnZ4N1M0cENTV2FZdzgyR1lqL1Bhczl2U3QxSWtmU0MrdUthS0o5dHRlTU1kRk1kREZwRmI2ekJlWUpQSUlIN0JwblJCNjBQR2dHMS9zOHBUQ1FwbkZYaDhJV0pxZC96SzRVNWRXVkUiLCJtYWMiOiI3YzNlOGU3ZTk4NDBkZjE5NzNjMDM2OTA5ZjViNjE3M2ZkNmFiNWY0NmQzODI4MDhkOWQ3ZGE4OTg2ODgyNTc3In0%3D; unimind_session=eyJpdiI6IldtMVJqam1lUGh3Tm1ieDRuU0RSS0E9PSIsInZhbHVlIjoicmhBQi81RHF5QjI3OWdwMUQ0NXlhaU54TEc1QkhYTWhkMXBVamRLd0ltRHM4aEtkR0h1bVF3ck0yQWcvbnZMVmxWMC9taEwydUZtaGh4TTFHVjRqVzBnL1VrQ00zTkRPeXQyVWhISjlPTE5aTElUOUZ3ckhJYWQzWnBMY3VTU3UiLCJtYWMiOiJmMDNmZWQwZDkwODVmOGRjYjg5YjdjZWIwNDM2MjYxYWFmMWMxOWI1MjJmMzYzMjhhZDMyYmQ1OGY2NmM3OGU5In0%3D<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>REQUEST_TIME_FLOAT<\\/span>\\\" => <span class=sf-dump-num>1625538446.7307<\\/span>\\n  \\\"<span class=sf-dump-key>REQUEST_TIME<\\/span>\\\" => <span class=sf-dump-num>1625538446<\\/span>\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-1286513510\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"request_cookies\":\"<pre class=sf-dump id=sf-dump-1559799779 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:2<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>XSRF-TOKEN<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"40 characters\\\">FkH0xvvu8CUJYvRT8sowgyhVVihFDzU7YP6m99wu<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>unimind_session<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"40 characters\\\">ZdwYmnZAD4tNVhA1iwTCgBq53YDcZP0r84vr0LLj<\\/span>\\\"\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-1559799779\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"response_headers\":\"<pre class=sf-dump id=sf-dump-1363552428 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:5<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>content-type<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"24 characters\\\">text\\/html; charset=UTF-8<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>cache-control<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"17 characters\\\">no-cache, private<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>date<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"29 characters\\\">Tue, 06 Jul 2021 02:27:26 GMT<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>set-cookie<\\/span>\\\" => <span class=sf-dump-note>array:2<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"416 characters\\\">XSRF-TOKEN=eyJpdiI6ImcrUWc0d2JVRS9OOUs4SzFCOE1aWGc9PSIsInZhbHVlIjoiTU9mRlJrcHZNNmVBWFhlVTcxa0NtSFkrTlZpWjZpbUNHaGNpcG1KSVI1SWd3Y2pIZHZXNzZTaGlIcmtLOEJOaWVNUUpMblBtVmZJK2drRW9GN3VJWFBNU2FWUFRtT0trYVVsY1p4bUZPaEV1Z3ZtY1ovVGU1SnVJYngrckcrQ1UiLCJtYWMiOiIyOGU3OWJiZjM2ZGJhOWEyNzM4MTE1MTNmMGQxNGM3MmI1NjQzZTU1YmEzNWVlNTY1MDJlM2VkMTExNGUyZTU5In0%3D; expires=Tue, 06-Jul-2021 04:27:26 GMT; Max-Age=7200; path=\\/; samesite=lax<\\/span>\\\"\\n    <span class=sf-dump-index>1<\\/span> => \\\"<span class=sf-dump-str title=\\\"431 characters\\\">unimind_session=eyJpdiI6InlVL3pvTWpDUEhzTS9GcTJBREdqZUE9PSIsInZhbHVlIjoic2VFRkZXQm0yLzhsTWpacSs3UEp2U1Y4c3kyV3NKbk9Vd2tNZ1RnWU95UnR5TFY2T1VWV0xjUmRpM1dyUWh4ZDVqTUNlVW1PMmliMmdpRjZwcWdYeXZWUFNPL3pZOFU0cGxUVDZqRE93VnJZNzlPVmV6NFpKZWlvbkVpZFVNQ1giLCJtYWMiOiJkN2Y2MDhhMzU5ZTI2YTFlMTZiMWJhZmE3NTk1NjFlYTQ0M2FhMmUzMWM1NzkyMTdiZGJiNTM4YjM4N2Y1YWU2In0%3D; expires=Tue, 06-Jul-2021 04:27:26 GMT; Max-Age=7200; path=\\/; httponly; samesite=lax<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>Set-Cookie<\\/span>\\\" => <span class=sf-dump-note>array:2<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"388 characters\\\">XSRF-TOKEN=eyJpdiI6ImcrUWc0d2JVRS9OOUs4SzFCOE1aWGc9PSIsInZhbHVlIjoiTU9mRlJrcHZNNmVBWFhlVTcxa0NtSFkrTlZpWjZpbUNHaGNpcG1KSVI1SWd3Y2pIZHZXNzZTaGlIcmtLOEJOaWVNUUpMblBtVmZJK2drRW9GN3VJWFBNU2FWUFRtT0trYVVsY1p4bUZPaEV1Z3ZtY1ovVGU1SnVJYngrckcrQ1UiLCJtYWMiOiIyOGU3OWJiZjM2ZGJhOWEyNzM4MTE1MTNmMGQxNGM3MmI1NjQzZTU1YmEzNWVlNTY1MDJlM2VkMTExNGUyZTU5In0%3D; expires=Tue, 06-Jul-2021 04:27:26 GMT; path=\\/<\\/span>\\\"\\n    <span class=sf-dump-index>1<\\/span> => \\\"<span class=sf-dump-str title=\\\"403 characters\\\">unimind_session=eyJpdiI6InlVL3pvTWpDUEhzTS9GcTJBREdqZUE9PSIsInZhbHVlIjoic2VFRkZXQm0yLzhsTWpacSs3UEp2U1Y4c3kyV3NKbk9Vd2tNZ1RnWU95UnR5TFY2T1VWV0xjUmRpM1dyUWh4ZDVqTUNlVW1PMmliMmdpRjZwcWdYeXZWUFNPL3pZOFU0cGxUVDZqRE93VnJZNzlPVmV6NFpKZWlvbkVpZFVNQ1giLCJtYWMiOiJkN2Y2MDhhMzU5ZTI2YTFlMTZiMWJhZmE3NTk1NjFlYTQ0M2FhMmUzMWM1NzkyMTdiZGJiNTM4YjM4N2Y1YWU2In0%3D; expires=Tue, 06-Jul-2021 04:27:26 GMT; path=\\/; httponly<\\/span>\\\"\\n  <\\/samp>]\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-1363552428\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"session_attributes\":\"<pre class=sf-dump id=sf-dump-324757730 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:5<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>_token<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"40 characters\\\">FkH0xvvu8CUJYvRT8sowgyhVVihFDzU7YP6m99wu<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>_previous<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    \\\"<span class=sf-dump-key>url<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"46 characters\\\">http:\\/\\/127.0.0.1:8000\\/admin\\/uni_product\\/create<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>_flash<\\/span>\\\" => <span class=sf-dump-note>array:2<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    \\\"<span class=sf-dump-key>old<\\/span>\\\" => []\\n    \\\"<span class=sf-dump-key>new<\\/span>\\\" => []\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>login_admins_59ba36addc2b2f9401580f014c7f58ea4e30989d<\\/span>\\\" => <span class=sf-dump-num>1<\\/span>\\n  \\\"<span class=sf-dump-key>PHPDEBUGBAR_STACK_DATA<\\/span>\\\" => []\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-324757730\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\"}}, \"Xfb3a7983f492eb451d3c5ce873d82629\");\r\n\r\n</script>', NULL, NULL, NULL, NULL, '2021-07-05 19:29:13', '2021-07-10 02:49:42'),
(5, 'Bột chua', 'bot-chua', 'If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.', 'If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.', 'Bột chua', NULL, 'If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.', NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, 'monkey-1625538610.jpg', NULL, NULL, NULL, NULL, '2021-07-05 19:30:13', NULL),
(6, 'Bột ngọt', 'bot-ngot', 'Laravel cung cấp chức storage để lưu tất cả loại dữ liệu bao gồm cả ảnh và các loại files khác.Laravel cung cấp chức storage để lưu tất cả loại dữ liệu bao gồm cả ảnh và các loại files khác.', 'Laravel cung cấp chức storage để lưu tất cả loại dữ liệu bao gồm cả ảnh và các loại files khác.Laravel cung cấp chức storage để lưu tất cả loại dữ liệu bao gồm cả ảnh và các loại files khác.', 'Bột ngọt', NULL, '<p>Laravel cung cấp chức storage để lưu tất cả loại dữ liệu bao gồm cả ảnh v&agrave; c&aacute;c loại files kh&aacute;c.Laravel cung cấp chức storage để lưu tất cả loại dữ liệu bao gồm cả ảnh v&agrave; c&aacute;c loại files kh&aacute;c.Laravel cung cấp chức storage để lưu tất cả loại dữ liệu bao gồm cả ảnh v&agrave; c&aacute;c loại files kh&aacute;c.Laravel cung cấp chức storage để lưu tất cả loại dữ liệu bao gồm cả ảnh v&agrave; c&aacute;c loại files kh&aacute;c.</p>', 6, 0, 550, 650, 600, 0, 0, 0, 0, 'monkey-1625538877.jpg', NULL, '[\"brvn-1625821622.jpg\",\"monkey-1625821622.jpg\",\"hinh-anh-dep-1-1625824181.jpg\"]', NULL, NULL, '2021-07-09 02:49:41', '2021-07-10 02:47:21');
INSERT INTO `uni_product` (`id`, `name`, `slug`, `desscription`, `meta_desscription`, `meta_title`, `meta_keyword`, `content`, `lotproduct_id`, `qty`, `price`, `price_sale`, `price_sale_store`, `status`, `is_hot`, `is_feauture`, `order`, `thumbnail`, `box_thumnail`, `album`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(9, 'Bột chiên aji', 'bot-chien-aji', 'Tương tự bạn hãy thử với file có đuôi không đúng định dạng sẽ bị báo Falied to upload. Only accept jpg, png photos.', 'Tương tự bạn hãy thử với file có đuôi không đúng định dạng sẽ bị báo Falied to upload. Only accept jpg, png photos.', 'Bột chiên aji', NULL, '<p>Tương tự bạn h&atilde;y thử với file c&oacute; đu&ocirc;i kh&ocirc;ng đ&uacute;ng định dạng sẽ bị b&aacute;o Falied to upload. Only accept jpg, png photos.Tương tự bạn h&atilde;y thử với file c&oacute; đu&ocirc;i kh&ocirc;ng đ&uacute;ng định dạng sẽ bị b&aacute;o Falied to upload. Only accept jpg, png photos.</p>', 2, 2200, 500, 600, 550, 0, 0, 0, 0, 'monkey-1625542630.jpg<link rel=\'stylesheet\' type=\'text/css\' property=\'stylesheet\' href=\'//127.0.0.1:8000/_debugbar/assets/stylesheets?v=1625212637&theme=auto\'><script type=\'text/javascript\' src=\'//127.0.0.1:8000/_debugbar/assets/javascript?v=1625212637\'></script><script type=\"text/javascript\">jQuery.noConflict(true);</script>\r\n<script> Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement(\'style\'), rxEsc = /([.*+?^${}()|\\[\\]\\/\\\\])/g, idRx = /\\bsf-dump-\\d+-ref[012]\\w+\\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf(\'MAC\') ? \'Cmd\' : \'Ctrl\', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; refStyle.innerHTML = \'.phpdebugbar pre.sf-dump .sf-dump-compact, .sf-dump-str-collapse .sf-dump-str-collapse, .sf-dump-str-expand .sf-dump-str-expand { display: none; }\'; (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); refStyle = doc.createElement(\'style\'); (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent(\'on\' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if (/\\bsf-dump-compact\\b/.test(oldClass)) { arrow = \'▼\'; newClass = \'sf-dump-expanded\'; } else if (/\\bsf-dump-expanded\\b/.test(oldClass)) { arrow = \'▶\'; newClass = \'sf-dump-compact\'; } else { return false; } if (doc.createEvent && s.dispatchEvent) { var event = doc.createEvent(\'Event\'); event.initEvent(\'sf-dump-expanded\' === newClass ? \'sfbeforedumpexpand\' : \'sfbeforedumpcollapse\', true, false); s.dispatchEvent(event); } a.lastChild.innerHTML = arrow; s.className = s.className.replace(/\\bsf-dump-(compact|expanded)\\b/, newClass); if (recursive) { try { a = s.querySelectorAll(\'.\'+oldClass); for (s = 0; s < a.length; ++s) { if (-1 == a[s].className.indexOf(newClass)) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; function collapse(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\\bsf-dump-expanded\\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function expand(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\\bsf-dump-compact\\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function collapseAll(root) { var a = root.querySelector(\'a.sf-dump-toggle\'); if (a) { collapse(a, true); expand(a); return true; } return false; } function reveal(node) { var previous, parents = []; while ((node = node.parentNode || {}) && (previous = node.previousSibling) && \'A\' === previous.tagName) { parents.push(previous); } if (0 !== parents.length) { parents.forEach(function (parent) { expand(parent); }); return true; } return false; } function highlight(root, activeNode, nodes) { resetHighlightedNodes(root); Array.from(nodes||[]).forEach(function (node) { if (!/\\bsf-dump-highlight\\b/.test(node.className)) { node.className = node.className + \' sf-dump-highlight\'; } }); if (!/\\bsf-dump-highlight-active\\b/.test(activeNode.className)) { activeNode.className = activeNode.className + \' sf-dump-highlight-active\'; } } function resetHighlightedNodes(root) { Array.from(root.querySelectorAll(\'.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private\')).forEach(function (strNode) { strNode.className = strNode.className.replace(/\\bsf-dump-highlight\\b/, \'\'); strNode.className = strNode.className.replace(/\\bsf-dump-highlight-active\\b/, \'\'); }); } return function (root, x) { root = doc.getElementById(root); var indentRx = new RegExp(\'^(\'+(root.getAttribute(\'data-indent-pad\') || \' \').replace(rxEsc, \'\\\\$1\')+\')+\', \'m\'), options = {\"maxDepth\":1,\"maxStringLength\":160,\"fileLinkFormat\":false}, elt = root.getElementsByTagName(\'A\'), len = elt.length, i = 0, s, h, t = []; while (i < len) t.push(elt[i++]); for (i in x) { options[i] = x[i]; } function a(e, f) { addEventListener(root, e, function (e, n) { if (\'A\' == e.target.tagName) { f(e.target, e); } else if (\'A\' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } else { n = /\\bsf-dump-ellipsis\\b/.test(e.target.className) ? e.target.parentNode : e.target; if ((n = n.nextElementSibling) && \'A\' == n.tagName) { if (!/\\bsf-dump-toggle\\b/.test(n.className)) { n = n.nextElementSibling || n; } f(n, e, true); } } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } function xpathString(str) { var parts = str.match(/[^\'\"]+|[\'\"]/g).map(function (part) { if (\"\'\" == part) { return \'\"\\\'\"\'; } if (\'\"\' == part) { return \"\'\\\"\'\"; } return \"\'\" + part + \"\'\"; }); return \"concat(\" + parts.join(\",\") + \", \'\')\"; } function xpathHasClass(className) { return \"contains(concat(\' \', normalize-space(@class), \' \'), \' \" + className +\" \')\"; } addEventListener(root, \'mouseover\', function (e) { if (\'\' != refStyle.innerHTML) { refStyle.innerHTML = \'\'; } }); a(\'mouseover\', function (a, e, c) { if (c) { e.target.style.cursor = \"pointer\"; } else if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = \'.phpdebugbar pre.sf-dump .\'+a[0]+\'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}\'; } catch (e) { } } }); a(\'click\', function (a, e, c) { if (/\\bsf-dump-toggle\\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute(\'href\').substr(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp(\'^\'+f[0].replace(rxEsc, \'\\\\$1\'), \'mg\'), t[0]); } if (/\\bsf-dump-compact\\b/.test(r.className)) { toggle(s, isCtrlKey(e)); } } if (c) { } else if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } else if (/\\bsf-dump-str-toggle\\b/.test(a.className)) { e.preventDefault(); e = a.parentNode.parentNode; e.className = e.className.replace(/\\bsf-dump-str-(expand|collapse)\\b/, a.parentNode.className); } }); elt = root.getElementsByTagName(\'SAMP\'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; if (\'SAMP\' == elt.tagName) { a = elt.previousSibling || {}; if (\'A\' != a.tagName) { a = doc.createElement(\'A\'); a.className = \'sf-dump-ref\'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += \' \'; } a.title = (a.title ? a.title+\'\\n[\' : \'[\')+keyHint+\'+click] Expand all children\'; a.innerHTML += elt.className == \'sf-dump-compact\' ? \'<span>▶</span>\' : \'<span>▼</span>\'; a.className += \' sf-dump-toggle\'; x = 1; if (\'sf-dump\' != elt.parentNode.className) { x += elt.parentNode.getAttribute(\'data-depth\')/1; } } else if (/\\bsf-dump-ref\\b/.test(elt.className) && (a = elt.getAttribute(\'href\'))) { a = a.substr(1); elt.className += \' \'+a; if (/[\\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { s = a.nextSibling; elt.appendChild(a); s.parentNode.insertBefore(a, s); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += \' <span>▶</span>\'; } else { elt.innerHTML = \'<span>▶</span>\'; elt.className = \'sf-dump-ref\'; } elt.className += \' sf-dump-toggle\'; } catch (e) { if (\'&\' == elt.innerHTML.charAt(0)) { elt.innerHTML = \'…\'; elt.className = \'sf-dump-ref\'; } } } } } if (doc.evaluate && Array.from && root.children.length > 1) { root.setAttribute(\'tabindex\', 0); SearchState = function () { this.nodes = []; this.idx = 0; }; SearchState.prototype = { next: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0; return this.current(); }, previous: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1); return this.current(); }, isEmpty: function () { return 0 === this.count(); }, current: function () { if (this.isEmpty()) { return null; } return this.nodes[this.idx]; }, reset: function () { this.nodes = []; this.idx = 0; }, count: function () { return this.nodes.length; }, }; function showCurrent(state) { var currentNode = state.current(), currentRect, searchRect; if (currentNode) { reveal(currentNode); highlight(root, currentNode, state.nodes); if (\'scrollIntoView\' in currentNode) { currentNode.scrollIntoView(true); currentRect = currentNode.getBoundingClientRect(); searchRect = search.getBoundingClientRect(); if (currentRect.top < (searchRect.top + searchRect.height)) { window.scrollBy(0, -(searchRect.top + searchRect.height + 5)); } } } counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + \' of \' + state.count(); } var search = doc.createElement(\'div\'); search.className = \'sf-dump-search-wrapper sf-dump-search-hidden\'; search.innerHTML = \' <input type=\"text\" class=\"sf-dump-search-input\"> <span class=\"sf-dump-search-count\">0 of 0<\\/span> <button type=\"button\" class=\"sf-dump-search-input-previous\" tabindex=\"-1\"> <svg viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z\"\\/><\\/svg> <\\/button> <button type=\"button\" class=\"sf-dump-search-input-next\" tabindex=\"-1\"> <svg viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z\"\\/><\\/svg> <\\/button> \'; root.insertBefore(search, root.firstChild); var state = new SearchState(); var searchInput = search.querySelector(\'.sf-dump-search-input\'); var counter = search.querySelector(\'.sf-dump-search-count\'); var searchInputTimer = 0; var previousSearchQuery = \'\'; addEventListener(searchInput, \'keyup\', function (e) { var searchQuery = e.target.value; /* Don\'t perform anything if the pressed key didn\'t change the query */ if (searchQuery === previousSearchQuery) { return; } previousSearchQuery = searchQuery; clearTimeout(searchInputTimer); searchInputTimer = setTimeout(function () { state.reset(); collapseAll(root); resetHighlightedNodes(root); if (\'\' === searchQuery) { counter.textContent = \'0 of 0\'; return; } var classMatches = [ \"sf-dump-str\", \"sf-dump-key\", \"sf-dump-public\", \"sf-dump-protected\", \"sf-dump-private\", ].map(xpathHasClass).join(\' or \'); var xpathResult = doc.evaluate(\'.//span[\' + classMatches + \'][contains(translate(child::text(), \' + xpathString(searchQuery.toUpperCase()) + \', \' + xpathString(searchQuery.toLowerCase()) + \'), \' + xpathString(searchQuery.toLowerCase()) + \')]\', root, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null); while (node = xpathResult.iterateNext()) state.nodes.push(node); showCurrent(state); }, 400); }); Array.from(search.querySelectorAll(\'.sf-dump-search-input-next, .sf-dump-search-input-previous\')).forEach(function (btn) { addEventListener(btn, \'click\', function (e) { e.preventDefault(); -1 !== e.target.className.indexOf(\'next\') ? state.next() : state.previous(); searchInput.focus(); collapseAll(root); showCurrent(state); }) }); addEventListener(root, \'keydown\', function (e) { var isSearchActive = !/\\bsf-dump-search-hidden\\b/.test(search.className); if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e.keyCode)) { /* F3 or CMD/CTRL + F */ if (70 === e.keyCode && document.activeElement === searchInput) { /* * If CMD/CTRL + F is hit while having focus on search input, * the user probably meant to trigger browser search instead. * Let the browser execute its behavior: */ return; } e.preventDefault(); search.className = search.className.replace(/\\bsf-dump-search-hidden\\b/, \'\'); searchInput.focus(); } else if (isSearchActive) { if (27 === e.keyCode) { /* ESC key */ search.className += \' sf-dump-search-hidden\'; e.preventDefault(); resetHighlightedNodes(root); searchInput.value = \'\'; } else if ( (isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e.keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) { e.preventDefault(); e.shiftKey ? state.previous() : state.next(); collapseAll(root); showCurrent(state); } } }); } if (0 >= options.maxStringLength) { return; } try { elt = root.querySelectorAll(\'.sf-dump-str\'); len = elt.length; i = 0; t = []; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; s = elt.innerText || elt.textContent; x = s.length - options.maxStringLength; if (0 < x) { h = elt.innerHTML; elt[elt.innerText ? \'innerText\' : \'textContent\'] = s.substring(0, options.maxStringLength); elt.className += \' sf-dump-str-collapse\'; elt.innerHTML = \'<span class=sf-dump-str-collapse>\'+h+\'<a class=\"sf-dump-ref sf-dump-str-toggle\" title=\"Collapse\"> ◀</a></span>\'+ \'<span class=sf-dump-str-expand>\'+elt.innerHTML+\'<a class=\"sf-dump-ref sf-dump-str-toggle\" title=\"\'+x+\' remaining characters\"> ▶</a></span>\'; } } } catch (e) { } }; })(document); </script><style> .phpdebugbar pre.sf-dump { display: block; white-space: pre; padding: 5px; overflow: initial !important; } .phpdebugbar pre.sf-dump:after { content: \"\"; visibility: hidden; display: block; height: 0; clear: both; } .phpdebugbar pre.sf-dump span { display: inline; } .phpdebugbar pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; color: inherit; } .phpdebugbar pre.sf-dump img { max-width: 50em; max-height: 50em; margin: .5em 0 0 0; padding: 0; background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #D3D3D3; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis { display: inline-block; overflow: visible; text-overflow: ellipsis; max-width: 5em; white-space: nowrap; overflow: hidden; vertical-align: top; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis { max-width: none; } .phpdebugbar pre.sf-dump code { display:inline; padding:0; background:none; } .sf-dump-public.sf-dump-highlight, .sf-dump-protected.sf-dump-highlight, .sf-dump-private.sf-dump-highlight, .sf-dump-str.sf-dump-highlight, .sf-dump-key.sf-dump-highlight { background: rgba(111, 172, 204, 0.3); border: 1px solid #7DA0B1; border-radius: 3px; } .sf-dump-public.sf-dump-highlight-active, .sf-dump-protected.sf-dump-highlight-active, .sf-dump-private.sf-dump-highlight-active, .sf-dump-str.sf-dump-highlight-active, .sf-dump-key.sf-dump-highlight-active { background: rgba(253, 175, 0, 0.4); border: 1px solid #ffa500; border-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-hidden { display: none !important; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper { font-size: 0; white-space: nowrap; margin-bottom: 5px; display: flex; position: -webkit-sticky; position: sticky; top: 5px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > * { vertical-align: top; box-sizing: border-box; height: 21px; font-weight: normal; border-radius: 0; background: #FFF; color: #757575; border: 1px solid #BBB; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > input.sf-dump-search-input { padding: 3px; height: 21px; font-size: 12px; border-right: none; border-top-left-radius: 3px; border-bottom-left-radius: 3px; color: #000; min-width: 15px; width: 100%; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous { background: #F2F2F2; outline: none; border-left: none; font-size: 0; line-height: 0; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next { border-top-right-radius: 3px; border-bottom-right-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next > svg, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous > svg { pointer-events: none; width: 12px; height: 12px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-count { display: inline-block; padding: 0 5px; margin: 0; border-left: none; line-height: 21px; font-size: 12px; }.phpdebugbar pre.sf-dump, .phpdebugbar pre.sf-dump .sf-dump-default{word-wrap: break-word; white-space: pre-wrap; word-break: normal}.phpdebugbar pre.sf-dump .sf-dump-num{font-weight:bold; color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-const{font-weight:bold}.phpdebugbar pre.sf-dump .sf-dump-str{font-weight:bold; color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-note{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ref{color:#7B7B7B}.phpdebugbar pre.sf-dump .sf-dump-public{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-protected{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-private{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-meta{color:#B729D9}.phpdebugbar pre.sf-dump .sf-dump-key{color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-index{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ellipsis{color:#A0A000}.phpdebugbar pre.sf-dump .sf-dump-ns{user-select:none;}.phpdebugbar pre.sf-dump .sf-dump-ellipsis-note{color:#1299DA}</style>\r\n<script type=\"text/javascript\">\r\nvar phpdebugbar = new PhpDebugBar.DebugBar();\r\nphpdebugbar.addIndicator(\"php_version\", new PhpDebugBar.DebugBar.Indicator({\"icon\":\"code\",\"tooltip\":\"PHP Version\"}), \"right\");\r\nphpdebugbar.addTab(\"messages\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"list-alt\",\"title\":\"Messages\", \"widget\": new PhpDebugBar.Widgets.MessagesWidget()}));\r\nphpdebugbar.addIndicator(\"time\", new PhpDebugBar.DebugBar.Indicator({\"icon\":\"clock-o\",\"tooltip\":\"Request Duration\"}), \"right\");\r\nphpdebugbar.addTab(\"timeline\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"tasks\",\"title\":\"Timeline\", \"widget\": new PhpDebugBar.Widgets.TimelineWidget()}));\r\nphpdebugbar.addIndicator(\"memory\", new PhpDebugBar.DebugBar.Indicator({\"icon\":\"cogs\",\"tooltip\":\"Memory Usage\"}), \"right\");\r\nphpdebugbar.addTab(\"exceptions\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"bug\",\"title\":\"Exceptions\", \"widget\": new PhpDebugBar.Widgets.ExceptionsWidget()}));\r\nphpdebugbar.addTab(\"views\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"leaf\",\"title\":\"Views\", \"widget\": new PhpDebugBar.Widgets.TemplatesWidget()}));\r\nphpdebugbar.addTab(\"route\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"share\",\"title\":\"Route\", \"widget\": new PhpDebugBar.Widgets.VariableListWidget()}));\r\nphpdebugbar.addIndicator(\"currentroute\", new PhpDebugBar.DebugBar.Indicator({\"icon\":\"share\",\"tooltip\":\"Route\"}), \"right\");\r\nphpdebugbar.addTab(\"queries\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"database\",\"title\":\"Queries\", \"widget\": new PhpDebugBar.Widgets.LaravelSQLQueriesWidget()}));\r\nphpdebugbar.addTab(\"models\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"cubes\",\"title\":\"Models\", \"widget\": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));\r\nphpdebugbar.addTab(\"emails\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"inbox\",\"title\":\"Mails\", \"widget\": new PhpDebugBar.Widgets.MailsWidget()}));\r\nphpdebugbar.addTab(\"gate\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"list-alt\",\"title\":\"Gate\", \"widget\": new PhpDebugBar.Widgets.MessagesWidget()}));\r\nphpdebugbar.addTab(\"session\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"archive\",\"title\":\"Session\", \"widget\": new PhpDebugBar.Widgets.VariableListWidget()}));\r\nphpdebugbar.addTab(\"request\", new PhpDebugBar.DebugBar.Tab({\"icon\":\"tags\",\"title\":\"Request\", \"widget\": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));\r\nphpdebugbar.setDataMap({\r\n\"php_version\": [\"php.version\", ],\r\n\"messages\": [\"messages.messages\", []],\r\n\"messages:badge\": [\"messages.count\", null],\r\n\"time\": [\"time.duration_str\", \'0ms\'],\r\n\"timeline\": [\"time\", {}],\r\n\"memory\": [\"memory.peak_usage_str\", \'0B\'],\r\n\"exceptions\": [\"exceptions.exceptions\", []],\r\n\"exceptions:badge\": [\"exceptions.count\", null],\r\n\"views\": [\"views\", []],\r\n\"views:badge\": [\"views.nb_templates\", 0],\r\n\"route\": [\"route\", {}],\r\n\"currentroute\": [\"route.uri\", ],\r\n\"queries\": [\"queries\", []],\r\n\"queries:badge\": [\"queries.nb_statements\", 0],\r\n\"models\": [\"models.data\", {}],\r\n\"models:badge\": [\"models.count\", 0],\r\n\"emails\": [\"swiftmailer_mails.mails\", []],\r\n\"emails:badge\": [\"swiftmailer_mails.count\", null],\r\n\"gate\": [\"gate.messages\", []],\r\n\"gate:badge\": [\"gate.count\", null],\r\n\"session\": [\"session\", {}],\r\n\"request\": [\"request\", {}]\r\n});\r\nphpdebugbar.restoreState();\r\nphpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar, undefined, true);\r\nphpdebugbar.ajaxHandler.bindToFetch();\r\nphpdebugbar.ajaxHandler.bindToXHR();\r\nphpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({\"url\":\"http:\\/\\/127.0.0.1:8000\\/_debugbar\\/open\"}));\r\nphpdebugbar.addDataSet({\"__meta\":{\"id\":\"X2360a26398e78ef34db96a03a9d27058\",\"datetime\":\"2021-07-06 03:37:10\",\"utime\":1625542630.449065,\"method\":\"POST\",\"uri\":\"\\/admin\\/ajax\\/upload\\/image\",\"ip\":\"127.0.0.1\"},\"php\":{\"version\":\"7.4.16\",\"interface\":\"cli-server\"},\"messages\":{\"count\":0,\"messages\":[]},\"time\":{\"start\":1625542630.256374,\"end\":1625542630.44908,\"duration\":0.19270610809326172,\"duration_str\":\"193ms\",\"measures\":[{\"label\":\"Booting\",\"start\":1625542630.256374,\"relative_start\":0,\"end\":1625542630.410007,\"relative_end\":1625542630.410007,\"duration\":0.15363311767578125,\"duration_str\":\"154ms\",\"params\":[],\"collector\":null},{\"label\":\"Application\",\"start\":1625542630.412899,\"relative_start\":0.1565251350402832,\"end\":1625542630.449082,\"relative_end\":1.9073486328125e-6,\"duration\":0.03618288040161133,\"duration_str\":\"36.18ms\",\"params\":[],\"collector\":null}]},\"memory\":{\"peak_usage\":21772896,\"peak_usage_str\":\"21MB\"},\"exceptions\":{\"count\":0,\"exceptions\":[]},\"views\":{\"nb_templates\":0,\"templates\":[]},\"route\":{\"uri\":\"POST admin\\/ajax\\/upload\\/image\",\"middleware\":\"web, checkLoginAdmin\",\"controller\":\"Modules\\\\Admin\\\\Http\\\\Controllers\\\\Ajax\\\\AdminAjaxUploadImageController@processUpload\",\"namespace\":\"Modules\\\\Admin\\\\Http\\\\Controllers\\\\Ajax\",\"prefix\":\"admin\\/ajax\",\"where\":[],\"as\":\"post_ajax_admin.uploads\",\"file\":\"\\\\Modules\\\\Admin\\\\Http\\\\Controllers\\\\Ajax\\\\AdminAjaxUploadImageController.php:14-40\"},\"queries\":{\"nb_statements\":1,\"nb_failed_statements\":0,\"accumulated_duration\":0.00043,\"accumulated_duration_str\":\"430\\u03bcs\",\"statements\":[{\"sql\":\"select * from `admins` where `id` = 1 limit 1\",\"type\":\"query\",\"params\":[],\"bindings\":[\"1\"],\"hints\":null,\"show_copy\":false,\"backtrace\":[{\"index\":15,\"namespace\":null,\"name\":\"\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Auth\\\\EloquentUserProvider.php\",\"line\":52},{\"index\":16,\"namespace\":null,\"name\":\"\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Auth\\\\SessionGuard.php\",\"line\":141},{\"index\":17,\"namespace\":null,\"name\":\"\\\\app\\\\Helpers\\\\guest.php\",\"line\":7},{\"index\":19,\"namespace\":null,\"name\":\"\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Pipeline\\\\Pipeline.php\",\"line\":167},{\"index\":20,\"namespace\":null,\"name\":\"\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Routing\\\\Middleware\\\\SubstituteBindings.php\",\"line\":50}],\"duration\":0.00043,\"duration_str\":\"430\\u03bcs\",\"stmt_id\":\"\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Auth\\\\EloquentUserProvider.php:52\",\"connection\":\"unispice\",\"start_percent\":0,\"width_percent\":100}]},\"models\":{\"data\":{\"App\\\\Models\\\\System\\\\Admin\":1},\"count\":1},\"swiftmailer_mails\":{\"count\":0,\"mails\":[]},\"gate\":{\"count\":0,\"messages\":[]},\"session\":{\"_token\":\"FkH0xvvu8CUJYvRT8sowgyhVVihFDzU7YP6m99wu\",\"_previous\":\"array:1 [\\n  \\\"url\\\" => \\\"http:\\/\\/127.0.0.1:8000\\/admin\\/uni_product\\/create\\\"\\n]\",\"_flash\":\"array:2 [\\n  \\\"old\\\" => []\\n  \\\"new\\\" => []\\n]\",\"login_admins_59ba36addc2b2f9401580f014c7f58ea4e30989d\":\"1\",\"PHPDEBUGBAR_STACK_DATA\":\"[]\"},\"request\":{\"path_info\":\"\\/admin\\/ajax\\/upload\\/image\",\"status_code\":\"<pre class=sf-dump id=sf-dump-689317345 data-indent-pad=\\\"  \\\"><span class=sf-dump-num>200<\\/span>\\n<\\/pre><script>Sfdump(\\\"sf-dump-689317345\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"status_text\":\"OK\",\"format\":\"html\",\"content_type\":\"text\\/html; charset=UTF-8\",\"request_query\":\"<pre class=sf-dump id=sf-dump-1790100078 data-indent-pad=\\\"  \\\">[]\\n<\\/pre><script>Sfdump(\\\"sf-dump-1790100078\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"request_request\":\"<pre class=sf-dump id=sf-dump-35528428 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:1<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>avatar<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"14 characters\\\">{&quot;color&quot;:null}<\\/span>\\\"\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-35528428\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"request_headers\":\"<pre class=sf-dump id=sf-dump-5076038 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:17<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>host<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"14 characters\\\">127.0.0.1:8000<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>connection<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"10 characters\\\">keep-alive<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>content-length<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"6 characters\\\">475655<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>sec-ch-ua<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"64 characters\\\">&quot; Not;A Brand&quot;;v=&quot;99&quot;, &quot;Google Chrome&quot;;v=&quot;91&quot;, &quot;Chromium&quot;;v=&quot;91&quot;<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>x-csrf-token<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"40 characters\\\">FkH0xvvu8CUJYvRT8sowgyhVVihFDzU7YP6m99wu<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>sec-ch-ua-mobile<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"2 characters\\\">?0<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>user-agent<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"115 characters\\\">Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.124 Safari\\/537.36<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>content-type<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"68 characters\\\">multipart\\/form-data; boundary=----WebKitFormBoundaryuePlufd4ILBGHLBm<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>accept<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"3 characters\\\">*\\/*<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>origin<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"21 characters\\\">http:\\/\\/127.0.0.1:8000<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>sec-fetch-site<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"11 characters\\\">same-origin<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>sec-fetch-mode<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"4 characters\\\">cors<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>sec-fetch-dest<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"5 characters\\\">empty<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>referer<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"46 characters\\\">http:\\/\\/127.0.0.1:8000\\/admin\\/uni_product\\/create<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>accept-encoding<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"17 characters\\\">gzip, deflate, br<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>accept-language<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"23 characters\\\">en-US,en;q=0.9,vi;q=0.8<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>cookie<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"689 characters\\\">XSRF-TOKEN=eyJpdiI6IjVZTDVtMDNJT25CYVZJM3ZxQzN0enc9PSIsInZhbHVlIjoiU2NXSytBcUVzVjRjK3h4ZXNXcGRPTi95QnlVRGpDRFdmZit0bUttdnVSTVJiVGsyNEIzYzRUOHhxbXNsUkZ1NkFvRkl2OElMSmp6NTlrQ2h1THdHQVZNTUFBZEpybFpFb0x6MnNUQktIKzE0aFcwemxGUnJjampiaEx0SGR3ankiLCJtYWMiOiJlMzNlNzQ0MjAxYzU1NTllODcyNDI0NWUyYWU3Y2JjOTkwYmQ5MDFmOTQxYWNmODgyYjRjNmQwZjE2YWE3MmIzIn0%3D; unimind_session=eyJpdiI6IlRCdFFHMU1pY1hHUE1wWjIwdURnaGc9PSIsInZhbHVlIjoiaDlUcC9Qb3pac0dCaEU4NmtJUDh6WW1hYVQ1ZDh4a214WVpYbFJkYVNPazNNWk5ld0hMU0hMTCtyMGJ3eFpYNW5BZnNIWWZuMEtINmNVZXdFRHNFazQyYi94Wk0vV0ZkZ0tkNzR2NnNZSjhTbDByVGtFMjZWWnBoZXdFdE9ZRnoiLCJtYWMiOiI2NWIxMGFhZGVjNjYwZGVmYzRmOTgxYWFjYTZhYjVmMzMwN2NjYTQ2YzViYmVjZDRhNjRmNzRkZmYzOGUwZDA3In0%3D<\\/span>\\\"\\n  <\\/samp>]\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-5076038\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"request_server\":\"<pre class=sf-dump id=sf-dump-459369287 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:34<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>DOCUMENT_ROOT<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"30 characters\\\">C:\\\\xampp\\\\htdocs\\\\unipice\\\\public<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>REMOTE_ADDR<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"9 characters\\\">127.0.0.1<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>REMOTE_PORT<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"5 characters\\\">51501<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SERVER_SOFTWARE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"29 characters\\\">PHP 7.4.16 Development Server<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SERVER_PROTOCOL<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"8 characters\\\">HTTP\\/1.1<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SERVER_NAME<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"9 characters\\\">127.0.0.1<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SERVER_PORT<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"4 characters\\\">8000<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>REQUEST_URI<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"24 characters\\\">\\/admin\\/ajax\\/upload\\/image<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>REQUEST_METHOD<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"4 characters\\\">POST<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SCRIPT_NAME<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"10 characters\\\">\\/index.php<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>SCRIPT_FILENAME<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"40 characters\\\">C:\\\\xampp\\\\htdocs\\\\unipice\\\\public\\\\index.php<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>PATH_INFO<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"24 characters\\\">\\/admin\\/ajax\\/upload\\/image<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>PHP_SELF<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"34 characters\\\">\\/index.php\\/admin\\/ajax\\/upload\\/image<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_HOST<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"14 characters\\\">127.0.0.1:8000<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_CONNECTION<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"10 characters\\\">keep-alive<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>CONTENT_LENGTH<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"6 characters\\\">475655<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_CONTENT_LENGTH<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"6 characters\\\">475655<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_SEC_CH_UA<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"64 characters\\\">&quot; Not;A Brand&quot;;v=&quot;99&quot;, &quot;Google Chrome&quot;;v=&quot;91&quot;, &quot;Chromium&quot;;v=&quot;91&quot;<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_X_CSRF_TOKEN<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"6 characters\\\">******<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_SEC_CH_UA_MOBILE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"2 characters\\\">?0<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_USER_AGENT<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"115 characters\\\">Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/91.0.4472.124 Safari\\/537.36<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>CONTENT_TYPE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"68 characters\\\">multipart\\/form-data; boundary=----WebKitFormBoundaryuePlufd4ILBGHLBm<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_CONTENT_TYPE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"68 characters\\\">multipart\\/form-data; boundary=----WebKitFormBoundaryuePlufd4ILBGHLBm<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_ACCEPT<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"3 characters\\\">*\\/*<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_ORIGIN<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"21 characters\\\">http:\\/\\/127.0.0.1:8000<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_SEC_FETCH_SITE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"11 characters\\\">same-origin<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_SEC_FETCH_MODE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"4 characters\\\">cors<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_SEC_FETCH_DEST<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"5 characters\\\">empty<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_REFERER<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"46 characters\\\">http:\\/\\/127.0.0.1:8000\\/admin\\/uni_product\\/create<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_ACCEPT_ENCODING<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"17 characters\\\">gzip, deflate, br<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_ACCEPT_LANGUAGE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"23 characters\\\">en-US,en;q=0.9,vi;q=0.8<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>HTTP_COOKIE<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"689 characters\\\">XSRF-TOKEN=eyJpdiI6IjVZTDVtMDNJT25CYVZJM3ZxQzN0enc9PSIsInZhbHVlIjoiU2NXSytBcUVzVjRjK3h4ZXNXcGRPTi95QnlVRGpDRFdmZit0bUttdnVSTVJiVGsyNEIzYzRUOHhxbXNsUkZ1NkFvRkl2OElMSmp6NTlrQ2h1THdHQVZNTUFBZEpybFpFb0x6MnNUQktIKzE0aFcwemxGUnJjampiaEx0SGR3ankiLCJtYWMiOiJlMzNlNzQ0MjAxYzU1NTllODcyNDI0NWUyYWU3Y2JjOTkwYmQ5MDFmOTQxYWNmODgyYjRjNmQwZjE2YWE3MmIzIn0%3D; unimind_session=eyJpdiI6IlRCdFFHMU1pY1hHUE1wWjIwdURnaGc9PSIsInZhbHVlIjoiaDlUcC9Qb3pac0dCaEU4NmtJUDh6WW1hYVQ1ZDh4a214WVpYbFJkYVNPazNNWk5ld0hMU0hMTCtyMGJ3eFpYNW5BZnNIWWZuMEtINmNVZXdFRHNFazQyYi94Wk0vV0ZkZ0tkNzR2NnNZSjhTbDByVGtFMjZWWnBoZXdFdE9ZRnoiLCJtYWMiOiI2NWIxMGFhZGVjNjYwZGVmYzRmOTgxYWFjYTZhYjVmMzMwN2NjYTQ2YzViYmVjZDRhNjRmNzRkZmYzOGUwZDA3In0%3D<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>REQUEST_TIME_FLOAT<\\/span>\\\" => <span class=sf-dump-num>1625542630.2564<\\/span>\\n  \\\"<span class=sf-dump-key>REQUEST_TIME<\\/span>\\\" => <span class=sf-dump-num>1625542630<\\/span>\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-459369287\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"request_cookies\":\"<pre class=sf-dump id=sf-dump-1704442039 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:2<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>XSRF-TOKEN<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"40 characters\\\">FkH0xvvu8CUJYvRT8sowgyhVVihFDzU7YP6m99wu<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>unimind_session<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"40 characters\\\">ZdwYmnZAD4tNVhA1iwTCgBq53YDcZP0r84vr0LLj<\\/span>\\\"\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-1704442039\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"response_headers\":\"<pre class=sf-dump id=sf-dump-265617533 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:5<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>content-type<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"24 characters\\\">text\\/html; charset=UTF-8<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>cache-control<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"17 characters\\\">no-cache, private<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>date<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"29 characters\\\">Tue, 06 Jul 2021 03:37:10 GMT<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>set-cookie<\\/span>\\\" => <span class=sf-dump-note>array:2<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"416 characters\\\">XSRF-TOKEN=eyJpdiI6InU5VXFkZklJOHpDOG5rc1RYOTQrS0E9PSIsInZhbHVlIjoieWtPeWhadG96MUxqZGJIendJYTM1UE55YlpQeHI5VkpnSUN5WndPd3psMlNqMWI0cXpzNnF5UDVyWE12aG1EV1FZM1N3dUdzenNWYlFWWjB2Zi9pbWhFZDR3YUFFYXFzakRFUmM1TllGbjB3TWpyb1lPMGZqTTNsamJjdS92QXIiLCJtYWMiOiIxOWI0ZGU3MmFhNjNlOWUwNmE4YzhhNWNiYTE5ZTkxZmNkZDJjODE5YTM4Y2EzZDEwMGEwMWNmMjczYmIzZGFjIn0%3D; expires=Tue, 06-Jul-2021 05:37:10 GMT; Max-Age=7200; path=\\/; samesite=lax<\\/span>\\\"\\n    <span class=sf-dump-index>1<\\/span> => \\\"<span class=sf-dump-str title=\\\"431 characters\\\">unimind_session=eyJpdiI6Iis2dlZaUkxYSTFOZFdDZnR4NUgwVmc9PSIsInZhbHVlIjoieS9ZUlIwV28xNURXREVLZS9QZUY1ZW5oZFlkWkl1ZytwL0hoajZBazltZkpYVkpHUytGK2VzWSt4RFh1dlp0a2Z2R1VYL1FSTUpESmtrWFk1VVpIWGFrSUtVaXpNNTcyc1d5d3UxL1lIN3ZXMHBmNm1vdXlHWE1VbG03TFhsbXUiLCJtYWMiOiI1YTVmZWE5YTIxOWJhMzc5MGM5ZTE4ZTViNDJkNDAxYjA1OWFlMTAyZDY1YmM4NDhlZjMyMzAwM2U5ZWNjNzM2In0%3D; expires=Tue, 06-Jul-2021 05:37:10 GMT; Max-Age=7200; path=\\/; httponly; samesite=lax<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>Set-Cookie<\\/span>\\\" => <span class=sf-dump-note>array:2<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    <span class=sf-dump-index>0<\\/span> => \\\"<span class=sf-dump-str title=\\\"388 characters\\\">XSRF-TOKEN=eyJpdiI6InU5VXFkZklJOHpDOG5rc1RYOTQrS0E9PSIsInZhbHVlIjoieWtPeWhadG96MUxqZGJIendJYTM1UE55YlpQeHI5VkpnSUN5WndPd3psMlNqMWI0cXpzNnF5UDVyWE12aG1EV1FZM1N3dUdzenNWYlFWWjB2Zi9pbWhFZDR3YUFFYXFzakRFUmM1TllGbjB3TWpyb1lPMGZqTTNsamJjdS92QXIiLCJtYWMiOiIxOWI0ZGU3MmFhNjNlOWUwNmE4YzhhNWNiYTE5ZTkxZmNkZDJjODE5YTM4Y2EzZDEwMGEwMWNmMjczYmIzZGFjIn0%3D; expires=Tue, 06-Jul-2021 05:37:10 GMT; path=\\/<\\/span>\\\"\\n    <span class=sf-dump-index>1<\\/span> => \\\"<span class=sf-dump-str title=\\\"403 characters\\\">unimind_session=eyJpdiI6Iis2dlZaUkxYSTFOZFdDZnR4NUgwVmc9PSIsInZhbHVlIjoieS9ZUlIwV28xNURXREVLZS9QZUY1ZW5oZFlkWkl1ZytwL0hoajZBazltZkpYVkpHUytGK2VzWSt4RFh1dlp0a2Z2R1VYL1FSTUpESmtrWFk1VVpIWGFrSUtVaXpNNTcyc1d5d3UxL1lIN3ZXMHBmNm1vdXlHWE1VbG03TFhsbXUiLCJtYWMiOiI1YTVmZWE5YTIxOWJhMzc5MGM5ZTE4ZTViNDJkNDAxYjA1OWFlMTAyZDY1YmM4NDhlZjMyMzAwM2U5ZWNjNzM2In0%3D; expires=Tue, 06-Jul-2021 05:37:10 GMT; path=\\/; httponly<\\/span>\\\"\\n  <\\/samp>]\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-265617533\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\",\"session_attributes\":\"<pre class=sf-dump id=sf-dump-825835022 data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:5<\\/span> [<samp data-depth=1 class=sf-dump-expanded>\\n  \\\"<span class=sf-dump-key>_token<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"40 characters\\\">FkH0xvvu8CUJYvRT8sowgyhVVihFDzU7YP6m99wu<\\/span>\\\"\\n  \\\"<span class=sf-dump-key>_previous<\\/span>\\\" => <span class=sf-dump-note>array:1<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    \\\"<span class=sf-dump-key>url<\\/span>\\\" => \\\"<span class=sf-dump-str title=\\\"46 characters\\\">http:\\/\\/127.0.0.1:8000\\/admin\\/uni_product\\/create<\\/span>\\\"\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>_flash<\\/span>\\\" => <span class=sf-dump-note>array:2<\\/span> [<samp data-depth=2 class=sf-dump-compact>\\n    \\\"<span class=sf-dump-key>old<\\/span>\\\" => []\\n    \\\"<span class=sf-dump-key>new<\\/span>\\\" => []\\n  <\\/samp>]\\n  \\\"<span class=sf-dump-key>login_admins_59ba36addc2b2f9401580f014c7f58ea4e30989d<\\/span>\\\" => <span class=sf-dump-num>1<\\/span>\\n  \\\"<span class=sf-dump-key>PHPDEBUGBAR_STACK_DATA<\\/span>\\\" => []\\n<\\/samp>]\\n<\\/pre><script>Sfdump(\\\"sf-dump-825835022\\\", {\\\"maxDepth\\\":0})<\\/script>\\n\"}}, \"X2360a26398e78ef34db96a03a9d27058\");\r\n\r\n</script>', NULL, '[\"monkey-1625823043.jpg\",\"brvn3-1625824234.jpg\",\"hinh-anh-dep-1-1625824234.jpg\",\"logo-1625824234.png\",\"monkey-1625824234.jpg\"]', NULL, NULL, '2021-07-09 02:50:34', '2021-07-09 02:50:34');

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
  `thumnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` timestamp NULL DEFAULT NULL,
  `updated_by` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_product_category`
--

INSERT INTO `uni_product_category` (`id`, `name`, `slug`, `desscription`, `meta_desscription`, `meta_title`, `meta_keyword`, `content`, `parent_id`, `status`, `order`, `thumnail`, `banner`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Sản phẩm bột ớt_edit01', 'san-pham-bot-otedit01', 'Mô tả sản phẩm bột ớt Mô tả sản phẩm bột ớt Mô tả sản phẩm bột ớt', 'Sản phẩm bột ớt_edit01', 'Sản phẩm bột ớt_edit01', NULL, 'Mô tả sản phẩm bột ớt Mô tả sản phẩm bột ớt Mô tả sản phẩm bột ớt Mô tả sản phẩm bột ớt Mô tả sản phẩm bột ớt Mô tả sản phẩm bột ớt Mô tả sản phẩm bột ớt Mô tả sản phẩm bột ớt Mô tả sản phẩm bột ớt Mô tả sản phẩm bột ớt Mô tả sản phẩm bột ớt', 0, 1, 1, NULL, NULL, NULL, NULL, '2021-07-02 21:32:06', '2021-07-02 21:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `uni_size`
--

CREATE TABLE `uni_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `created_by` timestamp NULL DEFAULT NULL,
  `updated_by` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_size`
--

INSERT INTO `uni_size` (`id`, `name`, `slug`, `desscription`, `meta_desscription`, `meta_title`, `meta_keyword`, `content`, `content_more`, `status`, `order`, `thumnail`, `banner`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Hộp nhựa 30g', 'hop-nhua-30g', 'Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa', 'Hộp nhựa 30g', 'Hộp nhựa 30g', NULL, 'Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa Hộp nhựa', NULL, 1, 0, NULL, NULL, NULL, NULL, '2021-07-03 01:53:26', '2021-07-03 01:53:58'),
(2, 'Hộp 50g', 'hop-50g', 'It is Very Easy to Customize and it uses in your website apllication. It is Very Easy to Customize and it uses in your website apllication.', 'Hộp 50g', 'Hộp 50g', NULL, 'It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.It is Very Easy to Customize and it uses in your website apllication.', NULL, 1, 0, NULL, NULL, NULL, NULL, '2021-07-07 02:44:41', NULL);

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
  `store_album` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_phone` int(11) DEFAULT NULL,
  `store_status` tinyint(4) DEFAULT NULL,
  `store_taxcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_store`
--

INSERT INTO `uni_store` (`id`, `user_id`, `store_name`, `store_area`, `store_address`, `store_album`, `store_phone`, `store_status`, `store_taxcode`, `store_thumbnail`, `created_at`, `updated_at`) VALUES
(1, 1, 'Naga saja', '222', 'Haf noi', '[\"brvn-1625735068.jpg\",\"brvn1-1625735068.jpg\",\"brvn2-1625735068.jpg\",\"brvn3-1625735068.jpg\"]', 966699966, 1, '11222552', 'monkey-1625734962.jpg', '2021-07-08 02:04:28', '2021-07-08 02:04:28'),
(2, NULL, 'Cua hang gia vi so 222', '333', 'Hai phong', '[\"brvn-1625735068.jpg\",\"brvn1-1625735068.jpg\",\"brvn2-1625735068.jpg\",\"brvn3-1625735068.jpg\"]', 969987456, 1, '12332211', NULL, '2021-07-08 02:19:53', '2021-07-08 02:19:53'),
(3, NULL, 'Của hàng đồ cay số 2', '200', 'Hà Nam', '[\"monkey-1625820540.jpg\",\"brvn-1625820751.jpg\",\"hinh-anh-dep-1-1625822937.jpg\"]', 968874556, 0, '112233366554', NULL, '2021-07-09 02:28:57', '2021-07-09 02:28:57');

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
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_supplier`
--

INSERT INTO `uni_supplier` (`id`, `name`, `email`, `address`, `phone`, `status`, `tax_code`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Dat Nguyen 07', 'ntdat7714@gmail.com', '75 Cau Giay st.', 969938801, 1, 1234567822, NULL, '2021-07-03 03:02:19', '2021-07-04 19:04:53');

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
  `created_by` timestamp NULL DEFAULT NULL,
  `updated_by` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_tag`
--

INSERT INTO `uni_tag` (`id`, `name`, `slug`, `desscription`, `meta_desscription`, `meta_title`, `meta_keyword`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Gia vị nẩu 001', 'gia-vi-nau-001', 'Gia vị nẩu thái ngon cho từng gia đình Gia vị nẩu thái ngon cho từng gia đìnhGia vị nẩu thái ngon cho từng gia đình', 'Gia vị nẩu 001', 'Gia vị nẩu 001', NULL, NULL, NULL, '2021-07-04 21:14:23', '2021-07-04 21:15:38');

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
(1, 'Văn Phạm', 'van-pham', 'Hạt tiêu cay bắc cực biên cương cức Hạt tiêu cay bắc cực biên cương cức Hạt tiêu cay bắc cực biên cương cức', 'Văn Phạm', 'Văn Phạm', NULL, 'Hạt tiêu cay bắc cực biên cương cức Hạt tiêu cay bắc cực biên cương cức Hạt tiêu cay bắc cực biên cương cức', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '2021-07-03 01:23:31', '2021-07-03 01:23:41');

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
  `code_verication` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `job`, `phone`, `avatar`, `address`, `status`, `total_course`, `provider`, `avatar_social`, `provider_id`, `code_verication`) VALUES
(1, 'adsmo', 'pvtien@gmail.com', NULL, '$2y$10$TSAZhOcoEvyfb/GG1T5ya.24MguuRjpgO2pT0nbHndgbeXCEIxgFG', 'PfeXTVHdXhTXPCEd84GQ6wvYfjoEjSxnzgk0wM6vVrUW6bNUNQS3ybZrQbgJ', NULL, '2021-05-03 04:00:39', NULL, NULL, NULL, NULL, 1, 0, 'google', '', '106738833952998328415', ''),
(2, 'Nguyên Văn Dược', 'duocnvoit@gmail.com', NULL, '$2y$10$XWoLgI19bRRddChjMOZ/cevKcq74iwXTBGSjslH5s4blqDhCLCUay', NULL, '2020-12-27 02:02:47', NULL, NULL, '0928817228', NULL, NULL, 1, 0, '', '', '', ''),
(3, 'Tấn Đình Hoàng', 'daohainamnam28@gmail.com', NULL, 'daohainamnam28@gmail.com', 'gghPpDtuVnEKXeQ3GIRfszSoFNJTTNYNFRNrtiedOg5pJ0MKFIyKIlbUAblx', '2020-12-28 00:51:01', '2020-12-28 00:51:01', NULL, NULL, NULL, NULL, 1, 0, 'google', 'https://lh4.googleusercontent.com/-ad9WyeDGPwI/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuclcdoZqddG7FQbR5s2PAR7vHjEngg/s96-c/photo.jpg', '118326123659883004311', ''),
(34, 'Tien Van Pham', 'hppvtien@gmail.com', '2020-12-27 02:02:47', '$2y$10$1aATl0EuZjB1whFCus860uZcTsbEFdePtY.ahL0GhDI/l3m6Ikvca', NULL, '2021-05-25 03:27:48', NULL, NULL, '0969938801', NULL, NULL, 1, 0, 'register', '', '0', 'dasdasdasdasdasdasdasd');

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
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer_to_teacher`
--
ALTER TABLE `answer_to_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_a_slug_unique` (`a_slug`);

--
-- Indexes for table `articles_keywords`
--
ALTER TABLE `articles_keywords`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_keywords_ak_article_id_ak_keyword_id_unique` (`ak_article_id`,`ak_keyword_id`),
  ADD KEY `articles_keywords_ak_article_id_index` (`ak_article_id`),
  ADD KEY `articles_keywords_ak_keyword_id_index` (`ak_keyword_id`);

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
-- Indexes for table `contact_jobs`
--
ALTER TABLE `contact_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corrects_answers`
--
ALTER TABLE `corrects_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `corrects_answers_ca_course_id_index` (`ca_course_id`),
  ADD KEY `corrects_answers_ca_answer_id_index` (`ca_answer_id`),
  ADD KEY `corrects_answers_ca_question_id_index` (`ca_question_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_c_slug_unique` (`c_slug`),
  ADD KEY `courses_c_teacher_id_index` (`c_teacher_id`),
  ADD KEY `courses_c_category_id_index` (`c_category_id`);

--
-- Indexes for table `courses_contents`
--
ALTER TABLE `courses_contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_contents_cc_course_id_index` (`cc_course_id`);

--
-- Indexes for table `courses_tags`
--
ALTER TABLE `courses_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_tags_ct_course_id_ct_tag_id_unique` (`ct_course_id`,`ct_tag_id`),
  ADD KEY `courses_tags_ct_course_id_index` (`ct_course_id`),
  ADD KEY `courses_tags_ct_tag_id_index` (`ct_tag_id`);

--
-- Indexes for table `courses_videos`
--
ALTER TABLE `courses_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_faq`
--
ALTER TABLE `course_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_results`
--
ALTER TABLE `course_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_results_cr_question_id_index` (`cr_question_id`),
  ADD KEY `course_results_cr_user_id_index` (`cr_user_id`),
  ADD KEY `course_results_cr_course_id_index` (`cr_course_id`),
  ADD KEY `course_results_cr_answer_id_index` (`cr_answer_id`);

--
-- Indexes for table `course_results_dashboard`
--
ALTER TABLE `course_results_dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `favourites_f_id_f_type_unique` (`f_id`,`f_type`);

--
-- Indexes for table `free_book`
--
ALTER TABLE `free_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `keywords_k_slug_unique` (`k_slug`);

--
-- Indexes for table `keywords_search`
--
ALTER TABLE `keywords_search`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `keywords_search_ks_slug_unique` (`ks_slug`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_m_slug_unique` (`m_slug`),
  ADD KEY `menus_m_parent_id_index` (`m_parent_id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_o_transaction_id_index` (`o_transaction_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `questions_q_slug_unique` (`q_slug`),
  ADD KEY `questions_q_course_id_index` (`q_course_id`);

--
-- Indexes for table `questions_from_teacher`
--
ALTER TABLE `questions_from_teacher`
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
-- Indexes for table `seo_blog`
--
ALTER TABLE `seo_blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seo_blog_sb_id_sb_type_unique` (`sb_id`,`sb_type`),
  ADD UNIQUE KEY `seo_blog_sb_md5_unique` (`sb_md5`);

--
-- Indexes for table `seo_education`
--
ALTER TABLE `seo_education`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seo_education_se_id_se_type_unique` (`se_id`,`se_type`),
  ADD UNIQUE KEY `seo_education_se_md5_unique` (`se_md5`);

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
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_t_slug_unique` (`t_slug`);

--
-- Indexes for table `teachers_tags`
--
ALTER TABLE `teachers_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_tags_tt_teacher_id_tt_tag_id_unique` (`tt_teacher_id`,`tt_tag_id`),
  ADD KEY `teachers_tags_tt_teacher_id_index` (`tt_teacher_id`),
  ADD KEY `teachers_tags_tt_tag_id_index` (`tt_tag_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_t_user_id_index` (`t_user_id`);

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
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `answer_to_teacher`
--
ALTER TABLE `answer_to_teacher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `articles_keywords`
--
ALTER TABLE `articles_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- AUTO_INCREMENT for table `contact_jobs`
--
ALTER TABLE `contact_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `corrects_answers`
--
ALTER TABLE `corrects_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `courses_contents`
--
ALTER TABLE `courses_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses_tags`
--
ALTER TABLE `courses_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `courses_videos`
--
ALTER TABLE `courses_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_faq`
--
ALTER TABLE `course_faq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `course_results`
--
ALTER TABLE `course_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_results_dashboard`
--
ALTER TABLE `course_results_dashboard`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `free_book`
--
ALTER TABLE `free_book`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keywords_search`
--
ALTER TABLE `keywords_search`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_color`
--
ALTER TABLE `product_color`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_lotproduct`
--
ALTER TABLE `product_lotproduct`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_trade`
--
ALTER TABLE `product_trade`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions_from_teacher`
--
ALTER TABLE `questions_from_teacher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seo_blog`
--
ALTER TABLE `seo_blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `seo_education`
--
ALTER TABLE `seo_education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teachers_tags`
--
ALTER TABLE `teachers_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `uni_admin`
--
ALTER TABLE `uni_admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_color`
--
ALTER TABLE `uni_color`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uni_contact`
--
ALTER TABLE `uni_contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_favourite`
--
ALTER TABLE `uni_favourite`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_flash_sale`
--
ALTER TABLE `uni_flash_sale`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_lotproduct`
--
ALTER TABLE `uni_lotproduct`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uni_order`
--
ALTER TABLE `uni_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uni_post`
--
ALTER TABLE `uni_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_post_category`
--
ALTER TABLE `uni_post_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uni_product`
--
ALTER TABLE `uni_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `uni_product_category`
--
ALTER TABLE `uni_product_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_size`
--
ALTER TABLE `uni_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_store`
--
ALTER TABLE `uni_store`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uni_supplier`
--
ALTER TABLE `uni_supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uni_tag`
--
ALTER TABLE `uni_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uni_trade`
--
ALTER TABLE `uni_trade`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_activations`
--
ALTER TABLE `user_activations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
