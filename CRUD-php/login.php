<?php
// insert data
$connection = mysqli_connect("localhost", "root", "", "loginapp");

if ($connection) {
    echo "<br>connection formed.";
} else {
    die("<br>connection not formed");
}
// the if condition below is opposite to that of the update condition
if (!isset($_GET['id']) && empty($_GET['id'])) {
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $passwords = $_POST['passwords'];

        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hashF_and_salt = $hashFormat . $salt;
        $encrypt_password = crypt($passwords, $hashF_and_salt);

        $query_insert = "INSERT INTO `users`(`id`, `username`, `passwords`) VALUES ('','$username','$encrypt_password')";

        $result_insert = mysqli_query($connection, $query_insert);
        if ($result_insert) {
            // echo "<br>Insert Query worked";
        } else {
            echo "<br>Insert Query Failed";
        }
    }
}

?>
<?php
// read data
$query_read = "SELECT * FROM `users`";
$result_read = mysqli_query($connection, $query_read);
?>

<?php
//mysql fetch to update data
$flag = 0; // just for checking the fetch data in html
if (isset($_GET['action']) && !empty($_GET['action']) && $_GET['action'] == 'u') {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id_fetch = $_GET['id'];
        $flag = 1;
        $query_fetch = "SELECT * FROM `users` WHERE id = $id_fetch";
        $query_fetch = mysqli_query($connection, $query_fetch);
        $result_fetch = mysqli_fetch_assoc($query_fetch);
    }
}
// $result_fetch = mysqli_fetch_assoc($query_fetch);

?>
<?php
// update data
echo "test3";
if (isset($_GET['id']) && !empty($_GET['id']) && isset($_POST['update']) && $_POST['update']) {

    echo "test";
    $username = $_POST['username'];
    $passwords = $_POST['passwords'];
    $id_update = $_GET['id'];
    $query_update = "UPDATE `users` SET `username`='$username',`passwords`='$passwords' WHERE id = $id_update";
    $result_update = mysqli_query($connection, $query_update);
    // Redirect
    header("Location: login.php");
}
?>

<?php
// delete data
if (isset($_GET['action']) && !empty($_GET['action']) && $_GET['action'] == 'd') {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id_delete = $_GET['id'];
        $query_delete = "DELETE FROM `users` WHERE id = $id_delete";
        $result_delete = mysqli_query($connection, $query_delete);
        // Redirect
        header("Location: login.php");
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    #table-id{
        white-space: pre-wrap;
    }
    a{
        color: white;
    }
    </style>
</head>
<body>

<div class="container">
    <div class="col-md-6">
        <form action="login.php<?php echo ($flag ==1) ? "?id=".$result_fetch['id'] : ""; ?>" method="post">
            <div class="form-group">
                <label for="username">User Name</label>

                <input type="text" class="form-control" name="username" value="<?php echo ($flag == 1) ? $result_fetch['username'] : ""; ?>">
                <br>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="passwords" value="<?php echo ($flag == 1) ? $result_fetch['passwords'] : ""; ?>" >
                <br>
            </div>
            <div class="form-group">
                <!-- <label for="submit">Submit</label> -->
                <input type="submit" class="btn btn-primary" name="submit">
                <input type="submit" class="btn btn-primary" name="update" value="update">
            </div>
        </form>
    </div>
</div>

<br>
<div id="table-id">
<table class="border border-primary m-3">
    <h1>Table for showing data</h1>
    <tr>
        <th class="format-table border border-primary">S.No</th>
        <th class="format-table border border-primary">UserName</th>
        <th class="format-table border border-primary">Passwords</th>
        <th class="format-table border border-primary">Edit</th>
        <th class="format-table border border-primary">Delete</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result_read)) {
    ?>
    <tr>
        <td class="format-table border border-primary"><?php echo $row['id']; ?></td>
        <td class="format-table border border-primary"><?php echo $row['username']; ?></td>
        <td class="format-table border border-primary"><?php echo $row['passwords']; ?></td>
        <td class="format-table border border-primary"><div class="btn btn-sm btn-primary m-3"><a href="?action=u&id=<?php echo $row['id']; ?>">Edit</a></div></td>
        <td class="format-table border border-primary"><div class="btn btn-sm btn-primary m-3"><a href="?action=d&id=<?php echo $row['id']; ?>">Delete</a></div></td>
    </tr>

    <?php
}
?>
<br>
</table>
<br>
</div>
</body>
</html>