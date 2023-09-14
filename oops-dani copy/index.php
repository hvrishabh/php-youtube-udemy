<?php
include('includes/person.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $person1 = new Person();
//    echo  $person1->name = "Daniel<br>";
//    echo  $person1->eyeColor = "Blue<br>";
//    echo $person1->age = "27<br>";

    $person1->setName("Daniel", "Blue", "33");
    echo  $person1->name . " is the Name<br>";
    echo  $person1->eyeColor . " is the EyeCOlor<br>";
    echo  $person1->age . " is the age<br>";

    $person2 = new Person();
    echo "<br>Person 2 <br>";
    $person1->setName("Timmy", "Brown", "36");
    echo  $person1->name . " is the Name<br>";
    echo  $person1->eyeColor . " is the EyeCOlor<br>";
    echo  $person1->age . " is the age<br>";

    ?>
</body>
</html>