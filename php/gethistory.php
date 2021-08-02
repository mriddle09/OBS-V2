<?php

    include("../php/getactiveuser.php"); 

    $gethistq = "SELECT * FROM orderhistory WHERE userID = :u_id"; 

    $gethist = $db->prepare($gethistq);

    $gethist->bindValue(':u_id', $activeuser['userID']);
    $gethist->execute(); 

    $history = $gethist->fetchAll(); 

?>