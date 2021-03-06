-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `tarefa` DEFAULT CHARACTER SET utf8 ;
USE `tarefa` ;

-- -----------------------------------------------------
-- Table `tarefa`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tarefa`.`usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `senha` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8;

insert into usuarios (email, senha) values ("email@email.com", "123123");

CREATE TABLE IF NOT EXISTS `tarefa`.`task` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NULL DEFAULT NULL,
  `descricao` VARCHAR(255) NULL DEFAULT NULL,
  `nomeArquivo` VARCHAR(255) NULL DEFAULT NULL,
  `tamanhoArquivo` VARCHAR(25) NULL DEFAULT NULL,
  `tipoArquivo` VARCHAR(25) NULL DEFAULT NULL,
  `arquivo` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`));



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
