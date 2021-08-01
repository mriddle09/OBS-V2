<?php 

    require_once("database.php");
    
    $item = $_POST['remove'];
    $removecart = "DELETE FROM cart WHERE bookNum='$item'";
    $db->exec($removecart);

    include("../html/cart.php");

?>