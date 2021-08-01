<?php 

    include("database.php");
    include("../php/getactiveuser.php");

    $clearcart = "DELETE FROM cart WHERE userID = :u_id";

    $cartclear = $db->prepare($clearcart);
    $cartclear->bindValue(':u_id', $activeuser['userID']);

    $cartclear->execute(); 
    include("../html/userhomepage.php");
?>