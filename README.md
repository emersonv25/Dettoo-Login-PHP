# Dettoo-Login-with-PHP-MySql
* Dettoo-Login is a simple login system with registration, forgot password and user panel.
* This is my first web application built with php and mysql, includes basic user management classes and methods.


# Technologies used
* PHP 7
* MySql or MariaDB
* CSS and Bootstrap

# Installation

#### Clone the Repository
	$ git clone https://github.com/emersonv25/Dettoo-Login-PHP.git

#### Run through web-based installer
Open this link in your web browser (replacing [yoursite.com] with your site address)

    http://{yoursite.com}/install/index.php


# Databese install
* run query in your mysql server
```

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
* edit your mysql information in config/config.cfg
```
    <?php
    define('HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'mydb');
    ?>
  
```

# Functions worked

* Log in
* Sign Up
* Forgot password (by email, no verification code yet)

# In Developer
* User panel

# author
@emersonv25
 
