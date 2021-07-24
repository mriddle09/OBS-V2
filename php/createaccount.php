<?php
require("../php/database.php");


$email = filter_input(INPUT_POST, 'cemail');
$pword = filter_input(INPUT_POST, 'cpass');
$firstname = filter_input(INPUT_POST, 'cfname');
$lastname = filter_input(INPUT_POST, 'clname');
$telephone = filter_input(INPUT_POST, 'ctel');
$street = filter_input(INPUT_POST, 'cstreet');
$city = filter_input(INPUT_POST, 'ccity');
$state = filter_input(INPUT_POST, 'cstate');
$zip = filter_input(INPUT_POST, 'czip');
$active = 1; 

$querycheck = "SELECT * FROM userinfo WHERE email = :Email";
    $emailcheckstatement = $db->prepare($querycheck);
    $emailcheckstatement->bindValue(':Email', $email);
    $emailcheckstatement->execute();
    $already = $emailcheckstatement->rowCount();
    $emailcheckstatement->closeCursor(); 

    if ($already != 0) {
        include("../html/signup.php");
        echo "<h5>An account with this email already exist<h5>";
        exit();
    }

    $createaccount = "INSERT INTO userinfo
                    (email, pass, firstName, lastName, phone, street, city, stateID, zip, active)
                VALUE
                    (:e_mail, :p_word, :f_name, :l_name, :tel, :street_add, :cty, :state_id, :zip_code, :active)
                ";
    $insertinfo = $db->prepare($createaccount);
    $insertinfo->bindValue(':e_mail', $email);
    $insertinfo->bindValue(':p_word', $pword);
    $insertinfo->bindValue(':f_name', $firstname);
    $insertinfo->bindValue(':l_name', $lastname);
    $insertinfo->bindValue(':tel', $telephone);
    $insertinfo->bindValue(':street_add', $street);
    $insertinfo->bindValue(':cty', $city);
    $insertinfo->bindValue(':state_id', $state);
    $insertinfo->bindValue(':zip_code', $zip);
    $insertinfo->bindValue(':active', $active);
    $insertinfo->execute();
    $insertinfo->closeCursor();

    include("../php/getactiveuser.php");
    $currentid = $activeuser['userID'];


    $setsubquery = "INSERT INTO activesubs
                        (plan, user)
                    VALUE
                        (1, :new_ID)
                    ";
    $setsub = $db->prepare($setsubquery);
    $setsub->bindValue(':new_ID', $currentid);
    $setsub->execute();
    $setsub->closeCursor(); 


    include("../html/accountconfirm.php");

    

?>