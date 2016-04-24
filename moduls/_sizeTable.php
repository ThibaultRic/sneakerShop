<div class="sizeTable">
<?php
    $sizeQuery = mysql_query("SELECT * FROM sizeChart s
    LEFT JOIN product_has_sizeChart phs ON phs.sizeChart_id = s.id
        WHERE phs.product_id = $daProduct");
    while ($row = mysql_fetch_array($sizeQuery, MYSQL_BOTH)) {
        $chart = $row['sizeChart'];
        $qty = $row['quantity']
         ?>
            <a data-qty="<?php echo $qty ?>" class="sizeBtn waves-effect waves-light left center-align btn-flat"><?php echo $chart ?>
         </a>
         <?php
        }
?>
</div>
<div class="clearfix"></div>