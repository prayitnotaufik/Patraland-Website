-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 09:58 AM
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
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id_about` int(11) NOT NULL,
  `image` longtext NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id_about`, `image`, `title`, `description`) VALUES
(1, 'slide-5.jpg', 'Patraland Place (Hunian Berkelas di Lokasi Strategis)', 'PT. Patraland Griya Madani Development menawarkan sebuah hunian pilihan \r\nyang sangat sesuai untuk Anda yang ingin setiap saat menikmati keindahan\r\n dan kesejukan kota Malang. Perumahan Patraland adalah proyek perumahan \r\ndengan pemilihan lokasi yang sangat strategis, dan telah melalui \r\npertimbangan yang matang demi kepuasan penghuninya. PT. Patraland Griya \r\nMadani Development menawarkan sebuah hunian pilihan yang sangat sesuai \r\nuntuk Anda yang ingin setiap saat menikmati keindahan dan kesejukan kota\r\n Malang. Perumahan Patraland adalah proyek perumahan dengan pemilihan \r\nlokasi yang sangat strategis, dan telah melalui pertimbangan yang matang\r\n demi kepuasan penghuninya.PT. Patraland Griya Madani Development \r\nmenawarkan sebuah hunian pilihan yang sangat sesuai untuk Anda yang \r\ningin setiap saat menikmati keindahan dan kesejukan kota Malang. \r\nPerumahan Patraland adalah proyek perumahan dengan pemilihan lokasi yang\r\n sangat strategis, dan telah melalui pertimbangan yang matang demi \r\nkepuasan penghuninya.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_about_proyek`
--

CREATE TABLE `tb_about_proyek` (
  `id_about_proyek` int(11) NOT NULL,
  `image` mediumtext NOT NULL,
  `title` mediumtext NOT NULL,
  `description` longtext NOT NULL,
  `category` varchar(255) NOT NULL,
  `content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_about_proyek`
--

INSERT INTO `tb_about_proyek` (`id_about_proyek`, `image`, `title`, `description`, `category`, `content_id`) VALUES
(1, '24012020070559.jpg', 'Lokasi Strategis', 'Lokasi ini strategis sekali karena berdekatan dengan Yonkes, Kampus ITN, Pasar karangploso dan lain-lain', 'Garden', 1),
(2, '24012020070623.jpg', 'View Gunung Fuji', 'Pemandangan disini cukup indah karena terlihat ada gunung ketika anda melihat sebuah kaca belakang rumah', 'Garden', 2),
(3, '24012020070612.jpg', 'Akses Jalan Mudah', 'Dibuatnya akses jalan besar memungkinkan penghuni bisa merasakan kenyamanan saat berkendara di sekitar hunian ini', 'Garden', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id_banner` int(11) NOT NULL,
  `image` mediumtext NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_banner`
--

INSERT INTO `tb_banner` (`id_banner`, `image`, `category`) VALUES
(1, '21012020092042.jpg', 'Garden'),
(2, 'banner-garden.jpg', 'Kencana');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blok`
--

CREATE TABLE `tb_blok` (
  `id_blok` int(11) NOT NULL,
  `siteplan` varchar(255) NOT NULL,
  `name_blok` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_blok`
--

INSERT INTO `tb_blok` (`id_blok`, `siteplan`, `name_blok`, `category`) VALUES
(1, 'asoka.png', 'Asoka', 'Garden'),
(2, 'aster.png', 'Aster', 'Garden'),
(3, 'camelia.png', 'Camelia', 'Garden'),
(4, 'edelweis.png', 'Edelweis', 'Garden'),
(5, 'lavender.png', 'Lavender', 'Garden'),
(6, 'magnolia.png', 'Magnolia', 'Garden'),
(7, 'rosela.png', 'Rosela', 'Garden'),
(8, 'sakura.png', 'Sakura', 'Garden'),
(9, 'tulip.png', 'Tulip', 'Garden'),
(10, 'blok-d.png', 'Blok-D', 'Garden'),
(11, '29012020030506.png', 'Krisan', 'Garden');

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
-- Table structure for table `tb_contact_proyek`
--

CREATE TABLE `tb_contact_proyek` (
  `id_contact_proyek` int(11) NOT NULL,
  `instagram` mediumtext NOT NULL,
  `facebook` longtext NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `location` mediumtext NOT NULL,
  `maps` longtext NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_contact_proyek`
--

INSERT INTO `tb_contact_proyek` (`id_contact_proyek`, `instagram`, `facebook`, `whatsapp`, `email`, `telephone`, `location`, `maps`, `category`) VALUES
(1, 'patralands', 'https://www.facebook.com/PT-Patraland-Griya-Madani-876849345684720/', '081234461688', 'pt.patralandgriyamadani@gmail.com', '(0341) 488489', 'Jl Candi Panggung Barat no 3a Kota Malang ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7903.6268152364155!2d112.614533!3d-7.914551!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881fc7bf3a3b9%3A0xcad5da6cf7d0fcaa!2sPatra%20Garden%2C%20Kedawung%2C%20Ngijo%2C%20Kec.%20Karang%20Ploso%2C%20Malang%2C%20Jawa%20Timur%2065152!5e0!3m2!1sen!2sid!4v1580093293263!5m2!1sen!2sid\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', 'Garden');

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
(25, '17012020072016.jpg', '2', '', ''),
(26, '17012020072030.jpg', '2', '', ''),
(27, '17012020072054.jpg', '2', '', ''),
(28, '17012020072423.jpg', '2', 'Type 45', ''),
(29, '17012020072500.jpg', '2', 'Type 45', ''),
(30, '17012020072516.jpg', '2', 'Type 45', ''),
(31, '17012020072610.jpg', '2', 'Type 45', ''),
(32, '17012020084916.jpg', '2', 'Type 40', ''),
(33, '17012020084931.jpg', '2', 'Type 40', ''),
(34, '17012020084946.jpg', '2', 'Type 40', ''),
(36, '17012020085228.jpg', '2', 'Type 48', '2 Lantai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_home`
--

CREATE TABLE `tb_home` (
  `id_home` int(11) NOT NULL,
  `quotes` longtext NOT NULL,
  `k1` varchar(255) NOT NULL,
  `desc1` mediumtext NOT NULL,
  `k2` varchar(255) NOT NULL,
  `desc2` mediumtext NOT NULL,
  `k3` varchar(255) NOT NULL,
  `desc3` mediumtext NOT NULL,
  `k4` varchar(255) NOT NULL,
  `desc4` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_home`
--

INSERT INTO `tb_home` (`id_home`, `quotes`, `k1`, `desc1`, `k2`, `desc2`, `k3`, `desc3`, `k4`, `desc4`) VALUES
(1, 'Berdiri sejak awal tahun 2011, PT Patraland Griya Madani Development mampu membuktikan komitmen untuk pantang menyerah demi mewujudkan sebuah perumahan dengan banyak nilai plus di dalamnya seperti lokasi strategis, harga bersaing, fasilitas lengkap, dan sebagainya', 'Siap Bangun Rumah', 'Kami siap membangun rumah sesaat setelah pembelian sudah berlangsung saat ini', 'Diskon Puluhan Juta', 'Dapatkan potongan harga spesial selama masa promo hingga 30%.', '1 Gate & CCTV System', 'Diharapkan penghuni Patraland dapat merasakan kenyamanan tanpa mengkhawatirkan sistem keamanan lingkungan.', 'Free Semua Pajak', 'Bebas PPN, BPHTB, Notaris, AJB dan Balik Nama, PLN, Air Bersih, dan Taman Depan Kavling.');

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
(3, 'Muhammad Taufik Prayitno', 'taufikprayitno16@gmail.com', 'sdf', 'sdfsdf');

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
(1, 'ei33.jpg', 'Rumah Modifikasi Ei-33', 'Patraland', '09 / 01 / 2020', 'Published', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(2, '18012020031619DSC00187.JPG', 'Proses bangun rumah 2 lantai', 'admin', '18 / 01 / 2020', 'Published', '<p>Proses bangun disini butuh waktu lama yakni sekitar 4 bulan. Setelah pengerjaan selesai baru dilakukan proses pengecatan dan lain-lain.<br></p>');

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
(4, '09012020075506placeholderslider1280x600.jpg', 'Kencana Residence', 'Nilai Keharmonisan Hunian dan Alam'),
(5, '16012020051315slide-3.jpg', 'Griya Madani', 'Harmonis dan Asri');

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
(3, '140120200753439.jpg', 'M. Topek', 'Magang', '', '', '', ''),
(4, '1601202005255210.jpg', 'Alice', 'Officer', '', '', '', ''),
(5, '160120200712358.jpg', 'Rohiyan', 'Admintrasi', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_type`
--

CREATE TABLE `tb_type` (
  `id_type` int(11) NOT NULL,
  `image` mediumtext NOT NULL,
  `type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_type`
--

INSERT INTO `tb_type` (`id_type`, `image`, `type`, `category`) VALUES
(1, '23012020073429.jpg', '36', 'Garden'),
(2, '23012020094909.jpg', '40', 'Garden'),
(3, '23012020095135.jpg', '45', 'Garden'),
(4, '23012020095153.jpg', '54', 'Garden'),
(5, '23012020095202.jpg', '48*', 'Garden'),
(6, '23012020095211.jpg', '54*', 'Garden'),
(7, '23012020095221.jpg', '70*', 'Garden');

-- --------------------------------------------------------

--
-- Table structure for table `tb_unit_blok`
--

CREATE TABLE `tb_unit_blok` (
  `id_unit_blok` int(11) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `type` varchar(15) NOT NULL,
  `lt_b` varchar(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id_blok` int(11) NOT NULL,
  `category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_unit_blok`
--

INSERT INTO `tb_unit_blok` (`id_unit_blok`, `unit`, `type`, `lt_b`, `status`, `id_blok`, `category`) VALUES
(1, '1', '36', '9mx12m/56m', 'Tersedia', 1, 'Garden'),
(5, '3', '40', '6mx12m/5m', 'Tersedia', 1, 'Garden'),
(6, '1', '45', 'wdqwd', 'Tersedia', 3, 'Garden');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `tb_about_proyek`
--
ALTER TABLE `tb_about_proyek`
  ADD PRIMARY KEY (`id_about_proyek`);

--
-- Indexes for table `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `tb_blok`
--
ALTER TABLE `tb_blok`
  ADD PRIMARY KEY (`id_blok`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tb_contact_proyek`
--
ALTER TABLE `tb_contact_proyek`
  ADD PRIMARY KEY (`id_contact_proyek`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tb_home`
--
ALTER TABLE `tb_home`
  ADD PRIMARY KEY (`id_home`);

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
-- Indexes for table `tb_type`
--
ALTER TABLE `tb_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `tb_unit_blok`
--
ALTER TABLE `tb_unit_blok`
  ADD PRIMARY KEY (`id_unit_blok`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_about_proyek`
--
ALTER TABLE `tb_about_proyek`
  MODIFY `id_about_proyek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_blok`
--
ALTER TABLE `tb_blok`
  MODIFY `id_blok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_contact_proyek`
--
ALTER TABLE `tb_contact_proyek`
  MODIFY `id_contact_proyek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_home`
--
ALTER TABLE `tb_home`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id_message` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_team`
--
ALTER TABLE `tb_team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_type`
--
ALTER TABLE `tb_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_unit_blok`
--
ALTER TABLE `tb_unit_blok`
  MODIFY `id_unit_blok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
