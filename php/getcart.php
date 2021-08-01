
<?php
include("../php/database.php");
include('../php/getactiveuser.php');

if ($activeuser != FALSE) {
    $userID = $activeuser['userID'];
} else {
    $userID = NULL;
}



$querycart = "SELECT * FROM cart WHERE userID = :u_ID";

$cstates = $db->prepare($querycart);
$cstates->bindValue(':u_ID', $userID);
$cstates->execute();
$carts = $cstates->fetchAll();
$cstates->closeCursor();

?>