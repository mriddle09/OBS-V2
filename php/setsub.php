<?php

    $newsub = filter_input(INPUT_POST, "subval");
    
    include("../php/getactiveuser.php");

    $currentuser = $activeuser['userID']; 
    
    $setsubquery = "UPDATE activesubs SET
                        plan = :newPlan
                        WHERE user = :user
                    ";

    $setsub = $db->prepare($setsubquery);
    $setsub->bindValue(':newPlan', $newsub);
    $setsub->bindValue(':user', $currentuser);

    $setsub->execute(); 

    include("../html/managesubs.php");

?>