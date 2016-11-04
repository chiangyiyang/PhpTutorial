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

if($result = mysqli_query($conn, "SELECT DATABASE()")){
    $row = mysqli_fetch_row($result);
    print_r($row);
    echo "<br>Default database is ", $row[0];
    mysqli_free_result($result);
}


mysqli_close($conn);
?>
</body>
</html>
