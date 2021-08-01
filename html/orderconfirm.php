<?php 
    include("../php/getactiveuser.php");
    include("../php/getactivecard.php");
    include("../php/getcart.php");

    $subtotal = 0; 
    $shipping = 3.99;
    $tax = 0; 
    $total = 0; 

    foreach ($carts as $c) {
        $subtotal += $c['bookPrice'];
    }
    $tax = $subtotal * 0.07; 

    $total = $subtotal + $shipping + $tax;

?>

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

    <div id="ordcon">
        <h2>Your oder has been placed.</h2>
        <div id="ordbooks">
            <h3>Books Ordered</h3>
            <?php foreach ($carts as $cart) : ?>
                <p> <?php echo $cart['bookName'] ?>, <?php echo $cart['bookAuthor']?>, <?php echo $cart['bookPrice']?> </p>    
            <?php endforeach; ?>
            <h3>Total</h3>
            <p>$<?php echo round($total, 2); ?></p>
            <h3>Billing Info</h3>
            <p>Charged to: <?php echo $activecard['type']?> ending in <?php echo substr($activecard['cardNumber'], -4) ?></p>
            <p>Shipped to: <?php echo $activeuser['street']?>, <?php echo $activeuser['city']?>, <?php echo $activeuser['stateID']?> <?php echo $activeuser['zip']?></p>
            <form action="../php/clearcart.php">
                <input type='submit' value="Go Home">
            </form>
        </div>
    </div>
    

</body>
</html>