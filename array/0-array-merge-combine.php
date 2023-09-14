<?php

$a = ["one"=>"sanjay","aman","rehman"];
$b = [
   "one" => ["test" => ["sd1"=>"carrot",
            "sd2" =>"carrot2"]],
    "two" => "tamoto",
    "three" => "heher"
];

$color = [
    "red",
    "green",
    "thisnk"
];

// $newArray = array_combine($a, $color);
// $newArray = array_merge($a, $b, $color);
$newArray = array_merge_recursive($a, $b, $color);

echo"<pre>";
print_r($newArray);
echo"<pre>";

//  array combine makes it key value pair;
// array merge makes a new array , with adding all the associative and index arrays
// array_merge() replaces the values that are present with the same key name
// array_combine_recursive works with the multidimensional arrys,
// it doesnt replaces any value with the same key, rather it makes a new key value pair , under the same key name