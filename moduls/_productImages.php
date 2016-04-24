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