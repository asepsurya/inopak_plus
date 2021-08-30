-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Agu 2021 pada 10.35
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inopak_sistem`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `tb_brainstorming`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tb_brainstorming` (
`tanggal` varchar(20)
,`id_pengajuan` int(11)
,`id_ikm` varchar(50)
,`jenis_produk` varchar(80)
,`merek` text
,`komposisi` text
,`varian_rasa` text
,`kelebihan_produk` text
,`tagline` text
,`gramasi` int(11)
,`gramasi_new` int(11)
,`harga` varchar(20)
,`kapasitas_produk` varchar(50)
,`omset` varchar(80)
,`segmentasi` varchar(80)
,`jenis_kemasan` text
,`nama_perusahaan` varchar(90)
,`halal` varchar(90)
,`pirt` varchar(50)
,`legalitas_lainnya` varchar(80)
,`media_penjualan` varchar(80)
,`redaksi` text
,`ket_lain` text
,`id_kota` varchar(30)
,`nama` varchar(30)
,`alamat` text
,`gender` varchar(20)
,`kelas` varchar(30)
,`telp` varchar(40)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cek`
--

CREATE TABLE `tb_cek` (
  `id_ikm` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL COMMENT 'aktif dan tidak-aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_cek`
--

INSERT INTO `tb_cek` (`id_ikm`, `status`) VALUES
('8', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_formulir`
--

CREATE TABLE `tb_formulir` (
  `id_pengajuan` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `id_ikm` varchar(50) NOT NULL,
  `jenis_produk` varchar(80) NOT NULL,
  `merek` text NOT NULL,
  `komposisi` text NOT NULL,
  `varian_rasa` text NOT NULL,
  `kelebihan_produk` text NOT NULL,
  `tagline` text NOT NULL,
  `gramasi` int(11) NOT NULL,
  `gramasi_new` int(11) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `kapasitas_produk` varchar(50) NOT NULL,
  `omset` varchar(80) NOT NULL,
  `segmentasi` varchar(80) NOT NULL,
  `jenis_kemasan` text NOT NULL,
  `nama_perusahaan` varchar(90) NOT NULL,
  `halal` varchar(90) NOT NULL,
  `pirt` varchar(50) NOT NULL,
  `legalitas_lainnya` varchar(80) NOT NULL,
  `media_penjualan` varchar(80) NOT NULL,
  `redaksi` text NOT NULL,
  `ket_lain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_formulir`
--

INSERT INTO `tb_formulir` (`id_pengajuan`, `tanggal`, `id_ikm`, `jenis_produk`, `merek`, `komposisi`, `varian_rasa`, `kelebihan_produk`, `tagline`, `gramasi`, `gramasi_new`, `harga`, `kapasitas_produk`, `omset`, `segmentasi`, `jenis_kemasan`, `nama_perusahaan`, `halal`, `pirt`, `legalitas_lainnya`, `media_penjualan`, `redaksi`, `ket_lain`) VALUES
(1, '30-08-2021', '8', 'asdadas', 'asdasd', 'adasd', 'asdasd', 'asdasdasd', 'adsad', 200, 0, '1.323.123', 'hari', 'Bulan', 'adsasd', '', 'asdasd', '05776554112', '085541256668', 'adasd', 'asdasd', 'adsad', 'asdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kota`
--

CREATE TABLE `tb_kota` (
  `no` int(11) NOT NULL,
  `id_kota` varchar(30) NOT NULL,
  `nama_kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kota`
--

INSERT INTO `tb_kota` (`no`, `id_kota`, `nama_kota`) VALUES
(1, 'KT001', 'Kota Tasikmalaya'),
(6, 'KT004', 'Bank Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_media`
--

CREATE TABLE `tb_media` (
  `id_pengajuan` varchar(30) NOT NULL,
  `id_ikm` varchar(30) NOT NULL,
  `gambar_produk` text NOT NULL,
  `gambar_ruang_produksi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_media`
--

INSERT INTO `tb_media` (`id_pengajuan`, `id_ikm`, `gambar_produk`, `gambar_ruang_produksi`) VALUES
('5', '6', '09-05-2021-myw3schoolsimage.jpg', ''),
('5', '6', '09-05-2021-myw3schoolsimage.jpg', ''),
('5', '6', '09-05-2021-myw3schoolsimage.jpg', ''),
('5', '6', '09-05-2021-WhatsApp Image 2021-04-05 at 3.42.56 PM.jpeg', ''),
('5', '6', '09-05-2021-myw3schoolsimage.jpg', ''),
('5', '6', '09-05-2021-logo0.png', ''),
('5', '1', '11-05-2021-myw3schoolsimage.jpg', ''),
('5', '', '11-05-2021-WhatsApp Image 2021-04-05 at 3.42.56 PM.jpeg', '1'),
('5', '1', '11-05-2021-logo0.png', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id_pengajuan_new` int(11) NOT NULL,
  `id_ikm` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `keterangan` varchar(80) NOT NULL,
  `id_kota` varchar(80) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`id_pengajuan_new`, `id_ikm`, `tanggal`, `nama`, `jenis_produk`, `keterangan`, `id_kota`, `status`) VALUES
(10, '6', '09-05-2021', 'IIN SETIWAN', 'Keripik Pisang', '-', 'KT001', '1'),
(11, '6', '09-05-2021', 'IIN SETIWAN', 'BASO IKAN', '-', 'KT001', '1'),
(12, '1', '11-05-2021', 'SRI SARI', 'Tiwul Instan', '-', 'KT001', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ukm`
--

CREATE TABLE `tb_ukm` (
  `id_ikm` varchar(30) NOT NULL,
  `id_kota` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `telp` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ukm`
--

INSERT INTO `tb_ukm` (`id_ikm`, `id_kota`, `nama`, `alamat`, `gender`, `kelas`, `telp`) VALUES
('', '', '', '', '', '', ''),
('1', 'KT001', 'SRI SARI', 'Ruko Hamas, Jl. Pancasila No.1, Lengkongsari, Tawang, Tasikmalaya, West Java 46112', 'Perempuan', 'C', '(+62)81-323-899-376'),
('6', 'KT001', 'IIN SETIAWAN', 'Jl.Mangkoko No.40 Kel. Sukamajukidul Kecamatan Indihiang Kota Tasikmalaya', 'Perempuan', 'B', '(+62)85-555-455-522'),
('62001', 'adm782924249', 'SRI MULYA SARI', 'Jl.Mangkoko No.40 Kel. Sukamajukidul Kecamatan Indihiang Kota Tasikmalaya', 'L', 'sadasd', '(+62)44-533-333-333'),
('62002', 'adm782924249', 'SRI MULYA SARI', 'Jl.Mangkoko No.40 Kel. Sukamajukidul Kecamatan Indihiang Kota Tasikmalaya', 'P', 'A', '(+62)08-132-389-937'),
('62003', 'adm782924249', 'SRI MULYA SARI', 'Jl.Mangkoko No.40 Kel. Sukamajukidul Kecamatan Indihiang Kota Tasikmalaya', 'Perempuan', 'A', '(+62)08-132-389-937'),
('8', 'KT004', 'Rani  Nurnawati', 'asdsadas', 'P', 'B', '(+62)08-132-389-937');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_ikm` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(2) NOT NULL,
  `id_kota` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `online` int(11) NOT NULL COMMENT '1=online 0=offline'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_ikm`, `nama`, `username`, `password`, `level`, `id_kota`, `gambar`, `online`) VALUES
(1, 'SRI SARI', 'bisnistsm4@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2, 'KT001', 'a.jpg', 1),
(2, 'Asep Surya  Somantri', 'asepsurya1998@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 'KT001', 'a.jpg', 1),
(6, 'IIN SETIWAN', 'iinsetiawan2021@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2, 'KT001', 'a.jpg', 1),
(7, 'Admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 2, 'KT001', '', 1),
(8, 'Rani  Nurnawati', 'raninurnawati2021@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2, 'KT004', 'a.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur untuk view `tb_brainstorming`
--
DROP TABLE IF EXISTS `tb_brainstorming`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tb_brainstorming`  AS SELECT `m`.`tanggal` AS `tanggal`, `m`.`id_pengajuan` AS `id_pengajuan`, `m`.`id_ikm` AS `id_ikm`, `m`.`jenis_produk` AS `jenis_produk`, `m`.`merek` AS `merek`, `m`.`komposisi` AS `komposisi`, `m`.`varian_rasa` AS `varian_rasa`, `m`.`kelebihan_produk` AS `kelebihan_produk`, `m`.`tagline` AS `tagline`, `m`.`gramasi` AS `gramasi`, `m`.`gramasi_new` AS `gramasi_new`, `m`.`harga` AS `harga`, `m`.`kapasitas_produk` AS `kapasitas_produk`, `m`.`omset` AS `omset`, `m`.`segmentasi` AS `segmentasi`, `m`.`jenis_kemasan` AS `jenis_kemasan`, `m`.`nama_perusahaan` AS `nama_perusahaan`, `m`.`halal` AS `halal`, `m`.`pirt` AS `pirt`, `m`.`legalitas_lainnya` AS `legalitas_lainnya`, `m`.`media_penjualan` AS `media_penjualan`, `m`.`redaksi` AS `redaksi`, `m`.`ket_lain` AS `ket_lain`, `s`.`id_kota` AS `id_kota`, `s`.`nama` AS `nama`, `s`.`alamat` AS `alamat`, `s`.`gender` AS `gender`, `s`.`kelas` AS `kelas`, `s`.`telp` AS `telp` FROM (`tb_formulir` `m` join `tb_ukm` `s` on(`m`.`id_ikm` = `s`.`id_ikm`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_cek`
--
ALTER TABLE `tb_cek`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indeks untuk tabel `tb_formulir`
--
ALTER TABLE `tb_formulir`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan_new`);

--
-- Indeks untuk tabel `tb_ukm`
--
ALTER TABLE `tb_ukm`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_ikm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_formulir`
--
ALTER TABLE `tb_formulir`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id_pengajuan_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_ikm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
