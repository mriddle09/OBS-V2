<?php

    include("../php/getactiveuser.php");

    if ($activeuser == FALSE) {
        include("../html/login.php");
        echo "<h3 class='activecon'>Please login to view profile</h3>";
        exit;
    }
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

    <div id="yourprof">
        <h1>Your Profile</h1>

        <div id="prof">
            <h2>Welcome, <?php echo $activeuser['firstName'] ?></h2>
            <a href="../html/changepassword.php"><button>Change Password</button></a>
            <a href="../html/changepersonalinfo.php"><button>Change Personal Info</button></a>
            <a href="../html/changepayment.php"><button>Change Payment Info</button></a>
            <a href="../html/changeaddress.php"><button>Change Address</button></a>
            <a href="../html/managesubs.php"><button>Manage Subscription</button></a>
            <a href="../html/orderhistory.php"><button>Order History</button></a>

        </div>
    </div>

</body>
</html>