<?php 

    include("../php/getactiveuser.php");

    $cfn = filter_input(INPUT_POST, "changefn");
    $cln = filter_input(INPUT_POST, "changeln");
    $ct = filter_input(INPUT_POST, "changetel");

    if($cfn == NULL) {
        $cfn = $activeuser['firstName'];
    }
    if($cln == NULL) {
        $cln = $activeuser['lastName'];
    }
    if($ct == NULL) {
        $ct = $activeuser['phone'];
    }

    $updateinfoquery = "UPDATE userinfo SET
                        firstName = :f_name,
                        lastName = :l_name,
                        phone = :tel
                        WHERE active = 1
                        ";
    $updateinfo = $db->prepare($updateinfoquery);
    $updateinfo->bindValue(':f_name', $cfn);
    $updateinfo->bindValue(':l_name', $cln);
    $updateinfo->bindValue(':tel', $ct);
    $updateinfo->execute();

    include("../html/changepersonalinfo.php");
?>