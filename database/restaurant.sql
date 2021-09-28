-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2019 at 12:15 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `Id` int(50) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(50) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`Id`, `Name`, `Price`, `Description`, `Image`) VALUES
(3, 'Cheaps', 530, 'Cheaps', 'japan.jpg'),
(4, 'name', 200, 'Juice', 'juice.jpg'),
(10, 'Mushroom', 35, 'Mushroom', 'chinese.jpg'),
(11, 'huyg', 67, 'yugg', 'irezon.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Id` int(50) NOT NULL,
  `Names` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Id`, `Names`, `Email`, `Message`) VALUES
(3, 'Ganza kelvin', 'ganza@gmail.com', 'This website looks nice'),
(4, 'Shema Adelitte', 'shemani@gmail.com', 'this website looks nice');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Id` int(50) NOT NULL,
  `Names` varchar(255) NOT NULL,
  `Table_category` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `Confirmation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Id`, `Names`, `Table_category`, `Date`, `Time`, `Confirmation`) VALUES
(4, 'Nisingizwe aime', 'Meeting', '0000-00-00', '11:14:00.000000', '435579699'),
(5, 'amiel', 'Person', '0000-00-00', '12:30:00.000000', '617913256'),
(6, 'Shema Adelitte', 'Person', '0000-00-00', '01:22:00.000000', '1099598952');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `Id` int(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`Id`, `Email`, `Time`) VALUES
(1, 'shemani@gmail.com', '2019-02-09 14:59:24.451212'),
(2, 'aime@gmail.com', '2019-02-09 15:43:03.375365'),
(3, 'manzi@gmail.com', '2019-02-09 16:11:49.641891');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(50) NOT NULL,
  `Names` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Names`, `Username`, `Password`) VALUES
(1, 'Shema Adelite', 'irezon@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `Id` int(50) NOT NULL,
  `Names` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Age` int(50) NOT NULL,
  `Adress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`Id`, `Names`, `Gender`, `Age`, `Adress`) VALUES
(2, 'Shema Adelite', 'Male', 23, 'Gisenyi'),
(3, 'Too amiel', 'Male', 23, 'Kigali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
