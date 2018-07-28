-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2018 at 09:56 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdetail`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `Tfrom` varchar(50) NOT NULL,
  `Tto` varchar(50) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`Tfrom`, `Tto`, `Amount`) VALUES
('Nikita Gawade', 'Nilam Vare', 200),
('Nikita Gawade', 'Nilam Vare', 200),
('Apurva Dalavi', 'Nilam Vare', 100),
('Nikita Gawade', 'Nilam Vare', 100),
('Nikita Naik', 'Anushka Gorkha', 500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `currentcredit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `name`, `email`, `currentcredit`) VALUES
(1, 'Nikita Gawade', 'nikitagawade@gmail.com', 2800),
(2, 'Nilam Vare', 'nilamvare@gmail.com', 3400),
(3, 'Nikita Naik', 'nikitanaik@gmail.com', 1500),
(4, 'Apurva Dalavi', 'apurvadalavi@gmail.com', 2900),
(5, 'Aishwarya Satavase', 'asihwaryasatavase@gmail.com', 2000),
(6, 'Pooja Bnadekar', 'poojabandekar@gmail.com', 2000),
(7, 'Mitali Bandarkar', 'mitalibandarkar@gmail.com', 2400),
(8, 'Anushka Gorkha', 'anushkagorkha@gmail.com', 2500),
(9, 'Himani Ambede', 'himaniambede@gmail.com', 2000),
(10, 'Rasika Ghanekar', 'rasikaghanekar@gmail.com', 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
