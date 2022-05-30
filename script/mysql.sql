CREATE TABLE `nhinguyenv3`.`users` ( `id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `user_info` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `firstname` varchar(255) NOT NULL,
 `lastname` varchar(255) NOT NULL,
 `address` varchar(255) NOT NULL,
 `phone_number` varchar(255) NOT NULL,
 `age` int(11) NOT NULL,
 `sex` tinyint(1) NOT NULL DEFAULT 0,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `logs` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `time_triggerred` timestamp NOT NULL DEFAULT current_timestamp(),
 `action` varchar(255) NOT NULL,
 `user_id` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `fk_from_logs_to_users` (`user_id`),
 CONSTRAINT `fk_from_logs_to_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `nhinguyenv3`.`user_balance` ( `id` INT NOT NULL AUTO_INCREMENT , `token` INT NOT NULL , `credit` DOUBLE NOT NULL , `user_id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;