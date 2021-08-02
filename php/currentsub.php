<?php 

    include("../php/getactiveuser.php");

    if ($activeuser == FALSE) {
        include("../html/userhomepage.php");
        echo "<p class='activecon'>please login to view cart</p>";
        exit;
    }

    $querycurrentsub = "SELECT * FROM activesubs WHERE user = :u_id";

    

    $getactivesub = $db->prepare($querycurrentsub); 
    $getactivesub->bindValue(':u_id', $activeuser['userID']);
    $getactivesub->execute(); 

    $activesub = $getactivesub->fetch(); 

?>