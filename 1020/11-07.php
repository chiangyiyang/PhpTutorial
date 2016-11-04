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
    echo "<table width='400' border='1'><tr align='center'>";
    echo "<th>欄位名稱</th><th>類型</th><th>最大長度</th><th>長度</th></tr>";
    $i=0;
    while ($i<mysqli_num_fields($result)){
        $meta = mysqli_fetch_field_direct($result, $i);
        echo "<tr>";
        echo "<td>$meta->name</td>";
        echo "<td>$meta->type</td>";
        echo "<td>$meta->max_length</td>";
        echo "<td>$meta->length</td>";
        echo "</tr>";
        $i++;
    }
    echo "</table>";


}

mysqli_close($conn);
?>
</body>
</html>
