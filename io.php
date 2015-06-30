<?php
	$col1 = $_POST["col1"];
        $col2 = $_POST["col2"];
        //$col = $col1 + . + $col2
        echo $col1;
        echo $col2;
        $fp = fopen("data.txt", 'r+');
        if(!$fp){
                echo "file open error";
        }
        while(!feof($fp)){
        $buffer = fread($fp, 1024);
        echo $buffer;
        }
        fwrite($fp, $col1, strlen($col1));
        fwrite($fp, $col2, strlen($col2));
        fclose($fp);
?>


