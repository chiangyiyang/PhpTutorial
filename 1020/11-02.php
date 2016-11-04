<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MySQL Connection #2</title>
</head>
<body>

<?php
$serverName = "localhost";
$userName = "root";
$password = "mary1234";
$database = "product";

//create database connection
$conn = new mysqli($serverName, $userName, $password, $database);

if($conn->connect_error)
    echo "Fail to connect to mysql", $conn->connect_error;
else
    echo "建立成功<br>";

if($conn->select_db("class"))
    echo "資料庫改變成功<br>";
else
    echo "資料庫改變失敗<br>";

$conn->close();
?>
</body>
</html>
