-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 05:02 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sjcp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `images_folder_link` varchar(100) CHARACTER SET utf8 COLLATE utf8_latvian_ci DEFAULT NULL,
  `title` varchar(30) CHARACTER SET utf8 COLLATE utf8_latvian_ci DEFAULT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_latvian_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `users_id`, `images_folder_link`, `title`, `text`) VALUES
(33, 51, 'images/Jellyfish.jpg', 'Tests nr. 2', 'Test numur 2'),
(32, 51, 'images/Hydrangeas.jpg', 'Maz cÅ«ciÅ†', 'Å eit dzÄ«vo maz cÅ«ciÅ† apaÄ¼a. Maz CÅ«ciÅ† apaÄ¼a. MAZ CÅªCIÅ… APAÄ»A!\r\n\r\nMaz cÅ«ciÅ† Garda tÄ!'),
(31, 1, 'images/Desert.jpg', 'KÄ izskatÄs divas rindas?', 'adadakdakjd,kmahdjkad'),
(30, 1, 'images/Desert.jpg', 'Mani piedzÄ«vojumi Ä€frikÄ', 'Es ieguvu Ä¼oti daudz un daÅ¾Ädu pieredzi! Vienu lietu, ko es ieguvu ir Ebola!');

-- --------------------------------------------------------

--
-- Table structure for table `travel_groups`
--

CREATE TABLE `travel_groups` (
  `id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `description` varchar(512) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_groups`
--

INSERT INTO `travel_groups` (`id`, `country`, `place`, `description`, `start_date`, `end_date`, `price`) VALUES
(1, 'asd', 'asd', 'asd', '2019-05-17', '2019-05-09', 123),
(2, 'qwe', 'qwe', 'qweqwqe', '2019-05-17', '2019-05-26', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `howOften` varchar(50) DEFAULT NULL,
  `lastVisited` varchar(50) DEFAULT NULL,
  `wantVisit` varchar(50) DEFAULT NULL,
  `interests` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`, `email`, `name`, `surname`, `date`, `gender`, `howOften`, `lastVisited`, `wantVisit`, `interests`) VALUES
(4, 'admin', 'admin', 'admin', 'admin@admin.com', 'Admins', 'Admins', '', '', '0', 'No', 'No', ''),
(5, 'user101', 'user', 'user', '', '', '', '', '', '0', 'No', 'No', ''),
(15, 'asd', 'asd', 'user', 'asd', 'asd', 'asd', '06/11/2019', 'Male', '1', 'Azerbaijan', 'Bangladesh', 'asd'),
(50, 'qwe', 'qwe', 'user', 'qwe', 'qwe', 'qwe', '06/14/2019', 'Male', NULL, NULL, NULL, NULL),
(51, 'admah', '12345', 'user', 'lofdardum@gmail.com', 'Tersteris', 'Testutris', '09/13/1998', 'Male', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `travel_groups`
--
ALTER TABLE `travel_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `travel_groups`
--
ALTER TABLE `travel_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
