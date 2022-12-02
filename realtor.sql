-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 02, 2022 at 08:43 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realtor`
--

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` bigint(20) NOT NULL,
  `property_name` varchar(150) NOT NULL,
  `property_classification` varchar(20) NOT NULL COMMENT 'residential, commercial, industrial, or agricultural',
  `description` text NOT NULL,
  `land_area` float NOT NULL,
  `agent_id` bigint(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date_posted` datetime NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `property_address`
--

CREATE TABLE `property_address` (
  `id` bigint(20) NOT NULL,
  `property_id` bigint(20) NOT NULL,
  `street` text NOT NULL,
  `province` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `barangay` varchar(200) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `property_image`
--

CREATE TABLE `property_image` (
  `id` bigint(20) NOT NULL,
  `property_id` bigint(20) NOT NULL,
  `image` text NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `property_price`
--

CREATE TABLE `property_price` (
  `id` bigint(20) NOT NULL,
  `property_id` bigint(20) NOT NULL,
  `start_price` float NOT NULL,
  `end_price` float NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `middle_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(4) NOT NULL,
  `street` varchar(250) NOT NULL,
  `province` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `barangay` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(250) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `middle_name`, `last_name`, `birthdate`, `age`, `street`, `province`, `city`, `barangay`, `email`, `phone`, `username`, `password`, `last_updated`) VALUES
(4, 'PENELOPE', 'Doe', 'GUINESS', '2021-12-01', 1, 'Santan', 'davaodelsur', 'davaocity', 'poblacion', 'john.doe@gmail.com', '+639999999999', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', '2022-12-01 07:37:28'),
(5, 'PENELOPE', 'Doe', 'GUINESS', '2022-12-01', 0, 'Santan', 'davaodelsur', 'Davao City', 'poblacion', 'penelope@gmail.com', '+639999999998', 'admin3', 'c93ccd78b2076528346216b3b2f701e6', '2022-12-01 08:50:37'),
(6, 'Jose', 'Ibarra', 'Rizal', '1980-12-30', 42, 'Santan', 'davaodelsur', 'tagumcity', 'poblacion', 'penelope_1@gmail.com', '+63 999 999 9998', 'penelope', '5f4dcc3b5aa765d61d8327deb882cf99', '2022-12-02 02:12:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `property_address`
--
ALTER TABLE `property_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `property_image`
--
ALTER TABLE `property_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_image_ibfk_1` (`property_id`);

--
-- Indexes for table `property_price`
--
ALTER TABLE `property_price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_address`
--
ALTER TABLE `property_address`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_image`
--
ALTER TABLE `property_image`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_price`
--
ALTER TABLE `property_price`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `registration` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `property_address`
--
ALTER TABLE `property_address`
  ADD CONSTRAINT `property_address_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property_image`
--
ALTER TABLE `property_image`
  ADD CONSTRAINT `property_image_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property_price`
--
ALTER TABLE `property_price`
  ADD CONSTRAINT `property_price_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
