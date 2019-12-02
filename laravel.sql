-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 07:49 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(255) NOT NULL,
  `NIM` varchar(12) NOT NULL,
  `Nama` text NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `NIM`, `Nama`, `Email`) VALUES
(1, '672017072', 'Christofer Philia Satria Utomo', 'toper@gmail.com'),
(2, '672017090', 'Faizal Anjar Mukti', 'faizal@gmail.com'),
(3, '672017094', 'Yesa', 'yesa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_11_24_050803_create_model_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nama`
--

CREATE TABLE `nama` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nama`
--

INSERT INTO `nama` (`id`, `nama_depan`, `nama_belakang`) VALUES
(1, 'yesa', 'baru');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bagian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `bagian`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@adm.uksw.edu', '$2y$10$Ci.sIrpO6g3RvGvlkEnCreMcVBoCTTg1Mz.0xtZu7O2eMH58f6iyu', 'admin', 'All', NULL, '2019-11-23 22:36:20', '2019-11-23 22:36:20'),
(2, 'fasilitas@adm.uksw.edu', '$2y$10$QDj4i.Zd.DRLiPBUtflW2OhcxkTWgwNBTRJlYL6rHfq3NAHTiDoeS', 'fasilitas', 'Fasilitas', NULL, '2019-11-23 23:49:20', '2019-11-23 23:49:20'),
(3, 'perkuliahan@adm.uksw.edu', '$2y$10$pVlFhtozfuabxXEl1FSYMOOL8NP/ydkaPkdL5qO0WJlwBsfYlz6TK', 'perkuliahan', 'Perkuliahan', NULL, '2019-11-23 23:49:57', '2019-11-23 23:49:57'),
(4, 'lk@adm.uksw.edu', '$2y$10$AZkBShlH5tQFAcF7Yo8M8OKTDzzoeBW.pe7a0Q7kt2svp9sRJcplC', 'Lembaga Kemahasiswaan', 'Lembaga Kemahasiswaan', NULL, '2019-11-23 23:50:58', '2019-11-23 23:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_civitas`
--

CREATE TABLE `user_civitas` (
  `ID` int(100) NOT NULL,
  `Nama` text NOT NULL,
  `Nomor_Pegawai` varchar(255) NOT NULL,
  `Jabatan` varchar(255) NOT NULL,
  `Topik` varchar(255) NOT NULL,
  `Kritik` varchar(255) NOT NULL,
  `Saran` varchar(255) NOT NULL,
  `Waktu` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_civitas`
--

INSERT INTO `user_civitas` (`ID`, `Nama`, `Nomor_Pegawai`, `Jabatan`, `Topik`, `Kritik`, `Saran`, `Waktu`) VALUES
(1, 'Yeremia', '0971239123', 'Dosen', 'Lembaga Kemahasiswaan', 'saya terlalu banyak dilibatkan dalam kepanitiaan', 'jangan pilih saya untuk membantu acara anda sebagai panitia', '2019-11-22'),
(6, 'yesa mamang', '232321138', 'Laboran', 'Perkuliahan', 'kebanyakan make up kelas', 'jangan kosongin kelas', '2019-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `user_mahasiswa`
--

CREATE TABLE `user_mahasiswa` (
  `ID` int(100) NOT NULL,
  `NIM` int(9) NOT NULL,
  `Nama` text NOT NULL,
  `Topik` varchar(255) NOT NULL,
  `Kritik` varchar(255) NOT NULL,
  `Saran` varchar(255) NOT NULL,
  `Waktu` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_mahasiswa`
--

INSERT INTO `user_mahasiswa` (`ID`, `NIM`, `Nama`, `Topik`, `Kritik`, `Saran`, `Waktu`) VALUES
(1, 672017072, 'christofer', 'Fasilitas', 'ruangan kelas selain lab panas', 'bisa dikasi AC', '2019-11-22'),
(12, 672017094, 'Muhammad Yesa', 'Lembaga Kemahasiswaan', 'kebanyakan acara buang2 duit', 'kalo punya duit baru bikin acara', '2019-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `user_masyarakat`
--

CREATE TABLE `user_masyarakat` (
  `ID` int(100) NOT NULL,
  `Nama` text NOT NULL,
  `Nomor_Telepon` varchar(12) NOT NULL,
  `Asal_Daerah` text NOT NULL,
  `Topik` varchar(255) NOT NULL,
  `Kritik` varchar(255) NOT NULL,
  `Saran` varchar(255) NOT NULL,
  `Waktu` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_masyarakat`
--

INSERT INTO `user_masyarakat` (`ID`, `Nama`, `Nomor_Telepon`, `Asal_Daerah`, `Topik`, `Kritik`, `Saran`, `Waktu`) VALUES
(3, 'Sastro', '085674857412', 'Salatiga', 'Perkuliahan', 'Kelas Elegant selalu menggunakan nama saya', 'bisa menggunakan nama lain , saya takut terkenal', '2019-11-22'),
(4, 'yesa abang', '081228602509', 'salatiga', 'Fasilitas', 'kantin di fti kejauan', 'perbanyak orang jualan di fti', '2019-11-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nama`
--
ALTER TABLE `nama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_civitas`
--
ALTER TABLE `user_civitas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_mahasiswa`
--
ALTER TABLE `user_mahasiswa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_masyarakat`
--
ALTER TABLE `user_masyarakat`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nama`
--
ALTER TABLE `nama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_civitas`
--
ALTER TABLE `user_civitas`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_mahasiswa`
--
ALTER TABLE `user_mahasiswa`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_masyarakat`
--
ALTER TABLE `user_masyarakat`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
