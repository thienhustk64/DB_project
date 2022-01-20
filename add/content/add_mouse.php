<div class="clear"></div>
<div>
    <h3>Chuột</h3>   
    <form  method="POST" accept-charset="utf-8" action="index.php?add=Mouse&insert=run">
        <div class="form_row">
            <label  style="color:white; min-width: 100px;" class="col-form-label" for="ID">ID:</label>
            <input required class="form-control" type="text" placeholder="Nhập ID" id="ID" name="ID">
        </div>

        <div class="form_row">
            <label  style="color:white; min-width: 100px;" class="col-form-label" for="Name">Name:</label>
            <input required class="form-control" type="text" placeholder="Nhập tên" id="Name" name="Name">
        </div>

        <div class="form_row">
            <label  style="color:white; min-width: 100px;" class="col-form-label" for="Brand">Brand:</label>
            <input required class="form-control" type="text" placeholder="Nhập nhãn hàng" id="Brand" name="Brand">
        </div>

        <div class="form_row">
            <label  style="color:white; min-width: 100px;" class="col-form-label" for="Price">Price:</label>
            <input required class="form-control" type="number" placeholder="Nhập giá tiền" id="Price" name="Price">
        </div>

        <div class="form_row">
            <label  style="color:white; min-width: 100px;" class="col-form-label" for="From">From:</label>
            <input required class="form-control" type="text" placeholder="Nhập xuất xứ" id="From" name="From">
        </div>

        <div class="form_row">
            <label  style="color:white; min-width: 100px;" class="col-form-label" for="Wireless">Wireless:</label>
            <input required class="form-control" type="checkbox" id="Wireless" name="Wireless" style="width: 3%; position: Relative;">
        </div>
        
        <div class="form_row">
            <label  style="color:white; min-width: 100px;" class="col-form-label" for="DPI">DPI:</label>
            <input required class="form-control" type="number" placeholder="Nhập DPI" id="DPI" name="DPI">
        </div>

        <div class="form_row">
            <label  style="color:white; min-width: 100px;" class="col-form-label" for="IPS">IPS:</label>
            <input required class="form-control" type="number" placeholder="Nhập IPS" id="IPS" name="IPS">
        </div>

        <div class="form_row">
            <label  style="color:white; min-width: 100px;" class="col-form-label" for="Color">Color:</label>
            <input required class="form-control" type="text" placeholder="Nhập màu sắc" id="Color" name="Color">
        </div>

        <div class="form_row">
            <label  style="color:white; min-width: 100px;" class="col-form-label" for="Size">Size:</label>
            <input required class="form-control" type="text" placeholder="Nhập kích thước" id="Size" name="Size">
        </div>
        
        <div class="form_row">
            <label  style="color:white; min-width: 100px;" class="col-form-label" for="Weight">Weight:</label>
            <input required class="form-control" type="number" step=0.01 placeholder="Nhập cân nặng" id="Weight" name="Weight">
        </div>

        <div class="form_row">
            <label  style="color:white; min-width: 100px;" class="col-form-label" for="Led">Led:</label>
            <input required class="form-control" type="text" placeholder="Nhập kiểu đèn led" id="Led" name="Led">
        </div>

        <button class="btn btn-success" type="submit" value="Submit" style="width: 100px; font-size: 20px;">Add</button>
    </form>
</div>