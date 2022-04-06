-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 06:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakardepresi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `usia` varchar(5) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `token_ganti_password` text NOT NULL,
  `level` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id`, `nama`, `usia`, `email`, `username`, `password`, `token_ganti_password`, `level`) VALUES
(1, 'Yunita', '22', 'yunitaeka375@gmail.com', 'yunita', 'yunita', '', 'User'),
(2, 'Faradila', NULL, NULL, 'admin', 'admin', '', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `kode_gejala` varchar(3) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kode_gejala`, `gejala`) VALUES
(1, 'G01', 'Merasa letih ketika bangun pagi'),
(2, 'G02', 'Mengalami insomnia'),
(3, 'G03', 'Melamun saat sendiri'),
(4, 'G04', 'Mudah marah karena hal-hal sepele'),
(5, 'G05', 'Merasa malas beraktivitas sepanjang hari'),
(6, 'G06', 'Literatur yang dimiliki kurang lengkap'),
(7, 'G07', 'Takut dan cemas saat berkomunikasi dengan dosen pembimbing'),
(8, 'G08', 'Takut salah dalam menyampaikan pendapat dengan pembimbing'),
(9, 'G09', 'Takut tidak dapat menjawab pertanyaan dari dosen pembimbing'),
(10, 'G10', 'Merasa sakit kepala tanpa sebab'),
(11, 'G11', 'Kehilangan motivasi untuk belajar'),
(12, 'G12', 'Merasa bosan dengan kehidupan'),
(13, 'G13', 'Jantung berdebar-debar saat mengerjakan skripsi'),
(14, 'G14', 'Kesulitan menemukan judul skripsi'),
(15, 'G15', 'Tidak tahu dan tidak menguasai permasalahan yang akan di angkat pada skripsi'),
(16, 'G16', 'Topik skripsi yang diambil tidak sesuai dengan minat dan bakat'),
(17, 'G17', 'Mudah lupa'),
(18, 'G18', 'Menurunnya kualitas tugas yang dikerjakan'),
(19, 'G19', 'Cemas saat menerima saran dari orang lain'),
(20, 'G20', 'Wajah tampak murung'),
(21, 'G21', 'Respon tubuh menjadi lambat'),
(22, 'G22', 'Merasa kehilangan kendali terhadap diri sendiri'),
(23, 'G23', 'Kehilangan motivasi untuk melakukan hobi'),
(24, 'G24', 'Selera makan menurun'),
(25, 'G25', 'Merasa skripsi yang dimiliki tidak berkualitas'),
(26, 'G26', 'Tidak terbiasa menulis karya ilmiah'),
(27, 'G27', 'Aktivitas perkuliahan terasa menjenuhkan'),
(28, 'G28', 'Mudah tersinggung dengan perkataan orang lain mengenai skripsi'),
(29, 'G29', 'Merasa seluruh kegiatan membuat kelelahan'),
(30, 'G30', 'Mudah panik'),
(31, 'G31', 'Malas membicarakan skripsi'),
(32, 'G32', 'Kurang minat dan motivasi dalam belajar'),
(33, 'G33', 'Tidak mampu membuat dan mengembangkan perangkat lunak (software)'),
(34, 'G34', 'Aktivitas perkuliahan terasa sulit'),
(35, 'G35', 'Kesulitan berkonsentrasi saat mengikuti perkuliahan'),
(36, 'G36', 'Memikirkan skripsi membuat mahasiswa mual'),
(37, 'G37', 'Mengeluarkan keringat dingin ketika mengerjakan skripsi'),
(38, 'G38', 'Kesulitan berkonsentrasi saat mengerjakan tugas kuliah'),
(39, 'G39', 'Kesulitan mengatur nafas ketika dihadapkan dengan suatu pekerjaan yang dianggap sulit'),
(40, 'G40', 'Sering merasa cemas memikirkan hal-hal yang berhubungan dengan pengerjaan skripsi'),
(41, 'G41', 'Badan gemetaran saat dihadapkan dengan suatu pekerjaan yang dianggap sulit'),
(42, 'G42', 'Merasa berat untuk tersenyum pada orang lain'),
(43, 'G43', 'Perasaan ingin bunuh diri');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kondisi`
--

CREATE TABLE `tb_kondisi` (
  `id_kondisi` int(5) NOT NULL,
  `nama_kondisi` varchar(20) NOT NULL,
  `nilai` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kondisi`
--

INSERT INTO `tb_kondisi` (`id_kondisi`, `nama_kondisi`, `nilai`) VALUES
(1, 'Tidak yakin', 0.00),
(2, 'Tidak tahu', 0.20),
(3, 'Sedikit yakin', 0.40),
(4, 'Cukup yakin', 0.60),
(5, 'Yakin', 0.80),
(6, 'Sangat Yakin', 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `kode_penyakit` varchar(3) NOT NULL,
  `nama_penyakit` varchar(15) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `kode_penyakit`, `nama_penyakit`, `solusi`) VALUES
