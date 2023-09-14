<?php
// this line hide the warnings
error_reporting(0);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsiveform";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn){
    echo "connection ok";
}
else {
    // echo "connection failed";

    echo "connection failed";
    // echo "<br>";
    // echo mysqli_connect_error();

}
// die("no connect found");
?>