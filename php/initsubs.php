<?php

$createsubs = "CREATE TABLE IF NOT EXISTS `OBSV2`.`subscriptions` 
                ( `subID` INT NOT NULL ,
                  `name` VARCHAR(255) NOT NULL ,
                  `description` TEXT NOT NULL ,  
                  `cost` DOUBLE NOT NULL
                   ) ENGINE = InnoDB;";

$db->exec($createsubs);

$altertable = "ALTER TABLE `subscriptions` ADD PRIMARY KEY(`subID`)";
$db->exec($altertable);

$createactsubs = "CREATE TABLE `OBSV2`.`activesubs` ( `subscripID` INT NOT NULL AUTO_INCREMENT , `plan` INT NOT NULL , `user` INT NOT NULL , PRIMARY KEY (`subscripID`)) ENGINE = InnoDB;
";

$db->exec($createactsubs);

$initsubs = "INSERT IGNORE INTO `subscriptions` (`subID`, `name`, `description`, `cost`) VALUES 
            ('1', 'None', 'None', '0.00'),
            ('2', '2 Day Shipping', 'Monthly subsciption that provides customer with free two day shipping on all orders', '5.99'),
            ('3', 'Membership', 'Bookstore membership that gives the customer both free two day shipping and one free book a month', '12.99')
";

$db->exec($initsubs);  

?>