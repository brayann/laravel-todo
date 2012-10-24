CREATE SCHEMA IF NOT EXISTS `todo_list` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `todo_list` ;

CREATE TABLE `laravel_migrations` (
  `bundle` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`bundle`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `laravel_migrations` VALUES('oneauth', '2012_05_26_151608_create_clients', 1);

CREATE TABLE `oneauth_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `provider` varchar(50) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `access_token` varchar(500) DEFAULT NULL,
  `secret` varchar(500) DEFAULT NULL,
  `refresh_token` varchar(500) DEFAULT NULL,
  `expires` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `oneauth_clients_provider_uid_unique` (`provider`,`uid`),
  KEY `oneauth_clients_access_token_index` (`access_token`),
  KEY `oneauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `oneauth_clients` VALUES(1, 1, 'facebook', '100001445134851', 'AAAHDevA4nSoBAFtYVd44b5jNhoAENT101vYk7hpf4xA3hHFevlMsRvfeDlRDdrAYUqFz82mNY0safyPvpwwxZAWqOR5DAVEijZC6EvsgZDZD', NULL, NULL, NULL, '2012-10-24 00:12:33', '2012-10-24 00:23:22');

CREATE TABLE `todos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `finalizado` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `data` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_todo_users` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

INSERT INTO `todos` VALUES(4, 'Novo todo', '2012-10-23 23:54:58', '2012-10-24 01:54:58', '0000-00-00 00:00:00', 1, '2012-10-22 00:00:00');
INSERT INTO `todos` VALUES(5, 'Outro todo', '2012-10-24 01:50:26', '2012-10-24 01:50:26', NULL, 1, '2012-10-21 01:00:00');

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `avatar` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

ALTER TABLE `todos`
  ADD CONSTRAINT `fk_todo_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;