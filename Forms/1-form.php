<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="1-welcome.php" method="post" >
    <!-- <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" > -->


    Name: <input type="text" name="name"><br><br>
    E-mail: <input type="email" name="email"><br><br>
    Website: <input type="text" name="website"><br><br>
    Message: <input type="text" name="message"><br><br>
    Gender:
    <input type="checkbox" name="gender" id="">Male
    <input type="checkbox" name="gender" id="">  Female
    <input type="checkbox" name="gender" id="">Other<br><br>

    <input type="submit">
    </form>
</body>
</html>