-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 28, 2018 at 11:16 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dairy management system`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `stock` ()  SELECT s.sdate,sum(s.stock)-sum(b.stock) as stock from sstock s LEFT JOIN bstock b on s.sdate=b.bdate GROUP BY (s.sdate)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `age`
--

CREATE TABLE `age` (
  `aid` int(11) NOT NULL,
  `staffid` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `age`
--

INSERT INTO `age` (`aid`, `staffid`, `age`) VALUES
(12, '1', 38),
(13, '2', 29),
(14, '3', 31),
(15, '4', 40);

-- --------------------------------------------------------

--
-- Stand-in structure for view `bstock`
-- (See below for the actual view)
--
CREATE TABLE `bstock` (
`bdate` date
,`stock` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `btotalprice`
-- (See below for the actual view)
--
CREATE TABLE `btotalprice` (
`id` int(11)
,`userid` varchar(10)
,`bdate` date
,`btime` time
,`blitre` float
,`price` float
,`totalprice` double
);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(11) NOT NULL,
  `userid` varchar(10) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `btime` time DEFAULT NULL,
  `blitre` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `userid`, `bdate`, `btime`, `blitre`) VALUES
(11, NULL, '2018-11-24', NULL, 0),
(12, NULL, '2018-11-24', NULL, 0),
(13, NULL, '2018-11-24', NULL, 0),
(14, 'dhanashree', '2018-11-24', '07:30:00', 2),
(15, NULL, '2018-11-25', NULL, 0),
(16, 'ashwini', '2018-11-25', '08:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `milk`
--

CREATE TABLE `milk` (
  `date` date NOT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `milk`
--

INSERT INTO `milk` (`date`, `price`) VALUES
('2018-11-24', 40),
('2018-11-25', 40.5);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(20) NOT NULL,
  `address` varchar(30) DEFAULT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `user_access` varchar(2) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `address`, `phone`, `user_access`, `userid`, `password`) VALUES
('Nishmitha', 'Udupi', 7899938640, 'A', 'admin1', 'admin1'),
('Nisha', 'Bantakal', 7022575712, 'A', 'admin2', 'admin2'),
('Ashwin', 'Kinimulky', 8296538350, 'U', 'ashwini', 'ashwini'),
('Dhanashree', 'Udupi', 8762124534, 'U', 'dhanashree', 'dhanashr'),
('Kripa', 'Ajjarkad', 9901612027, 'U', 'kripa', 'kripa'),
('Manasa', 'Daina Circle', 9611620539, 'U', 'manasa', 'manasa');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `userid` varchar(10) DEFAULT NULL,
  `sdate` date DEFAULT NULL,
  `stime` time DEFAULT NULL,
  `sfat` float DEFAULT NULL,
  `sdegree` float DEFAULT NULL,
  `slitre` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `userid`, `sdate`, `stime`, `sfat`, `sdegree`, `slitre`) VALUES
(12, 'kripa', '2018-11-24', '07:00:00', 3.5, 29, 4),
(13, 'ashwini', '2018-11-24', '07:12:00', 4, 29, 4),
(14, 'manasa', '2018-11-24', '08:00:00', 4, 30, 5),
(15, 'manasa', '2018-11-25', '00:04:00', 4, 29, 4);

--
-- Triggers `seller`
--
DELIMITER $$
CREATE TRIGGER `date` AFTER INSERT ON `seller` FOR EACH ROW insert into buyer(userid,bdate,blitre) values (null,new.sdate,0)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `sstock`
-- (See below for the actual view)
--
CREATE TABLE `sstock` (
`sdate` date
,`stock` double
);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` varchar(10) NOT NULL,
  `stname` varchar(20) NOT NULL,
  `stphone` bigint(10) NOT NULL,
  `staddress` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `stsalary` float NOT NULL,
  `staffbd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `stname`, `stphone`, `staddress`, `status`, `stsalary`, `staffbd`) VALUES
('1', 'Shivani', 7022575712, 'udupi', 'Doctor', 30000, '1980-04-19'),
('2', 'Narendra', 7022575712, 'manipal', 'cleaner', 8000, '1989-09-03'),
('3', 'Janki', 7834657894, 'udupi', 'Manger', 25000, '1987-03-12'),
('4', 'rama', 7895656789, 'malpe', 'cleaner', 7800, '1978-07-06');

--
-- Triggers `staff`
--
DELIMITER $$
CREATE TRIGGER `insertage` AFTER INSERT ON `staff` FOR EACH ROW INSERT into age values(null, NEW.staffid,Year(CURRENT_DATE)-Year(New.staffbd))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `stotalprice`
-- (See below for the actual view)
--
CREATE TABLE `stotalprice` (
`id` int(11)
,`userid` varchar(10)
,`sdate` date
,`stime` time
,`sfat` float
,`sdegree` float
,`slitre` float
,`price` float
,`totalprice` double
);

-- --------------------------------------------------------

--
-- Structure for view `bstock`
--
DROP TABLE IF EXISTS `bstock`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bstock`  AS  select `buyer`.`bdate` AS `bdate`,sum(`buyer`.`blitre`) AS `stock` from `buyer` group by `buyer`.`bdate` ;

