<?php 

    include("../php/getactivecard.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Change Payment Information</title>
  <link rel="stylesheet" href="../css/main.css">
  <script src="../js/header.js"></script>
</head>
<body>

  <div class="header">
    <div class="headleft">
        <h1>OBS</h1>
    </div>
    
        <div class="headright">
            <form class="searchform">
                <input class="searchbar" type="text" placeholder="Search">
                <input class="searchsub" type="submit" value="">
            </form>
            <div class="headbutt">
                <a href="../html/userhomepage.php"><button class="homebutt"></button></a>
                <a href="../html/cart.html"><button class="cartbutt"></button></a>
                <button id="abutt" class="accbutt" onclick="userMenu()"></button>

                <div id="usermenu" class="accmenu">
                    <a href="../html/signup.php">Sign Up</a>
                    <a href="../html/login.php">Log In</a>
                    <a href="../html/profile.php">View Profile</a>
                    <a href="../php/logout.php">Log Out</a>
                </div>
            </div>
            
        </div>
    
    </div>

    <div class="infochanger">

        <div id="personaladdress">
            <h2>Current Payment</h2>
            <h4>Card Type: 
                <?php if ($activecard != FALSE) {
                        echo $activecard['type']; 
                    } 
                    else {
                        echo "none";
                    }   
                ?>
            </h4>
            <h4>Card Number: <?php if ($activecard != FALSE) {
                        echo $activecard['number']; 
                    } 
                    else {
                        echo "none";
                    }   
                ?></h4>
            <h4>Expiration Date: <?php if ($activecard != FALSE) {
                        echo $activecard['exp']; 
                    } 
                    else {
                        echo "none";
                    }   
                ?></h4>
            
        </div>

        <div class="fieldhold">
            <h2>Change Payment Information</h2>
            <div class="fields">
            <form method="POST" action="../php/changecard.php"> 
                <label>New Card Type</label>
                <input name="newtype" type="text" required>
                <br>
                <label>New Card Number</label>
                <input name="newnum" type="text" required>
                <br>
                <label>New Card Expiration</label>
                <input name="newexp" type="date" required>
                <br>
                <input class="ressub" type="submit">
            </form>
            </div>
        </div>

    </div>

        



</body>
</html>