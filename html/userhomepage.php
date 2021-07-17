<?php
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>OBS | Online Bookstore</title>
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

    <div id="title">
        <h1> OBS | Online Book Store</h1>
    </div>

    <div class="bookcontent">
        <div class="contdisp">
            <h3>Featured Books</h3>
            <div id="br"  class="bookrevolve">

                <?php for ($i = 0; $i < 10; $i++) : ?>

                    <div id="b<?php echo $i ?>" class="book">
                        <img src="https://images.booksense.com/images/818/490/9780385490818.jpg" class="bookimg">
                        <p>The Handmaid's Tale</p>
                        <button class="bookbutt" onclick="showDetails('<?php echo $i ?>')">Show details</button>

                    </div>

                    <div id="fd<?php echo $i ?>" class="hideable">
                        <div class="hidpic">
                            <img src="https://images.booksense.com/images/818/490/9780385490818.jpg" class="bookimg">
                            <p>The Handmaid's Tale</p>
                            <p>Margaret Atwood</p>
                            <p>Price: $10.99</p>
                        </div>

                        <div class="hidfo">
                            <p>Year of Publication: 1985</p>
                            <p>Genre: Dystopian Fiction</p>
                            <button class="bookbutt2">Add to cart</button>
                            <button class="bookbutt2" onclick="hideDetails('<?php echo $i ?>')">Hide details</button>
                        </div>
                            
                    </div>

                <?php endfor; ?>

            </div>

            
        </div>

        <div class="contdisp">
            <h3>Best Sellers Books</h3>
            <div class="bookrevolve">
                
            <?php for ($i = 0; $i < 10; $i++) : ?>

                <div id="boo<?php echo $i ?>" class="book">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51EqnTkohBL._SY291_BO1,204,203,200_QL40_ML2_.jpg" class="bookimg">
                    <p>The Handmaid's Tale</p>
                    <button class="bookbutt" onclick="showDetails1('<?php echo $i ?>')">Show details</button>

                </div>

                <div id="foo<?php echo $i ?>" class="hideable">
                    <div class="hidpic">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/51EqnTkohBL._SY291_BO1,204,203,200_QL40_ML2_.jpg" class="bookimg">
                        <p>The Catcher in The Rye</p>
                        <p>J.D. Salinger</p>
                        <p>Price: $12.99</p>
                    </div>

                    <div class="hidfo">
                        <p>Year of Publication: 1951</p>
                        <p>Genre: Fiction</p>
                        <button class="bookbutt2">Add to cart</button>
                        <button class="bookbutt2" onclick="hideDetails1('<?php echo $i ?>')">Hide details</button>
                    </div>
                        
                </div>

            <?php endfor; ?>

            </div>
        </div>

    </div>

</body>
</html>