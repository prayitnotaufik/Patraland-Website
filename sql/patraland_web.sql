-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 09:21 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patraland_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id_contact` int(11) NOT NULL,
  `lokasi` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `maps` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id_contact`, `lokasi`, `email`, `telp`, `maps`) VALUES
(1, 'Jl. Candi Panggung Bar. No.3a, Mojolangu,\r\nKec. Lowokwaru, Kota Malang, Jawa Timur 65143', 'mail@example.com', '(0341) 488489', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.6134462468017!2d112.61464261428439!3d-7.935377994284005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788208dabed68f%3A0xc6aff25df0f92357!2sPT.%20Patraland!5e0!3m2!1sid!2sid!4v1578285560952!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id_gallery` int(11) NOT NULL,
  `image` longtext NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`id_gallery`, `image`, `category`, `title`, `caption`) VALUES
(7, '11012020044055IMG_20200108_123913.jpg', '1', '', ''),
(8, '11012020044101IMG_20200108_123913.jpg', '1', '', ''),
(9, '11012020044106IMG_20200108_123913.jpg', '1', '', ''),
(17, '11012020044442DSC00241.JPG', '1', '', ''),
(18, '11012020044451DSC00241.JPG', '1', '', ''),
(19, '11012020044456DSC00241.JPG', '1', '', ''),
(20, '11012020044503IMG_20200108_123913.jpg', '1', '', ''),
(21, '11012020044508IMG_20200108_123913.jpg', '1', '', ''),
(22, '11012020044513IMG_20200108_123913.jpg', '1', '', ''),
(23, '11012020044817IMG_20200108_123913.jpg', '2', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_message`
--

CREATE TABLE `tb_message` (
  `id_message` int(55) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_message`
--

INSERT INTO `tb_message` (`id_message`, `name`, `email`, `website`, `message`) VALUES
(1, 'Muhammad Taufik Prayitno', 'taufikprayitno16@gmail.com', 'facebook.com', 'kkmk'),
(2, 'Muhammad Taufik Prayitno', 'test@gmail.com', 'facebook.com', 'mlmlml'),
(3, 'Muhammad Taufik Prayitno', 'taufikprayitno16@gmail.com', 'sdf', 'sdfsdf'),
(4, 'Muhammad Taufik Prayitno', 'taufikprayitno16@gmail.com', 'sdf', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `id_news` int(11) NOT NULL,
  `image` mediumtext NOT NULL,
  `title` mediumtext NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`id_news`, `image`, `title`, `author`, `date`, `status`, `description`) VALUES
(1, 'ei33.jpg', 'Rumah Modifikasi Ei-33', 'Patraland', '09 / 01 / 2020', 'Published', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int(11) NOT NULL,
  `image` longtext NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `image`, `title`, `caption`) VALUES
(4, '09012020075506placeholderslider1280x600.jpg', 'Kencana Residence', 'Nilai Keharmonisan Hunian dan Alam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_team`
--

CREATE TABLE `tb_team` (
  `id_team` int(11) NOT NULL,
  `photo` longtext NOT NULL,
  `name` text NOT NULL,
  `position` text NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `instagram` varchar(300) NOT NULL,
  `facebook` longtext NOT NULL,
  `twitter` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_team`
--

INSERT INTO `tb_team` (`id_team`, `photo`, `name`, `position`, `whatsapp`, `instagram`, `facebook`, `twitter`) VALUES
(1, '6.jpg', 'Ray White', 'Marketing Officer', '6282137899966', 'nurhidayats', '', ''),
(2, '140120200537088.jpg', 'Toyo Ta', 'Marketing Coordinator', '6281237899966', '', 'https://facebook.com/Nurhidayat.Aldila', ''),
(3, '140120200753439.jpg', 'M. Topek', 'Magang', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_message`
--
ALTER TABLE `tb_message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `tb_team`
--
ALTER TABLE `tb_team`
  ADD PRIMARY KEY (`id_team`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id_message` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_team`
--
ALTER TABLE `tb_team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
