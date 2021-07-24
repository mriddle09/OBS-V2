<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Forgotten Password</title>
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


    <div class="fieldhold">
        <h1>Forgotten Password</h1>

	<div class="fields">
	    <form method=POST action="../php/sendemail.php">
            <label>Email</label>
            <input type="email" placeholder="enter email">
            <br>
	    <input id="forgotsub" type="submit" value="submit">
	    </form>
        </div>
    </div>
</body>
</html>
