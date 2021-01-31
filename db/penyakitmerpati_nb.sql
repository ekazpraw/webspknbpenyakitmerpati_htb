-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2020 at 01:52 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penyakitmerpati_nb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayes_admin`
--

CREATE TABLE IF NOT EXISTS `bayes_admin` (
  `user` varchar(16) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `level` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayes_admin`
--

INSERT INTO `bayes_admin` (`user`, `pass`, `level`) VALUES
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bayes_aturan`
--

CREATE TABLE IF NOT EXISTS `bayes_aturan` (
`ID` int(11) NOT NULL,
  `kode_penyakit` varchar(16) NOT NULL,
  `kode_gejala` varchar(16) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bayes_gejala`
--

CREATE TABLE IF NOT EXISTS `bayes_gejala` (
  `kode_gejala` varchar(16) NOT NULL,
  `nama_gejala` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bayes_penyakit`
--

CREATE TABLE IF NOT EXISTS `bayes_penyakit` (
  `kode_penyakit` varchar(16) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `bobot` double NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayes_admin`
--
ALTER TABLE `bayes_admin`
 ADD PRIMARY KEY (`user`);

--
-- Indexes for table `bayes_aturan`
--
ALTER TABLE `bayes_aturan`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bayes_gejala`
--
ALTER TABLE `bayes_gejala`
 ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `bayes_penyakit`
--
ALTER TABLE `bayes_penyakit`
 ADD PRIMARY KEY (`kode_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayes_aturan`
--
ALTER TABLE `bayes_aturan`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
