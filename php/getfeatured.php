<?php

    $queryBooks = "SELECT * FROM books WHERE bookID < 6";

    $namestatement = $db->prepare($queryBooks);
    $namestatement->execute();
    $featbooks = $namestatement->fetchAll();
    $numRow = $namestatement->rowCount();
    $namestatement->closeCursor();

?>