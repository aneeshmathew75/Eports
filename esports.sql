-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 10:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esports`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `userid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `full_name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `street` varchar(60) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zipcode` int(20) DEFAULT NULL,
  `valorant_id` varchar(20) DEFAULT NULL,
  `counter_id` varchar(20) DEFAULT NULL,
  `fortnite_id` varchar(20) DEFAULT NULL,
  `fifa_id` varchar(30) DEFAULT NULL,
  `discord` varchar(60) DEFAULT NULL,
  `youtube` varchar(60) DEFAULT NULL,
  `twitch` varchar(60) DEFAULT NULL,
  `facebook` varchar(60) DEFAULT NULL,
  `about` varchar(60) DEFAULT NULL,
  `website_url` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`userid`, `name`, `mail`, `password`, `full_name`, `email`, `phone`, `street`, `city`, `state`, `zipcode`, `valorant_id`, `counter_id`, `fortnite_id`, `fifa_id`, `discord`, `youtube`, `twitch`, `facebook`, `about`, `website_url`) VALUES
(18, 'aneesh', '19CS801005@kristujayanti.com', '222', 'Aneesh Mathew', '19CS801005@kristujay', 9799735855, 'jodhpur', 'Rajasthan', 'RAJASTHAN', 306401, 'Godzilla#1001', 'GH1PCQ11', '0192261', 'GH620#1000', 'http://localhost/Eports/playerprofile/index.php', 'http://localhost/Eports/playerprofile/index.php', 'http://localhost/Eports/playerprofile/index.php', 'http://localhost/Eports/playerprofile/index.php', 'Player Valorant in Valorant :)', 'http://localhost/Eports/playerprofile/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `team_reg`
--

CREATE TABLE `team_reg` (
  `teamid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `teamname` varchar(30) NOT NULL,
  `tournament_name` varchar(30) NOT NULL,
  `player1` varchar(30) NOT NULL,
  `valorant_1` varchar(30) NOT NULL,
  `player2` varchar(30) NOT NULL,
  `valorant_2` varchar(30) NOT NULL,
  `player3` varchar(30) NOT NULL,
  `valorant_3` varchar(30) NOT NULL,
  `player4` varchar(30) NOT NULL,
  `valorant_4` varchar(30) NOT NULL,
  `player5` varchar(30) NOT NULL,
  `valorant_5` varchar(30) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `reg_fee` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tour_reg`
--

CREATE TABLE `tour_reg` (
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(20) NOT NULL,
  `prize_money` int(11) NOT NULL,
  `reg_fee` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `hosted_by` varchar(20) NOT NULL,
  `cat` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `team_reg`
--
ALTER TABLE `team_reg`
  ADD PRIMARY KEY (`teamid`);

--
-- Indexes for table `tour_reg`
--
ALTER TABLE `tour_reg`
  ADD PRIMARY KEY (`tour_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `team_reg`
--
ALTER TABLE `team_reg`
  MODIFY `teamid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tour_reg`
--
ALTER TABLE `tour_reg`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
