<!DOCTYPE html>
<html>
<head>
    <title>Products Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Quan/Style/style.css">
    <link rel="stylesheet" href="../Quan/Style/Style/css/all.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .container .row {
            min-height: 1000px;
        }
    </style>
</head>
<body>
<?php
    require_once('help.php');
    require_once('dbhelp.php');
	include_once('layout/header.php');
    include_once('layout/sidebar.php');
    $id_search = getPost('tukhoa');
    //echo $id_search;
    // $id = '\'H1\'';
	// $product = executeResult('select * from "WareHouse" where "ID_Product" = '.$id, false);
?>


 



<?php
	include_once('layout/footer.php');
?>
</body>