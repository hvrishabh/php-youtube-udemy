<?php

// try catch for the connection

// try{

//     $db_name = "mysql:host=localhost;dbname=testing";
//     $username = "root";
//     $password = "";

//     $conn = new PDO($db_name, $username, $password);
// }catch(PDOException $e){
//     echo "The try code didn't worked<br>";
//     echo $e->getMessage();
// }

////////////////////////////////////////////

try {

    $db_name = "mysql:host=localhost;dbname=testing";
    $username = "root";
    $password = "";

    $conn = new PDO($db_name, $username, $password);

    $sql = $conn->prepare("SELECT * FROM students");
    $sql->execute();


    // $error = $sql->errorInfo();
    // // echo "<pre>";
    // // print_r($error);

    // if($error[1]){
    //     echo $error[2];
    // // echo $sql->errorCode();   // it shows the error code for the sql
    // }else{
    // $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result);
    // }

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result);

} catch (PDOException $e) {
    echo "The try code didn't worked<br>";
    echo $e->getMessage();
}

 // $error = $sql->errorInfo();
    // // echo "<pre>";
    // // print_r($error);

    // if($error[1]){
    //     echo $error[2];
    // // echo $sql->errorCode();   // it shows the error code for the sql
    // }else{
    // $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result);
    // }