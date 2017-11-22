/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50719
 Source Host           : localhost:3306
 Source Schema         : banbong_migrate_2

 Target Server Type    : MySQL
 Target Server Version : 50719
 File Encoding         : 65001

 Date: 22/11/2017 22:04:39
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
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Fixed;

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

-- ----------------------------
-- Table structure for bills
-- ----------------------------
DROP TABLE IF EXISTS `bills`;
CREATE TABLE `bills`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date_order` date NOT NULL,
  `total` double NOT NULL,
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `recipient` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `confirm` tinyint(4) NOT NULL DEFAULT 0,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `bills_id_user_foreign`(`id_user`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bills
-- ----------------------------
INSERT INTO `bills` VALUES (1, '2017-11-22', 605, NULL, 'fdsdsfds', 'duc', 'c3/26 Pham Hung Binh Chanh', '1692039011', 0, 1, '2017-11-22 02:01:51', '2017-11-22 02:01:51');
INSERT INTO `bills` VALUES (2, '2017-11-22', 1, NULL, 'f sfdfg sdfg sdfg dsfgsdf', 'thai duc', '34 ret ret rewt ew', '34534534', 0, 1, '2017-11-22 02:03:03', '2017-11-22 02:03:03');

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
INSERT INTO `contacts` VALUES (1, '194 Cao Lỗ\r\nPhường 4, Quận 8', 'hoasaigonn@gmail.com', '123-456-789', 'http://hoasaigon.tk/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.97943829346!2d106.67292831467095!3d10.736067992348978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752e4d5f5ed313%3A0xc7f118cecd4625a7!2zMTk0IENhbyBM4buXLCBwaMaw4budbmcgNCwgUXXhuq1uIDgsIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1511283522484\" width=\"680\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', NULL, NULL);

-- ----------------------------
-- Table structure for contactus
-- ----------------------------
DROP TABLE IF EXISTS `contactus`;
CREATE TABLE `contactus`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `confirm` tinyint(4) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

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
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, 'Mùa trung thu năm nay, Hỷ Lâm Môn muốn gửi đến quý khách hàng sản phẩm mới xuất hiện lần đầu tiên tại Việt nam \"Bánh trung thu Bơ Sữa HongKong\".', 'Những ý tưởng dưới đây sẽ giúp bạn sắp xếp tủ quần áo trong phòng ngủ chật hẹp của mình một cách dễ dàng và hiệu quả nhất. ', '0.jpg', '2017-11-06 00:11:50', '2017-11-06 00:13:37');
INSERT INTO `news` VALUES (2, 'Tư vấn cải tạo phòng ngủ nhỏ sao cho thoải mái và thoáng mát', 'Chúng tôi sẽ tư vấn cải tạo và bố trí nội thất để giúp phòng ngủ của chàng trai độc thân thật thoải mái, thoáng mát và sáng sủa nhất. ', '12.jpg', '2017-11-06 00:12:06', '2017-11-06 00:13:37');
INSERT INTO `news` VALUES (3, 'Đồ gỗ nội thất và nhu cầu, xu hướng sử dụng của người dùng', 'Đồ gỗ nội thất ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Xu thế của các gia đình hiện nay là muốn đem thiên nhiên vào nhà ', 'vp8.jpg', '2017-11-06 00:12:27', '2017-11-06 00:13:37');
INSERT INTO `news` VALUES (4, 'Hướng dẫn sử dụng bảo quản đồ gỗ, nội thất.', 'Ngày nay, xu hướng chọn vật dụng làm bằng gỗ để trang trí, sử dụng trong văn phòng, gia đình được nhiều người ưa chuộng và quan tâm. Trên thị trường có nhiều sản phẩm mẫu ', '3.jpg', '2017-11-06 00:13:33', '2017-11-06 00:13:37');
INSERT INTO `news` VALUES (5, 'Phong cách mới trong sử dụng đồ gỗ nội thất gia đình', 'Đồ gỗ nội thất gia đình ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Phong cách sử dụng đồ gỗ hiện nay của các gia đình hầu h ', '4.jpg', '2017-11-06 00:13:37', '2017-11-06 00:13:37');

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
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `unit_price` double NOT NULL,
  `promotion_price` int(11) NOT NULL,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `unit` int(10) UNSIGNED NOT NULL,
  `new` tinyint(4) NOT NULL,
  `quantity` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `products_unit_foreign`(`unit`) USING BTREE,
  INDEX `products_id_type_foreign`(`id_type`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 116 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (95, 'Hoa cưới 1', 'Bánh crepe sầu riêng nhà làm', 150000, 120000, 'hc0.jpg', 1, 1, 4, 54, 4, '2016-10-25 20:00:16', '2017-11-22 02:02:33');
INSERT INTO `products` VALUES (2, 'Hoa cưới 2', '', 180000, 160000, 'hc8.jpg', 2, 1, 0, 8, 4, '2016-10-25 20:00:16', '2017-11-21 21:06:23');
INSERT INTO `products` VALUES (96, 'Hoa cưới 3', '', 150000, 120000, 'hc1.jpg', 1, 0, 0, 67360, 4, '2016-10-25 20:00:16', '2017-11-22 20:11:40');
INSERT INTO `products` VALUES (4, 'Hoa cưới 4', '123', 160000, 0, 'hc2.jpg', 2, 0, 0, 5, 4, '2016-10-25 20:00:16', '2017-11-20 23:31:06');
INSERT INTO `products` VALUES (5, 'Hoa cưới 5', '234', 160000, 0, 'hc3.jpg', 3, 0, 43, 64, 4, '2016-10-25 20:00:16', '2016-10-24 15:11:00');
INSERT INTO `products` VALUES (6, 'Hoa cưới 6', '', 200000, 180000, 'hc4.jpg', 1, 0, 0, 54, 4, '2016-10-25 20:00:16', '2016-10-24 15:11:00');
INSERT INTO `products` VALUES (7, 'Hoa cưới 7', '', 160000, 0, 'hc5.jpg', 1, 1, 345, 45, 4, '2016-10-25 20:00:16', '2016-10-24 15:11:00');
INSERT INTO `products` VALUES (8, 'Hoa cưới 8', '', 160000, 150000, 'hc6.jpg', 2, 0, 5, 0, 4, '2016-10-25 20:00:16', '2016-10-24 15:11:00');
INSERT INTO `products` VALUES (9, 'Hoa cưới 9', '', 160000, 150000, 'hc7.jpg', 2, 0, 0, 343, 4, '2016-10-25 20:00:16', '2016-10-24 15:11:00');
INSERT INTO `products` VALUES (11, 'Hoa sinh nhật 1', '', 250000, 0, 'sn3.jpg', 2, 0, 6, 3, 2, '2016-10-11 19:00:00', '2017-11-21 20:57:30');
INSERT INTO `products` VALUES (12, 'Hoa sinh nhật 5', '', 200000, 180000, 'sn4.jpg', 2, 0, 6, 234, 2, '2016-10-11 19:00:00', '2016-10-26 19:24:00');
INSERT INTO `products` VALUES (13, 'Hoa sinh nhật 6', '', 300000, 280000, 'sn5.jpg', 2, 1, 4, 5, 2, '2016-10-11 19:00:00', '2017-10-14 19:24:00');
INSERT INTO `products` VALUES (14, 'Hoa sinh nhật 7', '', 300000, 280000, 'sn6.jpg', 2, 0, 0, 23, 2, '2016-10-11 19:00:00', '2016-10-26 19:24:00');
INSERT INTO `products` VALUES (15, 'Hoa văn phòng 1', '', 350000, 320000, 'vp0.jpg', 2, 1, 3546, 19, 3, '2016-10-11 19:00:00', '2017-11-21 21:26:03');
INSERT INTO `products` VALUES (16, 'Hoa văn phòng 2', '', 150000, 120000, 'vp1.jpg', 2, 0, 54, 1, 3, '2016-10-11 19:00:00', '2017-11-21 21:10:16');
INSERT INTO `products` VALUES (17, 'Hoa văn phòng 3', '', 250000, 240000, 'vp2.jpg', 2, 0, 3, 4, 3, '2016-10-11 19:00:00', '2016-10-26 19:24:00');
INSERT INTO `products` VALUES (18, 'Hoa cao cấp 1', '', 180000, 0, 'cc8.jpg', 2, 0, 5654, 4, 1, '2016-10-12 19:20:00', '2017-11-21 21:10:22');
INSERT INTO `products` VALUES (19, 'Hoa cao cấp 2', '', 150000, 0, 'cc9.jpg', 2, 1, 54, 4, 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
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
INSERT INTO `products` VALUES (30, 'Hoa văn phòng 4', '', 380000, 350000, 'vp3.jpg', 2, 1, 654, 63, 3, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (31, 'Hoa văn phòng 5', '', 380000, 350000, 'vp4.jpg', 2, 0, 5, 7, 3, '2016-10-12 19:20:00', '2017-11-22 10:32:59');
INSERT INTO `products` VALUES (32, 'Hoa văn phòng 6', '', 380000, 350000, 'vp5.jpg', 2, 0, 54, 55, 3, '2016-10-12 19:20:00', '2017-11-21 21:10:24');
INSERT INTO `products` VALUES (33, 'Hoa gấu bông 1', '', 280000, 250000, 'gb0.jpg', 2, 1, 5, 246, 6, '2016-10-12 19:20:00', '2017-11-20 21:29:45');
INSERT INTO `products` VALUES (34, 'Hoa gấu bông 2', '', 280000, 0, 'gb1.jpg', 2, 1, 65, 2, 6, '2016-10-12 19:20:00', '2017-11-21 21:10:29');
INSERT INTO `products` VALUES (35, 'Hoa văn phòng 7', '', 320000, 300000, 'vp8.jpg', 4, 1, 5, 2, 3, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (36, 'Hoa văn phòng 8', '', 320000, 300000, 'vp9.jpg', 4, 0, 6, 35, 3, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (37, 'Hoa văn phòng 9', '', 320000, 300000, 'vp10.jpg', 4, 1, 6, 0, 3, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (38, 'Hoa văn phòng 10', '', 350000, 330000, 'vp11.jpg', 4, 0, 6, 64, 3, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (39, 'Hoa văn phòng 11', '', 350000, 330000, 'vp12.jpg', 4, 0, 56, 6, 3, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (40, 'Hoa văn phòng 12', '', 350000, 330000, 'vp13.jpg', 4, 0, 46, 357, 3, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (41, 'Hoa văn phòng 13', '', 350000, 330000, 'vp14.jpg', 4, 1, 5, 0, 3, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (42, 'Hoa cưới 10', 'Những bông hoa tuyệt đẹp cho ngày đặc biệt nhất của cuộc đời con gái', 150000, 130000, 'hc9.jpg', 2, 0, 65, 3, 4, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (43, 'Hoa cưới 11', 'Rực rỡ nhất, xinh đẹp nhất trong ngày cưới', 120000, 0, 'hc10.jpg', 2, 1, 36, 653, 4, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (44, 'Hoa cưới 12', 'Gà hun khói,nấm, sốt cà chua, pho mai mozzarella.', 120000, 0, 'hc11.jpg', 2, 0, 53, 0, 4, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (45, 'Hoa tình yêu 1', 'Xúc xích klobasa, Nấm, Ngô, sốtcà chua, pho mai Mozzarella.', 120000, 0, '0.jpg', 2, 0, 6, 11, 5, '2016-10-12 19:20:00', '2017-11-21 21:10:13');
INSERT INTO `products` VALUES (46, 'Hoa hồng 2', 'Tôm , mực, xào cay,ớt xanh, hành tây, cà chua, phomai mozzarella.', 120000, 0, '1.jpg', 2, 0, 654, 3567, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (47, 'Hoa hồng 1', 'Ham, bacon, chorizo, pho mai mozzarella.', 140000, 0, '2.jpg', 2, 0, 546, 0, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (48, 'Hoa tình yêu 4', 'Cá Ngừ, sốt Mayonnaise,sốt càchua, hành tây, pho mai Mozzarella', 140000, 0, '3.jpg', 2, 0, 6, 34, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (49, 'Hoa tình yêu 7', '', 120000, 100000, '6.jpg', 2, 0, 6, 54346, 5, '2016-10-12 19:20:00', '2017-11-22 20:11:33');
INSERT INTO `products` VALUES (50, 'Hoa tình yêu 8', '', 120000, 100000, '7.jpg', 2, 0, 6, 0, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (51, 'Bánh su kem sữa tươi chiên giòn', '', 150000, 0, '8.jpg', 2, 0, 6, 134, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (52, 'Bánh su kem dâu sữa tươi', '', 150000, 0, '9.jpg', 2, 0, 6, 0, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (53, 'Hoa hồng 11', '', 150000, 0, '10.jpg', 2, 0, 6, 51, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (54, 'Hoa hồng 12', '', 150000, 0, '11.jpg', 1, 1, 3, 0, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (55, 'Hoa hồng 13', '', 150000, 0, '12.jpg', 2, 0, 0, 25, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (56, 'Hoa hồng 14', '', 150000, 0, '13.jpg', 2, 0, 345, 0, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (57, 'Hoa hồng 15', '', 150000, 0, '14.jpg', 2, 1, 5, 3, 5, '2016-10-12 19:20:00', '2016-10-18 20:20:00');
INSERT INTO `products` VALUES (58, 'Hoa sinh nhật 2', 'Hạnh phúc và may mắn đón một tuổi mới', 200000, 180000, 'sn0.jpg', 2, 0, 5, 5, 2, '2016-10-26 10:00:00', '2016-10-11 10:00:00');
INSERT INTO `products` VALUES (59, 'Hoa sinh nhât 3', 'Mong một tuổi mới lại thêm một may mắn, một niềm vui, một hạnh phúc mới đến', 200000, 0, 'sn1.jpg', 2, 0, 5, 7, 2, '2016-10-26 10:00:00', '2016-10-11 10:00:00');
INSERT INTO `products` VALUES (60, 'Hoa sinh nhật 4', 'Chúc mừng sinh nhật', 200000, 0, 'sn2.jpg', 2, 0, 3, 6, 2, '2016-10-26 10:00:00', '2016-10-11 10:00:00');
INSERT INTO `products` VALUES (61, 'Hoa đồng tiền trắng', 'Những chiếc cupcake có cấu tạo gồm phần vỏ bánh xốp mịn và phần kem trang trí bên trên rất bắt mắt với nhiều hình dạng và màu sắc khác nhau. Cupcake còn được cho là chiếc bánh mang lại niềm vui và tiếng cười như chính hình dáng đáng yêu của chúng.', 150000, 120000, '15.jpg', 3, 1, 4, 0, 5, '2017-11-05 10:00:00', '2017-11-05 10:00:00');
INSERT INTO `products` VALUES (62, 'Hoa tình yêu 17', 'Hạnh phúc luôn đong đầy đẹp đẽ và rực rỡ như những đóa hoa', 250000, 220000, '16.jpg', 2, 0, 6, 524, 5, '2017-11-05 10:00:00', '2017-11-05 10:00:00');
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
INSERT INTO `products` VALUES (78, 'Hoa gấu bông 6', '', 430000, 4, 'gb3.png', 2, 0, 78, 0, 6, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (79, 'Hoa gấu bông 4', '', 230000, 4, 'gb4.jpg', 1, 0, 55, 58, 6, '2017-11-01 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (80, 'Hoa gấu bông 3', '', 340000, 4, 'gb5.jpg', 2, 0, 0, 56, 6, '2017-10-31 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (81, 'Hoa gấu bông 2', '', 570000, 4, 'gb6.jpg', 2, 0, 2312, 8, 6, '2017-11-02 10:00:00', '2017-11-21 20:15:04');
INSERT INTO `products` VALUES (82, 'Hoa gấu bông 1', '', 290000, 4, 'gb7.jpg', 1, 0, 123, 73, 6, '2017-11-03 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (83, 'Hoa chúc mừng 5', '', 1200000, 4, 'cm0.jpg', 2, 0, 34, 3, 7, '2017-10-09 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (84, 'Hoa chúc mừng 4', '', 1100000, 4, 'cm1.jpg', 2, 0, 45, 6, 7, '2017-10-07 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (85, 'Hoa chúc mừng 3', '', 870000, 4, 'cm2.jpg', 2, 0, 5676, 548, 7, '2017-09-30 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (86, 'Hoa chúc mừng 2', '', 1500000, 4, 'cm3.jpg', 1, 0, 7, 7, 7, '2017-10-23 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (87, 'Hoa chúc mừng 1', '', 1320000, 4, 'cm4.jpg', 2, 0, 6, 2, 7, '2017-11-29 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (88, 'Hoa hướng dương 5', '', 120000, 4, 'tn0.jpg', 2, 0, 88, 2, 8, '2017-09-17 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (89, 'Hoa hướng dương 4', '', 210000, 4, 'tn1.jpg', 2, 0, 8, 2, 8, '2017-10-17 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (90, 'Hoa hướng dương 3', '', 110000, 4, 'tn2.jpg', 1, 0, 7, 5, 8, '2017-08-20 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (91, 'Hoa hướng dương 2', '', 430000, 4, 'tn3.jpg', 1, 0, 45, 5, 8, '2017-08-21 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (92, 'Hoa hướng dương 1', '', 90000, 4, 'tn4.jpg', 1, 0, 34, 5, 8, '2017-08-14 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (93, 'Hoa văn phòng cao cấp 1', '', 345000, 123000, 'vp6.jpg', 4, 0, 23, 5, 3, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (94, 'Hoa văn phòng cao cấp 2', '', 220000, 176000, 'vp7.jpg', 4, 0, 3, 5, 3, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (97, 'Hoa hồng sữa', 'Dịu dàng nữ tính', 156700, 0, '5.jpg', 2, 0, 23, 345, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (98, 'Hoa hồng cam', '', 230000, 0, '4.jpg', 2, 1, 2, 33, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (99, 'Hoa tình yêu 47', '', 234000, 230000, '47.jpg', 2, 0, 0, 345, 5, '2017-11-18 17:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (100, 'Hoa tình yêu 46', '', 455000, 0, '46.jpg', 2, 0, 43, 0, 5, '2017-11-17 17:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (101, 'Hoa tình yêu 45', '', 234000, 0, '45.jpg', 2, 0, 543, 4, 5, '2017-11-13 17:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (102, 'Hoa hồng 44', '', 123000, 0, '44.jpg', 2, 0, 645, 3, 5, '2017-11-17 17:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (103, 'Hoa tình yêu 43', '', 450000, 0, '43.jpg', 2, 0, 345, 3, 5, '2017-11-18 17:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (104, 'Hoa tình yêu 42', '', 345000, 0, '42.jpg', 2, 0, 3, 3, 5, '2017-11-18 17:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (105, 'Hoa tình yêu 41', '', 123000, 0, '41.jpg', 2, 0, 23, 345, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (106, 'Hoa tình yêu 40', '', 222000, 0, '40.jpg', 2, 0, 1, 45, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (107, 'Hoa hồng 39', '', 333000, 0, '39.jpg', 2, 0, 2, 0, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (108, 'Hoa hồng 38', '', 233000, 0, '38.jpg', 2, 0, 12, 5, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (109, 'Hoa hồng 37', '', 777000, 0, '37.jpg', 2, 0, 34, 5345, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (110, 'Hoa hồng 36', '', 666000, 0, '36.jpg', 2, 0, 5, 45, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (111, 'Hoa hồng 35', '', 55000, 0, '35.jpg', 2, 0, 5, 0, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (112, 'Hoa hồng 34', '', 340000, 0, '34.jpg', 2, 0, 5, 3, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (113, 'Hoa hồng 33', '', 33000, 0, '33.jpg', 2, 0, 45, 43, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (114, 'Hoa hồng 32', '', 320000, 0, '32.jpg', 2, 0, 57, 0, 5, '2017-11-04 10:00:00', '2017-11-04 10:00:00');
INSERT INTO `products` VALUES (115, 'Hoa hồng 31', '', 310000, 0, '31.jpg', 2, 0, 567, 5, 5, '2017-11-04 10:00:00', '2017-11-21 21:05:53');

-- ----------------------------
-- Table structure for slide
-- ----------------------------
DROP TABLE IF EXISTS `slide`;
CREATE TABLE `slide`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `link` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of slide
-- ----------------------------
INSERT INTO `slide` VALUES (1, '1', 'banner1.jpg');
INSERT INTO `slide` VALUES (2, '2', 'banner2.png');
INSERT INTO `slide` VALUES (3, '3', 'banner3.png');
INSERT INTO `slide` VALUES (4, '4', 'banner4.png');

-- ----------------------------
-- Table structure for type_products
-- ----------------------------
DROP TABLE IF EXISTS `type_products`;
CREATE TABLE `type_products`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of type_products
-- ----------------------------
INSERT INTO `type_products` VALUES (9, 'Hoa mới nhập', 'Những bó hoa tuyệt vời nhất dành cho những người tuyệt vời nhất', 'x0.jpg', NULL, NULL);
INSERT INTO `type_products` VALUES (1, 'Hoa cao cấp', 'Những bông hoa cao cấp này sẽ cho người nhận có cảm giác rằng họ vô giá, và thể hiện được sự sang trọng của người tặng', 'NHUaPxdT_cc1.jpg', '2017-11-01 10:00:00', '2017-11-19 13:06:30');
INSERT INTO `type_products` VALUES (2, 'Hoa sinh nhật', 'Mừng người được nhận thêm một tuổi mới với nhiều niềm vui và hạnh phúc, hãy trao cho họ những bông hoa thật đẹp để cho họ biết họ cũng đẹp như những đóa hoa', 'sn1.jpg', '2016-10-11 19:16:15', '2016-10-12 18:38:35');
INSERT INTO `type_products` VALUES (3, 'Hoa văn phòng', 'Bánh trái cây, hay còn gọi là bánh hoa quả, là một món ăn chơi, không riêng gì của Huế nhưng khi \"lạc\" vào mảnh đất Cố đô, món bánh này dường như cũng mang chút tinh tế, cầu kỳ và đặc biệt. Lấy cảm hứng từ những loại trái cây trong vườn, qua bàn tay khéo léo của người phụ nữ Huế, món bánh trái cây ra đời - ngọt thơm, dịu nhẹ làm đẹp lòng biết bao người thưởng thức.', 'vp10.jpg', '2016-10-17 17:33:33', '2016-10-15 00:25:27');
INSERT INTO `type_products` VALUES (4, 'Hoa cưới', 'Ai cũng tìm thấy cho mình một nửa của riêng mình, nếu họ khát khao yêu và được yêu. Phải tìm đúng cho mình 3 con người xứng đáng để được gọi là yêu. Người đó trước hết là người bạn yêu  nhất, thứ 2 đó là người yêu bạn  nhất và người thứ 3 chính là bạn đồng hành của bạn trong suốt cuộc đời, người đó sẽ là người đầu gối tay ấp với bạn.Vậy nên trước khi bạn gặp được người yêu bạn nhất, bạn phải gặp người đem lại cảm giác yêu cho bạn, đó chính là việc để bạn hiểu được yêu là như thế nào. Sau khi trải qua hai trạng thái khác nhau yêu và được yêu, bạn mới thực sự có những kinh nghiệm, những xác định chin chắn trong việc chọn bạn đời của mình sau này.', 'hc6.jpg', '2016-10-25 20:29:19', '2016-10-25 19:22:22');
INSERT INTO `type_products` VALUES (5, 'Hoa lễ tình nhân', 'Khác xa những món quà xa xỉ đắt tiền thì hoa tươi lại là món quà vừa túi tiền lại đẹp mà mang nhiều ý nghĩa để chứng minh được tình cảm của mình đối với đối phương. Đặc biệt, đối với nữ thì hoa tươi quả là món quà ý nghĩa nhất và không thể thiếu trong ngày lễ Tình yêu 14-2.  Mỗi loại hoa lại mang một ý nghĩa, một phong thái khác nhau. Ở chúng đều dậy lên một thứ gì đó khiến tâm hồn con người ta ngây ngất khó tả. ', '5.jpg', '2016-10-27 21:00:00', '2016-10-26 21:00:23');
INSERT INTO `type_products` VALUES (6, 'Hoa gấu bông', 'Kết hợp hoa và gấu bông thể hiện tình yêu của người tặng dành cho người nhận.', 'gb3.jpg', '2016-10-25 10:19:00', NULL);
INSERT INTO `type_products` VALUES (7, 'Hoa chúc mừng', 'Chia vui', 'cm0.jpg', '2016-10-25 10:19:00', NULL);
INSERT INTO `type_products` VALUES (8, 'Hoa tốt nghiệp', 'Hoa Hướng Dương luôn hướng về phía mặt trời nên thường là biểu tượng của lòng trung thành, chung thủy sâu sắc, sự kiên định đó cũng biểu thị cho sức mạnh, uy quyền, sự ấm áp, nuôi dưỡng (tất cả những thuộc tính của mặt trời) và cả sự kiêu kỳ, vẻ đẹp hào nhoáng bên ngoài .', 'tn4.jpg', '2017-10-31 10:00:00', NULL);

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
  `full_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `address` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'ThaiDuc', 'thducit@gmail.com', '1', 1, 1, '1', '1123232132132', '2017-11-06', '1', '', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
