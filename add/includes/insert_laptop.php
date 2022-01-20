<?php
    include("../config.php");
    $ID = $_POST['ID'];
    $Name = $_POST['Name'];
    $Brand = $_POST['Brand'];
    $Price = $_POST['Price'];
    $From = $_POST['From'];
    $Guarantee = $_POST['Guarantee'];
    $CPU = $_POST['CPU'];
    $RAM = $_POST['RAM'];
    $ROM = $_POST['ROM'];
    $VGA = $_POST['VGA'];
    $Screen = $_POST['Screen'];
    $Status = "OutStock";
    $Keyboard = $_POST['Keyboard'];
    $Audio = $_POST['Audio'];
    $LAN = $_POST['LAN'];
    $Wireless = $_POST['Wireless'];
    
    if( isset( $_POST['Webcam'])){
        $Webcam = "True";
    }else{
        $Webcam = "False";
    }
    $Gate = $_POST['Gate'];
    $OS = $_POST['OS'];
    $Battery = $_POST['Battery'];
    $Weight = $_POST['Weight'];
    $Size = $_POST['Size'];
    $Color = $_POST['Color'];
    $Security = $_POST['Security'];

    $Query = "INSERT INTO public.\"Laptop\"(
        \"ID\", \"Name\", \"Brand\", \"Price\", \"From\", \"Guarantee\", \"CPU\", \"RAM\", \"ROM\", 
        \"VGA\", \"Screen\", \"Status\", \"Keyboard\", \"Audio\", \"LAN\", \"Wireless\", \"Webcam\", 
        \"Gate\", \"OS\", \"Battery\", \"Weight\", \"Size\", \"Color\", \"Security\")
        VALUES ('$ID', '$Name', '$Brand', $Price,
        '$From', $Guarantee, '$CPU', '$RAM',
        '$ROM', '$VGA', '$Screen', '$Status',
        '$Keyboard', '$Audio', '$LAN',
        '$Wireless', '$Webcam', '$Gate', '$OS', $Battery,
        $Weight, '$Size', '$Color', '$Security');";

    @header("Location: index.php?add=Laptop");
    $start = pg_query( $cn, $Query);
    pg_close( $cn);
?>