<?php  
    $postgres_prod = pg_query($cn, 'SELECT "ID", "Name", "Price" FROM "KeyBoard" ORDER BY "Price"');
?>
<ul class ="list_prod">
    <?php
        while($row_prod = pg_fetch_array($postgres_prod)){
    ?>
        <li>
            <a href="index.php?quanly=KeyBoard&id=<?php echo $row_prod['ID']?>">
                <img src="images/KeyBoard/<?php  echo $row_prod['ID']?>.jpg">
                <p class ="name_prod">
                    <?php 
                        echo $row_prod['Name'];
                    ?>    
                </p>
                <p class ="price_prod">
                    Giá :
                    <?php 
                        echo number_format($row_prod['Price']) .'vnđ' 
                    ?> 
                </p>
            </a>
        </li>
    <?php
    }
    pg_close( $cn);
    ?>     
</ul>

