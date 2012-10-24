CREATE SCHEMA IF NOT EXISTS `todo_list` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `todo_list` ;

-- -----------------------------------------------------
-- Table `todo_list`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `todo_list`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(128) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `todo_list`.`todo`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `todo_list`.`todo` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descricao` VARCHAR(255) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  `updated_at` TIMESTAMP NULL ,
  `finalizado` TIMESTAMP NULL ,
  `users_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_todo_users` (`users_id` ASC) ,
  CONSTRAINT `fk_todo_users`
    FOREIGN KEY (`users_id` )
    REFERENCES `todo_list`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
