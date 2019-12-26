CREATE TABLE `admin` 
( `user_name` VARCHAR(200) NOT NULL , 
`password` VARCHAR(11) NOT NULL ,
 PRIMARY KEY (`user_name`)) ;

INSERT INTO `admin` (`user_name`, `password`) VALUES ('admin', '123');

CREATE TABLE `user` 
( `first_name` VARCHAR(100) NOT NULL , 
`middle_name` VARCHAR(100) NOT NULL , 
`last_name` VARCHAR(100) NOT NULL , 
`email` VARCHAR(200) NOT NULL , 
`user_name` VARCHAR(200) NOT NULL , 
`password` VARCHAR(11) NOT NULL ,
 PRIMARY KEY (`user_name`)) ;

CREATE TABLE `product` 
( `id` INT(5) NOT NULL , 
`product_name` VARCHAR(100) NOT NULL ,
 `product_price` INT(100) NOT NULL ,
 `stock` VARCHAR(100) NOT NULL , 
 `image` VARCHAR(200) NOT NULL , 
 PRIMARY KEY (`id`)) ;
 
CREATE TABLE `ordermanage` 
( `sid` INT(5) NOT NULL AUTO_INCREMENT ,
 `id` INT(10) NOT NULL ,
 `product_name` VARCHAR(100) NOT NULL , 
 `product_price` VARCHAR(100) NOT NULL ,
 `user_name` VARCHAR(200) NOT NULL , 
 `address` VARCHAR(200) NOT NULL , 
 `remark` VARCHAR(200) NOT NULL , 
 PRIMARY KEY (`sid`)) ;
 
CREATE TABLE `orderhistory` 
( `sid` INT(5) NOT NULL AUTO_INCREMENT ,
 `id` INT(10) NOT NULL , 
 `product_name` VARCHAR(100) NOT NULL ,
 `product_price` INT(10) NOT NULL , 
 `user_name` VARCHAR(200) NOT NULL , 
 `address` VARCHAR(200) NOT NULL , 
 `mobile` VARCHAR(200) NOT NULL ,
 PRIMARY KEY (`sid`)) ;