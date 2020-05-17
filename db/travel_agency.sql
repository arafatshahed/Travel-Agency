-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 05:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` int(11) NOT NULL,
  `A_Name` varchar(40) NOT NULL,
  `A_Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `A_Name`, `A_Pass`) VALUES
(8001, 'Shahed', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Co_ID` int(11) NOT NULL,
  `Co_Name` varchar(20) NOT NULL,
  `Co_Email` varchar(30) NOT NULL,
  `Co_Pass` varchar(100) NOT NULL,
  `Co_Address` varchar(20) NOT NULL,
  `Co_Ph_Number` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Co_ID`, `Co_Name`, `Co_Email`, `Co_Pass`, `Co_Address`, `Co_Ph_Number`) VALUES
(7001, 'TTV', 'yas@gmail.com', '$2y$10$7ri7WEi8PzDY7p48BFqmruZrARPiQeVBsHP/bOBh1QLXh/7EQjnLu', 'Dhaka', '01700000000'),
(7002, 'Travel', 'arafatyeasir94@gmail.com', '$2y$10$TBtYRjCqhbHr3KVMB..5F.EJZAdiHGdQgm8c.K1SoeS/OZPw8Sb2.', 'Dhaka', '+8801703557840'),
(7003, 'Tahmid', 'arafatyeasir95@gmail.com', '$2y$10$7ri7WEi8PzDY7p48BFqmruZrARPiQeVBsHP/bOBh1QLXh/7EQjnLu', 'Dhaka', '+8801703557840');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_ID` int(11) NOT NULL,
  `C_Name` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `C_Ph_Number` varchar(14) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Exp` int(11) NOT NULL,
  `C_Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_ID`, `C_Name`, `Address`, `C_Ph_Number`, `Email`, `Exp`, `C_Pass`) VALUES
(1001, 'Shahed', 'Dhaka', '1703557840', 'arafatyeasir94@gmail.com', 9, '$2y$10$AzNjosR0dm1j6Vtk30IzveUXP28lwrvzPsjrf3teioAz2Jj6FV6D2'),
(1002, 'munam', 'dfghyj', '12345', 'yeasirarafatshahed@gmail.com', 4, '$2y$10$AzNjosR0dm1j6Vtk30IzveUXP28lwrvzPsjrf3teioAz2Jj6FV6D2'),
(1004, 'Zawad', 'Chittagong', '01813668824', 'Nzawad001@gmail.com', 2, '$2y$10$yWXrltBp03djIbALzYLRXesfwjHyUZ2nDu1UNQzjzHTmpiAZqf4F2'),
(1005, 'Ratul', 'Dhaka', '1234567', 'ratul@gmail.com', 22, '$2y$10$AzNjosR0dm1j6Vtk30IzveUXP28lwrvzPsjrf3teioAz2Jj6FV6D2'),
(1006, 'Tuhin', 'dhaka', '01515295480', 'tuhinkhan844@gmail.com', 5, '$2y$10$P.SNk1JU88jGQsNNwh2BZ.UrrKNmEqpT5jfBJtUdQ9oj8bDEIMsBS'),
(1007, 'Niaz', 'Dhaka', '01759000071', 'niajulmahmud@gmail.com', 3, '$2y$10$P.SNk1JU88jGQsNNwh2BZ.UrrKNmEqpT5jfBJtUdQ9oj8bDEIMsBS'),
(1008, 'Tanveer', 'Dhaka', '1703557840', 'arafatyeasr94@gmail.com', 9, '$2y$10$AzNjosR0dm1j6Vtk30IzveUXP28lwrvzPsjrf3teioAz2Jj6FV6D2'),
(1009, 'idk', 'afdfd', '242545', 'adad@gmail.com', 2, '$2y$10$P.SNk1JU88jGQsNNwh2BZ.UrrKNmEqpT5jfBJtUdQ9oj8bDEIMsBS'),
(1010, 'Tahmid', 'Dhaka', '2134567', 'dsbchdhbjsd@gmail.com', 1, '$2y$10$P.SNk1JU88jGQsNNwh2BZ.UrrKNmEqpT5jfBJtUdQ9oj8bDEIMsBS'),
(1011, 'Atik', 'Dhaka', '2345', 'dfbfb@gmail.com', 5, '$2y$10$P.SNk1JU88jGQsNNwh2BZ.UrrKNmEqpT5jfBJtUdQ9oj8bDEIMsBS'),
(1012, 'dfibgfsiu', 'Dhaka', '01703557840', 'skjdf@gmail.com', 2, '$2y$10$P.SNk1JU88jGQsNNwh2BZ.UrrKNmEqpT5jfBJtUdQ9oj8bDEIMsBS'),
(1013, 'Atik', 'Dhaka', '01703557840', 'arafatasir94@gmail.com', 3, '$2y$10$P.SNk1JU88jGQsNNwh2BZ.UrrKNmEqpT5jfBJtUdQ9oj8bDEIMsBS'),
(1014, 'asdf', 'Dhaka', '01703557840', 'arafatir94@gmail.com', 2, '$2y$10$8uV5mZr5t4rhXkk3Nyfpo.T26fIqVpqVtFIU3YmoQn0lSDuYkTNmq');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Pa_ID` int(11) NOT NULL,
  `Pa_Name` varchar(20) NOT NULL,
  `Co_ID` int(11) NOT NULL,
  `Pa_Img` text NOT NULL,
  `Pa_Start` varchar(20) NOT NULL,
  `Pa_Destination` varchar(30) NOT NULL,
  `Pa_Price_Adult` int(11) NOT NULL,
  `Pa_Price_Child` int(11) NOT NULL,
  `T_ID` int(11) NOT NULL,
  `Seat_Left` int(11) NOT NULL,
  `Pa_Desc` text NOT NULL,
  `Pa_Visibility` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Pa_ID`, `Pa_Name`, `Co_ID`, `Pa_Img`, `Pa_Start`, `Pa_Destination`, `Pa_Price_Adult`, `Pa_Price_Child`, `T_ID`, `Seat_Left`, `Pa_Desc`, `Pa_Visibility`) VALUES
