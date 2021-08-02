<?php

    include("../php/gethistory.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>profile</title>
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

    <div class="past">

        <h2>Order History</h2>

            <div class="scrollable">
                <?php foreach ($history as $h) : ?>

                <div class="pastbook">
                    <img src="<?php echo $h['cover'] ?>">
                        <div class="innerinfo">
                            <p><?php echo $h['title'] ?></p>
                            <p><?php echo $h['author'] ?></p>
                            <p><?php echo $h['price'] ?> </p>
                        </div>    
                        <form method="POST" action="../php/addtocart.php">

                                <?php
                                    $input1 = '<input type="hidden" name="bid" value="';
                                    $hold1 = $h['bookID'];
                                    $end1 = '">';
                                    echo $input1.$hold1.$end1;

                                ?>
                                
                                
                                <input type="hidden" value="<?php echo $h['title'] ?>" name="bname">
                                <input type="hidden" value="<?php echo $h['price'] ?>" name="bprice">
                                <input type="hidden" value="<?php echo $h['author'] ?>" name="bauth">
                                <input type="hidden" value="<?php echo $h['cover'] ?>" name="bcov">
                                <input  type="submit" class="bookbutt2" value="Buy Again">
                            </form>
                </div>

                <?php endforeach; ?>
            </div>

    </div>

</body>
</html>