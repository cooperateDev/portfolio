/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100419
 Source Host           : localhost:3306
 Source Schema         : portfolio

 Target Server Type    : MySQL
 Target Server Version : 100419
 File Encoding         : 65001

 Date: 12/07/2021 05:56:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc` varchar(3000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (3, 'CMS', 'We have developed several CMS Projects.', '2021-05-23 23:21:40', '2021-05-23 23:21:40', 'unnamed.png');
INSERT INTO `categories` VALUES (4, 'BlockChain', 'We have a lot of experience in blockchain developing.', '2021-05-24 09:48:02', '2021-05-24 09:48:02', 'blockchain.png');
INSERT INTO `categories` VALUES (5, 'MobileApp', 'We have a lot of experience in mobile app development.', '2021-05-24 11:56:06', '2021-05-24 11:56:06', 'ios.png');
INSERT INTO `categories` VALUES (6, 'Website', 'We\'ve lots of experience in website development', '2021-05-24 12:06:23', '2021-05-24 12:06:23', 'images.jpg');
INSERT INTO `categories` VALUES (8, 'dfddgfh', NULL, '2021-07-11 17:02:24', '2021-07-11 17:02:24', NULL);

-- ----------------------------
-- Table structure for daily_reports
-- ----------------------------
DROP TABLE IF EXISTS `daily_reports`;
CREATE TABLE `daily_reports`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime(0) NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `note` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'This table is daily report table.\r\n' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of daily_reports
-- ----------------------------

-- ----------------------------
-- Table structure for slides
-- ----------------------------
DROP TABLE IF EXISTS `slides`;
CREATE TABLE `slides`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `order` int(11) NULL DEFAULT NULL,
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
-- Table structure for task_mngs
-- ----------------------------
DROP TABLE IF EXISTS `task_mngs`;
CREATE TABLE `task_mngs`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '1' COMMENT '1: processing, 2: complete, 3: incomplete, 4: cancel',
  `start_date` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `end_date` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `contract_price` decimal(10, 2) NULL DEFAULT NULL,
  `payment_mode` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '1' COMMENT '1: fixed, 2: hourly',
  `upwork` float(255, 0) NULL DEFAULT NULL,
  `upwork_date` datetime(0) NULL DEFAULT NULL,
  `freelancer` float(255, 0) NULL DEFAULT NULL,
  `freelancer_date` datetime(0) NULL DEFAULT NULL,
  `paypal` float(255, 0) NULL DEFAULT NULL,
  `paypal_date` datetime(0) NULL DEFAULT NULL,
  `payoneer` float(255, 0) NULL DEFAULT NULL,
  `payoneer_date` datetime(0) NULL DEFAULT NULL,
  `price` decimal(10, 2) NULL DEFAULT NULL COMMENT '\r\n',
  `price_date` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `teammate` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'user_id1, user_id2, ...',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'This table is task management table.' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of task_mngs
-- ----------------------------
INSERT INTO `task_mngs` VALUES (1, 'test1', 'test project', '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL);
INSERT INTO `task_mngs` VALUES (2, 'test2', 'test2 project', '3', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL);
INSERT INTO `task_mngs` VALUES (3, '2', 'test2', '2', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, '3', NULL, NULL);
INSERT INTO `task_mngs` VALUES (4, '2', 'test2', '4', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, '3', NULL, NULL);
INSERT INTO `task_mngs` VALUES (6, '2', 'test2', '4', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, '3', NULL, NULL);
INSERT INTO `task_mngs` VALUES (9, 'sdfdgh', NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-11 17:04:42', '2021-07-11 17:04:42');
INSERT INTO `task_mngs` VALUES (10, 'Pastel', 'This project is pastel for @Jeff, @ayk, and @Anttony.', NULL, NULL, '07/31/2021', NULL, '1', NULL, NULL, NULL, NULL, 2500, NULL, NULL, NULL, 2500.00, NULL, NULL, '2', '2021-07-11 17:15:00', '2021-07-11 17:15:00');
INSERT INTO `task_mngs` VALUES (11, 'Abitrage Bot', 'For Gang...', '2', NULL, '07/31/2021', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '2021-07-11 17:26:11', '2021-07-11 17:26:11');
INSERT INTO `task_mngs` VALUES (12, '1111111111', '111111111111111111111', '3', NULL, '07/31/2021', 15.00, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '2021-07-11 17:33:30', '2021-07-11 17:33:30');
INSERT INTO `task_mngs` VALUES (13, 'fffffffffff', 'fffffffffff', '4', NULL, '07/31/2021', 15.00, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '5', '2021-07-11 17:34:55', '2021-07-11 17:34:55');
INSERT INTO `task_mngs` VALUES (14, 'ssssssss', 'ssssssssssss', '3', NULL, '07/31/2021', 3000.00, '1', 0, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 2, '6', '2021-07-11 17:35:36', '2021-07-11 17:35:36');
INSERT INTO `task_mngs` VALUES (15, 'w', NULL, '1', '7/11/2021', '07/31/2021', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '2021-07-11 17:37:28', '2021-07-11 17:37:28');
INSERT INTO `task_mngs` VALUES (16, 'ssssssssssssssssssssss', 'sssssssssssssssss', '2', '7/11/2021', '07/31/2021', 15.00, '2', 0, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, NULL, 2, '6', '2021-07-11 17:37:49', '2021-07-11 17:37:49');
INSERT INTO `task_mngs` VALUES (17, 'sdfdgh', 'ttttttttttttttttttttttttttttttttttt', '3', '7/11/2021', '07/31/2021', 15.00, '2', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '5', '2021-07-11 17:55:53', '2021-07-11 17:55:53');
INSERT INTO `task_mngs` VALUES (18, '33333333335555555555555555', '3335555555555555555555555555555555555', '4', '3/3/2021', '07/31/2021', 3000.00, '1', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 6, '5', '2021-07-11 17:59:08', '2021-07-11 18:00:57');
INSERT INTO `task_mngs` VALUES (19, 'hbcg0323', 'hbcg0323', '2', '8/11/2021', '8/31/2021', 3000.00, '1', 2500, NULL, NULL, NULL, 500, NULL, NULL, NULL, 3000.00, '07/11/2021', 5, '4', '2021-07-11 18:02:10', '2021-07-11 18:27:52');
INSERT INTO `task_mngs` VALUES (20, 'sdf', NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, 35, NULL, 355, NULL, NULL, NULL, 390.00, '07/11/2021', 2, '0', '2021-07-11 18:32:38', '2021-07-11 18:32:38');

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc` varchar(3000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category_id` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `skill` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `role` int(11) NULL DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 101 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'Eric Julian', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'Frontend Developer', 'today.julian.lim@gmail.com', '2021-05-24 12:33:42', '2021-05-24 12:33:42', 1, 'Image31.png');
INSERT INTO `users` VALUES (3, 'Alex Weber', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'Backend Developer', 'web.senior.dev@gmail.com', '2021-05-24 12:43:58', '2021-05-24 12:43:58', 1, 'image.jpg');
INSERT INTO `users` VALUES (4, 'Tsimafei Setchinava', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'CEO', 'tsimafeisetcinava@gmail.com', '2021-05-24 12:53:48', '2021-05-24 12:53:48', 1, 'imgpsh_fullsize_anim (1111).jpg');
INSERT INTO `users` VALUES (5, 'Wang ShiFu', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'Blockchain Developer', 'senior.zsoftware@gmail.com', '2021-05-24 12:52:21', '2021-05-24 12:52:21', 1, 'face.png');
INSERT INTO `users` VALUES (6, 'Michel Fayad', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', 'Mobile App Developer', 'leonmarushko@gmail.com', '2021-05-24 12:29:34', '2021-05-24 12:29:34', 1, 'imgpsh_fullsize_anim.jpg');
INSERT INTO `users` VALUES (100, 'administrator', '$2y$10$dRR8/efS2ydz.CCFq7g4VuQZTvKl.13V8UH.tm1F7QBVVZzuljc7W', NULL, 'admin@gmail.com', '2021-05-26 05:47:36', '2021-05-26 05:47:36', 2, 'face.png');

SET FOREIGN_KEY_CHECKS = 1;
