-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 08:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ogbstemp`
--

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE `connection` (
  `connection_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `ratcard` int(11) NOT NULL,
  `aadharno` varchar(12) NOT NULL,
  `no_of_cylinder` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `categoryid` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `paymentstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`connection_id`, `c_id`, `ratcard`, `aadharno`, `no_of_cylinder`, `photo`, `status`, `categoryid`, `date`, `paymentstatus`) VALUES
(122, 84, 12334, '343453434534', 1, 'png.png', 1, 0, '2023-11-19 06:12:15', 0),
(129, 84, 5655, '232312312122', 1, 'png.png', 1, 0, '2023-11-19 06:12:11', 0),
(130, 84, 0, '34334443', 1, 'kindpng_3292685 (1).jpg', 1, 0, '2023-11-19 06:12:10', 0),
(131, 84, 0, '', 1, '', 1, 0, '2023-11-19 06:12:08', 0),
(132, 84, 2147483647, '', 1, '', 1, 0, '2023-11-19 06:11:44', 0),
(134, 79, 12334, '5555', 2, 'kindpng_3292685 (1).jpg', 1, 0, '2023-11-19 06:12:07', 0),
(137, 87, 12334, '555533336667', 1, 'kindpng_3292685 (1).jpg', 1, 0, '2023-11-19 06:12:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `connpro`
--

CREATE TABLE `connpro` (
  `connid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `connproid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `connpro`
--

INSERT INTO `connpro` (`connid`, `proid`, `connproid`) VALUES
(122, 5, 166),
(122, 7, 167),
(129, 5, 168),
(129, 7, 169),
(129, 6, 170),
(137, 5, 171),
(137, 7, 172),
(137, 6, 173),
(137, 5, 174),
(137, 7, 175);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `phn_number` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `typeofuser` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `f_name`, `l_name`, `phn_number`, `email`, `pwd`, `typeofuser`) VALUES
(53, 'geo', 'kurian', 2147483647, 'geokurian7510999@gmail.com', '1234', 'customer'),
(54, 'baby', 'jose', 2147483647, 'baby@gmail.com', 'abcd', 'customer'),
(55, 'geo', 'kurian', 2147483647, 'geokurian212122@gmail.com', '212122', 'customer'),
(60, 'aleena', 'kurian', 2147483647, 'aleena@gmail.com', '123', 'customer'),
(62, 'jiyadh', 'ts', 2147483647, 'jiyadth@gmail.com', '123', 'customer'),
(65, 'jeevan', 'suresh', 2147483647, 'jeevan@gmail.com', '1234', 'customer'),
(66, 'vincent', 'thomas', 2147483647, 'vincent@gmail.com', '1234', 'customer'),
(67, 'sarath', 'anandan', 2147483647, 'geokurian111@gmail.com', '1234', 'customer'),
(76, 'sarath', 'anandan', 2147483647, 'sarathanand619@gmail.com', 'sarath', 'customer'),
(77, 'jeevan', 'suresh', 1234567898, 'jevn@gmail.com', '1234', 'customer'),
(78, 'pp', 'vvll', 751077034, 'jiyadth111@gmail.com', '1234', 'customer'),
(79, 'oooooooooo', 'lllllllllllll', 940043025, 'jiyadh0000@gmail.com', '1234', 'customer'),
(80, 'geo', 'kurian', 2147483647, 'geokurian7', '1234', 'customer'),
(82, 'geo', 'kurian', 2147483647, 'geokurian0@gmail.com', '1234', 'customer'),
(83, 'amal', 'chandran', 2147483647, 'amalc3070@gmail.com', '4321', 'customer'),
(84, 'geo', 'kurian', 2147483647, 'geokurian7510@gmail.com', 'geo', 'customer'),
(85, 'pappu', 'mon', 2147483647, 'pappu9@gmail.com', 'pappu', 'customer'),
(86, 'geo', 'kurian', 2147483647, 'geokurian10@gmail.com', '6666', 'customer'),
(87, 'aswathy', 'ashok', 2147483647, 'aswathyashokmanalil@gmail.com', 'aswathy123', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `cylinder`
--

CREATE TABLE `cylinder` (
  `cylinderid` int(50) NOT NULL,
  `cylinder_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(255) NOT NULL,
  `c_price` int(11) NOT NULL,
  `conn_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cylinder`
