-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 08:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `roll` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `work` varchar(111) NOT NULL,
  `place` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `roll`, `email`, `work`, `place`, `password`) VALUES
(6, 'rahul', 'developer', 'rahul@gmail.com', 'Manager', 'Surat', 'rahul');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `a_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `area_name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`a_id`, `s_id`, `c_id`, `area_name`) VALUES
(8, 4, 5, 'Station'),
(9, 4, 6, 'C.G road');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` varchar(123) NOT NULL,
  `qty` varchar(123) NOT NULL,
  `pimg` varchar(156) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`) VALUES
(28, 'Antivirals'),
(29, 'Barbiturates'),
(30, 'Hormones');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `c_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `city` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`c_id`, `s_id`, `city`) VALUES
(5, 4, 'Surat'),
(6, 4, 'Ahmedabad'),
(7, 5, 'Kalbadevi'),
(8, 5, 'Fort'),
(9, 6, 'valpoi'),
(10, 7, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fname` varchar(111) NOT NULL,
  `lname` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `address` varchar(111) NOT NULL,
  `city` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `country` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `email`, `contact`, `password`, `address`, `city`, `state`, `country`) VALUES
(14, 'Asha', 'D', 'asha@gmail.com', '8765432222', 'asha', 'A23,Royal Soc', 'Surat', 'Gujarat', 'India'),
(15, 'jainish', 'd', 'j@gmail.com', '987654', 'j', 'rd', 'surat', 'gujarat', 'in'),
(16, 'SAHIL', 'D', 'sahil@gmail.com', '1111', '11', 'ass', 'surat', 'gujarat', 'in');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `customerid` varchar(111) NOT NULL,
  `message` varchar(111) NOT NULL,
  `date` varchar(111) NOT NULL,
  `shop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `customerid`, `message`, `date`, `shop_id`) VALUES
(5, 'j', 'sdfr', '2022-02-23', 6),
(6, 'j', 'sdfr', '2022-02-23', 6),
(7, 'as', 'r 4f f', '2022-02-24', 7);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `message` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `email`, `contact`, `message`) VALUES
(7, 'j', 'j@gmail.com', '5432', 'GTRU FV ');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offer_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `tod` date NOT NULL,
  `fromd` date NOT NULL,
  `dets` varchar(444) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offer_id`, `shop_id`, `tod`, `fromd`, `dets`) VALUES
