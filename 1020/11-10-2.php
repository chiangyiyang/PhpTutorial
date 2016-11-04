<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MySQL Connection #1</title>
</head>
<body>

<?php
$serverName = "localhost";
$userName = "root";
$password = "mary1234";
$database = "product";

//create database connection
$conn = mysqli_connect($serverName, $userName, $password, $database);

if(mysqli_connect_errno())
    echo "Fail to connect to mysql", mysqli_connect_errno();
else
    echo "建立成功<br>";

mysqli_query($conn, "SET NAMES utf8");

$sql = "SELECT * FROM `price` WHERE `category` = '主機板'";
//$sql = "SELECT * FROM `price`";

if($result = mysqli_query($conn, $sql)){

    $row1 = mysqli_fetch_row($result);
    $row2 = mysqli_fetch_row($result);
    $row3 = mysqli_fetch_row($result);
    $row4 = mysqli_fetch_row($result);
    $row5 = mysqli_fetch_row($result);

    echo $row2[3]."<br>";
    echo $row3[0]."<br>";
    mysqli_free_result($result);


}

mysqli_close($conn);
?>
</body>
</html>
