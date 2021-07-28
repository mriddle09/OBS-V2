<?php 

    include("../php/getactiveuser.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Change Personal Information</title>
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

        <div id="personalinfo">
            <h2>Current Information</h2>
            <h4><?php echo $activeuser['firstName'] . " " . $activeuser['lastName']; ?></h4>
            <h4><?php echo $activeuser['phone']; ?></h4>
            <h4><?php echo $activeuser['email']; ?></h4>
        </div>

        <div class="fieldhold">
            <h2>Change Personal Information</h2>
            <div class="fields">
                <form method="POST" action="../php/updatepersonalinfo.php">
                    <label>First Name</label>
                    <input name="changefn" type="text">
                    <br>
                    <label>Last Name</label>
                    <input name="changeln" type="text">
                    <br>
                    <label>Phone Number</label>
                    <input name="changetel" type="tel">
                    <br>
                    <input class="ressub" type="submit">
                </form>
            </div>
        </div>

    </div>

        



</body>
</html>