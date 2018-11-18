-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2018 at 10:47 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wilda`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`, `level`) VALUES
(2, 'Wilda', 'Wilda', 'da', 'admin'),
(3, 'Wilda', 'Wilda', '1', 'kp');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berkas`
--

CREATE TABLE `tbl_berkas` (
  `id_berkas` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `dok_ijazah` varchar(100) NOT NULL,
  `dok_kartu_ujian` varchar(100) NOT NULL,
  `dok_raport` varchar(100) NOT NULL,
  `dok_kk` varchar(100) NOT NULL,
  `dok_surat_sehat` varchar(100) NOT NULL,
  `dok_ktp_ortu` varchar(100) NOT NULL,
  `dok_KIP` varchar(100) NOT NULL,
  `dok_pas_foto` varchar(100) NOT NULL,
  `dok_sertifikat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berkas`
--

INSERT INTO `tbl_berkas` (`id_berkas`, `id_pendaftar`, `dok_ijazah`, `dok_kartu_ujian`, `dok_raport`, `dok_kk`, `dok_surat_sehat`, `dok_ktp_ortu`, `dok_KIP`, `dok_pas_foto`, `dok_sertifikat`) VALUES
(4, 11, 'a.pdf', 'b.pdf', 'c.pdf', 'f.pdf', 'd.pdf', 'g.pdf', 'h.pdf', 'i.pdf', 'j.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kuota`
--

