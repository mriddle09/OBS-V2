<?php 

    include("../php/getactiveuser.php");
    include("../php/getactivecard.php");
    
    $cardtype = filter_input(INPUT_POST, "newtype");
    $cardnum = filter_input(INPUT_POST, "newnum");
    $cardexp = filter_input(INPUT_POST, "newexp");
    $carduser = $activeuser['userID'];


    $checktable = "SELECT * FROM paymentinfo WHERE
                    user = :actuser";
    $table = $db->prepare($checktable);
    $table->bindValue(':actuser', $carduser);
    $table->execute(); 

   

    if ($activecard == FALSE) {
        $updatecardquery = "INSERT INTO paymentinfo 
                            (user, type, cardNumber, exp) 
                            VALUES (:uses, :f_name, :l_name, :tel)
                        ";
        $updatecard = $db->prepare($updatecardquery);
        $updatecard->bindValue(':uses', $carduser);
        $updatecard->bindValue(':f_name', $cardtype);
        $updatecard->bindValue(':l_name', $cardnum);
        $updatecard->bindValue(':tel', $cardexp);
        $updatecard->execute();
    } else {

        $updatecardquery = "UPDATE paymentinfo SET
                        type = :f_name,
                        cardNumber = :l_name,
			exp = :tel
                        WHERE user = :active_card
                        ";
        $updatecard = $db->prepare($updatecardquery);
        $updatecard->bindValue(':f_name', $cardtype);
        $updatecard->bindValue(':l_name', $cardnum);
        $updatecard->bindValue(':tel', $cardexp);
        $updatecard->bindValue(':active_card', $carduser);
        $updatecard->execute();

    }
	$emailmessage = "Payment information changed";
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

    

    include("../html/changepayment.php");
?>