(2001, 'Dhaka2Thailand', 7001, 'images/pataya.png', 'Dhaka', 'Pattaya', 50000, 30000, 3001, 289, 'Pattaya is a resort city in Thailand. It is on the east coast of the Gulf of Thailand, about 100 kilometres (62 mi) southeast of Bangkok, within, but not part of, Bang Lamung District in the province of Chonburi.', 1),
(2002, 'Bangladesh2USA', 7001, 'images/nag.png', 'Dhaka', 'Niagara Falls', 150000, 80000, 3001, 297, '', 1),
(2003, 'Bangladesh2Egypt', 7001, 'images/egy.png', 'Dhaka', 'Egypt', 100000, 50000, 3001, 297, '', 1),
(2004, 'Bangladesh2China', 7001, 'images/wall.png', 'Dhaka', 'China', 50000, 30000, 3001, 290, '', 1),
(2005, 'Dhaka2Coxs Bazar', 7001, 'images/coxs.png', 'Dhaka', 'Coxs Bazar', 15000, 10000, 3003, 0, '', 1),
(2006, 'Dhaka2Slyhet', 7001, 'images/syl.png', 'Dhaka', 'Sylhet', 1000, 1000, 3002, 297, '', 1),
(2007, 'Dhaka2Sajek', 7001, 'images/sajek.jpg', 'Dhaka', 'Sajek Valley', 6000, 4000, 3002, 28, '', 1),
(2008, 'Dhaka2Sundarban', 7001, 'images/maxresdefault.jpg', 'Dhaka', 'Sundarban', 10000, 7000, 3002, 40, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pa_image`
--

CREATE TABLE `pa_image` (
  `Pa_ID` int(11) NOT NULL,
  `Pa_img1` text NOT NULL,
  `Pa_img2` text NOT NULL,
  `Pa_img3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pa_image`
--

INSERT INTO `pa_image` (`Pa_ID`, `Pa_img1`, `Pa_img2`, `Pa_img3`) VALUES
(2001, 'images/pataya.png', 'images/pattaya2.jpg', 'images/pattaya3.jpg'),
(2002, 'images/nag.png', 'images/nag2.jpg', 'images/nag3.jpg'),
(2003, 'images/egy.png', 'images/egypt2.jpg', 'images/egypt3.jpg'),
(2004, 'images/wall.png', 'images/wall2.jpg', 'images/wall3.jpg'),
(2005, 'images/coxs.png', 'images/coxs2.jpg', 'images/coxs3.jpg'),
(2006, 'images/syl.png', 'images/syl2.jpg', 'images/syl3.jpg'),
(2007, 'images/sajek.jpg', 'images/sajek2.jpg', 'images/sajek3.jpg'),
(2008, 'images/maxresdefault.jpg', 'images/Sundarban-Kotka-Sanctuary.jpg', 'images/1200px-Sundarban_Tiger.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `R_ID` int(11) NOT NULL,
  `C_ID` int(11) NOT NULL,
  `Pa_ID` int(11) NOT NULL,
  `Num_Adult` int(11) NOT NULL,
  `Num_Child` int(11) NOT NULL,
  `Dep_Date` date NOT NULL,
  `Arr_Date` date NOT NULL,
  `Total_Cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`R_ID`, `C_ID`, `Pa_ID`, `Num_Adult`, `Num_Child`, `Dep_Date`, `Arr_Date`, `Total_Cost`) VALUES
