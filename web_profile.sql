-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2021 at 03:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

CREATE TABLE `about_me` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_telepon` int(15) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `nama_orang_tua` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_me`
--

INSERT INTO `about_me` (`id_user`, `nama_lengkap`, `umur`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `nomor_telepon`, `tinggi_badan`, `berat_badan`, `nama_orang_tua`, `status`) VALUES
(1, 'Anita Indah Permata Sari', 20, 'Perempuan', 'Cirebon', '2001-03-25', 'Jalan Taman Indah 4 Blok D1 Nomor 127', 2147483647, 161, 75, 'Berthiana Susanthy', 'Mahasiswi');

-- --------------------------------------------------------

--
-- Table structure for table `contact_me`
--

CREATE TABLE `contact_me` (
  `id_contact` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL,
  `nomor_telepon` int(15) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_me`
--

INSERT INTO `contact_me` (`id_contact`, `id_user`, `email`, `github`, `nomor_telepon`, `instagram`, `youtube`) VALUES
(1, 1, 'nengitaanaknyaii25\r\n@gmail.com', 'https://github.com/\r\nanitaindahpermatasari', 2147483647, 'https://instagram.com/\r\nanita_ips', 'https://youtube.com/channel/\r\nanitaindahpermatasari');

-- --------------------------------------------------------

--
-- Table structure for table `history_pendidikan`
--

CREATE TABLE `history_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenjang` varchar(100) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `nilai_akhir` decimal(10,2) NOT NULL,
  `prestasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_pendidikan`
--

INSERT INTO `history_pendidikan` (`id_pendidikan`, `id_user`, `jenjang`, `nama_instansi`, `jurusan`, `tahun`, `nilai_akhir`, `prestasi`) VALUES
(1, 1, 'Sarjana', 'Universitas Catur Insan Cendekia', 'Sistem Informasi Enterprise', '2019-Sekarang', '3.95', 'Anggota Tim Penelitian PHP2D dan Ketua Tim Penelitian PKMK'),
(5, 1, 'SMA/SMK/SLTA', 'SMA Putra Nirmala', 'Ilmu Pengetahuan Alam', '2016-2019', '83.00', 'Nilai Rata-Rata UN 79 dan US 83'),
(6, 1, 'SMP/SLTP', 'SMP Putra Nirmala', '-', '2013-2016', '88.00', 'Nilai Rata-Rata UN 80 dan US 88'),
(7, 1, 'SD/MI', 'SD Putra Nirmala', '-', '2007-2013', '78.00', 'Nilai Rata-Rata UN 75 dan US 78');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id_pengalaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `jenis_instansi` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `tanggung_jawab` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id_pengalaman`, `id_user`, `nama_instansi`, `jenis_instansi`, `jabatan`, `tahun`, `tanggung_jawab`) VALUES
(1, 1, 'Apotek Pasuketan Pusat', 'Perusahaan', 'Bagian Gudang Obat', '2015 (1 Bulan)', 'Mencatat Transaksi Obat Pada Kartu Stok Obat'),
(2, 1, 'Toko Buku Gramedia Cipto Cirebon', 'Perusahaan', 'Bagian Novel', '2018 (9 Hari)', 'Menata Novel, Membungkus Novel, Melayani Konsumen'),
(3, 1, 'PT Carmella Gustavindo', 'Perusahaan', 'Admin Bagian Gudang', '2019 (4 Bulan)', 'Mencatat Transaksi Alkes Pada Kartu Stok, Menata Alkes di Gudang, Menerima Barang Datang, Melakukan Retur, Melakukan Stok Opname'),
(4, 1, 'Himpunan Mahasiswa Sistem Informasi', 'Organisasi', 'Divisi Pengembangan Inovasi', '2019-2020', 'Mencari dan Melaksanakan Lomba atau Kegiatan bagi Kemajuan Mahasiswa Sistem Informasi'),
(5, 1, 'UKM Campus Family Ministry', 'Organisasi', 'Anggota', '2019-Sekarang', 'Melakukan Bakti Sosial, Mengadakan Kegiatan Pendalaman Rohani Bersama'),
(6, 1, 'Badan Koordinasi Mahasiswa', 'Organisasi', 'Sekertaris', '2020-Sekarang', 'Berpartisipasi dalam Setiap Kegiatan serta Membuat Surat, Proposal Kegiatan, Laporan Pertanggung Jawaban Kegiatan '),
(7, 1, 'Program Holistik Pembinaan  Dan Pemberdayaan Desa (PHP2D)', 'Penelitian', 'Anggota Tim', '2021', 'Studi Kasus \"Diversifikasi Pengembangan Argo Edu Wisata Bunga Rosella Berbasis Industri Kreatif Dengan Memberdayakan Masyarakat Sebagai Peningkatan Taraf Hidup Di Desa Sindangjawa\"'),
(8, 1, 'Program Kreativitas Mahasiswa Kewirausahaan (PKMK)', 'Penelitian', 'Ketua Tim', '2021', 'Studi Kasus \"Upaya Pengolahan Kefir Sebagai Alternatif untuk Menurunkan Kadar Gula dalam Darah dan Merawat Kulit Wajah\"');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `image` text NOT NULL,
  `role_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `image`, `role_id`) VALUES
(1, 'Anita Indah Permata Sari', 'nengitaanaknyaii25@gmail.com', '$2y$10$K9uomw0vf3SvadwKj31lwuN075kgOA7cjd.Y82Y4UMCYY7f.jbQqW', 'default.jpg', 2),
(2, 'Anita Indah Permata Sari', 'anita@gmail.com', '12345', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `contact_me`
--
ALTER TABLE `contact_me`
  ADD PRIMARY KEY (`id_contact`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `history_pendidikan`
--
ALTER TABLE `history_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_me`
--
ALTER TABLE `about_me`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_me`
--
ALTER TABLE `contact_me`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_pendidikan`
--
ALTER TABLE `history_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id_pengalaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_me`
--
ALTER TABLE `contact_me`
  ADD CONSTRAINT `contact_me_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `about_me` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history_pendidikan`
--
ALTER TABLE `history_pendidikan`
  ADD CONSTRAINT `history_pendidikan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `about_me` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `pengalaman_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `about_me` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
