/*
Navicat MySQL Data Transfer

Source Server         : wamp
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : dh

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-12-27 15:58:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for daohang
-- ----------------------------
DROP TABLE IF EXISTS `daohang`;
CREATE TABLE `daohang` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of daohang
-- ----------------------------
INSERT INTO `daohang` VALUES ('2', '谷歌', 'http://www.google.com');
INSERT INTO `daohang` VALUES ('3', '百度', 'http://www.baidu.com');
