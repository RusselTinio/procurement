-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 06:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `procurement`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_num` int(11) NOT NULL,
  `po_num` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_num`, `po_num`, `item_name`, `quantity`, `price`, `subtotal`) VALUES
(258306460, 412446460, 'Rebecca Reeves', '394', '871', 343174),
(352956460, 859126460, 'Daphne Fischer', '225', '465', 104625),
(372546460, 859126460, 'Mira Sellers', '817', '693', 566181),
(474426460, 412446460, 'Tyrone Koch', '826', '951', 785526),
(493416460, 859126460, 'Halla Hubbard', '17', '129', 2193),
(605456460, 412446460, 'Ebony Zimmerman', '134', '628', 84152),
(608026460, 412446460, 'August Haney', '774', '499', 386226),
(654206460, 412446460, 'Hiram Cline', '625', '624', 390000),
(723466460, 412446460, 'Laura Emerson', '905', '426', 385530);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `po_num` int(11) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `expected_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `order_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`po_num`, `supplier`, `order_date`, `expected_date`, `status`, `order_total`) VALUES
(202305140, 'Lev', '2023-05-14', '2013-05-18', 'PENDING', 181152),
(412446460, 'Upton Howell', '05/14/2023', '2023-05-15', 'PENDING', 2374608),
(859126460, 'Sonia Pugh', '05/14/2023', '1990-11-25', 'PENDING', 672999);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_num` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_address` varchar(255) NOT NULL,
  `contact_num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_num`, `supplier_name`, `supplier_address`, `contact_num`) VALUES
(104206460, 'Sonia Pugh', 'Maiores deserunt mol', '668'),
(687556460, '', '', ''),
(698916460, 'Colt Torres', 'Deleniti odio magna ', '914'),
(833076460, 'Upton Howell', 'Porro illum anim ad', '426'),
(971806460, 'Harlan Bond', 'Quis nesciunt quis ', '252');

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `item_num` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `amount_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`item_num`, `item_name`, `supplier_name`, `amount_price`) VALUES
(1, 'Maxwell England', 'Lev Burke', 433),
(507276460, 'Courtney Nguyen', 'Colt Torres', 51),
(574156460, 'Alexa Harrison', 'Sonia Pugh', 561),
(625886460, 'Jana Foreman', 'Harlan Bond', 262),
(649566460, 'Wendy Park', 'Colt Torres', 472);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_num`),
  ADD KEY `order_num` (`order_num`),
  ADD KEY `order_num_2` (`order_num`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`po_num`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_num`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`item_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `item_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=649566461;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
