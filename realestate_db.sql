-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 06:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_role_tbl`
--

CREATE TABLE `user_role_tbl` (
  `ur_id` int(10) NOT NULL COMMENT 'User Id',
  `ur_role` varchar(10) NOT NULL COMMENT 'User Role',
  `ur_status` tinyint(4) NOT NULL COMMENT 'User Status'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role_tbl`
--

INSERT INTO `user_role_tbl` (`ur_id`, `ur_role`, `ur_status`) VALUES
(1, 'admin', 1),
(2, 'agent     ', 0),
(3, 'client', 0),
(4, 'agency', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `u_id` int(11) NOT NULL COMMENT 'User Id',
  `u_ur_id` int(11) NOT NULL COMMENT 'User Role ID',
  `u_name` varchar(30) NOT NULL COMMENT 'Name of User',
  `u_email` varchar(50) NOT NULL COMMENT 'User Email',
  `u_phone` varchar(14) NOT NULL COMMENT 'Phone Number',
  `u_username` varchar(20) NOT NULL COMMENT 'Username',
  `u_password` varchar(500) NOT NULL COMMENT 'Password',
  `u_doc` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Date of Creation',
  `u_dou` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Date of Updation',
  `u_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'User Status'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`u_id`, `u_ur_id`, `u_name`, `u_email`, `u_phone`, `u_username`, `u_password`, `u_doc`, `u_dou`, `u_status`) VALUES
(1, 1, 'Aamir', 'aamirmca38@gmail.com', '7006578293', 'amie38', '7e8c86a802c275fcb113598f5f0784f4', '2022-01-15 18:41:29', '2022-01-15 14:07:39', 1),
(2, 3, 'Zaid Javeed', 'zaidjaveed23@gmail.com', '7006768825', 'zaid23', '982b8be9db3040c31f79c0f8720a34ec', '2022-01-15 18:41:29', '2022-01-15 14:07:39', 1),
(3, 2, 'Aamir Hassan', 'aamirhassan57@gmail.com', '8494092667', 'aamirhassan57', '6afd674ac932f2188944c55870b740c4', '2022-01-15 18:46:31', '2022-01-15 14:13:18', 1),
(4, 3, 'Irfan', 'irfan35@gmail.com', '6005438442', 'irfan35', '718b84c99141527de725aeb999ea897d', '2022-01-15 18:46:31', '2022-01-15 14:13:18', 1),
(5, 0, 'Aamir Mohiuddin Malla', 'admin@admin.com', '7006578293', 'admin', '1254', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(6, 0, 'Aamir Mohiuddin Malla', 'admin@admin.com', '7006578293', 'admin', '1234', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(7, 0, 'Zaid pupin', 'zaid23@yahoo.coom', '9906112233', 'zaid23', '25547', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_role_tbl`
--
ALTER TABLE `user_role_tbl`
  ADD PRIMARY KEY (`ur_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_role_tbl`
--
ALTER TABLE `user_role_tbl`
  MODIFY `ur_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'User Id', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User Id', AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
