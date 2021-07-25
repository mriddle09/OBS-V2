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

    $emailmessage = "Subscription plan: ";
    if($newsub == 1){
	$emailmessage .= "None";
    }
    if($newsub == 2){
	$emailmessage .= "2 Day Shipping";
    }
    if($newsub == 3){
	$emailmessage .= "Membership";
    }

    $activeuserquery = "SELECT email FROM userinfo WHERE active = 1";
    $getactiveuser = $db->prepare($activeuserquery);
    $getactiveuser->execute();
    $activeuser = $getactiveuser->fetch();
?>
    <form action="sendcredchangeemail.php" id="sendmessage" method="POST">
    <input type='hidden' name='messagetype' value="<?php echo $emailmessage?>"/>
    <input type='hidden' name='email' value="<?php echo $activeuser['email']?>"/>
    </form>


    <script type="text/javascript">
        document.getElementById("sendmessage").submit(); // Here formid is the id of your form
    </script> 
<?php
    include("../html/managesubs.php");
?>
