-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2015 at 08:02 
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `grade` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade`) VALUES
('tilawah'),
('tajwid'),
('halaman1'),
('halaman2'),
('halaman3'),
('halaman4'),
('halaman5'),
('halaman6'),
('halaman7'),
('halaman8'),
('halaman9'),
('halaman10'),
('halaman11'),
('halaman12'),
('halaman13'),
('halaman14'),
('halaman15'),
('halaman16'),
('halaman17'),
('halaman18'),
('halaman19'),
('halaman20');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `nis` varchar(10) NOT NULL DEFAULT '',
  `username` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `hakakses` varchar(15) NOT NULL,
  `level` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`nis`, `username`, `nama`, `password`, `hakakses`, `level`) VALUES
('', 'admin', 'Adm ', 'qwertyui', 'superuser', '1'),
('1', 'guru', 'Guru Tahfidz', 'gurutahfidz', '', '3'),
('131407001', 'saadabdurrazaq', 'Saad Abdurrazaq', 'saadabdurrazaq', '', '2'),
('1314070023', 'utsman', 'Utsman', 'utsman', '', '2'),
('131407021', 'abdullah', 'Abdullah', 'abdullah', '', '2'),
('131407024', 'abdurrahman', 'Abdurrahman', 'abdurrahman', '', '2'),
('2', 'gurucadangan', 'Bejo ', 'bejo', '', '3'),
('31407002', 'muhammad', 'Muhammad', 'muhammad', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `kd_mhs` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(14) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(160) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`kd_mhs`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`kd_mhs`, `nim`, `nama`, `alamat`, `kelas`, `status`) VALUES
(1, '11', 'bv', 'hgtyft', 'PA', 0),
(4, '432', 'few', 'wfe', 'PB', 1),
(6, '43', 'ewro', 'efef', 'PA', 1),
(10, '12', 'asda', 'safdsasw', 'PA', 1),
(11, '15', 'sadas', 'qeqw2', 'PA', 1),
(12, '16', 'sadqw', '2eqaswdewq', 'PB', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nilaiharian`
--

CREATE TABLE IF NOT EXISTS `nilaiharian` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tilawah` int(5) NOT NULL,
  `tajwid` int(5) NOT NULL,
  `halaman1` int(5) NOT NULL,
  `halaman2` int(5) NOT NULL,
  `halaman3` int(5) NOT NULL,
  `halaman4` int(5) NOT NULL,
  `halaman5` int(5) NOT NULL,
  `halaman6` int(5) NOT NULL,
  `halaman7` int(5) NOT NULL,
  `halaman8` int(5) NOT NULL,
  `halaman9` int(5) NOT NULL,
  `halaman10` int(5) NOT NULL,
  `halaman11` int(5) NOT NULL,
  `halaman12` int(5) NOT NULL,
  `halaman13` int(5) NOT NULL,
  `halaman14` int(5) NOT NULL,
  `halaman15` int(5) NOT NULL,
  `halaman16` int(5) NOT NULL,
  `halaman17` int(5) NOT NULL,
  `halaman18` int(5) NOT NULL,
  `halaman19` int(5) NOT NULL,
  `halaman20` int(5) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilaiharian`
--

INSERT INTO `nilaiharian` (`nis`, `nama`, `tilawah`, `tajwid`, `halaman1`, `halaman2`, `halaman3`, `halaman4`, `halaman5`, `halaman6`, `halaman7`, `halaman8`, `halaman9`, `halaman10`, `halaman11`, `halaman12`, `halaman13`, `halaman14`, `halaman15`, `halaman16`, `halaman17`, `halaman18`, `halaman19`, `halaman20`) VALUES
('131407001', 'Saad Abdurrazaq', 0, 0, 90, 100, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('1314070023', 'Utsman', 0, 0, 70, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('131407021', 'Abdullah', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
