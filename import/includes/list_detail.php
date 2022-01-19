<div>
    <table class="table table-bordered table-hover">
        <tr>
            <th style="width: 20%">ID Consignment</th>
            <th style="width: 40%">Date</th>
            <th style="width: 30%">Total</th>
            <th style="width: 10%"></th>
        </tr>

        <tbody>
            <?php
                if( $_GET['check'] != "detail"){
                    $id_csm = $_GET['check'];
                }else{
                    $id_csm = $_POST['id_csm'];
                }
                $cn = pg_connect( "host=localhost port=5432 dbname=test_lab
                user=postgres password=123456");
            
                $query = 'select * from "Import" where "ID_CSM"=\''.$id_csm.'\';';
                $result = pg_query( $cn, $query);
                $data = array();
                while( $row = pg_fetch_array( $result)){
                    $data[] = $row;
                }
                pg_close( $cn);
            
                for($i = 0; $i < count($data); $i++){
                    $id = $data[$i]['ID_CSM'];
                    echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$data[$i]['Day'].'</td>
                        <td>'.$data[$i]['Quantity'].'</td>
                        <td> <a href=  "index.php?import=check&delete_idcsm='.$id.'"><button class="btn btn-warning" style="width: 100px; font-size: 20px;">Delete</button></a></td>
                    </tr>';
                }
            ?>
        </tbody>
    </table>
</div>

<div>
    <table class="table table-bordered table-hover">
        <tr>
            <th style="width: 20%">ID Product</th>
            <th style="width: 40%">Quantity</th>
            <th style="width: 10%"></th>
        </tr>

        <tbody>
            <?php
                ob_start();
                if( $_GET['check'] != "detail"){
                    $id_csm = $_GET['check'];
                }else{
                    $id_csm = $_POST['id_csm'];
                }
                
                $cn = pg_connect( "host=localhost port=5432 dbname=test_lab
                user=postgres password=123456");
            
                $query = 'select * from "Import_detail" where "ID_CSM"=\''.$id_csm.'\';';
                $result = pg_query( $cn, $query);
                $data = array();
                while( $row = pg_fetch_array( $result)){
                    $data[] = $row;
                }
                pg_close( $cn);
            
                for($i = 0; $i < count($data); $i++){
                    $id = $data[$i]['ID_Product'];
                    echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$data[$i]['Quantity'].'</td>
                        <td> <a href=  "index.php?import=check&check=detail&delete_idcsm='.$id_csm.'&delete_id='.$id.'"><button class="btn btn-warning" style="width: 100px; font-size: 20px;">Delete</button></a></td>
                    </tr>';
                }
            ?>
        </tbody>
    </table>
</div>

