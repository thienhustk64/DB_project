<?php  
	$tmp = $_GET['id'];
	$tmp2 = $_GET['quanly'];
	$abc2 = "SELECT * FROM " . "\"WareHouse\"" . " a WHERE a.\"ID_Product\" = '". $tmp . "';";
	$abc3 = pg_query($cn, $abc2);
	while($abc4 = pg_fetch_array($abc3)){
		$abc5 = $abc4['Quantity'];
	}
	$query = "SELECT * FROM " . "\""  .  $tmp2  . "\"" . " a WHERE a.\"ID\" = '" . $tmp. "';";
	$postgres_prod_detail = pg_query($cn,$query);
?>
<div class="prod_top"> 
	<?php 
		while($abc = pg_fetch_array($postgres_prod_detail)){

	?>
	<div class="img_prod">
		<img width="75%" src="images/<?php echo $tmp2 ?>/<?php  echo $abc['ID']?>.jpg">
	</div>

    <div class ="prod_review">
    	<h3>Thông tin chung</h3>
    	<ul>
    		<li>Tên sản phẩm: <?php echo $abc['Name'] ?></li>
    		<li>ID: <?php echo $abc['ID'] ?></li>
			<li>Hãng sản xuất: <?php echo $abc['Brand'] ?></li>
			<li>Xuất xứ: <?php echo $abc['From'] ?></li>
			<li>Tình trạng: <?php echo $abc['Status'] ?></li>
			<li>Số lượng: <?php echo number_format($abc5) ?> </li>
			<li>Giá: <?php echo number_format($abc['Price'],0,','). ' vnđ' ?></li>
		</ul>
	</div>
</div>
<div class ="clear"></div>
<div class="prod_detail">
	<h3>Thông số kỹ thuật</h3>
		<?php 
			if($tmp2 == 'Laptop'){
				include("main_pages/content/WareHouse/Laptop/product.php");
			}elseif($tmp2 == 'HeadPhone'){
				include("main_pages/content/WareHouse/HeadPhone/product.php");
			}elseif($tmp2 == 'KeyBoard'){
				include("main_pages/content/WareHouse/KeyBoard/product.php");
			}elseif($tmp2 == 'Mouse'){
				include("main_pages/content/WareHouse/Mouse/product.php");
			}
		?>
</div>
<?php
    }
?>
</div>