--

INSERT INTO `cylinder` (`cylinderid`, `cylinder_name`, `quantity`, `date`, `image`, `c_price`, `conn_amount`) VALUES
(17, 'Domestic cylinder-14.2kg', 40, '2023-11-20 17:22:33', 'cylinder.jpeg', 1070, 2350);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comment` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `c_id`, `date`, `comment`, `rating`) VALUES
(30, 53, '2023-10-05 18:30:00', 'geokurian', 'Good'),
(43, 82, '2023-10-15 18:30:00', 'fdgdfg', 'Average'),
(50, 85, '2023-10-18 18:30:00', '', 'Average'),
(52, 84, '2023-11-14 18:30:00', 'wewqw', ''),
(53, 84, '2023-11-14 18:30:00', '3123232', 'Average'),
(54, 84, '2023-11-14 18:30:00', 'kjhjhjhkjh', 'Average'),
(55, 84, '2023-11-14 18:30:00', 'jkkjhj', 'Average'),
(56, 84, '2023-11-14 18:30:00', 'ddd', 'Below Average'),
(57, 84, '2023-11-15 18:30:00', 'nmhgjhg', 'Below Average');

-- --------------------------------------------------------

--
-- Table structure for table `gas_cylinder_bookings`
--

CREATE TABLE `gas_cylinder_bookings` (
  `book_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gas_cylinder_bookings`
--

INSERT INTO `gas_cylinder_bookings` (`book_id`, `user_id`, `booking_date`, `status`) VALUES
(3, 84, '2023-11-18', 1),
(4, 84, '2023-11-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(14) NOT NULL,
  `typeofuser` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `pwd`, `typeofuser`) VALUES
(71, 'admin@gmail.com', 'admin', 'admin'),
(100, 'geokurian446@gmail.com', '1234', 'staff'),
(101, 'jevn@gmail.com', '1234', 'customer'),
(102, 'aidenreji@gmail.com', '1234', 'staff'),
(103, 'jiyadth111@gmail.com', '1234', 'customer'),
(104, 'jiyadh0000@gmail.com', '1234', 'customer'),
(106, 'geokurian751990@gmail.com', '1234', 'customer'),
(108, 'amalc3070@gmail.com', '4321', 'customer'),
(109, 'geokurian7510@gmail.com', 'geo', 'customer'),
(110, 'pappu9@gmail.com', 'pappu', 'customer'),
(111, 'geokurian10@gmail.com', '6666', 'customer'),
(112, 'geokurian7510@gmail.com', 'geo', 'staff'),
(113, 'geokurian750@gmail.com', '1234', 'staff'),
(114, 'geokurian70@gmail.com', '1234', 'staff'),
(115, 'geokurian7000@gmail.com', 'eee', 'staff'),
(116, 'geokurian70000@gmail.com', '1234', 'staff'),
(117, 'geokurian@gmail.com', '1234', 'staff'),
(118, 'geokurian00@gmail.com', '1234', 'staff'),
(119, 'geokurian509@gmail.com', '1234', 'staff'),
(120, 'jeevansuresh395@gmail.com', 'qaz', 'staff'),
(121, 'aswathyashokmanalil@gmail.com', 'aswathy123', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `oder`
--

CREATE TABLE `oder` (
  `oder_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `orderdate` date NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oder`
--

INSERT INTO `oder` (`oder_id`, `c_id`, `pro_id`, `quantity`, `amount`, `orderdate`, `status`) VALUES
(9, 84, 5, 10, 8000, '2023-11-20', 0),
(10, 84, 6, 10, 8000, '2023-11-20', 2),
(11, 84, 7, 10, 8000, '2023-11-20', 1),
(12, 84, 6, 3, 300, '2023-11-20', 1),
(13, 84, 6, 3, 300, '2023-11-20', 2),
(14, 84, 7, 3, 300, '2023-11-20', 0),
(15, 84, 5, 1, 300, '2023-11-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orderpayment`
--

