-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.18-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table kas_rr.jenis_pengeluaran
CREATE TABLE IF NOT EXISTS `jenis_pengeluaran` (
  `idJenisPengeluaran` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengeluaran` varchar(50) NOT NULL,
  PRIMARY KEY (`idJenisPengeluaran`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table kas_rr.jenis_pengeluaran: ~6 rows (approximately)
DELETE FROM `jenis_pengeluaran`;
/*!40000 ALTER TABLE `jenis_pengeluaran` DISABLE KEYS */;
INSERT INTO `jenis_pengeluaran` (`idJenisPengeluaran`, `nama_pengeluaran`) VALUES
	(1, 'Gaji Security'),
	(2, 'Listrik'),
	(3, 'Aqua, Kopi'),
	(4, 'Jasa Taman'),
	(5, 'Sampah'),
	(6, 'Lain-lain');
/*!40000 ALTER TABLE `jenis_pengeluaran` ENABLE KEYS */;

-- Dumping structure for table kas_rr.kas_keluar
CREATE TABLE IF NOT EXISTS `kas_keluar` (
  `idKasKeluar` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` varchar(50) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `jenis_pengeluaran` int(4) NOT NULL DEFAULT 0,
  `deskripsi_pengeluaran` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL DEFAULT 0,
  `tgl_pengeluaran` date NOT NULL,
  `modtime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idKasKeluar`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table kas_rr.kas_keluar: ~65 rows (approximately)
DELETE FROM `kas_keluar`;
/*!40000 ALTER TABLE `kas_keluar` DISABLE KEYS */;
INSERT INTO `kas_keluar` (`idKasKeluar`, `bulan`, `tahun`, `jenis_pengeluaran`, `deskripsi_pengeluaran`, `nominal`, `tgl_pengeluaran`, `modtime`) VALUES
	(1, 'JANUARI', '2019', 1, 'Gaji keamanan bulan januari', 100000, '2019-01-31', '2020-03-15 19:43:44'),
	(2, 'JANUARI', '2019', 2, 'Listik PJU dan Taman bulan januari', 50000, '2019-01-31', '2020-03-15 19:44:34'),
	(3, 'JANUARI', '2019', 3, 'Konsumsi security bulan januari', 30000, '2019-01-31', '2020-03-15 19:45:27'),
	(4, 'JANUARI', '2019', 4, 'Semprot taman', 30000, '2019-01-31', '2020-03-15 19:46:04'),
	(5, 'JANUARI', '2019', 5, 'Sampah warga bulan januari', 60000, '2019-01-31', '2020-03-15 19:46:54'),
	(6, 'JANUARI', '2019', 6, 'Atk', 50000, '2019-01-31', '2020-03-15 19:49:08'),
	(7, 'FEBRUARI', '2019', 1, 'Gaji keamanan bulan februari', 100000, '2019-02-28', '2020-03-15 19:53:19'),
	(8, 'FEBRUARI', '2019', 2, 'Listik PJU dan Taman bulan februari', 50000, '2019-02-28', '2020-03-15 19:54:07'),
	(9, 'FEBRUARI', '2019', 3, 'Konsumsi security bulan februari', 30000, '2019-02-28', '2020-03-15 19:54:46'),
	(10, 'FEBRUARI', '2019', 4, 'Semprot taman', 30000, '2020-03-15', '2020-03-15 19:55:19'),
	(11, 'MARET', '2019', 1, 'Gaji keamanan bulan maret', 100000, '2019-03-31', '2020-03-15 19:56:06'),
	(12, 'MARET', '2019', 2, 'Listik PJU dan Taman bulan maret', 50000, '2019-03-31', '2020-03-15 19:56:53'),
	(13, 'MARET', '2019', 3, 'Konsumsi security bulan maret', 30000, '2019-03-31', '2020-03-15 19:57:35'),
	(14, 'MARET', '2019', 4, 'Semprot taman', 30000, '2019-03-31', '2020-03-15 19:58:18'),
	(15, 'FEBRUARI', '2019', 5, 'Sampah warga bulan februari', 60000, '2019-02-28', '2020-03-15 20:00:45'),
	(16, 'MARET', '2019', 5, 'Sampah warga bulan maret', 60000, '2019-03-31', '2020-03-15 20:01:19'),
	(17, 'MARET', '2019', 6, 'Sumbangan untuk mushola', 75000, '2019-03-31', '2020-03-15 20:02:02'),
	(18, 'APRIL', '2019', 1, 'Gaji keamanan bulan april', 100000, '2019-04-30', '2020-03-15 20:05:29'),
	(19, 'MEI', '2019', 1, 'Gaji keamanan bulan mei', 100000, '2019-05-30', '2020-03-15 20:11:50'),
	(20, 'JUNI', '2019', 1, 'Gaji keamanan bulan juni', 100000, '2019-06-30', '2020-03-15 20:11:50'),
	(21, 'JULI', '2019', 1, 'Gaji keamanan bulan juli', 200000, '2019-07-30', '2020-03-15 20:11:50'),
	(22, 'AGUSTUS', '2019', 1, 'Gaji keamanan bulan agustus', 250000, '2019-08-30', '2020-03-15 20:11:51'),
	(23, 'SEPTEMBER', '2019', 1, 'Gaji keamanan bulan september', 300000, '2019-09-30', '2020-03-15 20:11:51'),
	(24, 'OKTOBER', '2019', 1, 'Gaji keamanan bulan oktober', 450000, '2019-10-30', '2020-03-15 20:11:51'),
	(25, 'NOVEMBER', '2019', 1, 'Gaji keamanan bulan november', 500000, '2019-11-30', '2020-03-15 20:11:51'),
	(26, 'DESEMBER', '2019', 1, 'Gaji keamanan bulan desember', 500000, '2019-12-30', '2020-03-15 20:11:51'),
	(27, 'APRIL', '2019', 5, 'Sampah warga bulan april', 60000, '2019-04-30', '2020-03-15 20:17:22'),
	(28, 'MEI', '2019', 5, 'Sampah warga bulan mei', 60000, '2019-05-30', '2020-03-15 20:17:22'),
	(29, 'JUNI', '2019', 5, 'Sampah warga bulan juni', 60000, '2019-06-30', '2020-03-15 20:17:22'),
	(30, 'JULI', '2019', 5, 'Sampah warga bulan juli', 120000, '2019-07-30', '2020-03-15 20:17:22'),
	(31, 'AGUSTUS', '2019', 5, 'Sampah warga bulan agustus', 150000, '2019-08-30', '2020-03-15 20:17:22'),
	(32, 'SEPTEMBER', '2019', 5, 'Sampah warga bulan september', 180000, '2019-09-30', '2020-03-15 20:17:22'),
	(33, 'OKTOBER', '2019', 5, 'Sampah warga bulan oktober', 270000, '2019-10-30', '2020-03-15 20:17:23'),
	(34, 'NOVEMBER', '2019', 5, 'Sampah warga bulan november', 300000, '2019-11-30', '2020-03-15 20:17:23'),
	(35, 'DESEMBER', '2019', 5, 'Sampah warga bulan desember', 300000, '2019-12-30', '2020-03-15 20:17:23'),
	(36, 'APRIL', '2019', 2, 'Listrik PJU dan taman bulan april', 50000, '2019-04-30', '2020-03-15 20:26:41'),
	(37, 'MEI', '2019', 2, 'Listrik PJU dan taman bulan mei', 30000, '2019-05-30', '2020-03-15 20:26:41'),
	(38, 'JUNI', '2019', 2, 'Listrik PJU dan taman bulan juni', 50000, '2019-06-30', '2020-03-15 20:26:41'),
	(39, 'JULI', '2019', 2, 'Listrik PJU dan taman bulan juli', 60000, '2019-07-30', '2020-03-15 20:26:41'),
	(40, 'AGUSTUS', '2019', 2, 'Listrik PJU dan taman bulan agustus', 60000, '2019-08-30', '2020-03-15 20:26:41'),
	(41, 'SEPTEMBER', '2019', 2, 'Listrik PJU dan taman bulan september', 60000, '2019-09-30', '2020-03-15 20:26:41'),
	(42, 'OKTOBER', '2019', 2, 'Listrik PJU dan taman bulan oktober', 75000, '2019-10-30', '2020-03-15 20:26:41'),
	(43, 'NOVEMBER', '2019', 2, 'Listrik PJU dan taman bulan november', 75000, '2019-11-30', '2020-03-15 20:26:41'),
	(44, 'DESEMBER', '2019', 2, 'Listrik PJU dan taman bulan desember', 75000, '2019-12-30', '2020-03-15 20:26:41'),
	(45, 'MEI', '2019', 6, 'Bukber di mushola', 100000, '2019-05-04', '2020-03-15 20:27:53'),
	(46, 'APRIL', '2019', 3, 'Konsumsi security bulan april', 30000, '2019-04-30', '2020-03-15 20:31:27'),
	(47, 'MEI', '2019', 3, 'Konsumsi security bulan mei', 30000, '2019-05-30', '2020-03-15 20:31:27'),
	(48, 'JUNI', '2019', 3, 'Konsumsi security bulan juni', 30000, '2019-06-30', '2020-03-15 20:31:27'),
	(49, 'JULI', '2019', 3, 'Konsumsi security bulan juli', 50000, '2019-07-30', '2020-03-15 20:31:27'),
	(50, 'AGUSTUS', '2019', 3, 'Konsumsi security bulan agustus', 50000, '2019-08-30', '2020-03-15 20:31:27'),
	(51, 'SEPTEMBER', '2019', 3, 'Konsumsi security bulan september', 50000, '2019-09-30', '2020-03-15 20:31:27'),
	(52, 'OKTOBER', '2019', 3, 'Konsumsi security bulan oktober', 75000, '2019-10-30', '2020-03-15 20:31:27'),
	(53, 'NOVEMBER', '2019', 3, 'Konsumsi security bulan november', 75000, '2019-11-30', '2020-03-15 20:31:27'),
	(54, 'DESEMBER', '2019', 3, 'Konsumsi security bulan desember', 75000, '2019-12-30', '2020-03-15 20:31:27'),
	(55, 'APRIL', '2019', 4, 'Jasa taman bulan april', 30000, '2019-04-30', '2020-03-15 20:34:38'),
	(56, 'MEI', '2019', 4, 'Jasa taman bulan mei', 30000, '2019-05-30', '2020-03-15 20:34:39'),
	(57, 'JUNI', '2019', 4, 'Jasa taman bulan juni', 30000, '2019-06-30', '2020-03-15 20:34:39'),
	(58, 'JULI', '2019', 4, 'Jasa taman bulan juli', 30000, '2019-07-30', '2020-03-15 20:34:39'),
	(59, 'AGUSTUS', '2019', 4, 'Jasa taman bulan agustus', 30000, '2019-08-30', '2020-03-15 20:34:39'),
	(60, 'SEPTEMBER', '2019', 4, 'Jasa taman bulan september', 30000, '2019-09-30', '2020-03-15 20:34:39'),
	(61, 'OKTOBER', '2019', 4, 'Jasa taman bulan oktober', 30000, '2019-10-30', '2020-03-15 20:34:39'),
	(62, 'NOVEMBER', '2019', 4, 'Jasa taman bulan november', 30000, '2019-11-30', '2020-03-15 20:34:39'),
	(63, 'DESEMBER', '2019', 4, 'Jasa taman bulan desember', 30000, '2019-12-30', '2020-03-15 20:34:39'),
	(64, 'AGUSTUS', '2019', 6, 'Acara 17an', 1150000, '2019-08-17', '2020-03-15 20:35:38'),
	(65, 'DESEMBER', '2019', 6, 'Acara tahun baru, bakar ayam', 500000, '2019-12-31', '2020-03-15 20:37:09');
/*!40000 ALTER TABLE `kas_keluar` ENABLE KEYS */;

-- Dumping structure for table kas_rr.kas_masuk
CREATE TABLE IF NOT EXISTS `kas_masuk` (
  `idKas` int(11) NOT NULL AUTO_INCREMENT,
  `no_rumah` char(3) NOT NULL,
  `januari` varchar(50) NOT NULL,
  `februari` varchar(50) NOT NULL,
  `maret` varchar(50) NOT NULL,
  `april` varchar(50) NOT NULL,
  `mei` varchar(50) NOT NULL,
  `juni` varchar(50) NOT NULL,
  `juli` varchar(50) NOT NULL,
  `agustus` varchar(50) NOT NULL,
  `september` varchar(50) NOT NULL,
  `oktober` varchar(50) NOT NULL,
  `november` varchar(50) NOT NULL,
  `desember` varchar(50) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `bayarJan` int(11) NOT NULL DEFAULT 0,
  `bayarFeb` int(11) NOT NULL DEFAULT 0,
  `bayarMar` int(11) NOT NULL DEFAULT 0,
  `bayarApr` int(11) NOT NULL DEFAULT 0,
  `bayarMei` int(11) NOT NULL DEFAULT 0,
  `bayarJun` int(11) NOT NULL DEFAULT 0,
  `bayarJul` int(11) NOT NULL DEFAULT 0,
  `bayarAgu` int(11) NOT NULL DEFAULT 0,
  `bayarSep` int(11) NOT NULL DEFAULT 0,
  `bayarOkt` int(11) NOT NULL DEFAULT 0,
  `bayarNov` int(11) NOT NULL DEFAULT 0,
  `bayarDes` int(11) NOT NULL DEFAULT 0,
  `modtime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idKas`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table kas_rr.kas_masuk: ~10 rows (approximately)
DELETE FROM `kas_masuk`;
/*!40000 ALTER TABLE `kas_masuk` DISABLE KEYS */;
INSERT INTO `kas_masuk` (`idKas`, `no_rumah`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `tahun`, `total`, `bayarJan`, `bayarFeb`, `bayarMar`, `bayarApr`, `bayarMei`, `bayarJun`, `bayarJul`, `bayarAgu`, `bayarSep`, `bayarOkt`, `bayarNov`, `bayarDes`, `modtime`) VALUES
	(1, 'A1', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019', 2160000, 180000, 180000, 180000, 180000, 180000, 180000, 180000, 180000, 180000, 180000, 180000, 180000, '2020-03-15 11:18:46'),
	(2, 'A2', '', '', '', '', '', '', '2019-12-31', '2019-12-31', '2019-12-31', '2019-12-31', '2019-12-31', '2019-12-31', '2019', 1080000, 0, 0, 0, 0, 0, 0, 180000, 180000, 180000, 180000, 180000, 180000, '2020-03-15 11:18:46'),
	(3, 'A3', '', '', '', '', '', '', '2019-12-31', '2019-12-31', '2019-12-31', '2019-12-31', '2019-12-31', '2019-12-31', '2019', 1080000, 0, 0, 0, 0, 0, 0, 180000, 180000, 180000, 180000, 180000, 180000, '2020-03-15 11:18:46'),
	(4, 'A3', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019-12-01', '2019', 2160000, 180000, 180000, 180000, 180000, 180000, 180000, 180000, 180000, 180000, 180000, 180000, 180000, '2020-03-15 11:18:46'),
	(5, 'A5', '', '', '', '', '', '', '', '', '', '2020-03-15', '2020-03-15', '2020-03-15', '2019', 540000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 180000, 180000, 180000, '2020-03-15 11:18:46'),
	(6, 'B1', '', '', '', '', '', '', '', '', '', '', '2019-12-31', '2019-12-31', '2019', 360000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 180000, 180000, '2020-03-15 11:18:46'),
	(7, 'B2', '', '', '', '', '', '', '', '2020-03-15', '2020-03-15', '2020-03-15', '2020-03-15', '2020-03-15', '2019', 900000, 0, 0, 0, 0, 0, 0, 0, 180000, 180000, 180000, 180000, 180000, '2020-03-15 11:18:46'),
	(8, 'B3', '', '', '', '', '', '', '', '', '', '2020-03-15', '2020-03-15', '2020-03-15', '2019', 540000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 180000, 180000, 180000, '2020-03-15 11:18:47'),
	(9, 'B4', '', '', '', '', '', '', '', '', '2020-03-15', '2020-03-15', '2020-03-15', '2020-03-15', '2019', 720000, 0, 0, 0, 0, 0, 0, 0, 0, 180000, 180000, 180000, 180000, '2020-03-15 11:18:47'),
	(10, 'B5', '', '', '', '', '', '', '', '', '', '2020-03-15', '2020-03-15', '2020-03-15', '2019', 540000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 180000, 180000, 180000, '2020-03-15 11:18:47');
/*!40000 ALTER TABLE `kas_masuk` ENABLE KEYS */;

-- Dumping structure for table kas_rr.kas_masuk_lain
CREATE TABLE IF NOT EXISTS `kas_masuk_lain` (
  `idKasMasukLain` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` varchar(50) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `deskripsi_pemasukan` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL DEFAULT 0,
  `tgl_pemasukan` date NOT NULL,
  `modtime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idKasMasukLain`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Dumping data for table kas_rr.kas_masuk_lain: ~1 rows (approximately)
DELETE FROM `kas_masuk_lain`;
/*!40000 ALTER TABLE `kas_masuk_lain` DISABLE KEYS */;
INSERT INTO `kas_masuk_lain` (`idKasMasukLain`, `bulan`, `tahun`, `deskripsi_pemasukan`, `nominal`, `tgl_pemasukan`, `modtime`) VALUES
	(1, 'AGUSTUS', '2019', 'Sumbangan RW untuk 17an', 1000000, '2019-08-11', '2020-03-15 19:40:50');
/*!40000 ALTER TABLE `kas_masuk_lain` ENABLE KEYS */;

-- Dumping structure for table kas_rr.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) NOT NULL,
  `posisi` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table kas_rr.menu: ~3 rows (approximately)
DELETE FROM `menu`;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id_menu`, `nama_menu`, `posisi`) VALUES
	(1, 'Kas', 1),
	(2, 'Laporan', 2),
	(3, 'Tools', 3);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Dumping structure for table kas_rr.modul
CREATE TABLE IF NOT EXISTS `modul` (
  `id_modul` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `nama_modul` varchar(150) NOT NULL,
  `link_menu` text NOT NULL,
  `link_folder` text NOT NULL,
  `posisi` int(11) NOT NULL,
  `icon_menu` varchar(150) NOT NULL,
  PRIMARY KEY (`id_modul`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table kas_rr.modul: ~5 rows (approximately)
DELETE FROM `modul`;
/*!40000 ALTER TABLE `modul` DISABLE KEYS */;
INSERT INTO `modul` (`id_modul`, `id_menu`, `nama_modul`, `link_menu`, `link_folder`, `posisi`, `icon_menu`) VALUES
	(1, 1, 'Iuran Warga', 'index.php?page=kas_masuk', 'pages/kas_masuk/kas_masuk.php', 1, 'fa fa-book'),
	(2, 1, 'Pengeluaran', 'index.php?page=kas_keluar', 'pages/kas_keluar/kas_keluar.php', 3, 'fa fa-money'),
	(3, 2, 'Kas Warga', 'index.php?page=report', 'pages/report/report.php', 1, 'fa fa-book'),
	(4, 1, 'Pemasukan Lain', 'index.php?page=kas_masuk_lain', 'pages/kas_masuk_lain/kas_masuk_lain.php', 2, 'fa fa-plus-square'),
	(5, 3, 'Rumah Warga', 'index.php?page=rumah_warga', 'pages/rumah_warga/rumah_warga.php', 1, 'fa fa-bank');
/*!40000 ALTER TABLE `modul` ENABLE KEYS */;

-- Dumping structure for table kas_rr.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(45) NOT NULL,
  `usernm` varchar(20) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table kas_rr.user: ~1 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `nama_lengkap`, `usernm`, `passwd`, `level`, `last_login`) VALUES
	(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2021-08-14 13:16:15');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