(3, 7, '2022-02-24', '2022-02-25', 'tvg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `date`, `customer_id`, `total_amount`, `status`) VALUES
(40, '2022-01-27', 14, '416', 'completed'),
(42, '2022-01-28', 15, '455', 'completed'),
(43, '2022-01-29', 14, '20', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(111) NOT NULL,
  `description` varchar(111) NOT NULL,
  `price` varchar(111) NOT NULL,
  `company` varchar(111) NOT NULL,
  `cat` int(11) NOT NULL,
  `subcat` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `shop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `description`, `price`, `company`, `cat`, `subcat`, `img`, `shop_id`) VALUES
(60, 'abacavir', 'hhgv hv v cgc  cf gcfg cfgc fgc jfcjgfc jc gjc jgcg', '788', 'AZ', 28, 40, 'abamune-l-40261-big.jpg', 6),
(61, 'Barbiturates', 'ad gxf g gcg  h vgc gcgc h hcg cgc g hvh ', '788', 'AZ', 29, 41, 'bottle-of-pills-spilling-out-on-yellow-background.jpg', 6),
(62, 'VIDAL', 'FC G HGC HG HGC HGB', '567', 'AZ', 30, 42, 'image_3248.jpg', 6),
(63, 'Product 1', 'sfegrt f rgtrfhgfd waertyuujhgfertyujg 45yh t', '999', 'AZ', 28, 40, 'M6251172-Antibiotic_drugs.jpg', 7),
(64, 'Product 2', 'ert gerrgttgaartyh wtny tfqvwty tfa wed', '788', 'AZ', 29, 41, '1787201_drugs-thumbnail-hd-png-download.png', 7),
(65, 'VIDAL', 'tg gbtg hgbrgh', '999', 'AZ', 30, 42, 'bottle-of-pills-spilling-out-on-yellow-background.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `ship_id` int(11) NOT NULL,
  `fname` varchar(222) NOT NULL,
  `lname` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `city` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `zip` varchar(222) NOT NULL,
  `country` varchar(222) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`ship_id`, `fname`, `lname`, `email`, `address`, `city`, `state`, `zip`, `country`, `customer_id`, `order_id`) VALUES
(79, 'asha', 'd', 'asha@gmail.com', 'A23,royal soc', 'surat', 'gujarat', '397895', 'IN', 14, 40),
(81, 'jainsh', 's', 'j@gmail.com', '23,ROYAL PLACE', 'SURAT', 'GUJARAT', '696955', 'IN', 15, 42),
(82, 'q', 'q', 'q@gmail.com', 'q', 's', 's', 's', 'IN', 14, 43);

-- --------------------------------------------------------

--
-- Table structure for table `showroom`
--

CREATE TABLE `showroom` (
  `shop_id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` varchar(222) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `owner_name` varchar(133) NOT NULL,
  `image` varchar(222) NOT NULL,
  `reg_date` date NOT NULL,
  `status` varchar(222) NOT NULL DEFAULT 'pending',
  `password` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom`
--

INSERT INTO `showroom` (`shop_id`, `name`, `email`, `contact`, `address`, `state_id`, `city_id`, `area_id`, `owner_name`, `image`, `reg_date`, `status`, `password`) VALUES
(6, 'Gupta Medical', 'g@gmail.com', 98765432, 'sudama complex, nr station', 4, 5, 8, 'Rakesh', 'Online-Medical-Store-visakhapatnam.jpg', '2022-02-22', 'Approve', '11'),
(7, 'Radha Medical', 'r@gmail.com', 2345, 'A234 Royal Complex ', 4, 5, 8, 'PRIYA', 'closeup-salesman-medical-store-18475289.jpg', '2022-02-22', 'Approve', '11');

-- --------------------------------------------------------

--
-- Table structure for table `showroom_bookslot`
--

CREATE TABLE `showroom_bookslot` (
  `slot_id` int(11) NOT NULL,
  `showroom_id` int(11) NOT NULL,
  `date` varchar(222) NOT NULL,
  `time` int(11) NOT NULL,
  `status` varchar(222) NOT NULL DEFAULT 'pending',
  `remarks` text NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `showroom_items`
--

CREATE TABLE `showroom_items` (
  `showroom_items_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slot_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`s_id`, `s_name`) VALUES
(4, 'Gujarat'),
(5, 'M.H'),
(6, 'GOA'),
(7, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `sc` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `c`, `sc`) VALUES
(40, 28, 'Abacavir'),
(41, 29, 'Secobarbital'),
(42, 30, 'Zoladex');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `t_id` int(11) NOT NULL,
  `time` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`t_id`, `time`) VALUES
(1, '9.15-9.45AM'),
(2, '10.15-10.45AM'),
(3, '11.15-11.45AM'),
(4, '1.15-1.45PM'),
(5, '3.15-4.45PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offer_id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat` (`cat`),
  ADD KEY `sub-cat` (`subcat`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`ship_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `showroom`
--
ALTER TABLE `showroom`
  ADD PRIMARY KEY (`shop_id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `showroom_bookslot`
--
ALTER TABLE `showroom_bookslot`
  ADD PRIMARY KEY (`slot_id`),
  ADD KEY `time` (`time`),
  ADD KEY `showroom_id` (`showroom_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `showroom_items`
--
ALTER TABLE `showroom_items`
  ADD PRIMARY KEY (`showroom_items_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `slot_id` (`slot_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c` (`c`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `ship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `showroom`
--
ALTER TABLE `showroom`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `showroom_bookslot`
--
ALTER TABLE `showroom_bookslot`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `showroom_items`
--
ALTER TABLE `showroom_items`
  MODIFY `showroom_items_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `state` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `area_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `city` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `state` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `showroom` (`shop_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`subcat`) REFERENCES `subcategory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`cat`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`shop_id`) REFERENCES `showroom` (`shop_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD CONSTRAINT `shipping_address_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shipping_address_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `showroom`
--
ALTER TABLE `showroom`
  ADD CONSTRAINT `showroom_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `showroom_ibfk_2` FOREIGN KEY (`area_id`) REFERENCES `area` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `showroom_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `city` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `showroom_bookslot`
--
ALTER TABLE `showroom_bookslot`
  ADD CONSTRAINT `showroom_bookslot_ibfk_1` FOREIGN KEY (`showroom_id`) REFERENCES `showroom` (`shop_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `showroom_bookslot_ibfk_2` FOREIGN KEY (`time`) REFERENCES `time` (`t_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `showroom_bookslot_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `showroom_items`
--
ALTER TABLE `showroom_items`
  ADD CONSTRAINT `showroom_items_ibfk_1` FOREIGN KEY (`slot_id`) REFERENCES `showroom_bookslot` (`slot_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`c`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
