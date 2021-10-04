-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 08:53 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctorid` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `hospitalid` int(11) NOT NULL,
  `specializationid` int(11) NOT NULL,
  `isdelete` char(1) DEFAULT '0',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctorid`, `firstname`, `lastname`, `education`, `hospitalid`, `specializationid`, `isdelete`, `created_at`, `updated_at`) VALUES
(1, 'Dr.Shams', 'Munwar', 'MBBS, MRCP (UK), D.Card. (London)', 1, 1, '0', '2019-12-27 23:22:40', '2019-12-27 23:22:40'),
(2, 'Prof. (Dr.) Md. Shahabuddin ', 'Talukder', 'MBBS, D.Card. (DU), FCPS (Medicine)', 1, 1, '0', '2019-12-27 23:23:08', '2019-12-27 23:23:08'),
(3, 'Prof. Dr. A. Q. M.', 'Reza', 'MBBS, MD (Cardiology)', 1, 1, '0', '2019-12-27 23:23:31', '2019-12-27 23:23:31'),
(4, 'Prof. Dr. Tamzeed', 'Ahmed', 'MBBS, MRCP (UK)', 1, 1, '0', '2019-12-28 01:46:24', '2019-12-28 01:46:24'),
(5, 'Dr. Kazi Atiqur', 'Rahman', 'MBBS, MD (Cardiology), MRCP (UK)', 1, 1, '0', '2019-12-28 01:46:46', '2019-12-28 01:46:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctorid`),
  ADD UNIQUE KEY `doctorid_UNIQUE` (`doctorid`),
  ADD KEY `fk_doctors_hospitals1_idx` (`hospitalid`),
  ADD KEY `fk_doctors_specialization1_idx` (`specializationid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `fk_doctors_hospitals1` FOREIGN KEY (`hospitalid`) REFERENCES `hospitals` (`hospitalid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_doctors_specialization1` FOREIGN KEY (`specializationid`) REFERENCES `specialization` (`specid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
