<div class="sizeTable">
<?php
    $sizeQuery = mysql_query("SELECT * FROM sizeChart");
    while ($row = mysql_fetch_array($sizeQuery, MYSQL_BOTH)) {
        $chart = $row['sizeChart'];
         ?>
            <a class="sizeBtn waves-effect waves-light left center-align btn-flat grey lighten-4"><?php echo $chart ?>
         </a>
         <?php
        }
?>
</div>
<div class="clearfix"></div>