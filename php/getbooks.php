<?php

    $queryBooks = "SELECT * FROM books";

    $namestatement = $db->prepare($queryBooks);
    $namestatement->execute();
    $books = $namestatement->fetchAll();
    $numRow = $namestatement->rowCount();
    $namestatement->closeCursor();

?>