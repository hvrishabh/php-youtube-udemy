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
   <form action="includes/calc.inc.php" method="post">
    <p>My own calculator </p>
    <input type="number" name="num1" placeholder="First number">
    <select name="oper" id="">
        <option value="add">Addition</option>
        <option value="sub">Substration</option>
        <option value="div">Division</option>
        <option value="mul">Multiplication</option>
    </select>
    <input type="number" name="num2" placeholder="Second number">
    <button type="submit" name="submit">calculate</button>



   </form>

</body>
</html>