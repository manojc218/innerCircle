-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 05:40 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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
  `deposit_id` int(11) NOT NULL,
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
(8, 'Branch 1', 'coach 1', 'address 1', 'city 1', '00001', '0700000001'),
(9, 'Branch 2', 'coach 2 ', 'address 2', 'city 2', '00002', '0700000002'),
(10, 'Branch 3', 'coach 3', 'address 3', 'city 3', '000003', '0700000003'),
(11, 'Branch 4', 'coach 4', 'address 4', 'city 4', '00004', '0700000004'),
(12, 'Branch 5 ', 'coach 5', 'address 5', 'city 5', '00005', '0700000005'),
(13, 'Branch 6', 'coach 6', 'address 6', 'city 6', '00006', '0700000006'),
(14, 'Head Office', 'Head', 'Main Street', 'Kandy', '20000', '0700000000'),
(15, 'Branch 7', 'coach 7', 'address 7', 'city 7', '0007', '0700000007'),
(16, 'branch 8', 'coach 8', 'address 8', 'city 8', '00008', '0700000008'),
(17, 'Katugastota', 'Coach 7', 'Main Street', 'Katugastota', '70000', '716533218'),
(18, 'Katugastota', 'Coach 7', 'Main Street', 'Katugastota', '70000', '716533218'),
(19, 'Katugastota', 'Coach 7', 'Main Street', 'Katugastota', '70000', '716533218'),
(20, 'Katugastota', 'Coach 7', 'Main Street', 'Katugastota', '70000', '716533218'),
(21, 'Katugastota', 'Coach 7', 'Main Street', 'Katugastota', '70000', '716533218'),
(22, 'Katugastota', 'Coach 7', 'Main Street', 'Katugastota', '70000', '716533218'),
(23, 'Katugastota', 'Coach 7', 'Main Street', 'Katugastota', '70000', '716533218'),
(24, 'Katugastota', 'Coach 7', 'Main Street', 'Katugastota', '70000', '716533218'),
(25, 'Katugastota', 'Coach 7', 'Main Street', 'Katugastota', '70000', '716533218'),
(26, 'Katugastota', 'Coach 7', 'Main Street', 'Katugastota', '70000', '716533218'),
(27, 'Katugastota', 'Coach 7', 'Main Street', 'Katugastota', '70000', '716533218'),
(28, 'Katugastota', 'Coach 7', 'Main Street', 'Katugastota', '70000', '716533218'),
(29, 'Katugastota', 'Coach 7', 'Main Street', 'Katugastota', '70000', '716533218'),
(30, 'Katugastota', 'Coach 7', 'Main Street', 'Katugastota', '70000', '716533218'),
(31, 'Katugastota', 'Coach 7', 'Main Street', 'Katugastota', '70000', '716533218'),
(32, 'Kurunegala', 'Adam', 'No A', 'Mawanella', 'A71500', '0719999999'),
(33, 'Manwanella', 'Roy Peterson', 'No A', 'Mawanella', '00AA', '0719999999'),
(34, 'Manwanella', 'Roy Peterson', 'No A', 'Mawanella', '00AA', '0719999999'),
(35, 'Manwanella', 'Roy Peterson', 'No A', 'Mawanella', '00AA', '0719999999'),
(36, 'Kurunegala', 'Roy Peterson', 'No A', 'Mawanella', '0000AA', '0719999999'),
(37, 'Kurunegala', 'Roy Peterson', 'No A', 'Mawanella', '0000AA', '0719999999'),
(38, 'Kurunegala', 'Roy Peterson', 'No A', 'Mawanella', '0000AA', '0719999999'),
(39, 'Kurunegala', 'Roy Peterson', 'No A', 'Mawanella', '0000AA', '0719999999'),
(40, 'Kurunegala', 'Roy Peterson', 'No A', 'Mawanella', '0000AA', '0719999999'),
(41, 'Kurunegala', 'Adam', 'No A', 'Mawanella', '000AACVF0', '0719999999'),
(42, 'Kurunegala', 'Adam', 'No A', 'Mawanella', '0000CC', '0719999999'),
(43, 'Kurunegala', 'Roy Peterson', 'No A', 'Mawanella', '0000', '0719999999');

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
(3, '2020-01-08', 158),
(4, '2020-01-08', 158);

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
(1, 3, 82, 2),
(2, 4, 80, 2);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `event_time` varchar(45) NOT NULL,
  `conduct_date` datetime NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `venue`, `created_date`, `event_time`, `conduct_date`, `description`, `user_id`) VALUES
