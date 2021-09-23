/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : mycrm

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-09-23 15:36:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tasks`
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `pagetitle` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tasks
-- ----------------------------
INSERT INTO `tasks` VALUES ('1', '1', 'qwe', 'ddddddddd', '2');
INSERT INTO `tasks` VALUES ('2', '1', 'dddddd', 'fffffff', '2');
INSERT INTO `tasks` VALUES ('3', '1', 'aaaa', 'fgfhggh', '1');
INSERT INTO `tasks` VALUES ('4', '1', 'fdggjhjhkj', 'ttttttttttt', '2');
INSERT INTO `tasks` VALUES ('5', '1', 'dg hghgf', 'tttttvjjk', '1');
INSERT INTO `tasks` VALUES ('6', '2', 'testmy', 'qwe TEXT', '1');
INSERT INTO `tasks` VALUES ('7', '2', 'title', 'contenr', '2');
INSERT INTO `tasks` VALUES ('8', '10', 'dssds', 'gfdsgf', '2');
INSERT INTO `tasks` VALUES ('9', '10', 'dssds', 'gfdsgf', '2');
INSERT INTO `tasks` VALUES ('10', '1', 'Главная', '543543543543', '2');
INSERT INTO `tasks` VALUES ('11', '11', 'ytrytr', 'ytrytr', '1');
INSERT INTO `tasks` VALUES ('12', '12', 'qqqqqqqqqqqqqq', 'fdsgfgfd', '1');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sudo` int(1) NOT NULL DEFAULT 0,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`,`sudo`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'vectorserver@mail.ru', '202cb962ac59075b964b07152d234b70', '1', '2831d3697aa062bb84cf1d505bb672fb');
INSERT INTO `users` VALUES ('10', 'qqqqvectorserver', 'qqqqvectorserver@mail.ru', null, '0', null);
INSERT INTO `users` VALUES ('11', 'ytyrty', 'ytyrty@dsds.ru', null, '0', null);
INSERT INTO `users` VALUES ('12', 'ed', 'ed@terem-pro.by', null, '0', null);
