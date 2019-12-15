
CREATE TABLE `foodie`.`user` 
( `id` INT(5) NOT NULL AUTO_INCREMENT , 
`first_name` TEXT NOT NULL , 
`middle_name` TEXT NOT NULL , 
`last_name` TEXT NOT NULL , 
`user_name` VARCHAR(50) NOT NULL , 
`password` VARCHAR(50) NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;







CREATE TABLE `foodie`.`product` 
( `id` INT(5) NOT NULL AUTO_INCREMENT , 
`product_name` TEXT NOT NULL , 
`product_price` INT(10) NOT NULL , 
`stock` TEXT NOT NULL , 
`image` VARCHAR(200) NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;

