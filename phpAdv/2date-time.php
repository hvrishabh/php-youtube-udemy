<?php

echo "Today is " . date("Y/m/d") . "<br>";
date_default_timezone_set("Asia/Kolkata");
echo "The time is " . date("h:i:sa"). "<br>";
echo("<br>");
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo("<br>");

$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo("<br>");
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
echo("<br>");echo("<br>");echo("<br>");echo("<br>");
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
echo("<br>");echo("<br>");echo("<br>");echo("<br>");

$d1=strtotime("saturday");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of aug.";