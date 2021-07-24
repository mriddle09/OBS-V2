<?php

    include("../php/getactiveuser.php");

    $currentID = $activeuser['userID'];

    $getcurrentsubquery = "SELECT * FROM activesubs
                           WHERE user = :actID
                            ";

    $getcurrentsub = $db->prepare($getcurrentsubquery);
    $getcurrentsub->bindValue(':actID', $currentID);
    $getcurrentsub->execute(); 

    $currentsub = $getcurrentsub->fetch(); 

    $getcurrentsub->closeCursor(); 

    $curentsubID = $currentsub['plan'];

    $getsubinfoquery = "SELECT * FROM subscriptions
                        WHERE subID = :sub
                        ";

    $getsubinfo = $db->prepare($getsubinfoquery);
    $getsubinfo->bindValue(':sub', $curentsubID);
    $getsubinfo->execute(); 
    $subinfo = $getsubinfo->fetch(); 
    $getsubinfo->closeCursor(); 


    $getallsubsq = "SELECT * FROM subscriptions";
    $getallsubs = $db->prepare($getallsubsq);
    $getallsubs->execute(); 

    $allsubs = $getallsubs->fetchAll(); 
?>