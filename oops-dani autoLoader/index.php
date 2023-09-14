<?php
declare(strict_types=1);    // for strict mode in php


include 'includes/autoLoader.inc.php';
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
    // try{
    //     $person1->setName("Hello setName and Get Name");
    //     echo $person1->getName();
    // }catch(TypeError $e){
    //     echo "Error!: " . $e->getMessage();
    // }

    try{
        $person1->setName("hello");
        echo $person1->getName();
    }catch(TypeError $e){
        echo "Error! : " . $e->getMessage();
    }
    ?>
</body>
</html>