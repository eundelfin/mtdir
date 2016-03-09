-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2016 at 04:28 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mountain_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `guide_list`
--

CREATE TABLE `guide_list` (
  `guide_id` int(11) NOT NULL,
  `mountain_id` int(11) NOT NULL,
  `guide_lastname` varchar(255) DEFAULT NULL,
  `guide_firstname` varchar(255) DEFAULT NULL,
  `guide_mobile` varchar(255) DEFAULT NULL,
  `guide_email` varchar(255) DEFAULT NULL,
  `guide_groupname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mountain_list`
--

CREATE TABLE `mountain_list` (
  `mountain_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `coordinates` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `masl` int(11) DEFAULT NULL,
  `difficulty_scale` varchar(255) DEFAULT NULL,
  `difficulty_class` varchar(255) DEFAULT NULL,
  `trail_class` varchar(255) DEFAULT NULL,
  `hours_to_summit` int(11) DEFAULT NULL,
  `days_required` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guide_list`
--
ALTER TABLE `guide_list`
  ADD PRIMARY KEY (`guide_id`),
  ADD KEY `fk_guideid` (`mountain_id`);

--
-- Indexes for table `mountain_list`
--
ALTER TABLE `mountain_list`
  ADD PRIMARY KEY (`mountain_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guide_list`
--
ALTER TABLE `guide_list`
  MODIFY `guide_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mountain_list`
--
ALTER TABLE `mountain_list`
  MODIFY `mountain_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `guide_list`
--
ALTER TABLE `guide_list`
  ADD CONSTRAINT `fk_guideid` FOREIGN KEY (`mountain_id`) REFERENCES `mountain_list` (`mountain_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
