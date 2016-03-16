-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2016 at 08:51 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flamingwings`
--

-- --------------------------------------------------------

--
-- Table structure for table `conversion`
--

CREATE TABLE `conversion` (
  `conv_id` int(4) NOT NULL,
  `unit_id1` int(4) NOT NULL,
  `qty1` int(4) NOT NULL,
  `unit_id2` int(4) NOT NULL,
  `qty2` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ingredientname`
--

CREATE TABLE `ingredientname` (
  `ingName_id` int(4) NOT NULL,
  `ing_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredientname`
--

INSERT INTO `ingredientname` (`ingName_id`, `ing_name`) VALUES
(8, 'sugar'),
(9, 'ketchup'),
(10, 'salt'),
(11, 'milk'),
(12, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ing_id` int(4) NOT NULL,
  `qty` int(5) NOT NULL,
  `unit_id` int(4) NOT NULL,
  `ingName_id` int(4) NOT NULL,
  `recipe_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipe_id` int(4) NOT NULL,
  `recipe_name` text NOT NULL,
  `recipe_typeid` int(4) NOT NULL,
  `deactivate` binary(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `recipe_name`, `recipe_typeid`, `deactivate`) VALUES
(1, 'Wicked Oreos', 10, 0x0000),
(2, 'Caesar Salad', 4, 0x0000),
(4, 'Potato Soup', 1, 0x0000),
(5, 'Pineapple Juice', 9, 0x0000);

-- --------------------------------------------------------

--
-- Table structure for table `recipetype`
--

CREATE TABLE `recipetype` (
  `recipe_typeid` int(4) NOT NULL,
  `recipe_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipetype`
--

INSERT INTO `recipetype` (`recipe_typeid`, `recipe_type`) VALUES
(1, 'Shareable Starters'),
(2, 'Buffalo Wings'),
(3, 'Dips'),
(4, 'Soups and Greenery'),
(5, 'Comfort Zone'),
(6, 'Sandwiches'),
(7, 'Milk shakes'),
(8, 'Pasta Choices'),
(9, 'Beverages'),
(10, 'Sweet Endings');

-- --------------------------------------------------------

--
-- Table structure for table `replenishstock`
--

CREATE TABLE `replenishstock` (
  `replenish_id` int(4) NOT NULL,
  `dtReceived` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `qty` int(5) NOT NULL,
  `stock_id` int(4) NOT NULL,
  `remarks` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(4) NOT NULL,
  `dtSales` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `recipe_id` int(4) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(4) NOT NULL,
  `sname` text NOT NULL,
  `qty` int(5) NOT NULL,
  `unit_id` int(4) NOT NULL,
  `ingName_id` int(4) NOT NULL,
  `stocktype_id` int(4) NOT NULL,
  `pack_id` int(4) NOT NULL,
  `deactivate` binary(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `sname`, `qty`, `unit_id`, `ingName_id`, `stocktype_id`, `pack_id`, `deactivate`) VALUES
(1, 'Sugar', 0, 1, 8, 3, 0, 0x0000);

-- --------------------------------------------------------

--
-- Table structure for table `stocktype`
--

CREATE TABLE `stocktype` (
  `stocktype_id` int(4) NOT NULL,
  `stock_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocktype`
--

INSERT INTO `stocktype` (`stocktype_id`, `stock_type`) VALUES
(1, 'Meats'),
(2, 'Dairy'),
(3, 'Condiments'),
(4, 'Produce (Fresh Fruits & Vegetables)'),
(5, 'Beverages'),
(6, 'Canned Goods'),
(7, 'Pasta/Rice'),
(8, 'Bread'),
(9, 'Spices'),
(10, 'Miscellaneous');

-- --------------------------------------------------------

--
-- Table structure for table `unitmeasurement`
--

CREATE TABLE `unitmeasurement` (
  `unit_id` int(4) NOT NULL,
  `unit_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unitmeasurement`
--

INSERT INTO `unitmeasurement` (`unit_id`, `unit_name`) VALUES
(1, 'gram/s'),
(2, 'kilogram/s'),
(4, 'liter/s');

-- --------------------------------------------------------

--
-- Table structure for table `unitpackaging`
--

CREATE TABLE `unitpackaging` (
  `pack_id` int(4) NOT NULL,
  `pack_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `verifystock`
--

CREATE TABLE `verifystock` (
  `verify_id` int(4) NOT NULL,
  `dtVerified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `verifiedqty` int(5) NOT NULL,
  `stock_id` int(4) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `withdrawstock`
--

CREATE TABLE `withdrawstock` (
  `withdraw_id` int(4) NOT NULL,
  `dtWithdrawn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `qty` int(5) NOT NULL,
  `stock_id` int(4) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conversion`
--
ALTER TABLE `conversion`
  ADD PRIMARY KEY (`conv_id`),
  ADD KEY `unit_id1` (`unit_id1`),
  ADD KEY `unit_id2` (`unit_id2`);

--
-- Indexes for table `ingredientname`
--
ALTER TABLE `ingredientname`
  ADD PRIMARY KEY (`ingName_id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ing_id`),
  ADD KEY `unit_id` (`unit_id`,`ingName_id`,`recipe_id`),
  ADD KEY `ingName_id` (`ingName_id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_id`),
  ADD KEY `recipe_typeid` (`recipe_typeid`);

--
-- Indexes for table `recipetype`
--
ALTER TABLE `recipetype`
  ADD PRIMARY KEY (`recipe_typeid`);

--
-- Indexes for table `replenishstock`
--
ALTER TABLE `replenishstock`
  ADD PRIMARY KEY (`replenish_id`),
  ADD KEY `stock_id` (`stock_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `unit_id` (`unit_id`),
  ADD KEY `ingName_id` (`ingName_id`),
  ADD KEY `stocktype_id` (`stocktype_id`),
  ADD KEY `pack_id` (`pack_id`);

--
-- Indexes for table `stocktype`
--
ALTER TABLE `stocktype`
  ADD PRIMARY KEY (`stocktype_id`);

--
-- Indexes for table `unitmeasurement`
--
ALTER TABLE `unitmeasurement`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `unitpackaging`
--
ALTER TABLE `unitpackaging`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `verifystock`
--
ALTER TABLE `verifystock`
  ADD PRIMARY KEY (`verify_id`),
  ADD KEY `stock_id` (`stock_id`);

--
-- Indexes for table `withdrawstock`
--
ALTER TABLE `withdrawstock`
  ADD PRIMARY KEY (`withdraw_id`),
  ADD KEY `stock_id` (`stock_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conversion`
--
ALTER TABLE `conversion`
  MODIFY `conv_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ingredientname`
--
ALTER TABLE `ingredientname`
  MODIFY `ingName_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `ing_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipe_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `recipetype`
--
ALTER TABLE `recipetype`
  MODIFY `recipe_typeid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `replenishstock`
--
ALTER TABLE `replenishstock`
  MODIFY `replenish_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stocktype`
--
ALTER TABLE `stocktype`
  MODIFY `stocktype_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `unitmeasurement`
--
ALTER TABLE `unitmeasurement`
  MODIFY `unit_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `unitpackaging`
--
ALTER TABLE `unitpackaging`
  MODIFY `pack_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `verifystock`
--
ALTER TABLE `verifystock`
  MODIFY `verify_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `withdrawstock`
--
ALTER TABLE `withdrawstock`
  MODIFY `withdraw_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `conversion`
--
ALTER TABLE `conversion`
  ADD CONSTRAINT `conversion_ibfk_1` FOREIGN KEY (`unit_id1`) REFERENCES `unitmeasurement` (`unit_id`),
  ADD CONSTRAINT `conversion_ibfk_2` FOREIGN KEY (`unit_id2`) REFERENCES `unitmeasurement` (`unit_id`);

--
-- Constraints for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD CONSTRAINT `ingredients_ibfk_1` FOREIGN KEY (`ingName_id`) REFERENCES `ingredientname` (`ingName_id`),
  ADD CONSTRAINT `ingredients_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`),
  ADD CONSTRAINT `ingredients_ibfk_3` FOREIGN KEY (`unit_id`) REFERENCES `unitmeasurement` (`unit_id`);

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `recipe_ibfk_1` FOREIGN KEY (`recipe_typeid`) REFERENCES `recipetype` (`recipe_typeid`);

--
-- Constraints for table `replenishstock`
--
ALTER TABLE `replenishstock`
  ADD CONSTRAINT `replenishstock_ibfk_1` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`stock_id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `unitmeasurement` (`unit_id`),
  ADD CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`ingName_id`) REFERENCES `ingredientname` (`ingName_id`);

--
-- Constraints for table `verifystock`
--
ALTER TABLE `verifystock`
  ADD CONSTRAINT `verifystock_ibfk_1` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`stock_id`);

--
-- Constraints for table `withdrawstock`
--
ALTER TABLE `withdrawstock`
  ADD CONSTRAINT `withdrawstock_ibfk_1` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`stock_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