(2, 'KCC', '2020-01-02 00:00:00', '09:00', '2020-01-04 00:00:00', NULL, 66);

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
(33, '2020-01-07', 50000.00, 16);

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
(52, 1000, 50.00, 100.00, 50000.00, 2, 33);

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `issue_id` int(11) NOT NULL,
  `product_t_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `issued_date` datetime NOT NULL,
  `issued_manager` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manager_issue`
--

CREATE TABLE `manager_issue` (
  `issue_id` int(11) NOT NULL,
  `product_t_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `issued_date` datetime NOT NULL,
  `issued_manager` varchar(100) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `memeber_issue`
--

CREATE TABLE `memeber_issue` (
  `meberIssue_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `msg_text` text NOT NULL,
  `msg_headding` varchar(45) DEFAULT NULL,
  `to` int(11) NOT NULL,
  `from` int(11) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `notification_text` varchar(45) NOT NULL,
  `receiver` varchar(45) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `notification_text`, `receiver`, `status`, `date`) VALUES
(125, 'New order has been placed', '66', 'new', '2019-12-31 15:56:28'),
(126, 'New order has been placed', '147', 'new', '2019-12-31 15:56:28'),
(127, 'New order has been placed', '159', 'new', '2019-12-31 15:56:28'),
(128, 'New order has been placed', '160', 'new', '2019-12-31 15:56:28'),
(129, 'New order has been placed', '128', 'new', '2019-12-31 15:56:28'),
(130, 'New order has been placed', '129', 'new', '2019-12-31 15:56:28');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `description`, `added_date`) VALUES
(31, 'Any99 Package', '1GB any time data', '2019-09-19 06:11:23'),
(32, 'Blast500', 'D2D 500 min and 250 sms free', '2019-09-19 06:11:23'),
(33, 'Boom1000', '1000min free for any network', '2019-09-19 06:11:23'),
(34, '50GB', 'Peak 25GB and offpeak 25GB', '2019-09-19 06:15:10'),
(35, 'Per Day Package', 'Rs.8/- Package', '2019-09-19 07:05:02'),
(36, 'Post Paid', '690 Per month', '2019-09-19 10:06:52'),
(37, 'Unlimited Bonanza', 'unlimited talk time for selected sims', '2019-09-19 10:30:40'),
(38, '25GB', 'Rs.890.00', '2019-10-09 05:42:35'),
(39, '120GB', 'Rs.2100', '2019-10-30 01:43:02'),
(40, 'Post Paid', '77 Channels, Rs.799 Per Month', '2019-10-30 01:47:05');

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
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_c_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `serial_number`, `added_date`, `product_c_id`, `user_id`, `status`) VALUES
(55, '10001', '2020-01-02 01:48:14', 2, 131, 'sold'),
(56, '10002', '2020-01-07 06:41:39', 2, 131, 'sold'),
(57, '10003', '2020-01-07 06:41:39', 2, 131, 'sold'),
(58, '10004', '2020-01-07 09:45:21', 2, 131, 'sold'),
(59, '10005', '2020-01-07 09:55:37', 2, 131, 'sold'),
(70, '20001', '2020-01-02 01:48:41', 3, 131, 'sold'),
(71, '20002', '2020-01-07 09:45:21', 3, 131, 'sold'),
(72, '20003', '2020-01-07 09:55:37', 3, 131, 'sold'),
(73, '20004', '2020-01-02 01:47:28', 3, 131, 'available'),
(74, '20005', '2020-01-02 01:47:28', 3, 131, 'available'),
(75, '30001', '2020-01-07 09:45:21', 4, 131, 'sold'),
(76, '30002', '2020-01-07 09:55:37', 4, 131, 'sold'),
(77, '30003', '2020-01-07 09:55:37', 4, 131, 'sold'),
(78, '30004', '2020-01-02 01:47:28', 4, 131, 'available'),
(79, '30005', '2020-01-02 01:48:41', 4, 131, 'sold'),
(80, '10006', '2020-01-08 11:41:28', 2, 158, 'available'),
(81, '10007', '2020-01-08 02:28:07', 2, 131, 'available'),
(82, '10008', '2020-01-08 02:56:00', 2, 158, 'available'),
(83, '20006', '2020-01-08 02:28:19', 3, 131, 'available'),
(84, '20007', '2020-01-08 02:28:25', 3, 131, 'available'),
(85, '20008', '2020-01-08 02:28:31', 3, 131, 'available'),
(86, '30006', '2020-01-08 02:28:37', 4, 131, 'available'),
(87, '30007', '2020-01-08 02:28:43', 4, 131, 'available'),
(88, '30008', '2020-01-08 02:28:47', 2, 131, 'available'),
(125, '10009', '2020-01-09 00:01:59', 2, 131, 'available'),
(126, '10009', '2020-01-09 00:02:37', 2, 131, 'available'),
(130, '10009', '2020-01-09 00:08:02', 2, 131, 'available'),
(131, '10009', '2020-01-09 00:42:12', 2, 131, 'available'),
(132, '10009', '2020-01-09 00:42:13', 2, 131, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_c_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_description` varchar(255) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_c_id`, `category_name`, `category_description`, `added_date`) VALUES
(2, 'SIM CARD', NULL, '2019-08-26 06:19:50'),
(3, '4G ROUTER', NULL, '2019-08-26 06:19:50'),
(4, 'DIALOG TV', NULL, '2019-08-26 06:19:50');

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
(2, 'SimCard', 2),
(3, 'Router', 2);

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
(13, '2019-12-23', 'Accepted', '318470'),
(14, '2019-12-23', 'Pending', '082619'),
(15, '2019-12-24', 'Accepted', '761594'),
(16, '2019-12-31', 'Completed', '376485'),
(17, '2019-12-31', 'Pending', '539417'),
(18, '2019-12-31', 'Pending', '476328'),
(19, '2019-12-31', 'Accepted', '845236');

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
(172, 1000, '', 13, 2),
(173, 450, '', 13, 3),
(174, 250, '', 13, 4),
(175, 1000, '', 14, 2),
(176, 450, '', 14, 3),
(177, 899, '', 14, 4),
(178, 500, '', 15, 2),
(179, 200, '', 15, 3),
(180, 100, '', 15, 4),
(181, 1000, '', 16, 2),
(182, 750, '', 17, 2),
(183, 250, '', 17, 3),
(184, 850, '', 18, 2),
(185, 450, '', 18, 3),
(186, 850, '', 19, 2),
(187, 450, '', 19, 3);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `role_description` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `role_description`, `added_date`) VALUES
(1, 'Manager', 'gg', '2019-09-07 20:55:55'),
(2, 'bb', 'ss', '2019-09-11 11:29:26'),
(3, 'Coordinator', 'main', '2019-09-11 12:17:35'),
(4, 'Administrator', 'head office', '2019-09-11 22:50:47'),
(5, 'Free Lancer', 'guy', '2019-09-11 22:51:39'),
(6, 'HR Manager', 'nothing', '2019-09-14 17:39:46'),
(7, 'Editor', 'Responsibility for digital marketting\r\n', '2019-09-19 08:21:29'),
(8, 'Admin', 'Person who manages the whole system', '2019-10-15 12:06:52'),
(9, 'Executive Secretary', 'Head Office secretary', '2019-12-31 12:25:54'),
(10, 'Accountant', 'Head office accountant', '2019-12-31 12:26:39');

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
(55, '2020-01-02', 143),
(56, '2020-01-06', 143),
(57, '2020-01-07', 146),
(58, '2020-01-07', 146),
(59, '2020-01-07', 68);

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
(9, 55, 55, 2),
(10, 55, 70, 3),
(11, 55, 79, 4),
(14, 58, 58, 2),
(15, 58, 71, 3),
(16, 58, 75, 4),
(17, 59, 59, 2),
(18, 59, 72, 3),
(19, 59, 76, 4),
(20, 59, 77, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `registeredDate` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_id`, `first_name`, `last_name`, `nic`, `gender`, `dateOfBirth`, `addressLine1`, `addressLine2`, `city`, `postalCode`, `mobile_number`, `land_number`, `email`, `branch_id`, `role_id`, `manager`, `working_id`, `user_name`, `password`, `registeredDate`) VALUES
(66, 'admin', 'admin', '999999999V', 'Male', '1999-01-03', 'add 1', 'add 2', 'city 1', '00001', '7777777777', '7777777778', 'admin@innercircle.lk', 8, 4, 0, '11111', 'admin', '0192023a7bbd73250516f069df18b500', '2019-09-23 11:39:03'),
(68, 'user 2', 'user', '22222222V', 'Female', '12.06.1997', 'add 2', 'add 2', 'city 2', '22222', '9984919191', '98498419511', 'user2@innercircle.lk', 9, 3, 0, 'B2111', 'user2', '474e39c7262eea34f17d37bee0c54830', '2019-09-23 11:43:46'),
(69, 'guy1', 'guy', '9891665191', 'Male', '25.02.1990', 'add 3', 'add 3', 'city 2', '22222', '7491919', '89119198', 'guy1@innercircle.lk', 9, 5, 0, 'b2693', 'guy1', 'c24969b05071d9f59de9e068a3be75e7', '2019-09-23 11:52:50'),
(124, 'Roy', 'Anderson', '898989898V', 'Male', '25.09.2019', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '035XXXXXXX', 'm.chathperera@gmail.com', 14, 1, 0, 'MM65987', 'admin456', 'efe37ac7ea36734df1f504647a715419', '2019-10-14 16:39:53'),
(125, 'Manoj', 'Perera', '940034140V', 'Male', '03.01.1994', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '035XXXXXXX', 'm.chathperera@gmail.com', 14, 8, 0, 'KAN001', 'manoj', '0e3487deaf55111a4f117bf155f3e544', '2019-10-15 16:08:40'),
(126, 'Chathuranga', 'Perera', '969784946V', 'Male', '14.08.2019', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '035XXXXXXX', 'm.chathperera@gmail.com', 12, 3, 0, 'MW0002', 'chathPerera', '583d25d362f1fbd304787d79ee3ebd94', '2019-10-15 23:11:20'),
(127, 'Chathuranga', 'Perera', '969784946V', 'Male', '14.08.2019', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '035XXXXXXX', 'm.chathperera@gmail.com', 12, 3, 0, 'MW0002', 'chathPerera', '226cd562bf0d2b2d51d33cfd103f31f9', '2019-10-15 23:12:40'),
(128, 'Manoj', 'Perera', '940034140C', 'Male', '13.06.2018', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '035XXXXXXX', 'manoj940103@gmail.com', 10, 9, 0, 'AD001', 'manojc937', 'd433da237c1925101663927fee7dd025', '2019-10-29 12:25:54'),
(129, 'Sam', 'Perera', '789845456V', 'Male', '12.06.1997', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '035XXXXXXX', 'samp@ymail.com', 11, 10, 0, 'B4001', 'sampe97', 'fe8c275d4f321f8bc5e0fe19227e945a', '2019-10-29 15:11:53'),
(130, 'Admin', 'Officer', '898989898V', 'Male', '27.06.1992', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '035XXXXXXX', 'manoj940103@gmail.com', 14, 1, 0, 'HO001', 'adminOfficer', '0d5d6b03b627f1c14a9f98e6e0e51de9', '2019-10-29 17:32:00'),
(131, 'HO', 'User', '9898952626', 'Male', '12.06.1997', 'No A', 'Lane AA', 'Mawanella', '0000', '078222222', '076773333', 'houser@innercircle.lk', 14, 1, 0, '00001', 'houser', 'f1a569d55ce285c0da1c93170ddddba5', '2019-11-16 14:05:35'),
(132, 'Roy', 'Anderson', '788798987V', 'Male', '27.06.1992', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'm.chathperera@gmail.com', 8, 1, 0, '6688', 'royand4', '2d2fdc3532608a4cd9e86de2e9d3354e', '2019-11-19 12:51:26'),
(143, 'Daniel', 'Shaker', '889979795V', 'Male', '14.08.2019', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'dj_max218@ymail.com', 14, 5, 0, '8899', 'danielSh', 'ad372b0933e255349fd4d53c1950a4d4', '2019-11-20 10:48:20'),
(146, 'Roy', 'Anderson', '898989898V', 'Male', '25.09.2019', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'dj_max218@ymail.com', 14, 5, 0, '2365', 'adminho', 'b338cbfbbe0b5307b9e6b42a2e0121e6', '2019-11-20 15:16:57'),
(147, 'sandy', 'Anderson', '940034140V', 'Male', '14.08.2019', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'dj_max218@ymail.com', 8, 4, 0, '89', '', 'e7b232f2d197883eebc639604faa1a2d', '2019-11-20 15:19:50'),
(154, 'Roy', 'Anderson', '940034140V', 'Male', '12.06.1997', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'dj_max218@ymail.com', 13, 5, 147, 'B2111', 'iiiiiiiiiiiiiiiiiiiiiiiiii', '6e33043283d9be3816f98434d26735f2', '2019-11-21 11:26:01'),
(155, '', '', '', '', '', '', '', '', '', '', '', 'pmsic.com', 8, 1, 0, '', '', 'c8ffdc443d8859a30eb6570e31e58270', '2019-12-02 09:12:09'),
(156, 'Rasika', 'Kumara', '880219154V', 'Male', '21.01.1988', 'No 8, 4h lane', '', 'Mawanella', '71500', '0725588963', '', 'rasika@gmail.com', 14, 3, 125, 'KAN8890', 'rasikakan', '5684360c90bffff57a065d0c6e29b8dd', '2019-12-05 20:44:06'),
(157, 'manoj', 'perera', '9566036464', 'Male', '12.06.1997', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'm.', 8, 1, 0, '', '', '0e8653b46ea259e71864c08483148c78', '2019-12-23 13:10:12'),
(158, 'manoj', 'perera', '9566036464', 'Male', '12.06.1997', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'm.chathperera@gmail.com', 14, 1, 124, '4654', 'honew', '08b198d491a30bc5143518bb2ee8dcf4', '2019-12-23 13:12:36'),
(159, 'Anjelo', 'Perera', '889563215V', 'Male', '13.01.1994', 'Main Street', 'Kesbawa', 'Piliyandala', '10005', '0719999999', '', 'm.chathperera@gmail.com', 10, 4, 128, 'B3A465', 'anjelop', '9d36a149a23695c7e26058d0ad715f8b', '2019-12-24 23:48:48'),
(160, 'Anjelo', 'Perera', '889563215V', 'Male', '13.01.1994', 'Main Street', 'Kesbawa', 'Piliyandala', '10005', '0719999999', '', 'm.chathperera@gmail.com', 10, 4, 128, 'B3A465', 'anjelop', '79d39a482cee86f6bd30aecc26828bdb', '2019-12-24 23:50:01'),
(161, 'Andrew', 'Russel', '859632154V', 'Male', '10.12.1985', 'First Lane', 'Madeiyawa', 'Kegalle', '70001', '0719999999', '', 'm.chathperera@gmail.com', 10, 1, 128, 'B3AR001', 'andrewr', '12bf8ce29679b980825be34937061651', '2019-12-25 09:50:50'),
(162, 'Nalisha ', 'Madhuranga', '99201354V', 'Male', '12.12.1999', 'A 41/A', 'Bakmeedeniya', 'Mawanella', '71500', '0352216487', '', 'm.chathperera@gmail.com', 11, 1, 129, 'B4NM001', 'nalisha', '30f9b311cca0df5f7b5d70ea5e936f6f', '2019-12-25 09:59:05'),
(170, '', '', '', '', '2019-12-30', '', '', '', '', '', '', '', 8, 1, 0, '', '', 'c5a92c2f3d5c6fd5a72e00bc19c22450', '2019-12-30 23:35:37'),
(171, 'Roy', 'Anderson', '915622150V', 'Male', '2009-02-11', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'm.chathperera@gmail.com', 9, 1, 0, 'b2003', 'roybtwo', 'fde000c56683822433083afc0d288633', '2020-01-02 15:15:39'),
(172, 'man', 'human', '788798987V', 'Male', '2020-01-02', 'afag', 'sdgsgsdggs', 'fsgsg', '5664', '0719999999', '', 'm.chathperera@gmail.com', 11, 1, 0, '5600', 'xxxxx', '8a9595a29601b417f178fccfd38c46bc', '2020-01-02 15:21:53'),
(173, 'sam', 'peter', '898989898V', 'Male', '2020-01-15', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'm.chathperera@gmail.com', 11, 1, 0, '88999', 'samtest', 'a76f9f1739e07a5fdc3dc9a352904597', '2020-01-02 15:30:44'),
(174, 'sam', 'peter', '915622150V', '', '', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'm.chathperera@gmail.com', 14, 1, 0, '5200', 'hosam', '07a9e9d143abb1a58b52a836c827384e', '2020-01-02 15:37:37'),
(175, 'sandy', 'Anderson', '898989898V', 'Female', '2020-01-14', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'dj_max218@ymail.com', 14, 1, 0, 'SAN001', 'sandyan', 'b6e44a5521dc685f02c74b250a3db3ab', '2020-01-02 15:41:23'),
(176, 'sandy', 'Anderson', '898989898V', 'Female', '2020-01-14', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'm.chathperera@gmail.com', 14, 1, 0, 'SAN001', 'sandyan', '98a1466362f06365f9d7f7cdee2c199a', '2020-01-02 15:41:37'),
(177, 'sam', 'peter', '940034140V', 'Male', '2020-01-09', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'm.chathperera@gmail.com', 8, 1, 0, '7447', 'samptr', 'ba3d9fdbbf23308819a9a07c083ad0f7', '2020-01-02 15:46:45'),
(178, 'sam', 'peter', '940034140V', 'Male', '2020-01-09', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'm.chathperera@gmail.com', 8, 1, 0, '7447', 'samptr', '8d3fb3879b0a7664b3ee89ce913ccb6d', '2020-01-02 15:47:21'),
(179, 'sam', 'peter', '940034140V', 'Male', '2020-01-09', 'No A', 'Lane AA', 'Mawanella', '0000', '0719999999', '', 'm.chathperera@gmail.com', 8, 1, 0, '7447', 'samptra', 'ffb564aef0bf90945e0ed9efe35ee995', '2020-01-02 15:51:50'),
(180, '', '', '', '', '2020-01-15', '', '', '', '', '', '', '', 8, 1, 0, '', '', '7f10f9f2b8c2368925157951b189b526', '2020-01-03 23:10:49');

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
  ADD KEY `accout_ibfk_1` (`user_id`),
  ADD KEY `account_ibfk_2` (`deposit_id`);

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
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `manager_issue`
--
ALTER TABLE `manager_issue`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `memeber_issue`
--
ALTER TABLE `memeber_issue`
  ADD PRIMARY KEY (`meberIssue_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

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
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`login_id`);

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
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `deposit_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distribute`
--
ALTER TABLE `distribute`
  MODIFY `distribute_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `distribute_item`
--
ALTER TABLE `distribute_item`
  MODIFY `distribute_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grn`
--
ALTER TABLE `grn`
  MODIFY `grn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `grn_item`
--
ALTER TABLE `grn_item`
  MODIFY `grn_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manager_issue`
--
ALTER TABLE `manager_issue`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memeber_issue`
--
ALTER TABLE `memeber_issue`
  MODIFY `meberIssue_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `product_c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promotion_item`
--
ALTER TABLE `promotion_item`
  MODIFY `promotion_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `p_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  MODIFY `p_order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `sale_items`
--
ALTER TABLE `sale_items`
  MODIFY `sale_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_2` FOREIGN KEY (`deposit_id`) REFERENCES `deposit` (`deposit_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `accout_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `branch_product`
--
ALTER TABLE `branch_product`
  ADD CONSTRAINT `fk_branch_product_branch1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_branch_product_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