-- --------------------------------------------------------

--
-- Structure for view `btotalprice`
--
DROP TABLE IF EXISTS `btotalprice`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `btotalprice`  AS  select `b`.`id` AS `id`,`b`.`userid` AS `userid`,`b`.`bdate` AS `bdate`,`b`.`btime` AS `btime`,`b`.`blitre` AS `blitre`,`m`.`price` AS `price`,(`m`.`price` * `b`.`blitre`) AS `totalprice` from (`milk` `m` join `buyer` `b`) where (`b`.`bdate` = `m`.`date`) ;

-- --------------------------------------------------------

--
-- Structure for view `sstock`
--
DROP TABLE IF EXISTS `sstock`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sstock`  AS  select `seller`.`sdate` AS `sdate`,sum(`seller`.`slitre`) AS `stock` from `seller` group by `seller`.`sdate` ;

-- --------------------------------------------------------

--
-- Structure for view `stotalprice`
--
DROP TABLE IF EXISTS `stotalprice`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stotalprice`  AS  select `seller`.`id` AS `id`,`seller`.`userid` AS `userid`,`seller`.`sdate` AS `sdate`,`seller`.`stime` AS `stime`,`seller`.`sfat` AS `sfat`,`seller`.`sdegree` AS `sdegree`,`seller`.`slitre` AS `slitre`,`m`.`price` AS `price`,(`m`.`price` * `seller`.`slitre`) AS `totalprice` from (`seller` join `milk` `m`) where (`m`.`date` = `seller`.`sdate`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age`
--
ALTER TABLE `age`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `age_ibfk_1` (`staffid`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buyer_ibfk_1` (`userid`),
  ADD KEY `buyer_ibfk_2` (`bdate`);

--
-- Indexes for table `milk`
--
ALTER TABLE `milk`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_ibfk_1` (`userid`),
  ADD KEY `seller_ibfk_2` (`sdate`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age`
--
ALTER TABLE `age`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `age`
--
ALTER TABLE `age`
  ADD CONSTRAINT `age_ibfk_1` FOREIGN KEY (`staffid`) REFERENCES `staff` (`staffid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `buyer_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `register` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buyer_ibfk_2` FOREIGN KEY (`bdate`) REFERENCES `milk` (`date`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buyer_ibfk_3` FOREIGN KEY (`userid`) REFERENCES `register` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `register` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seller_ibfk_2` FOREIGN KEY (`sdate`) REFERENCES `milk` (`date`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seller_ibfk_3` FOREIGN KEY (`userid`) REFERENCES `register` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
