-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2021 pada 20.13
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2basic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `satuan`, `id_jenis`, `id_supplier`, `harga`, `stok`) VALUES
(1, 'A1', 'Uniqlo', '1 Kg', 1, 1, 250, 3),
(2, 'A2', 'Nike', '7 kg', 2, 3, 500, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `elektronik`
--

CREATE TABLE `elektronik` (
  `no` int(15) NOT NULL,
  `no_` int(15) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `no_jenisbrg` int(15) NOT NULL,
  `no_merk` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_panggilan` varchar(20) NOT NULL,
  `jekel` varchar(15) NOT NULL,
  `daerah_asal` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmpt_kuliah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`nama_lengkap`, `nama_panggilan`, `jekel`, `daerah_asal`, `tgl_lahir`, `tmpt_kuliah`) VALUES
('Virdapiliacani', 'Virda', 'Pr', 'Sijunjung', '2001-02-04', 'PNP'),
('Azizy', 'Zizy', 'Pr', 'Bukittinggi', '2000-06-10', 'PNP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`, `keterangan`) VALUES
(1, 'Crewneck', 'Pakaian'),
(2, 'Cardigan', 'Pakaian'),
(3, 'Celana jeans', 'Celana'),
(4, 'Jaket', 'Pakaian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisbarang`
--

CREATE TABLE `jenisbarang` (
  `no` int(15) NOT NULL,
  `no_merk` int(15) NOT NULL,
  `jenisbrg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenisbarang`
--

INSERT INTO `jenisbarang` (`no`, `no_merk`, `jenisbrg`) VALUES
(1, 1, 'TV'),
(2, 2, 'Kulkas'),
(3, 3, 'Mesin Cuci');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kos`
--

CREATE TABLE `kos` (
  `no_kamar` int(5) NOT NULL,
  `nama_panggilan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kos`
--

INSERT INTO `kos` (`no_kamar`, `nama_panggilan`) VALUES
(1, 'Virda'),
(2, 'Zizy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) NOT NULL,
  `nim` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jekel` char(1) NOT NULL,
  `id_prodi` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jekel`, `id_prodi`, `email`, `alamat`) VALUES
(1, '1911082031', 'Fitri Chairani', 'P', 3, 'chairanifitri9@gmail.com', 'Agam'),
(2, '1911082010', 'Luthfiyyah Riznisa', 'P', 3, 'Luthfiyyahriznisa@gmail.com', 'Padang'),
(3, '1911082021', 'Srintika Yuni Kharisma', 'P', 2, 'Srintikayk@gmail.com', 'Bukittinggi'),
(4, '1911081001', 'Virdapiliacani', 'P', 1, 'virdapiliacani@gmail.com', 'Sijunjung'),
(5, '1911081007', 'Fikry', 'L', 3, 'fikry@gmail.com', 'Batusangkar'),
(6, '1911081006', 'Gusnia', 'P', 1, 'gusnia@gmail.com', 'Solok'),
(7, '1911082012', 'Annisa Barokah ', 'P', 2, 'annisabarokah@gmail.com', 'Agam'),
(8, '1911082013', 'Ramadhana Fitriansyah', 'L', 3, 'ramadhanafitriansyah@gmail.com', 'Bukittinggi'),
(9, '1911081002', 'Gilang Ramadhan', 'L', 2, 'Gilangramadhan@gmai.com', 'Payakumbuh'),
(10, '1911081020', 'Audra Najmi Maghfira', 'P', 1, 'audranajmi@gmail.com', 'Padang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `no` int(15) NOT NULL,
  `merk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`no`, `merk`) VALUES
(1, 'Panasonic'),
(2, 'LG'),
(3, 'Samsung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id` int(10) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id`, `prodi`, `keterangan`) VALUES
(1, 'Teknik Komputer', 'TK'),
(2, 'Manajemen Informatika', 'MI'),
(3, 'Teknologi Rekayasa Perangkat Lunak', 'TRPL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `notelp`, `email`, `alamat`) VALUES
(1, 'Heaven Thrift Bandung', '082413245560', 'heaventhrift@gmail.com', 'Bandung'),
(2, 'Grosir Sweater55', '081345326588', 'grosirsweater55@gmail.com', 'Padang'),
(3, 'Thrift Tanah Abang', '082334562350', 'tanahabgthrift2@gmail.com', 'Jakarta');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barang_supplier` (`id_supplier`),
  ADD KEY `barang_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`no`),
  ADD KEY `no_jenisbrg` (`no_jenisbrg`),
  ADD KEY `no_merk` (`no_merk`);

--
-- Indeks untuk tabel `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`nama_panggilan`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `jenisbarang`
--
ALTER TABLE `jenisbarang`
  ADD PRIMARY KEY (`no`),
  ADD KEY `no_merk` (`no_merk`);

--
-- Indeks untuk tabel `kos`
--
ALTER TABLE `kos`
  ADD PRIMARY KEY (`no_kamar`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `no` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenisbarang`
--
ALTER TABLE `jenisbarang`
  MODIFY `no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kos`
--
ALTER TABLE `kos`
  MODIFY `no_kamar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`),
  ADD CONSTRAINT `barang_supplier` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);

--
-- Ketidakleluasaan untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  ADD CONSTRAINT `elektronik_ibfk_1` FOREIGN KEY (`no_jenisbrg`) REFERENCES `jenisbarang` (`no`),
  ADD CONSTRAINT `elektronik_ibfk_2` FOREIGN KEY (`no_merk`) REFERENCES `merk` (`no`);

--
-- Ketidakleluasaan untuk tabel `jenisbarang`
--
ALTER TABLE `jenisbarang`
  ADD CONSTRAINT `jenisbarang_ibfk_1` FOREIGN KEY (`no_merk`) REFERENCES `merk` (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
