<?php
$id_data = $_GET['id'];
$conn = mysqli_connect("localhost","root","","loginapp");
if($conn){
    echo "connected for update <br>";
}else{
    die("connection not formed");
}

$query = "SELECT * FROM users WHERE id = $id_data" ;
// $query .= "WHERE id = $id_data";
$result = mysqli_query($conn, $query);

$result_data = mysqli_fetch_assoc($result);

print_r($result_data);

?>
<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_data = $_GET['id'];

$query_upadte = "UPDATE `users` SET `id`='$id_data',`username`='$username',`passwords`='$password' WHERE id = $id_data";
$result_update = mysqli_query($conn, $query_upadte);

  // Redirect
  header("Location: login_read.php");
}


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
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>?id=<?php echo $result_data['id']; ?>" method="post">
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" name="username" value="<?php echo $result_data['username']; ?>">
                <br>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo $result_data['passwords']; ?> ">
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