-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2025 at 10:25 PM
-- Server version: 8.0.41-0ubuntu0.22.04.1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `active_username` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active_userID` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `connecting_userID` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `connection_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newfriends_list`
--

INSERT INTO `newfriends_list` (`id`, `active_username`, `active_userID`, `connecting_userID`, `connection_Date`) VALUES
(1, 'Vivek Robin Kujur', 'VIVICBU230', 'ANIVTWJ23', '2025-02-20 16:27:09'),
(2, 'Vivek Robin Kujur', 'VIVICBU230', 'CHAMRUX620', '2025-02-20 16:29:40'),
(3, 'Vivek Robin Kujur', 'VIVICBU230', 'VIVCJBO950', '2025-02-20 16:30:29'),
(4, 'Vivek Robin Kujur', 'VIVICBU230', 'DANAYUF552', '2025-02-20 16:33:29'),
(5, 'Vivek Robin Kujur', 'VIVICBU230', 'ANIVTWJ23', '2025-02-20 16:34:31'),
(6, 'Vivek Robin Kujur', 'VIVICBU230', 'ANIVTWJ23', '2025-02-20 16:35:10'),
(7, 'Vivek Robin Kujur', 'VIVICBU230', 'VIVCJBO950', '2025-02-20 16:36:42'),
(8, 'Vivek Robin Kujur', 'VIVICBU230', 'ANIVTWJ23', '2025-02-20 16:37:46'),
(9, 'Vivek Robin Kujur', 'VIVICBU230', 'MEHABOG772', '2025-02-20 16:38:27'),
(10, 'Vivek Robin Kujur', 'VIVICBU230', 'VIVCJBO950', '2025-02-20 16:39:14'),
(11, 'Vivek Robin Kujur', 'VIVICBU230', 'DANAYUF552', '2025-02-20 16:39:36'),
(12, 'Vivek Robin Kujur', 'VIVICBU230', 'MEHABOG772', '2025-02-20 16:40:07'),
(13, 'Vivek Robin Kujur', 'VIVICBU230', 'CHAMRUX620', '2025-02-20 16:40:24'),
(14, 'Vivek Robin Kujur', 'VIVICBU230', 'MEHABOG772', '2025-02-20 16:43:01'),
(15, 'Vivek Robin Kujur', 'VIVICBU230', 'DANAYUF552', '2025-02-20 16:44:22'),
(16, 'Vivek Robin Kujur', 'VIVICBU230', 'RAHKHTG325', '2025-02-20 16:46:54'),
(17, 'Vivek Robin Kujur', 'VIVICBU230', 'VIVCJBO950', '2025-02-20 16:48:28'),
(18, 'Vivek Robin Kujur', 'VIVICBU230', 'VIVCJBO950', '2025-02-20 16:48:32'),
(19, 'Vivek Robin Kujur', 'VIVICBU230', 'VIVCJBO950', '2025-02-20 16:51:22'),
(20, 'Vivek Robin Kujur', 'VIVICBU230', 'VIVCJBO950', '2025-02-20 16:53:19'),
(21, 'Vivek Robin Kujur', 'VIVICBU230', 'MEHABOG772', '2025-02-20 16:54:21'),
(22, 'Vivek Robin Kujur', 'VIVICBU230', 'ANIVTWJ23', '2025-02-20 16:54:26');

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
(2, 'Mehrab Alam', 'mehrabalambth@gmail.com', '9874541120', '$2y$10$nYn70YB6hqqHHEAXpIkJO.4.DlxHCpyrSwodWmlTRiyiBQqQfROeC', 'MEHABOG772', 'avatar14.png', 'Friend', 'Offline', '2025-02-19 19:42:21'),
(3, 'Aniket Noel', 'elitesam2003@gmail.com', '6827732055', '$2y$10$dKZ4Jh18Y3UoBpuofm2dHO7rbyymFdDgKIzRWl0va8OPWy1GXjuCq', 'ANIVTWJ23', 'avatar1.png', 'Friend', 'Offline', '2025-02-19 19:42:55'),
(4, 'Danish Siddiqui', 'danish@gmail.com', '9856543132', '$2y$10$RVnF2lsSvP4eqBHBMG7QPe6.SWtgS6UU9Dn8e6qoYpIhz82yxsqJS', 'DANAYUF552', 'avatar9.png', 'Not a Friend', 'Offline', '2025-02-19 19:44:12'),
(5, 'Vivek Sharma', 'viveksharma@gmail.com', '9974331561', '$2y$10$Zo9RH2j9r634U42o5cwaOucvZnBYPge3BUbROH2KoIlUfDkD8Pru6', 'VIVCJBO950', 'avatar16.png', 'Friend', 'Offline', '2025-02-19 19:44:46'),
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users_directory`
--
ALTER TABLE `users_directory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
