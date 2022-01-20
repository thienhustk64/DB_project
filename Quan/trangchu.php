
<?php
	include_once('index1.php');
?>
<div class = quan_content>  
<div class="abc"><h3 class="timkiem" style="font-size : 20px">Tìm kiếm sản phẩm</h3></div>
<div class = clear></div>
<div class = "index_search">
<p>
    <form  method="POST" accept-charset="utf-8"  >
       	<input required="true" class="form-control" type="text" placeholder="Nhập ID" style="width : 30%; background-color: #EDEBF0; border-radius:20px ; margin-bottom: 2px" id="usr" name="tukhoa"></input>
        <button class="btn btn-success" style="width: 100px; font-size: 14px; color: white ;border-radius:20px;background-color:#8B008B "> Search</button>
    </form>
</p>
</div>

     
    <div class="container-test" style="text-align: center" >
        <div class="row" style="margin-right: 0px; margin-left: 200px;">
		    <div class="col-md-10" style="text-align: center" >
                    <table class="table table-bordered table1" , style="margin-bottom: 50px ;background-color: #DCDCDC; background-image: url(../Quan1/Style/Img/table.jpg)">
                    <tr>
                        <th style="border-radius:20px">STT</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th width = "180px">Add to cart</th>

                </tr>
                    <tbody>
        <?php
                include ("../config.php");
                if( $cn){
                    //echo 'connected';
                }
                // $char = "%";
                // if($id_search != ''){
                //     $id_search .=$char;
                // }else{
                //     $id_search = "";
                // }
                
                $sql = "select * from find_1('$id_search') limit 20";
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
                        <td> <button class="btn bnt_add" style="width: 100px; font-size: 20px;background-color:#696969" onclick="addToCart(\''.$id.'\',\''.$price.'\',\''.$name.'\') "> <i class="fas fa-cart-plus"  style="font-size:130% ; color: black"></i></button> </td>
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


</div>
