/*
Navicat MySQL Data Transfer

Source Server         : Jenny
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : web_do_go

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-04-08 21:43:48
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
INSERT INTO `about` VALUES ('1', '<p style=\"line-height: 20.8px;\">Từ xưa con người đ&atilde; biết sử dụng gỗ để l&agrave;m c&aacute;c sản phẩm trang tr&iacute; nội, ngoại thất do vậy m&agrave; gỗ đ&atilde; trở n&ecirc;n th&ocirc;ng dụng v&agrave; th&acirc;n thiết với con người. Gỗ được nhiều người lựa chọn kh&ocirc;ng chỉ bởi t&iacute;nh bền, đẹp, dễ sử dụng m&agrave; c&ograve;n v&igrave; chất lượng v&agrave; gi&aacute; cả rất ph&ugrave; hợp.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nHiểu được những ưu thế, những tiện &iacute;ch m&agrave; gỗ mang lại cho con người, bằng tất cả sự tận t&acirc;m v&agrave; khả năng chuy&ecirc;n nghiệp của m&igrave;nh CTY CP KI&Ecirc;N LINH VIỆT NAM đ&atilde; được th&agrave;nh lập v&agrave; ph&aacute;t triển trong phương hướng hoạt động ch&uacute;ng t&ocirc;i kh&ocirc;ng ngừng học hỏi kinh nghiệm, nắm bắt nhu cầu của thị trường để mang đến những sản phẩm tốt nhất cho người ti&ecirc;u d&ugrave;ng.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nKhi lựa chọn đến Ki&ecirc;n Linh xin qu&yacute; kh&aacute;ch h&agrave;ng y&ecirc;n t&acirc;m v&igrave; ch&uacute;ng t&ocirc;i lu&ocirc;n cung cấp những sản phẩm đảm bảo chất lượng v&agrave; uy t&iacute;n với kh&aacute;ch h&agrave;ng; với sự đa dạng về mẫu m&atilde;, chủng loại, kiểu d&aacute;ng phong ph&uacute; được sản xuất, thiết kế từ nguy&ecirc;n vật liệu cao cấp, ngoại nhập đặc biệt c&aacute;c sản phẩm của Ki&ecirc;n Linh sẽ lu&ocirc;n đảm bảo ph&ugrave; hợp cho mọi loại h&igrave;nh kiến tr&uacute;c từ cổ điển đến hiện đại.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nTrong những năm qua c&aacute;c sản phẩm do Ki&ecirc;n Linh cung cấp đ&atilde; được thi c&ocirc;ng, lắp đặt trong nhiều c&ocirc;ng tr&igrave;nh trang tr&iacute; nội thất cho c&aacute;c chung cư, cao ốc văn ph&ograve;ng, kh&aacute;ch sạn, showroom, biệt thự&hellip; với chất lượng kỹ thuật v&agrave; tr&igrave;nh độ thẩm mỹ cao mang t&iacute;nh chuy&ecirc;n nghiệp, hiện đại v&agrave; hiện tại những c&ocirc;ng tr&igrave;nh đ&oacute; đ&atilde; v&agrave; đang mang lại rất nhiều tiện &iacute;ch cho con người. Từ những th&agrave;nh c&ocirc;ng đ&oacute; Ki&ecirc;n Linh nhận thấy rằng phải lu&ocirc;n đổi mới phương thức phục vụ, nắm bắt xu hướng ph&aacute;t triển của x&atilde; hội để đề ra những ch&iacute;nh s&aacute;ch ph&aacute;t triển ti&ecirc;n phong, vượt trội tất cả nhằm mục ti&ecirc;u cuối c&ugrave;ng l&agrave; để phục vụ qu&yacute; kh&aacute;ch h&agrave;ng ng&agrave;y một tốt hơn.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nH&atilde;y để Ki&ecirc;n Linh mang tới vẻ đẹp sang trọng, lịch sự v&agrave; thật sự tiện nghi cho ng&ocirc;i nh&agrave; của qu&yacute; kh&aacute;ch.</p>\r\n', '<p style=\"line-height: 20.8px;\">Từ xưa con người đ&atilde; biết sử dụng gỗ để l&agrave;m c&aacute;c sản phẩm trang tr&iacute; nội, ngoại thất do vậy m&agrave; gỗ đ&atilde; trở n&ecirc;n th&ocirc;ng dụng v&agrave; th&acirc;n thiết với con người. Gỗ được nhiều người lựa chọn kh&ocirc;ng chỉ bởi t&iacute;nh bền, đẹp, dễ sử dụng m&agrave; c&ograve;n v&igrave; chất lượng v&agrave; gi&aacute; cả rất ph&ugrave; hợp.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nHiểu được những ưu thế, những tiện &iacute;ch m&agrave; gỗ mang lại cho con người, bằng tất cả sự tận t&acirc;m v&agrave; khả năng chuy&ecirc;n nghiệp của m&igrave;nh CTY CP KI&Ecirc;N LINH VIỆT NAM đ&atilde; được th&agrave;nh lập v&agrave; ph&aacute;t triển trong phương hướng hoạt động ch&uacute;ng t&ocirc;i kh&ocirc;ng ngừng học hỏi kinh nghiệm, nắm bắt nhu cầu của thị trường để mang đến những sản phẩm tốt nhất cho người ti&ecirc;u d&ugrave;ng.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nKhi lựa chọn đến Ki&ecirc;n Linh xin qu&yacute; kh&aacute;ch h&agrave;ng y&ecirc;n t&acirc;m v&igrave; ch&uacute;ng t&ocirc;i lu&ocirc;n cung cấp những sản phẩm đảm bảo chất lượng v&agrave; uy t&iacute;n với kh&aacute;ch h&agrave;ng; với sự đa dạng về mẫu m&atilde;, chủng loại, kiểu d&aacute;ng phong ph&uacute; được sản xuất, thiết kế từ nguy&ecirc;n vật liệu cao cấp, ngoại nhập đặc biệt c&aacute;c sản phẩm của Ki&ecirc;n Linh sẽ lu&ocirc;n đảm bảo ph&ugrave; hợp cho mọi loại h&igrave;nh kiến tr&uacute;c từ cổ điển đến hiện đại.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nTrong những năm qua c&aacute;c sản phẩm do Ki&ecirc;n Linh cung cấp đ&atilde; được thi c&ocirc;ng, lắp đặt trong nhiều c&ocirc;ng tr&igrave;nh trang tr&iacute; nội thất cho c&aacute;c chung cư, cao ốc văn ph&ograve;ng, kh&aacute;ch sạn, showroom, biệt thự&hellip; với chất lượng kỹ thuật v&agrave; tr&igrave;nh độ thẩm mỹ cao mang t&iacute;nh chuy&ecirc;n nghiệp, hiện đại v&agrave; hiện tại những c&ocirc;ng tr&igrave;nh đ&oacute; đ&atilde; v&agrave; đang mang lại rất nhiều tiện &iacute;ch cho con người. Từ những th&agrave;nh c&ocirc;ng đ&oacute; Ki&ecirc;n Linh nhận thấy rằng phải lu&ocirc;n đổi mới phương thức phục vụ, nắm bắt xu hướng ph&aacute;t triển của x&atilde; hội để đề ra những ch&iacute;nh s&aacute;ch ph&aacute;t triển ti&ecirc;n phong, vượt trội tất cả nhằm mục ti&ecirc;u cuối c&ugrave;ng l&agrave; để phục vụ qu&yacute; kh&aacute;ch h&agrave;ng ng&agrave;y một tốt hơn.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nH&atilde;y để Ki&ecirc;n Linh mang tới vẻ đẹp sang trọng, lịch sự v&agrave; thật sự tiện nghi cho ng&ocirc;i nh&agrave; của qu&yacute; kh&aacute;ch.</p>\r\n', '2016-03-26 11:49:37', '2016-03-12 02:46:01');

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
  `menu` varchar(20) NOT NULL,
  `content` varchar(20) NOT NULL,
  `footer_top` varchar(20) NOT NULL,
  `footer_bottom` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', '#e80074', 'img/textures/wood-1.jpg', '1', '#795433', '#f2f2f2', '#795433', '\r\n#493b2e', 'vohuuloc59@gmail.com', '2016-04-08 21:29:41', '2016-04-08 14:28:59');

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
INSERT INTO `contact` VALUES ('1', 'CTY CP KIÊN LINH VIỆT NAM', '1/10/44/4 Duong 53-KP8 - P.Hiep Binh Chanh - Q.Thu Duc', '(08)37252052 - 0908113114', '123456789', 'info@kienlinhvietnam.com', '10.7558613', '106.65504629999998', '112 Tân Thành', '113 Tân Thành, phường 15, Quận 5, Hồ Chí Minh, Vietnam', '2016-03-26 12:50:26', '2016-03-10 09:03:55');
INSERT INTO `contact` VALUES ('2', 'KIEN LINH VIET NAM COMPANY', '1/10/44/4 53-KP8 Street - Ward Hiep Binh Chanh - District Thu Duc', '(08)37252052 - 0908113114', '123456789', 'info@kienlinhvietnam.com', '10.7558613', '106.65504629999998', '112 Tân Thành', '113 Tân Thành, phường 15, Quận 5, Hồ Chí Minh, Vietnam', '2016-03-26 12:56:58', '2016-03-10 09:03:55');

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
INSERT INTO `danhmuc_con1` VALUES ('1', '1', 'A1.1', 'A1.1', '2', '1', '2016-03-26 09:53:35', '2016-03-14 05:59:39');
INSERT INTO `danhmuc_con1` VALUES ('2', '1', 'A1.2', 'A1.2', '2', '2', '2016-03-26 09:53:36', '2016-03-14 06:16:56');
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
  `position_banner` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of flash
-- ----------------------------
INSERT INTO `flash` VALUES ('1', 'upload/image/960_300_top.swf', '2016-04-08 19:13:50', '2016-03-14 09:51:44', 'Top');
INSERT INTO `flash` VALUES ('2', 'upload/image/slider_img.swf', '2016-04-08 19:13:56', '0000-00-00 00:00:00', 'Home');

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
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'Trang Chủ', 'Home', '0000-00-00 00:00:00', '2016-03-12 03:04:35', 'trang-chu', '1');
INSERT INTO `menu` VALUES ('2', 'Giới Thiệu', 'About Us', '0000-00-00 00:00:00', '2016-03-12 03:04:45', 'gioi-thieu', '1');
INSERT INTO `menu` VALUES ('3', 'Dịch Vụ', 'Services', '0000-00-00 00:00:00', '2016-03-12 03:04:52', 'dich-vu', '1');
INSERT INTO `menu` VALUES ('4', 'Sản Phẩm', 'Products', '0000-00-00 00:00:00', '2016-03-12 03:05:01', 'san-pham', '1');
INSERT INTO `menu` VALUES ('5', 'Khuyến mãi', 'Sale Off', '0000-00-00 00:00:00', '2016-03-12 03:05:09', 'khuyen-mai', '0');
INSERT INTO `menu` VALUES ('6', 'Liên Hệ', 'Contact', '0000-00-00 00:00:00', '2016-03-12 03:05:18', 'lien-he', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('2', '0', '1', '0', '0', 'san pham A1.2', 'san pham A1.2 EN EN END NENENENNEENENN NENEN', '123000', 'upload/image/6D1C8YQHh7L1001.png.jpg', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', '2016-03-27 14:30:46', '2016-03-14 06:00:12');
INSERT INTO `product` VALUES ('3', '0', '0', '1', '1', 'sab pham Btt VN VN', 'sab pham Btt EN  EN', '1335666', 'upload/image/qj2PDRWzGK0i004.png.jpg', 'sab pham B tt', 'sab pham Btt', 'sab pham B', 'sab pham Bttt', '2016-03-28 21:00:04', '2016-03-14 06:56:36');
INSERT INTO `product` VALUES ('4', '0', '0', '1', '1', 'sab pham Btt VN VN', 'sab pham Btt EN  EN', '1335666', 'upload/image/qj2PDRWzGK0i004.png.jpg', 'sab pham B tt', 'sab pham Btt', 'sab pham B', 'sab pham Bttt', '2016-03-28 20:59:51', '2016-03-14 06:56:36');
INSERT INTO `product` VALUES ('5', '0', '0', '0', '1', 'sab pham Btt VN VN', 'sab pham Btt EN  EN', '1335666', 'upload/image/qj2PDRWzGK0i004.png.jpg', 'sab pham B tt', 'sab pham Btt', 'sab pham B', 'sab pham Bttt', '2016-03-27 14:43:03', '2016-03-14 06:56:36');
INSERT INTO `product` VALUES ('6', '0', '1', '0', '0', 'san pham A1.2 VN VN', 'san pham A1.2 EN  EN', '123000', 'upload/image/6D1C8YQHh7L1001.png.jpg', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', '2016-03-27 14:43:05', '2016-03-14 06:00:12');
INSERT INTO `product` VALUES ('7', '0', '1', '0', '0', 'san pham A1.2 VN VN', 'san pham A1.2 EN  EN', '123000', 'upload/image/6D1C8YQHh7L1001.png.jpg', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', '2016-03-27 14:43:06', '2016-03-14 06:00:12');
INSERT INTO `product` VALUES ('8', '0', '2', '0', '0', 'san pham A1.2 VN VN', 'san pham A1.2 EN  EN', '123000', 'upload/image/6D1C8YQHh7L1001.png.jpg', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', '2016-03-28 20:58:52', '2016-03-14 06:00:12');
INSERT INTO `product` VALUES ('9', '1', '0', '0', '0', 'san pham A1.2 VN VN', 'san pham A1.2 EN  EN', '123000', 'upload/image/6D1C8YQHh7L1001.png.jpg', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', '2016-03-28 21:34:46', '2016-03-14 06:00:12');
INSERT INTO `product` VALUES ('10', '1', '0', '0', '0', 'van go tu nhien', 'van go tu nhien en', '123000', 'upload/image/6D1C8YQHh7L1001.png.jpg', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', '2016-03-28 21:34:47', '2016-03-14 06:00:12');
INSERT INTO `product` VALUES ('11', '2', '0', '0', '0', 'van go nhat ban', 'van go nhat ban en', '123000', 'upload/image/6D1C8YQHh7L1001.png.jpg', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', '2016-03-28 21:34:56', '2016-03-14 06:00:12');
INSERT INTO `product` VALUES ('12', '3', '0', '0', '0', 'san pham A1.2 VN VN', 'san pham A1.2 EN  EN', '123000', 'upload/image/6D1C8YQHh7L1001.png.jpg', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', '2016-03-28 21:35:08', '2016-03-14 06:00:12');
INSERT INTO `product` VALUES ('13', '0', '2', '0', '0', 'san pham A1.2 V', 'san pham A1.2 E TEST', '123000', 'upload/image/6D1C8YQHh7L1001.png.jpg', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', '2016-03-28 20:58:54', '2016-03-14 06:00:12');
INSERT INTO `product` VALUES ('14', '0', '1', '0', '0', 'san pham A1.2 V', 'san pham A1.2 E TEST', '123000', 'upload/image/6D1C8YQHh7L1001.png.jpg', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', '2016-03-27 18:12:26', '2016-03-14 06:00:12');
INSERT INTO `product` VALUES ('15', '0', '1', '0', '0', 'san pham A1.2 VN VN', 'san pham A1.2 EN  EN', '123000', 'upload/image/6D1C8YQHh7L1001.png.jpg', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', '2016-03-27 14:43:06', '2016-03-14 06:00:12');
INSERT INTO `product` VALUES ('16', '0', '0', '1', '0', 'san pham A1.2 VN VN', 'san pham A1.2 EN  EN', '123000', 'upload/image/6D1C8YQHh7L1001.png.jpg', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', '2016-03-28 20:59:43', '2016-03-14 06:00:12');
INSERT INTO `product` VALUES ('17', '0', '1', '0', '0', 'san pham A1.2 VN VN', 'san pham A1.2 EN  EN', '123000', 'upload/image/6D1C8YQHh7L1001.png.jpg', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', '2016-03-27 14:43:06', '2016-03-14 06:00:12');
INSERT INTO `product` VALUES ('18', '0', '1', '0', '0', 'san pham A1.2 VN VN', 'san pham A1.2 EN  EN', '123000', 'upload/image/6D1C8YQHh7L1001.png.jpg', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', 'san pham A1.2', '2016-03-27 14:43:06', '2016-03-14 06:00:12');

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
INSERT INTO `service` VALUES ('1', '<p style=\"line-height: 20.8px;\">Từ xưa con người đ&atilde; biết sử dụng gỗ để l&agrave;m c&aacute;c sản phẩm trang tr&iacute; nội, ngoại thất do vậy m&agrave; gỗ đ&atilde; trở n&ecirc;n th&ocirc;ng dụng v&agrave; th&acirc;n thiết với con người. Gỗ được nhiều người lựa chọn kh&ocirc;ng chỉ bởi t&iacute;nh bền, đẹp, dễ sử dụng m&agrave; c&ograve;n v&igrave; chất lượng v&agrave; gi&aacute; cả rất ph&ugrave; hợp.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nHiểu được những ưu thế, những tiện &iacute;ch m&agrave; gỗ mang lại cho con người, bằng tất cả sự tận t&acirc;m v&agrave; khả năng chuy&ecirc;n nghiệp của m&igrave;nh CTY CP KI&Ecirc;N LINH VIỆT NAM đ&atilde; được th&agrave;nh lập v&agrave; ph&aacute;t triển trong phương hướng hoạt động ch&uacute;ng t&ocirc;i kh&ocirc;ng ngừng học hỏi kinh nghiệm, nắm bắt nhu cầu của thị trường để mang đến những sản phẩm tốt nhất cho người ti&ecirc;u d&ugrave;ng.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nKhi lựa chọn đến Ki&ecirc;n Linh xin qu&yacute; kh&aacute;ch h&agrave;ng y&ecirc;n t&acirc;m v&igrave; ch&uacute;ng t&ocirc;i lu&ocirc;n cung cấp những sản phẩm đảm bảo chất lượng v&agrave; uy t&iacute;n với kh&aacute;ch h&agrave;ng; với sự đa dạng về mẫu m&atilde;, chủng loại, kiểu d&aacute;ng phong ph&uacute; được sản xuất, thiết kế từ nguy&ecirc;n vật liệu cao cấp, ngoại nhập đặc biệt c&aacute;c sản phẩm của Ki&ecirc;n Linh sẽ lu&ocirc;n đảm bảo ph&ugrave; hợp cho mọi loại h&igrave;nh kiến tr&uacute;c từ cổ điển đến hiện đại.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nTrong những năm qua c&aacute;c sản phẩm do Ki&ecirc;n Linh cung cấp đ&atilde; được thi c&ocirc;ng, lắp đặt trong nhiều c&ocirc;ng tr&igrave;nh trang tr&iacute; nội thất cho c&aacute;c chung cư, cao ốc văn ph&ograve;ng, kh&aacute;ch sạn, showroom, biệt thự&hellip; với chất lượng kỹ thuật v&agrave; tr&igrave;nh độ thẩm mỹ cao mang t&iacute;nh chuy&ecirc;n nghiệp, hiện đại v&agrave; hiện tại những c&ocirc;ng tr&igrave;nh đ&oacute; đ&atilde; v&agrave; đang mang lại rất nhiều tiện &iacute;ch cho con người. Từ những th&agrave;nh c&ocirc;ng đ&oacute; Ki&ecirc;n Linh nhận thấy rằng phải lu&ocirc;n đổi mới phương thức phục vụ, nắm bắt xu hướng ph&aacute;t triển của x&atilde; hội để đề ra những ch&iacute;nh s&aacute;ch ph&aacute;t triển ti&ecirc;n phong, vượt trội tất cả nhằm mục ti&ecirc;u cuối c&ugrave;ng l&agrave; để phục vụ qu&yacute; kh&aacute;ch h&agrave;ng ng&agrave;y một tốt hơn.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nH&atilde;y để Ki&ecirc;n Linh mang tới vẻ đẹp sang trọng, lịch sự v&agrave; thật sự tiện nghi cho ng&ocirc;i nh&agrave; của qu&yacute; kh&aacute;ch.</p>\r\n', '<p style=\"line-height: 20.8px;\">Từ xưa con người đ&atilde; biết sử dụng gỗ để l&agrave;m c&aacute;c sản phẩm trang tr&iacute; nội, ngoại thất do vậy m&agrave; gỗ đ&atilde; trở n&ecirc;n th&ocirc;ng dụng v&agrave; th&acirc;n thiết với con người. Gỗ được nhiều người lựa chọn kh&ocirc;ng chỉ bởi t&iacute;nh bền, đẹp, dễ sử dụng m&agrave; c&ograve;n v&igrave; chất lượng v&agrave; gi&aacute; cả rất ph&ugrave; hợp.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nHiểu được những ưu thế, những tiện &iacute;ch m&agrave; gỗ mang lại cho con người, bằng tất cả sự tận t&acirc;m v&agrave; khả năng chuy&ecirc;n nghiệp của m&igrave;nh CTY CP KI&Ecirc;N LINH VIỆT NAM đ&atilde; được th&agrave;nh lập v&agrave; ph&aacute;t triển trong phương hướng hoạt động ch&uacute;ng t&ocirc;i kh&ocirc;ng ngừng học hỏi kinh nghiệm, nắm bắt nhu cầu của thị trường để mang đến những sản phẩm tốt nhất cho người ti&ecirc;u d&ugrave;ng.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nKhi lựa chọn đến Ki&ecirc;n Linh xin qu&yacute; kh&aacute;ch h&agrave;ng y&ecirc;n t&acirc;m v&igrave; ch&uacute;ng t&ocirc;i lu&ocirc;n cung cấp những sản phẩm đảm bảo chất lượng v&agrave; uy t&iacute;n với kh&aacute;ch h&agrave;ng; với sự đa dạng về mẫu m&atilde;, chủng loại, kiểu d&aacute;ng phong ph&uacute; được sản xuất, thiết kế từ nguy&ecirc;n vật liệu cao cấp, ngoại nhập đặc biệt c&aacute;c sản phẩm của Ki&ecirc;n Linh sẽ lu&ocirc;n đảm bảo ph&ugrave; hợp cho mọi loại h&igrave;nh kiến tr&uacute;c từ cổ điển đến hiện đại.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nTrong những năm qua c&aacute;c sản phẩm do Ki&ecirc;n Linh cung cấp đ&atilde; được thi c&ocirc;ng, lắp đặt trong nhiều c&ocirc;ng tr&igrave;nh trang tr&iacute; nội thất cho c&aacute;c chung cư, cao ốc văn ph&ograve;ng, kh&aacute;ch sạn, showroom, biệt thự&hellip; với chất lượng kỹ thuật v&agrave; tr&igrave;nh độ thẩm mỹ cao mang t&iacute;nh chuy&ecirc;n nghiệp, hiện đại v&agrave; hiện tại những c&ocirc;ng tr&igrave;nh đ&oacute; đ&atilde; v&agrave; đang mang lại rất nhiều tiện &iacute;ch cho con người. Từ những th&agrave;nh c&ocirc;ng đ&oacute; Ki&ecirc;n Linh nhận thấy rằng phải lu&ocirc;n đổi mới phương thức phục vụ, nắm bắt xu hướng ph&aacute;t triển của x&atilde; hội để đề ra những ch&iacute;nh s&aacute;ch ph&aacute;t triển ti&ecirc;n phong, vượt trội tất cả nhằm mục ti&ecirc;u cuối c&ugrave;ng l&agrave; để phục vụ qu&yacute; kh&aacute;ch h&agrave;ng ng&agrave;y một tốt hơn.&nbsp;</p>\r\n\r\n<p style=\"line-height: 20.8px;\"><br />\r\nH&atilde;y để Ki&ecirc;n Linh mang tới vẻ đẹp sang trọng, lịch sự v&agrave; thật sự tiện nghi cho ng&ocirc;i nh&agrave; của qu&yacute; kh&aacute;ch.</p>\r\n', '2016-03-26 11:58:14', '2016-03-12 02:52:11');

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
