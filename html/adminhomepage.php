<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Admin Homepage</title>
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

    <div id="adminhome"> 
    <h2>Administrator Home Page</h2>

        <div class="adminmenu">
                <a href="../html/managebooks.html"><button>Manage Books</button></a>
                <a><button>Manage Users</button></a>
                <a><button>Manage Promotions</button></a>
            </div>


        <a href="../html/index.html"><button>Log Out</button></a>
    </div>
    

</body>
</html>