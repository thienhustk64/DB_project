<?php
	$tmp = 'L28';
	
	$abc2 = "SELECT * FROM " . "\"WareHouse\"" . " a WHERE a.\"ID_Product\" = '". $tmp . "';";
	echo $abc2;
	$abc3 = pg_query($cn, $abc2);
	while($abc4 = pg_fetch_array($abc3)){
	echo number_format($abc4['Quantity']);
}
?>