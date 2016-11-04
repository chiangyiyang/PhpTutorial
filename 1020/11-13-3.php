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

    while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
        echo "<TR>";
//        foreach ($row as $item=>$value)
//            echo "<TD>$value</TD>";

        echo "<td>".$row["no"]."</td>";
        echo "<td>".$row["category"]."</td>";   // <==Using keyword
        echo "<td>".$row[2]."</td>";            // <==Using index
        echo "<td>".$row["specification"]."</td>";
        echo "<td>".$row["price"]."</td>";
        echo "<td>".$row["date"]."</td>";
        echo "<td>".$row["url"]."</td>";

        echo "</TR>";
    }

    echo "</TABLE>";

    mysqli_free_result($result);

}

mysqli_close($conn);
?>
</body>
</html>
