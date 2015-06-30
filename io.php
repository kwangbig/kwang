<?php
functionn file_read() {
        $fp = fopen("data.txt", 'r+');
        if(!$fp){
                echo "file open error";
        }
        while(!feof($fp)){
        $buffer = fread($fp, 1024);
        }
        fclose($fp);
}


?>

