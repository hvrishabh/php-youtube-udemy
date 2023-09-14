<?php

include 'db.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (mysqli_num_rows(mysqli_query($connection, "SELECT * FROM user WHERE username='$username'")) > 0) {
        echo "username already present";
    } else {
        // echo "no user found";
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($connection, "INSERT INTO user(name,username,password) values ('$name','$username','$password')");
        echo "Thanks";
        header("location:login.php");
    }
}
?>
<h1>Registration</h1>
<form action="" method="post">
    <table>
        <tr>
            <td>Name </td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
        <td>Username</td>
        <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>
