<div class="clear"></div>
<div>
    <form method="post" id="form_import" action="index.php?import=detail">
                    <div class="form_row">
                        <label class="col-sm-2 col-form-label" for="ID_CSM">ID Consignment:</label>
                        <input required class="form-control" type="text" id="ID_CSM" name="ID_CSM" placeholder="Ex: I1">
                    </div>
                    <div class="form_row"> 
                        <label class="col-sm-2 col-form-label" for="Date">Date:</label>
                        <input required class="form-control" type="date" id="Date" name="Date" placeholder="Ex: 2021-1-1">
                    </div>

                    <button class="btn btn-success" type="submit" value="Submit" style="width: 100px; font-size: 20px;">Create</button>
                </form>
</div>