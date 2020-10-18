-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 17 Okt 2020 pada 04.53
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lspperpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`) VALUES
(1, 'buku 1'),
(2, 'buku 2'),
(5, 'buku 5'),
(6, 'buku 6'),
(7, 'buku 7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `buku` int(11) NOT NULL,
  `pengguna` int(11) NOT NULL,
  `pinjam` datetime NOT NULL DEFAULT current_timestamp(),
  `kembali` datetime NOT NULL,
  `dikembalikan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `buku`, `pengguna`, `pinjam`, `kembali`, `dikembalikan`) VALUES
(3, 1, 1, '2020-10-16 00:00:00', '2020-10-17 00:00:00', 1),
(4, 2, 2, '2020-10-16 00:00:00', '2020-10-17 00:00:00', 1),
(6, 1, 2, '2020-10-17 00:00:00', '2020-10-18 00:00:00', 0),
(7, 5, 2, '2020-10-17 04:00:08', '2020-10-24 04:00:08', 1),
(8, 5, 1, '2020-10-17 04:01:10', '2020-10-24 04:01:10', 1),
(9, 2, 4, '2020-10-17 04:35:37', '2020-10-24 04:35:37', 1),
(10, 6, 5, '2020-10-17 04:53:17', '2020-10-24 04:53:17', 1),
(11, 5, 5, '2020-10-17 04:53:21', '2020-10-24 04:53:21', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`) VALUES
(1, 'user', 'user'),
(2, 'pengguna', 'pengguna'),
(3, 'admin', 'admin'),
(4, 'bukanadmin', 'bukanadmin'),
(5, 'masihbukanadmin', 'masihbukanadmin'),
(6, 'masihpengguna', 'masihpengguna');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
