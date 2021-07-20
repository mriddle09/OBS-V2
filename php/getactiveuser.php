<?php

    require("../php/database.php");

    $getactiveuser = "SELECT * FROM userinfo WHERE active = 1";

    $getact = $db->prepare($getactiveuser);
    $getact->execute();
    $activeuser = $getact->fetch();
    $getact->closeCursor();




?>