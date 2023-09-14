<?php

include "db.php";
header("Content-Type:application/json");
if (isset($_GET['key'])) {


    // $key = $_GET['key'];
    $key = mysqli_real_escape_string($conn, $_GET['key']);
    $checkRes = mysqli_query($conn, "SELECT * FROM api_token WHERE token ='$key' ");
    if (mysqli_num_rows($checkRes) > 0) {
        // $sql = "SELECT * FROM user WHERE id = 9";
        $checkRow = mysqli_fetch_assoc($checkRes);

        // print_r($checkRow);
        // exit;
        if ($checkRow['status'] == 1) {

            if($checkRow['hit_count'] >= $checkRow['hit_limit']){
                echo json_encode(['status' => false, 'data' => 'API hit limit exceeded']);
                die();

            }else{
                mysqli_query($conn, "UPDATE api_token set hit_count = hit_count+1 WHERE token='$key'");
            }

            $sql = "SELECT * FROM user ";
            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);
            // header("Content-Type:application/json");
            // echo $count;
            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $arr[] = $row;
                }
                echo json_encode(['status' => true, 'data' => $arr, 'result' => 'found']);

                // echo json_encode($arr);
                // echo "<pre>";
                // print_r($arr);
            } else {
                // echo "No data found";
                echo json_encode(['status' => true, 'msg' => "No data found", 'result' => 'not']);

            }
        }else{
            echo json_encode(['status' => false, 'data' => 'API key deactivated']);
        }

    } else {
        echo json_encode(['status' => false, 'data' => "Please provide Valid API key"]);
    }

} else {
    echo json_encode(['status' => false, 'data' => "Please provide API key"]);

}
