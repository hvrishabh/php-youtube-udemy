<?php


echo "HELLO logout is here";
unset($_SESSION['IS_LOGIN']);
header('location:login.php');
die();