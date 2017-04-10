-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Apr 2017 pada 06.50
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbname`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `Tanggal` datetime NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `jenis_kelamin`, `kelas`, `jurusan`, `keterangan`, `Tanggal`, `user`) VALUES
(88, 'cdscsd', 'Perempuan', 'XI', 'Adm Perkantoran3', 'Izin', '2017-03-14 21:34:54', ''),
(89, 'asas', 'Laki-Laki', 'X', 'Multimedia1', 'Sakit', '2017-03-14 21:38:14', 'Fathona Aji'),
(90, 'cdscsds', 'Perempuan', 'XI', 'Adm Perkantoran3', 'Izin', '2017-03-14 21:38:14', 'Fathona Aji'),
(91, 'ssd', 'Laki-Laki', 'X', 'Multimedia2', 'Sakit', '2017-03-14 21:49:29', 'Malik W'),
(92, 'xx', 'Perempuan', 'XII', 'Tkj', 'Izin', '2017-03-14 21:49:29', 'Malik W'),
(93, 'c', 'Perempuan', 'XI', 'Adm Perkantoran2', 'Alpa', '2017-03-14 21:49:29', 'Malik W'),
(94, 'v', 'Laki-Laki', 'X', 'rpl2', 'Izin', '2017-03-14 21:49:29', 'Malik W'),
(95, 'malik', 'Laki-Laki', 'XI', 'Akuntansi2', 'Sakit', '2017-03-15 12:31:28', 'M Farhan'),
(96, 'onah', 'Laki-Laki', 'XII', 'Pemasaran1', 'Izin', '2017-03-15 12:31:28', 'M Farhan'),
(97, 'yegar sahaduta', 'Laki-Laki', 'X', 'Pemasaran3', 'Sakit', '2017-03-15 13:45:31', 'Fathona Aji'),
(98, 'rizky agestyas', 'Laki-Laki', 'X', 'Pemasaran3', 'Izin', '2017-03-15 13:45:31', 'Fathona Aji'),
(99, 'Palkon D ACE', 'Laki-Laki', 'XI', 'Rpl1', 'Sakit', '2017-03-27 07:38:31', 'Dedi M'),
(100, 'Anaknnya Ibu Edi', 'Laki-Laki', 'XI', 'Rpl1', 'Alpa', '2017-03-27 07:38:31', 'Dedi M'),
(101, 'Malik', 'Laki-Laki', 'XI', 'Rpl3', 'Alpa', '2017-03-27 10:24:03', 'Fathona Aji'),
(102, 'Farhan', 'Laki-Laki', 'XI', 'Rpl3', 'Sakit', '2017-03-27 10:24:03', 'Fathona Aji'),
(103, 'farhan', 'Laki-Laki', 'X', 'Rpl3', 'Sakit', '2017-03-27 12:05:42', 'Fathona Aji'),
(104, 'malik', 'Laki-Laki', 'XI', 'Rpl3', 'Izin', '2017-03-27 12:05:42', 'Fathona Aji'),
(105, 'a', 'Laki-Laki', 'X', 'Rpl2', 'Sakit', '2017-04-04 11:45:25', 'donny'),
(106, 'b', 'Perempuan', 'XI', 'Rpl2', 'Izin', '2017-04-04 11:45:25', 'donny'),
(107, 'c', 'Perempuan', 'XI', 'Rpl2', 'Sakit', '2017-04-04 11:45:25', 'donny'),
(108, 'd', 'Laki-Laki', 'XI', 'Rpl2', 'Izin', '2017-04-04 11:45:25', 'donny'),
(109, 'e', 'Perempuan', 'XII', 'pilih', 'Izin', '2017-04-04 11:45:25', 'donny');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `level_user` varchar(150) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `level_user`) VALUES
(37, 'Fathona Aji', 'Fathona', 'bandung123', 'admin'),
(39, 'Dedi M', 'dedi', 'dedi123', 'member'),
(40, 'Malik W', 'Malik', 'malik123', 'member'),
(41, 'M Farhan', 'farhan', 'farhan123', 'member'),
(42, 'Fathona Aji', 'Fathona', 'aji123', 'member'),
(43, 'Fathona', 'fathona', 'aji123', 'member'),
(44, 'malik', 'malik', 'bandung123', 'member'),
(45, 'donny', 'dhirawan', 'asdgws123', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
