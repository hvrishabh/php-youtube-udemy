<?php

// session is a way to store information (in variables) to be used across multiple pages.
// Unlike a cookie, the information is not stored on the users computer.

//Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.

//So; Session variables hold information about one single user, and are available to all pages in one application.


// start a PHP session

session_start();

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
    // Set session variables
    $_SESSION["favcolor"] = "yellow";
    $_SESSION["favanimal"] = "cat";
    $_SESSION["favperson"] = "me";
    echo "Session variable are set. ";
    ?>
</body>
</html>