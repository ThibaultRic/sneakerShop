<?php
    mysql_connect("localhost", "yourlogin", "yourpassword") or
    die("Impossible de se connecter : " . mysql_error());
    mysql_select_db("sneakerShop");
?>