CREATE TABLE IF NOT EXISTS `miniblog`.`article`
(
    id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    release_date DATE NOT NULL DEFAULT current_timestamp,
    UNIQUE KEY unique_id (`id`)
);

INSERT INTO `miniblog`.`article` (`title`)
VALUES ("Article 1"),("Article 2"),("Article 3"),("Article 4");