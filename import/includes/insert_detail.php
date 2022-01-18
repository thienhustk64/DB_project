<?php
    $cn = pg_connect( "host=localhost port=5432 dbname=test_lab
        user=postgres password=123456");
    $id_csm = $_GET['id_csm'];
    $i = 1;

    while( isset( $_POST[ 'id'.(string)$i]) && $_POST[ 'id'.(string)$i] != NULL 
            && isset( $_POST[ 'quantity'.(string)$i]) && $_POST[ 'quantity'.(string)$i] != NULL){
        $id = $_POST[ 'id'.(string)$i];
        $quantity =  $_POST[ 'quantity'.(string)$i];
        $query = "INSERT INTO public.\"Import_detail\"(
            \"ID_CSM\", \"ID_Product\", \"Quantity\")
            VALUES ('".$id_csm."','".$id."',".$quantity.");";
        $pg_insert_detail = pg_query( $cn, $query);

        if( $pg_insert_detail){
            echo "Thanh cong";
        }else{
            echo "That bai";
        }
        $i++;
    }
    header("Location: index.php");
    pg_close( $cn);
?>