<ul class="sizeTable">

<?php
    $sizeQuery = mysql_query("SELECT * FROM sizeChart");
    while ($row = mysql_fetch_array($sizeQuery, MYSQL_BOTH)) {
        $chart = $row['sizeChart'];
         ?>
         <li class="sizeBtn left">
            <a class="center-align btn-flat"><?php echo $chart ?>
         </a>
         </li>
         <?php
        }
?>
</ul>