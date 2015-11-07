/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : master

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-11-07 16:16:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_category
-- ----------------------------
DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_category
-- ----------------------------
INSERT INTO `tbl_category` VALUES ('3', 'Apple', '');
INSERT INTO `tbl_category` VALUES ('4', 'Samsung', '');

-- ----------------------------
-- Table structure for tbl_image
-- ----------------------------
DROP TABLE IF EXISTS `tbl_image`;
CREATE TABLE `tbl_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pro_image` (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_image
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_product
-- ----------------------------
DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_product
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------

-- ----------------------------
-- View structure for v_all_info
-- ----------------------------
DROP VIEW IF EXISTS `v_all_info`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_all_info` AS SELECT
tbl_product.id,
tbl_category.`name` AS cat_name,
tbl_image.url,
tbl_product.`name` AS pro_name,
tbl_product.price
FROM
tbl_product
INNER JOIN tbl_image ON tbl_product.id = tbl_image.pro_id
INNER JOIN tbl_category ON tbl_product.cat_id = tbl_category.id ; ;

-- ----------------------------
-- View structure for v_product_info
-- ----------------------------
DROP VIEW IF EXISTS `v_product_info`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_product_info` AS SELECT
tbl_product.id,
tbl_product.`name` AS pro_name,
tbl_product.`status`,
tbl_product.price,
tbl_product.thumbnail,
tbl_category.`name` AS cat_name
FROM
tbl_category
INNER JOIN tbl_product ON tbl_category.id = tbl_product.cat_id ;
