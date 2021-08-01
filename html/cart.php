<?php 

    include("../php/getcart.php");

    if($carts == FALSE) {
        include("../html/userhomepage.php");
        echo "<h3 class='activecon'>Please login or add something to your cart to view cart</h3>";
        exit;
    }

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

<div id="maincart">
    <div id="items">
        <h3>Your Cart</h3>
        <!-- start for each loop -->
        <?php foreach ($carts as $cart) : ?>

            <div class="cartbook">
                <img src="<?php echo $cart['bookCover'] ?>" class="bookimg">
                <div class="infocart">
                    <p><?php echo $cart['bookName'] ?></p>
                    <p><?php echo $cart['bookAuthor'] ?></p>
                    <p>Price <?php echo $cart['bookPrice'] ?></p>
                </div>
                    
                <form method="POST" action="../php/removefromcart.php">
                    <input type="hidden" value="<?php echo $cart['bookNum'];?>" name="remove">
                    <input class="bookbutt"  type="submit" value="Remove From Cart">
                </form>

            </div>

        <?php endforeach; ?>
        <!-- end for each loop-->
    </div>
        
    <div id="cartsummary">
        <h3>Order Summary</h3>
        <div id="odsum">
            <p>Subtotal: $<?php echo round($subtotal, 2);?> </p>
            <p>Shipping: $<?php echo round($shipping, 2);?> </p>
            <p>Tax: $<?php echo round($tax, 2);?> </p>
            <hr id="break"> 
            <p>Total: $<?php echo round($total, 2);?> </p>

            <a href="../html/checkout.php"><button class="bookbutt">Checkout</button></a>
        </div>
    </div>
</div>

</body>
</html>