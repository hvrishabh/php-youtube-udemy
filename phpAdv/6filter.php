<?php

//validating data = checking if the data is in proper form
//sanitizing data = remove any illegal chararcter from the data.
// echo "<pre>";
// print_r( filter_list());
// echo "</pre>";


// echo "<br>";
//
 ?>

<?php
$email = "john#.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

print_r($email);
echo "<br>";

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
?>

<?php
$int = 00;

if (filter_var($int, FILTER_VALIDATE_INT) ===0 || !filter_var($int, FILTER_VALIDATE_INT) === false ) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}

echo "<br>";
echo "<br>";
?>

<?php
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}
echo "<br>";
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <table>
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>
    <?php
    foreach(filter_list() as $key=> $value){
        echo '<tr><td>' . $value . '</td><td>' . filter_id($value) . '</td></tr>';
    }
    ?>


  </table>
</body>
</html>