-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2025 at 09:06 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onenewsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `text` varchar(5000) COLLATE utf8mb3_persian_ci NOT NULL,
  `imageurl` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `imageurl`) VALUES
(1, 'کاهش قیمت خودرو', 'به دلایل نامعلومی قیمت خودرو کاهش پیدا کرد. به دلایل نامعلومی قیمت خودرو کاهش پیدا کرد. به دلایل نامعلومی قیمت خودرو کاهش پیدا کرد. به دلایل نامعلومی قیمت خودرو کاهش پیدا کرد. به دلایل نامعلومی قیمت خودرو کاهش پیدا کرد. به دلایل نامعلومی قیمت خودرو کاهش پیدا کرد. به دلایل نامعلومی قیمت خودرو کاهش پیدا کرد. به دلایل نامعلومی قیمت خودرو کاهش پیدا کرد. به دلایل نامعلومی قیمت خودرو کاهش پیدا کرد. به دلایل نامعلومی قیمت خودرو کاهش پیدا کرد. ', 'images/everything-about-car-classification.jpg'),
(2, 'افزایش مسافرت ایرانیان', 'در ایام تعطیلات به مناسبتهای گوناگون چه رسمی و چه غیررسمی ایرانیان سفرهای خود را به سرعت هماهنگ کرده و عازم می شوند، مخصوصا جاده های شمال کشور.', 'images/866039_670.jpg'),
(3, 'دخانیات نایاب شد', 'پس از اعتصاب بازاریان شهر ... دخانیات کشور دچار مخاطره شد و جنس نایاب شد.', 'images/images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`) VALUES
(1, 'ali', 'ali1', '123'),
(2, 'علی', 'ali123', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
