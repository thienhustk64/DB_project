<?php
    $cn = pg_connect( "host=ec2-23-23-199-57.compute-1.amazonaws.com port=5432 dbname=d5voph6nh682ao
    user=xmttvyrbszbnze password=c467c601c9d08db139aacd4bc1e6148efa419eebc6ac5dc377b828673ffb463e");
    $id_csm = $_GET['delete_idcsm'];
    $id = $_GET['delete_id'];
    $query = 'DELETE FROM public."Import_detail" WHERE "ID_CSM" =\'' . $id_csm.'\' and "ID_Product" = \''.$id.'\';';
    $result = pg_query( $cn, $query);
    header("Location: index.php?import=check&check=".$id_csm);
    pg_close($cn);
    ob_end_flush();
?>