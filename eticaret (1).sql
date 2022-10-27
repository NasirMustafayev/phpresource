-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2021 at 05:17 AM
-- Server version: 5.7.17-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eticaret`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `about_content` text COLLATE utf8_turkish_ci,
  `about_video` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_title`, `about_content`, `about_video`) VALUES
(0, 'Nasir Startup E-Commerce Script', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante elit, luctus vel tempor a, rhoncus posuere purus. Vestibulum at tellus ante. Mauris dignissim enim quis odio ullamcorper, eu tempus quam pretium. In in ligula dolor. Aenean nec nisl eget felis varius vulputate eu vel sapien. Proin vulputate posuere lorem, vel efficitur metus tempor sit amet. Curabitur mollis eleifend convallis. Curabitur ornare augue vel quam mattis sollicitudin. Pellentesque euismod porta orci, et dignissim erat vehicula tincidunt. Pellentesque lacinia enim at luctus imperdiet. Donec aliquet vestibulum neque id rhoncus. Sed ante libero, ullamcorper ut tincidunt quis, varius sed arcu.</p>\r\n\r\n<p>Maecenas a elementum lacus, interdum feugiat neque. Aenean auctor ut metus tincidunt elementum. Sed nec iaculis elit. Donec ac dui ut nulla tincidunt porta a quis purus. In felis eros, consectetur pretium sapien eget, finibus aliquet mauris. Cras libero leo, egestas eget vulputate nec, finibus eu ipsum. Praesent eget elementum magna. Aenean nisl risus, elementum quis blandit et, sagittis a neque. Quisque egestas, leo eu volutpat pellentesque, leo quam molestie nulla, a finibus mauris velit eu erat. Aliquam sollicitudin cursus mauris, nec tincidunt ex pretium sit amet. Quisque imperdiet justo et iaculis vulputate. Quisque dignissim lorem eget tortor luctus iaculis. Nulla leo elit, fringilla efficitur laoreet a, vehicula at augue. Vestibulum ut molestie nulla, blandit egestas orci. Etiam fringilla elit in justo viverra posuere.</p>\r\n\r\n<p>Nunc elementum risus a erat suscipit, vitae congue leo aliquet. Pellentesque non tempus nulla. Suspendisse volutpat magna tincidunt, elementum dolor at, viverra lorem. Cras finibus volutpat lacus at cursus. Sed tellus mauris, consequat ut mauris quis, laoreet gravida est. Maecenas vehicula velit eget tristique ullamcorper. Quisque a cursus dolor, non fermentum augue.</p>\r\n\r\n<p>Pellentesque ullamcorper lacus nunc, posuere ornare ipsum rhoncus at. Aenean vitae rutrum magna. Vivamus ut magna ut neque consectetur gravida vel vel urna. Quisque nec dui nisl. Nam consectetur faucibus vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui augue, congue sit amet mi sit amet, congue rutrum mi. In eget mollis eros. Aenean elementum, felis id fermentum rhoncus, dui odio convallis magna, molestie elementum nunc enim a nisi.</p>\r\n\r\n<p>In ut sem varius, blandit ante vitae, mollis nisl. Suspendisse pretium at mauris vel suscipit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc malesuada tortor quis vulputate vehicula. Praesent eleifend nisi eu pretium porta. Aliquam ultricies sapien nec odio laoreet, ut tincidunt massa elementum. Phasellus laoreet scelerisque massa, lacinia ultrices ipsum. Aliquam eros libero, ornare dictum diam at, pharetra gravida elit.</p>\r\n', 'https://www.youtube.com/watch?v=K4TOrB7at0Y');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `ads_id` int(11) NOT NULL,
  `ads_name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ads_img` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ads_link` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ads_status` enum('0','1') COLLATE utf8_turkish_ci DEFAULT '1',
  `ads_click` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ads_id`, `ads_name`, `ads_img`, `ads_link`, `ads_status`, `ads_click`) VALUES
(0, 'Example ad', 'imgs/ads/2449121172313943022327871277152605322195ads-ex.png', 'ads url', '1', 15);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `bank_iban` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `bank_account` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `bank_status` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_name`, `bank_iban`, `bank_account`, `bank_status`) VALUES
(1, 'Beynəlxalq Bank', '12345678910111213', 'none', '1'),
(2, 'Kapital Bank', '12345678910111213', 'none', '1'),
(3, 'Somewhere bank', '12345678910111213', 'none', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) DEFAULT NULL,
  `cart_total` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `product_qty`, `cart_total`) VALUES
