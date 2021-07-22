<?php

    include("../php/getactiveuser.php");

    $userid = $activeuser['userID'];

    $cardquery = "SELECT * FROM paymentinfo WHERE user= :u_ID";

    $getactivecard = $db->prepare($cardquery);
    $getactivecard->bindValue(':u_ID', $userid);
    $getactivecard->execute(); 

    $activecard = $getactivecard->fetch(); 

    $getactivecard->closeCursor();

    

?>