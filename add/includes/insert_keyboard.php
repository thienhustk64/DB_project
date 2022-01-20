<?php
    include("../config.php");
    $ID = $_POST['ID'];
    $Name = $_POST['Name'];
    $Brand = $_POST['Brand'];
    $Price = $_POST['Price'];
    $From = $_POST['From'];   
    if( isset($_POST['Wireless'])){
        $Wireless = "True";
    }else{
        $Wireless = "False";
    }
    $Status = "Outstock";
    $Switch = $_POST['Switch'];
    $Led = $_POST['Led'];
    $Type = $_POST['Type'];
    $Size = $_POST['Size'];

    $Query = "INSERT INTO public.\"KeyBoard\"(
        \"ID\", \"Name\", \"Brand\", \"Price\", \"From\", 
        \"Wireless\", \"Status\", \"Switch\", \"Led\", \"Type\", \"Size\")
        VALUES ('$ID', '$Name', '$Brand', $Price, '$From', '$Wireless', 
        '$Status', '$Switch', '$Led', '$Type', '$Size');";

    @header("Location: index.php?add=KeyBoard");
    $start = pg_query( $cn, $Query);
    pg_close( $cn);
?>