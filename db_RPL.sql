-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2018 at 09:40 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pendaftaran_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE IF NOT EXISTS `calon_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `sekolah_asal` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(12, 'My love', 'm', 'laki-laki', 'Islam', 'SMAN 3 bekasi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
