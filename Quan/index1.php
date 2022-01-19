<?php
    require_once('help.php');
    require_once('dbhelp.php');
	include_once('layout/header.php');
    $id_search = getPost('tukhoa');
    //echo $id_search;
    // $id = '\'H1\'';
	// $product = executeResult('select * from "WareHouse" where "ID_Product" = '.$id, false);
?>
    <h3 class="timkiem" style="font-size : 20px;">Tìm kiếm sản phẩm</h3>
<div class = "index_search">
<p>
    <form  method="POST" accept-charset="utf-8" >
       	<input required="true" class="form-control" type="text" placeholder="Nhập ID" style="width : 30%" id="usr" name="tukhoa"></input>
        <button class="btn btn-success" style="width: 100px; font-size: 14px; color: black"> Search</button>
    </form>
</p>
</div>

     
    <div class="container-test" style="text-align: center" >
        <div class="row" style="margin-right: 15px; margin-left: 150px;">
		    <div class="col-md-10" style="text-align: center" >
                    <table class="table table-bordered ">
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th width = "180px">Add to cart</th>

                </tr>
                    <tbody>
        <?php
                $cn = pg_connect( "host=localhost port=5432 dbname=Test
                user=postgres password=13062001");
                if( $cn){
                    //echo 'connected';
                }
                // $char = "%";
                // if($id_search != ''){
                //     $id_search .=$char;
                // }else{
                //     $id_search = "";
                // }
                
                $sql = "select * from find_1('$id_search')";
                $result = pg_query( $cn, $sql);
                $data = array();
                while ( $row = pg_fetch_array($result)){
                    $data[]= $row;
                }
                //echo $data[0]['ID_Product'];
                pg_close( $cn);
                for($i = 0; $i < count($data); $i++){
                    $id = $data[$i]['id_product'];
                    $price = $data[$i]['price'];
                    $name = $data[$i]['_name'];
                    echo '<tr>
                        <td>'.($i+1).'</td>
                        <td>'.$data[$i]['id_product'].'</td>
                        <td>'.$data[$i]['_name'].'</td>
                        <td>'.number_format($data[$i]['price'], 0, ',', '.').'</td>
                        <td> <button class="btn btn-success" style="width: 150px; font-size: 20px;" onclick="addToCart(\''.$id.'\',\''.$price.'\',\''.$name.'\') "> <i class="fas fa-cart-plus"></i></button> </td>
                    </tr>';
                }
                
            ?>

                    </tbody>
                </table>
        
            </div>
        </div>

    </div>


<script type="text/javascript">
	function addToCart(id,price, name) {
		$.post('cookie.php', {
			'action': 'add',
			'id': id,
            'price': price,
			'num': 1,
            'name': name
		},function(data) {
			location.reload()
		})
	}
</script>  



 



<?php
	include_once('layout/footer.php');
?>