CREATE TABLE `orderpayment` (
  `orderpayment_id` int(11) NOT NULL,
  `cardnumber` int(11) NOT NULL,
  `cardname` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `oder_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderpayment`
--

INSERT INTO `orderpayment` (`orderpayment_id`, `cardnumber`, `cardname`, `year`, `month`, `cvv`, `oder_id`, `amount`) VALUES
(2, 2028, 2343, 7, 233, 0, 9, 8160),
(3, 2028, 3454, 5, 344, 0, 10, 102),
(4, 2026, 5346, 8, 435, 0, 11, 306),
(5, 2029, 7765, 4, 777, 0, 12, 306),
(6, 2024, 7678, 11, 888, 0, 13, 102),
(7, 2029, 3434, 8, 222, 3, 14, 306);

-- --------------------------------------------------------

--
-- Table structure for table `otp_table`
--

CREATE TABLE `otp_table` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `otp` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('unused','used') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otp_table`
--

INSERT INTO `otp_table` (`id`, `email`, `otp`, `timestamp`, `status`) VALUES
(1, 'geokurian7510@gmail.com', 330607, '2023-11-08 09:05:58', 'unused'),
(2, 'geokurian7510@gmail.com', 790000, '2023-11-08 09:22:45', 'unused'),
(3, 'geokurian7510@gmail.com', 319020, '2023-11-08 09:24:28', 'unused'),
(4, 'geokurian7510@gmail.com', 480408, '2023-11-08 09:26:14', 'used'),
(5, 'geokurian7510@gmail.com', 412147, '2023-11-08 09:29:42', 'unused'),
(6, 'geokurian7510@gmail.com', 898585, '2023-11-08 09:32:48', 'unused'),
(7, 'geokurian7510@gmail.com', 627201, '2023-11-08 09:36:06', 'unused'),
(8, 'geokurian7510@gmail.com', 228148, '2023-11-08 09:38:36', 'unused'),
(9, 'geokurian7510@gmail.com', 621726, '2023-11-08 09:40:06', 'unused'),
(10, 'geokurian7510@gmail.com', 675746, '2023-11-08 09:42:25', 'used'),
(11, 'geokurian7510@gmail.com', 436417, '2023-11-09 20:14:40', 'unused'),
(12, 'geokurian7510@gmail.com', 399968, '2023-11-09 20:15:25', 'used'),
(13, 'geokurian7510@gmail.com', 655106, '2023-11-10 06:43:36', 'used'),
(14, 'geokurian750@gmail.com', 320885, '2023-11-10 07:13:03', 'unused'),
(15, 'jeevansuresh395@gmail.com', 276132, '2023-11-10 07:26:11', 'used'),
(16, 'geokurian7510@gmail.com', 810436, '2023-11-10 07:59:36', 'unused'),
(17, 'geokurian7510@gmail.com', 171240, '2023-11-10 07:59:42', 'unused'),
(18, 'geokurian7510@gmail.com', 288206, '2023-11-10 07:59:47', 'unused'),
(19, 'geokurian7510@gmail.com', 965742, '2023-11-10 07:59:52', 'unused'),
(20, 'geokurian7510@gmail.com', 370038, '2023-11-10 07:59:57', 'unused'),
(21, 'geokurian7510@gmail.com', 172825, '2023-11-10 08:00:01', 'unused'),
(22, 'geokurian7510@gmail.com', 741412, '2023-11-10 08:01:37', 'unused'),
(23, 'geokurian7510@gmail.com', 402328, '2023-11-10 08:45:52', 'used'),
(24, 'geokurian7510@gmail.com', 870891, '2023-11-10 13:31:34', 'unused'),
(25, 'geokurian7510@gmail.com', 614235, '2023-11-13 07:04:27', 'used'),
(26, 'geokurian7510@gmail.com', 607112, '2023-11-14 15:33:35', 'unused'),
(27, 'geokurian7510@gmail.com', 657007, '2023-11-14 15:43:26', 'used'),
(28, 'geokurian7510@gmail.com', 419867, '2023-11-14 15:56:53', 'used'),
(29, 'geokurian7510@gmail.com', 555340, '2023-11-14 15:59:11', 'used'),
(30, 'geokurian7510@gmail.com', 658430, '2023-11-14 16:06:48', 'unused'),
(31, 'geokurian7510@gmail.com', 352663, '2023-11-14 16:44:53', 'unused'),
(32, 'geokurian7510@gmail.com', 329293, '2023-11-15 15:58:32', 'unused'),
(33, 'geokurian7510@gmail.com', 556322, '2023-11-16 17:41:53', 'unused'),
(34, 'geokurian7510@gmail.com', 776299, '2023-11-17 08:26:55', 'unused'),
(35, 'geokurian7510@gmail.com', 724486, '2023-11-17 08:29:10', 'used');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `cardno` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cvv` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `year`, `month`, `cardno`, `name`, `cvv`, `c_id`, `amount`, `type`) VALUES
(34, '2026', '04', 5534, 'geo dddddddd', 222, 84, 905.76, 'connection');

