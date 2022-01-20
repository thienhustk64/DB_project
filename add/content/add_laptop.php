<div class="clear"></div>
<div>
    <h3>Laptop</h3>
    <form  method="POST" accept-charset="utf-8" action="index.php?add=Laptop&insert=run">
        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="ID">ID:</label>
            <input required class="form-control" type="text" placeholder="Nhập ID" id="ID" name="ID">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Name">Name:</label>
            <input required class="form-control" type="text"  placeholder="Nhập tên" id="Name" name="Name">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Brand">Brand:</label>
            <input required class="form-control" type="text"  placeholder="Nhập nhãn hàng" id="Brand" name="Brand">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Price">Price:</label>
            <input required class="form-control" type="number"  placeholder="Nhập giá tiền" id="Price" name="Price">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="From">From:</label>
            <input required class="form-control" type="text"  placeholder="Nhập xuất xứ" id="From" name="From">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Guarantee">Guarantee:</label>
            <input required class="form-control" type="number"  placeholder="Nhập thời gian bảo hành: 12" id="Guarantee" name="Guarantee">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="CPU">CPU:</label>
            <input required class="form-control" type="text"  placeholder="Nhập CPU" id="CPU" name="CPU">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="RAM">RAM:</label>
            <input required class="form-control" type="text"  placeholder="Nhập RAM" id="RAM" name="RAM">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="ROM">ROM:</label>
            <input required class="form-control" type="text"  placeholder="Nhập ROM" id="ROM" name="ROM">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="VGA">VGA:</label>
            <input required class="form-control" type="text"  placeholder="Nhập VGA" id="VGA" name="VGA">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Screen">Screen:</label>
            <input required class="form-control" type="text"  placeholder="Nhập loại màn hình" id="Screen" name="Screen">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Keyboard">Keyboard:</label>
            <input required class="form-control" type="text"  placeholder="Nhập loại bàn phím" id="Keyboard" name="Keyboard">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Audio">Audio:</label>
            <input required class="form-control" type="text"  placeholder="Nhập loại loa" id="Audio" name="Audio">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="LAN">LAN:</label>
            <input required class="form-control" type="text"  placeholder="Nhập LAN" id="LAN" name="LAN">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Wireless">Wireless:</label>
            <input required class="form-control" type="text"  placeholder="Nhập công nghệ wireless" id="Wireless" name="Wireless">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Webcam">Webcam:</label>
            <input required class="form-control" type="checkbox" style="width: 35px" id="Webcam" name="Webcam" style="width: 3%; position: Relative;">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Gate">Gate:</label>
            <input required class="form-control" type="text"  placeholder="Nhập các cổng" id="Gate" name="Gate">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="OS">OS:</label>
            <input required class="form-control" type="text"  placeholder="Nhập hệ điều hành" id="OS" name="OS">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Battery">Battery:</label>
            <input required class="form-control" type="number"  placeholder="Nhập pin" id="Battery" name="Battery">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Weight">Weight:</label>
            <input required class="form-control" type="number" step=0.01  placeholder="Nhập cân nặng" id="Weight" name="Weight">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Size">Size:</label>
            <input required class="form-control" type="text"  placeholder="Nhập kích thước" id="Size" name="Size">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Color">Color:</label>
            <input required class="form-control" type="text"  placeholder="Nhập màu sắc" id="Color" name="Color">
        </div>

        <div class="form_row">
            <label style="color:white; min-width: 100px;" class="col-form-label" for="Security">Security:</label>
            <input required class="form-control" type="text"  placeholder="Nhập bảo mật" id="Security" name="Security">
        </div>

        <button class="btn btn-success" type="submit" value="Submit" style="width: 100px; font-size: 20px;">Add</button>
    </form>
</div>