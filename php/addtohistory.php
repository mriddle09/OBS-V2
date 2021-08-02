<?php 

    include("../php/getcart.php");

    foreach ($carts as $crt) {

        $bookID = $crt['bookNum'];
        $bookcover = $crt['bookCover'];
        $booktitle = $crt['bookName'];
        $bookauthor = $crt['bookAuthor'];
        $user = $activeuser['userID'];
        $price = $crt['bookPrice'];

        $inserthistoryq = "INSERT INTO orderhistory
                        (bookID, cover, title, author, userID, price)
                        VALUE
                        ('$bookID', '$bookcover', '$booktitle', '$bookauthor', '$user', '$price');
                        ";

        $db->exec("$inserthistoryq");

    }
    
?>