<?php 

    include("../php/getcart.php");
    include("../php/getactivecard.php");
    include("../php/getactiveuser.php");

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
  <title>cart</title>
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

<div id="checkout">
    <div id="order">
        <div id="scroller">
        <?php foreach($carts as $car) : ?>
            <div class="checkbook">
            <img src="<?php echo $car['bookCover'] ?>" class="bookimg">
                <div class="infocart">
                    <p><?php echo $car['bookName'] ?></p>
                    <p>Price: $<?php echo $car['bookPrice'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
        <div id="summ"> 
        <p>Subtotal: $<?php echo round($subtotal, 2);?> </p>
            <p>Shipping: $<?php echo round($shipping, 2);?> </p>
            <p>Tax: $<?php echo round($tax, 2);?> </p>
            <hr id="break"> 
            <p>Total: $<?php echo round($total, 2);?> </p>
        </div>
    </div>

    <div id="infomat" >
        <div id="payfo" class="infocheck">
            <h3>Payment Information</h3>
            <p id="p1"><?php if($activecard != FALSE) {
                echo $activecard['type'];
            } else {
                echo 'none';
            }
            ?></p>
            <p id="p2"><?php if($activecard != FALSE) {
                echo $activecard['cardNumber'];
            } else {
                echo 'none';
            }
            ?></p>
            <p id="p3"><?php if($activecard != FALSE) {
                echo $activecard['exp'];
            } else {
                echo 'none';
            }
            ?></p>
            <a href="../html/changepayment.php"><button class="bookbutt">Change payment info</button></a>
            
        </div>
            
        <div id="shipfo" class="infocheck">
            <h3>Shipping Information</h3>
            <p><?php echo $activeuser['street']?></p>
            <p><?php echo $activeuser['city']?></p>
            <p><?php echo $activeuser['stateID']?></p>
            <p><?php echo $activeuser['zip']?></p>
            <a href="../html/changeaddress.php"><button class="bookbutt" >Change shipping info</button></a>

        </div>
        
    </div>
        <a id="conbutt" href="../html/orderconfirm.php"><button class="bookbutt">Place Order</button></a>
</div>

</body>
</html>