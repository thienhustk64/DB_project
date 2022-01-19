<div class="header">
    <div class ="logo">
        <a href= "index.php">
            <img src="../images/logo/logo.jpg">
        </a>
    </div>
            <ul class ="list_main_menu">
                <li><a href="index.php?quanly=WareHouse">Trang chủ</a></li>
                <li><a href="index.php?quanly=WareHouse">Kho hàng</a></li>
                <li><a href="index.php?quanly=Import">Nhập lô</a></li>
                <li><a href="index.php?quanly=Export">Xuất kho</a></li>
                <li><a href="index.php?quanly=Status">Tình trạng sản phẩm</a><li>
            </ul>
            <div class = "box">
                <div class= "clear"></div>
                <form class="timkiem" action="index.php?quanly=findtool" method="POST" accept-charset="utf-8">
                    <input class="timkiem_txt" type="text" placeholder="Tìm kiếm sản phẩm" name="tukhoa" required></input>
                    <input class "sbutton" type ="submit" name = "findtool" value ="Tìm">
                    </input>
                </form>
            </div>
    <div class ="clear"></div> 
</div>

