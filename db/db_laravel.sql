/*
Navicat MySQL Data Transfer

Source Server         : MySQL Local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_laravel

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-04-09 10:59:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for hobi
-- ----------------------------
DROP TABLE IF EXISTS `hobi`;
CREATE TABLE `hobi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_hobi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of hobi
-- ----------------------------
INSERT INTO `hobi` VALUES ('1', 'BERENANG', '2020-04-09 09:26:21', '2020-03-09 09:26:21');
INSERT INTO `hobi` VALUES ('2', 'MEMBACA', '2020-04-09 09:26:33', '2020-04-09 09:26:33');
INSERT INTO `hobi` VALUES ('3', 'MENULIS', '2020-04-09 10:00:26', '2020-04-09 10:00:26');
INSERT INTO `hobi` VALUES ('4', 'MAIN GAME', '2020-04-09 10:23:31', '2020-04-09 10:23:32');

-- ----------------------------
-- Table structure for hobi_siswa
-- ----------------------------
DROP TABLE IF EXISTS `hobi_siswa`;
CREATE TABLE `hobi_siswa` (
  `id_siswa` int(10) unsigned NOT NULL,
  `id_hobi` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_siswa`,`id_hobi`),
  KEY `hobi_siswa_id_siswa_index` (`id_siswa`),
  KEY `hobi_siswa_id_hobi_index` (`id_hobi`),
  CONSTRAINT `hobi_siswa_id_hobi_foreign` FOREIGN KEY (`id_hobi`) REFERENCES `hobi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `hobi_siswa_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of hobi_siswa
-- ----------------------------
INSERT INTO `hobi_siswa` VALUES ('1', '1', '2020-04-09 03:28:04', '2020-04-09 03:28:04');
INSERT INTO `hobi_siswa` VALUES ('1', '3', '2020-04-09 03:28:04', '2020-04-09 03:28:04');
INSERT INTO `hobi_siswa` VALUES ('1', '4', '2020-04-09 03:28:04', '2020-04-09 03:28:04');
INSERT INTO `hobi_siswa` VALUES ('2', '1', '2020-04-09 03:27:54', '2020-04-09 03:27:54');
INSERT INTO `hobi_siswa` VALUES ('3', '1', null, null);
INSERT INTO `hobi_siswa` VALUES ('3', '2', null, null);
INSERT INTO `hobi_siswa` VALUES ('4', '3', '2020-04-09 03:24:10', '2020-04-09 03:24:10');
INSERT INTO `hobi_siswa` VALUES ('4', '4', '2020-04-09 03:23:48', '2020-04-09 03:23:48');
INSERT INTO `hobi_siswa` VALUES ('5', '1', '2020-04-09 03:51:02', '2020-04-09 03:51:02');
INSERT INTO `hobi_siswa` VALUES ('5', '2', '2020-04-09 03:51:02', '2020-04-09 03:51:02');
INSERT INTO `hobi_siswa` VALUES ('5', '3', '2020-04-09 03:51:27', '2020-04-09 03:51:27');

-- ----------------------------
-- Table structure for kelas
-- ----------------------------
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kelas
-- ----------------------------
INSERT INTO `kelas` VALUES ('1', 'KELAS 1-A', '2020-04-08 12:10:01', '2020-04-08 12:10:01');
INSERT INTO `kelas` VALUES ('2', 'KELAS 1-B', '2020-04-08 12:10:01', '2020-04-08 12:10:08');
INSERT INTO `kelas` VALUES ('3', 'KELAS 2-A', '2020-04-08 12:10:25', '2020-04-08 12:10:26');
INSERT INTO `kelas` VALUES ('4', 'KELAS 2-B', '2020-04-08 12:10:32', '2020-04-08 12:10:33');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2020_04_06_064231_create_table_siswa', '1');
INSERT INTO `migrations` VALUES ('4', '2020_04_08_033713_create_table_telepon', '2');
INSERT INTO `migrations` VALUES ('5', '2020_04_08_043821_create_table_kelas', '3');
INSERT INTO `migrations` VALUES ('6', '2020_04_09_021645_create_table_hobi', '4');
INSERT INTO `migrations` VALUES ('8', '2020_04_09_023446_create_table_hobi_siswa', '5');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id_siswa` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nisn` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_depan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_akhir` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'L',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_kelas` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_siswa`),
  KEY `siswa_id_kelas_foreign` (`id_kelas`),
  CONSTRAINT `siswa_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES ('1', '1234', 'abdan', 'nafik', 'surabaya', '2001-10-10', 'L', '2020-04-08 05:00:43', '2020-04-08 05:30:27', '3');
INSERT INTO `siswa` VALUES ('2', '1238', 'bulan edit 1', 'ginitra', 'bali', '1991-07-26', 'P', '2020-04-08 05:27:28', '2020-04-08 05:27:28', '1');
INSERT INTO `siswa` VALUES ('3', '7546', 'radit', 'dika', 'jakarta', '1991-07-26', 'L', '2020-04-09 02:53:14', '2020-04-09 02:53:14', '3');
INSERT INTO `siswa` VALUES ('4', '7412', 'raisa', 'indarwati', 'bogor', '1991-08-26', 'P', '2020-04-09 02:55:01', '2020-04-09 02:55:01', '1');
INSERT INTO `siswa` VALUES ('5', '1789', 'caca', 'akhir', 'surabaya', '1991-07-26', 'P', '2020-04-09 03:51:02', '2020-04-09 03:51:02', '1');

-- ----------------------------
-- Table structure for telepon
-- ----------------------------
DROP TABLE IF EXISTS `telepon`;
CREATE TABLE `telepon` (
  `id_siswa` int(10) unsigned NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_siswa`),
  CONSTRAINT `telepon_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of telepon
-- ----------------------------
INSERT INTO `telepon` VALUES ('1', '08122335464', '2020-04-08 05:00:43', '2020-04-08 05:00:43');
INSERT INTO `telepon` VALUES ('2', '08124555196', '2020-04-08 05:27:28', '2020-04-08 05:27:28');
INSERT INTO `telepon` VALUES ('3', '08124555198', '2020-04-09 02:53:14', '2020-04-09 02:53:14');
INSERT INTO `telepon` VALUES ('4', '08562455121', '2020-04-09 02:55:01', '2020-04-09 02:55:01');
INSERT INTO `telepon` VALUES ('5', '08124557777', '2020-04-09 03:51:02', '2020-04-09 03:51:02');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
