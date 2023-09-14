<?php

try {
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "phppdo";

    //create a PDO instance/object to make a connection

    $dbcon = new PDO("mysql:host=$server; dbname=$db", $user, $password);

    $dbcon->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    // // // 1.
    // $inserquery = "INSERT INTO `studentstable`(`sname`, `age`, `class`, `gender`) VALUES (:sname, :age, :class, :gender)";
    // $stmt = $dbcon->prepare($inserquery);

    // $stmt->bindParam(':sname', $sname);
    // $stmt->bindParam(':age', $age);
    // $stmt->bindParam(':class', $class);
    // $stmt->bindParam(':gender', $gender);
    // $sname = "thapatechnical4";
    // $age = 16;
    // $class = 12;
    // $gender = "male";
    // $stmt->execute();

// // // 2.
// // // INSERT
//     $inserquery = "INSERT INTO `studentstable`(`sname`, `age`, `class`, `gender`) VALUES (:sname, :age, :class, :gender)";
//     $stmt = $dbcon->prepare($inserquery);
//     $sname = "thapatechnical4";
//     $age = 16;
//     $class = 12;
//     $gender = "male";
//     $stmt->execute(['sname'=>$sname,'age'=>$age,'class'=>$class,'gender'=>$gender]);

// // // 3.
//     $idnum = 12;
//     $sname = "thapatechnical4";
// // // SELECT
//     $sql = "SELECT * FROM studentstable where id=? and sname=?";
//     $stmt = $dbcon->prepare($sql);
//     $stmt->execute([$idnum, $sname]);
//     $result = $stmt->fetch();

//     echo "My name is ".$result->sname. " and my age is " .$result->age;
//     echo "<br>";


// // // 4.
// // // SELECT
//     $sql = "SELECT * FROM studentstable";
//     $stmt = $dbcon->prepare($sql);
//     $stmt->execute();

//     while ($result = $stmt->fetch()) {
//         echo "My name is " . $result->sname . " and my age is " . $result->age;
//         echo "<br>";
//     }


// // // 5.
// $sql = "SELECT * FROM studentstable";
// $stmt = $dbcon->prepare($sql);
// $stmt->execute();
// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);    // using fetchAll not the fetch and overriding with PDO::FETCH_ASSOC to get the arrayed output rahter than the object output

// foreach( $result as $val){
//         // echo "<pre>";
//         // print_r($val);
//     echo "My name is " . $val['sname'] . " and my age is " . $val['age'];
//             echo "<br>";
// }

// // //6.
// // // update
//     $id = 4;
//     $sname = "test test";
//     $updatequery = "UPDATE studentstable set sname=:sname where id=:id";
//     $stmt = $dbcon->prepare($updatequery);
//     $stmt->bindParam(':id', $id);
//     $stmt->bindParam(':sname', $sname);
//     $stmt->execute();


// // // 7.
// // // Deleting
// $id = 4;
// $sname = "test test";
// $deletequery = "DELETE FROM studentstable WHERE id=? ";
// $stmt = $dbcon->prepare($deletequery);
//     $stmt->execute([$id]);


} catch (PDOException $e) {
    echo "Eroor : " . $e->getMessage();
}

if ($dbcon) {
    echo "connection is working";
} else {
    echo "connection is not working good";
}
