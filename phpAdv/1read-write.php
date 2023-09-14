<!-- <?php

echo ("hello this is the PHP file to practise read and write <br>" );



$myfile = fopen("newfile1.txt", "w") or die("Unable to open file!");
$txt = "John Doe1 <br>\n";
fwrite($myfile, $txt);
$txt = "Jane Doe2 <br>\n";
fwrite($myfile, $txt);

$test2 = "Hitesh Verma <br>";
fwrite($myfile, $test2);
fclose($myfile);
$testfile = fopen("newfile1.txt","r");
echo fread($testfile, filesize("newfile1.txt"));
// while(!feof($testfile)){
//  echo fgets($testfile). "<br>";
// }
fclose($testfile);
?> -->




<?php
$myfile = fopen("newfile1.txt", "a") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);

$testfile = fopen("newfile1.txt","r");
// echo fread($testfile, filesize("newfile1.txt"));
while(!feof($testfile)){
 echo fgets($testfile). "<br>";
}
fclose($testfile);
?>