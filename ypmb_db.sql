/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ypmb_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-05-29 17:02:50
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `failed_jobs`
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_reset_tokens_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('4', '2019_12_14_000001_create_personal_access_tokens_table', '1');
INSERT INTO `migrations` VALUES ('5', '2024_03_02_090307_create_admins_table', '1');
INSERT INTO `migrations` VALUES ('6', '2024_03_02_090650_create_jenjangs_table', '1');
INSERT INTO `migrations` VALUES ('7', '2024_03_02_090651_create_videos_table', '1');
INSERT INTO `migrations` VALUES ('8', '2024_03_02_090652_create_moduls_table', '1');
INSERT INTO `migrations` VALUES ('9', '2024_03_02_090655_create_pelatihans_table', '1');
INSERT INTO `migrations` VALUES ('10', '2024_03_02_095816_create_pendaftars_table', '1');
INSERT INTO `migrations` VALUES ('11', '2024_03_02_100413_create_reviews_table', '1');
INSERT INTO `migrations` VALUES ('12', '2024_03_02_101736_create_isi_sections_table', '1');
INSERT INTO `migrations` VALUES ('13', '2024_03_02_102454_create_modul_pelatihans_table', '1');

-- ----------------------------
-- Table structure for `password_reset_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `personal_access_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `t_admin`
-- ----------------------------
DROP TABLE IF EXISTS `t_admin`;
CREATE TABLE `t_admin` (
  `id_admin` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `role` enum('admin') NOT NULL DEFAULT 'admin',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of t_admin
-- ----------------------------
INSERT INTO `t_admin` VALUES ('1', 'admin', 'admin', '$2y$12$3HBGn1mZjOWeF35.go3/xukj.p0a/.kl9pdi2ILdTNc1fzvH3NEQe', null, '2024-05-17 08:40:23', '2024-05-17 08:40:23');

-- ----------------------------
-- Table structure for `t_isi_section`
-- ----------------------------
DROP TABLE IF EXISTS `t_isi_section`;
CREATE TABLE `t_isi_section` (
  `id_isi_section` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_section` varchar(255) NOT NULL,
  `id_video` bigint(20) unsigned NOT NULL,
  `id_modul` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_isi_section`),
  KEY `t_isi_section_id_video_foreign` (`id_video`),
  KEY `t_isi_section_id_modul_foreign` (`id_modul`),
  CONSTRAINT `t_isi_section_id_modul_foreign` FOREIGN KEY (`id_modul`) REFERENCES `t_modul` (`id_modul`),
  CONSTRAINT `t_isi_section_id_video_foreign` FOREIGN KEY (`id_video`) REFERENCES `t_video` (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of t_isi_section
-- ----------------------------

-- ----------------------------
-- Table structure for `t_jenjang`
-- ----------------------------
DROP TABLE IF EXISTS `t_jenjang`;
CREATE TABLE `t_jenjang` (
  `id_jenjang` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_jenjang` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenjang`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of t_jenjang
-- ----------------------------
INSERT INTO `t_jenjang` VALUES ('1', 'Raudaltul Athfal', null, null);
INSERT INTO `t_jenjang` VALUES ('2', 'Madrasah Ibtidaiyah', null, null);
INSERT INTO `t_jenjang` VALUES ('3', 'Madrasah Tsanawiyah', null, null);
INSERT INTO `t_jenjang` VALUES ('4', 'Madrasah Aliyah', null, null);

-- ----------------------------
-- Table structure for `t_modul`
-- ----------------------------
DROP TABLE IF EXISTS `t_modul`;
CREATE TABLE `t_modul` (
  `id_modul` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_section_modul` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_modul`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of t_modul
-- ----------------------------

-- ----------------------------
-- Table structure for `t_modul_pelatihan`
-- ----------------------------
DROP TABLE IF EXISTS `t_modul_pelatihan`;
CREATE TABLE `t_modul_pelatihan` (
  `id_modul_pelatihan` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_modul` bigint(20) unsigned NOT NULL,
  `id_pelatihan` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_modul_pelatihan`),
  KEY `t_modul_pelatihan_id_pelatihan_foreign` (`id_pelatihan`),
  KEY `t_modul_pelatihan_id_modul_foreign` (`id_modul`),
  CONSTRAINT `t_modul_pelatihan_id_modul_foreign` FOREIGN KEY (`id_modul`) REFERENCES `t_modul` (`id_modul`),
  CONSTRAINT `t_modul_pelatihan_id_pelatihan_foreign` FOREIGN KEY (`id_pelatihan`) REFERENCES `t_pelatihan` (`id_pelatihan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of t_modul_pelatihan
-- ----------------------------

-- ----------------------------
-- Table structure for `t_pelatihan`
-- ----------------------------
DROP TABLE IF EXISTS `t_pelatihan`;
CREATE TABLE `t_pelatihan` (
  `id_pelatihan` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pelatihan` varchar(255) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `foto_sampul` varchar(255) NOT NULL,
  `id_jenjang` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pelatihan`),
  KEY `t_pelatihan_id_jenjang_foreign` (`id_jenjang`),
  CONSTRAINT `t_pelatihan_id_jenjang_foreign` FOREIGN KEY (`id_jenjang`) REFERENCES `t_jenjang` (`id_jenjang`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of t_pelatihan
-- ----------------------------
INSERT INTO `t_pelatihan` VALUES ('1', 'Latihan Lari', '2010-03-10', '2010-04-10', 'test.png', '1', null, null);
INSERT INTO `t_pelatihan` VALUES ('2', 'Latihan Lari 2', '2010-03-11', '2010-04-11', 'test2.png', '2', null, null);
INSERT INTO `t_pelatihan` VALUES ('3', 'Latihan Lari 3', '2010-03-12', '2010-04-12', 'test3.png', '3', null, null);
INSERT INTO `t_pelatihan` VALUES ('4', 'Latihan Lari 4', '2010-03-13', '2010-04-13', 'test4.png', '1', null, null);
INSERT INTO `t_pelatihan` VALUES ('5', 'Latihan Lari 4', '2010-03-13', '2010-04-13', 'test4.png', '1', null, null);
INSERT INTO `t_pelatihan` VALUES ('6', 'Latihan Lari 5', '2010-03-14', '2010-04-14', 'test5.png', '1', null, null);
INSERT INTO `t_pelatihan` VALUES ('7', 'Latihan Lari 6', '2010-03-15', '2010-04-15', 'test6.png', '1', null, null);
INSERT INTO `t_pelatihan` VALUES ('8', 'Latihan Lari 7', '2010-03-16', '2010-04-16', 'test7.png', '1', null, null);

-- ----------------------------
-- Table structure for `t_pendaftar`
-- ----------------------------
DROP TABLE IF EXISTS `t_pendaftar`;
CREATE TABLE `t_pendaftar` (
  `id_pendaftar` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id` bigint(20) unsigned NOT NULL,
  `id_pelatihan` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pendaftar`),
  KEY `t_pendaftar_id_foreign` (`id`),
  KEY `t_pendaftar_id_pelatihan_foreign` (`id_pelatihan`),
  CONSTRAINT `t_pendaftar_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  CONSTRAINT `t_pendaftar_id_pelatihan_foreign` FOREIGN KEY (`id_pelatihan`) REFERENCES `t_pelatihan` (`id_pelatihan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of t_pendaftar
-- ----------------------------

-- ----------------------------
-- Table structure for `t_review`
-- ----------------------------
DROP TABLE IF EXISTS `t_review`;
CREATE TABLE `t_review` (
  `id_review` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id` bigint(20) unsigned NOT NULL,
  `id_pelatihan` bigint(20) unsigned NOT NULL,
  `ulasan` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `screenshot` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_review`),
  KEY `t_review_id_foreign` (`id`),
  KEY `t_review_id_pelatihan_foreign` (`id_pelatihan`),
  CONSTRAINT `t_review_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  CONSTRAINT `t_review_id_pelatihan_foreign` FOREIGN KEY (`id_pelatihan`) REFERENCES `t_pelatihan` (`id_pelatihan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of t_review
-- ----------------------------

-- ----------------------------
-- Table structure for `t_video`
-- ----------------------------
DROP TABLE IF EXISTS `t_video`;
CREATE TABLE `t_video` (
  `id_video` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_video` varchar(255) NOT NULL,
  `link_video` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of t_video
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` int(11) DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT '',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verify_key` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'ujang', 'ujang@gmail.com', '1', '2024-05-29 15:37:58', '$2y$12$2GaF6MGkpr8vaUwu3HsbfeUS3HOOWQfyzZ65jtUHb8EGYofPU7ACm', 'user.jpg', null, '2024-05-17 08:40:23', '2024-05-17 08:40:23', null);
INSERT INTO `users` VALUES ('27', 'Iqbal Fadhillah', 'iqbalfadhilah@upi.edu', '0', null, '$2y$12$QCtGtW65PCv5MXPuYxsB4.tPECWPOim.6avQYTEDkjPTIvXN5J3L2', 'images/1716975750_test.jpg', null, '2024-05-29 09:42:30', '2024-05-29 09:42:30', 'CXOLMpvAd5eNaEhTOknhZFWcZKVFWwszvG0ZvdnPqd88W8D7inMUBb0bXSEoU4tXLCPsJkoBp1zgCIuIhTCc5PATYzNbf1GXS3FL');
INSERT INTO `users` VALUES ('28', 'Legi Kuswandi', 'legi2807@upi.edu', '0', null, '$2y$12$vKNeoneDszPuZW2D/MvnA.uoL9VyoUgvLtaRWRUAxWiCFf5Qgu41C', 'images/1716976400_0_vOZ2vc8u2TKwAm1E.png', null, '2024-05-29 09:53:20', '2024-05-29 09:53:20', 'JXIC5gxpg9xAA2IszoQ075d8iSFm4uCe9ksX2eIn6uIOfe1kphBTig4YquSnDtqu6bAyQbLRWFQclwNIILrJdXf5hy98UUx7RvbA');
