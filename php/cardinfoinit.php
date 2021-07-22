<?php 

$createcards = "CREATE TABLE IF NOT EXISTS `paymentinfo` (
    `cardID` int(11) NOT NULL,
    `user` int(6) UNSIGNED,
    `type` varchar(255),
    `number` varchar(255),
    `exp` varchar(255)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

$db->exec($createcards);

$initcards = "ALTER TABLE `paymentinfo`
    ADD PRIMARY KEY (`cardID`),
    ADD KEY `userinfo.userID` (`user`)";

$db->exec($initcards);  


$more = "ALTER TABLE `paymentinfo`
    MODIFY `cardID` int(11) NOT NULL AUTO_INCREMENT";

$db->exec($more);

$evenmore = "ALTER TABLE `paymentinfo`
ADD CONSTRAINT `paymentinfo_ibfk_1` FOREIGN KEY (`user`) REFERENCES `userinfo` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE";

$db->exec($evenmore);
?>