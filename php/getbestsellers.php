<?php

    $queryBooks = "SELECT * FROM books WHERE bookID > 5";

    $namestatement = $db->prepare($queryBooks);
    $namestatement->execute();
    $bestbooks = $namestatement->fetchAll();
    $numRow = $namestatement->rowCount();
    $namestatement->closeCursor();

?>