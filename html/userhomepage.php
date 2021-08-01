<?php

    include("../php/database.php");
    include_once("../php/initbooks.php");
    include_once("../php/usersinit.php");
    include_once("../php/cardinfoinit.php");
    include_once("../php/initsubs.php");
    include_once("../php/initcart.php");
    include("../php/getbooks.php");
    include("../php/getbestsellers.php");
    include("../php/getfeatured.php");

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

    <div id="title">
        <h1> OBS | Online Book Store</h1>
    </div>

    <div class="bookcontent">
        <div class="contdisp">
            <h3>Featured Books</h3>
            <div id="br"  class="bookrevolve">

                <?php $i = 0 ?>
                <?php foreach($featbooks as $fbook) : ?>

                    <div id="b<?php echo $i ?>" class="book">
                        <img src="<?php echo $fbook['Cover'] ?>" class="bookimg">
                        <p><?php echo $fbook['Title'] ?></p>
                        <button class="bookbutt" onclick="showDetails('<?php echo $i ?>')">Show details</button>

                    </div>

                    <div id="fd<?php echo $i ?>" class="hideable">
                        <div class="hidpic">
                            <img src="<?php echo $fbook['Cover'] ?>" class="bookimg">
                            <p><?php echo $fbook['Title'] ?></p>
                            <p><?php echo $fbook['Author'] ?></p>
                            <p>Rating: <?php echo $fbook['Rating'] ?></p>
                            <p>Price: $<?php echo $fbook['Price'] ?></p>
                        </div>

                        <div class="hidfo">
                            <p>Year of Publication: <?php echo $fbook['Year'] ?></p>
                            <p>Genre: <?php echo $fbook['Category'] ?></p>
                            <form method="POST" action="../php/addtocart.php">

                                <?php
                                    $input1 = '<input type="hidden" name="bid" value="';
                                    $hold1 = $fbook['bookID'];
                                    $end1 = '">';
                                    echo $input1.$hold1.$end1;

                                ?>
                                
                                
                                <input type="hidden" value="<?php echo $fbook['Title'] ?>" name="bname">
                                <input type="hidden" value="<?php echo $fbook['Price'] ?>" name="bprice">
                                <input type="hidden" value="<?php echo $fbook['Author'] ?>" name="bauth">
                                <input type="hidden" value="<?php echo $fbook['Cover'] ?>" name="bcov">
                                <input  type="submit" class="bookbutt2" value="Add to cart">
                            </form>
                            
                            <button class="bookbutt2" onclick="hideDetails('<?php echo $i ?>')">Hide details</button>
                        </div>
                            
                    </div>
                    <?php $i++ ?>
                <?php endforeach; ?>

            </div>

            
        </div>

        <div class="contdisp">
            <h3>Best Sellers Books</h3>
            <div class="bookrevolve">
            <?php $i = 0; ?>
            <?php foreach($bestbooks as $bbook) : ?>

                <div id="boo<?php echo $i ?>" class="book">
                    <img src="<?php echo $bbook['Cover'] ?>" class="bookimg">
                    <p><?php echo $bbook['Title'] ?></p>
                    <button class="bookbutt" onclick="showDetails1('<?php echo $i ?>')">Show details</button>

                </div>

                <div id="foo<?php echo $i ?>" class="hideable">
                    <div class="hidpic">
                        <img src="<?php echo $bbook['Cover'] ?>" class="bookimg">
                        <p><?php echo $bbook['Title'] ?></p>
                        <p><?php echo $bbook['Author'] ?></p>
                        <p>Rating: <?php echo $bbook['Rating'] ?></p>
                        <p>Price: $<?php echo $bbook['Price'] ?></p>
                    </div>

                    <div class="hidfo">
                        <p>Year of Publication: <?php echo $bbook['Year'] ?></p>
                        <p>Genre: <?php echo $bbook['Category'] ?></p>
                        <form method="POST" action="../php/addtocart.php">

                                <?php
                                    $input1 = '<input type="hidden" name="bid" value="';
                                    $hold1 = $bbook['bookID'];
                                    $end1 = '">';
                                    echo $input1.$hold1.$end1;

                                ?>
                                
                                
                                <input type="hidden" value="<?php echo $bbook['Title'] ?>" name="bname">
                                <input type="hidden" value="<?php echo $bbook['Price'] ?>" name="bprice">
                                <input type="hidden" value="<?php echo $bbook['Author'] ?>" name="bauth">
                                <input type="hidden" value="<?php echo $bbook['Cover'] ?>" name="bcov">
                                <input  type="submit" class="bookbutt2" value="Add to cart">
                            </form>
                        
                        <button class="bookbutt2" onclick="hideDetails1('<?php echo $i ?>')">Hide details</button>
                    </div>
                        
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>

            </div>
        </div>

    </div>

</body>
</html>