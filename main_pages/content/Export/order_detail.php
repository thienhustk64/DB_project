<?php
    if(isset($_POST['findorder'])){
        $tukhoa = $_POST['tukhoa'];
    } 
    $postgres_prod_find_order = pg_query($cn,'SELECT * FROM find_by_day(\'' . $tukhoa  . '\');');
?>
<table style=" width:70%" border="1"">
    <tr>
        <th>ID_Order</th>
        <th>ID_Product</th>
        <th>Số lượng</th>
        <th>Tình trạng</th>
        <th>Thời gian</th>
    </tr>
<h3>Kết quả tìm kiếm của <?php echo $tukhoa?>:</h3>
    <?php
        while($row_prod = pg_fetch_array($postgres_prod_find_order)){
    ?>
        <tr>
            <td><?php echo $row_prod['_id_order'] ?></td>
            <td><?php echo $row_prod['_id_product'] ?></td>
            <td><?php echo $row_prod['_quantity'] ?></td>
            <td><?php echo $row_prod['_status'] ?></td>
            <td><?php echo $row_prod['_day'] ?></td>
        </tr>
    <?php
    }
    pg_close( $cn);
    ?>     
</table>