CREATE TABLE `tbl_kuota` (
  `id_kuota` int(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kuota`
--

INSERT INTO `tbl_kuota` (`id_kuota`, `jurusan`, `kuota`) VALUES
(3, 'TKJ', 2),
(4, 'AKT', 2),
(6, 'TKR', 3),
(7, 'TEI', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `rata_un` int(11) NOT NULL,
  `rata_raport` int(11) NOT NULL,
  `nilai_test` int(11) NOT NULL,
  `prestasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `id_pendaftar`, `rata_un`, `rata_raport`, `nilai_test`, `prestasi`) VALUES
(8, 11, 60, 98, 40, 87),
(9, 13, 80, 87, 40, 87),
(10, 14, 80, 90, 60, 87),
(11, 8, 60, 62, 40, 87),
(12, 9, 80, 68, 40, 87);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftar`
--

CREATE TABLE `tbl_pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp_rumah` varchar(100) NOT NULL,
  `tinggi_badan` varchar(100) NOT NULL,
  `status_dalam_keluarga` varchar(100) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `cita_cita` varchar(100) NOT NULL,
  `goldar` varchar(100) NOT NULL,
  `jarak_tempuh` varchar(100) NOT NULL,
  `alat_transportasi_kesekolah` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kode_pos` varchar(100) NOT NULL,
  `jurusan1` varchar(100) NOT NULL,
  `jurusan2` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `pendidikan_ayah` varchar(100) NOT NULL,
  `penghasilan_ayah` varchar(100) NOT NULL,
  `no_telpon_rumah_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `pendidikan_ibu` varchar(100) NOT NULL,
  `no_telpon_rumah_ibu` varchar(100) NOT NULL,
  `penghasilan_ibu` varchar(100) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `pekerjaan_wali` varchar(100) NOT NULL,
  `pendidikan_wali` varchar(100) NOT NULL,
  `penghasilan_wali` varchar(100) NOT NULL,
  `no_telp_wali` varchar(100) NOT NULL,
  `nama_asal_sekolah` varchar(100) NOT NULL,
  `alamat_sekolah_asal` text NOT NULL,
  `status_sekolah` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `seri_ijazah` varchar(100) NOT NULL,
  `seri_skhu` varchar(100) NOT NULL,
  `kode_peserta_smp` varchar(100) NOT NULL,
  `kode_pos_smp` varchar(100) NOT NULL,
  `id_register` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendaftar`
--

INSERT INTO `tbl_pendaftar` (`id_pendaftar`, `nama`, `nis`, `nisn`, `jenis_kelamin`, `ttl`, `agama`, `alamat`, `no_telp_rumah`, `tinggi_badan`, `status_dalam_keluarga`, `anak_ke`, `cita_cita`, `goldar`, `jarak_tempuh`, `alat_transportasi_kesekolah`, `email`, `kode_pos`, `jurusan1`, `jurusan2`, `nama_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `penghasilan_ayah`, `no_telpon_rumah_ayah`, `nama_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `no_telpon_rumah_ibu`, `penghasilan_ibu`, `nama_wali`, `pekerjaan_wali`, `pendidikan_wali`, `penghasilan_wali`, `no_telp_wali`, `nama_asal_sekolah`, `alamat_sekolah_asal`, `status_sekolah`, `kabupaten`, `provinsi`, `seri_ijazah`, `seri_skhu`, `kode_peserta_smp`, `kode_pos_smp`, `id_register`) VALUES
(8, 'Ku Lutfi ', '12344', '12344', 'P', '11/05/2018', 'Islam', 'Jln. R.A Kartini No. 36 Yukum jaya Terbanggi Besar Lamteng\r\nBandar Jaya', '085758547924', '90/90', 'anak', 4444, 'main', 'B', '10km', 'mmotor', 'umam.tekno@gmail.com', '34162', 'TKJ', 'TEI', 'vdddvvdvcxcx', 'vddvd', 'vdv', '100000', '56799', 'ffg', 'fgfgfgh', 'd3', '42422', '50000', 'Kurniawan Gigih', 'eefee', 's2', '10000', 'fdfdfdfd', 'smo', 'sdfdsf', 'fdfdfd', 'Bandar Lampung', 'Lampung', 'fdfdf', 'fsfsf', 'eeefef', 'fefefefefefef', 2),
(9, 'Awan', '12344', '12344', 'P', '11/05/2018', 'Islam', 'Jln. R.A Kartini No. 36 Yukum jaya Terbanggi Besar Lamteng\r\nBandar Jaya', '085758547924', '90/90', 'anak', 4444, 'main', 'B', '10km', 'mmotor', 'umam.tekno@gmail.com', '34162', 'TKJ', 'AKT', 'vdddvvdvcxcx', 'vddvd', 'vdv', '100000', '56799', 'ffg', 'fgfgfgh', 'd3', '42422', '50000', 'Kurniawan Gigih', 'eefee', 's2', '10000', 'fdfdfdfd', 'smo', 'sdfdsf', 'fdfdfd', 'Bandar Lampung', 'Lampung', 'fdfdf', 'fsfsf', 'eeefef', 'fefefefefefef', 2),
(11, 'Wilda', '12344', '12344', 'P', '08/29/2018', 'Islam', 'Jln. R.A Kartini No. 36 Yukum jaya Terbanggi Besar Lamteng\r\nBandar Jaya', '085758547924', '90/90', 'anak', 1, 'main', 'A', '10km', 'mmotor', 'umam.tekno@gmail.com', '34162', 'TEI', 'AKT', 'vdddvvdvcxcx', 'vddvd', 'vdv', '100000', '56799', 'ffg', 'fgfgfgh', 'd3', '42422', '50000', 'Kurniawan Gigih', 'eefee', 's2', '10000', 'fdfdfdfd', 'smo', 'ff', 'fdfdfd', 'Bandar Lampung', 'Lampung', 'fdfdf', 'fsfsf', 'eeefef', 'fefefefefefef', 1),
(13, 'Kurniawan', '12344', '12344', 'P', '08/29/2018', 'Islam', 'Jln. R.A Kartini No. 36 Yukum jaya Terbanggi Besar Lamteng\r\nBandar Jaya', '085758547924', '90/90', 'anak', 1, 'main', 'A', '10km', 'mmotor', 'umam.tekno@gmail.com', '34162', 'TEI', 'AKT', 'vdddvvdvcxcx', 'vddvd', 'vdv', '100000', '56799', 'ffg', 'fgfgfgh', 'd3', '42422', '50000', 'Kurniawan Gigih', 'eefee', 's2', '10000', 'fdfdfdfd', 'smo', 'ff', 'fdfdfd', 'Bandar Lampung', 'Lampung', 'fdfdf', 'fsfsf', 'eeefef', 'fefefefefefef', 3),
(14, 'Gigih', '12344', '12344', 'P', '08/29/2018', 'Islam', 'Jln. R.A Kartini No. 36 Yukum jaya Terbanggi Besar Lamteng\r\nBandar Jaya', '085758547924', '90/90', 'anak', 1, 'main', 'A', '10km', 'mmotor', 'umam.tekno@gmail.com', '34162', 'TEI', 'AKT', 'vdddvvdvcxcx', 'vddvd', 'vdv', '100000', '56799', 'ffg', 'fgfgfgh', 'd3', '42422', '50000', 'Kurniawan Gigih', 'eefee', 's2', '10000', 'fdfdfdfd', 'smo', 'ff', 'fdfdfd', 'Bandar Lampung', 'Lampung', 'fdfdf', 'fsfsf', 'eeefef', 'fefefefefefef', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id_register` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id_register`, `username`, `password`) VALUES
(1, 'Wilda', '1'),
(6, 'wilda', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_terima`
--

CREATE TABLE `tbl_terima` (
  `id_terima` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_terima`
--

INSERT INTO `tbl_terima` (`id_terima`, `id_pendaftar`, `jurusan`) VALUES
(11, 14, 'TEI'),
(12, 13, 'TEI'),
(14, 11, 'AKT'),
(15, 9, 'AKT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `tbl_kuota`
--
ALTER TABLE `tbl_kuota`
  ADD PRIMARY KEY (`id_kuota`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_pendaftar`
--
ALTER TABLE `tbl_pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`id_register`);

--
-- Indexes for table `tbl_terima`
--
ALTER TABLE `tbl_terima`
  ADD PRIMARY KEY (`id_terima`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kuota`
--
ALTER TABLE `tbl_kuota`
  MODIFY `id_kuota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_pendaftar`
--
ALTER TABLE `tbl_pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_terima`
--
ALTER TABLE `tbl_terima`
  MODIFY `id_terima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
