-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 10:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_innercircle`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `account_description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `coach_name` varchar(100) NOT NULL,
  `branch_address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal_code` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `coach_name`, `branch_address`, `city`, `postal_code`, `contact_number`) VALUES
(1, 'Head Office', 'Duminda Bandara', 'William Gopallawa Road', 'Kandy', '20000', '0810000001'),
(2, 'Kegalle', 'Roshan Wijesinghe', 'No 200, Fair Road', 'Kegalle', '20001', '0350000001');

-- --------------------------------------------------------

--
-- Table structure for table `branch_product`
--

CREATE TABLE `branch_product` (
  `branch_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `cert_id` int(11) NOT NULL,
  `cert_name` varchar(45) DEFAULT NULL,
  `cert_count` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `added_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `deposit_id` int(11) NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `deposite_description` varchar(150) NOT NULL,
  `Account_account_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `distribute`
--

CREATE TABLE `distribute` (
  `distribute_id` int(11) NOT NULL,
  `distribute_date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribute`
--

INSERT INTO `distribute` (`distribute_id`, `distribute_date`, `user_id`) VALUES
(1, '2020-01-12', 204),
(2, '2020-01-09', 216);

-- --------------------------------------------------------

--
-- Table structure for table `distribute_item`
--

CREATE TABLE `distribute_item` (
  `distribute_item_id` int(11) NOT NULL,
  `distribute_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribute_item`
--

INSERT INTO `distribute_item` (`distribute_item_id`, `distribute_id`, `product_id`, `product_c_id`) VALUES
(1, 1, 1, 2),
(2, 1, 6, 3),
(3, 1, 11, 4);

-- --------------------------------------------------------

--
-- Table structure for table `doc_type`
--

CREATE TABLE `doc_type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `event_time` varchar(45) NOT NULL,
  `conduct_date` datetime NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `venue`, `created_date`, `event_time`, `conduct_date`, `description`, `user_id`) VALUES
(1, 'KCC', '2020-01-14 00:00:00', '23:01', '2020-01-01 00:00:00', NULL, 201);

-- --------------------------------------------------------

--
-- Table structure for table `grn`
--

