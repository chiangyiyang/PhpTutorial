<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
print_r($_GET);
echo "<hr>";

if(isset($_GET["username"]))
    print "輸入的姓名為". $_GET["username"];
?>
</body>
</html>
