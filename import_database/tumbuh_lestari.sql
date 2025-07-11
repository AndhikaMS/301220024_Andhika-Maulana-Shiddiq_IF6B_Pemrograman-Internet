-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2025 pada 10.58
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tumbuh_lestari`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `konten`, `created_at`) VALUES
(1, 'Menelusuri Aroma dan Cerita di Balik Secangkir Kopi', 'Kopi bukan sekadar minuman—ia adalah cerita. Dari biji yang dipetik di pagi hari hingga diseduh hangat di sore yang mendung, kopi menyimpan perjalanan panjang. Indonesia dikenal sebagai salah satu produsen kopi terbaik dunia, dengan varietas seperti Arabika Gayo, Toraja, dan Robusta Lampung yang sudah mendunia.\r\n\r\nSetiap jenis kopi punya karakter khas: Arabika dengan rasa asam dan kompleks, sementara Robusta lebih kuat dan pahit. Bagi pecinta kopi sejati, menemukan rasa favorit adalah petualangan yang tak pernah membosankan.\r\n\r\nLebih dari itu, kopi adalah budaya. Ia menyatukan obrolan, ide, dan kenangan dalam tiap tegukan.', '2025-06-23 11:01:01'),
(2, 'Perkebunan, Nafas Hijau Pembangunan', 'Perkebunan adalah sektor penting dalam kehidupan banyak masyarakat Indonesia, terutama di pedesaan. Tanaman seperti kelapa sawit, karet, teh, dan kopi menjadi sumber penghasilan jutaan petani. Tak hanya menghasilkan bahan ekspor, perkebunan juga menciptakan lapangan kerja dan menjaga keseimbangan alam jika dikelola dengan bijak.\r\n\r\nDi balik hamparan hijau tanaman, ada kerja keras: mulai dari memilih benih unggul, merawat tanaman, hingga memanen hasil. Perubahan cuaca dan harga pasar menjadi tantangan tersendiri, tapi semangat petani tak pernah padam.\r\n\r\nDengan teknologi dan kesadaran lingkungan, masa depan perkebunan bisa menjadi lebih lestari dan menyejahterakan.', '2025-06-23 11:01:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `link_shopee` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `link_shopee`, `deskripsi`, `gambar`, `created_at`) VALUES
(2, 'Kopi Robusta', 30000, '', 'Biji Benih Kopi Robusta', 'produk_1750650959_8760.jpg', '2025-06-23 10:55:59'),
(3, 'Kopi Arabica', 24000, '', 'Biji benih kopi Arabica', 'produk_1750651042_3326.jpg', '2025-06-23 10:57:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin') NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
