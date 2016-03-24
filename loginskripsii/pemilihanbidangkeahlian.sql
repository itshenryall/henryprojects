-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2015 at 12:45 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pemilihanbidangkeahlian`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE IF NOT EXISTS `alternatif` (
  `id_alternatif` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(55) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_alternatif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama`, `deskripsi`) VALUES
(1, 'Sistem Pendukung Keputusan', 'Metode AHP, SAW, WP, TOPSIS'),
(2, 'Kecerdasan Buatan', 'Penggunaan Metode Fuzzy Logic'),
(3, 'Sistem Klasifikasi', 'Penggunaan Metode C4.5');

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE IF NOT EXISTS `bobot` (
  `id_bobot` int(2) NOT NULL AUTO_INCREMENT,
  `b1` int(2) NOT NULL,
  `b2` int(2) NOT NULL,
  `b3` int(2) NOT NULL,
  `b4` int(2) NOT NULL,
  `b5` int(2) NOT NULL,
  `b6` int(2) NOT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`) VALUES
(1, 6, 4, 4, 3, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `isi`) VALUES
(1, '<p>Dalam Memilih Materi Untuk Skripsi sangatlah tidak mudah, harus memiliki banyak pertimbangan agar sesuai dengan kemampuan mahasiswa yang akan mengambilnya. dengan adanya aplikasi spk pemilihan bidang keahlian untuk materi skripsi ini diharapkan dapat mempermudah mahasiswa dalam menemukan solusi materi apa yang tepat dan sesuai dengan kemampuan yang dimilikinya, sehingga pada nantinya akan lebih mudah dalam menyelesaikan skripsi yang diambilnya.</p>'),
(2, '<p>Dalam Memilih Materi Untuk Skripsi sangatlah tidak mudah, harus memiliki banyak pertimbangan agar sesuai dengan kemampuan mahasiswa yang akan mengambilnya. dengan adanya aplikasi spk pemilihan bidang keahlian untuk materi skripsi ini diharapkan dapat mempermudah mahasiswa dalam menemukan solusi materi apa yang tepat dan sesuai dengan kemampuan yang dimilikinya, sehingga pada nantinya akan lebih mudah dalam menyelesaikan skripsi yang diambilnya.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(5) NOT NULL AUTO_INCREMENT,
  `c1` varchar(30) NOT NULL,
  `c2` varchar(30) NOT NULL,
  `c3` varchar(30) NOT NULL,
  `c4` varchar(30) NOT NULL,
  `c5` varchar(30) NOT NULL,
  `c6` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`) VALUES
(1, 'nilai', 'skill (praktek)', 'teori', 'minat', 'pemilih bidang', 'tingkat kesulitan');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE IF NOT EXISTS `penilaian` (
  `id_nilai` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nama` varchar(55) NOT NULL,
  `deskripsi` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `nilai` int(5) NOT NULL,
  `skill` int(5) NOT NULL,
  `teori` int(5) NOT NULL,
  `minat` int(5) NOT NULL,
  `pemilih_bidang` int(5) NOT NULL,
  `tingkat_kesulitan` int(5) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_nilai`, `username`, `nama`, `deskripsi`, `nilai`, `skill`, `teori`, `minat`, `pemilih_bidang`, `tingkat_kesulitan`, `jumlah`) VALUES
(84, 'dadan gunawan', 'Sistem Pendukung Keputusan', '', 11, 11, 11, 11, 11, 11, 0.1069),
(85, 'dadan gunawan', 'Kecerdasan Buatan', '', 22, 22, 22, 22, 22, 22, 0.2137),
(86, 'dadan gunawan', 'Sistem Klasifikasi', '', 66, 77, 66, 77, 66, 77, 0.6794),
(87, 'albajili hidayat', 'Sistem Pendukung Keputusan', '', 11, 11, 11, 11, 11, 11, 0.0532),
(88, 'albajili hidayat', 'Kecerdasan Buatan', '', 98, 89, 89, 88, 98, 89, 0.1064);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(20) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
('2011141993', 'albajili hidayat', 'albajili', 'user'),
('2011121425', 'dadan gunawan', 'dadan', 'user'),
('2011141534', 'henry gunawan', 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
