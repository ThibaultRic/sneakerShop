<?php
    mysql_connect("localhost", "root", "tIbO") or
    die("Impossible de se connecter : " . mysql_error());
    mysql_select_db("sneakerShop");
?>