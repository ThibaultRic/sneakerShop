<?php
    mysql_connect("localhost", "YourLogin", "YourPassword") or
    die("Impossible de se connecter : " . mysql_error());
    mysql_select_db("sneakerShop");
?>