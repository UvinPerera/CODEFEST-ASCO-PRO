-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema asoc
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema asoc
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `asoc` DEFAULT CHARACTER SET utf8 ;
USE `asoc` ;

-- -----------------------------------------------------
-- Table `asoc`.`student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `asoc`.`student` (
  `idstudent` INT NOT NULL,
  `fName` VARCHAR(255) NULL,
  `lName` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  `dob` DATE NULL,
  `address` VARCHAR(1000) NULL,
  `userName` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  PRIMARY KEY (`idstudent`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `asoc`.`course`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `asoc`.`course` (
  `idcourse` INT NOT NULL,
  `courseName` VARCHAR(45) NULL,
  PRIMARY KEY (`idcourse`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `asoc`.`unit`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `asoc`.`unit` (
  `idunit` INT NOT NULL,
  `course_idcourse` INT NOT NULL,
  PRIMARY KEY (`idunit`, `course_idcourse`),
  INDEX `fk_unit_course1_idx` (`course_idcourse` ASC) VISIBLE,
  CONSTRAINT `fk_unit_course1`
    FOREIGN KEY (`course_idcourse`)
    REFERENCES `asoc`.`course` (`idcourse`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `asoc`.`question`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `asoc`.`question` (
  `idquestion` INT NOT NULL,
  `unit_idunit` INT NOT NULL,
  `unit_course_idcourse` INT NOT NULL,
  `question` VARCHAR(1000) NULL,
  `answer` VARCHAR(45) NULL,
  `explanation` VARCHAR(1000) NULL,
  PRIMARY KEY (`idquestion`, `unit_idunit`, `unit_course_idcourse`),
  INDEX `fk_question_unit1_idx` (`unit_idunit` ASC, `unit_course_idcourse` ASC) VISIBLE,
  CONSTRAINT `fk_question_unit1`
    FOREIGN KEY (`unit_idunit` , `unit_course_idcourse`)
    REFERENCES `asoc`.`unit` (`idunit` , `course_idcourse`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `asoc`.`student_has_course`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `asoc`.`student_has_course` (
  `student_idstudent` INT NOT NULL,
  `course_idcourse` INT NOT NULL,
  PRIMARY KEY (`student_idstudent`, `course_idcourse`),
  INDEX `fk_student_has_course_course1_idx` (`course_idcourse` ASC) VISIBLE,
  INDEX `fk_student_has_course_student_idx` (`student_idstudent` ASC) VISIBLE,
  CONSTRAINT `fk_student_has_course_student`
    FOREIGN KEY (`student_idstudent`)
    REFERENCES `asoc`.`student` (`idstudent`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_student_has_course_course1`
    FOREIGN KEY (`course_idcourse`)
    REFERENCES `asoc`.`course` (`idcourse`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
