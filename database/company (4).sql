-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Agu 2024 pada 08.53
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(6, 'DETAIL COMPANY', 'Ini Adalah Detail Company PT Electronix Sinergi Nusantara', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae a officiis amet animi sint molestias culpa hic libero laborum quos nam magnam perferendis reprehenderit quas adipisci impedit, ad consectetur repellat modi eius minima officia. Labore excepturi molestiae omnis nobis nulla? Voluptatum nihil magni sequi. Totam quibusdam animi hic perferendis. Commodi!</p>', 'stats-img2.jpg');

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
(9, 'Portofolio', 'fas fa-fw fa-folder', 'portofolio'),
(10, 'Service', 'fas fa-newspaper fa-fw', 'service'),
(11, 'Contact', 'fas fa-fw fa-table', 'contact'),
(14, 'Partner', 'fas fa-fw fa-handshake', 'partner'),
(15, 'Comment', 'fas fa-fw fa-comment', 'comment');

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
(5, '<h2><strong><big>Electronix.ID<br>\r\nInnovation For the future</big></strong></h2>', 'cta-bg1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `jabatan` varchar(550) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id`, `name`, `jabatan`, `pesan`, `image`) VALUES
(1, 'Kipas Dindinding', 'Orang Pengangguran', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae a officiis amet animi sint molestias culpa hic libero laborum </p>', 'testimonials-411.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `image` varchar(550) NOT NULL,
  `alamat` varchar(550) NOT NULL,
  `telp` varchar(550) NOT NULL,
  `email` varchar(250) NOT NULL,
  `instagram` varchar(550) NOT NULL,
  `wa` varchar(250) NOT NULL,
  `maps` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `image`, `alamat`, `telp`, `email`, `instagram`, `wa`, `maps`) VALUES
(1, 'Logo_Electronix-removebg-preview_(1).png', 'Jl. Dr. Saharjo No.216, Menteng Dalam, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12870', '08971145897', 'support@electronix.id', 'https://www.instagram.com/electronix.esn?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==', 'https://wa.me/+6208971145897', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3096326466307!2d106.84442647490499!3d-6.222841493765169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3a44821ef7f:0xe297546a63c1f3cc!2sPT Electronix Sinergi Nusantara!5e0!3m2!1sid!2sid!4v1723643984689!5m2!1sid!2sid');

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
  `pesan` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `facebook`, `instagram`, `linkedin`, `jabatan`, `pesan`, `image`) VALUES
(2, 'RIZKY PANDU WIBOWO AJI', 'https://www.facebook.com/R.pandu206', 'https://www.instagram.com/mochka.cke/?hl=en', 'https://www.linkedin.com/in/rizky-pandu-67b91a277/', 'FreeLancer', '<p>Saya sebagai freelancer saya senang bisa membantu orang orang yang membutuhkan pertolongan mengembangkan sebuah website</p>', 'test1.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `partner`
--

INSERT INTO `partner` (`id`, `url`, `image`) VALUES
(1, 'https://bumn.go.id/', 'logo_bumn_png2.png'),
(2, 'https://www.coca-cola.com/id/id', 'Coca-Cola-Logo2.png'),
(3, 'https://www.coca-cola.com/id/id/brands/sprite', 'sprite_PNG987761.png'),
(4, 'https://www.kominfo.go.id/', 'logo-kominfo.png'),
(5, 'https://www.astra.co.id/', 'Astra-International.png'),
(6, 'https://www.kemdikbud.go.id/', 'png-clipart-indonesia-national-science-olympiad-ministry-of-education-and-culture-government-ministries-of-indonesia-indonesia-culture-culture-logo.png'),
(7, 'https://www.sinarmasland.com/', 'sinarmas-logo.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(550) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `client` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `image` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id`, `judul`, `slug`, `client`, `deskripsi`, `tipe`, `created_at`, `image`) VALUES
(1, 'Elektronik Industri', 'elektronik_industri', 'PT Kelapa Nyangkut', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A maiores doloribus saepe libero doloremque officia similique eaque obcaecati ea, sunt nobis veritatis quis quibusdam quo!<br />\r\n<br />\r\nConsectetur perferendis delectus illo assumenda quas quia cum! Ipsum illo tenetur maiores explicabo, eum velit provident veritatis repellendus, quos, ipsam asperiores omnis quis expedita. Beatae?</p>', 'Project', 1723711108, 'R2.jpeg'),
(2, 'Router Wifi', 'router_wifi', 'PT Kipas Didinding', '<p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. A maiores doloribus saepe libero doloremque officia similique eaque obcaecati ea, sunt nobis veritatis quis quibusdam quo!<br>\r\n<br>\r\nConsectetur perferendis delectus illo assumenda quas quia cum! Ipsum illo tenetur maiores explicabo, eum velit provident veritatis repellendus, quos, ipsam asperiores omnis quis expedita. Beatae?</strong></p>', 'Product', 1723711152, '7_Day_24Hr__SHOW_New_Releases_-_TOTOLINK_AC1200_Simultaneous_Dual_Band_Gigabit_Router_(A3002RU)3.jpeg'),
(3, 'Rumah Pintar Menggunakan Kartu RFID', 'rumah_pintar_rfid', 'PT Cicak Didinding', '<h3><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. A maiores doloribus saepe libero doloremque officia similique eaque obcaecati ea, sunt nobis veritatis quis quibusdam quo! Consectetur perferendis delectus illo assumenda quas quia cum!</strong><br />\r\n<br />\r\n<span class="marker">Ipsum illo tenetur maiores explicabo, eum velit provident veritatis repellendus, quos, ipsam asperiores omnis quis expedita. Beatae?</span></h3>', 'Innovation', 1723711219, 'Leading_RFID_Tags_Supplier_In_Market3.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `judul` varchar(550) NOT NULL,
  `slug` varchar(550) NOT NULL,
  `isi_service` text NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `image` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id`, `judul`, `slug`, `isi_service`, `created_by`, `created_at`, `image`) VALUES
(1, 'Technical Support', 'technical_support', '<p>Dukungan Teknis atau Technical Support adalah layanan yang diberikan oleh suatu perusahaan untuk membantu mengatasi masalah client dalam penerapan, pemakaian, dan konfigurasi perangkat keras atau perangkat lunak. </p>\r\n\r\n<p>Technical support secara umum diberikan dalam bentuk email, tiket ,sms, chat,  website, maupun melalui layanan telepon.</p>\r\n\r\n<p><strong>A. Multi-tier Technical Support</strong></p>\r\n\r\n<p>Klasifikasi dukungan teknis/technical support dibagi menjadi 3 tingkatan (tier) atau level . Hal ini bertujuan untuk membagi tugas dan tanggung jawab diantara teknisi dan untuk memberikan layanan yang maksimal kepada client.</p>', 'Admin', 1723569443, 'Tech_BPO_-_Your_Reliable_Partner_for_Exceptional_BPO_Services.jpeg'),
(3, 'Company Profile', 'company_profile', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit tempora ipsum maiores pariatur repudiandae. Nulla odio velit corrupti? Voluptate at eaque reprehenderit sequi odit voluptates aperiam, obcaecati, rerum ducimus quibusdam officiis doloremque aliquam earum atque consequatur. Laudantium, magni sed. Necessitatibus eius, fuga earum cum voluptates atque assumenda temporibus accusantium minima soluta, suscipit dolor. At, dolorem deleniti? Autem voluptatum impedit asperiores aliquam ad facere? Asperiores ipsam sint itaque soluta, ut velit distinctio, neque obcaecati natus nemo corporis odit tempore, explicabo aliquam.</p>', 'Admin', 1723752981, 'about4.jpg'),
(4, 'Penanganan Masalah', 'penanganan_masalah', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit tempora ipsum maiores pariatur repudiandae. Nulla odio velit corrupti? Voluptate at eaque reprehenderit sequi odit voluptates aperiam, obcaecati, rerum ducimus quibusdam<br>\r\n<br>\r\nofficiis doloremque aliquam earum atque consequatur. Laudantium, magni sed. Necessitatibus eius, fuga earum cum voluptates atque assumenda temporibus accusantium minima soluta,</p>', 'Admin', 1723753059, 'services31.jpg'),
(5, 'Test aja', 'test_aja', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae a officiis amet animi sint molestias culpa hic libero laborum quos nam magnam perferendis reprehenderit quas adipisci impedit, ad consectetur repellat modi eius minima officia. Labore excepturi molestiae omnis nobis nulla? Voluptatum nihil magni sequi. Totam quibusdam animi hic perferendis. Commodi!<br>\r\n<br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae a officiis amet animi sint molestias culpa hic libero laborum quos nam magnam perferendis reprehenderit quas adipisci impedit, ad consectetur repellat modi eius minima officia. Labore excepturi molestiae omnis nobis nulla? Voluptatum nihil magni sequi. Totam quibusdam animi hic perferendis. Commodi!</p>', 'Admin', 1723753666, 'app-1.jpg'),
(6, 'Test_aja5', 'test_aja5', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae a officiis amet animi sint molestias culpa hic libero laborum quos nam magnam perferendis reprehenderit quas adipisci impedit, ad consectetur repellat modi eius minima officia. Labore excepturi molestiae omnis nobis nulla? Voluptatum nihil magni sequi. Totam quibusdam animi hic perferendis. Commodi!</p>', 'Admin', 1723972928, 'b0c67128-9e2a-4a2f-86ab-ae081960a4d4.jpeg'),
(7, 'Test_aja6', 'test_aja6', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae a officiis amet animi sint molestias culpa hic libero laborum quos nam magnam perferendis reprehenderit quas adipisci impedit, ad consectetur repellat modi eius minima officia. Labore excepturi molestiae omnis nobis nulla? Voluptatum nihil magni sequi. Totam quibusdam animi hic perferendis. Commodi!</p>', 'Admin', 1723973024, 'download_(1).jpeg');

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
(3, 'Karyawan 1', 'karyawan123@gmail.com', '$2y$10$tZdWKo6gbsGXTfiJg3tojOr9zOMjPQojf1vqS4WHqeCBv7yrv/BTe', 2, 'user.png', 1721034588),
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
(5, 'VISION AND MISSION COMPANY', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta odio porro quidem qui sed repellendus eveniet ex, labore perferendis in culpa fugiat veniam hic natus sint ab eaque magni. Repudiandae?</p>\r\n\r\n<ul>\r\n <li>1. Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>\r\n <li>2. Lorem ipsum dolor sit amet consectetur adipisicing elit</li>\r\n</ul>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_image`
--
ALTER TABLE `banner_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `banner_image`
--
ALTER TABLE `banner_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
