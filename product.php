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

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <?php include 'moduls/_nav.php'; ?>

    <div class="container product">
        <div class="row">
        </div>
        <div = "col s9">
            <div class=" container product-image">
                <div class="row">
                    <div class="col s12 product-mainImage">
                        <img class="materialboxed responsive-img center" src="src/img/products/<?php echo $productPic ?>">
                    </div>
                </div>
                <div class="row product-moreImage">
                    <?php
                        $resultImg = mysql_query("SELECT * FROM picture WHERE product_id = $daProduct");
                        while ($row = mysql_fetch_array($resultImg, MYSQL_BOTH)) {
                        $imgId = $row["id"];
                        $imgName = $row["name"];
                        $imgUrl = $row["url"];
                        $imgProductId = $row["product_id"];
                        ?>
                        <div class="col s3"><img  class="responsive-img" src="src/img/products/<?php echo $imgUrl ?>" alt="<?php echo $imgName ?>"></div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class=" col s3 product-shop">
            <h2 class="header center teal-text"><?php echo $name ?></h2>
        </div>
    </div>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
  </html>