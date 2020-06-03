CREATE DATABASE IF NOT EXISTS ereporting CHARACTER SET utf8 COLLATE utf8_general_ci;
USE ereporting;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `test` (`id`, `value`) VALUES ('1', 'toto'), ('2', 'tutu');