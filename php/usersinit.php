<?php 

$createusers = "CREATE TABLE `userinfo` (
    `userID` int(6) unsigned NOT NULL AUTO_INCREMENT,
    `email` varchar(55) NOT NULL,
    `pass` varchar(55) NOT NULL,
    `firstName` varchar(255) NOT NULL,
    `lastName` varchar(255) NOT NULL,
    `phone` varchar(255) NOT NULL,
    `street` varchar(255) NOT NULL,
    `city` varchar(55) NOT NULL,
    `stateID` varchar(20) NOT NULL,
    `zip` int(255) unsigned NOT NULL,
    `active` tinyint(1) NOT NULL,
    PRIMARY KEY (`userID`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
";

$db->exec($createusers);

?>