
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        td{
            border: dashed;
        }
    </style>
</head>
<body>
<?php

$grades = array(
    array(1, 2, 3),
    array(11, 22, 33),
    array(111, 222, 333)
);

echo "<table style='border: dotted'>";

foreach ($grades as $i) {
    echo "<tr>";
    foreach ($i as $j) {
        echo "<td>" . $j . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

?>
</body>
</html>