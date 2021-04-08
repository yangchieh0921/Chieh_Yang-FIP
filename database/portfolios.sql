-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 08, 2021 at 04:46 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chieh_ca`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `portfolio_name` varchar(200) NOT NULL,
  `portfolio_intro` varchar(200) NOT NULL,
  `portfolio_url` varchar(200) NOT NULL,
  `portfolio_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `portfolio_name`, `portfolio_intro`, `portfolio_url`, `portfolio_img`) VALUES
(1, 'Cinema 4D', 'SPORTSNET FOOTBALL INTRO', '', '/Chieh_Yang_mid-main/images/sportnet.jpg'),
(2, 'Sneaker Shop', 'SHOES SHOP WEBSITE', '', '/Chieh_Yang_mid-main/images/sneaker-website.png'),
(3, 'Cinema 4D', 'KIDS CHANNEL TV BUMPER', '', '/Chieh_Yang_mid-main/images/Kids-channel.jpg'),
(4, 'Makeup Poroject', 'PRODUCT SCENE BUILD & STYLEFRAMES', '', '/Chieh_Yang_mid-main/images/makeup.jpg'),
(5, 'Youtube Channel - Try It Girls', 'EDIT VIDEO, WELCOME TO SUBSCRIBE', '', '/Chieh_Yang_mid-main/images/youtube-channel.jpg'),
(6, 'COVID-19 & ME ', 'THE STORY ABOUT COVID-19 AND ME', '', '/Chieh_Yang_mid-main/images/covid19.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
