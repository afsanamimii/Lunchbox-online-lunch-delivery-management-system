-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 12:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lunchbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(25) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pass`) VALUES
(222, 'hhhh'),
(222, 'hhhh'),
(7777, '0000');

-- --------------------------------------------------------

--
-- Table structure for table `assigndeliveryman`
--

CREATE TABLE `assigndeliveryman` (
  `id` int(25) NOT NULL,
  `product` varchar(30) NOT NULL,
  `quantity` int(39) NOT NULL,
  `deliverymanid` int(40) NOT NULL,
  `status` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assigndeliveryman`
--

INSERT INTO `assigndeliveryman` (`id`, `product`, `quantity`, `deliverymanid`, `status`) VALUES
(122, 'khichuri', 4, 908, 'Assigned'),
(122, 'CHICKEN_CURRY', 2, 908, 'Assigned'),
(122, 'biriani', 6, 908, 'Assigned'),
(122, 'tehari', 4, 908, 'Assigned'),
(122, 'khichuri', 2, 908, 'Assigned'),
(122, 'Rice', 2, 908, 'Assigned'),
(122, 'tehari', 1, 908, 'Assigned'),
(122, 'biriani', 3, 908, 'Assigned'),
(122, 'tehari', 2, 908, 'Assigned'),
(122, 'tehari', 2, 908, 'Assigned'),
(122, 'khichuri', 3, 908, 'Assigned'),
(122, 'Rice', 2, 908, 'Assigned'),
(122, 'Rice', 3, 908, 'Assigned'),
(122, 'Rice', 3, 908, 'Assigned'),
(122, 'fish_curry', 3, 0, 'pending'),
(122, 'Beef_curry', 2, 0, 'pending'),
(340, 'biriani', 1, 0, 'pending'),
(340, 'biriani', 1, 0, 'pending'),
(302, 'Rice', 2, 0, 'pending'),
(302, 'CHICKEN_CURRY', 2, 0, 'pending'),
(302, 'Rice', 3, 0, 'pending'),
(302, 'dal', 2, 0, 'pending'),
(302, 'khichuri', 3, 0, 'pending'),
(302, 'dal', 3, 0, 'pending'),
(274, 'CHICKEN_CURRY', 2, 123, 'DELIVERED'),
(0, 'CHICKEN_CURRY', 4, 0, 'pending'),
(0, 'Rice', 3, 0, 'pending'),
(0, 'CHICKEN_CURRY', 3, 0, 'pending'),
(0, 'CHICKEN_CURRY', 3, 0, 'pending'),
(209, 'Rice', 2, 0, 'pending'),
(340, 'Rice', 3, 0, 'pending'),
(300, 'biriani', 1, 123, 'DELIVERED'),
(0, 'khichuri', 2, 0, 'pending'),
(0, 'khichuri', 2, 0, 'pending'),
(0, 'khichuri', 2, 0, 'pending'),
(0, 'khichuri', 2, 0, 'pending'),
(0, 'biriani', 1, 0, 'pending'),
(278, 'biriani', 1, 0, 'pending'),
(222, 'CHICKEN_CURRY', 1, 0, 'pending'),
(231, 'tehari', 1, 0, 'pending'),
(444, 'biriani', 4, 234, 'DELIVERED'),
(0, 'biriani', 2, 0, 'pending'),
(188, 'biriani', 1, 999, 'Assigned'),
(0, '', 0, 0, 'pending'),
(0, 'tehari', 1, 0, 'pending'),
(0, 'khichuri', 1, 0, 'pending'),
(444, 'Rice', 1, 0, 'pending'),
(300, 'Rice', 5, 123, 'DELIVERED'),
(274, '', 0, 123, 'DELIVERED'),
(274, 'CHICKEN_CURRY', 2, 123, 'DELIVERED'),
(274, 'Rice', 1, 123, 'DELIVERED'),
(274, 'CHICKEN_CURRY', 2, 123, 'DELIVERED'),
(274, 'biriani', 2, 123, 'DELIVERED');

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `id` int(25) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(59) NOT NULL,
  `address` varchar(40) NOT NULL,
  `password` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`id`, `name`, `phone`, `address`, `password`) VALUES
