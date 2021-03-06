<?php

    include("../php/getactiveuser.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Change Address</title>
  <link rel="stylesheet" href="../css/main.css">
  <script src="../js/header.js"></script>
</head>
<body>

  <div class="header">
    <div class="headleft">
        <h1>OBS</h1>
    </div>
    
        <div class="headright">
        <form class="searchform" method="post" action="../php/search.php">
                <input class="searchbar" type="text" placeholder="Search" name="searched">
                <input class="searchsub" type="submit" value="">
            </form>
            <div class="headbutt">
                <a href="../html/userhomepage.php"><button class="homebutt"></button></a>
                <a href="../html/cart.php"><button class="cartbutt"></button></a>
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
            <h2>Current Address</h2>
            <h4><?php echo $activeuser['street']; ?></h4>
            <h4><?php echo $activeuser['city'] . ", " . $activeuser['stateID'] . " " . $activeuser['zip']; ?></h4>
            
            
        </div>

        <div class="fieldhold">
            <h2>Change Address</h2>
            <div class="fields">
                <form method="POST" action="../php/updateaddress.php">
                    <label>Street</label>
                    <input name="cstreet" type="text">
                    <br>
                    <label>City</label>
                    <input name="ccity" type="text">
                    <br>
                    <label>State</label>
                    <input name="cstate" type="text">
                    <br>
                    <label>Zip</label>
                    <input name="czip" type="number">
                    <br>
                    <input class="ressub" type="submit">
                </form>
            </div>
        </div>

    </div>

        



</body>
</html>