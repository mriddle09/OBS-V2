<?php 
    include("../php/database.php");

    $searchTerm = filter_input(INPUT_POST, 'searched');


    $querySearch = "SELECT DISTINCT *
                    FROM books
                    WHERE Title LIKE '%".$searchTerm."%'
                    OR Author LIKE '%".$searchTerm."%'
                    OR Category LIKE '%".$searchTerm."%'
                    GROUP BY bookID     
                    ";

    $searchResults = $db->query($querySearch);
    $rowcount = $searchResults->rowCount(); 

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Search Results</title>
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

    <div class="searchresults">
        <?php $i = 0; ?>
        <?php foreach ($searchResults as $result) : ?>
            
            <div class="pastbook">
                    <img src="<?php echo $result['Cover'] ?>">
                        <div class="innerinfo">
                            <p><?php echo $result['Title'] ?></p>
                            <p><?php echo $result['Author'] ?></p>
                        </div>    
                        <button onclick="showDetails('<?php echo 'a'.$i ?>')"> Show Details</button>
                        <button>Add to Cart</button>

                        <div id="fda<?php echo $i ?>" class="hideableb">
                        <div class="hidpic">
                            <img src="<?php echo $result['Cover'] ?>" class="bookimg">
                            <p><?php echo $result['Title'] ?></p>
                            <p><?php echo $result['Author'] ?></p>
                            <p>Rating: <?php echo $result['Rating'] ?></p>
                            <p>Price: $<?php echo $result['Price'] ?></p>
                        </div>

                        <div class="hidfo">
                            <p>Year of Publication: <?php echo $result['Year'] ?></p>
                            <p>Genre: <?php echo $result['Category'] ?></p>
                            <button class="bookbutt2">Add to cart</button>
                            <button class="bookbutt2" onclick="hideDetails('<?php echo 'a'.$i ?>')">Hide details</button>
                        </div>
                            
                    </div>
                    <?php $i++; ?>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>