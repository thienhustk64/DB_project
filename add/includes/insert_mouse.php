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
    $DPI = $_POST['DPI'];
    $IPS = $_POST['IPS'];
    $Color = $_POST['Color'];
    $Size = $_POST['Size'];
    $Weight = $_POST['Weight'];
    $Led = $_POST['Led'];

    $Query = "INSERT INTO public.\"Mouse\"(
        \"ID\", \"Name\", \"Brand\", \"Price\", \"From\",
        \"Wireless\", \"Status\", \"DPI\", \"IPS\", \"Color\", \"Size\",
        \"Weight\", \"Led\")
        VALUES ( '$ID', '$Name', '$Brand', $Price, '$From', '$Wireless',
        '$Status', $DPI, $IPS, '$Color', '$Size', '$Weight', '$Led');";

    @header("Location: index.php?add=Mouse");
    $start = pg_query( $cn, $Query);
    pg_close( $cn);
?>