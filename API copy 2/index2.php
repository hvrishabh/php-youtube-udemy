<?php
$url = "http://localhost/php-adv/API/index1.php?key=asdfghjkl";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
// $result = json_decode($result); //returns data in the form of object.
$result = json_decode($result, true); //returning data in the form of array, pass the true argument in the json_decode() function.
// echo $result;
if (isset($result['status'])) {
    if ($result['status'] == true) {
        if (isset($result['result'])) {
            if ($result['result'] == true) {
                // echo "<pre>";
                // print_r($result['data']);
                ?>
                <table>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                    </tr>

                <?php
                foreach ($result['data'] as $list) {
                    echo
                        "<tr>" .
                        "<td>" . $list['id'] . "</td>" .
                        "<td>" . $list['name'] . "</td>" .
                        "<td>" . $list['email'] . "</td>" .
                        "</tr>";

                }
                ?>
                </table>
                <?php

            } else {
                echo ($result['data']);
            }
        }else{
            echo ($result['data']);
        }

    } else {
        echo ($result['data']);
        echo "status is not true <br>";
    }
} else {
    echo "API is not working";
}
?>