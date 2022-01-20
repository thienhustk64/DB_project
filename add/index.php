<!DOCTYPE html>
<html>
    <head>
        <title>Thêm sản phẩm</title>
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
    
    <body class="body_thien">
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
                        if( !isset( $_GET['add'])){
                            $tmp1 = 'Laptop';
                        }else{
                            $tmp1 = $_GET['add'];
                        }
                        if( $tmp1 == 'Laptop'){
                            include "content/add_laptop.php";
                        }elseif( $tmp1 == 'HeadPhone'){
                            include "content/add_headphone.php";
                        }elseif( $tmp1 == 'KeyBoard'){
                            include "content/add_keyboard.php";
                        }elseif( $tmp1 == 'Mouse'){
                            include "content/add_mouse.php";
                        }

                        if( isset( $_GET['insert'])){
                            if( $tmp1 == 'Laptop'){
                                include "includes/insert_laptop.php";
                            }elseif( $tmp1 == 'HeadPhone'){
                                include "includes/insert_headphone.php";
                            }elseif( $tmp1 == 'KeyBoard'){
                                include "includes/insert_keyboard.php";
                            }elseif( $tmp1 == 'Mouse'){
                                include "includes/insert_mouse.php";
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