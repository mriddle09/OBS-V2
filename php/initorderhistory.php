<?php 
    include("../php/database.php");

    $ohinitq = "CREATE TABLE IF NOT EXISTS `OBSV2`.`orderhistory` ( `orderID` INT NOT NULL AUTO_INCREMENT ,  `bookID` INT NOT NULL ,  `cover` TEXT NOT NULL ,  `title` VARCHAR(255) NOT NULL ,  `author` VARCHAR(255) NOT NULL ,  `userID` INT NOT NULL ,  `price` DOUBLE NOT NULL ,    PRIMARY KEY  (`orderID`)) ENGINE = InnoDB";

    $db->exec($ohinitq);    

?>