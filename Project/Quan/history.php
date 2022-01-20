<?php
    require_once('help.php');
    require_once('dbhelp.php');
	include_once('index1.php');
    $id_search = getPost('tukhoa');
    //echo $id_search;
    // $id = '\'H1\'';
	// $product = executeResult('select * from "WareHouse" where "ID_Product" = '.$id, false);
?>
<h3 class="timkiem" style="font-size : 20px;">Tìm kiếm đơn hàng</h3>
<div class = "index_search">
<p>
    <form  method="POST" accept-charset="utf-8"  >
       	<input required="true" class="form-control" type="date" placeholder="Nhập ngày" style="width : 30%; background-color: #EDEBF0; border-radius:20px ; margin-bottom: 2px" id="usr" name="tukhoa"></input>
        <button class="btn btn-success" style="width: 100px; font-size: 14px; color: white ;border-radius:20px;background-color:#8B008B "> Search</button>
    </form>
</p>
</div>

     
    <div class="container-test" style="text-align: center" >
        <div class="row" style="margin-right: 0px; margin-left: 200px;">
		    <div class="col-md-10" style="text-align: center" >
                    <table class="table table-bordered table1" , style="margin-bottom: 50px ;background-color: #DCDCDC">
                    <tr>
                        <th style="border-radius:20px">STT</th>
                        <th>ID Order</th>
                        <th>ID Product</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Date</th>

                </tr>
                    <tbody>
        <?php
                $cn = pg_connect( "host=localhost port=5432 dbname=test_lap
                user=postgres password=thanh20194677");
                if( $cn){
                    //echo 'connected';
                }
                // $char = "%";
                // if($id_search != ''){
                //     $id_search .=$char;
                // }else{
                //     $id_search = "";
                // }
                if($id_search != ''){
                $sql = "select * from find_by_day('$id_search')";
                $result = pg_query( $cn, $sql);
                $data = array();
                while ( $row = pg_fetch_array($result)){
                    $data[]= $row;
                }
                //echo $data[0]['ID_Product'];
                pg_close( $cn);
                for($i = 0; $i < count($data); $i++){
                    echo '<tr>
                        <td>'.($i+1).'</td>
                        <td>'.$data[$i]['_id_order'].'</td>
                        <td>'.$data[$i]['_id_product'].'</td>
                        <td>'.$data[$i]['_quantity'].'</td>
                        <td>'.$data[$i]['_status'].'</td>
                        <td>'.$data[$i]['_day'].'</td>
                    </tr>';
                }
            }
            ?>

                    </tbody>
                </table>
        
            </div>
        </div>

    </div>


<?php
	include_once('layout/footer.php');
?>