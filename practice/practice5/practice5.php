<?php

function testdata($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST) && !empty($_POST)) {
    echo $_POST['name'];
    echo "<br>";
    echo $_POST['password'];
    echo "<br>";
    // echo $_POST['submit'];
    echo "<br>";

} else {
    echo "The values are empty";
    echo "<br>";
    echo "<br>";
}
$nameErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        // $flag = 1;
    } else {
        $name = testdata($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
<form name="myform" action="practice5.php" method="post"  onsubmit="return validateform()">
    Name: <input type="text" placeholder="enter your name" name="name">
    <span class="error"><?php echo $nameErr; ?></span><span id="errorName" class="error"></span><br><br>
    Password: <input type="password" placeholder="enter your password" name="password">
    <span id="errorPassword" class="error"></span>
    <input type="submit" name="submit">
</form>

<script>
    let error = document.getElementsByClassName("error");
console.log(error);



function validateform(){
var name=document.myform.name.value;
var password=document.myform.password.value;
const regexName = /^[a-zA-Z-' ]*$/;
let errorName = document.getElementById("errorName");
let errorPassword =document.getElementById("errorPassword");
console.log(errorName);


if (name==null || name==""){
//   alert("Name can't be blank");
  errorName.innerHTML  = "<div>Name can not be blank.</div>";
  errorName.style.color = "red";
  return false;
}else if(!name.match(regexName)){
    errorName.innerHTML  = "<div>Name must contain only alphabhets.</div>";
  errorName.style.color = "red";
    return false;
  }else if(password.length<6){
    errorPassword.innerHTML  = "<div>Password must be at least 6 characters long.</div>";
  errorName.style.color = "red";
  return false;
  }
}
</script>
</body>

</html>