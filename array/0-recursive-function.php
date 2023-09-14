<!-- <?php

function display($number){
    if($number <= 5){
        echo "$number <br>";
        display($number+ 1);
    }
}

display(3);

?> -->

<!--
<?php
// factorial of a no
function factorial($n){
    if($n == 0){
        return 1;
    }

    else{
        return($n * factorial($n -1));
    }
}

echo factorial(3);

?> -->

<?php
// factorial using the forloop;
$a = 5;
$temp = 1;
for($i=1; $i<=3; $i++){
  $temp = $i*$temp;
}

echo $temp;