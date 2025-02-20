/*
Navicat MySQL Data Transfer

Source Server         : PHP
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : mycontactplusdb

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2013-01-04 23:56:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `contacts`
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text,
  `contact_group` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES ('1', 'Asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', null, 'active', '2');
INSERT INTO `contacts` VALUES ('2', 'Saud', 'synergy', 'web developer', '1234569', '32147524', 'saud@hotmail.com', 'Garden Est', null, 'active', '2');
INSERT INTO `contacts` VALUES ('3', 'Shehyaar', 'InfoTech', 'Web Designer', '1234569', '12', 'shehyar@hotmail.com', 'Garden', null, 'active', '1');
INSERT INTO `contacts` VALUES ('4', '1234', '3214123', '4123', '1234123', '41234', '41234', '1234', null, 'active', '2');

-- ----------------------------
-- Table structure for `members`
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES ('1', 'Ayaz Ahmed', 'Pakistan', 'Karachi', 'ayzeetech@gmail.com', 'ayzeetech', 'Pakistan');
INSERT INTO `members` VALUES ('2', 'Kundan', 'Pakistan', 'Karachi', 'kundan@hotmail.com', 'kundan', 'Pakistan');
