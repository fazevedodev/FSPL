SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `$` ;
CREATE SCHEMA IF NOT EXISTS `$` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `$` ;

-- -----------------------------------------------------
-- Table `$`.`race`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `$`.`race` ;

CREATE TABLE IF NOT EXISTS `$`.`race` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `tag` VARCHAR(1) NOT NULL,
  `icon` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC),
  UNIQUE INDEX `tag_UNIQUE` (`tag` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `$`.`team`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `$`.`team` ;

CREATE TABLE IF NOT EXISTS `$`.`team` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `tag` VARCHAR(5) NOT NULL,
  `logo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC),
  UNIQUE INDEX `tag_UNIQUE` (`tag` ASC),
  UNIQUE INDEX `logo_UNIQUE` (`logo` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `$`.`player`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `$`.`player` ;

CREATE TABLE IF NOT EXISTS `$`.`player` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NULL,
  `is_captain` TINYINT(1) NULL,
  `team_id` INT NOT NULL,
  `race_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC),
  INDEX `fk_player_team1_idx` (`team_id` ASC),
  INDEX `fk_player_race1_idx` (`race_id` ASC),
  CONSTRAINT `fk_player_team1`
    FOREIGN KEY (`team_id`)
    REFERENCES `$`.`team` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_player_race1`
    FOREIGN KEY (`race_id`)
    REFERENCES `$`.`race` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `$`.`round`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `$`.`round` ;

CREATE TABLE IF NOT EXISTS `$`.`round` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `$`.`match_state`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `$`.`match_state` ;

CREATE TABLE IF NOT EXISTS `$`.`match_state` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `state` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `state_UNIQUE` (`state` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `$`.`match`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `$`.`match` ;

CREATE TABLE IF NOT EXISTS `$`.`match` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `match_day` DATE NULL,
  `round_id` INT NOT NULL,
  `match_state_id` INT NOT NULL,
  PRIMARY KEY (`id`, `round_id`, `match_state_id`),
  INDEX `fk_match_round1_idx` (`round_id` ASC),
  INDEX `fk_match_match_state1_idx` (`match_state_id` ASC),
  CONSTRAINT `fk_match_round1`
    FOREIGN KEY (`round_id`)
    REFERENCES `$`.`round` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_match_match_state1`
    FOREIGN KEY (`match_state_id`)
    REFERENCES `$`.`match_state` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `$`.`team_match`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `$`.`team_match` ;

CREATE TABLE IF NOT EXISTS `$`.`team_match` (
  `team_id` INT NOT NULL,
  `match_id` INT NOT NULL,
  PRIMARY KEY (`team_id`, `match_id`),
  INDEX `fk_team_match_match1_idx` (`match_id` ASC),
  CONSTRAINT `fk_team_match_team`
    FOREIGN KEY (`team_id`)
    REFERENCES `$`.`team` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_team_match_match1`
    FOREIGN KEY (`match_id`)
    REFERENCES `$`.`match` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `$`.`map`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `$`.`map` ;

CREATE TABLE IF NOT EXISTS `$`.`map` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `image` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC),
  UNIQUE INDEX `image_UNIQUE` (`image` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `$`.`map_pool`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `$`.`map_pool` ;

CREATE TABLE IF NOT EXISTS `$`.`map_pool` (
  `map_id` INT NOT NULL,
  `round_id` INT NOT NULL,
  PRIMARY KEY (`map_id`, `round_id`),
  INDEX `fk_map_pool_round1_idx` (`round_id` ASC),
  CONSTRAINT `fk_map_pool_map1`
    FOREIGN KEY (`map_id`)
    REFERENCES `$`.`map` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_map_pool_round1`
    FOREIGN KEY (`round_id`)
    REFERENCES `$`.`round` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `$`.`game_state`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `$`.`game_state` ;

CREATE TABLE IF NOT EXISTS `$`.`game_state` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `state` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `state_UNIQUE` (`state` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `$`.`game`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `$`.`game` ;

CREATE TABLE IF NOT EXISTS `$`.`game` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `replay` VARCHAR(45) NULL,
  `map_id` INT NOT NULL,
  `match_id` INT NOT NULL,
  `match_round_id` INT NOT NULL,
  `match_match_state_id` INT NOT NULL,
  `game_state_id` INT NOT NULL,
  PRIMARY KEY (`id`, `map_id`, `match_id`, `match_round_id`, `match_match_state_id`, `game_state_id`),
  INDEX `fk_game_map1_idx` (`map_id` ASC),
  INDEX `fk_game_match1_idx` (`match_id` ASC, `match_round_id` ASC, `match_match_state_id` ASC),
  INDEX `fk_game_game_state1_idx` (`game_state_id` ASC),
  CONSTRAINT `fk_game_map1`
    FOREIGN KEY (`map_id`)
    REFERENCES `$`.`map` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_game_match1`
    FOREIGN KEY (`match_id` , `match_round_id` , `match_match_state_id`)
    REFERENCES `$`.`match` (`id` , `round_id` , `match_state_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_game_game_state1`
    FOREIGN KEY (`game_state_id`)
    REFERENCES `$`.`game_state` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `$`.`player_game`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `$`.`player_game` ;

CREATE TABLE IF NOT EXISTS `$`.`player_game` (
  `game_id` INT NOT NULL,
  `game_map_id` INT NOT NULL,
  `game_match_id` INT NOT NULL,
  `game_match_round_id` INT NOT NULL,
  `game_match_match_state_id` INT NOT NULL,
  `game_game_state_id` INT NOT NULL,
  `player_id` INT NOT NULL,
  PRIMARY KEY (`game_id`, `game_map_id`, `game_match_id`, `game_match_round_id`, `game_match_match_state_id`, `game_game_state_id`, `player_id`),
  INDEX `fk_player_game_player1_idx` (`player_id` ASC),
  CONSTRAINT `fk_player_game_game1`
    FOREIGN KEY (`game_id` , `game_map_id` , `game_match_id` , `game_match_round_id` , `game_match_match_state_id` , `game_game_state_id`)
    REFERENCES `$`.`game` (`id` , `map_id` , `match_id` , `match_round_id` , `match_match_state_id` , `game_state_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_player_game_player1`
    FOREIGN KEY (`player_id`)
    REFERENCES `$`.`player` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `$`.`menu`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `$`.`menu` ;

CREATE TABLE IF NOT EXISTS `$`.`menu` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `display_text` VARCHAR(45) NOT NULL,
  `link` VARCHAR(45) NULL,
  `parent_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_menu_menu1_idx` (`parent_id` ASC),
  CONSTRAINT `fk_menu_menu1`
    FOREIGN KEY (`parent_id`)
    REFERENCES `$`.`menu` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `$`.`user_group`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `$`.`user_group` ;

CREATE TABLE IF NOT EXISTS `$`.`user_group` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `$`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `$`.`user` ;

CREATE TABLE IF NOT EXISTS `$`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NULL,
  `user_group_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC),
  INDEX `fk_user_user_group1_idx` (`user_group_id` ASC),
  CONSTRAINT `fk_user_user_group1`
    FOREIGN KEY (`user_group_id`)
    REFERENCES `$`.`user_group` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
