-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 08:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahlabbr`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `editor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensis`
--

INSERT INTO `absensis` (`siswa_id`, `kelas_id`, `tanggal`, `status`, `editor_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2021-02-23', 'H', 2, '2021-02-21 20:28:01', '2021-02-21 20:28:01'),
(1, 2, '2021-02-27', 'H', 2, '2021-02-21 00:30:25', '2021-02-21 00:30:25'),
(1, 2, '2021-02-28', 'A', 2, '2021-02-21 00:50:11', '2021-02-21 00:50:11'),
(2, 2, '2021-02-26', 'I', 2, '2021-02-21 06:03:06', '2021-02-21 06:03:06'),
(3, 1, '2021-02-01', 'A', 2, '2021-02-27 21:20:22', '2021-02-27 21:20:22'),
(3, 1, '2021-02-27', 'H', 2, '2021-02-27 20:26:11', '2021-02-27 20:26:11'),
(3, 1, '2021-02-28', 'H', 2, '2021-02-27 20:26:11', '2021-02-27 20:26:11'),
(3, 1, '2021-03-01', 'H', 2, '2021-02-27 21:21:36', '2021-02-27 21:21:36'),
(4, 1, '2021-02-01', 'S', 2, '2021-02-27 21:20:19', '2021-02-27 21:20:19'),
(4, 1, '2021-02-28', 'S', 2, '2021-02-27 23:22:37', '2021-02-27 23:22:37'),
(4, 1, '2021-03-01', 'I', 2, '2021-02-27 21:21:36', '2021-02-27 21:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `agamas`
--

CREATE TABLE `agamas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bagian_pegawais`
--

CREATE TABLE `bagian_pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bagian_pegawais`
--

INSERT INTO `bagian_pegawais` (`id`, `user_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'Gurus', '2021-02-19 12:10:17', '2021-02-19 12:09:44', '2021-02-19 12:10:17'),
(2, 2, 'Kepala Sekolah', NULL, '2021-02-19 13:35:12', '2021-02-20 22:11:29'),
(3, 2, 'apa tuh', '2021-02-19 17:21:59', '2021-02-19 17:21:00', '2021-02-19 17:21:59'),
(4, 2, 'coba', '2021-02-20 01:52:50', '2021-02-20 01:52:35', '2021-02-20 01:52:50'),
(5, 14, 'coba', NULL, '2021-02-20 08:27:48', '2021-02-20 15:00:29'),
(6, 2, 'KT', '2021-02-20 08:41:00', '2021-02-20 08:40:37', '2021-02-20 08:41:00'),
(7, 14, 'Guru', NULL, '2021-02-20 15:00:34', '2021-02-20 15:00:34'),
(8, 2, 'coba1', '2021-02-20 20:23:02', '2021-02-20 20:22:51', '2021-02-20 20:23:02'),
(9, 2, 'Guru', NULL, '2021-02-20 22:11:36', '2021-02-20 22:11:36'),
(10, 2, 'Guru / Tenaga Pendidik', NULL, '2021-02-24 04:13:12', '2021-02-24 04:13:12'),
(11, 2, 'wali kelas', NULL, '2021-02-25 02:12:53', '2021-02-25 02:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `calon_kandidats`
--

CREATE TABLE `calon_kandidats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_aktif` tinyint(1) NOT NULL,
  `nama_guru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` bigint(20) DEFAULT NULL,
  `sekolah_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurus`
--

INSERT INTO `gurus` (`id`, `deleted_at`, `created_at`, `updated_at`, `is_aktif`, `nama_guru`, `keterangan`, `status_id`, `sekolah_id`) VALUES
(1, NULL, NULL, NULL, 1, 'Name Guru', 'keterangan', 1, 1),
(2, NULL, NULL, NULL, 0, 'ardi', 'ketardi', 1, 1),
(3, NULL, NULL, NULL, 0, 'ardo', 'keterardo', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelajarans`
--

CREATE TABLE `jadwal_pelajarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mata_pelajaran_id` bigint(20) UNSIGNED NOT NULL,
  `hari` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_pelajaran` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sekolah_id` bigint(20) NOT NULL,
  `guru_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_pelajarans`
--

INSERT INTO `jadwal_pelajarans` (`id`, `mata_pelajaran_id`, `hari`, `semester`, `tahun_ajaran`, `jam_pelajaran`, `keterangan`, `created_at`, `updated_at`, `kelas_id`, `sekolah_id`, `guru_id`) VALUES
(1, 1, 'senin', 'ganjil', '2019/2020', '1', 'sdfas', '2021-02-01 03:57:57', NULL, 1, 1, 1),
(2, 1, 'selasa', 'ganjil', '2019/2020', '1', 'sdfas', '2021-02-01 03:57:57', NULL, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jam_pelajarans`
--

CREATE TABLE `jam_pelajarans` (
  `id` bigint(20) NOT NULL,
  `sekolah_id` bigint(20) NOT NULL,
  `hari` text NOT NULL,
  `jam_ke` char(20) NOT NULL,
  `jam_mulai` time(6) NOT NULL,
  `jam_selesai` time(6) NOT NULL,
  `istirahat` tinyint(1) NOT NULL,
  `editor_id` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jam_pelajarans`
--

INSERT INTO `jam_pelajarans` (`id`, `sekolah_id`, `hari`, `jam_ke`, `jam_mulai`, `jam_selesai`, `istirahat`, `editor_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'senin', '1', '01:00:00.000000', '02:05:00.000000', 0, 2, NULL, '2021-02-23 05:43:41', '2021-02-23 05:43:41'),
(2, 1, 'selasa', '12', '13:00:00.000000', '14:00:00.000000', 0, 2, NULL, '2021-02-23 06:20:58', '2021-02-23 06:20:58'),
(3, 1, 'senin', '1', '01:00:00.000000', '02:00:00.000000', 0, 2, NULL, '2021-02-27 20:27:33', '2021-02-27 20:27:33'),
(4, 1, 'senin', '1', '01:05:00.000000', '02:05:00.000000', 0, 2, NULL, '2021-02-27 21:38:53', '2021-02-27 21:38:53'),
(5, 1, 'senin', '1', '01:05:00.000000', '03:15:00.000000', 0, 2, NULL, '2021-02-27 21:40:44', '2021-02-27 21:40:44');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamins`
--

CREATE TABLE `jenis_kelamins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenjang_pegawais`
--

CREATE TABLE `jenjang_pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten_kotas`
--

CREATE TABLE `kabupaten_kotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten_kota_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE `libraries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekolah_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kategori_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tingkat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_terbit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_audio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_ebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penulis_id` bigint(20) UNSIGNED DEFAULT NULL,
  `penerbit_id` bigint(20) UNSIGNED DEFAULT NULL,
  `viewed` bigint(20) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajarans`
--

CREATE TABLE `mata_pelajarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelajaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pelajaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktif` tinyint(1) NOT NULL,
  `sekolah_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mata_pelajarans`
--

INSERT INTO `mata_pelajarans` (`id`, `nama_pelajaran`, `kode_pelajaran`, `guru_id`, `keterangan`, `aktif`, `sekolah_id`, `created_at`, `updated_at`) VALUES
(2, 'penjas34', '123', 2, 'gsfg', 1, 1, '2021-02-23 06:02:17', '2021-02-23 06:02:17'),
(3, 'ppkns', 'sdg', 2, 'ppkn marni', 1, 1, '2021-02-23 06:09:12', '2021-02-23 06:09:12'),
(4, 'ppkn2', '123', 1, 'sfdsaf', 1, 1, '2021-02-27 20:27:49', '2021-02-27 20:27:49'),
(14, 'ppkn', '123', 1, 'ket', 1, 1, '2021-02-28 00:08:37', '2021-02-28 00:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_09_041851_create_roles_table', 1),
(5, '2020_12_09_041908_create_role_user_table', 1),
(6, '2021_01_05_015735_create_pegawais_table', 1),
(7, '2021_01_05_073424_create_semesters_table', 1),
(8, '2021_01_05_090208_create_status_gurus_table', 1),
(9, '2021_01_05_130706_create_jenjang_pegawais_table', 1),
(10, '2021_01_05_133915_create_tingkatan_kelas_table', 1),
(11, '2021_01_12_145409_create_jenis_kelamins_table', 1),
(12, '2021_01_12_153717_create_agamas_table', 1),
(13, '2021_01_13_015610_create_status_nikahs_table', 1),
(14, '2021_01_13_021356_create_provinsis_table', 1),
(15, '2021_01_13_022822_create_kabupaten_kotas_table', 1),
(16, '2021_01_13_025518_create_kecamatans_table', 1),
(17, '2021_01_13_034933_create_sukus_table', 1),
(18, '2021_01_13_044035_create_sekolahs_table', 1),
(19, '2021_01_18_063822_create_tipes_table', 1),
(20, '2021_01_18_063829_create_kategoris_table', 1),
(21, '2021_01_18_063836_create_penulis_penerbits_table', 1),
(22, '2021_01_18_063842_create_tingkats_table', 1),
(23, '2021_01_21_065325_create_libraries_table', 1),
(24, '2021_02_04_063217_create_siswas_table', 1),
(25, '2021_02_04_065309_create_siswa_orang_tuas_table', 1),
(26, '2021_02_04_072135_create_siswa_walis_table', 1),
(27, '2021_02_04_081616_alter_users_table', 1),
(28, '2021_02_04_153250_add_siswa_id_to_users', 1),
(29, '2021_02_05_093825_add_fields_to_pegawais', 1),
(30, '2021_02_06_111013_add_user_id_to_pegawais', 1),
(31, '2021_02_06_164936_create_penulises_table', 1),
(32, '2021_02_06_170408_create_penerbits_table', 1),
(33, '2021_02_06_175651_rename_penulis_penerbit_to_libraries_table', 1),
(34, '2021_02_06_183253_alter_penulis_penerbit_to_libraries_table', 1),
(35, '2021_02_07_140201_add_role_id_to_users', 1),
(36, '2021_02_10_170355_add_viewed_thumbnail_to_libraries', 1),
(37, '2021_02_15_031825_create_mata_pelajarans_table', 1),
(38, '2021_02_16_060818_create_jadwal_pelajarans_table', 1),
(39, '2021_02_17_050743_create_gurus_table', 1),
(40, '2021_02_17_072936_create_ref_kelas_table', 1),
(41, '2021_02_18_073417_create_absensis_table', 1),
(42, '2021_02_13_043900_create_pelanggaran_table', 2),
(43, '2021_02_13_045956_add_thumbnail_to_kategoris', 2),
(44, '2021_02_13_054302_alter_tahun_terbit_as_nullable_to_penerbits', 2),
(45, '2021_02_13_101240_create_sanksi_table', 2),
(46, '2021_02_13_151357_create_pelanggaran_siswa', 2),
(47, '2021_02_15_052437_create_voting_table', 2),
(48, '2021_02_18_084058_create_calon_kandidat_table', 2),
(49, '2021_02_18_084301_create_pemilihan_kandidat_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelar_depan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelar_belakang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jk` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` enum('Islam','Budha','Kristen Protestan','Hindu','Kristen Katolik','Konghuchu') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_menikah` tinyint(1) DEFAULT NULL,
  `alamat_tinggal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dusun` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rt` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon_rumah` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `bagian` enum('Guru/Tenaga Pendidik','Teknisi','Laboran','Tenaga Kependidikan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajaran` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester` enum('Ganjil','Genap') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenjang` enum('SD','SMP','SMK','SMA') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`, `nip`, `nik`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `is_menikah`, `alamat_tinggal`, `provinsi`, `kabupaten`, `kecamatan`, `dusun`, `rt`, `rw`, `kode_pos`, `no_telepon_rumah`, `no_telepon`, `email`, `tanggal_mulai`, `bagian`, `tahun_ajaran`, `semester`, `jenjang`, `user_id`, `foto`) VALUES
(1, 'guru2234', NULL, '2021-02-24 02:24:56', '2021-02-24 02:25:05', NULL, NULL, NULL, NULL, NULL, '2021-02-24', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-24', 'Guru/Tenaga Pendidik', NULL, NULL, NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggarans`
--

CREATE TABLE `pelanggarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran_siswas`
--

CREATE TABLE `pelanggaran_siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pelanggaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelanggaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebab` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sanksi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanganan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemilihan_kandidats`
--

CREATE TABLE `pemilihan_kandidats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calon_kandidat_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemilihan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penerbits`
--

CREATE TABLE `penerbits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penerbit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penulises`
--

CREATE TABLE `penulises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penulis_penerbits`
--

CREATE TABLE `penulis_penerbits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penulis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinsis`
--

CREATE TABLE `provinsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_kelas`
--

CREATE TABLE `ref_kelas` (
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '2021-02-24 04:06:57', '2021-02-24 04:06:57'),
(2, 'admin', '2021-02-24 04:06:57', '2021-02-24 04:06:57'),
(3, 'siswa', '2021-02-24 04:06:57', '2021-02-24 04:06:57'),
(4, 'guru', '2021-02-24 04:06:58', '2021-02-24 04:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sanksis`
--

CREATE TABLE `sanksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sekolahs`
--

CREATE TABLE `sekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_sekolah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sekolahs`
--

INSERT INTO `sekolahs` (`id`, `id_sekolah`, `name`, `alamat`, `jenjang`, `tahun_ajaran`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'Sman 11', 'menda', 'sma', '2019/2020', NULL, NULL, NULL),
(2, '2', 'sman 23', 'm', 'SMP', '2020/2021', NULL, NULL, NULL),
(3, '1223', 'sman 12', 'almt', 'SMA', '2020-2021', NULL, '2021-02-22 19:55:00', '2021-02-22 19:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nisn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `id_tingkatan_kelas` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_panggilan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ktp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` enum('Islam','Budha','Kristen Protestan','Hindu','Kristen Katolik','Konghuchu') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suku` enum('Melayu','Aceh','Batak','Karo','Mandailing','Simalungun','Pak-Pak','Nias','Angkola','Jawa') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `berat_badan` int(10) UNSIGNED DEFAULT NULL,
  `tinggi_badan` int(10) UNSIGNED DEFAULT NULL,
  `golongan_darah` enum('A','B','AB','O') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `riwayat_penyakit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moda_transportasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jarak_rumah_sekolah` int(10) UNSIGNED DEFAULT NULL,
  `is_siswa_pindahan` tinyint(1) DEFAULT 0,
  `alamat_tinggal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon_rumah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nis`, `nisn`, `tanggal_masuk`, `id_tingkatan_kelas`, `nama_lengkap`, `nama_panggilan`, `no_ktp`, `jk`, `agama`, `suku`, `tempat_lahir`, `tanggal_lahir`, `berat_badan`, `tinggi_badan`, `golongan_darah`, `hobi`, `riwayat_penyakit`, `moda_transportasi`, `jarak_rumah_sekolah`, `is_siswa_pindahan`, `alamat_tinggal`, `provinsi`, `kabupaten`, `kecamatan`, `rt`, `rw`, `kode_pos`, `no_telepon_rumah`, `no_telepon`, `foto`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '34', '234', '2021-02-21', 2, 'siswacc', NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-22 22:41:53', '2021-02-21 00:29:52', '2021-02-22 22:41:53'),
(2, '123123', '123123', '2021-02-21', 2, 'siswadd', NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-21 01:30:21', '2021-02-21 01:30:21'),
(3, '222', '222', '2021-02-23', 1, 'siswaklas9', NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-22 19:33:23', '2021-02-22 19:33:23'),
(4, '222', '222', '2021-02-23', 1, 'siswaklas9', NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-22 19:33:23', '2021-02-22 19:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_orang_tuas`
--

CREATE TABLE `siswa_orang_tuas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `status_anak` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_ke` int(10) UNSIGNED DEFAULT NULL,
  `jumlah_saudara` int(10) UNSIGNED DEFAULT NULL,
  `alamat_ortu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir_ayah` date DEFAULT NULL,
  `agama_ayah` enum('Islam','Budha','Kristen Protestan','Hindu','Kristen Katolik','Konghuchu') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewarganegaraan_ayah` enum('WNI','WNA') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_ayah` enum('SD/Sederajat','SMP/MTs/Sederajat','SMA/MA/Sederajat','D1/D2/D3','S1','S2','S3') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir_ibu` date DEFAULT NULL,
  `agama_ibu` enum('Islam','Budha','Kristen Protestan','Hindu','Kristen Katolik','Konghuchu') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewarganegaraan_ibu` enum('WNI','WNA') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_ibu` enum('SD/Sederajat','SMP/MTs/Sederajat','SMA/MA/Sederajat','D1/D2/D3','S1','S2','S3') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa_orang_tuas`
--

INSERT INTO `siswa_orang_tuas` (`id`, `id_siswa`, `status_anak`, `anak_ke`, `jumlah_saudara`, `alamat_ortu`, `nama_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `agama_ayah`, `kewarganegaraan_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `email_ayah`, `no_telepon_ayah`, `nama_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `agama_ibu`, `kewarganegaraan_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `email_ibu`, `no_telepon_ibu`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-21 00:29:52', '2021-02-21 00:29:52'),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-21 01:30:21', '2021-02-21 01:30:21'),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-22 19:33:23', '2021-02-22 19:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_walis`
--

CREATE TABLE `siswa_walis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `nama_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir_wali` date DEFAULT NULL,
  `agama_wali` enum('Islam','Budha','Kristen Protestan','Hindu','Kristen Katolik','Konghuchu') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewarganegaraan_wali` enum('WNI','WNA') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_wali` enum('SD/Sederajat','SMP/MTs/Sederajat','SMA/MA/Sederajat','D1/D2/D3','S1','S2','S3') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa_walis`
--

INSERT INTO `siswa_walis` (`id`, `id_siswa`, `nama_wali`, `tempat_lahir_wali`, `tanggal_lahir_wali`, `agama_wali`, `kewarganegaraan_wali`, `pendidikan_wali`, `pekerjaan_wali`, `email_wali`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2021-02-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-21 00:29:52', '2021-02-21 00:29:52'),
(2, 2, NULL, '2021-02-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-21 01:30:21', '2021-02-21 01:30:21'),
(3, 3, NULL, '2021-02-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-22 19:33:23', '2021-02-22 19:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `status_gurus`
--

CREATE TABLE `status_gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_gurus`
--

INSERT INTO `status_gurus` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Guru Tetap', NULL, NULL, NULL),
(2, 'Guru Tidak Tetap', NULL, NULL, NULL),
(3, 'Guru Honor', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_nikahs`
--

CREATE TABLE `status_nikahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sukus`
--

CREATE TABLE `sukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tingkatan_kelas`
--

CREATE TABLE `tingkatan_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekolah_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tingkatan_kelas`
--

INSERT INTO `tingkatan_kelas` (`id`, `name`, `sekolah_id`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '9', 1, 3, NULL, '2021-02-20 20:35:41', '2021-02-20 20:35:41'),
(2, '10', 1, 2, NULL, '2021-02-20 23:09:14', '2021-02-20 23:09:14'),
(3, '5', 2, 2, NULL, '2021-02-20 23:15:11', '2021-02-20 23:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `tingkats`
--

CREATE TABLE `tingkats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipes`
--

CREATE TABLE `tipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `siswa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `id_sekolah` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` int(11) DEFAULT NULL,
  `sekolah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `siswa_id`, `id_sekolah`, `name`, `username`, `email`, `kelas`, `sekolah`, `nis`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'Superadmin', 'superadmin', NULL, NULL, NULL, NULL, NULL, '$2y$10$X0qeJJ/F2hHBXts39Kl2PuQnIVex95LFbkbwmb8ydGpvmkKbOGOLS', NULL, NULL, '2021-02-24 04:06:58', '2021-02-24 04:06:58'),
(2, 2, NULL, 1, 'Admin', 'admin', NULL, NULL, NULL, NULL, NULL, '$2y$10$UMoGT.NAaup1OYNuLId4s./BJLwhltqjJxODd.WWN6tc/pJ6JpS5m', 'J9e6hB5XnuSzLQX1S5fHPr2i7RI5TWDXeNOcNCWh1eBT46L6FyOmDY33wciv', NULL, '2021-02-24 04:06:58', '2021-02-24 04:06:58'),
(3, 3, NULL, 1, 'Siswa', 'siswa', NULL, NULL, NULL, NULL, NULL, '$2y$10$PvRu5ewG1rg4ENtCNMaC2..xaF2H1TfIaLRBgDhGONQ8FL/NptV.G', NULL, NULL, '2021-02-24 04:06:59', '2021-02-24 04:06:59'),
(4, 4, NULL, 1, 'guru', 'guru', NULL, NULL, NULL, NULL, NULL, '$2y$10$PvRu5ewG1rg4ENtCNMaC2..xaF2H1TfIaLRBgDhGONQ8FL/NptV.G', '1ZrERfHh3Zlxaht4Tv0QtALof1QK7gTFHfoXbSDhsDajPXCoourQ3gkpZhdX', NULL, '2021-02-17 04:06:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `votings`
--

CREATE TABLE `votings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `calon_kandidat_id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`siswa_id`,`kelas_id`,`tanggal`);

--
-- Indexes for table `agamas`
--
ALTER TABLE `agamas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bagian_pegawais`
--
ALTER TABLE `bagian_pegawais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bagian_pegawais_user_id_foreign` (`user_id`);

--
-- Indexes for table `calon_kandidats`
--
ALTER TABLE `calon_kandidats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_pelajarans`
--
ALTER TABLE `jadwal_pelajarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jam_pelajarans`
--
ALTER TABLE `jam_pelajarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kelamins`
--
ALTER TABLE `jenis_kelamins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenjang_pegawais`
--
ALTER TABLE `jenjang_pegawais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabupaten_kotas`
--
ALTER TABLE `kabupaten_kotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `libraries_sekolah_id_foreign` (`sekolah_id`),
  ADD KEY `libraries_kategori_id_foreign` (`kategori_id`),
  ADD KEY `libraries_penulis_id_foreign` (`penulis_id`),
  ADD KEY `libraries_penerbit_id_foreign` (`penerbit_id`);

--
-- Indexes for table `mata_pelajarans`
--
ALTER TABLE `mata_pelajarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawais_email_unique` (`email`),
  ADD KEY `pegawais_user_id_foreign` (`user_id`);

--
-- Indexes for table `pelanggarans`
--
ALTER TABLE `pelanggarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggaran_siswas`
--
ALTER TABLE `pelanggaran_siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemilihan_kandidats`
--
ALTER TABLE `pemilihan_kandidats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbits`
--
ALTER TABLE `penerbits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penulises`
--
ALTER TABLE `penulises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penulis_penerbits`
--
ALTER TABLE `penulis_penerbits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_kelas`
--
ALTER TABLE `ref_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanksis`
--
ALTER TABLE `sanksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sekolahs`
--
ALTER TABLE `sekolahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswas_no_ktp_unique` (`no_ktp`),
  ADD KEY `siswas_id_tingkatan_kelas_foreign` (`id_tingkatan_kelas`);

--
-- Indexes for table `siswa_orang_tuas`
--
ALTER TABLE `siswa_orang_tuas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_orang_tuas_id_siswa_foreign` (`id_siswa`);

--
-- Indexes for table `siswa_walis`
--
ALTER TABLE `siswa_walis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_walis_id_siswa_foreign` (`id_siswa`);

--
-- Indexes for table `status_gurus`
--
ALTER TABLE `status_gurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_nikahs`
--
ALTER TABLE `status_nikahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sukus`
--
ALTER TABLE `sukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tingkatan_kelas`
--
ALTER TABLE `tingkatan_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tingkats`
--
ALTER TABLE `tingkats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipes`
--
ALTER TABLE `tipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_siswa_id_foreign` (`siswa_id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `votings`
--
ALTER TABLE `votings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agamas`
--
ALTER TABLE `agamas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bagian_pegawais`
--
ALTER TABLE `bagian_pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `calon_kandidats`
--
ALTER TABLE `calon_kandidats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal_pelajarans`
--
ALTER TABLE `jadwal_pelajarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jam_pelajarans`
--
ALTER TABLE `jam_pelajarans`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenis_kelamins`
--
ALTER TABLE `jenis_kelamins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenjang_pegawais`
--
ALTER TABLE `jenjang_pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kabupaten_kotas`
--
ALTER TABLE `kabupaten_kotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `libraries`
--
ALTER TABLE `libraries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mata_pelajarans`
--
ALTER TABLE `mata_pelajarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggarans`
--
ALTER TABLE `pelanggarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggaran_siswas`
--
ALTER TABLE `pelanggaran_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemilihan_kandidats`
--
ALTER TABLE `pemilihan_kandidats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penerbits`
--
ALTER TABLE `penerbits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penulises`
--
ALTER TABLE `penulises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penulis_penerbits`
--
ALTER TABLE `penulis_penerbits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_kelas`
--
ALTER TABLE `ref_kelas`
  MODIFY `id_kelas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanksis`
--
ALTER TABLE `sanksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sekolahs`
--
ALTER TABLE `sekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siswa_orang_tuas`
--
ALTER TABLE `siswa_orang_tuas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa_walis`
--
ALTER TABLE `siswa_walis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_gurus`
--
ALTER TABLE `status_gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_nikahs`
--
ALTER TABLE `status_nikahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sukus`
--
ALTER TABLE `sukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tingkatan_kelas`
--
ALTER TABLE `tingkatan_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tingkats`
--
ALTER TABLE `tingkats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipes`
--
ALTER TABLE `tipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `votings`
--
ALTER TABLE `votings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `libraries`
--
ALTER TABLE `libraries`
  ADD CONSTRAINT `libraries_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `tipes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `libraries_penerbit_id_foreign` FOREIGN KEY (`penerbit_id`) REFERENCES `penerbits` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `libraries_penulis_id_foreign` FOREIGN KEY (`penulis_id`) REFERENCES `penulises` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `libraries_sekolah_id_foreign` FOREIGN KEY (`sekolah_id`) REFERENCES `sekolahs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD CONSTRAINT `pegawais_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `siswas`
--
ALTER TABLE `siswas`
  ADD CONSTRAINT `siswas_id_tingkatan_kelas_foreign` FOREIGN KEY (`id_tingkatan_kelas`) REFERENCES `tingkatan_kelas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `siswa_orang_tuas`
--
ALTER TABLE `siswa_orang_tuas`
  ADD CONSTRAINT `siswa_orang_tuas_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `siswa_walis`
--
ALTER TABLE `siswa_walis`
  ADD CONSTRAINT `siswa_walis_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
