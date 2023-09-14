<?php

    $conn = mysqli_connect("localhost","root","","loginapp");
    if($conn){
        echo "we are connected.";
    }else{
        die("database connection failed");
    }

    $query = "SELECT * FROM users";


    $result = mysqli_query($conn, $query);
    if(!$result){
        die("query failed");
    }

echo "<br>";
  // Redirect
//   header("Location: login_read.php");

?>

<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id_data = $_GET['id'];

    $query_delete = "DELETE FROM `users` WHERE id = $id_data";
    $result_delete = mysqli_query($conn, $query_delete);
    if(!$result){
        die("query failed");
    }

      // Redirect
  header("Location: login_read.php");
}
echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .t-border{
        border: 2px solid blue;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-md-6">
    <button><a href="login_create.php">Add data</a></button>
    <table class="t-border" cellpadding="20px">
    <tr>
        <th >Id</th>
        <th  class="t-border">username</th>
        <th  class="t-border">passwords</th>
        <th class="t-border">Edit</th>
        <th class="t-border">Delete</th>
    </tr>
    <?php
    echo "<pre>";
    // $fetchResult = mysqli_fetch_all($result);
    // foreach($fetchResult as $row){
    //     print_r($row);
    // }

    while($row = mysqli_fetch_assoc($result)){
        ?>

        <tr>
            <td  class="t-border" ><?php echo $row["id"]; ?></td>
            <td  class="t-border"  ><?php echo $row['username']; ?></td>
            <td  class="t-border" ><?php echo $row['passwords'];?></td>
            <td  class="t-border" ><a href="login_update.php?id=<?php echo $row['id'] ?>">edit</a></td>
            <td  class="t-border" ><a onclick="return confirmfunction()" href="?id=<?php echo $row['id'] ?>"><?php ?>Delete</a></td>

        </tr>

        <br>

        <?php
    }
 ?>
 </table>
    </div>
</div>
<script>
    function confirmfunction(){
       var confirmaction = confirm("Do you want to Delete this item!");
       if(confirmaction ==true){
        return true;
       }else{
        return false;
       }
    }
</script>
</body>
</html>

<!--

echo "<tr>";

echo "<td> $row[id]</td>";
echo "<td> $row[username]</td>";
echo "<td> $row[passwords]</td>";

echo "</tr><br>"; -->
