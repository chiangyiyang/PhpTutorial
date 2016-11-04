<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Homework</title>
    <style>
        td {
            border: solid;
        }
    </style>
</head>
<body>

<?php

//$arr = array("color" => "黑色", "name" => "Mary", "shape" => "三角形", 100);
$arr["color"]="black";
$arr["name"]="Mary";
$arr["shape"]="三角形";
$arr[]=100;
$arr[]=200;

$arr["type"]="PHP";
$arr["type"]="PHP";

unset($arr[0]);
unset($arr["type"]);

foreach ($arr as $key => $value) echo "$key => $value<br>";

//if (isset($arr["color"]))
//    echo "\"color\" is set!<br>";
//else
//    echo "\"color\" is not set!<br>";
//unset($arr["color"]);
//if (isset($arr["color"]))
//    echo "\"color\" is set!<br>";
//else
//    echo "\"color\" is not set!<br>";





?>
</body>
</html>