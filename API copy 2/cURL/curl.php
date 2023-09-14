<?php
// cURL means client URL
// curl_init(); // to intialize the curl
// curl_setopt(); // used to send data
// curl_exec(); // to execute the curl
// curl_close(); // to close the curl

$ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, "http://localhost/php-adv/API/cURL/dummy.php?name=vishal");
curl_setopt($ch, CURLOPT_URL, "http://localhost/php-adv/API/cURL/dummy.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); //to save result into a variable, here result is stored into the $result variable.

$arr = ['name' => 'vishalPost'];
curl_setopt($ch, CURLOPT_POSTFIELDS, $arr); //to get the data in the form of POST method rahter then the get method.

$result = curl_exec($ch);
print_r($result);
curl_close($ch);


// ..............................2ND example............//


// $url = "https://pixabay.com/photos/tree-sunset-clouds-sky-silhouette-736885/";
// $image = "image.jpg";
// $fimage = fopen($image, 'w+');
// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_FILE, $fimage);
// curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
// curl_exec($ch);
// curl_close($ch);
// fclose($fimage);
