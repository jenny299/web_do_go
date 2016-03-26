/*
Navicat MySQL Data Transfer

Source Server         : Jenny
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : web_do_go

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-03-26 01:56:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for about
-- ----------------------------
DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `about_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of about
-- ----------------------------
INSERT INTO `about` VALUES ('1', 'dsfdsg dsfgt we ery ytryer&nbsp;<br />\r\nsdtg<br />\r\nsdtert', 'huhuhu<br />\r\n<strong><u><em>hahaha</em></u></strong>', '2016-03-12 09:46:01', '2016-03-12 02:46:01');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sanpham` int(11) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `duyet` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('5', '1', 'egdfef', '1', '1', '2016-03-12 11:20:46', '2016-03-12 04:20:46');

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `maunen` varchar(20) NOT NULL,
  `anhnen` varchar(100) NOT NULL,
  `chon` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', '#e80074', 'upload/image/JowW2Uf64PBJHydrangeas.jpg.jpg', '1', 'vohuuloc59@gmail.com', '2016-03-10 11:52:16', '2016-03-10 04:52:16');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `tencty` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `maps_latitude` varchar(255) NOT NULL,
  `maps_longitude` varchar(255) NOT NULL,
  `maps_label` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maps_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('1', 'công ty ABC', '112/7 Tân Thành P15. Q5', '01692773091', '123456789', 'vohuuloc59@gmail.com', '10.7558613', '106.65504629999998', '112 Tân Thành', '113 Tân Thành, phường 15, Quận 5, Hồ Chí Minh, Vietnam', '2016-03-10 16:03:55', '2016-03-10 09:03:55');

-- ----------------------------
-- Table structure for danhmuc_cha
-- ----------------------------
DROP TABLE IF EXISTS `danhmuc_cha`;
CREATE TABLE `danhmuc_cha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cap` int(11) NOT NULL,
  `thutu` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of danhmuc_cha
-- ----------------------------
INSERT INTO `danhmuc_cha` VALUES ('1', 'Trang Chủ', 'Home', '1', '1', '2016-03-26 01:23:21', '2016-03-14 05:57:27');
INSERT INTO `danhmuc_cha` VALUES ('2', 'Giới Thiệu', 'About Us', '1', '2', '2016-03-26 01:23:00', '2016-03-14 05:58:04');
INSERT INTO `danhmuc_cha` VALUES ('3', 'Dịch Vụ', 'Services', '1', '3', '2016-03-26 01:23:26', '2016-03-14 06:01:46');
INSERT INTO `danhmuc_cha` VALUES ('4', 'Sản Phẩm', 'Products', '1', '4', '2016-03-26 01:23:42', '0000-00-00 00:00:00');
INSERT INTO `danhmuc_cha` VALUES ('5', 'Khuyến mãi', 'Sale Off', '1', '5', '2016-03-26 01:23:43', '0000-00-00 00:00:00');
INSERT INTO `danhmuc_cha` VALUES ('6', 'Liên Hệ', 'Contact', '1', '6', '2016-03-26 01:23:46', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for danhmuc_con1
-- ----------------------------
DROP TABLE IF EXISTS `danhmuc_con1`;
CREATE TABLE `danhmuc_con1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_dmcha` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cap` int(11) NOT NULL,
  `thutu` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of danhmuc_con1
-- ----------------------------
INSERT INTO `danhmuc_con1` VALUES ('1', '1', 'A1.1', 'A1.1', '2', '1', '2016-03-25 23:29:54', '2016-03-14 05:59:39');
INSERT INTO `danhmuc_con1` VALUES ('2', '1', 'A1.2', 'A1.2', '2', '2', '2016-03-25 23:30:07', '2016-03-14 06:16:56');
INSERT INTO `danhmuc_con1` VALUES ('3', '2', 'B1.1', 'B1.1', '2', '1', '2016-03-25 23:30:24', '0000-00-00 00:00:00');
INSERT INTO `danhmuc_con1` VALUES ('4', '2', 'B1.2', 'B1.2', '2', '2', '2016-03-25 23:30:36', '0000-00-00 00:00:00');
INSERT INTO `danhmuc_con1` VALUES ('5', '3', 'C1.1', 'C1.1', '2', '1', '2016-03-25 23:30:49', '0000-00-00 00:00:00');
INSERT INTO `danhmuc_con1` VALUES ('6', '3', 'C1.2', 'C1.2', '2', '2', '2016-03-25 23:31:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for danhmuc_con2
-- ----------------------------
DROP TABLE IF EXISTS `danhmuc_con2`;
CREATE TABLE `danhmuc_con2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_dmcon1` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cap` int(11) NOT NULL,
  `thutu` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of danhmuc_con2
-- ----------------------------
INSERT INTO `danhmuc_con2` VALUES ('1', '1', 'A1.1.1', 'A1.1.1', '3', '1', '2016-03-25 23:31:43', '2016-03-14 06:17:10');
INSERT INTO `danhmuc_con2` VALUES ('2', '1', 'A.1.1.2', 'A1.1.2', '3', '2', '2016-03-25 23:32:00', '0000-00-00 00:00:00');
INSERT INTO `danhmuc_con2` VALUES ('3', '2', 'A1.2.1', 'A1.2.1', '3', '1', '2016-03-25 23:32:18', '0000-00-00 00:00:00');
INSERT INTO `danhmuc_con2` VALUES ('4', '2', 'A1.2.2', 'A1.2.2', '3', '2', '2016-03-25 23:32:39', '0000-00-00 00:00:00');
INSERT INTO `danhmuc_con2` VALUES ('5', '3', 'B.1.1.1', 'B1.1.1', '3', '1', '2016-03-25 23:32:56', '0000-00-00 00:00:00');
INSERT INTO `danhmuc_con2` VALUES ('6', '3', 'B.1.1.2', 'B1.1.2', '3', '2', '2016-03-25 23:33:12', '0000-00-00 00:00:00');
INSERT INTO `danhmuc_con2` VALUES ('7', '4', 'B.1.2.1', 'B1.2.1', '3', '1', '2016-03-25 23:34:17', '0000-00-00 00:00:00');
INSERT INTO `danhmuc_con2` VALUES ('8', '0', 'B.1.2.2', 'B.1.2.2', '3', '2', '2016-03-25 23:34:32', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for danhmuc_con3
-- ----------------------------
DROP TABLE IF EXISTS `danhmuc_con3`;
CREATE TABLE `danhmuc_con3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_dmcon2` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cap` int(11) NOT NULL,
  `thutu` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of danhmuc_con3
-- ----------------------------
INSERT INTO `danhmuc_con3` VALUES ('1', '1', 'A 1 CAP 4 1', 'A CAP 4 1', '4', '1', '2016-03-25 23:35:44', '2016-03-14 06:21:26');
INSERT INTO `danhmuc_con3` VALUES ('2', '1', 'A 1 CAP 4 2', 'A CAP 4 2', '4', '2', '2016-03-25 23:35:51', '0000-00-00 00:00:00');
INSERT INTO `danhmuc_con3` VALUES ('3', '2', 'A 2 CAP 4 1', 'A 2 CAP 4 1', '4', '1', '2016-03-25 23:36:11', '0000-00-00 00:00:00');
INSERT INTO `danhmuc_con3` VALUES ('4', '3', 'B 1 CAP 41', 'B 1 CAP 4 1', '4', '1', '2016-03-25 23:36:28', '0000-00-00 00:00:00');
INSERT INTO `danhmuc_con3` VALUES ('5', '3', 'B1 CAP 4 2', 'B 1 CAP 4 2', '4', '2', '2016-03-25 23:36:43', '0000-00-00 00:00:00');
INSERT INTO `danhmuc_con3` VALUES ('6', '3', 'B1 CAP 4 3', 'B1 CAP 4 3', '4', '3', '2016-03-25 23:37:02', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for flash
-- ----------------------------
DROP TABLE IF EXISTS `flash`;
CREATE TABLE `flash` (
  `id` int(11) NOT NULL,
  `flash` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of flash
-- ----------------------------
INSERT INTO `flash` VALUES ('1', 'upload/image/thuattoan.pdf', '2016-03-14 16:51:44', '2016-03-14 09:51:44');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'Trang Chủ', 'Home', '0000-00-00 00:00:00', '2016-03-12 03:04:35');
INSERT INTO `menu` VALUES ('2', 'Giới Thiệu', 'About Us', '0000-00-00 00:00:00', '2016-03-12 03:04:45');
INSERT INTO `menu` VALUES ('3', 'Dịch Vụ', 'Services', '0000-00-00 00:00:00', '2016-03-12 03:04:52');
INSERT INTO `menu` VALUES ('4', 'Sản Phẩm', 'Products', '0000-00-00 00:00:00', '2016-03-12 03:05:01');
INSERT INTO `menu` VALUES ('5', 'Khuyến mãi', 'Sale Off', '0000-00-00 00:00:00', '2016-03-12 03:05:09');
INSERT INTO `menu` VALUES ('6', 'Liên Hệ', 'Contact', '0000-00-00 00:00:00', '2016-03-12 03:05:18');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cha` int(11) NOT NULL,
  `id_con1` int(11) NOT NULL,
  `id_con2` int(11) NOT NULL,
  `id_con3` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thongso` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thongso_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('2', '0', '1', '0', '0', 'san pham A1.2', 'san pham A1.2', '123000', 'upload/image/vxZPULaDsQ93Jellyfish.jpg.jpg', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', '2016-03-14 06:00:12', '2016-03-14 06:00:12');
INSERT INTO `product` VALUES ('3', '0', '0', '0', '1', 'sab pham Btt', 'sab pham Btt', '1335666', 'upload/image/VSj4jCl3ysokLighthouse.jpg.jpg', 'sab pham B tt', 'sab pham Btt', 'sab pham B', 'sab pham Bttt', '2016-03-14 13:56:36', '2016-03-14 06:56:36');

-- ----------------------------
-- Table structure for profile
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of profile
-- ----------------------------
INSERT INTO `profile` VALUES ('1', 'Long', 'uploading...', 'upload/image/logo.jpg', '1', '0000-00-00 00:00:00', '2015-02-26 08:39:24');

-- ----------------------------
-- Table structure for sale
-- ----------------------------
DROP TABLE IF EXISTS `sale`;
CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sale
-- ----------------------------
INSERT INTO `sale` VALUES ('1', 'dsgfvd setgerst wert wert<br />\r\nfgh<br />\r\nhaha tui hiểu rồi nha', 'ashdfj<br />\r\nsdf<br />\r\nsadf<br />\r\n123', '2016-03-12 09:58:06', '2016-03-12 02:58:06');

-- ----------------------------
-- Table structure for service
-- ----------------------------
DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of service
-- ----------------------------
INSERT INTO `service` VALUES ('1', '<span style=\"color:#FF0000\">sdf sdtsg dgfdg&nbsp;</span><br />\r\n<strong>hgj</strong><br />\r\n<em>rtrtttt</em>', 'esrtf sdt<br />\r\nfgyh', '2016-03-12 09:52:11', '2016-03-12 02:52:11');

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of slider
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', 'ADMIN', 'ADMIN', 'admin', '$2y$10$D0EOsLRmXR3V7cc.NsFNYO98aHMfUS9n0z9iw1DxYcK73sP1WnuiC', 'l2qlfL0FxVcALUYU41V37qU0av5Wm51352QyuznsWT947l242XVTJK1xGEbQ', '1', '2015-03-20 01:37:19', '2016-03-10 04:21:20');
