<?php
include 'dbconnect.php';

?>

<!DOCTYPE html>
  <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Sneaker Shop</title>

        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" type="text/css" href="css/main.css" media="screen,projection">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="white">

    <!-- Menu -->
      <?php include 'moduls/_nav.php'; ?>
    <!-- End Menu -->
    <!-- Content -->
    <div class="container">
        <div class="row">
            <h3 class="s8 offset-s2 grey-text center">
                Tous nos produits
            </h3>
        </div>
        <div class="row">
            <?php
                $result = mysql_query("SELECT * FROM product ORDER BY created_at");
                while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
                  $id = $row["id"];
                  $name = $row["name"];
                  $subName = $row["subName"];
                  $productPic = $row["productPic"];
                  $price = $row["price"];
                  $description = $row["description"];

                  include 'moduls/_productGrid.php';
                  }
                  mysql_free_result($result);
            ?>
        </div>
    </div>

    <!-- End Content -->

    <!-- Footer -->
     <?php include 'moduls/_footer.php'; ?>
      <!-- End Footer -->



 <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
    </body>
  </html>