-- --------------------------------------------------------

--
-- Table structure for table `servicearea`
--

CREATE TABLE `servicearea` (
  `serviceid` int(100) NOT NULL,
  `pincode` int(25) NOT NULL,
  `location` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicearea`
--

INSERT INTO `servicearea` (`serviceid`, `pincode`, `location`) VALUES
(32, 686606, 'vaikom'),
(36, 233232, 'tv puram'),
(37, 23234324, 'alapuzha'),
(38, 2147483647, 'kochi');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `phn_number` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `typeofuser` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_id`, `f_name`, `l_name`, `phn_number`, `email`, `pwd`, `typeofuser`, `status`) VALUES
(41, 'geo', 'kurian', 400430254, 'geokurian750@gmail.com', '1234', 'staff', 1),
(43, 'geo', 'kurian', 940043025, 'geokurian7000@gmail.com', 'abc', 'staff', 0),
(45, 'geo', 'kurian', 940043025, 'geokurian@gmail.com', '1234', 'staff', 2),
(48, 'geo', 'kurian', 2147483647, 'geokurian509@gmail.com', '1234', 'staff', 1),
(49, 'jeevan', 'suresh', 2147483647, 'jeevansuresh395@gmail.com', 'qaz', 'staff', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staffservicearea`
--

CREATE TABLE `staffservicearea` (
  `staffservice_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `serviceid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffservicearea`
--

INSERT INTO `staffservicearea` (`staffservice_id`, `s_id`, `serviceid`) VALUES
(38, 41, 32),
(42, 48, 37);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE `tbl_address` (
  `address_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `address_fullname` varchar(255) NOT NULL,
  `address_line` varchar(255) NOT NULL,
  `address_city` varchar(100) NOT NULL,
  `address_state` varchar(100) NOT NULL,
  `address_postalcode` varchar(20) NOT NULL,
  `address_country` varchar(100) NOT NULL,
  `address_phone` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`address_id`, `c_id`, `address_fullname`, `address_line`, `address_city`, `address_state`, `address_postalcode`, `address_country`, `address_phone`, `created_at`) VALUES
(49, 84, 'geo kurian', 'ghdgfd', 'vaikom', 'Kerala', '686606', 'India', '09400430254', '2023-11-18 08:33:45'),
(50, 79, 'geo kurian', 'ghdgfd', 'vaikom', 'Kerala', '686606', 'India', '09400430254', '2023-11-18 08:42:25'),
(51, 87, 'aswathy', 'ghdgfd', 'vaikom', 'Kerala', '686606', 'India', '09400430254', '2023-11-18 08:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` int(255) NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `stock` int(255) NOT NULL,
  `pro_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `pro_name`, `pro_price`, `pro_img`, `stock`, `pro_description`) VALUES
(5, 'Regulator', 800, 'IMG_2720.jpg', 2000, 'on off switf'),
(6, 'LIGHTER', 100, 'IMG_2721.jpg', 455, 'you can easily use gas lighter to light up the gas'),
(7, 'GAS PIPE', 300, 'IMG_2719.jpg', 1000, 'you can connect your cylinder to the stove using it');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`connection_id`),
  ADD UNIQUE KEY `ratcard` (`ratcard`,`aadharno`),
  ADD KEY `category` (`categoryid`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `connpro`
--
ALTER TABLE `connpro`
  ADD PRIMARY KEY (`connproid`),
  ADD KEY `connid` (`connid`),
  ADD KEY `proid` (`proid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- Indexes for table `cylinder`
--
ALTER TABLE `cylinder`
  ADD PRIMARY KEY (`cylinderid`),
  ADD KEY `categoryid` (`cylinder_name`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `gas_cylinder_bookings`
--
ALTER TABLE `gas_cylinder_bookings`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `user_date_unique` (`user_id`,`booking_date`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`oder_id`),
  ADD KEY `od` (`c_id`),
  ADD KEY `oder_ibfk_1` (`pro_id`);

--
-- Indexes for table `orderpayment`
--
ALTER TABLE `orderpayment`
  ADD PRIMARY KEY (`orderpayment_id`),
  ADD KEY `oder_id` (`oder_id`);

--
-- Indexes for table `otp_table`
--
ALTER TABLE `otp_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `servicearea`
--
ALTER TABLE `servicearea`
  ADD PRIMARY KEY (`serviceid`),
  ADD UNIQUE KEY `pincode` (`pincode`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- Indexes for table `staffservicearea`
--
ALTER TABLE `staffservicearea`
  ADD PRIMARY KEY (`staffservice_id`),
  ADD KEY `staffservicearea_ibfk_1` (`s_id`),
  ADD KEY `staffservicearea_ibfk_2` (`serviceid`);

--
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connection`
--
ALTER TABLE `connection`
  MODIFY `connection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `connpro`
--
ALTER TABLE `connpro`
  MODIFY `connproid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `cylinder`
--
ALTER TABLE `cylinder`
  MODIFY `cylinderid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `gas_cylinder_bookings`
--
ALTER TABLE `gas_cylinder_bookings`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `oder`
--
ALTER TABLE `oder`
  MODIFY `oder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orderpayment`
--
ALTER TABLE `orderpayment`
  MODIFY `orderpayment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `otp_table`
--
ALTER TABLE `otp_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `servicearea`
--
ALTER TABLE `servicearea`
  MODIFY `serviceid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `staffservicearea`
--
ALTER TABLE `staffservicearea`
  MODIFY `staffservice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `connection`
--
ALTER TABLE `connection`
  ADD CONSTRAINT `connection_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `connpro`
--
ALTER TABLE `connpro`
  ADD CONSTRAINT `connpro_ibfk_1` FOREIGN KEY (`connid`) REFERENCES `connection` (`connection_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connpro_ibfk_2` FOREIGN KEY (`proid`) REFERENCES `tbl_product` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `oder`
--
ALTER TABLE `oder`
  ADD CONSTRAINT `od` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `oder_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `tbl_product` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderpayment`
--
ALTER TABLE `orderpayment`
  ADD CONSTRAINT `orderpayment_ibfk_1` FOREIGN KEY (`oder_id`) REFERENCES `oder` (`oder_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staffservicearea`
--
ALTER TABLE `staffservicearea`
  ADD CONSTRAINT `staffservicearea_ibfk_2` FOREIGN KEY (`serviceid`) REFERENCES `servicearea` (`serviceid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD CONSTRAINT `tbl_address_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
