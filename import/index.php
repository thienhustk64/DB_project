
<!DOCTYPE html>

<html>
    <head>
        <title>Import</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main.css">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <style>
            table, th, td{
                border: 1px solid black;
                border-collapse: collapse;
            }
            
            th:nth-child(even),td:nth-child(even){
                background-color: #D6EEEE;
            }
        </style>
        <script type="text/javascript" src="includes/script.js"></script>
        <!-- Latest compiled and minified CSS -->
	
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="form_container">            
            <?php
                include "header.php";
            ?>
            <div class="clear"></div>
            <div id="content">
                <?php
                    include "sidebar.php";
                ?>
                
                <div class="maincontent">
                    <?php
                        if( !isset( $_GET['import'])){
                            $tmp1 = 'create';
                        }else{
                            $tmp1 = $_GET['import'];
                        }
                        if( $tmp1 == 'create'){
                            include "content/import.php";
                        }
                        if( $tmp1 == 'check'){
                            include "content/check.php";
                        }
                        if( isset( $_GET['import'])){
                            $tmp = $_GET['import'];
                            if( $tmp == 'detail'){
                                include "includes/insert.php";
                                include "content/import_detail.php";
                            }
                            if( $tmp == 'insert'){
                                include "includes/insert_detail.php";
                            }
                        }
                    ?>
                </div>
            </div>
            <?php
                include "footer.php";
            ?>
        </div>
    </body>
</html>