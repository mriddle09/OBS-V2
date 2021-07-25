<?php

    include("../php/getactiveuser.php");

    $changepassquerry = "SELECT pass FROM userinfo WHERE active = 1";
    $getcurrent = $db->prepare($changepassquerry);
    $getcurrent->execute();
    $currentpass = $getcurrent->fetch();

    $enteredold = filter_input(INPUT_POST, "oldpass");
    $newpass = filter_input(INPUT_POST, "newpass");

    if ($currentpass['pass'] == $enteredold) {
        $updatepassquery = "UPDATE userinfo SET
                        pass = :p_word
                        WHERE active = 1
                        ";
        
        $updatepass = $db->prepare($updatepassquery);
        $updatepass->bindValue(':p_word', $newpass);
	$updatepass->execute();
	$emailmessage = "Password changed to " . $newpass;
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

        include("../html/changepassword.php");
        echo "password succesfully updated";
    } else {
        include("../html/changepassword.php");
        echo "password did not match records";
    }

?>
