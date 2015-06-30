<?php
function file_io(){
        $col1 = $_POST['col1'];
        $col2 = $_POST['col2'];
        $fp = fopen("data.txt", 'r+');
        if(!$fp){
                echo "file open error";
        }
        $buffer = "";
        while(!feof($fp)){
        $buffer = fread($fp, 1024);

        }
        fwrite($fp, $col1, strlen($col1));
        fwrite($fp, $col2, strlen($col2));
        fclose($fp);
        return $buffer;
}
?>
