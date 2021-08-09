-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2021 pada 12.28
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inopak_plus`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `tb_brainstorming`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tb_brainstorming` (
`tanggal` varchar(20)
,`id_ikm` varchar(50)
,`jenis_produk` varchar(80)
,`merek` varchar(80)
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
,`jenis_kemasan` varchar(80)
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
-- Struktur dari tabel `tb_formulir`
--

CREATE TABLE `tb_formulir` (
  `no` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `id_ikm` varchar(50) NOT NULL,
  `jenis_produk` varchar(80) NOT NULL,
  `merek` varchar(80) NOT NULL,
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
  `jenis_kemasan` varchar(80) NOT NULL,
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

INSERT INTO `tb_formulir` (`no`, `tanggal`, `id_ikm`, `jenis_produk`, `merek`, `komposisi`, `varian_rasa`, `kelebihan_produk`, `tagline`, `gramasi`, `gramasi_new`, `harga`, `kapasitas_produk`, `omset`, `segmentasi`, `jenis_kemasan`, `nama_perusahaan`, `halal`, `pirt`, `legalitas_lainnya`, `media_penjualan`, `redaksi`, `ket_lain`) VALUES
(2, '03-05-2021', 'IKM001', 'Keripik Bakso', 'SIBIDA', 'Bawang Goreng, Minyak Goreng', 'Enak, Gurih , Nikmat', 'Kelembutan menyertai Anda', 'Legend Never Surrender', 5000, 0, '40.000', '', '', 'PEDAS, ORIGINAL, DAUN JERUK', '', 'CV.INOPAK', '9823137678318', '85465544122245', '', 'Facebook, Watsapp', 'TURABI merupakan ubi ungu yang diolah menjadi makanan dalam bentuk sistik. teksturnya yang sangat renyah dan juga praktis untuk dibawa, cocok disajikan sebagai cemilan saat berkumpul atau bisa dijadikan alternatif pilihan yang pas sebagai oleh - oleh khas dari Baturaden. \r\n', '-'),
(4, '04-05-2021', 'IKM003', 'Keripik Tape', 'Caca Marica', 'asdad', 'Kkk', 'Ena, Gurih, Nikmat', 'adssadas', 123, 50, '1231231', 'hari', 'Bulan', 'Ibu - Ibu', '', 'adasdas', 'adsa', 'adas', 'asdas', 'adasd', 'sdadsaasdadasdadsdad', 'asdasasdasdas'),
(5, '04-05-2021', 'IKM004', '', '', '', '', '', '', 0, 0, '', 'hari', 'Bulan', '', '', 'KWT Sinar Tani', '15190034951118', '2153304070961-21', '', 'Facebook', '', ''),
(7, '04-05-2021', 'IKM006', 'asdasda', 'aadsadsa', 'asdasd', 'adasd', 'asdsa', 'asdsad', 1312, 0, '231.321', 'hari', 'Bulan', 'dsadasd', '', 'KWT Sinar Tani', '15190034951118', '2153304070961-21', '', 'Facebook', 'asdasd', 'adsa'),
(10, '05-05-2021', 'IKM007', 'KUE KERING', 'CIBADUY', 'Tepung', 'Original', 'Renyah Gurih Nikmat', 'Kelembutan di setiap gigitan Anda', 90, 0, '8.000', 'hari', 'Bulan', 'oleh-oleh khas baturaden', '', 'KUBE PKH Kenanga', '98882771262', '012288121012', '-', 'facebook', 'TURABI merupakan ubi ungu yang diolah menjadi makanan dalam bentuk sistik. teksturnya yang sangat renyah dan juga praktis untuk dibawa, cocok disajikan sebagai cemilan saat berkumpul atau bisa dijadikan alternatif pilihan yang pas sebagai oleh - oleh khas dari Baturaden. ', '-');

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
(2, 'KT002', 'CIC Kota Cirebon'),
(8, 'KT003', 'Kota Banyuwangi'),
(9, 'KT004', 'Kota Cilacap'),
(10, 'KT005', 'Aceh'),
(11, 'KT006', 'SALAWU'),
(21, 'KT007', 'SUMENEP'),
(22, 'KT008', 'BANGKALAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_redaksi`
--

CREATE TABLE `tb_redaksi` (
  `id_ikm` varchar(30) NOT NULL,
  `redaksi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ukm`
--

CREATE TABLE `tb_ukm` (
  `id_ikm` varchar(30) NOT NULL,
  `id_kota` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_produk` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `telp` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ukm`
--

INSERT INTO `tb_ukm` (`id_ikm`, `id_kota`, `nama`, `alamat`, `jenis_produk`, `gender`, `kelas`, `telp`) VALUES
('IKM001', 'KT002', 'Deden Mulyana', 'Jl.Mangkoko No.40 Kota Tasikmalaya', 'Keripik Bakso', 'L', 'A', '2147483647'),
('IKM003', 'KT002', 'SUSAN SUSANTI', 'Jl.Indihiang No.50 Kota Tasikmalaya', 'Keripik Tape', 'L', 'B', '2147483647'),
('IKM004', 'KT002', 'Cecep Pramatama', 'Jl.Mangkoko No.40 Indihiang Kota Tasikmalaya', 'Gula Aren Semut', 'L', 'B', '2147483647'),
('IKM006', 'KT002', 'Agung Setiawan', 'cisayong', 'Tiwul Instan', 'L', 'B', '2147483647'),
('IKM007', 'KT002', 'NINA SOLIHAH', 'CISAYONG', 'KUE KERING', 'P', 'A', '087776778665');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(2) NOT NULL,
  `id_kota` varchar(20) NOT NULL,
  `gambar` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `id_kota`, `gambar`) VALUES
(4, 'admincirebon', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1, 'KT002', '');

-- --------------------------------------------------------

--
-- Struktur untuk view `tb_brainstorming`
--
DROP TABLE IF EXISTS `tb_brainstorming`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tb_brainstorming`  AS  select `m`.`tanggal` AS `tanggal`,`m`.`id_ikm` AS `id_ikm`,`m`.`jenis_produk` AS `jenis_produk`,`m`.`merek` AS `merek`,`m`.`komposisi` AS `komposisi`,`m`.`varian_rasa` AS `varian_rasa`,`m`.`kelebihan_produk` AS `kelebihan_produk`,`m`.`tagline` AS `tagline`,`m`.`gramasi` AS `gramasi`,`m`.`gramasi_new` AS `gramasi_new`,`m`.`harga` AS `harga`,`m`.`kapasitas_produk` AS `kapasitas_produk`,`m`.`omset` AS `omset`,`m`.`segmentasi` AS `segmentasi`,`m`.`jenis_kemasan` AS `jenis_kemasan`,`m`.`nama_perusahaan` AS `nama_perusahaan`,`m`.`halal` AS `halal`,`m`.`pirt` AS `pirt`,`m`.`legalitas_lainnya` AS `legalitas_lainnya`,`m`.`media_penjualan` AS `media_penjualan`,`m`.`redaksi` AS `redaksi`,`m`.`ket_lain` AS `ket_lain`,`s`.`id_kota` AS `id_kota`,`s`.`nama` AS `nama`,`s`.`alamat` AS `alamat`,`s`.`gender` AS `gender`,`s`.`kelas` AS `kelas`,`s`.`telp` AS `telp` from (`tb_formulir` `m` join `tb_ukm` `s` on(`m`.`id_ikm` = `s`.`id_ikm`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_formulir`
--
ALTER TABLE `tb_formulir`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id_ikm` (`id_ikm`);

--
-- Indeks untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_formulir`
--
ALTER TABLE `tb_formulir`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
