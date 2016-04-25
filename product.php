<?php include 'dbconnect.php';
    $daProduct = $_GET['data'];
    $result = mysql_query("SELECT * FROM product p LEFT JOIN brand b on p.brand_id = b.id WHERE p.id = $daProduct");
    while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
        $id = $row["id"];
        $name = $row["name"];
        $subName = $row["subName"];
        $productPic = $row["productPic"];
        $price = $row["price"];
        $description = $row["description"];
        $brand = $row["brand"];
      }
    mysql_free_result($result);
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
        <link rel="stylesheet" href="css/owl.carousel.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="white">

    <?php include 'moduls/_nav.php'; ?>

    <div class="container">
        <div class="row"></div>
        <div class="row">
        <?php include 'moduls/_productImages.php' ?>
        <?php include 'moduls/_productShop.php' ?>
        </div>
    </div>

  <!-- Footer -->
     <?php include 'moduls/_footer.php'; ?>
      <!-- End Footer -->

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/product.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
  </html>