(1, 'P1', 'Depresi Ringan', 'Sebaiknya mencari teman atau orang terdekat untuk mengungkapkan <p> permasalahan. Mulailah mencari konselor atau profesional guna <p> mencegah terkena stress yang lebih berat.'),
(2, 'P2', 'Depresi Sedang', 'Perlu terapi khusus untuk menghilangkan masalah dengan <p> pendekatan jiwa dengan terapi atau konsultasi dokter kejiwaan'),
(3, 'P3', 'Depresi Berat', 'Perlu penanganan khusus untuk pengentasan masalah kejiwaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rules`
--

CREATE TABLE `tb_rules` (
  `id` int(11) NOT NULL,
  `kode_penyakit` varchar(3) NOT NULL,
  `kode_gejala` varchar(3) NOT NULL,
  `mb` double(10,2) NOT NULL,
  `md` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rules`
--

INSERT INTO `tb_rules` (`id`, `kode_penyakit`, `kode_gejala`, `mb`, `md`) VALUES
(1, 'P1', 'G01', 0.50, 0.30),
(2, 'P1', 'G02', 0.50, 0.30),
(3, 'P2', 'G02', 0.50, 0.30),
(4, 'P3', 'G02', 0.50, 0.30),
(5, 'P1', 'G03', 0.70, 0.30),
(6, 'P2', 'G03', 0.70, 0.30),
(7, 'P3', 'G03', 0.70, 0.30),
(8, 'P1', 'G04', 0.60, 0.20),
(9, 'P2', 'G04', 0.60, 0.20),
(10, 'P2', 'G05', 0.50, 0.10),
(11, 'P1', 'G06', 0.20, 0.10),
(12, 'P1', 'G07', 0.50, 0.20),
(13, 'P1', 'G08', 0.40, 0.10),
(14, 'P1', 'G09', 0.50, 0.20),
(15, 'P2', 'G10', 0.70, 0.20),
(16, 'P1', 'G11', 0.80, 0.40),
(17, 'P2', 'G11', 0.80, 0.40),
(18, 'P2', 'G12', 0.80, 0.30),
(19, 'P2', 'G13', 0.50, 0.10),
(20, 'P1', 'G14', 0.30, 0.10),
(21, 'P1', 'G15', 0.30, 0.10),
(22, 'P1', 'G16', 0.30, 0.10),
(23, 'P1', 'G17', 0.40, 0.10),
(24, 'P2', 'G18', 0.50, 0.10),
(25, 'P2', 'G19', 0.70, 0.30),
(26, 'P2', 'G20', 0.70, 0.30),
(27, 'P3', 'G21', 0.90, 0.20),
(28, 'P1', 'G22', 0.80, 0.10),
(29, 'P2', 'G22', 0.80, 0.10),
(30, 'P1', 'G23', 0.70, 0.20),
(31, 'P2', 'G23', 0.70, 0.20),
(32, 'P1', 'G24', 0.80, 0.40),
(33, 'P2', 'G24', 0.80, 0.40),
(34, 'P1', 'G25', 0.40, 0.20),
(35, 'P1', 'G26', 0.20, 0.10),
(36, 'P1', 'G27', 0.30, 0.10),
(37, 'P2', 'G28', 0.50, 0.10),
(38, 'P2', 'G29', 0.60, 0.20),
(39, 'P2', 'G30', 0.50, 0.10),
(40, 'P1', 'G31', 0.30, 0.10),
(41, 'P1', 'G32', 0.30, 0.10),
(42, 'P1', 'G33', 0.40, 0.10),
(43, 'P1', 'G34', 0.50, 0.30),
(44, 'P2', 'G35', 0.50, 0.10),
(45, 'P2', 'G36', 0.60, 0.20),
(46, 'P2', 'G37', 0.70, 0.20),
(47, 'P3', 'G37', 0.70, 0.20),
(48, 'P1', 'G38', 0.50, 0.20),
(49, 'P3', 'G39', 0.80, 0.20),
(50, 'P2', 'G40', 0.80, 0.30),
(51, 'P3', 'G40', 0.80, 0.30),
(52, 'P2', 'G41', 0.70, 0.10),
(53, 'P3', 'G41', 0.70, 0.10),
(54, 'P2', 'G42', 0.80, 0.30),
(55, 'P3', 'G43', 0.90, 0.10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `tb_kondisi`
--
ALTER TABLE `tb_kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indexes for table `tb_rules`
--
ALTER TABLE `tb_rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Mempunyai` (`kode_gejala`),
  ADD KEY `Memiliki` (`kode_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kondisi`
--
ALTER TABLE `tb_kondisi`
  MODIFY `id_kondisi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_rules`
--
ALTER TABLE `tb_rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_rules`
--
ALTER TABLE `tb_rules`
  ADD CONSTRAINT `Memiliki` FOREIGN KEY (`kode_penyakit`) REFERENCES `tb_penyakit` (`kode_penyakit`),
  ADD CONSTRAINT `Mempunyai` FOREIGN KEY (`kode_gejala`) REFERENCES `tb_gejala` (`kode_gejala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
