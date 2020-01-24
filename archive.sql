-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2019 at 05:42 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `archive`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE IF NOT EXISTS `bookmark` (
  `userid` varchar(50) NOT NULL,
  `postid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`userid`, `postid`) VALUES
('soodvipnz@gmail.com', 3),
('soodvipnz@gmail.com', 7),
('kb98kb98kb@gmail.com', 2),
('kb98kb98kb@gmail.com', 6),
('malhotra.tanishq6785@gmail.com', 5),
('malhotra.tanishq6785@gmail.com', 6),
('kb98kb98kb@gmail.com', 3),
('malhotra.tanishq6785@gmail.com', 1),
('malhotra.tanishq6785@gmail.com', 8),
('malhotra.tanishq6785@gmail.com', 2),
('hsood92@gmail.com', 5),
('hsood92@gmail.com', 2),
('hsood92@gmail.com', 8),
('hsood92@gmail.com', 9),
('hsood92@gmail.com', 22),
('kb98kb98kb@gmail.com', 22),
('soodvipnz@gmail.com', 17),
('hsood92@gmail.com', 23),
('hsood92@gmail.com', 18),
('hsood92@gmail.com', 16),
('hsood92@gmail.com', 11),
('hsood92@gmail.com', 3),
('hsood92@gmail.com', 7),
('hsood92@gmail.com', 25),
('hsood92@gmail.com', 27),
('kb98kb98kb@gmail.com', 28),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0),
('hsood92@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(10) NOT NULL,
  `url` varchar(100) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `likes` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `url`, `thumbnail`, `likes`) VALUES
(1, 'gallery/1.jpg', 'gallery/xs-1.jpg ', 3),
(2, 'gallery/2.jpg', 'gallery/xs-2.jpg ', 4),
(3, 'gallery/3.jpg', 'gallery/xs-3.jpg ', 5),
(4, 'gallery/4.jpg', 'gallery/xs-4.jpg ', 4),
(5, 'gallery/5.jpg', 'gallery/xs-5.jpg ', 3),
(6, 'gallery/6.jpg', 'gallery/xs-6.jpg ', 2),
(7, 'gallery/7.jpg', 'gallery/xs-7.jpg ', 2),
(8, 'gallery/8.jpg', 'gallery/xs-8.jpg ', 2),
(9, 'gallery/9.jpg', 'gallery/xs-9.jpg ', 0),
(10, 'gallery/10.jpg', 'gallery/xs-10.jpg ', 1),
(11, 'gallery/11.jpg', 'gallery/xs-11.jpg ', 1),
(12, 'gallery/12.jpg', 'gallery/xs-12.jpg ', 0),
(13, 'gallery/13.jpg', 'gallery/xs-13.jpg ', 1),
(14, 'gallery/14.jpg', 'gallery/xs-14.jpg ', 3),
(15, 'gallery/15.jpg', 'gallery/xs-15.jpg ', 0),
(16, 'gallery/16.jpg', 'gallery/xs-16.jpg ', 1),
(17, 'gallery/17.jpg', 'gallery/xs-17.jpg ', 3),
(18, 'gallery/18.jpg', 'gallery/xs-18.jpg ', 3),
(19, 'gallery/19.jpg', 'gallery/xs-19.jpg ', 0),
(20, 'gallery/20.jpg', 'gallery/xs-20.jpg ', 1),
(21, 'gallery/21.jpg', 'gallery/xs-21.jpg ', 2),
(22, 'gallery/formbg.jpg', 'gallery/xs-formbg.jpg', 2),
(23, 'gallery/IMG_9577.jpg', 'gallery/xs-IMG_9577.jpg', 2),
(25, 'gallery/top_of_skyscraper_selfie-wallpaper-3840x2160.jpg', 'gallery/xs-top_of_skyscraper_selfie-wallpaper-3840x2160.jpg', 0),
(26, 'gallery/IMG_9474.jpg', 'gallery/xs-IMG_9474.jpg', 1),
(27, 'gallery/IMG_9728.jpg', 'gallery/xs-IMG_9728.jpg', 2),
(28, 'gallery/1253840unsplash.jpg', 'gallery/xs-1253840unsplash.jpg', 1),
(29, 'gallery/1296696unsplash.jpg', 'gallery/xs-1296696unsplash.jpg', 0),
(30, 'gallery/alena-aenami-cold-1k.jpg', 'gallery/xs-alena-aenami-cold-1k.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `likedpost`
--

CREATE TABLE IF NOT EXISTS `likedpost` (
  `userid` varchar(50) NOT NULL,
  `postid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likedpost`
--

INSERT INTO `likedpost` (`userid`, `postid`) VALUES
('kb98kb98kb@gmail.com', 1),
('kb98kb98kb@gmail.com', 3),
('kb98kb98kb@gmail.com', 4),
('kb98kb98kb@gmail.com', 5),
('Prikshitrajput1209@gmail.com', 4),
('Prikshitrajput1209@gmail.com', 3),
('Prikshitrajput1209@gmail.com', 2),
('hsood92@gmail.com', 5),
('hsood92@gmail.com', 7),
('malhotra.tanishq6785@gmail.com', 5),
('malhotra.tanishq6785@gmail.com', 2),
('hsood92@gmail.com', 3),
('kb98kb98kb@gmail.com', 2),
('hsood92@gmail.com', 6),
('smarpit@gmail.com', 1),
('smarpit@gmail.com', 2),
('smarpit@gmail.com', 3),
('smarpit@gmail.com', 4),
('soodvipnz@gmail.com', 7),
('soodvipnz@gmail.com', 3),
('malhotra.tanishq6785@gmail.com', 6),
('malhotra.tanishq6785@gmail.com', 13),
('malhotra.tanishq6785@gmail.com', 17),
('malhotra.tanishq6785@gmail.com', 18),
('malhotra.tanishq6785@gmail.com', 20),
('malhotra.tanishq6785@gmail.com', 14),
('malhotra.tanishq6785@gmail.com', 16),
('malhotra.tanishq6785@gmail.com', 11),
('malhotra.tanishq6785@gmail.com', 21),
('malhotra.tanishq6785@gmail.com', 8),
('hsood92@gmail.com', 17),
('hsood92@gmail.com', 18),
('hsood92@gmail.com', 14),
('hsood92@gmail.com', 10),
('hsood92@gmail.com', 22),
('kb98kb98kb@gmail.com', 22),
('soodvipnz@gmail.com', 17),
('hsood92@gmail.com', 23),
('hsood92@gmail.com', 27),
('kb98kb98kb@gmail.com', 27),
('kb98kb98kb@gmail.com', 26),
('kb98kb98kb@gmail.com', 28),
('kb98kb98kb@gmail.com', 23),
('kb98kb98kb@gmail.com', 18),
('kb98kb98kb@gmail.com', 14),
('hsood92@gmail.com', 4),
('hsood92@gmail.com', 1),
('hsood92@gmail.com', 21),
('hsood92@gmail.com', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `fname`, `lname`) VALUES
('ayush.wali5466@gmail.com', 'walia123', 'Ayush', 'Walia'),
('hsood92@gmail.com', 'harshit123', 'Harshit', 'Sood'),
('kb98kb98kb@gmail.com', 'kunal123', 'kunal ', 'Bhardwaj'),
('malhotra.tanishq6785@gmail.com', 'tanishq123', 'Tanishq ', 'Malhotra'),
('Prikshitrajput1209@gmail.com', 'prikshit123', 'Prikshit', 'Rajput'),
('ravi.mishra@gmail.com', 'ravi123', 'Ravi', ''),
('santa@gmail.com', 'smartpit123', 'Smarpit', 'Bhatt'),
('soodvipnz@gmail.com', 'vipin123', 'Vipin ', 'Sood');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
