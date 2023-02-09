-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 04:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
-- Table structure for table `donor_blood_bank`
--

CREATE TABLE `donor_blood_bank` (
  `dname` varchar(200) NOT NULL,
  `did` int(11) NOT NULL,
  `bloodgroup` varchar(4) NOT NULL,
  `d_phoneno` int(11) NOT NULL,
  `bb_address` varchar(200) NOT NULL,
  `bbname` varchar(200) NOT NULL,
  `bb_phoneno` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_blood_bank`
--

INSERT INTO `donor_blood_bank` (`dname`, `did`, `bloodgroup`, `d_phoneno`, `bb_address`, `bbname`, `bb_phoneno`) VALUES
('abc', 5, 'B+', 966398683, 'xyz ,delhi', 'Blood Bank Center, Jaipur', '91712853'),
('Anurag', 101, 'A+', 2147483647, 'Fort. Behine General Post Office P.D.Mello Road Mumbai-400001', 'St. George Hospital Blood Centre', '2222620344'),
('Rishab Tripathi', 102, 'B+', 991954415, 'Aundh Camp, Pune - 27.', 'Pune Chest Hospital Blood Centre\'', '20263487823'),
('Bharath Kumar', 103, 'AB+', 973029837, 'Ansari Nagar, Ring Road, New Delhi–110029', 'Blood Bank, C.N. Centre, A.I.I.M.S.', '293970173474'),
('Lakshmi Priya', 104, 'O-', 789892833, 'Sanjay Gandhi Puram, Faizabad Road, Lucknow, Uttar Pradesh - 226016', 'Indira Diagnostic And Blood Bank Limited', '26398399393'),
('Utkarsh ', 105, 'A-', 830373893, 'Medical Enclave, Amritsar', 'Guru Nanak Dev Hospital Blood Bank', '2293739991837'),
('Smruti Soumya', 106, 'B-', 780127377, 'Military Hospital Blood Bank, 24, M.H. Complex, Ahmedabad-380003', 'Military Hospital Blood Bank, Ahmedabad', '7916238574'),
('xyz', 107, 'AB-', 89983636, 'Avad Nagar, Jaipur', 'Blood Bank Center, Jaipur', '209739787');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pname` varchar(200) NOT NULL,
  `pid` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phoneno` decimal(20,0) NOT NULL,
  `bloodgroup` varchar(6) NOT NULL,
  `bloodtype` varchar(20) NOT NULL,
  `disease` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pname`, `pid`, `email`, `phoneno`, `bloodgroup`, `bloodtype`, `disease`) VALUES
('Amit Kumar', 0, 'amit@gmail.com', '45289824', 'B', 'Negative', 'Cancer'),
('Vikas', 0, 'vikas@gmail.com', '82578755', 'B', 'Negative', 'Liver Disease'),
('admin', 2387337, 'admin@gmail.com', '878123533', 'O', 'Negative', 'Organ Transplant'),
('xyz', 0, 'abc@gmail.com', '32429813', 'AB', 'Negative', 'Cancer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '1844156d4166d94387f1a4ad031ca5fa'),
(2, 'Prashant', 'prince162113@gmail.com', '9b83c033b173c1d3db0b6b1dd3f3e60f'),
(3, 'user', 'user@gmail.com', 'd781eaae8248db6ce1a7b82e58e60435');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_blood_bank`
--
ALTER TABLE `donor_blood_bank`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_blood_bank`
--
ALTER TABLE `donor_blood_bank`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
