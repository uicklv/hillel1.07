CREATE TABLE IF NOT EXISTS `users` (
                                       `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
                                       `name` CHAR(255),
    `email` CHAR(255) UNIQUE,
    `password` CHAR(255),
    `gender` ENUM('male', 'female', 'undefined') DEFAULT 'undefined',
    `age` INT UNSIGNED DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `deleted_at` TIMESTAMP DEFAULT NULL
    ) ENGINE InnoDB charset utf8;


INSERT INTO `users`(`name`, `email`, `password`, `age`) VALUES ('Kate', 'kate@gmail.com', 'password', 30)

    INSERT INTO `users`(`name`, `email`, `password`, `age`) VALUES ('Mike', 'mike@gmail.com', 'password', 25), ('Jack', 'jack@gmail.com', 'password', 35)

SELECT * FROM `users`

SELECT `id`, `name`, `email` FROM `users`

SELECT `id`, `name`, `email` FROM `users` WHERE `id` = 3
SELECT `id`, `name`, `email` FROM `users` WHERE `id` != 3
SELECT `id`, `name`, `email` FROM `users` WHERE `id` > 3
SELECT `id`, `name`, `email` FROM `users` WHERE `id` < 3

SELECT `id`, `name`, `email` FROM `users` WHERE `id` IN(2,3,4)
SELECT `id`, `name`, `email` FROM `users` WHERE `id` NOT IN(2,3,4)

SELECT `id`, `name`, `email` FROM `users` WHERE `id` BETWEEN 1 AND 4
SELECT `id`, `name`, `email` FROM `users` WHERE `id` NOT BETWEEN 1 AND 4

SELECT `id`, `name`, `email` FROM `users` WHERE `email` LIKE '%@ukr.net'
SELECT `id`, `name`, `email` FROM `users` WHERE `email` NOT LIKE '%@ukr.net'
SELECT `id`, `name`, `email` FROM `users` WHERE `name` NOT LIKE '%a%'

SELECT * FROM `users` WHERE `email` LIKE '%@ukr.net' AND `age` > 25
SELECT * FROM `users` WHERE `email` LIKE '%@ukr.net' OR `age` > 25
SELECT * FROM `users` WHERE (`email` LIKE '%@ukr.net' AND `age` > 25) OR (`email` LIKE '%@gmail.com' AND `age` < 30)

SELECT * FROM `users` ORDER BY `name` DESC
SELECT * FROM `users` ORDER BY `name` ASC, `id` DESC
SELECT * FROM `users` LIMIT 1
SELECT * FROM `users` LIMIT 2,5

SELECT * FROM `users` WHERE `id` > 1 ORDER BY `name` LIMIT 2


UPDATE `users` SET `gender` = 'male' WHERE `id` = 5
UPDATE `users` SET `gender` = 'male', `age` = 40 WHERE `id` = 7

DELETE FROM `users`
