-- create DATABASE php_crud;



CREATE SCHEMA IF NOT EXISTS `php_crud` DEFAULT CHARACTER SET utf8 ;
USE `php_crud` ;

CREATE TABLE IF NOT EXISTS `php_crud`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `birth_date` DATE NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `php_crud`.`cars` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `model_name` VARCHAR(45) NOT NULL,
  `brand` VARCHAR(45) NOT NULL,
  `color` VARCHAR(45) NOT NULL,
  `users_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cars_users_idx` (`users_id`),
  CONSTRAINT `fk_cars_users`
    FOREIGN KEY (`users_id`)
    REFERENCES `php_crud`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;