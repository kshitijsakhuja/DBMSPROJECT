-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 09:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL,
  `logout` varchar(255) DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_email`, `password`, `updationDate`, `logout`) VALUES
(1, 'admin', 'Test@12345', '30-10-2022 11:42:05 AM', '2024-03-29 13:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) DEFAULT NULL,
  `doctorId` int(11) DEFAULT NULL,
  `doctor` varchar(255) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `consultancyFees` int(11) DEFAULT NULL,
  `appointmentDate` varchar(255) DEFAULT NULL,
  `appointmentTime` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `userStatus` int(11) DEFAULT NULL,
  `doctorStatus` int(11) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `doctor`, `userId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
(1, 'ENT', 1, '', 1, 500, '2022-11-10', '12:45 PM', '2022-11-06 12:21:48', 1, 0, '2022-11-06 12:23:35'),
(2, 'ENT', 1, '', 2, 500, '2022-11-17', '7:00 PM', '2022-11-06 13:16:18', 1, 1, NULL),
(5, 'dermatology', NULL, 'dr-jones', NULL, 0, '2024-03-28', '03:18', '2024-03-21 05:48:57', NULL, NULL, NULL),
(6, 'cardiology', NULL, 'dr-jones', NULL, 0, '2024-03-15', '01:00', '2024-03-27 17:27:43', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `docFees` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specialization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'ENT', 'Anuj kumar', 'A 123 XYZ Apartment Raj Nagar Ext Ghaziabad', '500', 142536250, 'anujk123@test.com', 'f925916e2754e5e03f75dd58a5733251', '2022-10-30 18:16:52', '2022-11-06 13:20:17'),
(2, 'Endocrinologists', 'Charu Dua', 'X 1212 ABC Apartment Laxmi Nagar New Delhi ', '800', 1231231230, 'charudua12@test.com', 'f925916e2754e5e03f75dd58a5733251', '2022-11-04 01:06:41', NULL),
(5, 'Gastroenterology', 'Kshitij Sakhuja ', 'hhhhh', '200', 1234567890, 'edwin123@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-03-22 18:15:23', NULL),
(8, 'Endocrinology', 'Anu Sakhuja', 'Chandrapura', '500', 7479471568, 'anusakhuja63@gmail.com', 'c1a1d871614700095d39681cbb291103', '2024-03-29 08:04:22', '2024-03-29 08:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `doctorslog`
--

CREATE TABLE `doctorslog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctorslog`
--

INSERT INTO `doctorslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(20, NULL, 'gfdgdf', 0x3a3a3100000000000000000000000000, '2022-11-04 01:02:16', NULL, 0),
(21, 2, 'charudua12@test.com', 0x3a3a3100000000000000000000000000, '2022-11-06 11:59:40', '06-11-2022 05:35:18 PM', 1),
(22, 2, 'charudua12@test.com', 0x3a3a3100000000000000000000000000, '2022-11-06 12:06:37', '06-11-2022 05:36:40 PM', 1),
(23, 2, 'charudua12@test.com', 0x3a3a3100000000000000000000000000, '2022-11-06 12:08:56', '06-11-2022 05:42:53 PM', 1),
(24, 1, 'anujk123@test.com', 0x3a3a3100000000000000000000000000, '2022-11-06 12:23:18', '06-11-2022 05:53:40 PM', 1),
(25, 2, 'charudua12@test.com', 0x3a3a3100000000000000000000000000, '2022-11-06 13:16:53', '06-11-2022 06:47:07 PM', 1),
(26, 1, 'anujk123@test.com', 0x3a3a3100000000000000000000000000, '2022-11-06 13:17:33', '06-11-2022 06:50:28 PM', 1),
(27, 1, 'anujk123@test.com', 0x3a3a3100000000000000000000000000, '2024-02-23 09:21:28', NULL, 1),
(28, NULL, 'anujk123@test.com', 0x3a3a3100000000000000000000000000, '2024-02-23 09:39:43', NULL, 0),
(29, 1, 'anujk123@test.com', 0x3a3a3100000000000000000000000000, '2024-02-23 09:40:06', NULL, 1),
(30, NULL, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-03-09 05:45:52', NULL, 0),
(31, NULL, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-03-09 05:46:08', NULL, 0),
(32, NULL, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-03-09 05:51:05', NULL, 0),
(33, NULL, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-03-09 05:51:44', NULL, 0),
(34, 1, 'anujk123@test.com', 0x3a3a3100000000000000000000000000, '2024-03-09 06:00:04', '09-03-2024 12:10:49 PM', 1),
(35, 1, 'anujk123@test.com', 0x3a3a3100000000000000000000000000, '2024-03-09 06:41:07', NULL, 1),
(36, 1, 'anujk123@test.com', 0x3a3a3100000000000000000000000000, '2024-03-09 15:21:14', NULL, 1),
(37, 1, 'anujk123@test.com', 0x3a3a3100000000000000000000000000, '2024-03-10 12:39:45', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specialization`, `creationDate`, `updationDate`) VALUES
(1, 'Orthopedics', '2022-10-30 18:09:46', NULL),
(2, 'Internal Medicine', '2022-10-30 18:09:57', NULL),
(3, 'Obstetrics and Gynecology', '2022-10-30 18:10:18', NULL),
(4, 'Dermatology', '2022-10-30 18:10:28', NULL),
(5, 'Pediatrics', '2022-10-30 18:10:37', NULL),
(6, 'Radiology', '2022-10-30 18:10:46', NULL),
(7, 'General Surgery', '2022-10-30 18:10:56', NULL),
(8, 'Ophthalmology', '2022-10-30 18:11:03', NULL),
(9, 'Anesthesia', '2022-10-30 18:11:15', NULL),
(10, 'Pathology', '2022-10-30 18:11:22', NULL),
(11, 'ENT', '2022-10-30 18:11:30', NULL),
(12, 'Dental Care', '2022-10-30 18:11:39', NULL),
(13, 'Dermatologists', '2022-10-30 18:12:02', NULL),
(14, 'Endocrinologists', '2022-10-30 18:12:10', NULL),
(15, 'Neurologists', '2022-10-30 18:12:30', NULL),
(19, 'Physician ', '2024-03-29 08:07:03', '2024-03-29 08:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcontactus`
--

INSERT INTO `tblcontactus` (`id`, `firstname`, `lastname`, `email`, `contactno`, `subject`, `message`, `PostingDate`, `LastupdationDate`) VALUES
(1, '', '', 'anujk30@test.com', 1425362514, '', 'This is for testing purposes.   This is for testing purposes.This is for testing purposes.This is for testing purposes.This is for testing purposes.This is for testing purposes.This is for testing purposes.This is for testing purposes.This is for testing purposes.', '2022-10-30 16:52:03', NULL),
(2, '', '', 'ak@gmail.com', 1111122233, '', 'This is for testing', '2022-11-06 13:13:41', '2022-11-06 13:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicalhistory`
--

CREATE TABLE `tblmedicalhistory` (
  `ID` int(10) NOT NULL,
  `PatientID` int(10) NOT NULL,
  `BloodPressure` varchar(200) DEFAULT NULL,
  `BloodSugar` varchar(200) NOT NULL,
  `Weight` varchar(100) DEFAULT NULL,
  `Temperature` varchar(200) DEFAULT NULL,
  `MedicalPres` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblmedicalhistory`
--

INSERT INTO `tblmedicalhistory` (`ID`, `PatientID`, `BloodPressure`, `BloodSugar`, `Weight`, `Temperature`, `MedicalPres`, `CreationDate`) VALUES
(1, 1, '80/120', '120', '85', '98', 'Test', '2022-11-06 13:19:41'),
(5, 0, '52', '65', '26', '54', 'this is test ', '2024-03-18 21:23:00'),
(6, 0, '100', '85', '101', '54', 'Test', '2024-03-27 10:30:00'),
(7, 0, '100', '85', '65', '101', 'TESTING ', '2024-03-21 17:29:00'),
(8, 0, '40', '88', '60', '85', 'TESING COMING ON', '2024-03-11 08:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT current_timestamp(),
  `OpenningTime` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `OpenningTime`) VALUES
(1, 'aboutus', 'About Us', '<ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 1.313em; margin-left: 1.655em;\" times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" center;=\"\" background-color:=\"\" rgb(255,=\"\" 246,=\"\" 246);\"=\"\"><li style=\"text-align: left;\"><font color=\"#000000\">The Hospital Management System (HMS) is designed for Any Hospital to replace their existing manual, paper based system. The new system is to control the following information; patient information, room availability, staff and operating room schedules, and patient invoices. These services are to be provided in an efficient, cost effective manner, with the goal of reducing the time and resources currently required for such tasks.</font></li><li style=\"text-align: left;\"><font color=\"#000000\">A significant part of the operation of any hospital involves the acquisition, management and timely retrieval of great volumes of information. This information typically involves; patient personal information and medical history, staff information, room and ward scheduling, staff scheduling, operating theater scheduling and various facilities waiting lists. All of this information must be managed in an efficient and cost wise fashion so that an institution\'s resources may be effectively utilized HMS will automate the management of the hospital making it more efficient and error free. It aims at standardizing data, consolidating data ensuring data integrity and reducing inconsistencies.&nbsp;</font></li></ul>', NULL, NULL, '2020-05-20 07:21:52', NULL),
(2, 'contactus', 'Contact Details', 'D-204, Hole Town South West, Delhi-110096,India', 'info@gmail.com', 1122334455, '2020-05-20 07:24:07', '9 am To 8 Pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `ID` int(10) NOT NULL,
  `Docid` int(10) DEFAULT NULL,
  `PatientName` varchar(200) DEFAULT NULL,
  `PatientContno` bigint(10) DEFAULT NULL,
  `PatientEmail` varchar(200) DEFAULT NULL,
  `PatientGender` varchar(50) DEFAULT NULL,
  `PatientAdd` mediumtext DEFAULT NULL,
  `PatientAge` int(10) DEFAULT NULL,
  `PatientMedhis` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`ID`, `Docid`, `PatientName`, `PatientContno`, `PatientEmail`, `PatientGender`, `PatientAdd`, `PatientAge`, `PatientMedhis`, `CreationDate`, `UpdationDate`) VALUES
(1, 1, 'Amit Kumar', 1231231230, 'amitk@gmail.com', 'male', 'New Delhi india', 35, 'NA', '2022-11-06 13:18:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 1, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2022-11-06 12:14:11', NULL, 1),
(2, 1, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2022-11-06 12:21:20', '06-11-2022 05:53:00 PM', 1),
(3, NULL, 'amitk@gmail.com', 0x3a3a3100000000000000000000000000, '2022-11-06 13:15:43', NULL, 0),
(4, 2, 'amitk@gmail.com', 0x3a3a3100000000000000000000000000, '2022-11-06 13:15:58', '06-11-2022 06:50:46 PM', 1),
(5, 1, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-02-23 13:40:09', '23-02-2024 07:13:00 PM', 1),
(6, 1, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-02-23 14:46:39', NULL, 1),
(7, 1, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-02-23 17:10:03', '23-02-2024 10:50:13 PM', 1),
(8, 1, 'johndoe12@test.com', NULL, '2024-03-26 07:10:23', NULL, NULL),
(9, 9, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-03-26 07:20:07', NULL, NULL),
(10, 0, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-03-26 07:24:58', '2024-03-26 12:54:58', NULL),
(11, 0, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-03-26 12:12:48', '2024-03-26 17:42:48', NULL),
(12, 158, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-03-26 12:18:14', '2024-03-26 17:48:14', NULL),
(13, 0, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-03-27 04:36:17', '2024-03-27 10:06:17', NULL),
(14, 0, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-03-27 04:38:08', NULL, NULL),
(15, 0, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-03-27 04:44:52', NULL, NULL),
(16, 0, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-03-27 04:46:38', NULL, NULL),
(17, 0, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-03-27 04:49:16', NULL, NULL),
(18, 210, 'johndoe12@test.com', 0x3a3a3100000000000000000000000000, '2024-03-28 14:06:26', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(1, 'John Doe', 'A 123 ABC Apartment GZB 201017', 'Ghaziabad', 'male', 'johndoe12@test.com', 'f925916e2754e5e03f75dd58a5733251', '2022-11-06 12:13:56', NULL),
(2, 'Amit kumar', 'new Delhi india', 'New Delhi', 'male', 'amitk@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2022-11-06 13:15:32', NULL),
(5, 'Kshitij Sakhuja', 'BENGALURU, KARNATAKA', 'Bangalore ', 'Male', 'kartik123@gmail.com', 'e99a18c428cb38d5f260853678922e03', '2024-03-19 10:04:23', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorslog`
--
ALTER TABLE `doctorslog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctorslog`
--
ALTER TABLE `doctorslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
