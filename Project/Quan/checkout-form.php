<?php
if(!empty($_POST)) {
	$cart = [];
	if(isset($_COOKIE['cart'])) {
		$json = $_COOKIE['cart'];
		$cart = json_decode($json, true);
	}
	if($cart ==null || count($cart) == 0) {
		header('Location: index1.php');
		die();
	}

	$fullname = getPost('fullname');
    $date = getPost('date');
    //echo $date;
    //echo $fullname;
	//add order
	$sql = "insert into \"Order\" (\"ID_Order\",\"Day\",\"Quantity\",\"Status\") values ('$fullname','$date','0','Wait')";
	execute($sql);

	// $sql = "select * from \"Order\" where "Day = '$orderDate'";
	// $order = executeResult($sql, true);

	// $orderId = $order['id'];
    $a = "'";
    $b = "'";
	$idList = [];
	foreach ($cart as $item) {
		$idList[] = $item['id'];
	}
	if(count($idList) > 0) {
		$idList = implode('\',\'', $idList);
		//[2, 5, 6] => 2,5,6
        $a .= $idList;
        $a .= $b;
		$sql = " select * from \"WareHouse\" where \"ID_Product\" in ($a)";
		$cartList = executeResult($sql, false);
	} else {
		$cartList = [];
	}
	$total = 0;
	foreach ($cartList as $item) {
		$num = 0;
        $idpr = 0;
		foreach ($cart as $value) {
			if($value['id'] == $item['ID_Product']) {
                $idpr = $item['ID_Product'];
				$num = $value['num'];
				//echo $num;
				$price = $value['price'];
                
				break;
			}
		}
		$total += $num*$price;
		//echo $total;

		$sql = "Insert into \"Order_detail\"(\"ID_Order\",\"ID_Product\",\"Quantity\",\"Status\") values ('$fullname','$idpr','$num','Wait')";
		execute($sql);
		$sql ="Update \"Order\" set \"Total\" = '$total' where \"ID_Order\" = '$fullname'";
		execute($sql);
	}

	header('Location: complete.php');
	setcookie('cart', '[]', time()-1000, '/');
}