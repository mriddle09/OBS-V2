<?php 

$createcards = "CREATE TABLE IF NOT EXISTS `paymentinfo` (
    `cardID` int(11) NOT NULL AUTO_INCREMENT,
    `user` int(6) UNSIGNED NOT NULL,
    `type` varchar(255) NOT NULL,
    `cardNumber` varchar(255) NOT NULL,
    `exp` varchar(255) NOT NULL,
    PRIMARY KEY (`cardID`),
    FOREIGN KEY (`user`) REFERENCES `userinfo`(`userID`)    
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

$db->exec($createcards);
?>