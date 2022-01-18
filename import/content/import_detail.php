<div class="button">
                <button onclick="myCreateFunction()">+</button>
                <button onclick="myDeleteFunction()">-</button>      
            </div>

            <!-- Co the them duoc chuc nang xoa -->
            
            <div class="table_detail">
                <form method="post" id="form_detail" action="index.php?import=insert&id_csm=<?=$id_CSM?>">
                    <table style="width:20%">
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
                    
                    <table id="table_import" style="width:100%">
                        <tr>
                            <th>ID</th>
                            <th>Quantity</th>
                        </tr>
                    </table>
                    <button type="submit" value="Submit">Submit</button>
                </form>
                
            </div>