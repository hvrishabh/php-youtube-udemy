<?php

try {
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "phppdo";

    //create a PDO instance/object to make a connection

    $dbcon = new PDO("mysql:host=$server; dbname=$db", $user, $password);

    $dbcon->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    // // PREPARED // TO secure mysql from SQL INJECTIONS
    // Name Parameter

    // $idnum = 5;
    // $selectquery = "SELECT * FROM studentstable WHERE id=:idnum ";

    // $statement = $dbcon->prepare($selectquery);
    // $statement->bindParam(':idnum', $idnum);
    // $statement->execute();
    // // //$statement->execute("idnum"=>$idnum);
    // $result = $statement->fetch();

    // echo "<pre>";
    // print_r($result);
    // echo "<br>";

    //////////////////////////////
    // // positional parameter

    $idnum = 5;
    $name = "vinod";
    $selectquery = "SELECT * FROM studentstable WHERE id=? && sname=? ";

    $statement = $dbcon->prepare($selectquery);
    // $statement->bindParam($idnum,$name);
    $statement->execute([$idnum,$name]);
    $result = $statement->fetch();

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
