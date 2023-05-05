-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2023 at 10:56 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms-nazma-office-codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(1, 'nazmaoffice', '$2y$10$vD04zjip4eKE9AAqvoDuTe21.Jx/427E5f9CfbXPavB0pKQfF/kHa', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `slug` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `content` text NOT NULL,
  `tag` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `photo`, `date`, `slug`, `title`, `content`, `tag`) VALUES
(5, 'Web_capture_6-3-2023_135317_phppasswordhash.com.jpeg', '2023-03-18', 'test-test-test', 'test test test ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed viverra ipsum nunc aliquet. Vestibulum lectus mauris ultrices eros in cursus. Auctor elit sed vulputate mi sit amet mauris commodo quis. Vulputate mi sit amet mauris commodo. Dolor magna eget est lorem ipsum dolor. Cum sociis natoque penatibus et. Urna id volutpat lacus laoreet non curabitur. Urna duis convallis convallis tellus id. Ultricies mi eget mauris pharetra et ultrices neque ornare aenean.</p>\r\n\r\n<p>Id venenatis a condimentum vitae sapien pellentesque habitant morbi tristique. Vulputate dignissim suspendisse in est ante in nibh mauris cursus. Orci phasellus egestas tellus rutrum tellus. At volutpat diam ut venenatis tellus in metus vulputate eu. Ut etiam sit amet nisl purus in. Pharetra massa massa ultricies mi quis hendrerit dolor magna eget. Sem integer vitae justo eget. Ipsum consequat nisl vel pretium lectus quam id leo. Magna sit amet purus gravida quis. Pulvinar pellentesque habitant morbi tristique senectus et. Enim lobortis scelerisque fermentum dui. Vitae auctor eu augue ut lectus. In nibh mauris cursus mattis molestie a. At in tellus integer feugiat scelerisque. Pulvinar neque laoreet suspendisse interdum consectetur libero. Amet justo donec enim diam vulputate ut pharetra. Porttitor leo a diam sollicitudin tempor id eu. In eu mi bibendum neque egestas congue. Risus in hendrerit gravida rutrum quisque non. Pretium nibh ipsum consequat nisl vel pretium lectus.</p>\r\n\r\n<p>Ut ornare lectus sit amet est placerat in egestas. Bibendum enim facilisis gravida neque convallis a cras. Praesent tristique magna sit amet purus gravida quis blandit. Nisi lacus sed viverra tellus in hac habitasse. Proin sagittis nisl rhoncus mattis. Amet consectetur adipiscing elit duis tristique. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt vitae. Lectus arcu bibendum at varius vel pharetra vel turpis. A condimentum vitae sapien pellentesque habitant morbi tristique. Tellus id interdum velit laoreet. Duis at tellus at urna condimentum. Magna etiam tempor orci eu lobortis. Aliquet enim tortor at auctor urna nunc id cursus metus. Enim blandit volutpat maecenas volutpat blandit aliquam etiam.</p>', 'lorem | ipsum | dolor | amet '),
(6, 'vuejs14.jpg', '2023-03-19', 'test', 'test', 'test', 'test'),
(7, 'vuejs15.jpg', '2023-03-17', 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `certifiedtrainers`
--

CREATE TABLE `certifiedtrainers` (
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `departement` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certifiedtrainers`
--

INSERT INTO `certifiedtrainers` (`id`, `photo`, `name`, `departement`) VALUES
(1, 'profil18.jpg', 'Muhammad Afifudin', 'Staff IT'),
(2, 'profil19.jpg', 'Muhammad Afifudin', 'Staff IT'),
(3, 'profil110.jpg', 'Muhammad Afifudin', 'Staff IT'),
(4, 'profil111.jpg', 'Muhammad Afifudin', 'Staff IT');

-- --------------------------------------------------------

--
-- Table structure for table `creativecrew`
--

CREATE TABLE `creativecrew` (
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `departement` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creativecrew`
--

INSERT INTO `creativecrew` (`id`, `photo`, `name`, `departement`) VALUES
(1, 'profil18.jpg', 'Muhammad Afifudin', 'Staff IT'),
(2, 'profil19.jpg', 'Muhammad Afifudin', 'Staff IT'),
(3, 'profil110.jpg', 'Muhammad Afifudin', 'Staff IT'),
(4, 'profil111.jpg', 'Muhammad Afifudin', 'Staff IT');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL,
  `location` varchar(300) NOT NULL,
  `price` varchar(300) NOT NULL,
  `contributor` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `photo`, `title`, `time`, `location`, `price`, `contributor`, `link`) VALUES
(4, 'design_grafis_5_11.jpg', 'Pelatihan Pembuatan Logo dan Company Profile', 'Kamis, 23 Februari 2023, 08.00 WIB', 'Kabupaten Sleman, Daerah Istimewa Yogyakarta', 'Start at 2000k', 'NaZMa Office', 'https://linktr.ee/nazma_office'),
(5, 'design_grafis_5_12.jpg', 'Pelatihan Pembuatan Logo dan Company Profile', 'Kamis, 23 Februari 2023, 08.00 WIB', 'Kabupaten Sleman, Daerah Istimewa Yogyakarta', 'Start at 2000k', 'NaZMa Office', 'https://linktr.ee/nazma_office'),
(6, 'design_grafis_5_13.jpg', 'Pelatihan Pembuatan Logo dan Company Profile', 'Kamis, 23 Februari 2023, 08.00 WIB', 'Kabupaten Sleman, Daerah Istimewa Yogyakarta', 'Start at 2000k', 'NaZMa Office', 'https://linktr.ee/nazma_office'),
(7, 'design_grafis_5_14.jpg', 'Pelatihan Pembuatan Logo dan Company Profile', 'Kamis, 23 Februari 2023, 08.00 WIB', 'Kabupaten Sleman, Daerah Istimewa Yogyakarta', 'Start at 2000k', 'NaZMa Office', 'https://linktr.ee/nazma_office');

-- --------------------------------------------------------

--
-- Table structure for table `partnership`
--

CREATE TABLE `partnership` (
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `departement` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partnership`
--

INSERT INTO `partnership` (`id`, `photo`, `name`, `departement`) VALUES
(1, 'logoukmindonesia1.jpg', 'UMKM INDONESIA', 'Usaha'),
(2, 'ukm_indonesia_21.jpg', 'UMKM INDONESIA', 'Usaha'),
(3, 'ukm_indonesia_11.jpg', 'UMKM INDONESIA', 'Usaha'),
(4, 'umkmnaikkelas1.jpg', 'UMKM INDONESIA', 'Usaha'),
(5, 'logo_amikom1.jpg', 'UNIVERSITAS AMIKOM YOGYAKARTA', 'Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `location` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `photo`, `title`, `description`, `date`, `location`) VALUES
(1, 'design_grafis_2.jpg', 'Bimtek Pemasaran Digital Marketing', 'Tim NaZMa mengisi salah satu pelatihan bagi UMKM di wilayah Yogyakarta yang dihadiri 100 peserta yang menghadirkan materi digital marketing guna memaksimalkan pemasaran di era digital', '2023-02-28', 'Kabupaten Sleman, Yogyakarta'),
(2, 'design_grafis_21.jpg', 'Bimtek Pemasaran Digital Marketing', 'Tim NaZMa mengisi salah satu pelatihan bagi UMKM di wilayah Yogyakarta yang dihadiri 100 peserta yang menghadirkan materi digital marketing guna memaksimalkan pemasaran di era digital', '2023-02-28', 'Kabupaten Sleman, Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`id`, `photo`, `name`, `description`) VALUES
(1, 'profil1.jpg', 'Muhammad Afifudin', ' \"Tim IT NaZMa sangat responsif dan selalu siap membantu kami dengan pertanyaan atau masalah yang kami miliki. Kami sangat merekomendasikan layanan IT mereka\"'),
(2, 'profil11.jpg', 'Muhammad Afifudin', ' \"Tim IT NaZMa sangat responsif dan selalu siap membantu kami dengan pertanyaan atau masalah yang kami miliki. Kami sangat merekomendasikan layanan IT mereka\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certifiedtrainers`
--
ALTER TABLE `certifiedtrainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creativecrew`
--
ALTER TABLE `creativecrew`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnership`
--
ALTER TABLE `partnership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `certifiedtrainers`
--
ALTER TABLE `certifiedtrainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `creativecrew`
--
ALTER TABLE `creativecrew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `partnership`
--
ALTER TABLE `partnership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
