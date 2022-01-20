<?php
    $cn = pg_connect( "host=ec2-23-23-199-57.compute-1.amazonaws.com port=5432 dbname=d5voph6nh682ao
    user=xmttvyrbszbnze password=c467c601c9d08db139aacd4bc1e6148efa419eebc6ac5dc377b828673ffb463e");
    $ID = $_POST['ID'];
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
    $From = $_POST['From'];   
    if( isset($_POST['Wireless'])){
        $Wireless = "True";
    }else{
        $Wireless = "False";
    }
    $Status = "Outstock";
    $Guarantee = $_POST['Guarantee'];
    $Type = $_POST['Type'];
    $Led = $_POST['Led'];
    $Color = $_POST['Color'];
    if( isset($_POST['Microphone'])){
        $Microphone = "True";
    }else{
        $Microphone = "False";
    }
    $Brand = $_POST['Brand'];

    $Query = "INSERT INTO public.\"HeadPhone\"(
        \"ID\", \"Name\", \"Price\", \"From\", \"Wireless\", \"Status\", 
        \"Guarantee\", \"Type\", \"Led\", \"Color\", \"Microphone\", \"Brand\")
        VALUES ('$ID', '$Name', $Price, '$From', '$Wireless', '$Status', '$Guarantee', '$Type', '$Led', '$Color', '$Microphone', '$Brand');";

    @header("Location: index.php?add=HeadPhone");
    $start = pg_query( $cn, $Query);
    pg_close( $cn);
?>