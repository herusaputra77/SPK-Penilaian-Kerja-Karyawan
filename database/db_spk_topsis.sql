-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Sep 2021 pada 03.56
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk_topsis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_id`
--

CREATE TABLE `role_id` (
  `id_role` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role_id`
--

INSERT INTO `role_id` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Pimpinan'),
(3, 'Karyawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_alternatif` varchar(100) NOT NULL,
  `alternatif` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_alternatif`, `alternatif`, `keterangan`) VALUES
('A001', '6', 'Karyawan'),
('A002', '7', 'Karyawan'),
('A003', '8', 'Karyawan'),
('A004', '9', 'Karyawan'),
('A005', '10', 'Karyawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nm_karyawan` varchar(35) NOT NULL,
  `nilai` double NOT NULL,
  `rangking` int(11) NOT NULL,
  `jabatan` varchar(35) NOT NULL,
  `keterangan` varchar(35) NOT NULL,
  `keputusan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `nip`, `nm_karyawan`, `nilai`, `rangking`, `jabatan`, `keterangan`, `keputusan`) VALUES
(46, 110012, 'Harini', 0.356, 4, 'Karyawan', 'Karyawan', 'Liburan 3 hari'),
(47, 110012, 'Sunarto', 0.654, 2, 'Karyawan', 'Karyawan', 'Kesempatan Naik Jabatan'),
(48, 110014, 'Syafrinal', 0.734, 1, 'Karyawan', 'Karyawan', 'Kesempatan Naik Jabatan'),
(49, 110015, 'Yuliarti', 0.289, 5, 'Karyawan', 'Karyawan', 'Surat Peringatan'),
(50, 110017, 'Defridawati', 0.598, 3, 'Karyawan', 'Karyawan', 'Liburan 3 hari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` varchar(100) NOT NULL,
  `nm_kriteria` varchar(100) NOT NULL,
  `bobot` int(11) NOT NULL,
  `sifat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `nm_kriteria`, `bobot`, `sifat`) VALUES
('K001', 'Absensi', 15, 'B'),
('K002', 'Inisiatif', 20, 'B'),
('K003', 'Prestasi', 20, 'B'),
('K004', 'Kerjasama', 10, 'B'),
('K005', 'Ketertiban', 10, 'B'),
('K006', 'Kinerja', 15, 'B'),
('K007', 'Sosial', 10, 'B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_matrix`
--

CREATE TABLE `tb_nilai_matrix` (
  `id_matrix` int(11) NOT NULL,
  `id_alternatif` varchar(11) NOT NULL,
  `id_kriteria` varchar(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai_matrix`
--

INSERT INTO `tb_nilai_matrix` (`id_matrix`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(29, 'A001', 'K001', 75),
(30, 'A001', 'K002', 80),
(31, 'A001', 'K003', 85),
(32, 'A001', 'K004', 85),
(33, 'A001', 'K005', 90),
(34, 'A001', 'K006', 95),
(35, 'A001', 'K007', 95),
(36, 'A002', 'K001', 90),
(37, 'A002', 'K002', 95),
(38, 'A002', 'K003', 85),
(39, 'A002', 'K004', 85),
(40, 'A002', 'K005', 90),
(41, 'A002', 'K006', 95),
(42, 'A002', 'K007', 95),
(43, 'A003', 'K001', 85),
(44, 'A003', 'K002', 90),
(45, 'A003', 'K003', 95),
(46, 'A003', 'K004', 95),
(47, 'A003', 'K005', 95),
(48, 'A003', 'K006', 95),
(49, 'A003', 'K007', 90),
(50, 'A004', 'K001', 90),
(51, 'A004', 'K002', 80),
(52, 'A004', 'K003', 75),
(53, 'A004', 'K004', 85),
(54, 'A004', 'K005', 90),
(55, 'A004', 'K006', 85),
(56, 'A004', 'K007', 85),
(57, 'A005', 'K001', 95),
(58, 'A005', 'K002', 90),
(59, 'A005', 'K003', 85),
(60, 'A005', 'K004', 90),
(61, 'A005', 'K005', 90),
(62, 'A005', 'K006', 85),
(63, 'A005', 'K007', 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_preferensi`
--

CREATE TABLE `tb_nilai_preferensi` (
  `id_alternatif` varchar(10) NOT NULL,
  `nilai_preferensi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai_preferensi`
--

INSERT INTO `tb_nilai_preferensi` (`id_alternatif`, `nilai_preferensi`) VALUES
('A001', 0.356),
('A002', 0.654),
('A003', 0.734),
('A004', 0.289),
('A005', 0.598);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perhitungan`
--

CREATE TABLE `tb_perhitungan` (
  `id_perhitungan` int(11) NOT NULL,
  `id_alternatif` varchar(11) NOT NULL,
  `id_kriteria` varchar(11) NOT NULL,
  `normalisasi` double NOT NULL,
  `terbobot` double NOT NULL,
  `nilai_preferensi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_perhitungan`
--

INSERT INTO `tb_perhitungan` (`id_perhitungan`, `id_alternatif`, `id_kriteria`, `normalisasi`, `terbobot`, `nilai_preferensi`) VALUES
(29, 'A001', 'K001', 0.3844, 5.766, 0.356),
(30, 'A001', 'K002', 0.4103, 8.206, 0.356),
(31, 'A001', 'K003', 0.446, 8.92, 0.356),
(32, 'A001', 'K004', 0.4315, 4.315, 0.356),
(33, 'A001', 'K005', 0.4422, 4.422, 0.356),
(34, 'A001', 'K006', 0.4662, 6.993, 0.356),
(35, 'A001', 'K007', 0.4665, 4.665, 0.356),
(36, 'A002', 'K001', 0.4612, 6.918, 0.654),
(37, 'A002', 'K002', 0.4872, 9.744, 0.654),
(38, 'A002', 'K003', 0.446, 8.92, 0.654),
(39, 'A002', 'K004', 0.4315, 4.315, 0.654),
(40, 'A002', 'K005', 0.4422, 4.422, 0.654),
(41, 'A002', 'K006', 0.4662, 6.993, 0.654),
(42, 'A002', 'K007', 0.4665, 4.665, 0.654),
(43, 'A003', 'K001', 0.4356, 6.534, 0.734),
(44, 'A003', 'K002', 0.4615, 9.23, 0.734),
(45, 'A003', 'K003', 0.4984, 9.968, 0.734),
(46, 'A003', 'K004', 0.4823, 4.823, 0.734),
(47, 'A003', 'K005', 0.4668, 4.668, 0.734),
(48, 'A003', 'K006', 0.4662, 6.993, 0.734),
(49, 'A003', 'K007', 0.4419, 4.419, 0.734),
(50, 'A004', 'K001', 0.4612, 6.918, 0.289),
(51, 'A004', 'K002', 0.4103, 8.206, 0.289),
(52, 'A004', 'K003', 0.3935, 7.87, 0.289),
(53, 'A004', 'K004', 0.4315, 4.315, 0.289),
(54, 'A004', 'K005', 0.4422, 4.422, 0.289),
(55, 'A004', 'K006', 0.4171, 6.2565, 0.289),
(56, 'A004', 'K007', 0.4174, 4.174, 0.289),
(57, 'A005', 'K001', 0.4869, 7.3035, 0.598),
(58, 'A005', 'K002', 0.4615, 9.23, 0.598),
(59, 'A005', 'K003', 0.446, 8.92, 0.598),
(60, 'A005', 'K004', 0.4569, 4.569, 0.598),
(61, 'A005', 'K005', 0.4422, 4.422, 0.598),
(62, 'A005', 'K006', 0.4171, 6.2565, 0.598),
(63, 'A005', 'K007', 0.4419, 4.419, 0.598);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `jenkel` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_buat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `id_role`, `nm_user`, `username`, `jenkel`, `alamat`, `nip`, `no_hp`, `pass`, `gambar`, `tgl_buat`) VALUES
(2, 3, 'faisal arya', 'faisal77', 'Pria', 'padang', '171100111', '084520458024', '123', 'ci.png', 1628788133),
(3, 1, 'Faisal', 'faisal90', 'Pria', 'Padang', '171100123', '082384169797', '120598', 'user.png', 1628800355),
(4, 3, 'udin', 'udin65', 'Pria', 'jambi', '1234567', '34234234', '1234', 'user.png', 1628805517),
(5, 2, 'Riki Saputra', 'rikisaputra89', 'Pria', 'padang', '54321', '3401384', '1234', 'user.png', 1629125826),
(6, 3, 'Harini', 'harini98@gmail.com', 'Wanita', 'padang', '110012', '095820945', '1234', 'user.png', 1629214828),
(7, 3, 'Sunarto', 'sunarto98@gmail.com', 'Pria', 'padang', '110012', '9847340', '1234', 'user.png', 1629214879),
(8, 3, 'Syafrinal', 'syafrinal90@gmail.com', 'Pria', 'padang', '110014', '023980295', '1234', 'user.png', 1629214928),
(9, 3, 'Yuliarti', 'yuliarti89@gmail.com', 'Wanita', 'padang', '110015', '13870395', '1234', 'user.png', 1629214972),
(10, 3, 'Defridawati', 'defridawati96@gmail.com', 'Wanita', 'padang', '110017', '03743147', '1234', 'user.png', 1629215020);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `role_id`
--
ALTER TABLE `role_id`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tb_nilai_matrix`
--
ALTER TABLE `tb_nilai_matrix`
  ADD PRIMARY KEY (`id_matrix`);

--
-- Indeks untuk tabel `tb_perhitungan`
--
ALTER TABLE `tb_perhitungan`
  ADD PRIMARY KEY (`id_perhitungan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `role_id`
--
ALTER TABLE `role_id`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai_matrix`
--
ALTER TABLE `tb_nilai_matrix`
  MODIFY `id_matrix` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `tb_perhitungan`
--
ALTER TABLE `tb_perhitungan`
  MODIFY `id_perhitungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
