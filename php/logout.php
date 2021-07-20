<?php 

    require("../php/database.php");
    include("../php/getactiveuser.php");

    $logoutquery = "UPDATE userinfo SET active = 0";

    $logout = $db->prepare($logoutquery);
    $logout->execute();


    
    include("../html/userhomepage.php");
    if ($activeuser != NULL) {
        echo "<h3 class='activecon'>Goodbye " . $activeuser['firstName'] ."<h3>";
    }
    
?>