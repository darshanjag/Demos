-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2019 at 04:49 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Demos`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `first_name`, `last_name`, `email`, `birthdate`, `added`) VALUES
(1, 'Brielle', 'O\'Hara', 'alexandre67@example.com\r\n	', '1974-05-21', '1999-09-17 13:47:28'),
(2, 'Flavio', 'Lehner', 'mafalda85@example.net', '1971-10-14', '1998-09-08 18:55:06'),
(3, 'Elmira', 'Johns', 'wellington52@example.org', '1983-11-28', '2015-02-07 10:26:43'),
(4, 'Elza', 'Mitchell', 'marisol46@example.org', '1989-03-08', '1992-08-20 18:51:39'),
(5, 'Viva', 'Greenfelder', 'era94@example.com', '1995-04-17', '2017-04-30 00:25:39'),
(6, 'Maxwell', 'VonRueden', 'mcassin@example.net', '1994-07-01', '1996-05-08 18:00:14'),
(7, 'Deontae', 'Becker', 'rory.kub@example.org', '1992-02-19', '2017-07-22 06:19:15'),
(8, 'Sylvester', 'Christiansen', 'erohan@example.org', '1990-09-03', '2004-05-08 02:45:37'),
(9, 'Torrey', 'Strosin', 'adams.luciano@example.net', '1999-10-09', '2009-08-30 16:00:44'),
(10, 'Kelli', 'Smitham', 'daniel.catalina@example.com', '2012-11-07', '1986-01-22 15:22:57'),
(11, 'Abigale', 'Schuppe', 'andreanne.hayes@example.net', '2018-02-18', '1994-05-07 00:56:36'),
(12, 'Letha', 'Gleason', 'eldridge.heaney@example.net', '2009-02-06', '1998-05-24 23:07:54'),
(13, 'Sienna', 'Upton', 'monique57@example.org', '2017-08-17', '2009-08-08 13:38:10'),
(14, 'Harley', 'Gutkowski', 'breilly@example.net', '1987-11-30', '1998-07-31 05:38:01'),
(15, 'Lois', 'Bednar', 'hpouros@example.net', '2002-02-11', '2001-07-26 09:34:16'),
(16, 'Gail', 'McDermott', 'reina.kerluke@example.com', '1987-03-30', '2004-12-15 15:08:29'),
(17, 'Sydney', 'Strosin', 'dweber@example.net', '1985-04-29', '2010-08-07 03:20:35'),
(18, 'Anne', 'Cremin', 'fritz.schmitt@example.com', '1976-02-15', '1980-03-24 23:59:41'),
(19, 'Norberto', 'Bergnaum', 'franecki.javon@example.net', '1971-03-11', '1993-03-20 18:06:25'),
(20, 'Arvid', 'Johns', 'pschultz@example.org', '2016-01-03', '1995-04-30 11:37:15'),
(21, 'Bernita', 'Fay', 'arne96@example.org', '1983-12-26', '1987-02-23 11:25:28'),
(22, 'Gonzalo', 'Gorczany', 'velma.huels@example.com', '1987-10-19', '2016-10-18 13:55:46'),
(23, 'Jackie', 'Klein', 'gretchen.howe@example.com', '1971-01-20', '2010-11-15 21:28:05'),
(24, 'Andrew', 'Kessler', 'collins.faye@example.org', '1984-08-07', '1971-12-15 03:16:42'),
(25, 'Claire', 'Hudson', 'madalyn.wunsch@example.org', '1984-12-19', '1991-07-04 09:05:53'),
(26, 'Prudence', 'Runte', 'koch.laurie@example.net', '2008-12-27', '1985-09-29 23:27:55'),
(27, 'Destinee', 'Romaguera', 'tromp.tiffany@example.com', '1978-11-09', '1997-11-09 14:28:08'),
(28, 'Marianna', 'Harvey', 'clovis.schuppe@example.com', '2013-08-28', '1990-08-06 13:59:19'),
(29, 'Eloy', 'Lakin', 'wmorissette@example.net', '1989-12-08', '1974-03-15 21:51:16'),
(30, 'Rubie', 'McClure', 'haley.louisa@example.net', '1987-09-12', '1998-07-02 05:15:36'),
(31, 'Marisa', 'Stracke', 'zachary76@example.org', '1975-05-28', '1975-03-18 19:27:35'),
(32, 'Jacey', 'Beatty', 'dahlia.hermann@example.org', '1979-12-17', '1971-01-21 11:20:58'),
(33, 'Idella', 'Ruecker', 'elda.reichert@example.com', '2009-09-15', '1996-04-19 16:57:31'),
(34, 'Dimitri', 'Bednar', 'freida.parker@example.org', '1998-12-02', '2008-12-30 17:59:57'),
(35, 'Elfrieda', 'Smitham', 'padberg.rex@example.org', '2018-07-23', '1972-04-01 02:22:25'),
(36, 'Dwight', 'Walter', 'gmosciski@example.org', '2016-08-15', '1994-07-02 05:36:55'),
(37, 'Macie', 'Fay', 'uschuppe@example.net', '1976-01-29', '2005-12-13 13:14:46'),
(38, 'Lori', 'Kshlerin', 'mhansen@example.net', '1983-04-08', '1986-01-18 10:33:52'),
(39, 'Jeffry', 'Paucek', 'alisha35@example.net', '2002-10-02', '2004-03-29 01:36:03'),
(40, 'Yvonne', 'Bernhard', 'jaqueline21@example.net', '2017-11-04', '1986-12-15 18:25:23'),
(41, 'Ludwig', 'Heathcote', 'marcelino.kirlin@example.org', '1981-02-09', '2000-08-02 15:15:48'),
(42, 'Jadyn', 'Wiegand', 'georgianna.swift@example.net', '1982-06-16', '1980-12-05 07:39:37'),
(43, 'Ferne', 'Smitham', 'melany22@example.com', '1996-12-17', '1984-11-18 13:56:27'),
(44, 'Meta', 'Corkery', 'xharber@example.com', '1972-03-31', '2007-01-19 18:37:31'),
(45, 'Toni', 'Wolf', 'wyman.crystal@example.org', '2012-04-15', '1973-06-22 06:44:37'),
(46, 'Zack', 'Luettgen', 'deion.konopelski@example.org', '2003-05-29', '2018-11-18 23:33:21'),
(47, 'Kameron', 'Dietrich', 'ronaldo.torphy@example.com', '1973-05-20', '1974-09-16 14:57:17'),
(48, 'Zetta', 'Lebsack', 'timmothy.vandervort@example.com', '1996-11-04', '2001-03-05 20:03:01'),
(49, 'Benny', 'Hane', 'leone.lueilwitz@example.net', '2008-02-02', '2006-01-27 16:42:39'),
(50, 'Evans', 'Gleason', 'ccummerata@example.org', '1999-09-09', '1990-09-26 12:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `excel_export`
--

CREATE TABLE `excel_export` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excel_export`
--

