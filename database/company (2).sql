-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2024 pada 12.12
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `hb` varchar(255) NOT NULL,
  `motto` varchar(1000) NOT NULL,
  `detail_bio` varchar(1000) NOT NULL,
  `image` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `hb`, `motto`, `detail_bio`, `image`) VALUES
(4, 'DETAIL COMPANY', 'Ini Adalah Detail Company PT Electronix', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae a officiis amet animi sint molestias culpa hic libero laborum quos nam magnam perferendis reprehenderit quas adipisci impedit, ad consectetur repellat modi eius minima officia. Labore excepturi molestiae omnis nobis nulla? Voluptatum nihil magni sequi. Totam quibusdam animi hic perferendis. Commodi!</p>', 'stats-img.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `nama`, `icon`, `url`) VALUES
(4, 'About', 'fas fa-fw fa-user-cog', 'about\r\n\r\n\r\n\r\n'),
(6, 'Banner Image', 'fas fa-fw fa-photo-video', 'banner_image'),
(7, 'Visi dan Misi', 'fas fa-fw fa-list', 'visi_misi'),
(8, 'Karyawan', 'fas fa-fw fa-cash-register', 'karyawan'),
(9, 'Portofolio', 'fas fa-fw fa-folder', 'portofolio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_image`
--

CREATE TABLE `banner_image` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banner_image`
--

INSERT INTO `banner_image` (`id`, `text`, `image`) VALUES
(5, '<h1>PT Electronix.id<br>\r\nInovation for future</h1>', 'hero-bg.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `facebook`, `instagram`, `linkedin`, `jabatan`, `image`) VALUES
(1, 'Rizky Pandu Wibowo Aji', 'https://www.facebook.com/R.pandu206', 'https://www.instagram.com/mochka.cke/?hl=en', 'https://www.linkedin.com/in/rizky-pandu-67b91a277/', 'Web Developer', 'WhatsApp_Image_2024-06-03_at_19_53_19.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(550) NOT NULL,
  `deskripsi` text NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `image` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id`, `judul`, `deskripsi`, `tipe`, `image`) VALUES
(1, 'Poster', '<p><strong><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum omnis accusamus quibusdam illum modi ea sint voluptas aut, magnam sed.</em></strong></p>', 'project', 'Brochure_Astra_Virtue_1.png'),
(2, 'Router Wifi', '<p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates excepturi iste ea eaque perferendis harum numquam adipisci dolor officia beatae.</strong></p>', 'product', '7_Day_24Hr__SHOW_New_Releases_-_TOTOLINK_AC1200_Simultaneous_Dual_Band_Gigabit_Router_(A3002RU).jpeg'),
(3, 'Kunci Rumah RFID', '<p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates excepturi iste ea eaque perferendis harum numquam adipisci dolor officia beatae.</strong></p>', 'innovation', 'Leading_RFID_Tags_Supplier_In_Market.jpeg'),
(4, 'Penghargaan Collaborasi', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates excepturi iste ea eaque perferendis harum numquam adipisci dolor officia beatae.</p>', 'awards', '705a9897-0940-4fbc-963b-1e4588fbf342.jpeg'),
(5, 'Partnership bersama PT ...', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates excepturi iste ea eaque perferendis harum numquam adipisci dolor officia beatae.</p>', 'partnership', 'CNP_Assurances_and_CACEIS_Extend_Partnership_to_Enhance_Asset_Servicing.jpeg'),
(7, 'Layanan Technical Support', '<p>Lorem Ipsum dolor sit amet consectetur adipisicing elit.</p>', 'tech-support', 'Tech_BPO_-_Your_Reliable_Partner_for_Exceptional_BPO_Services1.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `as_id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `data_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `as_id`, `foto`, `data_created`) VALUES
(3, 'Rizky Pandu', 'rizkypandu206@gmail.com', '$2y$10$tZdWKo6gbsGXTfiJg3tojOr9zOMjPQojf1vqS4WHqeCBv7yrv/BTe', 2, 'user.png', 1721034588),
(4, 'Admin', 'admin123@gmail.com', '$2y$10$zJV.thxScalJmoiMlXXuWeypprwEQDIub/8RG3eHZm8Dsr.NsFfkm', 1, 'user.png', 1721045271);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `header` varchar(999) NOT NULL,
  `visi_misi` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `header`, `visi_misi`) VALUES
(4, 'VISION AND MISSION COMPANY', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta odio porro quidem qui sed repellendus eveniet ex, labore perferendis in culpa fugiat veniam hic natus sint ab eaque magni. Repudiandae?</p>\r\n\r\n<ul>\r\n	<li>1.&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>\r\n	<li>2.&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>\r\n	<li>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. &nbsp;</li>\r\n</ul>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner_image`
--
ALTER TABLE `banner_image`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `banner_image`
--
ALTER TABLE `banner_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
