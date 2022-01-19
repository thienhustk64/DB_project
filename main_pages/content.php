<div class="clear"></div>
        <div id="content">
            <?php
                 if(isset($_GET['quanly'])){
                    $tmp = $_GET['quanly'];
                }else{
                    $tmp='WareHouse';
                }
                if($tmp == 'WareHouse' || $tmp == "Trang_Chu"){ 
                    include("main_pages/sidebar/sidebar.php");
                }
            ?>
            <div class="maincontent">
            <?php
                if($tmp == 'WareHouse' || $tmp == "Trang_Chu"){ 
                    if(isset($_GET['sanpham'])){
                        $tmp2 = $_GET['sanpham'];
                    }else{
                        $tmp2 ='Laptop';
                    }if($tmp2 == 'Laptop'){
                        include("main_pages/content/WareHouse/Laptop/index.php");
                    }elseif($tmp2 == 'KeyBoard'){
                        include("main_pages/content/WareHouse/KeyBoard/index.php");
                    }elseif($tmp2 == 'HeadPhone'){
                        include("main_pages/content/WareHouse/HeadPhone/index.php");
                    }elseif($tmp2 == 'Mouse'){
                        include("main_pages/content/WareHouse/Mouse/index.php");
                    }
                }elseif($tmp == 'Import'){
                    include("main_pages/content/Import/index.php");
                }elseif($tmp == 'Export'){
                    include("Quan/index1.php");
                }elseif($tmp == 'HeadPhone' || $tmp == 'KeyBoard' ||$tmp == 'Mouse' || $tmp == 'Laptop'){
                    include("main_pages/content/WareHouse/product.php");
                }elseif($tmp == 'findtool'){
                    include("main_pages/find.php");
                }elseif($tmp = 'findorder'){
                    include("main_pages/content/Export/order_detail.php");
                }
            ?>
            </div>
        </div>
