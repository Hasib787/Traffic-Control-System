-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2018 at 12:20 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cccs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `department` varchar(10) NOT NULL,
  `user_id` int(33) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `department`, `user_id`) VALUES
(4, 'saif', 'saif', 'pubilc', 3),
(6, 'saiful', 'saiful', 'government', 5),
(7, 'admin@gmail.com', 'admin', 'pubilc', 6),
(8, 'saiful@gmail.com', 'saiful', 'pubilc', 7);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
`car_id` int(22) NOT NULL,
  `car_number` varchar(33) NOT NULL,
  `car_name` varchar(22) NOT NULL,
  `color` varchar(33) NOT NULL,
  `category` varchar(55) NOT NULL,
  `cc` int(33) NOT NULL,
  `chasis_number` varchar(44) NOT NULL,
  `body_type` varchar(33) NOT NULL,
  `mnu_date` varchar(22) NOT NULL,
  `reg_date` varchar(33) NOT NULL,
  `fuel_type` varchar(55) NOT NULL,
  `horse_power` varchar(44) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `att` varchar(111) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `car_number`, `car_name`, `color`, `category`, `cc`, `chasis_number`, `body_type`, `mnu_date`, `reg_date`, `fuel_type`, `horse_power`, `photo`, `att`) VALUES
