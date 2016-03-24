-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2015 at 10:30 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pemilihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(5) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE IF NOT EXISTS `bobot` (
`id_bobot` int(2) NOT NULL,
  `b1` int(2) NOT NULL,
  `b2` int(2) NOT NULL,
  `b3` int(2) NOT NULL,
  `b4` int(2) NOT NULL,
  `b5` int(2) NOT NULL,
  `b6` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`) VALUES
(1, 6, 5, 3, 4, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`id` int(2) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `isi`) VALUES
(1, 'Keteladanan guru adalah suatu perbuatan atau tingkah laku yang baik, yang patut ditiru oleh anak didik yang dilakukan oleh seorang guru didalam tugasnya sebagai pendidik, baik tutur kata ataupun perbuatannya yang dapat diterapkan dalam kehidupan sehari-hari oleh murid, baik di lingkungan sekolah maupun di lingkungan masyarakat.'),
(2, 'Pembuatan Sistem ini bertujuan untuk melakukan pemilihan guru teladan, yang akan menjadi contoh yang baik untuk guru lain.\r\n\r\nDalam melakukan pemilihan ini, akan dimasukan bebrapa kriteria yang dinilai nantinya, yaitu:\r\n\r\n1. Kehadiran\r\nKehadiran disini adalah absensi, dimana guru dinilai dari datang atau masuk ke sekolah.\r\n\r\n2. Prestasi\r\nPencapaiaan seorang guru terhadap materi yang telah diajarkan, dalam hal lomba atau semacamnya.\r\n\r\n3. Penguasaan Materi\r\nSeorang guru yang baik akan menguasai materi yang akan diberikan kepada anak didiknya, tanpa terlalu bergantung terhadap buku.\r\n\r\n4. Loyalitas\r\natau tanggung jawab terhadap pekerjaan yang diamanatkan kepada seorang guru.\r\n\r\n5. Prilaku\r\nSikap atau kelakuan yang dicerminkan oleh seorang guru.\r\n\r\n6. Cara Mengajar\r\nKriteria ini menilai bagaimanakah guru mengajar anak didiknya. ');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
`id_guru` int(5) NOT NULL,
  `nuptk` varchar(16) DEFAULT NULL,
  `nama` varchar(55) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nuptk`, `nama`, `gender`, `alamat`) VALUES
(1, '6035757859200023', 'Abdul Azis, S.Pd.I', 'Laki-laki', 'Bogor'),
(2, NULL, 'Ahmad Fathoni, S.Ag', 'Laki-laki', 'Bogor'),
(3, '5035758659200023', 'Ahmad Rivai, S.Pd.I', 'Laki-laki', 'Bogor'),
(4, '0964975265400016', 'Asepuddin, S.Pd.I', 'Laki-laki', 'bogor'),
(5, '2534743646200033', 'Atang Suganda, S.Sos', 'Laki-laki', 'Bogor'),
(6, '0950763666200012', 'Bangbang Bahtiar, S.Pd.I', 'Laki-laki', 'bogor'),
(7, NULL, 'Budi Setiawan, S.Pd', 'Laki-laki', 'Bogor'),
(8, '0458758660300083', 'Dahlia, SE.I', 'Perempuan', 'Bogor'),
(9, NULL, 'Dede Hidayat, S.Pd.I', 'Laki-laki', 'Bogor'),
(10, '8137743644200043', 'Dedi Herdadi, S.H', 'Laki-laki', 'Bogor'),
(11, '1857757659200032', 'Dori Hidayat, S.Pd.I', 'Laki-laki', 'Bogor'),
(12, '9434748651200032', 'Imam Jarkasih, S.Ag', 'Laki-laki', 'Bogor'),
(13, '1243758659300030', 'Irna Wardhini, S.S', 'Perempuan', 'Bogor'),
(14, '2353756657200010', 'Irwan Mawardian, S.E', 'Laki-laki', 'Bogor'),
(15, '3050762663300100', 'Ismahayati, S.Pd', 'Perempuan', 'Jakarta'),
(16, '1250756659200003', 'Isnen, S.Pd', 'Laki-laki', 'Bogor'),
(17, '3737752653300042', 'Mursiah, S.Ag', 'Laki-laki', 'Bogor'),
(18, '4358756658200013', 'Nurasim, S.Pd.I', 'Laki-laki', 'Bogor'),
(19, '7460742642200002', 'Omad, S.Pd.I', 'Laki-laki', 'Bogor'),
(20, NULL, 'Puspita Mayangsari, S.Pd', 'Perempuan', 'Bogor'),
(21, '4446759661200033', 'Rahmat Hidayat, S.Pd', 'Laki-laki', 'Bogor'),
(22, NULL, 'Rosid Saksani, S.Pd', 'Laki-laki', 'Bogor'),
(23, '0836758660200032', 'Rosid, S.Pd.I', 'Laki-laki', 'Bogor'),
(24, '5446759651200031', 'Sandi Suardi, S.Th.I', 'Laki-laki', 'Bogor'),
(25, NULL, 'Sumiyati, S.Pd.I', 'Perempuan', 'Bogor'),
(26, '3643761663200012', 'Tri Gunardi, S.Hum', 'Laki-laki', 'Bogor'),
(27, NULL, 'Ujang Andriyadi, S.Pd.,MM', 'Laki-laki', 'Bogor');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
`id_hasil` int(5) NOT NULL,
  `nuptk` varchar(16) DEFAULT NULL,
  `nama` varchar(55) NOT NULL,
  `alamat` text NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
