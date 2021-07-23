<?php 

$createcards = "CREATE TABLE IF NOT EXISTS `paymentinfo` (
    `cardID` int(11) NOT NULL,
    `user` int(6) UNSIGNED,
    `type` varchar(255),
    `number` varchar(255),
    `exp` varchar(255),
    PRIMARY KEY (`cardID`),
    FOREIGN KEY (`user`) REFERENCES `userinfo`(`userID`)    
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

$db->exec($createcards);
?>