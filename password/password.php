<?php
// $password = "vishal";

// echo password_hash($password, PASSWORD_DEFAULT);

$password = '$2y$10$CHlzuXmluUIb715ZpEFb7.BP2BrW00vT9J.zAINlUc5qYvxEJtu6O';

echo password_verify("vishal", $password);