(256, 'Arif Hamid', '01991074972', 'house no#17,road#2,smritdhara', '1111'),
(256, 'Afsana Mimi', '01991074972', 'house no#17,road#2,smritdhara', '1111'),
(231, 'Sara', '01819724178', 'jatrabari,899', '5555'),
(231, 'Sara', '01819724178', 'jatrabari,899', '5555'),
(231, 'Sara', '01819724178', 'jatrabari,899', '5555'),
(340, 'Dina', '01819724178', 'jatrabari,899', '6666'),
(302, 'Afsana Mimi', '01590114404', 'japanibazar road$2', '9999'),
(278, 'Afsana Mimi', '01590114404', 'japanibazar mosjid goli', '234'),
(188, 'Rina Akter', '0178373222', 'rampura dhala', '3333'),
(209, 'Jalal Uddin', '0187653211', 'comilla', '345'),
(300, 'Monoara', '01765444444', 'bipulasar comilla', '2222'),
(300, 'Monoara', '01765444444', 'bipulasar comilla', '2222'),
(222, 'Mim Ahmed Hossen', '0178373222', 'rampura dhala', '6666'),
(274, 'Jhanara Akter', '0178373222', 'wari,dhaka', '2225'),
(444, 'Sharmin', '018326282', 'vola', '4444'),
(555, 'JUI', '01819724178', 'BASABO', '3333'),
(909, 'safa', '017837832232', 'baridhara', '3333'),
(444, 'jim', '0178373222', 'jatrabari,899', '2222');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryman`
--

CREATE TABLE `deliveryman` (
  `id` int(25) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(25) NOT NULL,
  `name` varchar(30) NOT NULL,
  `product` varchar(59) NOT NULL,
  `quantity` int(40) NOT NULL,
  `individual` int(34) NOT NULL,
  `discount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `name`, `product`, `quantity`, `individual`, `discount`) VALUES
(340, 'Tina', 'biriani', 1, 160, 0),
(340, 'Tina', 'biriani', 1, 160, 0),
(302, 'Tina', 'Rice', 2, 40, 0),
(302, 'Tina', 'CHICKEN_CURRY', 2, 240, 0),
(302, 'select name from customerinfo ', 'Rice', 3, 60, 0),
(302, 'select name from customerinfo ', 'dal', 2, 30, 0),
(302, 'Afsana Mimi', 'khichuri', 3, 360, 0),
(302, 'Afsana Mimi', 'dal', 3, 45, 0),
(274, 'Jhanara Akter', 'CHICKEN_CURRY', 2, 240, 0),
(0, '', 'CHICKEN_CURRY', 4, 480, 0),
(0, '', 'Rice', 3, 60, 0),
(0, '', 'CHICKEN_CURRY', 3, 360, 0),
(0, '', 'CHICKEN_CURRY', 3, 360, 0),
(209, 'Jalal Uddin', 'Rice', 2, 40, 0),
(340, 'Dina', 'Rice', 3, 60, 0),
(300, 'Monoara', 'biriani', 1, 160, 0),
(0, '', 'khichuri', 2, 240, 0),
(0, '', 'khichuri', 2, 240, 0),
(0, '', 'khichuri', 2, 240, 0),
(0, '', 'khichuri', 2, 240, 0),
(0, '', 'biriani', 1, 160, 0),
(278, 'Afsana Mimi', 'biriani', 1, 160, 0),
(222, 'Mim Ahmed Hossen', 'CHICKEN_CURRY', 1, 120, 0),
(231, 'Sara', 'tehari', 1, 200, 0),
(444, 'Sharmin', 'biriani', 4, 640, 0),
(0, '', 'biriani', 2, 320, 0),
(188, 'Rina Akter', 'biriani', 1, 160, 0),
(0, '', '', 0, 0, 0),
(0, '', 'tehari', 1, 200, 0),
(0, '', 'khichuri', 1, 120, 0),
(444, 'jim', 'Rice', 1, 20, 0),
(300, 'Monoara', 'Rice', 5, 100, 0),
(274, 'Jhanara Akter', '', 0, 0, 0),
(274, 'Jhanara Akter', 'CHICKEN_CURRY', 2, 240, 0),
(274, 'Jhanara Akter', 'Rice', 1, 20, 0),
(274, 'Jhanara Akter', 'CHICKEN_CURRY', 2, 240, 0),
(274, 'Jhanara Akter', 'biriani', 2, 320, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