CREATE TABLE `grn` (
  `grn_id` int(11) NOT NULL,
  `received_date` date NOT NULL,
  `tot_cost` double(10,2) NOT NULL,
  `p_order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grn`
--

INSERT INTO `grn` (`grn_id`, `received_date`, `tot_cost`, `p_order_id`) VALUES
(1, '2020-01-12', 2775000.00, 22),
(2, '2020-01-12', 5000.00, 23),
(3, '2020-01-14', 225000.00, 24),
(4, '2020-01-14', 40000.00, 26);

-- --------------------------------------------------------

--
-- Table structure for table `grn_item`
--

CREATE TABLE `grn_item` (
  `grn_detail_id` int(11) NOT NULL,
  `received_qty` int(11) DEFAULT NULL,
  `unit_price` double(10,2) DEFAULT NULL,
  `sell_price` double(10,2) DEFAULT NULL,
  `sub_total` double(10,2) DEFAULT NULL,
  `product_c_id` int(11) NOT NULL,
  `grn_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grn_item`
--

INSERT INTO `grn_item` (`grn_detail_id`, `received_qty`, `unit_price`, `sell_price`, `sub_total`, `product_c_id`, `grn_id`) VALUES
(1, 500, 50.00, 100.00, 25000.00, 2, 1),
(2, 500, 2500.00, 3500.00, 1250000.00, 3, 1),
(3, 500, 3000.00, 4000.00, 1500000.00, 4, 1),
(4, 100, 50.00, 100.00, 5000.00, 2, 2),
(5, 500, 50.00, 100.00, 25000.00, 2, 3),
(6, 400, 100.00, 250.00, 40000.00, 3, 3),
(7, 800, 200.00, 500.00, 160000.00, 4, 3),
(8, 800, 50.00, 100.00, 40000.00, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `hr_file`
--

CREATE TABLE `hr_file` (
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `notification_text` varchar(45) NOT NULL,
  `receiver` varchar(45) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `notification_text`, `receiver`, `status`, `date`) VALUES
(1, 'New order has been placed', '201', 'new', '2020-01-12 05:28:02'),
(2, 'New order has been placed', '203', 'new', '2020-01-12 05:28:02'),
(3, 'New order has been placed', '201', 'new', '2020-01-12 10:10:08'),
(4, 'New order has been placed', '203', 'new', '2020-01-12 10:10:08'),
(5, 'New order has been placed', '201', 'new', '2020-01-14 07:06:32'),
(6, 'New order has been placed', '203', 'new', '2020-01-14 07:06:32'),
(7, 'New order has been placed', '201', 'new', '2020-01-14 10:32:48'),
(8, 'New order has been placed', '203', 'new', '2020-01-14 10:32:48'),
(9, 'New order has been placed', '201', 'new', '2020-01-14 10:35:35'),
(10, 'New order has been placed', '203', 'new', '2020-01-14 10:35:35'),
(11, 'New order has been placed', '201', 'new', '2020-01-15 19:25:36'),
(12, 'New order has been placed', '203', 'new', '2020-01-15 19:25:36'),
(13, 'New order has been placed', '201', 'new', '2020-01-16 02:32:03'),
(14, 'New order has been placed', '203', 'new', '2020-01-16 02:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE `point` (
  `point_id` int(11) NOT NULL,
  `point_value` int(11) NOT NULL,
  `product_c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `serial_number` varchar(100) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_c_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `serial_number`, `added_date`, `product_c_id`, `user_id`, `status`) VALUES
(1, '10001', '2020-01-12 00:49:21', 2, 204, 'sold'),
(2, ' 10002', '2020-02-04 01:13:03', 2, 217, 'available'),
(3, ' 10003', '2020-02-04 01:13:03', 2, 217, 'available'),
(4, ' 10004', '2020-02-04 01:13:03', 2, 217, 'available'),
(5, ' 10005', '2020-02-04 01:13:03', 2, 217, 'available'),
(6, '20001', '2020-01-12 00:44:01', 3, 204, 'available'),
(7, ' 20002', '2020-02-04 01:13:03', 3, 217, 'available'),
(8, ' 20003', '2020-02-04 01:13:03', 3, 217, 'available'),
(9, ' 20004', '2020-02-04 01:13:03', 3, 217, 'sold'),
(10, ' 20005', '2020-02-04 01:13:03', 3, 217, 'sold'),
(11, '30001', '2020-01-12 00:49:21', 4, 204, 'sold'),
(12, ' 30002', '2020-02-04 01:13:03', 4, 217, 'available'),
(13, ' 30003', '2020-02-04 01:13:03', 4, 217, 'available'),
(14, ' 30004', '2020-02-04 01:13:03', 4, 217, 'sold'),
(15, ' 30005', '2020-02-04 01:13:03', 4, 217, 'sold'),
(16, '10010', '2020-02-04 01:13:03', 2, 217, 'available'),
(17, ' 10011', '2020-02-04 01:13:03', 2, 217, 'available'),
(18, ' 10012', '2020-02-04 01:13:03', 2, 217, 'available'),
(19, '40001', '2020-02-04 10:40:44', 5, 217, 'available'),
(20, ' 40002', '2020-02-04 10:40:44', 5, 217, 'available'),
(21, '40003', '2020-02-04 10:40:19', 5, 217, 'available'),
(22, ' 40004', '2020-02-04 10:40:19', 5, 217, 'available'),
(23, ' 40005', '2020-02-04 10:40:19', 5, 217, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_c_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_description` varchar(255) DEFAULT NULL,
  `points` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_c_id`, `category_name`, `category_description`, `points`, `status`, `added_date`) VALUES
(2, 'SIM CARD', NULL, 5, 'Available', '2020-01-15 20:56:24'),
(3, '4G ROUTER', NULL, 8, 'Available', '2020-01-15 20:56:24'),
(4, 'DIALOG TV(PRE PAID)', NULL, 12, 'Available', '2020-02-04 10:38:04'),
(5, 'DIALOG TV(POST PAID)', '', 25, 'Available', '2020-02-04 10:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `promotion_item`
--

CREATE TABLE `promotion_item` (
  `promotion_item_id` int(11) NOT NULL,
  `promotion_item` varchar(45) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotion_item`
--

INSERT INTO `promotion_item` (`promotion_item_id`, `promotion_item`, `event_id`) VALUES
(1, 'SimCard', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `p_order_id` int(11) NOT NULL,
  `order_date` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `reference_no` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`p_order_id`, `order_date`, `status`, `reference_no`) VALUES
(14, '2019-12-23', 'canceled', '082619'),
(16, '2019-12-31', 'Completed', '376485'),
(17, '2019-12-31', 'canceled', '539417'),
(18, '2019-12-31', 'canceled', '476328'),
(19, '2019-12-31', 'Accepted', '845236'),
(20, '2020-01-09', 'canceled', '267891'),
(21, '2020-01-11', 'Canceled', '384205'),
(22, '2020-01-12', 'Completed', '826317'),
(23, '2020-01-12', 'Completed', '865471'),
(24, '2020-01-14', 'Completed', '095463'),
(25, '2020-01-14', 'Canceled', '186947'),
(26, '2020-01-14', 'Completed', '613078'),
(27, '2020-01-15', 'Approved', '312967'),
(28, '2020-01-15', 'Canceled', '590741');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_details`
--

CREATE TABLE `purchase_order_details` (
  `p_order_detail_id` int(11) NOT NULL,
  `order_qty` int(11) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `p_order_id` int(11) NOT NULL,
  `product_c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_order_details`
--

INSERT INTO `purchase_order_details` (`p_order_detail_id`, `order_qty`, `description`, `p_order_id`, `product_c_id`) VALUES
(1, 500, 'non', 22, 2),
(2, 500, 'non', 22, 3),
(3, 500, 'non', 22, 4),
(4, 100, '', 23, 2),
(5, 1000, '', 24, 2),
(6, 450, '', 24, 3),
(7, 899, '', 24, 4),
(8, 450, '', 25, 2),
(9, 899, '', 25, 4),
(10, 1000, '', 25, 3),
(11, 250, 'nn', 25, 3),
(12, 1000, 'gh', 26, 2),
(13, 650, '', 27, 2),
(14, 0, '', 28, 2);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `role_description` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `role_description`, `added_date`) VALUES
(1, 'Manager', 'gg', '2019-09-07 20:55:55'),
(3, 'Coordinator', 'main', '2019-09-11 12:17:35'),
(4, 'Administrator', 'head office', '2019-09-11 22:50:47'),
(5, 'Free Lancer', 'guy', '2019-09-11 22:51:39'),
(6, 'HR Manager', 'nothing', '2019-09-14 17:39:46'),
(7, 'Editor', 'Responsibility for digital marketting\r\n', '2019-09-19 08:21:29'),
(9, 'Executive Secretary', 'Head Office secretary', '2019-12-31 12:25:54'),
(10, 'Accountant', 'Head office accountant', '2019-12-31 12:26:39'),
(11, 'mmm', 'khkgj', '2020-01-12 10:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `sale_id` int(11) NOT NULL,
  `sale_date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`sale_id`, `sale_date`, `user_id`) VALUES
(1, '2020-01-12', 211),
(10, '2020-01-17', 204),
(11, '2020-01-17', 204),
(12, '2020-01-17', 204),
(13, '2020-01-18', 204),
(14, '2020-01-18', 204),
(15, '2020-01-18', 204),
(16, '2020-01-18', 204),
(17, '2020-01-18', 204),
(18, '2020-01-18', 204),
(19, '2020-01-18', 204),
(20, '2020-01-18', 204),
(21, '2020-01-18', 204),
(22, '2020-01-18', 204),
(23, '2020-01-18', 204),
(24, '2020-01-18', 204),
(25, '2020-01-18', 204),
(26, '2020-01-18', 204),
(27, '2020-01-18', 204),
(29, '2020-01-18', 204),
(30, '2020-01-18', 204),
(31, '2020-01-18', 204),
(32, '2020-01-18', 204),
(33, '2020-01-18', 204),
(34, '2020-01-18', 204),
(35, '2020-01-20', 204),
(36, '2020-01-20', 204),
(37, '2020-01-20', 204),
(38, '2020-01-20', 204),
(39, '2020-01-20', 204),
(40, '2020-01-20', 204),
(41, '2020-01-20', 204),
(42, '2020-01-20', 204),
(43, '2020-01-20', 204),
(44, '2020-01-20', 204),
(45, '2020-01-20', 204),
(46, '2020-01-20', 204),
(49, '2020-01-20', 204),
(50, '2020-01-20', 204);

-- --------------------------------------------------------

--
-- Table structure for table `sale_items`
--

CREATE TABLE `sale_items` (
  `sale_item_id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale_items`
--

INSERT INTO `sale_items` (`sale_item_id`, `sale_id`, `product_id`, `product_c_id`) VALUES
(1, 1, 1, 2),
(2, 1, 11, 4),
(31, 49, 9, 3),
(32, 49, 14, 4),
(33, 50, 9, 3),
(34, 50, 14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `dateOfBirth` varchar(20) DEFAULT NULL,
  `addressLine1` varchar(100) NOT NULL,
  `addressLine2` varchar(100) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `postalCode` varchar(100) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `land_number` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `manager` int(11) DEFAULT NULL,
  `working_id` varchar(100) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `registeredDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_id`, `first_name`, `last_name`, `nic`, `gender`, `dateOfBirth`, `addressLine1`, `addressLine2`, `city`, `postalCode`, `mobile_number`, `land_number`, `email`, `branch_id`, `role_id`, `manager`, `working_id`, `user_name`, `password`, `registeredDate`) VALUES
(201, 'Duminda', 'Bandara', '821529140V', 'Male', '1982-04-06', 'No 15', 'Main Street', 'Kandy', '20000', '0770000001', '0710000001', 'm.chathperera@gmail.com', 1, 4, 124, 'HO001', 'duminda', '6dfef59079e18d754a0f8545e7cd3237', '2020-01-12 04:34:01'),
(203, 'Mohammad', 'Manzeen', '832413512V', 'Male', '1983-07-13', 'No 16', '2nd Lane, Peradeniya', 'Kandy', '20000', '0770000002', '710000002', 'm.chathperera@gmail.com', 1, 10, 124, 'HO002', 'manzeen', '4096ff3f09644ea61be493abb0abb9e3', '2020-01-12 04:38:11'),
(204, 'Roshan', 'Wijesinghe', '931526489V', 'Male', '1993-08-11', '4th Lane', 'Bakmeedeniya', 'Mawanella', '71500', '0710000003', '0770000003', 'm.chathperera@gmail.com', 2, 1, 128, 'HO003', 'manager1', '2bf1968add789b927ac431dba7dd18dc', '2020-01-12 04:51:20'),
(210, 'Janaka', 'Perera', '879849949V', 'Male', '2020-01-11', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'm.chathperera@gmail.com', 1, 1, 201, 'HO004', 'janaka', '3013e88d875942ec24d22ec3318e100b', '2019-12-10 06:08:06'),
(211, 'Rasika', 'Kumara', '940034140C', 'Male', '2020-01-09', '4th lane', 'bakmeedeniya', 'Mawanella', '71500', '0719999999', '', 'm.chathperera@gmail.com', 1, 5, 210, 'HO100', 'rasika', 'c3b3c74964eae178888577a2faf6e6c7', '2020-01-12 06:17:40'),
(213, 'Roy', 'Anderson', '78879898', 'Male', '2020-01-09', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'm.chathperera@gmail.com', 1, 1, 201, '8896', 'roy', 'ee45a22d8afecb8f2db4ca9c9fa8d515', '2020-01-12 10:05:41'),
(214, 'xyz', 'peter', '788798987V', 'Male', '2020-01-08', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'test8@ymail.com', 1, 1, 201, '', '', '8395b4ba047979fba05664788d2abb1b', '2019-12-26 11:15:44'),
(215, 'xyz', 'peter', '788798987V', 'Male', '2020-01-08', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'test8@ymail.com', 1, 1, 201, '46', '', '9dc031150d5b51f22925b11a378b6a14', '2020-01-12 11:15:44'),
(216, 'xyz', 'peter', '788798987V', 'Male', '2020-01-08', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'test8@ymail.com', 1, 1, 201, '465', 'xyz', '0c1a4252d732847a79e8105c0002ca86', '2020-01-12 11:15:49'),
(217, 'Head', 'Office', '', NULL, NULL, '', NULL, '', '', '', NULL, '', 1, 0, NULL, '', NULL, NULL, '2020-02-04 06:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `accout_ibfk_1` (`user_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `branch_product`
--
ALTER TABLE `branch_product`
  ADD PRIMARY KEY (`branch_id`,`product_id`),
  ADD KEY `fk_branch_product_product1_idx` (`product_id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`cert_id`),
  ADD KEY `fk_certificate_user_profile1_idx` (`user_id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`deposit_id`,`Account_account_id`),
  ADD KEY `fk_Deposit_Account1_idx` (`Account_account_id`),
  ADD KEY `fk_deposit_user_profile1_idx` (`user_id`);

--
-- Indexes for table `distribute`
--
ALTER TABLE `distribute`
  ADD PRIMARY KEY (`distribute_id`),
  ADD KEY `fk_distribute_user_profile1_idx` (`user_id`);

--
-- Indexes for table `distribute_item`
--
ALTER TABLE `distribute_item`
  ADD PRIMARY KEY (`distribute_item_id`),
  ADD KEY `fk_distribute_item_distribute1_idx` (`distribute_id`),
  ADD KEY `fk_distribute_item_product1_idx` (`product_id`),
  ADD KEY `fk_distribute_item_product_category1_idx` (`product_c_id`);

--
-- Indexes for table `doc_type`
--
ALTER TABLE `doc_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `fk_event_user_profile1_idx` (`user_id`);

--
-- Indexes for table `grn`
--
ALTER TABLE `grn`
  ADD PRIMARY KEY (`grn_id`),
  ADD KEY `fk_grn_purchase_order1_idx` (`p_order_id`);

--
-- Indexes for table `grn_item`
--
ALTER TABLE `grn_item`
  ADD PRIMARY KEY (`grn_detail_id`),
  ADD KEY `fk_grn_item_grn1_idx1` (`grn_id`),
  ADD KEY `fk_grn_item_product_category1_idx` (`product_c_id`);

--
-- Indexes for table `hr_file`
--
ALTER TABLE `hr_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`point_id`),
  ADD KEY `fk_point_product_category1_idx` (`product_c_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_product_category1_idx` (`product_c_id`),
  ADD KEY `fk_product_user_profile1_idx` (`user_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_c_id`);

--
-- Indexes for table `promotion_item`
--
ALTER TABLE `promotion_item`
  ADD PRIMARY KEY (`promotion_item_id`),
  ADD KEY `fk_promotion_item_event1_idx` (`event_id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`p_order_id`);

--
-- Indexes for table `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  ADD PRIMARY KEY (`p_order_detail_id`),
  ADD KEY `fk_purchase_order_details_purchase_order1_idx` (`p_order_id`),
  ADD KEY `fk_purchase_order_details_product_category1_idx` (`product_c_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `fk_sale_user_profile1_idx` (`user_id`);

--
-- Indexes for table `sale_items`
--
ALTER TABLE `sale_items`
  ADD PRIMARY KEY (`sale_item_id`),
  ADD KEY `fk_sale_items_sale1_idx` (`sale_id`),
  ADD KEY `fk_sale_items_product1_idx` (`product_id`),
  ADD KEY `fk_sale_items_product_category1_idx` (`product_c_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `branch_id` (`branch_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `fk_user_role_user_profile1_idx` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `cert_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `deposit_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distribute`
--
ALTER TABLE `distribute`
  MODIFY `distribute_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `distribute_item`
--
ALTER TABLE `distribute_item`
  MODIFY `distribute_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doc_type`
--
ALTER TABLE `doc_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grn`
--
ALTER TABLE `grn`
  MODIFY `grn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grn_item`
--
ALTER TABLE `grn_item`
  MODIFY `grn_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `product_c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `promotion_item`
--
ALTER TABLE `promotion_item`
  MODIFY `promotion_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `p_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  MODIFY `p_order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `sale_items`
--
ALTER TABLE `sale_items`
  MODIFY `sale_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `accout_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `branch_product`
--
ALTER TABLE `branch_product`
  ADD CONSTRAINT `fk_branch_product_branch1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_branch_product_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `certificate`
--
ALTER TABLE `certificate`
  ADD CONSTRAINT `fk_certificate_user_profile1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `deposit`
--
ALTER TABLE `deposit`
  ADD CONSTRAINT `fk_Deposit_Account1` FOREIGN KEY (`Account_account_id`) REFERENCES `account` (`account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_deposit_user_profile1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `distribute`
--
ALTER TABLE `distribute`
  ADD CONSTRAINT `fk_distribute_user_profile1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `distribute_item`
--
ALTER TABLE `distribute_item`
  ADD CONSTRAINT `fk_distribute_item_distribute1` FOREIGN KEY (`distribute_id`) REFERENCES `distribute` (`distribute_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_distribute_item_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_distribute_item_product_category1` FOREIGN KEY (`product_c_id`) REFERENCES `product_category` (`product_c_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_event_user_profile1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `grn`
--
ALTER TABLE `grn`
  ADD CONSTRAINT `fk_grn_purchase_order1` FOREIGN KEY (`p_order_id`) REFERENCES `purchase_order` (`p_order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `grn_item`
--
ALTER TABLE `grn_item`
  ADD CONSTRAINT `fk_grn_item_grn1` FOREIGN KEY (`grn_id`) REFERENCES `grn` (`grn_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grn_item_product_category1` FOREIGN KEY (`product_c_id`) REFERENCES `product_category` (`product_c_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `point`
--
ALTER TABLE `point`
  ADD CONSTRAINT `fk_point_product_category1` FOREIGN KEY (`product_c_id`) REFERENCES `product_category` (`product_c_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_product_category1` FOREIGN KEY (`product_c_id`) REFERENCES `product_category` (`product_c_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_user_profile1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `promotion_item`
--
ALTER TABLE `promotion_item`
  ADD CONSTRAINT `fk_promotion_item_event1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  ADD CONSTRAINT `fk_purchase_order_details_product_category1` FOREIGN KEY (`product_c_id`) REFERENCES `product_category` (`product_c_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_purchase_order_details_purchase_order1` FOREIGN KEY (`p_order_id`) REFERENCES `purchase_order` (`p_order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `fk_sale_user_profile1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sale_items`
--
ALTER TABLE `sale_items`
  ADD CONSTRAINT `fk_sale_items_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sale_items_product_category1` FOREIGN KEY (`product_c_id`) REFERENCES `product_category` (`product_c_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sale_items_sale1` FOREIGN KEY (`sale_id`) REFERENCES `sale` (`sale_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`);

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `fk_user_role_role1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_role_user_profile1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
