-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2023 pada 18.48
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp4_mvc2023`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `club`
--

CREATE TABLE `club` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun_dibuat` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `club`
--

INSERT INTO `club` (`id`, `nama`, `tahun_dibuat`) VALUES
(1, 'Badan Permusyawaratan Desa (BPD)', '1961'),
(3, 'Gabungan Kelompok Tani (Gapoktan)', '2008'),
(5, 'Lembaga Musyawarah Kelurahan (LMK)', '2010'),
(6, 'Pos Pelayanan Terpadu (Posyandu)', '1986'),
(7, 'Karang Taruna', '1960'),
(9, 'Perlindungan Masyarakat (Linmas)', '2002'),
(11, 'Rukun Warga', '1941'),
(12, 'Pemuda Pancasila', '1959'),
(13, 'PKK', '1967'),
(14, 'Dewan Kemakmuran Masjid (DKM)', '2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(13) NOT NULL,
  `join_date` date NOT NULL DEFAULT current_timestamp(),
  `id_club` bigint(20) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `phone`, `join_date`, `id_club`) VALUES
(14, 'Haji Kohar', 'kohar@gmail.com', 2147483647, '2023-05-15', 1),
(15, 'Haji Sulaeman', 'sulaeman12@gmail.com', 2147483647, '2023-05-15', 5),
(16, 'Ningning Sariasih', 'asih74@gmail.com', 2147483647, '2023-05-16', 6),
(17, 'Hj. Fatimah', 'fatimah@gmail.com', 2147483647, '2023-05-16', 6),
(18, 'Arya Saloka', 'masAl@gmail.com', 2147483647, '2023-05-17', 12),
(19, 'Rendi Abdullah', 'abdullah_rendi@gmail.com', 2147483647, '2023-05-17', 12),
(20, 'Amanda Manopo', 'andin@gmail.com', 2147483647, '2023-05-17', 13),
(21, 'Askara Putra A', 'aladin@gmail.com', 2147483647, '2023-05-18', 7),
(23, 'Galih M S', 'aih@gmail.com', 2147483647, '2023-05-18', 9),
(24, 'Rifaldi Wijaya', 'masAto@gmail.com', 2147483647, '2023-05-18', 3),
(25, 'El Nino P', 'iam_nino@gmail.com', 2147483647, '2023-05-18', 11),
(27, 'Haji Nayudha', 'yudadp@gmail.com', 2147483647, '2023-05-21', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `club`
--
ALTER TABLE `club`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
