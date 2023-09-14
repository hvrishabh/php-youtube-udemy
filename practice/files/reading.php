<?php
$file = "example.txt";
if($handle = fopen($file, 'r')){
//   echo  $content = fread($handle, 100); // each byte is equal to a character

echo  $content = fread($handle, filesize('example.txt'));
    fclose($handle);
}else{
    echo "The application was not able to write on the file.";
}



?>