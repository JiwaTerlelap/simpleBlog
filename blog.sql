-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 06:17 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug_blog` varchar(100) NOT NULL,
  `tanggal_upp` date NOT NULL,
  `isi` varchar(20000) NOT NULL,
  `foto` varchar(20000) NOT NULL,
  `user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `judul`, `isi`) VALUES
(1, 'Tentang saya ?', '<p>saya adalah seorang pelajar di salah satu sekolah swasta yang ada di sukabumi&nbsp;<br />\r\nsaya sangat berambisi ingin menjadi full stack developer makanya tiap hari saya belajar ngoding<br />\r\nwalaupun kodingan ku bnyak error atau sering tanya tanya di google atau forum :v<br />\r\nsaya sangat menyukai hal - hal baru , apapun itu bcs hal baru bisa mengubah segala nya dalam kehidupan ku seperti dia<br />\r\nkarena dia gua berubah hwhw&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `qoutes`
--

CREATE TABLE `qoutes` (
  `id` int(11) NOT NULL,
  `isi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qoutes`
--

INSERT INTO `qoutes` (`id`, `isi`) VALUES
(1, 'BH IYAAA !1!1!1!'),
(2, 'kadang hidup itu pilihan :)'),
(3, 'Kapan nikah?');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `foto` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `umur`, `status`, `foto`) VALUES
(5, 'galeh', '5c1f8938f9d1768287ab2399ef9e9c93', '17', 'Aktif', 'e7aebfdb61026fdf569107f968a85aa2.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qoutes`
--
ALTER TABLE `qoutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `qoutes`
--
ALTER TABLE `qoutes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
