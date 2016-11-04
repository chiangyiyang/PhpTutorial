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
    echo "<TABLE border='1' align='center'>";

    echo "<TR>";
    while($meta = mysqli_fetch_field($result))
        echo "<TD>$meta->name</TD>";
    echo "</TR>";

    while($row = mysqli_fetch_row($result)){
        echo "<TR>";
//        foreach ($row as $item=>$value)
//            echo "<TD>$value</TD>";
        for($i = 0;$i < mysqli_num_fields($result);$i++)
            echo "<TD>$row[$i]</TD>";
        echo "</TR>";
    }

    echo "</TABLE>";

    mysqli_free_result($result);

}

mysqli_close($conn);
?>
</body>
</html>