(4001, 1009, 2001, 4, 0, '2019-10-24', '2019-10-26', 200000),
(4002, 1010, 2001, 2, 5, '2019-10-27', '2019-11-13', 250000),
(4003, 1011, 2006, 2, 1, '2019-10-27', '2019-11-01', 3000),
(4004, 1011, 2004, 2, 0, '2019-10-31', '2019-11-03', 100000),
(4005, 1006, 2007, 2, 0, '2019-11-09', '2019-11-16', 12000),
(4006, 1010, 2005, 2, 2, '2019-12-26', '2019-12-28', 50000),
(4007, 1013, 2004, 2, 2, '2019-12-27', '2019-12-29', 160000),
(4008, 1006, 2004, 2, 2, '2019-12-27', '2019-12-29', 160000),
(4009, 1013, 2007, 2, 2, '2019-12-27', '2019-12-29', 20000),
(4010, 1010, 2002, 2, 1, '2019-12-28', '2020-01-03', 380000),
(4011, 1008, 2003, 2, 1, '2019-12-27', '2020-01-03', 250000),
(4012, 1013, 2007, 1, 1, '2020-04-11', '2020-04-11', 10000),
(4013, 1013, 2007, 1, 0, '2020-04-19', '2020-04-12', 6000),
(4014, 1013, 2007, 1, 0, '2020-04-11', '2020-04-12', 6000),
(4015, 1013, 2007, 1, 0, '2020-04-11', '2020-04-12', 6000),
(4016, 1013, 2007, 1, 0, '0000-00-00', '0000-00-00', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `S_ID` int(11) NOT NULL,
  `Pa_ID` int(11) NOT NULL,
  `Dep_Time` time NOT NULL,
  `Arr_Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`S_ID`, `Pa_ID`, `Dep_Time`, `Arr_Time`) VALUES
(5001, 2001, '23:00:00', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `T_ID` int(11) NOT NULL,
  `T_Type` varchar(20) NOT NULL,
  `Max_Seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`T_ID`, `T_Type`, `Max_Seat`) VALUES
(3001, 'Aeroplane', 300),
(3002, 'Bus', 40),
(3003, 'Helecopter', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Co_ID`,`Co_Email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_ID`,`Email`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Pa_ID`,`Pa_Name`),
  ADD KEY `T_ID` (`T_ID`),
  ADD KEY `Pa_ID` (`Pa_ID`),
  ADD KEY `Co_ID` (`Co_ID`);

--
-- Indexes for table `pa_image`
--
ALTER TABLE `pa_image`
  ADD PRIMARY KEY (`Pa_ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`R_ID`,`C_ID`,`Pa_ID`),
  ADD KEY `Pa_ID` (`Pa_ID`),
  ADD KEY `C_ID` (`C_ID`,`Pa_ID`),
  ADD KEY `C_ID_2` (`C_ID`),
  ADD KEY `C_ID_3` (`C_ID`),
  ADD KEY `C_ID_4` (`C_ID`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Pa_ID`,`S_ID`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`T_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8002;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Co_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7004;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1015;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Pa_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2009;

--
-- AUTO_INCREMENT for table `pa_image`
--
ALTER TABLE `pa_image`
  MODIFY `Pa_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2009;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4017;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`T_ID`) REFERENCES `transport` (`T_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `package_ibfk_2` FOREIGN KEY (`Co_ID`) REFERENCES `company` (`Co_ID`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Pa_ID`) REFERENCES `package` (`Pa_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`Pa_ID`) REFERENCES `package` (`Pa_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
