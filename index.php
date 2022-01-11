<?php
    $cn = pg_connect( "host=ec2-23-23-199-57.compute-1.amazonaws.com port=5432 dbname=d5voph6nh682ao
    user=xmttvyrbszbnze password=c467c601c9d08db139aacd4bc1e6148efa419eebc6ac5dc377b828673ffb463e");
    if( $cn){
        echo 'connected';
    }

    $result = pg_query( $cn, 'select * from "WareHouse"');
    while ( $row = pg_fetch_object( $result)){
        echo "<br/>".$row->ID_Product;
    }
    pg_close( $cn);
?>