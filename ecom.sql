-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2025 at 11:28 PM
-- Server version: 10.6.20-MariaDB-cll-lve
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `role`, `email`, `mobile`, `status`) VALUES
(1, 'admin', 'admin', 'Admin', 'Admin@admin', '03134100158', 1),
(8, 'Menahil Ijaz', 'Support@123', 'Product Team', 'customercare@kvonline.shop', '0203e02i3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `heading1` varchar(255) NOT NULL,
  `heading2` varchar(255) NOT NULL,
  `btn_txt` varchar(255) DEFAULT NULL,
  `btn_link` varchar(55) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `order_no` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `cat_image` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `cat_image`, `status`) VALUES
(1, 'Top', NULL, 1),
(2, 'Bottoms', 746683917, 1),
(8, 'accessories', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `color_master`
--

CREATE TABLE `color_master` (
  `id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `color_master`
--

INSERT INTO `color_master` (`id`, `color`, `status`) VALUES
(1, 'peach', 1),
(2, 'White', 1),
(9, 'Gray', 1),
(10, 'Mehroon', 1),
(11, 'Black', 1),
(12, 'Blue', 1),
(13, 'Yellow', 1),
(14, 'Pink', 1),
(15, 'Skin', 1),
(16, 'Mehndi', 1),
(17, 'Light Green', 1),
(18, 'light purple', 1),
(19, 'brown', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_master`
--

CREATE TABLE `coupon_master` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_value` int(11) NOT NULL,
  `coupon_type` varchar(10) NOT NULL,
  `cart_min_value` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `coupon_master`
--

INSERT INTO `coupon_master` (`id`, `coupon_code`, `coupon_value`, `coupon_type`, `cart_min_value`, `status`) VALUES
(1, '100RsOff', 100, 'Rupee', 100, 1),
(2, 'TenPerOff', 10, 'Percentage', 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notifi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `total_price` float NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `order_status` int(11) NOT NULL,
  `length` float NOT NULL,
  `breadth` float NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `txnid` varchar(200) NOT NULL,
  `mihpayid` varchar(200) NOT NULL,
  `ship_order_id` int(11) NOT NULL,
  `ship_shipment_id` int(11) NOT NULL,
  `payu_status` varchar(10) NOT NULL,
  `delivery_charges` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `coupon_value` varchar(50) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_attr_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Processing'),
(3, 'Shipped'),
(4, 'Canceled'),
(5, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `mrp` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `best_seller` int(11) DEFAULT NULL,
  `meta_title` varchar(2000) DEFAULT NULL,
  `meta_desc` varchar(2000) DEFAULT NULL,
  `meta_keyword` varchar(2000) DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `sub_categories_id`, `name`, `image`, `short_desc`, `description`, `mrp`, `price`, `qty`, `best_seller`, `meta_title`, `meta_desc`, `meta_keyword`, `added_by`, `status`) VALUES
(1, 1, 0, 'SS1828', '258985753_new1.jfif', 'Short Frock, Cotton Khadar', 'Short Frock Grey Colour Front And Back Pleetes', 0, 0, 0, 1, NULL, NULL, NULL, 8, 1),
(2, 1, 0, 'SS1829', '925650177_white.black3.jfif', 'Short Frock\r\n Cotton Khadar', 'Short Frock\r\n Fabric:Cotton Khadar\r\n daman and Arms embroidery', 0, 0, 0, 1, NULL, NULL, NULL, 8, 1),
(31, 1, 1, 'SS1826', '138097594_green3.jfif', 'Shirt Embroidery,Cotton Khadar', 'Shirt Embroidery\r\nFabric:Cotton Khadar \r\nFront Embroidery', 0, 0, 0, 1, NULL, NULL, NULL, 8, 1),
(32, 1, 1, 'SS1818', '119205512_skin1.jfif', 'Shirt Embroidery,Cotton Khadar', 'Shirt Embroidery\r\nFabric:Cotton Khadar\r\nfront Embroidery', 0, 0, 0, 1, NULL, NULL, NULL, 8, 1),
(33, 1, 1, 'SS1801', '592592027_skin 4.jfif', 'Shirt Embroidery, Cotton Khadar', 'Shirt Embroidery\r\nFabric: Cotton Khadar\r\nFront Embroidery', 0, 0, 0, 1, NULL, NULL, NULL, 8, 1),
(34, 1, 1, 'SS1793', '165718918_yellow3.jfif', 'Front Yock Embroidery Cotton Khadar', 'Front Yock Embroidery \r\nFabric:Cotton Khadar\r\nColour:Yelow', 0, 0, 0, 1, NULL, NULL, NULL, 8, 1),
(35, 1, 3, 'SS1803', '896296671_pink1.jfif', 'Front Pleete And Embroidery Cotton Khadar', 'Front Pleete And Embroidery\r\nFabric: Cotton Khadar\r\nColour :Pink', 0, 0, 0, 1, NULL, NULL, NULL, 8, 1),
(36, 1, 3, 'SS1799', '583130246_peach1.jfif', 'Shirt Yock Embroidery Cotton Khadar', 'Shirt Yock Embroidery\r\nFabric: Cotton Khadar\r\nColour: Peach', 0, 0, 0, 1, NULL, NULL, NULL, 8, 1),
(37, 1, 1, 'SS1791', '766645636_white1.jfif', 'Shirt Embroidery Cotton Khadar', 'Shirt Embroidery\r\nFabric: Cotton Khadar\r\nColour :White\r\nFront Embroidery', 0, 0, 0, 1, NULL, NULL, NULL, 8, 1),
(38, 1, 0, 'SS1815', '909314660_blue1.jfif', 'Front EmbroideryCotton Khadar', 'Front Embroidery\r\nFabric:Cotton Khadar\r\nShort Shirt Front Embroidery\r\nColour: blue Lining', 0, 0, 0, 1, NULL, NULL, NULL, 8, 1),
(39, 1, 1, 'SS1812', '150807864_lue white2.jfif', 'Front Embroidery Cotton Khadar', 'Front Embroidery \r\nFabric:Cotton', 0, 0, 0, 1, NULL, NULL, NULL, 8, 1),
(40, 1, 3, 'SS1823', '794551409_grey1.jfif', 'Shirt Sleeves ,NeckLine Daman Embroidery', 'Shirt Sleeves ,NeckLine Daman Embroidery\r\nFabric: Cotton Khadar', 0, 0, 0, 1, NULL, NULL, NULL, 8, 1),
(41, 1, 1, 'SS1825', '366007370_black1.jfif', 'Front and Back Pleetes Shirt Cotton Khadar', 'Front and Back Pleetes Shirt\r\nFabric: Cotton Khadar', 0, 0, 0, 1, NULL, NULL, NULL, 8, 1),
(42, 1, 1, 'SS1824', '599088281_R[LE.jfif', 'front Embroidery Shirt\r\nFabric: Cotton Khadar', 'front Embroidery Shirt\r\nFabric: Cotton Khadar\r\nColour:purple', 0, 0, 0, 1, NULL, NULL, NULL, 8, 1),
(43, 1, 1, 'SS16672', '960243171_rown 1.jfif', 'front Embroidery Shirt\r\nFabric: Cotton Khadar', 'front Embroidery Shirt\r\nFabric: Cotton Khadar\r\nColour :Brown', 0, 0, 0, 0, NULL, NULL, NULL, 8, 1),
(44, 8, 0, 'smcdnjmcn', '889103771_88ec440292511131d9c88dbe05a66ff3.jpg', 'jdnjn', 'b cnsd a', 0, 0, 0, 1, NULL, NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `mrp` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `product_id`, `size_id`, `color_id`, `mrp`, `price`, `qty`) VALUES
(1, 0, 4, 2, 0, 1000, 10),
(2, 28, 4, 2, 0, 9, 4),
(3, 25, 4, 9, 0, 9995, 4),
(4, 27, 4, 2, 0, 9, 4),
(5, 26, 4, 11, 0, 9, 4),
(6, 26, 3, 11, 0, 9, 4),
(7, 26, 1, 11, 0, 9, 4),
(8, 28, 3, 2, 0, 9, 4),
(11, 28, 1, 2, 0, 9, 4),
(12, 27, 3, 2, 0, 9, 4),
(13, 27, 1, 2, 0, 9, 4),
(15, 25, 3, 9, 0, 9, 4),
(16, 25, 1, 9, 0, 9, 3),
(17, 24, 4, 9, 0, 9, 3),
(18, 24, 3, 9, 0, 9, 2),
(19, 24, 1, 9, 0, 9, 4),
(20, 23, 4, 12, 0, 9, 3),
(21, 23, 3, 12, 0, 9, 2),
(22, 23, 1, 12, 0, 9, 3),
(23, 22, 4, 2, 0, 9, 2),
(24, 22, 3, 2, 0, 9, 3),
(25, 22, 1, 2, 0, 9, 3),
(26, 21, 4, 1, 0, 9, 3),
(27, 21, 3, 1, 0, 9, 3),
(28, 21, 1, 1, 0, 9, 3),
(29, 20, 4, 9, 0, 9, 3),
(30, 20, 3, 0, 0, 9, 3),
(31, 20, 1, 0, 0, 9, 3),
(32, 19, 4, 14, 0, 9, 3),
(33, 19, 3, 14, 0, 9, 2),
(34, 19, 1, 0, 0, 9, 2),
(35, 18, 4, 13, 0, 9, 2),
(36, 18, 3, 13, 0, 9, 2),
(37, 18, 1, 13, 0, 9, 2),
(38, 17, 4, 15, 0, 9, 2),
(39, 17, 3, 15, 0, 9, 2),
(40, 17, 1, 15, 0, 9, 3),
(41, 16, 4, 15, 0, 9, 2),
(42, 16, 3, 15, 0, 9, 3),
(43, 16, 1, 15, 0, 9, 3),
(44, 15, 4, 16, 0, 9, 3),
(45, 15, 3, 16, 0, 9, 3),
(46, 15, 1, 16, 0, 9, 4),
(47, 14, 4, 2, 0, 9, 2),
(48, 14, 3, 2, 0, 9, 2),
(49, 14, 1, 2, 0, 9, 2),
(50, 13, 4, 9, 0, 9, 2),
(51, 13, 3, 9, 0, 9, 4),
(52, 13, 1, 9, 0, 9, 3),
(53, 29, 4, 9, 0, 9995, 2),
(54, 30, 4, 2, 0, 9995, 1),
(55, 30, 3, 2, 0, 9995, 1),
(56, 30, 1, 2, 0, 9995, 1),
(57, 29, 3, 9, 0, 9995, 1),
(58, 29, 1, 9, 0, 9995, 1),
(59, 42, 4, 18, 0, 9, 1),
(60, 42, 0, 18, 0, 9, 1),
(61, 1, 4, 9, 0, 9995, 2),
(62, 1, 3, 9, 0, 9995, 1),
(63, 1, 1, 9, 0, 9995, 1),
(64, 44, 4, 1, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_images` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `product_images`) VALUES
(1, 13, '257998837_grey frock.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `review` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shiprocket_token`
--

CREATE TABLE `shiprocket_token` (
  `id` int(11) NOT NULL,
  `token` varchar(500) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `size_master`
--

CREATE TABLE `size_master` (
  `id` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `order_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `size_master`
--

INSERT INTO `size_master` (`id`, `size`, `status`, `order_by`) VALUES
(1, 'Large', 1, 3),
(3, 'Medium', 1, 2),
(4, 'Small', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `categories_id`, `sub_categories`, `status`) VALUES
(0, 1, 'Frok', 1),
(1, 1, 'Shirt', 1),
(2, 2, 'Trouser', 1),
(3, 1, 'Kameez', 1),
(4, 2, 'Shalwar', 1),
(5, 1, 'Dupata', 1),
(6, 2, 'Skirt', 1),
(7, 2, 'Gharara', 1),
(8, 2, 'Sharara', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_image` varchar(500) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `user_image`, `mobile`, `added_on`) VALUES
(1, 'Zainab Naveed', '123', 'zainabnaveed2512@gmail.com', NULL, '14184', '2022-07-14 01:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_master`
--
ALTER TABLE `color_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_master`
--
ALTER TABLE `coupon_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notifi_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shiprocket_token`
--
ALTER TABLE `shiprocket_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size_master`
--
ALTER TABLE `size_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `color_master`
--
ALTER TABLE `color_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
