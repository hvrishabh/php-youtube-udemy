<?php

include("db.php");

// $sql = "SELECT * FROM user WHERE id = 9";
$sql = "SELECT * FROM user ";
$res = mysqli_query($conn, $sql);

$count = mysqli_num_rows($res);
header("Content-Type:application/json");
// echo $count;
if($count > 0){
    while($row = mysqli_fetch_assoc($res)){
        $arr[] = $row;
    }
    echo json_encode(['status'=>true,'data'=>$arr,'result'=>'found']);

    // echo json_encode($arr);
    // echo "<pre>";
    // print_r($arr);
}else{
    // echo "No data found";
    echo json_encode(['status'=>true,'msg'=>"No data found",'result'=>'not']);

}