DROP TABLE IF EXISTS `#__helloworld`;

CREATE TABLE `#__helloworld` (
    `id`        INT(11)     NOT NULL    AUTO_INCREMENT,
    `greeting`  VARCHAR(25) NOT NULL,
    `published` TINYINT(4)  NOT NULL    DEFAULT '1',
    PRIMARY KEY (`id`)
)
    -- ENGINE          =MyISAM
    -- AUTO_INCREMENT  =0
    -- DEFAULT CHARSET =utf8;

    -- Nowadays Joomla recommends below settings instead of what is above:
    ENGINE          =InnoDB
    AUTO_INCREMENT  =0
    DEFAULT CHARSET =utf8mb4
    DEFAULT COLLATE =utf8mb4_unicode_ci;

INSERT INTO `#__helloworld` (`greeting`) VALUES
('Hello World DB!'),
('Goodbye World DB!');