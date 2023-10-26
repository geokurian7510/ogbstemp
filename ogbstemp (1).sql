-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 11:46 AM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `category` varchar(70) NOT NULL,
  `weight` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `category`, `weight`) VALUES
(1, 'jumbo-19kg', 19),
(2, 'jumbo-47.5kg', 47.5),
(3, 'jumbo-425kg', 425),
(4, 'domestic-5kg', 5),
(5, 'domestic-14.2kg', 14.2);

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
  `categoryid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`connection_id`, `c_id`, `ratcard`, `aadharno`, `no_of_cylinder`, `photo`, `status`, `categoryid`) VALUES
(40, 82, 12334, '4657556565', 2, 'payment1.jpeg', 1, 1),
(46, 82, 12334, '43432534634', 1, 'payment1.jpeg', 0, 1),
(50, 82, 12334, '43432534634', 1, 'payment1.jpeg', 1, 1),
(51, 82, 4555, '123443211234', 1, '_6bb219c0-b872-4ca0-ac96-45329360c985.jpeg', 0, 1),
(53, 82, 12334, '343432432432', 1, 'istockphoto-1203763961-1024x1024.jpg', 1, 1),
(66, 82, 12334, '1212', 1, 'Project Management Bootstrap 5 Admin Dashboard with RTL Dark Theme.jpeg', 1, 1),
(67, 82, 12334, '2344', 1, 'Project Management Bootstrap 5 Admin Dashboard with RTL Dark Theme.jpeg', 1, 1),
(68, 82, 2147483647, '67567453543', 1, 'Admin Dashboard - White background.jpeg', 0, 1),
(69, 82, 79, '64534232', 1, 'Project Management Bootstrap 5 Admin Dashboard with RTL Dark Theme.jpeg', 0, 1),
(70, 82, 12334, '', 1, 'Snapchat-2073681738-01.jpeg', 0, 1),
(71, 84, 125, '123443217654', 1, 'LPG1.jpg', 0, 5);

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
(84, 'geo', 'kurian', 2147483647, 'geokurian7510@gmail.com', 'geokurian', 'customer'),
(85, 'pappu', 'mon', 2147483647, 'pappu9@gmail.com', 'pappu', 'customer'),
(86, 'geo', 'kurian', 2147483647, 'geokurian10@gmail.com', '6666', 'customer');

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
(28, 53, '2023-10-03 18:30:00', ' is very good', 'Average'),
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
(109, 'geokurian7510@gmail.com', 'geokurian', 'customer'),
(110, 'pappu9@gmail.com', 'pappu', 'customer'),
(111, 'geokurian10@gmail.com', '6666', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `cardno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(7, 6866543, 'kottayam'),
(9, 686606, 'vaikom'),
(11, 686606, 'pala'),
(12, 686606, 'kollam');

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
(36, 'jinu', 'kurian', 2147483647, 'geokurian446@gmail.com', '1234', 'staff', 1),
(37, 'aiden', 'reji', 2147483647, 'aidenreji@gmail.com', '1234', 'staff', 1);

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
(27, 33, 7),
(30, 35, 9),
(33, 36, 9);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stockid` int(50) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stockid`, `categoryid`, `quantity`, `date`) VALUES
(10, 3, 4, '2023-10-17 17:35:09'),
(11, 1, 500, '2023-10-17 17:35:09'),
(12, 1, 100, '2023-10-17 17:35:09');

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
(46, 85, 'geo kurian', 'ghdgfd', 'vaikom', 'Kerala', '686606', 'India', '09400430254', '2023-10-19 17:48:36');

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
(5, 'REGULATOR', 800, 'IMG_2720.jpg', 1000, 'This is used as an ON/OFF switch in gas cylinder'),
(6, 'LIGHTER', 100, 'IMG_2721.jpg', 1000, 'you can easily use gas lighter to light up the gas'),
(7, 'GAS PIPE', 200, 'IMG_2719.jpg', 1000, 'you can connect your cylinder to the stove using it');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`connection_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `category` (`categoryid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `unique` (`email`);

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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `servicearea`
--
ALTER TABLE `servicearea`
  ADD PRIMARY KEY (`serviceid`);

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
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stockid`),
  ADD KEY `categoryid` (`categoryid`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `connection`
--
ALTER TABLE `connection`
  MODIFY `connection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicearea`
--
ALTER TABLE `servicearea`
  MODIFY `serviceid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `staffservicearea`
--
ALTER TABLE `staffservicearea`
  MODIFY `staffservice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stockid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `connection`
--
ALTER TABLE `connection`
  ADD CONSTRAINT `connection_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryid`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryid`);

--
-- Constraints for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD CONSTRAINT `tbl_address_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
