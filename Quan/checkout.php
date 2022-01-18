<?php
	require_once('dbhelp.php');
	require_once('help.php');
	include_once('layout/header.php');
	require_once('checkout-form.php');
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
		//[2, 5, 6] => 2,5,6

        $a .= $idList;
        $a .= $b;
		$sql = " select * from \"WareHouse\" where \"ID_Product\" in ($a)";
		$cartList = executeResult($sql, false);
	} else {
		$cartList = [];
	}
?>
<!-- body -->
<form method="post">
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h3>Order Information</h3>
			<div class="form-group">
			  <label for="usr">ID Order:</label>
			  <input required="true" type="text" class="form-control" id="usr" name="fullname">
			</div>
			<div class="form-group">
			  <label for="email">Date:</label>
			  <input required="true" type="date" class="form-control" id="date" name="date">
			</div>

		</div>



		<div class="col-md-8">
			<h3>Cart</h3>
			<table class="table table-bordered ">
				<thead>
					<tr>
                    <th>No</th>
						<th>ID</th>
						<th>Name</th>
						<th>Num</th>
						<th>Price</th>
						<th>Total</th>
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
				
			</tr>';
	}
?>
				</tbody>
			</table>
			<p style="font-size: 30px; color: red">
				Total: <?=number_format($total, 0, ',', '.')?>
			</p>

			<button herf="?Abd" class="btn btn-success" style="width: 100%; font-size: 32px;">Complete</button>
		</div>
	</div>
</div>
</form>
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
$.post()
<?php
	include_once('layout/footer.php');
?>