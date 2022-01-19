<?php
    $postgres_prod_status_lap = pg_query($cn,'SELECT "ID", "Name", "Price" , "Status" FROM "Laptop" a WHERE a."Status" = \''.'OutStock'.'\';');
    $postgres_prod_status_head = pg_query($cn,'SELECT "ID", "Name", "Price" , "Status" FROM "HeadPhone" a WHERE a."Status" = \''.'OutStock'.'\';');
    $postgres_prod_status_key = pg_query($cn,'SELECT "ID", "Name", "Price" , "Status" FROM "KeyBoard" a WHERE a."Status" = \''.'OutStock'.'\';');
    $postgres_prod_status_mouse = pg_query($cn,'SELECT "ID", "Name", "Price" , "Status" FROM "Mouse" a WHERE a."Status" = \''.'OutStock'.'\';');
?>
<ul class ="list_prod">
    <?php
        while($row_prod = pg_fetch_array($postgres_prod_status_lap)){
    ?>
        <li>
            <a href="index.php?quanly=Laptop&id=<?php echo $row_prod['ID']?>">
                <img src="images/Laptop/<?php  echo $row_prod['ID']?>.jpg">
                <p class ="name_prod">
                    <?php 
                        echo $row_prod['Name'];
                    ?>    
                </p>
                <p class ="price_prod">
                    Giá :
                    <?php 
                        echo number_format($row_prod['Price']) 
                    ?> vnđ
                </p>
                <p class = "<?php echo $row_prod['Status']?>">
                    Tình trạng: <?php echo $row_prod['Status']?>
                </p>
            </a>
        </li>
    <?php
    	}
        while($row_prod = pg_fetch_array($postgres_prod_status_head)){
    ?>
        <li>
            <a href="index.php?quanly=HeadPhone&id=<?php echo $row_prod['ID']?>">
                <img src="images/HeadPhone/<?php  echo $row_prod['ID']?>.jpg">
                <p class ="name_prod">
                    <?php 
                        echo $row_prod['Name'];
                    ?>    
                </p>
                <p class ="price_prod">
                    Giá :
                    <?php 
                        echo number_format($row_prod['Price']) 
                    ?> vnđ
                </p>
                <p class = "<?php echo $row_prod['Status']?>">
                    Tình trạng: <?php echo $row_prod['Status']?>
                </p>
            </a>
        </li>
    <?php
    	}
        while($row_prod = pg_fetch_array($postgres_prod_status_key)){
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
                        echo number_format($row_prod['Price']) 
                    ?> vnđ
                </p>
                <p class = "<?php echo $row_prod['Status']?>">
                    Tình trạng: <?php echo $row_prod['Status']?>
                </p>
            </a>
        </li>
    <?php
    	}
        while($row_prod = pg_fetch_array($postgres_prod_status_mouse)){
    ?>
        <li>
            <a href="index.php?quanly=Mouse&id=<?php echo $row_prod['ID']?>">
                <img src="images/Mouse/<?php  echo $row_prod['ID']?>.jpg">
                <p class ="name_prod">
                    <?php 
                        echo $row_prod['Name'];
                    ?>    
                </p>
                <p class ="price_prod">
                    Giá :
                    <?php 
                        echo number_format($row_prod['Price']) 
                    ?> vnđ
                </p>
                <p class = "<?php echo $row_prod['Status']?>">
                    Tình trạng: <?php echo $row_prod['Status']?>
                </p>
            </a>
        </li>
    <?php
    }
    pg_close( $cn);
    ?>     
</ul>
