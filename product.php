<?php include 'dbconnect.php'; ?>

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
        <div class="product-image">
            <div class="product-mainImage">
                <img class="materialboxed responsive-img" src="src/img/products/jordan/jordan1BlueRoyal/3.jpg">
            </div>
            <div class="row product-moreImage">
                <div class="col s3"><img  class="responsive-img" src="src/img/products/jordan/jordan1BlueRoyal/1.jpg"></div>
                <div class="col s3"><img class="responsive-img" src="src/img/products/jordan/jordan1BlueRoyal/2.jpg"></div>
                <div class="col s3"><img class="responsive-img" src="src/img/products/jordan/jordan1BlueRoyal/3.jpg"></div>
                <div class="col s3"><img class="responsive-img" src="src/img/products/jordan/jordan1BlueRoyal/4.jpg"></div>
               <!--  <ul>
                    <li><img src="src/img/products/jordan/jordan1BlueRoyal/1.jpg"></li>
                    <li><img src="src/img/products/jordan/jordan1BlueRoyal/2.jpg"></li>
                    <li><img src="src/img/products/jordan/jordan1BlueRoyal/3.jpg"></li>
                    <li><img src="src/img/products/jordan/jordan1BlueRoyal/4.jpg"></li>
                </ul> -->
            </div>
        </div>
        <div class="product-shop"></div>
    </div>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
  </html>