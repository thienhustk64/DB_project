<?php
    $cn = pg_connect( "host=ec2-23-23-199-57.compute-1.amazonaws.com port=5432 dbname=d5voph6nh682ao
    user=xmttvyrbszbnze password=c467c601c9d08db139aacd4bc1e6148efa419eebc6ac5dc377b828673ffb463e");
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