<?php

try {
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "phppdo";

    //create a PDO instance/object to make a connection

    $dbcon = new PDO("mysql:host=$server; dbname=$db", $user, $password);

    $dbcon->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);         // NOW WE DONT have to write the following command for query as we did below like
    // // $result = $statement->fetch(PDO::FETCH_OBJ);

////////////////////////////////////////

// //   Insert Querry with PDO

    // $inserquery = "INSERT INTO `studentstable`(`sname`, `age`, `class`, `gender`) VALUES ('vinod','17','12','male')";
    // $dbcon->query($inserquery);
    // //or
    // $dbcon->exec($inserquery);

////////////////////////////////////////

// //   Select Querry with PDO

    $selectquery = "SELECT * FROM studentstable WHERE id = 2 ";
    $statement = $dbcon->query($selectquery);

    // // 1.
    // $result = $statement->fetch(PDO::FETCH_ASSOC);
    // echo "<br>";
    // echo $result["sname"];
    // echo "<br>";

    // // 2.
    $result = $statement->fetch();
    // $result = $statement->fetch(PDO::FETCH_OBJ);  // if we want to fetch the stdClass object
    // echo $result->sname;    // excessing the objects like this
    // echo "<br>";

    // // 3.
    // $result = $statement->fetch(PDO::FETCH_NUM); //if we want to fetch it using the index numbers


    echo "<pre>";
    print_r($result);
    echo "<br>";

} catch (PDOException $e) {
    echo "Eroor : " . $e->getMessage();
}

if ($dbcon) {
    echo "connection is working";
} else {
    echo "connection is not working good";
}
