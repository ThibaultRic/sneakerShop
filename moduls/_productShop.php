<div class="product-shop col s12 m4 l4 white " >
    <h5 class="teal-text"><?php echo $brand ?></h5>

    <h2 class="header center"><?php echo $name ?></h2>
    <h3 class="center teal-text"><?php echo $price?> €</h3>
    <div class="size">
    <?php include '_sizeTable.php'; ?>
    </div>
    <div class="row"></div>

    <div class="white center shopBtn">
        <a class="waves-effect waves-light btn-large"><i class="shoppingCart left material-icons">shopping_cart</i>Add to cart</a>
    </div>
    <div class="row"></div>
    <div>
    <p class="grey-text"><?php echo $description ?>
    </p>
    </div>
</div>
