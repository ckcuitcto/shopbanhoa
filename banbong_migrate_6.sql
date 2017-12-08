/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50719
 Source Host           : localhost:3306
 Source Schema         : banbong_migrate_5

 Target Server Type    : MySQL
 Target Server Version : 50719
 File Encoding         : 65001

 Date: 08/12/2017 23:32:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bill_detail
-- ----------------------------
DROP TABLE IF EXISTS `bill_detail`;
CREATE TABLE `bill_detail`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `unit_price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_bill` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `bill_detail_id_product_foreign`(`id_product`) USING BTREE,
  INDEX `bill_detail_id_bill_foreign`(`id_bill`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 163 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of bill_detail
-- ----------------------------
INSERT INTO `bill_detail` VALUES (1, 120000, 3, 1, 46, '2017-11-22 02:01:51', '2017-11-22 02:01:51');
INSERT INTO `bill_detail` VALUES (2, 140000, 1, 1, 47, '2017-11-22 02:01:51', '2017-11-22 02:01:51');
INSERT INTO `bill_detail` VALUES (3, 150000, 1, 2, 95, '2017-11-22 02:03:03', '2017-11-22 02:03:03');
INSERT INTO `bill_detail` VALUES (4, 180000, 1, 2, 2, '2017-11-22 02:03:03', '2017-11-22 02:03:03');
INSERT INTO `bill_detail` VALUES (5, 150000, 1, 2, 96, '2017-11-22 02:03:03', '2017-11-22 02:03:03');
INSERT INTO `bill_detail` VALUES (6, 160000, 2, 2, 4, '2017-11-22 02:03:03', '2017-11-22 02:03:03');
INSERT INTO `bill_detail` VALUES (7, 160000, 2, 2, 5, '2017-11-22 02:03:03', '2017-11-22 02:03:03');
INSERT INTO `bill_detail` VALUES (8, 200000, 2, 2, 6, '2017-11-22 02:03:03', '2017-11-22 02:03:03');
INSERT INTO `bill_detail` VALUES (9, 350000, 40, 3, 15, '2017-11-24 01:50:50', '2017-12-08 13:20:46');
INSERT INTO `bill_detail` VALUES (10, 120000, 1, 4, 49, '2017-11-25 13:47:08', '2017-12-08 13:02:37');
INSERT INTO `bill_detail` VALUES (156, 110000, 1, 55, 90, '2017-12-08 15:49:46', '2017-12-08 15:49:46');
INSERT INTO `bill_detail` VALUES (12, 777000, 5, 4, 109, '2017-11-25 13:47:08', '2017-12-08 13:03:14');
INSERT INTO `bill_detail` VALUES (13, 150000, 1, 7, 96, '2017-11-25 14:04:54', '2017-11-25 14:04:54');
INSERT INTO `bill_detail` VALUES (14, 120000, 1, 7, 49, '2017-11-25 14:04:54', '2017-11-25 14:04:54');
INSERT INTO `bill_detail` VALUES (15, 777000, 1, 7, 109, '2017-11-25 14:04:54', '2017-11-25 14:04:54');
INSERT INTO `bill_detail` VALUES (16, 120000, 1, 7, 45, '2017-11-25 14:04:54', '2017-11-25 14:04:54');
INSERT INTO `bill_detail` VALUES (17, 150000, 2, 8, 96, '2017-11-25 14:10:58', '2017-11-25 14:10:58');
INSERT INTO `bill_detail` VALUES (18, 120000, 3, 8, 49, '2017-11-25 14:10:58', '2017-11-25 14:10:58');
INSERT INTO `bill_detail` VALUES (19, 777000, 1, 8, 109, '2017-11-25 14:10:58', '2017-11-25 14:10:58');
INSERT INTO `bill_detail` VALUES (79, 120000, 2, 38, 43, '2017-12-05 02:11:06', '2017-12-05 02:11:06');
INSERT INTO `bill_detail` VALUES (21, 120000, 3, 9, 49, '2017-11-25 14:11:28', '2017-11-25 14:11:28');
INSERT INTO `bill_detail` VALUES (22, 777000, 1, 9, 109, '2017-11-25 14:11:28', '2017-11-25 14:11:28');
INSERT INTO `bill_detail` VALUES (23, 150000, 5, 10, 96, '2017-11-25 14:11:37', '2017-11-25 14:11:37');
INSERT INTO `bill_detail` VALUES (24, 120000, 3, 10, 49, '2017-11-25 14:11:37', '2017-11-25 14:11:37');
INSERT INTO `bill_detail` VALUES (25, 777000, 1, 10, 109, '2017-11-25 14:11:37', '2017-11-25 14:11:37');
INSERT INTO `bill_detail` VALUES (158, 156700, 1, 55, 97, '2017-12-08 15:49:46', '2017-12-08 15:49:46');
INSERT INTO `bill_detail` VALUES (27, 120000, 2, 11, 49, '2017-11-25 14:25:00', '2017-12-06 18:14:36');
INSERT INTO `bill_detail` VALUES (28, 777000, 4, 11, 109, '2017-11-25 14:25:00', '2017-12-06 18:14:36');
INSERT INTO `bill_detail` VALUES (29, 150000, 5, 12, 96, '2017-11-25 14:25:41', '2017-11-25 14:25:41');
INSERT INTO `bill_detail` VALUES (30, 120000, 3, 12, 49, '2017-11-25 14:25:41', '2017-11-25 14:25:41');
INSERT INTO `bill_detail` VALUES (31, 777000, 1, 12, 109, '2017-11-25 14:25:41', '2017-11-25 14:25:41');
INSERT INTO `bill_detail` VALUES (32, 150000, 1, 16, 96, '2017-11-25 14:56:04', '2017-11-25 14:56:04');
INSERT INTO `bill_detail` VALUES (33, 120000, 1, 16, 49, '2017-11-25 14:56:04', '2017-11-25 14:56:04');
INSERT INTO `bill_detail` VALUES (34, 777000, 2, 16, 109, '2017-11-25 14:56:04', '2017-11-25 14:56:04');
INSERT INTO `bill_detail` VALUES (35, 150000, 1, 17, 96, '2017-11-25 14:56:35', '2017-11-25 14:56:35');
INSERT INTO `bill_detail` VALUES (36, 120000, 1, 17, 49, '2017-11-25 14:56:35', '2017-11-25 14:56:35');
INSERT INTO `bill_detail` VALUES (37, 777000, 2, 17, 109, '2017-11-25 14:56:35', '2017-11-25 14:56:35');
INSERT INTO `bill_detail` VALUES (38, 150000, 1, 18, 96, '2017-11-25 18:44:11', '2017-11-25 18:44:11');
INSERT INTO `bill_detail` VALUES (39, 120000, 1, 18, 49, '2017-11-25 18:44:11', '2017-11-25 18:44:11');
INSERT INTO `bill_detail` VALUES (40, 120000, 2, 19, 49, '2017-11-25 19:16:35', '2017-11-25 19:16:35');
INSERT INTO `bill_detail` VALUES (41, 777000, 3, 19, 109, '2017-11-25 19:16:35', '2017-11-25 19:16:35');
INSERT INTO `bill_detail` VALUES (42, 150000, 1, 19, 96, '2017-11-25 19:16:35', '2017-11-25 19:16:35');
INSERT INTO `bill_detail` VALUES (43, 120000, 2, 20, 49, '2017-11-25 19:18:35', '2017-11-25 19:18:35');
INSERT INTO `bill_detail` VALUES (44, 777000, 3, 20, 109, '2017-11-25 19:18:35', '2017-11-25 19:18:35');
INSERT INTO `bill_detail` VALUES (45, 150000, 1, 20, 96, '2017-11-25 19:18:35', '2017-11-25 19:18:35');
INSERT INTO `bill_detail` VALUES (46, 200000, 1, 21, 6, '2017-11-25 19:27:10', '2017-11-25 19:27:10');
INSERT INTO `bill_detail` VALUES (47, 160000, 1, 21, 7, '2017-11-25 19:27:10', '2017-11-25 19:27:10');
INSERT INTO `bill_detail` VALUES (48, 160000, 1, 21, 8, '2017-11-25 19:27:10', '2017-11-25 19:27:10');
INSERT INTO `bill_detail` VALUES (49, 180000, 1, 21, 2, '2017-11-25 19:27:10', '2017-11-25 19:27:10');
INSERT INTO `bill_detail` VALUES (50, 777000, 3, 22, 109, '2017-11-25 20:39:26', '2017-11-25 20:39:26');
INSERT INTO `bill_detail` VALUES (51, 120000, 7, 22, 49, '2017-11-25 20:39:26', '2017-11-25 20:39:26');
INSERT INTO `bill_detail` VALUES (52, 150000, 3, 22, 96, '2017-11-25 20:39:26', '2017-11-25 20:39:26');
INSERT INTO `bill_detail` VALUES (53, 120000, 1, 24, 49, '2017-11-25 20:43:51', '2017-11-25 20:43:51');
INSERT INTO `bill_detail` VALUES (54, 120000, 1, 25, 49, '2017-11-25 20:45:43', '2017-11-25 20:45:43');
INSERT INTO `bill_detail` VALUES (55, 180000, 3, 26, 2, '2017-11-25 21:54:34', '2017-11-25 21:54:34');
INSERT INTO `bill_detail` VALUES (56, 150000, 1, 26, 96, '2017-11-25 21:54:34', '2017-11-25 21:54:34');
INSERT INTO `bill_detail` VALUES (57, 1200000, 1, 26, 83, '2017-11-25 21:54:34', '2017-11-25 21:54:34');
INSERT INTO `bill_detail` VALUES (157, 430000, 1, 55, 91, '2017-12-08 15:49:46', '2017-12-08 15:49:46');
INSERT INTO `bill_detail` VALUES (59, 120000, 1, 27, 49, '2017-11-25 21:56:20', '2017-11-25 21:56:20');
INSERT INTO `bill_detail` VALUES (60, 150000, 4, 28, 96, '2017-11-25 21:57:23', '2017-11-25 21:57:23');
INSERT INTO `bill_detail` VALUES (61, 120000, 4, 28, 49, '2017-11-25 21:57:23', '2017-11-25 21:57:23');
INSERT INTO `bill_detail` VALUES (62, 777000, 2, 28, 109, '2017-11-25 21:57:23', '2017-11-25 21:57:23');
INSERT INTO `bill_detail` VALUES (63, 33000, 28, 29, 113, '2017-11-25 22:07:11', '2017-11-25 22:07:11');
INSERT INTO `bill_detail` VALUES (66, 300000, 1, 30, 13, '2017-11-26 12:11:14', '2017-11-26 12:11:14');
INSERT INTO `bill_detail` VALUES (67, 200000, 1, 30, 12, '2017-11-26 12:11:14', '2017-12-08 22:10:25');
INSERT INTO `bill_detail` VALUES (68, 180000, 1, 30, 18, '2017-11-26 12:11:14', '2017-12-08 22:10:25');
INSERT INTO `bill_detail` VALUES (69, 150000, 2, 31, 95, '2017-11-27 00:59:27', '2017-11-27 00:59:27');
INSERT INTO `bill_detail` VALUES (70, 250000, 3, 32, 11, '2017-11-27 01:10:51', '2017-11-27 01:10:51');
INSERT INTO `bill_detail` VALUES (71, 120000, 1, 32, 49, '2017-11-27 01:10:51', '2017-11-27 01:10:51');
INSERT INTO `bill_detail` VALUES (72, 320000, 20, 33, 114, '2017-11-27 01:55:10', '2017-11-27 01:55:10');
INSERT INTO `bill_detail` VALUES (73, 120000, 1, 34, 49, '2017-11-28 01:34:38', '2017-11-28 01:34:38');
INSERT INTO `bill_detail` VALUES (74, 777000, 3, 34, 109, '2017-11-28 01:34:38', '2017-11-28 01:34:38');
INSERT INTO `bill_detail` VALUES (75, 320000, 2, 35, 114, '2017-11-28 01:35:41', '2017-11-28 01:35:41');
INSERT INTO `bill_detail` VALUES (76, 340000, 2, 36, 112, '2017-11-28 01:37:51', '2017-11-28 01:37:51');
INSERT INTO `bill_detail` VALUES (77, 250000, 1, 36, 11, '2017-11-28 01:37:51', '2017-11-28 01:37:51');
INSERT INTO `bill_detail` VALUES (78, 250000, 1, 36, 17, '2017-11-28 01:37:51', '2017-11-28 01:37:51');
INSERT INTO `bill_detail` VALUES (80, 280000, 1, 38, 33, '2017-12-05 02:11:06', '2017-12-05 02:11:06');
INSERT INTO `bill_detail` VALUES (81, 150000, 2, 38, 95, '2017-12-05 02:11:06', '2017-12-05 02:11:06');
INSERT INTO `bill_detail` VALUES (82, 160000, 10, 38, 7, '2017-12-05 02:11:06', '2017-12-05 02:11:06');
INSERT INTO `bill_detail` VALUES (83, 150000, 3, 38, 19, '2017-12-05 02:11:06', '2017-12-05 02:11:06');
INSERT INTO `bill_detail` VALUES (84, 350000, 5, 38, 15, '2017-12-05 02:11:06', '2017-12-05 02:11:06');
INSERT INTO `bill_detail` VALUES (85, 200000, 1, 38, 58, '2017-12-05 02:11:06', '2017-12-05 02:11:06');
INSERT INTO `bill_detail` VALUES (86, 150000, 1, 38, 16, '2017-12-05 02:11:06', '2017-12-05 02:11:06');
INSERT INTO `bill_detail` VALUES (87, 120000, 50, 38, 46, '2017-12-05 02:11:06', '2017-12-05 02:11:06');
INSERT INTO `bill_detail` VALUES (88, 120000, 2, 39, 43, '2017-12-05 02:13:17', '2017-12-05 02:13:17');
INSERT INTO `bill_detail` VALUES (89, 280000, 1, 39, 33, '2017-12-05 02:13:17', '2017-12-05 02:13:17');
INSERT INTO `bill_detail` VALUES (90, 150000, 2, 39, 95, '2017-12-05 02:13:17', '2017-12-05 02:13:17');
INSERT INTO `bill_detail` VALUES (91, 160000, 10, 39, 7, '2017-12-05 02:13:17', '2017-12-05 02:13:17');
INSERT INTO `bill_detail` VALUES (92, 150000, 3, 39, 19, '2017-12-05 02:13:17', '2017-12-05 02:13:17');
INSERT INTO `bill_detail` VALUES (93, 350000, 5, 39, 15, '2017-12-05 02:13:17', '2017-12-05 02:13:17');
INSERT INTO `bill_detail` VALUES (94, 200000, 1, 39, 58, '2017-12-05 02:13:17', '2017-12-05 02:13:17');
INSERT INTO `bill_detail` VALUES (95, 150000, 1, 39, 16, '2017-12-05 02:13:17', '2017-12-05 02:13:17');
INSERT INTO `bill_detail` VALUES (96, 120000, 50, 39, 46, '2017-12-05 02:13:17', '2017-12-05 02:13:17');
INSERT INTO `bill_detail` VALUES (97, 120000, 2, 40, 43, '2017-12-05 02:13:30', '2017-12-05 02:13:30');
INSERT INTO `bill_detail` VALUES (98, 280000, 1, 40, 33, '2017-12-05 02:13:30', '2017-12-05 02:13:30');
INSERT INTO `bill_detail` VALUES (99, 150000, 2, 40, 95, '2017-12-05 02:13:30', '2017-12-05 02:13:30');
INSERT INTO `bill_detail` VALUES (100, 160000, 10, 40, 7, '2017-12-05 02:13:30', '2017-12-05 02:13:30');
INSERT INTO `bill_detail` VALUES (101, 150000, 3, 40, 19, '2017-12-05 02:13:30', '2017-12-05 02:13:30');
INSERT INTO `bill_detail` VALUES (102, 350000, 5, 40, 15, '2017-12-05 02:13:30', '2017-12-05 02:13:30');
INSERT INTO `bill_detail` VALUES (103, 200000, 1, 40, 58, '2017-12-05 02:13:30', '2017-12-05 02:13:30');
INSERT INTO `bill_detail` VALUES (104, 150000, 1, 40, 16, '2017-12-05 02:13:30', '2017-12-05 02:13:30');
INSERT INTO `bill_detail` VALUES (105, 120000, 50, 40, 46, '2017-12-05 02:13:30', '2017-12-05 02:13:30');
INSERT INTO `bill_detail` VALUES (106, 120000, 2, 41, 43, '2017-12-05 02:15:34', '2017-12-05 02:15:34');
INSERT INTO `bill_detail` VALUES (107, 280000, 1, 41, 33, '2017-12-05 02:15:34', '2017-12-05 02:15:34');
INSERT INTO `bill_detail` VALUES (108, 150000, 2, 41, 95, '2017-12-05 02:15:34', '2017-12-05 02:15:34');
INSERT INTO `bill_detail` VALUES (109, 160000, 10, 41, 7, '2017-12-05 02:15:34', '2017-12-05 02:15:34');
INSERT INTO `bill_detail` VALUES (110, 150000, 3, 41, 19, '2017-12-05 02:15:34', '2017-12-05 02:15:34');
INSERT INTO `bill_detail` VALUES (111, 350000, 5, 41, 15, '2017-12-05 02:15:34', '2017-12-05 02:15:34');
INSERT INTO `bill_detail` VALUES (112, 200000, 1, 41, 58, '2017-12-05 02:15:34', '2017-12-05 02:15:34');
INSERT INTO `bill_detail` VALUES (113, 150000, 1, 41, 16, '2017-12-05 02:15:34', '2017-12-05 02:15:34');
INSERT INTO `bill_detail` VALUES (114, 120000, 50, 41, 46, '2017-12-05 02:15:34', '2017-12-05 02:15:34');
INSERT INTO `bill_detail` VALUES (115, 280000, 1, 42, 33, '2017-12-05 21:05:22', '2017-12-05 21:05:22');
INSERT INTO `bill_detail` VALUES (116, 150000, 2, 42, 95, '2017-12-05 21:05:22', '2017-12-05 21:05:22');
INSERT INTO `bill_detail` VALUES (117, 120000, 1, 42, 43, '2017-12-05 21:05:22', '2017-12-05 21:05:22');
INSERT INTO `bill_detail` VALUES (118, 280000, 1, 43, 33, '2017-12-05 21:07:53', '2017-12-05 21:07:53');
INSERT INTO `bill_detail` VALUES (119, 150000, 2, 43, 95, '2017-12-05 21:07:53', '2017-12-05 21:07:53');
INSERT INTO `bill_detail` VALUES (120, 120000, 1, 43, 43, '2017-12-05 21:07:53', '2017-12-05 21:07:53');
INSERT INTO `bill_detail` VALUES (121, 280000, 1, 44, 33, '2017-12-05 21:09:40', '2017-12-05 21:09:40');
INSERT INTO `bill_detail` VALUES (122, 150000, 2, 44, 95, '2017-12-05 21:09:40', '2017-12-05 21:09:40');
INSERT INTO `bill_detail` VALUES (123, 120000, 1, 44, 43, '2017-12-05 21:09:40', '2017-12-05 21:09:40');
INSERT INTO `bill_detail` VALUES (124, 280000, 1, 45, 33, '2017-12-05 21:09:47', '2017-12-05 21:09:47');
INSERT INTO `bill_detail` VALUES (125, 150000, 2, 45, 95, '2017-12-05 21:09:47', '2017-12-05 21:09:47');
INSERT INTO `bill_detail` VALUES (126, 120000, 1, 45, 43, '2017-12-05 21:09:47', '2017-12-05 21:09:47');
INSERT INTO `bill_detail` VALUES (127, 280000, 1, 46, 33, '2017-12-05 21:12:31', '2017-12-05 21:12:31');
INSERT INTO `bill_detail` VALUES (128, 150000, 2, 46, 95, '2017-12-05 21:12:31', '2017-12-05 21:12:31');
INSERT INTO `bill_detail` VALUES (129, 120000, 1, 46, 43, '2017-12-05 21:12:31', '2017-12-05 21:12:31');
INSERT INTO `bill_detail` VALUES (130, 280000, 1, 47, 33, '2017-12-05 21:20:15', '2017-12-05 21:20:15');
INSERT INTO `bill_detail` VALUES (131, 150000, 2, 47, 95, '2017-12-05 21:20:15', '2017-12-05 21:20:15');
INSERT INTO `bill_detail` VALUES (132, 120000, 1, 47, 43, '2017-12-05 21:20:15', '2017-12-05 21:20:15');
INSERT INTO `bill_detail` VALUES (133, 280000, 1, 48, 33, '2017-12-05 21:27:34', '2017-12-05 21:27:34');
INSERT INTO `bill_detail` VALUES (135, 120000, 1, 48, 43, '2017-12-05 21:27:34', '2017-12-05 21:27:34');
INSERT INTO `bill_detail` VALUES (136, 280000, 1, 49, 33, '2017-12-05 21:28:45', '2017-12-05 21:28:45');
INSERT INTO `bill_detail` VALUES (138, 160000, 2, 49, 7, '2017-12-05 21:28:45', '2017-12-05 21:28:45');
INSERT INTO `bill_detail` VALUES (139, 120000, 1, 49, 43, '2017-12-05 21:28:45', '2017-12-05 21:28:45');
INSERT INTO `bill_detail` VALUES (140, 280000, 1, 50, 33, '2017-12-05 21:29:10', '2017-12-05 21:29:10');
INSERT INTO `bill_detail` VALUES (141, 150000, 1, 50, 95, '2017-12-05 21:29:10', '2017-12-05 21:29:10');
INSERT INTO `bill_detail` VALUES (142, 160000, 2, 50, 7, '2017-12-05 21:29:10', '2017-12-05 21:29:10');
INSERT INTO `bill_detail` VALUES (143, 120000, 1, 50, 43, '2017-12-05 21:29:10', '2017-12-05 21:29:10');
INSERT INTO `bill_detail` VALUES (144, 280000, 1, 51, 33, '2017-12-05 21:43:16', '2017-12-05 21:43:16');
INSERT INTO `bill_detail` VALUES (145, 150000, 1, 51, 95, '2017-12-05 21:43:16', '2017-12-05 21:43:16');
INSERT INTO `bill_detail` VALUES (146, 160000, 2, 51, 7, '2017-12-05 21:43:16', '2017-12-05 21:43:16');
INSERT INTO `bill_detail` VALUES (147, 120000, 1, 51, 43, '2017-12-05 21:43:16', '2017-12-05 21:43:16');
INSERT INTO `bill_detail` VALUES (148, 280000, 1, 52, 33, '2017-12-05 21:52:59', '2017-12-05 21:52:59');
INSERT INTO `bill_detail` VALUES (149, 150000, 1, 52, 95, '2017-12-05 21:52:59', '2017-12-05 21:52:59');
INSERT INTO `bill_detail` VALUES (150, 160000, 2, 52, 7, '2017-12-05 21:52:59', '2017-12-05 21:52:59');
INSERT INTO `bill_detail` VALUES (151, 120000, 1, 52, 43, '2017-12-05 21:52:59', '2017-12-05 21:52:59');
INSERT INTO `bill_detail` VALUES (152, 120000, 1, 53, 43, '2017-12-05 21:58:14', '2017-12-05 21:58:14');
INSERT INTO `bill_detail` VALUES (153, 280000, 1, 53, 33, '2017-12-05 21:58:14', '2017-12-05 21:58:14');
INSERT INTO `bill_detail` VALUES (154, 150000, 2, 53, 95, '2017-12-05 21:58:14', '2017-12-05 21:58:14');
INSERT INTO `bill_detail` VALUES (155, 150000, 1, 54, 95, '2017-12-06 09:40:42', '2017-12-06 09:40:42');
INSERT INTO `bill_detail` VALUES (159, 150000, 4, 56, 95, '2017-12-08 18:13:58', '2017-12-08 18:13:58');
INSERT INTO `bill_detail` VALUES (160, 120000, 11, 57, 43, '2017-12-08 22:00:26', '2017-12-08 22:00:26');
INSERT INTO `bill_detail` VALUES (161, 160000, 54, 57, 7, '2017-12-08 22:00:26', '2017-12-08 22:00:26');
INSERT INTO `bill_detail` VALUES (162, 5000000, 5, 57, 116, '2017-12-08 22:00:26', '2017-12-08 22:00:26');

-- ----------------------------
-- Table structure for bills
-- ----------------------------
DROP TABLE IF EXISTS `bills`;
CREATE TABLE `bills`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date_order` date NOT NULL,
  `total` double NOT NULL,
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '0',
  `note` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `recipient` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `confirm` tinyint(4) NOT NULL DEFAULT 0,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted` tinyint(4) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `bills_id_user_foreign`(`id_user`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 58 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bills
-- ----------------------------
INSERT INTO `bills` VALUES (1, '2017-11-22', 605, NULL, 'fdsdsfds', 'duc', '', 'c3/26 Pham Hung Binh Chanh', '1692039011', 1, 1, '2017-11-22 02:01:51', '2017-11-22 02:01:51', 0);
INSERT INTO `bills` VALUES (37, '2017-11-22', 605, NULL, 'fdsdsfds', 'duc', '', 'c3/26 Pham Hung Binh Chanh', '1692039011', 1, 1, '2017-11-22 02:01:51', '2017-11-22 02:01:51', 0);
INSERT INTO `bills` VALUES (2, '2017-11-22', 1, NULL, 'f sfdfg sdfg sdfg dsfgsdf', 'thai duc', '', '34 ret ret rewt ew', '34534534', 1, 1, '2017-11-22 02:03:03', '2017-11-22 02:03:03', 0);
INSERT INTO `bills` VALUES (3, '2017-11-24', 1, NULL, 'rewrwer', 'Hân', '', 'Phường 2', '1692039011', 1, 1, '2017-11-24 01:50:50', '2017-12-08 13:20:52', 0);
INSERT INTO `bills` VALUES (4, '2017-11-25', 3, NULL, 'sdsdfsdfdsf', 'Thaisdf dsf sd', '', 'c3/26 Pham Hung Binh Chanh', '978533952', 0, 1, '2017-11-25 13:47:08', '2017-12-08 13:21:05', 1);
INSERT INTO `bills` VALUES (7, '2017-11-25', 1, NULL, 'asdadsadasd as', 'Hân', '', 'Phường 2', '1692039011', 1, 1, '2017-11-25 14:04:54', '2017-11-25 14:04:54', 0);
INSERT INTO `bills` VALUES (9, '2017-11-25', 2, NULL, 'werqwer qwer qwer qwer', 'rédfds', '', 'weewrrwer qwer', '453454354543', 1, 1, '2017-11-25 14:11:28', '2017-12-05 00:07:21', 0);
INSERT INTO `bills` VALUES (10, '2017-11-25', 2, NULL, 'werqwer qwer qwer qwer', 'rédfds', '', 'weewrrwer qwer', '453454354543', 1, 1, '2017-11-25 14:11:37', '2017-11-25 14:11:37', 0);
INSERT INTO `bills` VALUES (11, '2017-11-25', 2, NULL, 'reter tert re', 'Hân', '', 'Phường 2', '1692039011', 1, 1, '2017-11-25 14:25:00', '2017-12-06 18:14:39', 0);
INSERT INTO `bills` VALUES (12, '2017-11-25', 2, NULL, 'reter tert re', 'Hân', '', 'Phường 2', '1692039011', 1, 1, '2017-11-25 14:25:41', '2017-11-25 14:25:41', 0);
INSERT INTO `bills` VALUES (55, '2017-12-08', 696700, '0', NULL, 'Thai Huynh Duc', 'huynhjduc2481@gmail.com', '997 Nguyễn Kiệmm', '09785339522', 1, 4, '2017-12-08 15:49:46', '2017-12-08 22:32:23', 0);
INSERT INTO `bills` VALUES (14, '2017-11-25', 0, NULL, 'reter tert re', 'Hân', '', 'Phường 2', '1692039011', 1, 1, '2017-11-25 14:27:00', '2017-11-25 14:27:00', 0);
INSERT INTO `bills` VALUES (15, '2017-11-25', 0, NULL, 'reter tert re', 'Hân', '', 'Phường 2', '1692039011', 1, 4, '2017-11-25 14:28:27', '2017-11-25 14:28:27', 0);
INSERT INTO `bills` VALUES (16, '2017-11-25', 2, NULL, 'tre séd fgsdfg sdfg sdfg', 'rédfds', '', '194 Cao LỗPhường 4, Quận 8', '3434343343', 1, 1, '2017-11-25 14:56:04', '2017-11-25 14:56:04', 0);
INSERT INTO `bills` VALUES (17, '2017-11-25', 2, NULL, 'tre séd fgsdfg sdfg sdfg', 'rédfds', '', '194 Cao LỗPhường 4, Quận 8', '3434343343', 1, 4, '2017-11-25 14:56:34', '2017-11-25 14:56:34', 0);
INSERT INTO `bills` VALUES (18, '2017-11-25', 326, NULL, 'sdasdasdas asdasd', 'duc', '', '190 cao lo', '978533952', 1, 1, '2017-11-25 18:44:10', '2017-11-25 18:44:10', 0);
INSERT INTO `bills` VALUES (19, '2017-11-25', 3, NULL, 'asdasdas ad asdas', 'Duc', '', '56 Dao Duy Tu', '978533952', 1, 1, '2017-11-25 19:16:35', '2017-11-25 19:16:35', 0);
INSERT INTO `bills` VALUES (20, '2017-11-25', 3, NULL, 'asdasdas ad asdas', 'Duc', '', '56 Dao Duy Tu', '978533952', 1, 4, '2017-11-25 19:18:35', '2017-11-25 19:18:35', 0);
INSERT INTO `bills` VALUES (21, '2017-11-25', 847, NULL, 'ff dsf dà dà ádfads f', 'thái đức', '', '194 434 34 234 cao lỗ', '342342342334', 1, 1, '2017-11-25 19:27:10', '2017-11-25 19:27:10', 0);
INSERT INTO `bills` VALUES (22, '2017-11-25', 4, NULL, 'asdasdas dasd', 'Hân', '', 'Phường 2', '1692039011', 1, 1, '2017-11-25 20:39:26', '2017-11-25 20:39:26', 0);
INSERT INTO `bills` VALUES (23, '2017-11-25', 0, NULL, 'asdasdas dasd', 'Hân', '', 'Phường 2', '1692039011', 1, 4, '2017-11-25 20:39:45', '2017-11-25 20:39:45', 0);
INSERT INTO `bills` VALUES (24, '2017-11-25', 145, NULL, 'wer qwer qwe', 'rw erew r', '', '56 Dao Duy Tu', '978533952', 1, 1, '2017-11-25 20:43:51', '2017-11-25 20:43:51', 0);
INSERT INTO `bills` VALUES (25, '2017-11-25', 145, NULL, 'edewr qwer', '3123213', '', '213213', '2342343243', 1, 4, '2017-11-25 20:45:43', '2017-11-25 20:45:43', 0);
INSERT INTO `bills` VALUES (26, '2017-11-25', 2, NULL, '321321e df ds', 'Duc', '', '56 Dao Duy Tu', '978533952', 1, 1, '2017-11-25 21:54:34', '2017-11-25 21:54:34', 0);
INSERT INTO `bills` VALUES (27, '2017-11-25', 326, NULL, '234234 df sadf', 'Thai', '', 'c3/26 Pham Hung Binh Chanh', '978533952', 0, 4, '2017-11-25 21:56:20', '2017-12-08 13:15:15', 1);
INSERT INTO `bills` VALUES (28, '2017-11-25', 3, NULL, 'gfh fh fdghdf hgfh', 'Thai', '', 'c3/26 Pham Hung Binh Chanh', '978533952', 0, 1, '2017-11-25 21:57:23', '2017-11-25 21:57:23', 0);
INSERT INTO `bills` VALUES (29, '2017-11-25', 1, NULL, 'fgds gdfsg dfsg dsfg dsfgsdf gsfd', 'duc', '', '195 cao adasd adasd asd', '352345435', 1, 1, '2017-11-25 22:07:11', '2017-12-08 13:14:18', 1);
INSERT INTO `bills` VALUES (30, '2017-11-26', 3, NULL, 'fs sdf dsf', 'Thai', '', 'c3/26 Pham Hung Binh Chanh', '978533952', 0, 4, '2017-11-26 12:11:14', '2017-11-26 12:11:14', 0);
INSERT INTO `bills` VALUES (31, '2017-11-27', 363, NULL, '=))', 'Thi Hue Nhan Thai', '', 'o dau cung dc', '0982676864', 0, 4, '2017-11-27 00:59:27', '2017-11-27 00:59:27', 0);
INSERT INTO `bills` VALUES (32, '2017-11-27', 1, NULL, NULL, 'Thi Hue Nhan Thai', '', 'o dau cung dc', '0982676864', 1, 4, '2017-11-27 01:10:51', '2017-12-08 22:38:08', 0);
INSERT INTO `bills` VALUES (33, '2017-11-27', 7, NULL, NULL, 'Hân', '', 'Phường 2', '1692039011', 0, 1, '2017-11-27 01:55:10', '2017-11-27 01:55:10', 0);
INSERT INTO `bills` VALUES (34, '2017-11-28', 2, NULL, 'cvxcv v xcvxcv xcvxcv', 'Thai Huynh Duccc', '', '997 Nguyễn Kiệmm', '09785339511', 0, 4, '2017-11-28 01:34:38', '2017-11-28 01:34:38', 0);
INSERT INTO `bills` VALUES (35, '2017-11-28', 13242343, NULL, 'dsf dsfdsf df dsf sdfd', 'Thai Huynh Duccc', '', '997 Nguyễn Kiệmm', '09785339511', 0, 4, '2017-11-28 01:35:41', '2017-11-28 01:35:41', 0);
INSERT INTO `bills` VALUES (36, '2017-11-28', 1180000, NULL, 'han mua hoa', 'A B C D E F', '', 'Phường 2', '01692039011', 0, 2, '2017-11-28 01:37:51', '2017-11-28 01:37:51', 0);
INSERT INTO `bills` VALUES (38, '2017-12-05', 10970000, '0', NULL, 'thái đức', 'huenhandg@gmail.com', 'o dau cung dc', '982676864', 0, 7, '2017-12-05 02:11:06', '2017-12-05 02:11:06', 0);
INSERT INTO `bills` VALUES (39, '2017-12-05', 10970000, '0', NULL, 'thái đức', 'huenhandg@gmail.com', 'o dau cung dc', '982676864', 0, 7, '2017-12-05 02:13:17', '2017-12-05 02:13:17', 0);
INSERT INTO `bills` VALUES (40, '2017-12-05', 10970000, '0', NULL, 'thái đức', 'huenhandg@gmail.com', 'o dau cung dc', '982676864', 0, 7, '2017-12-05 02:13:30', '2017-12-05 02:13:30', 0);
INSERT INTO `bills` VALUES (41, '2017-12-05', 10970000, '0', NULL, 'Hân', 'huynhjduc248@gmail.com', 'o dau cung dc', '978533952', 0, 7, '2017-12-05 02:15:34', '2017-12-05 02:15:34', 0);
INSERT INTO `bills` VALUES (42, '2017-12-05', 700000, '0', 'fdghdgfh dfghdgfh dgf', 'Duc', 'huenhandg@gmail.com', '101 lô B chung cu Ngo Quyen p9 q5', '982676864', 0, 7, '2017-12-05 21:05:22', '2017-12-05 21:05:22', 0);
INSERT INTO `bills` VALUES (43, '2017-12-05', 700000, '0', 'fdghdgfh dfghdgfh dgf', 'Duc', 'huenhandg@gmail.com', '101 lô B chung cu Ngo Quyen p9 q5', '982676864', 0, 7, '2017-12-05 21:07:53', '2017-12-05 21:07:53', 0);
INSERT INTO `bills` VALUES (44, '2017-12-05', 700000, '0', NULL, 'Duc', 'huenhandg@gmail.com', '101 lô B chung cu Ngo Quyen p9 q5', '982676864', 0, 7, '2017-12-05 21:09:40', '2017-12-05 21:09:40', 0);
INSERT INTO `bills` VALUES (45, '2017-12-05', 700000, '0', NULL, 'Duc', 'huenhandg@gmail.com', '101 lô B chung cu Ngo Quyen p9 q5', '982676864', 0, 7, '2017-12-05 21:09:47', '2017-12-05 21:09:47', 0);
INSERT INTO `bills` VALUES (46, '2017-12-05', 700000, '0', NULL, 'Duc', 'huenhandg@gmail.com', '101 lô B chung cu Ngo Quyen p9 q5', '982676864', 0, 7, '2017-12-05 21:12:31', '2017-12-05 21:12:31', 0);
INSERT INTO `bills` VALUES (47, '2017-12-05', 700000, '0', NULL, 'Duc', 'huenhandg@gmail.com', '101 lô B chung cu Ngo Quyen p9 q5', '982676864', 0, 7, '2017-12-05 21:20:15', '2017-12-05 21:20:15', 0);
INSERT INTO `bills` VALUES (48, '2017-12-05', 700000, '0', NULL, 'Duc', 'huenhandg@gmail.com', '101 lô B chung cu Ngo Quyen p9 q5', '982676864', 0, 7, '2017-12-05 21:27:34', '2017-12-08 22:40:59', 1);
INSERT INTO `bills` VALUES (49, '2017-12-05', 870000, '0', NULL, 'anonymous', 'huenhandg@gmail.com', '101 lô B chung cu Ngo Quyen p9 q5', '982676864', 1, 13, '2017-12-05 21:28:45', '2017-12-08 22:40:31', 0);
INSERT INTO `bills` VALUES (50, '2017-12-05', 870000, '0', NULL, 'anonymous', 'huenhandg@gmail.com', '101 lô B chung cu Ngo Quyen p9 q5', '982676864', 0, 13, '2017-12-05 21:29:10', '2017-12-05 21:29:10', 0);
INSERT INTO `bills` VALUES (51, '2017-12-05', 870000, '0', NULL, 'anonymous', 'huenhandg@gmail.com', '101 lô B chung cu Ngo Quyen p9 q5', '982676864', 0, 13, '2017-12-05 21:43:16', '2017-12-05 21:43:16', 0);
INSERT INTO `bills` VALUES (52, '2017-12-05', 870000, '0', NULL, 'anonymous', 'huenhandg@gmail.com', '101 lô B chung cu Ngo Quyen p9 q5', '982676864', 0, 13, '2017-12-05 21:52:59', '2017-12-05 21:52:59', 0);
INSERT INTO `bills` VALUES (53, '2017-12-05', 700000, '0', NULL, 'Hân', 'huenhandg@gmail.com', 'c3/26 Pham Hung Binh Chanh', '978533952', 0, 7, '2017-12-05 21:58:14', '2017-12-05 21:58:14', 0);
INSERT INTO `bills` VALUES (54, '2017-12-06', 150000, '0', NULL, 'Duc', 'ibghanvip@gmail.com', '101 lô B chung cu Ngo Quyen p9 q5', '978533952', 0, 7, '2017-12-06 09:40:42', '2017-12-06 09:40:42', 0);
INSERT INTO `bills` VALUES (56, '2017-12-08', 600000, '0', NULL, 'Thai', 'huynhjduc248@gmail.com', 'c3/26 Pham Hung Binh Chanh', '978533952', 1, 14, '2017-12-08 18:13:58', '2017-12-08 18:15:34', 0);
INSERT INTO `bills` VALUES (57, '2017-12-08', 34960000, '0', NULL, 'Thai Huynh Duc', 'huynhjduc2481@gmail.com', '997 Nguyễn Kiệmm', '09785339522', 0, 4, '2017-12-08 22:00:26', '2017-12-08 22:02:00', 1);

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `address` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `map` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES (1, '194 Cao LỗPhường 4, Quận 8', 'hoasaigonn@gmail.com', '545345435454', 'http://hoasaigon.tk', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3106.2788753474715!2d-77.05845558433298!3d38.87186095605334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x144b3a40ea25bf8c!2sDefense+Legal+Services+Agency!5e0!3m2!1svi!2s!4v1511517957120\" width=\"680\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', NULL, '2017-12-08 01:37:36');

-- ----------------------------
-- Table structure for contactus
-- ----------------------------
DROP TABLE IF EXISTS `contactus`;
CREATE TABLE `contactus`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `confirm` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 121 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contactus
-- ----------------------------
INSERT INTO `contactus` VALUES (1, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-11-25 12:40:17');
INSERT INTO `contactus` VALUES (2, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 1, '2017-11-24 19:38:44', '2017-11-25 02:23:01');
INSERT INTO `contactus` VALUES (3, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-11-25 12:49:03');
INSERT INTO `contactus` VALUES (4, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 1, '2017-11-24 19:38:44', '2017-11-25 12:22:26');
INSERT INTO `contactus` VALUES (5, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-11-30 00:42:26');
INSERT INTO `contactus` VALUES (6, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 1, '2017-11-24 19:38:44', '2017-11-30 01:06:29');
INSERT INTO `contactus` VALUES (7, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (8, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 1, '2017-11-24 19:38:44', '2017-12-08 01:39:18');
INSERT INTO `contactus` VALUES (9, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-12-05 21:53:25');
INSERT INTO `contactus` VALUES (10, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 1, '2017-11-24 19:38:44', '2017-12-08 11:14:04');
INSERT INTO `contactus` VALUES (11, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-12-08 10:38:58');
INSERT INTO `contactus` VALUES (12, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 1, '2017-11-24 19:38:44', '2017-12-08 10:02:15');
INSERT INTO `contactus` VALUES (13, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-12-08 11:08:27');
INSERT INTO `contactus` VALUES (14, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 1, '2017-11-24 19:38:44', '2017-12-08 12:15:13');
INSERT INTO `contactus` VALUES (15, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-12-08 10:41:50');
INSERT INTO `contactus` VALUES (16, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (17, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-12-08 11:10:47');
INSERT INTO `contactus` VALUES (18, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 1, '2017-11-24 19:38:44', '2017-12-08 10:35:52');
INSERT INTO `contactus` VALUES (19, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-12-08 12:28:33');
INSERT INTO `contactus` VALUES (20, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (21, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (22, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (23, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (24, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (25, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (26, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (27, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (28, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (29, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (30, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (31, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (32, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (33, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (34, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (35, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (36, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (37, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (38, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (39, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (40, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (41, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (42, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (43, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (44, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (45, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (46, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (47, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (48, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (49, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (50, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (51, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (52, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (53, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (54, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (55, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (56, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (57, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (58, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (59, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (60, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (61, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (62, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (63, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (64, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (65, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (66, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (67, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (68, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (69, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (70, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (71, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (72, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (73, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (74, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (75, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (76, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (77, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (78, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (79, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (80, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (81, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (82, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (83, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (84, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (85, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (86, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (87, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (88, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (89, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (90, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (91, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (92, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (93, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (94, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 1, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (95, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (96, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 1, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (97, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (98, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (99, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (100, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 1, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (101, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (102, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (103, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 1, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (104, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (105, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (106, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (107, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (108, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (109, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (110, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (111, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (112, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (113, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (114, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (115, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (116, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (117, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'jQueryUI 1.8.14 Autocomplete', 'fdfa sdfsd fsd as ads', 0, '2017-11-24 19:26:14', '2017-11-24 19:26:14');
INSERT INTO `contactus` VALUES (118, 'Trần Ngọc Gia Hân', '1692039011', 'ibghanvip@gmail.com', 'Có một trăm khách gửi tin nhắn', 'Sẽ hiển thị ntn', 0, '2017-11-24 19:38:44', '2017-11-24 19:38:44');
INSERT INTO `contactus` VALUES (119, 'thai duc', '978533952', 'huynhjduc248@gmail.com', 'test 05 12 2017', 'test', 1, '2017-12-05 02:18:39', '2017-12-05 02:19:16');
INSERT INTO `contactus` VALUES (120, 'Thi Hue Nhan Thai', '982676864', 'huenhandg@gmail.com', 'dgfh', 'dfghdgfhdf', 0, '2017-12-08 14:57:14', '2017-12-08 14:57:14');

-- ----------------------------
-- Table structure for footer
-- ----------------------------
DROP TABLE IF EXISTS `footer`;
CREATE TABLE `footer`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `account` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `inform` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `source` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `titleHeader` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of footer
-- ----------------------------
INSERT INTO `footer` VALUES (1, 'Trần Ngọc Gia Hân\r\n+Thái Huỳnh Đức', 'D14-TH02\r\n+D14-TH01', 'Facebook.com\r\n+Google.com', '<p>Đ&acirc;y l&agrave; website b&aacute;n hoa</p>', 'Tôi yêu hoa đâu cần hoa đẹp, mà chỉ cần hoa tỏa ngát hương thơm.\r\nTôi yêu người đâu cần người đẹp, mà chỉ cần người thật sự yêu tôi.', NULL, '2017-12-03 02:49:43');

-- ----------------------------
-- Table structure for introduce
-- ----------------------------
DROP TABLE IF EXISTS `introduce`;
CREATE TABLE `introduce`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of introduce
-- ----------------------------
INSERT INTO `introduce` VALUES (13, 'gioi thieu', '<p>noi dung gio thieu</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://shopbanhoa/photos/4/vforum.vn___funny-wallpapers-shared-by-twalls-(12).jpg\" style=\"height:375px; width:600px\" />g&nbsp;</p>\r\n\r\n<p>sdfg</p>\r\n\r\n<p>&nbsp;sdf</p>\r\n\r\n<p>g dfs</p>\r\n\r\n<p>gsdfg dfsg dsfgsdfh sgh sgf<img alt=\"\" src=\"http://shopbanhoa/photos/4/vforum.vn___funny-wallpapers-shared-by-twalls-(6).jpg\" style=\"height:313px; width:500px\" /></p>', NULL, '2017-12-08 19:56:27');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2017_11_08_191746_create_TypeProduct_table', 1);
INSERT INTO `migrations` VALUES (4, '2017_11_08_192317_create_Products_create', 1);
INSERT INTO `migrations` VALUES (5, '2017_11_12_001328_create_Slides_table', 1);
INSERT INTO `migrations` VALUES (6, '2017_11_12_001517_create_News_table', 1);
INSERT INTO `migrations` VALUES (7, '2017_11_12_001647_create_Bill_Detail_table', 1);
INSERT INTO `migrations` VALUES (8, '2017_11_12_001704_create_Bills_table', 1);
INSERT INTO `migrations` VALUES (9, '2017_11_12_012234_create_product_images_table', 1);
INSERT INTO `migrations` VALUES (10, '2017_11_18_212223_create_Unit_table', 1);
INSERT INTO `migrations` VALUES (11, '2017_11_19_180527_create_contacts_table', 1);
INSERT INTO `migrations` VALUES (12, '2017_11_21_232806_create_ContactUs_table', 1);
INSERT INTO `migrations` VALUES (13, '2017_12_04_232025_create_introduce_table', 1);
INSERT INTO `migrations` VALUES (14, '2017_12_04_232142_create_Footer_table', 1);

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, 'Mùa trung thu năm nay, Hỷ Lâm Môn muốn gửi đến quý khách hàng sản phẩm mới xuất hiện lần đầu tiên tại Việt nam \"Bánh trung thu Bơ Sữa HongKong\".', '<p><img alt=\"\" src=\"http://shopbanhoa/photos/4/vforum.vn___funny-wallpapers-shared-by-twalls-(24).jpg\" style=\"height:1620px; width:2880px\" />Những &yacute; tưởng dưới đ&acirc;y sẽ gi&uacute;p bạn sắp xếp tủ quần &aacute;o trong ph&ograve;ng ngủ chật hẹp của m&igrave;nh một c&aacute;ch dễ d&agrave;ng v&agrave; hiệu quả nhất.</p>\r\n\r\n<p>gdfsgsdfg sdfgds fgsd gsdfg</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://shopbanhoa/photos/4/vforum.vn___funny-wallpapers-shared-by-twalls-(13).jpg\" style=\"height:284px; width:454px\" /></p>\r\n\r\n<p>\\<img alt=\"\" src=\"http://shopbanhoa/photos/4/aaaaaaaaaaaaaaaaaaaaa.PNG\" style=\"height:398px; width:648px\" /><img alt=\"\" src=\"http://shopbanhoa/photos/4/vforum.vn___funny-wallpapers-shared-by-twalls-(18).jpg\" style=\"height:313px; width:500px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>H&acirc;n cu te</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&yacute; a l&agrave; v n&egrave;</p>\r\n\r\n<p><img alt=\"\" src=\"http://shopbanhoa/photos/4/vforum.vn___funny-wallpapers-shared-by-twalls-(5).jpg\" style=\"height:506px; width:900px\" /></p>', 'xH8afc7C_vforum.vn___funny-wallpapers-shared-by-twalls-(47).jpg', '2017-11-06 00:11:50', '2017-12-08 18:55:06');
INSERT INTO `news` VALUES (2, 'Tư vấn cải tạo phòng ngủ nhỏ sao cho thoải mái và thoáng mát', 'Chúng tôi sẽ tư vấn cải tạo và bố trí nội thất để giúp phòng ngủ của chàng trai độc thân thật thoải mái, thoáng mát và sáng sủa nhất. ', '12.jpg', '2017-11-06 00:12:06', '2017-11-06 00:13:37');
INSERT INTO `news` VALUES (4, 'Hướng dẫn sử dụng bảo quản đồ gỗ, nội thất.', 'Ngày nay, xu hướng chọn vật dụng làm bằng gỗ để trang trí, sử dụng trong văn phòng, gia đình được nhiều người ưa chuộng và quan tâm. Trên thị trường có nhiều sản phẩm mẫu ', '3.jpg', '2017-11-06 00:13:33', '2017-11-06 00:13:37');
INSERT INTO `news` VALUES (6, 'test 1', '<p>gdfs gdfg dfsg sdfg &#39;</p>\r\n\r\n<p><img alt=\"\" src=\"http://shopbanhoa/photos/4/aaaaaaaaaaaaaaaaaaaaa.PNG\" style=\"height:398px; width:648px\" /></p>\r\n\r\n<p>gsh</p>\r\n\r\n<p>s gf</p>\r\n\r\n<p>hfsg&nbsp;</p>\r\n\r\n<p>hgf</p>\r\n\r\n<p>h gf</p>\r\n\r\n<p>hhj&nbsp;</p>\r\n\r\n<p>ghjfgh</p>', 'hudh4NMI_vforum.vn___funny-wallpapers-shared-by-twalls-(4).jpg', '2017-12-05 22:38:40', '2017-12-05 22:38:40');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('huynhjduc2481@gmail.com', '$2y$10$KTUj7wCR8nG7st8gFt9C8.yt/uTlL.WXpRU67nHNF6Fi.sq.n8BaG', '2017-11-26 20:57:14');

-- ----------------------------
-- Table structure for product_images
-- ----------------------------
DROP TABLE IF EXISTS `product_images`;
CREATE TABLE `product_images`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `product_images_id_product_foreign`(`id_product`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_images
-- ----------------------------
INSERT INTO `product_images` VALUES (2, 'G0NNUfs4_aaaaaaaaaaaaaaaaaaaaa.PNG', 2, '2017-11-29 22:32:18', '2017-11-29 22:32:18');
INSERT INTO `product_images` VALUES (3, 'I0mWZEYW_aaaaaaaaaaaaaaaaaaaaa.PNG', 2, '2017-11-29 22:32:40', '2017-11-29 22:32:40');
INSERT INTO `product_images` VALUES (4, 'NQJnDTzm_Capture.PNG', 4, '2017-12-08 12:26:39', '2017-12-08 12:26:39');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `unit_price` double NOT NULL DEFAULT 0,
  `promotion_price` int(11) NOT NULL DEFAULT 0,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `unit` int(10) UNSIGNED NULL DEFAULT NULL,
  `new` tinyint(4) NOT NULL DEFAULT 1,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `view` int(11) NOT NULL DEFAULT 0,
  `id_type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `products_unit_foreign`(`unit`) USING BTREE,
  INDEX `products_id_type_foreign`(`id_type`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 117 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (95, 'Hoa cưới 1', 'Bánh crepe sầu riêng nhà làm', 150000, 4, 'hc0.jpg', 1, 1, 0, 123, 4, '2016-10-25 20:00:16', '2017-12-08 19:58:40');
INSERT INTO `products` VALUES (2, 'Hoa cưới 2', NULL, 180000, 20, 'hc8.jpg', 2, 1, 0, 24, 9, '2016-10-25 20:00:16', '2017-12-08 19:13:47');
INSERT INTO `products` VALUES (96, 'Hoa cưới 3', '', 150000, 10, 'hc1.jpg', 1, 0, 0, 67405, 4, '2016-10-25 20:00:16', '2017-12-08 21:53:37');
INSERT INTO `products` VALUES (4, 'Hoa cưới 4', '<p>123</p>', 160000, 0, 'hc2.jpg', 2, 0, 0, 7, 9, '2016-10-25 20:00:16', '2017-12-08 20:06:00');
INSERT INTO `products` VALUES (5, 'Hoa cưới 5', '<p>234 yujyjfyjghfjghf</p>\r\n\r\n<p>j ghf</p>\r\n\r\n<p>jf ghj fh<img alt=\"\" src=\"http://shopbanhoa/photos/4/aaaaaaaaaaaaaaaaaaaaa.PNG\" style=\"height:398px; width:648px\" /></p>', 160000, 0, 'hc3.jpg', 3, 0, 43, 93, 9, '2016-10-25 20:00:16', '2017-12-08 19:13:41');
INSERT INTO `products` VALUES (6, 'Hoa cưới 6', '', 200000, 180000, 'hc4.jpg', 1, 0, 0, 58, 4, '2016-10-25 20:00:16', '2017-12-08 13:58:51');
INSERT INTO `products` VALUES (7, 'Hoa cưới 7', '', 160000, 0, 'hc5.jpg', 1, 1, 343, 77, 4, '2016-10-25 20:00:16', '2017-12-08 22:40:31');
INSERT INTO `products` VALUES (8, 'Hoa cưới 8', '', 160000, 150000, 'hc6.jpg', 2, 0, 5, 3, 4, '2016-10-25 20:00:16', '2017-11-29 22:10:38');
INSERT INTO `products` VALUES (9, 'Hoa cưới 9', '', 160000, 150000, 'hc7.jpg', 2, 0, 0, 343, 4, '2016-10-25 20:00:16', '2016-10-24 15:11:00');
INSERT INTO `products` VALUES (11, 'Hoa sinh nhật 1', '', 250000, 0, 'sn3.jpg', 2, 0, 3, 21, 2, '2016-10-11 19:00:00', '2017-12-08 22:38:08');
INSERT INTO `products` VALUES (12, 'Hoa sinh nhật 5', '', 200000, 180000, 'sn4.jpg', 2, 0, 6, 240, 2, '2016-10-11 19:00:00', '2017-12-08 01:04:51');
INSERT INTO `products` VALUES (13, 'Hoa sinh nhật 6', '', 300000, 280000, 'sn5.jpg', 2, 1, 4, 8, 2, '2016-10-11 19:00:00', '2017-11-27 01:45:50');
INSERT INTO `products` VALUES (14, 'Hoa sinh nhật 7', '', 300000, 280000, 'sn6.jpg', 2, 0, 0, 24, 2, '2016-10-11 19:00:00', '2017-12-08 13:58:55');
INSERT INTO `products` VALUES (15, 'Hoa văn phòng 1', '', 350000, 320000, 'vp0.jpg', 2, 1, 3506, 62, 3, '2016-10-11 19:00:00', '2017-12-08 19:52:16');
INSERT INTO `products` VALUES (16, 'Hoa văn phòng 2', '', 150000, 120000, 'vp1.jpg', 2, 0, 54, 11, 3, '2016-10-11 19:00:00', '2017-11-27 02:42:02');
INSERT INTO `products` VALUES (17, 'Hoa văn phòng 3', '', 250000, 240000, 'vp2.jpg', 2, 0, 3, 7, 3, '2016-10-11 19:00:00', '2017-11-28 01:37:45');
INSERT INTO `products` VALUES (18, 'Hoa cao cấp 1', '', 180000, 0, 'cc8.jpg', 2, 0, 5654, 6, 1, '2016-10-12 19:20:00', '2017-11-26 12:11:06');
INSERT INTO `products` VALUES (19, 'Hoa cao cấp 2', '', 150000, 0, 'cc9.jpg', 2, 1, 54, 5, 1, '2016-10-12 19:20:00', '2017-12-08 19:42:13');
INSERT INTO `products` VALUES (20, 'Hoa cao cấp 3', '', 150000, 0, 'cc10.jpg', 2, 0, 54, 15, 1, '2016-10-12 19:20:00', '2017-11-21 21:10:19');
INSERT INTO `products` VALUES (21, 'Hoa cao cấp 4', '', 160000, 150000, 'cc11.jpg', 2, 0, 4, 66, 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (22, 'Hoa cao cấp 5', '', 160000, 150000, 'cc0.jpg', 2, 1, 6, 1, 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (23, 'Hoa cao cấp 6', '', 180000, 0, 'cc1.jpg', 2, 0, 5, 14, 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (24, 'Hoa cao cấp 7', '', 180000, 0, 'cc2.jpg', 2, 0, 4, 0, 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (25, 'Hoa cao cấp 9', '', 590000, 70000, 'cc3.jpg', 2, 0, 5, 5, 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (26, 'Hoa cao cấp 8', '', 700000, 0, 'cc4.jpg', 2, 0, 65, 562, 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (27, 'Hoa cao cấp 10', '', 100000, 80000, 'cc5.jpg', 2, 0, 5, 73, 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (28, 'Hoa cao cấp 11', '', 120000, 0, 'cc6.jpg', 2, 1, 6, 0, 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (29, 'Hoa cao cấp 12', '', 100000, 0, 'cc7.jpg', 2, 0, 56, 6, 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (30, 'Hoa văn phòng 4', '', 380000, 350000, 'vp3.jpg', 2, 1, 654, 65, 3, '2016-10-12 19:20:00', '2017-12-08 19:36:54');
INSERT INTO `products` VALUES (31, 'Hoa văn phòng 5', '', 380000, 350000, 'vp4.jpg', 2, 0, 5, 7, 3, '2016-10-12 19:20:00', '2017-11-22 10:32:59');
INSERT INTO `products` VALUES (32, 'Hoa văn phòng 6', '', 380000, 350000, 'vp5.jpg', 2, 0, 54, 55, 3, '2016-10-12 19:20:00', '2017-11-21 21:10:24');
INSERT INTO `products` VALUES (33, 'Hoa gấu bông 1', '', 280000, 250000, 'gb0.jpg', 2, 1, 4, 256, 6, '2016-10-12 19:20:00', '2017-12-08 22:40:31');
INSERT INTO `products` VALUES (34, 'Hoa gấu bông 2', '', 280000, 0, 'gb1.jpg', 2, 1, 65, 14, 6, '2016-10-12 19:20:00', '2017-11-25 21:48:04');
INSERT INTO `products` VALUES (35, 'Hoa văn phòng 7', '', 320000, 4, 'vp8.jpg', 4, 1, 5, 2, 3, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (36, 'Hoa văn phòng 8', '', 320000, 5, 'vp9.jpg', 4, 0, 6, 35, 3, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (37, 'Hoa văn phòng 9', '', 320000, 14, 'vp10.jpg', 4, 1, 6, 0, 3, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (38, 'Hoa văn phòng 10', '', 350000, 10, 'vp11.jpg', 4, 0, 6, 64, 3, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (39, 'Hoa văn phòng 11', '', 350000, 20, 'vp12.jpg', 4, 0, 56, 6, 3, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (40, 'Hoa văn phòng 12', '', 350000, 32, 'vp13.jpg', 4, 0, 46, 357, 3, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (41, 'Hoa văn phòng 13', '', 350000, 20, 'vp14.jpg', 4, 1, 5, 0, 3, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (42, 'Hoa cưới 10', 'Những bông hoa tuyệt đẹp cho ngày đặc biệt nhất của cuộc đời con gái', 150000, 10, 'hc9.jpg', 2, 0, 65, 3, 4, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (43, 'Hoa cưới 11', 'Rực rỡ nhất, xinh đẹp nhất trong ngày cưới', 120000, 2, 'hc10.jpg', 2, 1, 35, 654, 4, '2016-10-12 19:20:00', '2017-12-08 22:40:31');
INSERT INTO `products` VALUES (44, 'Hoa cưới 12', 'Gà hun khói,nấm, sốt cà chua, pho mai mozzarella.', 120000, 0, 'hc11.jpg', 2, 0, 53, 1, 4, '2016-10-12 19:20:00', '2017-12-08 20:04:35');
INSERT INTO `products` VALUES (45, 'Hoa tình yêu 1', 'Xúc xích klobasa, Nấm, Ngô, sốtcà chua, pho mai Mozzarella.', 120000, 0, '0.jpg', 2, 0, 6, 13, 5, '2016-10-12 19:20:00', '2017-11-28 01:44:11');
INSERT INTO `products` VALUES (46, 'Hoa hồng 2', 'Tôm , mực, xào cay,ớt xanh, hành tây, cà chua, phomai mozzarella.', 120000, 0, '1.jpg', 2, 0, 654, 3603, 5, '2016-10-12 19:20:00', '2017-12-08 14:11:18');
INSERT INTO `products` VALUES (47, 'Hoa hồng 1', 'Ham, bacon, chorizo, pho mai mozzarella.', 140000, 0, '2.jpg', 2, 0, 546, 4, 5, '2016-10-12 19:20:00', '2017-11-29 10:55:23');
INSERT INTO `products` VALUES (48, 'Hoa tình yêu 4', 'Cá Ngừ, sốt Mayonnaise,sốt càchua, hành tây, pho mai Mozzarella', 140000, 0, '3.jpg', 2, 0, 6, 34, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (49, 'Hoa tình yêu 7', '', 120000, 20, '6.jpg', 2, 0, 0, 54384, 5, '2016-10-12 19:20:00', '2017-12-08 22:38:08');
INSERT INTO `products` VALUES (50, 'Hoa tình yêu 8', '<p><img alt=\"\" src=\"http://shopbanhoa/photos/4/vforum.vn___funny-wallpapers-shared-by-twalls-(17).jpg\" style=\"height:313px; width:500px\" /></p>\r\n\r\n<p>&nbsp;&aacute;df</p>\r\n\r\n<p>&nbsp;&aacute;df</p>\r\n\r\n<p>s dfds gsdfg sdfg</p>', 120000, 10, '7.jpg', 2, 0, 6, 4, 9, '2016-10-12 19:20:00', '2017-12-08 18:59:03');
INSERT INTO `products` VALUES (51, 'Bánh su kem sữa tươi', NULL, 150000, 0, '8.jpg', 2, 0, 6, 134, 9, '2016-10-12 19:20:00', '2017-12-08 18:44:21');
INSERT INTO `products` VALUES (52, 'Bánh su kem dâu sữa tươi', '', 150000, 0, '9.jpg', 2, 0, 6, 0, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (53, 'Hoa hồng 11', '', 150000, 0, '10.jpg', 2, 0, 6, 51, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (54, 'Hoa hồng 12', '', 150000, 0, '11.jpg', 1, 1, 3, 6, 5, '2016-10-12 19:20:00', '2017-12-08 19:52:07');
INSERT INTO `products` VALUES (55, 'Hoa hồng 13', '', 150000, 0, '12.jpg', 2, 0, 0, 25, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (56, 'Hoa hồng 14', '', 150000, 0, '13.jpg', 2, 0, 345, 0, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (57, 'Hoa hồng 15', '', 150000, 0, '14.jpg', 2, 1, 5, 9, 5, '2016-10-12 19:20:00', '2017-12-05 01:45:44');
INSERT INTO `products` VALUES (58, 'Hoa sinh nhật 2', 'Hạnh phúc và may mắn đón một tuổi mới', 200000, 20, 'sn0.jpg', 2, 0, 5, 5, 2, '2016-10-26 10:00:00', '2016-10-11 10:00:00');
INSERT INTO `products` VALUES (59, 'Hoa sinh nhât 3', 'Mong một tuổi mới lại thêm một may mắn, một niềm vui, một hạnh phúc mới đến', 200000, 0, 'sn1.jpg', 2, 0, 5, 7, 2, '2016-10-26 10:00:00', '2016-10-11 10:00:00');
INSERT INTO `products` VALUES (60, 'Hoa sinh nhật 4', 'Chúc mừng sinh nhật', 200000, 0, 'sn2.jpg', 2, 0, 3, 6, 2, '2016-10-26 10:00:00', '2016-10-11 10:00:00');
INSERT INTO `products` VALUES (61, 'Hoa đồng tiền trắng', 'Những chiếc cupcake có cấu tạo gồm phần vỏ bánh xốp mịn và phần kem trang trí bên trên rất bắt mắt với nhiều hình dạng và màu sắc khác nhau. Cupcake còn được cho là chiếc bánh mang lại niềm vui và tiếng cười như chính hình dáng đáng yêu của chúng.', 150000, 50, '15.jpg', 3, 1, 4, 2, 5, '2017-11-05 10:00:00', '2017-12-06 18:16:17');
INSERT INTO `products` VALUES (62, 'Hoa tình yêu 17', 'Hạnh phúc luôn đong đầy đẹp đẽ và rực rỡ như những đóa hoa', 250000, 10, '16.jpg', 2, 0, 6, 524, 5, '2017-11-05 10:00:00', '2017-11-05 10:00:00');
INSERT INTO `products` VALUES (63, 'Hoa hồng 18', '', 545455545, 4, '17.jpg', 2, 0, 4, 0, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (64, 'Hoa hồng 19', '', 100000, 4, '18.jpg', 2, 0, 4, 4, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (65, 'Hoa đồng tiền 20', '', 456000, 4, '19.jpg', 2, 0, 3, 1, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (66, 'Hoa hồng 21', '', 250000, 4, '20.jpg', 2, 0, 3536, 52, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (67, 'Hoa cúc tiên', '', 56000, 4, '21.jpg', 2, 0, 6, 36, 5, '2017-10-31 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (68, 'Hoa hồng 23', '', 95000, 4, '22.jpg', 2, 0, 3453, 0, 5, '2017-11-01 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (69, 'Hoa hồng 24', '', 99000, 4, '23.jpg', 2, 0, 345, 4, 5, '2017-11-02 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (70, 'Hoa hồng 25', '', 765000, 4, '24.jpg', 2, 0, 575, 68, 5, '2017-11-02 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (71, 'Hoa hồng 26', '', 333000, 4, '25.jpg', 2, 0, 456, 7, 5, '2017-11-03 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (72, 'Hoa hồng 27', '', 123000, 4, '26.jpg', 2, 0, 234, 246, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (73, 'Hoa hồng 28', '', 235000, 4, '27.jpg', 2, 0, 6, 0, 5, '2017-11-01 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (74, 'Hoa tình yêu 29', '', 222000, 4, '28.jpg', 2, 0, 34, 24, 5, '2017-11-02 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (75, 'Hoa tình yêu 30', '', 213000, 4, '29.jpg', 2, 0, 34, 5, 5, '2017-11-03 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (76, 'Hoa hồng 31', '', 345000, 4, '30.jpg', 2, 0, 132, 5, 5, '2017-10-31 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (77, 'Hoa gấu bông 5', '', 400000, 4, 'gb2.jpg', 1, 0, 8, 7, 6, '2017-11-05 10:00:00', '2017-11-21 21:10:27');
INSERT INTO `products` VALUES (78, 'Hoa gấu bông 6', '', 430000, 4, 'gb3.png', 2, 0, 78, 3, 6, '2017-11-04 10:00:00', '2017-11-27 01:46:49');
INSERT INTO `products` VALUES (79, 'Hoa gấu bông 4', '', 230000, 4, 'gb4.jpg', 1, 0, 55, 58, 6, '2017-11-01 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (80, 'Hoa gấu bông 3', '', 340000, 4, 'gb5.jpg', 2, 0, 0, 56, 6, '2017-10-31 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (81, 'Hoa gấu bông 2', '', 570000, 4, 'gb6.jpg', 2, 0, 2312, 8, 6, '2017-11-02 10:00:00', '2017-11-21 20:15:04');
INSERT INTO `products` VALUES (82, 'Hoa gấu bông 1', '', 290000, 4, 'gb7.jpg', 1, 0, 123, 73, 6, '2017-11-03 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (83, 'Hoa chúc mừng 5', '', 1200000, 4, 'cm0.jpg', 2, 0, 34, 9, 7, '2017-10-09 10:00:00', '2017-11-25 21:49:59');
INSERT INTO `products` VALUES (84, 'Hoa chúc mừng 4', '', 1100000, 4, 'cm1.jpg', 2, 0, 45, 6, 7, '2017-10-07 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (85, 'Hoa chúc mừng 3', '', 870000, 4, 'cm2.jpg', 2, 0, 5676, 548, 7, '2017-09-30 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (86, 'Hoa chúc mừng 2', '', 1500000, 4, 'cm3.jpg', 1, 0, 7, 7, 7, '2017-10-23 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (87, 'Hoa chúc mừng 1', '', 1320000, 4, 'cm4.jpg', 2, 0, 6, 2, 7, '2017-11-29 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (88, 'Hoa hướng dương 5', '', 120000, 4, 'tn0.jpg', 2, 0, 88, 5, 8, '2017-09-17 10:00:00', '2017-12-06 03:15:13');
INSERT INTO `products` VALUES (89, 'Hoa hướng dương 4', '', 210000, 4, 'tn1.jpg', 2, 0, 8, 2, 8, '2017-10-17 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (90, 'Hoa hướng dương 3', '', 110000, 4, 'tn2.jpg', 1, 0, 4, 5, 8, '2017-08-20 10:00:00', '2017-12-08 22:34:07');
INSERT INTO `products` VALUES (91, 'Hoa hướng dương 2', '', 430000, 4, 'tn3.jpg', 1, 0, 42, 5, 8, '2017-08-21 10:00:00', '2017-12-08 22:34:07');
INSERT INTO `products` VALUES (92, 'Hoa hướng dương 1', '', 90000, 4, 'tn4.jpg', 1, 0, 34, 5, 8, '2017-08-14 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (93, 'Hoa văn phòng cao cấp 1', '', 345000, 8, 'vp6.jpg', 4, 0, 23, 5, 3, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (94, 'Hoa văn phòng cao cấp 2', '', 220000, 5, 'vp7.jpg', 4, 0, 3, 5, 3, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (97, 'Hoa hồng sữa', 'Dịu dàng nữ tính', 156700, 0, '5.jpg', 2, 0, 20, 345, 5, '2017-11-04 10:00:00', '2017-12-08 22:34:07');
INSERT INTO `products` VALUES (98, 'Hoa hồng cam', '', 230000, 0, '4.jpg', 2, 1, 2, 37, 5, '2017-11-04 10:00:00', '2017-12-08 19:15:22');
INSERT INTO `products` VALUES (99, 'Hoa tình yêu 47', '', 234000, 50, '47.jpg', 2, 0, 0, 345, 5, '2017-11-18 17:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (100, 'Hoa tình yêu 46', '', 455000, 0, '46.jpg', 2, 0, 43, 0, 5, '2017-11-17 17:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (101, 'Hoa tình yêu 45', '', 234000, 0, '45.jpg', 2, 0, 543, 4, 5, '2017-11-13 17:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (102, 'Hoa hồng 44', '', 123000, 0, '44.jpg', 2, 0, 645, 3, 5, '2017-11-17 17:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (103, 'Hoa tình yêu 43', '', 450000, 0, '43.jpg', 2, 0, 345, 3, 5, '2017-11-18 17:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (104, 'Hoa tình yêu 42', '', 345000, 0, '42.jpg', 2, 0, 3, 3, 5, '2017-11-18 17:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (105, 'Hoa tình yêu 41', '', 123000, 0, '41.jpg', 2, 0, 23, 350, 5, '2017-11-04 10:00:00', '2017-11-28 01:46:47');
INSERT INTO `products` VALUES (106, 'Hoa tình yêu 40', '', 222000, 0, '40.jpg', 2, 0, 1, 45, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (107, 'Hoa hồng 39', '', 333000, 0, '39.jpg', 2, 0, 2, 0, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (108, 'Hoa hồng 38', '', 233000, 0, '38.jpg', 2, 0, 12, 5, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (109, 'Hoa hồng 37', '', 777000, 0, '37.jpg', 2, 0, 29, 5351, 5, '2017-11-04 10:00:00', '2017-12-08 13:33:36');
INSERT INTO `products` VALUES (110, 'Hoa hồng 36', '', 666000, 0, '36.jpg', 2, 0, 5, 47, 5, '2017-11-04 10:00:00', '2017-11-27 02:34:24');
INSERT INTO `products` VALUES (111, 'Hoa hồng 35', '', 55000, 0, '35.jpg', 2, 0, 5, 0, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (112, 'Hoa hồng 34', '', 340000, 0, '34.jpg', 2, 0, 5, 12, 5, '2017-11-04 10:00:00', '2017-11-30 01:31:35');
INSERT INTO `products` VALUES (113, 'Hoa hồng 33', '', 33000, 0, '33.jpg', 2, 0, 17, 57, 5, '2017-11-04 10:00:00', '2017-12-08 13:14:18');
INSERT INTO `products` VALUES (114, 'Hoa hồng 32', '', 320000, 0, '32.jpg', 2, 0, 57, 23, 5, '2017-11-04 10:00:00', '2017-12-08 01:05:00');
INSERT INTO `products` VALUES (115, 'Hoa hồng 31', '', 310000, 0, '31.jpg', 2, 0, 567, 19, 5, '2017-11-04 10:00:00', '2017-11-27 01:42:10');
INSERT INTO `products` VALUES (116, 'hoa', '<p>&nbsp;dfgs d</p>\r\n\r\n<p>fsg</p>\r\n\r\n<p>dfs&nbsp;</p>\r\n\r\n<p>gsdfg dfsgs dfgdfs gsdfg<img alt=\"\" src=\"http://shopbanhoa/photos/4/vforum.vn___funny-wallpapers-shared-by-twalls-(18).jpg\" style=\"height:188px; width:300px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;dsfgfds gsdfg dfg<img alt=\"\" src=\"http://shopbanhoa/photos/4/vforum.vn___funny-wallpapers-shared-by-twalls-(8).jpg\" style=\"height:281px; width:500px\" /></p>', 5000000, 20, 'tw1ttjJM_Capture.PNG', 1, 1, 5, 40, 9, '2017-12-08 10:28:02', '2017-12-08 22:00:11');

-- ----------------------------
-- Table structure for slide
-- ----------------------------
DROP TABLE IF EXISTS `slide`;
CREATE TABLE `slide`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of slide
-- ----------------------------
INSERT INTO `slide` VALUES (15, 'w3AblRf4_banner2.png', '2017-12-05 22:54:22', '2017-12-05 22:54:22');
INSERT INTO `slide` VALUES (16, 'vwKlsWvt_banner4.png', '2017-12-05 22:54:22', '2017-12-05 22:54:22');

-- ----------------------------
-- Table structure for type_products
-- ----------------------------
DROP TABLE IF EXISTS `type_products`;
CREATE TABLE `type_products`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of type_products
-- ----------------------------
INSERT INTO `type_products` VALUES (9, 'Hoa mới nhập', 'Những bó hoa tuyệt vời nhất dành cho những người tuyệt vời nhất', 'x0.jpg', NULL, NULL);
INSERT INTO `type_products` VALUES (1, 'Hoa cao cấp', 'Những bông hoa cao cấp này sẽ cho người nhận có cảm giác rằng họ vô giá, và thể hiện được sự sang trọng của người tặng', 'NHUaPxdT_cc1.jpg', '2017-11-01 03:00:00', '2017-11-19 06:06:30');
INSERT INTO `type_products` VALUES (2, 'Hoa sinh nhật', 'Mừng người được nhận thêm một tuổi mới với nhiều niềm vui và hạnh phúc, hãy trao cho họ những bông hoa thật đẹp để cho họ biết họ cũng đẹp như những đóa hoa asdf', 'Biukq01N_vforum.vn___funny-wallpapers-shared-by-twalls-(8).jpg', '2016-10-11 12:16:15', '2017-12-08 01:34:38');
INSERT INTO `type_products` VALUES (3, 'Hoa văn phòng', 'Bánh trái cây, hay còn gọi là bánh hoa quả, là một món ăn chơi, không riêng gì của Huế nhưng khi \"lạc\" vào mảnh đất Cố đô, món bánh này dường như cũng mang chút tinh tế, cầu kỳ và đặc biệt. Lấy cảm hứng từ những loại trái cây trong vườn, qua bàn tay khéo léo của người phụ nữ Huế, món bánh trái cây ra đời - ngọt thơm, dịu nhẹ làm đẹp lòng biết bao người thưởng thức.', 'vp10.jpg', '2016-10-17 10:33:33', '2016-10-14 17:25:27');
INSERT INTO `type_products` VALUES (4, 'Hoa cưới', 'Ai cũng tìm thấy cho mình một nửa của riêng mình, nếu họ khát khao yêu và được yêu. Phải tìm đúng cho mình 3 con người xứng đáng để được gọi là yêu. Người đó trước hết là người bạn yêu  nhất, thứ 2 đó là người yêu bạn  nhất và người thứ 3 chính là bạn đồng hành của bạn trong suốt cuộc đời, người đó sẽ là người đầu gối tay ấp với bạn.Vậy nên trước khi bạn gặp được người yêu bạn nhất, bạn phải gặp người đem lại cảm giác yêu cho bạn, đó chính là việc để bạn hiểu được yêu là như thế nào. Sau khi trải qua hai trạng thái khác nhau yêu và được yêu, bạn mới thực sự có những kinh nghiệm, những xác định chin chắn trong việc chọn bạn đời của mình sau này.', 'hc6.jpg', '2016-10-25 13:29:19', '2016-10-25 12:22:22');
INSERT INTO `type_products` VALUES (5, 'Hoa lễ tình nhân', 'Khác xa những món quà xa xỉ đắt tiền thì hoa tươi lại là món quà vừa túi tiền lại đẹp mà mang nhiều ý nghĩa để chứng minh được tình cảm của mình đối với đối phương. Đặc biệt, đối với nữ thì hoa tươi quả là món quà ý nghĩa nhất và không thể thiếu trong ngày lễ Tình yêu 14-2.  Mỗi loại hoa lại mang một ý nghĩa, một phong thái khác nhau. Ở chúng đều dậy lên một thứ gì đó khiến tâm hồn con người ta ngây ngất khó tả. ', '5.jpg', '2016-10-27 14:00:00', '2016-10-26 14:00:23');
INSERT INTO `type_products` VALUES (6, 'Hoa gấu bông', 'Kết hợp hoa và gấu bông thể hiện tình yêu của người tặng dành cho người nhận.', 'gb3.jpg', '2016-10-25 03:19:00', NULL);
INSERT INTO `type_products` VALUES (7, 'Hoa chúc mừng', 'Chia vui', 'cm0.jpg', '2016-10-25 03:19:00', NULL);
INSERT INTO `type_products` VALUES (8, 'Hoa tốt nghiệp', 'Hoa Hướng Dương luôn hướng về phía mặt trời nên thường là biểu tượng của lòng trung thành, chung thủy sâu sắc, sự kiên định đó cũng biểu thị cho sức mạnh, uy quyền, sự ấm áp, nuôi dưỡng (tất cả những thuộc tính của mặt trời) và cả sự kiêu kỳ, vẻ đẹp hào nhoáng bên ngoài .', 'tn4.jpg', '2017-10-31 03:00:00', NULL);
INSERT INTO `type_products` VALUES (10, 'dfg dfsg', 'dsgs dgsdf', 'qltN8ark_Capture.PNG', '2017-12-08 12:02:37', '2017-12-08 12:02:37');

-- ----------------------------
-- Table structure for units
-- ----------------------------
DROP TABLE IF EXISTS `units`;
CREATE TABLE `units`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of units
-- ----------------------------
INSERT INTO `units` VALUES (1, 'hộp', NULL, NULL);
INSERT INTO `units` VALUES (2, 'bó', NULL, NULL);
INSERT INTO `units` VALUES (3, 'cái\r\n', NULL, NULL);
INSERT INTO `units` VALUES (4, 'chậu', NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NULL DEFAULT 0,
  `gender` tinyint(4) NULL DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `birthday` date NULL DEFAULT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'A', 'ibghanvip@gmail.com', '$2y$10$Px/zAy5RTDns7wZtnpSlKukh.SViElAgCBhElnw4OKWggOvqJ2Nji', 0, 1, NULL, NULL, NULL, NULL, 'gMMJQjIqH6JdTbJNr7MzpOcvVfoby6ogCEgMxoZEmEHu8LGSQhrygzP6XHOu', '2017-11-26 06:50:33', '2017-12-08 23:27:48');
INSERT INTO `users` VALUES (4, 'Thai Huynh Duc', 'huynhjduc2481@gmail.com', '$2y$10$w9aizmWI/4EnkP5YZTjfeujSfrR5m1iilZV/GCZYJC1Gm8D22VAT.', 2, 1, '997 Nguyễn Kiệmm', '09785339522', '1996-08-24', NULL, 'MIDusMAk8JjNxEjTFOJCLD9XO1CuzhIte4DELFKQ3QRgF0fZL8MFr4b6eyEN', '2017-11-26 13:38:32', '2017-11-26 16:54:20');
INSERT INTO `users` VALUES (1, 'Nhan Nhan', 'huenhandg@gmail.com', '$2y$10$5kuJ3kEaTAzoYEM64c.FN.HnmMqns6mn..eYSqEisYXblwIeGxstG', 0, 1, 'o dau cung dc', '0982676864', '1996-05-26', NULL, 'FioZnE4HbQETIYAnsmCDHAR2GcSu6SkNpOrweGgVXuAKvQLKkhInf934roJE', '2017-11-26 17:55:27', '2017-11-28 07:23:01');
INSERT INTO `users` VALUES (5, 'Gia Han', 'tnghanit@gmail.com', '$2y$10$hEf29dHDOeQ1ioEji/KfOOHVSU5XgnKdsQI.AiuADkTN77.q5BDkS', 1, 1, NULL, NULL, NULL, NULL, NULL, '2017-11-28 02:16:45', '2017-11-28 02:16:45');
INSERT INTO `users` VALUES (6, 'ThaiDuc', 'thducit@gmail.com', '1', 1, 1, '1', '1123232132132', NULL, '1', '', NULL, '2017-11-30 02:24:16');
INSERT INTO `users` VALUES (8, 'ThaiDuc', 'thducit1@gmail.com', '1', 1, 1, '1', '11233232132132', NULL, '1', '', NULL, '2017-11-30 02:24:16');
INSERT INTO `users` VALUES (7, 'A B C D E F', 'ibghanvip1@gmail.com', '$2y$10$X6jc.IQ9vMgn.xFMpySnJe3HX6ETjlRMoLVNqv3Aea0oFAmwGwaha', 1, 1, 'Phường 2', '01692039011', NULL, NULL, 'n5xmJSIUTKa2JsXdGb3RSETbq8jELWIfW9c9d1iViwdkX4DYilSXC0KySYDn', '2017-11-26 13:50:33', '2017-11-28 01:28:19');
INSERT INTO `users` VALUES (12, 'B', 'huynhjduc248@gmail.com', '$2y$10$AMff9tbhsM5Kct3ZtimJ5ODCaj6PtmRHmc8k3HPBQnameh/PmRzDG', 0, 1, 'fdsdsfdsfdsff sdf dsf', '0978533952', NULL, NULL, 'ATL5QSEZoR4UGL6zMestRVznu5dZlElk4apoQqIbX0xLhU9Aiqo7WCLZ0fh8', '2017-11-26 13:51:16', '2017-11-30 02:29:16');
INSERT INTO `users` VALUES (13, 'anonymous', 'guest.hoasaigon@gmail.com', '$2y$10$5ycxw4N2EPG7OEkpSPAjSOfawE0tYRTmEVs3/oGINgOTGRRxLLBE2', 0, 0, '54hdfgh dftgh  dfgh', '46454444485', '1996-08-24', NULL, 'WrtArlbusULzPozve1dtzXpZHEMNy1XGgopdTarmGYGBFAYU7AiMXRBI3LxW', '2017-12-05 21:28:02', '2017-12-06 18:13:04');
INSERT INTO `users` VALUES (14, 'asdf345rt 4trg dfsg', 'huynhjduc2481gfd@gmail.com', '$2y$10$Snr0zmYDB96x76cL/glMCOxasHTf3BFWzhPBeQSl9HUe4GqRzt/qC', 0, 1, NULL, '01692039011', '2008-02-02', NULL, 'kLlf1YVI0XI6PTpUeA5XJ7ECMyzBYgfOKAnzAkCzRgvP4BwHLKToJcDj2FSB', '2017-12-08 17:38:26', '2017-12-08 18:13:29');

SET FOREIGN_KEY_CHECKS = 1;
