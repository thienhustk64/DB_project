/*$.post( 'insert_detail.php',{'row':x});
cho lệnh này vào 2 function dưới */

function myCreateFunction() {
    var x = document.getElementById("table_import").rows.length;
    var table = document.getElementById("table_import");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);

    var element1= document.createElement("input");
    element1.type="text";
    element1.style = "width: 100%";
    element1.name = "id" + String(x);
    element1.required = true;
    cell1.appendChild(element1);

    var element2= document.createElement("input");
    element2.type="text";
    element2.style = "width: 100%"
    element2.name = "quantity" + String(x);
    element2.required = true;
    cell2.appendChild(element2);

    var n_row = document.getElementById("row");
    n_row.innerHTML = String(x);
}

function myDeleteFunction() {
    var x = document.getElementById("table_import").rows.length;
    if( x != 1){
        document.getElementById("table_import").deleteRow(-1);
        var n_row = document.getElementById("row");
        n_row.innerHTML = String( x - 2);
    }
}