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

    $emailmessage = nl2br("First Name: " . $cfn . "\nLast Name: " . $cln . "\nPhone Number: " . $ct);
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
    include("../html/changepersonalinfo.php");
    ?>
