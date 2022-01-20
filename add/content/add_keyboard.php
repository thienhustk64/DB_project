<div class="clear"></div>
<div>
    <h3>Bàn phím</h3>
    <form  method="POST" accept-charset="utf-8" action="index.php?add=KeyBoard&insert=run">
        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="ID">ID:</label>
            <input required class="form-control" type="text" placeholder="Nhập ID" id="ID" name="ID">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Name">Name:</label>
            <input required class="form-control" type="text" placeholder="Nhập tên" id="Name" name="Name">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Brand">Brand:</label>
            <input required class="form-control" type="text" placeholder="Nhập nhãn hàng" id="Brand" name="Brand">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Price">Price:</label>
            <input required class="form-control" type="number" placeholder="Nhập giá tiền" id="Price" name="Price">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="From">From:</label>
            <input required class="form-control" type="text" placeholder="Nhập xuất xứ" id="From" name="From">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Wireless">Wireless:</label>
            <input required class="form-control" type="checkbox" id="Wireless" name="Wireless" style="width: 3%; position: Relative;">
        </div>
        
        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Switch">Switch:</label>
            <input required class="form-control" type="text" placeholder="Nhập kiểu switch" id="Switch" name="Switch">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Led">Led:</label>
            <input required class="form-control" type="text" placeholder="Nhập kiểu đèn led" id="Led" name="Led">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Type">Type:</label>
            <input required class="form-control" type="text" placeholder="Nhập lại bàn phím" id="Type" name="Type">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Size">Size:</label>
            <input required class="form-control" type="text" placeholder="Nhập kích thước" id="Size" name="Size">
        </div>

        <button class="btn btn-success" type="submit" value="Submit" style="width: 100px; font-size: 20px;">Add</button>
    </form>
</div>