<?php include 'dbconnect.php';
    $daProduct = $_GET['data'];
    $result = mysql_query("SELECT * FROM product p WHERE p.id = $daProduct");
    while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
        $id = $row["id"];
        $name = $row["name"];
        $subName = $row["subName"];
        $productPic = $row["productPic"];
        $price = $row["price"];
        $description = $row["description"];
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
        <link rel="stylesheet" href="css/animate.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <?php include 'moduls/_nav.php'; ?>

    <div class="container">
        <div class="row"></div>
        <div class="row">
            <div class="col s12 l8 m8 product-Images">
                <div class="product-mainImage owl-carousel">
                    <?php
                        $resultImg = mysql_query("SELECT * FROM picture WHERE product_id = $daProduct");
                        while ($row = mysql_fetch_array($resultImg, MYSQL_BOTH)) {
                        $imgId = $row["id"];
                        $imgName = $row["name"];
                        $imgUrl = $row["url"];
                        $imgProductId = $row["product_id"];
                    ?>
                    <div data-hash="<?php echo $imgId ?>">
                    <img class="responsiveImg" src="src/img/products/<?php echo $imgUrl ?>">
                    </div>
                    <?php
                    }
                    ?>
                </div>

                <?php
                        $resultImg = mysql_query("SELECT * FROM picture WHERE product_id = $daProduct");
                        while ($row = mysql_fetch_array($resultImg, MYSQL_BOTH)) {
                        $imgId = $row["id"];
                        $imgName = $row["name"];
                        $imgUrl = $row["url"];
                        $imgProductId = $row["product_id"];
                        ?>
                       <div class="thumbnails">
                            <a class="button secondary url" href="#<?php echo $imgId ?>">
                                <img class="responsiveImg" src="src/img/products/<?php echo $imgUrl ?>" alt="<?php echo $imgName ?>" data-id="<?php echo $imgId ?>">
                            </a>
                        </div>
                    <?php
                    }
                    ?>
            </div>
            <div class="product-shop col s12 m4 l4 grey" style="height:450px"></div>
        </div>
    </div>



        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
  </html>