INSERT INTO `excel_export` (`id`, `firstname`, `lastname`, `email`) VALUES
(1, 'Rasmus', 'Lerdorf', 'php@gmail.com'),
(2, 'Brendan ', 'Eich', 'Javascript@gmail.com'),
(3, 'Ryan', 'Dahl', 'node@gmail.com'),
(4, 'James', 'Gosling', 'java@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `excel_import`
--

CREATE TABLE `excel_import` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excel_import`
--

INSERT INTO `excel_import` (`id`, `firstname`, `lastname`, `email`) VALUES
(1, 'Rasmus', 'Lerdorf', 'php@gmail.com'),
(2, 'Brendan ', 'Eich', 'Javascript@gmail.com'),
(3, 'Ryan', 'Dahl', 'node@gmail.com'),
(4, 'James', 'Gosling', 'java@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login_logout`
--

CREATE TABLE `login_logout` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_logout`
--

INSERT INTO `login_logout` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `firstname`, `lastname`, `email`, `mobile`) VALUES
(22, 'darshan', 'darshan', 'asdf', 'asdfasdf'),
(25, 'darshan j', 'sdfsdf', 'asdfsaf@gmail.com', 'sdfsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `excel_export`
--
ALTER TABLE `excel_export`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excel_import`
--
ALTER TABLE `excel_import`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_logout`
--
ALTER TABLE `login_logout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `excel_export`
--
ALTER TABLE `excel_export`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `excel_import`
--
ALTER TABLE `excel_import`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_logout`
--
ALTER TABLE `login_logout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
