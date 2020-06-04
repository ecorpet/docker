CREATE DATABASE IF NOT EXISTS `project-test` CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `project-test`;
CREATE TABLE IF NOT EXISTS `_test` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `_test` (`id`, `value`) VALUES ('1', 'test value A'), ('2', 'test value B');