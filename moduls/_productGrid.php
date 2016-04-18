<div class=" col l4 m12 s12 card">
  <div class="card-image waves-effect waves-block waves-light">
    <img class="activator responsive-img" src="src/img/products/<?php echo $productPic; ?>">
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