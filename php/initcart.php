<?php 

    include_once("database.php");

    $cartcreate = "CREATE TABLE IF NOT EXISTS cart 
                    (
                        bookNum INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        bookName VARCHAR(255), 
                        bookCover TEXT, 
                        bookAuthor VARCHAR(255),
                        bookPrice DECIMAL(10,2),
                        userID INT(6) UNSIGNED
                    )
                    ";
    $db->exec($cartcreate);

?>