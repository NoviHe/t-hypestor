-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 16 Jun 2021 pada 13.18
-- Versi server: 10.3.29-MariaDB-cll-lve
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thyg1899_admin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_design`
--

CREATE TABLE `db_design` (
  `id` varchar(50) NOT NULL,
  `bg_color_login` text NOT NULL,
  `bg_img_login` text NOT NULL,
  `ukuran_logo_login` text NOT NULL,
  `color_footer` text NOT NULL,
  `color_btn_login` text NOT NULL,
  `bg_btn_login` text NOT NULL,
  `bg_btn_login_hover` text NOT NULL,
  `bg_notifikasi_valid` text NOT NULL,
  `color_notifikasi_valid` text NOT NULL,
  `bg_notifikasi_invalid` text NOT NULL,
  `color_notifikasi_invalid` text NOT NULL,
  `bg_loader` text NOT NULL,
  `waktu_loader` text NOT NULL,
  `form_bg_judul` text NOT NULL,
  `form_bg_body` text NOT NULL,
  `bg_body` text NOT NULL,
  `bg_menu` text NOT NULL,
  `color_dasar` text NOT NULL,
  `bg_dasar` text NOT NULL,
  `hover_bg_dasar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_design`
--

INSERT INTO `db_design` (`id`, `bg_color_login`, `bg_img_login`, `ukuran_logo_login`, `color_footer`, `color_btn_login`, `bg_btn_login`, `bg_btn_login_hover`, `bg_notifikasi_valid`, `color_notifikasi_valid`, `bg_notifikasi_invalid`, `color_notifikasi_invalid`, `bg_loader`, `waktu_loader`, `form_bg_judul`, `form_bg_body`, `bg_body`, `bg_menu`, `color_dasar`, `bg_dasar`, `hover_bg_dasar`) VALUES
('design', '#f03c34', '2835_bg-login.jpg', '140', '#495057', '#fff', '#f03c34', '#d8362f', '#4cc989', '#fff', '#d23636', '#fff', '#f03c34', '1000', '#989998', '#eee', '#f5f5f5', '#f7dfda', '#f03c34', '#f03c34', '#d8362f');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_media_images`
--

CREATE TABLE `db_media_images` (
  `id` varchar(50) NOT NULL,
  `file` text NOT NULL,
  `tipe` text NOT NULL,
  `ukuran` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_media_images`
--

INSERT INTO `db_media_images` (`id`, `file`, `tipe`, `ukuran`, `tanggal`) VALUES
('img_000004', '2835_bg-login.jpg', 'image/jpeg', '60237', '2021-02-20 12:00:27'),
('img_000005', '5160_4138_favicon.png', 'image/png', '4150', '2021-04-20 15:18:05'),
('img_000006', '59_5054_logo.png', 'image/png', '10033', '2021-04-20 15:18:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_pemasukan`
--

CREATE TABLE `db_pemasukan` (
  `username` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `kategori` text NOT NULL,
  `jumlah` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_pemasukan`
--

INSERT INTO `db_pemasukan` (`username`, `id`, `tanggal`, `kategori`, `jumlah`, `keterangan`) VALUES
('owner@bts-cargo.com', 'DBT-000001', '2021-02-15 20:18:54', 'PEMASUKAN LAIN', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_pengeluaran`
--

CREATE TABLE `db_pengeluaran` (
  `username` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `kategori` text NOT NULL,
  `jumlah` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_usermanager`
--

CREATE TABLE `db_usermanager` (
  `tipe` text NOT NULL,
  `id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `no_telp` text NOT NULL,
  `foto` text NOT NULL,
  `tgl_daftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_usermanager`
--

INSERT INTO `db_usermanager` (`tipe`, `id`, `username`, `password`, `nama`, `no_telp`, `foto`, `tgl_daftar`) VALUES
('admin', 'admin', 'admin@admin.com', '50bd8c5697cba12aac4a242f15e44b8c', 'Admin', '0', '164_foto.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_website`
--

CREATE TABLE `db_website` (
  `tipe` varchar(50) NOT NULL,
  `url` text NOT NULL,
  `perusahaan` text NOT NULL,
  `tagline` text NOT NULL,
  `favicon` text NOT NULL,
  `logo` text NOT NULL,
  `telp_web` text NOT NULL,
  `email_web` text NOT NULL,
  `alamat_web` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_website`
--

INSERT INTO `db_website` (`tipe`, `url`, `perusahaan`, `tagline`, `favicon`, `logo`, `telp_web`, `email_web`, `alamat_web`) VALUES
('website', 'https://t-hypestor.com/', 'T Hyperstor', 'Tagline T Hyperstor', '5160_4138_favicon.png', '59_5054_logo.png', '082123456789', 'mail@t-hypestor.com', 'Bandung');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_design`
--
ALTER TABLE `db_design`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_media_images`
--
ALTER TABLE `db_media_images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_pemasukan`
--
ALTER TABLE `db_pemasukan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_pengeluaran`
--
ALTER TABLE `db_pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_usermanager`
--
ALTER TABLE `db_usermanager`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_website`
--
ALTER TABLE `db_website`
  ADD PRIMARY KEY (`tipe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
