<!-- <?php
//   making multidimensional array using array_map()
function square($n, $m){
    return [$n => $m];
}

$a = [1,2,3,4,5];
$b = ['lemon','orange','banana','apple','guava'];


$newarray = array_map('square', $a, $b );
echo "<pre>";
print_r($newarray);
echo "</pre>";
?> -->


<!-- //////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
//  combining two array as a string , we need to pass the two parameter in the user defined function for two array to work in array_map() function.

function square1($n, $m){
    return "$n for $m";
}

$a = [1,2,3,4,5];
$b = ['lemon','orange','banana','apple','guava'];


$newarray = array_map('square1', $a, $b );
echo "<pre>";
print_r($newarray);
echo "</pre>";
?> -->

<!-- <?php
//      making multidimensional associative array with the help of the of array_map() method.
function square2($n, $m){
    return [$n => $m];
}

$a = [1,2,3,4,5];
$b = ['lemon','orange','banana','apple','guava'];


$newarray = array_map(null, $a, $b );
echo "<pre>";
print_r($newarray);
echo "</pre>";
?> -->


<?php
//      using array_map() with the associative array

$a = array(
    "one" => "apple",
    "two" => "banana",
    "three" => "orange",
    "four" => "lichi"
);

function square3($n){
    return strtoupper($n);
}

$b = ['lemon','orange','banana','apple','guava'];


$newarray = array_map("square3", $a);
echo "<pre>";
print_r($newarray);
echo "</pre>";