(1, 2, 9, 1, '55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `category_seourl` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `category_status` enum('0','1') COLLATE utf8_turkish_ci DEFAULT NULL,
  `category_row` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `category_top` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_seourl`, `category_status`, `category_row`, `category_top`) VALUES
(1, 'Elektronika', 'elektronika', '1', '1', '0'),
(2, 'Smartfonlar', 'smartfonlar', '1', '2', '1'),
(4, 'Notebooklar', 'notebooklar', '1', '3', '1'),
(5, 'Fotoaparatlar', 'fotoaparatlar', '1', '4', '1'),
(6, 'Geyim&Aksesuar', 'geyim-aksesuar', '1', '5', '0'),
(7, 'Köynəklər', 'koynekler', '1', '6', '6'),
(8, 'Şalvarlar', 'salvarlar', '1', '7', '6'),
(9, 'Ayaqqabılar', 'ayaqqabilar', '1', '8', '6'),
(10, 'Qulaqcıqlar', 'qulaqciqlar', '1', '9', '1'),
(11, 'Kompüter hissələri', 'komputer-hisseleri', '1', '11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `comment_confirmation` enum('0','1') COLLATE utf8_turkish_ci DEFAULT NULL,
  `comment_time` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `comment`, `product_id`, `comment_confirmation`, `comment_time`) VALUES
(1, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante elit, luctus vel tempor a, rhoncus posuere purus. Vestibulum at tellus ante. Mauris dignissim enim quis odio ullamcorper, eu tempus quam', 3, '1', '2021-08-09 17:53:39'),
(2, 2, '<p>yes it is</p>\r\n', 9, '1', '2021-08-12 00:35:11'),
(3, 2, 'This is very cheap', 8, '1', '2021-08-11 23:51:15');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `log_no` int(11) DEFAULT NULL,
  `process_name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `process_summary` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `process_author` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `process_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `log_no`, `process_name`, `process_summary`, `process_author`, `process_time`) VALUES
(1, 2, 'Loqo yenilənməsi', 'imgs/2383530822231382723330897277562669928436logo.png', 'admin@localhost', '0000-00-00 00:00:00'),
(2, 2, 'Parametr yenilənməsi', 'Eticaret', 'admin@localhost', '0000-00-00 00:00:00'),
(3, 1, 'Yeni menyu əlavəsi', 'Hakkımızda', 'admin@localhost', '0000-00-00 00:00:00'),
(4, 2, 'Menyu redaktəsi', 'Haqqımızda', 'admin@localhost', '0000-00-00 00:00:00'),
(5, 2, 'Menyu redaktəsi', 'Haqqımızda', 'admin@localhost', '0000-00-00 00:00:00'),
(6, 2, 'Menyu redaktəsi', 'Haqqımızda', 'admin@localhost', '0000-00-00 00:00:00'),
(7, 2, 'Haqqımızda səhifəsi yeniləməsi', 'Nasir Startup Eloctronic Commmerce Scriprt', 'admin@localhost', '0000-00-00 00:00:00'),
(8, 2, 'Haqqımızda səhifəsi yeniləməsi', 'Nasir Startup E-Commerce Script', 'admin@localhost', '0000-00-00 00:00:00'),
(9, 2, 'Haqqımızda səhifəsi yeniləməsi', 'Nasir Startup E-Commerce Script', 'admin@localhost', '0000-00-00 00:00:00'),
(10, 2, 'Loqo yenilənməsi', 'imgs/298382814521342298322383530822231382723330897277562669928436logo.png', 'admin@localhost', '0000-00-00 00:00:00'),
(11, 2, 'Parametr yenilənməsi', 'N|SECS Eticaret', 'admin@localhost', '0000-00-00 00:00:00'),
(12, 1, 'Yeni menyu əlavəsi', 'Kateqoriyalar', 'admin@localhost', '0000-00-00 00:00:00'),
(13, 2, 'Menyu redaktəsi', 'Haqqımızda', 'admin@localhost', '0000-00-00 00:00:00'),
(14, 1, 'Yeni menyu əlavəsi', 'Əlaqə', 'admin@localhost', '2021-08-09 14:51:17'),
(15, 1, 'Yeni kateqoriya əlavəsi', 'Elektronika', 'admin@localhost', '2021-08-09 14:54:29'),
(16, 1, 'Yeni kateqoriya əlavəsi', 'Smartfonlar', 'admin@localhost', '2021-08-09 14:54:46'),
(17, 1, 'Yeni kateqoriya əlavəsi', 'Smartfonlar', 'admin@localhost', '2021-08-09 14:54:46'),
(18, 3, 'Silinmə prosesi', 'Kateqoriya silindi', 'admin@localhost', '2021-08-09 14:54:49'),
(19, 1, 'Yeni kateqoriya əlavəsi', 'Notebooklar', 'admin@localhost', '2021-08-09 14:55:09'),
(20, 1, 'Yeni kateqoriya əlavəsi', 'Fotoaparatlar', 'admin@localhost', '2021-08-09 14:55:48'),
(21, 1, 'Yeni kateqoriya əlavəsi', 'Geyim&Aksesuar', 'admin@localhost', '2021-08-09 14:56:22'),
(22, 1, 'Yeni kateqoriya əlavəsi', 'Köynəklər', 'admin@localhost', '2021-08-09 14:56:43'),
(23, 1, 'Yeni kateqoriya əlavəsi', 'Şalvarlar', 'admin@localhost', '2021-08-09 14:57:03'),
(24, 2, 'Kateqoriya redaktəsi', 'Köynəklər', 'admin@localhost', '2021-08-09 14:57:08'),
(25, 1, 'Yeni kateqoriya əlavəsi', 'Ayaqqabılar', 'admin@localhost', '2021-08-09 14:57:36'),
(26, 1, 'Yeni kateqoriya əlavəsi', 'Qulaqcıqlar', 'admin@localhost', '2021-08-09 14:58:35'),
(27, 2, 'Kateqoriya redaktəsi', 'Qulaqcıqlar', 'admin@localhost', '2021-08-09 14:58:57'),
(28, 1, 'Yeni kateqoriya əlavəsi', 'Kompüter hissələri', 'admin@localhost', '2021-08-09 14:59:31'),
(29, 2, 'Kateqoriya redaktəsi', 'Kompüter hissələri', 'admin@localhost', '2021-08-09 14:59:48'),
(30, 1, 'Yeni məhsul əlavəsi', 'Iphone X 256gb', 'admin@localhost', '2021-08-09 15:03:08'),
(31, 2, 'Məhsul redaktəsi', 'Iphone X 256gb', 'admin@localhost', '2021-08-09 15:05:18'),
(32, 2, 'Məhsul redaktəsi', 'Iphone X 256gb', 'admin@localhost', '2021-08-09 15:06:38'),
(33, 1, 'Yeni məhsul əlavəsi', 'Macbook Pro', 'admin@localhost', '2021-08-09 15:10:59'),
(34, 1, 'Yeni məhsul əlavəsi', 'Samsung Galaxy S9', 'admin@localhost', '2021-08-09 15:12:41'),
(35, 2, 'Məhsul redaktəsi', 'Macbook Pro', 'admin@localhost', '2021-08-09 15:13:45'),
(36, 2, 'Məhsul redaktəsi', 'Samsung Galaxy S9', 'admin@localhost', '2021-08-09 15:13:56'),
(37, 1, 'Yeni məhsul əlavəsi', 'Fotoaparat', 'admin@localhost', '2021-08-09 15:15:47'),
(38, 2, 'Məhsul redaktəsi', 'Fotoaparat', 'admin@localhost', '2021-08-09 15:15:57'),
(39, 1, 'Yeni məhsul əlavəsi', 'Airpods', 'admin@localhost', '2021-08-09 15:18:07'),
(40, 1, 'Yeni məhsul əlavəsi', 'Şalvar', 'admin@localhost', '2021-08-09 15:21:47'),
(41, 1, 'Yeni məhsul əlavəsi', 'Köynək uzunqol', 'admin@localhost', '2021-08-09 15:24:58'),
(42, 2, 'Məhsul redaktəsi', 'Köynək uzunqol', 'admin@localhost', '2021-08-09 15:25:44'),
(43, 2, 'Məhsul redaktəsi', 'Şalvar', 'admin@localhost', '2021-08-09 15:25:53'),
(44, 1, 'Yeni məhsul əlavəsi', 'Qısaqol köynək', 'admin@localhost', '2021-08-09 15:27:29'),
(45, 2, 'Məhsul redaktəsi', 'Qısaqol köynək', 'admin@localhost', '2021-08-09 15:27:40'),
(46, 1, 'Yeni məhsul əlavəsi', 'Nike Airmax', 'admin@localhost', '2021-08-09 15:29:49'),
(47, 1, 'Yeni məhsul əlavəsi', 'Klassik ayaqqabı', 'admin@localhost', '2021-08-09 15:31:19'),
(48, 1, 'Yeni məhsul əlavəsi', 'Beats qulaqcıq', 'admin@localhost', '2021-08-09 15:33:51'),
(49, 2, 'Məhsul redaktəsi', 'Klassik ayaqqabı', 'admin@localhost', '2021-08-09 15:34:05'),
(50, 2, 'Məhsul redaktəsi', 'Nike Airmax', 'admin@localhost', '2021-08-09 15:34:14'),
(51, 2, 'Məhsul redaktəsi', 'Beats qulaqcıq', 'admin@localhost', '2021-08-09 15:34:27'),
(52, 1, 'Yeni məhsul əlavəsi', 'Kingstone ram', 'admin@localhost', '2021-08-09 15:36:55'),
(53, 2, 'Məhsul redaktəsi', 'Kingstone ram', 'admin@localhost', '2021-08-09 15:37:57'),
(54, 1, 'Yeni slayd əlavəsi', 'Iphone X 256gb endirimli', 'admin@localhost', '2021-08-09 15:39:01'),
(55, 1, 'Yeni slayd əlavəsi', 'Nike Airmax yalnız bizdə', 'admin@localhost', '2021-08-09 15:40:00'),
(56, 1, 'Yeni slayd əlavəsi', 'Macbook Pro klassik dizayn və güc', 'admin@localhost', '2021-08-09 15:41:27'),
(57, 1, 'Yeni slayd əlavəsi', 'Beats müsqini hiss edin', 'admin@localhost', '2021-08-09 15:42:49'),
(58, 1, 'Yeni slayd əlavəsi', 'Samsung Galaxy S9 perfermans və əla görünüş endirimli', 'admin@localhost', '2021-08-09 15:44:04'),
(59, 1, 'Yeni slayd əlavəsi', 'Apple Airpods erqonomik dizayn və əla səs təcrübəsi', 'admin@localhost', '2021-08-09 15:45:11'),
(60, 2, 'Slayd redaktəsi', 'Beats musiqini hiss edin', 'admin@localhost', '2021-08-09 15:47:51'),
(61, 2, 'Slayd redaktəsi', 'Beats musiqini hiss edin', 'admin@localhost', '2021-08-09 15:48:18'),
(62, 2, 'Reklam redaktəsi', 'Example ad', 'admin@localhost', '2021-08-09 16:59:06'),
(63, 2, 'Məhsul redaktəsi', 'Airpods', 'admin@localhost', '2021-08-09 17:02:19'),
(64, 2, 'Reklam redaktəsi', 'Example ad', 'admin@localhost', '2021-08-09 17:04:50'),
(65, 2, 'Reklam redaktəsi', 'Example ad', 'admin@localhost', '2021-08-09 17:05:50'),
(66, 2, 'Reklam redaktəsi', 'Example ad', 'admin@localhost', '2021-08-09 17:05:56'),
(67, 2, 'Reklam redaktəsi', 'Example ad', 'admin@localhost', '2021-08-09 17:06:42'),
(68, 2, 'Məhsul redaktəsi', 'Qısaqol köynək', 'admin@localhost', '2021-08-09 17:35:06'),
(69, 1, 'Yeni bank hesabı əlavəsi', 'Beynəlxalq Bank', 'admin@localhost', '2021-08-09 22:02:43'),
(70, 1, 'Yeni bank hesabı əlavəsi', 'Kapital Bank', 'admin@localhost', '2021-08-09 22:03:04'),
(71, 2, 'Slayd redaktəsi', 'Iphone X 256gb endirimli', 'admin@localhost', '2021-08-11 23:42:00'),
(72, 2, 'Slayd redaktəsi', 'Nike Airmax yalnız bizdə', 'admin@localhost', '2021-08-11 23:42:21'),
(73, 2, 'Slayd redaktəsi', 'Macbook Pro klassik dizayn və güc', 'admin@localhost', '2021-08-11 23:42:32'),
(74, 2, 'Slayd redaktəsi', 'Beats musiqini hiss edin', 'admin@localhost', '2021-08-11 23:42:45'),
(75, 2, 'Slayd redaktəsi', 'Samsung Galaxy S9 perfermans və əla görünüş endirimli', 'admin@localhost', '2021-08-11 23:42:58'),
(76, 2, 'Slayd redaktəsi', 'Apple Airpods erqonomik dizayn və əla səs təcrübəsi', 'admin@localhost', '2021-08-11 23:43:10'),
(77, 2, 'Slayd redaktəsi', 'Apple Airpods erqonomik dizayn və əla səs təcrübəsi', 'admin@localhost', '2021-08-11 23:43:12'),
(78, 2, 'Slayd redaktəsi', 'Apple Airpods erqonomik dizayn və əla səs təcrübəsi', 'admin@localhost', '2021-08-11 23:43:20'),
(79, 1, 'Yeni slayd əlavəsi', 'Gümüş üzük əla hədiyyə', 'admin@localhost', '2021-08-11 23:48:10'),
(80, 3, 'Silinmə prosesi', 'Slayd silindi', 'admin@localhost', '2021-08-11 23:48:24'),
(81, 1, 'Yeni slayd əlavəsi', 'Yayda ucuz al qışda geyin', 'admin@localhost', '2021-08-12 00:29:44'),
(82, 1, 'Yeni məhsul əlavəsi', 'Qalın kurtka', 'admin@localhost', '2021-08-12 00:32:32'),
(83, 2, 'Məhsul redaktəsi', 'Qalın kurtka', 'admin@localhost', '2021-08-12 00:32:59'),
(84, 1, 'Yeni bank hesabı əlavəsi', 'Somewhere bank', 'admin@localhost', '2021-08-12 00:36:07'),
(85, 2, 'Reklam redaktəsi', 'Example ad', 'admin@localhost', '2021-08-12 00:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `menu_detail` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `menu_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `menu_seourl` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `menu_status` enum('0','1') COLLATE utf8_turkish_ci DEFAULT '1',
  `menu_row` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_name`, `menu_detail`, `menu_url`, `menu_seourl`, `menu_status`, `menu_row`) VALUES
(1, 'Haqqımızda', '', 'about', 'haqqimizda', '1', 1),
(2, 'Kateqoriyalar', '', 'categories', 'kateqoriyalar', '1', 2),
(3, 'Əlaqə', '', 'contact', 'elaqe', '1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` decimal(11,2) NOT NULL,
  `product_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `product_id`, `product_price`, `product_qty`) VALUES
(1, 1, 9, '55.00', 2),
(2, 2, 9, '55.00', 1),
(3, 2, 2, '2000.00', 1),
(4, 2, 5, '500.00', 1),
(5, 3, 2, '2000.00', 1),
(6, 3, 12, '80.00', 1),
(7, 3, 4, '650.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_type` enum('Bank Transfer','Kredit Kartı') COLLATE utf8_turkish_ci DEFAULT NULL,
  `order_bank` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `order_total` int(11) DEFAULT NULL,
  `product_qty` int(11) DEFAULT NULL,
  `order_status` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  `order_time` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_type`, `order_bank`, `order_total`, `product_qty`, `order_status`, `order_time`) VALUES
(1, 2, 'Bank Transfer', 'Somewhere Bank', 110, NULL, '1', '2021-08-12 00:34:29'),
(2, 2, 'Bank Transfer', 'Beynəlxalq Bank', 2555, NULL, '1', '2021-08-11 23:50:36'),
(3, 2, 'Bank Transfer', 'Kapital Bank', 2730, NULL, '1', '2021-08-11 23:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `parametr`
--

CREATE TABLE `parametr` (
  `parametr_id` int(11) NOT NULL,
  `parametr_logo` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_keywords` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_author` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_maps` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_analystic` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_zopim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_tel` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_fax` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_gsm` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_mail` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_address` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_smtphost` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_smtpuser` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_smtppass` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parametr_smtpport` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `parametr`
--

INSERT INTO `parametr` (`parametr_id`, `parametr_logo`, `parametr_title`, `parametr_keywords`, `parametr_description`, `parametr_author`, `parametr_maps`, `parametr_analystic`, `parametr_zopim`, `parametr_tel`, `parametr_fax`, `parametr_gsm`, `parametr_mail`, `parametr_address`, `parametr_smtphost`, `parametr_smtpuser`, `parametr_smtppass`, `parametr_smtpport`) VALUES
(0, 'imgs/298382814521342298322383530822231382723330897277562669928436logo.png', 'N|SECS Eticaret', 'eticaret,e-commerce,script', 'Nasir Startup E-Commerce Script', 'Nasir Mustafayev', NULL, NULL, NULL, '+(0) 000 00 00', '', '+(0) 000 00 00', 'admin@localhost', 'Somewhere', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `productphotos`
--

CREATE TABLE `productphotos` (
  `productphoto_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_photo` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `productphotos`
--

INSERT INTO `productphotos` (`productphoto_id`, `product_id`, `product_photo`) VALUES
(1, 1, 'imgs/product/2319124626216362733728327317662601322459iphone-x-noir-Smart-Téléphone-ComoresBazar.jpg'),
(2, 2, 'imgs/product/2762222005231902868222598295022431322486sample-1.png'),
(3, 2, 'imgs/product/2798222763228162132628257246512258627186sample-1.png'),
(4, 3, 'imgs/product/2643129738248292864922735309682588220012sample-1.png'),
(6, 4, 'imgs/product/2200026777254902914825997262502915129766sample-1.jpg'),
(7, 4, 'imgs/product/2169924074291162877725936319693067127495sample-4.jpg'),
(8, 5, 'imgs/product/2028429085306263033523213297702123926259airpods_product_main.png'),
(9, 5, 'imgs/product/2106628186313662581523693201873048326040airpod-1.png'),
(10, 5, 'imgs/product/3064822993305962523224460304732675627692400.png'),
(11, 4, 'imgs/product/2303227381274522392022471236072939520692dummy-1.png'),
(12, 6, 'imgs/product/2321328573317402416726829207072339020019sample-1.png'),
(14, 7, 'imgs/product/2151724857255302327330630234232123231123sample-1.png'),
(16, 8, 'imgs/product/3146822516201262697622259228852064320794sample-3.jpg'),
(17, 8, 'imgs/product/2189429480203332422824836252473029930794demo-img.jpg'),
(18, 9, 'imgs/product/3141125958254662524728645237142473725764sample-1.png'),
(19, 10, 'imgs/product/3177727762200572481820849243472491023507sample-2.jpg'),
(20, 11, 'imgs/product/3113421918252972020731427300782683821933Beats-Pro-Superman-Noir-Or-Over-Oreille-Casque.jpg'),
(21, 4, 'imgs/product/2930624221219582096030501255822841626286sample-5.jpg'),
(22, 12, 'imgs/product/2145826662209752141030893294992007231668sample-1.png'),
(23, 13, 'imgs/product/27803230733111029259men-s-thick-coat.jpg'),
(24, 13, 'imgs/product/20110303232687721144Shearling_Leather_Jacket__24069_zoom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `product_detail` text COLLATE utf8_turkish_ci NOT NULL,
  `product_seourl` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `product_price` decimal(11,2) NOT NULL,
  `product_stock` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `product_manufacturer` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `product_featured` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  `product_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `product_status` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `product_time` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `category_id` int(11) NOT NULL,
  `category_top_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_detail`, `product_seourl`, `product_price`, `product_stock`, `product_manufacturer`, `product_featured`, `product_keyword`, `product_status`, `product_time`, `category_id`, `category_top_id`) VALUES
(1, 'Iphone X 256gb', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante elit, luctus vel tempor a, rhoncus posuere purus. Vestibulum at tellus ante. Mauris dignissim enim quis odio ullamcorper, eu tempus quam pretium. In in ligula dolor. Aenean nec nisl eget felis varius vulputate eu vel sapien. Proin vulputate posuere lorem, vel efficitur metus tempor sit amet. Curabitur mollis eleifend convallis. Curabitur ornare augue vel quam mattis sollicitudin. Pellentesque euismod porta orci, et dignissim erat vehicula tincidunt. Pellentesque lacinia enim at luctus imperdiet. Donec aliquet vestibulum neque id rhoncus. Sed ante libero, ullamcorper ut tincidunt quis, varius sed arcu.</p>\r\n', 'iphone-x-256gb', '1200.00', '50', 'Apple', '1', 'iphone,iphonex', '1', '0000-00-00 00:00:00', 1, 2),
(2, 'Macbook Pro', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante elit, luctus vel tempor a, rhoncus posuere purus. Vestibulum at tellus ante. Mauris dignissim enim quis odio ullamcorper, eu tempus quam pretium. In in ligula dolor. Aenean nec nisl eget felis varius vulputate eu vel sapien. Proin vulputate posuere lorem, vel efficitur metus tempor sit amet. Curabitur mollis eleifend convallis. Curabitur ornare augue vel quam mattis sollicitudin. Pellentesque euismod porta orci, et dignissim erat vehicula tincidunt. Pellentesque lacinia enim at luctus imperdiet. Donec aliquet vestibulum neque id rhoncus. Sed ante libero, ullamcorper ut tincidunt quis, varius sed arcu.</p>\r\n', 'macbook-pro', '2000.00', '36', 'Apple', '1', 'macbook,apple,macbookpro', '1', '2021-08-11 23:50:36', 1, 4),
(3, 'Samsung Galaxy S9', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante elit, luctus vel tempor a, rhoncus posuere purus. Vestibulum at tellus ante. Mauris dignissim enim quis odio ullamcorper, eu tempus quam pretium. In in ligula dolor. Aenean nec nisl eget felis varius vulputate eu vel sapien. Proin vulputate posuere lorem, vel efficitur metus tempor sit amet. Curabitur mollis eleifend convallis. Curabitur ornare augue vel quam mattis sollicitudin. Pellentesque euismod porta orci, et dignissim erat vehicula tincidunt. Pellentesque lacinia enim at luctus imperdiet. Donec aliquet vestibulum neque id rhoncus. Sed ante libero, ullamcorper ut tincidunt quis, varius sed arcu.</p>\r\n', 'samsung-galaxy-s9', '1150.00', '50', 'Samsung', '1', 'samung,samsungs9,samsunggalaxy', '1', '0000-00-00 00:00:00', 1, 2),
(4, 'Fotoaparat', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante elit, luctus vel tempor a, rhoncus posuere purus. Vestibulum at tellus ante. Mauris dignissim enim quis odio ullamcorper, eu tempus quam pretium. In in ligula dolor. Aenean nec nisl eget felis varius vulputate eu vel sapien. Proin vulputate posuere lorem, vel efficitur metus tempor sit amet. Curabitur mollis eleifend convallis. Curabitur ornare augue vel quam mattis sollicitudin. Pellentesque euismod porta orci, et dignissim erat vehicula tincidunt. Pellentesque lacinia enim at luctus imperdiet. Donec aliquet vestibulum neque id rhoncus. Sed ante libero, ullamcorper ut tincidunt quis, varius sed arcu.</p>\r\n', 'fotoaparat', '650.00', '73', 'Nikon', '0', 'nikon,fotoaparat', '1', '2021-08-11 23:50:34', 1, 5),
(5, 'Airpods', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante elit, luctus vel tempor a, rhoncus posuere purus. Vestibulum at tellus ante. Mauris dignissim enim quis odio ullamcorper, eu tempus quam pretium. In in ligula dolor. Aenean nec nisl eget felis varius vulputate eu vel sapien. Proin vulputate posuere lorem, vel efficitur metus tempor sit amet. Curabitur mollis eleifend convallis. Curabitur ornare augue vel quam mattis sollicitudin. Pellentesque euismod porta orci, et dignissim erat vehicula tincidunt. Pellentesque lacinia enim at luctus imperdiet. Donec aliquet vestibulum neque id rhoncus. Sed ante libero, ullamcorper ut tincidunt quis, varius sed arcu.</p>\r\n', 'airpods', '500.00', '43', 'Apple', '1', 'apple,airpods', '1', '2021-08-11 23:50:36', 1, 10),
(6, 'Şalvar', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante elit, luctus vel tempor a, rhoncus posuere purus. Vestibulum at tellus ante. Mauris dignissim enim quis odio ullamcorper, eu tempus quam pretium. In in ligula dolor. Aenean nec nisl eget felis varius vulputate eu vel sapien. Proin vulputate posuere lorem, vel efficitur metus tempor sit amet. Curabitur mollis eleifend convallis. Curabitur ornare augue vel quam mattis sollicitudin. Pellentesque euismod porta orci, et dignissim erat vehicula tincidunt. Pellentesque lacinia enim at luctus imperdiet. Donec aliquet vestibulum neque id rhoncus. Sed ante libero, ullamcorper ut tincidunt quis, varius sed arcu.</p>\r\n', 'salvar', '25.00', '100', 'Louis Vuitton', '1', 'şalvar,louisvuitton', '1', '0000-00-00 00:00:00', 6, 8),
(7, 'Köynək uzunqol', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante elit, luctus vel tempor a, rhoncus posuere purus. Vestibulum at tellus ante. Mauris dignissim enim quis odio ullamcorper, eu tempus quam pretium. In in ligula dolor. Aenean nec nisl eget felis varius vulputate eu vel sapien. Proin vulputate posuere lorem, vel efficitur metus tempor sit amet. Curabitur mollis eleifend convallis. Curabitur ornare augue vel quam mattis sollicitudin. Pellentesque euismod porta orci, et dignissim erat vehicula tincidunt. Pellentesque lacinia enim at luctus imperdiet. Donec aliquet vestibulum neque id rhoncus. Sed ante libero, ullamcorper ut tincidunt quis, varius sed arcu.</p>\r\n', 'koynek-uzunqol', '18.00', '65', 'Gucci', '1', 'gucci,koynek', '1', '0000-00-00 00:00:00', 6, 7),
(8, 'Qısaqol köynək', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante elit, luctus vel tempor a, rhoncus posuere purus. Vestibulum at tellus ante. Mauris dignissim enim quis odio ullamcorper, eu tempus quam pretium. In in ligula dolor. Aenean nec nisl eget felis varius vulputate eu vel sapien. Proin vulputate posuere lorem, vel efficitur metus tempor sit amet. Curabitur mollis eleifend convallis. Curabitur ornare augue vel quam mattis sollicitudin. Pellentesque euismod porta orci, et dignissim erat vehicula tincidunt. Pellentesque lacinia enim at luctus imperdiet. Donec aliquet vestibulum neque id rhoncus. Sed ante libero, ullamcorper ut tincidunt quis, varius sed arcu.</p>\r\n', 'qisaqol-koynek', '15.00', '55', 'Versace', '', 'versace,koynek', '1', '2021-08-09 17:35:06', 6, 7),
(9, 'Nike Airmax', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante elit, luctus vel tempor a, rhoncus posuere purus. Vestibulum at tellus ante. Mauris dignissim enim quis odio ullamcorper, eu tempus quam pretium. In in ligula dolor. Aenean nec nisl eget felis varius vulputate eu vel sapien. Proin vulputate posuere lorem, vel efficitur metus tempor sit amet. Curabitur mollis eleifend convallis. Curabitur ornare augue vel quam mattis sollicitudin. Pellentesque euismod porta orci, et dignissim erat vehicula tincidunt. Pellentesque lacinia enim at luctus imperdiet. Donec aliquet vestibulum neque id rhoncus. Sed ante libero, ullamcorper ut tincidunt quis, varius sed arcu.</p>\r\n', 'nike-airmax', '55.00', '54', 'Nike', '1', 'nike,nikeairmax', '1', '2021-08-12 00:34:30', 6, 9),
(10, 'Klassik ayaqqabı', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante elit, luctus vel tempor a, rhoncus posuere purus. Vestibulum at tellus ante. Mauris dignissim enim quis odio ullamcorper, eu tempus quam pretium. In in ligula dolor. Aenean nec nisl eget felis varius vulputate eu vel sapien. Proin vulputate posuere lorem, vel efficitur metus tempor sit amet. Curabitur mollis eleifend convallis. Curabitur ornare augue vel quam mattis sollicitudin. Pellentesque euismod porta orci, et dignissim erat vehicula tincidunt. Pellentesque lacinia enim at luctus imperdiet. Donec aliquet vestibulum neque id rhoncus. Sed ante libero, ullamcorper ut tincidunt quis, varius sed arcu.</p>\r\n', 'klassik-ayaqqabi', '40.00', '50', 'ClassicShoes', '', 'ayaqqabı,klassik', '1', '0000-00-00 00:00:00', 6, 9),
(11, 'Beats qulaqcıq', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante elit, luctus vel tempor a, rhoncus posuere purus. Vestibulum at tellus ante. Mauris dignissim enim quis odio ullamcorper, eu tempus quam pretium. In in ligula dolor. Aenean nec nisl eget felis varius vulputate eu vel sapien. Proin vulputate posuere lorem, vel efficitur metus tempor sit amet. Curabitur mollis eleifend convallis. Curabitur ornare augue vel quam mattis sollicitudin. Pellentesque euismod porta orci, et dignissim erat vehicula tincidunt. Pellentesque lacinia enim at luctus imperdiet. Donec aliquet vestibulum neque id rhoncus. Sed ante libero, ullamcorper ut tincidunt quis, varius sed arcu.</p>\r\n', 'beats-qulaqciq', '125.00', '45', 'Beats', '1', 'qulaqcıq,beats', '1', '0000-00-00 00:00:00', 1, 10),
(12, 'Kingstone ram', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante elit, luctus vel tempor a, rhoncus posuere purus. Vestibulum at tellus ante. Mauris dignissim enim quis odio ullamcorper, eu tempus quam pretium. In in ligula dolor. Aenean nec nisl eget felis varius vulputate eu vel sapien. Proin vulputate posuere lorem, vel efficitur metus tempor sit amet. Curabitur mollis eleifend convallis. Curabitur ornare augue vel quam mattis sollicitudin. Pellentesque euismod porta orci, et dignissim erat vehicula tincidunt. Pellentesque lacinia enim at luctus imperdiet. Donec aliquet vestibulum neque id rhoncus. Sed ante libero, ullamcorper ut tincidunt quis, varius sed arcu.</p>\r\n', 'kingstone-ram', '80.00', '38', 'Kingstone', '', 'ram,kingstone', '1', '2021-08-11 23:50:34', 1, 11),
(13, 'Qalın kurtka', '<p>Write about your product</p>\r\n', 'qalin-kurtka', '45.00', '100', 'Producer', '1', 'kurtka,godekce,qis geyimi', '1', '2021-08-12 00:33:54', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slider_img` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slider_link` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slider_status` enum('0','1') COLLATE utf8_turkish_ci DEFAULT NULL,
  `slider_row` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `slider_name`, `slider_img`, `slider_link`, `slider_status`, `slider_row`) VALUES
(1, 'Iphone X 256gb endirimli', 'imgs/slider/21499311102794623479slide-5.jpg', 'http://localhost/eticaret/product-iphone-x-256gb-1', '1', 1),
(2, 'Nike Airmax yalnız bizdə', 'imgs/slider/29501256052989326257slide-3.jpg', 'http://localhost/eticaret/product-nike-airmax-9', '1', 2),
(3, 'Macbook Pro klassik dizayn və güc', 'imgs/slider/21812255633198521272slider-7.png', 'http://localhost/eticaret/product-macbook-pro-2', '1', 3),
(4, 'Beats musiqini hiss edin', 'imgs/slider/24312221992333827755slider-8.png', 'http://localhost/eticaret/product-beats-qulaqciq-11', '1', 4),
(5, 'Samsung Galaxy S9 perfermans və əla görünüş endirimli', 'imgs/slider/26196313353083523996slide-6.png', 'http://localhost/eticaret/product-samsung-galaxy-s9-3', '1', 5),
(6, 'Apple Airpods erqonomik dizayn və əla səs təcrübəsi', 'imgs/slider/30425208492944424607slider-9.png', 'http://localhost/eticaret/product-airpods-5', '1', 6),
(8, 'Yayda ucuz al qışda geyin', 'imgs/slider/29108220202851027092slide-2.jpg', '', '1', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `user_lastname` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `user_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `user_authorization` enum('0','1','2','3','4','5') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  `user_status` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `user_address` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `user_gsm` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `user_picture` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `user_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_lastname`, `user_mail`, `user_password`, `user_authorization`, `user_status`, `user_address`, `user_gsm`, `user_picture`, `user_time`) VALUES
(1, 'Admin', '', 'admin@localhost', 'e10adc3949ba59abbe56e057f20f883e', '5', '1', 'Somewhere', '', 'images/profile/29214214352353025396img.jpg', '0000-00-00 00:00:00'),
(2, 'User', ' ', 'user@localhost', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', NULL, NULL, NULL, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`) USING BTREE;

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ads_id`) USING BTREE;

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`) USING BTREE;

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`) USING BTREE;

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`) USING BTREE;

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`) USING BTREE;

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`) USING BTREE;

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`) USING BTREE;

--
-- Indexes for table `parametr`
--
ALTER TABLE `parametr`
  ADD PRIMARY KEY (`parametr_id`) USING BTREE;

--
-- Indexes for table `productphotos`
--
ALTER TABLE `productphotos`
  ADD PRIMARY KEY (`productphoto_id`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`) USING BTREE;

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `ads_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `parametr`
--
ALTER TABLE `parametr`
  MODIFY `parametr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `productphotos`
--
ALTER TABLE `productphotos`
  MODIFY `productphoto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
