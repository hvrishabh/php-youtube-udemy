<?php
$file = "example.txt";
if($handle = fopen($file, 'w')){
    fwrite($handle, "i love php and this is really good stuff.");

    fclose($handle);
}else{
    echo "The application was not able to write on the file.";
}



?>