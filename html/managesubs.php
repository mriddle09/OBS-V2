<?php

    include("../php/getactivesub.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Manage Subscriptions</title>
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
            <h2>Current Subscription</h2>
                
                <h4><?php echo $subinfo['name'] ?></h4>
                <h4><?php echo $subinfo['description'] ?></h4>
                <h4>$<?php echo $subinfo['cost'] ?></h4>
            
            
        </div>

        <div class="fieldhold">
            <h2>Manage Subscriptions</h2>
            <div class="fields">
            <form method="POST" action="../php/setsub.php"> 
            <?php $i = 1; ?>
                <?php foreach ($allsubs as $sub): ?>
                    
                    <div class="subscription">
                        <p class="subname"><?php echo $sub['name']; ?> </p>
                        <p class="subdesc"><?php echo $sub['description'] ?> </p>
                        <p class="subcost"><?php echo $sub['cost'] ?> </p>
                        <input class="subbutt" type="radio" name="subval" value="<?php echo $i; ?>">
                        
                        <?php $i = $i + 1; ?>
                    </div>
                <?php endforeach; ?>
                <input type="submit">
            </form>
            </div>
        </div>

    </div>

</body>
</html>