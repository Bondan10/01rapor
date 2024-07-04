-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table laravel-raport-siswa.agamas
CREATE TABLE IF NOT EXISTS `agamas` (
  `agama_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`agama_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.agamas: ~5 rows (approximately)
/*!40000 ALTER TABLE `agamas` DISABLE KEYS */;
INSERT INTO `agamas` (`agama_id`, `nama_agama`, `created_at`, `updated_at`) VALUES
	(1, 'Katolik', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `agamas` (`agama_id`, `nama_agama`, `created_at`, `updated_at`) VALUES
	(2, 'Konghucu', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `agamas` (`agama_id`, `nama_agama`, `created_at`, `updated_at`) VALUES
	(3, 'Kristen', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `agamas` (`agama_id`, `nama_agama`, `created_at`, `updated_at`) VALUES
	(4, 'Islam', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `agamas` (`agama_id`, `nama_agama`, `created_at`, `updated_at`) VALUES
	(5, 'Hindu', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
/*!40000 ALTER TABLE `agamas` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.jabatans
CREATE TABLE IF NOT EXISTS `jabatans` (
  `jab_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jab_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`jab_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.jabatans: ~4 rows (approximately)
/*!40000 ALTER TABLE `jabatans` DISABLE KEYS */;
INSERT INTO `jabatans` (`jab_id`, `jab_nama`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `jabatans` (`jab_id`, `jab_nama`, `created_at`, `updated_at`) VALUES
	(2, 'guru', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `jabatans` (`jab_id`, `jab_nama`, `created_at`, `updated_at`) VALUES
	(3, 'wali', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `jabatans` (`jab_id`, `jab_nama`, `created_at`, `updated_at`) VALUES
	(4, 'kepsek', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
/*!40000 ALTER TABLE `jabatans` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.kelas
CREATE TABLE IF NOT EXISTS `kelas` (
  `kelas_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kelas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.kelas: ~3 rows (approximately)
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` (`kelas_id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
	(1, '1 C', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `kelas` (`kelas_id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
	(2, '1 B', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `kelas` (`kelas_id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
	(3, '1 C', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.kelompoks
CREATE TABLE IF NOT EXISTS `kelompoks` (
  `kelompok_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kelompok_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.kelompoks: ~3 rows (approximately)
/*!40000 ALTER TABLE `kelompoks` DISABLE KEYS */;
INSERT INTO `kelompoks` (`kelompok_id`, `nama_kelompok`, `created_at`, `updated_at`) VALUES
	(1, 'cumque', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `kelompoks` (`kelompok_id`, `nama_kelompok`, `created_at`, `updated_at`) VALUES
	(2, 'quod', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `kelompoks` (`kelompok_id`, `nama_kelompok`, `created_at`, `updated_at`) VALUES
	(3, 'neque', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
/*!40000 ALTER TABLE `kelompoks` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.mapels
CREATE TABLE IF NOT EXISTS `mapels` (
  `mapel_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int(11) NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `kelompok_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mapel_id`),
  KEY `mapels_user_id_foreign` (`user_id`),
  KEY `mapels_kelompok_id_foreign` (`kelompok_id`),
  CONSTRAINT `mapels_kelompok_id_foreign` FOREIGN KEY (`kelompok_id`) REFERENCES `kelompoks` (`kelompok_id`) ON DELETE CASCADE,
  CONSTRAINT `mapels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.mapels: ~14 rows (approximately)
/*!40000 ALTER TABLE `mapels` DISABLE KEYS */;
INSERT INTO `mapels` (`mapel_id`, `nama_mapel`, `sks`, `user_id`, `kelompok_id`, `created_at`, `updated_at`) VALUES
	(1, 'pariatur', 4, 1, 2, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `mapels` (`mapel_id`, `nama_mapel`, `sks`, `user_id`, `kelompok_id`, `created_at`, `updated_at`) VALUES
	(2, 'eos', 6, 1, 1, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `mapels` (`mapel_id`, `nama_mapel`, `sks`, `user_id`, `kelompok_id`, `created_at`, `updated_at`) VALUES
	(3, 'placeat', 3, 1, 1, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `mapels` (`mapel_id`, `nama_mapel`, `sks`, `user_id`, `kelompok_id`, `created_at`, `updated_at`) VALUES
	(4, 'non', 3, 1, 3, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `mapels` (`mapel_id`, `nama_mapel`, `sks`, `user_id`, `kelompok_id`, `created_at`, `updated_at`) VALUES
	(5, 'harum', 2, 1, 2, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `mapels` (`mapel_id`, `nama_mapel`, `sks`, `user_id`, `kelompok_id`, `created_at`, `updated_at`) VALUES
	(6, 'saepe', 3, 1, 2, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `mapels` (`mapel_id`, `nama_mapel`, `sks`, `user_id`, `kelompok_id`, `created_at`, `updated_at`) VALUES
	(7, 'natus', 5, 1, 1, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `mapels` (`mapel_id`, `nama_mapel`, `sks`, `user_id`, `kelompok_id`, `created_at`, `updated_at`) VALUES
	(8, 'aperiam', 4, 1, 3, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `mapels` (`mapel_id`, `nama_mapel`, `sks`, `user_id`, `kelompok_id`, `created_at`, `updated_at`) VALUES
	(9, 'adipisci', 5, 1, 1, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `mapels` (`mapel_id`, `nama_mapel`, `sks`, `user_id`, `kelompok_id`, `created_at`, `updated_at`) VALUES
	(10, 'doloremque', 2, 1, 3, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `mapels` (`mapel_id`, `nama_mapel`, `sks`, `user_id`, `kelompok_id`, `created_at`, `updated_at`) VALUES
	(11, 'vitae', 1, 1, 3, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `mapels` (`mapel_id`, `nama_mapel`, `sks`, `user_id`, `kelompok_id`, `created_at`, `updated_at`) VALUES
	(12, 'quia', 6, 1, 1, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `mapels` (`mapel_id`, `nama_mapel`, `sks`, `user_id`, `kelompok_id`, `created_at`, `updated_at`) VALUES
	(13, 'quasi', 4, 1, 3, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `mapels` (`mapel_id`, `nama_mapel`, `sks`, `user_id`, `kelompok_id`, `created_at`, `updated_at`) VALUES
	(14, 'perferendis', 5, 1, 3, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
/*!40000 ALTER TABLE `mapels` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.migrations: ~24 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(5, '2023_08_21_130959_create_jabatans_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(6, '2023_08_21_131537_add_field_to_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(7, '2023_09_20_160708_create_agamas_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(8, '2023_09_20_161347_create_kelas_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(9, '2023_09_20_161911_create_siswas_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(10, '2023_09_20_162233_add_field_to_siswas_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(11, '2023_09_20_163059_create_kelompoks_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(12, '2023_09_20_163543_create_mapels_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(13, '2023_09_20_163831_add_field_to_mapels_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(14, '2023_09_23_161048_create_nilai_harians_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(15, '2023_09_23_161638_create_nilai_tugas_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(16, '2023_09_23_162116_create_nilai_uts_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(17, '2023_09_23_162707_create_nilai_uas_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(18, '2023_09_27_035857_add_field_to_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(19, '2023_09_28_083701_create_tahun_akademiks_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(20, '2023_09_28_085003_create_semesters_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(21, '2023_09_29_161200_add_field_to_nilai_harians_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(22, '2023_09_29_161737_add_field_to_nilai_tugas_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(23, '2023_09_29_162144_add_field_to_nilai_uts_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(24, '2023_09_29_162731_add_field_to_nilai_uas_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.nilai_harians
CREATE TABLE IF NOT EXISTS `nilai_harians` (
  `nilai_harian_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mapel_id` bigint(20) unsigned NOT NULL,
  `siswa_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `tahun_akademik_id` bigint(20) unsigned NOT NULL,
  `semester_id` bigint(20) unsigned NOT NULL,
  `pertemuan` int(11) NOT NULL,
  `nilai` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nilai_harian_id`),
  KEY `nilai_harians_mapel_id_foreign` (`mapel_id`),
  KEY `nilai_harians_siswa_id_foreign` (`siswa_id`),
  KEY `nilai_harians_user_id_foreign` (`user_id`),
  KEY `nilai_harians_tahun_akademik_id_foreign` (`tahun_akademik_id`),
  KEY `nilai_harians_semester_id_foreign` (`semester_id`),
  CONSTRAINT `nilai_harians_mapel_id_foreign` FOREIGN KEY (`mapel_id`) REFERENCES `mapels` (`mapel_id`),
  CONSTRAINT `nilai_harians_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`),
  CONSTRAINT `nilai_harians_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`siswa_id`),
  CONSTRAINT `nilai_harians_tahun_akademik_id_foreign` FOREIGN KEY (`tahun_akademik_id`) REFERENCES `tahun_akademiks` (`tahun_akademik_id`),
  CONSTRAINT `nilai_harians_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.nilai_harians: ~0 rows (approximately)
/*!40000 ALTER TABLE `nilai_harians` DISABLE KEYS */;
INSERT INTO `nilai_harians` (`nilai_harian_id`, `mapel_id`, `siswa_id`, `user_id`, `tahun_akademik_id`, `semester_id`, `pertemuan`, `nilai`, `created_at`, `updated_at`) VALUES
	(1, 11, 4, 2, 1, 1, 3, 20.17, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
/*!40000 ALTER TABLE `nilai_harians` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.nilai_tugas
CREATE TABLE IF NOT EXISTS `nilai_tugas` (
  `tugas_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mapel_id` bigint(20) unsigned NOT NULL,
  `siswa_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `tahun_akademik_id` bigint(20) unsigned NOT NULL,
  `semester_id` bigint(20) unsigned NOT NULL,
  `nilai` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tugas_id`),
  KEY `nilai_tugas_mapel_id_foreign` (`mapel_id`),
  KEY `nilai_tugas_siswa_id_foreign` (`siswa_id`),
  KEY `nilai_tugas_user_id_foreign` (`user_id`),
  KEY `nilai_tugas_tahun_akademik_id_foreign` (`tahun_akademik_id`),
  KEY `nilai_tugas_semester_id_foreign` (`semester_id`),
  CONSTRAINT `nilai_tugas_mapel_id_foreign` FOREIGN KEY (`mapel_id`) REFERENCES `mapels` (`mapel_id`),
  CONSTRAINT `nilai_tugas_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`),
  CONSTRAINT `nilai_tugas_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`siswa_id`),
  CONSTRAINT `nilai_tugas_tahun_akademik_id_foreign` FOREIGN KEY (`tahun_akademik_id`) REFERENCES `tahun_akademiks` (`tahun_akademik_id`),
  CONSTRAINT `nilai_tugas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.nilai_tugas: ~0 rows (approximately)
/*!40000 ALTER TABLE `nilai_tugas` DISABLE KEYS */;
INSERT INTO `nilai_tugas` (`tugas_id`, `mapel_id`, `siswa_id`, `user_id`, `tahun_akademik_id`, `semester_id`, `nilai`, `created_at`, `updated_at`) VALUES
	(1, 12, 5, 2, 1, 1, 89.37, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
/*!40000 ALTER TABLE `nilai_tugas` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.nilai_uas
CREATE TABLE IF NOT EXISTS `nilai_uas` (
  `uas_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mapel_id` bigint(20) unsigned NOT NULL,
  `siswa_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `tahun_akademik_id` bigint(20) unsigned NOT NULL,
  `semester_id` bigint(20) unsigned NOT NULL,
  `nilai` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uas_id`),
  KEY `nilai_uas_mapel_id_foreign` (`mapel_id`),
  KEY `nilai_uas_siswa_id_foreign` (`siswa_id`),
  KEY `nilai_uas_user_id_foreign` (`user_id`),
  KEY `nilai_uas_tahun_akademik_id_foreign` (`tahun_akademik_id`),
  KEY `nilai_uas_semester_id_foreign` (`semester_id`),
  CONSTRAINT `nilai_uas_mapel_id_foreign` FOREIGN KEY (`mapel_id`) REFERENCES `mapels` (`mapel_id`),
  CONSTRAINT `nilai_uas_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`),
  CONSTRAINT `nilai_uas_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`siswa_id`),
  CONSTRAINT `nilai_uas_tahun_akademik_id_foreign` FOREIGN KEY (`tahun_akademik_id`) REFERENCES `tahun_akademiks` (`tahun_akademik_id`),
  CONSTRAINT `nilai_uas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.nilai_uas: ~0 rows (approximately)
/*!40000 ALTER TABLE `nilai_uas` DISABLE KEYS */;
INSERT INTO `nilai_uas` (`uas_id`, `mapel_id`, `siswa_id`, `user_id`, `tahun_akademik_id`, `semester_id`, `nilai`, `created_at`, `updated_at`) VALUES
	(1, 14, 7, 2, 1, 1, 49.99, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
/*!40000 ALTER TABLE `nilai_uas` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.nilai_uts
CREATE TABLE IF NOT EXISTS `nilai_uts` (
  `uts_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mapel_id` bigint(20) unsigned NOT NULL,
  `siswa_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `tahun_akademik_id` bigint(20) unsigned NOT NULL,
  `semester_id` bigint(20) unsigned NOT NULL,
  `nilai` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uts_id`),
  KEY `nilai_uts_mapel_id_foreign` (`mapel_id`),
  KEY `nilai_uts_siswa_id_foreign` (`siswa_id`),
  KEY `nilai_uts_user_id_foreign` (`user_id`),
  KEY `nilai_uts_tahun_akademik_id_foreign` (`tahun_akademik_id`),
  KEY `nilai_uts_semester_id_foreign` (`semester_id`),
  CONSTRAINT `nilai_uts_mapel_id_foreign` FOREIGN KEY (`mapel_id`) REFERENCES `mapels` (`mapel_id`),
  CONSTRAINT `nilai_uts_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`),
  CONSTRAINT `nilai_uts_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`siswa_id`),
  CONSTRAINT `nilai_uts_tahun_akademik_id_foreign` FOREIGN KEY (`tahun_akademik_id`) REFERENCES `tahun_akademiks` (`tahun_akademik_id`),
  CONSTRAINT `nilai_uts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.nilai_uts: ~0 rows (approximately)
/*!40000 ALTER TABLE `nilai_uts` DISABLE KEYS */;
INSERT INTO `nilai_uts` (`uts_id`, `mapel_id`, `siswa_id`, `user_id`, `tahun_akademik_id`, `semester_id`, `nilai`, `created_at`, `updated_at`) VALUES
	(1, 13, 6, 2, 1, 1, 47.98, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
/*!40000 ALTER TABLE `nilai_uts` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.password_reset_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.semesters
CREATE TABLE IF NOT EXISTS `semesters` (
  `semester_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`semester_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.semesters: ~3 rows (approximately)
/*!40000 ALTER TABLE `semesters` DISABLE KEYS */;
INSERT INTO `semesters` (`semester_id`, `nama_semester`, `status`, `created_at`, `updated_at`) VALUES
	(1, '1 (satu)', 1, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `semesters` (`semester_id`, `nama_semester`, `status`, `created_at`, `updated_at`) VALUES
	(2, 'exercitationem', 0, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `semesters` (`semester_id`, `nama_semester`, `status`, `created_at`, `updated_at`) VALUES
	(3, 'ut', 0, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
/*!40000 ALTER TABLE `semesters` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.siswas
CREATE TABLE IF NOT EXISTS `siswas` (
  `siswa_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama_id` bigint(20) unsigned NOT NULL,
  `status` enum('Aktif','Nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekolah_asal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_id` bigint(20) unsigned DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerja_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerja_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`siswa_id`),
  UNIQUE KEY `siswas_nis_unique` (`nis`),
  KEY `siswas_agama_id_foreign` (`agama_id`),
  KEY `siswas_kelas_id_foreign` (`kelas_id`),
  CONSTRAINT `siswas_agama_id_foreign` FOREIGN KEY (`agama_id`) REFERENCES `agamas` (`agama_id`) ON DELETE CASCADE,
  CONSTRAINT `siswas_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`kelas_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.siswas: ~7 rows (approximately)
/*!40000 ALTER TABLE `siswas` DISABLE KEYS */;
INSERT INTO `siswas` (`siswa_id`, `nis`, `password`, `nama`, `sex`, `tempat_lahir`, `tanggal_lahir`, `agama_id`, `status`, `anak_ke`, `alamat`, `sekolah_asal`, `kelas_id`, `tanggal_masuk`, `ayah`, `ibu`, `pekerja_ayah`, `pekerja_ibu`, `created_at`, `updated_at`) VALUES
	(1, '777352854', '$2y$10$vUl7zkwG.s74HVu24wAXE.Xmpg643EqYjN/rdbbSORpTf5a1Hhx5S', 'Simeon Altenwerth', 'L', 'Peggieport', '1970-06-24', 3, 'Aktif', 7, '452 Riley Point\nWest Santa, MO 17890-6923', 'Kub Group', 2, '2002-06-25', 'Devin Abernathy', 'Yazmin Denesik', 'Business Teacher', 'Healthcare Support Worker', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `siswas` (`siswa_id`, `nis`, `password`, `nama`, `sex`, `tempat_lahir`, `tanggal_lahir`, `agama_id`, `status`, `anak_ke`, `alamat`, `sekolah_asal`, `kelas_id`, `tanggal_masuk`, `ayah`, `ibu`, `pekerja_ayah`, `pekerja_ibu`, `created_at`, `updated_at`) VALUES
	(2, '338708853', '$2y$10$y0QPmHD0b1T1SX2A1cK4cemw2WEg4IQOpOSPGgc0z.FbCpiM48C.G', 'Henry Douglas', 'L', 'Feeneyborough', '1987-12-17', 1, 'Aktif', 6, '68251 Myrna Hill\nOpheliamouth, NC 59625', 'Schinner-Lakin', 3, '2002-02-28', 'Lonnie Boyle', 'Dr. Helene Batz', 'Tailor', 'Assembler', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `siswas` (`siswa_id`, `nis`, `password`, `nama`, `sex`, `tempat_lahir`, `tanggal_lahir`, `agama_id`, `status`, `anak_ke`, `alamat`, `sekolah_asal`, `kelas_id`, `tanggal_masuk`, `ayah`, `ibu`, `pekerja_ayah`, `pekerja_ibu`, `created_at`, `updated_at`) VALUES
	(3, '940534831', '$2y$10$uRt4OuJi3V66u28lHkhwxOmASeE/uM6KclAwh.ynYaACOD8JS9ASa', 'Johnny Rosenbaum', 'P', 'South Myrticetown', '2019-09-25', 5, 'Aktif', 6, '9673 Hanna Lane\nPort Clifton, FL 94634', 'Beahan, Glover and Pacocha', 2, '2013-03-02', 'Wilfred Heathcote', 'Miss Magali Sipes', 'Drafter', 'Milling Machine Operator', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `siswas` (`siswa_id`, `nis`, `password`, `nama`, `sex`, `tempat_lahir`, `tanggal_lahir`, `agama_id`, `status`, `anak_ke`, `alamat`, `sekolah_asal`, `kelas_id`, `tanggal_masuk`, `ayah`, `ibu`, `pekerja_ayah`, `pekerja_ibu`, `created_at`, `updated_at`) VALUES
	(4, '640903234', '$2y$10$m8oG7doH5ilV2Kg8mS7zcetV8NnXuH3HfmWTG7PT7sYv6YhxOpx16', 'Dr. Edison Ritchie Sr.', 'L', 'Freddybury', '1971-01-16', 1, 'Aktif', 7, '3335 Alysson Court\nValentinachester, AZ 79995', 'Stoltenberg Inc', 2, '1976-05-09', 'Gayle Hodkiewicz', 'Lorena Funk PhD', 'Septic Tank Servicer', 'Supervisor of Police', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `siswas` (`siswa_id`, `nis`, `password`, `nama`, `sex`, `tempat_lahir`, `tanggal_lahir`, `agama_id`, `status`, `anak_ke`, `alamat`, `sekolah_asal`, `kelas_id`, `tanggal_masuk`, `ayah`, `ibu`, `pekerja_ayah`, `pekerja_ibu`, `created_at`, `updated_at`) VALUES
	(5, '023585714', '$2y$10$XK7lVZzwa.GnSe27xaBdV.ksLo./w71AP0vIL4yjxf76nHaz2HD5W', 'Dr. Giles Corkery', 'P', 'Myrtisburgh', '2013-01-24', 5, 'Aktif', 7, '1708 Freeman Lane\nWest Joelletown, ID 33633-4182', 'Gleichner-Zieme', 1, '1989-07-23', 'Macey Johnston', 'Jessika Larkin Sr.', 'School Social Worker', 'Locksmith', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `siswas` (`siswa_id`, `nis`, `password`, `nama`, `sex`, `tempat_lahir`, `tanggal_lahir`, `agama_id`, `status`, `anak_ke`, `alamat`, `sekolah_asal`, `kelas_id`, `tanggal_masuk`, `ayah`, `ibu`, `pekerja_ayah`, `pekerja_ibu`, `created_at`, `updated_at`) VALUES
	(6, '856391861', '$2y$10$BN4.rxumzRktnaDEKgSYBuxMZvMOn1UYYAJcgU9l//KSzozf0zefW', 'Dr. Halle Langworth', 'P', 'South Roderickbury', '2001-06-21', 5, 'Aktif', 2, '3900 Elenora Crossroad\nEast Mark, HI 65577', 'Schultz Group', 2, '2001-06-01', 'Dr. Holden Ernser', 'Dr. Freeda Tillman I', 'Forming Machine Operator', 'Costume Attendant', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `siswas` (`siswa_id`, `nis`, `password`, `nama`, `sex`, `tempat_lahir`, `tanggal_lahir`, `agama_id`, `status`, `anak_ke`, `alamat`, `sekolah_asal`, `kelas_id`, `tanggal_masuk`, `ayah`, `ibu`, `pekerja_ayah`, `pekerja_ibu`, `created_at`, `updated_at`) VALUES
	(7, '197970689', '$2y$10$LLtjS53qqEe8d9M4orlIe.D/smEnxy3C4A/H1fviUjSWloJumDcqy', 'Carolina Eichmann', 'L', 'West Rachaelmouth', '1999-07-22', 4, 'Aktif', 9, '65943 Kenneth Light\nNew Patsyland, KS 55745-8900', 'Bechtelar, Kuhlman and Moore', 1, '2007-01-13', 'Wendell Klocko', 'Zola Schimmel', 'Retail Salesperson', 'Supervisor Correctional Officer', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `siswas` (`siswa_id`, `nis`, `password`, `nama`, `sex`, `tempat_lahir`, `tanggal_lahir`, `agama_id`, `status`, `anak_ke`, `alamat`, `sekolah_asal`, `kelas_id`, `tanggal_masuk`, `ayah`, `ibu`, `pekerja_ayah`, `pekerja_ibu`, `created_at`, `updated_at`) VALUES
	(8, '123456', '$2y$10$Wk861NBGoCBNSIhsQb69HOwqYODCSqD6yiX/mSXoBQ/i6UO8tHSk6', 'lukman', 'P', 'Jambi', '2022-11-30', 1, 'Nonaktif', 3, 'jl sokue', 'jambi', 3, '2021-11-26', 'ayah', 'ibu', 'kerja ayah', 'kerja ibu', '2023-09-30 17:20:11', '2023-09-30 17:20:11');
/*!40000 ALTER TABLE `siswas` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.tahun_akademiks
CREATE TABLE IF NOT EXISTS `tahun_akademiks` (
  `tahun_akademik_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tahun_akademik_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.tahun_akademiks: ~3 rows (approximately)
/*!40000 ALTER TABLE `tahun_akademiks` DISABLE KEYS */;
INSERT INTO `tahun_akademiks` (`tahun_akademik_id`, `nama_tahun`, `status`, `created_at`, `updated_at`) VALUES
	(1, '2023/2024', 1, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `tahun_akademiks` (`tahun_akademik_id`, `nama_tahun`, `status`, `created_at`, `updated_at`) VALUES
	(2, '2005', 0, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `tahun_akademiks` (`tahun_akademik_id`, `nama_tahun`, `status`, `created_at`, `updated_at`) VALUES
	(3, '1986', 0, '2023-09-30 16:16:02', '2023-09-30 16:16:02');
/*!40000 ALTER TABLE `tahun_akademiks` ENABLE KEYS */;

-- Dumping structure for table laravel-raport-siswa.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_jab_id` int(10) unsigned NOT NULL,
  `kelas_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_user_jab_id_foreign` (`user_jab_id`),
  KEY `users_kelas_id_foreign` (`kelas_id`),
  CONSTRAINT `users_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`kelas_id`) ON DELETE CASCADE,
  CONSTRAINT `users_user_jab_id_foreign` FOREIGN KEY (`user_jab_id`) REFERENCES `jabatans` (`jab_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-raport-siswa.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_jab_id`, `kelas_id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'Administrator', 'admin', 'admin@gmail.com', '2023-09-30 16:16:02', '$2y$10$D/rNHHD0TA3V9bFjfwze7e3u.OfOV8AOPuZKJSKlpI5R4LT7hJRmS', 'XBTEX3LNLJfoNjSJcloyiGxvrxJSm93iZI5if3y47oPWT3Tplx4lk6q6rXNO', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `users` (`user_id`, `user_jab_id`, `kelas_id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(2, 2, NULL, 'Guru', 'guru', 'guru@gmail.com', '2023-09-30 16:16:02', '$2y$10$qUPvKIvIPbtfDAULllqtKOpt2z.N0g8g2MHCmp2KQsEdmbpU3Ew0i', '8luqFXDb9u', '2023-09-30 16:16:02', '2023-09-30 16:16:02');
INSERT INTO `users` (`user_id`, `user_jab_id`, `kelas_id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(3, 3, NULL, 'WALI KELAS', 'wali', 'wali@gmail.com', NULL, '$2y$10$0NHZOaJxCTgkkJ0CBwsZHeVB6eJCVOERHrWUwy.q.yhcAXevWfGgm', NULL, '2023-09-30 16:53:08', '2023-09-30 16:53:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
