-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 07:13 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `pro_id` int(55) NOT NULL,
  `c_id` int(55) NOT NULL,
  `quantity` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(122, 84, 12334, '343453434534', 1, 'png.png', 0, 0, '2023-11-14 17:50:00', 0),
(129, 84, 5655, '232312312122', 1, 'png.png', 0, 0, '2023-11-14 17:59:21', 0);

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
(129, 6, 170);

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
(86, 'geo', 'kurian', 2147483647, 'geokurian10@gmail.com', '6666', 'customer');

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
(17, 'Domestic cylinder-14.2kg', 16, '2023-11-13 13:52:57', 'cylinder.jpg', 1070, 2300);

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
(50, 85, '2023-10-18 18:30:00', '', 'Average');

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
(113, 'geokurian750@gmail.com', 'staff', 'staff'),
(114, 'geokurian70@gmail.com', '1234', 'staff'),
(115, 'geokurian7000@gmail.com', '1234', 'staff'),
(116, 'geokurian70000@gmail.com', '1234', 'staff'),
(117, 'geokurian@gmail.com', '1234', 'staff'),
(118, 'geokurian00@gmail.com', '1234', 'staff'),
(119, 'geokurian509@gmail.com', '1234', 'staff'),
(120, 'jeevansuresh395@gmail.com', 'qaz', 'staff');

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
(31, 'geokurian7510@gmail.com', 352663, '2023-11-14 16:44:53', 'unused');

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
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `year`, `month`, `cardno`, `name`, `cvv`, `c_id`) VALUES
(27, '2023', '12', 3242, '32424324234234324234324', 355, 0),
(30, '2026', '07', 2342, 'geo', 334, 0),
(31, '2026', '11', 4543, 'GEO', 667, 0),
(32, '2031', '05', 989, 'j5656755656', 989, 0),
(33, '2026', '07', 3264, '4324324234', 242, 0);

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
(29, 686606, 'vaikom');

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
(43, 'geo', 'kurian', 940043025, 'geokurian7000@gmail.com', '1234', 'staff', 0),
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
(43, 54, 'geo kurian', 'ghdgfd', 'vaikom', 'Kerala', '686606', 'India', '09400430254', '2023-10-13 06:13:07'),
(44, 82, 'geo kurian', 'ghdgfd', 'vaikom', 'Kerala', '686606', 'India', '09400430254', '2023-10-15 18:26:05'),
(45, 84, 'geo kurian', 'ghdgfd', 'vaikom', 'Kerala', '686606', 'India', '09400430254', '2023-10-19 17:44:22'),
(46, 85, 'geo kurian', 'ghdgfd', 'vaikom', 'Kerala', '686606', 'India', '09400430254', '2023-10-19 17:48:36'),
(47, 77, 'jeeee', 'ghdgfd', 'vaikom', 'Kerala', '686606', 'India', '09400430254', '2023-10-26 08:57:37');

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
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `cart_ibfk_1` (`c_id`),
  ADD KEY `pro_id` (`pro_id`);

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `connection`
--
ALTER TABLE `connection`
  MODIFY `connection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `connpro`
--
ALTER TABLE `connpro`
  MODIFY `connproid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `cylinder`
--
ALTER TABLE `cylinder`
  MODIFY `cylinderid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `otp_table`
--
ALTER TABLE `otp_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `servicearea`
--
ALTER TABLE `servicearea`
  MODIFY `serviceid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `staffservicearea`
--
ALTER TABLE `staffservicearea`
  MODIFY `staffservice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `tbl_product` (`pro_id`);

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
