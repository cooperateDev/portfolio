/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100419
 Source Host           : localhost:3306
 Source Schema         : portfolio

 Target Server Type    : MySQL
 Target Server Version : 100419
 File Encoding         : 65001

 Date: 26/05/2021 00:45:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc` varchar(3000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (3, 'CMS', 'We have developed several CMS Projects.', '2021-05-23 23:21:40', '2021-05-23 23:21:40', 'unnamed.png');
INSERT INTO `categories` VALUES (4, 'BlockChain', 'We have a lot of experience in blockchain developing.', '2021-05-24 09:48:02', '2021-05-24 09:48:02', 'blockchain.png');
INSERT INTO `categories` VALUES (5, 'MobileApp', 'We have a lot of experience in mobile app development.', '2021-05-24 11:56:06', '2021-05-24 11:56:06', 'ios.png');
INSERT INTO `categories` VALUES (6, 'Website', 'We\'ve lots of experience in website development', '2021-05-24 12:06:23', '2021-05-24 12:06:23', 'images.jpg');

-- ----------------------------
-- Table structure for slides
-- ----------------------------
DROP TABLE IF EXISTS `slides`;
CREATE TABLE `slides`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `order` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 70 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of slides
-- ----------------------------
INSERT INTO `slides` VALUES (64, '1.png', NULL, '2021-05-24 12:10:11', '2021-05-24 12:10:11', 1);
INSERT INTO `slides` VALUES (65, '2.png', NULL, '2021-05-24 12:10:11', '2021-05-24 12:10:11', 2);
INSERT INTO `slides` VALUES (67, 'portfolioapp_4x.png', NULL, '2021-05-24 12:20:30', '2021-05-24 12:20:30', 4);
INSERT INTO `slides` VALUES (69, '5a81539babea8.jpg', NULL, '2021-05-24 12:38:37', '2021-05-24 12:38:37', 3);

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc` varchar(3000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category_id` int NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tasks
-- ----------------------------
INSERT INTO `tasks` VALUES (1, 'Quras', 'QURAS utilizes leading encryption technologies to give users more privacy control over their information.', '2.png', 4, '2021-05-23 23:55:18', '2021-05-23 23:55:18', 'https://quraswallet.org/');
INSERT INTO `tasks` VALUES (7, 'Job Search App', 'This is app for talents.', 'portfolioapp_4x.png', 5, '2021-05-24 12:25:16', '2021-05-24 12:25:16', NULL);
INSERT INTO `tasks` VALUES (8, 'Quras', 'QURAS is a next generation blockchain that enables anonymous, privacy-protected transactions.', '5a81539babea8.jpg', 6, '2021-05-24 12:37:05', '2021-05-24 12:37:05', 'https://quras.io/');
INSERT INTO `tasks` VALUES (9, 'Quras App', 'QURAS Wallet+ is a wallet that makes QURAS blockchain coins (XQC/XQG) easy and quick to use.\r\n\r\nDespite being a lightweight wallet, it covers all the basic functions.', 'eb94d00b8528a209d52e04d104639546.png', 5, '2021-05-24 12:41:58', '2021-05-24 12:41:58', 'https://apps.apple.com/jp/app/quras-wallet/id1546075654');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `skill` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `role` int NULL DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (22, 'Michel Fayad', NULL, 'Mobile app development, Swift, Java, Kotlin, Flutter', 'leonmarushko@gmail.com', '2021-05-24 12:29:34', '2021-05-24 12:29:34', 1, 'image.jpg');
INSERT INTO `users` VALUES (23, 'Olga Klychkova', NULL, 'Angular, React JS, VUE JS, NODE JS, EXPRESS JS', 'today.julian.lim@gmail.com', '2021-05-24 12:33:42', '2021-05-24 12:33:42', 1, 'image.jpg');
INSERT INTO `users` VALUES (24, 'Alex Weber', NULL, 'PHP, Laravel, Codeigniter, Mysql, Mongodb', 'web.senior.dev@gmail.com', '2021-05-24 12:43:58', '2021-05-24 12:43:58', 1, 'image.jpg');
INSERT INTO `users` VALUES (25, 'Roman Peters', NULL, 'C++, C#, GoLANG, Python, Ruby on Rails', 'senior.zsoftware@gmail.com', '2021-05-24 12:52:21', '2021-05-24 12:52:21', 1, 'image.jpg');
INSERT INTO `users` VALUES (26, 'Tsimafei Setchinava', NULL, 'Blockchain, Smart Contract, Data Structure', 'tsimafeisetcinava@gmail.com', '2021-05-24 12:53:48', '2021-05-24 12:53:48', 1, 'image.jpg');
INSERT INTO `users` VALUES (27, 'administrator', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', NULL, 'admin@gmail.com', '2021-05-26 05:47:36', '2021-05-26 05:47:36', 2, 'default.jpg');

SET FOREIGN_KEY_CHECKS = 1;
