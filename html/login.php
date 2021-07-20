<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>login</title>
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


    <div id="logger">
        <h1>Log In</h1>

        <div id="logged">
            <form method="POST" action="../php/login.php">
                <label>Email</label>
                <input name="email" type="email" placeholder="enter email">
                <br>
                <label>Password</label>
                <input name="password" type="password" placeholder="enter password">
                <br>
                <a href="../html/userhomepage.php"><input id="lin" type="submit" value="Login"></a>
            </form>
            <a href="../html/forgotpass.php"><button>Reset Password</button></a>
            <a href="../html/signup.php"><button>Create Account</button></a>
        </div>
    </div>

</body>
</html>