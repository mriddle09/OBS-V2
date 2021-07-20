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

        include("../html/changepassword.php");
        echo "password succesfully updated";
    } else {
        include("../html/changepassword.php");
        echo "password did not match records";
    }

?>