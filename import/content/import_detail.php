            <!-- Co the them duoc chuc nang xoa -->
            
            <div class="table_detail">
                <form method="post" id="form_detail" action="">
                    <table class="table table-bordered table-hover" style="width:20%">
                        <tr>
                            <th style="width:50%" >ID</th>
                            <th style="width:50%"><?php echo $id_CSM?></th>
                        </tr>
                        <tr>
                            <th style="width:50%">Date</th>
                            <th style="width:50%"><?php echo $date?></th>
                        </tr>
                        <tr>
                            <th style="width:50%" >Row</th>
                            <th style="width:50%" id="row" name="n_row">0</th>
                        </tr>
                    </table>
                    <div class="button">
                        <div class="btn btn-success" style="width: 10%; font-size: 20px;" onclick="myCreateFunction()"> + </div>   
                        <div class="btn btn-warning" style="width: 10%; font-size: 20px;" onclick="myDeleteFunction()"> - </div>
                    </div>

                    <table class="table table-bordered table-hover"  id="table_import" style="width:100%">
                        <tr>
                            <th style="width:20%">ID</th>
                            <th style="width:80%">Quantity</th>
                        </tr>
                    </table>
                    <button class="btn btn-success" type="submit" value="Submit" style="width: 100px; font-size: 20px;">Submit</button>
                </form>
                
            </div>