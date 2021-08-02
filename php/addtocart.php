<?php 

    include_once("database.php");
    include_once("initcart.php");
    include('../php/getactiveuser.php');

    if ($activeuser == FALSE) {
        include("../html/userhomepage.php");
        echo "<p class='activecon'>please login to add to cart</p>";
        exit;
    }

    $bookID = filter_input(INPUT_POST, 'bid');
    $bookname = filter_input(INPUT_POST, 'bname');
    $bookprice = filter_input(INPUT_POST, 'bprice');
    $bookAuthor = filter_input(INPUT_POST, 'bauth');
    $bookCover = filter_input(INPUT_POST, 'bcov');
    $userID = $activeuser['userID'];

    


    $addtocartq = "INSERT INTO cart
                    (bookNum, bookName, bookPrice, userID, bookCover, bookAuthor)
                    VALUE
                    ('$bookID', '$bookname', '$bookprice', '$userID', '$bookCover', '$bookAuthor')
                    ";
    $db->exec($addtocartq);

    include("../html/userhomepage.php");

?>