`id_kriteria` int(5) NOT NULL,
  `c1` varchar(30) NOT NULL,
  `c2` varchar(30) NOT NULL,
  `c3` varchar(30) NOT NULL,
  `c4` varchar(30) NOT NULL,
  `c5` varchar(30) NOT NULL,
  `c6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`) VALUES
(1, 'kehadiran', 'penguasaan materi', 'prestasi', 'loyalitas', 'prilaku', 'cara mengajar');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE IF NOT EXISTS `penilaian` (
`id_nilai` int(5) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `kehadiran` int(5) NOT NULL,
  `penguasaan_materi` int(5) NOT NULL,
  `prestasi` int(5) NOT NULL,
  `loyalitas` int(5) NOT NULL,
  `prilaku` int(5) NOT NULL,
  `cara_mengajar` int(5) DEFAULT NULL,
  `jumlah` double DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_nilai`, `nama`, `kehadiran`, `penguasaan_materi`, `prestasi`, `loyalitas`, `prilaku`, `cara_mengajar`, `jumlah`) VALUES
(1, 'Abdul Azis, S.Pd.I', 95, 82, 81, 91, 91, 83, 0.0363),
(2, 'Ahmad Fathoni, S.Ag', 96, 89, 85, 93, 92, 85, 0.0375),
(3, 'Ahmad Rivai, S.Pd.I', 97, 81, 86, 96, 98, 95, 0.038),
(4, 'Asepuddin, S.Pd.I', 97, 82, 88, 94, 95, 89, 0.0376),
(5, 'Atang Suganda, S.Sos', 96, 91, 89, 91, 92, 88, 0.0379),
(6, 'Bangbang Bahtiar, S.Pd.I', 96, 87, 89, 91, 91, 92, 0.0377),
(7, 'Budi Setiawan, S.Pd', 98, 89, 89, 96, 92, 89, 0.0383),
(8, 'Dahlia, SE.I', 98, 93, 91, 94, 92, 91, 0.0388),
(9, 'Dede Hidayat, S.Pd.I', 98, 91, 89, 93, 94, 91, 0.0385),
(10, 'Dedi Herdadi, S.H', 98, 82, 87, 95, 91, 89, 0.0375),
(11, 'Dori Hidayat, S.Pd.I', 99, 91, 95, 98, 98, 87, 0.0393),
(12, 'Imam Jarkasih, S.Ag', 98, 89, 89, 98, 96, 91, 0.0388),
(13, 'Irna Wardhini, S.S', 96, 89, 91, 91, 92, 92, 0.0381),
(14, 'Irwan Mawardian, S.E', 95, 89, 89, 95, 91, 87, 0.0378),
(15, 'Ismahayati, S.Pd', 97, 92, 88, 92, 91, 89, 0.0381),
(16, 'Isnen, S.Pd', 95, 89, 87, 89, 93, 91, 0.0377),
(17, 'Mursiah, S.Ag', 97, 87, 89, 92, 91, 88, 0.0377),
(18, 'Nurasim, S.Pd.I', 96, 89, 84, 89, 93, 91, 0.0376),
(19, 'Omad, S.Pd.I', 95, 91, 83, 89, 89, 92, 0.0374),
(20, 'Puspita Mayangsari, S.Pd', 97, 92, 89, 91, 91, 91, 0.0382),
(21, 'Rahmat Hidayat, S.Pd', 97, 92, 93, 84, 95, 83, 0.0378),
(22, 'Rosid Saksani, S.Pd', 95, 94, 81, 88, 92, 89, 0.0375),
(23, 'Rosid, S.Pd.I', 96, 91, 82, 89, 91, 88, 0.0374),
(24, 'Sandi Suardi, S.Th.I', 98, 91, 81, 89, 91, 87, 0.0374),
(25, 'Sumiyati, S.Pd.I', 94, 97, 86, 89, 91, 89, 0.0379),
(26, 'Tri Gunardi, S.Hum', 96, 91, 86, 93, 89, 93, 0.038),
(94, 'Puspita Mayangsari, S.Pd', 9, 9, 9, 9, 9, 9, 0.0037),
(95, 'Abdul Azis, S.Pd.I', 190, 9, 9, 9, 9, 9, 0.0077);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
 ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
 ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
 ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
 ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
MODIFY `id_bobot` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
MODIFY `id_guru` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
MODIFY `id_hasil` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
MODIFY `id_kriteria` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
