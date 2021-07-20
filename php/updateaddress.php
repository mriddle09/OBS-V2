<?php 

    include("../php/getactiveuser.php");

    $cs = filter_input(INPUT_POST, "cstreet");
    $cc = filter_input(INPUT_POST, "ccity");
    $cstate = filter_input(INPUT_POST, "cstate");
    $czip = filter_input(INPUT_POST, "zip");

    if($cs == NULL) {
        $cs = $activeuser['street'];
    }
    if($cc == NULL) {
        $cc = $activeuser['city'];
    }
    if($cstate == NULL) {
        $cstate = $activeuser['stateID'];
    }
    if($czip == NULL) {
        $czip = $activeuser['zip'];
    }

    $updateaddquery = "UPDATE userinfo SET
                        street = :street,
                        city = :city,
                        stateID = :st,
                        zip = :zip
                        WHERE active = 1
                        ";
    $updateadd = $db->prepare($updateaddquery);
    $updateadd->bindValue(':street', $cs);
    $updateadd->bindValue(':city', $cc);
    $updateadd->bindValue(':st', $cstate);
    $updateadd->bindValue(':zip', $czip);
    $updateadd->execute();

    include("../html/changeaddress.php");
?>