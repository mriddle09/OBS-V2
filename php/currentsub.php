<?php 

    include("../php/getactiveuser.php");

    $querycurrentsub = "SELECT * FROM activesubs WHERE user = :u_id";

    

    $getactivesub = $db->prepare($querycurrentsub); 
    $getactivesub->bindValue(':u_id', $activeuser['userID']);
    $getactivesub->execute(); 

    $activesub = $getactivesub->fetch(); 

?>