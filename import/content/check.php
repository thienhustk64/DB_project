<div class="clear"></div>
<div>
    <h3 style="font-size : 20px; color:white;">Tìm kiếm sản phẩm</h3>
    <p>
        <form  method="POST" accept-charset="utf-8" action="index.php?import=check&check=detail">
            <input required="true" class="form-control" type="text" placeholder="Nhập ID" style="width : 30%" id="usr" name="id_csm"></input>
            <button class="btn btn-success" style="width: 100px; font-size: 14px;"> Search</button>
        </form>
    </p>
    <?php
        if(!isset($_GET['check'])){
            include "includes/list_import.php";
            if(isset($_GET['delete_idcsm']) && !isset($_GET['delete_id'])){
                include "includes/delete_import.php";
            }
        }else if (isset($_GET['check'])){
            include "includes/list_detail.php";
            if(isset($_GET['delete_idcsm']) && !isset($_GET['delete_id'])){
                include "includes/delete_import.php";
            }elseif( isset($_GET['delete_idcsm']) && isset($_GET['delete_id'])){
                include "includes/delete_import_detail.php";
            }
        }
    ?>
</div>