(20, '1111', 'BMW', 'Silver', 'private', 1500, '4444s', 'Small', '2013-08-19', '2016-01-07', 'Patrol ', '32434234', 'http://localhost/cccs/assets/img/img-13.jpg', 'http://localhost/cccs/assets/img/img-16.jpg'),
(21, '1112', ' Mercedes-Benz', 'Red', 'private', 2500, '4444s', 'Small', '2013-08-19', '2016-01-07', 'Patrol ', '32434234', 'http://localhost/cccs/assets/img/img-12.jpg', '0'),
(22, '1111-12', 'TOYATA', 'Red', 'private', 1500, '4444s', 'Large', '2013-08-19', '2015-08-19', 'Patrol ', '32434234', 'http://localhost/cccs/assets/img/img-10.jpg', '0'),
(23, '1111-13', 'HERO', 'Red', 'private', 1500, '4444s', 'Large', '2013-08-19', '2015-08-19', 'Patrol ', '32434234', 'http://localhost/cccs/assets/img/img-11.jpg', '0'),
(24, '22', 'ferari', 'Silver', 'public', 1500, '4444s', 'Large', '2013-08-19', '2015-08-19', 'Patrol ', '32434234', 'http://localhost/cccs/assets/img/img-9.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `car_owner`
--

CREATE TABLE IF NOT EXISTS `car_owner` (
`user_id` int(11) NOT NULL,
  `name` varchar(22) CHARACTER SET latin1 NOT NULL,
  `email` varchar(22) CHARACTER SET latin1 NOT NULL,
  `address` varchar(22) CHARACTER SET utf8 NOT NULL,
  `number` varchar(22) CHARACTER SET latin1 NOT NULL,
  `about` text CHARACTER SET latin1 NOT NULL,
  `department` varchar(22) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `car_owner`
--

INSERT INTO `car_owner` (`user_id`, `name`, `email`, `address`, `number`, `about`, `department`) VALUES
(1, 'fsdfd', 'saifulsaif5854@gmail.c', 'Barai,Gopinathpor,Kasb', '01759998001', 'fsdfsdf', 'pubilc'),
(2, 'saiful', 'saifulsaif5854@gmail.c', 'Barai,Gopinathpor,Kasb', '01759998001', 'fsdfsdf', 'pubilc'),
(5, 'saiful', 'saifulsaif5854@gmail.c', '?????????', '01759998001', '1wsssssd', 'pubilc'),
(6, 'admin', 'admin@gmail.com', 'panthpathah,Dhaka 1212', '01759998001', 'Good Luck', 'pubilc'),
(7, 'saifu', 'saiful@gmail.com', 'panthpathah,Dhaka 1212', '01960363152', 'make secure my cars', 'pubilc');

-- --------------------------------------------------------

--
-- Table structure for table `case`
--

CREATE TABLE IF NOT EXISTS `case` (
`case_id` int(22) NOT NULL,
  `car_number` varchar(23) NOT NULL,
  `location` varchar(23) NOT NULL,
  `reason` varchar(23) NOT NULL,
  `fine` double(15,2) NOT NULL,
  `start_date` varchar(23) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `case`
--

INSERT INTO `case` (`case_id`, `car_number`, `location`, `reason`, `fine`, `start_date`) VALUES
(21, '1112', 'Khilgoan', 'general', 100.00, '01-01-2018'),
(22, '1111', 'Komolapur', 'Driving with out safety', 350.00, '01-01-2018'),
(23, '1111', 'MohammodPur', 'accident', 300.00, '01-01-2018'),
(24, '1111', 'MohammodPur', 'careless_drive', 400.00, '01-01-2018'),
(25, '1111-12', 'Danmondi', 'smoke', 450.00, '04-01-2018'),
(26, '22', 'Kolabagan', 'accident', 300.00, '05-01-2018'),
(27, '22', 'Kolabagan', 'deny_order', 500.00, '05-01-2018'),
(28, '1111', 'New Market', 'smoke', 450.00, '05-02-2018'),
(29, '1111', 'Danmondi', 'careless_drive', 400.00, '05-02-2018'),
(30, '1112', 'New Market', 'Driving with out safety', 350.00, '06-02-2018'),
(31, '1112', 'Uttora', 'accident', 300.00, '06-02-2018'),
(32, '1112', 'Khilkhat', 'hydrolic Horn', 200.00, '06-02-2018'),
(33, '1112', 'Banani', 'Driving with out safety', 350.00, '06-02-2018'),
(34, '1112', 'Motijil', 'Driving with out safety', 350.00, '06-02-2018'),
(35, '1112', 'Motijil', 'smoke', 450.00, '06-02-2018'),
(36, '777', 'Tajgoan', 'Driving with out safety', 350.00, '06-02-2018'),
(37, '1111', 'Khilgoan', 'hydrolic Horn', 200.00, '07-02-2018'),
(38, '1111', 'New Market', 'smoke', 450.00, '07-07-2018');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
`complain_id` int(11) NOT NULL,
  `user_id` int(33) NOT NULL,
  `complain` text NOT NULL,
  `date` varchar(33) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`complain_id`, `user_id`, `complain`, `date`) VALUES
(5, 3, '                                \r\n0\r\n Member Avatar sallecpt 8 Years Ago\r\njust remember one thing, lets say you strip the tags after the first 15 characters. And if you dont strip the tags, the html code will count as characters. Secondly, if, lets say, your sting is "bold" and you use substr before the tag is closed, everything else will be bold.\r\n\r\nFor example, if you used italic, and if you use substr for the first 5 characters, this would be the result\r\n\r\n<i>Hello. My name is peter. How are you today</i>\r\n\r\nThe result will turn like this :\r\nHello. My name is\r\nAND THE REST OF YOUR PAGE WILL BE ITALIC TOOOOOOO!!!!!\r\n\r\nand all the text below that, will be italic too. So unless you are for sure that the formatting tags will be closed before the substr, it might be good advice NOT to use formatting in your first "50" characters.\r\n\r\nUnderstand what I am trying to tell you    ', '06-09-2018'),
(6, 3, '                                    Counts the number of words inside string. If the optional format is not specified, then the return value will be an integer representing the number of words found. In the event the format is specified, the return value will be an array, content of which is dependent on the format. The possible value for the format and the resultant outputs are listed below', '06-09-2018');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE IF NOT EXISTS `paper` (
`paper_id` int(11) NOT NULL,
  `case_id` int(15) NOT NULL,
  `note` text NOT NULL,
  `date` varchar(33) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`paper_id`, `case_id`, `note`, `date`) VALUES
(6, 37, 'dfsdfsdfsdf', '1-09-2018'),
(7, 35, 'You will take you paper from kolabagan Police station on monday.Or You may come to our head office .Our office address: Rajarbagh Police line.Thank Your', '1-09-2018'),
(9, 23, 'We will find you soon', '01-09-2018'),
(10, 22, 'wwww', '03-09-2018');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
`payment_id` int(22) NOT NULL,
  `case_id` int(22) NOT NULL,
  `car_number` varchar(111) NOT NULL,
  `amount` double(15,2) NOT NULL,
  `date` varchar(44) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `case_id`, `car_number`, `amount`, `date`) VALUES
(21, 21, '1112', 90.00, '0000-00-00'),
(22, 22, '1111', 350.00, '0000-00-00'),
(23, 24, '1111', 400.00, '0000-00-00'),
(24, 23, '1111', 300.00, '2018-01-01'),
(28, 25, '1111-12', 0.00, '0000-00-00'),
(29, 27, '22', 0.00, '0000-00-00'),
(30, 26, '22', 300.00, '2018-01-05'),
(31, 28, '1111', 0.00, '0000-00-00'),
(32, 29, '1111', 1400.00, '0000-00-00'),
(33, 30, '1112', 220.00, ''),
(34, 32, '1112', 0.00, ''),
(36, 33, '1112', 0.00, ''),
(37, 34, '1112', 0.00, ''),
(38, 35, '1112', 450.00, ''),
(39, 36, '777', 0.00, ''),
(40, 37, '1111', 200.00, ''),
(41, 38, '1111', 0.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment_attachment`
--

CREATE TABLE IF NOT EXISTS `payment_attachment` (
`payment_attachment_id` int(11) NOT NULL,
  `attachment` varchar(300) NOT NULL,
  `date` varchar(33) NOT NULL,
  `c_number` varchar(15) NOT NULL,
  `case_id` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `payment_attachment`
--

INSERT INTO `payment_attachment` (`payment_attachment_id`, `attachment`, `date`, `c_number`, `case_id`, `status`) VALUES
(4, 'http://localhost/cccs/assets/img/Untitled.jpg', '29-08-2018', '1111', 37, 'Sent'),
(6, 'http://localhost/cccs/assets/img/img-15.jpg', '29-08-2018', '1111', 26, 'Finish'),
(8, 'http://localhost/cccs/assets/img/proof-of-auto-insurance-templa-on-auto-insurance-policy-sample-lovely-best-s-of-declar.jpg', '29-08-2018', '1111', 25, 'Finish'),
(9, 'http://localhost/cccs/assets/img/22291000_1372655332844893_1900737028_o.jpg', '01-09-2018', '1111', 23, 'Finish'),
(12, 'http://localhost/cccs/assets/img/5.jpg', '01-09-2018', '1112', 35, 'Finish'),
(13, 'http://localhost/cccs/assets/img/x.jpg', '03-09-2018', '1111', 22, 'Finish');

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE IF NOT EXISTS `payment_info` (
`payment_info_id` int(11) NOT NULL,
  `case_id` varchar(33) NOT NULL,
  `amount` double(15,2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `payment_info`
--

INSERT INTO `payment_info` (`payment_info_id`, `case_id`, `amount`, `date`) VALUES
(1, '24', 200.00, '2018-01-04'),
(2, '24', 100.00, '2018-01-04'),
(3, '24', 100.00, '2018-01-04'),
(4, '26', 100.00, '2018-01-05'),
(5, '26', 200.00, '2018-01-05'),
(6, '29', 400.00, '2018-02-05'),
(7, '35', 50.00, '2018-02-06'),
(8, '35', 200.00, '2018-02-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
 ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `car_owner`
--
ALTER TABLE `car_owner`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `case`
--
ALTER TABLE `case`
 ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
 ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
 ADD PRIMARY KEY (`paper_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `payment_attachment`
--
ALTER TABLE `payment_attachment`
 ADD PRIMARY KEY (`payment_attachment_id`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
 ADD PRIMARY KEY (`payment_info_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
MODIFY `car_id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `car_owner`
--
ALTER TABLE `car_owner`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `case`
--
ALTER TABLE `case`
MODIFY `case_id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `payment_id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `payment_attachment`
--
ALTER TABLE `payment_attachment`
MODIFY `payment_attachment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `payment_info`
--
ALTER TABLE `payment_info`
MODIFY `payment_info_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
