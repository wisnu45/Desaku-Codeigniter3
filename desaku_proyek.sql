-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 02.31
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desaku_proyek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `koordinator` varchar(50) NOT NULL,
  `agenda` varchar(100) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `id_user`, `koordinator`, `agenda`, `tempat`, `tanggal`, `jam`) VALUES
(3, 2, 'bapak sukijan', 'sunatan anak bapak sukijan', 'rumah sukijan', '2020-04-23', '04:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar_judul` varchar(50) NOT NULL,
  `gambar1` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_alamat`
--

CREATE TABLE `detail_alamat` (
  `id_alamat` int(11) NOT NULL,
  `jalan` varchar(50) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `nomor` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_alamat`
--

INSERT INTO `detail_alamat` (`id_alamat`, `jalan`, `rt`, `rw`, `nomor`) VALUES
(1, 'Jalan Mawar', '01', '01', '001'),
(2, 'Jalan Mawar', '01', '01', '002'),
(3, 'Jalan Mawar', '01', '01', '003'),
(4, 'Jalan Mawar', '01', '01', '004'),
(5, 'Jalan Melati', '02', '01', '005'),
(6, 'Jalan Melati', '02', '01', '006'),
(7, 'Jalan Melati', '02', '01', '007'),
(8, 'Jalan Melati', '02', '01', '008'),
(9, 'Jalan Anggrek', '01', '02', '009'),
(10, 'Jalan Anggrek', '01', '02', '010'),
(11, 'Jalan Anggrek', '01', '02', '011'),
(12, 'Jalan Anggrek', '01', '02', '012'),
(13, 'Jalan Cendana', '02', '02', '013'),
(14, 'Jalan Cendana', '02', '02', '014'),
(15, 'Jalan Cendana', '02', '02', '015'),
(16, 'Jalan Cendana', '02', '02', '016'),
(17, 'Jalan Rafflesia', '01', '03', '017'),
(18, 'Jalan Rafflesia', '01', '03', '018'),
(19, 'Jalan Rafflesia', '01', '03', '019'),
(20, 'Jalan Rafflesia', '01', '03', '020'),
(21, 'Jalan Rafflesia', '01', '03', '021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_surat`
--

CREATE TABLE `detail_surat` (
  `id` int(11) NOT NULL,
  `nama_surat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_surat`
--

INSERT INTO `detail_surat` (`id`, `nama_surat`) VALUES
(1, 'Surat Keterangan Usaha'),
(2, 'Surat Keterangan Tidak Mampu'),
(3, 'Surat Keterangan Miskin'),
(4, 'Surat Keterangan Belum Pernah Menikah'),
(5, 'Surat Keterangan Kelahiran'),
(6, 'Surat Keterangan Kematian'),
(7, 'Surat Keterangan Beda Nama'),
(8, 'Surat Keterangan Penghasilan'),
(9, 'Surat Keterangan Harga Tanah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` char(20) NOT NULL,
  `id_alamat` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` enum('Hidup','Mati') NOT NULL DEFAULT 'Hidup',
  `nomor_kk` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL DEFAULT 'Laki-Laki',
  `agama` enum('Islam','Kristen Protestan','Kristen Katolik','Budha','Hindu','Konghucu','dll') NOT NULL DEFAULT 'Islam',
  `status_penduduk` enum('Tetap','Tidak Tetap','Pendatang') NOT NULL DEFAULT 'Tetap',
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pendidikan` enum('Tidak Sekolah','SD','SMP','SMA','S1','S2','S3','S4','D1','D2','D3','D4') NOT NULL DEFAULT 'Tidak Sekolah',
  `pekerjaan` varchar(20) NOT NULL,
  `status_kawin` enum('Kawin','Belum Kawin') NOT NULL DEFAULT 'Belum Kawin',
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `id_alamat`, `nama`, `status`, `nomor_kk`, `jenis_kelamin`, `agama`, `status_penduduk`, `tempat_lahir`, `tgl_lahir`, `pendidikan`, `pekerjaan`, `status_kawin`, `foto`) VALUES
('3516034878463576', 1, 'Erik Harianto', 'Hidup', '351678234102839', 'Laki-Laki', 'Islam', 'Tetap', 'Bojonegoro', '1989-02-03', 'S1', 'Karyawan Swasta', 'Kawin', 'ayas.jpg'),
('3516161829264071', 4, 'Bagas Adi', 'Hidup', '351641412418204', 'Laki-Laki', 'Islam', 'Tetap', 'Kediri', '1986-08-10', 'S1', 'TNI', 'Kawin', 'ayas.jpg'),
('3516234919839821', 3, 'Sumiati', 'Hidup', '351621982471928', 'Perempuan', 'Islam', 'Tetap', 'Bojonegoro', '1954-03-14', 'SD', 'Petani', 'Kawin', 'ayas.jpg'),
('3516287490174819', 6, 'I Gede Arjuna', 'Hidup', '351629048192391', 'Laki-Laki', 'Hindu', 'Tetap', 'Denpasar', '1967-03-20', 'S1', 'Pegawai Negeri Sipil', 'Kawin', 'ayas.jpg'),
('3516290248128401', 4, 'Yuni Astuti', 'Hidup', '351641412418204', 'Laki-Laki', 'Islam', 'Tetap', 'Bojonegoro', '1988-06-13', 'S1', 'Pegawai Negeri Sipil', 'Kawin', 'ayas.jpg'),
('3516292382491721', 5, 'Muhammad Sodiq', 'Hidup', '351628990174813', 'Laki-Laki', 'Islam', 'Tetap', 'Bojonegoro', '1977-12-27', 'SMA', 'Karyawan Swasta', 'Kawin', 'ayas.jpg'),
('3516294710274923', 2, 'Yohanes Mulyadi', 'Hidup', '351626391381738', 'Laki-Laki', 'Kristen Protestan', 'Tetap', 'Bojonegoro', '1997-04-01', 'SMP', 'Pelajar/Mahasiswa', 'Belum Kawin', 'ayas.jpg'),
('3516317491049198', 6, 'Erika Sari', 'Hidup', '351629048192391', 'Perempuan', 'Hindu', 'Tetap', 'Blitar', '1970-09-10', 'S1', 'Pegawai Negeri Sipil', 'Kawin', 'ayas.jpg'),
('3516362947817293', 5, 'Lela Masiah', 'Hidup', '351628990174813', 'Laki-Laki', 'Islam', 'Tetap', 'Bojonegoro', '1980-02-23', 'SMA', 'Karyawan Swasta', 'Kawin', 'ayas.jpg'),
('3516612471794918', 5, 'Muhammad Andri', 'Hidup', '351628990174813', 'Laki-Laki', 'Islam', 'Tetap', 'Bojonegoro', '1999-10-01', 'SMP', 'Pelajar/Mahasiswa', 'Belum Kawin', 'ayas.jpg'),
('3516651084629384', 1, 'Ayu Lestari', 'Hidup', '351678234102839', 'Laki-Laki', 'Islam', 'Tetap', 'Malang', '1992-08-15', 'D3', 'Karyawan Swasta', 'Kawin', 'ayas.jpg'),
('3516718941789409', 5, 'Robi Hendra', 'Hidup', '351628990174813', 'Laki-Laki', 'Islam', 'Tetap', 'Bojonegoro', '2001-02-15', 'SMP', 'Pelajar/Mahasiswa', 'Belum Kawin', 'ayas.jpg'),
('3516728940182488', 4, 'Muhammad Andri', 'Hidup', '351641412418204', 'Laki-Laki', 'Islam', 'Tetap', 'Bojonegoro', '2004-07-12', 'SD', 'Pelajar/Mahasiswa', 'Belum Kawin', 'ayas.jpg'),
('3516739023018322', 3, 'Andi Herdian', 'Hidup', '351621982471928', 'Laki-Laki', 'Islam', 'Tetap', 'Bojonegoro', '1985-10-02', 'SMA', 'Karyawan Swasta', 'Belum Kawin', 'ayas.jpg'),
('3516751240122849', 4, 'Andrea Lady', 'Hidup', '351641412418204', 'Perempuan', 'Islam', 'Tetap', 'Bojonegoro', '2007-01-05', 'SD', 'Pelajar/Mahasiswa', 'Belum Kawin', 'ayas.jpg'),
('3516904256123859', 3, 'Sujono', 'Hidup', '351621982471928', 'Laki-Laki', 'Islam', 'Tetap', 'Bojonegoro', '1952-04-15', 'SD', 'Petani', 'Kawin', 'ayas.jpg'),
('3516910248901929', 5, 'Nina Ardana', 'Hidup', '351628990174813', 'Perempuan', 'Islam', 'Tetap', 'Bojonegoro', '2003-06-02', 'SD', 'Pelajar/Mahasiswa', 'Belum Kawin', 'ayas.jpg'),
('3516923073173911', 2, 'Maria Yulianti', 'Hidup', '351626391381738', 'Perempuan', 'Kristen Protestan', 'Tetap', 'Bojonegoro', '1977-03-29', 'S2', 'Pegawai Negeri Sipil', 'Kawin', 'ayas.jpg'),
('3516928347901923', 6, 'Putu Gede', 'Hidup', '351629048192391', 'Laki-Laki', 'Hindu', 'Tetap', 'Bojonegoro', '1996-11-20', 'SMA', 'Pelajar/Mahasiswa', 'Belum Kawin', 'ayas.jpg'),
('3516929427104812', 6, 'Made Irma', 'Hidup', '351629048192391', 'Perempuan', 'Hindu', 'Tetap', 'Bojonegoro', '1993-12-03', 'D3', 'Pegawai Negeri Sipil', 'Belum Kawin', 'ayas.jpg'),
('3516935294027392', 2, 'Dodik Mulyadi', 'Hidup', '351626391381738', 'Laki-Laki', 'Kristen Protestan', 'Tetap', 'Bojonegoro', '1972-12-20', 'S2', 'Pegawai Negeri Sipil', 'Kawin', 'ayas.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk_login`
--

CREATE TABLE `penduduk_login` (
  `id` int(11) NOT NULL,
  `username` char(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_user` enum('Penduduk') NOT NULL DEFAULT 'Penduduk'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penduduk_login`
--

INSERT INTO `penduduk_login` (`id`, `username`, `password`, `jenis_user`) VALUES
(1, '3516739023018322', '827ccb0eea8a706c4c34a16891f84e7b', 'Penduduk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `nik_pengadu` char(20) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nik_pengadu`, `perihal`, `isi`, `tanggal`) VALUES
(1, '3516739023018322', 'tawuran antar rw ', 'hal itu sangan menggangu bagi saya', '2020-04-07 05:03:18'),
(2, '3516739023018322', 'sddd', 'sss', '2020-04-07 05:07:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` int(11) NOT NULL,
  `id_penduduk` char(20) NOT NULL DEFAULT '',
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id`, `id_penduduk`, `jabatan`) VALUES
(1, '3516929427104812', 'Kepala Desa'),
(2, '3516317491049198', 'Sekretaris Desa'),
(3, '3516928347901923', 'Kepala Urusan Pemerintahan'),
(5, '3516910248901929', 'Kepala Urusan Pembangunan'),
(6, '3516290248128401', 'Kepala Urusan Kesra'),
(7, '3516923073173911', 'Kepala Urusan Keuangan'),
(8, '3516034878463576', 'Kepala Urusan Trantib'),
(9, '3516935294027392', 'Kepala Urusan Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `id_detail_surat` int(11) NOT NULL,
  `nik_pemohon` char(20) NOT NULL,
  `isi` text NOT NULL,
  `tgl_permohonan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_surat` enum('Proses','Dapat diambil','Gagal') NOT NULL DEFAULT 'Proses'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id_surat`, `id_detail_surat`, `nik_pemohon`, `isi`, `tgl_permohonan`, `status_surat`) VALUES
(1, 5, '3516739023018322', 'keterangan', '2020-04-07 05:07:26', 'Proses'),
(2, 4, '3516739023018322', 's', '2020-04-07 05:07:45', 'Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_user` enum('Admin','Sekretaris') NOT NULL DEFAULT 'Admin',
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `jenis_user`, `email`, `no_telp`, `alamat`, `foto`) VALUES
(2, 'admin', '202cb962ac59075b964b07152d234b70', 'Admin', 'admin@app.in', '0987654321283', 'Bojonegoro', 'tri.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `visi` text DEFAULT NULL,
  `misi1` text DEFAULT NULL,
  `misi2` text DEFAULT NULL,
  `misi3` text DEFAULT NULL,
  `misi4` text DEFAULT NULL,
  `misi5` text DEFAULT NULL,
  `proker1` text DEFAULT NULL,
  `proker2` text DEFAULT NULL,
  `proker3` text DEFAULT NULL,
  `proker4` text DEFAULT NULL,
  `proker5` text DEFAULT NULL,
  `proker6` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `visi`, `misi1`, `misi2`, `misi3`, `misi4`, `misi5`, `proker1`, `proker2`, `proker3`, `proker4`, `proker5`, `proker6`) VALUES
(1, 'Terwujudnya Masyarakat Desa Trate sebagai Desa yang agamis, mandiri untuk mencapai masyarakat yang sehat, cerdas dan lebih sejahtera serta melayani masyarakat dengan sepenuh hati', 'Memujudkan dan mengembangkan kegiatan keagamaan untuk menambah keimanan dan ketaqwaan kepada Tuhan Yang Maha Esa.', 'Mewujudkan dan mendorong terjadinya usaha-usaha kerukunan antar dan intern warga masyarakat yang disebabkan karena adanya perbedaan agama, keyakinan, organisasi dan lainnya dalam suasana saling menghargai dan menghormati.', 'Membangun dan meningkatkan hasil pertanian dengan jalan penataan pengairan, perbaikan jalan sawah / jalan usaha tani, pemupukan, dan pola tanam yang baik.', NULL, NULL, 'Peningkatan Pembangunan Infrastruktur yang Mendukung Perekonomian Desa', 'Peningkatan Kualitas Kesehatan Masyarakat', 'Pengembangan Pendidikan Bermutu dan Berkualitas', 'Peningkatan Pembangunan Ekonomi dengan Mendorong Tumbuh dan Berkembangnya Pembangunan di Bidang Pertanian Dalam Arti Luas.', 'Peningkatan Tata Kelola Pemerintahan Yang Baik (Good Governance)', NULL),
(3, 'ddd', 'ddd', 'ddd', 'dds', 'd', 'c', 'dc', 'ds', 'dd', 's', 'd', 'd');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`),
  ADD KEY `FK_agenda_user` (`id_user`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_artikel_user` (`id_user`);

--
-- Indeks untuk tabel `detail_alamat`
--
ALTER TABLE `detail_alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indeks untuk tabel `detail_surat`
--
ALTER TABLE `detail_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `FK_penduduk_detail_alamat` (`id_alamat`);

--
-- Indeks untuk tabel `penduduk_login`
--
ALTER TABLE `penduduk_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `FK_penduduk_login_penduduk` (`username`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK__penduduk` (`nik_pengadu`);

--
-- Indeks untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_struktur_organisasi_penduduk` (`id_penduduk`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `FK_surat_detail_surat` (`id_detail_surat`),
  ADD KEY `FK_surat_penduduk` (`nik_pemohon`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_alamat`
--
ALTER TABLE `detail_alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `detail_surat`
--
ALTER TABLE `detail_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `penduduk_login`
--
ALTER TABLE `penduduk_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `FK_agenda_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `FK_artikel_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `FK_penduduk_detail_alamat` FOREIGN KEY (`id_alamat`) REFERENCES `detail_alamat` (`id_alamat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penduduk_login`
--
ALTER TABLE `penduduk_login`
  ADD CONSTRAINT `FK_penduduk_login_penduduk` FOREIGN KEY (`username`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `FK__penduduk` FOREIGN KEY (`nik_pengadu`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD CONSTRAINT `FK_struktur_organisasi_penduduk` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `FK_surat_detail_surat` FOREIGN KEY (`id_detail_surat`) REFERENCES `detail_surat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_surat_penduduk` FOREIGN KEY (`nik_pemohon`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
