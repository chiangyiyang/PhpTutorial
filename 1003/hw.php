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

echo "for  條件迴圈的九九乘法表<hr>";
for ($i = 2; $i < 10; $i++) {
    for ($j = 1; $j < 10; $j++) {
        echo $i." * ".$j." = ". $i * $j."<br>";
    }
    echo "<hr>";
}


echo "while  條件迴圈的九九乘法表<hr>";
$i = 2;
while ($i < 10) {
    $j = 1;
    while ( $j < 10) {
        echo $i." * ".$j." = ". $i * $j."<br>";
        $j++;
    }
    echo "<hr>";
    $i++;
}


echo "do while  條件迴圈的九九乘法表<hr>";
$i = 2;
do{
    $j = 1;
    do {
        echo $i." * ".$j." = ". $i * $j."<br>";
        $j++;
    }while ( $j < 10);
    echo "<hr>";
    $i++;
}while ($i < 10);



echo '使用&lttable&gt&lttd&gt&lttr&gt 的九九乘法表<hr>';
echo "<table style='border: solid'>";
for ($i = 2; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j < 10; $j++) {
        echo  "<td>" .$i." * ".$j." = ". $i * $j. "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>