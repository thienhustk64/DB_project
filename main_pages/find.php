<?php
	if(isset($_POST['findtool'])){
		$tukhoa = $_POST['tukhoa'];
		$array = explode(' ', $tukhoa);
		$tmp = implode(":*<->", $array);
	} 
    $postgres_prod_find_lap = pg_query($cn,'SELECT "ID", "Name", "Price" FROM "Laptop" WHERE doc_names @@ to_tsquery(\'' . $tmp  . ':*\');');
    $postgres_prod_find_head = pg_query($cn,'SELECT "ID", "Name", "Price" FROM "HeadPhone" WHERE doc_names @@ to_tsquery(\'' . $tmp  . ':*\');');
    $postgres_prod_find_key = pg_query($cn,'SELECT "ID", "Name", "Price" FROM "KeyBoard" WHERE doc_names @@ to_tsquery(\'' . $tmp  . ':*\');');
    $postgres_prod_find_mouse = pg_query($cn,'SELECT "ID", "Name", "Price" FROM "Mouse" WHERE doc_names @@ to_tsquery(\'' . $tmp  . ':*\');');

?>
<p class ="kq">Kết quả tìm kiếm của '<?php echo $tukhoa?>':</p>
<ul class ="list_prod">
    <?php
        while($row_prod = pg_fetch_array($postgres_prod_find_lap)){
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
            </a>
        </li>
    <?php
    	}
        while($row_prod = pg_fetch_array($postgres_prod_find_head)){
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
            </a>
        </li>
    <?php
    	}
        while($row_prod = pg_fetch_array($postgres_prod_find_key)){
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
            </a>
        </li>
    <?php
    	}
        while($row_prod = pg_fetch_array($postgres_prod_find_mouse)){
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
            </a>
        </li>
    <?php
    }
    pg_close( $cn);
    ?>     
</ul>
