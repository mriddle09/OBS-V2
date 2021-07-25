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

    $emailmessage = "Street: " . $cs . "\nCity: " . $cc . "\nState: " . $cstate . "\nZip: " . $czip;
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
    include("../html/changeaddress.php");
?>
