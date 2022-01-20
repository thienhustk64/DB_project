<?php
    $cn = pg_connect( "host=ec2-23-23-199-57.compute-1.amazonaws.com port=5432 dbname=d5voph6nh682ao
    user=xmttvyrbszbnze password=c467c601c9d08db139aacd4bc1e6148efa419eebc6ac5dc377b828673ffb463e");
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