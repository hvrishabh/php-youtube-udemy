<?php

include 'db.php';
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($connection, "SELECT * FROM user WHERE username='$username'");

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // print_r($row['password']);
        // exit;
        $verify = password_verify($password, $row['password']);
        if ($verify == 1) {
            echo "Done";
            $_SESSION["IS_LOGIN"] = true;
            $_SESSION['UNAME'] = $row['name'];

            header('location:dashboard.php');
            die();
        } else {
            echo "Please enter correct password";
        }
    } else {
        echo "please enter the correct username";
    }
}

?>
<h1>login
</h1>
<form action="" method="post">
    <table>

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
