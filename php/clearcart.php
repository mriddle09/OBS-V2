<?php 

    include("database.php");
    include("../php/getactiveuser.php");
?>
<form action="../php/sendorderemail.php" id="sendmessage" method="POST">
    <input type='hidden' name='email' value="<?php echo $activeuser['email']?>"/>
</form>
<script type="text/javascript">
    document.getElementById("sendmessage").submit(); // Here formid is the id of your form
</script>
<?php
    $clearcart = "DELETE FROM cart WHERE userID = :u_id";

    $cartclear = $db->prepare($clearcart);
    $cartclear->bindValue(':u_id', $activeuser['userID']);

    $cartclear->execute(); 
    include("../html/userhomepage.php");
?>
