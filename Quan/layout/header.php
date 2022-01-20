

<div class="header">
    <div class ="logo">
        <a href= "index.php">
            <img src="../images/logo/logo.jpg">
        </a>
    </div>
            <ul class ="list_main_menu">
                <li><a href="../index.php?quanly=WareHouse">Trang chủ</a></li>
                <li><a href="../index.php?quanly=WareHouse">Kho hàng</a></li>
                <li><a href="../index.php?quanly=Import">Nhập lô</a></li>
                <li><a href="../Quan/trangchu.php">Xuất kho</a></li>
                <li><a href="../index.php?quanly=Status">Tình trạng sản phẩm</a><li>
            </ul>
            <?php
		  	$cart = [];
			if(isset($_COOKIE['cart'])) {
				$json = $_COOKIE['cart'];
				$cart = json_decode($json, true);
			}
			$count = 0;
			foreach ($cart as $item) {
				$count += $item['num'];
			}
		  ?>
			<a class = "header_cart" href="cart.php">
				<button type="button" class="btn btn_cart" style="background-color:#8B008B; margin-right:30px">
				<i class="fas fa-shopping-cart" style="font-size:130% ; color: white"></i> <span class="badge badge-light"><?=$count?></span>
				</button>
			</a>
    <div class ="clear"></div> 
</div>
</body>