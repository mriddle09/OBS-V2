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
                    <a href="../html/profile.html">View Profile</a>
                    <a href="../html/userhomepage.php">Log Out</a>
                </div>
            </div>
            
        </div>
        
    </div> 

    <div class="past">

        <h2>Order History</h2>

            <div class="scrollable">
                <?php for ($j = 0; $j < 80; $j++) : ?>

                <div class="pastbook">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/To_Kill_a_Mockingbird_%28first_edition_cover%29.jpg/1200px-To_Kill_a_Mockingbird_%28first_edition_cover%29.jpg">
                        <div class="innerinfo">
                            <p>To Kill A Mocking Bird</p>
                            <p>Harper Lee</p>
                        </div>    
                        <button>Buy Again</button>
                </div>

                <?php endfor; ?>
            </div>

    </div>

</body>
</html>