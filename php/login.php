<?php 
    require("database.php");
    

    $usere = filter_input(INPUT_POST, 'email');
    $passw = filter_input(INPUT_POST, 'password');

    $loginquery = "SELECT pass FROM userinfo
                    WHERE email = :e_mail
                    AND pass = :pass_word
                    ";

    $loginstatement = $db->prepare($loginquery);
    $loginstatement->bindValue(':e_mail', $usere);
    $loginstatement->bindValue(':pass_word', $passw);
    $loginstatement->execute();
    $rowcount = $loginstatement->rowCount();

    if ($rowcount == 1) {
        $setactive = "UPDATE userinfo
                        SET active=1
                        WHERE email=:e_mail;";
        $loginstatement2 = $db->prepare($setactive);
        $loginstatement2->bindValue(':e_mail', $usere);
        $loginstatement2->execute();
        include("../php/getactiveuser.php");
        include("../html/userhomepage.php");
        echo "<h3 class='activecon'>Welcome " . $activeuser['firstName'] ."<h3>";
    } else {
        include("../html/login.php");
        echo "<h5>Invalid credentials<h5> ";
    }

?>