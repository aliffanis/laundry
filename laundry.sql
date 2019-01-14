-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 12:08 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`user_id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`) VALUES
(1, 'mario', 'mario'),
(3, 'sobi', 'sobi'),
(4, 'ayi', 'ayi'),
(5, 'didi', '123'),
(6, 'pablo', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
`user_id` int(11) NOT NULL,
  `jns` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `telp` int(15) NOT NULL,
  `tgl1` varchar(20) NOT NULL,
  `tgl2` varchar(20) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `rtrw` varchar(15) NOT NULL,
  `kel` varchar(25) NOT NULL,
  `kab` varchar(25) NOT NULL,
  `prov` varchar(25) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `user_pass` varchar(35) NOT NULL,
  `kg` float(11,0) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`user_id`, `jns`, `nama`, `telp`, `tgl1`, `tgl2`, `alamat`, `rtrw`, `kel`, `kab`, `prov`, `jk`, `user_pass`, `kg`) VALUES
(9, 'Cuci Basah', 'icha ardini', 89355433, '31-Januari-2018', '20-Desember-2018', 'gading', '889', 'gading', 'kendal', 'jateng', 'Wanita', 'kun', 5),
(10, 'Cuci Setrika', 'budi', 98653, '29-Januari-2018', '18-Desember-2018', 'boja', '4/5', 'tampingan', 'semarang', 'jateng', 'Pria', 'mario', 5),
(11, 'Cuci Kering', 'monaroh', 44444, '26-Januari-2018', '18-Desember-2018', 'klereng', '9/8', 'suko', 'sda', 'jatim', 'Wanita', 'mona', 3),
(12, 'Cuci Setrika', 'Kunarso', 6554432, '12-Desember-2018', '', 'gading', '9/8', '', '', '', 'Pria', '999', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(5, 'ayi', 'ayi'),
(6, 'kun', 'kun'),
(21, 'rosid', 'u'),
(22, 'yuni', 'v'),
(23, 'roni', 'b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `username` (`username`), ADD FULLTEXT KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
