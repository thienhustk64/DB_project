<?php
    include("../config.php");
    
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