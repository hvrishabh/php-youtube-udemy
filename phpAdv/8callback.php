<!-- <?php
// callback function , often called as just callback, which is passed as an argument into another function.

function mycallback($item){
    return strlen($item);
}

$strings = ["apples","orange" ,"banana" , "coconut"];

$lengths = array_map("mycallback",$strings);

echo"<pre>";
print_r($lengths);
echo"</pre>";

?> -->

<?php
$strings = ["app11les","orange" ,"banana" , "coconut"];
$lengths = array_map(function($item){return strlen($item); }, $strings    );

echo"<pre>";
print_r($lengths);
echo"</pre>";
?>

<?php
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  // Calling the $format callback function
  echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");
?>