-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 12:00 AM
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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointmentid` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `doctorid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `isdelete` char(1) DEFAULT '0',
  `verified` char(1) DEFAULT '0',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `diseaseid` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `detail` varchar(200) DEFAULT NULL,
  `specid` int(11) NOT NULL,
  `isdelete` char(1) DEFAULT '0',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `diseases_has_symptoms`
--

CREATE TABLE `diseases_has_symptoms` (
  `diseaseid` int(11) NOT NULL,
  `symptomid` int(11) NOT NULL,
  `isdelete` char(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(5, 'Dr. Kazi Atiqur', 'Rahman', 'MBBS, MD (Cardiology), MRCP (UK)', 1, 1, '0', '2019-12-28 01:46:46', '2019-12-28 01:46:46'),
(6, 'Professor (Dr.) Mohammed Istiaque', 'Hossain', 'MBBS (DMC), DCH (Sscotland), MRCP(UK)', 1, 14, '0', '2019-12-28 02:32:41', '2019-12-28 02:32:41'),
(7, 'Dr. M. Quamrul ', 'Hassan', 'MBBS, FCPS (Paediatrics)', 1, 14, '0', '2019-12-28 02:33:16', '2019-12-28 02:33:16'),
(8, 'Dr. Sarwar Jahan', 'Bhuiyan', 'MBBS, FCPS (Paediatrics)', 3, 14, '0', '2019-12-28 02:33:43', '2019-12-28 02:33:43'),
(9, 'Dr. Fahmida', 'Zabeen', 'MBBS, FCPS (Pediatrics) MRCPCH (UK)', 2, 14, '0', '2019-12-28 02:34:23', '2019-12-28 02:34:23'),
(10, 'Dr. Lutful', 'Chowdhury', 'MBBS, MRCP, FRCP', 1, 2, '0', '2019-12-28 04:10:33', '2019-12-28 04:10:33'),
(11, 'Prof. (Dr.) Motiur Rahman ', 'Molla', 'BDS, FCPS (Hons), PhD (Japan)', 1, 3, '0', '2019-12-28 04:11:14', '2019-12-28 04:11:14'),
(12, 'Dr. Jasmin', 'Manzoor', 'MBBS, DDSc (UK), MDSc (USA)', 1, 5, '0', '2019-12-28 04:11:44', '2019-12-28 04:11:44'),
(13, 'Dr. A F M ', 'Ekramuddaula', 'MBBS, FCPS (ENT), MS (Otolaryngology)', 1, 6, '0', '2019-12-28 04:12:16', '2019-12-28 04:12:16'),
(14, 'Ms. Tamanna', 'Chowdhury', 'Nutrition', 1, 12, '0', '2019-12-28 04:13:17', '2019-12-28 04:13:17'),
(15, 'Dr. Abdullah Al ', 'Mamun', 'MBBS, FCPS (Medicine)', 1, 4, '0', '2019-12-28 04:13:56', '2019-12-28 04:13:56'),
(16, 'Dr. Alim Akhtar ', 'Bhuiyan', 'MBBS, DTM & H (London, UK), MD (New York, USA), Board Certified in Neurology (USA)', 1, 7, '0', '2019-12-28 04:14:38', '2019-12-28 04:14:38'),
(17, 'Dr. Mahbubur Rahman', 'Chowdhury', 'MBBS, FCPS. Consultant Phaco Surgeon', 2, 13, '0', '2019-12-28 04:16:03', '2019-12-28 04:16:03'),
(18, 'Dr. Nandkumar ', 'Katakdhond', 'MBBS, MS (Orthopaedics), SICOT Diploma, Senior Consultant – Orthopaedics- Arthritis, Sportsortho, Joint Replacement & Shoulder Clinic', 1, 8, '0', '2019-12-28 04:16:43', '2019-12-28 04:16:43'),
(19, 'Dr. Nigar', 'Sultana', 'MBBS, MD (USA)', 1, 11, '0', '2019-12-28 04:17:51', '2019-12-28 04:17:51'),
(20, 'Dr. Chandra Prakash ', 'Dokwal', 'MBBS, MD (Chest Medicine)', 1, 9, '0', '2019-12-28 04:18:26', '2019-12-28 04:18:26'),
(21, 'Dr. M. Zahid', 'Hasan', 'MBBS, MS(Urology)', 1, 10, '0', '2019-12-28 04:19:01', '2019-12-28 04:19:01'),
(22, 'Dr. Subrata Kumar', 'Barai', 'BDS, Advanced training in Dental Surgery (India), Dental Implant (India)', 2, 3, '0', '2019-12-28 04:41:12', '2019-12-28 04:41:12'),
(23, 'Dr. Syeda Ishrat', 'Jahan', 'MBBS, DDV (SINGAPORE), MSc In Clinical Dermatology (London), MSSVD (London)', 2, 5, '0', '2019-12-28 04:41:43', '2019-12-28 04:41:43'),
(24, 'Prof. Dr. Mohammad Samiul', 'Huq', 'MBBS, DDSc (UK), MSc - Dermatology, (UK)', 2, 5, '0', '2019-12-28 04:42:06', '2019-12-28 04:42:06'),
(25, 'Dr. Pratik', 'Dewan', 'MBBS, DEM, MD (Internal Medicine), BIRDEM Academy', 2, 12, '0', '2019-12-28 04:43:11', '2019-12-28 04:43:11'),
(26, 'Dr. M. H. Shaheel', 'Mahmood', 'MBBS, FCPS, MS', 2, 6, '0', '2019-12-28 04:43:51', '2019-12-28 04:43:51'),
(27, 'Prof. Sk. Md. Bahar ', 'Hussain', ' MBBS, FCPS (Medicine), FACP (USA), FRCP (Edin), F. Gastro (Shanghai), FRCP (Glasgow)', 2, 2, '0', '2019-12-28 04:46:04', '2019-12-28 04:46:04'),
(28, 'Prof. (Dr.). Brig. Md. Delwar', 'Hossain', 'MBBS, FCPS (Medicine), FCPS (Gastroenterology)', 5, 2, '0', '2019-12-28 04:46:28', '2019-12-28 04:46:28'),
(29, 'Dr. Jahangir', 'Alam', 'MBBS (DMC), MRCP (UK), FRCP (Edin)', 2, 4, '0', '2019-12-28 04:47:16', '2019-12-28 04:47:16'),
(30, 'Prof. Dr. Md. Abu ', 'Bakar', 'MBBS, FCPS (Internal Medicine), FACP (USA), FRCP (Edin)', 4, 4, '0', '2019-12-28 04:47:40', '2019-12-28 04:47:40'),
(31, 'Dr. Sheikh Abdul ', 'Kader', 'MBBS, FCPS (Medicine), MD, (Neurology) DU', 2, 7, '0', '2019-12-28 04:48:33', '2019-12-28 04:48:33'),
(32, 'Associate Prof. Dr. Sk. Mahbub', 'Alam', 'MBBS, MD (Neurology), BSMMU Fellowship in Neuro-electrophysiology (UM,Malaysia)', 3, 7, '0', '2019-12-28 04:49:05', '2019-12-28 04:49:05'),
(33, 'Dr. Mesbah Uddin', 'Ahmed', ' MBBS, D. (Ortho), MS (Ortho)', 2, 8, '0', '2019-12-28 04:50:05', '2019-12-28 04:50:05'),
(34, 'Prof. Brig. Gen. Dr. Md. Moklesur', 'Rahman', 'MBBS, MS (Orthopedic Surgery)', 5, 8, '0', '2019-12-28 04:50:29', '2019-12-28 04:50:29'),
(35, 'Dr. Fazle Rabbi ', 'Mohammed', 'MBBS, MD (Respiratory Medicine)', 2, 9, '0', '2019-12-28 04:56:14', '2019-12-28 04:56:14'),
(36, 'Dr. N. I.', 'Bhuiyan', 'MBBS, MS (Urology), Advanced training in Urology (India, Thailand), Advanced course in Laparoscopic Urology (Taiwan)', 2, 10, '0', '2019-12-28 04:57:09', '2019-12-28 04:57:09'),
(37, 'Prof. (Dr.) Ninan ', 'Chacko', 'MBBS, MS, MCh (Urology), FRCS (Urology)', 3, 10, '0', '2019-12-28 04:57:35', '2019-12-28 04:57:35'),
(38, 'Prof. Md. Waziul Alam', 'Chowdhury', 'MBBS, FCPS (Psy)', 2, 11, '0', '2019-12-28 04:58:13', '2019-12-28 04:58:13'),
(39, 'Mrs. Sharmin', 'Haque', 'Msc, M.Phil in Clinical Psychology', 2, 11, '0', '2019-12-28 04:58:34', '2019-12-28 04:58:34'),
(40, 'Lt. Col. Dr. Md. Sajedur ', 'Rahman', 'MBBS, DO, MD, FIRL, Fellow Ratina & Laser (German), Specilized in Laser, Phaco & Vitreo Retinal Surgery', 2, 13, '0', '2019-12-28 04:59:12', '2019-12-28 04:59:12'),
(41, 'Dr. Md. Mazharul', 'Islam', 'MBBS, FCPS (Eye) Trained in Phaco, Laser & Medical Retina (BIRDEM Academy)', 5, 13, '0', '2019-12-28 04:59:33', '2019-12-28 04:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hospitalid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `isdelete` char(1) DEFAULT '0',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospitalid`, `name`, `contact`, `address`, `isdelete`, `created_at`, `updated_at`) VALUES
(1, 'Apollo Hospitals', '', 'Bashundhara R/A, Dhaka', '0', '2019-12-27 23:20:02', '2019-12-27 23:20:02'),
(2, 'Square Hospital', '', 'Panthapath, Dhaka', '0', '2019-12-27 23:20:20', '2019-12-27 23:20:20'),
(3, 'Labaid Hospital', '98029843', 'Dhanmondi, Dhaka', '0', '2019-12-28 02:27:32', '2019-12-28 02:27:32'),
(4, 'United Hospital', '10987', 'Gulshan, Dhaka', '0', '2019-12-28 02:27:47', '2019-12-28 02:27:47'),
(5, 'Popular Hospital', '1234423', 'Dhanmondi, Dhaka', '0', '2019-12-28 02:28:05', '2019-12-28 02:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewid` int(11) NOT NULL,
  `message` varchar(50) NOT NULL,
  `doctorid` int(11) NOT NULL,
  `isdelete` char(1) DEFAULT '0',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rating` int(10) UNSIGNED DEFAULT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `specid` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `isdelete` char(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`specid`, `name`, `isdelete`, `created_at`, `updated_at`) VALUES
(1, 'Cardiology', '0', '2019-12-27 17:20:56', '2019-12-27 17:20:56'),
(2, 'Gastroenterology', '0', '2019-12-27 17:21:46', '2019-12-27 17:21:46'),
(3, 'Dentistry', '0', '2019-12-27 17:21:54', '2019-12-27 17:21:54'),
(4, 'Internal Medicine', '0', '2019-12-27 17:22:00', '2019-12-27 17:22:00'),
(5, 'Dermatology', '0', '2019-12-27 20:28:54', '2019-12-27 20:28:54'),
(6, 'ENT (Ear,Nose and Throat)', '0', '2019-12-27 20:29:12', '2019-12-27 20:29:12'),
(7, 'Neurology', '0', '2019-12-27 20:29:32', '2019-12-27 20:29:32'),
(8, 'Orthopaedic', '0', '2019-12-27 20:29:59', '2019-12-27 20:29:59'),
(9, 'Respiratory Medicine', '0', '2019-12-27 20:30:06', '2019-12-27 20:30:06'),
(10, 'Urology', '0', '2019-12-27 20:30:09', '2019-12-27 20:30:09'),
(11, 'Psychiatry and Counselling', '0', '2019-12-27 20:30:51', '2019-12-27 20:30:51'),
(12, 'Diabetics and Nutrition', '0', '2019-12-27 20:31:16', '2019-12-27 20:31:16'),
(13, 'Opthalmology', '0', '2019-12-27 20:31:34', '2019-12-27 20:31:34'),
(14, 'Paediatrics', '0', '2019-12-27 20:31:42', '2019-12-27 20:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `symptomid` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL,
  `isdelete` char(1) DEFAULT '0',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `age` int(10) UNSIGNED DEFAULT NULL,
  `occupation` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `isdelete` char(1) NOT NULL DEFAULT '0',
  `verified` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `contact`, `age`, `occupation`, `weight`, `gender`, `updated_at`, `created_at`, `isdelete`, `verified`) VALUES
(1, 'Arshi', 'Siddiqui', 'arshi.siddiqui@gmail.com', 'd7217b5d7925ec0a9163d1b7a7dbb606', '24958098450', 22, 'Service', '34', 'Female', '2019-12-27 08:57:37', '2019-12-27 08:30:53', '0', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointmentid`),
  ADD UNIQUE KEY `appointmentid_UNIQUE` (`appointmentid`),
  ADD KEY `fk_appointments_doctors1_idx` (`doctorid`),
  ADD KEY `fk_appointments_users1_idx` (`userid`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`diseaseid`),
  ADD UNIQUE KEY `diseaseid_UNIQUE` (`diseaseid`),
  ADD KEY `fk_diseases_specialization1_idx` (`specid`);

--
-- Indexes for table `diseases_has_symptoms`
--
ALTER TABLE `diseases_has_symptoms`
  ADD KEY `fk_diseases_has_symptoms_diseases1_idx` (`diseaseid`),
  ADD KEY `fk_diseases_has_symptoms_symptoms1_idx` (`symptomid`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctorid`),
  ADD UNIQUE KEY `doctorid_UNIQUE` (`doctorid`),
  ADD KEY `fk_doctors_hospitals1_idx` (`hospitalid`),
  ADD KEY `fk_doctors_specialization1_idx` (`specializationid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hospitalid`),
  ADD UNIQUE KEY `hospitalid_UNIQUE` (`hospitalid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewid`),
  ADD UNIQUE KEY `reviewid_UNIQUE` (`reviewid`),
  ADD KEY `fk_reviews_doctors1_idx` (`doctorid`),
  ADD KEY `fk_reviews_users1_idx` (`userid`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`specid`),
  ADD UNIQUE KEY `specid_UNIQUE` (`specid`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`symptomid`),
  ADD UNIQUE KEY `symptomid_UNIQUE` (`symptomid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid_UNIQUE` (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `diseaseid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `hospitalid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `specid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `symptomid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `fk_appointments_doctors1` FOREIGN KEY (`doctorid`) REFERENCES `doctors` (`doctorid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_appointments_users1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `diseases`
--
ALTER TABLE `diseases`
  ADD CONSTRAINT `fk_diseases_specialization1` FOREIGN KEY (`specid`) REFERENCES `specialization` (`specid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `diseases_has_symptoms`
--
ALTER TABLE `diseases_has_symptoms`
  ADD CONSTRAINT `fk_diseases_has_symptoms_diseases1` FOREIGN KEY (`diseaseid`) REFERENCES `diseases` (`diseaseid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_diseases_has_symptoms_symptoms1` FOREIGN KEY (`symptomid`) REFERENCES `symptoms` (`symptomid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `fk_doctors_hospitals1` FOREIGN KEY (`hospitalid`) REFERENCES `hospitals` (`hospitalid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_doctors_specialization1` FOREIGN KEY (`specializationid`) REFERENCES `specialization` (`specid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_reviews_doctors1` FOREIGN KEY (`doctorid`) REFERENCES `doctors` (`doctorid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reviews_users1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
