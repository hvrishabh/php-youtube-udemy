<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // echo "The user name is <b>" . $username . "</b>  password is<b>  " . $password. "</b>";
    // if($username && $password){
    //     echo $username;
    //     echo $password;
    // }else{
    //     echo "fields can not be blank";
    // }

    $conn = mysqli_connect("localhost","root","","loginapp");
    if($conn){
        echo "we are connected.";
    }else{
        die("database connection failed");
    }

    $query = "INSERT INTO users (username, passwords)";
    $query .= "VALUES('$username','$password')";

    $result = mysqli_query($conn, $query);
    if(!$result){
        die("query failed");
    }

     // Redirect
     header("Location: login_read.php");
}




echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-md-6">
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" name="username">
                <br>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
                <br>
            </div>
            <div class="form-group">
                <!-- <label for="submit">Submit</label> -->
                <input type="submit" class="btn btn-primary" name="submit">
            </div>
        </form>
    </div>
</div>
</body>
</html>