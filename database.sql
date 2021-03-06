CREATE DATABASE IF NOT EXISTS `miniphp`;

USE `miniphp`;

CREATE TABLE IF NOT EXISTS `users` (
	`user_id`       INT(11)      NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`user_created`  DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`user_updated`  DATETIME     NOT NULL ON UPDATE CURRENT_TIMESTAMP,
	`user_name`     VARCHAR(255) NOT NULL,
	`user_email`    VARCHAR(255) NOT NULL,
	`user_password` VARCHAR(255) NOT NULL,
	`user_role`     VARCHAR(20)  NOT NULL
) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE IF NOT EXISTS `posts` (
	`post_id`      INT(11)      NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`post_created` DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`post_updated` DATETIME     NOT NULL ON UPDATE CURRENT_TIMESTAMP,
	`post_title`   VARCHAR(255) NOT NULL,
	`post_author`  INT(11)      NOT NULL,
	`post_content` TEXT         NOT NULL,
	`post_cover`   VARCHAR(255) NOT NULL
) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;


