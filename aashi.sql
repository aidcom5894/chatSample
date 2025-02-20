-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2025 at 05:50 PM
-- Server version: 8.0.41-0ubuntu0.20.04.1
-- PHP Version: 7.4.3-4ubuntu2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aashi`
--

-- --------------------------------------------------------

--
-- Table structure for table `newfriends_list`
--

CREATE TABLE `newfriends_list` (
  `id` int NOT NULL,
  `active_username` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `active_userID` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `connecting_username` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `connecting_userID` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `connection_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_directory`
--

CREATE TABLE `users_directory` (
  `id` int NOT NULL,
  `users_name` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `users_email` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `users_contact` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `users_password` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `users_uniqueID` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_avatar` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `present_friend_status` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `present_live_status` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `enrolled_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_directory`
--

INSERT INTO `users_directory` (`id`, `users_name`, `users_email`, `users_contact`, `users_password`, `users_uniqueID`, `user_avatar`, `present_friend_status`, `present_live_status`, `enrolled_date`) VALUES
(1, 'Vivek Robin Kujur', 'robinkujur@aidcom.in', '9264453821', '$2y$10$NIaGJrcIymGIkp/PN/XoZuezCNcME6DYjiRc3sXnvi4J591EdBPK2', 'VIVICBU230', 'avatar17.png', 'Not a Friend', 'Offline', '2025-02-19 19:41:52'),
(2, 'Mehrab Alam', 'mehrabalambth@gmail.com', '9874541120', '$2y$10$nYn70YB6hqqHHEAXpIkJO.4.DlxHCpyrSwodWmlTRiyiBQqQfROeC', 'MEHABOG772', 'avatar14.png', 'Not a Friend', 'Offline', '2025-02-19 19:42:21'),
(3, 'Aniket Noel', 'elitesam2003@gmail.com', '6827732055', '$2y$10$dKZ4Jh18Y3UoBpuofm2dHO7rbyymFdDgKIzRWl0va8OPWy1GXjuCq', 'ANIVTWJ23', 'avatar1.png', 'Not a Friend', 'Offline', '2025-02-19 19:42:55'),
(4, 'Danish Siddiqui', 'danish@gmail.com', '9856543132', '$2y$10$RVnF2lsSvP4eqBHBMG7QPe6.SWtgS6UU9Dn8e6qoYpIhz82yxsqJS', 'DANAYUF552', 'avatar9.png', 'Not a Friend', 'Offline', '2025-02-19 19:44:12'),
(5, 'Vivek Sharma', 'viveksharma@gmail.com', '9974331561', '$2y$10$Zo9RH2j9r634U42o5cwaOucvZnBYPge3BUbROH2KoIlUfDkD8Pru6', 'VIVCJBO950', 'avatar16.png', 'Not a Friend', 'Offline', '2025-02-19 19:44:46'),
(6, 'Rahul Jaiswal', 'rahuljaiswal@gmail.com', '9854203320', '$2y$10$0.52Llk48dF8xav1hNlG2upmgxm3ZKfy.B48lcRmFTu4LAvqvmV/e', 'RAHKHTG325', 'avatar1.png', 'Not a Friend', 'Offline', '2025-02-19 19:45:36'),
(7, 'Chandan Jaiswal', 'chandanjaiswallove@gmail.com', '7292818092', '$2y$10$BQKON09xdE5leSw87T3QoOdIS051T7CrRpuY/pILKBWtf2yg8llGm', 'CHAMRUX620', 'avatar8.png', 'Not a Friend', 'Offline', '2025-02-19 20:33:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newfriends_list`
--
ALTER TABLE `newfriends_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_directory`
--
ALTER TABLE `users_directory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newfriends_list`
--
ALTER TABLE `newfriends_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_directory`
--
ALTER TABLE `users_directory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
