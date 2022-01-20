<?php
    $cn = pg_connect( "host=ec2-23-23-199-57.compute-1.amazonaws.com port=5432 dbname=d5voph6nh682ao
    user=xmttvyrbszbnze password=c467c601c9d08db139aacd4bc1e6148efa419eebc6ac5dc377b828673ffb463e");
    
    if( $_POST['ID_CSM'] != NULL and $_POST['Date'] != null){
        $id_CSM = $_POST['ID_CSM'];
        $date = $_POST['Date'];

        $query = "INSERT INTO public.\"Import\"(
            \"ID_CSM\", \"Day\", \"Quantity\")
            VALUES ('" .$id_CSM . "','". $date."',0);";
        $pg_insert = pg_query( $cn, $query);
        $row = 0;
    }else{
        header("Location: index.php");
    }
    
    

    pg_close( $cn);
?>