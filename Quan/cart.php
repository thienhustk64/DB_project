<?php
	require_once('dbhelp.php');
	require_once('help.php');
	include_once('index1.php');
	if(!empty($_POST)) {
		$id_search = getPost('id_search');
		echo $id_search;
		echo '1111';
	}

	
    $a = "'";
    $b = "'";
	$cart = [];
	if(isset($_COOKIE['cart'])) {
		$json = $_COOKIE['cart'];
		$cart = json_decode($json, true);
	}
	$idList = [];
	foreach ($cart as $item) {
		$idList[] = $item['id'];
	}
	if(count($idList) > 0) {
		$idList = implode('\',\'', $idList);
		// [2, 5, 6] => 2,5,6
        $a .= $idList;
        $a .= $b;
		$sql = " select * from \"WareHouse\" where \"ID_Product\" in ($a)";
		$cartList = executeResult($sql, false);
	} else {
		$cartList = [];
	}
?>
<!-- body -->
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<table class="table table-bordered" style=" background-color: #DCDCDC">
				<thead>
					<tr>
						<th>No</th>
						<th>ID</th>
						<th>Name</th>
						<th>Num</th>
						<th>Price</th>
						<th>Total</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
<?php
	$count = 0;
	$total = 0;
	foreach ($cartList as $item) {
		$num = 0;
		foreach ($cart as $value) {
			if($value['id'] == $item['ID_Product']) {
				$num = $value['num'];
				$name = $value['name'];
				$price = $value['price'];
				break;
			}
		}
		$total += $num*$price;
		echo '
			<tr>
				<td>'.(++$count).'</td>
				<td>'.$item['ID_Product'].'</td>
				<td>'.$name.'</td>
				<td>'.$num.'</td>
				<td>'.number_format($price, 0, ',', '.').'</td>
				<td>'.number_format($price*$num, 0, ',', '.').'</td>
				<td><button class="btn btn-danger" onclick="deleteCart(\''.$item['ID_Product'].'\')">Delete</button></td>
			</tr>';
	}
?>
				</tbody>
			</table>
			<p class="giatien" style="font-size: 30px">
				Total: <?=number_format($total, 0, ',', '.')?> VDN
			</p>

			<a href="checkout.php">
				<button  class="btn btn_check" style="width: 20%; font-size: 32px;">Checkout</button>
			</a>
		</div>
	</div>
</div>
<script type="text/javascript">
	function deleteCart(id) {
		$.post('cookie.php', {
			'action': 'delete',
			'id': id
		}, function(data) {
			location.reload()
		})
	}
</script>


<?php
	include_once('layout/footer.php');
?>