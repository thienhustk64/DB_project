<div class="clear"></div>
<div>
    <h3>Tai nghe</h3>
    <form  method="POST" accept-charset="utf-8" action="index.php?add=HeadPhone&insert=run">
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
            <input class="form-control" type="checkbox" id="Wireless" name="Wireless" style="width: 3%; position: Relative;">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Guarantee">Guarantee:</label>
            <input required class="form-control" type="number" placeholder="Nhập thời gian bảo hành: 12" id="Guarantee" name="Guarantee">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Type">Type:</label>
            <input required class="form-control" type="text" placeholder="Nhập kiểu loại" id="Type" name="Type">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Led">Led:</label>
            <input required class="form-control" type="text" placeholder="Nhập loại đèn led" id="Led" name="Led">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Color">Color:</label>
            <input required class="form-control" type="text" placeholder="Nhập màu" id="Color" name="Color">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Microphone">Microphone:</label>
            <input class="form-control" type="checkbox" id="Microphone" name="Microphone" style="width: 3%; position: Relative;">
        </div>

        <button class="btn btn-success" type="submit" value="Submit" style="width: 100px; font-size: 20px;">Add</button>
    </form>
</div>