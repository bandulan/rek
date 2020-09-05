-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2020 at 07:09 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reklame`
--

-- --------------------------------------------------------

--
-- Table structure for table `biiboard`
--

CREATE TABLE `biiboard` (
  `id_billboard` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tanggal_pasang` date NOT NULL,
  `tanggal_ex` date NOT NULL,
  `npwp` varchar(128) NOT NULL,
  `penyewa` varchar(128) NOT NULL,
  `biro` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `id_pemilik` int(8) NOT NULL,
  `nama_lok` varchar(128) NOT NULL,
  `alamat_lok` varchar(128) NOT NULL,
  `lat` varchar(128) NOT NULL,
  `lng` varchar(128) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `id_pemilik`, `nama_lok`, `alamat_lok`, `lat`, `lng`, `status`) VALUES
(2, 18, 'Fantastic Reklame\r\n', 'Jalan Teratai 2, Lubuk Baja Kota', '1.1383103', '104.0111468', 0),
(3, 18, 'Asia Reklame\r\n', 'Jl. Komp. Dian Centre, Batu Selicin', '1.1481149', '104.0188441', 0),
(9, 12, 'tes', 'tes', '', '', 0),
(10, 0, 'asd', 'asd', '', '', 0),
(11, 0, 'aaa', 'aaa', '', '', 0),
(12, 15, 'a', 'a', '', '', 0),
(13, 19, 'tes', 'tos', '', '', 0),
(14, 15, 'nama lokasi', 'alamat lokasi', '', '', 0),
(15, 20, 'NOMER 2', 'DUA DUA', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reklame`
--

CREATE TABLE `reklame` (
  `id_reklame` int(32) NOT NULL,
  `id_lokasi` int(32) NOT NULL,
  `id_penyewa` int(32) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `nama_iklan` varchar(128) NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reklame`
--

INSERT INTO `reklame` (`id_reklame`, `id_lokasi`, `id_penyewa`, `alamat`, `nama_iklan`, `start`, `end`) VALUES
(1, 15, 20, '0', 'billboard shampo', '2020-09-03', NULL),
(2, 12, 15, '0', 'iklan sampo', '2020-09-03', NULL),
(3, 12, 15, '0', 'asd', '2020-09-03', '2020-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`, `alamat`, `phone`, `foto`, `level`) VALUES
(1, 'domo', '123', 'Sudomo Sudirman Sanjaya', 'Jl. Sunset Road No. 100 X, Kerobokan', '80361', 'default.jpg', 0),
(2, 'Susanti ', '123', 'Cinta Susanti Gunawan', 'Jl. Hayam Wuruk 20 Kediri, 64121', '64121', 'default.jpg', 0),
(3, 'Sudirman ', '123', 'Sudomo Sudirman Kartawijaya', 'Jl Maulana Yusuf 8', '03177', 'default.jpg', 0),
(4, 'Widya ', '123', 'Dian Widya Salim', 'Jl Margorejo Indah Bl B/107,Margorejo', '17127', 'default.jpg', 0),
(5, 'asd', 'asd', '', '', '', '', 0),
(6, 'asdd', 'asdd', '', '', '', '', 0),
(7, 'tss', '$2y$10$RBaDAOBOC4Taz9pHKtqJe.UHxe2wVOwUg7EgIT3vP/eJ5KYEGH3uu', '', '', '', '', 0),
(8, 'qqq', '$2y$10$imAcKIwfrN6oJ.Dl5Heh5e2gig/MISbNXarxXyE./N3O.asifqnYC', '', '', '', '', 1),
(9, 'asdasd', '$2y$10$kISo5WmSS1zbE0NPFdvGG.NNeLiXFBqqzJLmVqkMFNfz2vXh84W.2', '', '', '', '', 1),
(10, 'reza', '$2y$10$Bhv2aeGxTjwXbjLArucZX.n.tlQRzeV1nGc/1Z4hy/YQzyFji24jm', 'rezaaaaa', '', '', '', 1),
(11, 'mantap', '$2y$10$jhlA/hOCe/zJdXlDwbUu0ekJROguxnRzPfNejMIlIYx25Ivc6hjU6', 'gan', '', '', 'default.png', 1),
(12, 'admin', '$2y$10$.gxeBwcvCap6Px/.nzfzz.l1/XgVzC8IPhuEskSwq.QBbcLImmnKu', 'admin', '', '', 'default.png', 0),
(13, 'qwe', '$2y$10$Fc2Saxc1s13WTjn6ByxdfeyaljJbAfoQWxDpzAnIHaH2uTd0s0j9y', '', '', '', '', 1),
(14, 'qq', '$2y$10$iYbeYakfM3AJhJ4VyX3QreJolgVmxNlJEtpwqEGX4Jbxd80j/xNYy', '', '', '', 'default.png', 1),
(15, '1', '$2y$10$AbO4/uHnjWxKjHBTurgbuO686gsjNZGdTZXFGpiDkbrzTzJPpoLHu', 'Cinta Susanti Gunawan', '', '', 'default.png', 1),
(16, '111', '$2y$10$52O24lMGzed56jHCgXqu4uH8bS4IRcv/SjjM.XyP/OBo7o2LGzb/6', 'Sudomo Sudirman Sanjaya', 'Jl Margorejo Indah Bl B/107,Margorejo', '', 'default.png', 1),
(17, '2@email', '$2y$10$5ayrLg8PRqkYWPZaZYZQO.g7MVpnbr.75bgD6VmZYt6XW4QUec8tS', 'Sudomo Sudirman Kartawijaya', 'Jl Maulana Yusuf 8', '0812323232', 'default.png', 1),
(18, 'email1', '$2y$10$1916R/gojUKpquYSkWrrs.zZCRxrToazRgAa7YKz/hgQEDRFo.Pcu', 'satu', '', '1', 'default.png', 1),
(19, 'tes', '$2y$10$UGeM1YoOvGHhnf2fu91mtefFxyfsa9vl6p.XTeMUtqCXdcC6nzpYi', 'tes', '', 'tes', 'default.png', 1),
(20, '2', '$2y$10$HY24gZs/KyplqZWc77ny/OPPo25hIljWyAOMZkEMPdLoweXc.LPju', '2', '', '2', 'default.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biiboard`
--
ALTER TABLE `biiboard`
  ADD PRIMARY KEY (`id_billboard`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `reklame`
--
ALTER TABLE `reklame`
  ADD PRIMARY KEY (`id_reklame`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biiboard`
--
ALTER TABLE `biiboard`
  MODIFY `id_billboard` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reklame`
--
ALTER TABLE `reklame`
  MODIFY `id_reklame` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
