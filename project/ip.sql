-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2020 at 01:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ip`
--

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

CREATE TABLE `dessert` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `ing` text NOT NULL,
  `oprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dessert`
--

INSERT INTO `dessert` (`id`, `name`, `price`, `ing`, `oprice`) VALUES
(101, 'strawbwwerry ', 150, 'vanilla ice cream with strawberry ', 0),
(102, 'choco_lava_cake', 200, 'choclate icecream', 0),
(103, 'nuttys', 250, 'chocolate with nuts', 0);

-- --------------------------------------------------------

--
-- Table structure for table `garlic_bread`
--

CREATE TABLE `garlic_bread` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `ing` text NOT NULL,
  `oprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `garlic_bread`
--

INSERT INTO `garlic_bread` (`id`, `name`, `price`, `ing`, `oprice`) VALUES
(201, 'gaarlic bread sticks', 120, 'cheese,garlic,spring onion', 0),
(202, 'cheese garlic bread', 200, 'double cheesey ', 0),
(203, 'garlic bytes', 200, 'corn,garlic,spring onion with creamy sauce', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(30) NOT NULL,
  `pswd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pswd`) VALUES
('krupal', '1234'),
('kush', '123'),
('vinod', '1234'),
('vilash', 'kv'),
('yash', 'yash'),
('krupal', '1234'),
('krupal', '1234'),
('', ''),
('krupal', '1234'),
('krupal', '1234'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `ing` text NOT NULL,
  `oprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id`, `name`, `price`, `ing`, `oprice`) VALUES
(1, 'Tomato PARADISE\r\n', 200, ' Tomatos, Black Olives, Capsicum & Red Paprika\r\n\r\n', 0),
(2, 'Mexican Green Wave', 300, 'A pizza loaded with crunchy onions, crisp capsicum, juicy tomatoes and jalapeno with a liberal sprinkling of exotic Mexican herbs.\r\n\r\n', 0),
(3, 'The farm house', 150, 'A pizza that goes ballistic on veggies! Check out this mouth watering overload of crunchy, crisp capsicum, succulent mushrooms and fresh tomatoes', 0),
(4, 'Indi Tandoori Paneer\r\n', 200, 'It is hot. It is spicy. It is oh-so-Indian. Tandoori paneer with capsicum I red paprika I mint mayo\r\n\r\n', 0),
(5, 'Veg Extravaganza\r\n', 100, 'A pizza that decidedly staggers under an overload of golden corn, exotic black olives, crunchy onions, crisp capsicum, succulent mushrooms, juicyfresh tomatoes and jalapeno - with extra cheese to go all around.\r\n\r\n', 200),
(6, 'CHEESE N CORN\r\n', 200, 'Cheese I Golden Corn\r\n\r\n', 300);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pswd` varchar(30) NOT NULL,
  `uaddress` text NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uname`, `email`, `pswd`, `uaddress`, `contact`) VALUES
('krupal', 'krupal.vora@sakec.ac.in', '1234', 'borivali', 1234567890),
('kush', 'krupalvora789@gmail.com', '123', 'borivali', 234567890),
('vilash', 'krupalvora789@gmail', 'kv', 'borivali', 124566),
('yash', 'krupalvora789@gmail', 'yash', 'tg', 67880),
('krupal', 'krupal.vora@sakec.ac.in', '1234', 'g', 48456),
('krupal', 'krupal.vora@sakec.ac.in', '1234', 'fuut', 5866),
('krupal', 'guy', '1234', 'fy', 5875),
('krupal', 'krupal.vora@sakec.ac.in', '1234', 'ghj', 7567);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garlic_bread`
--
ALTER TABLE `garlic_bread`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `oprice` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dessert`
--
ALTER TABLE `dessert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `garlic_bread`
--
ALTER TABLE `garlic_bread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
