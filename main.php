<?php
include('io.php');
$buffer = file_io();
echo $buffer;
?>


<form method = "post" action = "./io.php">
<center>
<input type="text" id="col1" name = "col1" placeholder="col1">
<input type="text" id="col2" name = "col2" placeholder="col2">
<button onclick="row_add(col1.value, col2.value)">insert</button>
<button onclick="row_search(col1.value, col2.value)">select</button>
<br/><br/>
<table id="mytable" border="2" cellspacing="0">
        <th>name</th>
        <th>number</th>
</table>
</center>

<script>
function row_add(col1, col2) {
        mytable = document.getElementById('mytable');
        row = mytable.insertRow(mytable.rows.length);
        cell1 = row.insertCell(0);
        cell2 = row.insertCell(1);
        cell1.innerHTML = col1;
        cell2.innerHTML = col2;
        
        }
function row_search(a, b) {
        
        
                

        }



</script>

</form>


