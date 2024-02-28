-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4306:4306
-- Generation Time: Feb 24, 2024 at 05:27 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `challan`
--

CREATE TABLE `challan` (
  `challan_id` int(11) NOT NULL,
  `challan_date` date DEFAULT NULL,
  `challan_cost` int(11) DEFAULT NULL,
  `violation_type` varchar(20) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `vhno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `challan`
--

INSERT INTO `challan` (`challan_id`, `challan_date`, `challan_cost`, `violation_type`, `pid`, `vhno`) VALUES
(73, '2024-02-24', 1000, 'no seatbelt', 1, '1003'),
(75, '2024-02-24', 1000, 'no seatbelt', 1, '9999'),
(76, '2024-02-29', 1000, 'overspeed', 1, '1003'),
(77, '2024-02-24', 500, 'jumping signal', 1, '6565'),
(78, '2024-02-24', 500, 'jumping signal', 1, '6565'),
(79, '2024-02-24', 1000, 'overspeed', 1, '3002');

-- --------------------------------------------------------

--
-- Table structure for table `p_info`
--

CREATE TABLE `p_info` (
  `police_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `policename` varchar(20) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_info`
--

INSERT INTO `p_info` (`police_id`, `username`, `policename`, `phoneno`, `email`, `password`) VALUES
(1, 'nani', 'Dhanush', '08296161413', 'dhanushmadhusudhan31@gmail.com', 'nani'),
(2, 'eshwar', 'Eshwar', '9353593737', 'eshwarappu135@gmail.com', 'eshwar');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_detail`
--

CREATE TABLE `vehicle_detail` (
  `vhno` varchar(30) NOT NULL,
  `vowner` varchar(30) NOT NULL,
  `vname` varchar(20) NOT NULL,
  `vtype` varchar(30) NOT NULL,
  `vmodel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_detail`
--

INSERT INTO `vehicle_detail` (`vhno`, `vowner`, `vname`, `vtype`, `vmodel`) VALUES
('1001', 'Charan GS', 'activa', '2 wheeler', '2G'),
('1002', 'Alan Jimcy', 'Honda', '2 Wheeler', '6G'),
('1003', 'Harsh RG', 'Suzuki', '4 Wheeler', 'Swift'),
('1004', 'Bharath Sinde', 'Yamaha', '2 Wheeler', 'MT-15'),
('1005', 'Girish J', 'Ford', '4 Wheeler', 'Mustang'),
('1006', 'Ahiram HR', 'Harley Davidson', '2 Wheeler', 'Street 750'),
('1007', 'Adarsha', 'Toyota', '4 Wheeler', 'Prius'),
('1008', 'Aboobakar', 'Honda', '4 Wheeler', 'CR-V'),
('1009', 'Aditya', 'Vespa', '2 Wheeler', 'LX 125'),
('1010', 'Aashish nanda', 'Audi', '4 Wheeler', 'A4'),
('1011', 'Abdul Mazid Khan', 'Kawasaki', '2 Wheeler', '650'),
('1234', 'Avinash', 'Vespa', '2 wheeler', 'Vespa 300'),
('2001', 'Anubhav Kumar', 'Toyota', '4 Wheeler', 'Corolla'),
('2002', 'Keshav Mishra', 'Honda', '2 Wheeler', 'CB Shine'),
('2003', 'Abhimanyu Singh', 'Ford', '4 Wheeler', 'Explorer'),
('2004', 'Mohith', 'Suzuki', '2 Wheeler', 'Hayabusa'),
('2005', 'Chirag', 'Hyundai', '4 Wheeler', 'Tucson'),
('2006', 'Karthik V', 'Yamaha', '2 Wheeler', 'R15 V3'),
('2007', 'Yashas BN', 'Chevrolet', '4 Wheeler', 'Cruze'),
('2008', 'Vaibhav', 'Ducati', '2 Wheeler', 'Panigale V2'),
('2009', 'Vrushab', 'Volkswagen', '4 Wheeler', 'Golf'),
('2010', 'Kiran', 'BMW', '4 Wheeler', '3 Series'),
('2468', 'Dhanush', 'Honda', '4 wheeler', 'Civic'),
('3001', 'Hemanth', 'Piaggio', '3 Wheeler', 'Vespa 750'),
('3002', 'Tejas', 'Honda', '2 Wheeler', 'CB Shine'),
('3003', 'Thanmai', 'Bajaj', '3 Wheeler', 'Auto Rickshaw'),
('3004', 'Lohith', 'Suzuki', '2 Wheeler', 'Hayabusa 250'),
('3005', 'Naveen', 'Hyundai', '4 Wheeler', 'Tucson'),
('3006', 'Priyanshu', 'Yamaha', '2 Wheeler', 'R15 V3'),
('3007', 'Karthik S', 'Bajaj', '3 Wheeler', 'RE60'),
('3008', 'Punith', 'Ducati', '2 Wheeler', 'Panigale V2'),
('3009', 'Sachin', 'Volkswagen', '4 Wheeler', 'Golf'),
('3010', 'Akshay', 'Piaggio', '3 Wheeler', 'Ape'),
('3011', 'Rahul', 'Suzuki', '2 Wheeler', 'Access 125'),
('3012', 'Prakash', 'Honda', '2 Wheeler', 'Activa 125'),
('3013', 'Neha', 'TVS', '2 Wheeler', 'Apache RTR 160'),
('3014', 'Kavitha', 'Bajaj', '2 Wheeler', 'Pulsar 150'),
('3015', 'Manjunath', 'Yamaha', '2 Wheeler', 'FZ S V3'),
('3016', 'Priya', 'Hero', '2 Wheeler', 'Splendor+'),
('3017', 'Vinod', 'KTM', '2 Wheeler', 'Duke 200'),
('3018', 'Vidya', 'Royal Enfield', '2 Wheeler', 'Classic 350'),
('3019', 'Vijay', 'TVS', '2 Wheeler', 'Jupiter'),
('3020', 'Vikram', 'Suzuki', '2 Wheeler', 'Access 125'),
('3021', 'Bhavya', 'Yamaha', '2 Wheeler', 'R15 V3'),
('3022', 'Manju', 'Honda', '2 Wheeler', 'CBR 150'),
('3023', 'Vasudev', 'Bajaj', '2 Wheeler', 'Pulsar 220'),
('3024', 'Sarvesh', 'KTM', '2 Wheeler', 'RC 390'),
('3025', 'Harshith', 'Hero', '2 Wheeler', 'Splendor+'),
('6565', 'Yathish', 'activa', '2 wheeler', '5G'),
('7890', 'Dilip', 'Harley', '2 wheeler', 'Harley 450'),
('9999', 'Rakesh', 'Duke', '2 wheeler', '200');

-- --------------------------------------------------------

--
-- Table structure for table `violations_cost`
--

CREATE TABLE `violations_cost` (
  `violation_type` varchar(40) NOT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `violations_cost`
--

INSERT INTO `violations_cost` (`violation_type`, `amount`) VALUES
('Driving Rashly ', 1000),
('Drunk and Drive', 1000),
('jumping signal', 500),
('No license', 1000),
('no seatbelt', 1000),
('Not Wearing Helmet', 500),
('overspeed', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `challan`
--
ALTER TABLE `challan`
  ADD PRIMARY KEY (`challan_id`),
  ADD KEY `violation_type` (`violation_type`),
  ADD KEY `pid` (`pid`),
  ADD KEY `vhno` (`vhno`);

--
-- Indexes for table `p_info`
--
ALTER TABLE `p_info`
  ADD PRIMARY KEY (`police_id`);

--
-- Indexes for table `vehicle_detail`
--
ALTER TABLE `vehicle_detail`
  ADD PRIMARY KEY (`vhno`);

--
-- Indexes for table `violations_cost`
--
ALTER TABLE `violations_cost`
  ADD PRIMARY KEY (`violation_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `challan`
--
ALTER TABLE `challan`
  MODIFY `challan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `p_info`
--
ALTER TABLE `p_info`
  MODIFY `police_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `challan`
--
ALTER TABLE `challan`
  ADD CONSTRAINT `challan_ibfk_1` FOREIGN KEY (`violation_type`) REFERENCES `violations_cost` (`violation_type`),
  ADD CONSTRAINT `challan_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `p_info` (`police_id`),
  ADD CONSTRAINT `challan_ibfk_3` FOREIGN KEY (`vhno`) REFERENCES `vehicle_detail` (`vhno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
