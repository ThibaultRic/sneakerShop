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


      <!-- Menu -->
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper teal">
              <a href="index.php" class="brand-logo center">Sneaker Shop</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="left hide-on-med-and-down">
                  <li><a href="#">produits</a></li>
                  <li><a href="collapsible.html">Javascript</a></li>
                  <li><a href="mobile.html">Mobile</a></li>
              </ul>
              <ul class="side-nav teal" id="mobile-demo">
                  <li><a href="sass.html" class="white-text">Sass</a></li>
                  <li><a href="badges.html" class="white-text">Components</a></li>
                  <li><a href="collapsible.html" class="white-text">Javascript</a></li>
                  <li><a href="mobile.html" class="white-text">Mobile</a></li>
              </ul>
              <a href="#"><i class="right material-icons">shopping_cart</i></a>
          </div>
        </nav>
      </div>
      <!-- End Menu -->

      <!-- Content -->
        <div class="parallax-container">
          <div class="parallax"><img src="src/img/fallingJordan.jpg"></div>
        </div>
        <div class="section container white">
          <div class="row">
            <h2 class="header center teal-text">Le Premier site de la sneaker</h2>
            <p class="grey-text center">
              <span>Sur ce site retrouvez toutes les dernieres sorties de vos marques préférées de baskets.</span>
              <span>Jordan, Adidas, Reebok, New Balance, etc. Toutes les plus prestigieuses marques de sneakers sont disponibles. Laissez vous tenter par une paire de collection.</span>
            </p>
            <p class="grey-text center"># Feel the Hype</p>
          </div>
        </div>
        <div class="parallax-container">
          <div class="parallax"><img src="src/img/sneakerWall.jpg"></div>
        </div>

        <!-- last products -->
        <div class="section teal"></div>
        <div class="section container white">
          <div class="row">
            <h2 class="header center teal-text">Découvrez les nouveaux modèles</h2>
          </div>
          <div class="row">
        <?php
          mysql_connect("localhost", "root", "tIbO") or
          die("Impossible de se connecter : " . mysql_error());
          mysql_select_db("sneakerShop");
 
          $result = mysql_query("SELECT * FROM product ORDER BY created_at DESC LIMIT 3");
 
          while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
            $name = $row["name"];
            $subName = $row["subName"];
            $productPic = $row["productPic"];
            $price = $row["price"];
            $description = $row["description"];
            ?>

            <div class=" col l4 m12 s12 card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="src/img/products/<?php echo $productPic; ?>">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><?php echo $name; ?><i class="material-icons right">more_vert</i></span>

                <p><?php echo $subName; ?></p>
              </div>

              <div class="card-action">
                <a href="#" class="teal-text"><?php echo $price; ?>€</a>
                <a href="#" class="teal-text"><i class="material-icons right">add_shopping_cart</i></a>
              </div>

              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?php echo $name; ?><i class="material-icons right">close</i></span>
                <p>
                  <?php echo $description;?>
                </p>
                <p><a href="#" class="teal-text">plus de détails</a></p>
              </div>
            </div>
            <?php
          }
          mysql_free_result($result);
          ?>

        </div>

        </div>
                <div class="section teal"></div>

        <!-- End last Products -->

        <div class="parallax-container">
          <div class="parallax"><img src="src/img/sneakerVecto.jpeg"></div>
        </div>
        <div class="section container white">
          <div class="row">
            <h2 class="header center teal-text">Vous avez une question?</h2>
            <p class="grey-text center">Posez-nous toutes vos questions et inscrivez vous à notre newsletter afin d'être le premier au courant des dernières sorties.</p>
          </div>
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" type="text" class="validate" required>
                  <label for="first_name">Prénom</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate" required>
                  <label for="last_name">Nom</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate" required>
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <select multiple required>
                    <option value="" disabled selected>Choisissez la/les raisons(s)</option>
                    <option value="1">Je cherche un modèle en particulier</option>
                    <option value="2">Informations sur une commande</option>
                    <option value="3">Disponibilité des produits</option>
                    <option value="4">Autre raison</option>
                  </select>
                  <label>Raisons de la prise de contact</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" class="materialize-textarea" length="500" required></textarea>
                  <label for="textarea1">Votre message</label>
                </div>
              </div>
              <p>
                <input type="checkbox" id="test5" />
                <label for="test5">S'inscrire à la newsletter</label>
              </p>
              <div class="row center">
                <button class="btn-large teal waves-effect waves-light" type="submit" name="action">Envoyer
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </form>
          </div>
        </div>

      <!-- End Content -->

      <!-- Footer -->
      <footer class="page-footer teal">
          <div class="container">
          <div class="row">
            <div class="col l4 s12">
              <h5 class="white-text">Sneaker Shop</h5>
              <p class="grey-text text-lighten-4">Le site préféré des sneaker Head</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Links</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
              </ul>
            </div>
          </div>
          </div>
          <div class="footer-copyright">
          <div class="container">
          Thibault Production
          <a class="grey-text text-lighten-4 right" href="#!">site map</a>
          </div>
          </div>
      </footer>
      <!-- End Footer -->
      </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
    </body>
  </html>
