# Dettoo-Login-with-PHP-MySql
Web login system
front-end created using html,css and bootstrap
back-end created with php
databese with MySql
* note: it's my first web application


# Requirements and install
like any other php web application

* php server or some other server, eg: apache
* install in your server and run

# Databese install
* run query in your mysql server
```
-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE (`usuario`),
  UNIQUE (`email`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;
```
* edit your mysql information in function connect() in class/users.php

* run

# author
@emersonv25
 
