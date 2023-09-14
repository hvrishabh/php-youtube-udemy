<?php


echo "HELLO dashboard is here <br>";


include 'db.php';
if(!(isset($_SESSION['IS_LOGIN']))){
    header('location:login.php');
    die();
}
echo "welcome User  ". $_SESSION['UNAME'];
?>

<br>

<button><a href="logout.php">Logout</a></button>