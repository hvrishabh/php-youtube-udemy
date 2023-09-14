
<!DOCTYPE html>
<html>
<body>

<?php
// $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("webdictionary.txt"));
// $myfile = fopen("testfile.txt", "a");

// echo("<br>"."hello"."<br>");
// fgets($myfile);
// fclose($myfile);
?>


<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe1 <br>\n";
fwrite($myfile, $txt);
$txt = "Jane Doe2 <br>\n";
fwrite($myfile, $txt);

$test2 = "Hiteh Verma <br>";
fwrite($myfile, $test2);
fclose($myfile);
?>




<?php
$testfile = fopen("newfile.txt","r") or die("unable to open file");
echo fread($testfile, filesize("newfile.txt"));
fclose($testfile);
?>


<!-- <?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?> -->
</body>
</html>