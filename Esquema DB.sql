-- MySQL Script generated by MySQL Workbench
-- Thu 27 Apr 2023 11:19:57 PM CST
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`users` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `mydb`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `fullname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`discounts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`discounts` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `mydb`.`discounts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `percentage` INT NOT NULL,
  `from` DATETIME NOT NULL,
  `to` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`games`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`games` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `mydb`.`games` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `price` DOUBLE NOT NULL,
  `rating` VARCHAR(255) NOT NULL,
  `discounts_id` INT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_games_discounts1`
    FOREIGN KEY (`discounts_id`)
    REFERENCES `mydb`.`discounts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`consoles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`consoles` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `mydb`.`consoles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `manufacturer` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`comments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`comments` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `mydb`.`comments` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `users_id` INT NOT NULL,
  `games_id` INT NOT NULL,
  `comment` TEXT NOT NULL,
  `published_at` DATETIME NOT NULL,
  `isLiked` TINYINT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_comments_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `mydb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comments_games1`
    FOREIGN KEY (`games_id`)
    REFERENCES `mydb`.`games` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;

SHOW WARNINGS;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`categories` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `mydb`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `isMatureContent` TINYINT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`consoles_has_games`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`consoles_has_games` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `mydb`.`consoles_has_games` (
  `consoles_id` INT NOT NULL,
  `games_id` INT NOT NULL,
  PRIMARY KEY (`consoles_id`, `games_id`),
  CONSTRAINT `fk_consoles_has_games_consoles`
    FOREIGN KEY (`consoles_id`)
    REFERENCES `mydb`.`consoles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_consoles_has_games_games1`
    FOREIGN KEY (`games_id`)
    REFERENCES `mydb`.`games` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;

SHOW WARNINGS;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`games_has_categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`games_has_categories` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `mydb`.`games_has_categories` (
  `games_id` INT NOT NULL,
  `categories_id` INT NOT NULL,
  PRIMARY KEY (`games_id`, `categories_id`),
  CONSTRAINT `fk_games_has_categories_games1`
    FOREIGN KEY (`games_id`)
    REFERENCES `mydb`.`games` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_games_has_categories_categories1`
    FOREIGN KEY (`categories_id`)
    REFERENCES `mydb`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;

SHOW WARNINGS;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`users_has_games`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`users_has_games` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `mydb`.`users_has_games` (
  `users_id` INT NOT NULL,
  `games_id` INT NOT NULL,
  `purchased_at` DATETIME NOT NULL,
  `consoles_id` INT NOT NULL,
  PRIMARY KEY (`users_id`, `games_id`),
  CONSTRAINT `fk_users_has_games_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `mydb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_games_games1`
    FOREIGN KEY (`games_id`)
    REFERENCES `mydb`.`games` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_games_consoles1`
    FOREIGN KEY (`consoles_id`)
    REFERENCES `mydb`.`consoles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;

SHOW WARNINGS;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `mydb`.`users`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`users` (`id`, `username`, `email`, `password`, `fullname`) VALUES (1, 'TomatoPana', 'mdlb.lobo@gmail.com', '12345678', 'Moises David');
INSERT INTO `mydb`.`users` (`id`, `username`, `email`, `password`, `fullname`) VALUES (2, 'Nitto9711', 'janne.oman@gmail.com', '12345678', 'Janne Oman');
INSERT INTO `mydb`.`users` (`id`, `username`, `email`, `password`, `fullname`) VALUES (3, 'SuperJacque', 'jaque.lopez@gmail.com', '12345678', 'Jacque');

COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`discounts`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`discounts` (`id`, `name`, `percentage`, `from`, `to`) VALUES (1, 'Descuento Para Chinos', 10, '2023-01-01 00:00:00', '2023-04-30 23:59:59');

COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`games`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`games` (`id`, `name`, `price`, `rating`, `discounts_id`, `image_url`) VALUES (1, 'Overwatch 2', 100, '+80%', NULL, 'overwatch.jpg');
INSERT INTO `mydb`.`games` (`id`, `name`, `price`, `rating`, `discounts_id`, `image_url`) VALUES (2, 'Halo Infinity', 900, '83%', NULL, 'Halo.png');
INSERT INTO `mydb`.`games` (`id`, `name`, `price`, `rating`, `discounts_id`, `image_url`) VALUES (3, 'Apex Legends', 89, '77%', 1, 'ApexLegends.png');
INSERT INTO `mydb`.`games` (`id`, `name`, `price`, `rating`, `discounts_id`, `image_url`) VALUES (4, 'Battlefield 1', 500, '78%', 1, 'Battlefield.png');
INSERT INTO `mydb`.`games` (`id`, `name`, `price`, `rating`, `discounts_id`, `image_url`) VALUES (5, 'minecraft', 700, '79%', NULL, 'Minecraft.png');
INSERT INTO `mydb`.`games` (`id`, `name`, `price`, `rating`, `discounts_id`, `image_url`) VALUES (6, 'Terraria', 115, '81%', NULL, 'Terraria.png');
INSERT INTO `mydb`.`games` (`id`, `name`, `price`, `rating`, `discounts_id`, `image_url`) VALUES (7, 'The forest', 400, '67%', NULL, 'Forest.png');
INSERT INTO `mydb`.`games` (`id`, `name`, `price`, `rating`, `discounts_id`, `image_url`) VALUES (8, 'ARK', 350, '63%', NULL, 'ARK.png');
INSERT INTO `mydb`.`games` (`id`, `name`, `price`, `rating`, `discounts_id`, `image_url`) VALUES (9, 'Little Nightmares', 250, '81%', NULL, 'littleNightmares.png');
INSERT INTO `mydb`.`games` (`id`, `name`, `price`, `rating`, `discounts_id`, `image_url`) VALUES (10, 'Dead by Daylight', 200, '73%', NULL, 'Deadbydaylight.png');
INSERT INTO `mydb`.`games` (`id`, `name`, `price`, `rating`, `discounts_id`, `image_url`) VALUES (11, 'Resident Evil 4', 1200, '91%', NULL, 'RE4.png');
INSERT INTO `mydb`.`games` (`id`, `name`, `price`, `rating`, `discounts_id`, `image_url`) VALUES (12, 'Phasmophobia', 180, '69%', NULL, 'Phasmophobia.png');


COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`consoles`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`consoles` (`id`, `name`, `manufacturer`) VALUES (1, 'Nintendo Switch', 'Nintendo');
INSERT INTO `mydb`.`consoles` (`id`, `name`, `manufacturer`) VALUES (2, 'PS5', 'Sony');
INSERT INTO `mydb`.`consoles` (`id`, `name`, `manufacturer`) VALUES (3, 'Xbox Series S', 'Microsoft');
INSERT INTO `mydb`.`consoles` (`id`, `name`, `manufacturer`) VALUES (4, 'PC', 'PC');

COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`comments`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`comments` (`id`, `users_id`, `games_id`, `comment`, `published_at`, `isLiked`) VALUES (1, 1, 1, 'Se viene Juego del año', '2023-04-27 23:00:00', true);
INSERT INTO `mydb`.`comments` (`id`, `users_id`, `games_id`, `comment`, `published_at`, `isLiked`) VALUES (2, 3, 3, 'Che juego atrae virgenes', '2023-04-27 22:00:00', false);

COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`categories`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`categories` (`id`, `name`, `isMatureContent`) VALUES (1, 'shooter', false);
INSERT INTO `mydb`.`categories` (`id`, `name`, `isMatureContent`) VALUES (2, 'survival', false);
INSERT INTO `mydb`.`categories` (`id`, `name`, `isMatureContent`) VALUES (3, 'terror', terror);


COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`consoles_has_games`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (1, 1);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (2, 1);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (3, 1);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (4, 1);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (3, 2);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (4, 2);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (1, 3);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (2, 3);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (3, 3);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (4, 3);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (2, 4);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (3, 4);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (4, 4);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (1, 5);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (2, 5);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (3, 5);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (4, 5);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (1, 6);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (2, 6);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (3, 6);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (4, 6);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (2, 7);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (4, 7);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (1, 8);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (2, 8);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (3, 8);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (4, 8);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (1, 9);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (2, 9);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (3, 9);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (4, 9);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (1, 10);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (2, 10);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (3, 10);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (4, 10);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (2, 11);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (3, 11);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (4, 11);
INSERT INTO `mydb`.`consoles_has_games` (`consoles_id`, `games_id`) VALUES (4, 12);



COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`games_has_categories`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`games_has_categories` (`games_id`, `categories_id`) VALUES (1, 1);
INSERT INTO `mydb`.`games_has_categories` (`games_id`, `categories_id`) VALUES (2, 1);
INSERT INTO `mydb`.`games_has_categories` (`games_id`, `categories_id`) VALUES (3, 1);
INSERT INTO `mydb`.`games_has_categories` (`games_id`, `categories_id`) VALUES (4, 1);
INSERT INTO `mydb`.`games_has_categories` (`games_id`, `categories_id`) VALUES (5, 2);
INSERT INTO `mydb`.`games_has_categories` (`games_id`, `categories_id`) VALUES (6, 2);
INSERT INTO `mydb`.`games_has_categories` (`games_id`, `categories_id`) VALUES (7, 2);
INSERT INTO `mydb`.`games_has_categories` (`games_id`, `categories_id`) VALUES (8, 2);
INSERT INTO `mydb`.`games_has_categories` (`games_id`, `categories_id`) VALUES (9, 3);
INSERT INTO `mydb`.`games_has_categories` (`games_id`, `categories_id`) VALUES (10, 3);
INSERT INTO `mydb`.`games_has_categories` (`games_id`, `categories_id`) VALUES (11, 3);
INSERT INTO `mydb`.`games_has_categories` (`games_id`, `categories_id`) VALUES (12, 3);

COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`users_has_games`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`users_has_games` (`users_id`, `games_id`, `purchased_at`, `consoles_id`) VALUES (1, 1, '2023-04-26 00:00:00', 1);
INSERT INTO `mydb`.`users_has_games` (`users_id`, `games_id`, `purchased_at`, `consoles_id`) VALUES (2, 3, '2023-04-26 00:00:00', 4);
INSERT INTO `mydb`.`users_has_games` (`users_id`, `games_id`, `purchased_at`, `consoles_id`) VALUES (3, 2, '2023-04-26 00:00:00', 4);

COMMIT;

-- -----------------------------------------------------
-- TRIGGER
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
CREATE TABLE IF NOT EXISTS `mydb`.`log` (
  `idLog` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL);
  
DELIMITER // 
CREATE TRIGGER trigger_nuevo_juego
AFTER INSERT ON `mydb`.`games`e
for each row
BEGIN
INSERT INTO mydb.log( idLog, name)
   VALUES (idLog, "Se añadio un juego nuevo");
   END //

   DELIMITER // 
CREATE TRIGGER trigger_edit_juego
AFTER UPDATE ON `mydb`.`games`
for each row
BEGIN
INSERT INTO mydb.log( idLog, name)
   VALUES (idLog, "Se modifico un juego");
   END //

   DELIMITER // 
CREATE TRIGGER trigger_elimino_juego
AFTER DELETE ON `mydb`.`games`
for each row
BEGIN
INSERT INTO mydb.log( idLog, name)
   VALUES (idLog, "Se elimino un juego");
   END //