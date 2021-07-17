<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
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

    <div id="create">
        <h2>Create Your Account</h2>
        <form id="c">
            <label>Email</label>
            <input type="email" placeholder="enter email" required>
            <br>
            <label>Confirm Email</label>
            <input type="email" placeholder="confirm email" required>
            <br>
            <label>Password</label>
            <input type="password" placeholder="create password" required>
            <br>
            <label>Confirm Password</label>
            <input type="password" placeholder="confirm password" required>
            <br>
            <label>First Name</label>
            <input type="text" placeholder="First Name" required>
            <br>
            <label>Last Name</label>
            <input type="text" placeholder="Last Name" required>
            <br>
            <label>Phone</label>
            <input type="tel" placeholder="phone number">
            <br>
            <label>Address</label>
            <input type="text" placeholder="City" required>
            <input type="text" placeholder="Street Address" required>
            
            
           <input type="number" placeholder="Zip" required>
            <input type="text" placeholder="State" required>
            
            
            <br>
            <input id="signsubmit" type="submit" value="Sign up">
            <br>

        </form>

        

    </div>

</body>
</html>