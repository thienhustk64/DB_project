<?php
	include_once('layout/header.php');
	require_once('dbhelp.php');

	if(isset($_GET['done_id'])){
		$done_id = $_GET['done_id'];
        //echo $done_id;
		$sql = "update \"Order\" SET \"Status\" = 'Sold' where \"ID_Order\" ='$done_id'";
		execute($sql);
	}

	if(isset($_GET['cancel_id'])){
		$cancel_id = $_GET['cancel_id'];
		$sql = "update \"Order\" SET \"Status\" = 'Cancel' where \"ID_Order\" ='$cancel_id'";
		execute($sql);
	}
?>
<!-- body -->
<div class="container-test">
        <table class="table table-bordered table-hover">
            <tr>
                <th>STT</th>
                <th>ID Order</th>
                <th>Date</th>
				<th width = "60px"></th>
				<th width = "60px"></th>

        </tr>
            <tbody>
<?php
        $cn = pg_connect( "host=localhost port=5432 dbname=Test
        user=postgres password=13062001");
        if( $cn){
            //echo 'connected';
        }

        $result = pg_query( $cn, 'select * from "Order" where "Status" = \'Wait\'');
        $data = array();
        while ( $row = pg_fetch_array($result)){
            $data[]= $row;
        }
        //echo $data[0]['ID_Product'];
        pg_close( $cn);
        for($i = 0; $i < count($data); $i++){
            $id = $data[$i]['ID_Order'];
            echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$data[$i]['ID_Order'].'</td>
                <td>'.$data[$i]['Day'].'</td>
				<td> <a href=  "?done_id='.$data[$i]['ID_Order'].'"><button class="btn btn-success" style="width: 100px; font-size: 20px;"> Done</button></a></td>
				<td> <a href="?cancel_id='.$data[$i]['ID_Order'].'"><button class="btn btn-warning" style="width: 100px; font-size: 20px;"> Cancel</button></a> </td>
            </tr>';
        }
        
    ?>

            </tbody>
        </table>
        
    </div>


<?php
	include_once('layout/footer.php');
?>